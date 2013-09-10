<?php 

//
//
//
//update
//
//
//


if(isset($_POST['update']))
{
$id=$_POST["pt_id"];

if(empty($_POST['denture']))
{ $denture=$none; }
else
{ $denture=mysql_real_escape_string($_POST['denture']);}

if(empty($_POST['former']))
{ $former=$none; }
else
{ $former=mysql_real_escape_string($_POST['former']);}

if(empty($_POST['address']))
{ $address=$none; }
else
{ $address=mysql_real_escape_string($_POST['address']);}

if(empty($_POST['last_date']))
{ $last_date=$none; }
else
{ $last_date=mysql_real_escape_string($_POST['last_date']);}

if(empty($_POST['floss']))
{ $floss=$none; }
else
{ $floss=mysql_real_escape_string($_POST['floss']);}

if(empty($_POST['brush']))
{ $brush=$none; }
else
{ $brush=mysql_real_escape_string($_POST['brush']);}

if(empty($_POST['bad_breath']))
{ $bad_breath=$none; }
else
{ $bad_breath=mysql_real_escape_string($_POST['bad_breath']);}

if(empty($_POST['bleeding_gums']))
{ $bleeding_gums=$none; }
else
{ $bleeding_gums=mysql_real_escape_string($_POST['bleeding_gums']);}

if(empty($_POST['clicking_jaws']))
{ $clicking_jaws=$none; }
else
{ $clicking_jaws=mysql_real_escape_string($_POST['clicking_jaws']);}

if(empty($_POST['food_collection']))
{ $food_collection=$none; }
else
{ $food_collection=mysql_real_escape_string($_POST['food_collection']);}

if(empty($_POST['grinding_teeth']))
{ $grinding_teeth=$none; }
else
{ $grinding_teeth=mysql_real_escape_string($_POST['grinding_teeth']);}

if(empty($_POST['loose_teeth']))
{ $loose_teeth=$none; }
else
{ $loose_teeth=mysql_real_escape_string($_POST['loose_teeth']);}

if(empty($_POST['periodental_treatment']))
{ $periodental_treatment=$none; }
else
{ $periodental_treatment=mysql_real_escape_string($_POST['periodental_treatment']);}

if(empty($_POST['sensitive_to_hot']))
{ $sensitive_to_hot=$none; }
else
{ $sensitive_to_hot=mysql_real_escape_string($_POST['sensitive_to_hot']);}

if(empty($_POST['sensitive_to_cold']))
{ $sensitive_to_cold=$none; }
else
{ $sensitive_to_cold=mysql_real_escape_string($_POST['sensitive_to_cold']);}

if(empty($_POST['sensitive_to_sweet']))
{ $sensitive_to_sweet=$none; }
else
{ $sensitive_to_sweet=mysql_real_escape_string($_POST['sensitive_to_sweet']);}

if(empty($_POST['sensitive_to_bite']))
{ $sensitive_to_bite=$none; }
else
{ $sensitive_to_bite=mysql_real_escape_string($_POST['sensitive_to_bite']);}

if(empty($_POST['sore_mouth']))
{ $sore_mouth=$none; }
else
{ $sore_mouth=mysql_real_escape_string($_POST['sore_mouth']);}

if(empty($_POST['listmed']))
{ $listmed=$none; }
else
{ $listmed=mysql_real_escape_string($_POST['listmed']);}

if(empty($_POST['listallergy']))
{ $listallergy=$none; }
else
{ $listallergy=mysql_real_escape_string($_POST['listallergy']);}

if(empty($_POST['asp']))
{ $asp=$none; }
else
{ $asp=mysql_real_escape_string($_POST['asp']);}

if(empty($_POST['barb']))
{ $barb=$none; }
else
{ $barb=mysql_real_escape_string($_POST['barb']);}

if(empty($_POST['pen']))
{ $pen=$none; }
else
{ $pen=mysql_real_escape_string($_POST['pen']);}

if(empty($_POST['local']))
{ $local=$none; }
else
{ $local=mysql_real_escape_string($_POST['local']);}

if(empty($_POST['sulf']))
{ $sulf=$none; }
else
{ $sulf=mysql_real_escape_string($_POST['sulf']);}

if(empty($_POST['ery']))
{ $ery=$none; }
else
{ $ery=mysql_real_escape_string($_POST['ery']);}

if(empty($_POST['otherinfo']))
{ $otherinfo=$none; }
else
{ $otherinfo=mysql_real_escape_string($_POST['otherinfo']);}


$sql="UPDATE patient_list SET
reason_for_visit='".$denture."',
former_dentist='".$former."',
former_dentist_address='".$address."',
last_dental_care='".$last_date."',
how_many_floss='".$floss."',
how_many_brush='".$brush."',
bad_breath='".$bad_breath."',
bleeding_gums='".$bleeding_gums."',
clicking_popping_jaw='".$clicking_jaws."',
food_collect='".$food_collection."',
grinding_teeth='".$grinding_teeth."',
loose_teeth='".$loose_teeth."',
periodental_treatment='".$periodental_treatment."',
sensitive_hot='".$sensitive_to_hot."',
sensitive_cold='".$sensitive_to_cold."',
sensitive_sweet='".$sensitive_to_sweet."',
sensitive_bite='".$sensitive_to_bite."',
sores_in_mouth='".$sore_mouth."',
medication='".$listmed."',
allergy_to_medication='".$listallergy."',
other_info='".$otherinfo."',
aspirin='".$asp."',
barbiturates='".$barb."',
penicillin='".$pen."',
local_anesthetic='".$local."',
sulfa='".$sulf."',
erythromycin='".$ery."'

WHERE id=".$id."

";

$res=mysql_query($sql);

header('Location: patient_dental.php?id='.$id.'');

}



$sql="SELECT * FROM patient_list WHERE id=".$id."";
$res=mysql_query($sql);
while($row=mysql_fetch_array($res))
{
$name=$row["patient_name"];	
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
<link type="text/css" href="jquery-ui-1.8.17.custom/css/start/jquery-ui-1.8.17.custom.css" rel="stylesheet" />	
		<script type="text/javascript" src="jquery-ui-1.8.17.custom/js/jquery-1.7.1.min.js"></script>
		<script type="text/javascript" src="jquery-ui-1.8.17.custom/js/jquery-ui-1.8.17.custom.min.js"></script>
		<script type="text/javascript">
			$(function(){

				

				// Datepicker
				$('#datepicker').datepicker({
					inline: true
				});
				
				
			});
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
        <style type="text/css">
			/*demo page css*/
			body{ font: 62.5% "Trebuchet MS", sans-serif; margin: 50px;}
			.demoHeaders { margin-top: 2em; }
			#dialog_link {padding: .4em 1em .4em 20px;text-decoration: none;position: relative;}
			#dialog_link span.ui-icon {margin: 0 5px 0 0;position: absolute;left: .2em;top: 50%;margin-top: -8px;}
			ul#icons {margin: 0; padding: 0;}
			ul#icons li {margin: 2px; position: relative; padding: 4px 0; cursor: pointer; float: left;  list-style: none;}
			ul#icons span.ui-icon {float: left; margin: 0 4px;}
		</style>	
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
        <form method="post" action="" enctype="multipart/form-data">
        <div style="margin-top:-7px;">
        <input type="submit" name="update" value="UPDATE" class="submit" style="margin-right:10px;" onclick="return onSave();"/>
     <input type="button" name="cancel" value="CANCEL" class="submit" style="margin-right:17px;" onclick="window.location='patient_dental.php?id=<?php echo $id;?>'"/>
     </div>
     </td></tr></table>
      </tr>
      <tr>
        <td colspan="2" valign="top" style="background:url(img/3.jpg); padding-bottom:10px;"><div style="margin-top:-8px; position: relative;">
          <table width="690" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td bgcolor="#FFFFFF" style="border-left:1px solid #a0a8ac; border-bottom:1px solid #a0a8ac; border-right:1px solid #a0a8ac;"><!--<p>&nbsp;</p>-->
              <!--<img src="img/menu_dental.png" border="0" usemap="#Map" />-->
              
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
                <a href="patient_dental.php?id=<?php echo $id;?>" class="link_map">
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
            <!--content--><tr><td>
            <div style="background-color:#FFF;padding-left:15px;padding-top:25px;">
            <table cellpadding="0" cellspacing="0" border="0" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;">

<!--content-->
<tr>
<td valign="top">
<table cellpadding="0" cellspacing="0" border="0">
<tr>
<td style="text-align:right;font-weight:600;color:#000;font-family:Arial, Helvetica, sans-serif;font-size:13px;">Reasons for visits:</td>
<td width="15">&nbsp;</td>
<td style="text-align:left;font-weight:600;color:#999;font-family:Arial, Helvetica, sans-serif;font-size:13px;"><!--Denture Cleaning--><input type="text" name="denture" style="width:147px;height:22px;font-size:16px;" value="<?php echo $reason_for_visit;?>"/></td>
</tr>
<tr>
<td style="padding-top:10px;text-align:right;font-weight:600;color:#000;font-family:Arial, Helvetica, sans-serif;font-size:13px;">Former Dentist:</td>
<td width="15">&nbsp;</td>
<td style="padding-top:10px;text-align:left;font-weight:600;color:#999;font-family:Arial, Helvetica, sans-serif;font-size:13px;"><!--Cynthia Valez--><input type="text" name="former" style="width:147px;height:22px;font-size:16px;" value="<?php echo $former_dentist;?> "/></td>
</tr>
<tr>
<td style="padding-top:10px;text-align:right;font-weight:600;color:#000;font-family:Arial, Helvetica, sans-serif;font-size:13px;">Address:</td>
<td width="15">&nbsp;</td>
<td style="padding-top:10px;text-align:left;font-weight:600;color:#999;font-family:Arial, Helvetica, sans-serif;font-size:13px;"><!--Binakayan, Cavite--><input type="text" name="address" style="width:147px;height:22px;font-size:16px;" value="<?php echo $former_dentist_address;?>"/></td>
</tr>
<tr>
<td style="padding-top:10px;text-align:right;font-weight:600;color:#000;font-family:Arial, Helvetica, sans-serif;font-size:13px;">Date of last dental care:</td>
<td width="15">&nbsp;</td>
<td style="padding-top:10px;text-align:left;font-weight:600;color:#999;font-family:Arial, Helvetica, sans-serif;font-size:13px;"><!--09/05/2010--><input type="text" name="last_date" id="datepicker" style="width:147px;height:22px;font-size:16px;" value="<?php echo $last_dental_care;?>"/></td>
</tr>
</table>
</td>

<td valign="top" style="padding-left:30px;">
<table cellpadding="0" cellspacing="0" border="0" width="300">
<tr>
<td style="text-align:right;font-weight:600;color:#000;font-family:Arial, Helvetica, sans-serif;font-size:13px;">How often do you floss?:</td>
<td width="15">&nbsp;</td>
<td style="text-align:left;font-weight:600;color:#999;font-family:Arial, Helvetica, sans-serif;font-size:13px;"><!--None-->
<input type="text" name="floss" style="width:111px;height:22px;font-size:16px;" value="<?php echo $how_many_floss;?>"/></td>
</tr>
<tr>
<td style="padding-top:10px;text-align:right;font-weight:600;color:#000;font-family:Arial, Helvetica, sans-serif;font-size:13px;">How often do you brush?:</td>
<td width="15">&nbsp;</td>
<td style="padding-top:10px;text-align:left;font-weight:600;color:#999;font-family:Arial, Helvetica, sans-serif;font-size:13px;"><!--Twice--><input type="text" name="brush" style="width:111px;height:22px;font-size:16px;" value="<?php echo $how_many_brush;?>"/></td>
</tr>

</table>
</td>
</tr>

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
<input type="checkbox" name="bad_breath" <?php echo $checked1;?>/>
</td>
<td width="15">&nbsp;</td>
<td>BAD BREATH</td>
</tr>
<tr><td style="padding-top:6px;">
<input type="checkbox" name="bleeding_gums" <?php echo $checked2;?>/>
</td>
<td width="15">&nbsp;</td>
<td style="padding-top:6px;">BLEEDING GUMS</td>
</tr>
<tr><td style="padding-top:6px;">
<input type="checkbox" name="clicking_jaws" <?php echo $checked3;?>/>
</td>
<td width="15">&nbsp;</td>
<td style="padding-top:6px;">CLICKING OR POPPING JAW</td>
</tr>
<tr><td style="padding-top:6px;">
<input type="checkbox" name="food_collection" <?php echo $checked4;?>/>
</td>
<td width="15">&nbsp;</td>
<td style="padding-top:6px;">FOOD COLLECTION BETWEEN TEETH</td>
</tr>
<tr><td style="padding-top:6px;">
<input type="checkbox" name="grinding_teeth" <?php echo $checked5;?>/>
</td>
<td width="15">&nbsp;</td>
<td style="padding-top:6px;">GRINDING TEETH</td>
</tr>
<tr><td style="padding-top:6px;">
<input type="checkbox" name="loose_teeth" <?php echo $checked6;?>/>
</td>
<td width="15">&nbsp;</td>
<td style="padding-top:6px;">LOOSE TEETH OR BROCKEN FILLINGS</td>
</tr>
</table>

</td>
<td valign="top">
<table cellpadding="0" cellspacing="0" border="0">
<tr><td>
<input type="checkbox" name="periodental_treatment" <?php echo $checked7;?>/>
</td>
<td width="15">&nbsp;</td>
<td>PERIODONTAL TREATMENT</td>
</tr>
<tr><td style="padding-top:6px;">
<input type="checkbox" name="sensitive_to_hot" <?php echo $checked8;?>/>
</td>
<td width="15">&nbsp;</td>
<td style="padding-top:6px;">SENSITIVITY TO HOT</td>
</tr>
<tr><td style="padding-top:6px;">
<input type="checkbox" name="sensitive_to_cold" <?php echo $checked9;?>/>
</td>
<td width="15">&nbsp;</td>
<td style="padding-top:6px;">SENSITIVITY TO COLD</td>
</tr>
<tr><td style="padding-top:6px;">
<input type="checkbox" name="sensitive_to_sweet" <?php echo $checked10;?>/>
</td>
<td width="15">&nbsp;</td>
<td style="padding-top:6px;">SENSITIVITY TO SWEET</td>
</tr>
<tr><td style="padding-top:6px;">
<input type="checkbox" name="sensitive_to_bite" <?php echo $checked11;?>/>
</td>
<td width="15">&nbsp;</td>
<td style="padding-top:6px;">SENSITIVITY WHEN BITING</td>
</tr>
<tr><td style="padding-top:6px;">
<input type="checkbox" name="sore_mouth" <?php echo $checked12;?>/>
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
<td style="font-weight:600;color:#000;font-family:Arial, Helvetica, sans-serif;font-size:13px;">
List medication you are currently taking
</td></tr>
<tr><td style="padding-top:8px;">
<textarea name="listmed" cols="32" rows="4" style="font-family:Arial, Helvetica, sans-serif;font-size:16px;"><?php echo $medication;?></textarea>
</td></tr>
<tr><td style="padding-top:12px;font-weight:600;color:#000;font-family:Arial, Helvetica, sans-serif;font-size:13px;">
Are you aware of being allergic to any other medications or substances? If yes, please list.
</td></tr>
<tr><td style="padding-top:8px;">
<textarea name="listallergy" cols="32" rows="4" style="font-family:Arial, Helvetica, sans-serif;font-size:16px;"><?php echo $allergy_to_medication;?></textarea>
</td>
</tr>

</table>
</td>

<td valign="top">
<table cellpadding="0" cellspacing="0" border="0">
<tr><td>
<input type="checkbox" name="asp" <?php echo $checked13;?> />
</td>
<td width="15">&nbsp;</td>
<td style="font-weight:600;color:#999;font-family:Arial, Helvetica, sans-serif;font-size:13px;">Aspirin</td>
</tr>
<tr><td style="padding-top:6px;">
<input type="checkbox" name="barb" <?php echo $checked14;?>/>
</td>
<td width="15">&nbsp;</td>
<td style="padding-top:6px;font-weight:600;color:#999;font-family:Arial, Helvetica, sans-serif;font-size:13px;">Barbiturates (Sleeping Pills)</td>
</tr>
<tr><td style="padding-top:6px;">
<input type="checkbox" name="pen" <?php echo $checked15;?> />
</td>
<td width="15">&nbsp;</td>
<td style="padding-top:6px;font-weight:600;color:#999;font-family:Arial, Helvetica, sans-serif;font-size:13px;">Penicillin</td>
</tr>
<tr><td style="padding-top:6px;">
<input type="checkbox" name="local" <?php echo $checked16;?>/>
</td>
<td width="15">&nbsp;</td>
<td style="padding-top:6px;font-weight:600;color:#999;font-family:Arial, Helvetica, sans-serif;font-size:13px;">Local Anesthetic</td>
</tr>
<tr><td style="padding-top:6px;">
<input type="checkbox" name="sulf" <?php echo $checked17;?>/>
</td>
<td width="15">&nbsp;</td>
<td style="padding-top:6px;font-weight:600;color:#999;font-family:Arial, Helvetica, sans-serif;font-size:13px;">Sulfa</td>
</tr>
<tr><td style="padding-top:6px;">
<input type="checkbox" name="ery" <?php echo $checked18;?>/>
</td>
<td width="15">&nbsp;</td>
<td style="padding-top:6px;font-weight:600;color:#999;font-family:Arial, Helvetica, sans-serif;font-size:13px;">Erythromycin</td>
</tr>
</table>
</td>

</tr></table>
            </td></tr>
            <!--bottom content-->
            
            <!--last part-->
            <tr><td style="background-color:#FFF;padding-left:30px;padding-top:12px;font-weight:600;color:#000;font-family:Arial, Helvetica, sans-serif;font-size:13px;">
Is there any other medical or dental information that you feel we should know about?
</td></tr>
<tr><td style="padding-left:30px;padding-top:8px;background-color:#FFF;"> 
<textarea name="otherinfo" cols="70" rows="4" style="font-family:Arial, Helvetica, sans-serif;font-size:16px;"><?php echo $other_info;?></textarea>
<input type="hidden" name="pt_id" value="<?php echo $id;?>" />
</form>
</td></tr>
<tr><td height="10" style="background-color:#FFF;">&nbsp;</td></tr>
            <!--last part-->
          </table>
        </div></td>
      </tr>
      <tr>
        <td colspan="2"><img src="img/4.jpg" width="739" height="6" alt="" /></td>
      </tr>
    </table></td>
  </tr>
</table>

<!--<map name="Map" id="Map">
  <area shape="rect" coords="2,4,97,33" href="patient_info_edit.php?id=<?php //echo $id;?>" />
  <area shape="rect" coords="103,5,216,33" href="patient_medical_edit.php?id=<?php //echo $id;?>" />
  <area shape="rect" coords="223,6,330,33" href="#" />
</map>-->
</body>
</html>
