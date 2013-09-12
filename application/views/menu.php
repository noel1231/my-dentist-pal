<?php
	$sql_dentist="SELECT * FROM `dentist_list` WHERE id = '".$sess_id."'";
	$res_dentist=mysql_query($sql_dentist);
	$query_dentist=mysql_fetch_assoc($res_dentist);
?>
			<div style="background-color: #e0e2e4; display: inline-block; width: 100%;">
				<div style="padding: 10px;">
					<div style="width: 940px; margin: 0 auto; position: relative;">
						<div style="vertical-align: bottom; border: 3px solid rgb(20, 132, 176); display: inline-block; width: 120px; height: 120px; padding: 4px;">
							<img src="<?php echo $query_dentist['profile_pic'] != '' ? $query_dentist['profile_pic'] : 'img/blank-profile.png'; ?>" style="max-width: 120px; max-height: 120px;" />
						</div>
						
						<div style="display: inline-block; position: absolute; right: 0; bottom: 0;">
							<div class="top_menu">
								<?php $this->load->view('sidebar_message'); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
