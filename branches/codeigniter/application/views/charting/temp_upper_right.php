<table><tr>
<?php
	$set5 = array (
		55, 54, 53, 52, 51
	);
	foreach($set5 as $value) {
				if(isset(${'tooth_'.$value})) {
					$this->db->where('chart_id', $chart_id);
					$this->db->where('tooth_num', $value);
					$qptce = $this->db->get('patient_tooth_chart_extra');
					if($qptce->num_rows() > 0) {
						$rptce = $qptce->row_array();
						$ptce_id = $rptce['id'];
					}
				}
?>
	<td>
		<table class="<?php echo $new_chart == 0 ? '' : 'tooth'; ?>"  id="<?php echo 'ptc_'.$value; ?>" data-id="<?php echo isset($ptce_id) ? $ptce_id : 0; ?>">
			<tr><td id="<?php echo 'legend_'.$value; ?>" class="tooth_legend">
<?php 
		if( isset( ${'legend_'.$value} ) && ${'legend_'.$value} != "none") {
			echo ${'legend_'.$value};
		} else {
			echo "&nbsp;";	
		}
?>
			</td></tr>
			<tr><td style="text-align:center;" class="tooth_num"><?php echo $value; ?></td></tr>
			<tr><td>  
<?php if( isset(${'tooth_'.$value}) == 0 ) { ?> 
				<img id="tooth_<?php echo $value; ?>" src="<?php echo base_url(); ?>img/Toothchart/01.png" />
<?php } else { ?>
				<img id="tooth_<?php echo $value; ?>" src="<?php echo base_url(); ?>img/Toothchart/<?php echo str_pad( ${'tooth_'.$value}, 2, 0, STR_PAD_LEFT); ?>.png"/>
<?php } ?>
			</td></tr>
		</table>
	</td>		
<?php
	}
?>
</tr></table>