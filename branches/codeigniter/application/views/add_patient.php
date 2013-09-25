<?php
	if(isset($patient_query))
	{
		$row = $patient_query->row_array();
	}else
	{
		$row = null;
	}
	
	$access = $this->input->get('access');
	
	if(isset($access) && $access == 'granted')
	{
		$disabled = 'disabled';
	}else
	{
		$disabled = '';
		// redirect(base_url());
	}
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
<div>
	<div class="row">
		<div class="col-md-8 col-md-offset-2" style="<?php echo isset($access) ? 'margin-top:7%;' : ''; ?>">
			<ul class="nav nav-tabs" id="myTab">
				<li class="active"><a href="#add_patient" data-toggle="tab">Patient Info</a></li>
				<li><a href="#dentist_history" data-toggle="tab">Dental History</a></li>
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
									<input type="hidden" class="form-control" id="patient_id" name="patient_id" value="<?php echo isset($row) ? $row['id'] : time(); ?>">
									<input type="hidden" class="form-control" id="dentist_id" name="dentist_id" value="<?php echo $this->session->userdata('id'); ?>">
								</div>
							</div>
							<div class="form-group">
								<label for="inputEmail1" class="col-lg-4 control-label">Entry Date</label>
								<div class="col-lg-5">
									<input type="text" class="form-control" name="patient_date" value="<?php echo isset($row) ? $row['date_of_entry'] : date('Y-m-d H:i:s',time()); ?>" readonly>
								</div>
							</div>
							<div class="form-group">
								<label for="inputPassword1" class="col-lg-4 control-label">Photo</label>
								<div class="col-lg-5">
									<input type="file" id="patient_photo" name="patient_photo" <?php echo $disabled; ?>>
									<input type="hidden" id="patient_photo_existing_file" name="patient_photo_existing_file" value="<?php if(isset($row) && $row['patient_picture'] != ' '){ echo $row['patient_picture']; } ?>">
									<input type="hidden" id="patient_photo_file" name="patient_photo_file" value="<?php if(isset($row) && $row['patient_picture'] != ' '){ echo $row['patient_picture']; } ?>">
									<div class="col-sm-12" style="margin-top: 10px;">
										<img class="patient_photo_view" <?php if(isset($row) && trim($row['patient_picture']) != null) { echo 'src="'.base_url('patient_picture/'.$row['patient_picture']).'"'; } else{ echo 'src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&text=no+image"'; } ?> style="width:200px;" >
									</div>
								</div>
							</div>
							<div class="form-group">
								<label for="inputEmail1" class="col-lg-4 control-label">First Name</label>
								<div class="col-lg-5">
									<input type="text" class="form-control" id="patient_fname" name="patient_fname" value="<?php echo isset($row) ? $row['patient_first_name'] : null; ?>" <?php echo $disabled; ?>>
								</div>
							</div>
							<div class="form-group">
								<label for="inputEmail1" class="col-lg-4 control-label">Middle Name</label>
								<div class="col-lg-5">
									<input type="text" class="form-control" id="patient_mname" name="patient_mname" value="<?php echo isset($row) ? $row['patient_middle_name'] : null; ?>" <?php echo $disabled; ?>>
								</div>
							</div>
							<div class="form-group">
								<label for="inputEmail1" class="col-lg-4 control-label">Last Name</label>
								<div class="col-lg-5">
									<input type="text" class="form-control" id="patient_lname" name="patient_lname" value="<?php echo isset($row) ? $row['patient_surname'] : null; ?>" <?php echo $disabled; ?>>
								</div>
							</div>
							<div class="form-group">
								<label for="inputEmail1" class="col-lg-4 control-label">Nick Name</label>
								<div class="col-lg-5">
									<input type="text" class="form-control" id="patient_nname" name="patient_nname" value="<?php echo isset($row) ? $row['patient_nickname'] : null; ?>" <?php echo $disabled; ?>>
								</div>
							</div>
							<div class="form-group">
								<label for="inputEmail1" class="col-lg-4 control-label">Sex</label>
								<div class="col-lg-5">
						<?php
							if(isset($row))
							{
								$select = $row['patient_gender'];
							}else
							{
								$select = '';
							}
						?>
									<select id="patient_sex" class="form-control" name="patient_sex" <?php echo $disabled; ?>>
										<option value="">Select...</option>
										<option value="female" <?php echo $select == 'female' ? 'selected' : ''; ?>>Female</option>
										<option value="male" <?php echo $select == 'male' ? 'selected' : ''; ?>>Male</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label for="inputEmail1" class="col-lg-4 control-label">Birth Date</label>
								<div class="col-lg-5">
									<input type="text" class="form-control datepicker" name="patient_bday" value="<?php echo isset($row) ? $row['patient_bday'] : null; ?>" <?php echo $disabled; ?>>
								</div>
							</div>
							<div class="form-group">
								<label for="inputEmail1" class="col-lg-4 control-label">Age</label>
								<div class="col-lg-2">
									<input type="number" class="form-control" id="patient_age" name="patient_age" value="<?php echo isset($row) ? $row['patient_age'] : null; ?>" <?php echo $disabled; ?>>
								</div>
							</div>
							<div class="form-group">
								<label for="inputEmail1" class="col-lg-4 control-label">Home Address</label>
								<div class="col-lg-5">
									<textarea class="form-control" id="patient_address" rows="3" name="patient_address" <?php echo $disabled; ?>><?php echo isset($row) ? $row['patient_address'] : null; ?></textarea>
								</div>
							</div>
							<div class="form-group">
								<label for="inputEmail1" class="col-lg-4 control-label">Email Address</label>
								<div class="col-lg-5">
									<input type="email" class="form-control" id="patient_email" name="patient_email" value="<?php echo isset($row) ? $row['email'] : null; ?>" <?php echo $disabled; ?>>
								</div>
							</div>
							<div class="form-group">
								<label for="inputEmail1" class="col-lg-4 control-label">Home Number</label>
								<div class="col-lg-5">
									<input type="text" class="form-control" id="patient_homeNum" name="patient_homeNum" value="<?php echo isset($row) ? $row['patient_phone'] : null; ?>" <?php echo $disabled; ?>>
								</div>
							</div>
							<div class="form-group">
								<label for="inputEmail1" class="col-lg-4 control-label">Office Number</label>
								<div class="col-lg-5">
									<input type="text" class="form-control" id="patient_officeName" name="patient_officeName" value="<?php echo isset($row) ? $row['occupation_phone'] : null; ?>" <?php echo $disabled; ?>>
								</div>
							</div>
							<div class="form-group">
								<label for="inputEmail1" class="col-lg-4 control-label">Fax Number</label>
								<div class="col-lg-5">
									<input type="text" class="form-control" id="patient_faxNum" name="patient_faxNum" value="<?php echo isset($row) ? $row['patient_fax_number'] : null; ?>" <?php echo $disabled; ?>>
								</div>
							</div>
							<div class="form-group">
								<label for="inputEmail1" class="col-lg-4 control-label">Mobile Number</label>
								<div class="col-lg-5">
									<input type="text" class="form-control" id="patient_mobileNum" name="patient_mobileNum" value="<?php if(isset($row)) { if($row['patient_mobile_number'] == ' '){ echo $row['patient_phone']; }else{ echo $row['patient_mobile_number']; } }; ?>" <?php echo $disabled; ?>>
								</div>
							</div>
							<div class="form-group">
								<label for="inputEmail1" class="col-lg-4 control-label">Occupation</label>
								<div class="col-lg-5">
									<input type="text" class="form-control" id="patient_occupation" name="patient_occupation" value="<?php echo isset($row) ? $row['patient_occupation'] : null; ?>" <?php echo $disabled; ?>>
								</div>
							</div>
							<div class="form-group">
								<label for="inputEmail1" class="col-lg-4 control-label">Nationality</label>
								<div class="col-lg-5">
									<input type="text" class="form-control" id="patient_nationality" name="patient_nationality" value="<?php echo isset($row) ? $row['patient_nationality'] : null; ?>" <?php echo $disabled; ?>>
								</div>
							</div>
							<div class="form-group">
								<label for="inputEmail1" class="col-lg-4 control-label">Religion</label>
								<div class="col-lg-5">
									<input type="text" class="form-control" id="patient_religion" name="patient_religion" value="<?php echo isset($row) ? $row['patient_religion'] : null; ?>" <?php echo $disabled; ?>>
								</div>
							</div>
							<div class="form-group">
								<label for="inputEmail1" class="col-lg-4 control-label">Dental Insurance</label>
								<div class="col-lg-5">
									<input type="text" class="form-control" id="patient_insurance" name="patient_insurance" value="<?php echo isset($row) ? $row['patient_dental_insurance'] : null; ?>" <?php echo $disabled; ?>>
								</div>
							</div>
							<div class="form-group">
								<label for="inputEmail1" class="col-lg-4 control-label">Effective Date</label>
								<div class="col-lg-5">
									<input type="text" class="form-control datepicker" id="patient_effectiveDate" name="patient_effectiveDate" value="<?php echo isset($row) ? $row['effective_date'] : null; ?>" <?php echo $disabled; ?>>
								</div>
							</div>
							<div class="form-group">
								<h4 class="col-md-offset-2">For Minors</h4 >
							</div>
							<div class="form-group">
								<label for="inputEmail1" class="col-lg-4 control-label">Parent or Guardian Name</label>
								<div class="col-lg-5">
									<input type="text" class="form-control" id="patient_parent" name="patient_parent" value="<?php echo isset($row) ? $row['patient_guardian'] : null; ?>" <?php echo $disabled; ?>>
								</div>
							</div>
							<div class="form-group">
								<label for="inputEmail1" class="col-lg-4 control-label">Occupation</label>
								<div class="col-lg-5">
									<input type="text" class="form-control" id="patient_occupation_minor" name="patient_occupation_minor" value="<?php echo isset($row) ? $row['guardian_occupation'] : null; ?>" <?php echo $disabled; ?>>
								</div>
							</div>
							<div class="form-group">
								<label for="inputEmail1" class="col-lg-4 control-label">Whom may we think for referring you?</label>
								<div class="col-lg-5">
									<input type="text" class="form-control" id="patient_referral" name="patient_referral" value="<?php echo isset($row) ? $row['referred_by'] : null; ?>" <?php echo $disabled; ?>>
								</div>
							</div>
							<div class="form-group">
								<label for="inputEmail1" class="col-lg-4 control-label">What is your reason for dental consultation?</label>
								<div class="col-lg-5">
									<textarea class="form-control" id="patient_consultation" rows="4" name="patient_consultation" <?php echo $disabled; ?>><?php echo isset($row) ? $row['dental_reason'] : null; ?></textarea>
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
							<h3 style="font-weight:bold">Dental History</h3>
							<div class="form-group">
								<label for="inputEmail1" class="col-lg-4 control-label">Previous Dentist</label>
								<div class="col-lg-5">
									<input type="text" class="form-control" id="patient_previews_dentist" name="patient_previews_dentist" value="<?php echo isset($row) ? $row['former_dentist'] : null; ?>" <?php echo $disabled; ?>>
								</div>
							</div>
							<div class="form-group">
								<label for="inputEmail1" class="col-lg-4 control-label">Last Dental Visit</label>
								<div class="col-lg-5">
									<input type="text" class="form-control datepicker" id="patient_last_visit" name="patient_last_visit" value="<?php echo isset($row) ? $row['date_of_last_visit'] : null; ?>" <?php echo $disabled; ?>>
								</div>
							</div>
							<div class="form-group">
								<label for="inputEmail1" class="col-lg-4 control-label">Reason for last visit</label>
								<div class="col-lg-5">
									<textarea class="form-control" id="patient_reason_visit" rows="4" name="patient_reason_visit" <?php echo $disabled; ?>><?php echo isset($row) ? $row['reason_for_visit'] : null; ?></textarea>
								</div>
							</div>
							<div class="form-group">
								<label for="inputEmail1" class="col-lg-4 control-label">How often do you floss?</label>
								<div class="col-lg-5">
									<input type="text" class="form-control" id="patient_many_floss" name="patient_many_floss" value="<?php echo isset($row) ? $row['how_many_floss'] : null; ?>" <?php echo $disabled; ?>>
								</div>
							</div>
							<div class="form-group">
								<label for="inputEmail1" class="col-lg-4 control-label">How often do you brush?</label>
								<div class="col-lg-5">
									<input type="text" class="form-control" id="patient_many_brush" name="patient_many_brush" value="<?php echo isset($row) ? $row['how_many_brush'] : null; ?>" <?php echo $disabled; ?>>
								</div>
							</div>
							<div class="form-group">
								<h4 class="col-md-offset-1">Do you have any of the following?</h4>
							</div>
							<div class="form-group">
								<div class="col-lg-offset-4 col-lg-10">
									<div class="checkbox">
										<label>
											<input type="checkbox" name="cavity[]" value="bad_breath" <?php if(isset($row)){ if($row['bad_breath'] == 'yes'){ echo 'checked'; } } ?> <?php echo $disabled; ?>> 
											Bad Breath
										</label>
									</div>
								</div>
								<div class="col-lg-offset-4 col-lg-10">
									<div class="checkbox">
										<label>
											<input type="checkbox" name="cavity[]" value="bleeding_gums" <?php if(isset($row)){ if($row['bleeding_gums'] == 'yes'){ echo 'checked'; } } ?> <?php echo $disabled; ?>> 
											Bleeding Gums
										</label>
									</div>
								</div>
								<div class="col-lg-offset-4 col-lg-10">
									<div class="checkbox">
										<label>
											<input type="checkbox" name="cavity[]" value="clicking_jaw" <?php if(isset($row)){ if($row['clicking_popping_jaw'] == 'yes'){ echo 'checked'; } } ?> <?php echo $disabled; ?>> 
											Clicking or Lock Jaw
										</label>
									</div>
								</div>
								<div class="col-lg-offset-4 col-lg-10">
									<div class="checkbox">
										<label>
											<input type="checkbox" name="cavity[]" value="food_collect" <?php if(isset($row)){ if($row['food_collect'] == 'yes'){ echo 'checked'; } } ?> <?php echo $disabled; ?>> 
											Food collection  between teeth
										</label>
									</div>
								</div>
								<div class="col-lg-offset-4 col-lg-10">
									<div class="checkbox">
										<label>
											<input type="checkbox" name="cavity[]" value="grinding_teeth" <?php if(isset($row)){ if($row['grinding_teeth'] == 'yes'){ echo 'checked'; } } ?> <?php echo $disabled; ?>> 
											Grinding teeth
										</label>
									</div>
								</div>
								<div class="col-lg-offset-4 col-lg-10">
									<div class="checkbox">
										<label>
											<input type="checkbox" name="cavity[]" value="loose_teeth" <?php if(isset($row)){ if($row['loose_teeth'] == 'yes'){ echo 'checked'; } } ?> <?php echo $disabled; ?>>  
											Loose teeth or broken fillings
										</label>
									</div>
								</div>
								<div class="col-lg-offset-4 col-lg-10">
									<div class="checkbox">
										<label>
											<input type="checkbox" name="cavity[]" value="periodental_treatment" <?php if(isset($row)){ if($row['periodental_treatment'] == 'yes'){ echo 'checked'; } } ?> <?php echo $disabled; ?>> 
											Periodental Treatment
										</label>
									</div>
								</div>
								<div class="col-lg-offset-4 col-lg-10">
									<div class="checkbox">
										<label>
											<input type="checkbox" name="cavity[]" value="sensitive_hot" <?php if(isset($row)){ if($row['sensitive_hot'] == 'yes'){ echo 'checked'; } } ?> <?php echo $disabled; ?>> 
											Sensitivity to hot water
										</label>
									</div>
								</div>
								<div class="col-lg-offset-4 col-lg-10">
									<div class="checkbox">
										<label>
											<input type="checkbox" name="cavity[]" value="sensitive_cold" <?php if(isset($row)){ if($row['sensitive_cold'] == 'yes'){ echo 'checked'; } } ?> <?php echo $disabled; ?>> 
											Sensitivity to cold water
										</label>
									</div>
								</div>
								<div class="col-lg-offset-4 col-lg-10">
									<div class="checkbox">
										<label>
											<input type="checkbox" name="cavity[]" value="sensitive_sweet" <?php if(isset($row)){ if($row['sensitive_sweet'] == 'yes'){ echo 'checked'; } } ?> <?php echo $disabled; ?>> 
											Sensitivity to sweet
										</label>
									</div>
								</div>
								<div class="col-lg-offset-4 col-lg-10">
									<div class="checkbox">
										<label>
											<input type="checkbox" name="cavity[]" value="sensitive_biting" <?php if(isset($row)){ if($row['sensitive_bite'] == 'yes'){ echo 'checked'; } } ?> <?php echo $disabled; ?>> 
											Sensitivity when biting
										</label>
									</div>
								</div>
								<div class="col-lg-offset-4 col-lg-10">
									<div class="checkbox">
										<label>
											<input type="checkbox" name="cavity[]" value="sore_in_mouth" <?php if(isset($row)){ if($row['sores_in_mouth'] == 'yes'){ echo 'checked'; } } ?> <?php echo $disabled; ?>> 
											Sores or growth in your mouth
										</label>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label for="inputEmail1" class="col-lg-4 control-label">Others</label>
								<div class="col-lg-5">
									<input type="text" class="form-control" id="patient_other_info" name="patient_other_info" value="<?php echo isset($row) ? $row['other_info'] : null; ?>" <?php echo $disabled; ?>>
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
									<input type="text" class="form-control" id="patient_physician" name="patient_physician" value="<?php echo isset($row) ? $row['physician_name'] : null; ?>" <?php echo $disabled; ?>>
								</div>
							</div>
							<div class="form-group">
								<label for="inputEmail1" class="col-lg-4 control-label">Specialty if applicable</label>
								<div class="col-lg-5">
									<input type="text" class="form-control" id="patient_physician_specialty" name="patient_physician_specialty" value="<?php echo isset($row) ? $row['physician_specialty'] : null; ?>" <?php echo $disabled; ?>>
								</div>
							</div>
							<div class="form-group">
								<label for="inputEmail1" class="col-lg-4 control-label">Office Address</label>
								<div class="col-lg-5">
									<textarea class="form-control" id="patient_physician_office_address" rows="3" name="patient_physician_office_address" <?php echo $disabled; ?>><?php echo isset($row) ? $row['physician_address'] : null; ?></textarea>
								</div>
							</div>
							<div class="row" style="margin-bottom:5px">
								<div class="col-md-6">1. Are you in good health?</div>
								<div class="col-md-6">
									<label class="checkbox-inline" style="padding-top:0;">
										<input type="radio" id="health_yes" name="health_patient" value="yes" <?php if(isset($row)){ if($row['good_health'] == 'yes'){ echo 'checked'; } }?> <?php echo $disabled; ?>> 
										Yes
									</label>
									<label class="checkbox-inline" style="padding-top:0;">
										<input type="radio" id="health_no" name="health_patient" value="no" <?php if(isset($row)){ if($row['good_health'] == 'no'){ echo 'checked'; } }?> <?php echo $disabled; ?>> 
										No
									</label>
								</div>
							</div>
							<?php
								if(isset($row['medical_treatment']))
								{
									$dataextract = json_decode($row['medical_treatment']);
									
								}	
							?>
							<div class="row" style="margin-bottom:5px">
								<div class="col-md-6">2. Are you under medical treatment now?</div>
								<div class="col-md-6">
									<label class="checkbox-inline" style="padding-top:0;">
										<input type="radio" id="treatment_yes" name="medical_treatment_patient" value="yes" <?php if(isset($row)){ if(isset($dataextract) && $dataextract->answer == 'yes'){ echo 'checked'; } } ?> <?php echo $disabled; ?>> Yes
									</label>
									<label class="checkbox-inline" style="padding-top:0;">
										<input type="radio" id="treatment_no" name="medical_treatment_patient" value="no" <?php if(isset($row)){ if(isset($dataextract) && $dataextract->answer == 'no'){ echo 'checked'; } } ?> <?php echo $disabled; ?>> No
									</label>
								</div>
							</div>
							
							<div class="row show_question" style="<?php if(isset($row) && isset($dataextract) && $dataextract->because != ' '){ echo 'display:block;'; }else{ echo 'display:none;'; }?>" <?php echo $disabled; ?>>
								<div class="col-md-6" style="padding-right: 0;text-align: right;">If so, what is the condition being treated?&nbsp;</div>
								<div class="col-md-6" style="padding-left:0;text-align: right;">
									<input type="text" class="col-md-12" name="patient_what_treatment" value="<?php if(isset($row) && isset($dataextract)){ echo $dataextract->because; } ?>" <?php echo $disabled; ?>>
								</div>
							</div>
							<?php
								if(isset($row))
								{
									$illness = json_decode($row['illness_operation']);
								}
							?>
							<div class="row" style="margin-bottom:5px">
								<div class="col-md-6">3. Have you ever had serious illness or surgical operation?</div>
								<div class="col-md-6">
									<label class="checkbox-inline" style="padding-top:0;">
										<input type="radio" name="illness_patient" value="yes" <?php if(isset($row)){ if(isset($illness) && $illness->answer == 'yes'){ echo 'checked'; } } ?> <?php echo $disabled; ?>> 
										Yes
									</label>
									<label class="checkbox-inline" style="padding-top:0;">
										<input type="radio" name="illness_patient" value="no" <?php if(isset($row)){ if(isset($illness) && $illness->answer == 'no'){ echo 'checked'; } } ?> <?php echo $disabled; ?>> 
										No
									</label>
								</div>
							</div>
							<div class="row show_question2" style="<?php if(isset($row) && isset($illness) && $illness->because != ' '){ echo 'display:block;'; }else{ echo 'display:none;'; } ?>" <?php echo $disabled; ?>>
								<div class="col-md-6" style="padding-right: 0;text-align: right;">If so, what illness or operation?&nbsp;</div>
								<div class="col-md-6" style="padding-left:0;text-align: right;">
									<input type="text" class="col-md-12" name="patient_what_illness" value="<?php if(isset($row) && isset($illness)){ echo $illness->because; } ?>" <?php echo $disabled; ?>>
								</div>
							</div>
							<?php
								if(isset($row))
								{
									$hospitalized = json_decode($row['hospitalized']);
								}
							?>
							<div class="row" style="margin-bottom:5px">
								<div class="col-md-6">4. Have you ever been hospitalized?</div>
								<div class="col-md-6">
									<label class="checkbox-inline" style="padding-top:0;">
										<input type="radio" name="hospitalized_patient" value="yes" <?php if(isset($row)){ if(isset($hospitalized) && $hospitalized->answer == 'yes'){ echo 'checked'; } } ?> <?php echo $disabled; ?>> Yes
									</label>
									<label class="checkbox-inline" style="padding-top:0;">
										<input type="radio" name="hospitalized_patient" value="no" <?php if(isset($row)){ if(isset($hospitalized) && $hospitalized->answer == 'no'){ echo 'checked'; } } ?> <?php echo $disabled; ?>> No
									</label>
								</div>
							</div>
							<div class="row show_question3" style="<?php if(isset($row) && isset($hospitalized) && $hospitalized->because != ' '){ echo 'display:block;'; }else{ echo 'display:none;'; }?>" <?php echo $disabled; ?>>
								<div class="col-md-4" style="padding-right: 0;text-align: right;">If so, when and why?&nbsp;</div>
								<div class="col-md-8" style="padding-left:0;text-align: right;">
									<input type="text" class="col-md-6 datepicker" name="patient_when_hospitalized" value="<?php if(isset($row) && isset($hospitalized)){ echo $hospitalized->when; } ?>" <?php echo $disabled; ?>>
									<input type="text" class="col-md-6" name="patient_why_hospitalized" value="<?php if(isset($row) && isset($hospitalized)){ echo $hospitalized->because; } ?>">
								</div>
							</div>
							<?php
								if(isset($row))
								{
									$precription_medication = json_decode($row['precription_medication']);
								}
							?>
							<div class="row" style="margin-bottom:5px">
								<div class="col-md-6">5. Are you taking any presciption or non prescription medication?</div>
								<div class="col-md-6">
									<label class="checkbox-inline" style="padding-top:0;">
										<input type="radio" name="presciption_patient" value="yes" <?php if(isset($row)){ if(isset($precription_medication) && $precription_medication->answer == 'yes'){ echo 'checked'; } } ?> <?php echo $disabled; ?>> Yes
									</label>
									<label class="checkbox-inline" style="padding-top:0;">
										<input type="radio" name="presciption_patient" value="no" <?php if(isset($row)){ if(isset($precription_medication) && $precription_medication->answer == 'no'){ echo 'checked'; } } ?> <?php echo $disabled; ?>> No
									</label>
								</div>
							</div>
							<div class="row show_question4" style="<?php if(isset($row)){ if(isset($precription_medication) && $precription_medication->because != ' '){ echo 'display:block;'; }else{ echo 'display:none;'; } } ?>" <?php echo $disabled; ?>>
								<div class="col-md-6" style="padding-right: 0;text-align: right;">If so, please specify?&nbsp;</div>
								<div class="col-md-6" style="padding-left:0;text-align: right;">
									<input type="text" class="col-md-12" name="patient_specify_prescription" value="<?php if(isset($row) && isset($precription_medication)){ echo $precription_medication->because; } ?>" <?php echo $disabled; ?>>
								</div>
							</div>
							<div class="row" style="margin-bottom:5px">
								<div class="col-md-6">6. Do you use tabacco products?</div>
								<div class="col-md-6">
									<label class="checkbox-inline" style="padding-top:0;">
										<input type="radio" name="tabacco_patient" value="yes" <?php if(isset($row)){ if($row['tabacco_products'] == 'yes'){ echo 'checked'; } } ?> <?php echo $disabled; ?>> Yes
									</label>
									<label class="checkbox-inline" style="padding-top:0;">
										<input type="radio" name="tabacco_patient" value="no" <?php if(isset($row)){ if($row['tabacco_products'] == 'no'){ echo 'checked'; } } ?> <?php echo $disabled; ?>> No
									</label>
								</div>
							</div>
							<div class="row" style="margin-bottom:5px">
								<div class="col-md-6">7. Do you use alcohol coccaine or other dangerous drugs?</div>
								<div class="col-md-6">
									<label class="checkbox-inline" style="padding-top:0;">
										<input type="radio" name="drugs_patient" value="yes" <?php if(isset($row)){ if($row['alcohol_drugs'] == 'yes'){ echo 'checked'; } } ?> <?php echo $disabled; ?>> Yes
									</label>
									<label class="checkbox-inline" style="padding-top:0;">
										<input type="radio" name="drugs_patient" value="no" <?php if(isset($row)){ if($row['alcohol_drugs'] == 'no'){ echo 'checked'; } } ?> <?php echo $disabled; ?>> No
									</label>
								</div>
							</div>
							<div class="row" style="margin-bottom:5px">
								<div class="col-md-6">8. Are you allergic to any of the following?</div>
								<div class="col-md-6">
									<div class="checkbox">
										<input type="checkbox" name="allergic[]" value="anesthetic" <?php if(isset($row)){ if($row['local_anesthetic'] == 'yes'){ echo 'checked'; } } ?> <?php echo $disabled; ?>>
										Local Anesthetic (ex.Lidocaine)
									</div>
									<div class="checkbox">
										<input type="checkbox" name="allergic[]" value="penicillin" <?php if(isset($row)){ if($row['penicillin'] == 'yes'){ echo 'checked'; } } ?> <?php echo $disabled; ?>>
										Penicillin Antibiotics
									</div>
									<div class="checkbox">
										<input type="checkbox" name="allergic[]" value="sulfa" <?php if(isset($row)){ if($row['sulfa'] == 'yes'){ echo 'checked'; } } ?> <?php echo $disabled; ?>>
										Sulfa Drugs
									</div>
									<div class="checkbox">
										<input type="checkbox" name="allergic[]" value="aspirin" <?php if(isset($row)){ if($row['aspirin'] == 'yes'){ echo 'checked'; } } ?> <?php echo $disabled; ?>>
										Aspirin
									</div>
									<div class="checkbox">
										<input type="checkbox" name="allergic[]" value="latex" <?php if(isset($row)){ if($row['latex'] == 'yes'){ echo 'checked'; } } ?> <?php echo $disabled; ?>>
										Latex
									</div>
								</div>
							</div>
							<div class="row" style="margin-bottom:5px">
								<div class="col-md-6">9. Bleeding time?</div>
								<div class="col-md-6">
									<input type="text" class="col-md-12" name="patient_bleeding_time" value="<?php echo isset($row) ? $row['menstruation'] : null; ?>" <?php echo $disabled; ?>>
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
											<input type="radio" name="pregnant_patient" value="yes" <?php if(isset($row)){ if($row['pregnant'] == 'yes'){ echo 'checked'; } } ?> <?php echo $disabled; ?>> Yes
										</label>
										<label class="checkbox-inline" style="padding-top:0;">
											<input type="radio" name="pregnant_patient" value="no" <?php if(isset($row)){ if($row['pregnant'] == 'no'){ echo 'checked'; } } ?> <?php echo $disabled; ?>> No
										</label>
									</div>
								</div>
								<div class="container">
									<div class="col-md-6">B. Are you nursing?</div>
									<div class="col-md-6">
										<label class="checkbox-inline" style="padding-top:0;">
											<input type="radio" name="nursing_patient" value="yes" <?php if(isset($row)){ if($row['nursing'] == 'yes'){ echo 'checked'; } } ?> <?php echo $disabled; ?>> Yes
										</label>
										<label class="checkbox-inline" style="padding-top:0;">
											<input type="radio" name="nursing_patient" value="no" <?php if(isset($row)){ if($row['nursing'] == 'no'){ echo 'checked'; } } ?> <?php echo $disabled; ?>> No
										</label>
									</div>
								</div>
								<div class="container">
									<div class="col-md-6">C. Are you taking birth control pills?</div>
									<div class="col-md-6">
										<label class="checkbox-inline" style="padding-top:0;">
											<input type="radio" name="pills_patient" value="yes" <?php if(isset($row)){ if($row['control_pills'] == 'yes'){ echo 'checked'; } } ?> <?php echo $disabled; ?>> Yes
										</label>
										<label class="checkbox-inline" style="padding-top:0;">
											<input type="radio" name="pills_patient" value="no" <?php if(isset($row)){ if($row['control_pills'] == 'no'){ echo 'checked'; } } ?> <?php echo $disabled; ?>> No
										</label>
									</div>
								</div>
							</div>
							<?php
								if(isset($row))
								{
									$selected_blood = $row['blood_type'];
								}else
								{
									$selected_blood = null;
								}
							?>
							<div class="row" style="margin-bottom:5px">
								<div class="col-md-6">11. Blood type?</div>
								<div class="col-md-6">
									<select name="patient_blood_type" <?php echo $disabled; ?>>
										<option value="">Select...</option>
										<option value="a" <?php echo $selected_blood == 'a' ? 'checked' : ''; ?>>Type A</option>
										<option value="b" <?php echo $selected_blood == 'b' ? 'checked' : ''; ?>>Type B</option>
										<option value="c" <?php echo $selected_blood == 'c' ? 'checked' : ''; ?>>Type O</option>
									</select>
								</div>
							</div>
							<div class="row" style="margin-bottom:5px">
								<div class="col-md-6">12. Blood presure?</div>
								<div class="col-md-6">
									<input type="text" class="col-md-12" name="patient_blood_presure" value="<?php echo isset($row) ? $row['blood_presure'] : ''; ?>" <?php echo $disabled; ?>>
								</div>
							</div>
							<div class="row" style="margin-bottom:5px">
								<div class="col-md-12">13. Do you have or have you any of the following? Check which apply:</div>
							</div>
							<div class="row">
								<?php 
									if(isset($row))
									{
										if(trim($row['sickness']) != '')
										{
											echo 'laman';
											$highBlood = array_search('highBlood',json_decode($row['sickness'],true));
											$lowBlood = array_search('lowBlood',json_decode($row['sickness'],true));
											$epilepsy = array_search('epilepsy',json_decode($row['sickness'],true));
											$aids = array_search('aids',json_decode($row['sickness'],true));
											$std = array_search('std',json_decode($row['sickness'],true));
											$ulcers = array_search('ulcers',json_decode($row['sickness'],true));
											$seizure = array_search('seizure',json_decode($row['sickness'],true));
											$weightLoss = array_search('weightLoss',json_decode($row['sickness'],true));
											$radiation = array_search('radiation',json_decode($row['sickness'],true));
											$implant = array_search('implant',json_decode($row['sickness'],true));
											$heartSurgery = array_search('heartSurgery',json_decode($row['sickness'],true));
											$heartAttack = array_search('heartAttack',json_decode($row['sickness'],true));
											$thyroid = array_search('thyroid',json_decode($row['sickness'],true));
											$heartDisease = array_search('heartDisease',json_decode($row['sickness'],true));
											$heartmurmur = array_search('heartmurmur',json_decode($row['sickness'],true));
											$liverDisease = array_search('liverDisease',json_decode($row['sickness'],true));
											$rheumatic = array_search('rheumatic',json_decode($row['sickness'],true));
											$allergies = array_search('allergies',json_decode($row['sickness'],true));
											$respiratory = array_search('respiratory',json_decode($row['sickness'],true));
											$Jaundice = array_search('Jaundice',json_decode($row['sickness'],true));
											$tuberculosis = array_search('tuberculosis',json_decode($row['sickness'],true));
											$swollenAnkles = array_search('swollenAnkles',json_decode($row['sickness'],true));
											$kidneyDisease = array_search('kidneyDisease',json_decode($row['sickness'],true));
											$diabetes = array_search('diabetes',json_decode($row['sickness'],true));
											$chestPain = array_search('chestPain',json_decode($row['sickness'],true));
											$stroke = array_search('stroke',json_decode($row['sickness'],true));
											$cancer = array_search('cancer',json_decode($row['sickness'],true));
											$anemia = array_search('anemia',json_decode($row['sickness'],true));
											$angina = array_search('angina',json_decode($row['sickness'],true));
											$asthma = array_search('asthma',json_decode($row['sickness'],true));
											$emphysemia = array_search('emphysemia',json_decode($row['sickness'],true));
											$bleedingProblems = array_search('bleedingProblems',json_decode($row['sickness'],true));
											$headInjuries = array_search('headInjuries',json_decode($row['sickness'],true));
											$arthritis = array_search('arthritis',json_decode($row['sickness'],true));
										}
									}
									
								?>
								<div class="col-md-4">
									<div class="checkbox">
										<input type="checkbox" name="sickness[]" value="highBlood" <?php if(isset($highBlood) && $highBlood != ''){ echo 'checked'; } ?> <?php echo $disabled; ?>>
										High blood pressure
									</div>
									<div class="checkbox">
										<input type="checkbox" name="sickness[]" value="lowBlood" <?php if(isset($lowBlood) && $lowBlood != ''){ echo 'checked'; } ?> <?php echo $disabled; ?>>
										Low blood pressure
									</div>
									<div class="checkbox">
										<input type="checkbox" name="sickness[]" value="epilepsy" <?php if(isset($epilepsy) && $epilepsy != ''){ echo 'checked'; } ?> <?php echo $disabled; ?>>
										Epilepsy or Convulsions
									</div>
									<div class="checkbox">
										<input type="checkbox" name="sickness[]" value="aids" <?php if(isset($aids) && $aids != ''){ echo 'checked'; } ?> <?php echo $disabled; ?>>
										AIDS or HIV infection
									</div>
									<div class="checkbox">
										<input type="checkbox" name="sickness[]" value="std" <?php if(isset($std) && $std != ''){ echo 'checked'; } ?> <?php echo $disabled; ?>>
										Sexually transmitted disease
									</div>
									<div class="checkbox">
										<input type="checkbox" name="sickness[]" value="ulcers" <?php if(isset($ulcers) && $ulcers != ''){ echo 'checked'; } ?> <?php echo $disabled; ?>>
										Stomach Troubles or Ulcers
									</div>
									<div class="checkbox">
										<input type="checkbox" name="sickness[]" value="seizure" <?php if(isset($seizure) && $seizure != ''){ echo 'checked'; } ?> <?php echo $disabled; ?>>
										Fainting Seizure
									</div>
									<div class="checkbox">
										<input type="checkbox" name="sickness[]" value="weightLoss" <?php if(isset($weightLoss) && $weightLoss != ''){ echo 'checked'; } ?> <?php echo $disabled; ?>>
										Rapid Weight Loss
									</div>
									<div class="checkbox">
										<input type="checkbox" name="sickness[]" value="radiation" <?php if(isset($radiation) && $radiation != ''){ echo 'checked'; } ?> <?php echo $disabled; ?>>
										Radiation Therapy
									</div>
									<div class="checkbox">
										<input type="checkbox" name="sickness[]" value="implant" <?php if(isset($implant) && $implant != ''){ echo 'checked'; } ?> <?php echo $disabled; ?>>
										Joint Replacement or Implant
									</div>
									<div class="checkbox">
										<input type="checkbox" name="sickness[]" value="heartSurgery" <?php if(isset($heartSurgery) && $heartSurgery != ''){ echo 'checked'; } ?> <?php echo $disabled; ?>>
										Heart Surgery
									</div>
									<div class="checkbox">
										<input type="checkbox" name="sickness[]" value="heartAttack" <?php if(isset($heartAttack) && $heartAttack != ''){ echo 'checked'; } ?> <?php echo $disabled; ?>>
										Heart Attack
									</div>
									<div class="checkbox">
										<input type="checkbox" name="sickness[]" value="thyroid" <?php if(isset($thyroid) && $thyroid != ''){ echo 'checked'; } ?> <?php echo $disabled; ?>>
										Thyroid Problem
									</div>
								</div>
								<div class="col-md-4">
									<div class="checkbox">
										<input type="checkbox" name="sickness[]" value="heartDisease" <?php if(isset($heartDisease) && $heartDisease != ''){ echo 'checked'; } ?> <?php echo $disabled; ?>>
										Heart Disease
									</div>
									<div class="checkbox">
										<input type="checkbox" name="sickness[]" value="heartmurmur" <?php if(isset($heartmurmur) && $heartmurmur != ''){ echo 'checked'; } ?> <?php echo $disabled; ?>>
										Heart Murmur
									</div>
									<div class="checkbox">
										<input type="checkbox" name="sickness[]" value="liverDisease" <?php if(isset($liverDisease) && $liverDisease != ''){ echo 'checked'; } ?> <?php echo $disabled; ?>>
										Hepatitis or Liver Disease
									</div>
									<div class="checkbox">
										<input type="checkbox" name="sickness[]" value="rheumatic" <?php if(isset($rheumatic) && $rheumatic != ''){ echo 'checked'; } ?> <?php echo $disabled; ?>>
										Rheumatic Fever
									</div>
									<div class="checkbox">
										<input type="checkbox" name="sickness[]" value="allergies" <?php if(isset($allergies) && $allergies != ''){ echo 'checked'; } ?> <?php echo $disabled; ?>>
										Hay Fever or Allergies
									</div>
									<div class="checkbox">
										<input type="checkbox" name="sickness[]" value="respiratory" <?php if(isset($respiratory) && $respiratory != ''){ echo 'checked'; } ?> <?php echo $disabled; ?>>
										Respiratory Problems
									</div>
									<div class="checkbox">
										<input type="checkbox" name="sickness[]" value="Jaundice" <?php if(isset($Jaundice) && $Jaundice != ''){ echo 'checked'; } ?> <?php echo $disabled; ?>>
										Hepatitis or Jaundice
									</div>
									<div class="checkbox">
										<input type="checkbox" name="sickness[]" value="tuberculosis" <?php if(isset($tuberculosis) && $tuberculosis != ''){ echo 'checked'; } ?> <?php echo $disabled; ?>>
										Tuberculosis
									</div>
									<div class="checkbox">
										<input type="checkbox" name="sickness[]" value="swollenAnkles" <?php if(isset($swollenAnkles) && $swollenAnkles != ''){ echo 'checked'; } ?> <?php echo $disabled; ?>>
										Swollen Ankles
									</div>
									<div class="checkbox">
										<input type="checkbox" name="sickness[]" value="kidneyDisease" <?php if(isset($kidneyDisease) && $kidneyDisease != ''){ echo 'checked'; } ?> <?php echo $disabled; ?>>
										Kidney Disease
									</div>
									<div class="checkbox">
										<input type="checkbox" name="sickness[]" value="diabetes" <?php if(isset($diabetes) && $diabetes != ''){ echo 'checked'; } ?> <?php echo $disabled; ?>>
										Diabetes
									</div>
									<div class="checkbox">
										<input type="checkbox" name="sickness[]" value="chestPain" <?php if(isset($chestPain) && $chestPain != ''){ echo 'checked'; } ?> <?php echo $disabled; ?>>
										Chest Pain
									</div>
									<div class="checkbox">
										<input type="checkbox" name="sickness[]" value="stroke" <?php if(isset($stroke) && $stroke != ''){ echo 'checked'; } ?> <?php echo $disabled; ?>>
										Stroke
									</div>
								</div>
								<div class="col-md-4">
									<div class="checkbox">
										<input type="checkbox" name="sickness[]" value="cancer" <?php if(isset($cancer) && $cancer != ''){ echo 'checked'; } ?> <?php echo $disabled; ?>>
										Cancer or Tumors
									</div>
									<div class="checkbox">
										<input type="checkbox" name="sickness[]" value="anemia" <?php if(isset($anemia) && $anemia != ''){ echo 'checked'; } ?> <?php echo $disabled; ?>>
										Anemia
									</div>
									<div class="checkbox">
										<input type="checkbox" name="sickness[]" value="angina" <?php if(isset($angina) && $angina != ''){ echo 'checked'; } ?> <?php echo $disabled; ?>>
										Angina
									</div>
									<div class="checkbox">
										<input type="checkbox" name="sickness[]" value="asthma" <?php if(isset($asthma) && $asthma != ''){ echo 'checked'; } ?> <?php echo $disabled; ?>>
										Asthma
									</div>
									<div class="checkbox">
										<input type="checkbox" name="sickness[]" value="emphysemia" <?php if(isset($emphysemia) && $emphysemia != ''){ echo 'checked'; } ?> <?php echo $disabled; ?>>
										Emphysemia
									</div>
									<div class="checkbox">
										<input type="checkbox" name="sickness[]" value="bleedingProblems" <?php if(isset($bleedingProblems) && $bleedingProblems != ''){ echo 'checked'; } ?> <?php echo $disabled; ?>>
										Bleeding Problems
									</div>
									<div class="checkbox">
										<input type="checkbox" name="sickness[]" value="headInjuries" <?php if(isset($headInjuries) && $headInjuries != ''){ echo 'checked'; } ?> <?php echo $disabled; ?>>
										Head Injuries
									</div>
									<div class="checkbox">
										<input type="checkbox" name="sickness[]" value="arthritis" <?php if(isset($arthritis) && $arthritis != ''){ echo 'checked'; } ?> <?php echo $disabled; ?>>
										Arthritis or Rheumatism
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="col-lg-5 col-md-offset-7">
									<button type="button" alt="dentist_history" class="button_next btn btn-primary col-lg-5">Back</button>
						<?php
							if(!$disabled)
							{
						?>
									<button type="button" class="submit_all_form btn btn-primary col-lg-5">Submit</button>
						<?php
							}
						?>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
  <!-- Modal -->
  <div class="modal fade" id="myModalSaveSuccessfully" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body">
          Saved Successfully!
        </div>
        <div class="modal-footer">
          <a href="<?php echo base_url('patient_records'); ?>" class="btn btn-default">Close</a>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->