<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('session');
		$this->load->database();
	}

	function index()
	{
		// $this->db->query(
			// 'CREATE TABLE IF NOT EXISTS `dentist_appointments` (
			  // `id` int(11) NOT NULL AUTO_INCREMENT,
			  // `dentist_id` int(11) NOT NULL,
			  // `title` text NOT NULL,
			  // `description` text NOT NULL,
			  // `start` text NOT NULL,
			  // `end` text,
			  // `timestamp` int(11) DEFAULT NULL,
			  // PRIMARY KEY (`id`)
			// ) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;'
		// );

		if( ! ini_get('date.timezone') )
		{
		   date_default_timezone_set('GMT');
		}

		// $sess_id=$_SESSION['id'];
		if($this->session->userdata('id')) {
			$data['sess_id'] = $this->session->userdata('id');
		} else {
			redirect(base_url().'dentist_login');
		}	

		$this->db->where('id', $data['sess_id']);
		$qdentist_list = $this->db->get('dentist_list');
		$rdentist_list = $qdentist_list->row_array();

		$data = $rdentist_list;

		$data['bday'] = $rdentist_list['last_login'];
		$data['fname'] = $rdentist_list['first_name'];
		$data['lname'] = $rdentist_list['sur_name'];

		$data['page_now'] = 1;

		$data['title'] = 'My Dentist Pal';
		$data['content'] = $this->load->view('dentist_dashboard/content', $data, true);

		$data['header'] = $this->load->view('homepage/header', $data, true);
		$data['body'] = $this->load->view('dentist_dashboard', $data, true);

		$this->load->view('homepage', $data);
	}

	function feed() {
		$feeds = array();

		if ($this->db->table_exists('dentist_appointments'))
		{
			$qappointments = $this->db->get('dentist_appointments');
			$rappointments = $qappointments->result_array();

			foreach($rappointments as $appointment) {
				$feed = array(
					'title' => $appointment['title'],
					'start' => $appointment['start'],
					'description' => $appointment['description'],
					'end' => $appointment['end'],
				);
				array_push($feeds, $feed);
			}
		}
		
		echo json_encode($feeds);
	}

	function add_appointment() {

		$start = $this->input->post('date1');
		if($this->input->post('time1'))
			$start .= ' '.$this->input->post('time1');

		$end = null;
		
		$insert_data = array(
			'dentist_id' => '',
			'title' => $this->input->post('title'),
			'description' => $this->input->post('description'),
			'start' => $start,
			'end' => $end,
			'timestamp' => time(),
		);
		if ($this->db->table_exists('dentist_appointments'))
		{
				$this->db->insert('dentist_appointments', $insert_data);
		}
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */