<?php 

//
//
//update
//
//

if(isset($_POST['update']))
{
$none="";
$id=$_POST['pt_id'];


if(empty($_POST['pys_name'])) {
	$psy_name=$none;
}
else
{ $psy_name=mysql_real_escape_string($_POST['pys_name']); }

if(empty($_POST['date'])) {
	$date_of_last_visit=$none; 
 }
else
{ $date_of_last_visit=mysql_real_escape_string($_POST['date']); }

if(empty($_POST['illop'])) { 
$illop=$none; }
else
{ $illop=mysql_real_escape_string($_POST['illop']); }


if(empty($_POST['reason'])) {
 $illopreason=$none; }
else
{ $illopreason=mysql_real_escape_string($_POST['reason']); }

if(empty($_POST['pregnant'])) {
$pregnant=$none; }
else
{ $pregnant=mysql_real_escape_string($_POST['pregnant']); }

if(empty($_POST['nursing'])) {
 $nursing=$none; }
else
{ $nursing=mysql_real_escape_string($_POST['nursing']); }

if(empty($_POST['pills'])){
$pills=$none; }
else
{ $pills=mysql_real_escape_string($_POST['pills']); }

if(empty($_POST['diabetes'])) {
 $diabetes=$none;  }
else
{ $diabetes=mysql_real_escape_string($_POST['diabetes']); }

if(empty($_POST['hypertension'])) {
$hyper=$none;  }
else
{ $hyper=mysql_real_escape_string($_POST['hypertension']); }

if(empty($_POST['allergy_to_fd'])) {
$allergy_to_fd=$none; }
else
{ $allergy_to_fd=mysql_real_escape_string($_POST['allergy_to_fd']); }

if(empty($_POST['fainting'])) {
$fainting=$none;  }
else
{ $fainting=mysql_real_escape_string($_POST['fainting']);}

if(empty($_POST['tb'])) { 
 $tb=$none;}
else
{ $tb=mysql_real_escape_string($_POST['tb']); }

if(empty($_POST['anemia'])) {
$anemia=$none;  }
else
{ $anemia=mysql_real_escape_string($_POST['anemia']); }

if(empty($_POST['epilepsy'])) {
$epilepsy=$none; }
else
{ $epilepsy=mysql_real_escape_string($_POST['epilepsy']); }

if(empty($_POST['asthma'])) {
$asthma=$none; }
else
{ $asthma=mysql_real_escape_string($_POST['asthma']);  }

if(empty($_POST['kidney'])) {
$kidney=$none;  }
else
{ $kidney=mysql_real_escape_string($_POST['kidney']); }

if(empty($_POST['endocrine'])) {
$endocrine=$none; }
else
{ $endocrine=mysql_real_escape_string($_POST['endocrine']); }

if(empty($_POST['bleeding'])) {
$bleeding=$none; }
else
{ $bleeding=mysql_real_escape_string($_POST['bleeding']); }

if(empty($_POST['liver'])) {
$liver=$none;  }
else
{ $liver=mysql_real_escape_string($_POST['liver']); }

if(empty($_POST['nervous'])) {
$nervous=$none; }
else
{ $nervous=mysql_real_escape_string($_POST['nervous']); }

if(empty($_POST['hiv_aids'])) {
$hiv_aids=$none; }
else
{ $hiv_aids=mysql_real_escape_string($_POST['hiv_aids']); }


$sql="UPDATE patient_list SET 
physician_name='".$psy_name."',
date_of_last_visit='".$date_of_last_visit."',
illness_operation='".$illop."',
describe_ill_op='".$illopreason."',
pregnant='".$pregnant."',
nursing='".$nursing."',
control_pills='".$pills."',
diabetes='".$diabetes."',
hypertension='".$hyper."',
allergy_to_FD='".$allergy_to_fd."',
fainting='".$fainting."',
tuberculosis='".$tb."',
anemia='".$anemia."',
epilepsy='".$epilepsy."',
asthma='".$asthma."',
kidney_involvement='".$kidney."',
endocrine='".$endocrine."',
prolonged_bleeding='".$bleeding."',
liver_involvement='".$liver."',
nervous_involvement='".$nervous."',
hiv_aids='".$hiv_aids."'

WHERE id=".$id."
";

$res=mysql_query($sql);

header('Location: patient_medical.php?id='.$id.'');

}

if(isset($_GET['id'])){
$id = $_GET['id'];}

$sql="SELECT * FROM patient_list WHERE id=".$id."";
$res=mysql_query($sql);
while($row=mysql_fetch_array($res))
{
$name=$row['patient_name'];	
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

$option1="";
$option2="";
$option3="";
$option4="";
$option5="";
$option6="";
$option7="";
$option8="";
//var_dump($illop);
if(empty($illop))
{ $option1=""; $option2="";}
else if($illop=="yes")
{ $option1="checked"; }
else
{ $option2="checked"; }

if(empty($pregnant))
{ $option3=""; $option4="";}
else if($pregnant=="yes")
{ $option3="checked"; }
else
{ $option4="checked"; }

if(empty($nursing))
{ $option5=""; $option6="";}
else if($nursing=="yes")
{ $option5="checked"; }
else
{ $option6="checked"; }

if(empty($pills))
{ $option7=""; $option8="";}
else if($pills=="yes")
{ $option7="checked"; }
else
{ $option8="checked"; }


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
                <td width="661" align="center" style="background: url(img/t3.jpg);"><img src="img/t_add.png" width="82" height="18" alt="" /></td>
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
        <img src="img/bar_edit_info.png" height="19" width="147" style="margin-top:-8px;margin-left:23px;"/></td>
        <td align="right">
        <form method="post" action="" enctype="multipart/form-data"/>
        <div style="margin-top:-7px;">
        <input type="submit" name="update" value="UPDATE" class="submit" style="margin-right:10px;" onclick="return onSave();"/>
     <input type="button" name="cancel" value="CANCEL" class="submit" style="margin-right:17px;"onclick="window.location='patient_medical.php?id=<?php echo $id;?>'" />
     </div> 
     </td></tr></table>
      </tr>
      <tr>
        <td colspan="2" valign="top" style="background:url(img/3.jpg); padding-bottom:10px;"><div style="margin-top:-8px; position: relative;">
          <table width="690" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td bgcolor="#FFFFFF" style="border-left:1px solid #a0a8ac; border-bottom:1px solid #a0a8ac; border-right:1px solid #a0a8ac;"><!--<p>&nbsp;</p>-->
                <!--<img src="img/menu_medical_edit.png" width="691" height="35" border="0" usemap="#Map2" />
                <map name="Map2" id="Map2">
                  <area shape="rect" coords="3,3,97,33" href="patient_info_edit.php?id=<?php //echo $id;?>" />
                  <area shape="rect" coords="103,3,217,32" href="#" />
                  <area shape="rect" coords="222,3,331,32" href="patient_dental_edit.php?id=<?php //echo $id;?>" />
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
                 <a href="patient_medical.php?id=<?php echo $id;?>" class="link_map">
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
           <table cellpadding="0" cellspacing="0" border="0">
<tr><td>
<div style="margin:0 auto;width:690px;">
<table cellpadding="0" cellspacing="0" border="0" width="100%" style="font-family:Arial, Helvetica, sans-serif;">
<tr><td style="width:50%;text-align:right;padding-right:20px;font-weight:bold;font-size:14px;">
Phyicians Name:
</td>
<td style="width:50%;text-align:left;padding-left:20px;font-size:14px;">
<!--Maverick Bersabe--><input type="text" name="pys_name" value="<?php echo $psy_name;?>"/>
</td>
</tr>

<tr><td style="width:50%;text-align:right;padding-right:20px;font-weight:bold;padding-top:8px;font-size:14px;">
Date of last visit:
</td>
<td style="width:50%;text-align:left;padding-left:20px;padding-top:8px;font-size:14px;">
<!--June 30 2009--><input type="text" name="date" value="<?php echo $date_last_visit;?>"/>
</td>
</tr>

<tr><td style="width:50%;text-align:right;padding-right:20px;font-weight:bold;padding-top:8px;font-size:14px;">
Have you had aby serious illnesses or operation?:
</td>
<td style="width:50%;text-align:left;padding-left:20px;padding-top:8px;font-size:14px;">
<input type="radio" name="illop" value="yes" <?php echo $option1;?>/>Yes &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="illop" value="no" <?php echo $option2;?>/>No
</td>
</tr>
<tr><td style="width:50%;text-align:right;font-style:italic;font-size:12px;color:#9e9f9f;padding-right:20px;padding-top:2px;">(if yes, describe):</td>
<td style="width:50%;text-align:left;padding-left:20px;padding-top:2px;font-size:14px;"><!--None--><input type="text" name="reason" value="<?php echo $desc_illop;?>"/></td>
</tr>

<tr><td style="width:50%;text-align:right;padding-right:20px;font-weight:bold;padding-top:8px;font-size:14px;">
Are you currently pregnant?:
</td>
<td style="width:50%;text-align:left;padding-left:20px;padding-top:8px;font-size:14px;">
<input type="radio" name="pregnant" value="yes" <?php echo $option3;?>/>Yes &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="pregnant" value="no" <?php echo $option4;?>/>No
</td>
</tr>
<tr><td style="width:50%;text-align:right;font-style:italic;font-size:12px;color:#9e9f9f;padding-right:20px;padding-top:2px;">
(For women)
</td></tr>

<tr><td style="width:50%;text-align:right;padding-right:20px;font-weight:bold;padding-top:8px;font-size:14px;">
Nursing?:
</td>
<td style="width:50%;text-align:left;padding-left:20px;padding-top:8px;font-size:14px;">
<input type="radio" name="nursing" value="yes" <?php echo $option5;?>/>Yes &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="nursing" value="no" <?php echo $option6;?>/>No
</td>
</tr>

<tr><td style="width:50%;text-align:right;padding-right:20px;font-weight:bold;padding-top:8px;font-size:14px;">
Taking birth control pills?:
</td>
<td style="width:50%;text-align:left;padding-left:20px;padding-top:8px;font-size:14px;">
<input type="radio" name="pills" value="yes" <?php echo $option7;?>/>Yes &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="pills" value="no" <?php echo $option8;?>/>No
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
<table style="font-family:Arial, Helvetica, sans-serif;font-size:12px;color:#7a7a7a;">
<tr><td><input type="checkbox" name="diabetes" value="yes" <?php echo $choice1;?>/></td><td style="padding-left:15px;">DIABETES</td></tr>
</table>

</td></tr>

<tr><td style="padding-top:6px;">
<table style="font-family:Arial, Helvetica, sans-serif;font-size:12px;color:#7a7a7a;">
<tr><td><input type="checkbox" name="hypertension" value="yes" <?php echo $choice2;?>/></td><td style="padding-left:15px;">HYPERTENSION</td></tr>
</table>

</td></tr>

<tr><td style="padding-top:6px;">
<table style="font-family:Arial, Helvetica, sans-serif;font-size:12px;color:#7a7a7a;">
<tr><td><input type="checkbox" name="allergy_to_fd" value="yes" <?php echo $choice3;?>/></td><td style="padding-left:15px;">ALLERGY TO FOOD/DRUG</td></tr>
</table>

</td></tr>

<tr><td style="padding-top:6px;">
<table style="font-family:Arial, Helvetica, sans-serif;font-size:12px;color:#7a7a7a;">
<tr><td><input type="checkbox" name="fainting" value="yes" <?php echo $choice4;?>/></td><td style="padding-left:15px;">FAINTING AND DIZZINESS</td></tr>
</table>

</td></tr>

<tr><td style="padding-top:6px;">
<table style="font-family:Arial, Helvetica, sans-serif;font-size:12px;color:#7a7a7a;">
<tr><td><input type="checkbox" name="tb" value="yes" <?php echo $choice5;?>/></td><td style="padding-left:15px;">TUBERCULOSIS</td></tr>
</table>
 
</td></tr>

<tr><td style="padding-top:6px;">
<table style="font-family:Arial, Helvetica, sans-serif;font-size:12px;color:#7a7a7a;">
<tr><td><input type="checkbox" name="anemia" value="yes" <?php echo $choice6;?>/></td><td style="padding-left:15px;">ANEMIA</td></tr>
</table>

</td></tr>

<tr><td style="padding-top:6px;">
<table style="font-family:Arial, Helvetica, sans-serif;font-size:12px;color:#7a7a7a;">
<tr><td><input type="checkbox" name="epilepsy" value="yes" <?php echo $choice7;?>/></td><td style="padding-left:15px;">EPILEPSY</td></tr>
</table>

</td></tr>

<tr><td style="padding-top:6px;">
<table style="font-family:Arial, Helvetica, sans-serif;font-size:12px;color:#7a7a7a;">
<tr><td><input type="checkbox" name="asthma" value="yes" <?php echo $choice8;?>/></td><td style="padding-left:15px;">ASHTMA</td></tr>
</table>

</td></tr>

<!--table container--></table>
</td>

<td style="width:50%;">
<table cellpadding="0" cellspacing="0" border="0" style="width:100%;font-family:Arial, Helvetica, sans-serif;">
<tr><td>
<table style="font-family:Arial, Helvetica, sans-serif;font-size:12px;color:#7a7a7a;">
<tr><td><input type="checkbox" name="kidney" value="yes" <?php echo $choice9;?>/></td><td style="padding-left:15px;">KIDNEY INVOLVEMENT</td></tr>
</table>

</td></tr>

<tr><td style="padding-top:6px;">
<table style="font-family:Arial, Helvetica, sans-serif;font-size:12px;color:#7a7a7a;">
<tr><td>
<table cellpadding="0" cellspacing="0" border="0"><tr><td>
<input type="checkbox" name="endocrine" value="yes" <?php echo $choice10;?>/></td><td style="padding-left:15px;">ENDOCRINE OR THYROID</td></tr></table></td></tr>
<tr><td style="padding-left:35px;font-style:italic;"> (GOITHER, HYPERTHYROIDISM)</td></tr>
</table>
 
</td></tr>

<tr><td style="padding-top:6px;">
<table style="font-family:Arial, Helvetica, sans-serif;font-size:12px;color:#7a7a7a;">
<tr><td><input type="checkbox" name="bleeding" value="yes" <?php echo $choice11;?>/></td><td style="padding-left:15px;">PROLONGED BLEEDING</td></tr>
 </table>
</td></tr>

<tr><td style="padding-top:6px;">
<table style="font-family:Arial, Helvetica, sans-serif;font-size:12px;color:#7a7a7a;">
<tr><td>
<table cellpadding="0" cellspacing="0" border="0"><tr><td>
<input type="checkbox" name="liver" value="yes" <?php echo $choice12;?>/></td><td style="padding-left:15px;">LIVER INVOLVEMENT</td></tr></table></td></tr>
<tr><td style="padding-left:35px;font-style:italic;"> HISTORY OF HEPA A, HEPA B, JAUNDICE)</td></tr>
</table>


</td></tr>

<tr><td style="padding-top:6px;">
<table style="font-family:Arial, Helvetica, sans-serif;font-size:12px;color:#7a7a7a;">
<tr><td>
<table cellpadding="0" cellspacing="0" border="0"><tr><td>
<input type="checkbox" name="nervous" value="yes" <?php echo $choice13;?>/></td><td style="padding-left:15px;">NERVOUS DISORDER</td></tr></table></td></tr>
<tr><td style="padding-left:35px;font-style:italic;">(EPILEPSY, DOWN'S SYNDROME)</td></tr>
</table>

 
</td></tr>

<tr><td style="padding-top:6px;">
<table style="font-family:Arial, Helvetica, sans-serif;font-size:12px;color:#7a7a7a;">
<tr><td><input type="checkbox" name="hiv_aids" value="yes" <?php echo $choice14;?>/></td><td style="padding-left:15px;">HIV / AIDS </td></tr></table>
</td></tr>



<!--table container--></table>
</td>

</tr>
<input type="hidden" name="pt_id" value="<?php echo $id;?>" />
</form>
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