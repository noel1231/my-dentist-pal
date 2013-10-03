<?php
	$session_dentist_id = $dentist_id; 
	
	
	if(isset($_GET['search_field']))
	{
		if(isset($_GET['by']) && isset($_GET['type']))
		{
			$type = $_GET['type'];
			$by = $_GET['by'];
		}else
		{
			$type = '';
			$by = '';
		}
		
		$word = trim($_GET['search_field']);
		
		$this->db->where('dentist_id',$dentist_id);
		$this->db->like('patient_name',$word);
		$this->db->or_like('patient_surname',$word);
		$this->db->or_like('patient_middle_name',$word);
		$this->db->or_like('id',$word);
		$this->db->order_by('id',$type);
		$query = $this->db->get('patient_list');
		
	}else
	{
		if(isset($_GET['by']) && isset($_GET['type']))
		{
			$type = $_GET['type'];
			$by = $_GET['by'];
			if($by == 'name')
			{
				$query = $this->db->where('dentist_id',$session_dentist_id)->order_by('patient_name',$type)->get('patient_list');
			}else if($by == 'e_date')
			{
				$query = $this->db->where('dentist_id',$session_dentist_id)->order_by('date_of_entry',$type)->get('patient_list');
			}else if($by == 'l_visit')
			{
				$query = $this->db->where('dentist_id',$session_dentist_id)->order_by('date_of_last_visit',$type)->get('patient_list');
				
				
			}
		}else
		{
			$type = 'desc';
			$by = '';
			$query = $this->db->where('dentist_id',$session_dentist_id)->order_by('id',$type)->get('patient_list');
		}
		
	}
	
?>

<div>
		<div class="container">
			<div class="delete_all_checkbox" style="padding:8px;display:none;">
				<span class="glyphicon glyphicon-trash delete_checked_patient" title="Delete" style="cursor:pointer"></span>
			</div>
			<div class="table-responsive">
				<table class="table">
					<thead>
						<th><input type="checkbox" class="checkall"/></th>
						<th>Picture</th>
						<th class="sort_table" data-sorter="<?php echo $type ? $type : 'asc'; ?>" alt="<?php echo isset($word) ? $word : ''; ?>" id="name">Name</th>
						<th class="sort_table" data-sorter="<?php echo $type ? $type : 'asc'; ?>" alt="<?php echo isset($word) ? $word : ''; ?>" id="e_date">Entry Date</th>
						<th class="sort_table" data-sorter="<?php echo $type ? $type : 'asc'; ?>" alt="<?php echo isset($word) ? $word : ''; ?>" id="l_visit">Last Visit</th>
						<th>Action</th>
					</thead>
					<tbody class="patient_table_body">
<?php
	if($query->num_rows() > 0)
	{
		foreach($query->result_array() as $row)
		{
?>	
						<tr>
							<td>
								<input type="checkbox" class="check_each" value="<?php echo $row['id']; ?>">
							</td>
							<td>
								<img src="<?php echo base_url('patient_picture/'.str_replace('patient_picture/','',$row['patient_picture'])); ?>" style="width:60px;" onerror="this.src='http://www.placehold.it/200x200/EFEFEF/AAAAAA&text=no+image'">
							</td>
							<td><a href="<?php echo base_url('patient_edit?id='.$row['id']); ?>"><?php echo ucwords($row['patient_name']); ?></a></td>
							<td><?php echo date('M-t-Y',strtotime($row['date_of_entry'])); ?></td>
							<td><?php echo trim($row['date_of_last_visit']) != '' ? date('M-t-Y',strtotime($row['date_of_last_visit'])) : 'Not visit'; ?></td>
							<td>
								<a href="<?php echo base_url('patient_edit?id='.$row['id']); ?>" style="color: #333;">
									<span class="edit_patient glyphicon glyphicon-edit" title="Edit patient info"></span>
								</a>
								<a href="<?php echo base_url('patient_access?id='.$row['id']); ?>" style="color: #333;">
									<span class="glyphicon glyphicon-globe" title="Manage patient account access"></span>
								</a>
								<span class="glyphicon glyphicon-trash delete_patient" title="Delete patient" style="cursor:pointer" id="<?php echo $row['id']; ?>"></span>
							</td>
						</tr>
<?php
		}
		
	}else
	{
?>
						<tr>
							<td colspan="6" style="text-align:center">
							<div>No record found!</div>
							<a href="<?php echo base_url('patient_records'); ?>" class="btn btn-primary">View All</a>
							</td>
						</tr>
<?php
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
  
  <!-- Modal -->
  <div class="modal fade" id="myModalDeleteAllChecked" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body saying_body">
          Are you sure you want to delete count record(s)?
        </div>
        <div class="modal-footer">
		  <input type="hidden" class="data_ids" value="">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
          <button type="button" class="btn btn-primary delete_count_success">Delete</button>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->




