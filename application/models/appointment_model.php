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
  `description` text,
  `start` text NOT NULL,
  `end` text,
  `start_date` text NOT NULL,
  `end_date` text NOT NULL,
  `start_time` text NOT NULL,
  `end_time` text NOT NULL,
  `status` text NOT NULL,
  `timestamp` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;
		');

		if(!$this->db->field_exists('location', 'dentist_appointments')) {
			$this->db->query('ALTER TABLE `dentist_appointments` ADD `location` TEXT');
		}
		if(!$this->db->field_exists('status', 'dentist_appointments')) {
			$this->db->query('ALTER TABLE `dentist_appointments` ADD `status` TEXT NOT NULL');
		}
		if(!$this->db->field_exists('appointment_id', 'jqcalendar')) {
			$this->db->query('ALTER TABLE `jqcalendar` ADD `appointment_id` INT NOT NULL');
		}				

		/* import jqcalendar to dentist_appointments */

		$select = $this->db->select('id, Subject, Location, Description, StartTime, EndTime, IsAllDayEvent, Color, RecurringRule, dentist_id')->where('appointment_id', 0)->get('jqcalendar');
		if($select->num_rows())
		{

			foreach($select->result_array() as $jqcalendar) {
				$insert_array = array(
					'dentist_id' => $jqcalendar['dentist_id'],
					'title' => $jqcalendar['Subject'],
					'description' => $jqcalendar['Description'],
					'start' => $jqcalendar['StartTime'],
					'end' => $jqcalendar['EndTime'],
					'start_date' => date('m/d/Y', strtotime($jqcalendar['StartTime'])),
					'end_date' => date('m/d/Y', strtotime($jqcalendar['StartTime'])),
					'start_time' => date('h:i A', strtotime($jqcalendar['StartTime'])),
					'end_time' => date('h:i A', strtotime($jqcalendar['StartTime'])),
					'location' => $jqcalendar['Location']
				);
				$insert = $this->db->insert('dentist_appointments', $insert_array);
				$appointment_id = $this->db->insert_id();

				$this->db->where('id', $jqcalendar['id']);
				$update_array = array(
					'appointment_id' => $appointment_id
				);
				$this->db->update('jqcalendar', $update_array);
			}
		}
	}
	
}
?>