<?php 
session_start();
//var_dump($_SESSION);die();
if(!$_SESSION["admin_username"])
{
    //Do not show protected data, redirect to login...
    header('Location: admin_login.php');
}
$page_now=11;
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
<?php include('includes/admin_top.php');?>
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
<?php include('includes/box_announcement.php');?>
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

