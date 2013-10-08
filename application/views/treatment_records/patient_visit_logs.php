<?php
	$this->db->select('*, patient_tooth_chart_extra.id, patient_tooth_chart.timestamp');
	$this->db->where('patient_tooth_chart.patient_id', $patient_id);
	$this->db->join('patient_tooth_chart_extra', 'patient_tooth_chart_extra.chart_id = patient_tooth_chart.id');
	$this->db->join('tooth_amount_charges', 'tooth_amount_charges.patient_tooth_chart_extra_id = patient_tooth_chart_extra.id', 'left');
	$this->db->where('patient_tooth_chart_extra.date_modified', 0);
	$this->db->order_by('patient_tooth_chart.id desc');
	$this->db->group_by('patient_tooth_chart_extra.id');

	$qchart = $this->db->get('patient_tooth_chart');

	// echo '<pre>';
	// print_r($qchart->result_array());
	// echo '</pre>';
?>

<?php
	$form_attrib = array(
		'id' => 'form_treatment_record',
		'name' => 'form_treatment_record',
		'onsubmit' => 'return false;'
	);
	echo form_open(null, $form_attrib);
?>

	<div class="container">
		<h1> Treatment Records </h1>
			
		<div class="table-responsive">
			<table class="table table-striped table-bordered">
				<thead>
					<tr>
						<th> Chart Name </th>
						<th> Tooth No./s </th>
						<th> Dx/Procedure </th>
						<th> Amount Charged </th>
						<th> Amount Paid </th>
						<th> Balance </th>
					</tr>
				</thead>
				<tbody>
<?php

	if($qchart->num_rows() > 0) {
		$rchart = $qchart->result_array();
		$i = 0;

		foreach($rchart as $chart_key=>$chart) {

			$this->db->where('chart_id', $chart['chart_id']);
			$this->db->where('patient_tooth_chart_extra.date_modified', 0);
			$count_chart = $this->db->get('patient_tooth_chart_extra');

			$i++;
?>
					<tr id="<?php echo $chart['chart_id']; ?>" class="get_chart_id">
<?php
					if($i == 1) {
?>
						<td rowspan="<?php echo $count_chart->num_rows(); ?>">
							<div class="form-control-static">
<?php
							echo $chart['chart_name'];
?>
							</div>
						</td>
<?php
					}
?>
						<td>
							<div class="form-control-static">
<?php
								echo $chart['tooth_num'];
?>
							</div>
						</td>
						<td>
							<div class="form-control-static">
<?php
			$procedure_array = array(
				'D' => 'Decayed (Caries Indicated for Filling)',
				'M' => 'Missing due to Caries',
				'F' => 'Filled',
				'I' => 'Caries Indicated for Extraction',
				'RF' => 'Root Fragment',
				'MO' => 'Missing due to Other Causes',
				'Im' => 'Impacted Tooth',
				'J' => 'Jacket Crown',
				'AM' => 'Amalgam Filling',
				'AB' => 'Abutment',
				'P' => 'Pontic',
				'In' => 'Inlay',
				'FX' => 'Fixed Cure Composite',
				'Rm' => 'Removable Denture',
				'X' => 'Extraction due to Caries',
				'XO' => 'Extraction due to Other Causes',
				'check' => 'Present Teeth',
				'Cm' => 'Congenitally Missing',
				'Sp' => 'Supernumerary'
			);
								echo $procedure_array[$chart['tooth_procedure']];
?>
							</div>
						</td>
						<td>
<?php
							
?>
							<div class="editable">
<?php
			if(isset($chart['amount_charged'])) {
				if($chart['amount_charged'] == 0) {
?>
								<input type="number" id="amtchg_<?php echo $chart['id']; ?>" class="amtchg edit_box form-control text-right input-sm" name="amount_charged[<?php echo $chart['id']; ?>]" />
<?php
				} else {
?>
								<div class="form-control-static text-right">
									<span class="pull-left">&#8369; </span>
									<span class="price"><?php echo number_format($chart['amount_charged'],2); ?></span>
								</div>
<?php
				}
			} else {
?>
								<input type="number" id="amtchg_<?php echo $chart['id']; ?>" class="amtchg edit_box form-control text-right input-sm" name="amount_charged[<?php echo $chart['id']; ?>]" />
<?php
			}
?>			
							</div>

							
							<!-- <button type="button" class="btn btn-default btn-sm"> Add Amount </button> -->
						</td>
<?php
					if($i == 1) {
?>
						<td rowspan="<?php echo $count_chart->num_rows(); ?>">
							<div class="editable">
								<div class="form-control-static text-right">
									<div class="price">
										<span class="pull-left">&#8369; </span>
<?php
								$this->db->where('patient_tooth_chart_id', $chart['chart_id']);
								$qtap = $this->db->get('tooth_amount_paid');
								if($qtap->num_rows() > 0) {
?>
<?php
									$rtap = $qtap->result_array();
									foreach($rtap as $key=>$tap) {
?>
										<div><?php echo number_format($tap['amount_paid'],2); ?></div>
<?php
									}
								}
?>
									</div>
								</div>
<?php

							$this->db->select_sum('amount_charged');
							$this->db->join('patient_tooth_chart_extra', 'patient_tooth_chart_extra.id = tooth_amount_charges.patient_tooth_chart_extra_id');
							$this->db->where('patient_tooth_chart_extra.chart_id', $chart['chart_id']);
							$qtac = $this->db->get('tooth_amount_charges');
							$rtac = $qtac->row_array();

							$this->db->select_sum('amount_paid');
							$this->db->where('patient_tooth_chart_id', $chart['chart_id']);
							$qtap = $this->db->get('tooth_amount_paid');
							$rtap = $qtap->row_array();

							if($rtap['amount_paid'] < $rtac['amount_charged']) {
?>
								<input type="text" id="amtpd_<?php echo $chart['id']; ?>" class="amtpd form-control text-right input-sm" name="amount_paid[<?php echo $chart['chart_id']; ?>]" />
<?php
							}
?>
							</div>
						</td>

						<td rowspan="<?php echo $count_chart->num_rows(); ?>">
							<div class="form-control-static text-right">
<?php
							$total = $rtac['amount_charged'] - $rtap['amount_paid'];
?>
								<span class="pull-left">&#8369; </span>
								<span id="balance_<?php echo $chart['chart_id']; ?>"><?php echo isset($total) ? number_format($total,2) : '0.00'; ?></span>
							</div>
						</td>
<?php
					}
?>
					</tr>
<?php
			if($i == $count_chart->num_rows()) {
				$i = 0;
			}
		}

	} else {
?>
					<tr>
						<td colspan="6" align="center"> No Treatment Record to display </td>
					</tr>
<?php
		}
?>
				</tbody>

			</table>
		</div>

	</div>

</form>


