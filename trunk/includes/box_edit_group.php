<?php
include('config.php');

if(isset($_GET['id'])) {
$id=$_GET['id'];	


$sql="SELECT * FROM address_book_group WHERE id='".$id."'";
$res=mysql_query($sql);
while($row=mysql_fetch_array($res)) {
$gname=$row['group_name'];	}

}

if(isset($_POST['send_group']))
{
$gname=mysql_real_escape_string($_POST['new_group']);
$gid=mysql_real_escape_string($_POST['gid']);

$sql="UPDATE address_book_group SET group_name='".$gname."',date=NOW() WHERE id='".$gid."'";
$res=mysql_query($sql);

echo "<script>alert('You have successfully updated a group.');</script>";

//header('Location: dentist_group_addressbook.php');

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
        <td align="right">
        <!--<form actio="dentist_addressbook.php">-->
         <input type="button" name="back" value="BACK" onclick="window.location.href='dentist_group_addressbook.php'" class="submit" style="margin-right:15px;margin-top:-4px;"/>
        <!--</form>-->
        <!--<input type="text" name="search_field" class="search" value="Search contact list" onfocus="if (this.value == 'Search contact list') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Search contact list';}" style="color:#999;"/>
     <input type="submit" name="search" value="SEARCH" class="submit" style="margin-right:17px;margin-top:-6px;" />--></td></tr></table>
        </td>
      </tr>
      <tr>
        <td valign="top" style="background:url(img/3.jpg); padding-bottom:10px;"><div style="margin-top:-8px; position: relative;">
          <table width="690" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td bgcolor="#FFFFFF" style="border-left:1px solid #a0a8ac; border-right:1px solid #a0a8ac;">
               <table cellpadding="0" cellspacing="0" border="0" style="font-family:Arial, Helvetica, sans-serif;">
         <tr><td style="padding-left:20px;">
         <h2 style="color:#333;font-size:18px;">Edit Address Book Group</h2>
         </td></tr>
         <form method="post" action="" enctype="multipart/form-data">
         <tr><td style="padding-top:20px;padding-left:100px;">
           <input type="text" name="new_group" value="<?php echo $gname;?>"/>
         </td><td style="padding-left:20px;padding-top:20px;">
         
         <input type="submit" name="send_group" value="Save" class="submit2"/>
         </td></tr>
         <input type="hidden" name="gid" value="<?php echo $id;?>" />
         <tr><td><div style="clear:both;height:20px;"></div></td></tr>
         </form>
         </table>
         
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
