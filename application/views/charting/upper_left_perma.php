	<table cellpadding="0" cellspacing="0" border="0">
		<tr>
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
		</tr>
	</table>