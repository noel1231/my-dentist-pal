<?php 

session_start();
//var_dump($_SESSION);die();
if(!$_SESSION["patient_id"])
{
    //Do not show protected data, redirect to login...
    header('Location: patient_login.php');
}

include('../config.php');

$patient_id=$_SESSION['patient_id'];
//var_dump($patient_id);
$page_now=1;
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
<?php include('../includes/top_for_patient.php');?>
<!--top--></td></tr>

<!--tooth--><tr><td>
<?php include('../includes/top2.php');?>
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
<?php include('../includes/sidebar_patient.php');?>
</div>
<!--sidebar--></td>
<!--content--><td valign="top">
<?php //include('includes/box_message_compose.php');?>

<!--first box--><table cellpadding="0" cellspacing="0" border="0" style="font-family:Arial, Helvetica, sans-serif;" width="364">
<tr><td width="100%">
<table cellpadding="0" cellspacing="0" border="0" width="100%"><tr>
<td style="background-image:url('../img/landing_left_blue.png');height:46px;width:7px;"></td>
<td style="background-image:url('../img/landing_center_blue.png');height:46px;width:350px;color:#fbfdfe;font-size:22px;padding-left:20px;"><!--<img src="img/landing_general.png" width="167" height="23" style="margin-top:3px;"/>-->

<span style="font-family:'Trebuchet MS', Arial, Helvetica, sans-serif;color:#FFF;font-size:20px;">Notification Alert</span>

</td>
<td style="background-image:url('../img/landing_right_blue.png');height:46px;width:7px;"></td>
</tr></table></td></tr>
<tr><td width="100%">
<table cellpadding="0" cellspacing="0" border="0" width="100%">
<tr><td width="100%" style="background-color:#fdfdfd;" height="185" class="landing_box" valign="top">
<table cellpadding="0" cellspacing="0" border="0" style="padding-left:30px;font-family: Arial, Helvetica, sans-serif;">
<tr><td style="padding-top:12px;">

<?php
$paid=0;
$unpaid=0;
$sql="SELECT * FROM accounting_summary WHERE patient_id='".$patient_id."'";
$res=mysql_query($sql);
while($row=mysql_fetch_array($res)) {
$total=$row['total'];
$paid=$row['ammount_paid'];
if($total!=$paid) {
$unpaid=$unpaid+1;	

}
//var_dump($total);var_dump($paid);die();
}


?>
<table cellpadding="0" cellspacing="0" border="0">
<tr><td style="text-align:left;" width="250">
<span style="font-size:15px;color:#333;font-family:Arial, Helvetica, sans-serif;">Unpaid Services</span>
</td>
<td><a href="patient_notes.php" style="text-decoration:none;" target="_blank"><span style="font-size:14px;color:#F00;"><?php echo $unpaid;?></span></a></td>
</tr>
<tr><td colspan="2" style="border-bottom:1px #333 dotted;width:100%;padding-top:10px;"></td></tr>
</table>

</td></tr>

<tr><td style="padding-top:10px;">

<table cellpadding="0" cellspacing="0" border="0">
<tr><td style="text-align:left;" width="250">
<span style="font-size:15px;color:#333;font-family:Arial, Helvetica, sans-serif;">Promos & Offers</span>
</td>
<?php
$sql="SELECT COUNT(*) AS num FROM promos_and_offer";
$res=mysql_query($sql);
$query=mysql_fetch_assoc($res);
$rows=$query['num'];

?>
<td><span><a href="patient/promos_and_offer.php" style="text-decoration:none;font-size:14px;color:#F00;" target="_blank"><?php echo $rows;?></a></span></td>
</tr>
<tr><td colspan="2" style="border-bottom:1px #333 dotted;width:100%;padding-top:10px;"></td></tr>

</table>

</td></tr>

<tr><td style="padding-top:10px;">

<table cellpadding="0" cellspacing="0" border="0">
<tr><td style="text-align:left;" width="250">
<span style="font-size:15px;color:#333;font-family: Arial, Helvetica, sans-serif;">Unread Messages</span>
</td>
<?php
$no="no";
$sql="SELECT COUNT(*) AS num FROM patient_message_received WHERE message_read='".$no."' AND patient_id='".$patient_id."'";
$res=mysql_query($sql);
$query=mysql_fetch_assoc($res);
$rows=$query['num'];
//var_dump($rows);die();
?>
<td><span><a href="patient/message_received.php" style="font-size:14px;color:#F00;font-family: Arial, Helvetica, sans-serif;text-decoration:none;" target="_blank"><?php echo $rows;?></a></span></td>
</tr>
<tr><td colspan="2" style="border-bottom:1px #333 dotted;width:100%;padding-top:10px;"></td></tr>

</table>

</td></tr>

</table>
</td></tr>
</table> 
</td></tr>
<!--first box--></table>

<!--content--></td>

<!--second-box--><td style="padding-left:20px;">

<table cellpadding="0" cellspacing="0" border="0" style="font-family:Arial, Helvetica, sans-serif;" width="364">
<tr><td width="100%">
<table cellpadding="0" cellspacing="0" border="0" width="100%"><tr>
<td style="background-image:url('../img/landing_left_blue.png');height:46px;width:7px;"></td>
<td style="background-image:url('../img/landing_center_blue.png');height:46px;width:350px;color:#fbfdfe;font-size:22px;padding-left:20px;"><!--<img src="img/landing_announcement.png" width="191" height="33" style="margin-top:3px;"/>-->

<span style="font-family: 'Trebuchet MS', Arial, Helvetica, sans-serif;color:#FFF;font-size:20px;">Announcement</span>

</td>
<td style="background-image:url('../img/landing_right_blue.png');height:46px;width:7px;"></td>
</tr></table></td></tr>

<tr><td width="100%">
<table cellpadding="0" cellspacing="0" border="0" width="100%">
<tr><td width="100%" style="background-color:#fdfdfd;" height="185" class="landing_box" valign="top">

<table cellpadding="0" cellspacing="0" border="0" style="padding-left:30px;padding-right:10px;">
<?php 
$sql="SELECT * FROM announcement";
$res=mysql_query($sql);
while($row=mysql_fetch_array($res)){
?>

<tr><td style="padding-top:12px;">
<span style="font-weight:bold;color:#0c7ba8;font-size:18px;">
<?php echo $row['announce_subject'];?>
</span>
</td></tr>
<tr><td style="padding-top:4px;">
<span style="color:#757373;font-size:14px;">
<?php //echo stripslashes($row['announce_date']);
$date=$row['announce_date'];
$date_now=explode("-",$date);
$date_y=$date_now[0];
$date_m=$date_now[1];
$date_d=$date_now[2];

if($date_m==1)
{$month="Jan.";}
else if($date_m==2)
{$month="Feb.";}
else if($date_m==3)
{$month="March";}
else if($date_m==4)
{$month="April";}
else if($date_m==5)
{$month="May";}
else if($date_m==6)
{$month="June";}
else if($date_m==7)
{$month="July";}
else if($date_m==8)
{$month="Aug.";}
else if($date_m==9)
{$month="Sep.";}
else if($date_m==10)
{$month="Oct.";}
else if($date_m==11)
{$month="Nov.";}
else if($date_m==12)
{$month="Dec.";}

$date_now=$month." ".$date_d.", ".$date_y;

echo $date_now; 

?>
</span>
</td></tr>
<tr><td style="padding-top:4px;">
<span style="color:#313030;font-size:14px;">
<?php 
$length=340;
$name1= stripslashes($row['announce_content']);
//$name=strlen($name);
//echo $name;
$display = substr($name1, 0, $length);
$x=$display;
$x=strlen($x);
echo $display;
if($x>=$length) {
echo "..." ; }

?>
</span>
</td></tr>

<?php } ?>
</table>

</td></tr>
</table> 
</td></tr>

<!--<tr><td width="100%">
<table cellpadding="0" cellspacing="0" border="0" width="100%">
<tr><td align="right" width="100%" style="background-color:#d8e0e8;" height="50" class="landing_box">
<img src="img/landing_more.png" width="170" height="34" style="margin-right:15px;"/>
</td></tr>
</table> 
</td></tr>-->

</table>

</td>
<!--second-box-->

</tr>


<!--second- part content-->
<tr>
<!--firstbox--><td style="padding-top:30px;" colspan="2">
<table cellpadding="0" cellspacing="0" border="0"><tr><td>

<table cellpadding="0" cellspacing="0" border="0" width="100%"><tr>
<td style="background-image:url('../img/landing_left_blue.png');height:46px;width:7px;"></td>
<td style="background-image:url('../img/landing_center_blue.png');height:46px;width:535px;padding-left:20px;"><!--<img src="img/landing_news.png" width="165" height="22" style="margin-top:3px;"/>-->
<span style="font-family:'Trebuchet MS', Arial, Helvetica, sans-serif;color:#FFF;font-size:20px;">Activities</span>

</td>
<td style="background-image:url('../img/landing_right_blue.png');height:46px;width:6px;"></td>
</tr></table></td></tr>

<tr><td colspan="2" style="background-color:#fdfdfd;padding-bottom:20px;" width="100%" height="270" class="landing_box" valign="top">

<table cellpadding="0" cellspacing="0" border="0" style="font-family:Arial, Helvetica, sans-serif;padding-left:30px;">

<?php 

$sql="SELECT * FROM activities ORDER BY act_publish DESC LIMIT 3";
$res=mysql_query($sql);
while($row=mysql_fetch_array($res)){
?>
<tr><td style="padding-top:12px;">
<span style="font-weight:bold;color:#0c7ba8;font-size:18px;">
<?php echo stripslashes($row['act_subject']);?>
</span>
</td></tr>
<tr><td style="padding-top:4px;">
<span style="color:#757373;font-size:14px;">
<?php $date=$row['act_publish'];

$date_now=explode("-",$date);
$date_y=$date_now[0];
$date_m=$date_now[1];
$date_d=$date_now[2];

if($date_m==1)
{$month="Jan.";}
else if($date_m==2)
{$month="Feb.";}
else if($date_m==3)
{$month="March";}
else if($date_m==4)
{$month="April";}
else if($date_m==5)
{$month="May";}
else if($date_m==6)
{$month="June";}
else if($date_m==7)
{$month="July";}
else if($date_m==8)
{$month="Aug.";}
else if($date_m==9)
{$month="Sep.";}
else if($date_m==10)
{$month="Oct.";}
else if($date_m==11)
{$month="Nov.";}
else if($date_m==12)
{$month="Dec.";}

$date_now=$month." ".$date_d.", ".$date_y;

echo $date_now; ?>
</span>
</td></tr>
<tr><td style="padding-top:4px;">
<span style="color:#313030;font-size:14px;">
<?php 
$length=185;
$name1= stripslashes($row['act_content']);
//$name=strlen($name);
//echo $name;
$x=substr($name1, 0, $length);
$display = $x;
$display2=strlen($x);
//var_dump($display2);die();
echo $display;
if($display2>=$length) {
echo "..." ; }

?>
</span>
</td></tr>
<tr><td>.....................................................................................................................................</td></tr>

<?php } ?>
</table>
</td></tr>

</table>
<!--firstbox--></td>

<!--sponsored section-->
<td style="padding-left:10px;">
<?php 
$var="yes";
$type="side";
$ctr1=1;
$ctr2=2;
$ctr3=3;
$ctr4=4;
$sql="SELECT * FROM banner WHERE activate='".$var."' AND banner_position='".$ctr1."' AND banner_type='".$type."'";
$res=mysql_query($sql);
while($row=mysql_fetch_array($res)) {
$banner_top_left=$row['banner_file'];	
$ban_link1=$row['banner_link'];
}
$sql="SELECT * FROM banner WHERE activate='".$var."' AND banner_position='".$ctr2."' AND banner_type='".$type."'";
$res=mysql_query($sql);
while($row=mysql_fetch_array($res)) {
$banner_top_right=$row['banner_file'];	
$ban_link2=$row['banner_link'];
}
$sql="SELECT * FROM banner WHERE activate='".$var."' AND banner_position='".$ctr3."' AND banner_type='".$type."'";
$res=mysql_query($sql);
while($row=mysql_fetch_array($res)) {
$banner_bottom_left=$row['banner_file'];	
$ban_link3=$row['banner_link'];
}
$sql="SELECT * FROM banner WHERE activate='".$var."' AND banner_position='".$ctr4."' AND banner_type='".$type."'";
$res=mysql_query($sql);
while($row=mysql_fetch_array($res)) {
$banner_bottom_right=$row['banner_file'];	
$ban_link4=$row['banner_link'];
}
?>
<!--<img src="img/sponsored_banner.png" width="376" height="317"/>-->
<table cellpadding="0" cellspacing="0" border="0">
<tr><td>
<a href="<?php echo $ban_link1;?>"><img src="../admin/<?php echo $banner_top_left;?>" width="184" height="154"/></a>
</td>
<td style="padding-left:10px;">
<a href="<?php echo $ban_link2;?>"><img src="../admin/<?php echo $banner_top_right;?>" width="184" height="154"/></a>
</td>
</tr>
<tr><td style="padding-top:10px;">
<a href="<?php echo $ban_link3;?>"><img src="../admin/<?php echo $banner_bottom_left;?>" width="184" height="154"/></a>
</td>
<td style="padding-top:10px;padding-left:10px;">
<a href="<?php echo $ban_link4;?>"><img src="../admin/<?php echo $banner_bottom_right;?>" width="184" height="154"/></a>
</td>
</tr>
</table>


</td>
<!--sponsored section-->
</tr>
<!--second- part content-->




<!--sidebar and content container--></table>
<!--<div style="clear:both;height:20px;"></div>-->
<div style="clear:both;height:20px;"></div>
</div>
<!--include sidebar--></td></tr>
<!--wrapper-->

<!--bottom-content--><tr>
<td style="background-color:#FFF;">
<div style="margin:0 auto;width:960px;margin-top:20px;">
<!--<img src="img/landing_bottom.jpg" width="969" height="282"/>-->

<div style=" -moz-border-radius: 5px;
 -webkit-border-radius: 5px;
 border-radius: 5px;
 
 border:1px solid #cdcdcd;
 width:955px;
 height:32px;
 background-image:url('../img/todo_back.png');
 background-repeat:repeat-x;">
<table cellpadding="0" cellspacing="0" border="0">
<tr><td style="padding-left:15px;">
<img src="../img/todo.png" width="26" height="26"/>
</td>
<td style="padding-left:10px;">
<img src="../img/arrow.png" width="12" height="32"/>
</td>
<td style="padding-left:15px;font-family:Arial, Helvetica, sans-serif;color:#333;font-size:16px;font-weight:bold;">
What would you like to do?
</td>
</tr>
</table>
</div>
<div style="clear:both;height:20px;background-color:#FFF;"></div>
<div style="margin:0 auto;width:930px;padding-left:20px;padding-right:20px;">

<table cellpadding="0" cellspacing="0" border="0" width="930">

<!--profile-->
<tr><td width="50%">

<table cellpadding="0" cellspacing="0" border="0">
<tr><td style="padding-left:10px;" valign="top">
<a href="patient_info.php"><img src="../img/profile.png" width="41" height="48" /></a>
</td>
<td style="padding-left:20px;">
<table cellpadding="0" cellspacing="0" border="0">
<tr><td style="color:#2a91b4;font-size:18px;font-weight:bolder;font-family: 'Trebuchet MS', Arial, Helvetica, sans-serif;">
<a href="patient_info.php" style="text-decoration: none;color:#2a91b4;">PROFILE</a>
</td></tr>
<tr><td style="color:#3b4244;font-size:13px;font-weight:bold;font-family:Arial, Helvetica, sans-serif;padding-top:6px;">
Profile is where patient can view, edit and update their profile information such as your office address,
<div style="clear:both;"></div>
office hours etc.
</td></tr>
</table> 
</td>
</tr>
</table>

<!--profile--></td>


<!--scehduler-->
<td width="50%" align="right">
<table cellpadding="0" cellspacing="0" border="0">
<tr><td valign="top">
<a href="promos_and_offer.php"><img src="../img/promo.png" width="39" height="41" /></a>
</td>
<td style="padding-right:40px;padding-left:20px;">
<table cellpadding="0" cellspacing="0" border="0">
<tr><td style="color:#2a91b4;font-size:18px;font-weight:bolder;font-family: 'Trebuchet MS', Arial, Helvetica, sans-serif;">
<a href="promos_and_offer.php" style="text-decoration: none;color:#2a91b4;">PROMOS AND OFFERS</a>
</td></tr>
<tr><td style="color:#3b4244;font-size:13px;font-weight:bold;font-family:Arial, Helvetica, sans-serif;padding-top:6px;">
Latest deals, discounts, promos & offers the dental community has to offer are listed here. This is 
<div style="clear:both;"></div>
regularly updated so be sure to check this out.
</td></tr>
</table> 
</td>
</tr>
</table>
</td>
<!--scehduler-->


</tr>

<tr><td><div style="clear:both;height:25px;background-color:#FFF;"></div></td></tr>

<tr>


<!--scehduler-->
<td width="50%" align="right" valign="top" style="padding-left:10px;">
<table cellpadding="0" cellspacing="0" border="0">
<tr><td valign="top">
<a href="message_received.php"><img src="../img/message.png" width="43" height="43" /></a>
</td>
<td style="padding-right:30px;padding-left:20px;">
<table cellpadding="0" cellspacing="0" border="0">
<tr><td style="color:#2a91b4;font-size:18px;font-weight:bolder;font-family: 'Trebuchet MS', Arial, Helvetica, sans-serif;">
<a href="message_received.php" style="text-decoration: none;color:#2a91b4;">MESSAGING</a>
</td></tr>
<tr><td style="color:#3b4244;font-size:13px;font-weight:bold;font-family:Arial, Helvetica, sans-serif;padding-top:6px;">
You can contact your dentist through this and will be notified via email.
</td></tr>
</table> 
</td>
</tr>
</table>
</td>
<!--scehduler-->

</tr>



</table>

</div>

<div style="clear:both;height:20px;background-color:#FFF;"></div>
</div>
</td>
<!--bottom-content--></tr>

</table>
<div style="clear:both;height:20px;background-color:#FFF;"></div>
<?php include('../includes/footer2.php');?>
</body>
</html>

