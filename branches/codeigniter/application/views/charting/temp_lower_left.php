<table><tr>
<?php
	$set7 = array (
		71, 72, 73, 74, 75
	);
	foreach($set7 as $value) {

?>
	<td>
		<table class="<?php echo $new_chart == 0 ? '' : 'tooth'; ?>" id="<?php echo 'ptc_'.$value; ?>" >
			<tr><td>  
<?php if( isset(${'tooth_'.$value}) == 0 ) { ?> 
				<img id="tooth_<?php echo $value; ?>" src="<?php echo base_url(); ?>img/Toothchart/01.png" />
<?php } else { ?>
				<img id="tooth_<?php echo $value; ?>" src="<?php echo base_url(); ?>img/Toothchart/<?php echo str_pad( ${'tooth_'.$value}, 2, 0, STR_PAD_LEFT); ?>.png"/>
<?php } ?>
			</td></tr>
			<tr><td style="text-align:center;" class="tooth_num"><?php echo $value; ?></td></tr>
			<tr><td id="<?php echo 'legend_'.$value; ?>" class="tooth_legend">
<?php 
		if( isset( ${'legend_'.$value} ) && ${'legend_'.$value} != "none") {
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
</tr></table>