<?php


$id = $_SESSION["patient_id"];

$sql="SELECT * FROM patient_list WHERE id=".$id."";
$res=mysql_query($sql);
while($row=mysql_fetch_array($res))
{
$name=$row["patient_name"];
$what_chart=$row["what_chart"];
}


if($what_chart==1) {
$sql="SELECT * FROM patient_adult_tooth WHERE patient_id=".$id."";
$res=mysql_query($sql);
while($row=mysql_fetch_array($res))
{
$chart_name=$row["tooth_chart_name"];
$chart_date=$row["tooth_chart_date"];
$chart_remarks=$row["tooth_remarks"];
} }

else {
$sql="SELECT * FROM patient_child_tooth WHERE patient_id=".$id."";
$res=mysql_query($sql);
while($row=mysql_fetch_array($res))
{
$chart_name=$row["tooth_chart_name"];
$chart_date=$row["tooth_chart_date"];
$chart_remarks=$row["tooth_remarks"];
} }



if(empty($chart_name))
{ $chart_name="";}
if(empty($chart_date))
{ $chart_date="";}
if(empty($chart_remarks))
{ $chart_remarks="";}

if(isset($_POST['save_rem']))
{
$rem=mysql_real_escape_string($_POST['remarks']);	
$id=$_POST['id_for_remarks'];
$what_chart=$_POST['what_chart'];

if($what_chart==1) {
$sql="UPDATE patient_adult_tooth SET tooth_remarks='".$rem."' WHERE patient_id=".$id."";
$res=mysql_query($sql);
//var_dump($res);
//var_dump($sql);
$sql="SELECT * FROM patient_adult_tooth WHERE patient_id=".$id."";
$res=mysql_query($sql);
while($row=mysql_fetch_array($res))
{
$chart_name=$row["tooth_chart_name"];
$chart_date=$row["tooth_chart_date"];
$chart_remarks=$row["tooth_remarks"];
} }


else {
	$sql="UPDATE patient_child_tooth SET tooth_remarks='".$rem."' WHERE patient_id=".$id."";
$res=mysql_query($sql);
//var_dump($res);
//var_dump($sql);
$sql="SELECT * FROM patient_child_tooth WHERE patient_id=".$id."";
$res=mysql_query($sql);
while($row=mysql_fetch_array($res))
{
$chart_name=$row["tooth_chart_name"];
$chart_date=$row["tooth_chart_date"];
$chart_remarks=$row["tooth_remarks"];
}
	
}

}


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script type="text/javascript">

function Refresh(id,key) {
	var x=id;
	var y=key;
	//alert(y);
	window.location="patient/patient_tooth_chart.php?id="+y+"&key="+x;	
}
</script>

</head>

<body>

<map name="Map" id="Map">
  <!--<area shape="rect" coords="8,1,131,42" href="messaging.php" />
  <area shape="rect" coords="138,2,263,41" href="received_message.php" />-->
  <area shape="rect" coords="638,2,689,33" href="patient_dental_edit.php" />
</map>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>&nbsp;</td>
  </tr>
  <!--<tr>
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
          <!--<div style="width:130px; margin-left:10px; margin-bottom:-2px; float:left; z-index:999999999">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="6"><img src="img/u1.jpg" width="6" height="41" alt="" /></td>
                <td width="661" align="center" style="background: url(img/u3.jpg);font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#3e4447;"><!--Joselito Galvez--><?php
				/*
				$length=14;
$name1=$name;
//$name=strlen($name);
//echo $name;
$display = substr($name1, 0, $length) ;
echo "<span style=\"margin-left:4px;color:#333;font-family:Arial, Helvetica, sans-serif;font-size:13px;\">$display</span>";
echo "..." ;
				
				//echo $name;*/?><!--</td>
                <td width="6"><img src="img/u2.jpg" width="6" height="41" alt="" /></td>
              </tr>
            </table>
          </div>
        </div></td>
      </tr>-->
      <tr>
        <td colspan="2"><img src="../img/1.jpg" width="739" height="12" alt="" /></td>
      </tr>
      <tr>
        <td height="47" style="background:url(../img/2.jpg);">
        <table width="100%"><tr><td>
        <img src="../img/bar_patient.png" height="20" width="114" style="margin-top:-8px;margin-left:23px;"/></td>
        <td align="right"><!--<input type="submit" name="update" value="UPDATE" class="submit" style="margin-right:10px;margin-top:6px;"/>
     <input type="submit" name="cancel" value="CANCEL" class="submit" style="margin-right:17px;margin-top:6px;" />-->
     <input type="button" onclick="divPrint();" name="print" value="PRINT" class="submit" style="margin-right:17px;margin-top:-4px;" /></td></tr></table>
      </tr>
      <tr>
        <td colspan="2" valign="top" style="background:url(../img/3.jpg); padding-bottom:10px;"><div style="margin-top:-8px; position: relative;">
          <table width="690" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td bgcolor="#FFFFFF" style="border-left:1px solid #a0a8ac; border-bottom:1px solid #a0a8ac; border-right:1px solid #a0a8ac;"><!--<p>&nbsp;</p>-->
              
             <?php /*
                <img src="img/menu_tooth.png" width="691" height="35" border="0" usemap="#Map2" />
                <map name="Map2" id="Map2">
                  <!--<area shape="rect" coords="3,3,97,33" href="#" />
                  <area shape="rect" coords="103,3,217,32" href="patient_medical_edit.php" />
                  <area shape="rect" coords="222,3,331,32" href="patient_dental_edit.php" />-->
                  <area shape="rect" coords="640,2,689,31" href="#" />
  <area shape="rect" coords="2,2,97,33" href="patient_info.php?id=<?php echo $id;?>" />
  <area shape="rect" coords="106,2,217,32" href="patient_medical.php?id=<?php echo $id;?>" />
  <area shape="rect" coords="223,2,329,32" href="patient_dental.php?id=<?php echo $id;?>" />
  <area shape="rect" coords="337,2,427,31" href="#" />
  <area shape="rect" coords="434,3,504,31" href="patient_visit_log.php?id=<?php echo $id;?>" />
  <area shape="rect" coords="511,3,572,31" href="patient_others.php?id=<?php echo $id;?>" />
  <area shape="rect" coords="579,3,633,31" href="patient_notes.php?id=<?php echo $id;?>" />
                </map>
				*/?>
                
                
                
                 <!--locations-->
                <table cellpadding="0" cellspacing="0" border="0">
                <tr>
                
                <td style="background-image:url(../img/option_center_check.png);width:145px;height:36px;text-align:center;"> 
                <a href="patient_info.php" class="link_map">
                Patient Info
                </a>
                </td>
                
                <td style="background-image:url(../img/option_right_check.png);width:5px;height:36px;">&nbsp;</td>
              
               
                <td style="background-image:url(../img/option_center_check.png);width:175px;height:36px;text-align:center;"> 
                 <a href="patient_medical.php" class="link_map">
                Medical History
                </a>
                </td>
                
                <td style="background-image:url(../img/option_right_check.png);width:5px;height:36px;">&nbsp;</td>
               
                 <td style="background-image:url(../img/option_center_check.png);width:165px;height:36px;text-align:center;"> 
                <a href="patient_dental.php" class="link_map">
                Dental History
                 </a>
                </td>
               
                <td style="background-image:url(../img/option_right_check.png);width:5px;height:36px;">&nbsp;</td>
               
                <td style="background-color:#FFF;width:140px;height:36px;text-align:center;"> 
                 <a href="#" class="link_map">
                Tooth Chart
                </a>
                </td>
                
             
              
                <td style="background-image:url(../img/option_center_check.png);width:100px;height:36px;text-align:center;"> 
                <a href="patient_visit_log.php" class="link_map">
                Visit Log
                </a>
                </td>
                
         
               
               <!-- <td style="background-image:url(../img/option_center_check.png);width:50px;height:36px;padding-left:10px;"> 
                 <a href="patient_others.php" class="link_map">
                Others
                </a>
                </td>-->
                
                 <td style="background-image:url(../img/option_right_check.png);width:5px;height:36px;">&nbsp;</td>
               
                <td style="background-image:url(../img/option_center_check.png);width:75px;height:36px;text-align:center;"> 
               <a href="patient_notes.php" class="link_map">
               Notes
              </a>
                </td>
              
             
                <!--<td style="background-color:#F00;width:50px;height:36px;padding-left:15px;"> 
              <a href="#" style="color:#FFF;font-family:Arial, Helvetica, sans-serif;font-weight:bold;font-size:13px;text-decoration:none;">
               Edit
                </a>
                </td>-->
                
                </tr>
                </table>
                <!--locations-->
                
                
				
				</td>
            </tr>
           
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
<!--<div style="float:left;margin-left:8px;">
<form action="patient_tooth_add.php" method="get" enctype="multipart/form-data">
<?php //var_dump($id);die();?>
<input type="hidden" name="pass" value="<?php //echo $id;?>" />
<input type="submit" name="new" value="Edit" class="submit2" />

</form>
</div>--><!--&nbsp;
<input type="submit" name="child" value="Child" class="submit2"></div>-->
<div style="float:left;font-weight:bold;color:#373838;font-size:14px;">

<?php if($what_chart==1) 


{
	//var_dump($pt_ids);die();
	?>

<select name="adult" onchange="Refresh(this.options[this.selectedIndex].value,'<?php echo $id;?>');">
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
<select name="child" onchange="Refresh(this.options[this.selectedIndex].value,'<?php echo $id;?>');">
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
<div style="border:1px solid #999;width:635px;height:238px;">
<div style="margin:0 auto;width:55px;font-family:Arial, Helvetica, sans-serif;color:#999;font-size:14px;margin-top:5px;">FACIAL</div>
<div style="clear:both;height:10px;"></div>
<?php if($what_chart==1) {?>
<div style="margin:0 auto;width:520px;">
<?php include('tooth_chart_patient.php');?>
</div><?php } else { ?>
<div style="margin:0 auto;width:340px;">
<?php include('tooth_chart_child_view.php');?>
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
              <div style="float:left;background-image:url(../img/chat_name.png);width:2px;height:36px;"></div>
              <div style="float:left;background-image:url(../img/chart_content.png);width:117px;height:36px;font-family:Arial, Helvetica, sans-serif;font-size:13px;font-weight:bold;color:#373838;"><div style="margin-top:10px;margin-left:20px;">Chart Name</div></div>
              <div style="float:left;background-image:url(../img/chart_dep.png);width:3px;height:36px;"></div>
                  <div style="float:left;background-image:url(../img/chart_content.png);width:127px;height:36px;font-family:Arial, Helvetica, sans-serif;font-size:13px;font-weight:bold;color:#373838;"><div style="margin-top:10px;margin-left:20px;">Date</div></div>
                  <div style="float:left;background-image:url(../img/chart_end.png);width:2px;height:36px;"></div>
              </div>
              <!--chart holder-->

</td>

</tr>
<tr><td valign="top">
<table cellpadding="0" cellspacing="0" border="0">
<tr><td>
<div style="float:left;margin-left:27px;">
<?php /*<div style="float:left;border:1px solid #e5e3e3;border-right-color:#FFF;font-family:Arial, Helvetica, sans-serif;font-size:13px;font-weight:bold;color:#97999b;width:88px;padding-left:27px;padding-top:5px;padding-bottom:5px;"><!--BOS005--><?php echo $chart_name;?></div>
<div style="float:left;border:1px solid #e5e3e3;border-left-color:#FFF;font-family:Arial, Helvetica, sans-serif;font-size:13px;font-weight:bold;color:#97999b;width:120px;padding-left:12px;padding-top:5px;padding-bottom:5px;"><!--January 2, 2011--><?php echo $chart_date;?></div>
<!--<div style="float:left;border:1px solid #e5e3e3;border-right-color:#FFF;font-family:Arial, Helvetica, sans-serif;font-size:13px;font-weight:bold;color:#97999b;width:88px;padding-left:27px;padding-top:5px;padding-bottom:5px;">BOS005</div>
<div style="float:left;border:1px solid #e5e3e3;border-left-color:#FFF;font-family:Arial, Helvetica, sans-serif;font-size:13px;font-weight:bold;color:#97999b;width:120px;padding-left:12px;padding-top:5px;padding-bottom:5px;">January 2, 2011</div>-->*/?>
<table border="0" cellpadding="0" cellspacing="0" style="font-family:Arial, Helvetica, sans-serif;font-size:13px;font-weight:bold;color:#97999b;border:1px solid #CCC;">
<?php
$i=0;
//var_dump($what_chart);die();
if($what_chart==1) {
$sql="SELECT * FROM patient_tooth_chart_extra_adult WHERE patient_id='".$id."' ORDER BY date_chart DESC LIMIT 5";
$res=mysql_query($sql);
//var_dump($sql);die();
//$sqls="SELECT * FROM patient_tooth_chart_extra_adult WHERE patient_id='".$pt_ids."'";

}
else if($what_chart==2) {
$sql="SELECT * FROM patient_tooth_chart_extra_child WHERE patient_id='".$id."' ORDER BY date_chart DESC LIMIT 5";	
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
<tr style="background-color:<?php echo $back;?>;">
<td style="width:110px;padding-top:6px;padding-bottom:6px;text-align:left;padding-left:10px;">
<!--BOS005--><?php echo $row['chart_name'];?>
</td>
<td style="width:129px;padding-top:6px;padding-bottom:6px;text-align:center;">
<?php echo $row['date_chart'];?></td>

<?php } ?>
</tr></table>
</div>
</td></tr></table></td>

</tr></table></td>

<td valign="top"><table cellpadding="0" cellspacing="0" border="0">
<tr>
<td valign="top">
<form method="post" action="" enctype="multipart/form-data" />
<div style="float:left;width:340px;padding-top:20px;">
<div style="float:left;font-family:Arial, Helvetica, sans-serif;font-size:13px;font-weight:bold;color:#5f6060;">Remarks</div>
<div style="clear:both;"></div>
<div style="float:right;"><!--<input type="submit" name="save_rem" value="Save Remarks" class="submit2" style="margin-top:-5px;"/>--></div>
<div style="float:left;margin-top:5px;margin-left:3px;width:200px;height:100px;"><textarea name="remarks" style="width:335px;height:80px;font-family:Arial, Helvetica, sans-serif;" disabled="disabled"><?php echo $chart_remarks;?></textarea></div>
</div>
<input type="hidden" value="<?php echo $id;?>" name="id_for_remarks" />
<input type="hidden" value="<?php echo $what_chart;?>" name="what_chart" />
</form>
</td></tr>
<tr><td><div style="clear:both;height:20px;"></div></td></td>
</table></td>


</tr></table></td>

</tr>


</table>
     </td>
</tr>


     
           
           
          </table>
        <!--</div>--></td>
    
     
        
      </tr>
      <tr>
        <td colspan="2"><img src="../img/4.jpg" width="739" height="6" alt="" /></td>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>

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
