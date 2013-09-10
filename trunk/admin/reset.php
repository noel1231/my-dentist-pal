<?php
include('../config.php');
if(isset($_GET['key'])) {
$key=$_GET['key'];	
}

$return="";
if(isset($_POST['submit'])) {
$key=$key;	
$pass=mysql_real_escape_string($_POST['pass1']);
$pass2=mysql_real_escape_string($_POST['pass2']);
if($pass==$pass2) {
$sql="UPDATE admin_account SET admin_password='".md5($pass)."' WHERE forgot_key='".$key."'";	
$res=mysql_query($sql);	
if(!res){
$return="";	
}
else { $error="Password already change";
	 $return="Click here to return to login page";
} }
}

//var_dump($return);die();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>MyClinicPal</title>
<style type="text/css">

.topss {
background-image:url(img/landing/top_login.png);
border:1px solid #afb6b9;	
-moz-border-radius:5px;-webkit-border-radius:5px;border-radius:5px;
margin:0 auto;width:466px;
overflow:hidden;
margin-top:40px;
}




</style>
<link rel="stylesheet" type="text/css" media="screen" href="../style/style.css" />
<script type="text/javascript" src="../img/jquery-1.3.2.min.js"></script>
        <script type="text/javascript">
	
	/*function onTap() {
	alert(document.getElementById('validate').value);	
	}*/
	function ValidateContactForm()
{
	var opt1=document.ContactForm.pass1.value;
   var opt2=document.ContactForm.pass2.value;
   
   if(opt1 != opt2) {
window.alert("Not the same password.");
return false;
        pass2.focus();
        	return false;
}
   
}
</script>
</head>


<body>
<form method="post" action="" enctype="multipart/form-data" name="ContactForm" onSubmit="return ValidateContactForm();">
<div class="topss">
<table cellpadding="0" cellspacing="0" border="0">
<tr><td valign="top" style="height:79px;">

<div style="margin:0 auto;width:315px;">
<div style="float:left;"><!--left-->
<div style="float:left;"><img src="images/toothlogo.png" style="margin-top:15px;"/></div>
<div style="float:left;margin-left:10px;margin-top:20px;width:210px;font-family:Arial, Helvetica, sans-serif;font-size:32px;color:#FFF;">My Dentist Pal</div>
<div style="float:left;margin-left:5px;margin-top:23px;font-size:12px;color:#70d8f8;font-family:'Trebuchet MS', Arial, Helvetica, sans-serif;">Ver. 1.0</div>
</div>
</div>
</td></tr>
<tr><td style="background-color:#FFF;padding-top:42px;">
<div style="width:466px;height:254px;background-color:#FFF;color:#12447a;font-family:Arial, Helvetica, sans-serif;">

<div style="margin:0 auto;width:350px;font-weight:bold;font-size:16px;">
<?php
if($error){
echo $error;
}
else {
echo "PLEASE ENTER YOUR NEW PASSWORD";
}
?>
 </div>

<div style="clear:both;"></div>

<div style="margin:0 auto;width:434px;margin-top:26px;background-color:#edeff1;height:150px;border:1px solid #e2e4e5;">

<div style="margin:0 auto;width:386px;">
<table cellpadding="0" cellspacing="0" border="0">
<tr><td style="color:#333;font-size:14px;font-family:Arial, Helvetica, sans-serif;padding-top:24px;">Enter your new password</td></tr>
<tr><td style="padding-top:5px;"><input type="password" name="pass1" style="width:378px;" /></td></tr>
<tr><td style="color:#333;font-size:14px;font-family:Arial, Helvetica, sans-serif;padding-top:20px;">Re-enter your password</td></tr>
<tr><td style="padding-top:5px;"><input type="password" name="pass2" style="width:378px;" /></td></tr>
<tr><td align="right" style="padding-top:20px;">

<table cellpadding="0" cellspacing="0" border="0">
<tr><!--<td>
<input type="checkbox" name="check" />
</td>
<td style="padding-left:5px;font-size:12px;color:#333;">
Log me in Automatically
</td>-->
<?php if($return) { 

?>
<td >
<a href="dentist_login.php" style="text-decoration:underline;color:#106dc6;font-size:14px;">
<?php
echo $return; ?></a>
</td>
<td style="padding-left:15px;">
<?php } 
else { 
//var_dump($return);die();
?>
<td>
<?php } ?>
<input type="submit" name="submit" value="SAVE" class="submit2" onclick="return ValidateContactForm();"/>
</td>
<td style="padding-left:15px;">
<input type="button" name="cancel" value="CANCEL" class="submit2" onclick="window.location='dentist_login.php'"/>
</td>
</tr>
</table>

</td></tr>
</table>

</div>

</div>



<div style="clear:both;height:5px;"></div>
<!--<div style="color:#106dc6;font-size:12px;margin-left:20px;"><a href="forgot_password.php" class="forgot">Forgot your password?</a></div>-->
</div>
</td></tr>

<tr><td style="background-image:url(img/landing/bot_back.png);width:466px;height:40px;color:#FFF;font-size:12px;font-family:Arial, Helvetica, sans-serif;padding-left:18px;">
Copyright 2012 My Dentist Pal. All Rights Reserved
</td></tr>
</table>
</div>
</form>
</body>
</html>