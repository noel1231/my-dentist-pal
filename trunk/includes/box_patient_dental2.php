<?php include('config.php');
if(isset($_GET['id'])){
$id = $_GET['id'];}

$checked1="";
$checked2="";
$checked3="";
$checked4="";
$checked5="";
$checked6="";
$checked7="";
$checked8="";
$checked9="";
$checked10="";
$checked11="";
$checked12="";
$checked13="";
$checked14="";
$checked15="";
$checked16="";
$checked17="";
$checked18="";

$sql="SELECT * FROM patient_list WHERE id=".$id."";
$res=mysql_query($sql);
while($row=mysql_fetch_array($res))
{
$reason_for_visit=$row["reason_for_visit"];
$former_dentist=$row["former_dentist"];
$former_dentist_address=$row["former_dentist_address"];
$last_dental_care=$row["last_dental_care"];
$how_many_floss=$row["how_many_floss"];
$how_many_brush=$row["how_many_brush"];
$bad_breath=$row["bad_breath"];
$bleeding_gums=$row["bleeding_gums"];
$clicking_popping_jaw=$row["clicking_popping_jaw"];
$food_collect=$row["food_collect"];
$grinding_teeth=$row["grinding_teeth"];
$loose_teeth=$row["loose_teeth"];
$periodental_treatment=$row["periodental_treatment"];
$sensitive_hot=$row["sensitive_hot"];
$sensitive_cold=$row["sensitive_cold"];
$sensitive_sweet=$row["sensitive_sweet"];
$sensitive_bite=$row["sensitive_bite"];
$sores_in_mouth=$row["sores_in_mouth"];
$medication=$row["medication"];
$allergy_to_medication=$row["allergy_to_medication"];
$other_info=$row["other_info"];
$aspirin=$row["aspirin"];
$barbiturates=$row["barbiturates"];
$penicillin=$row["penicillin"];
$local_anesthetic=$row["local_anesthetic"];
$sulfa=$row["sulfa"];
$erythromycin=$row["erythromycin"];
$name=$row["patient_name"];
}


if(empty($bad_breath))
{ $checked1="";}
else
{ $checked1="checked";}

if(empty($bleeding_gums))
{ $checked2="";}
else
{ $checked2="checked";}

if(empty($clicking_popping_jaw))
{ $checked3="";}
else
{ $checked3="checked";}

if(empty($food_collect))
{ $checked4="";}
else
{ $checked4="checked";}

if(empty($grinding_teeth))
{ $checked5="";}
else
{ $checked5="checked";}

if(empty($loose_teeth))
{ $checked6="";}
else
{ $checked6="checked";}

if(empty($periodental_treatment))
{ $checked7="";}
else
{ $checked7="checked";}

if(empty($sensitive_hot))
{ $checked8="";}
else
{ $checked8="checked";}

if(empty($sensitive_cold))
{ $checked9="";}
else
{ $checked9="checked";}

if(empty($sensitive_sweet))
{ $checked10="";}
else
{ $checked10="checked";}

if(empty($sensitive_bite))
{ $checked11="";}
else
{ $checked11="checked";}

if(empty($sores_in_mouth))
{ $checked12="";}
else
{ $checked12="checked";}

if(empty($aspirin))
{ $checked13="";}
else
{ $checked13="checked";}

if(empty($barbiturates))
{ $checked14="";}
else
{ $checked14="checked";}

if(empty($penicillin))
{ $checked15="";}
else
{ $checked15="checked";}

if(empty($local_anesthetic))
{ $checked16="";}
else
{ $checked16="checked";}

if(empty($sulfa))
{ $checked17="";}
else
{ $checked17="checked";}

if(empty($erythromycin))
{ $checked18="";}
else
{ $checked18="checked";}


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

</head>

<body>
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
     <input type="button" onclick="divPrint();" name="print" value="PRINT" class="submit" style="margin-right:17px;margin-top:-5px;" /></td></tr></table>
      </tr>
      <tr>
        <td colspan="2" valign="top" style="background:url(img/3.jpg); padding-bottom:10px;"><div style="margin-top:-8px; position: relative;">
          <table width="690" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td bgcolor="#FFFFFF" style="border-left:1px solid #a0a8ac; border-bottom:1px solid #a0a8ac; border-right:1px solid #a0a8ac;"><!--<p>&nbsp;</p>-->
              <!--<img src="img/dental_edit.png" height="35" width="691" usemap="#Map"/>-->
              
              
              <!--locations-->
                <table cellpadding="0" cellspacing="0" border="0">
                <tr>
                
                <td style="background-image:url(img/option_center_check.png);width:110px;height:36px;padding-left:15px;"> 
                <a href="patient_info.php?id=<?php echo $id;?>" class="link_map">
                Patient Info
                </a>
                </td>
                
                <td style="background-image:url(img/option_right_check.png);width:5px;height:36px;">&nbsp;</td>
              
               
                <td style="background-image:url(img/option_center_check.png);width:140px;height:36px;padding-left:15px;"> 
                 <a href="patient_medical.php?id=<?php echo $id;?>" class="link_map">
                Medical History
                </a>
                </td>
                
                 <td style="background-image:url(img/option_right_check.png);width:5px;height:36px;">&nbsp;</td>
               
                 <td style="background-color:#FFF;width:135px;height:36px;padding-left:15px;"> 
                <a href="#" class="link_map">
                Dental History
                 </a>
                </td>
               
              
               
                <td style="background-image:url(img/option_center_check.png);width:110px;height:36px;padding-left:10px;"> 
                 <a href="patient_tooth_chart.php?id=<?php echo $id;?>" class="link_map">
                Tooth Chart
                </a>
                </td>
                
                 <td style="background-image:url(img/option_right_check.png);width:5px;height:36px;">&nbsp;</td>
              
                <td style="background-image:url(img/option_center_check.png);width:80px;height:36px;padding-left:10px;"> 
                <a href="patient_visit_log.php?id=<?php echo $id;?>" class="link_map">
                Visit Log
                </a>
                </td>
                
                <td style="background-image:url(img/option_right_check.png);width:5px;height:36px;">&nbsp;</td>
               
                <td style="background-image:url(img/option_center_check.png);width:50px;height:36px;padding-left:10px;"> 
                 <a href="patient_others.php?id=<?php echo $id;?>" class="link_map">
                Others
                </a>
                </td>
                
                 <td style="background-image:url(img/option_right_check.png);width:5px;height:36px;">&nbsp;</td>
               
                <td style="background-image:url(img/option_center_check.png);width:50px;height:36px;padding-left:15px;"> 
               <a href="patient_notes.php?id=<?php echo $id;?>" class="link_map">
               Notes
              </a>
                </td>
              
             
                <td style="background-color:#F00;width:50px;height:36px;padding-left:15px;"> 
              <a href="patient_dental_edit.php?id=<?php echo $id;?>" style="color:#FFF;font-family:Arial, Helvetica, sans-serif;font-weight:bold;font-size:13px;text-decoration:none;">
               Edit
                </a>
                </td>
                
                </tr>
                </table>
                <!--locations-->
              
              
              
               </td>
            </tr>
            <tr><td>
            <table cellpadding="0" cellspacing="0" border="0" id="print_it">
            <!--content--><tr><td>
            
            <div style="background-color:#FFF;padding-left:15px;padding-top:25px;">
            <table cellpadding="0" cellspacing="0" border="0" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;">

<!--content-->
<tr>
<td valign="top" width="60%" style="padding-left:20px;">
<table cellpadding="0" cellspacing="0" border="0">
<?php if($reason_for_visit) { ?>
<tr>
<td style="padding-left:18px;text-align:right;font-weight:600;color:#000;font-family:Arial, Helvetica, sans-serif;font-size:14px;">Reasons for visits:</td>
<td width="15">&nbsp;</td>
<td style="text-align:left;font-weight:600;color:#999;font-family:Arial, Helvetica, sans-serif;font-size:14px;"><!--Denture Cleaning<!--<input type="text" name="denture" style="width:147px;height:22px;"/>-->
<?php echo $reason_for_visit;?>
</td>
</tr>
<?php } if($former_dentist) { ?>
<tr>
<td style="padding-top:10px;text-align:right;font-weight:600;color:#000;font-family:Arial, Helvetica, sans-serif;font-size:14px;">Former Dentist:</td>
<td width="15">&nbsp;</td>
<td style="padding-top:10px;text-align:left;font-weight:600;color:#999;font-family:Arial, Helvetica, sans-serif;font-size:14px;"><!--Cynthia Valez<!--<input type="text" name="former" style="width:147px;height:22px;"/>-->
<?php echo $former_dentist;?>
</td>
</tr>
<?php } ?>


</table>
</td>

<td valign="top" style="padding-left:20px;">
<table cellpadding="0" cellspacing="0" border="0" width="300">
<?php if($how_many_floss) { ?>
<tr>
<td style="text-align:right;font-weight:600;color:#000;font-family:Arial, Helvetica, sans-serif;font-size:14px;">How often do you floss?:</td>
<td width="15">&nbsp;</td>
<td style="text-align:left;font-weight:600;color:#999;font-family:Arial, Helvetica, sans-serif;font-size:14px;"><!--None
<!--<input type="text" name="floss" style="width:111px;height:22px;"/>-->
<?php echo $how_many_floss;?>
</td>
</tr>
<?php } if($how_many_brush) { ?>
<tr>
<td style="padding-top:10px;text-align:right;font-weight:600;color:#000;font-family:Arial, Helvetica, sans-serif;font-size:14px;">How often do you brush?:</td>
<td width="15">&nbsp;</td>
<td style="padding-top:10px;text-align:left;font-weight:600;color:#999;font-family:Arial, Helvetica, sans-serif;font-size:14px;"><!--Twice<!--<input type="text" name="brush" style="width:111px;height:22px;" />-->
<?php echo $how_many_brush;?>
</td>
</tr>
<?php } ?>
</table>

</td>
</tr>

<tr><td colspan="2">

<table cellpadding="0" cellspacing="0" border="0" width"100%">
<?php if($former_dentist_address) { ?>
<tr>
<td style="padding-top:10px;text-align:right;font-weight:600;color:#000;font-family:Arial, Helvetica, sans-serif;font-size:14px;">Address:</td>
<td width="15">&nbsp;</td>
<td style="padding-top:10px;text-align:left;font-weight:600;color:#999;font-family:Arial, Helvetica, sans-serif;font-size:14px;"><!--Binakayan, Cavite<!--<input type="text" name="address" style="width:147px;height:22px;"/>-->
<?php echo $former_dentist_address;?>
</td>
</tr>
<?php } if ($last_dental_care) { ?>
<tr>
<td style="padding-top:10px;text-align:right;font-weight:600;color:#000;font-family:Arial, Helvetica, sans-serif;font-size:14px;">Date of last dental care:</td>
<td width="15">&nbsp;</td>
<td style="padding-top:10px;text-align:left;font-weight:600;color:#999;font-family:Arial, Helvetica, sans-serif;font-size:14px;"><!--09/05/2010<!--<input type="text" name="last_date" style="width:147px;height:22px;" />-->
<?php echo $last_dental_care;?>
</td>
</tr>
<?php } ?>
</table>
</td></tr>
<!--end of content-->

</table></div>
            <!--content--></td></tr>
            <!--second content-->
            <tr><td style="background-color:#FFF;padding-top:32px;">
            <div style="padding-left:25px;">
<table cellpadding="0" cellspacing="0" border="0" style="font-weight:600;color:#999;font-family:Arial, Helvetica, sans-serif;font-size:12px;">
<tr><td width="335">

<table cellpadding="0" cellspacing="0" border="0">
<tr><td>
<input type="checkbox" name="check1" disabled="disabled" <?php echo $checked1;?>/>
</td>
<td width="15">&nbsp;</td>
<td>BAD BREATH</td>
</tr>
<tr><td style="padding-top:6px;">
<input type="checkbox" name="check2" disabled="disabled" <?php echo $checked2;?>/>
</td>
<td width="15">&nbsp;</td>
<td style="padding-top:6px;">BLEEDING GUMS</td>
</tr>
<tr><td style="padding-top:6px;">
<input type="checkbox" name="check3" disabled="disabled" <?php echo $checked3;?>/>
</td>
<td width="15">&nbsp;</td>
<td style="padding-top:6px;">CLICKING OR POPPING JAW</td>
</tr>
<tr><td style="padding-top:6px;">
<input type="checkbox" name="check4" disabled="disabled" <?php echo $checked4;?>/>
</td>
<td width="15">&nbsp;</td>
<td style="padding-top:6px;">FOOD COLLECTION BETWEEN TEETH</td>
</tr>
<tr><td style="padding-top:6px;">
<input type="checkbox" name="check5" disabled="disabled" <?php echo $checked5;?>/>
</td>
<td width="15">&nbsp;</td>
<td style="padding-top:6px;">GRINDING TEETH</td>
</tr>
<tr><td style="padding-top:6px;">
<input type="checkbox" name="check6" disabled="disabled" <?php echo $checked6;?>/>
</td>
<td width="15">&nbsp;</td>
<td style="padding-top:6px;">LOOSE TEETH OR BROCKEN FILLINGS</td>
</tr>
</table>

</td>
<td valign="top">
<table cellpadding="0" cellspacing="0" border="0">
<tr><td>
<input type="checkbox" name="check7" disabled="disabled" <?php echo $checked7;?>/>
</td>
<td width="15">&nbsp;</td>
<td>PERIODONTAL TREATMENT</td>
</tr>
<tr><td style="padding-top:6px;">
<input type="checkbox" name="check8" disabled="disabled" <?php echo $checked8;?>/>
</td>
<td width="15">&nbsp;</td>
<td style="padding-top:6px;">SENSITIVITY TO HOT</td>
</tr>
<tr><td style="padding-top:6px;">
<input type="checkbox" name="check9" disabled="disabled" <?php echo $checked9;?>/>
</td>
<td width="15">&nbsp;</td>
<td style="padding-top:6px;">SENSITIVITY TO COLD</td>
</tr>
<tr><td style="padding-top:6px;">
<input type="checkbox" name="check10" disabled="disabled" <?php echo $checked10;?>/>
</td>
<td width="15">&nbsp;</td>
<td style="padding-top:6px;">SENSITIVITY TO SWEET</td>
</tr>
<tr><td style="padding-top:6px;">
<input type="checkbox" name="check11" disabled="disabled" <?php echo $checked11;?>/>
</td>
<td width="15">&nbsp;</td>
<td style="padding-top:6px;">SENSITIVITY WHEN BITING</td>
</tr>
<tr><td style="padding-top:6px;">
<input type="checkbox" name="check12" disabled="disabled" <?php echo $checked12;?>/>
</td>
<td width="15">&nbsp;</td>
<td style="padding-top:6px;">SORES OR GROWTHS IN YOUR MOUTH</td>
</tr>
</table>
</td>
</tr>
</table>
</div>
            </td></tr>
            <!--second content-->
            <!--separator--><tr><td style="padding-top:30px;background-color:#FFF;">
            <img src="img/separator_middle.png" width="693" height="32"/>
            <!--separator--></td></tr>
            
            <!--bottom content-->
            <tr><td style="padding-top:30px;padding-left:30px;background-color:#FFF;">
            <table cellpadding="0" cellspacing="0" border="0">
<tr><td>
<table cellpadding="0" cellspacing="0" border="0" width="330">
<tr>
<td style="font-weight:600;color:#000;font-family:Arial, Helvetica, sans-serif;font-size:14px;">
List medication you are currently taking
</td></tr>
<tr><td style="padding-top:8px;">
<textarea name="listmed" cols="32" rows="4" disabled="disabled" style="font-size:14px;font-family:Arial, Helvetica, sans-serif;"><?php echo $medication;?></textarea>
</td></tr>
<tr><td style="padding-top:12px;font-weight:600;color:#000;font-family:Arial, Helvetica, sans-serif;font-size:14px;">
Are you aware of being allergic to any other medications or substances? If yes, please list.
</td></tr>
<tr><td style="padding-top:8px;">
<textarea name="listallergy" cols="32" rows="4" disabled="disabled" style="font-size:14px;font-family:Arial, Helvetica, sans-serif;"><?php echo $allergy_to_medication;?></textarea>
</td>
</tr>

</table>
</td>

<td valign="top">
<table cellpadding="0" cellspacing="0" border="0">
<tr><td>
<input type="checkbox" name="asp" disabled="disabled" <?php echo $checked13;?>>
</td>
<td width="15">&nbsp;</td>
<td style="font-weight:600;color:#999;font-family:Arial, Helvetica, sans-serif;font-size:14px;">Aspirin</td>
</tr>
<tr><td style="padding-top:6px;">
<input type="checkbox" name="barb" disabled="disabled" <?php echo $checked14;?>>
</td>
<td width="15">&nbsp;</td>
<td style="padding-top:6px;font-weight:600;color:#999;font-family:Arial, Helvetica, sans-serif;font-size:14px;">Barbiturates (Sleeping Pills)</td>
</tr>
<tr><td style="padding-top:6px;">
<input type="checkbox" name="pen" disabled="disabled" <?php echo $checked15;?>>
</td>
<td width="15">&nbsp;</td>
<td style="padding-top:6px;font-weight:600;color:#999;font-family:Arial, Helvetica, sans-serif;font-size:14px;">Penicillin</td>
</tr>
<tr><td style="padding-top:6px;">
<input type="checkbox" name="local" disabled="disabled" <?php echo $checked16;?>>
</td>
<td width="15">&nbsp;</td>
<td style="padding-top:6px;font-weight:600;color:#999;font-family:Arial, Helvetica, sans-serif;font-size:14px;">Local Anesthetic</td>
</tr>
<tr><td style="padding-top:6px;">
<input type="checkbox" name="sulf" disabled="disabled" <?php echo $checked17;?>>
</td>
<td width="15">&nbsp;</td>
<td style="padding-top:6px;font-weight:600;color:#999;font-family:Arial, Helvetica, sans-serif;font-size:14px;">Sulfa</td>
</tr>
<tr><td style="padding-top:6px;">
<input type="checkbox" name="ery" disabled="disabled" <?php echo $checked18;?>>
</td>
<td width="15">&nbsp;</td>
<td style="padding-top:6px;font-weight:600;color:#999;font-family:Arial, Helvetica, sans-serif;font-size:14px;">Erythromycin</td>
</tr>
</table>
</td>

</tr></table>
            </td></tr>
            <!--bottom content-->
            
            <!--last part-->
            <tr><td style="background-color:#FFF;padding-left:30px;padding-top:12px;font-weight:600;color:#000;font-family:Arial, Helvetica, sans-serif;font-size:14px;">
Is there any other medical or dental information that you feel we should know about?
</td></tr>
<tr><td style="padding-left:30px;padding-top:8px;background-color:#FFF;"> 
<textarea name="otherinfo" cols="70" rows="4" disabled="disabled" style="font-size:14px;font-family:Arial, Helvetica, sans-serif;"><?php echo $other_info;?></textarea>
</td></tr>
<tr><td height="10" style="background-color:#FFF;">&nbsp;</td></tr>
            <!--last part-->
          </table>
        </div></td>
      </tr>
      </table></td></tr>
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
document_print.document.write('<html><head><title>Print Patient Dental History </title></head>');
document_print.document.write('<body style="font-family:verdana; font-size:12px;" onLoad="self.print();self.close();" >');
document_print.document.write(content_innerhtml);
document_print.document.write('</body></html>');
document_print.print();
document_print.document.close();
return false;
}

</script>  
<!--<map name="Map" id="Map">
  <!--<area shape="rect" coords="8,1,131,42" href="messaging.php" />
  <area shape="rect" coords="138,2,263,41" href="received_message.php" />
  <area shape="rect" coords="640,2,689,31" href="patient_dental_edit.php?id=<?php //echo $id;?>" />
  <area shape="rect" coords="2,2,97,33" href="patient_info.php?id=<?php //echo $id;?>" />
  <area shape="rect" coords="106,2,217,32" href="patient_medical.php?id=<?php //echo $id;?>" />
  <area shape="rect" coords="223,2,329,32" href="#" />
  <area shape="rect" coords="337,2,427,31" href="patient_tooth_chart.php?id=<?php //echo $id;?>" />
  <area shape="rect" coords="434,3,504,31" href="patient_visit_log.php?id=<?php //echo $id;?>" />
  <area shape="rect" coords="511,3,572,31" href="patient_others.php?id=<?php ///echo $id;?>" />
  <area shape="rect" coords="579,3,633,31" href="patient_notes.php?id=<?php //echo $id;?>" />
</map>-->
