<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dentist_Login extends CI_Controller {

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
		$data['title'] = 'Medix Dental - Dentist Login';
		$data['header'] = $this->load->view('homepage/header', '', true);
		$data['body'] = $this->load->view('login/dentist_login','',true);
		$this->load->view('homepage', $data);
		
	}
	
	function patient()
	{
		$data['title'] = 'Medix Dental - Patient Login';
		$data['header'] = $this->load->view('homepage/header', '', true);
		$data['body'] = $this->load->view('login/patient_login','',true);
		$this->load->view('homepage', $data);
		
	}
	
	function check_login()
	{
		$email = $this->input->post('input_email');
		$pass = $this->input->post('input_pass');
		$pass = md5($pass);
		
		$this->db->where('email',$email);
		$this->db->where('dentist_pass',$pass);
		$query = $this->db->get('dentist_list');
		if($query->num_rows() > 0)
		{
			$row = $query->row_array();
			$newdata = array(
                   'email'  			=> $row['email'],
                   'id'     			=> $row['id'],
                   'license_number'     => $row['license_number'],
                   'logged_in' 			=> TRUE
            );
			$this->session->set_userdata($newdata);  
			   
			echo 'success';
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
		$this->db->where('password',$pass);
		$query = $this->db->get('patient_list');
		if($query->num_rows() > 0)
		{
			echo 'success';
		}
		else
		{
			echo 'denied';
		}
	}
}