	<table><tr>
	<?php
/*
		$set3 = array(
			'31' => '41',
			'32' => '42',
			'33' => '43',
			'34' => '44',
			'35' => '45',
			'36' => '46',
			'37' => '47',
			'38' => '48'
		);
*/
		$set3 = array(
			31,32,33,34,35,36,37,38
		);
		foreach($set3 as $key=>$value) {
	?>
	<td>
		<table class="<?php echo isset(${'tooth_'.$value}) ? '' : 'tooth'; ?>">
			<tr><td>
			<?php
	if(isset( ${'tooth_'.$value} )) {
		if( ${'tooth_'.$value} =="none") { ?>
				<img id="tooth_<?php echo $value; ?>" src="<?php echo base_url(); ?>img/Toothchart/01.png" />
<?php
		} else {
?>
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
			<tr><td style="text-align:center;" class="tooth_num"><?php echo $value; ?></td></tr>
			<tr><td class="tooth_legend">
				<?php
	if(isset( ${'legend_'.$value} )) {
				if(( ${'legend_'.$value} != "none" )&&( ${'legend_'.$value}!="" )) {
					echo ${'legend_'.$value}; }
				else if(${'legend_'.$value}=="") {
					echo "&nbsp;";	
				}
				else {
					echo "&nbsp;";	
				}
	}
				?>
			</td></tr>
		</table>
	</td>
	<?php
		}
	?>
	</tr></table>