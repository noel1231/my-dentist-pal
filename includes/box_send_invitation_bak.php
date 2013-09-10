<?php 
include('config.php');
$error="";
if(isset($_POST['send_email'])){
	
$email1=mysql_real_escape_string($_POST['email1']);
$email2=mysql_real_escape_string($_POST['email2']);
$id=$_POST['where_id'];
$confirm = md5(uniqid(rand(), true));
$subject="Account Invitation";

$msg  ="<html><head><title>Account Invitation</title></head>";
$msg .="<body>";
$msg .="<table cellspacing=\"0\" cellpadding=\"0\" border=\"0\">";
$msg .="<tr><td>";
$msg .="<h2 style=\"font-size:18px;font-family:Arial;color:#333;\">You're invited to join the mydentistpal patient account.</h2>";
$msg .="</td></tr>";
$msg .="<tr><td style=\"padding-top:20px;padding-left:10px;\">";
$msg .="<a href=\"add_patient_password.php?key=".$confirm."\">Click here to activate your account</a>";
$msg .="</td></tr>";
$msg .="</table>";
$msg .="</body>";
$msg .="</html>";




// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";

// More headers
$headers .= 'From: Your Friendly Dentist ' . "\r\n";
//$headers .= 'Cc: myboss@example.com' . "\r\n";


$sql="SELECT COUNT(*) AS num FROM patient_list WHERE email='".$email1."'";
$res=mysql_query($sql);
$ress=mysql_fetch_assoc($res);
$row=$ress['num'];
//var_dump($row);die();
if($row==0)
{


if($email1==$email2){
$mail=mail($email1,$subject,$msg,$headers);

if($mail)
{ //echo "success";

$sql="UPDATE patient_list SET email='".$email1."',keyword='".$confirm."' WHERE id=".$id."";
$res=mysql_query($sql);
}


}
else
{
$error="Your email addresses does not match";	
}

}
else{
	$error="Email already exists";
	}
	
	
	echo "<script>alert('You have successfully sent an invitation to your patient.');</script>";
	
}
/*if($mail)
{echo "success";}
else{
echo "failed";	
}*/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
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
	if (email.value.indexOf("@", 0) < 0)
    {
        window.alert("Please enter a valid e-mail address.");
        email.focus();
        return false;
    }
    
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


    </script>
</head>

<body>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><table width="739" border="0" align="center" cellpadding="0" cellspacing="0">
     <tr>
        <td height="39" valign="top"> <div>
          <div style="width:140px; margin-left:20px; margin-bottom:-2px; float:left;">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="6"><img src="img/t1.jpg" width="6" height="41" alt="" /></td>
                <td width="661" align="center" style="background: url(img/t3.jpg);"><a href="patient_list.php"><img src="img/t_patient_list.png" alt="" /></a></td>
                <td width="6"><img src="img/t2.jpg" width="6" height="41" alt="" /></td>
              </tr>
            </table>
          </div>
          <div style="width:120px; margin-left:10px; margin-bottom:-2px; float:left;">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="6"><img src="img/u1.jpg" width="6" height="41" alt="" /></td>
                <td width="661" align="center" style="background: url(img/u3.jpg);"><a href="add_patient.php"><img src="img/t_add.png"  alt="" /></a></td>
                <td width="6"><img src="img/u2.jpg" width="6" height="41" alt="" /></td>
              </tr>
            </table>
          </div>
         <!--<div style="width:110px; margin-left:10px; margin-bottom:-2px; float:left">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="6"><img src="img/t1.jpg" width="6" height="41" alt="" /></td>
                <td width="661" align="center" style="background: url(img/t3.jpg);"><img src="img/t-sent.png" width="72" height="17" alt="" /></td>
                <td width="6"><img src="img/t2.jpg" width="6" height="41" alt="" /></td>
              </tr>
            </table>
          </div>
          <div style="width:130px; margin-left:10px; margin-bottom:-2px; float:left; z-index:999999999">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="6"><img src="img/u1.jpg" width="6" height="41" alt="" /></td>
                <td width="661" align="center" style="background: url(img/u3.jpg); font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#3e4447;">Joselito Galvez</td>
                <td width="6"><img src="img/u2.jpg" width="6" height="41" alt="" /></td>
              </tr>
            </table>
          </div>-->
        </div></td>
      </tr>
      <tr>
        <td><div style="z-index:1;"><img src="img/1.jpg" width="739" height="12" alt="" /></div></td>
      </tr>
      <tr>
        <td height="47" style="background:url(img/2.jpg);">&nbsp;</td>
      </tr>
      <tr>
        <td valign="top" style="background:url(img/3.jpg); padding-bottom:10px;"><div style="margin-top:-8px; position: relative;">
          <table width="690" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td bgcolor="#FFFFFF" style="border-left:1px solid #a0a8ac; border-bottom:1px solid #a0a8ac; border-right:1px solid #a0a8ac;"><!--<p>&nbsp;</p>-->
              <!--locations-->
                <table cellpadding="0" cellspacing="0" border="0">
                <tr>
                
                <td style="background-image:url(img/option_center_check.png);width:90px;height:36px;padding-left:15px;"> 
                <a href="#" class="link_map">
                Patient Info
                </a>
                </td>
                
                <td style="background-image:url(img/option_right_check.png);width:5px;height:36px;">&nbsp;</td>
              
               
                <td style="background-image:url(img/option_center_check.png);width:106px;height:36px;padding-left:15px;"> 
                 <a href="#" class="link_map">
                Medical History
                </a>
                </td>
                
               <td style="background-image:url(img/option_right_check.png);width:5px;height:36px;">&nbsp;</td>
               
                 <td style="background-image:url(img/option_center_check.png);width:100px;height:36px;padding-left:15px;"> 
                <a href="#" class="link_map">
                Dental History
                 </a>
                </td>
               
                <td style="background-image:url(img/option_right_check.png);width:5px;height:36px;">&nbsp;</td>
               
                <td style="background-color:#FFF;width:135px;height:36px;padding-left:15px;"> 
                 <a href="#" class="link_map">
                Account Invitation
                </a>
                </td>
                
                 
              <td style="background-image:url(img/option_center_check.png);width:187px;height:36px;">&nbsp; 
                </td>
                
                </tr>
                </table>
                <!--locations-->
                </td></tr>
                
                <tr><td style="background-color:#FFF;">
              <!--account invitation-->
              <table cellpadding="0" cellspacing="0" border="0" style="font-family:Arial, Helvetica, sans-serif;color:#333;">
              <tr><td style="padding-top:20px;padding-left:20px;">
              <h3 style="font-weight:bold;font-size:16px;">Send account invitation</h3> 
              </td></tr>
              <form method="post" action="" enctype="multipart/form-data" name="ContactForm" onSubmit="return ValidateContactForm();">
              <tr><td style="width:300px;text-align:right;">
              <span style="color:#F00;font-size:12px;"><?php echo $error;?></span>
              </td></tr>
              <tr>
              <td style="padding-top:10px;padding-left:30px;">
              <table cellpadding="0" cellspacing="0" border="0">
              <tr><td style="width:300px;text-align:right;">
              <span style="color:#333;font-size:14px;">Enter a valid email of the patient</span>
              </td><td>
              <input type="text" name="email1" style="margin-left:10px;font-size:14px;" id="validate"/><span id="validEmail"></span></td></tr></table>
              </td>
              </tr>
              <tr>
              <td style="padding-top:10px;padding-left:30px;">
              <table cellpadding="0" cellspacing="0" border="0">
              <tr><td style="width:300px;text-align:right;">
              <span style="color:#333;font-size:14px;">Verify the email address of the patient</span> 
              </td><td>
              <input type="text" name="email2" style="margin-left:10px;font-size:14px;" id="validates"/><span id="validEmails"></span></td></tr></table>
              </td>
              </tr>
              
              <tr><td style="padding-left:30px;">
              <table cellpadding="0" cellspacing="0" border="0">
              <tr>
            
              <td width="300">&nbsp;</td>
              <td style="padding-top:10px;">
              <input type="submit" class="submit2" name="send_email" value="Send Invitation" style="margin-left:10px;"/></td></tr></table>
              </td></tr>
              <input type="hidden" name="where_id" value="<?php echo $id;?>" />
              </form>
              <tr><td><div style="clear:both;height:20px;"></div></td></tr>
              </table>
              
              <!--account invitation-->
              
               </td>
            </tr>
          </table>
        </div></td>
      </tr>
      <tr>
        <td><img src="img/4.jpg" width="739" height="6" alt="" /></td>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>
