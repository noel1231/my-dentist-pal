<table><tr>
<?php
	$set5 = array (
		55, 54, 53, 52, 51
	);
	foreach($set5 as $x) {
?>
	<td>
		<table cellpadding="0" cellspacing="0" border="0" width="30">
			<tr><td style="font-size:10px;width:30px;text-align:center;">
<?php 
		if( isset( ${'legend_'.$x} ) && ${'legend_'.$x} != "none") {
			echo ${'legend_'.$x};
		} else {
			echo "&nbsp;";	
		}
?>
			</td></tr>
			<tr><td style="text-align:center;"><?php echo $x; ?></td></tr>
			<tr><td>  
<?php if( isset(${'tooth_'.$x}) == 0 ) { ?> 
				<img src="<?php echo base_url(); ?>img/Toothchart/01.png" />
<?php } else if( ${'tooth_'.$x} <= 9 ) { ?>
				<img src="<?php echo base_url(); ?>img/Toothchart/0<?php echo ${'tooth_'.$x};?>.png"/>
<?php } else { ?>
				<img src="<?php echo base_url(); ?>img/Toothchart/<?php echo ${'tooth_'.$x};?>.png"/>
<?php } ?>
			</td></tr>
		</table>
	</td>		
<?php
	}
?>
</tr></table>