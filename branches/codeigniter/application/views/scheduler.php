		<div id="scheduler" class="col-md-7">
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

		<div id="appointment" class="col-md-5">
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
<div class="table-responsive">
<table class="table" style="margin-bottom:0;">
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
		<tr class="no_sched_row"><td colspan="4"> No Appoinment for this day. </td></tr>
<?php
	}
?>
	</tbody>
</table>
</div>
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