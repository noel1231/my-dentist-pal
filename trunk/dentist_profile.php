<?php
session_start();
//var_dump($_SESSION);die();
if(!$_SESSION["id"])
{
    //Do not show protected data, redirect to login...
    header('Location: dentist_login.php');
}
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>My Dentist Pal</title>
<link rel="stylesheet" type="text/css" media="screen" href="style/style.css" /><?php include("ganalytics.php"); ?>
</head>

<body style="margin:0;padding:0;background-color:#f6f5f5;">
<!--wrapper--><table cellpadding="0" cellspacing="0" border="0" width="100%">
<!--top--><tr><td>
<?php include('includes/top_patient.php')?>
<!--top--></td></tr>

<!--tooth--><tr><td>
<?php //include('includes/top.php');?>
<!--navigation bar--><div style="background-image:url('images/topnav.jpg');width:100%;height:80px;">
<div style="margin:0 auto;width:960px;">
<div onclick="window.location='dentist_landing.php'" style="float:left;"><!--left-->
<div style="float:left;" onclick="window.location='dentist_landing.php'"><img src="images/toothlogo.png" style="margin-top:15px;"/></div>
<div style="float:left;margin-left:10px;margin-top:20px;width:210px;"><a href="dentist_landing.php" title="Go to Dashboard" style="text-decoration:none;font-family:Arial, Helvetica, sans-serif;font-size:32px;color:#FFF;">My Dentist Pal</a></div>
<div style="float:left;margin-left:5px;margin-top:23px;font-size:12px;color:#70d8f8;font-family:'Trebuchet MS', Arial, Helvetica, sans-serif;">Ver. 1.0</div>
</div><!--end of left-->
<!--right-->
<div style="float:right;margin-top:45px;">
<!--<div style="float:right;background-image:url('images/option2.png');width:101px;height:35px;"></div>-->
<div style="float:right;">
<ul class="cssMenu">
	<li>
		<a href="#"><div style="float:right;background-image:url('images/option2.png');width:101px;height:35px;"></div></a>           
		<ul>
			<li><a href="dentist_account.php"><div style="width:116px;height:29px;color:#13749a;">
            <table cellpadding="0" cellspacing="0" border="0" style="padding-top:5px;width:56px;">
            <tr><td style="padding-left:15px;"><img src="img/settings.png" /></td><td style="font-size:14px;padding-left:10px;width:35px;">Settings</td></tr>
            </table></div></a></li>
			<li><a href="logout.php"><div style="width:116px;height:29px;color:#13749a;"><table cellpadding="0" cellspacing="0" border="0" style="padding-top:5px;width:56px;">
            <tr><td style="padding-left:18px;"><img src="img/logout.png" /></td><td style="font-size:14px;padding-left:10px;">Logout</td></tr>
            </table></div></a></li>
		
		</ul>
	</li></ul>
</div>
<a href="dentist_profile.php"><div style="float:right;background-image:url('img/profile_Active.png');width:102px;height:35px;"></div></a>
<a href="message_contact.php"><div style="float:right;background-image:url('images/messaging.png');width:115px;height:35px;margin-right:2px;"></div></a>
</div>
</div><!--end of center-->
</div><!--end with navigation bar-->
<!--tooth--></td></tr>

<!--dentisit dashboard--><tr><td>
<div style="background-color:#e0e2e4;width:100%;height:90px;">
<div style="margin:0 auto;width:940px;"><!--center-->
<div style="float:left;margin-top:28px;"><!--Dentist's Dashboard--><img src="images/dentist_dashboard.png" /></div>
<div style="float:right;">
<!--<div style="float:right;margin-top:28px;"><input type="text" name="search" /></div>-->
<div style="clear:both;"></div>
<!--<div style="float:right;color:#969da4;font-size:10px;font-family:'Trebuchet MS', Arial, Helvetica, sans-serif;">CLICK HERE FOR ADVANCE SEARCH</div>--></div>
</div><!--end of center-->
</div>
<!--dentisit dashboard--></td></tr>

<!--menubar--><tr><td width="100%" height="54" style="background-image:url('images/menubar.png');">
<!--menuinblack--><div style="margin:0 auto;width:520px;">
<table cellpadding="0" cellspacing="0" border="0">
<tr>
<td><img src="img/dentist_profile_black.png" width="178" height="29"/></td>
<!--<td width="13">&nbsp;</td>
<td><img src="images/line.png"/></td>
<td width="13">&nbsp;</td>
<td><img src="img/dentist_profile.png" style="margin-top:6px;" /></td>-->
</tr>
</table>

<!--menuinblack--></div>
<!--menubar--></td></tr>

<!--include sidebar--><tr><td>
<div style="margin:0 auto;width:960px;">
<!--sidebar and content container--><table cellpadding="0" cellspacing="0" border="0">
<!--sidebar--><tr><td valign="top">
<div style="margin-top:-38px;">
<?php include('includes/sidebar_message.php');?>
</div>
<!--sidebar--></td>
<!--content--><td valign="top" style="padding-top:26px;">
<?php if(isset($_GET['do']))
$do=$_GET['do'];
if($do=="edit") {
 include('includes/box_dentist_profile_edit.php'); }
 
 else {
	include('includes/box_dentist_profile.php'); 
 }?>
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

