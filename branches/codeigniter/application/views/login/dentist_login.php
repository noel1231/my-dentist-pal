
<?php 
	if(isset($_GET['valid']))
	{
		$answer = $_GET['valid'];
	}else
	{
		$answer = '';
	}
?>
<div class="wrapper">
    <div class="col-md-6 col-md-offset-3">
    <input type="hidden" class="sample_login" value="<?php echo $answer; ?>">
        <div class="well well-lg">
            <div>
                <h1> Dentist Login </h1>
            </div>
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
                            <a href="<?php echo base_url('forgot_password'); ?>">Forgot Password?</a>
                                <!--<a href="<?php //echo base_url(); ?>">Resend email verification</a>-->
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



  <!-- Modal -->
  <div class="modal fade" id="myModalValidationEmail" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body">
          Account Verified after <span class="badge perseconds"></span> secs
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->