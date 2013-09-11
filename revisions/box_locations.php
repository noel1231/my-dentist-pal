<?php
	$parse_url = pathinfo($_SERVER['REQUEST_URI']);
	$filename = $parse_url['filename'];
?>
	<table cellpadding="0" cellspacing="0" border="0" width="100%">
		<tr>
			<td style="text-align: center; white-space: nowrap;<?php echo $filename == 'patient_info' ? 'background-color: #FFF;' : 'background-image:url(img/option_center_check.png);'; ?>"> 
				<a href="patient_info.php?id=<?php echo $id;?>" class="link_map">
				Patient Info
				</a>
			</td>
			<?php echo $filename == 'patient_info' ? '' : '<td style="background-image:url(img/option_right_check.png);width:5px;height:36px;">&nbsp;</td>'; ?>

			<td style="text-align: center; white-space: nowrap;<?php echo $filename == 'patient_medical' ? 'background-color: #FFF;' : 'background-image:url(img/option_center_check.png);'; ?>"> 
				<a href="patient_medical.php?id=<?php echo $id;?>" class="link_map">
				Medical History
				</a>
			</td>
			<?php echo $filename == 'patient_medical' ? '' : '<td style="background-image:url(img/option_right_check.png);width:5px;height:36px;">&nbsp;</td>'; ?>

			<td style="text-align: center; white-space: nowrap;<?php echo $filename == 'patient_dental' ? 'background-color: #FFF;' : 'background-image:url(img/option_center_check.png);'; ?>"> 
				<a href="patient_dental.php?id=<?php echo $id;?>" class="link_map">
				Dental History
				</a>
			</td>
			<?php echo $filename == 'patient_dental' ? '' : '<td style="background-image:url(img/option_right_check.png);width:5px;height:36px;">&nbsp;</td>'; ?>

			<td style="text-align: center; white-space: nowrap;<?php echo $filename == 'patient_tooth_chart' ? 'background-color: #FFF;' : 'background-image:url(img/option_center_check.png);'; ?>"> 
				<a href="patient_tooth_chart.php?id=<?php echo $id;?>" class="link_map">
				Charting
				</a>
			</td>
			<?php echo $filename == 'patient_tooth_chart' ? '' : '<td style="background-image:url(img/option_right_check.png);width:5px;height:36px;">&nbsp;</td>'; ?>

			<td style="text-align: center; white-space: nowrap;<?php echo $filename == 'patient_visit_log' ? 'background-color: #FFF;' : 'background-image:url(img/option_center_check.png);'; ?>"> 
				<a href="patient_visit_log.php?id=<?php echo $id;?>" class="link_map">
				Treatment Record
				</a>
			</td>
			<?php echo $filename == 'patient_visit_log' ? '' : '<td style="background-image:url(img/option_right_check.png);width:5px;height:36px;">&nbsp;</td>'; ?>
<?php /*
			<td style="text-align: center; white-space: nowrap;<?php echo $filename == 'patient_others' ? 'background-color: #FFF;' : 'background-image:url(img/option_center_check.png);'; ?>"> 
				<a href="patient_others.php?id=<?php echo $id;?>" class="link_map">
				Others
				</a>
			</td>
			<?php echo $filename == 'patient_others' ? '' : '<td style="background-image:url(img/option_right_check.png);width:5px;height:36px;">&nbsp;</td>'; ?>

			<td style="text-align: center; white-space: nowrap;<?php echo $filename == 'patient_notes' ? 'background-color: #FFF;' : 'background-image:url(img/option_center_check.png);'; ?>"> 
				<a href="patient_notes.php?id=<?php echo $id;?>" class="link_map">
				Notes
				</a>
			</td>
*/ ?>
<?php
	$noedit = array('patient_tooth_chart', 'patient_visit_log', 'patient_tooth_add');
	if(!in_array($filename, $noedit)) {
?>
			<td style="background-color: rgb(255, 0, 0); text-align: center; padding: 0px 5px;">
				<a href="patient_info_edit.php?id=<?php echo $id;?>" style="color:#FFF;font-family:Arial, Helvetica, sans-serif;font-weight:bold;font-size:13px;text-decoration:none;">
				Edit
				</a>
			</td>
<?php
	}
?>
		</tr>
	</table>