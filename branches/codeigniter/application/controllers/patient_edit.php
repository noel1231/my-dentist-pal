<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Patient_Edit extends CI_Controller {
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
		$this->load->model('Charting_Model', 'charting');
	}
	
	function index()
	{
		if($this->session->userdata('id')) {
			$data['sess_id'] = $this->session->userdata('id');

			if($this->input->post('submit') === 'tooth') {
				$this->set_tooth(); return false;
			}
			if($this->input->post('submit') === 'chart') {
				$this->insert_chart(); return false;
			}
			
			$this->db->where('id', $this->input->get('id'));
			$qdentist_list = $this->db->get('patient_list');
			$rdentist_list = $qdentist_list->row_array();

			$data = $rdentist_list;
			
			$data['new_chart'] = 1;

			$data['patient_id'] = $this->input->get('id');
			$query = $this->db->where('id', $data['patient_id'])->get('patient_list');
			$data['patient_query'] = $query;

			$data['title'] = 'My Dentist Pal - Digitize your dental management practice. A full-featured online tool that integrates dental practice management and confidential patient clinical charting, which dentist can access wherever they are.';
			$data['header'] = $this->load->view('homepage/header', '', true);

			$data['dashboard_title'] = 'Add Patients';

			if($this->db->table_exists('patient_tooth_chart_extra')) {
				$data['charting'] = $this->load->view('charting/box_tooth_edit', $data, true);
				$data['treatment_records'] = $this->load->view('charting/treatment_records', $data, true);
			}

			$data['dashboard_content'] = $this->load->view('add_patient', $data, true);
			$data['body'] = $this->load->view('patient_dashboard', $data, true);

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

	private function insert_chart()
	{
		$chart_name = $this->input->post('chart_name');
		$dentist_id = $this->input->post('dentist_id');
		$patient_id = $this->input->post('patient_id');

		$chart_id = $this->charting->insert_chart($chart_name, $dentist_id, $patient_id);

		$data_tooth_chart_patient = $this->charting->load_chart($chart_id, $dentist_id, $patient_id);
		
		$callback['chart_name'] = $chart_name;
		$callback['patient_id'] = $patient_id;
		$callback['chart_id'] = $chart_id;
		$callback['body'] = $this->load->view('charting/tooth_chart_patient', $data_tooth_chart_patient, true);

		echo json_encode($callback);
		
	}

	function set_tooth() {
		extract($this->input->post());

		$callback = array();

		if(isset($chart_id)) {
		} else {
			$chart_name = 'Chart '. date('Y-m-d', time());
			$chart_id = $this->charting->insert_chart($chart_name, $dentist_id, $patient_id);
			$callback['chart_name'] = $chart_name;
		}
		
		$set_tooth_array = array(
			'patient_id' => $patient_id,
			'dentist_id' => $dentist_id,
			'chart_id' => $chart_id,
			'tooth_num' => $tooth_num,
			'tooth_area' => $pic_num,
			'tooth_procedure' => $legend,
			'date_procedure' => date('Y-m-d', time()),
			'timestamp' => time()
		);
		$this->db->insert('patient_tooth_chart_extra', $set_tooth_array);

		$callback = $set_tooth_array;

		$callback['id'] = $this->db->insert_id();
		echo json_encode($callback);
	}
}

?>