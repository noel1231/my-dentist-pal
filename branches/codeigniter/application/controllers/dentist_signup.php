<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dentist_Signup extends CI_Controller {
	
	function __construct() {
		parent::__construct();	
		// $this->load->library('phpmailer/PHPMailer');
		$this->load->database();
  	}
	
	function index()
	{	
		$this->set_pages_rules();
		// $this->process_registration();
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
		} else {
			//return true;
			$data['body'] = $this->load->view('dentist_signup_view', '', true);
			$data['header'] = $this->load->view('homepage/header', '', true);
			$this->load->view('homepage', $data);
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
		
		$this->dentist_signup_model->register_dentist($data);
		
	}
	
	function verification()
	{
		$this->process_registration();
		$email1 = $this->input->post('email1');
		$passkey = md5($email1);
		$this->db->where('email', $email1);
		
		$query = $this->db->get('dentist_list');
		
		if($query)
		{
			$message = '
				Thank you for signing up!<br> 
				Please click the link below to verify and activate your account.<br>
				<a href="'.base_url().'dentist_signup/confirm?email='.$email1.'&passkey='.$passkey.'"> Click here to activate.</a>
			';

			$this->load->library('email');
			
			$config['protocol'] = 'smtp';
			$config['smtp_host'] = 'mail.mydentistpal.com';
			$config['smtp_user'] = 'info@mydentistpal.com';
			$config['smtp_pass'] = 'mdp2468';
			$config['smtp_port'] = 26;
			$config['mailtype'] = 'html';
			
			$this->email->initialize($config);
			
			$this->email->from('info@mydentistpal.com', 'MyDentistPal');
			$this->email->to($email1); 
			$this->email->subject("Confirmation from MyDentistPal to $email1");
			$this->email->message($message);	

			$sentmail = $this->email->send();
			
			if ($sentmail) {
				$update_array = array(
					'forgot_key' => $passkey
				);
				$this->db->where('email', $email1);
				$this->db->update('dentist_list', $update_array);
				$message_status = "Yes";		
			} else {
				$message_status = "No";
			}
			
		}
	}
	
	function confirm()
	{
		$email1 = $this->input->get('email');
		$passkey = $this->input->get('passkey'); 
			$update_array = array(
				'status' => 1,
			);
			$this->db->where('email', $email1);
			$this->db->where('forgot_key', $passkey);

			$this->db->update('dentist_list', $update_array);
			
			redirect(base_url('login'));
				
	}
	
}