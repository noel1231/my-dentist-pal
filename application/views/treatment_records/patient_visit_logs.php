<?php
	$this->db->where('patient_id', $patient_id);
	$this->db->order_by('timestamp desc');
	$qchart = $this->db->get('patient_tooth_chart');
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
								<input type="text" id="amtchg_<?php echo $tooth['id']; ?>" class="amtchg edit_box form-control text-right input-sm" />
								<div class="form-control-static">
									P 100
								</div>
							</div>

							
							<!-- <button type="button" class="btn btn-default btn-sm"> Add Amount </button> -->
						</td>
							<div class="form-control-static">
<?php
					if($tooth_key==0) {
?>
						<td rowspan="<?php echo $qtooth->num_rows(); ?>">
<?php

?>

								<input type="text" id="amtpd_<?php echo $tooth['id']; ?>" class="amtpd form-control text-right" />
							</div>
						</td>
						<td rowspan="<?php echo $qtooth->num_rows(); ?>">
							<div class="form-control-static">
<?php
?>
							&#8369; 0.00
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
