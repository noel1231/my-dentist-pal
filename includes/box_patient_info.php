<?php

if(isset($_GET['id'])){
$id = $_GET['id'];}

$sql="SELECT * FROM patient_list WHERE id=".$id."";
$res=mysql_query($sql);
while($row=mysql_fetch_array($res))
{
$id=$row["id"];
$name=$row["patient_name"];
$date=$row["date_of_entry"];
$bday=$row["patient_bday"];
$age=$row["patient_age"];
$gender=$row["patient_gender"];
$address=$row["patient_address"];
$phone=$row["patient_phone"];
$status=$row["patient_marital_status"];
$reffered=$row["referred_by"];
$work=$row["patient_occupation"];
$work_add=$row["occupation_address"];
$work_phone=$row["occupation_phone"];
$spouse=$row["spouse_name"];
$spouse_phone=$row["spouse_phone"];
$spouse_work=$row["spouse_occupation"];
$guardian=$row["patient_guardian"];
$guardian_phone=$row["guardian_phone"];
$guardian_address=$row["guardian_address"];
$pic=$row["patient_picture"];
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

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
                <td width="661" align="center" style="background: url(img/u3.jpg); font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#3e4447;"><!--Joselito Galvez--><?php
				
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
        <td align="right"><!--<input type="submit" name="update" value="UPDATE" class="submit" style="margin-right:10px;margin-top:6px;"/>-->
     <input type="button" onclick="divPrint();" name="print" value="PRINT" class="submit" style="margin-right:17px;margin-top:-5px;" /></td></tr></table></td>
      </tr>
      <tr>
        <td colspan="2" valign="top" style="background:url(img/3.jpg); padding-bottom:10px;"><div style="margin-top:-8px; position: relative;">
          <table width="690" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td bgcolor="#FFFFFF" style="border-left:1px solid #a0a8ac; border-bottom:1px solid #a0a8ac; border-right:1px solid #a0a8ac;"><!--<p>&nbsp;</p>-->
                <!--<img src="img/menu_patient_info.png" width="691" height="35" border="0" usemap="#Map2" />
                <map name="Map2" id="Map2">
                  <area shape="rect" coords="3,3,97,33" href="#" />
                  <area shape="rect" coords="103,3,217,32" href="patient_medical.php?id=<?php //echo $id;?>" />
                  <area shape="rect" coords="222,3,331,32" href="patient_dental.php?id=<?php //echo $id;?>" />
                  <area shape="rect" coords="337,3,428,32" href="patient_tooth_chart.php?id=<?php //echo $id;?>" />
                  <area shape="rect" coords="433,3,505,32" href="patient_visit_log.php?id=<?php //echo $id;?>" />
                  <area shape="rect" coords="511,3,573,32" href="patient_others.php?id=<?php //echo $id;?>" />
                  <area shape="rect" coords="578,3,634,32" href="patient_notes.php?id=<?php //echo $id;?>" />
                  <area shape="rect" coords="640,4,687,32" href="patient_info_edit.php?id=<?php //echo $id;?>" />
                </map>-->
                
                <!--locations-->
					<?php include('revisions/box_locations.php'); ?>
                <!--locations-->
                
                
                
                </td>
            </tr>
           
           <!--content-->
           <tr><td style="padding-top:30px;background-color:#FFF;" id="print_it">
           <table cellpadding="0" cellspacing="0" border="0" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;">
<tr><td width="500">
<table cellpadding="0" cellspacing="0" border="0" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">
<!--content-->
<tr><td style="text-align:right;width:200px;">
Patient ID No:
</td>
<td width="20">&nbsp;</td>
<td style="color:#666;width:200px;"><!--20100512--><?php echo $id;?></td>
 
</tr>
<tr><td height="7">&nbsp;</td></tr>
<tr><td style="text-align:right;width:200px;">
Date of Entry:
</td>
<td width="20">&nbsp;</td>
<td style="color:#666;width:200px;"><!--June 30 207--><?php echo $date;?></td>
</tr>
<tr><td height="7">&nbsp;</td></tr>
<?php if($bday) { ?>
<tr><td style="text-align:right;width:200px;">
Date of Birth:
</td>
<td width="20">&nbsp;</td>
<td style="color:#666;width:200px;"><!--June 30, 1990--><?php echo $bday;?></td>
</tr>
<tr><td height="7">&nbsp;</td></tr><?php } ?> 
<?php if($name) { ?>
<tr><td style="text-align:right;width:200px;">
Patient's Name:
</td>
<td width="20">&nbsp;</td>
<td style="color:#666;width:200px;"><!--Maverick M. Bersabe--><?php echo $name;?></td>
</tr>
<tr>

<td style="font-style:italic;font-size:13px;color:#666;padding-left:25px;">(Last name, First name, M.I.)</td><td>&nbsp;</td></tr>
<tr><td height="7">&nbsp;</td></tr><?php } ?>
<?php if($age) { ?>
<tr><td style="text-align:right;width:200px;">
Age:
</td>
<td width="20">&nbsp;</td>
<td style="color:#666;"><!--21--><?php echo $age;?></td>
</tr>
<tr><td height="7">&nbsp;</td></tr><?php } ?>
<?php if($gender) { ?>
<tr><td style="text-align:right;width:200px;">
Gender:
</td>
<td width="20">&nbsp;</td>
<td style="color:#666;width:200px;"><!--Male--><?php echo $gender;?></td>
</tr>
<tr><td height="7">&nbsp;</td></tr><?php } ?>
<?php if($address) { ?>
<tr><td style="text-align:right;width:200px;">
Residential Address:
</td>
<td width="20">&nbsp;</td>
<td style="color:#666;width:260px;"><!--62 F. Reyes St., Caridad Cavite City--><?php echo $address;?></td>
</tr>
<tr><td height="7">&nbsp;</td></tr><?php } ?>
<?php if($phone) { ?>
<tr><td style="text-align:right;width:200px;">
Phone:
</td>
<td width="20">&nbsp;</td>
<td style="color:#666;width:200px;"><!--431 - 7662--><?php echo $phone;?></td>
</tr>
<tr><td height="7">&nbsp;</td></tr><?php } ?>
<?php if($status) { ?>
<tr><td style="text-align:right;width:200px;">
Marital Status:
</td>
<td width="20">&nbsp;</td>
<td style="color:#666;width:200px;"><!--Married--><?php echo $status;?></td>
</tr>
<tr><td height="7">&nbsp;</td></tr><?php } ?>
<?php if($reffered) { ?>
<tr><td style="text-align:right;width:200px;">
Referred by:
</td>
<td width="20">&nbsp;</td>
<td style="color:#666;"><?php echo $reffered;?></td>
</tr>
<tr><td height="27">&nbsp;</td></tr>
<!--<tr><td height="7">&nbsp;</td></tr>-->
<?php } ?>
<?php if($work) { ?>
<tr><td style="text-align:right;width:200px;">
Occupation:
</td>
<td width="20">&nbsp;</td>
<td style="color:#666;width:200px;"><?php echo $work;?></td>
</tr>
<tr><td height="7">&nbsp;</td></tr><?php } ?>
<?php if($work_add) { ?>
<tr><td style="text-align:right;width:200px;">
Business Address:
</td>
<td width="20">&nbsp;</td>
<td style="color:#666;width:200px;"><!--Salinas, Cavite--><?php echo $work_add;?></td>
</tr>
<tr><td height="7">&nbsp;</td></tr><?php } ?>
<?php if($work_phone) { ?>
<tr><td style="text-align:right;width:200px;">
Business Telephone:
</td>
<td width="20">&nbsp;</td>
<td style="color:#666;width:200px;"><!--046.497.2478--><?php echo $work_phone;?></td>
</tr>
<tr><td height="27">&nbsp;</td></tr>
<!--<tr><td height="20">&nbsp;</td></tr>--><?php } ?>
<?php if($spouse) { ?>
<tr><td style="text-align:right;width:200px;">
Name of spouse:
</td>
<td width="20">&nbsp;</td>
<td style="color:#666;width:200px;"><!--Diane Marie De Guzman--><?php echo $spouse;?></td>
</tr>
<tr><td height="7">&nbsp;</td></tr><?php } ?>
<?php if($spouse_phone) { ?>
<tr><td style="text-align:right;width:200px;">
Telephone:
</td>
<td width="20">&nbsp;</td>
<td style="color:#666;width:200px;"><!--None--><?php echo $spouse_phone;?></td>
</tr>
<tr><td height="7">&nbsp;</td></tr>
<?php } ?>
<?php if($spouse_work) { ?>
<tr><td style="text-align:right;width:200px;">
Occupation:
</td>
<td width="20">&nbsp;</td>
<td style="color:#666;width:200px;"><!--Secretary--><?php echo $spouse_work;?></td>
</tr>
<tr><td height="27">&nbsp;</td></tr>
<!--<tr><td height="20">&nbsp;</td></tr>--><?php } ?>
<?php if($guardian) { ?>
<tr><td style="text-align:right;width:200px;">
Guardian / Parents:
</td>
<td width="20">&nbsp;</td>
<td style="color:#666;width:200px;"><!--Rowena De Guzman--><?php echo $guardian;?></td>
</tr>
<tr><td height="7">&nbsp;</td></tr><?php } ?>
<?php if($guardian_phone) { ?>
<tr><td style="text-align:right;width:200px;">
Telephone:
</td>
<td width="20">&nbsp;</td>
<td style="color:#666;width:200px;"><!--431 2439--><?php echo $guardian_phone;?></td>
</tr>
<tr><td height="7">&nbsp;</td></tr>
<?php } ?>
<?php if($guardian_address) { ?>
<tr><td style="text-align:right;">
Address:
</td>
<td width="20">&nbsp;</td>
<td style="color:#666;width:200px;"><!--601 E. Gutierez St., Caridad Cavite City--><?php echo $guardian_address;?></td>
</tr>
<tr><td height="7">&nbsp;</td>
<?php } ?>
</tr>
<!--end of content--></table></td>
<?php if($pic) { ?>
<td valign="top">
<img src="<?php echo $pic;?>" height="120" width="122"/>
</td>
<?php } ?>
</tr>

</table>
  </td>   
</tr>
           <!--content-->
          </table>
        </div></td>
    
     
        
      </tr>
      <tr>
        <td colspan="2"><img src="img/4.jpg" width="739" height="6" alt="" /></td>
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
document_print.document.write('<html><head><title>Print Patient Personal Information </title></head>');
document_print.document.write('<body style="font-family:verdana; font-size:12px;" onLoad="self.print();self.close();" >');
document_print.document.write(content_innerhtml);
document_print.document.write('</body></html>');
document_print.print();
document_print.document.close();
return false;
}

</script>  