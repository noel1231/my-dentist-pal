<?php 

session_start();
//var_dump($_SESSION);die();
if(!$_SESSION["id"])
{
    //Do not show protected data, redirect to login...
    header('Location: dentist_login.php');
}

$dentist_id=$_SESSION['id'];

include('config.php');

$page_now="1";

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>My Dentist Pal</title>
<link rel="stylesheet" type="text/css" media="screen" href="style/style.css" />

</head>

<body style="margin:0;padding:0;background-color:#f6f5f5;">
<!--wrapper-->
<table cellpadding="0" cellspacing="0" border="0" width="100%">
  <!--top-->
  <tr>
    <td><?php include('includes/top_patient.php');?>
      <!--top--></td>
  </tr>
  <!--tooth-->
  <tr>
    <td><?php include('includes/top.php');?>
      <!--dentisit dashboard--></td>
  </tr>
  
  
  <tr><td width="900" valign="top">
  
  <table width="240" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><?php include('includes/sidebar_message.php');?></td>
  </tr>
</table>

  
  </td>
  
  <td style="padding-left:10px;" valign="top">
  <table width="300" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>
    
        <!--notification-->
     <table cellpadding="0" cellspacing="0" border="0" style="font-family:Arial, Helvetica, sans-serif;" width="324">
              <tr>
                <td width="100%"><table cellpadding="0" cellspacing="0" border="0" width="100%">
                  <tr>
                    <td style="background-image:url('img/landing_left_blue.png');height:46px;width:7px;"></td>
                    <td style="background-image:url('img/landing_center_blue.png');height:46px;width:310px;color:#fbfdfe;font-size:22px;padding-left:20px;"><!--<img src="img/landing_general.png" width="167" height="23" style="margin-top:3px;"/>-->
                      <span style="font-family:'Trebuchet MS', Arial, Helvetica, sans-serif;color:#FFF;font-size:20px;">Notification Alert</span></td>
                    <td style="background-image:url('img/landing_right_blue.png');height:46px;width:7px;"></td>
                  </tr>
                </table>
    </td></tr></table>
     <!--notification-->
    
    </td>
  </tr>
</table>

  
  </td>
  
  <td style="padding-left:10px;" valign="top">

  <table width="340" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>
  
    </td>
  </tr>
</table>

  
  </td>
  
  </tr>
  
  
  </table>
  
  </body></html>