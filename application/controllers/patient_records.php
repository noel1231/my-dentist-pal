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

		if($this->session->userdata('id')) {
			$data['sess_id'] = $this->session->userdata('id');
		} else {
			redirect(base_url().'login');
		}

		$this->db->where('id', $data['sess_id']);
		$qdentist_list = $this->db->get('dentist_list');
		$rdentist_list = $qdentist_list->row_array();

		$data = $rdentist_list;

		$data['dentist_id'] = $rdentist_list['id'];

		$data['title'] = 'Medix Dental - Patient Records';
		$data['header'] = $this->load->view('homepage/header', '', true);

		$data['dashboard_title'] = 'Patient Records';
		$data['add_patient_search'] = $this->load->view('add_patient_search', '', true);
		$data['dashboard_content'] = $this->load->view('box_patient_list', $data, true);

		$data['activeMenu'] = 'patient_records';
		$data['body'] = $this->load->view('dentist_dashboard', $data, true);

		$this->load->view('homepage', $data);
	}
	
	function deleteCheckbox()
	{
		$patient_ids = $this->input->post('patient_ids');
		
		$id = explode(',',$patient_ids);
		
		$data_patient = array();
		
		for($x=0; $x < count($id); $x++)
		{
			$data_patient[] = $id[$x];
		}
		
		// $data_insert = array(
			// 'patient_marital_status'=>'double'
		// );
		
		$query1 = $this->db->where_in('id',$data_patient)->delete('patient_list');
		echo $query1;
	}
	
}

/* End of file patient_list.php */
/* Location: ./application/controllers/patient_list.php */