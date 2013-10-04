<style>

	/* michael codes */
	@media(max-width: 1213px)
	{
		.form-inline .form-group.adjust_display {
			display:block;
			margin-bottom: 15px;
		}
	}
	@media(max-width: 950px)
	{
		.form-inline .form-group.adjust_display {
			display:inline-block;
		}
	}
	@media(max-width: 783px)
	{
		.form-inline .form-group.adjust_display {
			display:block;
			margin-bottom: 15px;
		}
	}
</style>	
<div class="row">
	<div class="pull-right" style="">
	<?php
		$data_params = array(
			'name'=>'patient_search_from',
			'id'=>'patient_search_from',
			'role'=>'form',
			'class'=>'form-inline',
			'method'=>'get'
		);
		echo form_open(base_url('patient_records'),$data_params);
	?>
		<!--<form action="patient_list.php" method="post" role="form" class="form-inline">-->
			<div class="addpatient form-group adjust_display">
				<a data-toggle="modal" href="#myModalAddingPatient" class="btn btn-primary btn-lg">
					+ ADD PATIENT
				</a>
			</div>
			<div class="form-group adjust_display">
				<input type="text" name="search_field" class="form-control input-lg search" placeholder="Search..." value="" />
			</div>
			<div class="form-group adjust_display">
				<button type="submit" class="submit btn btn_design btn-primary btn-lg" />SEARCH</button>
			</div>
		</form>
	</div>
</div>
				
  <!-- Modal -->
  <div class="modal fade" id="myModalAddingPatient" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Patient Info</h4>
        </div>
		<form class="form-horizontal" role="form" method="POST" accept-charset="utf-8" enctype="multipart/form-data" name="adding_patient_form" id="adding_patient_form">
			<div class="modal-body">
			  <div class="form-group">
				<label class="col-lg-4 control-label">Patien ID number</label>
				<div class="col-lg-6">
				  <input type="text" name="modal_p_num" class="form-control" value="<?php echo time(); ?>" readonly>
				</div>
			  </div>
			  <div class="form-group">
				<label class="col-lg-4 control-label">Entry Date</label>
				<div class="col-lg-6">
				  <input type="text" name="modal_p_entrydate" class="form-control" value="<?php echo date('Y-m-d H:i:s',time()); ?>" readonly>
				</div>
			  </div>
			  <div class="form-group">
				<label class="col-lg-4 control-label">Photo</label>
				<div class="col-lg-6">
					<input type="file" id="modal_p_photo" name="modal_p_photo" onchange="handleFiles(this.files)">
					<div class="col-sm-12" style="margin-top: 10px;">
						<img class="p_photo_view img-thumbnail" src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&text=no+image" style="width:200px;" >
					</div>
				</div>
			  </div>
			  <div class="form-group">
				<label class="col-lg-4 control-label">First Name</label>
				<div class="col-lg-6">
				  <input type="text" name="modal_p_fname" class="form-control" value="" required>
				</div>
			  </div>
			  <div class="form-group">
				<label class="col-lg-4 control-label">Middle Name</label>
				<div class="col-lg-6">
				  <input type="text" name="modal_p_mname" class="form-control" value="">
				</div>
			  </div>
			  <div class="form-group">
				<label class="col-lg-4 control-label">Last Name</label>
				<div class="col-lg-6">
				  <input type="text" name="modal_p_lname" class="form-control" value="" required>
				</div>
			  </div>
			  <div class="form-group">
				<label class="col-lg-4 control-label">Gender</label>
				<div class="col-lg-6">
				  <select name="modal_p_sex" class="form-control" required>
					<option value=""></option>
					<option value="female">Female</option>
					<option value="Male">Male</option>
				  </select>
				</div>
			  </div>
			  <div class="form-group">
				<label class="col-lg-4 control-label">Birth Date</label>
				<div class="col-lg-6">
				  <input type="text" class="form-control datepickerBday" name="modal_p_bday" value="" placeholder="mm/dd/yyyy" required>
				</div>
			  </div>
			  <div class="form-group">
				<label class="col-lg-4 control-label">Age</label>
				<div class="col-lg-6">
				  <input type="text" class="form-control" name="modal_p_age" value="" readonly>
				</div>
			  </div>
			  <div class="form-group">
				<label class="col-lg-4 control-label">Home Address</label>
				<div class="col-lg-6">
				  <textarea rows="3" class="form-control" name="modal_p_address" required></textarea>
				</div>
			  </div>
			  <!--<div class="form-group">
				<label class="col-lg-4 control-label">Mobile Number</label>
				<div class="col-lg-6">
				  <input type="text" class="form-control" name="modal_p_mobile" value="" required>
				</div>
			  </div>-->
			</div>
			<div class="modal-footer">
			  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			  <button type="submit" class="btn btn-primary">Save</button>
			</div>
		</form>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
  
  <!-- Modal -->
  <div class="modal fade" id="myModalAddingSaying" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body">
          Saved Successfully!
        </div>
        <div class="modal-footer">
          <a href="" class="btn btn-default link_to_edit">Close</a>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->