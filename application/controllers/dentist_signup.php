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
		$this->form_validation->set_rules('email_sign', 'Email Address', 'trim|required|valid_email');
		$this->form_validation->set_rules('email_sign1', 'Confirm Email Address', 'trim|required|valid_email');		
		$this->form_validation->set_rules('pass1', 'Password', 'trim|required|min_length[6]|xss');
		$this->form_validation->set_rules('pass2', 'Confirm Password', 'trim|required|matches[pass1]|xss');
		
		if ($this->form_validation->run() == false) {
			//return false;
			$data['body'] = $this->load->view('dentist_signup_view', '', true);
			$data['header'] = $this->load->view('homepage/header', '', true);
			$data['identifier'] = true;
            $this->load->view('homepage', $data);
		} else {
			//return true;
			$data['body'] = $this->load->view('dentist_signup_view', '', true);
			$data['header'] = $this->load->view('homepage/header', '', true);
			$data['identifier'] = true;
            $this->load->view('homepage', $data);
		}			
	}
	
	public function process_registration()
	{
		if($this->input->post('email_sign'))
		{
			$query = $this->db->get_where('dentist_list', array('email' => $this->input->post('email_sign')));
			
			if ($query->num_rows() > 0) {
				// echo "already registered";
				$error_code = "email registered";
			}else
			{
				$dentist_data = array(
					// 'id' => $this->input->post('id'),
					'first_name' => $this->input->post('fname'),
					'sur_name' => $this->input->post('lname'),
					'middle_name' => $this->input->post('middle'),
					'email' => $this->input->post('email_sign'),
					'dentist_pass' => md5($this->input->post('pass1')),
					'register_date' => date('Y-m-d')
				);
				
				$this->db->insert('dentist_list', $dentist_data);
				$error_code = 'success';
			}
		}
		return $error_code;
	}
	
	function verification()
	{
		$email1 = $this->input->post('email_sign');
		$valid = $this->process_registration();
		
		$passkey = md5($email1);
		
		$this->db->where('email', $email1);
		
		$query = $this->db->get('dentist_list');
		$row = $query->row_array();
		
		if($valid == 'success')
		{
			$message = '
				Thank you for signing up!<br> 
				Before we can give you access to all of Medix&#39;s features, please confirm your account by clicking the button/link below.<br>
				<a href="'.base_url('login?valid=success&accessNumber='.$row['id']).'"> Click here to activate.</a>
				
			';
			/* <a href="'.base_url().'login/confirm?email='.$email1.'&passkey='.$passkey.'&valid=success"> Click here to activate.</a> */
			$this->load->library('email');
			
			$config['protocol'] = 'smtp';
			$config['smtp_host'] = 'mail.mydentistpal.com';
			$config['smtp_user'] = 'info@mydentistpal.com';
			$config['smtp_pass'] = 'mdp2468';
			$config['smtp_port'] = 26;
			$config['mailtype'] = 'html';
			
			$this->email->initialize($config);
			
			$this->email->from('info@medix.ph', 'Medix');
			$this->email->to($email1); 
			$this->email->subject("Medix Account Confirmation to $email1");
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
			
			echo 'success';
		}else
		{
			echo 'email registered';
		}
	}
	
	function confirm()
	{
		$email1 = $this->input->get('email_sign');
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