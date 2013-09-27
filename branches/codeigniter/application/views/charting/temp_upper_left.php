<table><tr>
<?php
	$set6 = array (
		61, 62, 63, 64, 65
	);
	foreach($set6 as $x) {
?>
	<td>
		<table class="<?php echo isset(${'tooth_'.$x}) ? '' : 'tooth'; ?>">
			<tr><td id="<?php echo 'legend_'.$x; ?>" class="tooth_legend">
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