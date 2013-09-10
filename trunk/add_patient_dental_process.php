<?php
session_start();
if(!$_SESSION["id"])
{
    //Do not show protected data, redirect to login...
    header('Location: dentist_login.php');
}

$x=$_SESSION['id'];
$page_now="2";
include('config.php');

$none="";

//var_dump($_POST['last_date']);

if(isset($_POST['update']))
{

if($_POST['id']) {	
$id=$_POST['id']; }
	
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

WHERE id=".$id." AND dentist_id='".$x."'

";

$res=mysql_query($sql);

//var_dump($res);
echo "<script>alert('You have successfully added a new patient. You can set the username of the patient for him/her to login from the patient access.');</script>";
}//end process
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>My Dentist Pal</title>
<link rel="stylesheet" type="text/css" media="screen" href="style/style.css" />
</head>

<body style="margin:0;padding:0;background-color:#f6f5f5;">
<!--wrapper--><table cellpadding="0" cellspacing="0" border="0" width="100%">
<!--top--><tr><td>
<?php include('includes/top_patient.php')?>
<!--top--></td></tr>

<!--tooth--><tr><td>
<?php include('includes/top.php');?>
<!--dentisit dashboard--></td></tr>

<!--menubar--><tr><td width="100%" height="54" style="background-image:url('images/menubar.png');">
<!--menuinblack--><div style="margin:0 auto;width:520px;">
<table cellpadding="0" cellspacing="0" border="0">
<tr>
<td><img src="images/patient_list_black.png"/></td>
<td width="13">&nbsp;</td>
<td><img src="images/line.png"/></td>
<td width="13">&nbsp;</td>
<td><img src="img/bar_info.png"  /></td>
</tr>
</table>

<!--menuinblack--></div>
<!--menubar--></td></tr>

<!--include sidebar--><tr><td>
<div style="margin:0 auto;width:960px;">
<!--sidebar and content container--><table cellpadding="0" cellspacing="0" border="0">
<!--sidebar--><tr><td valign="top">
<div style="margin-top:-38px;">
<?php include('includes/sidebar.php');?>
</div>
<!--sidebar--></td>
<!--content--><td valign="top" style="padding-top:26px;">
<?php include('includes/box_send_invitation.php');?>
<!--content--></td>
</tr>



<!--sidebar and content container--></table>
<!--<div style="clear:both;height:20px;"></div>-->
</div>
<!--include sidebar--></td></tr>
<tr>
  <td style="background-color:#FFF;">&nbsp;</td>
</tr>
<tr>
  <td style="background-color:#FFF;"><?php include('includes/footer.php');?></td>
</tr>
<!--wrapper--></table>

</body>
</html>




