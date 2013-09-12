<?php 
	
?>
<div class="wrapper">
	<div class="container" style="width:60%;">
	<div class="well well-lg">
		<div class="alert alert-danger invalid_login" style="display:none;text-align:center">Invalid email/password</div>
		<form class="form-horizontal" role="form" method="post" id="form_dentist_login" action="<?php echo base_url('login/check_login'); ?>">
			<div class="form-group">
				<label for="inputEmail1" class="col-lg-2 control-label">Email</label>
				<div class="col-lg-8">
					<input type="email" class="form-control" id="inputEmail1" name="input_email" placeholder="Email">
				</div>
			</div>
			<div class="form-group">
				<label for="inputPassword1" class="col-lg-2 control-label">Password</label>
				<div class="col-lg-8">
					<input type="password" class="form-control" id="inputPassword1" name="input_pass" placeholder="Password">
				</div>
			</div>
			<div class="form-group">
				<div class="col-lg-offset-2 col-lg-10">
					<a href="<?php echo uri_string(); ?>">Forgot Password?</a>
				</div>
			</div>
			<div class="form-group">
				<div class="col-lg-offset-2 col-lg-10">
					<button type="submit" class="btn btn-default">Sign in</button>
				</div>				
			</div>
		</form>
	</div>
	</div>
</div>