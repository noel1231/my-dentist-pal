<?php

?>
<div class="col-md-6 col-md-offset-3">
<?php
	$formOpen = array(
		'id'=>'account_setting_form',
		'class'=>'form-horizontal',
		'name'=>'account_setting_form'
	);
	
	echo form_open(base_url('account_setting/change_password'),$formOpen);
?>
		<div class="form-group">
			<label for="" class="col-lg-4 control-label">Account type</label>
			<div class="col-lg-5">
				<a data-toggle="modal" href="#myModalUpgradeAccount" class="btn btn-info">Upgrade Account</a>
			</div>
		</div>
		<div class="form-group">
			<label for="" class="col-lg-4 control-label">Change Password</label>
			<div class="col-lg-5">
				<input type="password" class="form-control" name="curr_pass" placeholder="Current Password" style="margin-bottom:15px;" />
				<input type="password" class="form-control" name="new_pass" placeholder="New Password" style="margin-bottom:15px;"/>
				<input type="password" class="form-control" name="re_pass" placeholder="Re-type Password" />
			</div>
		</div>
		<div class="form-group">
			<div class="col-lg-5 col-lg-offset-4">
				<button type="button" class="btn btn-primary pull-right account_submit_button">Save</button>
			</div>
		</div>
	</form>
</div>
  <!-- Modal -->
  <div class="modal fade" id="myModalAccountSetting" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body">
          Password has been changed!
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
  
  
  
  <!-- Modal -->
  <div class="modal fade" id="myModalUpgradeAccount" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content modal_btop">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Need more records?</h4>
        </div>
        <div class="modal-body">
          
		  <div class="jumbotron">
		    <div class="container">
		      <p>Contact us now to upgrade to premium account</p>
              <p>Email: info@mydentistpal.com</p>
              <p>Mobile: +639175974975</p>
              <p>Landline: (02) 4363621</p>
		    </div>
		  </div>
		  
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->