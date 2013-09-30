<?php
	extract($patient_query->row_array());

	if($new_chart === 1) {
		$name_select = 'chart_id';
		$this->db->where('patient_id', $patient_id);
		$this->db->order_by('date_chart DESC, timestamp DESC');
		$sql = $this->db->get('patient_tooth_chart');
	} else {
		if($what_chart === '1') {
			$name_select = 'adult';
			$sql=$this->db->query("SELECT * FROM patient_tooth_chart_extra_adult WHERE patient_id='".$patient_id."' ORDER BY `date_chart` DESC");
		} else if($what_chart === '2') {
			$name_select = 'child';
			$sql=$this->db->query("SELECT * FROM patient_tooth_chart_extra_child WHERE patient_id='".$patient_id."' ORDER BY `date_chart` DESC");
		}
	}

	if(!$chart_id = $this->input->post('chart_id')) {
		if($sql->num_rows() > 0) {
			$rchart = $sql->row_array(0);
			$chart_id = $rchart['id'];
		}
	}
	
?>
<form id="patient_tooth_add" name="patient_tooth_add" method="post">

<div class="container">

	<div class="row">
		<div class="col-lg-4">
			<h2> Charting </h2>
		</div>
		<div class="pull-right">
			<input type="button" onclick="divPrint();" name="print" value="PRINT" class="btn btn-default submit" />
		</div>
	</div>
	
	<div class="row">
		<div class="col-lg-6">
			<div id="chart_name" style="font-size: 16px;"> <?php echo $chart_id ? $rchart['chart_name'] : 'Chart '. date('Y-m-d', time()); ?> </div>
		</div>
	</div>

	<div class="row">

			<div class="col-lg-2">
				<input type="hidden" name="id" value="<?php echo $patient_id;?>" />
				<button type="button" name="new" class="btn btn-primary" value="add_chart" data-toggle="modal" data-target="#modal_add_chart"> Add Chart </button>
			</div>
			<div class="col-lg-4">
				<select id="select_chart" name="chart" class="form-control" >
<?php
				if($sql->num_rows() > 0) {
					foreach($sql->result_array() as $key=>$row) {
						$idx=$row['id'];
						$name=$row['chart_name'];
						echo '<option id="chart_'.$idx.'" class="charts_option" value="'.$idx.'" '.($key==0 ? 'selected': '').'> '.$name.' </option>';
					}
				} else {
?>
					<option value="0">--Select one--</option>
<?php
				}
?>
				</select>
			</div>


			<div class="pull-right" style="font-weight:bold; color:#373838; font-size:12px;">
				<?php echo date('Y-m-d');?>
			</div>

	</div>

	<div>

		<div id="chart_container">
<?php
		// if($this->input->get('key') && $this->input->get('key') !== 'none') {
			$data_tooth_chart_patient = $this->charting->load_chart($chart_id, $dentist_id, $patient_id, $new_chart);

			$this->load->view('charting/tooth_chart_patient', $data_tooth_chart_patient);
		// }
?>
		</div>
	</div>

	<div class="row">
		<!--legend box-->
		<ul class="list-inline">
			<li>
				<ul class="list-unstyled"> Condition
					<li> D - Decayed (Caries Indicated for Filling) </li>
					<li> M - Missing due to Caries </li>
					<li> F - Filled </li>
					<li> I - Caries Indicated for Extraction </li>
					<li> RF - Root Fragment </li>
					<li> MO - Missing due to Other Causes </li>
					<li> Im - Impacted Tooth </li>
				</ul>
			</li>
			<li>
				<ul class="list-unstyled"> Restoration &amp; Prosthetics
					<li> J - Jacket Crown </li>
					<li> AM - Amalgam Filling </li>
					<li> AB - Abutment </li>
					<li> P - Pontic </li>
					<li> In - Inlay </li>
					<li> FX - Fixed Cure Composite </li>
					<li> Rm - Removable Denture </li>
				</ul>
			</li>
			<li>
				<ul class="list-unstyled"> Surgery
					<li> X - Extraction due to Caries </li>
					<li> XO - Extraction due to Other Causes </li>
					<li> check - Present Teeth </li>
					<li> Cm - Congenitally Missing </li>
					<li> Sp - Supernumerary </li>
				</ul>
			</li>
		</ul>
		<!--legend box-->
	</div>

	<div class="row">
			<table border="0" cellpadding="0" cellspacing="0" style="font-family:Arial, Helvetica, sans-serif;font-size:13px;font-weight:bold;color:#97999b;border:1px solid #CCC;">
<?php
			$i=0;
			if($what_chart==1) {
				$this->db->where('patient_id', $patient_id);
				$this->db->order_by('date_chart desc');
				$this->db->limit(5);
				$res = $this->db->get('patient_tooth_chart_extra_adult');
			} else if($what_chart==2) {
				$this->db->where('patient_id', $patient_id);
				$this->db->order_by('date_chart desc');
				$this->db->limit(5);
				$res = $this->db->get('patient_tooth_chart_extra_child');
			} else {
				$this->db->where('patient_id', $patient_id);
				$this->db->limit(5);
				$res = $this->db->get('patient_tooth_chart_extra');
			}

			if($res->num_rows() > 0) {
				$result = $res->result_array();
				foreach($result as $row) {
					$chart_remarks = $row['chart_remarks'];
					$i++;
					$f=$i%2;
					if($f==0)
					{ $back="#FFF";} 
					else
					{ $back="#e0eefa";}
?>
			<tr style="background-color:<?php echo $back;?>;font-size:14px;">
			<td style="width:110px;padding-top:6px;padding-bottom:6px;text-align:left;padding-left:10px;">
			<!--BOS005--><?php echo $row['chart_name'];?>
			</td>
			<td style="width:129px;padding-top:6px;padding-bottom:6px;text-align:center;">
			<?php echo $row['date_chart'];?></td>

<?php
				}
			}
?>
			</tr></table>		
	</div>

	<div class="row">

		<div style="float:left;width:340px;padding-top:24px;">
		<div style="float:left;font-family:Arial, Helvetica, sans-serif;font-size:13px;font-weight:bold;color:#5f6060;">Remarks</div>
		<div style="float:right;"><!--<input type="submit" name="save_rem" value="Save Remarks" class="submit2" style="margin-top:-5px;" onclick="return onSave();"/>--></div>
		<div style="float:left;margin-top:5px;margin-left:3px;">
			<textarea id="chart_remarks" name="remarks" style="font-size:15px;width:335px;height:137px;font-family:Arial, Helvetica, sans-serif;" disabled="disabled">
<?php 			echo isset($rchart['chart_remarks']) ? $rchart['chart_remarks']: '';?>
			</textarea>
		</div>
		</div>
		<input type="hidden" value="<?php echo $patient_id;?>" name="id_for_remarks" />
		<input type="hidden" value="<?php echo $what_chart;?>" name="what_chart" />

	</div>

	<div class="row">

			<input type="hidden" class="form-control" id="patient_id" name="patient_id" value="<?php echo $this->input->get('id'); ?>">
			<input type="hidden" class="form-control" id="dentist_id" name="dentist_id" value="<?php echo $this->session->userdata('id'); ?>">
			<div id="tooth_dialog" title="Basic dialog">
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
			<button class="btn btn-primary btn-lg pull-right" type="submit" name="action" value="save"> SAVE </button>

	</div>



</div>
</form>

<!-- modals -->
<div id="modal_add_chart" class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
  <div class="modal-content">
<?php
	$form_attrib = array(
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
		<label for="inputEmail1" class="col-lg-3 control-label"> Chart Name: </label>
		<div class="col-lg-9">
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
