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
		$data['title'] = 'Medix Dental - Dentist Login';
		$data['header'] = $this->load->view('homepage/header', '', true);
		$data['body'] = $this->load->view('login/dentist_login','',true);
		$this->load->view('homepage', $data);
	}
	
	function patient()
	{
                $data['identifier'] = true;
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

	function forgot_password()
	{
		$return = '';
		
		$email = $this->input->post('forgot_email');
		$this->db->where('email',$email);
		$query = $this->db->get('dentist_list');
		$row = $query->row_array();
		$keyType = md5(time());
		
		if($query->num_rows() > 0)
		{
			$return = 'success';
			$data_array = array(
				'forgot_key'=>$keyType
			);
			/* update database */
			$this->db->where('email',$email)->update('dentist_list',$data_array);
			
			/* send email */
			$message = '
				Good Day!<br> 
				Please confirm to create new password by clicking the button/link below.<br>
				<a href="'.base_url('login?reset='.$row['id'].'&accessNumber='.$keyType).'"> Click here to activate.</a>
			';
			
			$config['protocol'] = 'smtp';
			$config['smtp_host'] = 'mail.mydentistpal.com';
			$config['smtp_user'] = 'info@mydentistpal.com';
			$config['smtp_pass'] = 'mdp2468';
			$config['smtp_port'] = 26;
			$config['mailtype'] = 'html';
			
			$this->email->initialize($config);
			
			$this->email->from('info@medix.ph', 'Medix');
			$this->email->to($email); 
			$this->email->subject("Medix Account Confirmation to ".$email);
			$this->email->message($message);
			
			$sentmail = $this->email->send();
			echo $sentmail;
		}else
		{
			$return = 'email not found';
			echo $return;
		}
		
	}
	
	function password_reset() 
	{
		extract($this->input->post());
		$query = $this->db->where('id', $accessId)->where('forgot_key', $accessKey)->get('dentist_list');
		
		if($query->num_rows() > 0)
		{
			$data = array(
				'dentist_pass' => md5($new_password),
				'forgot_key' => md5(time())
			);
			$this->db->where('id', $accessId)->update('dentist_list', $data);
			
			echo "true";
		}else
		{
			echo "false";
		}
			
	}
	
	function resend_email()
	{
		// print_r($this->input->post());
		$email_resend = $this->input->post('resend_email');
		$passkey = md5($email_resend);
		// echo $email_resend;
		
		$query = $this->db->where('email', $email_resend)->get('dentist_list');
		$row = $query->row_array();
		if($query->num_rows() > 0)
		{
					
			$message = '
				Email resend!<br> 
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
			$this->email->to($email_resend); 
			$this->email->subject("Medix Account Confirmation to $email_resend");
			$this->email->message($message);	

			$sentmail = $this->email->send();
			
			if($sentmail)
			{
				$data = array(
					'forgot_key' => $passkey				
				);
				$this->db->where('email', $email_resend)->update('dentist_list', $data);
				$message_status = "Yes";
			}else
			{
				$message_status = "No";
			}
			
			echo 'resend success';
		}else
		{
			echo 'email not found';
		}
		
	}
}