<?php 
	
?>
<div class="wrapper">
	<div class="col-md-6 col-md-offset-3">
	<div class="well well-lg" style="border-top:solid 10px #55c4e2;">
		
		<div class="row">
				<div class="col-md-10"><!-- start center-->
					<div style=""><!--Dentist's Dashboard--><!--<img src="images/dentist_dashboard.png" />-->
						<label class="control-label"><h1><span style="font-size:40px;">Patient Login</span></h1></label>
					</div>
				</div><!--end center-->
			</div>&nbsp;
		<div class="alert alert-danger invalid_login" style="display:none;text-align:center">Invalid email/password</div>
		<form class="form-horizontal" role="form" method="post" id="form_patient_login" action="<?php echo base_url('login/patient_login'); ?>">
			<div class="form-group">
				<label for="inputEmail1" class="col-lg-2 control-label">Email</label>
				<div class="col-lg-8">
					<input type="email" class="form-control" id="inputEmail2" name="input_email" placeholder="Email">
				</div>
			</div>
			<div class="form-group">
				<label for="inputPassword1" class="col-lg-2 control-label">Password</label>
				<div class="col-lg-8">
					<input type="password" class="form-control" id="inputPassword2" name="input_pass" placeholder="Password">
				</div>
			</div>
			<div class="form-group">
				<div class="col-lg-offset-2 col-lg-10">
					<a href="<?php echo base_url('login/patient'); ?>">Forgot Password?</a>
				</div>
			</div>
			<div class="form-group">
				<div class="col-lg-offset-2 col-lg-10">
					<button type="submit" class="btn btn-info">Sign in</button>
				</div>				
			</div>
			
		</form>
	</div>
	</div>
</div>