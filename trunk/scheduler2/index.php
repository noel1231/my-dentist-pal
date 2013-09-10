<?php
session_start();
//var_dump($_SESSION);die();
if(!$_SESSION["id"])
{
    //Do not show protected data, redirect to login...
    header('Location: http://leentechsystems.net/mydentistpal/dentist_login.php');
}
require("config.php");
require("./lang/lang." . LANGUAGE_CODE . ".php");
require("functions.php");

# testing whether var set necessary to suppress notices when E_NOTICES on
$month = 
	(isset($_GET['month'])) ? (int) $_GET['month'] : null;
$year =
	(isset($_GET['year'])) ? (int) $_GET['year'] : null;

# set month and year to present if month 
# and year not received from query string
$m = (!$month) ? date("n") : $month;
$y = (!$year)  ? date("Y") : $year;

$scrollarrows = scrollArrows($m, $y);
//$auth 		  = auth();




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
<?php include('../includes/top_patient2.php');?>
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
<!--<div style="float:right;background-image:url('../images/option2.png');width:101px;height:35px;"></div>-->
<div style="float:right;">
<ul class="cssMenu">
	<li>
		<a href="#"><div style="float:right;background-image:url('../images/option2.png');width:101px;height:35px;"></div></a>           
		<ul>
			<li><a href="#"><div style="width:116px;height:29px;color:#13749a;">
            <table cellpadding="0" cellspacing="0" border="0" style="padding-top:5px;width:56px;">
            <tr><td style="padding-left:15px;"><img src="../img/settings.png" /></td><td style="font-size:14px;padding-left:10px;width:35px;">Settings</td></tr>
            </table></div></a></li>
			<li><a href="http://leentechsystems.net/mydentistpal/logout.php"><div style="width:116px;height:29px;color:#13749a;"><table cellpadding="0" cellspacing="0" border="0" style="padding-top:5px;width:56px;">
            <tr><td style="padding-left:18px;"><img src="../img/logout.png" /></td><td style="font-size:14px;padding-left:10px;">Logout</td></tr>
            </table></div></a></li>
		
		</ul>
	</li></ul>
</div>
<a href="../dentist_profile.php"><div style="float:right;background-image:url('../images/profile.png');width:101px;height:35px;"></div></a>
<a href="../message_contact.php"><div style="float:right;background-image:url('../images/messaging.png');width:115px;height:35px;margin-right:2px;"></div></a>
</div>
</div><!--end of center-->
</div><!--end with navigation bar-->
<!--tooth--></td></tr>

<!--dentisit dashboard--><tr><td>
<div style="background-color:#e0e2e4;width:100%;height:90px;">
<div style="margin:0 auto;width:940px;"><!--center-->
<div style="float:left;margin-top:28px;"><!--Dentist's Dashboard--><img src="../images/dentist_dashboard.png" /></div>
<div style="float:right;">
<!--<div style="float:right;margin-top:28px;"><input type="text" name="search" /></div>-->
<div style="clear:both;"></div>
<!--<div style="float:right;color:#969da4;font-size:10px;font-family:'Trebuchet MS', Arial, Helvetica, sans-serif;">CLICK HERE FOR ADVANCE SEARCH</div>--></div>
</div><!--end of center-->
</div>
<!--dentisit dashboard--></td></tr>

<!--menubar--><tr><td width="100%" height="54" style="background-image:url('../images/menubar.png');">
<!--menuinblack--><div style="margin:0 auto;width:520px;">
<table cellpadding="0" cellspacing="0" border="0">
<tr>
<td><img src="../img/scheduler.png" width="151" height="37"/></td>
<!--<td width="13">&nbsp;</td>
<td><img src="images/line.png"/></td>
<td width="13">&nbsp;</td>
<td><img src="img/bar_info.png"  /></td>-->
</tr>
</table>

<!--menuinblack--></div>
<!--menubar--></td></tr>

<!--include sidebar--><tr><td>
<div style="margin:0 auto;width:960px;">
<!--sidebar and content container--><table cellpadding="0" cellspacing="0" border="0">
<!--sidebar--><tr><td valign="top">
<div style="margin-top:-38px;">
<?php include('../includes/sidebar_message.php');?>
</div>
<!--sidebar--></td>
<!--content--><td valign="top" style="padding-top:26px;">

<!--box-->
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><table width="739" border="0" align="center" cellpadding="0" cellspacing="0">
	 <tr>
        <td><div style="z-index:1;"><img src="../img/1.jpg" width="739" height="12" alt="" /></div></td>
      </tr>
      <tr>
        <td height="47" style="background:url(../img/2.jpg);">&nbsp;</td>
      </tr>
      <tr>
        <td valign="top" style="background:url(../img/3.jpg); padding-bottom:10px;"><div style="margin-top:-8px; position: relative;">
          <table width="690" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td bgcolor="#FFFFFF" style="border-left:1px solid #a0a8ac; border-bottom:1px solid #a0a8ac; border-right:1px solid #a0a8ac;"><!--content-->

<?php
require("./templates/" . TEMPLATE_NAME . ".php");
?>
<div style="clear:both;height:20px;"></div>
               </td>
            </tr>
          </table>
        </div></td>
      </tr>
      <tr>
        <td><img src="../img/4.jpg" width="739" height="6" alt="" /></td>
      </tr>
    </table></td>
  </tr>
</table>
<!--content--></td>
</tr>



<!--sidebar and content container--></table>
<!--<div style="clear:both;height:20px;"></div>-->
</div>
<!--include sidebar--></td></tr>

<!--wrapper--></table>
<div style="clear:both;height:20px;"></div>
<?php include('../includes/footer.php');?>
</body>
</html>
