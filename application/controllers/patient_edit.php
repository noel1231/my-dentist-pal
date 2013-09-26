<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Patient_edit extends CI_Controller {
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
			
			$this->db->where('id', $data['sess_id']);
			$qdentist_list = $this->db->get('dentist_list');
			$rdentist_list = $qdentist_list->row_array();

			$data = $rdentist_list;
			
			$data['patient_id'] = $this->input->get('id');
			$query = $this->db->where('id', $data['patient_id'])->get('patient_list');
			$data['patient_query'] = $query;

			$data['title'] = 'My Dentist Pal - Digitize your dental management practice. A full-featured online tool that integrates dental practice management and confidential patient clinical charting, which dentist can access wherever they are.';
			$data['header'] = $this->load->view('homepage/header', '', true);

			$data['dashboard_title'] = 'Add Patients';

			if($this->db->table_exists('patient_tooth_chart')) {
				$data['charting'] = $this->load->view('charting/box_tooth_edit', $data, true);
				$data['treatment_records'] = $this->load->view('charting/treatment_records', $data, true);
			}

			$data['dashboard_content'] = $this->load->view('add_patient', $data, true);
			$data['body'] = $this->load->view('dentist_dashboard', $data, true);

			$this->load->view('homepage', $data);
			
		} else if($this->input->get('access')) {
			
			$patient_id = $this->input->get('id');
			$query = $this->db->where('id',$patient_id)->get('patient_list');
			$data['patient_query'] = $query;
			
			$data['header'] = $this->load->view('homepage/header', '', true);
			$data['body'] = $this->load->view('add_patient', $data, true);
			$this->load->view('homepage', $data);
			
		} else {
			redirect(base_url().'login');
		}

	}
	
	function delete_patient()
	{
		$p_id = $this->input->post('patient_id');
		$delete = $this->db->where('id',$p_id)->delete('patient_list');
		
		echo $delete;
	}
}

?>