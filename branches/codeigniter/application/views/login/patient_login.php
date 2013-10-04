<?php 
	
?>
<div class="wrapper">
	<div class="col-md-6 col-md-offset-3">
	<div class="well well-lg" style="border-top:solid 10px #42a9f6;">
		
		<div class="row">
				<div class="col-md-10"><!-- start center-->
					<div style=""><!--Dentist's Dashboard--><!--<img src="images/dentist_dashboard.png" />-->
						<label class="control-label"><h1><span style="font-size:40px;">Patient Login</span></h1></label>
					</div>
				</div><!--end center-->
			</div>&nbsp;
		<!--<div class="alert alert-danger invalid_login" style="display:none;text-align:center">Invalid email/password</div>-->
		<form class="form-horizontal" role="form" method="post" id="form_patient_login" action="<?php echo base_url('login/patient_login'); ?>">
			<div class="form-group">
				<label for="inputEmail1" class="col-lg-3 control-label">Email:</label>
				<div class="col-lg-7">
					<input type="email" class="form-control" id="inputEmail2" name="input_email" placeholder="">
				</div>
			</div>
			<div class="form-group">
				<label for="inputPassword1" class="col-lg-3 control-label">Password:</label>
				<div class="col-lg-7">
					<input type="password" class="form-control" id="inputPassword2" name="input_pass" placeholder="">
				</div>
			</div>
			<div class="form-group">
				<div class="col-lg-offset-3 col-lg-10">
					<a href="<?php echo base_url('login/patient'); ?>">Forgot Password?</a>
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

<!-- Modal -->
  <div class="modal fade" id="myModalErrorPatientLogin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content modal_btop">
        <div class="modal-body">
			<div class="alert alert-danger invalid_login" style="display:none;text-align:center">Invalid email/password</div>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->

