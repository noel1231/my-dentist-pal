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
				<tr><td class="tooth_legend">
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