	<table><tr>
	<?php
	if($new_chart == 0) {
		$set3 = array(
			'41' => '31',
			'42' => '32',
			'43' => '33',
			'44' => '34',
			'45' => '35',
			'46' => '36',
			'47' => '37',
			'48' => '38'
		);
	} else {
		$set3 = array(
			31=>31,32=>32,33=>33,34=>34,35=>35,36=>36,37=>37,38=>38
		);
	}
		foreach($set3 as $key=>$value) {
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
		<table class="<?php echo $new_chart == 0 ? '' : 'tooth'; ?>" id="<?php echo 'ptc_'.$value; ?>" data-id="<?php echo isset($ptce_id) ? $ptce_id : 0; ?>">
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
			<tr><td id="<?php echo 'legend_'.$key; ?>" class="tooth_legend">
				<?php
	if(isset( ${'legend_'.$key} )) {
				if(( ${'legend_'.$key} != "none" )&&( ${'legend_'.$key}!="" )) {
					echo ${'legend_'.$key}; }
				else if(${'legend_'.$key}=="") {
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