<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Test extends CI_Controller {
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
	}
	
	function index()
	{
		date_default_timezone_set('Asia/Manila');
		$timeStart = time();
		 
		// select where item is new
		if($this->input->post('timestamp')){
			$timestamp = $this->input->post('timestamp');
		} else {
			// get current database time
			$this->db->order_by('timestamp desc');
			$sql = $this->db->get('patient_tooth_chart_extra');
			if($sql->num_rows() > 0) {
				$row = $sql->row_array();
				$timestamp = $row['timestamp'];
			} else {
				$timestamp = time();
			}
		}

		$newData = false;
		$notifications = array();
		 
		// loop while there is no new data and is running for less than 20 seconds
		while(!$newData && ( time()-$timeStart ) < 20 ){
		 
			// check for new data
			$this->db->where('timestamp >', $timestamp);
			$sql = $this->db->get('patient_tooth_chart_extra');
			 
			$result = $sql->result_array();
			foreach($result as $row) {
				$data['tooth'] = $row;
				$newData = true;
			}
			// let the server rest for a while
			usleep ( 500000 );
		}
		 
		// get current database time
		$this->db->order_by('timestamp desc');
		$sql = $this->db->get('patient_tooth_chart_extra');
		$row = $sql->row_array();
		$timestamp = $row['timestamp'];
		 
		// output
		$data['timestamp'] = $timestamp;
		echo json_encode($data);
	}

	function isapa() {
		print_r($this->input->post());
	}


}

?>