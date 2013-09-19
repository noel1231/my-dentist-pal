<?php if( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dentist_Profile extends CI_Controller {
	function __construct() {
		parent::__construct();	
		$this->load->database();
  	}

	function index()
	{
		$data['body'] = $this->load->view('dentist_profile_view', '', true);
		$data['header'] = $this->load->view('homepage/header', '', true);
		$this->load->view('homepage', $data);
	
	}
}