<?php



 
$yes="yes";
$sql="UPDATE admin_received_message SET message_read='".$yes."' WHERE id='".$idy."'";
$res=mysql_query($sql);
$sql="SELECT * FROM admin_received_message WHERE id=".$idy."";
$res=mysql_query($sql);





?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

</head>

<body>
<?php
$no="no";
$sqlss="SELECT COUNT(*) AS num FROM admin_received_message WHERE message_read='".$no."'";
$resss=mysql_query($sqlss);
$querys=mysql_fetch_assoc($resss);
$rowss=$querys['num'];?>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr style="font-family:Arial, Helvetica, sans-serif;">
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
           <div style="width:120px; margin-left:20px; margin-bottom:-2px; float:left;">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="6"><img src="../img/u1.jpg" width="6" height="41" alt="" /></td>
                <td width="661" align="center" style="background: url(../img/u3.jpg);">
                <table cellpadding="0" cellspacing="0" border="0"><tr><td>
                <a href="message_received.php"><img src="../img/inbox.png" width="19" height="15" alt="" /></a>
                </td>
                <td style="padding-left:10px;"><a href="message_received.php" class="tablink">Inbox(<?php echo $rowss;?>)</a></td>
                </tr></table>
                </td>
                <td width="6"><img src="../img/u2.jpg" width="6" height="41" alt="" /></td>
              </tr>
            </table>
          </div>
          <div style="width:120px; margin-left:10px; margin-bottom:-2px; float:left;">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="6"><img src="../img/t1.jpg" width="6" height="41" alt="" /></td>
                <td width="661" align="center" style="background: url(../img/t3.jpg);">
                <table cellpadding="0" cellspacing="0" border="0">
                <tr><td>
                <a href="message_sent.php"><img src="../img/sent.png" width="37" height="17" alt="" /></a></td>
                <td style="padding-left:10px;"><a href="message_sent.php" class="tablink">Sent</a></td></tr></table>
                </td>
                <td width="6"><img src="../img/t2.jpg" width="6" height="41" alt="" /></td>
              </tr>
            </table>
          </div>
          <div style="width:130px; margin-left:10px; margin-bottom:-2px; float:left">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="6"><img src="../img/t1.jpg" width="6" height="41" alt="" /></td>
                <td width="661" align="center" style="background: url(../img/t3.jpg);">
                <table cellpadding="0" cellspacing="0" border="0">
                <tr><td>
                <a href="message_contact.php"><img src="../img/contacts.png" width="17" height="13" alt="" /></a>
                </td>
                <td style="padding-left:10px;"><a href="message_contact.php" class="tablink">Contact List</a></td></tr></table>
                </td>
                <td width="6"><img src="../img/t2.jpg" width="6" height="41" alt="" /></td>
              </tr>
            </table>
          </div>
          <div style="width:160px; margin-left:10px; margin-bottom:-2px; float:left; z-index:999999999">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="6"><img src="../img/t1.jpg" width="6" height="41" alt="" /></td>
                <td width="661" align="center" style="background: url(../img/t3.jpg);">
                <table cellpadding="0" cellspacing="0" border="0">
                <tr><td>
                <a href="message_compose.php"><img src="../img/compose.png" width="19" height="18" alt="" /></a>
                </td>
                <td style="padding-left:10px;"><a href="message_compose.php" class="tablink">Compose Message</a></td></tr></table>
                </td>
                <td width="6"><img src="../img/t2.jpg" width="6" height="41" alt="" /></td>
              </tr>
            </table>
          </div>
            <?php
			
			  while($row=mysql_fetch_array($res))
			  {
				$den_id=$row['dentist_id'];
				//$pt_id=$row['patient_id'];
				
				
				  $sqls="SELECT * FROM dentist_list WHERE id='".$den_id."'";
			  $ress=mysql_query($sqls);
			  while($rows=mysql_fetch_array($ress)){
				$f_name=$rows['first_name'];  
				$l_name=$rows['sur_name'];
				
			  }
			  $name=$f_name." ".$l_name;
			 /* $sqls="SELECT * FROM patient_list WHERE id='".$pt_id."'";
			  $ress=mysql_query($sqls);
			  while($rows=mysql_fetch_array($ress)){
				$pt_name=$rows['patient_name'];  
			  }*/
			  
			  //var_dump($sqls);die();
			  
					  ?>
          <!--<div style="width:130px; margin-left:10px; margin-bottom:-2px; float:left; z-index:999999999">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="6"><img src="img/u1.jpg" width="6" height="41" alt="" /></td>
                <td width="661" align="center" style="background: url(img/u3.jpg); font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#3e4447;"><?php
				
				/*$length=9;
$name=$pt_name;
//$name=strlen($name);
//echo $name;
$display = substr($name, 0, $length) ;
echo "<span style=\"margin-left:4px;color:#333;font-family:Arial, Helvetica, sans-serif;font-size:13px;\">$display</span>";
echo "..." ;*/
				
				
				?> &nbsp;&nbsp; <a href="javascript:history.go(-1)"><img src="img/icon_address_delete.png" height="15" width="15"/></a></td>
                <td width="6"><img src="img/u2.jpg" width="6" height="41" alt="" /></td>
              </tr>
            </table>
          </div>-->
        </div></td>
      </tr>
      <tr>
        <td colspan="2"><img src="../img/1.jpg" width="739" height="12" alt="" /></td>
      </tr>
      <tr>
        <td height="47" style="background:url(../img/2.jpg);">
        <table width="100%"><tr><td>
        <img src="../img/read_message2_blue.png" height="21" width="146" style="margin-top:-8px;margin-left:23px;"/></td>
        <!--<td align="right"><input type="text" name="search_field" class="search" value="Search contact list" style="margin-right:10px;margin-top:-4px;"/>
     <input type="submit" name="search" value="SEARCH" class="submit" style="margin-right:17px;margin-top:-4px;" /></td>--></tr></table>
      </tr>
      <tr>
        <td colspan="2" valign="top" style="background:url(../img/3.jpg); padding-bottom:10px;"><div style="margin-top:-8px; position: relative;">
          <table width="690" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td bgcolor="#FFFFFF" style="border-left:1px solid #a0a8ac; border-bottom:1px solid #a0a8ac; border-right:1px solid #a0a8ac;">
              
              <!--conentholder--><table cellpadding="0" cellspacing="0" border="0" width="100%">
              <tr><td width="100%">
              <!--button place--><table cellpadding="0" cellspacing="0" border="0" width="100%">
              <tr>
              <td style="background-image:url('../img/top_read_center.png');width:100%;height:96px;padding-left:10px;">
              <!--top content--><table cellpadding="0" cellspacing="0" border="0" style="font-family:Arial, Helvetica, sans-serif;padding-left:20px;">
            
              
              <tr><td style="font-weight:bold;color:#191919;font-size:16px;width:530px;">
              <!--I just want to inquire your availability--><?php echo $row["message_subject"];?>
              </td></tr>
              
              <tr><td style="font-weight:bold;color:#373838;font-size:12px;padding-top:10px;width:530px;">
              From: &nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#898989;"><!--Joselito Galvez--><?php /* 
			  //var_dump($pt_name);die();
			  if(!$pt_name) {
			  echo "admin"; }
			  else 
			  { echo $pt_name; } */
			  echo $name; ?></span>
              </td>
              <td style="font-weight:bold;color:#373838;font-size:12px;padding-top:10px;">
              Date: &nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#898989;"><?php echo $row["message_date"];?></span>
              </td>
              </tr>
              
                <!--<tr><td style="font-weight:bold;color:#373838;font-size:12px;padding-top:10px;width:530px;">
              &nbsp;&nbsp;&nbsp;&nbsp; To: &nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#898989;">Dr. <?php //echo $name;?></span>
              </td></tr>-->
              
              <!--top content--></table>
              </td>
              </tr>
              
              <!--middle--><tr>
              <td style="background-color:#FFF;padding-top:20px;padding-left:30px;padding-bottom:20px;" width="100%">
              <table cellpadding="0" cellspacing="0" border="0" width="100%">
              <tr><td width="100%">
              <?php echo stripslashes($row["message_content"]);?>
              </td></tr>
              </table>
              </td>
              <!--middle--></tr>
              
              <!--separator-->
              <tr><td width="100%">
              <table cellpadding="0" cellspacing="0" border="0" width="100%">
              <tr><td height="32" style="background:url(../img/bg_sent_small.jpg); padding-left:20px;"><img src="../img/ico_reply.png" width="73" height="20" alt="" /></td></tr>
              </table> 
              </td></tr>
              <!--separator-->
              <form method="post" action="reply.php" enctype="multipart/form-data">
              <!--content--><tr><td width="100%" style="padding-top:20px;padding-left:10px;padding-bottom:20px;">
              <table cellpadding="0" cellspacing="0" border="0" width="100%">
              <tr><td width="100%">
              <textarea name="reply" rows="8" cols="80"></textarea>
              </td></tr>
              </table>
              </td></tr>
              <!--content-->
              
              <!--button place--></table>
              </td></tr>
             
              
                         
              <!--contentholder--></table>
                </td>
            </tr>
            
            <tr><td style="padding-top:20px;">
            <input type="submit" name="quick_reply" value="Quick Reply" class="submit2"/>&nbsp;&nbsp;&nbsp;&nbsp;<input type="button" name="cancel" value="Cancel" class="submit2" onclick="javascript:history.go(-1)"/>
            </td></tr>
          
				
              <!--<input type="hidden" name="pt_id" value="<?php //echo $pt_id=$row['patient_id'];?>" />-->
              <input type="hidden" name="den_id" value="<?php echo $den_id=$row['dentist_id'];?>" />
              <input type="hidden" name="subject" value="<?php echo $row["message_subject"];?>" />
               <!--</td>
            </tr>-->
            </table><!--</div>--></td></tr>
            </form>
            
             <?php } ?>
            
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
