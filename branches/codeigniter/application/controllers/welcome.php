<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
		$this->load->model('Patient_Edit_Model', 'patient_edit');
		$this->load->model('Charting_Model', 'charting');
		$this->load->model('Appointment_Model', 'appointment');
                
                //admin
                $this->load->model('Admin_model', 'Admin');
	}

	public function index()
	{
		if(!$this->db->field_exists('account_status', 'dentist_list')) {
			$this->db->query('ALTER TABLE `dentist_list` ADD `account_status` INT NOT NULL');
		}

		if($this->input->get('admin')) {
			$this->admin(); return false;
		}

		$this->patient_edit->check_missing_db();
		$this->charting->check_missing_db();
		$this->appointment->check_missing_db();

		$data['title'] = 'Medix Dental - Digitize your dental management practice. A full-featured online tool that integrates dental practice management and confidential patient clinical charting, which dentist can access wherever they are.';
	    
                $data['body'] = $this->load->view('homepage/body', '', true);
		$data['header'] = $this->load->view('homepage/header', '', true);
                $data['identifier'] = true;
                $data['display'] = '';
		$this->load->view('homepage', $data);
	}
	
	public function admin()
	{
            $data['title'] = 'Medix Dental - Digitize your dental management practice. A full-featured online tool that integrates dental practice management and confidential patient clinical charting, which dentist can access wherever they are.';
            $data['header'] = $this->load->view('homepage/header', '', true);
            $data['footer'] = $this->load->view('homepage/footer', '', true);
                
            if(isset($_POST['username']))
            {
                $this->validate_user($_POST);
                $data['display'] = 'Wrong User Account';
		$this->load->view('admin/login', $data);
                
            }
            else
            {
                unset($_POST);
                $data['display'] = '';
		$this->load->view('admin/login', $data);
            }
		
	}
        
        private function validate_user($data = array())
        {
            
            $user = $this->Admin->uservalidate($data);
            
            if(isset($user['admin_name']) && isset($user['admin_password']))
            {
                $this->session->set_userdata(array('admin_id' => $user['id']));
                header('Location: ' . base_url() . 'admin/admin_dashboard');
            }
            else
            {
                return;
            }
        }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */