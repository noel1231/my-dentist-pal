	<table><tr>
<?php
/* for old 'patient_adult_tooth' database *
			$set1 = array (
				'18' => '11',
				'17' => '12',
				'16' => '13',
				'15' => '14',
				'14' => '15',
				'13' => '16',
				'12' => '17',
				'11' => '18',
			);
/* */
			$set1 = array(
				18, 17, 16, 15, 14, 13, 12, 11
			);
			foreach($set1 as $key=>$value)
			{
?>
		<td valign="top">
					<table class="tooth">
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