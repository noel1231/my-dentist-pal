<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Patient_Edit_Model extends CI_Model {
    
	function __construct() {
		parent::__construct();	
		$this->load->helper('url');
		$this->load->database();
	}
	
	public function check_missing_db() {

		if(!$this->db->field_exists('hospitalized', 'patient_list')) {
			$this->db->query('ALTER TABLE `patient_list` ADD `hospitalized` TEXT NOT NULL');
		}
		if(!$this->db->field_exists('prescription_medication', 'patient_list')) {
			$this->db->query('ALTER TABLE `patient_list` ADD `prescription_medication` TEXT NOT NULL');
		}
		if(!$this->db->field_exists('tabacco_products', 'patient_list')) {
			$this->db->query('ALTER TABLE `patient_list` ADD `tabacco_products` TEXT NOT NULL');
		}
		if(!$this->db->field_exists('alcohol_drugs', 'patient_list')) {
			$this->db->query('ALTER TABLE `patient_list` ADD `alcohol_drugs` TEXT NOT NULL');
		}
		if(!$this->db->field_exists('latex', 'patient_list')) {
			$this->db->query('ALTER TABLE `patient_list` ADD `latex` TEXT NOT NULL');
		}
		if(!$this->db->field_exists('menstruation', 'patient_list')) {
			$this->db->query('ALTER TABLE `patient_list` ADD `menstruation` TEXT NOT NULL');
		}
		if(!$this->db->field_exists('blood_type', 'patient_list')) {
			$this->db->query('ALTER TABLE `patient_list` ADD `blood_type` TEXT NOT NULL');
		}
		if(!$this->db->field_exists('blood_presure', 'patient_list')) {
			$this->db->query('ALTER TABLE `patient_list` ADD `blood_presure` TEXT NOT NULL');
		}
		if(!$this->db->field_exists('sickness', 'patient_list')) {
			$this->db->query('ALTER TABLE `patient_list` ADD `sickness` TEXT NOT NULL');
		}
		if(!$this->db->field_exists('physician_specialty', 'patient_list')) {
			$this->db->query('ALTER TABLE `patient_list` ADD `physician_specialty` TEXT NOT NULL');
		}
		if(!$this->db->field_exists('physician_address', 'patient_list')) {
			$this->db->query('ALTER TABLE `patient_list` ADD `physician_address` TEXT NOT NULL');
		}
		if(!$this->db->field_exists('good_health', 'patient_list')) {
			$this->db->query('ALTER TABLE `patient_list` ADD `good_health` TEXT NOT NULL');
		}

	}
	
}
?>