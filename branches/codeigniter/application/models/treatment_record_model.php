<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Treatment_Record_Model extends CI_Model {
    
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

		$this->db->query('
CREATE TABLE IF NOT EXISTS `tooth_amount_charges` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `patient_tooth_chart_extra_id` int(11),
  `patient_tooth_chart_id` int(11),
  `amount_charged` int(11),
  `timestamp` int(11),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;
		');

		$this->db->query('
CREATE TABLE IF NOT EXISTS `tooth_amount_paid` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `patient_tooth_chart_id` int(11),
  `amount_paid` int(11),
  `timestamp` int(11),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;
		');

	}

	function set_charges($amount_charged = null)
	{
		$callback = array();
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

			$this->db->where('id', $key);
			$qchart = $this->db->get('patient_tooth_chart_extra');
			$rchart = $qchart->row_array();

			$data_array['chart_id'] = $rchart['chart_id'];

			array_push($callback, $data_array);
		}
		return $callback;
	}

	function set_payment($amount_paid = null) {
		$callback = array(); $data_array = array();
		foreach($amount_paid as $key=>$value) {
			$this->db->select_sum('amount_charged');
			$this->db->join('patient_tooth_chart_extra', 'patient_tooth_chart_extra.id = tooth_amount_charges.patient_tooth_chart_extra_id');
			$this->db->where('patient_tooth_chart_extra.chart_id', $key);
			$qtac = $this->db->get('tooth_amount_charges');
			$rtac = $qtac->row_array();

			$this->db->select_sum('amount_paid');
			$this->db->where('patient_tooth_chart_id', $key);
			$qtap = $this->db->get('tooth_amount_paid');
			$rtap = $qtap->row_array();

			$balance = $rtac['amount_charged'] - $rtap['amount_paid'];

			$data_array = array(
				'amount_paid' => $value,
				'timestamp' => time()
			);
			$data_array['patient_tooth_chart_id'] = $key;
			if($value !== '') {
				if($value <= $balance) {
					$this->db->insert('tooth_amount_paid', $data_array);
				}
			}
			
			array_push($callback, $data_array);
		}
		return $callback;
	}
	
}
?>