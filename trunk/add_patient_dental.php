<?php 
//var_dump($_SESSION);die();
session_start();
if(!$_SESSION["id"])
{
    //Do not show protected data, redirect to login...
    header('Location: dentist_login.php');
}

$page_now="2";
include('config.php');

$x=$_SESSION['id'];

$none="";


if(isset($_POST['next']))
{
	
if($_POST['id']) {	
$id=$_POST['id']; }

if(empty($_POST['pys_name'])) {
	$psy_name=$none;
}
else
{ $psy_name=mysql_real_escape_string($_POST['pys_name']); }

if(empty($_POST['last_visit'])) {
	$date_of_last_visit=$none; 
	
 }
else
{ $date_of_last_visit=mysql_real_escape_string($_POST['last_visit']); 

}

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

if(empty($_POST['hyper'])) {
$hyper=$none;  }
else
{ $hyper=mysql_real_escape_string($_POST['hyper']); }

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

WHERE id=".$id." AND dentist_id='".$x."'
";

$res=mysql_query($sql);
}



?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>My Dentist Pal</title>
<link rel="stylesheet" type="text/css" media="screen" href="style/style.css" />
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
<td><img src="images/dental_history.gif" style="margin-top:3px;"/></td>
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
<?php include('includes/box_add_patient_dental.php');?>
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