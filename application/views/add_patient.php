<?php
	
?>
<style>
#myTab {
	position: absolute;
	left: -111px;
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
				<li class="active"><a href="#add_patient">Add Patient</a></li>
				<li><a href="#dentist_history">Dentist History</a></li>
				<li><a href="#medical_history">Medical History</a></li>
			</ul>
			<div class="tab-content">
				<div class="tab-pane active" id="add_patient">
					<div class="well well-lg">
						<form class="form-horizontal" role="form">
							<h3 style="font-weight:bold">Patient Info</h3>
							<div class="form-group">
								<label for="inputEmail1" class="col-lg-4 control-label">Patient ID number</label>
								<div class="col-lg-5">
									<span style="line-height: 27px;"><?php echo time(); ?></span>
									<input type="text" class="form-control" id="patient_id" style="display:none;">
								</div>
							</div>
							<div class="form-group">
								<label for="inputEmail1" class="col-lg-4 control-label">Entry Date</label>
								<div class="col-lg-5">
									<input type="text" class="form-control" id="patient_date">
								</div>
							</div>
							<div class="form-group">
								<label for="inputPassword1" class="col-lg-4 control-label">Photo</label>
								<div class="col-lg-5">
									<input type="file" class="form-control" id="patient_photo">
									<div class="col-sm-12" style="margin-top: 10px;">
										<img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&text=no+image" >
									</div>
								</div>
							</div>
							<div class="form-group">
								<label for="inputEmail1" class="col-lg-4 control-label">First Name</label>
								<div class="col-lg-5">
									<input type="text" class="form-control" id="patient_fname">
								</div>
							</div>
							<div class="form-group">
								<label for="inputEmail1" class="col-lg-4 control-label">Middle Name</label>
								<div class="col-lg-5">
									<input type="text" class="form-control" id="patient_mname">
								</div>
							</div>
							<div class="form-group">
								<label for="inputEmail1" class="col-lg-4 control-label">Last Name</label>
								<div class="col-lg-5">
									<input type="text" class="form-control" id="patient_lname">
								</div>
							</div>
							<div class="form-group">
								<label for="inputEmail1" class="col-lg-4 control-label">Nick Name</label>
								<div class="col-lg-5">
									<input type="text" class="form-control" id="patient_nname">
								</div>
							</div>
							<div class="form-group">
								<label for="inputEmail1" class="col-lg-4 control-label">Sex</label>
								<div class="col-lg-5">
									<select id="patient_sex" class="form-control">
										<option value="">Select...</option>
										<option value="female">Female</option>
										<option value="male">Male</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label for="inputEmail1" class="col-lg-4 control-label">Birth Date</label>
								<div class="col-lg-5">
									<input type="text" class="form-control" id="patient_bday">
								</div>
							</div>
							<div class="form-group">
								<label for="inputEmail1" class="col-lg-4 control-label">Age</label>
								<div class="col-lg-2">
									<input type="number" class="form-control" id="patient_age">
								</div>
							</div>
							<div class="form-group">
								<label for="inputEmail1" class="col-lg-4 control-label">Home Address</label>
								<div class="col-lg-5">
									<textarea class="form-control" id="patient_address" rows="3"></textarea>
								</div>
							</div>
							<div class="form-group">
								<label for="inputEmail1" class="col-lg-4 control-label">Email Address</label>
								<div class="col-lg-5">
									<input type="text" class="form-control" id="patient_email">
								</div>
							</div>
							<div class="form-group">
								<label for="inputEmail1" class="col-lg-4 control-label">Home Number</label>
								<div class="col-lg-5">
									<input type="text" class="form-control" id="patient_homeNum">
								</div>
							</div>
							<div class="form-group">
								<label for="inputEmail1" class="col-lg-4 control-label">Office Number</label>
								<div class="col-lg-5">
									<input type="text" class="form-control" id="patient_officeName">
								</div>
							</div>
							<div class="form-group">
								<label for="inputEmail1" class="col-lg-4 control-label">Fax Number</label>
								<div class="col-lg-5">
									<input type="text" class="form-control" id="patient_faxNum">
								</div>
							</div>
							<div class="form-group">
								<label for="inputEmail1" class="col-lg-4 control-label">Mobile Number</label>
								<div class="col-lg-5">
									<input type="text" class="form-control" id="patient_mobileNum">
								</div>
							</div>
							<div class="form-group">
								<label for="inputEmail1" class="col-lg-4 control-label">Occupation</label>
								<div class="col-lg-5">
									<input type="text" class="form-control" id="patient_occupation">
								</div>
							</div>
							<div class="form-group">
								<label for="inputEmail1" class="col-lg-4 control-label">Nationality</label>
								<div class="col-lg-5">
									<input type="text" class="form-control" id="patient_nationality">
								</div>
							</div>
							<div class="form-group">
								<label for="inputEmail1" class="col-lg-4 control-label">Region</label>
								<div class="col-lg-5">
									<input type="text" class="form-control" id="patient_region">
								</div>
							</div>
							<div class="form-group">
								<label for="inputEmail1" class="col-lg-4 control-label">Dental Insurance</label>
								<div class="col-lg-5">
									<input type="text" class="form-control" id="patient_insurance">
								</div>
							</div>
							<div class="form-group">
								<label for="inputEmail1" class="col-lg-4 control-label">Effective Date</label>
								<div class="col-lg-5">
									<input type="text" class="form-control" id="patient_effectiveDate">
								</div>
							</div>
							<div class="form-group">
								<h4 class="col-md-offset-2">For Minors</h4 >
							</div>
							<div class="form-group">
								<label for="inputEmail1" class="col-lg-4 control-label">Parent or Guardian Name</label>
								<div class="col-lg-5">
									<input type="text" class="form-control" id="patient_parent">
								</div>
							</div>
							<div class="form-group">
								<label for="inputEmail1" class="col-lg-4 control-label">Occupation</label>
								<div class="col-lg-5">
									<input type="text" class="form-control" id="patient_occupation_minor">
								</div>
							</div>
							<div class="form-group">
								<label for="inputEmail1" class="col-lg-4 control-label">Whom may we think for referring you?</label>
								<div class="col-lg-5">
									<input type="text" class="form-control" id="patient_referral">
								</div>
							</div>
							<div class="form-group">
								<label for="inputEmail1" class="col-lg-4 control-label">What is your reason for dental consultation?</label>
								<div class="col-lg-5">
									<textarea class="form-control" id="patient_consultation" rows="4"></textarea>
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
						<form class="form-horizontal" role="form">
							<h3 style="font-weight:bold">Dentist History</h3>
							<div class="form-group">
								<label for="inputEmail1" class="col-lg-4 control-label">Previous Dentist</label>
								<div class="col-lg-5">
									<input type="text" class="form-control" id="patient_previews_dentist">
								</div>
							</div>
							<div class="form-group">
								<label for="inputEmail1" class="col-lg-4 control-label">Last Dental Visit</label>
								<div class="col-lg-5">
									<input type="text" class="form-control" id="patient_last_visit">
								</div>
							</div>
							<div class="form-group">
								<label for="inputEmail1" class="col-lg-4 control-label">Reason for last visit</label>
								<div class="col-lg-5">
									<textarea class="form-control" id="patient_reason_visit" rows="4"></textarea>
								</div>
							</div>
							<div class="form-group">
								<label for="inputEmail1" class="col-lg-4 control-label">How often do you floss?</label>
								<div class="col-lg-5">
									<input type="text" class="form-control" id="patient_many_floss">
								</div>
							</div>
							<div class="form-group">
								<label for="inputEmail1" class="col-lg-4 control-label">How often do you brush?</label>
								<div class="col-lg-5">
									<input type="text" class="form-control" id="patient_many_brush">
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
									<input type="text" class="form-control" id="patient_other_info">
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
						<form class="form-horizontal" role="form">
							<h3 style="font-weight:bold">Medical History</h3>
							<div class="form-group">
								<label for="inputEmail1" class="col-lg-4 control-label">Name of physician</label>
								<div class="col-lg-5">
									<input type="text" class="form-control" id="patient_physician">
								</div>
							</div>
							<div class="form-group">
								<label for="inputEmail1" class="col-lg-4 control-label">Specialty if applicable</label>
								<div class="col-lg-5">
									<input type="text" class="form-control" id="patient_physician">
								</div>
							</div>
							<div class="form-group">
								<label for="inputEmail1" class="col-lg-4 control-label">Office Address</label>
								<div class="col-lg-5">
									<textarea class="form-control" id="patient_physician_office_address" rows="3"></textarea>
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
								<div class="col-md-6" style="padding-left:0;text-align: right;"><input type="text" class="col-md-12"></div>
							</div>
							<div class="row" style="margin-bottom:5px">
								<div class="col-md-6">3. Have you ever had serious illness or surgical operation?</div>
								<div class="col-md-6">
									<label class="checkbox-inline" style="padding-top:0;">
										<input type="radio" name="surgical_patient" value="yes"> Yes
									</label>
									<label class="checkbox-inline" style="padding-top:0;">
										<input type="radio" name="surgical_patient" value="no"> No
									</label>
								</div>
							</div>
							<div class="row show_question2" style="display:none;">
								<div class="col-md-6" style="padding-right: 0;text-align: right;">If so, what illness or operation?&nbsp;</div>
								<div class="col-md-6" style="padding-left:0;text-align: right;">
									<input type="text" class="col-md-12">
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
									<input type="text" class="col-md-6">
									<input type="text" class="col-md-6">
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
									<input type="text" class="col-md-12">
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
										<input type="checkbox" value="">
										Local Anesthetic (ex.Lidocaine)
									</div>
									<div class="checkbox">
										<input type="checkbox" value="">
										Penicillin Antibiotics
									</div>
									<div class="checkbox">
										<input type="checkbox" value="">
										Sulfa Drugs
									</div>
									<div class="checkbox">
										<input type="checkbox" value="">
										Aspirin
									</div>
									<div class="checkbox">
										<input type="checkbox" value="">
										Latex
									</div>
								</div>
							</div>
							<div class="row" style="margin-bottom:5px">
								<div class="col-md-6">9. Bleeding time?</div>
								<div class="col-md-6">
									<input type="text" class="col-md-12">
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
								<div class="col-md-6">11. Bleeding type?</div>
								<div class="col-md-6">
									<select>
										<option>Select...</option>
										<option>Type A</option>
										<option>Type B</option>
										<option>Type O</option>
									</select>
								</div>
							</div>
							<div class="row" style="margin-bottom:5px">
								<div class="col-md-6">12. Blood presure?</div>
								<div class="col-md-6">
									<input type="text" class="col-md-12">
								</div>
							</div>
							<div class="row" style="margin-bottom:5px">
								<div class="col-md-12">13. Do you have or have you any of the following? Check which apply:</div>
							</div>
							<div class="row">
								<div class="col-md-4">
									<div class="checkbox">
										<input type="checkbox" value="">
										High blood pressure
									</div>
									<div class="checkbox">
										<input type="checkbox" value="">
										Low blood pressure
									</div>
									<div class="checkbox">
										<input type="checkbox" value="">
										Epilepsy or Convulsions
									</div>
									<div class="checkbox">
										<input type="checkbox" value="">
										AIDS or HIV infection
									</div>
									<div class="checkbox">
										<input type="checkbox" value="">
										Sexually transmitted disease
									</div>
									<div class="checkbox">
										<input type="checkbox" value="">
										Stomach Troubles or Ulcers
									</div>
									<div class="checkbox">
										<input type="checkbox" value="">
										Fainting Seizure
									</div>
									<div class="checkbox">
										<input type="checkbox" value="">
										Rapid Weight Loss
									</div>
									<div class="checkbox">
										<input type="checkbox" value="">
										Radiation Therapy
									</div>
									<div class="checkbox">
										<input type="checkbox" value="">
										Joint Replacement or Implant
									</div>
									<div class="checkbox">
										<input type="checkbox" value="">
										Heart Surgery
									</div>
									<div class="checkbox">
										<input type="checkbox" value="">
										Heart Attack
									</div>
									<div class="checkbox">
										<input type="checkbox" value="">
										Thyroid Problem
									</div>
								</div>
								<div class="col-md-4">
									<div class="checkbox">
										<input type="checkbox" value="">
										Heart Disease
									</div>
									<div class="checkbox">
										<input type="checkbox" value="">
										Heart Murmur
									</div>
									<div class="checkbox">
										<input type="checkbox" value="">
										Hepatitis or Liver Disease
									</div>
									<div class="checkbox">
										<input type="checkbox" value="">
										Rheumatic Fever
									</div>
									<div class="checkbox">
										<input type="checkbox" value="">
										Hay Fever or Allergies
									</div>
									<div class="checkbox">
										<input type="checkbox" value="">
										Respiratory Problems
									</div>
									<div class="checkbox">
										<input type="checkbox" value="">
										Hepatitis or Jaundice
									</div>
									<div class="checkbox">
										<input type="checkbox" value="">
										Tuberculosis
									</div>
									<div class="checkbox">
										<input type="checkbox" value="">
										Swollen Ankles
									</div>
									<div class="checkbox">
										<input type="checkbox" value="">
										Kidney Disease
									</div>
									<div class="checkbox">
										<input type="checkbox" value="">
										Diabetes
									</div>
									<div class="checkbox">
										<input type="checkbox" value="">
										Chest Pain
									</div>
									<div class="checkbox">
										<input type="checkbox" value="">
										Stroke
									</div>
								</div>
								<div class="col-md-4">
									<div class="checkbox">
										<input type="checkbox" value="">
										Cancer or Tumors
									</div>
									<div class="checkbox">
										<input type="checkbox" value="">
										Anemia
									</div>
									<div class="checkbox">
										<input type="checkbox" value="">
										Angina
									</div>
									<div class="checkbox">
										<input type="checkbox" value="">
										Asthma
									</div>
									<div class="checkbox">
										<input type="checkbox" value="">
										Emphysemia
									</div>
									<div class="checkbox">
										<input type="checkbox" value="">
										Bleeding Problems
									</div>
									<div class="checkbox">
										<input type="checkbox" value="">
										Head Injuries
									</div>
									<div class="checkbox">
										<input type="checkbox" value="">
										Arthritis or Rheumatism
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="col-lg-5 col-md-offset-7">
									<button type="button" alt="dentist_patient" class="button_next btn btn-primary col-lg-5">Back</button>
									<button type="button" class="button_submit btn btn-primary col-lg-5">Next</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>