<?php
session_start();
$dentist_id=$_SESSION['id'];

include('config.php');
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
      <tr style="font-family:Arial, Helvetica, sans-serif;">
        <td height="39" valign="top"><div>
          <!--<div style="width:140px; margin-left:20px; margin-bottom:-2px; float:left;">
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
          </div>-->
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
          
          <div style="width:140px; margin-left:20px; margin-bottom:-2px; float:left;">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="6"><img src="img/t1.jpg" width="6" height="41" alt="" /></td>
                <td width="661" align="center" style="background: url(img/t3.jpg);"><!--<img src="img/t-contact.png" alt="" />--><a href="dentist_addressbook.php" class="tablink">Address Book List</a></td>
                <td width="6"><img src="img/t2.jpg" width="6" height="41" alt="" /></td>
              </tr>
            </table>
          </div>
          <div style="width:120px; margin-left:10px; margin-bottom:-2px; float:left;">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="6"><img src="img/t1.jpg" width="6" height="41" alt="" /></td>
                <td width="661" align="center" style="background: url(img/t3.jpg);"><!--<img src="img/t_add.png"  alt="" />--><a href="dentist_group_addressbook.php" class="tablink">Groups</a></td>
                <td width="6"><img src="img/t2.jpg" width="6" height="41" alt="" /></td>
              </tr>
            </table>
          </div>
          <div style="width:110px; margin-left:10px; margin-bottom:-2px; float:left">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="6"><img src="img/u1.jpg" width="6" height="41" alt="" /></td>
                <td width="661" align="center" style="background: url(img/u3.jpg);"><!--<img src="img/t-sent.png" width="72" height="17" alt="" />--><a href="addressbook_print.php" class="tablink">Print All</a></td>
                <td width="6"><img src="img/u2.jpg" width="6" height="41" alt="" /></td>
              </tr>
            </table>
          </div>
          
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
        
              <!--<img src="img/add_ab2.png" width="208" height="23" style="margin-top:-5px;margin-left:19px;" /> --> 
    
        </td>
        <td align="right">
        <!--<form actio="dentist_addressbook.php">-->
          <input type="button" onclick="divPrint();" name="print" value="PRINT" class="submit" />
          &nbsp;&nbsp;
         
         <input type="button" name="back" value="BACK" onclick="javascript:history.go(-1)" class="submit" style="margin-right:15px;margin-top:-4px;"/>
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
             
          
              
              <table cellpadding="0" cellspacing="0" border="0" id="print_it">
                 <?php
				 $i=0;
			 $sql="SELECT * FROM addressbook WHERE dentist_id='".$dentist_id."'";
			 $res=mysql_query($sql);
			 while($row=mysql_fetch_array($res)) {
				$i++; 
				$fname=$row['first_name'];
				$lname=$row['last_name'];
				$email=$row['email'];
				$address=$row['address'];
				$contact_number=$row['contact_number'];
				$company=$row['company'];
				$work=$row['work'];
				$work_address=$row['work_address'];
				$birthday=$row['birthday'];
			
			 ?>
             <?php if($i==1){ ?>
             <tr> <?php } ?>
             <td style="width:230px;">
             
             <div style="width:230px;height:250px;border:1px solid #333;">
             
             <table cellpadding="0" cellspacing="0" border="0" style="padding-left:10px;padding-top:10px;font-family:Arial, Helvetica, sans-serif;font-size:15px;color:#333;">
             <tr><td>
             <?php 
			 echo $fname." ".$lname;?>
             </td></tr>
             <tr><td style="padding-top:5px;">
             <?php echo $email;?>
             </td></tr>
             <tr><td style="padding-top:5px;">
             <?php echo $address;?>
             </td></tr>
             <tr><td style="padding-top:5px;">
             <?php echo $contact_number;?>
             </td></tr>
              <?php 
			 if($company) { ?>
              <tr><td style="padding-top:5px;">
            
			 <?php echo "Company:".$company; ?>
             </td></tr>
             <?php }  if($work) {?>
              <tr><td style="padding-top:5px;">
             <?php 
			
			 echo "Work:".$work; ?>
             </td></tr>
             <?php }  if($work_address) { ?>
                <tr><td style="padding-top:5px;">
             <?php 
			
			 echo "Work address:".$work_address; ?>
             </td></tr>
             <?php }  if($birthday!="0000-00-00") { ?>
              <tr><td style="padding-top:5px;">
             <?php 
			
			 echo "Birthday:".$birthday; ?>
             </td></tr>
             <?php } ?>
             </table>
             
             </div>
             
             </td>
             <!--<td>
             
             <div style="width:230px;height:250px;border:1px solid #333;"></div>
             
             </td>
             <td>
             
             <div style="width:230px;height:250px;border:1px solid #333;"></div>
             
             </td>-->
             <?php if($i==3){ ?>
             </tr> <?php } ?>
             
             <?php 
			 if($i==3){ $i=0;}
			 } ?>
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
<script language="javascript" type="text/javascript">
function divPrint()
{

var display_setting="toolbar=yes,location=no,directories=yes,menubar=yes,";
display_setting+="scrollbars=yes,width=750, height=600, left=100, top=25";

var content_innerhtml = document.getElementById("print_it").innerHTML;
var document_print=window.open("","",display_setting);
document_print.document.open();
document_print.document.write('<html><head><title>Print Patient Personal Information </title></head>');
document_print.document.write('<body style="font-family:verdana; font-size:12px;" onLoad="self.print();self.close();" >');
document_print.document.write(content_innerhtml);
document_print.document.write('</body></html>');
document_print.print();
document_print.document.close();
return false;
}

</script>  
