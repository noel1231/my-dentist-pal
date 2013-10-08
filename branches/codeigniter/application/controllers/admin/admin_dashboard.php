<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of admin_dashboard
 *
 * @author Albert
 */
class admin_dashboard extends CI_Controller
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
            $data = array();
            
            // dentist
            $dentist = $this->get_dentist_info();
            
            $data['dentist'] = "<div class='row'>
                                    <div class='col-md-9 text-right'>
                                        <p>Total Number of Dentist:</p>
                                    </div>
                                    <div class='col-md-3 text-left' style='padding: 0'>
                                        <p>" . $dentist['total_dentist']['dentist'] . "</p>
                                    </div>
                                </div>
                                <div class='row'>
                                    <div class='col-md-9 text-right'>
                                        <p>Total Number of Dentist with more than 1 patient:</p>
                                    </div>
                                    <div class='col-md-3 text-left' style='padding: 0'>
                                        <p>". $dentist['total_patient_each_dentist']['patient_1'] . "</p>
                                    </div>
                                </div>
                                <div class='row'>
                                    <div class='col-md-9 text-right'>
                                        <p>Total Number of Dentist with 0 patient:</p>
                                    </div>
                                    <div class='col-md-3 text-left' style='padding: 0'>
                                        <p>" . $dentist['total_patient_each_dentist']['patient_zero'] .  "</p>
                                    </div>
                                </div>
                                <div class='row'>
                                    <div class='col-md-9 text-right'>
                                        <p>Total Free Account:</p>
                                    </div>
                                    <div class='col-md-3 text-left' style='padding: 0'>
                                        <p>" . $dentist['total_dentist']['dentist_free'] . "</p>
                                    </div>
                                </div>
                                <div class='row'>
                                    <div class='col-md-9 text-right'>
                                        <p>Total Premium Account:</p>
                                    </div>
                                    <div class='col-md-3 text-left' style='padding: 0'>
                                        <p>" . $dentist['total_dentist']['dentist_premium'] . "</p>
                                    </div>
                                </div>";
            
            // patient
            $patient = $this->get_patient_info();
            
            $data['patient'] = "<div class='row'>
                                    <div class='col-md-9 text-right'>
                                        <p>Total Number of Patient:</p>
                                    </div>
                                    <div class='col-md-3 text-left' style='padding: 0'>
                                        <p>" . $patient['total_patient']['patient'] . "</p>
                                    </div>
                                </div>
                                <div class='row'>
                                    <div class='col-md-9 text-right'>
                                        <p>Total Number of Patient Added within the last 7 days:</p>
                                    </div>
                                    <div class='col-md-3 text-left' style='padding: 0'>
                                        <p>" . $patient['total_patient']['patient_within_seven'][0]['patient_count'] . "</p>
                                    </div>
                                </div>";
            
            $data['footer'] = $this->load->view('dentist_dashboard/footer','', true);
            
            $this->load->view('admin/admin_dashboard', $data);
        }
        else
        {
            header('Location: ' . base_url() . 'admin');
        }
    }
    
    private function get_dentist_info()
    {
        $data = array();
        $data['total_dentist'] = $this->Admin->total_num_dentist();
        $data['total_patient_each_dentist'] = $this->Admin->total_patient_each_dentist();

        return $data;
    }
    
    private function get_patient_info()
    {
        $data = array();
        $data['total_patient'] = $this->Admin->total_num_patient();
        
        return $data;
    }
}
?>