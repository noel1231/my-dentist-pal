<?php 
if(isset($_GET['id'])){
$idy = $_GET['id']; 

$sql="DELETE FROM banner WHERE id=".$idy."";
$res=mysql_query($sql);
}

if(isset($_POST['delete_all']))
{
		if(count($_POST["check"])==0) {
						echo "<script>alert('Please select one.');</script>";
					} else {
		for($i=0;$i<count($_POST["check"]);$i++){
		if($_POST["check"][$i] != "") {
			$qwerty="DELETE FROM banner WHERE id='".$_POST['check'][$i]."'";
			$res=mysql_query($qwerty);
	}}
	echo "<script>alert('Deleted Successfully.');</script>";
	}//end else
	}

if(isset($_GET['add'])){
$id = $_GET['add']; 
$var="yes";
$sql="UPDATE banner SET activate='".$var."' WHERE id='".$id."'";
$res=mysql_query($sql);

echo "<script>alert('You have successfully added a new banner');</script>";

}

if(isset($_POST['addthis']))
{
$group="start";	
$countthis=count($_POST["check"]);
$var="yes";
if(count($_POST["check"])==0) {
						echo "<script>alert('Please select atleast one.');</script>";
					}
else {
for($i=0;$i<count($_POST["check"]);$i++){
		if($_POST["check"][$i] != "") {
			$qwerty="UPDATE banner SET activate='".$var."' WHERE id='".$_POST['check'][$i]."'";
			$res=mysql_query($qwerty);
								
					//var_dump($sendmail);die();
	}} 
	//end else
	//var_dump($group);die();
	echo "<script>alert('You have successfully added a new banner');</script>";
	}
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
var mave=0;	
for(i=1;i<=document.frmMain.hdnCount.value;i++) {
if(eval("document.frmMain.check"+i+".checked==true")) {
mave++;	
} }
	if(mave>0) {
	if(confirm('Do you want to delete?')==true)  
	{  
	return true;  
	}  
	else  
	{  
	return false;  
	}  }
	else if(mave==0){
	alert('You must select at least one email to perform this action');
	return false;
	} 
}   

function onCheck()  
{  
if(confirm('Do you want to activate this banner ?')==true)  
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
                <td width="661" align="center" style="background: url(../img/t3.jpg);"><a href="banner_adds.php" style="font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#3e4447;text-decoration:none;">Banner List</a></td>
                <td width="6"><img src="../img/t2.jpg" width="6" height="41" alt="" /></td>
              </tr>
            </table>
          </div>
          <div style="width:130px; margin-left:10px; margin-bottom:-2px; float:left; z-index:999999999">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="6"><img src="../img/u1.jpg" width="6" height="41" alt="" /></td>
                <td width="661" align="center" style="background: url(../img/u3.jpg);"><a href="banner_pending.php" style="font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#3e4447;text-decoration:none;">Pending</a></td>
                <td width="6"><img src="../img/u2.jpg" width="6" height="41" alt="" /></td>
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
          </div>-->
          <div style="width:130px; margin-left:10px; margin-bottom:-2px; float:left; z-index:999999999">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="6"><img src="../img/t1.jpg" width="6" height="41" alt="" /></td>
                <td width="661" align="center" style="background: url(../img/t3.jpg);"><a href="banner_add.php" style="font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#3e4447;text-decoration:none;">Add New</a></td>
                <td width="6"><img src="../img/t2.jpg" width="6" height="41" alt="" /></td>
              </tr>
            </table>
          </div>
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
      Banner Ads
        </span>
        </div>
        </td>
        <td align="right"><input type="text" name="search_field" class="search" value="Search banner list" onfocus="if (this.value == 'Search banner list') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Search banner list';}" style="color:#999;margin-right:10px;margin-top:-4px;"/>
     <input type="submit" name="search" value="SEARCH" class="submit" style="margin-right:17px;margin-top:-4px;" /></td></tr></table>
      </tr>
      <tr>
        <td colspan="2" valign="top" style="background:url(../img/3.jpg); padding-bottom:10px;"><div style="margin-top:-8px; position: relative;">
          <table width="690" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td bgcolor="#FFFFFF" style="border-left:1px solid #a0a8ac; border-bottom:1px solid #a0a8ac; border-right:1px solid #a0a8ac;">
              
              <!--conentholder--><table cellpadding="0" cellspacing="0" border="0">
               <tr><td>
             <!--button place--><table cellpadding="0" cellspacing="0" border="0">
              <tr><td style="background-image:url('../img/top_button_bak_left.png');width:9px;height:48px;">
              </td>
              <td style="background-image:url('../img/top_button_bak_center.png');width:670px;height:48px;padding-left:10px;">
            
            
            <table cellpadding="0" cellspacing="0" border="0">
            <tr><td>
            <input type="submit" name="delete_all" class="submit2" value="Delete all marked" onclick="return onDelete();"/>
            </td>
            <td style="padding-left:10px;">
            <input type="submit" name="addthis" class="submit2" value="Add"/>
            </td>
            </tr>
            </table>
            
            
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
              
              
              <!--name holder-->
              <div style="float:left;">
              <div style="float:left;background-image:url(../img/option_name_repeat.png);width:150px;height:26px;font-family:Arial, Helvetica, sans-serif;font-size:13px;font-weight:bold;color:#373838;padding-top:10px;padding-left:17px;"><a href="banner_pending.php?arr=banner_name" style="text-decoration:underline;color:#333;" title="Sort by Name">Banner Name</a></div>
              <div style="float:left;background-image:url(../img/option_right_check.png);width:5px;height:36px;"></div>
              </div>
              <!--name holder-->
              
              <!--subject holder-->
              <div style="float:left;">
              <div style="float:left;background-image:url(../img/option_name_repeat.png);width:145px;height:26px;font-family:Arial, Helvetica, sans-serif;font-size:13px;font-weight:bold;color:#373838;padding-top:10px;padding-left:17px;"><a href="banner_pending.php?arr=banner_type" style="text-decoration:underline;color:#333;" title="Sort by Type">Banner Type</a></div>
              <div style="float:left;background-image:url(../img/option_right_check.png);width:5px;height:36px;"></div>
              </div>
              <!--subject holder-->
              
              <!--last visit-->
              <div style="float:left;">
              <div style="float:left;background-image:url(../img/option_name_repeat.png);width:160px;height:26px;font-family:Arial, Helvetica, sans-serif;font-size:13px;font-weight:bold;color:#373838;padding-top:10px;padding-left:17px;"><a href="banner_pending.php?arr=date_to_end" style="text-decoration:underline;color:#333;" title="Sort by Date">Date Expires</a></div>
              <div style="float:left;background-image:url(../img/option_right_check.png);width:5px;height:36px;"></div>
              </div>
              <!--last visit-->
              
               <!--action holder-->
              <div style="float:left;">
              <div style="float:left;background-image:url(../img/option_name_repeat.png);width:87px;height:26px;font-family:Arial, Helvetica, sans-serif;font-size:13px;font-weight:bold;color:#373838;padding-top:10px;padding-left:17px;">Action</div>
              <div style="float:left;background-image:url(../img/option_right_check.png);width:5px;height:36px;"></div>
              </div>
              <!--action holder-->
              
              </td></tr>
              <!--firstcontent--></table>
              </td></tr>
              
              <!--content with scroll--><tr><td>
              
              <table cellpadding="0" cellspacing="0" border="0">
              <tr><td>
              <div>
              <table cellpadding="0" cellspacing="0" border="0" style="font-family:Arial, Helvetica, sans-serif;font-size:12px;">
              <?php //$x=30; for($i=1;$i<=$x;$i++) { 
			  $var="no";
			  
			  if(isset($_GET['arr']))
               { 
			   
			   $sort_by=$_GET["arr"];
			  
			  if($sort_by=="date_to_end")
			   { $sort="date_to_end"; 
			   $arrange="DESC";
			   }
			   else if($sort_by=="banner_name")
			   { $sort="banner_name";
			   $arrange="ASC";
			   }
			    else if($sort_by=="banner_type")
			   { $sort="banner_type";
			   $arrange="ASC";
			   }
			   
			 
			   
			   else
			   { $sort="";
			   $arrange="";
			   }
		
			   $query="SELECT * FROM banner WHERE activate='".$var."' ORDER BY $sort $arrange";
			   $res=mysql_query($query);
			   
			   //var_dump($query);
			   
			   }
			   //sort
			   
			   
			   //search
			   else if(isset($_POST['search']))
			   { 
			   if(preg_match("/^[  a-zA-Z]+/", $_POST['search_field']))
			   { $name=$_POST['search_field']; }
			   $query="SELECT * FROM banner WHERE banner_name LIKE '%".$name."%' AND activate='".$var."'";
			   $res=mysql_query($query);
			   }
			   //search
			   
			   //default
			else {
			  
			 
			  $sql="SELECT * FROM banner WHERE activate='".$var."'";
			  $res=mysql_query($sql);}
			  
			   $i=0;
			  if($res) {
			  while($row=mysql_fetch_array($res))
			  { 
			  $i++;
			  
			  $f=$i%2;
	if($f==0)
	{ $back="#FFF";} 
	else
	{ $back="#e0eefa";}
			  
			  $ban_type=$row["banner_type"];
			  if($ban_type=="bottom")
			  {
				$ban_type="rectangle (bottom)";  
			  }
			  else
			  {
				$ban_type="square (side)";  
			  }
			  ?>
              <tr style="background-color:<?php echo $back;?>;font-size:14px;">
              <!--check--><td width="58" style="padding-bottom:10px;padding-top:10px;">
              <input type="checkbox" name="check[]" id="check<?php echo $i;?>" value="<?php echo $row["id"];?>" style="margin-left:22px;"/>
              <!--check--></td>
              <!--name--><td style="width:173px;padding-bottom:10px;padding-top:10px;">
              <div style="margin-left:18px;"><?php echo $row["banner_name"];?></div>
              <!--name--></td>
                <!--subject--><td style="width:165px;padding-bottom:10px;padding-top:10px;">
              <div style="margin-left:18px;"><?php echo $ban_type;?></div>
              <!--subject--></td>
              <!--last visit--><td style="width:185px;padding-bottom:10px;padding-top:10px;">
              <div style="margin-left:18px;"><?php echo $row["date_to_end"];?></div>
              <!--last visit--></td>
              <!--action--><td width="107" style="padding-bottom:10px;padding-top:10px;">
             <table cellpadding="0" cellspacing="0" border="0">
             <tr>
             <!--read--><td width="25" style="padding-left:20px;"><a href="banner_pending.php?add=<?php echo $row["id"];?>" onclick="return onCheck();" title="Add"><img src="../img/Plus (1).png" height="20" width="20"/></a></td>
             <!--print--><!--<td width="25"><img src="img/icon_print.png" height="16" width="16"/></td>-->
             <!--delete--><td><a href="banner_pending.php?id=<?php echo $row["id"];?>" onclick="return onDelete();" title="Delete"><img src="../img/dash_remove_icon.png" height="20" width="20"/></a></td>
             </tr>
             </table>
              <!--action--></td>
              </tr>
           
            
              </tr>
              <?php } } ?>
              </table>
              </div>
              </td></tr>
              </table>
              
              <!--content with scroll--></td></tr>
             
              
              <!--contentholder--></table>
                </td>
            </tr>
            
             <!--bottom button--><tr><td style="padding-top:15px;padding-left:15px;">
                <table cellpadding="0" cellspacing="0" border="0">
            <tr><td>
            <input type="submit" name="delete_all" class="submit2" value="Delete all marked" onclick="return onDelete();"/>
            </td>
            <td style="padding-left:10px;">
            <input type="submit" name="addthis" class="submit2" value="Add"/>
            </td>
            </tr>
            </table>
              <!--<div style="clear:both;height:20px;"></div>-->
              <!--<div style="margin:0 auto;width:690px;margin-top:15px;">
                 <div style="float:left;"><input type="submit" name="delete_all" class="submit2" value="Delete all marked" onclick="return onDelete();"/></div>
            
              <div style="float:right;"><input type="submit" name="apply" class="submit2" value="Apply" /></div>
              <div style="float:right;margin-right:15px;"><select name="sort" />
              <option value="date">sort by Date</option>
<option value="name">sort by Name</option>
<option value="type">sort by Type</option>
              </select></div>
              </div>-->
             <!--bottom button--></td></tr>
              <input type="hidden" name="hdnCount" value="<?php echo $i;?>"></form>
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
