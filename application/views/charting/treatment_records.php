<?php
	$qtooth_chart = $this->db->get('patient_tooth_chart_extra');
	$rtooth_chart = $qtooth_chart->result_array();

	print_r($rtooth_chart);

?>