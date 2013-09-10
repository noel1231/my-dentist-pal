<?php 



?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script language="JavaScript"> 
function ClickCheckAll(vol)  
{  
  
var i=1;  
for(i=1;i<=document.frmMain.hdnCount.value;i++)  
{  
if(vol.checked == true)  
{  
eval("document.frmMain.check"+i+".checked=true");  
}  
else  
{  
eval("document.frmMain.check"+i+".checked=false");  
}  
}  
}  

function onDelete()  
{  
if(confirm('Do you want to delete ?')==true)  
{  
return true;  
}  
else  
{  
return false;  
}  
}  
</script> 

<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
  
  <script>
  $(document).ready(function() {
    $("#datepicker").datepicker();
  });
  </script>

</head>

<body>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><table width="739" border="0" align="center" cellpadding="0" cellspacing="0">
      <!--<tr>
        <td height="39" colspan="2" valign="top"><div>
          <div style="width:140px; margin-left:20px; margin-bottom:-2px; float:left;">
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
          </div>
          <!--<div style="width:130px; margin-left:10px; margin-bottom:-2px; float:left; z-index:999999999">
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
        <td colspan="2"><img src="../img/1.jpg" width="739" height="12" alt="" /></td>
      </tr>
      
      <tr>
      
        <td height="47" style="background:url(../img/2.jpg);">
        <table width="100%"><tr><td>
        <!--<img src="../img/read_message_blue.png" height="21" width="177" style="margin-top:-8px;margin-left:23px;"/>-->
        <div style="margin-left:30px;margin-top:-8px;">
        <span style="font-family:Arial, Helvetica, sans-serif;color:#FFF;font-size:16px;font-weight:bold;">
      Add New Promos & Offer
        </span>
        </div>
        </td>
        <!--<td align="right"><input type="text" name="search_field" class="search" value="Search contact list" onfocus="if (this.value == 'Search contact list') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Search contact list';}" style="color:#999;margin-right:10px;margin-top:-4px;"/>
     <input type="submit" name="search" value="SEARCH" class="submit" style="margin-right:17px;margin-top:-4px;" /></td>-->
     </tr></table>
      </tr>
      <tr>
        <td colspan="2" valign="top" style="background:url(../img/3.jpg); padding-bottom:10px;"><div style="margin-top:-8px; position: relative;">
          <table width="690" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td bgcolor="#FFFFFF" style="border-left:1px solid #a0a8ac; border-bottom:1px solid #a0a8ac; border-right:1px solid #a0a8ac;">
              
              <!--conentholder--><table cellpadding="0" cellspacing="0" border="0">
              <tr><td>
           <?php /* <!-- button place--><table cellpadding="0" cellspacing="0" border="0">
              <tr><td style="background-image:url('../img/top_button_bak_left.png');width:9px;height:48px;">
              </td>
              <td style="background-image:url('../img/top_button_bak_center.png');width:670px;height:48px;padding-left:10px;">
              <form method="post" action="">
             <input type="submit" name="post_deal" value="Post New Deal" class="submit2"/>
              </form>
              </td>
              </tr>
              <!--button place--></table>*/?>
              </td></tr>
              
              
			 <form name="frmMain" action="create_process.php" method="post" enctype="multipart/form-data">
              <tr><td>
              <!--firstcontent--><table cellpadding="0" cellspacing="0" border="0">
              <tr><td style="padding-left:34px;">
        
              </td></tr>

              
              <tr><td style="padding-left:20px;padding-top:25px;">
              
              <table cellpadding="0" cellspacing="0" border="0" style="font-family:Arial, Helvetica, sans-serif;color:#333;font-size:14px;">
              <tr><td style="text-align:right;font-weight:bold;"> 
              Subject:
          
              </td>
              <td style="padding-left:20px;">
              <input type="text" name="subject" style="width:260px;" />
              </td>
              </tr>
              
              <tr><td><div style="clear:both;height:10px;"></div></td></tr>
              
              <tr><td style="text-align:right;font-weight:bold;"> 
              Expiration Date:
          
              </td>
              <td style="padding-left:20px;">
              <input type="text" name="date" id="datepicker" style="width:150px;" />
              </td>
              </tr>
              
               <tr><td><div style="clear:both;height:10px;"></div></td></tr>
              
              <tr><td style="text-align:right;font-weight:bold;"> 
              How many patient can take this offer?:
          
              </td>
              <td style="padding-left:20px;">
              <input type="text" name="number" style="width:55px;" />
              </td>
              </tr>
              
               <tr><td><div style="clear:both;height:10px;"></div></td></tr>
              
              <tr><td style="text-align:right;font-weight:bold;"> 
             Message:
          
              </td>
              <td style="padding-left:20px;">
              <textarea name="message" cols="40" rows="6" style="font-family:Arial, Helvetica, sans-serif;"></textarea>
              </td>
              </tr>
              
               <tr><td><div style="clear:both;height:10px;"></div></td></tr>
              
              <tr><td style="text-align:right;font-weight:bold;"> 
              Link:
          
              </td>
              <td style="padding-left:20px;">
              <input type="text" name="link" style="width:260px;" />
              </td>
              </tr>
              
              
               <tr><td><div style="clear:both;height:10px;"></div></td></tr>
              
              <tr><td style="text-align:right;font-weight:bold;"> 
              Promo Picture:
          
              </td>
              <td style="padding-left:20px;">
              <input type="file" name="userfile1" style="width:200px;"/>
              </td>
              </tr>
              
              
               <tr><td><div style="clear:both;height:10px;"></div></td></tr>
              
              <tr><td style="text-align:right;font-weight:bold;">&nbsp; 
             
          
              </td>
              <td style="padding-left:20px;">
              <input type="submit" name="send" class="submit2" value="Save"/>
              &nbsp;&nbsp;&nbsp;&nbsp;
               <input type="button" name="cancel" class="submit2" value="Cancel" onclick="window.location='promos_and_offer.php'"/>
              </td>
              </tr>
              
               <tr><td><div style="clear:both;height:20px;"></div></td></tr>
              </table>
              
              </td></tr>
              
              
              <!--firstcontent--></table>
              </td></tr>
              
                            
              <!--contentholder--></table>
                </td>
            </tr>
            
             <!--bottom button--><tr><td>
             
               
             <!--bottom button--></td></tr>
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

<map name="Map" id="Map">
  <!--<area shape="rect" coords="8,1,131,42" href="messaging.php" />
  <area shape="rect" coords="138,2,263,41" href="received_message.php" />-->
  <area shape="rect" coords="640,2,689,31" href="patient_dental_edit.php" />
  <area shape="rect" coords="2,2,97,33" href="patient_info.php" />
  <area shape="rect" coords="106,2,217,32" href="patient_medical.php" />
  <area shape="rect" coords="223,2,329,32" href="#" />
  <area shape="rect" coords="337,2,427,31" href="patient_tooth.php" />
  <area shape="rect" coords="434,3,504,31" href="patient_visit_log.php" />
  <area shape="rect" coords="511,3,572,31" href="patient_others.php" />
  <area shape="rect" coords="579,3,633,31" href="patient_notes.php" />
</map>
