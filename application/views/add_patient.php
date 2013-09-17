<?php
	
?>
<style>
#myTab {
	position: absolute;
	left: -110px;
	top: 30px;
}
#myTab li {
	float:none;
	
}
#myTab li a {
	border: 1px solid #ddd;
	border-radius:0;
	
}
#myTab li.active a {
	border-right: none;
	
}
@media(max-width: 1008px)
{
	#myTab {
		position: initial;
	}
	#myTab li {
		float:left;
		
	}
	#myTab li a {
		cursor: default;
		background-color: #fff;
		border: 1px solid #ddd;
		border-bottom-color: transparent;
		border-radius: 4px 4px 0 0;
		
	}
}
</style>
<div class="wrapper">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<ul class="nav nav-tabs" id="myTab">
				<li class="active"><a href="#add_patient" data-toggle="tab">Add Patient</a></li>
				<li><a href="#dentist_history" data-toggle="tab">Dentist History</a></li>
				<li><a href="#medical_history" data-toggle="tab">Medical History</a></li>
			</ul>
			<div class="tab-content">
				<div class="tab-pane active" id="add_patient">
					<div class="well well-lg">
					<?php
						$multipart = array(
							'id'=>'patient_info_form',
							'class'=>'form-horizontal'
						);
						
						echo form_open_multipart('',$multipart);
					?>
						
							<h3 style="font-weight:bold">Patient Info</h3>
							<div class="form-group">
								<label for="inputEmail1" class="col-lg-4 control-label">Patient ID number</label>
								<div class="col-lg-5">
									<span style="line-height: 27px;"><?php echo time(); ?></span>
									<input type="hidden" class="form-control" id="patient_id" name="patient_id" value="<?php echo time(); ?>">
								</div>
							</div>
							<div class="form-group">
								<label for="inputEmail1" class="col-lg-4 control-label">Entry Date</label>
								<div class="col-lg-5">
									<input type="text" class="form-control" name="patient_date" value="<?php echo date('Y-m-d H:i:s',time()); ?>" readonly>
								</div>
							</div>
							<div class="form-group">
								<label for="inputPassword1" class="col-lg-4 control-label">Photo</label>
								<div class="col-lg-5">
									<input type="file" class="form-control" id="patient_photo" name="patien_photo">
									<div class="col-sm-12" style="margin-top: 10px;">
										<img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&text=no+image" >
									</div>
								</div>
							</div>
							<div class="form-group">
								<label for="inputEmail1" class="col-lg-4 control-label">First Name</label>
								<div class="col-lg-5">
									<input type="text" class="form-control" id="patient_fname" name="patient_fname">
								</div>
							</div>
							<div class="form-group">
								<label for="inputEmail1" class="col-lg-4 control-label">Middle Name</label>
								<div class="col-lg-5">
									<input type="text" class="form-control" id="patient_mname" name="patient_mname">
								</div>
							</div>
							<div class="form-group">
								<label for="inputEmail1" class="col-lg-4 control-label">Last Name</label>
								<div class="col-lg-5">
									<input type="text" class="form-control" id="patient_lname" name="patient_lname">
								</div>
							</div>
							<div class="form-group">
								<label for="inputEmail1" class="col-lg-4 control-label">Nick Name</label>
								<div class="col-lg-5">
									<input type="text" class="form-control" id="patient_nname" name="patient_nname">
								</div>
							</div>
							<div class="form-group">
								<label for="inputEmail1" class="col-lg-4 control-label">Sex</label>
								<div class="col-lg-5">
									<select id="patient_sex" class="form-control" name="patient_sex">
										<option value="">Select...</option>
										<option value="female">Female</option>
										<option value="male">Male</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label for="inputEmail1" class="col-lg-4 control-label">Birth Date</label>
								<div class="col-lg-5">
									<input type="text" class="form-control datepicker" name="patient_bday">
								</div>
							</div>
							<div class="form-group">
								<label for="inputEmail1" class="col-lg-4 control-label">Age</label>
								<div class="col-lg-2">
									<input type="number" class="form-control" id="patient_age" name="patient_age">
								</div>
							</div>
							<div class="form-group">
								<label for="inputEmail1" class="col-lg-4 control-label">Home Address</label>
								<div class="col-lg-5">
									<textarea class="form-control" id="patient_address" rows="3" name="patient_address"></textarea>
								</div>
							</div>
							<div class="form-group">
								<label for="inputEmail1" class="col-lg-4 control-label">Email Address</label>
								<div class="col-lg-5">
									<input type="email" class="form-control" id="patient_email" name="patient_email">
								</div>
							</div>
							<div class="form-group">
								<label for="inputEmail1" class="col-lg-4 control-label">Home Number</label>
								<div class="col-lg-5">
									<input type="text" class="form-control" id="patient_homeNum" name="patient_homeNum">
								</div>
							</div>
							<div class="form-group">
								<label for="inputEmail1" class="col-lg-4 control-label">Office Number</label>
								<div class="col-lg-5">
									<input type="text" class="form-control" id="patient_officeName" name="patient_officeName">
								</div>
							</div>
							<div class="form-group">
								<label for="inputEmail1" class="col-lg-4 control-label">Fax Number</label>
								<div class="col-lg-5">
									<input type="text" class="form-control" id="patient_faxNum" name="patient_faxNum">
								</div>
							</div>
							<div class="form-group">
								<label for="inputEmail1" class="col-lg-4 control-label">Mobile Number</label>
								<div class="col-lg-5">
									<input type="text" class="form-control" id="patient_mobileNum" name="patient_mobileNum">
								</div>
							</div>
							<div class="form-group">
								<label for="inputEmail1" class="col-lg-4 control-label">Occupation</label>
								<div class="col-lg-5">
									<input type="text" class="form-control" id="patient_occupation" name="patient_occupation">
								</div>
							</div>
							<div class="form-group">
								<label for="inputEmail1" class="col-lg-4 control-label">Nationality</label>
								<div class="col-lg-5">
									<input type="text" class="form-control" id="patient_nationality" name="patient_nationality">
								</div>
							</div>
							<div class="form-group">
								<label for="inputEmail1" class="col-lg-4 control-label">Religion</label>
								<div class="col-lg-5">
									<input type="text" class="form-control" id="patient_religion" name="patient_religion">
								</div>
							</div>
							<div class="form-group">
								<label for="inputEmail1" class="col-lg-4 control-label">Dental Insurance</label>
								<div class="col-lg-5">
									<input type="text" class="form-control" id="patient_insurance" name="patient_insurance">
								</div>
							</div>
							<div class="form-group">
								<label for="inputEmail1" class="col-lg-4 control-label">Effective Date</label>
								<div class="col-lg-5">
									<input type="text" class="form-control datepicker" id="patient_effectiveDate" name="patient_effectiveDate">
								</div>
							</div>
							<div class="form-group">
								<h4 class="col-md-offset-2">For Minors</h4 >
							</div>
							<div class="form-group">
								<label for="inputEmail1" class="col-lg-4 control-label">Parent or Guardian Name</label>
								<div class="col-lg-5">
									<input type="text" class="form-control" id="patient_parent" name="patient_parent">
								</div>
							</div>
							<div class="form-group">
								<label for="inputEmail1" class="col-lg-4 control-label">Occupation</label>
								<div class="col-lg-5">
									<input type="text" class="form-control" id="patient_occupation_minor" name="patient_occupation_minor">
								</div>
							</div>
							<div class="form-group">
								<label for="inputEmail1" class="col-lg-4 control-label">Whom may we think for referring you?</label>
								<div class="col-lg-5">
									<input type="text" class="form-control" id="patient_referral" name="patient_referral">
								</div>
							</div>
							<div class="form-group">
								<label for="inputEmail1" class="col-lg-4 control-label">What is your reason for dental consultation?</label>
								<div class="col-lg-5">
									<textarea class="form-control" id="patient_consultation" rows="4" name="patient_consultation"></textarea>
								</div>
							</div>
							<div class="form-group">
								<div class="col-lg-5 col-md-offset-9">
									<button type="button" alt="dentist_history" class="button_next btn btn-primary col-lg-5">Next</button>
								</div>
							</div>
						</form>
					</div>
				</div>
				<div class="tab-pane" id="dentist_history">
					<div class="well well-lg">
						<form class="form-horizontal" role="form" id="dental_history_form" method="post">
							<h3 style="font-weight:bold">Dentist History</h3>
							<div class="form-group">
								<label for="inputEmail1" class="col-lg-4 control-label">Previous Dentist</label>
								<div class="col-lg-5">
									<input type="text" class="form-control" id="patient_previews_dentist" name="patient_previews_dentist">
								</div>
							</div>
							<div class="form-group">
								<label for="inputEmail1" class="col-lg-4 control-label">Last Dental Visit</label>
								<div class="col-lg-5">
									<input type="text" class="form-control datepicker" id="patient_last_visit" name="patient_last_visit">
								</div>
							</div>
							<div class="form-group">
								<label for="inputEmail1" class="col-lg-4 control-label">Reason for last visit</label>
								<div class="col-lg-5">
									<textarea class="form-control" id="patient_reason_visit" rows="4" name="patient_reason_visit"></textarea>
								</div>
							</div>
							<div class="form-group">
								<label for="inputEmail1" class="col-lg-4 control-label">How often do you floss?</label>
								<div class="col-lg-5">
									<input type="text" class="form-control" id="patient_many_floss" name="patient_many_floss">
								</div>
							</div>
							<div class="form-group">
								<label for="inputEmail1" class="col-lg-4 control-label">How often do you brush?</label>
								<div class="col-lg-5">
									<input type="text" class="form-control" id="patient_many_brush" name="patient_many_brush">
								</div>
							</div>
							<div class="form-group">
								<h4 class="col-md-offset-1">Do you have any of the following?</h4>
							</div>
							<div class="form-group">
								<div class="col-lg-offset-4 col-lg-10">
									<div class="checkbox">
										<label>
											<input type="checkbox" name="cavity[]" value="bad_breath"> 
											Bad Breath
										</label>
									</div>
								</div>
								<div class="col-lg-offset-4 col-lg-10">
									<div class="checkbox">
										<label>
											<input type="checkbox" name="cavity[]" value="bleeding_gums"> 
											Bleeding Gums
										</label>
									</div>
								</div>
								<div class="col-lg-offset-4 col-lg-10">
									<div class="checkbox">
										<label>
											<input type="checkbox" name="cavity[]" value="clicking_jaw"> 
											Clicking or Lock Jaw
										</label>
									</div>
								</div>
								<div class="col-lg-offset-4 col-lg-10">
									<div class="checkbox">
										<label>
											<input type="checkbox" name="cavity[]" value="food_collect"> 
											Food collection  between teeth
										</label>
									</div>
								</div>
								<div class="col-lg-offset-4 col-lg-10">
									<div class="checkbox">
										<label>
											<input type="checkbox" name="cavity[]" value="grinding_teeth"> 
											Grinding teeth
										</label>
									</div>
								</div>
								<div class="col-lg-offset-4 col-lg-10">
									<div class="checkbox">
										<label>
											<input type="checkbox" name="cavity[]" value="loose_teeth"> 
											Loose teeth or broken fillings
										</label>
									</div>
								</div>
								<div class="col-lg-offset-4 col-lg-10">
									<div class="checkbox">
										<label>
											<input type="checkbox" name="cavity[]" value="periodental_treatment"> 
											Periodental Treatment
										</label>
									</div>
								</div>
								<div class="col-lg-offset-4 col-lg-10">
									<div class="checkbox">
										<label>
											<input type="checkbox" name="cavity[]" value="sensitive_hot"> 
											Sensitivity to hot water
										</label>
									</div>
								</div>
								<div class="col-lg-offset-4 col-lg-10">
									<div class="checkbox">
										<label>
											<input type="checkbox" name="cavity[]" value="sensitive_cold"> 
											Sensitivity to cold water
										</label>
									</div>
								</div>
								<div class="col-lg-offset-4 col-lg-10">
									<div class="checkbox">
										<label>
											<input type="checkbox" name="cavity[]" value="sensitive_sweet"> 
											Sensitivity to sweet
										</label>
									</div>
								</div>
								<div class="col-lg-offset-4 col-lg-10">
									<div class="checkbox">
										<label>
											<input type="checkbox" name="cavity[]" value="sensitive_biting"> 
											Sensitivity when biting
										</label>
									</div>
								</div>
								<div class="col-lg-offset-4 col-lg-10">
									<div class="checkbox">
										<label>
											<input type="checkbox" name="cavity[]" value="sore_in_mouth"> 
											Sores or growth in your mouth
										</label>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label for="inputEmail1" class="col-lg-4 control-label">Others</label>
								<div class="col-lg-5">
									<input type="text" class="form-control" id="patient_other_info" name="patient_other_info">
								</div>
							</div>
							<div class="form-group">
								<div class="col-lg-5 col-md-offset-7">
									<button type="button" alt="add_patient" class="button_next btn btn-primary col-lg-5">Back</button>
									<button type="button" alt="medical_history" class="button_next btn btn-primary col-lg-5">Next</button>
								</div>
							</div>
						</form>
					</div>
				</div>
				<div class="tab-pane" id="medical_history">
					<div class="well well-lg">
						<form class="form-horizontal" role="form" id="medical_history_form" method="post">
							<h3 style="font-weight:bold">Medical History</h3>
							<div class="form-group">
								<label for="inputEmail1" class="col-lg-4 control-label">Name of physician</label>
								<div class="col-lg-5">
									<input type="text" class="form-control" id="patient_physician" name="patient_physician">
								</div>
							</div>
							<div class="form-group">
								<label for="inputEmail1" class="col-lg-4 control-label">Specialty if applicable</label>
								<div class="col-lg-5">
									<input type="text" class="form-control" id="patient_physician_specialty" name="patient_physician_specialty">
								</div>
							</div>
							<div class="form-group">
								<label for="inputEmail1" class="col-lg-4 control-label">Office Address</label>
								<div class="col-lg-5">
									<textarea class="form-control" id="patient_physician_office_address" rows="3" name="patient_physician_office_address"></textarea>
								</div>
							</div>
							<div class="row" style="margin-bottom:5px">
								<div class="col-md-6">1. Are you in good health?</div>
								<div class="col-md-6">
									<label class="checkbox-inline" style="padding-top:0;">
										<input type="radio" id="health_yes" name="health_patient" value="yes"> Yes
									</label>
									<label class="checkbox-inline" style="padding-top:0;">
										<input type="radio" id="health_no" name="health_patient" value="no"> No
									</label>
								</div>
							</div>
							<div class="row" style="margin-bottom:5px">
								<div class="col-md-6">2. Are you under medical treatment now?</div>
								<div class="col-md-6">
									<label class="checkbox-inline" style="padding-top:0;">
										<input type="radio" id="treatment_yes" name="medical_treatment_patient" value="yes"> Yes
									</label>
									<label class="checkbox-inline" style="padding-top:0;">
										<input type="radio" id="treatment_no" name="medical_treatment_patient" value="no"> No
									</label>
								</div>
							</div>
							<div class="row show_question" style="display:none;">
								<div class="col-md-6" style="padding-right: 0;text-align: right;">If so, what is the condition being treated?&nbsp;</div>
								<div class="col-md-6" style="padding-left:0;text-align: right;">
									<input type="text" class="col-md-12" name="patient_what_treatment">
								</div>
							</div>
							<div class="row" style="margin-bottom:5px">
								<div class="col-md-6">3. Have you ever had serious illness or surgical operation?</div>
								<div class="col-md-6">
									<label class="checkbox-inline" style="padding-top:0;">
										<input type="radio" name="illness_patient" value="yes"> Yes
									</label>
									<label class="checkbox-inline" style="padding-top:0;">
										<input type="radio" name="illness_patient" value="no"> No
									</label>
								</div>
							</div>
							<div class="row show_question2" style="display:none;">
								<div class="col-md-6" style="padding-right: 0;text-align: right;">If so, what illness or operation?&nbsp;</div>
								<div class="col-md-6" style="padding-left:0;text-align: right;">
									<input type="text" class="col-md-12" name="patient_what_illness" value="">
								</div>
							</div>
							<div class="row" style="margin-bottom:5px">
								<div class="col-md-6">4. Have you ever been hospitalized?</div>
								<div class="col-md-6">
									<label class="checkbox-inline" style="padding-top:0;">
										<input type="radio" name="hospitalized_patient" value="yes"> Yes
									</label>
									<label class="checkbox-inline" style="padding-top:0;">
										<input type="radio" name="hospitalized_patient" value="no"> No
									</label>
								</div>
							</div>
							<div class="row show_question3" style="display:none;">
								<div class="col-md-4" style="padding-right: 0;text-align: right;">If so, when and why?&nbsp;</div>
								<div class="col-md-8" style="padding-left:0;text-align: right;">
									<input type="text" class="col-md-6 datepicker" name="patient_when_hospitalized">
									<input type="text" class="col-md-6" name="patient_why_hospitalized">
								</div>
							</div>
							<div class="row" style="margin-bottom:5px">
								<div class="col-md-6">5. Are you taking any presciption or non prescription medication?</div>
								<div class="col-md-6">
									<label class="checkbox-inline" style="padding-top:0;">
										<input type="radio" name="presciption_patient" value="yes"> Yes
									</label>
									<label class="checkbox-inline" style="padding-top:0;">
										<input type="radio" name="presciption_patient" value="no"> No
									</label>
								</div>
							</div>
							<div class="row show_question4" style="display:none;">
								<div class="col-md-6" style="padding-right: 0;text-align: right;">If so, please specify?&nbsp;</div>
								<div class="col-md-6" style="padding-left:0;text-align: right;">
									<input type="text" class="col-md-12" name="patient_specify_prescription">
								</div>
							</div>
							<div class="row" style="margin-bottom:5px">
								<div class="col-md-6">6. Do you use tabacco products?</div>
								<div class="col-md-6">
									<label class="checkbox-inline" style="padding-top:0;">
										<input type="radio" name="tabacco_patient" value="yes"> Yes
									</label>
									<label class="checkbox-inline" style="padding-top:0;">
										<input type="radio" name="tabacco_patient" value="no"> No
									</label>
								</div>
							</div>
							<div class="row" style="margin-bottom:5px">
								<div class="col-md-6">7. Do you use alcohol coccaine or other dangerous drugs?</div>
								<div class="col-md-6">
									<label class="checkbox-inline" style="padding-top:0;">
										<input type="radio" name="drugs_patient" value="yes"> Yes
									</label>
									<label class="checkbox-inline" style="padding-top:0;">
										<input type="radio" name="drugs_patient" value="no"> No
									</label>
								</div>
							</div>
							<div class="row" style="margin-bottom:5px">
								<div class="col-md-6">8. Are you allergic to any of the following?</div>
								<div class="col-md-6">
									<div class="checkbox">
										<input type="checkbox" name="allergic[]" value="anesthetic">
										Local Anesthetic (ex.Lidocaine)
									</div>
									<div class="checkbox">
										<input type="checkbox" name="allergic[]" value="penicillin">
										Penicillin Antibiotics
									</div>
									<div class="checkbox">
										<input type="checkbox" name="allergic[]" value="sulfa">
										Sulfa Drugs
									</div>
									<div class="checkbox">
										<input type="checkbox" name="allergic[]" value="aspirin">
										Aspirin
									</div>
									<div class="checkbox">
										<input type="checkbox" name="allergic[]" value="latex">
										Latex
									</div>
								</div>
							</div>
							<div class="row" style="margin-bottom:5px">
								<div class="col-md-6">9. Bleeding time?</div>
								<div class="col-md-6">
									<input type="text" class="col-md-12" name="patient_bleeding_time">
								</div>
							</div>
							<div class="row" style="margin-bottom:5px">
								<div class="col-md-6">10. For women only:</div>
							</div>
							<div class="row" style="margin-bottom:5px">
								<div class="container">
									<div class="col-md-6">A. Are you pregnant?</div>
									<div class="col-md-6">
										<label class="checkbox-inline" style="padding-top:0;">
											<input type="radio" name="pregnant_patient" value="yes"> Yes
										</label>
										<label class="checkbox-inline" style="padding-top:0;">
											<input type="radio" name="pregnant_patient" value="no"> No
										</label>
									</div>
								</div>
								<div class="container">
									<div class="col-md-6">B. Are you nursing?</div>
									<div class="col-md-6">
										<label class="checkbox-inline" style="padding-top:0;">
											<input type="radio" name="nursing_patient" value="yes"> Yes
										</label>
										<label class="checkbox-inline" style="padding-top:0;">
											<input type="radio" name="nursing_patient" value="no"> No
										</label>
									</div>
								</div>
								<div class="container">
									<div class="col-md-6">C. Are you taking birth control pills?</div>
									<div class="col-md-6">
										<label class="checkbox-inline" style="padding-top:0;">
											<input type="radio" name="pills_patient" value="yes"> Yes
										</label>
										<label class="checkbox-inline" style="padding-top:0;">
											<input type="radio" name="pills_patient" value="no"> No
										</label>
									</div>
								</div>
							</div>
							<div class="row" style="margin-bottom:5px">
								<div class="col-md-6">11. Blood type?</div>
								<div class="col-md-6">
									<select name="patient_blood_type">
										<option value="">Select...</option>
										<option value="a">Type A</option>
										<option value="b">Type B</option>
										<option value="c">Type O</option>
									</select>
								</div>
							</div>
							<div class="row" style="margin-bottom:5px">
								<div class="col-md-6">12. Blood presure?</div>
								<div class="col-md-6">
									<input type="text" class="col-md-12" name="patient_blood_presure">
								</div>
							</div>
							<div class="row" style="margin-bottom:5px">
								<div class="col-md-12">13. Do you have or have you any of the following? Check which apply:</div>
							</div>
							<div class="row">
								<?php $sickness = array(); ?>
								<div class="col-md-4">
									<div class="checkbox">
										<input type="checkbox" name="sickness[]" value="highBlood">
										High blood pressure
									</div>
									<div class="checkbox">
										<input type="checkbox" name="sickness[]" value="lowBlood">
										Low blood pressure
									</div>
									<div class="checkbox">
										<input type="checkbox" name="sickness[]" value="epilepsy">
										Epilepsy or Convulsions
									</div>
									<div class="checkbox">
										<input type="checkbox" name="sickness[]" value="aids">
										AIDS or HIV infection
									</div>
									<div class="checkbox">
										<input type="checkbox" name="sickness[]" value="std">
										Sexually transmitted disease
									</div>
									<div class="checkbox">
										<input type="checkbox" name="sickness[]" value="ulcers">
										Stomach Troubles or Ulcers
									</div>
									<div class="checkbox">
										<input type="checkbox" name="sickness[]" value="seizure">
										Fainting Seizure
									</div>
									<div class="checkbox">
										<input type="checkbox" name="sickness[]" value="weightLoss">
										Rapid Weight Loss
									</div>
									<div class="checkbox">
										<input type="checkbox" name="sickness[]" value="radiation">
										Radiation Therapy
									</div>
									<div class="checkbox">
										<input type="checkbox" name="sickness[]" value="implant">
										Joint Replacement or Implant
									</div>
									<div class="checkbox">
										<input type="checkbox" name="sickness[]" value="heartSurgery">
										Heart Surgery
									</div>
									<div class="checkbox">
										<input type="checkbox" name="sickness[]" value="heartAttack">
										Heart Attack
									</div>
									<div class="checkbox">
										<input type="checkbox" name="sickness[]" value="thyroid">
										Thyroid Problem
									</div>
								</div>
								<div class="col-md-4">
									<div class="checkbox">
										<input type="checkbox" name="sickness[]" value="heartDisease">
										Heart Disease
									</div>
									<div class="checkbox">
										<input type="checkbox" name="sickness[]" value="heartmurmur">
										Heart Murmur
									</div>
									<div class="checkbox">
										<input type="checkbox" name="sickness[]" value="liverDisease">
										Hepatitis or Liver Disease
									</div>
									<div class="checkbox">
										<input type="checkbox" name="sickness[]" value="rheumatic">
										Rheumatic Fever
									</div>
									<div class="checkbox">
										<input type="checkbox" name="sickness[]" value="allergies">
										Hay Fever or Allergies
									</div>
									<div class="checkbox">
										<input type="checkbox" name="sickness[]" value="respiratory">
										Respiratory Problems
									</div>
									<div class="checkbox">
										<input type="checkbox" name="sickness[]" value="Jaundice">
										Hepatitis or Jaundice
									</div>
									<div class="checkbox">
										<input type="checkbox" name="sickness[]" value="tuberculosis">
										Tuberculosis
									</div>
									<div class="checkbox">
										<input type="checkbox" name="sickness[]" value="swollenAnkles">
										Swollen Ankles
									</div>
									<div class="checkbox">
										<input type="checkbox" name="sickness[]" value="kidneyDisease">
										Kidney Disease
									</div>
									<div class="checkbox">
										<input type="checkbox" name="sickness[]" value="diabetes">
										Diabetes
									</div>
									<div class="checkbox">
										<input type="checkbox" name="sickness[]" value="chestPain">
										Chest Pain
									</div>
									<div class="checkbox">
										<input type="checkbox" name="sickness[]" value="stroke">
										Stroke
									</div>
								</div>
								<div class="col-md-4">
									<div class="checkbox">
										<input type="checkbox" name="sickness[]" value="cancer">
										Cancer or Tumors
									</div>
									<div class="checkbox">
										<input type="checkbox" name="sickness[]" value="anemia">
										Anemia
									</div>
									<div class="checkbox">
										<input type="checkbox" name="sickness[]" value="angina">
										Angina
									</div>
									<div class="checkbox">
										<input type="checkbox" name="sickness[]" value="asthma">
										Asthma
									</div>
									<div class="checkbox">
										<input type="checkbox" name="sickness[]" value="emphysemia">
										Emphysemia
									</div>
									<div class="checkbox">
										<input type="checkbox" name="sickness[]" value="bleedingProblems">
										Bleeding Problems
									</div>
									<div class="checkbox">
										<input type="checkbox" name="sickness[]" value="headInjuries">
										Head Injuries
									</div>
									<div class="checkbox">
										<input type="checkbox" name="sickness[]" value="arthritis">
										Arthritis or Rheumatism
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="col-lg-5 col-md-offset-7">
									<button type="button" alt="dentist_history" class="button_next btn btn-primary col-lg-5">Back</button>
									<button type="button" class="submit_all_form btn btn-primary col-lg-5">Submit</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>