<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Account_setting extends CI_Controller {
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

		$data['title'] = 'Medix Dental - Account Settings';
		$data['header'] = $this->load->view('homepage/header', '', true);

		$data['dashboard_title'] = 'Patients Access';
		$data['dashboard_content'] = $this->load->view('account_setting_view', $data, true);

		$data['body'] = $this->load->view('dentist_dashboard', $data, true);
		$this->load->view('homepage', $data);
	}
	
	function change_password()
	{
		$curr_pass = $this->input->post('curr_pass');
		$new_pass = $this->input->post('new_pass');
		$re_pass = $this->input->post('re_pass');
		
		if($curr_pass)
		{
			$this->db->where('id',$this->session->userdata('id'));
			$this->db->where('dentist_pass',md5($curr_pass));
			$getResult = $this->db->get('dentist_list');
			
			if($getResult->num_rows() > 0)
			{
				if($new_pass == $re_pass)
				{
					echo 'current success';
					$data_array = array(
						'dentist_pass'=>md5($new_pass)
					);
					$this->db->where('id',$this->session->userdata('id'));
					$this->db->update('dentist_list',$data_array);
				}else
				{
					echo 'password not match';
				}
				
			}else
			{
				echo 'current unsuccess';
			}
		}
	}
	
}
?>
