<?php 
$error="";
if(isset($_POST['send_pass']))
{
$key=$_POST['key'];
$pass=mysql_real_escape_string($_POST['password']);
$pass2=mysql_real_escape_string($_POST['password2']);
//var_dump($pass);
//var_dump($key);
if($pass==$pass2) {
$sql="UPDATE patient_list SET password='".md5($pass)."' WHERE keyword='".$key."'";
$res=mysql_query($sql); 
$error="Invitation Sent";
}
else
$error="Your email addresses are not the same";
//var_dump($sql);
//var_dump($res);
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

</head>

<body>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><table width="739" border="0" align="center" cellpadding="0" cellspacing="0">
     <!--<tr>
        <td height="39" valign="top"> <div>
          <div style="width:140px; margin-left:20px; margin-bottom:-2px; float:left;">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="6"><img src="img/t1.jpg" width="6" height="41" alt="" /></td>
                <td width="661" align="center" style="background: url(img/t3.jpg);"><img src="img/t_patient_list.png" alt="" /></td>
                <td width="6"><img src="img/t2.jpg" width="6" height="41" alt="" /></td>
              </tr>
            </table>
          </div>
          <div style="width:120px; margin-left:10px; margin-bottom:-2px; float:left;">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="6"><img src="img/u1.jpg" width="6" height="41" alt="" /></td>
                <td width="661" align="center" style="background: url(img/u3.jpg);"><img src="img/t_add.png"  alt="" /></td>
                <td width="6"><img src="img/u2.jpg" width="6" height="41" alt="" /></td>
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
                <?php 
			  $sql="SELECT * FROM patient_list WHERE keyword='".$key."'";
			  $res=mysql_query($sql);
			  while($row=mysql_fetch_array($res)){
			  $pass=$row['password'];
			  }
			  if(empty($pass)) {
			  ?>
              <!--account invitation-->
              <table cellpadding="0" cellspacing="0" border="0" style="font-family:Arial, Helvetica, sans-serif;color:#333;">
              <tr><td style="padding-top:20px;padding-left:20px;">
              <h3 style="font-weight:bold;font-size:16px;">Send your password in the invitation</h3> 
              </td></tr>
            
              <form method="post" action="" enctype="multipart/form-data">
              <tr><td style="padding-top:10px;padding-left:30px;width:270px;"><span style="color:#F00;font-size:14px;"><?php echo $error;?></span></td></tr>
              <tr>
              <td style="padding-top:10px;padding-left:30px;">
              <table cellpadding="0" cellspacing="0" border="0">
              <tr><td style="width:300px;text-align:right;">
              <span style="color:#333;font-size:14px;">Enter a the password you want.</span>
              </td><td>
              <input type="password" name="password" style="margin-left:10px;"/></td></tr></table>
              </td>
              </tr>
                <tr><td><div style="clear:both;height:6px;"></div></td></tr>
              <tr>
              <td style="padding-top:10px;padding-left:30px;">
              <table cellpadding="0" cellspacing="0" border="0">
              <tr><td style="width:300px;text-align:right;">
              <span style="color:#333;font-size:14px;">Re-enter your password.</span>
              </td><td>
              <input type="password" name="password2" style="margin-left:10px;"/></td></tr></table>
              </td>
              </tr>
              
                <tr><td><div style="clear:both;height:20px;"></div></td></tr>  
                
                
                 
              </table>
              </td>
              </tr>
              
            
              
                       
              <tr><td style="padding-left:30px;">
              <table cellpadding="0" cellspacing="0" border="0">
              <tr>
              <td width="300">&nbsp;</td>
              <td style="padding-top:10px;">
              <input type="submit" class="submit2" name="send_pass" value="Send Password" style="margin-left:10px;"/></td></tr>
             
              </table>
              </td></tr>
              <input type="hidden" name="key" value="<?php echo $key;?>" />
              </form>
               
              <?php  } else { ?>
              <table cellpadding="0" cellspacing="0" border="0" style="font-family:Arial, Helvetica, sans-serif;color:#333;">
              <tr><td style="padding-left:30px;padding-top:20px;">
              <h2 style="color:#333;font-size:20px;font-family:Arial, Helvetica, sans-serif;">You already have a password</h2>
              </td></tr>
              <?php } ?>
              
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
