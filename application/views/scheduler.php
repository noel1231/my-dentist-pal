		<div id="scheduler" class="col-md-6">
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

		<div id="appointment" class="col-md-6" style="margin-top:40px;">
			<div class="row">
			<div class="col-md-2">
				<label class="label" style="color: #000;font-size: 12px;">Status:&nbsp;</label>
			</div>
			<div class="col-md-10">
			
				<span class="label label-success">Confirmed</span>
				<span class="label label-warning">Cancelled</span>
			
			</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="pull-left">
						<h4> <span id="date_appoint"> Today's </span> Appointment(s): <strong id="num_of_appoint"> <?php echo $qdentist_appointments->num_rows(); ?> </strong> </h4>
					</div>
					<div class="pull-right">
						<div class="btn-group">
							<button id="show_add_sched" type="button" class="btn" style="background-color: transparent;border: 1px solid#ddd;"> + Add Schedule </button>
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
		<tr class="no_sched_row"><td colspan="5"> No Appoinment for this day. </td></tr>
<?php
	}
?>
	</tbody>
</table>
</div>
<style>
#tbody_appointment tr:hover{
	background: #5bc0de;
	cursor: pointer;
}
#tbody_appointment tr:nth-child(even) {
	background-color: #B5EEFF;
}
</style>
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