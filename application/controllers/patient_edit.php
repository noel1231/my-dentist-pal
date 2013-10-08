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
			case 'chart_info':
				// $chart_id = $this->input->post('chart');
				// $patient_id = $this->input->post('patient_id');
				// $this->select_chart($chart_id, $patient_id); return false;
				$this->chart_info(); return false;
				break;
			case 'charges':
				$this->set_charges(); return false;
				break;
			case 'payment':
				$this->set_payment(); return false;
				break;
		}

		switch ($this->input->post('view')) {
			case 'treatment_record':
				$dentist_id = $this->input->post('dentist_id');
				$this->treatment_record($dentist_id); return false;
				break;
		}

		if($this->session->userdata('id')) {
			$data['sess_id'] = $this->session->userdata('id');

			if($this->input->get()) {
				if(!$this->input->get('id')) {
					redirect(base_url().'dentist_dashboard');
				}
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

			$data['dashboard_title'] = 'Edit Patients';

			if($this->db->table_exists('patient_tooth_chart') && $this->db->table_exists('patient_tooth_chart_extra')) {
				$data['charting'] = $this->load->view('charting/box_tooth_edit', $data, true);
				// $data['treatment_records'] = $this->load->view('treatment_records/patient_visit_logs', $data, true);
			}

			$data['dashboard_content'] = $this->load->view('add_patient', $data, true);
			$data['body'] = $this->load->view('patient_dashboard', $data, true);

			$this->load->view('homepage', $data);
			
		} else if($this->input->get('access')) {
			
			$this->db->where('id', $this->input->get('id'));
			$qdentist_list = $this->db->get('patient_list');
			$rdentist_list = $qdentist_list->row_array();
			$data = $rdentist_list;
			
			$data['patient_id'] = $this->input->get('id');
			$patient_id = $this->input->get('id');
			$query = $this->db->where('id',$patient_id)->get('patient_list');
			$data['patient_query'] = $query;
			
			$data['dashboard_title'] = 'Edit Patients';
			$data['header'] = $this->load->view('homepage/header', '', true);
			
			if($this->db->table_exists('patient_tooth_chart') && $this->db->table_exists('patient_tooth_chart_extra')) {
				$data['charting'] = $this->load->view('charting/box_tooth_edit', $data, true);
				// $data['treatment_records'] = $this->load->view('treatment_records/patient_visit_logs', $data, true);
			}
			
			$data['dashboard_content'] = $this->load->view('add_patient', $data, true);
			$data['body'] = $this->load->view('patient_dashboard', $data, true);
			$this->load->view('homepage', $data);
			
		} else {
			redirect(base_url().'login');
		}

	}

	function treatment_record() {
		$data['patient_id'] = $this->input->get('id');
		echo $this->load->view('treatment_records/patient_visit_logs', $data);
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
		$this->select_chart($chart_id, $patient_id);
	}

	private function set_tooth() {

		if( ! ini_get('date.timezone') )
		{
		   date_default_timezone_set('Asia/Manila');
		}

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

		$this->db->where('chart_id', $chart_id);
		$this->db->where('tooth_num', $tooth_num);
		$qtc_exists = $this->db->get('patient_tooth_chart_extra');

		if($qtc_exists->num_rows() > 0) {
			$rtc_exists = $qtc_exists->row_array();
			$tooth_updated = array(
				'date_modified' => time()
			);
			$this->db->where('id', $rtc_exists['id']);
			$this->db->update('patient_tooth_chart_extra', $tooth_updated);
		}
		// $legend = htmlentities($legend, ENT_XHTML);

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
		$callback['id'] = $this->db->insert_id();

		$callback = $set_tooth_array;

		$callback['new_chart'] = $new_chart;
		$callback['chart_name'] = $chart_name;
		
		
		$data_array_patient = array(
			'last_procedure'=> date('Y-m-d', time())
		);
		$this->db->where('id',$patient_id)->update('patient_list',$data_array_patient);

		echo json_encode($callback);
	}

	private function select_chart($chart_id, $patient_id) {

		$data_tooth_chart_patient = $this->charting->load_chart($chart_id, $patient_id);

		$callback = $data_tooth_chart_patient;

		$callback['body'] = $this->load->view('charting/tooth_chart_patient', $data_tooth_chart_patient, true);

		echo json_encode($callback);

	}

	private function chart_info() {
		$chart_id = $this->input->post('chart');
		$chart_info_array = array();

		$chart_info_array['periodical_screening'] = $this->input->post('periodical_screening');
		$chart_info_array['occlusion'] = $this->input->post('occlusion');
		$chart_info_array['appliances'] = $this->input->post('appliances');
		$chart_info_array['tmd'] = $this->input->post('tmd');

		$update_array = array(
			'chart_info' => json_encode($chart_info_array)
		);
		$this->db->where('id', $chart_id);
		$this->db->update('patient_tooth_chart', $update_array);

		echo $update_array['chart_info'];
	}

	private function set_charges() {
		$callback = array();
		$amount_charged = $this->input->post('amount_charged');

		foreach($amount_charged as $key=>$value) {
			$this->db->where('patient_tooth_chart_extra_id', $key);
			$qtac = $this->db->get('tooth_amount_charges');
			$rtac = $qtac->row_array();
			$data_array = array(
				'amount_charged' => $value,
				'timestamp' => time()
			);
			if($qtac->num_rows() > 0) {
				$this->db->where('id', $rtac['id']);
				$this->db->update('tooth_amount_charges', $data_array);
			} else {
				if($value !== '') {
					$data_array['patient_tooth_chart_extra_id'] = $key;
					$this->db->insert('tooth_amount_charges', $data_array);
					$data_array['id'] = $this->db->insert_id();
				}
			}
		}
		echo json_encode($data_array);
		
	}

	private function set_payment() {
		$callback = array();
		$amount_paid = $this->input->post('amount_paid');

		foreach($amount_paid as $key=>$value) {
			if($value !== '') {
				$data_array = array(
					'amount_paid' => $value,
					'timestamp' => time()
				);
				$data_array['patient_tooth_chart_id'] = $key;
				$this->db->insert('tooth_amount_paid', $data_array);
				$data_array['id'] = $this->db->insert_id();
			}
		}

		echo json_encode($data_array);
	}

}

?>