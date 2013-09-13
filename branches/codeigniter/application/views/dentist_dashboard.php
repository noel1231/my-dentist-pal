<!--wrapper-->
<div style="background-color: #f6f5f5; margin-top: 135px; padding-top: 20px;">
	<div class="container">
		<div class="panel panel-default">
			<div class="panel-body">



	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<div class="container">
				HI! Doctor Name
			</div>
		</div>
	</div>

	<div class="row">
			<div class="col-md-6">
				<h1> Dashboard </h1>
			</div>
			<div class="col-md-6 text-right">
				<?php $this->load->view('menu'); ?>
			</div>
	</div>

	<div class="row">
		<div id="scheduler" class="col-md-5">
			<div id="calendar"></div>
		</div>

<?php
if ($this->db->table_exists('dentist_appointments'))
{
						$today = date('Y/m/d', time());
						// $this->db->like('start', $today);
						$this->db->order_by('timestamp');
						$qdentist_appointments = $this->db->get('dentist_appointments');
						$rdentist_appointments = $qdentist_appointments->result_array();

?>

		<div id="appointment" class="col-md-7">
			<div class="container">
				<div class="row">
					<div class="pull-left">
						<h3> <span id="date_appoint"> Today's </span> Appointment(s): <strong> <?php echo $qdentist_appointments->num_rows(); ?> </strong> </h3>
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
	<tbody>
<?php
		foreach($rdentist_appointments as $appointments) {
?>
		<tr>
			<td> <?php echo $appointments['title']; ?> </td>
			<td> <?php echo $appointments['description']; ?> </td>
			<td> <?php echo $appointments['start']; ?> </td>
			<td> <?php echo $appointments['end']; ?> </td>
		</tr>
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
			<?php $this->load->view('dentist_dashboard/bottom.php'); ?>
		<!--bottom-content-->
		<?php $this->load->view('footer'); ?>
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

<form class="form-horizontal" role="form" id="appointment_form">
	<input type="hidden" name="dentist_id" value="<?php echo $this->session->userdata('id'); ?>" />
  <div class="form-group">
    <label for="inputTitle1" class="col-lg-3 control-label"> Title: </label>
    <div class="col-lg-9">
      <input type="text" class="form-control" id="inputTitle1" placeholder="Name of Schedule" name="title" required>
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
				<input type="text" class="form-control datepicker" id="inputDate1" placeholder="MM/DD/YY" name="date1" tabindex="-1">
			</div>
		</div>
    </div>
  </div>
  <div class="form-group">
    <label for="inputTime1" class="col-lg-3 control-label"> Time: </label>
    <div class="col-lg-9 form-inline">
		<div class="form-group">
			<div class="col-lg-5">
				<input type="text" class="form-control" id="inputTime1" placeholder="00:00" name="time1">
			</div>
			<label for="inputTime2" class="col-lg-2 control-label"> Time: </label>
			<div class="col-lg-5">
				<input type="text" class="form-control" id="inputTime2" placeholder="00:00" name="time2">
			</div>
		</div>
    </div>
  </div>
</form>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button id="submit_appointment" type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
<?php /* */
