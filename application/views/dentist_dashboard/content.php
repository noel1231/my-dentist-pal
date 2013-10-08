<?php

	$pass_date = date('Y-m-d');
	$ctr=0;
	$sql='SELECT * FROM `jqcalendar` WHERE `dentist_id`="'.$id.'"';
	$res=mysql_query($sql);
	while( $row=mysql_fetch_array($res) ){
		$date=date('Y-m-d',strtotime($row['StartTime']));
		if($date==$pass_date)
			$ctr++;
	}
	
	$no="no";
	$sql="SELECT COUNT(*) AS num FROM message_received WHERE message_read='".$no."' AND dentist_id='".$id."'";
	$res=mysql_query($sql);
	$query=mysql_fetch_assoc($res);
	$rows=$query['num'];
	
	$count = 0;
	$my_var="";
	$sql="SELECT COUNT(*) AS counter FROM patient_list WHERE dentist_id='".$id."' AND referred_by<>'".$my_var."'";
	$res=mysql_query($sql);
	$query=mysql_fetch_assoc($res);
	$row=$query['counter'];
	
	/* Total Patient Records */
	$patient_num = 0;
	$query_patient_num = "SELECT COUNT(*) AS `count` FROM `patient_list` WHERE `dentist_id` = ".$id."";
	$res_patient_num   = mysql_query($query_patient_num);
	if($res_patient_num)
	{
		while($row_patient_num = mysql_fetch_array($res_patient_num))
		{
			$patient_num = $row_patient_num['count'];
		}
	}
	
	/* Total Male Patient Records */
	$patient_male_num = 0;
	$query_patient_num = "SELECT COUNT(*) as 'male' FROM `patient_list` WHERE `dentist_id` = ".$id." AND `patient_gender` LIKE 'male'";
	$res_patient_num   = mysql_query($query_patient_num);
	if($res_patient_num)
	{
		while($row_patient_num = mysql_fetch_array($res_patient_num))
		{
			$patient_male_num = $row_patient_num['male'];
		}
	}
	
	/* Total Female Patient Records */
	$patient_female_num = 0;
	$query_patient_num = "SELECT COUNT(*) as 'female' FROM `patient_list` WHERE `dentist_id` = ".$id." AND `patient_gender` LIKE 'female'";
	$res_patient_num   = mysql_query($query_patient_num);
	if($res_patient_num)
	{
		while($row_patient_num = mysql_fetch_array($res_patient_num))
		{
			$patient_female_num = $row_patient_num['female'];
		}
	}
	
	/* Average Age Patient Records */
	$patient_average_age = 0;
	$query_patient_num = "SELECT AVG( `patient_age` ) as 'average_age' FROM `patient_list` WHERE `dentist_id` = ".$id."";
	$res_patient_num   = mysql_query($query_patient_num);
	if($res_patient_num)
	{
		while($row_patient_num = mysql_fetch_array($res_patient_num))
		{
			$patient_average_age = $row_patient_num['average_age'];
		}
	}
	
	/* Patients Added in the last 7 days */
	$patient_count 	= 0;
	$date_today 	= date("Y-m-d G:i:s");
	$date_less_than	= date("Y-m-d G:i:s",strtotime($date_today. '-7 days'));
	$query_patient	= "SELECT COUNT(*) as patient_count FROM patient_list WHERE date_of_entry >= '$date_less_than' and date_of_entry <= '$date_today' AND `dentist_id` = ".$id."";
	$res_patient	= mysql_query($query_patient);
	if ($res_patient)
	{
		while ($row_patient = mysql_fetch_array($res_patient))
		{
			$patient_count = $row_patient['patient_count'];
		} 
	}

?>

<div class="row">
	<div class="col-md-12">
		<div class="well well-sm" style="background-color:#3798EC;border-radius: 34px;">
			<h3 style="margin: 0;color:#fff;padding-left: 15px;">Clinic Overview</h3>
		</div>
		<div class="container">
			<div class="col-md-6">
				<ul class="list-group">
					<li class="list-group-item" style="border:none;">
						<span class="badge" style="background-color: #3798EC;"><?php echo isset($patient_num) ? $patient_num : ''; ?></span>
						Total Patient Records
					</li>
					<li class="list-group-item" style="border:none;border-top:1px solid #ddd;">
						<span class="badge" style="background-color: #3798EC;"><?php echo isset($patient_count) ? $patient_count : ''; ?></span>
						Patient added in the last 7 days
					</li>
				</ul>
			</div>
			<div class="col-md-6">
				<ul class="list-group">
					<li class="list-group-item" style="border:none;">
						<span class="badge" style="background-color: #3798EC;"><?php echo isset($patient_male_num) ? $patient_male_num : ''; ?></span>
						Total Male Patient
					</li>
					<li class="list-group-item" style="border:none;border-top:1px solid #ddd;">
						<span class="badge" style="background-color: #3798EC;"><?php echo isset($patient_female_num) ? $patient_female_num : '';?></span>
						Total Female Patient
					</li>
					<li class="list-group-item" style="border:none;border-top:1px solid #ddd;">
						<span class="badge" style="background-color: #3798EC;"><?php echo isset($patient_average_age) ? round($patient_average_age) : ''; ?></span>
						Average Patient Age
					</li>
				</ul>
			</div>
		</div>
<?php
		$this->db
			->select('tooth_procedure, count(tooth_procedure) as procedure_count')
			->where('dentist_id', $id)
			->from('patient_tooth_chart_extra')
			->group_by('tooth_procedure');
		$qprocedure_count = $this->db->get();
		if($qprocedure_count->num_rows() > 0) {
?>
		<div class="container">
			<h3>Procedure Summary</h3>
			<div class="col-md-6">
				<ul class="list-group">
<?php
			$procedure_array = array(
				'D' => 'Decayed (Caries Indicated for Filling)',
				'M' => 'Missing due to Caries',
				'F' => 'Filled',
				'I' => 'Caries Indicated for Extraction',
				'RF' => 'Root Fragment',
				'MO' => 'Missing due to Other Causes',
				'Im' => 'Impacted Tooth',
				'J' => 'Jacket Crown',
				'AM' => 'Amalgam Filling',
				'AB' => 'Abutment',
				'P' => 'Pontic',
				'In' => 'Inlay',
				'FX' => 'Fixed Cure Composite',
				'Rm' => 'Removable Denture',
				'X' => 'Extraction due to Caries',
				'XO' => 'Extraction due to Other Causes',
				'check' => 'Present Teeth',
				'Cm' => 'Congenitally Missing',
				'Sp' => 'Supernumerary'
			);
			$rprocedure_count = $qprocedure_count->result_array();
			foreach($rprocedure_count as $procedure) {
?>
					<li class="list-group-item" style="border:none;">
						<span class="badge" style="background-color: #3798EC;"> <?php echo $procedure['procedure_count']; ?></span>
						<?php echo $procedure_array[$procedure['tooth_procedure']]; ?>
					</li>
<?php
			}
?>
				</ul>
			</div>
		</div>
<?php
		}
?>
	</div>