<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Patient_access extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->library('session');
		$this->load->library('form_validation');
		$this->load->database();
		$this->load->library('email');
		$this->load->library('image_lib');
		$this->load->library('cart');
		$this->load->library('encrypt');
	}
	
	function index()
	{
		if($this->session->userdata('id')) {
			$data['sess_id'] = $this->session->userdata('id');
		} else {
			redirect(base_url().'login');
		}

		$this->db->where('id', $data['sess_id']);
		$qdentist_list = $this->db->get('dentist_list');
		$rdentist_list = $qdentist_list->row_array();

		
		$data = $rdentist_list;

		$data['title'] = 'Medix Dental - Patient Dashboard';
		$data['header'] = $this->load->view('homepage/header', '', true);

		$data['dashboard_title'] = 'Patients Access';
		$data['dashboard_content'] = $this->load->view('patient_manage', $data, true);

		$data['body'] = $this->load->view('dentist_dashboard', $data, true);
		$this->load->view('homepage', $data);
	}
	
	function patient_access_account()
	{
		$p_id = $this->input->post('patient_id');
		$email = $this->input->post('emailAccess');
		$password = $this->input->post('emailPass');
		$pass = md5($password);
		
		$button = $this->input->post('submit_access');
		
		$this->db->where('id',$p_id);
		$query = $this->db->get('patient_list');
		
		if($button == 'save')
		{
			if($query->num_rows() > 0)
			{
				$data_access  = array(
					'email' => trim($email),
					'keyword' => $pass
				);
				$this->db->where('id',$p_id)->update('patient_list',$data_access);
			}
			echo 'save';
		}else
		{
			if($query->num_rows() > 0)
			{
				$data_access  = array(
					'email' => trim($email),
					'keyword' => $pass
				);
				$this->db->where('id',$p_id)->update('patient_list',$data_access);
			}
			
			$config['protocol'] = 'smtp';
			$config['smtp_host'] = 'mail.mydentistpal.com';
			$config['smtp_user'] = 'info@mydentistpal.com';
			$config['smtp_pass'] = 'mdp2468';
			$config['smtp_port'] = '26';
			$config['smtp_timeout'] = '10';
			$config['mailtype'] = 'html';
			$config['charset'] = 'iso-8859-1';

			$this->email->initialize($config);
			
			$row = $query->row_array();
			
			$this->db->where('id',$row['dentist_id']);
			$query_den = $this->db->get('dentist_list')->row_array();
			if($query->num_rows() > 0)
			{
				$naming = ucwords($row['patient_name']);
			
				$message = '
					<h3>Hi! '.ucwords($row['patient_first_name']).' '.ucwords($row['patient_last_name']).'</h3>
					<p>To check your dental records, you can <a href="'.base_url('login/patient').'" target="_BLANK">log-in</a> here using the details below:</p>
					<p style="margin-bottom:0;"><span>Email:&nbsp;</span><span>'.$email.'</span></p>
					<p style="margin-top:0;"><span>Password:&nbsp;</span><span>'.$password.'</span></p>
					<p>Thank you so much!</p>
					<p>From,</p>
					<p style="margin-bottom:0;margin-top:0;">'.$query_den['first_name'].' '.$query_den['middle_name'].' '.$query_den['sur_name'].'</p>
					<p style="margin-top:0;"></p>
				';
				$subject = 'Dental Records from '.ucwords($query_den['first_name']).' '.ucwords($query_den['middle_name']).' '.ucwords($query_den['sur_name']);
				
				
				$this->email->from('info@medix.ph', 'Medix Dental');
				$this->email->to($email);
				$this->email->subject($subject);
				$this->email->message($message);
				if($this->email->send())
				{
					echo 'email';
				}
			}
		}
		
	}
}
?>
