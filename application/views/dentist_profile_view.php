
<div id="wrapper"><!--start body wrapper -->
	<!--start dentist profile form-->
			<div id="form-wrapper"><!-- start dentist profile form wrapper-->
				<div id="dp-wrapper-form"><!--start dentist profile form-->
					<div id="dp-body-wraper">
						<form class="form-horizontal col-lg-offset-1" id="form_dentist_profile" role="form" method="post" action="<?php echo base_url('dentist_profile/save_dentist_info'); ?>" enctype="multipart/form-data" name="DentistProfileForm">

								
								<!--START PERSONAL INFO-->
									<div class="alert alert-danger alert_msg" style="text-align:center;display:none;"></div>
									<div class="form-group"><!--start dentist id number-->
										<label for="" class="col-lg-3 control-label">Dentist ID Number:</label>
										<div class="col-lg-6">
											<input type="text" id="dentist-id" name="dentist-id" value="<?php echo $id; ?>" class="form-control" disabled="disabled"/>
										</div>
									</div><!--end dentist id number-->
									<div class="form-group"><!--start dentist picture-->
										<label for="" class="col-lg-3 control-label"></label>
										<div class="col-lg-6">
											<img src="<?php echo base_url($profile_pic); ?>" alt="dentist image" id="dentist-img" name="dentist-img" class="thumbnail img-rounded" onerror="this.src='http://www.placehold.it/200x150/EFEFEF/AAAAAA&text=no+image'">
											<input type="file" id="dentist-photo" name="dentist-photo" value="" />
											<input type="hidden" id="dentist_photo_file" name="dentist_photo_file" value="<?php if(isset($profile_pic) && $profile_pic != ' '){ echo $profile_pic; } ?>">
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
								
								<div class="form-group"><!--start dob-->
									<label for="" class="col-lg-3 control-label">Birth Date:</label>
									<div class="col-lg-6">
										<input type="text" id="datepicker" name="bod" class="form-control datepick" placeholder="mm/dd/yyyy" />
									</div>
								</div><!--end dob-->
								<div class="form-group"><!--start dob-->
									<label for="" class="col-lg-3 control-label">Gender:</label>
									<div class="col-lg-6">
										<select id="dentist-gender" name="dentist-gender" class="form-control">
											<option value="">Select...</option>
											<option value="male">Male</option>
											<option value="female">Female</option>
										</select>
									</div>
								</div><!--end dob-->
								
								<div class="form-group"><!--start license number-->
									<label for="inputEmail1" class="col-lg-3 control-label">License Number:</label>
									<div class="col-lg-6">
										<input type="text" id="license" name="license" class="form-control" value="<?php echo isset($license_number) ? $license_number : '' ?>"/>
									</div>
								</div><!--end license number-->
								<div class="form-group">
									<div class="col-lg-offset-3 col-lg-10">
										<button type="submit" name="save" value="Save" class="btn btn-primary" id="save"> Save </button>
									</div>
								</div>							
								<!--END PERSONAL INFO-->
								<!--START CLINIC DETAILS-->
								<div class="form-group" <!--style="margin-left:62px;border:solid 0px red;width:27%;"--><!--start clinic details-->
									<div class="col-lg-offset-1">
										<h2><span>Clinic Details</span></h2>
									</div>
								</div><!--end clinic details-->
								<div class="form-group"><!--start dentist clinic picture-->
									<label for="" class="col-lg-3 control-label"></label>
									<div class="col-lg-6">
										<img src="" alt="clinic image" id="clinic-img" name="clinic-img" class="thumbnail img-rounded" onerror="this.src='http://www.placehold.it/200x150/EFEFEF/AAAAAA&text=no+image'">
										<input type="file" id="clinic-photo" name="clinic-photo" value="" />
										
										<input type="hidden" id="clinic_photo_file" name="clinic_photo_file" value="<?php if(isset($row) && $row['dentist_picture'] != ' '){ echo $row['dentist_picture']; } ?>">
									</div>
								</div><!--end dentist clinic picture-->
								<div class="form-group"><!--start clinic name-->
										<label for="" class="col-lg-3 control-label">Clinic Name:</label>
										<div class="col-lg-6">
											<input type="text" id="clinic_name" name="clinic_name" class="form-control" placeholder="" value="<?php echo isset($clinic_name) ? $clinic_name : ''?>">											

										</div>	
								</div><!--end clinic name-->
								<div class="form-group"><!--start dentist service-->
									<label for="" class="col-lg-3 control-label">Service:</label>
									<div class="col-lg-3">
										<div class="checkbox"><input type="checkbox" name="service[]" value="Dental Emergency-Same Day">Dental Emergency-Same Day</div>
										<div class="checkbox"><input type="checkbox" name="service[]" value="Bone Grafts">Bone Grafts</div>
										<div class="checkbox"><input type="checkbox" name="service[]" value="Cosmetic Dentistry">Cosmetic Dentistry</div>
										<div class="checkbox"><input type="checkbox" name="service[]" value="Crowns and Bridges">Crowns and Bridges</div>
										<div class="checkbox"><input type="checkbox" name="service[]" value="CT Scan - 3D Imaging i-cat">CT Scan - 3D Imaging i-cat</div>
										<div class="checkbox"><input type="checkbox" name="service[]" value="Dental Implants">Dental Implants</div>
										<div class="checkbox"><input type="checkbox" name="service[]" value="Dental Medicine">Dental Medicine</div>
										<div class="checkbox"><input type="checkbox" name="service[]" value="Detection of Cancer">Detection of Cancer</div>
										<div class="checkbox"><input type="checkbox" name="service[]" value="Dentofacial Orthopedics">Dentofacial Orthopedics</div>
										<div class="checkbox"><input type="checkbox" name="service[]" value="Endodontic Surgery">Endodontic Surgery</div>
										<div class="checkbox"><input type="checkbox" name="service[]" value="Extractions">Extractions</div>
										<div class="checkbox"><input type="checkbox" name="service[]" value="Fillings: Teeth Colored">Fillings: Teeth Colored</div>
										<div class="checkbox"><input type="checkbox" name="service[]" value="Financing">Financing</div>
										<div class="checkbox"><input type="checkbox" name="service[]" value="General Dentistry">General Dentistry</div>
										<div class="checkbox"><input type="checkbox" name="service[]" value="Gingival Grafts">Gingival Grafts</div>
										<div class="checkbox"><input type="checkbox" name="service[]" value="Gums Treatment - Surgical and Not Surgical">Gums Treatment - Surgical and Not Surgical</div>
										<div class="checkbox"><input type="checkbox" name="service[]" value="Laser Dentistry">Laser Dentistry</div>
										<div class="checkbox"><input type="checkbox" name="service[]" value="Lumineers">Lumineers</div>
									</div>
									<div class="col-lg-3">
										<div class="checkbox"><input type="checkbox" name="cosmetic" value="Medical Insurance Billing">Medical Insurance Billing</div>
										<div class="checkbox"><input type="checkbox" name="service[]" value="Oral Appliance Therapy">Oral Appliance Therapy</div>
										<div class="checkbox"><input type="checkbox" name="service[]" value="Oral rehabilitation">Oral rehabilitation</div>
										<div class="checkbox"><input type="checkbox" name="service[]" value="Oral Systemic connection">Oral Systemic connection</div>
										<div class="checkbox"><input type="checkbox" name="service[]" value="Oral Surgery">Oral Surgery</div>
										<div class="checkbox"><input type="checkbox" name="service[]" value="Orthodontics">Orthodontics</div>
										<div class="checkbox"><input type="checkbox" name="service[]" value="Partials and Dentures">Partials and Dentures</div>
										<div class="checkbox"><input type="checkbox" name="service[]" value="Preventive Dentistr">Preventive Dentistry</div>
										<div class="checkbox"><input type="checkbox" name="service[]" value="Root Canals">Root Canals</div>
										<div class="checkbox"><input type="checkbox" name="service[]" value="Sealants">Sealants</div>
										<div class="checkbox"><input type="checkbox" name="service[]" value="Smile Makeovers">Smile Makeovers</div>
										<div class="checkbox"><input type="checkbox" name="service[]" value="Snoring and Sleep Apne">Snoring and Sleep Apnea</div>
										<div class="checkbox"><input type="checkbox" name="service[]" value="Sports Dentistry - Mouthguiards">Sports Dentistry - Mouthguiards</div>
										<div class="checkbox"><input type="checkbox" name="service[]" value="TMJ and Facial Pain">TMJ and Facial Pain</div>
										<div class="checkbox"><input type="checkbox" name="service[]" value="Whitening your teeth with Laser">Whitening your teeth with Laser</div>
										<div class="checkbox"><input type="checkbox" name="service[]" value="Wisdom Teeth Removal">Wisdom Teeth Removal</div>
										<div class="checkbox"><input type="checkbox" name="service[]" value="Implants Planning">Implants Planning</div>
										<?php
											// $this->db->where('id',00000000471);
											// $query1 = $this->db->get('dentist_list');
											// $row1 = $query1->row_array();
											// $vararara = json_decode($row1['dentist_services']);
											
											// $dental = in_array('Implants Planning',$vararara[0]);
											// echo $dental;
											
										?>
									</div>
								</div><!--end dentist service-->
								<div class="form-group"><!--start dentist service-->
									<label for="" class="col-lg-3 control-label">Other Service:</label>
									<div class="col-lg-7">
										<textarea rows="6" cols="80"id="other_service" name="other_service"><?php echo isset($services_offered) ?  $services_offered : ''; ?></textarea>
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
								$time_in = array(
									$sched_in = 'sunday_in',
									$sched_in = 'sunday_out'
								);
								$week = array('sunday', 'monday', 'tuesday', 'wednesday', 'thursday', 'friday');
								foreach($week as $day) {
?>
								<div class="form-group"><!--start clinic hours sunday-->
									<label for="" class="col-lg-3 control-label"></label>
									<div id="c-hours-day" class="col-lg-1 control-label" style="text-align:left;"> <strong> <?php echo ucfirst($day); ?> </strong> </div>
									<div id="sample2" class="col-lg-2">
										<input type="text" name="in_<?php echo $day; ?>" value="<?php echo isset($time_in) ? $time_in : ''?>" class="form-control timepick clinic_hr" placeholder="00:00 AM">
									</div>
									<div id="c-hours-to" class="col-lg-1 control-label to_label" style="text-align:center;"> <strong> To </strong> </div>
									<div id="sample2" class="ui-widget-content-old col-lg-2">
										<input type="text" name="out_<?php echo $day; ?>" value="<?php echo isset($sunday_out) ? $sunday_out : ''?>" class="form-control timepick" placeholder="00:00 PM">
									</div>
								</div><!--end clinic hours sunday-->
<?php
								}
?>
								<div class="form-group">
									<div class="col-lg-offset-3 col-lg-10">
										<button type="submit" name="save" value="Save" class="btn btn-primary" id="save"> Save </button>
									</div>
								</div>	
						</form>
					</div>
				
				</div><!--end dentist profile form-->
			
			</div><!-- start dentist registration form wrapper-->
			<!--end dentist registration form-->
	
</div><!--end body wrapper -->

<!-- Modal -->
  <div class="modal fade" id="mySuccessReg" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Registration Successfully</h4>
        </div>
        <div class="modal-body">
			<p>Profile updated success...</p>
          <!--<p>Please verify your email to activate your account.</p>-->
        </div>
        <div class="modal-footer">
          <a href="<?php echo base_url('dentist_dashboard'); ?>" class="btn btn-default">OK</a>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->