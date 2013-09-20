<style type="text/css">
#blanket {
	background-color:#111;
	opacity: 0.9;
	filter:alpha(opacity=90);
	position:fixed;
	z-index: 9001;
	top:0px;
	left:0px;
	width:100%;
}

#popUpDiv {
	position:fixed;
	background-color:#FFF;
	width:300px;
	height:330px;
	z-index: 9002;
	border-style: solid;
	border-width: 2px;
	-moz-border-radius: 5px;
	-webkit-border-radius: 5px;
	border-radius: 5px;
}

#popUpDiv1 {
	position:fixed;
	background-color:#FFF;
	width:300px;
	height:250px;
	z-index: 9002;
	border-style: solid;
	border-width: 2px;
	-moz-border-radius: 5px;
	-webkit-border-radius: 5px;
	border-radius: 5px;
}

.toothtable img {
	cursor:pointer;
}

.toothtable {
	color:#999;	
}

</style>
<script src="<?php echo base_url(); ?>js/first_tooth.js"></script>
<script src="<?php echo base_url(); ?>js/popup.js"></script>
<script src="<?php echo base_url(); ?>js/child_tooth.js"></script>

<script language="JavaScript"> 
function onSave() {  
	if(confirm('Do you want to save changes ?')==true)  
	{
		return true;  
	} else {
		return false;  
	}
}  
</script>

<map name="Map" id="Map">

  <!--<area shape="rect" coords="8,1,131,42" href="messaging.php" />

  <area shape="rect" coords="138,2,263,41" href="received_message.php" />-->

  <area shape="rect" coords="638,2,689,33" href="patient_dental_edit.php" />

</map>

<table width="100%" border="0" cellspacing="0" cellpadding="0">

  <tr>

    <td>&nbsp;</td>

  </tr>

  <tr>

    <td><table width="739" border="0" align="center" cellpadding="0" cellspacing="0">

      <tr>

        <td height="39" colspan="2" valign="top"><div>

          <div style="width:140px; margin-left:20px; margin-bottom:-2px; float:left;">

            <table width="100%" border="0" cellspacing="0" cellpadding="0">

              <tr>

                <td width="6"><img src="img/t1.jpg" width="6" height="41" alt="" /></td>

                <td width="661" align="center" style="background: url(img/t3.jpg);"><a href="patient_list.php"><img src="img/t_patient_list.png"  width="98" height="18" alt="" /></a></td>

                <td width="6"><img src="img/t2.jpg" width="6" height="41" alt="" /></td>

              </tr>

            </table>

          </div>

          <div style="width:120px; margin-left:10px; margin-bottom:-2px; float:left;">

            <table width="100%" border="0" cellspacing="0" cellpadding="0">

              <tr>

                <td width="6"><img src="img/t1.jpg" width="6" height="41" alt="" /></td>

                <td width="661" align="center" style="background: url(img/t3.jpg);"><a href="add_patient.php"><img src="img/t_add.png" width="82" height="18" alt="" /></a></td>

                <td width="6"><img src="img/t2.jpg" width="6" height="41" alt="" /></td>

              </tr>

            </table>

          </div>

          <!--<div style="width:110px; margin-left:10px; margin-bottom:-2px; float:left">

            <table width="100%" border="0" cellspacing="0" cellpadding="0">

              <tr>

                <td width="6"><img src="img/t1.jpg" width="6" height="41" alt="" /></td>

                <td width="661" align="center" style="background: url(img/t3.jpg);"><img src="img/t-sent.png" width="72" height="17" alt="" /></td>

                <td width="6"><img src="img/t2.jpg" width="6" height="41" alt="" /></td>

              </tr>

            </table>

          </div>-->

          <div style="width:130px; margin-left:10px; margin-bottom:-2px; float:left; z-index:999999999">

            <table width="100%" border="0" cellspacing="0" cellpadding="0">

              <tr>

                <td width="6"><img src="img/u1.jpg" width="6" height="41" alt="" /></td>

                <td width="661" align="center" style="background: url(img/u3.jpg); font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#3e4447;"><!--Joselito Galvez-->

                <?php

				

				$length=14;

$name1=$name;

//$name=strlen($name);

//echo $name;

$display = substr($name1, 0, $length) ;

echo "<span style=\"margin-left:4px;color:#333;font-family:Arial, Helvetica, sans-serif;font-size:13px;\">$display</span>";

echo "..." ;

				

				//echo $name;?>

                </td>

                <td width="6"><img src="img/u2.jpg" width="6" height="41" alt="" /></td>

              </tr>

            </table>

          </div>

        </div></td>

      </tr>

      <tr>

        <td colspan="2"><img src="img/1.jpg" width="739" height="12" alt="" /></td>

      </tr>

      <tr>

        <td height="47" style="background:url(img/2.jpg);">

        <table width="100%"><tr><td>

        <img src="img/bar_patient.png" height="20" width="114" style="margin-top:-8px;margin-left:23px;"/></td>

        <td align="right"><!--<input type="submit" name="update" value="UPDATE" class="submit" style="margin-right:10px;margin-top:6px;"/>

     <input type="submit" name="cancel" value="CANCEL" class="submit" style="margin-right:17px;margin-top:6px;" />

     <input type="submit" name="print" value="PRINT" class="submit" style="margin-right:17px;margin-top:-4px;" />--></td></tr></table>

      </tr>

      <tr>

        <td colspan="2" valign="top" style="background:url(img/3.jpg); padding-bottom:10px;"><div style="margin-top:-8px; position: relative;">

          <table width="690" border="0" align="center" cellpadding="0" cellspacing="0">

           <!--content-->

           <tr><td style="background-color:#FFF;">

           <?php
				$this->db->where('id', $patient_id);
				$sql = $this->db->get('patient_list'); 

				$row = $sql->row_array();

				$val = $row["what_chart"];

		if($val==1) {
			$this->db->where('patient_id', $patient_id);
			$sql = $this->db->get('patient_adult_tooth');

			$row = $sql->row_array();
				$chart_name=$row['tooth_chart_name'];
				$data = $row;
		} else if($val==2) {
			$this->db->where('patient_id', $patient_id);
			$sql = $this->db->get('patient_child_tooth');
			
			$row = $sql->row_array();
				$chart_name=$row['tooth_chart_name']; 
		}
		   ?>

           <table id="table1" cellpadding="0" cellspacing="0" border="0" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;">

<tr><td style="padding-top:20px;padding-left:20px;padding-bottom:20px;">

<div>

<div style="float:left;">

<form method="post" action="" enctype="multipart/form-data" />

<input type="submit" name="save" value="Save" class="submit2" onclick="return onSave();">&nbsp;

<input type="button" name="cancel" value="Cancel" class="submit2" onclick="window.location='patient_tooth_chart?id=<?php echo $patient_id;?>'"></div>

<div style="clear:both;height:20px;"></div>

<div style="float:left;font-weight:bold;color:#373838;font-size:14px;">Chart Name &nbsp;&nbsp;&nbsp;<input type="text" name="chart_name"  value="<?php echo isset($chart_name) ? $chart_name : ''; ?>"/></div>

<div style="clear:both;height:20px;"></div>

<div style="float:left;width:650px;">

<!--<div style="float:left;">

<input type="submit" name="adult" value="Adult" class="submit2">&nbsp;

<input type="submit" name="child" value="Child" class="submit2"></div>-->

<div style="float:right;font-weight:bold;color:#373838;font-size:12px;">

<?php //echo date('d/m/Y');?>

</div>

</div>

</div>

</td>

<!--<td valign="top">

<img src="img/pic.png" height="120" width="122"/>

</td>-->



</tr>



<tr><td style="padding-left:27px;">

<!--<img src="img/map_teeth.png" />

<div style="clear:both;height:20px;"></div>-->

<div style="margin:0 auto;width:70px;font-family:Arial, Helvetica, sans-serif;color:#333;font-size:14px;margin-top:20px;font-weight:bold;"><!--ORIGINAL--></div>

<div style="display:none;border:1px solid #999;width:635px;height:238px;">

<div style="margin:0 auto;width:55px;font-family:Arial, Helvetica, sans-serif;color:#999;font-size:14px;margin-top:5px;"><!--FACIAL--></div>

<div style="clear:both;height:10px;"></div>

<?php if($val==1) { ?>

<div style="margin:0 auto;width:520px;">
<?php 
if(isset($_GET['key'])) {
	$key=$_GET['key'];
	$sqls="SELECT * FROM patient_tooth_chart_extra_adult WHERE id='".$key."'";
	$ress=mysql_query($sqls);
	$x="chart_remarks";
} else {
	$sqls="SELECT * FROM patient_adult_tooth WHERE patient_id=".$patient_id."";
	$ress=mysql_query($sqls); 
	$x="tooth_remarks";
}

while($row=mysql_fetch_array($ress))
{
	$chart_remarks=$row[''.$x.''];
	$data_tooth_chart_patient = $row;
}
?>
<?php $this->load->view('patient/tooth_chart_patient', $data_tooth_chart_patient); ?>

</div>

<div style="margin:0 auto;width:55px;font-family:Arial, Helvetica, sans-serif;color:#999;font-size:14px;margin-top:5px;">FACIAL</div>

</div>



<div style="margin:0 auto;width:50px;font-family:Arial, Helvetica, sans-serif;color:#333;font-size:14px;margin-top:20px;font-weight:bold;"><!--EDIT--></div>

<div style="border:1px solid #999;width:635px;height:252px;">



<div style="margin:0 auto;width:55px;font-family:Arial, Helvetica, sans-serif;color:#999;font-size:14px;margin-top:5px;">FACIAL</div>

<div style="clear:both;height:10px;"></div>

<div style="margin:0 auto;width:520px;">

<?php $this->load->view('patient/test_tooth_chart'); ?>

</div>

<?php } else if($val==1) { ?>

<div style="margin:0 auto;width:340px;">

<?php include('tooth_chart_child_view.php');?>

</div>

<div style="margin:0 auto;width:55px;font-family:Arial, Helvetica, sans-serif;color:#999;font-size:14px;margin-top:5px;"><!--FACIAL--></div>

</div>



<div style="margin:0 auto;width:50px;font-family:Arial, Helvetica, sans-serif;color:#333;font-size:14px;margin-top:20px;font-weight:bold;"><!--EDIT--></div>

<div style="border:1px solid #999;width:635px;height:252px;">



<div style="margin:0 auto;width:55px;font-family:Arial, Helvetica, sans-serif;color:#999;font-size:14px;margin-top:5px;">FACIAL</div>

<div style="clear:both;height:10px;"></div>

<div style="margin:0 auto;width:340px;">

<?php $this->load->view('patient/tooth_chart_child'); ?>

</div>

<?php /*

<div style="margin:0 auto;width:340px;">

<?php include('tooth_chart_child_view.php');?>

</div>

<div style="margin:0 auto;width:55px;font-family:Arial, Helvetica, sans-serif;color:#999;font-size:14px;margin-top:5px;">FACIAL</div>

</div>



<div style="margin:0 auto;width:50px;font-family:Arial, Helvetica, sans-serif;color:#333;font-size:14px;margin-top:20px;font-weight:bold;">EDIT</div>

<div style="border:1px solid #999;width:340px;height:210px;">



<div style="margin:0 auto;width:55px;font-family:Arial, Helvetica, sans-serif;color:#999;font-size:14px;margin-top:5px;">FACIAL</div>

<div style="clear:both;height:10px;"></div>

<div style="margin:0 auto;width:340px;">

<?php include('tooth_chart_child.php');?>

</div>*/?><?php } ?>

<div style="margin:0 auto;width:55px;font-family:Arial, Helvetica, sans-serif;color:#999;font-size:14px;margin-top:5px;">FACIAL</div>

</div>

</td></tr>

<?php /*<tr><td style="padding-left:27px;padding-top:15px;">
<?php include('legend_checker.php');?>
</td></tr>*/?>

<tr><td style="padding-left:27px;padding-top:15px;">

<table cellpadding="0" cellspacing="0" border="0">
<tr><td>
Remarks</td></tr>
<tr><td style="pading-top:10px;">
<textarea name="remarks" style="width:335px;height:137px;font-family:Arial, Helvetica, sans-serif;font-size:14px;"></textarea>
</td></tr></table>
</td></tr>



<tr><td>

<div style="float:left;margin-top:20px;margin-left:20px;padding-bottom:20px;">

<input type="submit" name="save" value="Save" class="submit2" onclick="return onSave();">&nbsp;

<input type="button" name="cancel" value="Cancel" class="submit2" onclick="window.location='patient_tooth_chart?id=<?php echo $patient_id;?>'">

<input type="hidden" value="<?php echo $patient_id;?>" name="pt_id" />

</form>

</div>

</td></tr>



</table>



     </td>

</tr>





     

           

           

          </table>

        <!--</div>--></td>

    

     

        

      </tr>

      <tr>

        <td colspan="2"><img src="img/4.jpg" width="739" height="6" alt="" /></td>

      </tr>

    </table></td>

  </tr>

</table>

</body>

</html>