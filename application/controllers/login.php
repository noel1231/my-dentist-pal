<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

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
		if(!$this->db->field_exists('status', 'dentist_list')) {
			$this->db->query('ALTER TABLE `dentist_list` ADD `status` INT NOT NULL');
		}

		if(isset($_GET['accessNumber']))
		{
			if($_GET['accessNumber'])
			{
				$id = $_GET['accessNumber'];
				$query1 = $this->db->where('id',$id)->where('status',1)->get('dentist_list');
				if($query1->num_rows() <= 0)
				{
					$data_array = array(
						'status' => 1
					);
					$this->db->where('id',$id)->update('dentist_list',$data_array);
				}
			}
		}
                $data['identifier'] = true;
		$data['title'] = 'My Dentist Pal - Digitize your dental management practice. A full-featured online tool that integrates dental practice management and confidential patient clinical charting, which dentist can access wherever they are.';
		$data['header'] = $this->load->view('homepage/header', '', true);
		$data['body'] = $this->load->view('login/dentist_login','',true);
		$this->load->view('homepage', $data);
	}
	
	function patient()
	{
                $data['identifier'] = true;
		$data['title'] = 'My Dentist Pal - Digitize your dental management practice. A full-featured online tool that integrates dental practice management and confidential patient clinical charting, which dentist can access wherever they are.';
		$data['header'] = $this->load->view('homepage/header', '', true);
		$data['body'] = $this->load->view('login/patient_login','',true);
		$this->load->view('homepage', $data);
		
	}
	
	function  check_login()
	{
		$email = $this->input->post('input_email');
		$pass = $this->input->post('input_pass');
		$pass = md5($pass);
		
		// if($email != 'demo@mydentistpal.com') {
			// $this->db->where('status', 1);
		// }

			$this->db->where('email', $email);
			$this->db->where('dentist_pass', $pass);
			$query = $this->db->get('dentist_list');
		if($query->num_rows() > 0)
		{
			$row1 = $query->row_array();
			if($row1['status'] == 1)
			{
				$row = $query->row_array();
				$newdata = array(
					   'email'  			=> $row['email'],
					   'id'     			=> $row['id'],
					   'license_number'     => $row['license_number'],
					   'logged_in' 			=> TRUE
				);
				$this->session->set_userdata($newdata);  
				   
				redirect('dentist_dashboard');
			}else
			{
				echo 'not verify';
			}
		}
		else 
		{
			echo 'denied';
		}
	}	
	
	function patient_login()
	{
		$email = $this->input->post('input_email');
		$pass = $this->input->post('input_pass');
		$pass = md5($pass);
		
		$this->db->where('email',$email);
		$this->db->where('keyword',$pass);
		$query = $this->db->get('patient_list');
		$row = $query->row_array();
		if($query->num_rows() > 0)
		{
			echo $row['id'];
			$data = array(
				'last_login'=> date('Y-m-d',time())
			);
			$this->db->where('email',$email)->update('patient_list',$data);
		}
		else
		{
			echo 'denied';
		}
	}

}