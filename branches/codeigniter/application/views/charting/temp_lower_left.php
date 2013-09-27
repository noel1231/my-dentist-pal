<table><tr>
<?php
	$set7 = array (
		71, 72, 73, 74, 75
	);
	foreach($set7 as $x) {
?>
	<td>
		<table class="<?php echo isset(${'tooth_'.$x}) ? '' : 'tooth'; ?>">
			<tr><td>  
<?php if( isset(${'tooth_'.$x}) == 0 ) { ?> 
				<img id="tooth_<?php echo $x; ?>" src="<?php echo base_url(); ?>img/Toothchart/01.png" />
<?php } else { ?>
				<img id="tooth_<?php echo $x; ?>" src="<?php echo base_url(); ?>img/Toothchart/<?php echo str_pad( ${'tooth_'.$x}, 2, 0, STR_PAD_LEFT); ?>.png"/>
<?php } ?>
			</td></tr>
			<tr><td style="text-align:center;" class="tooth_num"><?php echo $x; ?></td></tr>
			<tr><td id="<?php echo 'legend_'.$x; ?>" class="tooth_legend">
<?php 
		if( isset( ${'legend_'.$x} ) && ${'legend_'.$x} != "none") {
			echo ${'legend_'.$x};
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
</tr></table>