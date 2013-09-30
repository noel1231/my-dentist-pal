<?php
	$this->db->where('patient_id', $this->input->get('id'));
	$qtooth_chart = $this->db->get('patient_tooth_chart_extra');
	$rtooth_chart = $qtooth_chart->result_array();

	

?>
	<div class="container">
		<h1> Treatment Records </h1>
			
		<div class="table-responsive">
			<table class="table table-striped table-bordered">
				<thead>
					<tr>
						<th>Date</th>
						<th>Tooth No./s</th>
						<th>Dx/Procedure</th>
						<th>Amount Charged</th>
						<th>Amount Paid</th>
						<th>Balance</th>
					</tr>
				</thead>
				<tbody>
<?php
	if($qtooth_chart->num_rows() > 0) {
		foreach($rtooth_chart as $key=>$value) {
?>
					<tr>
						<td>
<?php
							echo $value['date_procedure'];
?>
						</td>
						<td>
<?php
							echo $value['tooth_num'];
?>
						</td>
						<td>
<?php
							echo $value['tooth_procedure'];
?>

						</td>
						<td>
<?php
							
?>
							<button class="btn btn-default">Add Amount</button>
						</td>
						<td>
<?php

?>
							<button class="btn btn-default">Add Amount</button>
						</td>
						<td>
<?php
?>
							&#8369; 0.00
						</td>
					</tr>
<?php
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
	
