<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Patient_Records extends CI_Controller {

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
		if( ! ini_get('date.timezone') )
		{
		   date_default_timezone_set('GMT');
		}

		if($this->session->userdata('id')) {
			$data['sess_id'] = $this->session->userdata('id');
		} else {
			redirect(base_url().'login');
		}

		$this->db->where('id', $data['sess_id']);
		$qdentist_list = $this->db->get('dentist_list');
		$rdentist_list = $qdentist_list->row_array();

		$data = $rdentist_list;

		$data['dentist_id'] = $rdentist_list['id'];

		$data['title'] = 'Medix Dental - Patient Records';
		$data['header'] = $this->load->view('homepage/header', '', true);

		$data['dashboard_title'] = 'Patient Records';
		$data['add_patient_search'] = $this->load->view('add_patient_search', '', true);
		$data['dashboard_content'] = $this->load->view('box_patient_list', $data, true);

		$data['activeMenu'] = 'patient_records';
		$data['body'] = $this->load->view('dentist_dashboard', $data, true);

		$this->load->view('homepage', $data);
	}
	
	function deleteCheckbox()
	{
		$patient_ids = $this->input->post('patient_ids');
		
		$id = explode(',',$patient_ids);
		
		$data_patient = array();
		
		for($x=0; $x < count($id); $x++)
		{
			$data_patient[] = $id[$x];
		}
		
		// $data_insert = array(
			// 'patient_marital_status'=>'double'
		// );
		
		$query1 = $this->db->where_in('id',$data_patient)->delete('patient_list');
		echo $query1;
	}
	
	// function load_patient(){
		// extract($this->input->post());
		// $limit = 10;
		// if($order_by){
			// if($order_by == 'desc')
			// {
				// $this->db->where('id <',$p_id);
			// }else
			// {
				// $this->db->where('id >',$p_id);
			// }
		// }else
		// {
			// $this->db->where('id <',$p_id);
		// }
		
		// if($by_word)
		// {
			// $connect_query = '(patient_name LIKE "%'.$by_word.'%" OR id LIKE "%'.$by_word.'%" OR patient_surname LIKE "%'.$by_word.'%" OR patient_middle_name LIKE "%'.$by_word.'%")';
			// $this->db->where($connect_query,null,false);
		// }
		// if($sort_by)
		// {
			// if($sort_by == 'name')
			// {
				// $this->db->order_by('patient_surname',$order_by);
			// }else if($sort_by == 'e_date')
			// {
				// $this->db->order_by('date_of_entry',$order_by);
			// }else if($sort_by == 'l_visit')
			// {
				// $this->db->order_by('last_procedure',$order_by);
			// }else
			// {
				// $this->db->order_by('id',$order_by);
			// }
		// }
		
		// $this->db->where('dentist_id',$this->session->userdata('id'));
		// $query = $this->db->get('patient_list');
		// echo $query->num_rows();
		// if($query->num_rows() > 0)
		// {
			// foreach($query->result_array() as $row)
			// {
				// echo '
					// <tr>
						// <td>
							// <input type="checkbox" class="check_each" value="'.$row['id'].'">
						// </td>
						// <td>
							// <img src="'.base_url('patient_picture/'.str_replace('patient_picture/','',$row['patient_picture'])).'" style="width:60px;" onerror="this.src=\''.base_url('img/default_patient_pic.jpg').'\'">
						// </td>
						// <td><a href="'.base_url('patient_edit?id='.$row['id']).'">'.ucwords($row['patient_name']).'</a></td>
						// <td>'.date('M-t-Y',strtotime($row['date_of_entry'])).'</td>
						// <td>'.(trim(isset($row['last_procedure'])) != '' ? date('M-t-Y',strtotime($row['last_procedure'])) : 'Not visit').'</td>
						// <td>
							// <a href="'.base_url('patient_edit?id='.$row['id']).'" style="color: #333;display: inline-block;margin-right: 8px;">
								// <span class="edit_patient glyphicon glyphicon-edit" title="Edit patient info" style="font-size:23px;"></span>
							// </a>
							// <a href="'.base_url('patient_access?id='.$row['id']).'" style="color: #333;display: inline-block;margin-right: 8px;">
								// <span class="glyphicon glyphicon-globe" title="Manage patient account access" style="font-size:23px;"></span>
							// </a>
							// <span class="glyphicon glyphicon-trash delete_patient" title="Delete patient" style="cursor:pointer;font-size:23px;" id="'.$row['id'].'"></span>
						// </td>
					// </tr>
				// ';
			// }
		// }
	// }
	
}

/* End of file patient_list.php */
/* Location: ./application/controllers/patient_list.php */