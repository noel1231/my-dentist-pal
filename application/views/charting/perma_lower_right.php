<table><tr>
	<?php
		if($what_chart === '1') {
			$set4 = array(
				'31' => '48',
				'32' => '47',
				'33' => '46',
				'34' => '45',
				'35' => '44',
				'36' => '43',
				'37' => '42',
				'38' => '41',
				
			);
		} else {
			$set4 = array(
				48=>48,47=>47,46=>46,45=>45,44=>44,43=>43,42=>42,41=>41
			);
		}
	foreach($set4 as $key=>$value) {
		
?>
		<td> 
			<table class="<?php echo isset(${'tooth_'.$value}) ? '' : 'tooth'; ?>">
				<tr><td>
<?php
		if(isset( ${'tooth_'.$value} )) {
			if( ${'tooth_'.$value} == "none" ) {
?> 
				<img id="tooth_<?php echo $value; ?>" src="<?php echo base_url(); ?>img/Toothchart/01.png" /> 
	<?php } else { ?>
				<img id="tooth_<?php echo $value; ?>" src="<?php echo base_url(); ?>img/Toothchart/<?php echo str_pad( ${'tooth_'.$value}, 2, 0, STR_PAD_LEFT); ?>.png"/>
<?php	
			}
		} else {
?>
				<img id="tooth_<?php echo $value; ?>" src="<?php echo base_url(); ?>img/Toothchart/01.png" /> 
<?php
		}
?>
				</td></tr>
				<tr><td style="text-align:center;" class="tooth_num"><?php echo $value; ?></td></tr>
				<tr><td id="<?php echo 'legend_'.$key; ?>" class="tooth_legend">
<?php
	if(isset( ${'legend_'.$key} )) {
			
				if( ( ${'legend_'.$key} != "none" ) && ( ${'legend_'.$key}!="" ) ) {
					echo ${'legend_'.$key}; 
				} else if(${'legend_'.$key}=="") {
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