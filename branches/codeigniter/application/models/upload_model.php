<?php
class Upload_Model extends CI_Model {
	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
	}
	
	function upload()
	{
		$upload_dir = 'patient_picture/';
		if(!is_dir($upload_dir))
		{
		   mkdir($upload_dir, 0755, true);
		}	
		
		$this->load->library('upload');
		$config['upload_path'] = $upload_dir; //if the files does not exist it'll be created 
		$config['allowed_types'] = 'gif|jpg|png|jpeg|ico';
		$config['encrypt_name']  = TRUE;
		
		$this->upload->initialize($config);
		
		
	}
}
?>