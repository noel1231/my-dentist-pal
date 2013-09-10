<?php
include('config.php');
$fname=mysql_real_escape_string($_POST['fname']);
$lname=mysql_real_escape_string($_POST['lname']);
$comp=mysql_real_escape_string($_POST['comp']);
$pos=mysql_real_escape_string($_POST['pos']);
$email=mysql_real_escape_string($_POST['email']);
$html=mysql_real_escape_string($_POST['html']);

$sql=mysql_query("INSERT INTO newsletter_subscriber (fname,lname,company,position,email_add,news_type,date_now) VALUES ('$fname','$lname','$comp','$pos','$email','$html',NOW())");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>My Dentist Pal</title>
<link rel="stylesheet" type="text/css" media="screen" href="style/style.css" />
<style>
		#validEmail
		{
			margin-top: 4px;
			margin-left: 9px;
			position: absolute;
			width: 16px;
			height: 16px;
		}
		</style>
        <script type="text/javascript" src="img/jquery-1.3.2.min.js"></script>
        <script type="text/javascript">
	
	/*function onTap() {
	alert(document.getElementById('validate').value);	
	}*/
	function ValidateContactForm()
{
    var email = document.ContactForm.validate;
	
	var fname = document.ContactForm.fname;
	var lname = document.ContactForm.lname;
	
	if(fname.value=="") {
		window.alert("Please enter your first name.");
		return false;
        date.focus();
        
	}
	
	if(lname.value=="") {
		window.alert("Please enter your last name.");
		return false;
        date.focus();
        
	}
	
	
	if (email.value.indexOf("@", 0) < 0)
    {
        window.alert("Please enter a valid e-mail address.");
		return false;
        email.focus();
        
    }
	
	
	/*function chk_val(obj) {*/
	var num = document.ContactForm.contact;
    var chk = /^\d+$/.test(num.value);
 
    if (!chk) {
        window.alert("Please enter a valid number.");
        num.focus();
		return false;
    }
/*}*/
	
}
	
	
	$(document).ready(function() {

		$("#validate").keyup(function(){
		
			var email = $("#validate").val();
		
			if(email != 0)
			{
				if(isValidEmailAddress(email))
				{
					$("#validEmail").css({
						"background-image": "url('images/validYes.png')"
					});
				} else {
					$("#validEmail").css({
						"background-image": "url('images/validNo.png')"
					});
				}
			} else {
				$("#validEmail").css({
					"background-image": "none"
				});			
			}
		
		});
	
	});
	
	function isValidEmailAddress(emailAddress) {
 		var pattern = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);
 		return pattern.test(emailAddress);
	}
	
	</script><?php include("ganalytics.php"); ?>
</head>

<body style="margin:0;padding:0;background-color:#f6f5f5;font-family:Arial, Helvetica, sans-serif;">
<!--wrapper--><table cellpadding="0" cellspacing="0" border="0" width="100%">
<!--top--><tr><td>
<?php include('includes/top_register.php')?>
<!--top--></td></tr>

<!--tooth--><tr><td>
<!--navigation bar--><div style="background-image:url('images/topnav.jpg');width:100%;height:80px;">
<div style="margin:0 auto;width:960px;">
<div style="float:left;"><!--left-->
<div style="float:left;"><img src="images/toothlogo.png" style="margin-top:15px;"/></div>
<div style="float:left;margin-left:10px;font-family:Arial, Helvetica, sans-serif;font-size:32px;color:#FFF;margin-top:20px;width:210px;">My Dentist Pal</div>
<div style="float:left;margin-left:5px;margin-top:23px;font-size:12px;color:#70d8f8;font-family:'Trebuchet MS', Arial, Helvetica, sans-serif;">Ver. 1.0</div>
</div><!--end of left-->
<!--right-->
<!--<div style="float:right;margin-top:45px;">
<div style="float:right;background-image:url('images/option2.png');width:101px;height:35px;"></div>
<a href="dentist_profile.php"><div style="float:right;background-image:url('images/profile.png');width:101px;height:35px;"></div></a>
<a href="message_contact.php"><div style="float:right;background-image:url('images/messaging.png');width:116px;height:35px;margin-right:2px;"></div></a>
</div>-->
</div><!--end of center-->
</div><!--end with navigation bar-->
<!--tooth--></td></tr>

<!--dentisit dashboard--><tr><td>
<div style="background-color:#e0e2e4;width:100%;height:90px;">
<div style="margin:0 auto;width:940px;"><!--center-->
<div style="float:left;margin-top:28px;"><!--Dentist's Dashboard--><!--<img src="images/dentist_dashboard.png" />-->
<span style="font-weight:500;font-size:30px;color:#333;font-family: 'Trebuchet MS', Arial, Helvetica, sans-serif;">
Newsletter Subscription</span>
</div>
<div style="float:right;">
<!--<div style="float:right;margin-top:28px;"><input type="text" name="search" /></div>-->
<div style="clear:both;"></div>
<!--<div style="float:right;color:#969da4;font-size:10px;font-family:'Trebuchet MS', Arial, Helvetica, sans-serif;">CLICK HERE FOR ADVANCE SEARCH</div>--></div>
</div><!--end of center-->
</div>
<!--dentisit dashboard--></td></tr>

<tr><td>
<div style="clear:both;height:25px;"></div>
<div style="margin:0 auto;width:300px;">
<span style="font-weight:bold;font-size:18px;color:#666;">Get your Online Subscription Now</span>
</div>
<div style="clear:both;height:15px;"></div>

<div style="margin: 0 auto;width:400px;">
<form method="post" action="" enctype="multipart/form-data" name="ContactForm" onSubmit="return ValidateContactForm();">
<table cellpadding="0" cellspacing="0" border="0" width="500">
<tr><td style="width:200px;text-align:right;">
First Name:
</td>
<td style="padding-left:10px;"><input type="text" name="fname" id="fname" style="font-size:15px;font-family:Arial, Helvetica, sans-serif;" />*</td>
</tr>
<tr><td><div style="clear:both;height:15px;"></div></td></tr>
<tr><td style="width:200px;text-align:right;">
Last Name:
</td>
<td style="padding-left:10px;"><input type="text" name="lname" id="lname" style="font-size:15px;font-family:Arial, Helvetica, sans-serif;" />*</td>
</tr>
<tr><td><div style="clear:both;height:15px;"></div></td></tr>
<tr><td style="width:200px;text-align:right;">
Company:
</td>
<td style="padding-left:10px;"><input type="text" name="comp" style="font-size:15px;font-family:Arial, Helvetica, sans-serif;" /></td>
</tr>
<tr><td><div style="clear:both;height:15px;"></div></td></tr>
<tr><td style="width:200px;text-align:right;">
Position:
</td>
<td style="padding-left:10px;"><input type="text" name="pos" style="font-size:15px;font-family:Arial, Helvetica, sans-serif;" /></td>
</tr>
<tr><td><div style="clear:both;height:15px;"></div></td></tr>
<tr><td style="width:200px;text-align:right;">
Email Address:
</td>
<td style="padding-left:10px;"><input type="text" name="email" style="font-size:15px;font-family:Arial, Helvetica, sans-serif;" id="validate"/><span id="validEmail"></span></td>
</tr>
<tr><td><div style="clear:both;height:15px;"></div></td></tr>
<tr><td style="width:200px;text-align:right;">
Newsletter Type:
</td>
<td style="padding-left:10px;">
<table cellpadding="0" cellspacing="0" border="0"><tr><td>
<input type="radio" name="html" value="html" checked="checked"/>&nbsp;&nbsp;HTML</td>
<td style="padding-left:10px;">
<input type="radio" name="html" value="text" />&nbsp;&nbsp;Text
</td></tr></table></td>
</tr>

<tr><td><div style="clear:both;height:25px;"></div></td></tr>
<tr><td colspan="2">
<div style="margin: 0 auto;width:500px;">
<table cellpadding="0" cellspacing="0" border="0">
<tr><td>
<span style="font-weight:bold;">Important Notes:</span>
</td></tr>
<tr><td>
* You may unsubscribe at anytime.
</td></tr>
<tr><td>
* You may have to respond to a confirmation email.
</td></tr>
<tr><td>
* You may have to unblock future emails from bulk mail filters.
</td></tr>
</table>
</div>
</td></tr>
<tr><td><div style="clear:both;height:25px;"></div></td></tr>

<tr><td colspan="2">
<div style="margin: 0 auto;width:500px;">
<table cellpadding="0" cellspacing="0" border="0">
<tr><td>
<span style="font-weight:bold;">Privacy Policy:</span>
</td></tr>
<tr><td>
We will not reveal any email addresses to third parties for any reasons.
</td></tr>

</table>
</div>
</td></tr>


<tr><td><div style="clear:both;height:15px;"></div></td></tr>
<tr><td style="width:200px;text-align:center;">&nbsp;

</td>
<td><input type="submit" name="submit" class="submit2" value="Submit"/>&nbsp;&nbsp;<input type="button" class="submit2" name="cancel" value="Cancel" onclick="window.location='index.php'"/></td>
</tr>




</table>
</form>
</div>



</td></tr>
<tr><td><div style="clear:both;height:20px;"></div></td></tr>

</table></body></html>