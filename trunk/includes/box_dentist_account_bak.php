<?php

$dentist_id=$_SESSION['id'];

include('config.php');

$text="";

if(isset($_POST['save1'])) {

$pass1=mysql_real_escape_string($_POST['pass1']);
$pass2=mysql_real_escape_string($_POST['pass2']);
if($pass1==$pass2){
$sql=mysql_query("UPDATE dentist_list SET dentist_pass='".md5($pass1)."' WHERE id='".$dentist_id."'");	
echo "<script type=\"text/javascript\">alert('Updated Successfully!');</script>";
}
else
{$text="Error try again";}
}

if(isset($_POST['save2'])) {

$email1=mysql_real_escape_string($_POST['email1']);
$email2=mysql_real_escape_string($_POST['email2']);
if($email1==$email2){
	
$sql="SELECT * FROM dentist_list WHERE email='".$email1."'";
$res=mysql_query($sql);

if(!$res) {
$texts="Error try again";
}
else {
$sql="UPDATE dentist_list SET email='".$email1."' WHERE id='".$dentist_id."'";
$res=mysql_query($sql);
//var_dump($sql);die();
echo "<script type=\"text/javascript\">alert('Updated Successfully!');</script>";
}
}
else
{$texts="Error try again";}
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	font-family:Arial, Helvetica, sans-serif;
	font-size:13px;
	color:#333;
}
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
	
	
	/*function chk_val(obj) {*/
	
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
	
	</script>
</head>

<body>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>&nbsp;</td>
  </tr>
  <!--<tr>
    <td>
    <table width="739" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td height="39" valign="top"><div>
          <div style="width:140px; margin-left:20px; margin-bottom:-2px; float:left;">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="6"><img src="img/t1.jpg" width="6" height="41" alt="" /></td>
                <td width="661" align="center" style="background: url(img/t3.jpg);"><img src="img/t-contact.png" width="95" height="12" alt="" /></td>
                <td width="6"><img src="img/t2.jpg" width="6" height="41" alt="" /></td>
              </tr>
            </table>
          </div>
          <div style="width:120px; margin-left:10px; margin-bottom:-2px; float:left;">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="6"><img src="img/t1.jpg" width="6" height="41" alt="" /></td>
                <td width="661" align="center" style="background: url(img/t3.jpg);"><img src="img/t-received.png" width="83" height="13" alt="" /></td>
                <td width="6"><img src="img/t2.jpg" width="6" height="41" alt="" /></td>
              </tr>
            </table>
          </div>
          <div style="width:110px; margin-left:10px; margin-bottom:-2px; float:left">
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
          </div>
        </div></td>
      </tr>-->
      <?php 
	  $sql="SELECT * FROM dentist_list WHERE id='".$dentist_id."'";
	  $res=mysql_query($sql);
	  //var_dump($res);die();
	  while($row=mysql_fetch_array($res)) {
		$email=$row['email'];
		$pass=$row['dentist_pass'];
	  }
	  ?>
      <tr><td>
        <table cellpadding="0" cellspacing="0" border="0">
        <tr><td><img src="img/1.jpg" width="739" height="12" alt="" />
       
        </td></tr>
        </table></td>
      </tr>
      <tr>
        <td height="47" style="background:url(img/2.jpg);">
        <table cellpadding="0" cellspacing="0" border="0" width="100%"><tr><td>
         <div style="margin-left:30px;margin-top:-8px;">
        <span style="font-family:Arial, Helvetica, sans-serif;color:#FFF;font-size:16px;font-weight:bold;">
       Change Password
        </span>
        </div></td>
        </tr></table></td>
      </tr>
      <tr>
        <td valign="top" style="background:url(img/3.jpg);"><div style="margin-top:-8px; position: relative;">
          <table width="690" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td bgcolor="#FFFFFF" style="border-left:1px solid #a0a8ac; border-bottom:1px solid #a0a8ac; border-right:1px solid #a0a8ac;">
              <div style="margin:0 auto;width:350px;">
              <form method="post" action="" enctype="multipart/form-data">
              <table cellpadding="0" cellspacing="0" border="0" style="padding-top:20px;">
              <tr><td>
              <table cellpadding="0" cellspacing="0" border="0">
              <tr><td>
              <span style="color:#F00;font-size:16px;"><?php echo $text;?></span>
              </td></tr>
              <tr><td style="width:160px;">
              Current Password: 
              </td>
              <td><input type="password" name="pass" value="<?php echo $pass;?>" style="font-size:14px;"/></td>
              </tr>
              <tr><td style="width:160px;padding-top:15px;">
              New Password: 
              </td>
              <td style="padding-top:15px;"><input type="password" name="pass1" style="font-size:14px;" /></td>
              </tr>
              <tr><td style="width:160px;padding-top:15px;">
              Confirm Password: 
              </td>
              <td style="padding-top:15px;"><input type="password" name="pass2" style="font-size:14px;"/></td>
              </tr>
              <tr><td style="padding-top:20px;">
              <input type="submit" value="Save" class="submit2" name="save1" />
              </td></tr>
              </table>
              </td></tr>
              </table> 
              </form>
              <div style="clear:both;height:20px;"></div>
              </div>
              
                </td>
            </tr>
          
          </table>
        </div></td>
      </tr><!--first content-->
      
        <!--second content--> 
       <tr>
        <td height="47" style="background:url(img/2.jpg);">
     <div style="margin-left:30px;margin-top:-8px;">
        <span style="font-family:Arial, Helvetica, sans-serif;color:#FFF;font-size:16px;font-weight:bold;">
       Change Email
        </span>
        </div>
        </td>
      </tr>
        <tr>
        <td valign="top" style="background:url(img/3.jpg);padding-bottom:15px;"><div style="margin-top:-8px; position: relative;">
          <table width="690" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td bgcolor="#FFFFFF" style="border-left:1px solid #a0a8ac; border-bottom:1px solid #a0a8ac; border-right:1px solid #a0a8ac;">
              
                <div style="margin:0 auto;width:350px;">
                <form method="post" action="" enctype="multipart/form-data" name="ContactForm" onSubmit="return ValidateContactForm();">
              <table cellpadding="0" cellspacing="0" border="0" style="padding-top:20px;">
              <tr><td>
              <table cellpadding="0" cellspacing="0" border="0">
                <tr><td>
              <span style="color:#F00;font-size:16px;"><?php echo $texts;?></span>
              </td></tr>
              <tr><td style="width:160px;">
              Current Email: 
              </td>
              <td><input type="text" name="email" value="<?php echo $email;?>" style="font-size:15px;"/></td>
              </tr>
              <tr><td style="width:160px;padding-top:15px;">
              New Email: 
              </td>
              <td style="padding-top:15px;"><input type="text" name="email1" id="validate" style="font-size:15px;"/><span id="validEmail"></span></td>
              </tr>
              <tr><td style="width:160px;padding-top:15px;">
              Confirm Email: 
              </td>
              <td style="padding-top:15px;"><input type="text" name="email2" style="font-size:15px;"/></td>
              </tr>
              <tr><td style="padding-top:20px;">
              <input type="submit" name="save2" value="Save" class="submit2" />
              </td></tr>
              </table>
              </td></tr>
              </table> 
              </form>
              <div style="clear:both;height:20px;"></div>
              </div>
              
              </td>
            </tr>
          </table>
        </div></td>
      </tr><!--second-content-->
      
           
  
      <tr>
        <td colspan="2"><img src="img/4.jpg" width="739" height="6" alt="" />
     </td>
      </tr>
    
    </table></td>
  </tr>
</table>
</body>
</html>
