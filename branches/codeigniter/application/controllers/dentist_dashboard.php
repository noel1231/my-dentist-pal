<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dentist_Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('session');
		$this->load->database();
		$this->load->model('Patient_Edit_Model', 'patient_edit');
		$this->load->model('Charting_Model', 'charting');
		$this->load->model('Appointment_Model', 'appointment');

	}

	function index()
	{
		if( ! ini_get('date.timezone') )
		{
		   date_default_timezone_set('Asia/Manila');
		}

		$this->patient_edit->check_missing_db();
		$this->charting->check_missing_db();
		$this->appointment->check_missing_db();


		// $sess_id=$_SESSION['id'];
		if($this->session->userdata('id')) {
			$data['sess_id'] = $this->session->userdata('id');
		} else {
			redirect(base_url().'login');
		}

		// $data['sess_id'] = '00000000022';

		$this->db->where('id', $data['sess_id']);
		$qdentist_list = $this->db->get('dentist_list');
		$rdentist_list = $qdentist_list->row_array();

		$data = $rdentist_list;

		$data['bday'] = $rdentist_list['last_login'];
		$data['fname'] = $rdentist_list['first_name'];
		$data['lname'] = $rdentist_list['sur_name'];

		$data['page_now'] = 1;

		$data['title'] = 'Medix Dental - Dashboard';

		$data['header'] = $this->load->view('homepage/header', $data, true);

		$data['dashboard_title'] = 'Dashboard';
		$data['add_patient_search'] = $this->load->view('add_patient_search', '', true);
		$data['dashboard_content'] = $this->load->view('scheduler', $data, true);

		$data['content'] = $this->load->view('dentist_dashboard/content', $data, true);
		
		$data['activeMenu'] = 'dashboard';
		$data['body'] = $this->load->view('dentist_dashboard', $data, true);

		$this->load->view('homepage', $data);
	}

	function feed() {
		$feeds = array();

		$start_date = $this->input->post('start_date');
		$dentist_id = $this->session->userdata('id');

		if ($this->db->table_exists('dentist_appointments'))
		{
			if($start_date)
				$this->db->where('start_date', $start_date);

			$this->db->where('dentist_id', $dentist_id);

			$qappointments = $this->db->get('dentist_appointments');
			$rappointments = $qappointments->result_array();

			foreach($rappointments as $appointment) {
				$feed = array(
					'id' => $appointment['id'],
					'title' => $appointment['title'],
					'description' => $appointment['description'],
					'start' => $appointment['start'],
					'end' => $appointment['end'],
					'start_date' => $appointment['start_date'],
					'start_time' => $appointment['start_time'],
					'end_date' => $appointment['end_date'],
					'end_time' => $appointment['end_time'],
					'status' => $appointment['status']
				);
				if($appointment['end'])
					$feed['allDay'] = false;

				array_push($feeds, $feed);
			}
		}
		
		echo json_encode($feeds);
	}
	
	function feed_first() {
		$feeds = array();

		$start_date = $this->input->post('start_date');
		$dentist_id = $this->session->userdata('id');

		if ($this->db->table_exists('dentist_appointments'))
		{
			if($start_date)
				$this->db->where('start_date', $start_date);

			$this->db->where('dentist_id', $dentist_id);
			$this->db->where_in('status', array('', NULL));

			$qappointments = $this->db->get('dentist_appointments');
			$rappointments = $qappointments->result_array();

			foreach($rappointments as $appointment) {
				$feed = array(
					'id' => $appointment['id'],
					'title' => $appointment['title'],
					'description' => $appointment['description'],
					'start' => $appointment['start'],
					'end' => $appointment['end'],
					'start_date' => $appointment['start_date'],
					'start_time' => $appointment['start_time'],
					'end_date' => $appointment['end_date'],
					'end_time' => $appointment['end_time'],
					'status' => $appointment['status']
				);
				if($appointment['end'])
					$feed['allDay'] = false;

				array_push($feeds, $feed);
			}
		}
		
		echo json_encode($feeds);
	}
	
	function feed_confirmed() {
		$feeds = array();

		$start_date = $this->input->post('start_date');
		$dentist_id = $this->session->userdata('id');

		if ($this->db->table_exists('dentist_appointments'))
		{
			if($start_date)
				$this->db->where('start_date', $start_date);

			$this->db->where('dentist_id', $dentist_id);
			$this->db->where('status', 'confirmed');

			$qappointments = $this->db->get('dentist_appointments');
			$rappointments = $qappointments->result_array();

			foreach($rappointments as $appointment) {
				$feed = array(
					'id' => $appointment['id'],
					'title' => $appointment['title'],
					'description' => $appointment['description'],
					'start' => $appointment['start'],
					'end' => $appointment['end'],
					'start_date' => $appointment['start_date'],
					'start_time' => $appointment['start_time'],
					'end_date' => $appointment['end_date'],
					'end_time' => $appointment['end_time'],
					'status' => $appointment['status']
				);
				if($appointment['end'])
					$feed['allDay'] = false;

				array_push($feeds, $feed);
			}
		}
		
		echo json_encode($feeds);
	}
	
	function feed_cancelled() {
		$feeds = array();

		$start_date = $this->input->post('start_date');
		$dentist_id = $this->session->userdata('id');

		if ($this->db->table_exists('dentist_appointments'))
		{
			if($start_date)
				$this->db->where('start_date', $start_date);

			$this->db->where('dentist_id', $dentist_id);
			$this->db->where('status', 'cancelled');

			$qappointments = $this->db->get('dentist_appointments');
			$rappointments = $qappointments->result_array();

			foreach($rappointments as $appointment) {
				$feed = array(
					'id' => $appointment['id'],
					'title' => $appointment['title'],
					'description' => $appointment['description'],
					'start' => $appointment['start'],
					'end' => $appointment['end'],
					'start_date' => $appointment['start_date'],
					'start_time' => $appointment['start_time'],
					'end_date' => $appointment['end_date'],
					'end_time' => $appointment['end_time'],
					'status' => $appointment['status']
				);
				if($appointment['end'])
					$feed['allDay'] = false;

				array_push($feeds, $feed);
			}
		}
		
		echo json_encode($feeds);
	}

	function add_appointment() {

		$start = $this->input->post('date1');
		$end = $this->input->post('date2');

		$time1 = new DateTime($this->input->post('time1'));
		$time2 = new DateTime($this->input->post('time2'));

		if($this->input->post('time1'))
			$start .= ' '.$time1->format('H:i:s');

		if($this->input->post('time2'))
			if($end == null)
				$end = $this->input->post('date1');
			$end .= ' '.$time2->format('H:i:s');
		
		$insert_data = array(
			'dentist_id' => $this->input->post('dentist_id'),
			'title' => $this->input->post('title'),
			'description' => $this->input->post('description'),
			'start' => $start,
			'end' => $end,
			'start_date' => $this->input->post('date1'),
			'start_time' => $this->input->post('time1'),
			'end_date' => $this->input->post('date2'),
			'end_time' => $this->input->post('time2'),
			'timestamp' => time()
		);

		if ($this->db->table_exists('dentist_appointments'))
		{
			if($this->input->post('action') == 'insert') {
				$this->db->insert('dentist_appointments', $insert_data);
				$ap_id = $this->db->insert_id();
				
				echo '1-';
			} else {
				$this->db->where('id', $this->input->post('appointment_id'));
				$this->db->update('dentist_appointments', $insert_data);
				$ap_id = $this->input->post('appointment_id');
				
				echo $this->input->post('appointment_id').'-';
			}
		}

		// echo json_encode($insert_data);
		echo '
			<tr id="'.$ap_id.'">
				<td>'.$insert_data['title'].'</td>
				<td>'.$insert_data['description'].'</td>
				<td>'.$insert_data['start_time'].' '.($insert_data['end_time'] ? 'to '.$insert_data['end_time'] : '').'</td>
				<td>
					<select class="select_status" style="background-color: #E7F4FF;">
						<option value="">Select Status</option>
						<option value="confirmed"> Confirmed </option>
						<option value="cancelled"> Cancelled </option>
					</select>
				</td>
				<td>
					<span class="glyphicon glyphicon-trash delete_appointment" title="Delete" style="cursor:pointer"></span>
				</td>
			</tr>	
		';
	}
	
	function delete_appointment()
	{
		$id = $this->input->post('app_id');
		$this->db->where('id',$id)->delete('dentist_appointments');
	}
	
	function appointment_status()
	{
		$status = $this->input->post('status');
		$id = $this->input->post('app_id');
		
		if($status)
		{
			$query =  $this->db->where('id',$id)->get('dentist_appointments');
			if($query->num_rows() > 0)
			{
				$data_array = array(
					'status'=>$status
				);
				$this->db->where('id',$id)->update('dentist_appointments',$data_array);
			}
			echo 1;
		}
	}
	
	function appointment_search()
	{
		$result = $this->input->post('appoinment_name');
		$this->db->like('title',$result);
		$this->db->or_like('description',$result);
		$this->db->where('dentist_id',$this->session->userdata('id'));
		$query = $this->db->get('dentist_appointments');
		$currdate = date("j/n/Y h:i:s");
	
		
		if($query->num_rows() > 0)
		{
			foreach($query->result_array() as $row)
			{
				$dataDate = $row['start'];
				
				echo '
					<tr id="'.$row['id'].'">
						<td>'.$row['title'].'</td>
						<td>'.$row['description'].'</td>
						<td>'.$row['start_time'].' '.($row['end_time'] ? 'to '.$row['end_time'] : '').'</td>
						<td>
							<select class="select_status" style="background-color: #E7F4FF;">
								<option value="">Select Status</option>
								<option value="confirmed" '.($row['status'] == 'confirmed' ? 'selected' : '').'> Confirmed </option>
								<option value="cancelled" '.($row['status'] == 'cancelled' ? 'selected' : '').'> Cancelled </option>
							</select>
						</td>
						<td>
							<span class="glyphicon glyphicon-trash delete_appointment" title="Delete" style="cursor:pointer"></span>
						</td>
					</tr>
				';
			}
		}
		
	}
}

/* End of file dashboard.php */
/* Location: ./application/controllers/dashboard.php */