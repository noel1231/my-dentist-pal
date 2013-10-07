
<?php 
	if(isset($_GET['valid']))
	{
		$answer = $_GET['valid'];
	}else
	{
		$answer = '';
	}
	
	if(isset($_GET['reset']))
	{
		$answer1 = $_GET['reset'];
	}else
	{
		$answer1 = '';
	}
	
?>
<div class="container wrapper">
    <div class="col-md-6 col-md-offset-3" style="padding-bottom: 30px;">
		<input type="hidden" class="sample_login" value="<?php echo $answer; ?>">
		<input type="hidden" class="sample_login1" value="<?php echo $answer1; ?>">
	
        <div class="well well-lg" style="border-top:solid 10px #42a9f6;">
            <!--<div>
                <h1> Dentist Login </h1>
            </div>-->
			<div class="row">
				<div class="col-md-10"><!-- start center-->
					<div style=""><!--Dentist's Dashboard--><!--<img src="images/dentist_dashboard.png" />-->
						<span style="font-size:40px;">Dentist Login</span>
					</div>
				</div><!--end center-->
			</div>&nbsp;
            <!--<div class="alert alert-danger invalid_login" style="display:none;text-align:center">Invalid email/password</div>-->
            <form class="form-horizontal" role="form" method="post" id="form_dentist_login" action="<?php echo base_url('login/check_login'); ?>">
                    <div class="form-group">
                        <label for="inputEmail1" class="col-lg-3 control-label">Email:</label>
                        <div class="col-lg-7">
                            <input type="email" class="form-control" id="inputEmail1" name="input_email" placeholder="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword1" class="col-lg-3 control-label">Password:</label>
                        <div class="col-lg-7">
                            <input type="password" class="form-control" id="inputPassword1" name="input_pass" placeholder="">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-offset-3 col-lg-10">
                            <!--<a href="<?php //echo base_url('forgot_password'); ?>">Forgot Password?</a>-->
							<a href="#myModalForgotPassword" id="forgotpassword">Forgot Password?</a>
                            <!--<a href="<?php //echo base_url(); ?>">Resend email verification for password</a>-->
                        </div>
						<div class="col-lg-offset-3 col-lg-10">
                            <a href="#myModalResendEmail" id="resendemail" style="display:none;">Resend Confirmation Email</a>
                            <!--<a href="<?php //echo base_url(); ?>">Resend email verification</a>-->
                        </div>
                    </div>
					
                    <div class="form-group">
                        <div class="col-lg-offset-3 col-lg-10">
                            <button type="submit" class="btn btn-default">Sign in</button>
                        </div>				
                    </div>
            </form>
        </div>
    </div>
</div>

<!--MODALS-->

 <!-- Modal for New Password-->
<div class="modal fade" id="myModalNewPassword" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="static">
	<form class="form-horizontal"  id="form_new_password" role="form" method="post" action="<?php echo base_url('login/password_reset'); ?>">	
		<div class="modal-dialog">
			<div class="modal-content modal_btop">
				<div class="modal-header">
						<div>
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h4 class="modal-title">Create New Password</h4>
						</div>
					</div>
				<div class="modal-body">
					<div class="alert alert-danger np_error_msg" style="text-align:center;margin-top:10px;display:none;"><?php //echo validation_errors(); ?></div>
					<!--<div class="alert alert-success np_success_msg" style="text-align:center;margin-top:10px;display:none;"><?php //echo validation_errors(); ?></div>-->		
					<div></div>&nbsp;
					<div class="form-group"><!--start full name-->
						<label for="" class="col-lg-4 control-label">New Password:</label>
						<div class="col-lg-7">
							<input type="hidden" name="accessId" class="form-control" value="<?php echo isset($_GET['reset']) ? $_GET['reset'] : ''; ?>" placeholder="">
							<input type="hidden" name="accessKey" class="form-control" value="<?php echo isset($_GET['accessNumber']) ? $_GET['accessNumber'] : ''; ?>" placeholder="">
							<input type="password" id="new_password" name="new_password" class="form-control" value="" placeholder="">
						</div>	
					</div>
					<div class="form-group"><!--start full name-->
						<label for="" class="col-lg-4 control-label">Re-type Password:</label>
						<div class="col-lg-7">
							<input type="password" id="new_password1" name="new_password1" class="form-control" value="" placeholder="">
						</div>	
					</div>
				</div>
				<div class="modal-footer">
					<div class="form-group">
						<div class="col-lg-11">
							<button type="" name="submit_newpass" class="btn btn-default submit_newpass"/> Continue </button>
						</div>
					</div>
				</div>
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</form>
</div><!-- /.modal -->

  <!-- Modal for email confirmation message-->
  <div class="modal fade" id="myModalValidationEmail" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog">
      <div class="modal-content modal_btop">
        <div class="modal-body">
          Account Verified after <span class="badge perseconds"></span> secs
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
  
  <!-- Modal -->
  <div class="modal fade" id="myModalErrorDentistLogin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content modal_btop">
        <div class="modal-body">
			<div class="alert alert-danger invalid_login" style="display:none;text-align:center">Invalid email/password</div>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
 
    <!-- Modal for Resend Confiramtion Email to create new password-->
<div class="modal fade" id="myModalForgotPassword" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="static">
	<form class="form-horizontal"  id="form_forgot_password" role="form" method="post" action="<?php echo base_url('login/forgot_password'); ?>">	
		<div class="modal-dialog">
			<div class="modal-content modal_btop">
				<div class="modal-header">
					<div>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title">Resend Email for New Password</h4>
					</div>
				</div>
				<div class="modal-body">
					<div class="alert alert-danger error_msg" style="text-align:center;margin-top:10px;display:none;"><?php //echo validation_errors(); ?></div>
					<!--<div class="alert alert-success send_msg" style="text-align:center;margin-top:10px;display:none;"><?php //echo validation_errors(); ?></div>-->
					<div></div>&nbsp;
					<div class="form-group"><!--start full name-->
						<label for="" class="col-lg-3 control-label">Email Address:</label>
						<div class="col-lg-8">
							<input type="text" id="forgot_email" name="forgot_email" class="form-control" value="<?php //echo set_value('forgot_email') ?>" placeholder="">
						</div>	
					</div>
				</div>
				<div class="modal-footer">
					<div class="form-group">
						<div class="col-lg-11">
							<button type="" class="btn btn-default submit_forgotpass" data-loading-text="Loading..."> Continue </button>
						</div>
					</div>
				</div>
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</form>	
</div><!-- /.modal --> 
 
    <!-- Modal for Resend Confiramtion Email to access dentist-->
<div class="modal fade" id="myModalResendEmail" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="static">
	<form class="form-horizontal"  id="form_resend_email" role="form" method="post" action="#">	
		<div class="modal-dialog">
			<div class="modal-content modal_btop">
				<div class="modal-header">
					<div>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title">Resend Email Verification</h4>
					</div>
				</div>
				<div class="modal-body">
					<div class="alert alert-danger error_msg" style="text-align:center;margin-top:10px;display:none;"></div>
					<div></div>&nbsp;
					<div class="form-group"><!--start full name-->
						<label for="" class="col-lg-3 control-label">Email Address:</label>
						<div class="col-lg-8">
							<input type="text" id="resend_email" name="resend_email" class="form-control" value="<?php echo set_value('resend_email') ?>" placeholder="">
						</div>	
					</div>
				</div>
				<div class="modal-footer">
					<div class="form-group">
						<div class="col-lg-11">
							<input type="submit" name="submit" value="Continue" class="btn btn-default"/>
						</div>
					</div>
				</div>
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</form>	
</div><!-- /.modal -->

<!-- Modal Success for Resend email for new password-->
	<div class="modal fade" id="mySuccessReset" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="static">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-body modal_btop">
					<!--<p>Profile updated success...</p>-->
					<div class="container">
						<div class="alert alert-success send_msg" style="text-align:center;margin-top:10px;display:none;"><?php //echo validation_errors(); ?></div>
						<div class="alert alert-success np_success_msg" style="text-align:center;margin-top:10px;display:none;"><?php //echo validation_errors(); ?></div>	
						<div class="alert alert-danger np_error_msg" style="text-align:center;margin-top:10px;display:none;"><?php //echo validation_errors(); ?></div>
					</div>
					<!--<p>Please verify your email to activate your account.</p>-->
					<div class="modal-footer">
						<a href="<?php echo base_url(); ?>" class="btn btn-default">OK</a>
					</div>
				</div>
				
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->