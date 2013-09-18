<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Patient_access extends CI_Controller {
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

		$data['title'] = 'My Dentist Pal - Digitize your dental management practice. A full-featured online tool that integrates dental practice management and confidential patient clinical charting, which dentist can access wherever they are.';
		$data['header'] = $this->load->view('homepage/header', '', true);

		$data['dashboard_title'] = 'Patients Access';
		$data['dashboard_content'] = $this->load->view('patient_manage', $data, true);

		$data['body'] = $this->load->view('dentist_dashboard', $data, true);
		$this->load->view('homepage', $data);
	}
}
?>
