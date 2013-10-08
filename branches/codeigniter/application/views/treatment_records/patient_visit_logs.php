<?php
	$this->db->where('patient_tooth_chart.patient_id', $patient_id);
	$this->db->order_by('patient_tooth_chart.timestamp desc');
	$this->db->join('patient_tooth_chart_extra', 'patient_tooth_chart_extra.chart_id = patient_tooth_chart.id');
	$qchart = $this->db->get('patient_tooth_chart');

	echo '<pre>';
	print_r($qchart->result_array());
	exit();
?>

<?php
	$form_attrib = array(
		'id' => 'form_treatment_record',
		'name' => 'form_treatment_record'
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

		foreach($rchart as $chart) {

			$this->db->where('chart_id', $chart['id']);
			$this->db->where('date_modified', 0);
			$qtooth = $this->db->get('patient_tooth_chart_extra');

			if($qtooth->num_rows() > 0) {
				$rtooth = $qtooth->result_array();

				foreach($rtooth as $tooth_key=>$tooth) {
?>
					<tr>
<?php
					if($tooth_key==0) {
?>
						<td rowspan="<?php echo $qtooth->num_rows(); ?>">
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
								echo $tooth['tooth_num'];
?>
							</div>
						</td>
						<td>
							<div class="form-control-static">
<?php
								echo $tooth['tooth_procedure'];
?>
							</div>
						</td>
						<td>
<?php
							
?>
							<div class="editable">
<?php
			$this->db->where('patient_tooth_chart_extra_id', $tooth['id']);
			$qtac = $this->db->get('tooth_amount_charges');
			if($qtac->num_rows() > 0) {
				$rtac = $qtac->row_array();

				if($rtac['amount_charged'] == 0) {
?>
								<input type="number" id="amtchg_<?php echo $tooth['id']; ?>" class="amtchg edit_box form-control text-right input-sm" name="amount_charged[<?php echo $tooth['id']; ?>]" />
<?php
				} else {
?>
								<div class="form-control-static text-right">
									<span class="pull-left">&#8369; </span>
									<span class="price"><?php echo number_format($rtac['amount_charged'],2); ?></span>
								</div>
<?php
				}
			} else {
?>
								<input type="number" id="amtchg_<?php echo $tooth['id']; ?>" class="amtchg edit_box form-control text-right input-sm" name="amount_charged[<?php echo $tooth['id']; ?>]" />
<?php
			}
?>			
							</div>

							
							<!-- <button type="button" class="btn btn-default btn-sm"> Add Amount </button> -->
						</td>
<?php
					if($tooth_key==0) {
?>
						<td rowspan="<?php echo $qtooth->num_rows(); ?>">
							<div class="editable">
								<div class="form-control-static text-right">
									<span class="pull-left">&#8369; </span>

<?php
							$this->db->where('patient_tooth_chart_id', $chart['id']);
							$qtap = $this->db->get('tooth_amount_paid');
							if($qtap->num_rows() > 0) {
?>
									<div class="price">
<?php
								$rtap = $qtap->result_array();
								foreach($rtap as $key=>$tap) {
?>
									<div><?php echo number_format($tap['amount_paid'],2); ?></div>
<?php
								}
?>
									</div>
<?php
							}

							$this->db->select_sum('amount_charged');
							$this->db->join('patient_tooth_chart_extra', 'patient_tooth_chart_extra.id = tooth_amount_charges.patient_tooth_chart_extra_id');
							$this->db->where('patient_tooth_chart_extra.chart_id', $chart['id']);
							$qtac = $this->db->get('tooth_amount_charges');
							$rtac = $qtac->row_array();

							$this->db->select_sum('amount_paid');
							$this->db->where('patient_tooth_chart_id', $chart['id']);
							$qtap = $this->db->get('tooth_amount_paid');
							$rtap = $qtap->row_array();

							if($rtap['amount_paid'] < $rtac['amount_charged']) {
?>
									<input type="text" id="amtpd_<?php echo $tooth['id']; ?>" class="amtpd form-control text-right input-sm" name="amount_paid[<?php echo $chart['id']; ?>]" />
<?php
							}
?>
								</div>
							</div>
						</td>

						<td rowspan="<?php echo $qtooth->num_rows(); ?>">
							<div class="form-control-static text-right">
<?php
							$total = $rtac['amount_charged'] - $rtap['amount_paid'];
?>
								<span class="pull-left">&#8369; </span>
								<span id="balance_<?php echo $chart['id']; ?>"><?php echo isset($total) ? number_format($total,2) : '0.00'; ?></span>
							</div>
						</td>
<?php
					}
?>
					</tr>
<?php
				}
			}
		}

	}
		if(!isset($qtooth) || $qtooth->num_rows() == 0) {
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


