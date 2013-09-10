<?php
//echo "admin landing";
session_start();
//var_dump($_SESSION);die();
if(!$_SESSION["admin_username"])
{
    //Do not show protected data, redirect to login...
    header('Location: admin_login.php');
}
$page_now=1;
include('../config.php');
?>
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
<?php include('../includes/admin_top.php')?>
<!--top--></td></tr>

<!--tooth--><tr><td>
<?php include('includes/admin_top.php')?>
<!--dentisit dashboard--></td></tr>
<?php /*
<!--menubar--><tr><td width="100%" height="54" style="background-image:url('images/menubar.png');">
<!--menuinblack--><div style="margin:0 auto;width:520px;">
<table cellpadding="0" cellspacing="0" border="0">
<tr>
<td><img src="img/bar_message_main.png"/></td>
<td width="13">&nbsp;</td>
<td><img src="images/line.png"/></td>
<td width="13">&nbsp;</td>
<td><img src="img/bar_compose_black.png" style="margin-top:6px;" /></td>
</tr>
</table>

<!--menuinblack--></div>
<!--menubar--></td></tr>*/?>

<!--include sidebar--><tr><td>
<div style="margin:0 auto;width:960px;margin-top:20px;">
<!--sidebar and content container--><table cellpadding="0" cellspacing="0" border="0">
<!--sidebar--><tr><td valign="top">
<div>
<?php include('../includes/sidebar_admin.php');?>
</div>
<!--sidebar--></td>
<!--content--><td valign="top">
<?php //include('includes/box_message_compose.php');?>

<!--first box--><table cellpadding="0" cellspacing="0" border="0" style="font-family:Arial, Helvetica, sans-serif;" width="764">
<tr><td width="100%">
<table cellpadding="0" cellspacing="0" border="0" width="100%"><tr>
<td style="background-image:url('../img/landing_left_blue.png');height:46px;width:6px;"></td>
<td style="background-image:url('../img/landing_center_blue.png');height:46px;width:650px;color:#fbfdfe;font-size:22px;padding-left:20px;"><!--<img src="../img/landing_general.png" width="167" height="23" style="margin-top:3px;"/>-->
<span style="font-weight:bold;font-size:20px;color:#FFF;font-family:Arial, Helvetica, sans-serif;">
<img src="../img/status.png" /></span>
</td>
<td style="background-image:url('../img/landing_right_blue.png');height:46px;width:6px;"></td>
</tr></table></td></tr>
<tr><td width="100%">
<table cellpadding="0" cellspacing="0" border="0" width="100%">
<tr><td valign="top" width="100%" style="background-color:#fdfdfd;" height="235" class="landing_box">

<table cellpadding="0" cellspacing="0" border="0" width="100%">
<tr><td style="font-family:Arial, Helvetica, sans-serif;font-weight:bold;color:#333;font-size:16px;background-color:#e0eefa;height:45px;width:50%;padding-left:15px;">
Messages
</td>
<td style="font-family:Arial, Helvetica, sans-serif;font-weight:bold;color:#333;font-size:16px;background-color:#e0eefa;height:45px;width:50%;padding-left:15px;">
Accounts
</td>
</tr>
<?php
$no="yes";
$sql="SELECT COUNT(*) AS num FROM admin_received_message WHERE message_read='".$no."'";
$res=mysql_query($sql);
$query=mysql_fetch_assoc($res);
$rows=$query['num'];

//var_dump($res);
?>
<tr><td>
<table cellpadding="0" cellspacing="0" border="0" width="100%"> 
<tr style="background-color:#FFF;">
<td style="padding-top:10px;padding-left:15px;font-family:Arial, Helvetica, sans-serif;font-weight: 800;color:#333;font-size:16px;">
Read Messages
</td>
<td align="right" style="color:#F00;padding-top:10px;padding-right:25px;">
<a href="admin/message_received.php" style="text-decoration:none;color: #F00;" target="_blank"><?php echo $rows;?></a>
</td>
</tr>
<tr><td>
&nbsp;&nbsp;&nbsp;..........................................................................</td></tr>
<?php
$no="no";
$sql="SELECT COUNT(*) AS num FROM admin_received_message WHERE message_read='".$no."'";
$res=mysql_query($sql);
$query=mysql_fetch_assoc($res);
$rows=$query['num'];?>
<tr style="background-color:#FFF;">
<td style="padding-top:10px;padding-left:15px;font-family:Arial, Helvetica, sans-serif;font-weight: 800;color:#333;font-size:16px;">
Unread Messages
</td>
<td align="right" style="color:#F00;padding-top:10px;padding-right:25px;">
<a href="admin/message_received.php" style="text-decoration:none;color: #F00;" target="_blank"><?php echo $rows;?></a>
</td>
</tr>

</table></td>

<td>

<table cellpadding="0" cellspacing="0" border="0" width="100%"> 
<?php
$no="yes";
$sql="SELECT COUNT(*) AS num FROM dentist_list WHERE allow_dentist='".$no."'";
$res=mysql_query($sql);
$query=mysql_fetch_assoc($res);
$rows=$query['num'];?>
<tr style="background-color:#FFF;">
<td style="padding-top:10px;padding-left:15px;font-family:Arial, Helvetica, sans-serif;font-weight: 800;color:#333;font-size:16px;">
Active Accounts
</td>
<td align="right" style="color:#F00;padding-top:10px;padding-right:25px;">
<a href="admin/active_accounts.php" style="text-decoration:none;color: #F00;" target="_blank"><?php echo $rows;?></a>
</td>
</tr>
<tr><td>
&nbsp;&nbsp;&nbsp;..........................................................................</td></tr>
<tr style="background-color:#FFF;">
<?php
$no="no";
$sql="SELECT COUNT(*) AS num FROM dentist_list WHERE allow_dentist='".$no."'";
$res=mysql_query($sql);
$query=mysql_fetch_assoc($res);
$rows=$query['num'];?>
<td style="padding-top:10px;padding-left:15px;font-family:Arial, Helvetica, sans-serif;font-weight: 800;color:#333;font-size:16px;">
Pending Accounts
</td>
<td align="right" style="color:#F00;padding-top:10px;padding-right:25px;">
<a href="admin/accounts.php" style="text-decoration:none;color: #F00;" target="_blank"><?php echo $rows;?></a>
</td>
</tr>

</table>

</td>

</tr>
<tr><td><div style="clear:both;height:15px;"></div></td></tr>
<tr><td style="font-family:Arial, Helvetica, sans-serif;font-weight:bold;color:#333;font-size:16px;background-color:#e0eefa;height:45px;width:50%;padding-left:15px;">
Banner Ads
</td>
<td style="font-family:Arial, Helvetica, sans-serif;font-weight:bold;color:#333;font-size:16px;background-color:#e0eefa;height:45px;width:50%;padding-left:15px;">
Promos & Offers
</td>
</tr>

<tr><td>
<?php
$no="yes";
$sql="SELECT COUNT(*) AS num FROM banner WHERE activate='".$no."'";
$res=mysql_query($sql);
$query=mysql_fetch_assoc($res);
$rows=$query['num'];?>
<table cellpadding="0" cellspacing="0" border="0" width="100%"> 
<tr style="background-color:#FFF;">
<td style="padding-top:10px;padding-left:15px;font-family:Arial, Helvetica, sans-serif;font-weight: 800;color:#333;font-size:16px;">
Active Banners
</td>
<td align="right" style="color:#F00;padding-top:10px;padding-right:25px;">
<a href="admin/banner_adds.php" style="text-decoration:none;color: #F00;" target="_blank"><?php echo $rows;?></a>
</td>
</tr>


</table> 

</td>

<td>
<table cellpadding="0" cellspacing="0" border="0" width="100%"> 
<?php
//$no="yes";
$sql="SELECT COUNT(*) AS num FROM promos_and_offer";
$res=mysql_query($sql);
$query=mysql_fetch_assoc($res);
$rows=$query['num'];?>
<tr style="background-color:#FFF;">
<td style="padding-top:10px;padding-left:15px;font-family:Arial, Helvetica, sans-serif;font-weight: 800;color:#333;font-size:16px;">
No. of Promos & Offers
</td>
<td align="right" style="color:#F00;padding-top:10px;padding-right:25px;">
<a href="admin/promos_and_offer.php" style="text-decoration:none;color: #F00;" target="_blank"><?php echo $rows;?></a>
</td>
</tr>


</table> 

</td>
</tr>
</table> 
</td></tr>
<!--first box--></table>

<!--content--></td>



</tr>


</table></td></tr>



<!--sidebar and content container--></table>
<!--<div style="clear:both;height:20px;"></div>-->
<div style="clear:both;height:20px;"></div>
</div>
<!--include sidebar--></td></tr>
<!--wrapper-->



</table>
<div style="clear:both;height:20px;"></div>
<?php include('includes/footer.php');?>
</body>
</html>



