<?php
session_start();
//var_dump($_SESSION);die();
if(!$_SESSION["admin_username"])
{
    //Do not show protected data, redirect to login...
    header('Location: admin_login.php');
}

include('config.php');?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>My Dentist Pal</title>
<link rel="stylesheet" type="text/css" media="screen" href="../style/style.css" />
</head>

<body style="margin:0;padding:0;background-color:#f6f5f5;">
<!--wrapper--><table cellpadding="0" cellspacing="0" border="0" width="100%">
<!--top--><tr><td>
<?php include('../includes/admin_top.php');?>
<!--top--></td></tr>

<!--tooth--><tr><td>
<!--navigation bar--><div style="background-image:url('../images/topnav.jpg');width:100%;height:80px;">
<div style="margin:0 auto;width:960px;">
<div style="float:left;"><!--left-->
<div style="float:left;"><img src="../images/toothlogo.png" style="margin-top:15px;"/></div>
<div style="float:left;margin-left:10px;font-family:Arial, Helvetica, sans-serif;font-size:32px;color:#FFF;margin-top:20px;width:210px;">My Dentist Pal</div>
<div style="float:left;margin-left:5px;margin-top:23px;font-size:12px;color:#70d8f8;font-family:'Trebuchet MS', Arial, Helvetica, sans-serif;">Ver. 1.0</div>
</div><!--end of left-->
<!--right-->
<div style="float:right;margin-top:45px;">
<div style="float:right;background-image:url('../images/option2.png');width:101px;height:35px;"></div>
<a href="admin_profile.php"><div style="float:right;background-image:url('../images/profile.png');width:101px;height:35px;"></div></a>
<a href="message_contact.php"><div style="float:right;background-image:url('../images/messaging.png');width:116px;height:35px;margin-right:2px;"></div></a>
</div>
</div><!--end of center-->
</div><!--end with navigation bar-->
<!--tooth--></td></tr>

<!--dentisit dashboard--><tr><td>
<div style="background-color:#e0e2e4;width:100%;height:90px;">
<div style="margin:0 auto;width:940px;"><!--center-->
<div style="float:left;margin-top:28px;"><!--Dentist's Dashboard--><!--<img src="images/dentist_dashboard.png" />-->
<span style="font-weight:bold;font-size:30px;color:#333;font-family:Arial, Helvetica, sans-serif;">
Admin's Dashboard</span>
</div>
<div style="float:right;">
<div style="float:right;margin-top:28px;"><input type="text" name="search" /></div>
<div style="clear:both;"></div>
<div style="float:right;color:#969da4;font-size:10px;font-family:'Trebuchet MS', Arial, Helvetica, sans-serif;">CLICK HERE FOR ADVANCE SEARCH</div></div>
</div><!--end of center-->
</div>
<!--dentisit dashboard--></td></tr>

<!--menubar--><tr><td width="100%" height="54" style="background-image:url('../images/menubar.png');">
<!--menuinblack--><div style="margin:0 auto;width:520px;">
<table cellpadding="0" cellspacing="0" border="0">
<tr>
<td><!--<img src="../img/bar_message_main.png"/></td>
<td width="13">&nbsp;</td>
<td><img src="../images/line.png"/></td>
<td width="13">&nbsp;</td>
<td><img src="../img/bar_message1.png" style="margin-top:6px;" />-->

</td>
</tr>
</table>

<!--menuinblack--></div>
<!--menubar--></td></tr>

<!--include sidebar--><tr><td>
<div style="margin:0 auto;width:960px;">
<!--sidebar and content container--><table cellpadding="0" cellspacing="0" border="0">
<!--sidebar--><tr><td valign="top">
<div style="margin-top:-38px;">
<?php include('../includes/sidebar_admin.php');?>
</div>
<!--sidebar--></td>
<!--content--><td valign="top" style="padding-top:26px;">
<?php include('includes/box_banner_inactive.php');?>
<!--content--></td>
</tr>



<!--sidebar and content container--></table>
<!--<div style="clear:both;height:20px;"></div>-->
</div>
<!--include sidebar--></td></tr>

<!--wrapper--></table>
<div style="clear:both;height:20px;"></div>
<?php include('includes/footer.php');?>
</body>
</html>

