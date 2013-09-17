<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Logout extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
	}
	
	function index()
	{
		$this->session->sess_destroy();
		$data['title'] = 'My Dentist Pal - Digitize your dental management practice. A full-featured online tool that integrates dental practice management and confidential patient clinical charting, which dentist can access wherever they are.';
		
        $data['body'] = $this->load->view('homepage/body', '', true);
		$data['header'] = $this->load->view('homepage/header', '', true);
		$this->load->view('homepage', $data);
	}

}