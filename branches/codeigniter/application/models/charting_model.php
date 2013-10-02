<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Charting_Model extends CI_Model {
    
	function __construct() {
		//Call the model constructor
		parent::__construct();	
		$this->load->helper('url');
		$this->load->database();
	}

	function check_missing_db() {

		date_default_timezone_set('Asia/Manila');

		$this->db->query('
CREATE TABLE IF NOT EXISTS `patient_tooth_chart` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `patient_id` text NOT NULL,
  `dentist_id` text NOT NULL,
  `chart_name` text NOT NULL,
  `chart_remarks` text NOT NULL,
  `date_chart` date NOT NULL,
  `timestamp` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;
		');

		$this->db->query('
CREATE TABLE IF NOT EXISTS `patient_tooth_chart_extra` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `chart_id` int(11) NOT NULL,
  `patient_id` text NOT NULL,
  `dentist_id` text NOT NULL,
  `tooth_num` text NOT NULL,
  `tooth_area` text NOT NULL,
  `tooth_procedure` text NOT NULL,
  `date_procedure` date NOT NULL,
  `timestamp` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;
		');

		/* insert adult tooth_chart from old to new patient_tooth_chart */

		if(!$this->db->field_exists('chart_id', 'patient_tooth_chart_extra_adult')) {
			$this->db->query('ALTER TABLE `patient_tooth_chart_extra_adult` ADD `chart_id` TEXT NOT NULL');
		}

		$select = $this->db->select('id, patient_id, chart_name, date_chart, chart_remarks')->where('chart_id', '')->get('patient_tooth_chart_extra_adult');
		if($select->num_rows())
		{
			foreach($select->result_array() as $chart) {
				$insert_array = array(
					'patient_id' => $chart['patient_id'],
					'chart_name' => $chart['chart_name'],
					'chart_remarks' => $chart['chart_remarks'],
					'date_chart' => $chart['date_chart'],
					'timestamp' => strtotime($chart['date_chart'])
				);
				$insert = $this->db->insert('patient_tooth_chart', $insert_array);

				$chart_id = $this->db->insert_id();

				$this->db->where('id', $chart['id']);
				$update_array = array(
					'chart_id' => $chart_id
				);
				$this->db->update('patient_tooth_chart_extra_adult', $update_array);
			}
		}
		/* insert child tooth_chart from old to new patient_tooth_chart */

		if(!$this->db->field_exists('chart_id', 'patient_tooth_chart_extra_child')) {
			$this->db->query('ALTER TABLE `patient_tooth_chart_extra_child` ADD `chart_id` TEXT NOT NULL');
		}

		$null_chart_id = array('', 0, '0');

		$select = $this->db->select('id, patient_id, chart_name, date_chart, chart_remarks')->where_in('chart_id', $null_chart_id)->get('patient_tooth_chart_extra_child');
		if($select->num_rows())
		{
			foreach($select->result_array() as $chart) {
				$insert_array = array(
					'patient_id' => $chart['patient_id'],
					'chart_name' => $chart['chart_name'],
					'chart_remarks' => $chart['chart_remarks'],
					'date_chart' => $chart['date_chart'],
					'timestamp' => strtotime($chart['date_chart'])
				);
				$insert = $this->db->insert('patient_tooth_chart', $insert_array);

				$chart_id = $this->db->insert_id();

				$this->db->where('id', $chart['id']);
				$update_array = array(
					'chart_id' => $chart_id
				);
				$this->db->update('patient_tooth_chart_extra_child', $update_array);
			}
		}
	}


	public function load_chart($chart_id = 0, $patient_id = 0) {

		$data_tooth_chart_patient = array();

		/* default */
		$data_tooth_chart_patient['new_chart'] = 1;

		/* select from patient_tooth_chart_extra_child */
		$this->db->where('chart_id', $chart_id);
		$sql_adult = $this->db->get('patient_tooth_chart_extra_adult');

		if($sql_adult->num_rows() > 0) {
			$data_tooth_chart_patient = $sql_adult->row_array();
			$data_tooth_chart_patient['new_chart'] = 0;
		} else {
			/* select from patient_tooth_chart_extra_child */
			$this->db->where('chart_id', $chart_id);
			$sql_adult = $this->db->get('patient_tooth_chart_extra_child');

			if($sql_adult->num_rows() > 0) {
				$data_tooth_chart_patient = $sql_adult->row_array();
				$data_tooth_chart_patient['new_chart'] = 0;
			} else {
				/* select from patient_tooth_chart */
				$this->db->where('id', $chart_id);
				$qptc = $this->db->get('patient_tooth_chart');
				if($qptc->num_rows() > 0) {
					$rptc = $qptc->row_array(0);
					$data_tooth_chart_patient['chart_name'] = $rptc['chart_name'];
					$data_tooth_chart_patient['chart_remarks'] = $rptc['chart_remarks'];
				}

				$this->db->where('chart_id', $chart_id);
				$this->db->where('patient_id', $patient_id);
				$qtce = $this->db->get('patient_tooth_chart_extra');

				if($qtce->num_rows() > 0) {
					$rtce = $qtce->result_array();
					foreach($rtce as $tc_data) {
						$data_tooth_chart_patient['tooth_'.$tc_data['tooth_num']] = $tc_data['tooth_area'];
						$data_tooth_chart_patient['legend_'.$tc_data['tooth_num']] = $tc_data['tooth_procedure'];
					}
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
			'date_chart' => date('Y-m-d', time()),
			'timestamp' => time()
		);

		$this->db->insert('patient_tooth_chart', $chart_array);

		return $this->db->insert_id();
	}
	
}
?>