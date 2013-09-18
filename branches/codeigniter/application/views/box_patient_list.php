<?php
	$session_dentist_id = $dentist_id; 
	
	$query = $this->db->where('dentist_id',$session_dentist_id)->order_by('id','desc')->get('patient_list');
	
?>

<div>
		<div class="container">
			<div class="table-responsive">
				<table class="table">
					<thead>
						<th><input type="checkbox" class="checkall"/></th>
						<th>Picture</th>
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
			if(trim($row['patient_surname']) == null)
			{
				$nameFormat = $row['patient_name'];
			}else
			{
				$nameFormat = ucwords($row['patient_surname']).', '.ucwords($row['patient_name']).' '.ucwords($row['patient_middle_name']);
			}
?>
						<tr>
							<td>
								<input type="checkbox" class="check_each" value="<?php echo $row['id']; ?>">
							</td>
							<td>
								<img src="<?php echo base_url('patient_picture/'.$row['patient_picture']); ?>" style="width:60px;" onerror="this.src='http://www.placehold.it/200x200/EFEFEF/AAAAAA&text=no+image'">
							</td>
							<td><?php echo $nameFormat; ?></td>
							<td><?php echo date('Y/m/s',strtotime($row['date_of_entry'])); ?></td>
							<td><?php echo date('Y/m/s',strtotime($row['date_of_last_visit'])); ?></td>
							<td>
								<a href="<?php echo base_url('patient_edit?id='.$row['id']); ?>" style="color: #333;">
									<span class="edit_patient glyphicon glyphicon-edit" title="Edit"></span>
								</a>
								<a href="<?php echo base_url('patient_access?id='.$row['id']); ?>" style="color: #333;">
									<span class="glyphicon glyphicon-globe" title="Manage Account"></span>
								</a>
								<span class="glyphicon glyphicon-trash delete_patient" title="Delete" style="cursor:pointer" id="<?php echo $row['id']; ?>"></span>
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
  <!-- Modal -->
  <div class="modal fade" id="myModalDeletePatient" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body">
          Are you sure do you want to delete this record?
        </div>
        <div class="modal-footer">
		  <input type="hidden" class="p_id" value="">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
          <button type="button" class="btn btn-primary delete_patient_success">Delete</button>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->




