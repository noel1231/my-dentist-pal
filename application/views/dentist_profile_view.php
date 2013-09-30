

	<!--start dentist profile form-->
			<div id="form-wrapper"><!-- start dentist profile form wrapper-->
				<div id="dp-wrapper-form"><!--start dentist profile form-->
					<div id="dp-body-wraper">
						<form class="form-horizontal col-lg-offset-1" id="form_dentist_profile" role="form" method="post" enctype="multipart/form-data" name="DentistProfileForm" onsubtmit="return false;">
								<!--START PERSONAL INFO-->
									<!--<div class="alert alert-danger alert_msg" style="text-align:center;display:none;width:505px;margin-left:270px;"></div>-->
									<div class="form-group"><!--start dentist id number-->
										<label for="" class="col-lg-3 control-label">Dentist ID Number:</label>
										<div class="col-lg-6">
											<input type="text" id="dentist-id" name="dentist-id" value="<?php echo $id; ?>" class="form-control" disabled="disabled"/>
										</div>
									</div><!--end dentist id number-->
									<div class="form-group"><!--start dentist picture-->
										<label for="" class="col-lg-3 control-label"></label>
										<div class="col-lg-6">
											<img src="<?php if(isset($profile_pic) && trim($profile_pic)){ echo base_url($profile_pic); }else{echo '';} ?>" alt="dentist image" id="dentist-img" name="dentist-img" class="thumbnail img-rounded dentist_photo_view col-lg-12" onerror="this.src='http://www.placehold.it/200x150/EFEFEF/AAAAAA&text=no+image'" style="width:200px;">
											<input type="file" id="dentist-photo" name="dentist-photo" />
											<input type="hidden" id="dentist_photo_existing_file" name="dentist_photo_existing_file" value="<?php //if(isset($profile_pic) && $profile_pic['dentist_img'] != ''){ echo $profile_pic['dentist_img']; } ?>">
											<input type="hidden" id="dentist_photo_file" name="dentist_photo_file" value="<?php if(isset($profile_pic) && $profile_pic != ''){ echo $profile_pic; } ?>">
										</div>
									</div><!--end dentist picture-->
									<div class="form-group"><!--start full name-->
										<label for="" id="dp-label" class="col-lg-3 control-label">Name:</label>
											<div class="col-lg-2">
												<input type="text" id="fname" name="fname" class="form-control"  placeholder="First name" value="<?php echo isset($first_name) ? $first_name : ''; ?>">
											</div>
											<div class="col-lg-2">
												<input type="text" id="middle" name="middle" class="form-control" placeholder="Middle name" value="<?php echo isset($middle_name) ? $middle_name : ''; ?>">
											</div>
											<div class="col-lg-2">
												<input type="text" id="lname" name="lname" class="form-control" placeholder="Last name" value="<?php echo isset($sur_name) ? $sur_name : '' ?>">
											</div>
									</div><!--end full name-->
								<?php
									
									$monthnames = array(
										1 => 'January',2 => 'February',3 => 'March',4 => 'April',5 => 'May',6 => 'June',
										7 => 'July',8 => 'August',9 => 'September',10 => 'October',11 => 'November',12 => 'December'
									); 	
									$bod_month = $birth_month;
									
									foreach($monthnames as $key => $val)
									{
										if($bod_month == $val)
										{
											if($key  < 10)
											{
												$monthint = '0'.$key;
											}else
											{
												$monthint = $key;
											}
										}
									}
									$bod_day = $birth_day;
									$bod_year = $birth_year;
									$bod = $monthint . '/' . $bod_day . '/' . $bod_year;
								?>
								<div class="form-group"><!--start dob-->
									<label for="" class="col-lg-3 control-label">Birth Date:</label>
									<div class="col-lg-6">
										<input type="text" id="datepicker" name="bod" class="form-control datepick" placeholder="<?php echo isset($bod) ? $bod : '' ?>"" value="<?php echo isset($bod) ? $bod : '' ?>" />
									</div>
								</div><!--end dob-->
								
								<div class="form-group"><!--start gender-->
									<label for="" class="col-lg-3 control-label">Gender:</label>
									<div class="col-lg-6">
										<select id="dentist-gender" name="dentist-gender" class="form-control">
											<option value="">Select...</option>
											<option value="male">Male</option>
											<option value="female">Female</option>
										</select>
									</div>
								</div><!--end gender-->
								
								<div class="form-group"><!--start license number-->
									<label for="inputEmail1" class="col-lg-3 control-label">License Number:</label>
									<div class="col-lg-6">
										<input type="text" id="license" name="license" class="form-control" value="<?php echo isset($license_number) ? $license_number : '' ?>"/>
									</div>
								</div><!--end license number-->
								<div class="form-group">
									<div class="col-lg-offset-3 col-lg-10">
										<button type="submit" name="save" value="Save" class="btn btn-primary submit_dental_form1" id="save"> Save </button>
									</div>
								</div>							
								<!--END PERSONAL INFO-->
								<!--START CLINIC DETAILS-->
								<div class="form-group" <!--style="margin-left:62px;border:solid 0px red;width:27%;"--><!--start clinic details-->
									
										<label for="" class="col-lg-3 control-label"><h2><span>Clinic Details</span></h2></label>
										<!--<h2><span>Clinic Details</span></h2>-->
									
								</div><!--end clinic details-->
								<div class="form-group"><!--start dentist clinic picture-->
									<label for="" class="col-lg-3 control-label"></label>
									<div class="col-lg-6">
										<img src="<?php if(isset($clinic_pic) && trim($clinic_pic)){ echo base_url($clinic_pic);}else { echo '';}  ?>" alt="clinic image" id="clinic-img" name="clinic-img"  class="thumbnail img-rounded clinic_photo_view" onerror="this.src='http://www.placehold.it/200x150/EFEFEF/AAAAAA&text=no+image'" style="width:200px;">
										<input type="file" id="clinic-photo" name="clinic-photo" />
										<input type="hidden" id="clinic_photo_existing_file" name="clinic_photo_existing_file" value="<?php //if(isset($row) && $row['dentist_picture'] != ' '){ echo $row['dentist_picture']; } ?>">
										<input type="hidden" id="clinic_photo_file" name="clinic_photo_file" value="<?php if(isset($clinic_pic) && $clinic_pic != ' '){ echo $clinic_pic; } ?>">
									</div>
								</div><!--end dentist clinic picture-->
								<div class="form-group"><!--start clinic name-->
										<label for="" class="col-lg-3 control-label">Clinic Name:</label>
										<div class="col-lg-6">
											<input type="text" id="clinic_name" name="clinic_name" class="form-control" placeholder="" value="<?php echo isset($clinic_name) ? $clinic_name : ''?>">											
										</div>	
								</div><!--end clinic name-->
								<?php
								if(isset($dentist_services))
								{
									$dataextract = json_decode($dentist_services);

									if($dataextract)
									{
										$dental_services = in_array('Dental Emergency-Same Day',$dataextract);
										$dental_services1 = in_array('Bone Grafts',$dataextract);
										$dental_services2 = in_array('Cosmetic Dentistry',$dataextract);
										$dental_services3 = in_array('Crowns and Bridges',$dataextract);
										$dental_services4 = in_array('CT Scan - 3D Imaging i-cat',$dataextract);
										$dental_services5 = in_array('Dental Implants',$dataextract);
										$dental_services6 = in_array('Dental Medicine',$dataextract);
										$dental_services7 = in_array('Detection of Cancer',$dataextract);
										$dental_services8 = in_array('Dentofacial Orthopedics',$dataextract);
										$dental_services9 = in_array('Endodontic Surgery',$dataextract);
										$dental_services10 = in_array('Extractions',$dataextract);
										$dental_services11 = in_array('Fillings: Teeth Colored',$dataextract);
										$dental_services12 = in_array('Financing',$dataextract);
										$dental_services13 = in_array('General Dentistry',$dataextract);
										$dental_services14 = in_array('Gingival Grafts',$dataextract);
										$dental_services15 = in_array('Gums Treatment - Surgical and Not Surgical',$dataextract);
										$dental_services16 = in_array('Laser Dentistry',$dataextract);
										$dental_services17 = in_array('Lumineers',$dataextract);
										$dental_services18 = in_array('Medical Insurance Billing',$dataextract);
										$dental_services19 = in_array('Oral Appliance Therapy',$dataextract);
										$dental_services20 = in_array('Oral rehabilitation',$dataextract);
										$dental_services21 = in_array('Oral Systemic connection',$dataextract);
										$dental_services22 = in_array('Oral Surgery',$dataextract);
										$dental_services23 = in_array('Orthodontics',$dataextract);
										$dental_services24 = in_array('Partials and Dentures',$dataextract);
										$dental_services25 = in_array('Preventive Dentistry',$dataextract);
										$dental_services26 = in_array('Root Canals',$dataextract);
										$dental_services27 = in_array('Sealants',$dataextract);
										$dental_services28 = in_array('Smile Makeovers',$dataextract);
										$dental_services29 = in_array('Snoring and Sleep Apnea',$dataextract);
										$dental_services30 = in_array('Sports Dentistry - Mouthguiards',$dataextract);
										$dental_services31 = in_array('TMJ and Facial Pain',$dataextract);
										$dental_services32 = in_array('Whitening your teeth with Laser',$dataextract);
										$dental_services33 = in_array('Wisdom Teeth Removal',$dataextract);
										$dental_services34 = in_array('Implants Planning',$dataextract);
									}
								}	
								
								?>
								<div class="form-group"><!--start dentist service-->
									<label for="" class="col-lg-3 control-label">Service:</label>
									<div class="col-lg-3">
										<div class="checkbox"><input type="checkbox" name="service[]" value="Dental Emergency-Same Day" <?php if(isset($dental_services) && $dental_services != ''){echo 'checked'; } ?>>Dental Emergency-Same Day</div>
										<div class="checkbox"><input type="checkbox" name="service[]" value="Bone Grafts" <?php if(isset($dental_services1) && $dental_services1 != ''){echo 'checked'; } ?>>Bone Grafts</div>
										<div class="checkbox"><input type="checkbox" name="service[]" value="Cosmetic Dentistry" <?php if(isset($dental_services2) && $dental_services2 != ''){echo 'checked'; } ?>>Cosmetic Dentistry</div>
										<div class="checkbox"><input type="checkbox" name="service[]" value="Crowns and Bridges" <?php if(isset($dental_services3) && $dental_services3 != ''){echo 'checked'; } ?>>Crowns and Bridges</div>
										<div class="checkbox"><input type="checkbox" name="service[]" value="CT Scan - 3D Imaging i-cat" <?php if(isset($dental_services4) && $dental_services4 != ''){echo 'checked'; } ?>>CT Scan - 3D Imaging i-cat</div>
										<div class="checkbox"><input type="checkbox" name="service[]" value="Dental Implants" <?php if(isset($dental_services5) && $dental_services5 != ''){echo 'checked'; } ?>>Dental Implants</div>
										<div class="checkbox"><input type="checkbox" name="service[]" value="Dental Medicine" <?php if(isset($dental_services6) && $dental_services6 != ''){echo 'checked'; } ?>>Dental Medicine</div>
										<div class="checkbox"><input type="checkbox" name="service[]" value="Detection of Cancer" <?php if(isset($dental_services7) && $dental_services7 != ''){echo 'checked'; } ?>>Detection of Cancer</div>
										<div class="checkbox"><input type="checkbox" name="service[]" value="Dentofacial Orthopedics" <?php if(isset($dental_services8) && $dental_services8 != ''){echo 'checked'; } ?>>Dentofacial Orthopedics</div>
										<div class="checkbox"><input type="checkbox" name="service[]" value="Endodontic Surgery" <?php if(isset($dental_services9) && $dental_services9 != ''){echo 'checked'; } ?>>Endodontic Surgery</div>
										<div class="checkbox"><input type="checkbox" name="service[]" value="Extractions" <?php if(isset($dental_services10) && $dental_services10 != ''){echo 'checked'; } ?>>Extractions</div>
										<div class="checkbox"><input type="checkbox" name="service[]" value="Fillings: Teeth Colored" <?php if(isset($dental_services11) && $dental_services11 != ''){echo 'checked'; } ?>>Fillings: Teeth Colored</div>
										<div class="checkbox"><input type="checkbox" name="service[]" value="Financing" <?php if(isset($dental_services12) && $dental_services12 != ''){echo 'checked'; } ?>>Financing</div>
										<div class="checkbox"><input type="checkbox" name="service[]" value="General Dentistry" <?php if(isset($dental_services13) && $dental_services13 != ''){echo 'checked'; } ?>>General Dentistry</div>
										<div class="checkbox"><input type="checkbox" name="service[]" value="Gingival Grafts" <?php if(isset($dental_services14) && $dental_services14 != ''){echo 'checked'; } ?>>Gingival Grafts</div>
										<div class="checkbox"><input type="checkbox" name="service[]" value="Gums Treatment - Surgical and Not Surgical" <?php if(isset($dental_services15) && $dental_services15 != ''){echo 'checked'; } ?>>Gums Treatment - Surgical and Not Surgical</div>
										<div class="checkbox"><input type="checkbox" name="service[]" value="Laser Dentistry" <?php if(isset($dental_services16) && $dental_services16 != ''){echo 'checked'; } ?>>Laser Dentistry</div>
										<div class="checkbox"><input type="checkbox" name="service[]" value="Lumineers" <?php if(isset($dental_services17) && $dental_services17 != ''){echo 'checked'; } ?>>Lumineers</div>
									</div>
									<div class="col-lg-3">
										<div class="checkbox"><input type="checkbox" name="service[]" value="Medical Insurance Billing" <?php if(isset($dental_services18) && $dental_services18 != ''){echo 'checked'; } ?>>Medical Insurance Billing</div>
										<div class="checkbox"><input type="checkbox" name="service[]" value="Oral Appliance Therapy" <?php if(isset($dental_services19) && $dental_services19 != ''){echo 'checked'; } ?>>Oral Appliance Therapy</div>
										<div class="checkbox"><input type="checkbox" name="service[]" value="Oral rehabilitation" <?php if(isset($dental_services20) && $dental_services20 != ''){echo 'checked'; } ?>>Oral rehabilitation</div>
										<div class="checkbox"><input type="checkbox" name="service[]" value="Oral Systemic connection" <?php if(isset($dental_services21) && $dental_services21 != ''){echo 'checked'; } ?>>Oral Systemic connection</div>
										<div class="checkbox"><input type="checkbox" name="service[]" value="Oral Surgery" <?php if(isset($dental_services22) && $dental_services22 != ''){echo 'checked'; } ?>>Oral Surgery</div>
										<div class="checkbox"><input type="checkbox" name="service[]" value="Orthodontics" <?php if(isset($dental_services23) && $dental_services23 != ''){echo 'checked'; } ?>>Orthodontics</div>
										<div class="checkbox"><input type="checkbox" name="service[]" value="Partials and Dentures" <?php if(isset($dental_services24) && $dental_services24 != ''){echo 'checked'; } ?>>Partials and Dentures</div>
										<div class="checkbox"><input type="checkbox" name="service[]" value="Preventive Dentistr" <?php if(isset($dental_services25) && $dental_services25 != ''){echo 'checked'; } ?>>Preventive Dentistry</div>
										<div class="checkbox"><input type="checkbox" name="service[]" value="Root Canals" <?php if(isset($dental_services26) && $dental_services26 != ''){echo 'checked'; } ?>>Root Canals</div>
										<div class="checkbox"><input type="checkbox" name="service[]" value="Sealants" <?php if(isset($dental_services27) && $dental_services27 != ''){echo 'checked'; } ?>>Sealants</div>
										<div class="checkbox"><input type="checkbox" name="service[]" value="Smile Makeovers" <?php if(isset($dental_services28) && $dental_services28 != ''){echo 'checked'; } ?>>Smile Makeovers</div>
										<div class="checkbox"><input type="checkbox" name="service[]" value="Snoring and Sleep Apne" <?php if(isset($dental_services29) && $dental_services29 != ''){echo 'checked'; } ?>>Snoring and Sleep Apnea</div>
										<div class="checkbox"><input type="checkbox" name="service[]" value="Sports Dentistry - Mouthguiards" <?php if(isset($dental_services30) && $dental_services30 != ''){echo 'checked'; } ?>>Sports Dentistry - Mouthguiards</div>
										<div class="checkbox"><input type="checkbox" name="service[]" value="TMJ and Facial Pain" <?php if(isset($dental_services31) && $dental_services31 != ''){echo 'checked'; } ?>>TMJ and Facial Pain</div>
										<div class="checkbox"><input type="checkbox" name="service[]" value="Whitening your teeth with Laser" <?php if(isset($dental_services32) && $dental_services32 != ''){echo 'checked'; } ?>>Whitening your teeth with Laser</div>
										<div class="checkbox"><input type="checkbox" name="service[]" value="Wisdom Teeth Removal" <?php if(isset($dental_services33) && $dental_services33 != ''){echo 'checked'; } ?>>Wisdom Teeth Removal</div>
										<div class="checkbox"><input type="checkbox" name="service[]" value="Implants Planning" <?php if(isset($dental_services34) && $dental_services34 != ''){echo 'checked'; } ?>>Implants Planning</div>
									</div>
								</div><!--end dentist service-->
								<div class="form-group"><!--start dentist service-->
									<label for="" class="col-lg-3 control-label">Other Service:</label>
									<div class="col-lg-6">
										<textarea rows="5" cols="" id="other_service" name="other_service" class="form-control"><?php echo isset($services_offered) ?  $services_offered : ''; ?></textarea>
									</div>
								</div><!--end dentist other service-->
								<div class="form-group"><!--start clinic address-->
										<label for="" class="col-lg-3 control-label">Clinic Address:</label>
										<div class="col-lg-6">
											<input type="text" id="clinic_address" name="clinic_address" class="form-control" placeholder="" value="<?php echo isset($clinic_address) ? $clinic_address : ''?>">
										</div>	
								</div><!--end clinic address-->
								<div class="form-group"><!--start landline number-->
										<label for="" class="col-lg-3 control-label">Landline number:</label>
										<div class="col-lg-6">
											<input type="text" id="landline" name="landline" class="form-control" placeholder="" value="<?php echo isset($tel_number) ? $tel_number : ''?>">
										</div>	
								</div><!--end landline number-->
								<div class="form-group"><!--start mobile number-->
										<label for="" class="col-lg-3 control-label">Mobile number:</label>
										<div class="col-lg-6">
											<input type="text" id="mobile" name="mobile" class="form-control" placeholder="" value="<?php echo isset($cel_number) ? $cel_number : ''?>">
										</div>	
								</div><!--end mobile number-->
								<div class="form-group"><!--start email address-->
										<label for="" class="col-lg-3 control-label">Email Address:</label>
										<div class="col-lg-6">
											<input type="text" id="email1" name="email1" class="form-control" placeholder="" value="<?php echo isset($email) ? $email : ''; ?>">
										</div>	
								</div><!--end email address-->
								<div class="form-group"><!--start facebook fan page-->
										<label for="" class="col-lg-3 control-label"> Facebook Fan Page: </label>
										<div class="col-lg-6">
											<input type="text" id="fanpage" name="fanpage" class="form-control" placeholder="www.facebook.com/FanpageName" value="<?php echo isset($fb_fanpage) ? $fb_fanpage : ''?>">
										</div>	
								</div><!--end facebook fan page-->
								<div class="form-group"><!--start twitter-->
										<label for="" class="col-lg-3 control-label">Twitter:</label>
										<div class="col-lg-6">
											<input type="text" id="tweet" name="tweet" class="form-control" placeholder="@TwitterHandle" value="<?php echo isset($twitter) ? $twitter : ''?>">
										</div>	
								</div><!--end twitter-->
								<div class="form-group">
									<label for="" class="col-lg-3 control-label">Clinic Hours:</label>
								</div>
<?php
								
								$week = array('sunday', 'monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday');
								foreach($week as $day) {
									
?>
								<div class="form-group"><!--start clinic hours sunday-->
									<label for="" class="col-lg-3 control-label"></label>
									<div id="c-hours-day" class="col-lg-1 control-label" style="text-align:left;"> <strong> <?php echo ucfirst($day); ?> </strong> </div>
									<div id="sample2" class="col-lg-2">
										<input type="text" name="in_<?php echo $day; ?>" value="<?php echo isset(${$day.'_in'}) ? ${$day.'_in'} : ''?>" class="form-control timepick clinic_hr" placeholder="<?php echo isset(${$day.'_in'}) ? ${$day.'_in'} : ''?>">
									</div>
									<div id="c-hours-to" class="col-lg-1 control-label to_label" style="text-align:center;"> <strong> To </strong> </div>
									<div id="sample2" class="ui-widget-content-old col-lg-2">
										<input type="text" name="out_<?php echo $day; ?>" value="<?php echo isset(${$day.'_out'}) ? ${$day.'_out'} : ''?>" class="form-control timepick" placeholder="<?php echo isset(${$day.'_out'}) ? ${$day.'_out'} : ''?>">
									</div>
								</div><!--end clinic hours sunday-->
<?php
								}
?>
								<div class="form-group">
									<div class="col-lg-offset-3 col-lg-10">
										<button type="submit" name="save" value="Save" class="btn btn-primary submit_dental_form1" id="save"> Save </button>
									</div>
								</div>	
						</form>
					</div>
				
				</div><!--end dentist profile form-->
			
			</div><!-- start dentist registration form wrapper-->
			<!--end dentist registration form-->
	
</div><!--end body wrapper -->

<!-- Modal -->
  <div class="modal fade" id="myErrorReg" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Error:</h4>
        </div>
        <div class="modal-body">
			<div class="alert alert-danger alert_msg" style="text-align:center;display:none;width:505px;margin-left:15px;"></div>
          <!--<p>Please verify your email to activate your account.</p>-->
        </div>
        <!--<div class="modal-footer">
          <a href="<?php //echo base_url('dentist_profile'); ?>" class="btn btn-default">OK</a>
        </div>-->
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->

<!-- Modal -->
  <div class="modal fade" id="mySuccessReg" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title"></h4>
        </div>
        <div class="modal-body">
			<!--<p>Profile updated success...</p>-->
			<div class="alert alert-success success_msg" style="text-align:center;display:none;width:505px;margin-left:15px;margin-top:10px;"></div>
          <!--<p>Please verify your email to activate your account.</p>-->
        </div>
        <div class="modal-footer">
          <a href="<?php echo base_url('dentist_profile'); ?>" class="btn btn-default">OK</a>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
 