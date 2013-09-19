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
	
	#dent-profile-pic { border:solid 1px lightgray; position:relative; margin-left:298px; width:130px; height:120px;}
	#c-hours-day{width:80px;margin-left:0px;}
	#c-hours-to{width:72px;margin-left:0px;text-align:center;}
	h1 span{color:#CCC;}
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
						<form class="form-horizontal" id="form_dentist_signup" role="form" method="post" action="#" enctype="multipart/form-data" name="DentistProfileForm">
							<div>
								<div class="well well-sm" style="margin-left:0px;border:solid 0px green;">
								<!--START PERSONAL INFO-->
									<div class="form-group" style="margin-left:62px;border:solid 0px red;width:27%;"><!--start personal info-->
										<h1><span>Personal Info</span></h1>
									</div><!--end personal info-->
									<div class="form-group"><!--start dentist id number-->
										<label for="" class="col-lg-2 control-label">Dentist ID Number:</label>
										<div class="col-lg-6">
											<input type="text" id="dent-id" name="dent-id" class="form-control" disabled="disabled"/>
										</div>
									</div><!--end dentist id number-->
									<div class="form-group"><!--start dentist picture-->
										<div class="col-lg-6">
											<img src="images/toothlogo.png" alt="dentist image" id="dent-profile-pic" name="dent-img" class="img-rounded">
										</div>
									</div><!--end dentist picture-->
									<div style="margin-left:298px; margin-bottom:15px;"><!--start upload dentist img-->
										<input type="file" id="upload_img" name="upload_img" value="" />
									</div><!--end dentist upload dentist img-->
									<div class="form-group"><!--start full name-->
										<label for="" id="dp-label" class="col-lg-2 control-label">Name:</label>
										<div class="col-lg-2">
											<input type="text" id="fname" name="fname" class="form-control"  placeholder="First name">
											<input type="text" id="middle" name="middle" class="form-control" placeholder="Middle name">
											<input type="text" id="lname" name="lname" class="form-control" placeholder="Last name">
										</div>	
									</div><!--end full name-->
								
								<div class="form-group"><!--start dob-->
									<label for="" class="col-lg-2 control-label">Birth Date:</label>
									<div class="col-lg-6">
										<input type="text" id="datepicker" name="bod" class="form-control" placeholder="mm/dd/yyyy"/>
									</div>
								</div><!--end dob-->
								<div class="form-group"><!--start dob-->
									<label for="" class="col-lg-2 control-label">Gender:</label>
									<div class="col-lg-6">
										<select class="form-control">
											<option>Select Gender</option>
											<option>Male</option>
											<option>Female</option>
										</select>
									</div>
								</div><!--end dob-->
								
								<div class="form-group"><!--start license number-->
									<label for="inputEmail1" class="col-lg-2 control-label">License Number:</label>
									<div class="col-lg-6">
										<input type="text" id="license" name="license" id="validate" class="form-control"/><span id="validEmail"></span>
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
										<img src="images/toothlogo.png" alt="dentist image" id="dent-profile-pic" class="img-rounded">
									</div>
								</div><!--end dentist clinic picture-->
								<div style="margin-left:298px; margin-bottom:15px;"><!--start upload clinic details-->
									<input type="file" id="upload_img" name="upload_img" value="" />
								</div><!--end dentist upload clinic details-->
								<div class="form-group"><!--start clinic name-->
										<label for="" class="col-lg-2 control-label">Clinic Name:</label>
										<div class="col-lg-6">
											<input type="text" id="clinic_name" name="clinic_name" class="form-control"  placeholder="">
										</div>	
								</div><!--end clinic name-->
								<div class="form-group"><!--start dentist service-->
									<label for="" class="col-lg-2 control-label">Service:</label>
									<div class="col-lg-3">
										<div class="checkbox"><input type="checkbox">Dental Emergency-Same Day</div>
										<div class="checkbox"><input type="checkbox">Bone Grafts</div>
										<div class="checkbox"><input type="checkbox">Cosmetic Dentistry</div>
										<div class="checkbox"><input type="checkbox">Crowns and Bridges</div>
										<div class="checkbox"><input type="checkbox">CT Scan - 3 D Imaging i-cat</div>
										<div class="checkbox"><input type="checkbox">Dental Implants</div>
										<div class="checkbox"><input type="checkbox">Dental Medicine</div>
										<div class="checkbox"><input type="checkbox">Detection of Cancer</div>
										<div class="checkbox"><input type="checkbox">Dentofacial Orthopedics</div>
										<div class="checkbox"><input type="checkbox">Endodontic Surgery</div>
										<div class="checkbox"><input type="checkbox">Extractions</div>
										<div class="checkbox"><input type="checkbox">Fillings: Teeth Colored</div>
										<div class="checkbox"><input type="checkbox">Financing</div>
										<div class="checkbox"><input type="checkbox">General Dentistry</div>
										<div class="checkbox"><input type="checkbox">Gingival Grafts</div>
										<div class="checkbox"><input type="checkbox">Gums Treatment - Surgical and Not Surgical</div>
										<div class="checkbox"><input type="checkbox">Laser Dentistry</div>
										<div class="checkbox"><input type="checkbox">Lumineers</div>
									</div>
									<div class="col-lg-3">
										<div class="checkbox"><input type="checkbox">Medical Insurance Billing</div>
										<div class="checkbox"><input type="checkbox">Oral Appliance Therapy</div>
										<div class="checkbox"><input type="checkbox">Oral rehabilitation</div>
										<div class="checkbox"><input type="checkbox">Oral Systemic connection</div>
										<div class="checkbox"><input type="checkbox">Oral Surgery</div>
										<div class="checkbox"><input type="checkbox">Orthodontics</div>
										<div class="checkbox"><input type="checkbox">Partials and Dentures</div>
										<div class="checkbox"><input type="checkbox">Preventive Dentistry</div>
										<div class="checkbox"><input type="checkbox">Root Canals</div>
										<div class="checkbox"><input type="checkbox">Sealants</div>
										<div class="checkbox"><input type="checkbox">Smile Makeovers</div>
										<div class="checkbox"><input type="checkbox">Snoring and Sleep Apnea</div>
										<div class="checkbox"><input type="checkbox">Sports Dentistry - Mouthguiards</div>
										<div class="checkbox"><input type="checkbox">TMJ and Facial Pain</div>
										<div class="checkbox"><input type="checkbox">Whitening your teeth with Laser</div>
										<div class="checkbox"><input type="checkbox">Wisdom Teeth Removal</div>
										<div class="checkbox"><input type="checkbox">Implants Planning</div>
									</div>
								</div><!--end dentist service-->
								<div class="form-group"><!--start clinic address-->
										<label for="" class="col-lg-2 control-label">Clinic Address:</label>
										<div class="col-lg-6">
											<input type="text" id="fname" name="fname" class="form-control"  placeholder="">
										</div>	
								</div><!--end clinic address-->
								<div class="form-group"><!--start landline number-->
										<label for="" class="col-lg-2 control-label">Landline number:</label>
										<div class="col-lg-6">
											<input type="text" id="landline" name="landline" class="form-control"  placeholder="">
										</div>	
								</div><!--end landline number-->
								<div class="form-group"><!--start mobile number-->
										<label for="" class="col-lg-2 control-label">Mobile number:</label>
										<div class="col-lg-6">
											<input type="text" id="mobile" name="mobile" class="form-control"  placeholder="">
										</div>	
								</div><!--end mobile number-->
								<div class="form-group"><!--start email address-->
										<label for="" class="col-lg-2 control-label">Email Address:</label>
										<div class="col-lg-6">
											<input type="text" id="email1" name="email1" class="form-control"  placeholder="">
										</div>	
								</div><!--end email address-->
								<div class="form-group"><!--start facebook fan page-->
										<label for="" style="margin-left:54px;" class="col-lg-3 control-label">Facebook Fan Page:</label>
										<div class="col-lg-6">
											<input type="text" id="fanpage" name="fanpage" class="form-control"  placeholder="www.facebook.com/FanpageName">
										</div>	
								</div><!--end facebook fan page-->
								<div class="form-group"><!--start twitter-->
										<label for="" class="col-lg-2 control-label">Twitter:</label>
										<div class="col-lg-6">
											<input type="text" id="tweet" name="tweet" class="form-control"  placeholder="@TwitterHandle">
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
														<input type="text" name="time" class="form-control" placeholder="00:00 AM">
													</div>
													<label id="c-hours-to" class="col-lg-2 control-label">To</label>
													<div id="sample2" class="ui-widget-content-old col-lg-2">
														<input type="text" name="time" class="form-control" placeholder="00:00 PM">
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
														<input type="text" name="time" class="form-control" placeholder="00:00 AM">
													</div>
													<label id="c-hours-to" class="col-lg-2 control-label">To</label>
													<div id="sample2" class="ui-widget-content-old col-lg-2">
														<input type="text" name="time" class="form-control" placeholder="00:00 PM">
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
														<input type="text" name="time" class="form-control" placeholder="00:00 AM">
													</div>
													<label id="c-hours-to" class="col-lg-2 control-label">To</label>
													<div id="sample2" class="ui-widget-content-old col-lg-2">
														<input type="text" name="time" class="form-control" placeholder="00:00 PM">
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
														<input type="text" name="time" class="form-control" placeholder="00:00 AM">
													</div>
													<label id="c-hours-to" class="col-lg-2 control-label">To</label>
													<div id="sample2" class="ui-widget-content-old col-lg-2">
														<input type="text" name="time" class="form-control" placeholder="00:00 PM">
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
														<input type="text" name="time" class="form-control" placeholder="00:00 AM">
													</div>
													<label id="c-hours-to" class="col-lg-2 control-label">To</label>
													<div id="sample2" class="ui-widget-content-old col-lg-2">
														<input type="text" name="time" class="form-control" placeholder="00:00 PM">
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
														<input type="text" name="time" class="form-control" placeholder="00:00 AM">
													</div>
													<label id="c-hours-to" class="col-lg-2 control-label">To</label>
													<div id="sample2" class="ui-widget-content-old col-lg-2">
														<input type="text" name="time" class="form-control" placeholder="00:00 PM">
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
														<input type="text" name="time" class="form-control" placeholder="00:00 AM">
													</div>
													<label id="c-hours-to" class="col-lg-2 control-label">To</label>
													<div id="sample2" class="ui-widget-content-old col-lg-2">
														<input type="text" name="time" class="form-control" placeholder="00:00 PM">
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

