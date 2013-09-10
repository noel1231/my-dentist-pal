<?php 
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

$choice1="";
$choice2="";
$choice3="";
$choice4="";
$choice5="";
$choice6="";
$choice7="";
$choice8="";
$choice9="";
$choice10="";
$choice11="";
$choice12="";
$choice13="";
$choice14="";


$sql="SELECT * FROM patient_list WHERE id=".$id."";
$res=mysql_query($sql);
while($row=mysql_fetch_array($res))
{
$psy_name=$row["physician_name"];
$date_last_visit=$row["date_of_last_visit"];
$illop=$row["illness_operation"];
$desc_illop=$row["describe_ill_op"];
$pregnant=$row["pregnant"];
$nursing=$row["nursing"];
$pills=$row["control_pills"];
$diabetes=$row["diabetes"];
$hyper=$row["hypertension"];
$allergy_to_fd=$row["allergy_to_FD"];
$fainting=$row["fainting"];
$tuberculosis=$row["tuberculosis"];
$anemia=$row["anemia"];
$epilepsy=$row["epilepsy"];
$asthma=$row["asthma"];
$kidney_involvement=$row["kidney_involvement"];
$endocrine=$row["endocrine"];
$prolonged_bleeding=$row["prolonged_bleeding"];
$liver_involvement=$row["liver_involvement"];
$nervous_involvement=$row["nervous_involvement"];
$hiv_aids=$row["hiv_aids"];
$name=$row["patient_name"];
}

//var_dump($illop);die();

if(empty($illop))
{ $checked1=""; $checked2="";}
else if($illop=="yes")
{ $checked1="checked"; }
else
{ $checked2="checked"; }


if(empty($pregnant))
{ $checked3=""; $checked4="";}
else if($pregnant=="yes")
{ $checked3="checked"; }
else
{ $checked4="checked"; }

if(empty($nursing))
{ $checked5=""; $checked6="";}
else if($nursing=="yes")
{ $checked5="checked"; }
else
{ $checked6="checked"; }

if(empty($pills))
{ $checked7=""; $checked8="";}
else if($pills=="yes")
{ $checked7="checked"; }
else
{ $checked8="checked"; }


//checkboxes

if(empty($diabetes))
{ $choice1="";}
else
{ $choice1="checked";}

if(empty($hyper))
{ $choice2="";}
else
{ $choice2="checked";}

if(empty($allergy_to_fd))
{ $choice3="";}
else
{ $choice3="checked";}

if(empty($fainting))
{ $choice4="";}
else
{ $choice4="checked";}

if(empty($tuberculosis))
{ $choice5="";}
else
{ $choice5="checked";}

if(empty($anemia))
{ $choice6="";}
else
{ $choice6="checked";}

if(empty($epilepsy))
{ $choice7="";}
else
{ $choice7="checked";}

if(empty($asthma))
{ $choice8="";}
else
{ $choice8="checked";}

if(empty($kidney_involvement))
{ $choice9="";}
else
{ $choice9="checked";}

if(empty($endocrine))
{ $choice10="";}
else
{ $choice10="checked";}

if(empty($prolonged_bleeding))
{ $choice11="";}
else
{ $choice11="checked";}

if(empty($liver_involvement))
{ $choice12="";}
else
{ $choice12="checked";}

if(empty($nervous_involvement))
{ $choice13="";}
else
{ $choice13="checked";}

if(empty($hiv_aids))
{ $choice14="";}
else
{ $choice14="checked";}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

</head>

<body style="font-family:Arial, Helvetica, sans-serif;">

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
        <td colspan="2"><img src="img/1.jpg" width="739" height="12" alt=""/></td>
      </tr>
      <tr>
        <td height="47" style="background:url(img/2.jpg);">
        <table width="100%"><tr><td>
        <img src="img/bar_patient.png" height="20" width="114" style="margin-top:-8px;margin-left:23px;"/></td>
        <td align="right"><input type="button" onclick="divPrint();" name="print" value="PRINT" class="submit" style="margin-right:17px;margin-top:-5px;"/>
     <!--<input type="submit" name="cancel" value="CANCEL" class="submit" style="margin-right:17px;margin-top:6px;" />--></td></tr></table>
      </tr>
      <tr>
        <td colspan="2" valign="top" style="background:url(img/3.jpg); padding-bottom:10px;"><div style="margin-top:-8px; position: relative;">
          <table width="690" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td bgcolor="#FFFFFF" style="border-left:1px solid #a0a8ac; border-bottom:1px solid #a0a8ac; border-right:1px solid #a0a8ac;"><!--<p>&nbsp;</p>-->
                <!--<img src="img/menu_medical.png" width="691" height="35" border="0" usemap="#Map2" />
                <map name="Map2" id="Map2">
                  <area shape="rect" coords="3,3,97,33" href="#" />
                  <area shape="rect" coords="103,3,217,32" href="patient_medical_edit.php" />
                  <area shape="rect" coords="222,3,331,32" href="patient_dental_edit.php" />
                </map>
                <map name="Map2" id="Map2">
                  <area shape="rect" coords="3,3,97,33" href="patient_info.php?id=<?php //echo $id;?>" />
                  <area shape="rect" coords="103,3,217,32" href="#" />
                  <area shape="rect" coords="222,3,331,32" href="patient_dental.php?id=<?php //echo $id;?>" />
                  <area shape="rect" coords="337,3,428,32" href="patient_tooth_chart.php?id=<?php //echo $id;?>" />
                  <area shape="rect" coords="433,3,505,32" href="patient_visit_log.php?id=<?php //echo $id;?>" />
                  <area shape="rect" coords="511,3,573,32" href="patient_others.php?id=<?php //echo $id;?>" />
                  <area shape="rect" coords="578,3,634,32" href="patient_notes.php?id=<?php //echo $id;?>" />
                  <area shape="rect" coords="640,4,687,32" href="patient_medical_edit.php?id=<?php //echo $id;?>" />
                </map>-->
                
                
                 <!--locations-->
                <table cellpadding="0" cellspacing="0" border="0">
                <tr>
                
                <td style="background-image:url(img/option_center_check.png);width:110px;height:36px;padding-left:15px;"> 
                <a href="patient_info.php?id=<?php echo $id;?>" class="link_map">
                Patient Info
                </a>
                </td>
                
                <td style="background-image:url(img/option_right_check.png);width:5px;height:36px;">&nbsp;</td>
              
               
                <td style="background-color:#FFF;width:145px;height:36px;padding-left:15px;"> 
                 <a href="#" class="link_map">
                Medical History
                </a>
                </td>
                
                
               
                 <td style="background-image:url(img/option_center_check.png);width:130px;height:36px;padding-left:15px;"> 
                <a href="patient_dental.php?id=<?php echo $id;?>" class="link_map">
                Dental History
                 </a>
                </td>
               
                <td style="background-image:url(img/option_right_check.png);width:5px;height:36px;">&nbsp;</td>
               
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
              <a href="patient_medical_edit.php?id=<?php echo $id;?>" style="color:#FFF;font-family:Arial, Helvetica, sans-serif;font-weight:bold;font-size:13px;text-decoration:none;">
               Edit
                </a>
                </td>
                
                </tr>
                </table>
                <!--locations-->
                
                
                
                </td>
            </tr>
           
           <!--content-->
           <tr><td style="padding-top:30px;background-color:#FFF;">
           <table id="print_it" cellpadding="0" cellspacing="0" border="0">
<tr><td>
<div style="margin:0 auto;width:690px;">
<table cellpadding="0" cellspacing="0" border="0" width="100%" style="font-family:Arial, Helvetica, sans-serif;">
<tr><td style="width:50%;text-align:right;padding-right:20px;font-weight:bold;font-size:15px;">
Physician's Name:
</td>
<td style="width:50%;text-align:left;padding-left:20px;font-weight:bold;color:#999;font-size:15px;">
<!--Maverick Bersabe--><?php echo $psy_name;?>
</td>
</tr>

<tr><td style="width:50%;text-align:right;padding-right:20px;font-weight:bold;padding-top:8px;font-size:15px;">
Date of last visit:
</td>
<td style="width:50%;text-align:left;padding-left:20px;padding-top:8px;font-weight:bold;color:#999;font-size:15px;">
<!--June 30 2009--><?php echo $date_last_visit;?>
</td>
</tr>

<tr><td style="width:50%;text-align:right;padding-right:20px;font-weight:bold;padding-top:8px;font-size:15px;">
Have you had any serious illnesses or operation?:
</td>
<td style="width:50%;text-align:left;padding-left:20px;padding-top:8px;font-size:15px;">
<input type="radio" name="illop" value="yes" disabled="disabled" <?php echo $checked1;?>/>Yes &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="illop" value="no" disabled="disabled" <?php echo $checked2;?>/>No
</td>
</tr>
<tr><td style="width:50%;text-align:right;font-style:italic;font-size:12px;color:#9e9f9f;padding-right:20px;padding-top:2px;">(if yes, describe):</td>
<td style="width:50%;text-align:left;padding-left:20px;padding-top:2px;font-size:12px;font-weight:bold;color:#999;font-style:italic;"><!--None-->
<?php echo $desc_illop;?>
</td>
</tr>

<tr><td style="width:50%;text-align:right;padding-right:20px;font-weight:bold;padding-top:8px;font-size:15px;">
Are you currently pregnant?:
</td>
<td style="width:50%;text-align:left;padding-left:20px;padding-top:8px;font-size:15px;">
<input type="radio" name="pregnant" value="yes" disabled="disabled" <?php echo $checked3;?>/>Yes &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="pregnant" value="no" disabled="disabled" <?php echo $checked4;?>/>No
</td>
</tr>
<tr><td style="width:50%;text-align:right;font-style:italic;font-size:12px;color:#9e9f9f;padding-right:20px;padding-top:2px;">
(For women)
</td></tr>

<tr><td style="width:50%;text-align:right;padding-right:20px;font-weight:bold;padding-top:8px;font-size:15px;">
Nursing?:
</td>
<td style="width:50%;text-align:left;padding-left:20px;padding-top:8px;font-size:15px;">
<input type="radio" name="nursing" value="yes" disabled="disabled" <?php echo $checked5;?>/>Yes &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="nursing" value="no" disabled="disabled" <?php echo $checked6;?>/>No
</td>
</tr>

<tr><td style="width:50%;text-align:right;padding-right:20px;font-weight:bold;padding-top:8px;font-size:15px;">
Taking birth control pills?:
</td>
<td style="width:50%;text-align:left;padding-left:20px;padding-top:8px;font-size:15px;">
<input type="radio" name="pills" value="yes" disabled="disabled" <?php echo $checked7;?>/>Yes &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="pills" value="no" disabled="disabled" <?php echo $checked8;?>/>No
</td>
</tr>

</table>
</div>
</td>
<!--<td valign="top">
<img src="img/pic.png" height="120" width="122"/>
</td>-->

</tr>

<tr><td>
<div style="margin:0 auto;width:600px;margin-top:40px;">
<!--table container--><table cellpadding="0" cellspacing="0" border="0" width="100%">
<tr><td style="width:50%;" valign="top">
<table cellpadding="0" cellspacing="0" border="0" style="width:100%;">
<tr><td>
<table style="font-family:Arial, Helvetica, sans-serif;font-size:15px;color:#7a7a7a;">
<tr><td><input type="checkbox" name="check[]" disabled="disabled" <?php echo $choice1;?>/></td><td style="padding-left:15px;">DIABETES</td></tr>
</table>

</td></tr>

<tr><td style="padding-top:6px;">
<table style="font-family:Arial, Helvetica, sans-serif;font-size:15px;color:#7a7a7a;">
<tr><td><input type="checkbox" name="check[]" disabled="disabled" <?php echo $choice2;?>/></td><td style="padding-left:15px;">HYPERTENSION</td></tr>
</table>

</td></tr>

<tr><td style="padding-top:6px;">
<table style="font-family:Arial, Helvetica, sans-serif;font-size:15px;color:#7a7a7a;">
<tr><td><input type="checkbox" name="check[]" disabled="disabled" <?php echo $choice3;?>/></td><td style="padding-left:15px;">ALLERGY TO FOOD/DRUG</td></tr>
</table>

</td></tr>

<tr><td style="padding-top:6px;">
<table style="font-family:Arial, Helvetica, sans-serif;font-size:15px;color:#7a7a7a;">
<tr><td><input type="checkbox" name="check[]" disabled="disabled" <?php echo $choice4;?>/></td><td style="padding-left:15px;">FAINTING AND DIZZINESS</td></tr>
</table>

</td></tr>

<tr><td style="padding-top:6px;">
<table style="font-family:Arial, Helvetica, sans-serif;font-size:15px;color:#7a7a7a;">
<tr><td><input type="checkbox" name="check[]" disabled="disabled" <?php echo $choice5;?>/></td><td style="padding-left:15px;">TUBERCULOSIS</td></tr>
</table>
 
</td></tr>

<tr><td style="padding-top:6px;">
<table style="font-family:Arial, Helvetica, sans-serif;font-size:15px;color:#7a7a7a;">
<tr><td><input type="checkbox" name="check[]" disabled="disabled" <?php echo $choice6;?>/></td><td style="padding-left:15px;">ANEMIA</td></tr>
</table>

</td></tr>

<tr><td style="padding-top:6px;">
<table style="font-family:Arial, Helvetica, sans-serif;font-size:15px;color:#7a7a7a;">
<tr><td><input type="checkbox" name="check[]" disabled="disabled" <?php echo $choice7;?>/></td><td style="padding-left:15px;">EPILEPSY</td></tr>
</table>

</td></tr>

<tr><td style="padding-top:6px;">
<table style="font-family:Arial, Helvetica, sans-serif;font-size:15px;color:#7a7a7a;">
<tr><td><input type="checkbox" name="check[]" disabled="disabled" <?php echo $choice8;?>/></td><td style="padding-left:15px;">ASTHMA</td></tr>
</table>

</td></tr>

<!--table container--></table>
</td>

<td style="width:50%;">
<table cellpadding="0" cellspacing="0" border="0" style="width:100%;font-family:Arial, Helvetica, sans-serif;">
<tr><td>
<table style="font-family:Arial, Helvetica, sans-serif;font-size:15px;color:#7a7a7a;">
<tr><td><input type="checkbox" name="check[]" disabled="disabled" <?php echo $choice9;?>/></td><td style="padding-left:15px;">KIDNEY INVOLVEMENT</td></tr>
</table>

</td></tr>

<tr><td style="padding-top:6px;">
<table style="font-family:Arial, Helvetica, sans-serif;font-size:15px;color:#7a7a7a;">
<tr><td>
<table cellpadding="0" cellspacing="0" border="0"><tr><td>
<input type="checkbox" name="check[]" disabled="disabled" <?php echo $choice10;?>/></td><td style="padding-left:15px;">ENDOCRINE OR THYROID</td></tr></table></td></tr>
<tr><td style="padding-left:35px;font-style:italic;"> (GOITHER, HYPERTHYROIDISM)</td></tr>
</table>
 
</td></tr>

<tr><td style="padding-top:6px;">
<table style="font-family:Arial, Helvetica, sans-serif;font-size:15px;color:#7a7a7a;">
<tr><td><input type="checkbox" name="check[]" disabled="disabled" <?php echo $choice11;?>/></td><td style="padding-left:15px;">PROLONGED BLEEDING</td></tr>
 </table>
</td></tr>

<tr><td style="padding-top:6px;">
<table style="font-family:Arial, Helvetica, sans-serif;font-size:15px;color:#7a7a7a;">
<tr><td>
<table cellpadding="0" cellspacing="0" border="0"><tr><td>
<input type="checkbox" name="check[]" disabled="disabled" <?php echo $choice12;?>/></td><td style="padding-left:15px;">LIVER INVOLVEMENT</td></tr></table></td></tr>
<tr><td style="padding-left:35px;font-style:italic;"> HISTORY OF HEPA A, HEPA B, JAUNDICE)</td></tr>
</table>


</td></tr>

<tr><td style="padding-top:6px;">
<table style="font-family:Arial, Helvetica, sans-serif;font-size:15px;color:#7a7a7a;">
<tr><td>
<table cellpadding="0" cellspacing="0" border="0"><tr><td>
<input type="checkbox" name="check[]" disabled="disabled" <?php echo $choice13;?>/></td><td style="padding-left:15px;">NERVOUS DISORDER</td></tr></table></td></tr>
<tr><td style="padding-left:35px;font-style:italic;">(EPILEPSY, DOWN'S SYNDROME)</td></tr>
</table>

 
</td></tr>

<tr><td style="padding-top:6px;">
<table style="font-family:Arial, Helvetica, sans-serif;font-size:15px;color:#7a7a7a;">
<tr><td><input type="checkbox" name="check[]" disabled="disabled" <?php echo $choice14;?>/></td><td style="padding-left:15px;">HIV / AIDS </td></tr></table>
</td></tr>



<!--table container--></table>
</td>

</tr>
<tr><td><div style="clear:both;height:30px;"></div></td></tr>
</table>
</div>
</td></tr>

</table>
    </td> 
</tr>

           <!--content-->
          </table>
        </td>
    
     
        
      </tr></div>
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
document_print.document.write('<html><head><title>Print Patient Medical History </title></head>');
document_print.document.write('<body style="font-family:verdana; font-size:12px;" onLoad="self.print();self.close();" >');
document_print.document.write(content_innerhtml);
document_print.document.write('</body></html>');
document_print.print();
document_print.document.close();
return false;
}

</script>  