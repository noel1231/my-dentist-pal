<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Forgot_Password extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
		$this->load->database();
	}

	public function index()
	{
		$data['body'] = $this->load->view('forgot_password', '', true);

		if($this->input->get('key')) {
			$data = $this->password_reset($this->input->get());
			$data['body'] = $this->load->view('reset', $data, true);
		}

		if($this->input->post('submit') == 'CONTINUE') {
			$callback = $this->password_verification($this->input->post());
			$data['error'] = $callback;
	        $data['body'] = $this->load->view('forgot_password', $data, true);
		}

		$data['title'] = 'Medix Dental - Forgot Password';
		


		$data['header'] = $this->load->view('homepage/header', '', true);
		$this->load->view('homepage', $data);
	}

	private function password_reset($form_data = null) {
		if($form_data != null) {
			$key=$this->input->get('key');	

			if($this->input->post('submit')) {
				$pass=$this->input->post('pass1');
				$pass2=$this->input->post('pass2');
				if($pass==$pass2) {
					$update_array = array(
						'dentist_pass' => md5($pass)
					);
					$this->db->where('forgot_key', $key);

					// if($this->db->update('dentist_list', $update_array)){
						$message['error']="Password already change";
						$message['return']="Click here to return to login page";
					// }
					return $message;
				}
			}
		}
	}




	private function password_verification($form_data = null) {

		if($form_data != null) {

			$username = $form_data['username'];

			$this->db->where('email', $username);
			$sql = $this->db->get('dentist_list');
			if($sql->num_rows() > 0) {

				$row = $sql->row_array();

					$email=$row['email'];
					$id=$row['id'];
					$fname=$row['first_name'];
					$lname=$row['sur_name'];
					$mname=$row['middle_name'];
					$gender=$row['dentist_gender'];

				if($gender=="male") {
					$text="Mr.";
				} else if($gender=="female") {
					$text="Ms.";	
				}

				$confirm = md5(uniqid(rand(), true));

				/* send email */
				$this->load->library('email');

				$config['protocol'] = 'smtp';
				$config['smtp_host'] = 'mail.mydentistpal.com';
				$config['smtp_user'] = 'info@mydentistpal.com';
				$config['smtp_pass'] = 'mdp2468';
				$config['smtp_port'] = '26';
				$config['smtp_timeout'] = '10';
				$config['mailtype'] = 'html';
				$config['charset'] = 'iso-8859-1';

				$this->email->initialize($config);

				$this->email->from('info@mydentistpal.com', 'My Dentist Pal');
				$this->email->to($email);
				// $this->email->cc('another@another-example.com');
				// $this->email->bcc('them@their-example.com');

				$this->email->subject('Reset account password');
				$this->email->message('
					<table cellspacing="0" cellpadding="0" border="0">
						<tr><td>
							<h2 style="font-size:16px;font-family:Arial;color:#333;">Good day &nbsp;'.$text.'&nbsp;'.$lname.',&nbsp;'.$fname.'</h2>
						</td></tr>
						<tr><td style="padding-top:20px;padding-left:10px;">
							<a href="'.base_url().'forgot_password?key='.$confirm.'">Click here to reset your password.</a>
						</td></tr>
					</table>
				');

				if($this->email->send()) {
					$message = "Email has been sent to &nbsp;".$email."<br>Please check your email to change your password.";
					$update_array = array(
						'forgot_key' => $confirm
					);
					$this->db->where('id', $id);
					$this->db->update('dentist_list', $update_array);
				}

				// echo $this->email->print_debugger();

			} else {
				$message = "Not a valid user";
			}
			return $message;
		}
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */