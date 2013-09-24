<script type="text/javascript">

function Refresh(key,id) {
	window.location="<?php echo base_url(); ?>test/patient_tooth_chart?id="+id+"&key="+key;
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
</script>

<div class="container">

	<div class="row">
		<div class="pull-right">
			<input type="button" onclick="divPrint();" name="print" value="PRINT" class="btn btn-default submit" />
		</div>
		<div>
			<input type="text" id="what_picture">
			<input type="text" id="what_number">
			<input type="text" id="what_legend">
			<input type="text" id="what_hide">
			<input type="text" id="what_tooth_number">
		</div>
	</div>

	<div class="row">
		<div style="float:left;width:650px;">
			<div style="float:left;margin-left:8px;">
				<form action="patient_tooth_add" method="get" enctype="multipart/form-data">
					<input type="hidden" name="id" value="<?php echo $patient_id;?>" />
					<input type="submit" name="new" value="Add Chart" class="submit2" />
				</form>
			</div>
			<div style="float:left;margin-left:20px;">

			<?php 
				if($what_chart==1) {
			?>
			<select name="adult" onchange="Refresh(this.options[this.selectedIndex].value,'<?php echo $patient_id;?>');">
			<option value="none">--Select one--</option>
			<?php
					$sql="SELECT * FROM patient_tooth_chart_extra_adult WHERE patient_id='".$patient_id."'";
					$res=mysql_query($sql);
					while($row=mysql_fetch_array($res)) {
						$idx=$row['id'];
						$name=$row['chart_name'];
						echo "<option value=\"$idx\">$name</option>";
					}
			?>
			</select>
			<?php
				} else if ($what_chart==2) {
			?>
					<select name="child" onchange="Refresh(this.options[this.selectedIndex].value,'<?php echo $patient_id;?>');">
					<option value="none">--Select one--</option>
					<?php
					$sql="SELECT * FROM patient_tooth_chart_extra_child WHERE patient_id='".$patient_id."'";
					$res=mysql_query($sql);
					while($row=mysql_fetch_array($res)) {
					$idx=$row['id'];
					$name=$row['chart_name'];
					echo "<option value=\"$idx\">$name</option>";	
					}
			?>
				</select>
			<?php } ?>

			</div>
			<!--<div style="float:right;font-weight:bold;color:#373838;font-size:12px;">
			<?php //echo date('d/m/Y');?>
			</div>-->
		</div>
	</div>

	<div>

		<div style="margin:0 auto; width:570px;">
<?php
			if($what_chart==1) {
				if($this->input->get('key')) {
					$key=$this->input->get('key');

					$this->db->where('id', $key);
					$ress = $this->db->get('patient_tooth_chart_extra_adult');
					$remark="chart_remarks";
				} else {
					$this->db->where('patient_id', $patient_id);
					$ress = $this->db->get('patient_adult_tooth');
					$remark="tooth_remarks";
				}

			} else {

				if($this->input->get('key')) {
					$key = $this->input->get('key');

					$this->db->where('id', $key);
					$ress = $this->db->get('patient_tooth_chart_extra_child');
					$x = "chart_remarks";
				} else {
					$this->db->where('patient_id', $patient_id);
					$ress = $this->db->get('patient_child_tooth');
					$x="tooth_remarks";
				}

			}

			if($ress->num_rows() > 0) {
				$row=$ress->row_array();

				$chart_remarks=$row[$remark];
				$data_tooth_chart_patient = $row;

				$this->load->view('charting/tooth_chart_patient', $data_tooth_chart_patient);
			}
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
			$sql="SELECT * FROM patient_tooth_chart_extra_adult WHERE patient_id='".$patient_id."' ORDER BY date_chart DESC LIMIT 5";
			$res=mysql_query($sql);

			//$sqls="SELECT * FROM patient_tooth_chart_extra_adult WHERE patient_id='".$pt_ids."'";

			}
			else if($what_chart==2) {
			$sql="SELECT * FROM patient_tooth_chart_extra_child WHERE patient_id='".$patient_id."' ORDER BY date_chart DESC LIMIT 5";	
			$res=mysql_query($sql);
			}
			while($row=mysql_fetch_array($res)) {
			$chart_remarks=$row['chart_remarks'];
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

			<?php } ?>
			</tr></table>		
	</div>

	<div class="row">
		<form method="post" action="" enctype="multipart/form-data">
		<div style="float:left;width:340px;padding-top:24px;">
		<div style="float:left;font-family:Arial, Helvetica, sans-serif;font-size:13px;font-weight:bold;color:#5f6060;">Remarks</div>
		<div style="float:right;"><!--<input type="submit" name="save_rem" value="Save Remarks" class="submit2" style="margin-top:-5px;" onclick="return onSave();"/>--></div>
		<div style="float:left;margin-top:5px;margin-left:3px;"><textarea name="remarks" style="font-size:15px;width:335px;height:137px;font-family:Arial, Helvetica, sans-serif;" disabled="disabled"><?php 

		//var_dump($chart_remarks);die();
		echo $chart_remarks;?></textarea></div>
		</div>
		<input type="hidden" value="<?php echo $patient_id;?>" name="id_for_remarks" />
		<input type="hidden" value="<?php echo $what_chart;?>" name="what_chart" />
		</form>
	</div>

	<div class="row">
		<form method="post">
			<div id="tooth_dialog" title="Basic dialog">
				<?php echo $this->load->view('charting/tooth/table_first_tooth'); ?>
			</div>
<?php
	$adult_array = array(11,12,13,14,15,16,17,18,21,22,23,24,25,26,27,28,31,32,33,34,35,36,37,38,41,42,43,44,45,46,47,48);
	foreach($adult_array as $adult) {
?>
		<input id="pic<?php echo $adult; ?>" type="hidden" name="pic<?php echo $adult; ?>" >
		<input id="leg_<?php echo $adult; ?>" type="hidden" name="leg_<?php echo $adult; ?>" >
		<input id="adult_<?php echo $adult; ?>" type="hidden" name="adult_<?php echo $adult; ?>" >
<?php
	}
	$child = array(51,52,53,54,55,61,62,63,64,65,71,72,73,74,75,81,82,83,84,85);
	foreach($child_array as $child) {
?>
		
<?php
	}
?>
			<button class="btn btn-primary btn-lg" type="submit" name="action" value="save"> SAVE </button>
		</form>
	</div>



</div>
<script language="javascript" type="text/javascript">
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
