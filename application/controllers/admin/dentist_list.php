<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of dentist_list
 *
 * @author Albert
 */

class dentist_list extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        
        $this->load->library('session');
        $this->load->database();
        $this->load->model('Admin_model', 'Admin');
        $this->load->library("pagination");

    }
    
    public function index($uri_segment="4")
    {
        if($this->session->userdata('admin_id'))
        {
            $data = array();
            $config = array();
            
            $config['base_url'] = base_url() . "admin/dentist_list/index/";
            $config['total_rows'] = $this->Admin->record_count();
            $config['per_page'] = 10;
            $config['uri_segment'] = 4;
            $config['use_page_numbers'] = TRUE;
            
            $this->pagination->initialize($config);
            
            $page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
            
            $data["patient"] = $this->Admin->dentist_list($config["per_page"], $page);
            $data["links"] = $this->pagination->create_links();
            
            $data['table_data'] = $data['patient']['td'];
            
            $data['footer'] = $this->load->view('dentist_dashboard/footer','', true);
            $this->load->view('admin/dentist_list', $data);
        }
        else
        {
            header('Location: ' . base_url() . 'admin');
        }
    }
}

?>
