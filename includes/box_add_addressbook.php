<?php include('config.php');

$dentist_id=$_SESSION['id'];

if(isset($_POST['edit'])){
	$id=$_POST['id_member'];
$lname=mysql_real_escape_string($_POST['last_name']);	
$fname=mysql_real_escape_string($_POST['first_name']);
$address=mysql_real_escape_string($_POST['address']);
$email=mysql_real_escape_string($_POST['email']);
$contact=mysql_real_escape_string($_POST['contact']);
$group=mysql_real_escape_string($_POST['group']);
$bday=mysql_real_escape_string($_POST['bday']);
$work=mysql_real_escape_string($_POST['work']);
$comp=mysql_real_escape_string($_POST['company']);
$compadd=mysql_real_escape_string($_POST['companyadd']);


$dates=explode("/",$bday);
$m=$dates[0];
$d=$dates[1];
$y=$dates[2];
$bday=$y."-".$m."-".$d;

$sql="UPDATE addressbook SET 
last_name='".$lname."',
 first_name='".$fname."',
 email='".$email."',
 group_name='".$group."',
 address='".$address."',
 contact_number='".$contact."',
 company='".$comp."',
 work='".$work."',
 work_address='".$compadd."',
 birthday='".$bday."'
WHERE id=".$id." AND dentist_id='".$dentist_id."'";
$res=mysql_query($sql);

echo "<script>alert('Updated Successfully.');</script>";

}


if(isset($_POST['send']))
{
$lname=mysql_real_escape_string($_POST['last_name']);	
$fname=mysql_real_escape_string($_POST['first_name']);
$address=mysql_real_escape_string($_POST['address']);
$email=mysql_real_escape_string($_POST['email']);
$contact=mysql_real_escape_string($_POST['contact']);
$group=mysql_real_escape_string($_POST['group']);
$bday=mysql_real_escape_string($_POST['bday']);
$work=mysql_real_escape_string($_POST['work']);
$comp=mysql_real_escape_string($_POST['company']);
$compadd=mysql_real_escape_string($_POST['companyadd']);


$dates=explode("/",$bday);
$m=$dates[0];
$d=$dates[1];
$y=$dates[2];
$bday=$y."-".$m."-".$d;

$sql="INSERT INTO addressbook 
(last_name,
 first_name,
 email,
 group_name,
 address,
 contact_number,
 company,
 work,
 work_address,
 birthday,
 dentist_id)
VALUES(
'$lname',
'$fname',
'$email',
'$group',
'$address',
'$contact',
'$comp',
'$work',
'$compadd',
'$bday',
'$dentist_id')";
$res=mysql_query($sql);
//var_dump($sql);die();
echo "<script>alert('You have successfully added a new person in your addressbook.');</script>";
}


if(isset($_POST['send_group']))
{
$gname=mysql_real_escape_string($_POST['new_group']);

$sql="INSERT INTO address_book_group (group_name,dentist_id,date) VALUES('$gname','$dentist_id',NOW())";
$res=mysql_query($sql);

echo "<script>alert('You have successfully added a new group.');</script>";

}
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
	
	</script>
<link type="text/css" href="jquery-ui-1.8.17.custom/css/start/jquery-ui-1.8.17.custom.css" rel="stylesheet" />	
		<script type="text/javascript" src="jquery-ui-1.8.17.custom/js/jquery-1.7.1.min.js"></script>
		<script type="text/javascript" src="jquery-ui-1.8.17.custom/js/jquery-ui-1.8.17.custom.min.js"></script>
		<script type="text/javascript">
			$(function(){

				

				// Datepicker
				$('#datepicker').datepicker({
					inline: true
				});
				
				
			});
		</script>
</head>

<body>

<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>&nbsp;</td>
  </tr>
  <!--<tr>
    <td><table width="739" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td height="39" valign="top"><div>
          <div style="width:140px; margin-left:20px; margin-bottom:-2px; float:left;">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="6"><img src="img/u1.jpg" width="6" height="41" alt="" /></td>
                <td width="661" align="center" style="background: url(img/u3.jpg);"><img src="img/t-contact.png" alt="" /></td>
                <td width="6"><img src="img/u2.jpg" width="6" height="41" alt="" /></td>
              </tr>
            </table>
          </div>
          <div style="width:120px; margin-left:10px; margin-bottom:-2px; float:left;">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="6"><img src="img/t1.jpg" width="6" height="41" alt="" /></td>
                <td width="661" align="center" style="background: url(img/t3.jpg);"><img src="img/t_add.png"  alt="" /></td>
                <td width="6"><img src="img/t2.jpg" width="6" height="41" alt="" /></td>
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
        <td height="47" style="background:url(img/2.jpg);">        
        <table width="100%"><tr><td>
        <!--<img src="img/contact_list.png" height="21" width="116" style="margin-top:-8px;margin-left:23px;"/>
        <div style="float:left;margin-left:25px;margin-top:-8px;"><span style="color:#FFF;font-size:18px;font-family:Arial, Helvetica, sans-serif;">Addressbook</span></div>-->
        
              <img src="img/add_ab2.png" width="208" height="23" style="margin-top:-5px;margin-left:19px;" />  
    
        </td>
		<?php if(isset($_GET['id'])){
$idy = $_GET['id']; }

if($idy=="new") {
$location="dentist_group_addressbook";
}
else {
$location="dentist_addressbook";
}

?>
        <td align="right">
        <form actio="dentist_addressbook.php">
         <input type="button" name="back" value="BACK" onclick="window.location.href='<?php echo $location;?>.php'" class="submit" style="margin-right:15px;margin-top:-4px;"/>
        </form>
        <!--<input type="text" name="search_field" class="search" value="Search contact list" onfocus="if (this.value == 'Search contact list') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Search contact list';}" style="color:#999;"/>
     <input type="submit" name="search" value="SEARCH" class="submit" style="margin-right:17px;margin-top:-6px;" />--></td></tr></table>
        </td>
      </tr>
      <tr>
        <td valign="top" style="background:url(img/3.jpg); padding-bottom:10px;"><div style="margin-top:-8px; position: relative;">
          <table width="690" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td bgcolor="#FFFFFF" style="border-left:1px solid #a0a8ac; border-right:1px solid #a0a8ac;">
              
              <?php //if(isset($_GET['id'])){
//$idy = $_GET['id']; }

if($idy=="add") {			  ?>
            
         <table cellpadding="0" cellspacing="0" border="0" style="font-family:Arial, Helvetica, sans-serif;">
         <tr><td style="padding-left:20px;">
         <!--<h2 style="color:#333;font-size:18px;">Add Address Book Entry</h2>-->
         </td></tr>
         <tr><td style="padding-top:20px;">
         <form method="post" action="" enctype="multipart/form-data" name="ContactForm" onSubmit="return ValidateContactForm();">
         <table cellpadding="0" cellspacing="0" border="0">
<tr><td style="font-size:14px;color:#333;width:200px;text-align:right;">
Last name</td> <td style="padding-left:20px;"><input type="text" name="last_name" style="font-size:15px;"/> 
</td></tr>
<tr><td style="font-size:14px;color:#333;width:200px;text-align:right;padding-top:15px;">
First name</td><td style="padding-left:20px;padding-top:15px;"><input type="text" name="first_name" style="font-size:15px;"/> 
</td></tr>
<tr><td style="font-size:14px;color:#333;width:200px;text-align:right;padding-top:15px;">
Address</td><td style="padding-left:20px;padding-top:15px;"><input type="text" name="address" style="font-size:15px;"/> 
</td></tr>
<tr><td style="font-size:14px;color:#333;width:200px;text-align:right;padding-top:15px;">
Email </td><td style="padding-left:20px;padding-top:15px;"><input type="text" name="email" id="validate" style="font-size:15px;"/><span id="validEmail"></span>
</td></tr>
<tr><td style="font-size:14px;color:#333;width:200px;text-align:right;padding-top:15px;">
Contact Number</td><td style="padding-left:20px;padding-top:15px;"><input type="text" name="contact" id="contact" style="font-size:15px;"/> 
</td></tr>
<tr><td style="font-size:14px;color:#333;width:200px;text-align:right;padding-top:15px;">
Birthday</td><td style="padding-left:20px;padding-top:15px;"><input type="text" name="bday" id="datepicker" style="font-size:15px;"/> 
</td></tr>
<tr><td style="font-size:14px;color:#333;width:200px;text-align:right;padding-top:15px;">
Work</td><td style="padding-left:20px;padding-top:15px;"><input type="text" name="work" id="work" style="font-size:15px;"/> 
</td></tr>
<tr><td style="font-size:14px;color:#333;width:200px;text-align:right;padding-top:15px;">
Company</td><td style="padding-left:20px;padding-top:15px;"><input type="text" name="company" id="company" style="font-size:15px;"/> 
</td></tr>
<tr><td style="font-size:14px;color:#333;width:200px;text-align:right;padding-top:15px;">
Company Address</td><td style="padding-left:20px;padding-top:15px;"><input type="text" name="companyadd" id="companyadd" style="font-size:15px;"/> 
</td></tr>
<tr><td style="font-size:14px;color:#333;width:200px;text-align:right;padding-top:15px;">
Group</td><td style="padding-left:20px;padding-top:15px;"><select name="group" style="font-size:15px;">
<option value="none">none</option>
<?php 
$sql="SELECT * FROM address_book_group WHERE dentist_id='".$dentist_id."'";
$res=mysql_query($sql);
while($row=mysql_fetch_array($res)) {
?>

<option value="<?php echo $row["group_name"];?>"><?php echo $row["group_name"];?></option>
<?php } ?>
</select> 
</td></tr>
<tr><td>&nbsp;
</td><td style="padding-left:20px;padding-top:15px;"><input type="submit" name="send" value="SAVE" class="submit2" /> 
</td>

</tr>
</form>
<tr><td><div style="clear:both;height:20px;"></div></td></tr>
</table>
            </td></tr></table>
              <?php } else if($idy=="new"){ ?>
              
              <table cellpadding="0" cellspacing="0" border="0" style="font-family:Arial, Helvetica, sans-serif;">
         <tr><td style="padding-left:20px;">
         <h2 style="color:#333;font-size:18px;">Add Address Book Group</h2>
         </td></tr>
         <form method="post" action="" enctype="multipart/form-data">
         <tr><td style="padding-top:20px;padding-left:100px;">
         <input type="text" name="new_group" style="font-size:15px;"/>
         </td><td style="padding-left:20px;padding-top:20px;">
         <input type="submit" name="send_group" value="Save" class="submit2"/>
         </td></tr>
         <tr><td><div style="clear:both;height:20px;"></div></td></tr>
         </form>
         </table>
              
              <?php }  else {
				  
				  $sql="SELECT * FROM addressbook WHERE id=".$idy." AND dentist_id='".$dentist_id."'";
				  $res=mysql_query($sql);
				  while($row=mysql_fetch_array($res)) {
					  $bday=$row['birthday'];
					  $dates=explode("-",$bday);
						$y=$dates[0];
						$m=$dates[1];
						$d=$dates[2];
						$bday=$m."/".$d."/".$y;
				  ?>
              
              <table cellpadding="0" cellspacing="0" border="0" style="font-family:Arial, Helvetica, sans-serif;">
         <tr><td style="padding-left:20px;">
         <h2 style="color:#333;font-size:18px;">Add Address Book Entry</h2>
         </td></tr>
         <tr><td style="padding-top:20px;">
         <form method="post" action="" enctype="multipart/form-data">
         <table cellpadding="0" cellspacing="0" border="0">
<tr><td style="font-size:14px;color:#333;width:200px;text-align:right;">
Last name</td> <td style="padding-left:20px;"><input type="text" name="last_name" value="<?php echo $row["last_name"];?>" style="font-size:15px;"/> 
</td></tr>
<tr><td style="font-size:14px;color:#333;width:200px;text-align:right;padding-top:15px;">
First name</td><td style="padding-left:20px;padding-top:15px;"><input type="text" name="first_name" value="<?php echo $row["first_name"];?>" style="font-size:15px;"/> 
</td></tr>
<tr><td style="font-size:14px;color:#333;width:200px;text-align:right;padding-top:15px;">
Address</td><td style="padding-left:20px;padding-top:15px;"><input type="text" name="address" value="<?php echo $row["address"];?>" style="font-size:15px;"/> 
</td></tr>
<tr><td style="font-size:14px;color:#333;width:200px;text-align:right;padding-top:15px;">
Email </td><td style="padding-left:20px;padding-top:15px;"><input type="text" name="email" value="<?php echo $row["email"];?>" style="font-size:15px;"/> 
</td></tr>
<tr><td style="font-size:14px;color:#333;width:200px;text-align:right;padding-top:15px;">
Contact Number</td><td style="padding-left:20px;padding-top:15px;"><input type="text" name="contact" value="<?php echo $row["contact_number"];?>" style="font-size:15px;"/> 
</td></tr>
<tr><td style="font-size:14px;color:#333;width:200px;text-align:right;padding-top:15px;">
Birthday</td><td style="padding-left:20px;padding-top:15px;"><input type="text" name="bday" id="datepicker" value="<?php echo $bday;?>" style="font-size:15px;"/> 
</td></tr>
<tr><td style="font-size:14px;color:#333;width:200px;text-align:right;padding-top:15px;">
Work</td><td style="padding-left:20px;padding-top:15px;"><input type="text" name="work" id="work" value="<?php echo $row['work'];?>" style="font-size:15px;"/> 
</td></tr>
<tr><td style="font-size:14px;color:#333;width:200px;text-align:right;padding-top:15px;">
Company</td><td style="padding-left:20px;padding-top:15px;"><input type="text" name="company" id="company" value="<?php echo $row['company'];?>" style="font-size:15px;"/> 
</td></tr>
<tr><td style="font-size:14px;color:#333;width:200px;text-align:right;padding-top:15px;">
Company Address</td><td style="padding-left:20px;padding-top:15px;"><input type="text" name="companyadd" id="companyadd" style="font-size:15px;" value="<?php echo $row['work_address'];?>"/> 
</td></tr>
<tr><td style="font-size:14px;color:#333;width:200px;text-align:right;padding-top:15px;">
Group</td><td style="padding-left:20px;padding-top:15px;"><select name="group" style="font-size:15px;">
<option value="none">none</option>
<?php 
$gname=$row["group_name"];
$sql="SELECT * FROM address_book_group WHERE dentist_id='".$dentist_id."'";
$res=mysql_query($sql);
while($row=mysql_fetch_array($res)) {
if($gname==$row["group_name"])
{$sentence="selected";}
else
{$sentence="";}
?>


<option value="<?php echo $row["group_name"];?>" <?php echo $sentence;?>><?php echo $row["group_name"];?></option>
<?php } ?>
</select> 

</td></tr>
<tr><td>&nbsp;
</td><td style="padding-left:20px;padding-top:15px;"><input type="submit" name="edit" value="SAVE" class="submit2" /> 
</td></tr>
<input type="hidden" name="id_member" value="<?php echo $idy;?>" />
<tr><td><div style="clear:both;height:20px;"></div></td></tr>
</table>
            </td></tr></table>
              <?php } }?>
               </td>
            </tr>
          
            
            
          </table>
        </div></td>
      </tr>
      </form>
      <tr>
        <td><img src="img/4.jpg" width="739" height="6" alt="" /></td>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>