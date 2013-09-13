<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Patient_add extends CI_Controller {
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
		$data['title'] = 'My Dentist Pal - Digitize your dental management practice. A full-featured online tool that integrates dental practice management and confidential patient clinical charting, which dentist can access wherever they are.';
		$data['header'] = $this->load->view('homepage/header', '', true);
		$data['body'] = $this->load->view('add_patient','',true);
		$this->load->view('homepage', $data);
	}
	
	function submit_patient()
	{
		$cavity = $this->input->post('cavity');
		print_r($cavity);
	}
}