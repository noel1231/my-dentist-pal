<?php
	extract($patient_query->row_array());

	$this->db->select('*, patient_tooth_chart.chart_name as chart_name');
	$this->db->where('patient_tooth_chart.patient_id', $patient_id);
	$this->db->from('patient_tooth_chart');
	$this->db->order_by('patient_tooth_chart.date_chart desc, patient_tooth_chart.id desc');

	$sql = $this->db->get();

	if(!$chart_id = $this->input->post('chart_id')) {
		if($sql->num_rows() > 0 ) {
			$rchart = $sql->row_array(0);
			$chart_id = $rchart['id'];
		}
	}
	
?>
<form id="patient_tooth_add" name="patient_tooth_add" method="post" onsubmit="return false">

<div class="container">

	<div class="row">
		<div class="col-lg-4">
			<h2> Charting </h2>
		</div>
		<div class="col-md-2 pull-right text-right hide">
			<input type="button" onclick="divPrint();" name="print" value="PRINT" class="btn btn-default submit" />
		</div>
	</div>
	
	<div class="row" style="margin-bottom:15px;">
		<div class="col-lg-12 col-md-12 col-sm-12">
			<div style="font-size: 16px;">Date Today: <?php echo date('M. d, Y', time()); ?> </div>
			<div id="chart_name" style="font-size: 16px;">Chart name: <?php echo $chart_id ? $rchart['chart_name'] : 'Chart '. date('Y-m-d', time()); ?> </div>
		</div>
	</div>

	<div class="row">

			<div class="col-md-2 col-sm-2 col-md-offset-6 col-sm-offset-6" style="text-align:right;">
				<input type="hidden" name="id" value="<?php echo $patient_id;?>" />
				<button type="button" name="new" class="btn btn-primary" value="add_chart" data-toggle="modal" data-target="#modal_add_chart"> Add Chart </button>
			</div>
			<div class="col-md-4 col-sm-4">
				<select id="select_chart" name="chart" class="form-control" >
					<option value="0"> Select Chart... </option>
<?php
				if($sql->num_rows() > 0) {
					foreach($sql->result_array() as $key=>$row) {
						$idx=$row['id'];
						$name=$row['chart_name'];
						echo '<option id="chart_'.$idx.'" class="charts_option" value="'.$idx.'" '.($key==0 ? 'selected': '').'> '.$name.' </option>';
					}
				}
?>
				</select>
			</div>

	</div>

	<div>

		<div id="chart_container" style="padding-top: 20px">
<?php
		// if($this->input->get('key') && $this->input->get('key') !== 'none') {
			$data_tooth_chart_patient = $this->charting->load_chart($chart_id, $patient_id);

			$this->load->view('charting/tooth_chart_patient', $data_tooth_chart_patient);
		// }
?>
		</div>
	</div>

	<div class="container" style="margin-top: 15px;">
		<!--legend box-->
		<div class="row">
			<div class="lead" style="text-transform: uppercase;"> Legend </div>
		</div>
		<div class="row">
			<div class="col-md-4 col-sm-4">
				<ul class="list-unstyled"> Condition
					<li> D - Decayed (Caries Indicated for Filling) </li>
					<li> M - Missing due to Caries </li>
					<li> F - Filled </li>
					<li> I - Caries Indicated for Extraction </li>
					<li> RF - Root Fragment </li>
					<li> MO - Missing due to Other Causes </li>
					<li> Im - Impacted Tooth </li>
				</ul>
			</div>
			<div class="col-md-4 col-sm-4">
				<ul class="list-unstyled"> Restoration &amp; Prosthetics
					<li> J - Jacket Crown </li>
					<li> AM - Amalgam Filling </li>
					<li> AB - Abutment </li>
					<li> P - Pontic </li>
					<li> In - Inlay </li>
					<li> FX - Fixed Cure Composite </li>
					<li> Rm - Removable Denture </li>
				</ul>
			</div>
			<div class="col-md-4 col-sm-4">
				<ul class="list-unstyled"> Surgery
					<li> X - Extraction due to Caries </li>
					<li> XO - Extraction due to Other Causes </li>
					<li> &#10003; - Present Teeth </li>
					<li> Cm - Congenitally Missing </li>
					<li> Sp - Supernumerary </li>
				</ul>
			</div>
		</div>
		<!--legend box-->
	</div>

<?php
	if(isset($rchart['chart_info'])) {
		$chart_info = json_decode($rchart['chart_info'], true);
	}
?>

	<div class="row">
		<div class="col-md-3 col-sm-3">
			Periodical Screening:
<?php
		$periodical_screening_array = array('gingivitis', 'early_periodontics', 'moderate_periodontics', 'advanced_periodontics');
		foreach($periodical_screening_array as $value) {
?>
			<div class="checkbox">
			  <label>
				<input type="checkbox" name="periodical_screening[<?php echo $value; ?>]" value="true" <?php echo isset($chart_info['periodical_screening'][$value]) ? 'checked="checked"' : ''; ?>>
				<?php echo ucfirst(str_replace('_', ' ',  $value)); ?>
			  </label>
			</div>
<?php
		}
?>
		</div>
		<div class="col-md-3 col-sm-3">
			Occlusion:
<?php
		$occlusion_array = array('class_molar', 'overjet', 'overbite', 'midline_deviation', 'crossbite');
		foreach($occlusion_array as $value) {
?>
			<div class="checkbox">
			  <label>
				<input type="checkbox" name="periodical_screening[<?php echo $value; ?>]" value="true" <?php echo isset($chart_info['periodical_screening'][$value]) ? 'checked="checked"' : ''; ?>>
				<?php echo ucfirst(str_replace('_', ' ',  $value)); ?>
			  </label>
			</div>
<?php
		}
?>
		</div>
		<div class="col-md-3 col-sm-3">
			Appliances:
<?php
		$appliances_array = array('orthodontic', 'stayplate');
		foreach($appliances_array as $value) {
?>
			<div class="checkbox">
			  <label>
				<input type="checkbox" name="periodical_screening[<?php echo $value; ?>]" value="true" <?php echo isset($chart_info['periodical_screening'][$value]) ? 'checked="checked"' : ''; ?>>
				<?php echo ucfirst(str_replace('_', ' ',  $value)); ?>
			  </label>
			</div>
<?php
		}
?>
			<input type="text" class="form-control" id="other_appliances" placeholder="Other" name="appliances[others]" value="<?php echo isset($chart_info['appliances']['others']) ? $chart_info['appliances']['others'] : ''; ?>">
		</div>
		<div class="col-md-3 col-sm-3">
			TMD:
<?php
		$tmd_array = array('clenching', 'clicking', 'trismus', 'muscle_spasm');
		foreach($tmd_array as $value) {
?>
			<div class="checkbox">
			  <label>
				<input type="checkbox" name="periodical_screening[<?php echo $value; ?>]" value="true" <?php echo isset($chart_info['periodical_screening'][$value]) ? 'checked="checked"' : ''; ?>>
				<?php echo ucfirst(str_replace('_', ' ',  $value)); ?>
			  </label>
			</div>
<?php
		}
?>
		</div>
	</div>

	<div class="row">
		<div class="col-md-6 col-sm-6">
			<table class="table table-bordered" style="font-family:Arial, Helvetica, sans-serif; font-size:13px; font-weight:bold; color:#97999b;">
				<thead>
					<tr>
						<td colspan="2"> Chart List </td>
					</tr>
				</thead>
<?php
			$i=0;
			if($sql->num_rows() > 0) {
				$result = $sql->result_array();
				foreach($result as $row) {
					$chart_remarks = $row['chart_remarks'];
					$i++;
					$f=$i%2;
					if($f==0)
					{ $back="#FFF";} 
					else
					{ $back="#e0eefa";}
?>
			<tr style="background-color: <?php echo $back;?>; font-size:14px;">
			<td style="padding-top: 6px; padding-bottom: 6px; text-align: left; padding-left: 10px;">
			<!--BOS005--><?php echo $row['chart_name'];?>
			</td>
			<td style="padding-top: 6px; padding-bottom: 6px; text-align:center;">
			<?php echo $row['date_chart'];?></td>

<?php
				}
			}
?>
			</tr></table>
		</div>

		<div class="col-md-6 col-sm-6">
			<div style="font-family:Arial, Helvetica, sans-serif;font-size:13px;font-weight:bold;color:#5f6060;border-top: 1px solid #ddd;border-left: 1px solid #ddd;border-right: 1px solid #ddd;">Remarks</div>
			<div style=""><!--<input type="submit" name="save_rem" value="Save Remarks" class="submit2" style="margin-top:-5px;" onclick="return onSave();"/>--></div>
			<div>
				<textarea rows="4" class="col-sm-12 col-md-12" id="chart_remarks" name="remarks" style="font-size:15px;font-family:Arial, Helvetica, sans-serif;" disabled="disabled">
<?php 				echo isset($rchart['chart_remarks']) ? $rchart['chart_remarks']: '';?>
				</textarea>
			</div>
		</div>

	</div>

	<div class="row" style="margin-top:15px;margin-bottom:15px;">

			<input type="hidden" class="form-control" id="patient_id" name="patient_id" value="<?php echo $this->input->get('id'); ?>">
			<input type="hidden" class="form-control" id="dentist_id" name="dentist_id" value="<?php echo $this->session->userdata('id'); ?>">
			<div id="tooth_dialog" title="Chart Shade">
				<?php echo $this->load->view('charting/tooth/table_first_tooth'); ?>
			</div>
			<div>
				<input type="hidden" id="what_picture">
				<input type="hidden" id="what_number">
				<input type="hidden" id="what_legend">
				<input type="hidden" id="what_hide">
				<input type="hidden" id="what_tooth_number">
			</div>
			<div>
				<input type="hidden" name="tooth_num">
				<input type="hidden" name="pic_num">
				<input type="hidden" name="legend">
			</div>
			
<?php /*
	$adult_array = array(11,12,13,14,15,16,17,18,21,22,23,24,25,26,27,28,31,32,33,34,35,36,37,38,41,42,43,44,45,46,47,48);
	foreach($adult_array as $adult) {
?>
		<input id="pic<?php echo $adult; ?>" type="hidden" name="pic<?php echo $adult; ?>" >
		<input id="leg_<?php echo $adult; ?>" type="hidden" name="leg_<?php echo $adult; ?>" >
		<input id="adult_<?php echo $adult; ?>" type="hidden" name="adult_<?php echo $adult; ?>" >
<?php
	};
	$child_array = array(51,52,53,54,55,61,62,63,64,65,71,72,73,74,75,81,82,83,84,85);
	foreach($child_array as $child) {
?>
	
<?php
	}; */
?>
		<div class="col-md-3 pull-right text-right">
			<button class="btn btn-primary pull-right" type="submit" name="action" value="save"> SAVE </button>
		</div>
	</div>



</div>
</form>

<!-- modals -->
<div id="modal_add_chart" class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
  <div class="modal-content">
<?php
	$form_attrib = array(
		'method' => 'post',
		'role' => 'form',
		'class' => 'form-horizontal',
		'id' => 'form_add_chart',
		'name' => 'form_add_chart'
	);
	echo form_open('', $form_attrib);
?>
	<div class="modal-header">
	  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	  <h4 class="modal-title"> Add New Chart </h4>
	</div>
	<div class="modal-body">
	  <div class="form-group">
		<label for="inputChartName" class="col-lg-3 col-md-3 control-label"> Chart Name: </label>
		<div class="col-lg-9 col-md-9">
			<input type="hidden" name="new_chart" value="<?php echo $new_chart; ?>">
			<input type="hidden" name="patient_id" value="<?php echo $patient_id;?>" />
			<input type="hidden" name="dentist_id" value="<?php echo $dentist_id;?>" />
			<input type="text" class="form-control" name="chart_name" id="inputChartName" placeholder="Chart Name">
		</div>
	  </div>
	</div>
	<div class="modal-footer">
	  <button type="button" class="btn btn-default" data-dismiss="modal"> Close </button>
	  <button type="submit" class="btn btn-primary" name="submit" value="chart"> Save </button>
	</div>
<?php echo form_close(); ?>
  </div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<script type="text/javascript">

function Refresh(key,id) {
	window.location="<?php echo current_url(); ?>?id="+id+"&key="+key;
}

function onSave()
{
	if(confirm('Do you want to save changes ?')==true)
	{
		return true;
	}
	else
	{
		return false;
	}
}  

function divPrint()
{
	var display_setting="toolbar=yes,location=no,directories=yes,menubar=yes,";
	display_setting+="scrollbars=yes,width=750, height=600, left=100, top=25";

	var content_innerhtml = document.getElementById("print_it").innerHTML;
	var document_print=window.open("","",display_setting);
	document_print.document.open();
	document_print.document.write('<html><head><title>Print Patient Tooth Chart </title></head>');
	document_print.document.write('<body style="font-family:verdana; font-size:12px;" onLoad="self.print();self.close();" >');
	document_print.document.write(content_innerhtml);
	document_print.document.write('</body></html>');
	document_print.print();
	document_print.document.close();
	return false;
}
</script>  
