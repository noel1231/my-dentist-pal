	<table>
		<tr>
			<td>
<?php
			$set2 = array(
				21,22,23,24,25,26,27,28
			);
			foreach($set2 as $value) {
?>
			<td valign="top">
				<table>
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
					<tr><td style="text-align:center;"><?php echo $value; ?></td></tr>
					<tr><td>
<?php
		if(isset( ${'tooth_'.$value} )) {
			if( ${'tooth_'.$value} == 'none' ) {
?> 
						<img src="<?php echo base_url(); ?>img/Toothchart/01.png" /> <?php } else if( ${'tooth_'.$value} <= 9) { ?>
						<img src="<?php echo base_url(); ?>img/Toothchart/0<?php echo ${'tooth_'.$value}; ?>.png"/><?php } else { ?>
						<img src="<?php echo base_url(); ?>img/Toothchart/<?php echo ${'tooth_'.$value}; ?>.png"/><?php } ?>
<?php
		} else {
?>
						<img src="<?php echo base_url(); ?>img/Toothchart/01.png" />
<?php
		}
?>
					</td></tr>
				</table>
			</td>
<?php
			}
?>
			</td>
		</tr>
	</table>