<?php if( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dentist_Profile extends CI_Controller {
	function __construct() {
		parent::__construct();	
		$this->load->helper(array('form', 'url'));
		$this->load->library('session');
		$this->load->library('form_validation');
		$this->load->database();
		$this->load->library('email');
		$this->load->library('image_lib');
		$this->load->library('cart');
		$this->load->library('encrypt');
		$this->load->model('upload_model');
  	}

	function index()
	{
		if($this->session->userdata('id')) {
			$data['sess_id'] = $this->session->userdata('id');
		} else {
			redirect(base_url());
		}

		$this->db->where('id', $data['sess_id']);
		$qdentist_list = $this->db->get('dentist_list');
		$rdentist_list = $qdentist_list->row_array();

		$data = $rdentist_list;
		
		$data['dashboard_title'] = 'Dentist Profile'; 
		
		$data['header'] = $this->load->view('homepage/header', '', true);
		// $data['footer'] = $this->load->view('homepage/footer', '', true);
		$data['dashboard_content'] = $this->load->view('dentist_profile_view', $data, true);

		$data['body'] = $this->load->view('dentist_dashboard', $data, true);

		$this->load->view('homepage', $data);

	}
	
	function save_dentist_info()
	{
		if($this->input->post()) {
			$dent_id = $this->session->userdata('id');
			$callback_date = $this->separate_date($this->input->post('bod'));
			
			$this->db->where('id', $dent_id);
			$qdentist_list = $this->db->get('dentist_list');
			$row = $qdentist_list->row_array();
			
			$service_offered = $this->input->post('service');
			print_r($service_offered);
			
			$dentist_profile = array(
				'profile_pic' => $this->input->post('dentist_photo_file'),
				'first_name' => $this->input->post('fname'),
				'middle_name' => $this->input->post('middle'),
				'sur_name' => $this->input->post('lname'),
				'birth_month' => $callback_date['month'],
				'birth_day' => $callback_date['day'],
				'birth_year' => $callback_date['year'],
				'dentist_gender' => $this->input->post('dentist-gender'),
				'license_number' => $this->input->post('license'),
				'clinic_pic' => $this->input->post('clinic_photo_file'),
				'clinic_name' => $this->input->post('clinic_name'),
				'dentist_services' => json_encode($service_offered),	//DENTIST SERVICES
				'services_offered' => $this->input->post('other_service'),
				'clinic_address' => $this->input->post('clinic_address'),
				'tel_number' => $this->input->post('landline'),
				'cel_number' => $this->input->post('mobile'),
				'email' => $this->input->post('email1'),
				'fb_fanpage' => $this->input->post('fanpage'),
				'twitter' => $this->input->post('tweet'),
				'sunday_in' => $this->input->post('in_sunday'),
				'sunday_out' => $this->input->post('out_sunday'),
				'monday_in' => $this->input->post('in_monday'),
				'monday_out' => $this->input->post('out_monday'),
				'tuesday_in' => $this->input->post('in_tuesday'),
				'tuesday_out' => $this->input->post('out_tuesday'),
				'wednesday_in' => $this->input->post('in_wednesday'),
				'wednesday_out' => $this->input->post('out_wednesday'),
				'thursday_in' => $this->input->post('in_thursday'),
				'thursday_out' => $this->input->post('out_thursday'),
				'friday_in' => $this->input->post('in_friday'),
				'friday_out' => $this->input->post('out_friday'),
				'saturday_in' => $this->input->post('in_saturday'),
				'saturday_out' => $this->input->post('out_saturday')				
			);
			
			$this->db->where('id', $dent_id);
			$this->db->update('dentist_list', $dentist_profile);

			/* for deleting existing profile pic */
			if($this->input->post('dentist_photo_existing_file') || $this->input->post('dentist_photo_file'))
			{
				$file_name_existing = $this->input->post('dentist_photo_existing_file');
				$file_name = $this->input->post('dentist_photo_file');
				if($file_name_existing == $file_name)
				{
					/* do nothing */
				}
				else
				{
					$this->deleteFiles($file_name_existing);
				}
			}
			} else {
				echo 'no post data detected.';
			}
			/* for deleting existing clinic pic */
			if($this->input->post('clinic_photo_existing_file') || $this->input->post('clinic_photo_file'))
			{
				$file_name_existing = $this->input->post('clinic_photo_existing_file');
				$file_name = $this->input->post('clinic_photo_file');
				if($file_name_existing == $file_name)
				{
					/* do nothing */
				}
				else
				{
					$this->deleteFiles($file_name_existing);
				}
			} else {
				echo 'no post data detected.';
			}
	}
	
	
	function upload_dentist_picture()
	{
		if(isset($_FILES['dentist-photo']))
		{
			$directory = 'dentist_img/';
			$uploaded = $this->upload_model->upload('dentist-photo', $directory);
			if(isset($uploaded['file_name']))
			{
				echo $uploaded['file_name'];
			}else
			{
				echo 'error';
			}
		}
	}
	function upload_clinic_picture()
	{
		if(isset($_FILES['clinic-photo']))
		{
			$directory = 'clinic_img/';
			$uploaded = $this->upload_model->upload('clinic-photo', $directory);
			if(isset($uploaded['file_name']))
			{
				echo $uploaded['file_name'];
			}else
			{
				echo 'error';
			}
		}
	}
	
	function deleteFiles($name=null)
	{
		$path = 'dentist_img/';
		$path = 'clinic_img/';
		$files = glob($path.$name); // get all file names	

		foreach($files as $file){ // iterate files
			if(is_file($file))
			{
				unlink($file); // delete file
				echo 'deleted';
			}else
			{
				echo 'failed';
			}
		}   
	}
	
	
	function separate_date($date = null) {
		// $date = '07/18/1986';
		$vdate = strtotime($date);
		$array_date['month'] = date('F', $vdate);
		$array_date['day'] = date('j', $vdate);
		$array_date['year'] = date('Y', $vdate);
		return $array_date;
	}
}