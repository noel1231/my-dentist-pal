<table><tr>
<?php
	$set5 = array (
		55, 54, 53, 52, 51
	);
	foreach($set5 as $x) {
?>
	<td>
		<table class="tooth">
			<tr><td style="font-size:10px;width:30px;text-align:center;">
<?php 
		if( isset( ${'legend_'.$x} ) && ${'legend_'.$x} != "none") {
			echo ${'legend_'.$x};
		} else {
			echo "&nbsp;";	
		}
?>
			</td></tr>
			<tr><td style="text-align:center;" class="tooth_num"><?php echo $x; ?></td></tr>
			<tr><td>  
<?php if( isset(${'tooth_'.$x}) == 0 ) { ?> 
				<img id="tooth_<?php echo $x; ?>" src="<?php echo base_url(); ?>img/Toothchart/01.png" />
<?php } else { ?>
				<img id="tooth_<?php echo $x; ?>" src="<?php echo base_url(); ?>img/Toothchart/<?php echo str_pad( ${'tooth_'.$x}, 2, 0, STR_PAD_LEFT); ?>.png"/>
<?php } ?>
			</td></tr>
		</table>
	</td>		
<?php
	}
?>
</tr></table>