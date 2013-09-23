<table><tr>
	<?php
/* 		$set4 = array(
			'48' => '31',
			'47' => '32',
			'46' => '33',
			'45' => '34',
			'44' => '35',
			'43' => '36',
			'42' => '37',
			'41' => '38',
			
		);
*/
		$set4 = array(
			48,47,46,45,44,43,42,41
		);
		foreach($set4 as $key=>$value) {
		
?>
		<td> 
			<table>
				<tr><td>
<?php
		if(isset( ${'tooth_'.$value} )) {
			if( ${'tooth_'.$value} == "none" ) {
?> 
				<img src="<?php echo base_url(); ?>img/Toothchart/01.png" /> 
	<?php } else if(${'tooth_'.$value}<=9) { ?>
				<img src="<?php echo base_url(); ?>img/Toothchart/0<?php echo ${'tooth_'.$value};?>.png"/>
	<?php } else { ?>
				<img src="<?php echo base_url(); ?>img/Toothchart/<?php echo ${'tooth_'.$value};?>.png"/>
<?php	
			}
		} else {
?>
				<img src="<?php echo base_url(); ?>img/Toothchart/01.png" /> 
<?php
		}
?>
				</td></tr>
				<tr><td style="text-align:center;"><?php echo $value; ?></td></tr>
				<tr><td style="font-size:10px;width:30px;text-align:center;">
<?php
	if(isset( ${'legend_'.$value} )) {
			
				if( ( ${'legend_'.$value} != "none" ) && ( ${'legend_'.$value}!="" ) ) {
					echo ${'legend_'.$value}; 
				} else if(${'legend_'.$value}=="") {
					echo "&nbsp;";	
				} else {
					echo "&nbsp;";	
				}
	}
				?>
				</td></tr>
			</table>
		</td>
<?php
	}
?>

	</tr></table>