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
		</tr>
	</table>