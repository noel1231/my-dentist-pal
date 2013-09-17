<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Patient_add extends CI_Controller {
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
	}
	
	function index()
	{
		$data['title'] = 'My Dentist Pal - Digitize your dental management practice. A full-featured online tool that integrates dental practice management and confidential patient clinical charting, which dentist can access wherever they are.';
		$data['header'] = $this->load->view('homepage/header', '', true);
		$data['body'] = $this->load->view('add_patient','',true);
		$this->load->view('homepage', $data);
	}
	
	function submit_patient()
	{
		/* patient info */
		
		/* dental history */
		if($this->input->post('cavity'))
		{
			$bad_breath = array_search('bad_breath',$this->input->post('cavity'));
			$bleeding_gums = array_search('bleeding_gums',$this->input->post('cavity'));
			$clicking_jaw = array_search('clicking_jaw',$this->input->post('cavity'));
			$food_collect = array_search('food_collect',$this->input->post('cavity'));
			$grinding_teeth = array_search('grinding_teeth',$this->input->post('cavity'));
			$loose_teeth = array_search('loose_teeth',$this->input->post('cavity'));
			$periodental_treatment = array_search('periodental_treatment',$this->input->post('cavity'));
			$sensitive_hot = array_search('sensitive_hot',$this->input->post('cavity'));
			$sensitive_cold = array_search('sensitive_cold',$this->input->post('cavity'));
			$sensitive_sweet = array_search('sensitive_sweet',$this->input->post('cavity'));
			$sensitive_biting = array_search('sensitive_biting',$this->input->post('cavity'));
			$sore_in_mouth = array_search('sore_in_mouth',$this->input->post('cavity'));
		}else
		{
			$bad_breath 			= false;
			$bleeding_gums 			= false;
			$clicking_jaw 			= false;
			$food_collect 			= false;
			$grinding_teeth 		= false;
			$loose_teeth 			= false;
			$periodental_treatment 	= false;
			$sensitive_hot 			= false;
			$sensitive_cold 		= false;
			$sensitive_sweet 		= false;
			$sensitive_biting 		= false;
			$sore_in_mouth 			= false;
		}

		
		/* medical	history */
		$data_gh = array();
		if($this->input->post('medical_treatment_patient'))
		{
			$data_gh['answer'] = $this->input->post('medical_treatment_patient');
			$data_gh['because'] = $this->input->post('patient_what_treatment');
		}
		
		$data_illness = array();
		if($this->input->post('illness_patient'))
		{
			$data_illness['answer'] = $this->input->post('illness_patient');
			$data_illness['because'] = $this->input->post('patient_what_illness');
		}
		
		$data_hospitalized = array();
		if($this->input->post('hospitalized_patient'))
		{
			$data_hospitalized['answer'] = $this->input->post('hospitalized_patient');
			$data_hospitalized['because'] = $this->input->post('patient_why_hospitalized');
			$data_hospitalized['when'] = $this->input->post('patient_when_hospitalized');
		}
		$data_prescription = array();
		if($this->input->post('presciption_patient'))
		{
			$data_prescription['answer'] = $this->input->post('presciption_patient');
			$data_prescription['because'] = $this->input->post('patient_specify_prescription');
		}
		
		if($this->input->post('allergic'))
		{
			$anesthetic = array_search('anesthetic',$this->input->post('allergic'));
			$penicillin = array_search('penicillin',$this->input->post('allergic'));
			$sulfa = array_search('sulfa',$this->input->post('allergic'));
			$aspirin = array_search('aspirin',$this->input->post('allergic'));
			$latex = array_search('latex',$this->input->post('allergic'));
		}else
		{
			$anesthetic 	= false;
			$penicillin 	= false;
			$sulfa 			= false;
			$aspirin 		= false;
			$latex 			= false;
		}
		
		$convert = array();
		if($this->input->post('sickness'))
		{
			foreach($this->input->post('sickness') as $key => $rr)
			{
				$convert['sick'.$key] = $rr;
			}
		}
		
		$data_medical_history = array(
			'id'=> $this->input->post('patient_id'),
			'date_of_entry'=> $this->input->post('patient_date'),
			'patient_first_name'=> $this->input->post('patient_fname'),
			'patient_middle_name'=> $this->input->post('patient_mname'),
			'patient_last_name'=> $this->input->post('patient_lname'),
			'patient_nickname'=> $this->input->post('patient_nname'),
			'patient_name'=> $this->input->post('patient_fname').' '.$this->input->post('patient_mname').' '.$this->input->post('patient_mname').' '.$this->input->post('patient_lname'),
			'patient_gender'=> $this->input->post('patient_sex'),
			'patient_bday'=> $this->input->post('patient_bday'),
			'patient_age'=> $this->input->post('patient_age'),
			'patient_address'=> $this->input->post('patient_address'),
			'email'=> $this->input->post('patient_email'),
			'patient_home_number'=> $this->input->post('patient_homeNum'),
			'patient_office_number'=> $this->input->post('patient_officeName'),
			'patient_fax_number'=> $this->input->post('patient_faxNum'),
			'patient_mobile_number'=> $this->input->post('patient_mobileNum'),
			'patient_phone'=> $this->input->post('patient_mobileNum'),
			'patient_occupation'=> $this->input->post('patient_occupation'),
			'patient_nationality'=> $this->input->post('patient_nationality'),
			'patient_religion'=> $this->input->post('patient_religion'),
			'patient_dental_insurance'=> $this->input->post('patient_insurance'),
			'effective_date'=> $this->input->post('patient_effectiveDate'),
			'patient_guardian'=> $this->input->post('patient_parent'),
			'guardian_occupation'=> $this->input->post('patient_occupation_minor'),
			'referred_by'=> $this->input->post('patient_referral'),
			'dental_reason'=> $this->input->post('patient_consultation'),
			'former_dentist'=>$this->input->post('patient_previews_dentist'),
			'date_of_last_visit'=>$this->input->post('patient_last_visit'),
			'reason_for_visit'=>$this->input->post('patient_reason_visit'),
			'how_many_floss'=>$this->input->post('patient_many_floss'),
			'how_many_brush'=>$this->input->post('patient_many_brush'),
			'bad_breath'=> $bad_breath !== false ? 'yes' : 'no',
			'bleeding_gums'=> $bleeding_gums !== false ? 'yes' : 'no',
			'clicking_popping_jaw'=> $clicking_jaw !== false ? 'yes' : 'no',
			'food_collect'=> $food_collect !== false ? 'yes' : 'no',
			'grinding_teeth'=> $grinding_teeth !== false ? 'yes' : 'no',
			'loose_teeth'=> $loose_teeth !== false ? 'yes' : 'no',
			'periodental_treatment'=> $periodental_treatment !== false ? 'yes' : 'no',
			'sensitive_hot'=> $sensitive_hot !== false ? 'yes' : 'no',
			'sensitive_cold'=> $sensitive_cold !== false ? 'yes' : 'no',
			'sensitive_sweet'=> $sensitive_sweet !== false ? 'yes' : 'no',
			'sensitive_bite'=> $sensitive_biting !== false ? 'yes' : 'no',
			'sores_in_mouth'=> $sore_in_mouth !== false ? 'yes' : 'no',
			'other_info'=>$this->input->post('patient_other_info'),
			'physician_name'=>$this->input->post('patient_physician'),
			'physician_specialty'=>$this->input->post('patient_physician_specialty'),
			'physician_address'=>$this->input->post('patient_physician_office_address'),
			'good_health'=> $this->input->post('health_patient'),
			'medical_treatment'=>$data_gh ? json_encode($data_gh) : null,
			'illness_operation'=>$data_illness ? json_encode($data_illness) : ' ',
			'hospitalized'=>$data_hospitalized ? json_encode($data_hospitalized) : ' ',
			'precription_medication'=>$data_prescription ? json_encode($data_prescription) : ' ',
			'tabacco_products'=>$this->input->post('tabacco_patient'),
			'alcohol_drugs'=>$this->input->post('drugs_patient'),
			'local_anesthetic'=>$anesthetic !== false ? 'yes' : 'no',
			'penicillin'=>$penicillin !== false ? 'yes' : 'no',
			'sulfa'=>$sulfa !== false ? 'yes' : 'no',
			'aspirin'=>$aspirin !== false ? 'yes' : 'no',
			'latex'=>$latex !== false ? 'yes' : 'no',
			'menstruation'=>$this->input->post('patient_bleeding_time'),
			'pregnant'=>$this->input->post('pregnant_patient'),
			'nursing'=>$this->input->post('nursing_patient'),
			'control_pills'=>$this->input->post('pills_patient'),
			'blood_type'=>$this->input->post('patient_blood_type'),
			'blood_presure'=>$this->input->post('patient_blood_presure'),
			'sickness'=>$this->input->post('sickness') ? json_encode($convert) : ' '
		);
		
		$patient_query = $this->db->where('id',$this->input->post('patient_id'))->get('patient_list');
		if($patient_query->num_rows() > 0)
		{
			$this->db->where('id',$this->input->post('patient_id'))->update('patient_list',$data_medical_history);
		}else
		{
			$this->db->insert('patient_list',$data_medical_history);
		}
	}
}