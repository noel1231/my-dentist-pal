<!--<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" media="screen" href="../style/style.css" />
</head>

<body style="font-family:Arial, Helvetica, sans-serif;color: #333;">
<form method="post" action="confirm.php" enctype="multipart/form-data"> 
<div style="margin:0 auto;width:165px;">
<span style="font-size:18px;">Dentist Access</span>
<div style="clear:both;height:5px;"></div>
<div style="font-size:10px;">
Username:<div style="clear:both;height:3px;"></div>
<input type="text" name="username" /></div>
<div style="clear:both;height:5px;"></div>
<div style="font-size:10px;">
Password:<div style="clear:both;height:3px;"></div>
<input type="password" name="password" /></div>
<div style="clear:both;height:10px;"></div>
<input type="submit" name="submit" value="Submit" class="submit2"/>
</div>
</form>
</body>
</html>-->

<?php

include('../config.php');

$error="";

if(isset($_POST['submit'])) {
$username=mysql_real_escape_string($_POST['username']);



$sql=mysql_query("SELECT * FROM admin_account WHERE admin_username='".$username."'");
//

if(mysql_num_rows($sql)) {

while($row=mysql_fetch_array($sql)) {
	$email=$row['email'];
	$id=$row['id'];
	//$fname=$row['first_name'];
	//$lname=$row['sur_name'];
	//$mname=$row['middle_name'];
	$admin_name=$row['admin_name'];
    $gender=$row['dentist_gender'];
	}
	//var_dump($id);die();
	if($gender=="male") {
	$text="Mr."; }
	else if($gender=="female") {
	$text="Ms.";	
	}
	$confirm = md5(uniqid(rand(), true));
	
	$msg  ="<html><head><title>Admin Message</title></head>";
$msg .="<body>";
$msg .="<table cellspacing=\"0\" cellpadding=\"0\" border=\"0\">";
$msg .="<tr><td>";
$msg .="<h2 style=\"font-size:16px;font-family:Arial;color:#333;\">Good day &nbsp;".$text."&nbsp;".$admin_name."</h2>";
$msg .="</td></tr>";
$msg .="<tr><td style=\"padding-top:20px;padding-left:10px;\">";
$msg .= "<a href=\"http://www.mydentistpal.com/admin/reset.php?key=".$confirm."\">Click here to reset your password.</a>";
$msg .="</td></tr>";
$msg .="</table>";
$msg .="</body>";
$msg .="</html>";

$subject="Reset account password";

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";

// More headers
$headers .= 'From: My Dentist Pal ' . "\r\n";

if(mail($email,$subject,$msg,$headers))
{
$error="Email has been sent to &nbsp;".$email."<br>Please check your email to change your password.";

$x=mysql_query("UPDATE admin_account SET forgot_key='".$confirm."' WHERE id='".$id."'");
//$s = mysql_query($x);
//echo mysql_error();

}

////

}
////end while loop 

else {
	

$error="Not a valid user";	

////end if loop
} 

}
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
</head>


<body>
<form method="post" action="" enctype="multipart/form-data">
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
//var_dump($error);
if(empty($error)) {

echo "PLEASE ENTER YOUR EMAIL / USERNAME";
}
else {
echo $error;
}
?> </div>

<div style="clear:both;"></div>

<div style="margin:0 auto;width:434px;margin-top:26px;background-color:#edeff1;height:150px;border:1px solid #e2e4e5;">

<div style="margin:0 auto;width:386px;">
<table cellpadding="0" cellspacing="0" border="0">
<tr><td style="color:#333;font-size:14px;font-family:Arial, Helvetica, sans-serif;padding-top:24px;">Username or email address</td></tr>
<tr><td style="padding-top:5px;"><input type="text" name="username" style="width:378px;" /></td></tr>
<!--<tr><td style="color:#333;font-size:14px;font-family:Arial, Helvetica, sans-serif;padding-top:20px;">Password</td></tr>
<tr><td style="padding-top:5px;"><input type="password" name="password" style="width:378px;" /></td></tr>-->
<tr><td align="right" style="padding-top:20px;">

<table cellpadding="0" cellspacing="0" border="0">
<tr><!--<td>
<input type="checkbox" name="check" />
</td>
<td style="padding-left:5px;font-size:12px;color:#333;">
Log me in Automatically
</td>-->
<td>
<input type="submit" name="submit" value="CONTINUE" class="submit2"/>
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