<div class="row">
	<div class="col-md-6">
		
	</div>
	<div class="col-md-6" style="text-align: right;margin-bottom:15px;">
	<?php
		if(isset($_GET['scheduler']))
		{
			if($_GET['scheduler'] == 'true')
			{
	?>
		<form class="form-inline" id="search_appointment_form" role="form" method="POST" action="" accept-charset="utf-8" >
			<div class="form-group">
				<input type="text" class="form-control col-sm-6" id="appoinment_name" placeholder="Search appointment" name="appoinment_name" >
			</div>
			<button type="submit" class="btn btn-primary">Search</button>
		</form>
	<?php
			}
		}
	?>
	</div>
</div>
<div class="row" style="margin-bottom:15px;">
	<div class="col-md-2 col-sm-6" style="margin-bottom:15px;">
		<button class="btn btn-xs scheduler_prev"><span class="glyphicon glyphicon-chevron-left"></span></button>
		<button class="btn btn-xs scheduler_next"><span class="glyphicon glyphicon-chevron-right"></span></button>
		<button class="btn btn-xs scheduler_today">Today</button>
	</div>
	<div class="col-md-3 col-sm-6" style="text-align:right;">
		<button class="btn btn-xs scheduler_month">Month</button>
		<button class="btn btn-xs scheduler_week">Week</button>
		<button class="btn btn-xs scheduler_day">Day</button>
	</div>
</div>
<div class="row">
<div id="scheduler" class="col-md-5" style="cursor: pointer;">
	<div id="calendar"></div>
</div>

<?php
if ($this->db->table_exists('dentist_appointments'))
{
						$today = date('m/d/Y', time());
						$this->db->like('start_date', $today);
						$this->db->where('dentist_id', $id);
						$this->db->order_by('timestamp');
						$qdentist_appointments = $this->db->get('dentist_appointments');
?>

<div id="appointment" class="col-md-7" style="margin-top:30px;">
	<div class="container">
		
		<div class="row">
			<div class="pull-left">
				<h4> <span id="date_appoint"> Today's </span> Appointment(s): <strong id="num_of_appoint"> <?php echo $qdentist_appointments->num_rows(); ?> </strong> </h4>
			</div>
			<div class="pull-right">
				<div class="btn-group">
					<button id="show_add_sched" type="button" class="btn btn-primary"> + Add Schedule </button>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="panel panel-default">
				<div class="table-responsive" style="overflow-x: auto;">
					<table class="table" style="margin-bottom:0;">
						<thead>
							<tr>
								<th> Title </th>
								<th> Description </th>
								<th> Time </th>
								<th> 
									Status 
									<span class="label label-success" title="Confirmed" style="cursor:help;">&nbsp;</span>
									
									<span class="label label-warning" title="Cancelled" style="cursor:help;">&nbsp;</span>
								</th>
								<th>  </th>
							</tr>
						</thead>
						<tbody id="tbody_appointment">
					<?php
						if($qdentist_appointments->num_rows() > 0) {
							foreach($qdentist_appointments->result_array() as $appointments)
							{
								$time = $appointments['start_time'] . " to " . $appointments['end_time'];
					?>
							<tr id="<?php echo $appointments['id']; ?>">
								<td> <?php echo $appointments['title']; ?> </td>
								<td> <?php echo $appointments['description']; ?> </td>
								<td> <?php echo $appointments['start_time']; ?> <?php echo $appointments['end_time'] ? ' to '.$appointments['end_time'] : ''; ?></td>
								<td>
									<select class="select_status" style="background-color: #E7F4FF;">
										<option value="">Select Status...</option>
										<option value="confirmed" <?php echo $appointments['status'] == 'confirmed' ? 'selected' : ''; ?>>Confirmed</option>
										<option value="cancelled" <?php echo $appointments['status'] == 'cancelled' ? 'selected' : ''; ?>>Cancelled</option>
									</select>
								</td>
								<td>
									<span class="glyphicon glyphicon-trash delete_appointment" title="Delete" style="cursor:pointer"></span>
								</td>
							</tr>
					<?php
							}
						} else {
					?>
							<tr class="no_sched_row"><td colspan="5"> No Appoinment for today. </td></tr>
					<?php
						}
					?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
<?php
}
?>					

<style>
#tbody_appointment tr:hover{
	background: #5bc0de;
	cursor: pointer;
}
#tbody_appointment tr:nth-child(even) {
	background-color: #B5EEFF;
}
.fc-event.fc-event-hori.fc-event-start.fc-event-end {
	width: 8px !important;
	height: 8px;
}
.fc-header tbody {
	border: 1px solid #ddd;
}
</style>
