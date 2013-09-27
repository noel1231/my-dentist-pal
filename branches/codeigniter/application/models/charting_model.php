<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Charting_Model extends CI_Model {
    
	function __construct() {
		//Call the model constructor
		parent::__construct();	
		$this->load->helper('url');
		$this->load->database();
	}
	
	public function load_chart($chart_id = 0, $dentist_id = 0, $patient_id = 0) {

		$data_tooth_chart_patient = array();
		$new_chart = null;

		if($new_chart === '0') {
			if($what_chart === '1') {
				if($chart_id) {
					$this->db->where('id', $chart_id);
					$ress = $this->db->get('patient_tooth_chart_extra_adult');
					$remark="chart_remarks";
				} else {
					$this->db->where('patient_id', $patient_id);
					$ress = $this->db->get('patient_adult_tooth');
					$remark="tooth_remarks";
				}

			} else 
			if($what_chart === '2') {

				if($chart_id) {
					$this->db->where('id', $chart_id);
					$ress = $this->db->get('patient_tooth_chart_extra_child');
					$remark = "chart_remarks";
				} else {
					$this->db->where('patient_id', $patient_id);
					$ress = $this->db->get('patient_child_tooth');
					$remark = "tooth_remarks";
				}
			}
			if($ress->num_rows() > 0) {
				$row=$ress->row_array();
				$chart_remarks=$row[$remark];
				$data_tooth_chart_patient = $row;
			}
		} else {
			$this->db->where('chart_id', $chart_id);
			$this->db->where('dentist_id', $dentist_id);
			$this->db->where('patient_id', $patient_id);
			$qtc = $this->db->get('patient_tooth_chart_extra');

			if($qtc->num_rows() > 0) {
				$rtc = $qtc->result_array();
				foreach($rtc as $tc_data) {
					$data_tooth_chart_patient['tooth_'.$tc_data['tooth_num']] = $tc_data['tooth_area'];
					$data_tooth_chart_patient['legend_'.$tc_data['tooth_num']] = $tc_data['tooth_procedure'];
				}
			}
		}

		return $data_tooth_chart_patient;
			
	}

	function insert_chart($chart_name, $dentist_id, $patient_id) {
		$chart_array = array(
			'patient_id' => $patient_id,
			'dentist_id' => $dentist_id,
			'chart_name' => $chart_name,
			'tooth_chart_date' => date('Y-m-d', time()),
			'timestamp' => time()
		);

		$this->db->insert('patient_tooth_chart', $chart_array);

		return $this->db->insert_id();
	}
	
}
?>