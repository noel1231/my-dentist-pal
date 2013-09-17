<?php
	$session_dentist_id = $dentist_id; 
	
	$query = $this->db->where('dentist_id',$session_dentist_id)->order_by('id','desc')->get('patient_list');
	
?>

<div class="wrapper">
	<div class="container">
		<div class="row" style="margin-bottom:15px;">
			<div class="col-md-6">
				<h3 style="margin-top:0;">Patient Records</h3>
			</div>
			<div class="col-md-6">
				<div class="row">
					<div class="col-md-3 col-md-offset-3">
						<a href="<?php echo base_url('patient_add'); ?>" class="btn btn-primary">
							<span class="glyphicon glyphicon-plus"></span>Add Patient
						</a>
					</div>
					<div class="col-md-6">
						<div class="input-group">
							<span class="input-group-addon">@</span>
							<input type="text" class="form-control" placeholder="Search Patients">
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="table-responsive">
				<table class="table">
					<thead>
						<th><input type="checkbox"/></th>
						<th>Name</th>
						<th>Entry Date</th>
						<th>Last Visit</th>
						<th>Action</th>
					</thead>
					<tbody>
<?php
	if($query->num_rows() > 0)
	{
		foreach($query->result_array() as $row)
		{
?>
						<tr id="<?php echo $row['id']; ?>">
							<td><input type="checkbox"/></td>
							<td><?php echo $row['patient_name']; ?></td>
							<td><?php echo date('Y/m/s',strtotime($row['date_of_entry'])); ?></td>
							<td><?php echo date('Y/m/s',strtotime($row['date_of_last_visit'])); ?></td>
							<td>
								<span class="glyphicon glyphicon-edit" title="Edit" style="cursor:pointer"></span>
								<span class="glyphicon glyphicon-trash" title="Delete" style="cursor:pointer"></span>
							</td>
						</tr>
<?php
		}
	}
?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>