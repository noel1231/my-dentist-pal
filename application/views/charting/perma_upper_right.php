	<table><tr>
<?php
	if($new_chart === '0') {
		$set1 = array (
			'11' => '18',
			'12' => '17',
			'13' => '16',
			'14' => '15',
			'15' => '14',
			'16' => '13',
			'17' => '12',
			'18' => '11',
		);
	} else {
		$set1 = array(
			18 => 18, 17 => 17, 16 => 16, 15 => 15, 14 => 14, 13 => 13, 12 => 12, 11 => 11
		);
	}
			foreach($set1 as $key=>$value)
			{
?>
		<td valign="top">
					<table class="<?php echo isset(${'tooth_'.$value}) ? '' : 'tooth'; ?>">
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
				<tr><td style="text-align:center;" class="tooth_num"><?php echo $value; ?></td></tr>
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
			</table>
		</td>
<?php
			}
?>
	</tr></table>