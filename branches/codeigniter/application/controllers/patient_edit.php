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
		$this->load->model('Patient_Edit_Model', 'patient_edit');
		$this->load->model('Charting_Model', 'charting');
	}
	
	function index()
	{
		$this->patient_edit->check_missing_db();
		$this->charting->check_missing_db();

		if($this->session->userdata('id')) {
			$data['sess_id'] = $this->session->userdata('id');

			switch ($this->input->post('submit')) {
				case 'tooth':
					$this->set_tooth(); return false;
					break;
				case 'chart':
					$chart_name = $this->input->post('chart_name');
					$dentist_id = $this->input->post('dentist_id');
					$patient_id = $this->input->post('patient_id');
					$this->insert_chart($chart_name, $dentist_id, $patient_id); return false;
					break;
				case 'select_chart':
					$chart_id = $this->input->post('chart');
					$patient_id = $this->input->post('patient_id');
					$this->select_chart($chart_id, $patient_id); return false;
					break;
			}

			switch ($this->input->post('view')) {
				case 'treatment_record':
					$this->treatment_record(); return false;
					break;
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

			if($this->db->table_exists('patient_tooth_chart') && $this->db->table_exists('patient_tooth_chart_extra')) {
				$data['charting'] = $this->load->view('charting/box_tooth_edit', $data, true);
				// $data['treatment_records'] = $this->load->view('treatment_records/patient_visit_logs', $data, true);
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

	function treatment_record() {
		echo $this->load->view('treatment_records/patient_visit_logs');
	}

	function delete_patient()
	{
		$p_id = $this->input->post('patient_id');
		$delete = $this->db->where('id',$p_id)->delete('patient_list');
		
		echo $delete;
	}

	private function insert_chart($chart_name, $dentist_id, $patient_id)
	{
		$new_chart = $this->input->post('new_chart');
		$chart_id = $this->charting->insert_chart($chart_name, $dentist_id, $patient_id);
		$this->select_chart($chart_id, $dentist_id, $patient_id, $new_chart);
	}

	private function set_tooth() {
		extract($this->input->post());

		$callback = array();

		$chart_id = $this->input->post('chart');
		if($chart_id === '0') {
			$new_chart = 'yes';
			$chart_name = 'Chart '. date('Y-m-d', time());
			$chart_id = $this->charting->insert_chart($chart_name, $dentist_id, $patient_id);
		} else {
			$new_chart = 'no';
			$this->db->where('id', $chart_id);
			$qptc = $this->db->get('patient_tooth_chart');
			if($qptc->num_rows() > 0) {
				$rptc = $qptc->row_array();
				$chart_name = $rptc['chart_name'];
			}
		}
		
		$set_tooth_array = array(
			'patient_id' => $patient_id,
			'dentist_id' => $dentist_id,
			'chart_id' => $chart_id,
			'tooth_num' => $tooth_num,
			'tooth_area' => str_pad($pic_num, 2, '0', STR_PAD_LEFT),
			'tooth_procedure' => $legend,
			'date_procedure' => date('Y-m-d', time()),
			'timestamp' => time()
		);
		$this->db->insert('patient_tooth_chart_extra', $set_tooth_array);

		$callback = $set_tooth_array;

		$callback['new_chart'] = $new_chart;
		$callback['chart_name'] = $chart_name;
		$callback['id'] = $this->db->insert_id();
		echo json_encode($callback);
	}

	private function select_chart($chart_id, $patient_id) {

		$data_tooth_chart_patient = $this->charting->load_chart($chart_id, $patient_id);

		$callback = $data_tooth_chart_patient;

		$callback['body'] = $this->load->view('charting/tooth_chart_patient', $data_tooth_chart_patient, true);

		echo json_encode($callback);

	}

}

?>