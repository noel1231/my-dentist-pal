<?php //if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dentist_Signup extends CI_Controller {
	
	function __constructor() {
		parent::__constructor();	
		//$this->load->helper(array('form', 'url'));
		//$this->load->library("form_validation");
  	}
	
	function index() {	
		
		$this->set_pages_rules();
		$this->process_registration();
   	}
	
	function set_pages_rules()
	{
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		
		$this->form_validation->set_rules('fname', 'First name', 'required');
		$this->form_validation->set_rules('lname', 'Last name', 'required');
		$this->form_validation->set_rules('middle', 'Middle name', 'required');
		$this->form_validation->set_rules('email1', 'Email Address', 'trim|required|valid_email');
		$this->form_validation->set_rules('email2', 'Confirm Email Address', 'trim|required|valid_email');		
		$this->form_validation->set_rules('pass1', 'Password', 'trim|required|min_length[6]|xss');
		$this->form_validation->set_rules('pass2', 'Confirm Password', 'trim|required|matches[pass1]|xss');
		
		
		if ($this->form_validation->run() == false) {
			//return false;
			$data['body'] = $this->load->view('dentist_signup_view', '', true);
			$data['header'] = $this->load->view('homepage/header', '', true);
			$this->load->view('homepage', $data);
			//echo "<div class='alert alert-danger' id='alert'>Registration Failed. Error in member detail information.</div>";
		} else {
			//return true;
			$data['body'] = $this->load->view('dentist_signup_view', '', true);
			$data['header'] = $this->load->view('homepage/header', '', true);
			$this->load->view('homepage', $data);
		//echo "<divclass='alert alert-success'>Registration success..</div>";
			
		}			
	}
	
	public function process_registration()
	{
		$this->load->model('dentist_signup_model');
		
		$data['id'] = rtrim($this->input->post('id'));
		$data['d_fname'] = rtrim($this->input->post('fname'));
		$data['d_sname'] = rtrim($this->input->post('lname'));
		$data['d_mname'] = rtrim($this->input->post('middle'));
		$data['d_email'] = rtrim($this->input->post('email1'));
		$data['d_password'] = rtrim($this->input->post('pass1'));
		//$data['d_register_date'] = rtrim($this->input->post('date_reg'));
		//$data['d_bmonth'] = $this->input->post('bmonth');
		//$data['d_bday'] = $this->input->post('bday');
		//$data['d_byear'] = $this->input->post('byear');
		//$data['d_gender'] = $this->input->post('gender');
		
		$this->dentist_signup_model->register_dentist($data);
		
	}
	
}