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
	
	public function index()
	{
		$data['title'] = 'My Dentist Pal - Digitize your dental management practice. A full-featured online tool that integrates dental practice management and confidential patient clinical charting, which dentist can access wherever they are.';
		$data['header'] = $this->load->view('homepage/header', '', true);
		$data['body'] = $this->load->view('login/dentist_login','',true);
		$this->load->view('homepage', $data);
		
	}
	
	function  check_login()
	{
		$email = $this->input->post('input_email');
		$pass = $this->input->post('input_pass');
		$pass = md5($pass);
		
		$this->db->where('email',$email);
		$this->db->where('dentist_pass',$pass);
		$query = $this->db->get('dentist_list');
		if($query->num_rows() > 0)
		{
			echo 'success';
		}else
		{
			echo 'denied';
		}
	}	
}