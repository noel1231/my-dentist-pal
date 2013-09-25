<?php
	
?>
<!--wrapper-->
<div style="background-color: #f6f5f5; padding-top: 70px">
	<div class="container">
		<div class="panel panel-default">
			<div class="panel-body">



	<div class="row">
		<div class="col-md-12">
			
				<div class="row">
					<div class="col-sm-6 col-md-2">
						<a href="#" class="thumbnail">
							<img alt="Profile Pic" src="<?php echo trim($profile_pic) != null ? base_url().$profile_pic : base_url('img/profile_pic.gif'); ?>">
						</a>
					</div>
					<div class="col-md-10">
						<div class="row">
							<div class="col-md-6">
								<h1>
									Hi, <?php echo $first_name; ?>
								</h1>
							</div>
							<div class="col-md-6 pull-right">
								<?php $this->load->view('menu'); ?>
							</div>
						</div>
					</div>
				</div>

			
		</div>
	</div>

	<div class="row">
			<div class="col-md-6">
				<h1> <?php echo $dashboard_title; ?> </h1>
			</div>
			<div class="col-md-6">
				<?php echo isset($add_patient_search) ? $add_patient_search : ''; ?>
			</div>
	</div>

	<div class="row">
		<?php echo $dashboard_content; ?>
	</div>

	  <!--top-->
		<?php // $this->load->view('top_patient'); ?>
		  <!--top-->
	  <!--tooth-->
		<?php // $this->load->view('top'); ?>
		  <!--dentisit dashboard--></td>
				<?php echo isset($content) ? $content: ''; ?>
	  <!--wrapper-->
	  <!--bottom-content-->
			<?php // $this->load->view('dentist_dashboard/bottom.php'); ?>
		<!--bottom-content-->
		<?php // $this->load->view('footer'); ?>
</div>

<?php /* modal appointment */ ?>
  <!-- Modal -->
  <div class="modal fade" id="add_sched" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title"> Add Schedule </h4>
        </div>
        <div class="modal-body">

<?php
	$form_attrib = array(
		'class' => 'form-horizontal',
		'id' => 'appointment_form',
		'name' => 'appointment_form',
		'role' => 'form'
	);
	echo form_open('', $form_attrib);
?>
	<input type="text" id="appointment_id" name="appointment_id" />
	<input type="hidden" name="dentist_id" value="<?php echo $id; ?>" />
	<div class="form-group">
		<label for="inputTitle1" class="col-lg-3 control-label"> Title: </label>
		<div class="col-lg-9">
			<input type="text" class="form-control" id="inputTitle1" placeholder="Name of Schedule" name="title" required data-content="Title is required">
		</div>
	</div>
	<div class="form-group">
		<label for="inputDescription1" class="col-lg-3 control-label"> Description: </label>
		<div class="col-lg-9">
			<input type="text" class="form-control" id="inputDescription1" placeholder="Description of Schedule" name="description">
		</div>
	</div>
	<div class="form-group">
		<label for="inputDate1" class="col-lg-3 control-label"> Date: </label>
		<div class="col-lg-9 form-inline">
			<div class="form-group">
				<div class="col-sm-12">
					<input type="text" class="form-control datepicker" id="inputDate1" placeholder="MM/DD/YY" name="date1" tabindex="-1" value="<?php echo date('m/d/Y', time()) ?>">
				</div>
			</div>
		</div>
	</div>
	<div class="form-group">
		<label for="inputTime1" class="col-lg-3 control-label"> Time: </label>
		<div class="col-lg-9 form-inline">
			<div class="form-group">
				<div class="col-lg-5">
					<input type="text" class="form-control timepicker" id="inputTime1" placeholder="00:00" name="time1" required>
				</div>
				<label for="inputTime2" class="col-lg-2 control-label"> Time: </label>
				<div class="col-lg-5">
					<input type="text" class="form-control timepicker" id="inputTime2" placeholder="00:00" name="time2" required>
				</div>
			</div>
		</div>
	</div>
<?php
	echo form_close();
?>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button id="submit_appointment" type="button" class="btn btn-primary" name="submit_appointment" value="insert">Save changes</button>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
<?php /* */
