<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Charting_Model extends CI_Model {
    
	function __construct() {
		//Call the model constructor
		parent::__construct();	
		$this->load->helper('url');
		$this->load->database();
	}

	function check_missing_db() {

		if( ! ini_get('date.timezone') )
		{
		   date_default_timezone_set('Asia/Manila');
		}

		if(!$this->db->field_exists('chart_id', 'patient_tooth_chart_extra_adult')) {
			$this->db->query('ALTER TABLE `patient_tooth_chart_extra_adult` ADD `chart_id` INT');
		}

		if(!$this->db->field_exists('chart_id', 'patient_tooth_chart_extra_child')) {
			$this->db->query('ALTER TABLE `patient_tooth_chart_extra_child` ADD `chart_id` INT');
		}

		if(!$this->db->table_exists('patient_tooth_chart')) {
			$this->db->update('patient_tooth_chart_extra_adult', array('chart_id' => 0));
			$this->db->update('patient_tooth_chart_extra_child', array('chart_id' => 0));
		}

		$this->db->query('
CREATE TABLE IF NOT EXISTS `patient_tooth_chart` (
  `id` int NOT NULL AUTO_INCREMENT,
  `patient_id` text NOT NULL,
  `dentist_id` text NOT NULL,
  `chart_name` text NOT NULL,
  `chart_remarks` text NOT NULL,
  `date_chart` date NOT NULL,
  `timestamp` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;
		');

		$this->db->query('
CREATE TABLE IF NOT EXISTS `patient_tooth_chart_extra` (
  `id` int NOT NULL AUTO_INCREMENT,
  `chart_id` int NOT NULL,
  `patient_id` text NOT NULL,
  `dentist_id` text NOT NULL,
  `tooth_num` text NOT NULL,
  `tooth_area` text NOT NULL,
  `tooth_procedure` text,
  `date_procedure` date NOT NULL,
  `timestamp` int NOT NULL,
  `date_modified` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;
		');

		if(!$this->db->field_exists('periodical_screening', 'patient_tooth_chart')) {
			$this->db->query('ALTER TABLE `patient_tooth_chart` ADD `periodical_screening` TEXT NOT NULL');
		}

		if(!$this->db->field_exists('status', 'patient_tooth_chart_extra')) {
			$this->db->query('ALTER TABLE `patient_tooth_chart_extra` ADD `status` INT');
		}

		/* insert adult tooth_chart from old to new patient_tooth_chart */

		$select = $this->db->select('id, patient_id, chart_name, date_chart, chart_remarks')->where_in('chart_id', array('', 0, '0'))->get('patient_tooth_chart_extra_adult');
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

		$select = $this->db->select('id, patient_id, chart_name, date_chart, chart_remarks')->where_in('chart_id', array('', 0, '0'))->get('patient_tooth_chart_extra_child');
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

		if(!$this->db->field_exists('date_modified', 'patient_tooth_chart_extra')) {
			$this->db->query('ALTER TABLE `patient_tooth_chart_extra` ADD `date_modified` INT NOT NULL');
		}

		if(!$this->db->field_exists('chart_info', 'patient_tooth_chart')) {
			$this->db->query('ALTER TABLE `patient_tooth_chart` ADD `chart_info` TEXT');
		}

	}


	public function load_chart($chart_id = 0, $patient_id = 0) {

		$data_tooth_chart_patient = array();

		/* default */
		$data_tooth_chart_patient['new_chart'] = 1;

		/* select from patient_tooth_chart */
		$this->db->where('id', $chart_id);
		$this->db->where('patient_id', $patient_id);
		$qptc = $this->db->get('patient_tooth_chart');
		if($qptc->num_rows() > 0) {
			$rptc = $qptc->row_array(0);
			$data_tooth_chart_patient['chart_name'] = $rptc['chart_name'];
			$data_tooth_chart_patient['chart_remarks'] = $rptc['chart_remarks'];

			$this->db->where('chart_id', $chart_id);
			$qtce = $this->db->get('patient_tooth_chart_extra');

			if($qtce->num_rows() > 0) {
				$rtce = $qtce->result_array();
				foreach($rtce as $tc_data) {
					$data_tooth_chart_patient['tooth_'.$tc_data['tooth_num']] = $tc_data['tooth_area'];
					$data_tooth_chart_patient['legend_'.$tc_data['tooth_num']] = $tc_data['tooth_procedure'];
				}
			} else {
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
					}
				}
			}
		}

		$data_tooth_chart_patient['chart_id'] = $chart_id;

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

	function set_tooth($data) {
		extract($data);

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

		return $callback;
	}
	
}
?>