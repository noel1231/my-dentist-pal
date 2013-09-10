<?php 

if(isset($_GET['id'])) {
$id=$_GET['id'];
$sql="DELETE FROM newsletter WHERE id='".$id."'";
$res=mysql_query($sql);
}

if(isset($_POST['delete_all']))
{
		for($i=0;$i<count($_POST["check"]);$i++){
		if($_POST["check"][$i] != "") {
			$qwerty="DELETE FROM newsletter WHERE id='".$_POST['check'][$i]."'";
			$res=mysql_query($qwerty);
	}}
	}

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
if(confirm('Do you want to delete?')==true)  
{  
return true;  
}  
else  
{  
return false;  
}  
}  

function onCheck()  
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
      <form name="frmMain" action="" method="post">
      <tr>
      
        <td height="47" style="background:url(../img/2.jpg);">
        <table width="100%"><tr><td>
        <!--<img src="../img/read_message_blue.png" height="21" width="177" style="margin-top:-8px;margin-left:23px;"/>-->
        <div style="margin-left:30px;margin-top:-8px;">
        <span style="font-family:Arial, Helvetica, sans-serif;color:#FFF;font-size:16px;font-weight:bold;">
       Newsletter
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
            <!-- button place--><table cellpadding="0" cellspacing="0" border="0">
              <tr><td style="background-image:url('../img/top_button_bak_left.png');width:9px;height:48px;">
              </td>
              <td style="background-image:url('../img/top_button_bak_center.png');width:670px;height:48px;padding-left:10px;">
              <table cellpadding="0" cellspacing="0" border="0">
              <tr><td>
             <input type="button" onclick="window.location='newsletter.php'" name="compose" value="Compose Newsletter" class="submit2"/>
              </td>
               <td style="padding-left:10px;">
               <input type="submit" name="delete_all" class="submit2" value="Delete" onclick="return onDelete();"/>
              </td>
              </tr></table>
              
              </td>
             
              </tr>
              <!--button place--></table>
              </td></tr>
			 
              <tr><td>
              <!--firstcontent--><table cellpadding="0" cellspacing="0" border="0">
              <tr><td>
        <!--check all holder--><div style="float:left;">
          
          
              <div style="float:left;background-image:url(../img/option_center_check.png);width:53px;height:36px;">
              
           
              
              <input name="CheckAll" type="checkbox" id="CheckAll" value="Y"  onClick="ClickCheckAll(this);" style="margin-top:12px;margin-left:22px;"/>
              </div>
              <div style="float:left;background-image:url(../img/option_right_check.png);width:5px;height:36px;"></div>
              <!--check all holder--></div>
              
        <!--subject holder-->
              <div style="float:left;">
              <div style="float:left;background-image:url(../img/option_name_repeat.png);width:257px;height:26px;font-family:Arial, Helvetica, sans-serif;font-size:13px;font-weight:bold;color:#373838;padding-top:10px;padding-left:17px;"><a href="newsletter_view.php?arr=newsletter_subject" style="text-decoration:underline;color:#333;" title="Sort by Subject">Newsletter Subject</a></div>
              <div style="float:left;background-image:url(../img/option_right_check.png);width:5px;height:36px;"></div>
              </div>
              <!--subject holder-->
              
              <!--last visit-->
              <div style="float:left;">
              <div style="float:left;background-image:url(../img/option_name_repeat.png);width:200px;height:26px;font-family:Arial, Helvetica, sans-serif;font-size:13px;font-weight:bold;color:#373838;padding-top:10px;padding-left:17px;"><a href="newsletter_view.php?arr=newsletter_date" style="text-decoration:underline;color:#333;" title="Sort by Date">Published Date</a></div>
              <div style="float:left;background-image:url(../img/option_right_check.png);width:5px;height:36px;"></div>
              </div>
              <!--last visit-->
              
               <!--action holder-->
              <div style="float:left;">
              <div style="float:left;background-image:url(../img/option_name_repeat.png);width:107px;height:26px;font-family:Arial, Helvetica, sans-serif;font-size:13px;font-weight:bold;color:#373838;padding-top:10px;padding-left:17px;">Action</div>
              <div style="float:left;background-image:url(../img/option_right_check.png);width:5px;height:36px;"></div>
              </div>
              <!--action holder-->
              
              </td></tr>
              
              <tr><td>
              
              <table cellpadding="0" cellspacing="0" border="0" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;color:#333;">
              <?php 
			  $i=0;
			  
			   if(isset($_GET['arr']))
               { 
			   
			   $sort_by=$_GET["arr"];
			  
			   if($sort_by=="newsletter_date")
			   { $sort="newsletter_date"; 
			   $arrange="DESC";
			   }
			   else if($sort_by=="newsletter_subject")
			   { $sort="newsletter_subject";
			   $arrange="ASC";
			   }
			   else
			   { $sort="";
			   $arrange="";
			   }
			   
			    $sql="SELECT * FROM newsletter ORDER by $sort $arrange";
			  $res=mysql_query($sql); }
		
			  else {
			  
			  $sql="SELECT * FROM newsletter";
			  $res=mysql_query($sql); }
			  
			  
			  while($row=mysql_fetch_array($res)) {
				$i++;
				
			
			   $f=$i%2;
	if($f==0)
	{ $back="#FFF";} 
	else
	{ $back="#e0eefa";}
			  
			  ?>
              <tr style="background-color:<?php echo $back;?>;">
               <!--check--><td width="58" style="padding-top:10px;padding-bottom:10px;text-align:center;">
              <input type="checkbox" name="check[]" id="check<?php echo $i;?>" value="<?php echo $row["id"];?>"/>
              <!--check--></td>
              
              <td style="width:271px;padding-top:10px;padding-left:10px;padding-bottom:10px;text-align:left;">
              
              <?php echo $row['newsletter_subject'];?>
              
              </td>
              <td style="width:222px;padding-top:10px;padding-bottom:10px;text-align:center;">
              <?php echo $row['newsletter_date'];?>
              </td>
              <td style="width:127px;padding-top:10px;padding-bottom:10px;">
              <table cellpadding="0" cellspacing="0" border="0">
             <tr>
             <td width="25" style="padding-left:20px;"><a href="newsletter_open.php?id=<?php echo $row['id'];?>"><img src="../img/folder_64.png" width="18" height="18" /></a></td>
             <!--print--><!--<td width="25"><a href="message_compose.php?id=<?php //echo $row['id'];?>"><img src="../img/mail.png" width="16" height="16"/></a></td>-->
             <!--delete--><td><a href="newsletter_view.php?id=<?php echo $row['id'];?>" onclick="return onDelete();"><img src="../img/delete_dl.png" width="16" height="16"/></a></td>
             </tr>
             </table>
              </td>
              </tr>
              <?php } ?>
              </table>
              
              </td></tr>
              
              
              <!--firstcontent--></table>
              </td></tr>
              
                            
              <!--contentholder--></table>
                </td>
            </tr>
            
             <!--bottom button--><tr><td style="padding-left:15px;padding-top:15px;">
             <table cellpadding="0" cellspacing="0" border="0">
             <tr><td><input type="button" onclick="window.location='newsletter.php'" name="compose" value="Compose Newsletter" class="submit2"/></td>
             <td style="padding-left:10px;">
             <input type="submit" name="delete_all" class="submit2" value="Delete" onclick="return onDelete();"/>
             </td>
             </tr>
             </table>
              <!--<div style="clear:both;height:20px;"></div>-->
              <!--<div style="margin:0 auto;width:690px;margin-top:15px;">
              <div style="float:left;"> <input "button" onclick="window.location='newsletter.php'" name="compose" value="Compose Newsletter" class="submit2"/></div>
              <div style="float:right;"><input type="submit" name="apply" class="submit2" value="Apply"/></div>
              <div style="float:right;margin-right:15px;"><select name="sort" />
              <option value="date">sort by Date</option>
<option value="subject">sort by Subject</option>
              </select></div>
              </div>-->
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
