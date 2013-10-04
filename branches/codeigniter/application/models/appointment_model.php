<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Appointment_Model extends CI_Model {
    
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
CREATE TABLE IF NOT EXISTS `dentist_appointments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dentist_id` text NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `start` text NOT NULL,
  `end` text,
  `start_date` text NOT NULL,
  `start_time` text NOT NULL,
  `end_date` text NOT NULL,
  `end_time` text NOT NULL,
  `status` text NOT NULL,
  `timestamp` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;
		');

		if(!$this->db->field_exists('status', 'dentist_appointments')) {
			$this->db->query('ALTER TABLE `dentist_appointments` ADD `status` TEXT NOT NULL');
		}

		/* import jqcalendar to dentist_appointments */

		$select = $this->db->select('Subject, Location, Description, StartTime, EndTime, IsAllDayEvent, Color, RecurringRule, dentist_id')->get('jqcalendar');
		if($select->num_rows())
		{
			// foreach($select->result_array() as $chart) {
				// $insert_array = array(
					// 'patient_id' => $chart['patient_id'],
					// 'chart_name' => $chart['chart_name'],
					// 'chart_remarks' => $chart['chart_remarks'],
					// 'date_chart' => $chart['date_chart'],
					// 'timestamp' => strtotime($chart['date_chart'])
				// );
				// $insert = $this->db->insert('patient_tooth_chart', $insert_array);

				// $chart_id = $this->db->insert_id();

				// $this->db->where('id', $chart['id']);
				// $update_array = array(
					// 'chart_id' => $chart_id
				// );
				// $this->db->update('patient_tooth_chart_extra_adult', $update_array);
			// }
		}
	}
	
}
?>