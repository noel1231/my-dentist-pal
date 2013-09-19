<table cellpadding="0" cellspacing="0" border="0">
<tr><td>
	<table cellpadding="0" cellspacing="0" border="0">
	<tr>
	<?php
		$upper_right_perma = array (
			'18' => '11',
			'17' => '12',
			'16' => '13',
			'15' => '14',
			'14' => '15',
			'13' => '16',
			'12' => '17',
			'11' => '18',
		);
		foreach($upper_right_perma as $key=>$value)
		{
	?>
		<td valign="top">
			<table cellpadding="0" cellspacing="0" border="0" width="30"><tr><td style="text-align:center;"><?php echo $key; ?></td></tr>
				<tr><td>
						<?php if(${'tooth_'.$key}=="none") { ?>
						<img src="<?php echo base_url(); ?>img/Toothchart/01.png" />
						<?php } else if(${'tooth_'.$key}<=9) { ?>
						<img src="<?php echo base_url(); ?>img/Toothchart/0<?php echo ${'tooth_'.$key};?>.png"/><?php } else { ?>
						<img src="<?php echo base_url(); ?>img/Toothchart/<?php echo ${'tooth_'.$key};?>.png"/><?php } ?>
				</td></tr>
				<tr><td style="font-size:10px;width:30px;text-align:center;">
					<?php 
					if(${'legend_'.$value}!="none") {
						echo ${'legend_'.$value};
					} else {
						echo "&nbsp;";	
					}
					?>
				</td></tr>
			</table>
		</td>
	<?php
		}
	?>
	</tr></table>
</td>

<!--second set of teetch right--><td style="padding-left:20px;" valign="top">

<table cellpadding="0" cellspacing="0" border="0"><tr>
	<td>
	<?php
		for($set2 = 21; $set2 <= 28; $set2++) {
			
	?>
		<td valign="top">
			<table cellpadding="0" cellspacing="0" border="0" width="30"><tr><td style="text-align:center;"><?php echo $set2; ?></td></tr>
				<tr><td>
					<?php if(${'tooth_'.$set2}=="none") { ?> 
					<img src="<?php echo base_url(); ?>img/Toothchart/01.png" /> <?php } else if(${'tooth_'.$set2}<=9) { ?>
					<img src="<?php echo base_url(); ?>img/Toothchart/0<?php echo ${'tooth_'.$set2};?>.png"/><?php } else { ?>
					<img src="<?php echo base_url(); ?>img/Toothchart/<?php echo ${'tooth_'.$set2};?>.png"/><?php } ?>
					</td></tr>
					<tr><td style="font-size:10px;width:30px;text-align:center;">
					<?php if(${'legend_'.$set2}!="none") {
						echo ${'legend_'.$set2};
					} else {
						echo "&nbsp;";	
					} ?>
				</td></tr>
			</table>
		</td>
	<?php
		}
	?>
	</td>
</tr></table>

<!--second set of teetch right--></td>
</tr>


<tr>
<td colspan="2">
<table cellpadding="0" cellspacing="0" border="0" style="width:100%;font-family:Arial, Helvetica, sans-serif;color:#999;font-size:14px;margin-top:5px;">
<tr>

<td align="left" style="padding-top:10px;width:40%;">
<table cellpadding="0" cellspacing="0" border="0">
<tr><td>
UPPER RIGHT
</td></tr>
<tr><td style="padding-top:10px;">
UPPER RIGHT
</td></tr>
</table>
</td>

<td align="center" width="20%">
LINGUAL
</td>


<td align="right" style="padding-top:10px;width:40%;">
<table cellpadding="0" cellspacing="0" border="0">
<tr><td>
UPPER LEFT
</td></tr>
<tr><td style="padding-top:10px;">
UPPER LEFT
</td></tr>
</table>
</td>

</tr>
</table> 
</td>
</tr>


<!--next row-->
<tr><td style="padding-top:20px;">
<table cellpadding="0" cellspacing="0" border="0"><tr>
<?php
	$set3 = array(
		'48' => '31',
		'47' => '32',
		'46' => '33',
		'45' => '34',
		'44' => '35',
		'43' => '36',
		'42' => '37',
		'41' => '38',
		
	);
	foreach($set3 as $key=>$value) {
	
 ?>
	<td> 
		<table cellpadding="0" cellspacing="0" border="0" width="30">
			<tr><td style="font-size:10px;width:30px;text-align:center;">
			<?php 
			if( ( ${'legend_'.$value}!="none" ) && ( ${'legend_'.$value}!="" ) ) {
				echo ${'legend_'.$value}; 
			} else if(${'legend_'.$value}=="") {
				echo "&nbsp;";	
			} else {
				echo "&nbsp;";	
			}
			?>
			</td></tr>
			<tr><td>
			<?php if(${'tooth_'.$key}=="none") { ?> 
			<img src="<?php echo base_url(); ?>img/Toothchart/01.png" /> <?php } else if(${'tooth_'.$key}<=9) { ?>
			<img src="<?php echo base_url(); ?>img/Toothchart/0<?php echo ${'tooth_'.$key};?>.png"/><?php } else { ?>
			<img src="<?php echo base_url(); ?>img/Toothchart/<?php echo ${'tooth_'.$key};?>.png"/><?php } ?>
			</td></tr>
			<tr><td style="text-align:center;"><?php echo $key; ?></td></tr>
		</table>
	</td>
<?php
	}
?>

</tr></table>
</td>

<!--second set of teetch right--><td style="padding-left:20px;padding-top:20px;">

<table cellpadding="0" cellspacing="0" border="0"><tr>
<?php
	$set4 = array(
		'31' => '41',
		'32' => '42',
		'33' => '43',
		'34' => '44',
		'35' => '45',
		'36' => '46',
		'37' => '47',
		'38' => '48'
	);
	foreach($set4 as $key=>$value) {
?>
<td>
	<table cellpadding="0" cellspacing="0" border="0" width="30">
		<tr><td style="font-size:10px;width:30px;text-align:center;">
			<?php 
			if(( ${'legend_'.$value}!="none" )&&( ${'legend_'.$value}!="" )) {
			echo ${'legend_'.$value}; }
			else if(${'legend_'.$value}=="") {
			echo "&nbsp;";	
			}
			else {
			echo "&nbsp;";	
			}
			?>
		</td></tr>
		<tr><td> 
		<?php if( ${'tooth_'.$key} =="none") { ?>
			<img src="<?php echo base_url(); ?>img/Toothchart/01.png" /> <?php } else if( ${'tooth_'.$key}<=9 ) { ?>
			<img src="<?php echo base_url(); ?>img/Toothchart/0<?php echo ${'tooth_'.$key};?>.png"/><?php } else { ?>
			<img src="<?php echo base_url(); ?>img/Toothchart/<?php echo ${'tooth_'.$key};?>.png"/><?php } ?>
		</td></tr>
		<tr><td style="text-align:center;"><?php echo $key; ?></td></tr>
	</table>
</td>
<?php
	}
?>
</tr></table>
<!--second set of teetch right--></td>
</tr>
</table>