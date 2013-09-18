


<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>My Dentist Pal</title>
<link rel="stylesheet" type="text/css" media="screen" href="../style/style.css" />
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<link rel="stylesheet" href="/resources/demos/style.css" />
  <script>
  $(function() {
    $( "#datepicker" ).datepicker();
  });
  </script>
<style type="text/css">
	
	/* #wrapper { border:solid 1px black; width:100%; height:100%; margin-top:160px;} */
	#wrapper {background-color:#fff;margin-top:135px;}
		
	#dr-title-wrapper { background-color:#e0e2e4;width:100%;height:90px;}
	#form-wrapper { background-color:#fff; height:410px;border:solid 0px red;}
	
	label { margin-left:135px;}
	#middle{ position:relative; margin-top:-34px; margin-left:162px;}
	#lname{ position:relative; margin-top:-34px; margin-left:325px;}
	#bday2{ position:relative; margin-top:-31px; margin-left:240px;}
	#bday3{ position:relative; margin-top:-31px; margin-left:480px;}
	.alert_msg {width:450px; margin-left:300px;}
	
	#dent-profile-pic { border:solid 1px lightgray; position:relative; margin-left:298px; width:130px; height:120px;}
	
	h1 span{ color:#CCC;}
</style>
</head>

<div id="wrapper"><!--start body wrapper -->
	<!--start dentist profile form-->
			<div id="form-wrapper"><!-- start dentist profile form wrapper-->
				<div id="dr-title-wrapper">
					<div style="margin:0 auto;width:940px;"><!-- start center-->
						<div style="float:left;margin-top:28px;"><!--Dentist's Dashboard--><!--<img src="images/dentist_dashboard.png" />-->
							<span style="font-weight:500;font-size:30px;color:#333;font-family: 'Trebuchet MS', Arial, Helvetica, sans-serif;">
						Dentist's Profile</span>
						</div>
						<div style="float:right;">
						<!--<div style="float:right;margin-top:28px;"><input type="text" name="search" /></div>-->
						<div style="clear:both;"></div>
						</div><!--<div style="float:right;color:#969da4;font-size:10px;font-family:'Trebuchet MS', Arial, Helvetica, sans-serif;">CLICK HERE FOR ADVANCE SEARCH</div>-->
					</div><!--end center-->
				</div>
				<div id="dp-wrapper-form" style="border:solid 0px red; margin:0 auto; width:100%;"><!--start dentist profile form-->
					<div id="dp-body-wraper" style="border:solid 1px gray;width:960px;margin-left:200px;margin-top:20px;">
						<form class="form-horizontal" id="form_dentist_signup" role="form" method="post" nctype="multipart/form-data" name="DentistProfileForm">
							<div>
								<div>
									<div class="form-group">
										<h1><span>Personal Info</span></h1>
									</div>
									<div>
									
									</div>
								</div>
								
							</div>
						</form>
						
					</div>
				
				</div><!--end dentist profile form-->
				
				<!--
				<div class="" style="border:solid 0px green; height:410px; width:960px;">
					<div id="" class="well well-sm" style="position:relative;margin-top:15px;left:210px;">
					<div style="clear:both;">&nbsp;</div>
						<form class="form-horizontal" id="form_dentist_signup" role="form" method="post" action="<?php echo base_url('dentist_signup/verification')?>" enctype="multipart/form-data" name="ContactForm"><!--Registration form for Dentist-->
				<!--			<div><!--start form content wrapper-->
				<!--				<div class="alert alert-danger alert_msg" style="text-align:center;display:none;"><?php //echo validation_errors(); ?><?php //echo form_error('fname'); //echo form_error('lname');?><?php  ?></div>
								<!--<div class="alert alert-success success_msg" style="text-align:center;display:none;"></div>-->
				<!--				<div class="form-group"><!--start dentist picture-->
				<!--					<div class="col-lg-6">
										<img src="images/toothlogo.png" alt="dentist image" id="dent-profile-pic" class="img-rounded">
									</div>
								</div><!--end dentist picture-->
				<!--				<div style="margin-left:298px; margin-bottom:15px;"><!--start upload dentist img-->
				<!--					<input type="file" id="upload_img" name="upload_img" value="" />
								</div><!--end dentist upload dentist img-->
								
				<!--				<div class="form-group"><!--start full name-->
				<!--					<label for="" class="col-lg-2 control-label">Name:</label>
									<div class="col-lg-2">
										<input type="text" id="fname" name="fname" class="form-control"  placeholder="First name">
										<input type="text" id="middle" name="middle" class="form-control" placeholder="Middle name">
										<input type="text" id="lname" name="lname" class="form-control" placeholder="Last name">
										
									</div>	
								</div><!--end full name-->
								
				<!--				<div class="form-group"><!--start dob-->
				<!--					<label for="" class="col-lg-2 control-label">Birth Date:</label>
									<div class="col-lg-6">
										<input type="text" id="datepicker" name="bod" class="form-control"/>
									</div>
								</div><!--end dob-->
				<!--				<div class="form-group"><!--start dob-->
				<!--					<label for="" class="col-lg-2 control-label">Gender:</label>
									<div class="col-lg-6">
										<select class="form-control">
											<option>Select Gender</option>
											<option>Male</option>
											<option>Female</option>
										</select>
									</div>
								</div><!--end dob-->
								
				<!--				<div class="form-group"><!--start license number-->
				<!--					<label for="inputEmail1" class="col-lg-2 control-label">License Number:</label>
									<div class="col-lg-6">
										<input type="text" id="license" name="license" id="validate" class="form-control"/><span id="validEmail"></span>
									</div>
								</div><!--end license number-->
								
				<!--				<div style="margin-left:298px; margin-top:14px;"><!--start submit and back button-->
				<!--					<input type="submit" name="submit" value="Save" class="btn btn-primary" id="submit"/>
									<!--<input type="button" name="cancel" value="Back" class="btn btn-primary"/>
								</div><!--end submit and back button-->
				<!--				<div style="clear:both;">&nbsp;</div>
							</div><!--end form content wrapper-->
				<!--		</form>
					</div>
				</div>-->

			</div><!-- start dentist registration form wrapper-->
			<!--end dentist registration form-->
	
	<div>
		<div>
		
		</div>
	</div>
</div><!--end body wrapper -->

