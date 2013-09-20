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