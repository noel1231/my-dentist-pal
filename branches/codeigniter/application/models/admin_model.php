<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of admin_model
 *
 * @author PC001
 */
class Admin_model  extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        
    }
    
    public function uservalidate($data = array())
    {
        $username = $data['username'];
        $password = md5($data['password']);
        
        $query =  $this->db->select('*')
                            ->from('admin_account')
                            ->where('admin_name', $username)
                            ->where('admin_password' , $password)
                            ->get();

        return $query->row_array();
    }
    
    public function total_num_dentist()
    {
        $output = array();
        
        $query =  $this->db->get('dentist_list');
        $output['dentist'] = $query->num_rows();
        
        $query_premium =  $this->db->select('*')
                                    ->from('dentist_list')
                                    ->where('account_status', '1')
                                    ->get();
        
        $output['dentist_premium'] = $query_premium->num_rows();
        
        $query_free =  $this->db->select('*')
                                ->from('dentist_list')
                                ->where('account_status', '0')
                                ->get();
        
        $output['dentist_free'] = $query_free->num_rows();
        
        return $output;
    }
    
    public function total_patient_each_dentist()
    {
        $query =  $this->db->select('*')
                            ->from('dentist_list')
                            ->get();
        
        if ($query->num_rows() > 0)
        {
            $output = array();
            $output['patient_1'] = 0;
            $output['patient_zero'] = 0;
            
            foreach ($query->result_array() as $row)
            {
               $dentist_id = $row['id'];
               
               $query_patient =  $this->db->select('count(*) as patient')
                                        ->from('patient_list')
                                        ->where('dentist_id', $dentist_id)
                                        ->get();
               
               foreach ($query_patient->result_array() as $row_patient)
                {
                   if ($query_patient->num_rows() > 0)
                    {
                         if($row_patient['patient'] >= 1)
                         {
                             $output['patient_1']++;
                         }
                         elseif($row_patient['patient'] < 1)
                         {
                             $output['patient_zero']++;
                         }
                    }

                }
            }
            
            return $output;
        }
    }
    
    public function total_num_patient()
    {
        $output = array();
        
        $query =  $this->db->get('patient_list');
        $output['patient'] = $query->num_rows();
        
        $date_today = date("Y-m-d") . " " . date('G:i:s');
        $date_less_than = date("Y-m-d",strtotime($date_today. '-7 days')) . " " . date('G:i:s');

        $query_patient =  $this->db->query("SELECT COUNT(*) as patient_count FROM patient_list WHERE date_of_entry >= '$date_less_than' and date_of_entry <= '$date_today'");
        $output['patient_within_seven'] = $query_patient->result_array();
        
        return $output;
        
    }
    
    public function dentist_list()
    {
        $output = array();
        $output['td'] = "";
        
        $query =  $this->db->select('*')
                            ->from('dentist_list')
                            ->limit('2','5')
                            ->get();
        
        if ($query->num_rows() > 0)
        {
            foreach($query->result_array() as $row)
            {
                if($row['status'] == 1)
                {
                    $verify = 'yes';
                }
                else
                {
                    $verify = 'no';
                }

                $output['td'] .= "<tr>
                                    <td>" . $row['id'] . "</td>
                                    <td>" . $row['sur_name'] . "</td>
                                    <td>" . $row['first_name'] . "</td>
                                    <td>WEW</td>
                                    <td>" . $row['email'] . "</td>
                                    <td>" . $row['cel_number'] . "</td>
                                    <td>" . $row['tel_number'] . "</td>
                                    <td>0</td>
                                    <td>" . $row['register_date'] . "</td>
                                    <td>" . $verify . "</td>
                                    <td></td>
                                </tr>";

               
            }
            return $output;
        }
    }
}

?>
