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

		$data['title'] = 'My Dentist Pal - Digitize your dental management practice. A full-featured online tool that integrates dental practice management and confidential patient clinical charting, which dentist can access wherever they are.';
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
				if(trim($row['patient_surname']) != null)
				{
					$naming = ucwords($row['patient_surname']).', '.ucwords($row['patient_name']).' '.ucwords($row['patient_middle_name']);
				}else
				{
					$naming = ucwords($row['patient_name']);
				}
				$message = '
					<p><h3>Dr. '.ucwords($query_den['first_name']).' '.ucwords($query_den['middle_name']).' '.ucwords($query_den['sur_name']).'</h3></p>
					<p><span>Patient Name:&nbsp;</span><span>'.$naming.'</span></p>
					<p><span>Patient access email:&nbsp;</span><span>'.$email.'</span></p>
					<p><span>Patient Password:&nbsp;</span><span>'.$password.'</span></p>
					<p><a href="'.base_url('login/patient').'" target="_BLANK">Log in</a></p>
				';
				$subject = 'Patient Access: '.$naming.' From: '.ucwords($query_den['first_name']).' '.ucwords($query_den['middle_name']).' '.ucwords($query_den['sur_name']);
				
				
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
