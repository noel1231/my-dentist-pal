<?php 

if(isset($_GET['id'])){
$idy = $_GET['id']; 

$sql="DELETE FROM activities WHERE id=".$idy."";
$res=mysql_query($sql);
}

if(isset($_POST['delete_all']))
{
		for($i=0;$i<count($_POST["check"]);$i++){
		if($_POST["check"][$i] != "") {
			$qwerty="DELETE FROM activities WHERE id='".$_POST['check'][$i]."'";
			$res=mysql_query($qwerty);
			//var_dump($res);die();
	}}
	}
	
	
	if(isset($_POST['save'])) {
	$x=1;
	$subject=mysql_real_escape_string($_POST['subject']);
	$date=mysql_real_escape_string($_POST['date']);
	$message=mysql_real_escape_string($_POST['message']);
	
	$dates=explode("/",$date);
$date_month=$dates[0];
$date_day=$dates[1];
$date_year=$dates[2];

$date_now=$date_year."-".$date_month."-".$date_day;

	$sql="UPDATE announcement SET announce_subject='".$subject."',announce_content='".$message."',announce_date='".$date_now."' WHERE id='".$x."'";
	$res=mysql_query($sql);
	//var_dump($res);die();
	
	echo "<script>alert('You have successfully updated the announcement.');</script>";
	
	}
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
  
  <script>
  $(document).ready(function() {
    $("#datepicker").datepicker();
  });
  </script>
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

<script type="text/javascript">

function popup(pUrl, pName, pWidth, pHeight, pScroll)
{
	LeftPosition = (screen.width) ? (screen.width-pWidth)   / 2 : 0;
	TopPosition  = (screen.height)? (screen.height-pHeight) / 2 : 0;
	settings = 'height='+pHeight+', width='+pWidth+', top='+TopPosition+', left='+LeftPosition+', scrollbars='+pScroll+', resizable';
	win = window.open(pUrl, pName, settings)
}
</script>
</head>

<body>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>
    <table width="739" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td height="39" valign="top"><div>
          <!--<div style="width:140px; margin-left:20px; margin-bottom:-2px; float:left;">
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
                <td width="6"><img src="../img/u1.jpg" width="6" height="41" alt="" /></td>
                <td width="661" align="center" style="background: url(../img/u3.jpg);"><a href="announcement.php" style="font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#3e4447;text-decoration:none;">Announcement</a></td>
                <td width="6"><img src="../img/u2.jpg" width="6" height="41" alt="" /></td>
              </tr>
            </table>
          </div>
        </div></td>
      </tr>
      <tr><td>
        <table cellpadding="0" cellspacing="0" border="0">
        <tr><td><img src="../img/1.jpg" width="739" height="12" alt="" />
       
        </td></tr>
        </table></td>
      </tr>
      <?php 
			  $sql="SELECT * FROM announcement";
			  $res=mysql_query($sql);
			  while($row=mysql_fetch_array($res)) { ?>
              <?php if($row['announce_subject']) { ?>
      <tr>
        <td height="47" style="background:url(../img/2.jpg);"><!--<img src="../img/menu_blue1.png" width="106" height="19" style="margin-top:-5px;margin-left:40px;"/>-->
         
         <div style="margin-left:30px;margin-top:-8px;">
        <span style="font-family:Arial, Helvetica, sans-serif;color:#FFF;font-size:16px;font-weight:bold;">
      Announcement
        </span>
        </div>
        </td>
      </tr>
      <tr>
        <td valign="top" style="background:url(../img/3.jpg);"><div style="margin-top:-8px; position: relative;">
          <table width="690" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td bgcolor="#FFFFFF" style="border-left:1px solid #a0a8ac; border-bottom:1px solid #a0a8ac; border-right:1px solid #a0a8ac;">
              
             <table cellpadding="0" cellspacing="0" border="0" width="600"><tr><td>
            
              <div style="margin:0 auto;width:600px;padding-top:20px;padding-bottom:20px;padding-left:20px;">
              <div style="float:left;"><span style="color:#333;font-family:Arial, Helvetica, sans-serif;font-size:17px;font-weight:bold;">
              <u><?php echo $row['announce_subject'];?></u>
              </span></div>
                    
              </div>
              
              <div style="margin:0 auto;width:600px;padding-left:20px;padding-bottom:20px;color:#333;font-family:Arial, Helvetica, sans-serif;font-size:15px;">
              <div style="float:right;">
              <span>
              <?php echo $row['announce_date'];?>
              </span>
              </div>
              <div style="clear:both;height:20px;"></div>
              <div style="float:left;">
              <span>
              <?php echo $row['announce_content'];?>
              </span>
              <div style="clear:both;height:20px;"></div>
              </div>
              </div>
              
              </td></tr></table>
              </td>
            </tr>
              <tr><td><div style="clear:both;height:10px;"></div></td></tr>
           
              <!--content-->
                </td>
            </tr>
          
          </table>
        </div></td>
      </tr><!--first content-->
      <?php } } ?>
       <?php /* <!--second content--> 
       <tr>
        <td height="47" style="background:url(../img/2.jpg);"><img src="i../mg/menu_blue2.png" width="130" height="22" style="margin-top:-5px;margin-left:40px;"/></td>
      </tr>
        <tr>
        <td valign="top" style="background:url(../img/3.jpg);"><div style="margin-top:-8px; position: relative;">
          <table width="690" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td bgcolor="#FFFFFF" style="border-left:1px solid #a0a8ac; border-bottom:1px solid #a0a8ac; border-right:1px solid #a0a8ac;">
              
                <!--content-->
              <div style="margin:0 auto;width:650px;margin-top:20px;">
              <!--<div style="clear:both;height:30px;"></div>-->
              <table cellpadding="0" cellspacing="0" border="0" style="font-family:Arial, Helvetica, sans-serif;font-size:13px;">
              <tr><td style="padding-left:80px;width:85%;">
              <!--profile--><table cellpadding="0" cellspacing="0" border="0"> 
              <tr><td style="text-align:right;color:#373838;font-weight:bold;">
              Services: 
              </td> <td style="color:#8c8c8c;padding-left:20px;font-weight:bold;">Cosmetic dentistry</td></tr>
              <tr><td style="text-align:right;color:#373838;font-weight:bold;padding-top:8px;">
             
              </td> <td style="color:#8c8c8c;padding-left:20px;font-weight:bold;padding-top:8px;">Restorative dentistry</td></tr>
              <tr><td style="text-align:right;color:#373838;font-weight:bold;padding-top:8px;">
              
              </td> <td style="color:#8c8c8c;padding-left:20px;font-weight:bold;padding-top:8px;">General & preventive dentistry</td></tr>
              <tr><td style="text-align:right;color:#373838;font-weight:bold;padding-top:8px;">
              
              </td> <td style="color:#8c8c8c;padding-left:20px;font-weight:bold;padding-top:8px;">Children dentistry</td></tr>
              <!--profile--></table>
              </td>
              <!--picture-->
              <!--<td>
              <img src="img/profile_pic.png" widtj="116" height="115"/>
              </td>-->
              <!--picture-->
              
              </tr>
              
              <!--spacer--><tr><td><div style="clear:both;height:20px;"></div></td></tr>
              </table>
              
              </div>
              <!--content-->
              
              </td>
            </tr>
          </table>
        </div></td>
      </tr><!--second-content-->
      */?>
      
        <!--third content--> 
       <tr>
        <td height="47" style="background:url(../img/2.jpg);"><!--<img src="../img/menu_blue3.png" width="119" height="17" style="margin-top:-5px;margin-left:40px;"/>-->
        <div style="margin-left:30px;margin-top:-8px;">
        <span style="font-family:Arial, Helvetica, sans-serif;color:#FFF;font-size:16px;font-weight:bold;">
     New Announcement
        </span>
        </div>
        </td>
      </tr>
        <tr>
        <td valign="top" style="background:url(../img/3.jpg);padding-bottom:10px;"><div style="margin-top:-8px; position: relative;">
          <table width="690" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td bgcolor="#FFFFFF" style="border-left:1px solid #a0a8ac; border-bottom:1px solid #a0a8ac; border-right:1px solid #a0a8ac;">
              
                 <form method="post" action="" enctype="multipart/form-data">
              <table cellpadding="0" cellspacing="0" border="0" style="padding-top:20px;padding-left:20px;font-family:Arial, Helvetica, sans-serif;color:#333;font-size:16px;">
              <tr><td style="width:130px;text-align:right;font-weight:bold;">
              Subject:
              </td>
              <td style="padding-left:20px;">
              <input type="text" name="subject" style="width:400px;font-size:15px;" />
              </td>
              </tr>
              <tr><td><div style="clear:both;height:20px;"></div></td></tr>
              <tr><td style="width:130px;text-align:right;font-weight:bold;">
              Publish Date:
              </td>
              <td style="padding-left:20px;">
              <input type="text" name="date" id="datepicker" style="font-size:15px;"/>
              </td>
              </tr>
              
              <tr><td><div style="clear:both;height:20px;"></div></td></tr>
              
                <tr><td style="width:130px;text-align:right;font-weight:bold;">
              Message:
              </td>
              <td style="padding-left:20px;">
              <textarea name="message" rows="6" cols="63" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;"></textarea>
              </td>
              </tr>
               <tr><td><div style="clear:both;height:20px;"></div></td></tr>
               <tr><td>&nbsp;</td>
               <td style="padding-left:20px;"><input type="submit" name="save" class="submit2" value="Save"/>
               &nbsp;&nbsp;&nbsp;&nbsp;
               <input type="button" name="cancel" value="Cancel" onclick="window.location='announcement.php'" class="submit2"/>
               </td>
               </tr>
               <tr><td><div style="clear:both;height:20px;"></div></td></tr>
              </table>
              </form>
              
              </td>
            </tr>
          </table>
        </div></td>
      </tr><!--third-content-->
      
      
      <tr>
        <td><img src="../img/4.jpg" width="739" height="6" alt="" /></td>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>

