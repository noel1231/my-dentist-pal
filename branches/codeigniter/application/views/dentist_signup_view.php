


	<!--start dentist profile form-->
	<div class="container wrapper">
		<div id="dp-wrapper-form" class="">			
			<!--start dentist registration form-->
			<div id="form-wrapper" class=""><!-- start dentist registration form wrapper-->
				<div id="" class="well-sm">
					
					<div class="well col-md-8 col-md-offset-2" style="border-top:solid 10px #42a9f6;">
						<div class="row">
							<div class="col-md-10"><!-- start center-->
								<div style=""><!--Dentist's Dashboard--><!--<img src="images/dentist_dashboard.png" />-->
									<label class="control-label"><h1><span style="font-size:40px;">Dentist Registration</span></h1></label>
								</div>
							</div><!--end center-->
						</div>&nbsp;
						<form class="form-horizontal" id="form_dentist_signup" role="form" method="post" action="" enctype="multipart/form-data" name="ContactForm"><!--Registration form for Dentist-->
							<div><!--start form content wrapper-->
								<div class="form-group"><!--start full name-->
									<label for="" class="col-md-4 control-label">First Name:</label>
									<div class="col-md-5">
										<input type="text" id="fname" name="fname" class="form-control" value="<?php echo set_value('fname') ?>" placeholder="First name">
									</div>	
								</div>
								<div class="form-group">
									<label for="" class="col-md-4 control-label">Middle Name:</label>
									<div class="col-md-5">
										<input type="text" id="middle" name="middle" class="form-control" value="<?php echo set_value('middle') ?>" placeholder="Middle name">
									</div>	
								</div>
								<div class="form-group">
									<label for="" class="col-md-4 control-label">Last Name:</label>
									<div class="col-md-5">
										<input type="text" id="lname" name="lname" class="form-control" value="<?php echo set_value('lname') ?>" placeholder="Last name">
									</div>	
								</div><!--end full name-->
								
								<div class="form-group"><!--start email-->
									<label for="" class="col-md-4 control-label">Email Address:</label>
									<div class="col-md-5">
										<input type="text" id="email_sign" name="email_sign" class="form-control"/><span id="validEmail"></span>
									</div>
								</div><!--end email-->
								
								<div class="form-group"><!--start confirm email-->
									<label for="" class="col-md-4 control-label">Confirm Email Address:</label>
									<div class="col-md-5">
										<input type="text" id="email_sign1" name="email_sign1" class="form-control"/>
									</div>
								</div><!--end confirm email-->
								
								<div class="form-group"><!--start create password-->
									<label for="" class="col-md-4 control-label">Create Password:</label>
									<div class="col-md-5">
										<input type="password" id="pass1" name="pass1" id="pass1" class="form-control"/>
									</div>
								</div><!--end create password-->
								
								<div class="form-group"><!--start confirm password-->
									<label for="" class="col-md-4 control-label">Confirm Password:</label>
									<div class="col-md-5">
										<input type="password" id="pass2" name="pass2" id="pass2" class="form-control"/>
									</div>	
								</div><!--end confirm password-->
									
								<div class="form-group"><!--start submit and back button-->
										<div class="col-md-offset-4 col-md-10">
											<input type="submit" name="submit" value="Submit" class="btn btn-large btn-default" />
										</div>
								</div><!--end submit and back button-->
							</div><!--end form content wrapper-->
						</form>
					</div>
				</div>
			</div><!--end dentist registration form-->
		</div>
	</div>	
		
	<!-- Modal -->
	<div class="modal fade" id="myErrorReg" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			  <div class="modal-content modal_btop">
					<div class="modal-body">
						<div class="container">
							<div class="alert alert-danger alert_msg" style="text-align:center"></div>
						</div>
					</div>
			  </div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->

	<!-- Modal -->
	<div class="modal fade" id="mySuccessReg" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="static">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-body modal_btop">
					<!--<p>Profile updated success...</p>-->
					<div class="container">
						<div class="alert alert-success success_msg" style="text-align:center"></div>
					</div>
					<!--<p>Please verify your email to activate your account.</p>-->
					<div class="modal-footer">
						<a href="<?php echo base_url(); ?>" class="btn btn-default">OK</a>
					</div>
				</div>
				
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
	
