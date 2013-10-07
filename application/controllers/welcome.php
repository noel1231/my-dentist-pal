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
		$this->load->model('Patient_Edit_Model', 'patient_edit');
		$this->load->model('Charting_Model', 'charting');
		$this->load->model('Appointment_Model', 'appointment');
	}

	public function index()
	{
		$this->patient_edit->check_missing_db();
		$this->charting->check_missing_db();
		$this->appointment->check_missing_db();

		$data['title'] = 'Medix Dental - Digitize your dental management practice. A full-featured online tool that integrates dental practice management and confidential patient clinical charting, which dentist can access wherever they are.';
	    
                $data['body'] = $this->load->view('homepage/body', '', true);
		$data['header'] = $this->load->view('homepage/header', '', true);
                $data['identifier'] = true;
		$this->load->view('homepage', $data);
	}
	
	public function admin()
	{
		$data['title'] = 'Medix Dental - Digitize your dental management practice. A full-featured online tool that integrates dental practice management and confidential patient clinical charting, which dentist can access wherever they are.';
	    
        $data['body'] = $this->load->view('admin/admin_body', '', true);
		$data['header'] = $this->load->view('admin/admin_header', '', true);
                
		$this->load->view('admin/admin_content', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */