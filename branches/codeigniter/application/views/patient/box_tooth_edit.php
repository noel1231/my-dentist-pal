<script type="text/javascript">

function Refresh(id,key) {
	var x=id;
	var y=key;
	//alert(y);
	window.location="patient_tooth_chart.php?id="+y+"&key="+x;	
}
</script>

 <script language="JavaScript"> 
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
                <td width="661" align="center" style="background: url(img/u3.jpg);font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#3e4447;"><!--Joselito Galvez--><?php
				
				$length=14;
$name1=$name;
//$name=strlen($name);
//echo $name;
$display = substr($name1, 0, $length) ;
echo "<span style=\"margin-left:4px;color:#333;font-family:Arial, Helvetica, sans-serif;font-size:13px;\">$display</span>";
echo "..." ;
				
				//echo $name;?></td>
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
     <input type="submit" name="cancel" value="CANCEL" class="submit" style="margin-right:17px;margin-top:6px;" />-->
     <input type="button" onclick="divPrint();" name="print" value="PRINT" class="submit" style="margin-right:17px;margin-top:-4px;" /></td></tr></table>
      </tr>
      <tr>
        <td colspan="2" valign="top" style="background:url(img/3.jpg); padding-bottom:10px;"><div style="margin-top:-8px; position: relative;">
          <table width="690" border="0" align="center" cellpadding="0" cellspacing="0">
           
           <!--content-->
		<tr><td style="background-color:#FFF;">
           <table id="print_it" cellpadding="0" cellspacing="0" border="0" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;">
<tr><td style="padding-top:20px;padding-left:20px;padding-bottom:20px;">
<div>
<!--<div style="float:left;">
<input type="submit" name="save" value="Save" class="submit2">&nbsp;
<input type="submit" name="cancel" value="Cancel" class="submit2"></div>
<div style="clear:both;height:20px;"></div>
<div style="float:left;font-weight:bold;color:#373838;font-size:12px;">Chart Name &nbsp;&nbsp;&nbsp;<input type="text" name="chart_name"  /></div>
<div style="clear:both;height:20px;"></div>-->
<div style="float:left;width:650px;">
<div style="float:left;margin-left:8px;">
<form action="patient_tooth_add.php" method="get" enctype="multipart/form-data">
<?php //var_dump($id);die();?>
<input type="hidden" name="pass" value="<?php echo $patient_id;?>" />
<input type="submit" name="new" value="Add Chart" class="submit2" />
</form>
</div><!--&nbsp;
<input type="submit" name="child" value="Child" class="submit2"></div>-->
<div style="float:left;margin-left:20px;">

<?php if($what_chart==1) 


{
	//var_dump($pt_ids);die();
	?>

<select name="adult" onchange="Refresh(this.options[this.selectedIndex].value,'<?php echo $pt_ids;?>');">
<option value="none">--Select one--</option>
<?php
$sql="SELECT * FROM patient_tooth_chart_extra_adult WHERE patient_id='".$id."'";
$res=mysql_query($sql);
while($row=mysql_fetch_array($res)) {
$idx=$row['id'];
$name=$row['chart_name'];
echo "<option value=\"$idx\">$name</option>";	
}
?>
</select>

<?php } else if($what_chart==2) {?>
<select name="child" onchange="Refresh(this.options[this.selectedIndex].value,'<?php echo $pt_ids;?>');">
<option value="none">--Select one--</option>
<?php
$sql="SELECT * FROM patient_tooth_chart_extra_child WHERE patient_id='".$id."'";
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
</td>
<!--<td valign="top">
<img src="img/pic.png" height="120" width="122"/>
</td>-->

</tr>

<tr><td style="padding-left:27px;">
<!--<img src="img/map_teeth_red.png" />-->
<div style="clear:both;height:20px;"></div>
<div style="border:1px solid #999;width:635px;height:250px;">
<div style="margin:0 auto;width:55px;font-family:Arial, Helvetica, sans-serif;color:#999;font-size:14px;margin-top:5px;">FACIAL</div>
<div style="clear:both;height:10px;"></div>
<?php if($what_chart==1) {?>
<div style="margin:0 auto;width:520px;">
<?php $this->load->view('patient/tooth_chart_patient'); ?>
</div><?php } else { ?>
<div style="margin:0 auto;width:340px;">
<?php include('tooth_chart_child_view.php'); ?>
</div>
<?php } ?>
<div style="margin:0 auto;width:55px;font-family:Arial, Helvetica, sans-serif;color:#999;font-size:14px;margin-top:5px;">FACIAL</div>
</div>
</td></tr>


<tr><td>
<table cellpadding="0" cellspacing="0" border="0">
<tr><td width="320" valign="top">
<table cellpadding="0" cellspacing="0" border="0"><tr>
<td style="padding-top:20px;padding-left:27px;">
<!--<div style="float:left;margin-top:20px;margin-left:20px;padding-bottom:20px;">
<input type="submit" name="save" value="Save" class="submit2">&nbsp;
<input type="submit" name="cancel" value="Cancel" class="submit2"></div>-->

<!--chart holder-->
              <div style="float:left;">
              <div style="float:left;background-image:url(img/chat_name.png);width:2px;height:36px;"></div>
              <div style="float:left;background-image:url(img/chart_content.png);width:117px;height:36px;font-family:Arial, Helvetica, sans-serif;font-size:13px;font-weight:bold;color:#373838;"><div style="margin-top:10px;margin-left:20px;">Chart Name</div></div>
              <div style="float:left;background-image:url(img/chart_dep.png);width:3px;height:36px;"></div>
                  <div style="float:left;background-image:url(img/chart_content.png);width:127px;height:36px;font-family:Arial, Helvetica, sans-serif;font-size:13px;font-weight:bold;color:#373838;"><div style="margin-top:10px;margin-left:20px;">Date</div></div>
                  <div style="float:left;background-image:url(img/chart_end.png);width:2px;height:36px;"></div>
              </div>
              <!--chart holder-->

</td>

</tr>
<tr><td valign="top">
<table cellpadding="0" cellspacing="0" border="0">
<tr><td>
<div style="float:left;margin-left:27px;">
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
//$chart_remarks=$row['chart_remarks'];
//var_dump($chart_remarks);die();
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
<!--<div style="float:left;border:1px solid #e5e3e3;border-right-color:#FFF;font-family:Arial, Helvetica, sans-serif;font-size:13px;font-weight:bold;color:#97999b;width:88px;padding-left:27px;padding-top:5px;padding-bottom:5px;">BOS005</div>
<div style="float:left;border:1px solid #e5e3e3;border-left-color:#FFF;font-family:Arial, Helvetica, sans-serif;font-size:13px;font-weight:bold;color:#97999b;width:120px;padding-left:12px;padding-top:5px;padding-bottom:5px;">January 2, 2011</div>-->
</div>
</td></tr></table></td>

</tr></table></td>

<td valign="top" style="padding-top:20px;">

<table cellpadding="0" cellspacing="0" border="0">
<tr><td style="font-family:Arial, Helvetica, sans-serif;font-size:13px;font-weight:bold;color:#5f6060;">
Legend
</td></tr>
<tr><td style="padding-top:8px;">

<!--legend box-->
<table cellpadding="0" cellspacing="0" border="0" style="font-family:Arial, Helvetica, sans-serif;font-size:13px;font-weight:bold;color:#5f6060;border:1px solid #999;padding-top:10px;padding-left:10px;padding-bottom:10px;width:344px;">
<tr><td>
AM - Amalgam Filling
</td></tr>
<tr><td>
CO - Composite Filling
</td></tr>
<tr><td>
ON - Onlay
</td></tr>
<tr><td>
IN - Inlay
</td></tr>
<tr><td>
PJCF - Plastic Jacket Crown Filling 
</td></tr>
<tr><td>
PFMC - Porcelain Fuse to Metal Crown
</td></tr>
<tr><td>
RF - Root Fragment
</td></tr>
<tr><td>
MT - Missing Teeth
</td></tr>
<tr><td>
EX - Exo
</td></tr>

</table>
<!--legend box-->

</td></tr>
</table>

</td>




</tr>


 <tr><td colspan="2">
           
           <table cellpadding="0" cellspacing="0" border="0">
<tr>
<td valign="top" style="padding-top:10px;padding-left:27px;">
<form method="post" action="" enctype="multipart/form-data" />
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
</td></tr>
<tr><td><div style="clear:both;height:20px;"></div></td></td>
</table>
           
           </td></tr>


</table></td>

</tr>


</table>
     </td>
</tr>


     
          
           
          </table>
        <!--</div>--></td>
    
     
        
      </tr>
	<!-- end of content -->
      <tr>
        <td colspan="2"><img src="img/4.jpg" width="739" height="6" alt="" /></td>
      </tr>
    </table></td>
  </tr>
</table>

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
