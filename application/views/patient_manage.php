
<div class="col-md-6 col-md-offset-3">
<?php
	if($this->input->get('id'))
	{
		$p_id = $this->input->get('id');
		$query = $this->db->where('id',$p_id)->get('patient_list');
		$row = $query->row_array();
	}else
	{
		echo 'wala';
	}
?>
<?php
	$multipart = array(
		'id'=>'patient_access_form',
		'class'=>'form-horizontal',
		'name'=>'patient_access_form'
	);
	
	echo form_open_multipart('',$multipart);
?>
		<div class="form-group">
			<img src="<?php echo base_url('patient_picture/'.$row['patient_picture']); ?>" class="img-thumbnail col-md-5" onerror="this.src='http://www.placehold.it/200x150/EFEFEF/AAAAAA&text=no+image'">
		</div>
		<div class="form-group">
			<label for="" class="col-lg-4 control-label">Patient:</label>
			<div class="col-lg-5">
				<span class="form-control" style="border:none;box-shadow:none;"><?php if(isset($row)){ echo ucwords($row['patient_name']); }  ?></span>
			</div>
		</div>
		<div class="form-group">
			<label for="" class="col-lg-4 control-label">Patient Number:</label>
			<div class="col-lg-5">
				<span class="form-control" style="border:none;box-shadow:none;"><?php echo isset($row) ? $row['id'] : ''; ?></span>
				<input type="hidden" name="patient_id" value="<?php echo isset($row) ? $row['id'] : ''; ?>" >
			</div>
		</div>
		<div class="form-group">
			<label for="" class="col-lg-4 control-label">Email Address:</label>
			<div class="col-lg-5">
				<input class="form-control" type="email" value="<?php echo isset($row) ? $row['email'] : ''; ?>" placeholder="Email" name="emailAccess" required>
			</div>
		</div>
		<div class="form-group">
			<label for="" class="col-lg-4 control-label">Password:</label>
			<div class="col-lg-5">
				<input class="form-control" type="password" value="" placeholder="Password" name="emailPass" required>
			</div>
		</div>
		<div class="form-group">
			<div class="col-lg-5 col-md-offset-5">
				<button type="submit" class="btn btn-default" value="save" name="submit_access">Save</button>
				<button type="submit" class="btn btn-default" value="email_send" name="submit_access">Email Details</button>
			</div>
		</div>
	</form>
</div>

  <!-- Modal -->
  <div class="modal fade" id="myModalAccess" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body">
		  <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove"></span></button>
          <p>Saved Successfully!</p>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
