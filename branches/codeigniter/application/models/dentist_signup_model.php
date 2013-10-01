<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dentist_Signup_Model extends CI_Model{
    
	function __construct() {
		//Call the model constructor
		parent::__construct();	
		$this->load->helper('url');
		$this->load->database();
	}
	
	public function register_dentist($data) {
		
		$error_code['status'] = 1;
		
		// $status = error_code;
		$query = $this->db->get_where('dentist_list', array('id' => $data['id']));
			
		if ($query->num_rows() > 0) {
			// echo "id already registered";
			// $status = "id registered";
			$error_code['text'] = "ERROR: You are already registered";
			return $error_code;
			// return $status;
		}
		
		$query = $this->db->get_where('dentist_list', array('email' => $data['d_email']));

		if ($query->num_rows() > 0) {
			// echo "already registered";
			$error_code['text'] = "ERROR: email address already registered.";
			// $status = "email registered";
			// return $status;
			return $error_code;
			
		}
		
		$value = array (
			'id' => $data['id'],
			'first_name' => $data['d_fname'],
			'sur_name' => $data['d_sname'],
			'middle_name' => $data['d_mname'],
			'email' => $data['d_email'],
			'dentist_pass' => md5($data['d_password']),
			'register_date' => date('Y-m-d')
		);
		
		$query = $this->db->insert('dentist_list', $value);
		
		if ($query == NULL && $query->num_rows() >= 0) {
			// echo "error in db";
			$error_code['text'] = "ERROR: Data could not be inserted on network database.";
			return $error_code;
			 // $status = "ERROR: Data could not be inserted on network database";
			// return $status;
		} else {
			// echo "successfully registered";
			$error_code['text'] = "Successfully registered!";
			return $error_code;
			 // $status = "Successfully registered!";
			// return $status;
		}
			
	}
	
}
?>