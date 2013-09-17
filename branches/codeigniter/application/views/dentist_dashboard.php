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
							<img data-src="holder.js/100%x180" alt="Profile Pic" src="<?php echo base_url().$profile_pic; ?>">
						</a>
					</div>
					<div class="col-md-10">
						<div class="row">
							<div class="col-md-3 col-md-offset-3">
								<h1>
									Hi, <?php echo $first_name; ?>
								</h1>
							</div>
							<div class="col-md-6">
								<?php $this->load->view('menu'); ?>
							</div>
						</div>
					</div>
				</div>

			
		</div>
	</div>

	<div class="row">
			<div class="col-md-6">
				<h1> Dashboard </h1>
			</div>
			<div class="col-md-6">
				<div class="row">
					<div class="addpatient col-md-3">
						<a href="add_patient.php" class="btn btn-primary">
							+ ADD PATIENT
						</a>
					</div>
					<div class="col-md-8">
						<form action="patient_list.php" method="post">
							<input type="text" name="search_field" class="search" value="Search patient here" onfocus="if (this.value == 'Search patient here') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Search patient here';}" style="color:#999;"/>
							<input type="submit" name="search" value="SEARCH" class="submit btn_design" />
						</form>
					</div>
				</div>
			</div>
	</div>

	<div class="row">
		<div id="scheduler" class="col-md-7">
			<div id="calendar"></div>
		</div>

<?php
if ($this->db->table_exists('dentist_appointments'))
{
						$today = date('m/d/Y', time());
						$this->db->like('start_date', $today);
						$this->db->order_by('timestamp');
						$qdentist_appointments = $this->db->get('dentist_appointments');
?>

		<div id="appointment" class="col-md-5">
			<div class="container">
				<div class="row">
					<div class="pull-left">
						<h4> <span id="date_appoint"> Today's </span> Appointment(s): <strong id="num_of_appoint"> <?php echo $qdentist_appointments->num_rows(); ?> </strong> </h4>
					</div>
					<div class="pull-right">
						<div class="btn-group">
							<button id="show_add_sched" type="button" class="btn btn-default"> + Add Schedule </button>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="panel panel-default">

<table class="table">
	<thead>
		<tr>
			<th> Title </th>
			<th> Description </th>
			<th> Time </th>
			<th> Status </th>
		</tr>
	</thead>
	<tbody id="tbody_appointment">
<?php
	if($qdentist_appointments->num_rows() > 0) {
		foreach($qdentist_appointments->result_array() as $appointments)
		{
			$time = $appointments['start_time'] . " to " . $appointments['end_time'];
?>
		<tr>
			<td> <?php echo $appointments['title']; ?> </td>
			<td> <?php echo $appointments['description']; ?> </td>
			<td> <?php echo $appointments['start_time']; ?> <?php echo $appointments['end_time'] ? ' to '.$appointments['end_time'] : ''; ?></td>
			<td>
				<select>
					<option> Select.. </option>
					<option> Confirmed </option>
					<option> Cancelled </option>
				</select>
			</td>
		</tr>
<?php
		}
	} else {
?>
		<tr><td colspan="4"> No Appoinment for this day. </td></tr>
<?php
	}
?>
	</tbody>
</table>
<?php
}
?>					
					</div>
				</div>
			</div>
		</div>

	</div>




			</div>
		</div>
	</div>

	  <!--top-->
		<?php // $this->load->view('top_patient'); ?>
		  <!--top-->
	  <!--tooth-->
		<?php // $this->load->view('top'); ?>
		  <!--dentisit dashboard--></td>
				<?php echo $content; ?>
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
	<input type="hidden" id="appointment_id" name="appointment_id" />
	<input type="hidden" name="dentist_id" value="<?php echo $this->session->userdata('id'); ?>" />
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
