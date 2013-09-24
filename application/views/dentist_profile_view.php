<?php 
	$this->db->where('id',$id_result);
	$query = $this->db->get('dentist_list');
	$results = $query->row_array();
?>

<style type="text/css">
	
	/* #wrapper { border:solid 1px black; width:100%; height:100%; margin-top:160px;} */
	#wrapper {background-color:#fff;margin-top:52px;}
		
	#dr-title-wrapper { background-color:#e0e2e4;width:100%;height:90px;}
	#form-wrapper { background-color:#fff; height:410px;border:solid 0px red;}
	
	label { margin-left:135px;}
	#middle{ position:relative; margin-top:-34px; margin-left:162px;}
	#lname{ position:relative; margin-top:-34px; margin-left:325px;}
	#bday2{ position:relative; margin-top:-31px; margin-left:240px;}
	#bday3{ position:relative; margin-top:-31px; margin-left:480px;}
	.alert_msg {width:450px; margin-left:300px;}
	
	#dentist-img { border:solid 1px lightgray; position:relative; margin-left:298px; width:160px; height:140px;}
	#clinic-img { border:solid 1px lightgray; position:relative; margin-left:298px; width:160px; height:140px;}
	#c-hours-day{width:80px;margin-left:0px;}
	#c-hours-to{width:72px;margin-left:0px;text-align:center;}
	h1 span{color:#CCC;}
	.clinic_hr{margin-left:15px;}
	.to_label{left:8px;}
</style>


<div id="wrapper"><!--start body wrapper -->
	<!--start dentist profile form-->
			<div id="form-wrapper"><!-- start dentist profile form wrapper-->
				<div id="dr-title-wrapper">
					<div style="margin:0 auto;width:940px;"><!-- start center-->
						<div style="float:left;margin-top:28px;"><!--Dentist's Dashboard--><!--<img src="images/dentist_dashboard.png" />-->
							<span style="font-weight:500;font-size:30px;color:#333;font-family: 'Trebuchet MS', Arial, Helvetica, sans-serif;">
						Dentist Profile</span>
						</div>
						<div style="float:right;">
						<!--<div style="float:right;margin-top:28px;"><input type="text" name="search" /></div>-->
						<div style="clear:both;"></div>
						</div><!--<div style="float:right;color:#969da4;font-size:10px;font-family:'Trebuchet MS', Arial, Helvetica, sans-serif;">CLICK HERE FOR ADVANCE SEARCH</div>-->
					</div><!--end center-->
				</div>
				<div id="dp-wrapper-form" style="border:solid 0px red; margin:0 auto; width:100%;"><!--start dentist profile form-->
					<div id="dp-body-wraper" style="border:solid 0px blue;width:960px;margin-left:200px;margin-top:20px;">
						<form class="form-horizontal" id="form_dentist_profile" role="form" method="post" action="<?php echo base_url('dentist_profile/save_dentist_info'); ?>" enctype="multipart/form-data" name="DentistProfileForm">
							<div>
								<div class="well well-sm" style="margin-left:0px;border:solid 0px green;">
								<!--START PERSONAL INFO-->
									<div class="form-group" style="margin-left:62px;border:solid 0px red;width:27%;"><!--start personal info-->
										<h1><span>Personal Info</span></h1>
									</div><!--end personal info-->
									<div class="alert alert-danger alert_msg" style="text-align:center;display:none;"></div>
									<div class="form-group"><!--start dentist id number-->
										<label for="" class="col-lg-2 control-label">Dentist ID Number:</label>
										<div class="col-lg-6">
											<input type="text" id="dentist-id" name="dentist-id" value="<?php echo $id_result; ?>" class="form-control" disabled="disabled"/>
										</div>
									</div><!--end dentist id number-->
									<div class="form-group"><!--start dentist picture-->
										<div class="col-lg-6">
											<img src="" alt="dentist image" id="dentist-img" name="dentist-img" class="img-rounded" onerror="this.src='http://www.placehold.it/200x150/EFEFEF/AAAAAA&text=no+image'">
										</div>
									</div><!--end dentist picture-->
									<div style="margin-left:298px; margin-bottom:15px;"><!--start upload dentist img-->
										<input type="file" id="dentist-photo" name="dentist-photo" value="" />
										<input type="hidden" id="dentist_photo_file" name="dentist_photo_file" value="<?php if(isset($row) && $row['patient_picture'] != ' '){ echo $row['patient_picture']; } ?>">
									</div><!--end dentist upload dentist img-->
									<div class="form-group"><!--start full name-->
										<label for="" id="dp-label" class="col-lg-2 control-label">Name:</label>
										<div class="col-lg-2">
											<input type="text" id="fname" name="fname" class="form-control"  placeholder="First name" value="<?php echo isset($results) ? $results['first_name'] : ''; ?>">
											<input type="text" id="middle" name="middle" class="form-control" placeholder="Middle name" value="<?php echo isset($results) ? $results['middle_name'] : ''; ?>">
											<input type="text" id="lname" name="lname" class="form-control" placeholder="Last name" value="<?php echo isset($results) ? $results['sur_name'] : '' ?>">
										</div>	
									</div><!--end full name-->
								
								<div class="form-group"><!--start dob-->
									<label for="" class="col-lg-2 control-label">Birth Date:</label>
									<div class="col-lg-6">
										<input type="text" id="datepicker" name="bod" class="form-control datepick" placeholder="mm/dd/yyyy" />
									</div>
								</div><!--end dob-->
								<div class="form-group"><!--start dob-->
									<label for="" class="col-lg-2 control-label">Gender:</label>
									<div class="col-lg-6">
										<select id="dentist-gender" name="dentist-gender" class="form-control">
											<option value="">Select...</option>
											<option value="male">Male</option>
											<option value="female">Female</option>
										</select>
									</div>
								</div><!--end dob-->
								
								<div class="form-group"><!--start license number-->
									<label for="inputEmail1" class="col-lg-2 control-label">License Number:</label>
									<div class="col-lg-6">
										<input type="text" id="license" name="license" class="form-control" value="<?php echo isset($results) ? $results['license_number'] : '' ?>"/>
									</div>
								</div><!--end license number-->
								
								<div style="margin-left:298px; margin-top:14px;"><!--start save button-->
									<input type="submit" name="save" value="Save" class="btn btn-primary" id="save"/>
								</div><!--end save button-->
								<div style="clear:both;">&nbsp;</div>
								<!--END PERSONAL INFO-->
								<!--START CLINIC DETAILS-->
								<div class="form-group" style="margin-left:62px;border:solid 0px red;width:27%;"><!--start clinic details-->
										<h1><span>Clinic Details</span></h1>
								</div><!--end clinic details-->
								<div class="form-group"><!--start dentist clinic picture-->
									<div class="col-lg-6">
										<img src="" alt="dentist image" id="clinic-img" name="clinic-img" class="img-rounded" onerror="this.src='http://www.placehold.it/200x150/EFEFEF/AAAAAA&text=no+image'">
									</div>
								</div><!--end dentist clinic picture-->
								<div style="margin-left:298px; margin-bottom:15px;"><!--start upload clinic details-->
									<input type="file" id="clinic-photo" name="clinic-photo" value="" />
									<input type="hidden" id="clinic_photo_file" name="clinic_photo_file" value="<?php if(isset($row) && $row['dentist_picture'] != ' '){ echo $row['dentist_picture']; } ?>">
								</div><!--end dentist upload clinic details-->
								<div class="form-group"><!--start clinic name-->
										<label for="" class="col-lg-2 control-label">Clinic Name:</label>
										<div class="col-lg-6">
											<input type="text" id="clinic_name" name="clinic_name" class="form-control" placeholder="" value="<?php echo isset($results) ? $results['clinic_name'] : ''?>">											

										</div>	
								</div><!--end clinic name-->
								<div class="form-group"><!--start dentist service-->
									<label for="" class="col-lg-2 control-label">Service:</label>
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
									<label for="" class="col-lg-2 control-label">Other Service:</label>
									<div class="col-lg-6">
										<textarea rows="6" cols="72" id="other_service" name="other_service"><?php echo isset($results) ?  $results['services_offered'] : ''; ?></textarea>
									</div>
								</div><!--end dentist other service-->
								<div class="form-group"><!--start clinic address-->
										<label for="" class="col-lg-2 control-label">Clinic Address:</label>
										<div class="col-lg-6">
											<input type="text" id="clinic_address" name="clinic_address" class="form-control" placeholder="" value="<?php echo isset($results) ? $results['clinic_address'] : ''?>">
										</div>	
								</div><!--end clinic address-->
								<div class="form-group"><!--start landline number-->
										<label for="" class="col-lg-2 control-label">Landline number:</label>
										<div class="col-lg-6">
											<input type="text" id="landline" name="landline" class="form-control" placeholder="" value="<?php echo isset($results) ? $results['tel_number'] : ''?>">
										</div>	
								</div><!--end landline number-->
								<div class="form-group"><!--start mobile number-->
										<label for="" class="col-lg-2 control-label">Mobile number:</label>
										<div class="col-lg-6">
											<input type="text" id="mobile" name="mobile" class="form-control" placeholder="" value="<?php echo isset($results) ? $results['cel_number'] : ''?>">
										</div>	
								</div><!--end mobile number-->
								<div class="form-group"><!--start email address-->
										<label for="" class="col-lg-2 control-label">Email Address:</label>
										<div class="col-lg-6">
											<input type="text" id="email1" name="email1" class="form-control" placeholder="" value="<?php echo isset($results) ? $results['email'] : ''; ?>">
										</div>	
								</div><!--end email address-->
								<div class="form-group"><!--start facebook fan page-->
										<label for="" style="margin-left:54px;" class="col-lg-3 control-label">Facebook Fan Page:</label>
										<div class="col-lg-6">
											<input type="text" id="fanpage" name="fanpage" class="form-control" placeholder="www.facebook.com/FanpageName" value="<?php echo isset($results) ? $results['fb_fanpage'] : ''?>">
										</div>	
								</div><!--end facebook fan page-->
								<div class="form-group"><!--start twitter-->
										<label for="" class="col-lg-2 control-label">Twitter:</label>
										<div class="col-lg-6">
											<input type="text" id="tweet" name="tweet" class="form-control" placeholder="@TwitterHandle" value="<?php echo isset($results) ? $results['twitter'] : ''?>">
										</div>	
								</div><!--end twitter-->
								<div class="form-group"><!--start clinic hours sunday-->
										<!--<label for="" class="col-lg-2 control-label">Clinic Hours:</label>-->
										<div class="form-inline">
											<!--<div class="well">-->
											<label for="" class="col-lg-2 control-label">Clinic Hours:</label>
												<div class="row">
													<label id="c-hours-day" class="col-lg-2 control-label">Sunday</label>
													<div id="sample2" class="col-lg-2">
														<input type="text" name="in_sunday" class="form-control timepick clinic_hr" placeholder="00:00 AM">
													</div>
													<label id="c-hours-to" class="col-lg-2 control-label to_label">To</label>
													<div id="sample2" class="ui-widget-content-old col-lg-2">
														<input type="text" name="out_sunday" class="form-control timepick" placeholder="00:00 PM">
													</div>
												</div>
											<!--</div>-->
										</div>
								</div><!--end clinic hours sunday-->
								<div class="form-group"><!--start clinic hours monday-->
										<!--<label for="" class="col-lg-2 control-label">Clinic Hours:</label>-->
										<div class="form-inline">
											<!--<div class="well">-->
											<label for="" class="col-lg-2 control-label"></label>
												<div class="row">
													<label id="c-hours-day" class="col-lg-2 control-label">Monday</label>
													<div id="sample2" class="col-lg-2">
														<input type="text" name="in_monday" class="form-control timepick clinic_hr" placeholder="00:00 AM">
													</div>
													<label id="c-hours-to" class="col-lg-2 control-label to_label">To</label>
													<div id="sample2" class="ui-widget-content-old col-lg-2">
														<input type="text" name="out_monday" class="form-control timepick" placeholder="00:00 PM">
													</div>
												</div>
											<!--</div>-->
										</div>
								</div><!--end clinic hours monday-->
								<div class="form-group"><!--start clinic hours tuesday-->
										<!--<label for="" class="col-lg-2 control-label">Clinic Hours:</label>-->
										<div class="form-inline">
											<!--<div class="well">-->
											<label for="" class="col-lg-2 control-label"></label>
												<div class="row">
													<label id="c-hours-day" class="col-lg-2 control-label">Tuesday</label>
													<div id="sample2" class="col-lg-2">
														<input type="text" name="in_tuesday" class="form-control timepick clinic_hr" placeholder="00:00 AM">
													</div>
													<label id="c-hours-to" class="col-lg-2 control-label to_label">To</label>
													<div id="sample2" class="ui-widget-content-old col-lg-2">
														<input type="text" name="out_tuesday" class="form-control timepick" placeholder="00:00 PM">
													</div>
												</div>
											<!--</div>-->
										</div>
								</div><!--end clinic hours tuesday-->
								<div class="form-group"><!--start clinic hours wednesday-->
										<!--<label for="" class="col-lg-2 control-label">Clinic Hours:</label>-->
										<div class="form-inline">
											<!--<div class="well">-->
											<label for="" class="col-lg-2 control-label"></label>
												<div class="row">
													<label id="c-hours-day" class="col-lg-2 control-label">Wednesday</label>
													<div id="sample2" class="col-lg-2">
														<input type="text" name="in_wednesday" class="form-control timepick clinic_hr" placeholder="00:00 AM">
													</div>
													<label id="c-hours-to" class="col-lg-2 control-label to_label">To</label>
													<div id="sample2" class="ui-widget-content-old col-lg-2">
														<input type="text" name="out_wednesday" class="form-control timepick" placeholder="00:00 PM">
													</div>
												</div>
											<!--</div>-->
										</div>
								</div><!--end clinic hours wednesday-->
								<div class="form-group"><!--start clinic hours thursday-->
										<!--<label for="" class="col-lg-2 control-label">Clinic Hours:</label>-->
										<div class="form-inline">
											<!--<div class="well">-->
											<label for="" class="col-lg-2 control-label"></label>
												<div class="row">
													<label id="c-hours-day" class="col-lg-2 control-label">Thursday</label>
													<div id="sample2" class="col-lg-2">
														<input type="text" name="in_thursday" class="form-control timepick clinic_hr" placeholder="00:00 AM">
													</div>
													<label id="c-hours-to" class="col-lg-2 control-label to_label">To</label>
													<div id="sample2" class="ui-widget-content-old col-lg-2">
														<input type="text" name="out_thursday" class="form-control timepick" placeholder="00:00 PM">
													</div>
												</div>
											<!--</div>-->
										</div>
								</div><!--end clinic hours thursday-->
								<div class="form-group"><!--start clinic hours friday-->
										<!--<label for="" class="col-lg-2 control-label">Clinic Hours:</label>-->
										<div class="form-inline">
											<!--<div class="well">-->
											<label for="" class="col-lg-2 control-label"></label>
												<div class="row">
													<label id="c-hours-day" class="col-lg-2 control-label">Friday</label>
													<div id="sample2" class="col-lg-2">
														<input type="text" name="in_friday" class="form-control timepick clinic_hr" placeholder="00:00 AM">
													</div>
													<label id="c-hours-to" class="col-lg-2 control-label to_label">To</label>
													<div id="sample2" class="ui-widget-content-old col-lg-2">
														<input type="text" name="out_friday" class="form-control timepick" placeholder="00:00 PM">
													</div>
												</div>
											<!--</div>-->
										</div>
								</div><!--end clinic hoursfriday-->
								<div class="form-group"><!--start clinic hours saturday-->
										<!--<label for="" class="col-lg-2 control-label">Clinic Hours:</label>-->
										<div class="form-inline">
											<!--<div class="well">-->
											<label for="" class="col-lg-2 control-label"></label>
												<div class="row">
													<label id="c-hours-day" class="col-lg-2 control-label">Saturday</label>
													<div id="sample2" class="col-lg-2">
														<input type="text" name="in_saturday" class="form-control timepick clinic_hr" placeholder="00:00 AM">
													</div>
													<label id="c-hours-to" class="col-lg-2 control-label to_label">To</label>
													<div id="sample2" class="ui-widget-content-old col-lg-2">
														<input type="text" name="out_saturday" class="form-control timepick" placeholder="00:00 PM">
													</div>
												</div>
											<!--</div>-->
										</div>
								</div><!--end clinic saturday-->
								<div style="margin-left:298px; margin-top:14px;"><!--start save button-->
									<input type="submit" name="save" value="Save" class="btn btn-primary" id="save"/>
								</div><!--end save button-->
								<div style="clear:both;">&nbsp;</div>
							</div><!--end form content wrapper-->
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