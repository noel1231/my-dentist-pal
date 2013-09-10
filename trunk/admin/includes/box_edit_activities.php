<?php 

if(isset($_GET['id'])){
$idy = $_GET['id']; }


if(isset($_POST['save']))

{
$act_id=mysql_real_escape_string($_POST['act_id']);
$subject=mysql_real_escape_string($_POST['subject']);
$message=mysql_real_escape_string($_POST['message']);
$sql="UPDATE activities SET act_subject='".$subject."',act_content='".$message."' WHERE id='".$act_id."'";
$res=mysql_query($sql);

echo "<script>alert('Successfully Updated your Activity');</script>";

header('Location: admin/activites.php');

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
      <tr>
        <td height="39" colspan="2" valign="top"><div>
          <!--<div style="width:140px; margin-left:20px; margin-bottom:-2px; float:left;">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="6"><img src="../img/t1.jpg" width="6" height="41" alt="" /></td>
                <td width="661" align="center" style="background: url(../img/t3.jpg);"><a href="message_contact.php"><img src="../img/t-contact.png" width="95" height="12" alt="" /></a></td>
                <td width="6"><img src="../img/t2.jpg" width="6" height="41" alt="" /></td>
              </tr>
            </table>
          </div>
          <div style="width:120px; margin-left:10px; margin-bottom:-2px; float:left;">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="6"><img src="../img/u1.jpg" width="6" height="41" alt="" /></td>
                <td width="661" align="center" style="background: url(../img/u3.jpg);"><a href="message_received.php"><img src="../img/t-received.png" width="83" height="13" alt="" /></a></td>
                <td width="6"><img src="../img/u2.jpg" width="6" height="41" alt="" /></td>
              </tr>
            </table>
          </div>
          <div style="width:110px; margin-left:10px; margin-bottom:-2px; float:left">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="6"><img src="../img/t1.jpg" width="6" height="41" alt="" /></td>
                <td width="661" align="center" style="background: url(../img/t3.jpg);"><a href="message_sent.php"><img src="../img/t-sent.png" width="72" height="17" alt="" /></a></td>
                <td width="6"><img src="../img/t2.jpg" width="6" height="41" alt="" /></td>
              </tr>
            </table>
          </div>-->
          <div style="width:130px; margin-left:20px; margin-bottom:-2px; float:left; z-index:999999999">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="6"><img src="../img/t1.jpg" width="6" height="41" alt="" /></td>
                <td width="661" align="center" style="background: url(../img/t3.jpg);"><a href="activites.php" style="font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#3e4447;text-decoration:none;">Activities List</a></td>
                <td width="6"><img src="../img/t2.jpg" width="6" height="41" alt="" /></td>
              </tr>
            </table>
          </div>
          <div style="width:130px; margin-left:10px; margin-bottom:-2px; float:left; z-index:999999999">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="6"><img src="../img/t1.jpg" width="6" height="41" alt="" /></td>
                <td width="661" align="center" style="background: url(../img/t3.jpg);"><a href="announcement.php" style="font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#3e4447;text-decoration:none;">Announcement</a></td>
                <td width="6"><img src="../img/t2.jpg" width="6" height="41" alt="" /></td>
              </tr>
            </table>
          </div>
          <!--<div style="width:130px; margin-left:10px; margin-bottom:-2px; float:left; z-index:999999999">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="6"><img src="../img/t1.jpg" width="6" height="41" alt="" /></td>
                <td width="661" align="center" style="background: url(../img/t3.jpg);"><a href="banner_inactive.php" style="font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#3e4447;text-decoration:none;">Inactive</a></td>
                <td width="6"><img src="../img/t2.jpg" width="6" height="41" alt="" /></td>
              </tr>
            </table>
          </div>
          <div style="width:130px; margin-left:10px; margin-bottom:-2px; float:left; z-index:999999999">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="6"><img src="../img/t1.jpg" width="6" height="41" alt="" /></td>
                <td width="661" align="center" style="background: url(../img/t3.jpg);"><a href="banner_add.php" style="font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#3e4447;text-decoration:none;">Add New</a></td>
                <td width="6"><img src="../img/t2.jpg" width="6" height="41" alt="" /></td>
              </tr>
            </table>
          </div>-->
        </div></td>
      </tr>
      <tr>
        <td colspan="2"><img src="../img/1.jpg" width="739" height="12" alt="" /></td>
      </tr>
      <form name="frmMain" action="" method="post">
      <tr>
      
        <td height="47" style="background:url(../img/2.jpg);">
        <table width="100%"><tr><td>
        <!--<img src="../img/read_message_blue.png" height="21" width="177" style="margin-top:-8px;margin-left:23px;"/>-->
        <div style="margin-left:30px;margin-top:-8px;">
        <span style="font-family:Arial, Helvetica, sans-serif;color:#FFF;font-size:16px;font-weight:bold;">
      Post New Activities
        </span>
        </div>
        </td>
        <!--<td align="right"><input type="text" name="search_field" class="search" value="Search banner list" onfocus="if (this.value == 'Search banner list') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Search banner list';}" style="color:#999;margin-right:10px;margin-top:-4px;"/>
     <input type="submit" name="search" value="SEARCH" class="submit" style="margin-right:17px;margin-top:-4px;" /></td>-->
     </tr></table>
      </tr>
      <tr>
        <td colspan="2" valign="top" style="background:url(../img/3.jpg); padding-bottom:10px;"><div style="margin-top:-8px; position: relative;">
          <table width="690" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td bgcolor="#FFFFFF" style="border-left:1px solid #a0a8ac; border-bottom:1px solid #a0a8ac; border-right:1px solid #a0a8ac;">
            
             <table style="font-size:14px;font-family: Arial, Helvetica, sans-serif;color:#333;" cellpadding="0" cellspacing="0" border="0">
             
             <?php 
			 $sql="SELECT * FROM activities WHERE id='".$idy."'";
			 $res=mysql_query($sql);
			 while($row=mysql_fetch_array($res)) {
			 ?>
             <tr><td style="width:120px;text-align:right;padding-top:20px;font-weight:bold;">
             Subject:
             </td>
             <td style="padding-left:20px;padding-top:20px;">
             <input type="text" name="subject" style="width:403px;" value="<?php echo $row['act_subject'];?>"/>
             </td>
             </tr>
             
             
             <tr><td style="width:120px;text-align:right;padding-top:20px;font-weight:bold;">
             Message:
             </td>
             <td style="padding-left:18px;padding-top:20px;">
             <textarea name="message" cols="48" rows="7" style="font-family:Arial, Helvetica, sans-serif;"><?php echo $row['act_content'];?></textarea>
             <input type="hidden" name="act_id" value="<?php echo $row['id'];?>" />
             </td>
             </tr>
             <?php } ?>
             
             <tr><td style="width:120px;text-align:right;">&nbsp;
            
             </td>
             <td style="padding-left:20px;padding-top:20px;">
             <input type="submit" name="save" class="submit2" value="Save"/>
             &nbsp;&nbsp;&nbsp;
             <input type="button" name="cancel" class="submit2" value="Cancel" onclick="window.location='activites.php'"/>
             </td>
             </tr>
             <tr><td><div style="clear:both;height:20px;"></div></td></tr>
             </table>
              
           
                </td>
            </tr>
            
             
              <input type="hidden" name="hdnCount" value="<?php echo $i;?>">
              </form>
               <!--</td>
            </tr>-->
            </table><!--</div>--></td></tr>
      <tr>
        <td colspan="2"><img src="../img/4.jpg" width="739" height="6" alt="" /></td>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>

