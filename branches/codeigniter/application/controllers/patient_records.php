<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Patient_Records extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('session');
		$this->load->database();
	}

	function index()
	{
		if( ! ini_get('date.timezone') )
		{
		   date_default_timezone_set('GMT');
		}

		$data['sess_id']='00000000022';
		// $data['sess_id'] = $this->session->userdata('id');
		// if(!$this->session->userdata('id')) {
			// redirect(base_url().'dentist_login');
		// }

		$this->db->where('id', $data['sess_id']);
		$qdentist_list = $this->db->get('dentist_list');
		$rdentist_list = $qdentist_list->row_array();

		$data = $rdentist_list;

		$data['bday'] = $rdentist_list['last_login'];
		$data['fname'] = $rdentist_list['first_name'];
		$data['lname'] = $rdentist_list['sur_name'];

		$data['page_now'] = 3;

		$data['title'] = 'My Dentist Pal';
		$data['body'] = $this->load->view('patient_list', $data, true);

		$this->load->view('homepage', $data);
	}
}

/* End of file patient_list.php */
/* Location: ./application/controllers/patient_list.php */