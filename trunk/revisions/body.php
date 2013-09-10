<?php

	$pass_date = date('Y-m-d');
	$ctr=0;
	$sql='SELECT * FROM `jqcalendar` WHERE `dentist_id`="'.$dentist_id.'"';
	$res=mysql_query($sql);
	while( $row=mysql_fetch_array($res) ){
		$date=date('Y-m-d',strtotime($row['StartTime']));
		if($date==$pass_date)
			$ctr++;
	}
	
	$no="no";
	$sql="SELECT COUNT(*) AS num FROM message_received WHERE message_read='".$no."' AND dentist_id='".$dentist_id."'";
	$res=mysql_query($sql);
	$query=mysql_fetch_assoc($res);
	$rows=$query['num'];
	
	$count = 0;
	$my_var="";
	$sql="SELECT COUNT(*) AS counter FROM patient_list WHERE dentist_id='".$dentist_id."' AND referred_by<>'".$my_var."'";
	$res=mysql_query($sql);
	$query=mysql_fetch_assoc($res);
	$row=$query['counter'];
	
	/* Total Patient Records */
	$patient_num = 0;
	$query_patient_num = "SELECT COUNT(*) AS `count` FROM `patient_list` WHERE `dentist_id` = ".$dentist_id."";
	$res_patient_num   = mysql_query($query_patient_num);
	if($res_patient_num)
	{
		while($row_patient_num = mysql_fetch_array($res_patient_num))
		{
			$patient_num = $row_patient_num['count'];
		}
	}
	
	/* Patients Added in the last 7 days */
	$patient_count 	= 0;
	$date_today 	= date("Y-m-d") . " " . date('G:i:s');
	$date_less_than	= date("Y-m-d",strtotime($date_today. '-7 days')) . " " . date('G:i:s');
	$query_patient	= "SELECT COUNT(*) as patient_count FROM patient_list WHERE date_of_entry >= '$date_less_than' and date_of_entry <= '$date_today' AND `dentist_id` = ".$dentist_id."";
	$res_patient	= mysql_query($query_patient);
	if ($res_patient)
	{
		while ($row_patient = mysql_fetch_array($res_patient))
		{
			$patient_count = $row_patient['patient_count'];
		} 
	}

?>
	<div id="dashboard_content">
		<div class="container" style="width: 940px; padding: 10px; margin: auto">
			<div class="header">
				<div class="landing_center_blue">
					<span> Dashboard </span>
				</div>
			</div>
			<div class="inner_content" style="background-color: #FDFDFD;">
				<div style="padding: 10px 20px 40px;">

<!-- Notification Alert -->
					<div id="notification_alert" style="width: 30%; display: inline-block;">
						<table cellspacing="1" cellpadding="8">
							<tr>
								<td><span style="font-size:15px;color:#333;font-family:Arial, Helvetica, sans-serif;"> Today&rsquo;s Appointment: </span></td>
								<td><a href="scheduler/wdCalendar/index.php" style="text-decoration:none;" target="_blank"><span style="font-size:14px;color:#F00;"><?php echo $ctr;?></span></a></td>
							</tr>
							<tr>
								<td><span style="font-size:15px;color:#333;font-family:Arial, Helvetica, sans-serif;"> Messages: </span></td>
								<td><a href="message_received.php" style="text-decoration:none;" target="_blank"><span style="font-size:14px;color:#F00;"><?php echo $rows;?></span></a></td>
							</tr>
							<tr>
								<td><span style="font-size:15px;color:#333;font-family: Arial, Helvetica, sans-serif;"> Total Patient Records: </span></td>
								<td><span style="font-size:14px;color:#F00;"><?php echo $patient_num;?></span></td>
							</tr>
							<tr>
								<td><span style="font-size:15px;color:#333;font-family: Arial, Helvetica, sans-serif;"> Patients added in the last 7 days: </span></td>
								<td><span style="font-size:14px;color:#F00;"><?php echo $patient_count;?></span></td>
							</tr>
						</table>
					</div>
<!-- end Notification Alert -->

					<div style="float: right;">
						<div class="addpatient" style="display: inline-block;">
							<a href="add_patient.php" class="btn_design">
								+ ADD PATIENT
							</a>
						</div>
						<div style="display: inline-block;">
							<form action="patient_list.php" method="post">
								<input type="text" name="search_field" class="search" value="Search patient here" onfocus="if (this.value == 'Search patient here') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Search patient here';}" style="color:#999;"/>
								<input type="submit" name="search" value="SEARCH" class="submit btn_design" />
							</form>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>