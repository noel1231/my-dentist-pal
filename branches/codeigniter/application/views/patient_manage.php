
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
		'id'=>'patient_info_form',
		'class'=>'form-horizontal'
	);
	
	echo form_open_multipart('',$multipart);
?>
		<div class="form-group">
			<img src="<?php echo base_url('patient_picture/'.$row['patient_picture']); ?>" class="img-thumbnail col-md-5">
		</div>
		<div class="form-group">
			<label for="" class="col-lg-4 control-label">Patient:</label>
			<div class="col-lg-5">
				<span class="form-control" style="border:none;box-shadow:none;"><?php echo isset($row) ? $row['patient_name'] : ''; ?></span>
			</div>
		</div>
		<div class="form-group">
			<label for="" class="col-lg-4 control-label">Patient Number:</label>
			<div class="col-lg-5">
				<span class="form-control" style="border:none;box-shadow:none;"><?php echo isset($row) ? $row['id'] : ''; ?></span>
			</div>
		</div>
		<div class="form-group">
			<label for="" class="col-lg-4 control-label">Email Address:</label>
			<div class="col-lg-5">
				<input class="form-control" value="<?php echo isset($row) ? $row['email'] : ''; ?>">
			</div>
		</div>
		<div class="form-group">
			<label for="" class="col-lg-4 control-label">Password:</label>
			<div class="col-lg-5">
				<input class="form-control" value="" placeholder="Password">
			</div>
		</div>
		<div class="form-group">
			<div class="col-lg-5 col-md-offset-5">
				<button type="button" class="btn btn-default">Send</button>
				<button type="button" class="btn btn-default">Email Send</button>
			</div>
		</div>
	</form>
</div>