<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dentist_Dashboard extends CI_Controller {

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

		// $sess_id=$_SESSION['id'];
		$data['sess_id'] = $this->session->userdata('id');
		if(!$this->session->userdata('id')) {
			$data['sess_id'] = '00000000022';
			// redirect(base_url().'dentist_login');
		}

		$data['dentist_id'] = $data['sess_id'];

		$this->db->where('id', $data['sess_id']);
		$qdentist_list = $this->db->get('dentist_list');
		$rdentist_list = $qdentist_list->row_array();

		$data['bday'] = $rdentist_list['last_login'];
		$data['fname'] = $rdentist_list['first_name'];
		$data['lname'] = $rdentist_list['sur_name'];

		$data['page_now'] = 1;

		$data['title'] = 'My Dentist Pal';
		$data['body'] = $this->load->view('dentist_dashboard_view', $data, true);

		$this->load->view('homepage', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */