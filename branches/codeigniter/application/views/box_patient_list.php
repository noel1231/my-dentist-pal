<?php
	$session_dentist_id = $dentist_id; 
	
	$query = $this->db->where('dentist_id',$session_dentist_id)->order_by('id','desc')->get('patient_list');
	
?>

<div>
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
								<a href="<?php echo base_url('patient_edit?id='.$row['id']); ?>" style="color: #333;">
									<span class="glyphicon glyphicon-edit" title="Edit" style="cursor:pointer" class="edit_patient"></span>
								</a>
								<span class="glyphicon glyphicon-trash" title="Delete" style="cursor:pointer" class=""></span>
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