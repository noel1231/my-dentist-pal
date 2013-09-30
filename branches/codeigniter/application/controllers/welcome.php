<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	    
                $data['body'] = $this->load->view('homepage/body', '', true);
		$data['header'] = $this->load->view('homepage/header', '', true);
		$this->load->view('homepage', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */