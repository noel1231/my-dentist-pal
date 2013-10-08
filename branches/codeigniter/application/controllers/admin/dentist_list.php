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

    }
    
    public function index()
    {
        if($this->session->userdata('admin_id'))
        {
            $data['patient'] = $this->Admin->dentist_list();
            
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
