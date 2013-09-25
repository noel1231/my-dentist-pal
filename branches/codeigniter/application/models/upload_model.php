<?php
class Upload_Model extends CI_Model {
	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
	}
	
	function upload($field_name=null, $directory=null)
	{
		/* patient_picture */
		
		$upload_dir = $directory;
		if(!is_dir($upload_dir))
		{
		   mkdir($upload_dir, 0755, true);
		}	
		
		$this->load->library('upload');
		$config['upload_path'] = $upload_dir; //if the files does not exist it'll be created 
		$config['allowed_types'] = 'gif|jpg|png|jpeg|ico';
		$config['encrypt_name']  = TRUE;
		
		$this->upload->initialize($config);

			if (!$this->upload->do_upload($field_name))
			{
				$uploaded = $this->upload->display_errors();
			}
			else
			{
				$uploaded = $this->upload->data();
				
			}
		return $uploaded; /* prints the result of the operation and analyze the data */
	}
}
?>