<?php 

$patient_id=$_SESSION['patient_id'];

$dentist_id="";

$sql="SELECT dentist_id FROM patient_list WHERE id='".$patient_id."'";
$res=mysql_query($sql);
while($row=mysql_fetch_array($res))
{
$dentist_id=$row['dentist_id'];	
}

$sql=mysql_query("SELECT email FROM dentist_list WHERE id='".$dentist_id."'");
while($row=mysql_fetch_array($sql)) {
$email=$row['email'];	
}


if(isset($_POST['compose'])) {
$pt_id=mysql_real_escape_string($_POST['pt_id']);
$den_id=mysql_real_escape_string($_POST['den_id']);
$to=mysql_real_escape_string($_POST['to']);
$sub=mysql_real_escape_string($_POST['subject']);
$content=mysql_real_escape_string($_POST['content']);
$content2=$_POST['content'];

$content2=stripslashes($content2);
//var_dump($content2);die();

$sql=mysql_query("SELECT * FROM patient_list WHERE id='".$pt_id."'");
while($row=mysql_fetch_array($sql)) {
$pt_name=$row['patient_name'];	
}

$msg  ="<html><head><title>Email From Patient</title></head>";
$msg .="<body>";
$msg .="<table cellspacing=\"0\" cellpadding=\"0\" border=\"0\">";
$msg .="<tr><td>";
$msg .="<h2 style=\"font-size:18px;font-family:Arial;color:#333;\"></h2>";
$msg .="</td></tr>";
$msg .="<tr><td style=\"padding-top:20px;padding-left:10px;\">";
$msg .= $content2;
$msg .="</td></tr>";
$msg .="</table>";
$msg .="</body>";
$msg .="</html>";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";

// More headers
$headers .= "From:  $pt_name" . "\r\n";
//$headers .= 'Cc: myboss@example.com' . "\r\n";


if(mail($to,$sub,$msg,$headers))
{
$sql=mysql_query("INSERT INTO patient_message_sent (dentist_id,patient_id,message_subject,message_content,message_date) VALUES('$den_id','$pt_id','$sub','$content',NOW())"); 

$sql="INSERT INTO message_received (dentist_id,patient_id,message_subject,message_content,message_date) VALUES('$den_id','$pt_id','$sub','$content',NOW())";
$res=mysql_query($sql);
}


}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=9" />
<title>Untitled Document</title>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
<script>
function toggle(div_id) {
	var el = document.getElementById(div_id);
	if ( el.style.display == 'none' ) {	el.style.display = 'block';}
	else {el.style.display = 'none';}
}
function blanket_size(popUpDivVar) {
	if (typeof window.innerWidth != 'undefined') {
		viewportheight = window.innerHeight;
	} else {
		viewportheight = document.documentElement.clientHeight;
	}
	if ((viewportheight > document.body.parentNode.scrollHeight) && (viewportheight > document.body.parentNode.clientHeight)) {
		blanket_height = viewportheight;
	} else {
		if (document.body.parentNode.clientHeight > document.body.parentNode.scrollHeight) {
			blanket_height = document.body.parentNode.clientHeight;
		} else {
			blanket_height = document.body.parentNode.scrollHeight;
		}
	}
	var blanket = document.getElementById('blanket');
	blanket.style.height = blanket_height + 'px';
	var popUpDiv = document.getElementById(popUpDivVar);
	popUpDiv_height=blanket_height/2-150;//150 is half popup's height
	popUpDiv.style.top = popUpDiv_height + 'px';
}

function window_pos(popUpDivVar) {
	if (typeof window.innerWidth != 'undefined') {
		viewportwidth = window.innerHeight;
	} else {
		viewportwidth = document.documentElement.clientHeight;
	}
	if ((viewportwidth > document.body.parentNode.scrollWidth) && (viewportwidth > document.body.parentNode.clientWidth)) {
		window_width = viewportwidth;
	} else {
		if (document.body.parentNode.clientWidth > document.body.parentNode.scrollWidth) {
			window_width = document.body.parentNode.clientWidth;
		} else {
			window_width = document.body.parentNode.scrollWidth;
		}
	}
	var popUpDiv = document.getElementById(popUpDivVar);
	window_width=window_width/2-150;//150 is half popup's width
	popUpDiv.style.left = window_width + 'px';
}
function popup(windowname) {
	blanket_size(windowname);
	window_pos(windowname);
	toggle('blanket');
	toggle(windowname);		
}


//get all checked values
function updateTextArea() {         
     var allVals = [];
     $('#table1 :checked').each(function() {
       allVals.push($(this).val());
     });
     $('#cc').val(allVals)
	 
  }
  
 $(function() {
  $('#table1 input').click(updateTextArea);
  updateTextArea();
 });
 

//get all checked values


//remove popoup//
function hide(field) {

//document.submitform.to.value = "";
document.getElementById('popUpDiv').style.display = 'none';
document.getElementById('blanket').style.display = 'none';

for (i = 0; i < field.length; i++)
	field[i].checked = false ;
}

//remove popoup//
function hides_me() {

window.location='message_contact.php';
}



</script>
</head>

<body>
<div id="blanket" style="display:none;"></div>

<div id="popUpDiv" style="display:none;">

<table cellpadding="0" cellspacing="0" border="0">
<tr><td style="font-family:Arial, Helvetica, sans-serif;color:#FFF;font-size:16px;font-weight:bold;padding-top:8px;padding-left:15px;">
Contact Lists
</tr></td>
</table>
<div id="container">
<div id="contact_list">
<form name="myform"> 
<table cellpadding="0" cellspacing="0" border="0" align="left" style="padding-left:5px;padding-top:10px;">
<?php 
$sql="SELECT * FROM addressbook";
$res=mysql_query($sql);
while($row=mysql_fetch_array($res))
{ 
?>
<tr>
<td>
<table cellpadding="0" cellspacing="0" border="0" id="table1">
<tr><td> 

<input type="checkbox" name="check" value="<?php echo $row["email"];?>" /></td>
<td style="padding-left:10px;">
<?php echo $row["email"];?>
</td></tr>
</table></td></tr>
<?php
}
?>
</form>
</table>
</div><!--contactlist-->

<!--<table cellpadding="0" cellspacing="0" border="0">
<tr><td style="padding-left:12px;padding-top:8px;">
<input name="search" type="text" style="border:1px solid #999;"/>&nbsp;&nbsp;<input type="submit" value="Search" class="submit4" name="search"/>
</td></tr>
</table>-->

</div><!--container-->
<!--button-->
<table cellpadding="0" cellspacing="0" border="0" align="right" style="padding-right:15px;padding-top:8px;">
<tr><td>
<input type="submit" name="ok" class="submit3" value="Done" id="done" onclick="hide(document.myform.check);"/>
&nbsp;&nbsp;&nbsp;
<input type="submit" name="cancel" class="submit3" value="Cancel" onclick="hide(document.myform.check);"/>
<!--</form>-->
</td></tr>
</table>

<!--button-->
</div>

<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><table width="739" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr style="font-family:Arial, Helvetica, sans-serif;">
        <td height="39" colspan="2" valign="top"><div>
          <!--<div style="width:140px; margin-left:20px; margin-bottom:-2px; float:left;">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="6"><img src="img/t1.jpg" width="6" height="41" alt="" /></td>
                <td width="661" align="center" style="background: url(img/t3.jpg);"><a href="message_contact.php"><img src="img/t-contact.png" width="95" height="12" alt="" /></a></td>
                <td width="6"><img src="img/t2.jpg" width="6" height="41" alt="" /></td>
              </tr>
            </table>
          </div>-->
          <!--<div style="width:120px; margin-left:20px; margin-bottom:-2px; float:left;">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="6"><img src="../img/t1.jpg" width="6" height="41" alt="" /></td>
                <td width="661" align="center" style="background: url(../img/t3.jpg);"><a href="message_received.php"><img src="../img/t-received.png" width="83" height="13" alt="" /></a></td>
                <td width="6"><img src="../img/t2.jpg" width="6" height="41" alt="" /></td>
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
          <!--<div style="width:130px; margin-left:10px; margin-bottom:-2px; float:left; z-index:999999999">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="6"><img src="img/u1.jpg" width="6" height="41" alt="" /></td>
                <td width="661" align="center" style="background: url(img/u3.jpg); font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#3e4447;">Joselito Galvez</td>
                <td width="6"><img src="img/u2.jpg" width="6" height="41" alt="" /></td>
              </tr>
            </table>
          </div>-->
          <!--<div style="width:130px; margin-left:10px; margin-bottom:-2px; float:left; z-index:999999999">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>

                <td width="6"><img src="../img/u1.jpg" width="6" height="41" alt="" /></td>
                <td width="661" align="center" style="background: url(../img/u3.jpg);"><a href="#"><img src="../img/t_compose.png" width="86" height="19" alt="" /></a></td>
                <td width="6"><img src="../img/u2.jpg" width="6" height="41" alt="" /></td>
              </tr>
            </table>
          </div>-->
           <?php
$no="no";
$sql="SELECT COUNT(*) AS num FROM patient_message_received WHERE message_read='".$no."' AND patient_id='".$pt_id."'";
$res=mysql_query($sql);
$query=mysql_fetch_assoc($res);
$rows=$query['num'];?>
          <div style="width:120px; margin-left:20px; margin-bottom:-2px; float:left;">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="6"><img src="../img/t1.jpg" width="6" height="41" alt="" /></td>
                <td width="661" align="center" style="background: url(../img/t3.jpg);">
                <table cellpadding="0" cellspacing="0" border="0"><tr><td>
                <a href="message_received.php"><img src="../img/inbox.png" width="19" height="15" alt="" /></a>
                </td>
                <td style="padding-left:10px;"><a href="message_received.php" class="tablink">Inbox(<?php echo $rows;?>)</a></td>
                </tr></table>
                </td>
                <td width="6"><img src="../img/t2.jpg" width="6" height="41" alt="" /></td>
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
         
          <!--<div style="width:130px; margin-left:10px; margin-bottom:-2px; float:left; z-index:999999999">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="6"><img src="img/u1.jpg" width="6" height="41" alt="" /></td>
                <td width="661" align="center" style="background: url(img/u3.jpg); font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#3e4447;">Joselito Galvez</td>
                <td width="6"><img src="img/u2.jpg" width="6" height="41" alt="" /></td>
              </tr>
            </table>
          </div>-->
          <div style="width:160px; margin-left:10px; margin-bottom:-2px; float:left; z-index:999999999">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="6"><img src="../img/u1.jpg" width="6" height="41" alt="" /></td>
                <td width="661" align="center" style="background: url(../img/u3.jpg);">
                <table cellpadding="0" cellspacing="0" border="0">
                <tr><td>
                <a href="message_compose.php"><img src="../img/compose.png" width="19" height="18" alt="" /></a>
                </td>
                <td style="padding-left:10px;"><a href="message_compose.php" class="tablink">Compose Message</a></td></tr></table>
                </td>
                <td width="6"><img src="../img/u2.jpg" width="6" height="41" alt="" /></td>
              </tr>
            </table>
          </div>
        </div></td>
      </tr>
      <tr>
        <td colspan="2"><img src="../img/1.jpg" width="739" height="12" alt="" /></td>
      </tr>
      <form method="post" action="" enctype="multipart/form-data" name="submitform">
      <tr>
        <td height="47" style="background:url(../img/2.jpg);">
        <table width="100%"><tr><td>
        <img src="../img/compose_message.png" height="24" width="171" style="margin-top:-8px;margin-left:23px;"/></td>
        <!--<td align="right"><input type="text" name="search_field" class="search" value="Search contact list" style="margin-right:10px;margin-top:6px;"/>
     <input type="submit" name="search" value="SEARCH" class="submit" style="margin-right:17px;margin-top:6px;" /></td>--></tr></table>
      </tr>
      <tr>
        <td colspan="2" valign="top" style="background:url(../img/3.jpg); padding-bottom:10px;"><div style="margin-top:-8px; position: relative;">
          <table width="690" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td bgcolor="#FFFFFF" style="border-left:1px solid #a0a8ac; border-bottom:1px solid #a0a8ac; border-right:1px solid #a0a8ac;" width="100%">
               
              <!--conentholder--><table cellpadding="0" cellspacing="0" border="0" width="100%">
              <tr><td width="100%">
              <!--button place--><table cellpadding="0" cellspacing="0" border="0" width="100%">
              <tr><td style="background-image:url('../img/top_button_bak_left.png');width:9px;height:48px;">
              </td>
              <td style="background-image:url('../img/top_button_bak_center.png');width:670px;height:48px;padding-left:10px;">
              <input type="submit" name="compose" value="Send" class="submit2"/> &nbsp;&nbsp;<input type="submit" name="cancel" value="Cancel" class="submit2" onclick="javascript:history.go(-1)"/>
              </td>
              </tr>
              <!--button place--></table>
              </td></tr>
                           
              <!--topcontent--><tr><td width="100%">
              <table cellpadding="0" cellspacing="0" border="0" width="100%">
              <tr><td style="background-image:url('../img/top_read_center.png');width:100%;height:96px;padding-left:10px;">
              <!--top text--><table cellpadding="0" cellspacing="0" border="0" width="100%">
              <tr><td width="100%" style="padding-top:5px;">
              <div style="margin:0 auto;width:640px;font-family:Arial, Helvetica, sans-serif;font-weight:bold;font-size:12px;">
              
              <!--1-->
              <div style="float:left;">
              <table cellpadding="0" cellspacing="0" border="0">
              <tr><td style="text-align:right;">
              To: 
              </td>
              <td style="padding-left:10px;"><input type="text" name="to" id="to" style="width:460px;" value="<?php echo $email;?>"/></td>
              <!--<td style="padding-left:5px;"><img src="img/icon_plus.png" width="25" height="21" onclick="popup('popUpDiv')"/></td>-->
              </tr>
              
             <!-- <tr><td style="text-align:right;">
              CC: 
              </td>
              <td style="padding-left:10px;"><input type="text" name="cc" style="width:460px;" id="cc"/></td>-->
              <!--<td style="padding-left:5px;"><img src="img/icon_plus.png" width="25" height="21" onclick="popup('popUpDiv')"/></td>-->
              <!--<td style="padding-left:5px;"><img src="img/icon_add_bcc.png" width="70" height="21"/></td>-->
              <!--</tr>-->
              
              <tr><td style="text-align:right;">
              Subject: 
              </td>
              <td style="padding-left:10px;"><input type="text" name="subject" style="width:460px;"/></td>
             
              </tr>
              
              </table></div><!--1-->
              </div>
              </td></tr>
              <!--top text--></table>
              </td></tr>
              </table>
              <!--topcontent--></td></tr>
              
              <tr><td>
              
           
<script type="text/javascript" src="../ckeditor/jquery/jquery.1.4.min.js"></script>
	<script type="text/javascript" src="../ckeditor/ckeditor/ckeditor.js"></script>
     <textarea name="content" class="ckeditor"></textarea>  
    <script type="text/javascript">


				CKEDITOR.replace( 'content',{toolbar : [ ['Bold','Italic','Underline','Strike','Subscript','Superscript','-','RemoveFormat'],['Image'],['Link','Unlink'], ['Smiley','SpecialChar'], ['Undo','Redo'], ['NumberedList','BulletedList','-','Outdent','Indent','-','Blockquote','JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock','-','BidiLtr','BidiRtl'],['Cut','Copy','Paste'],['FontStyle'],['Font'], ['FontSize'], ['TextColor'],] ,height: 177,width:700 } );

			</script>  

              
              </td></tr>
              
              <!--contentholder--></table>
                </td>
            </tr>
            
             <!--bottom button--><tr><td style="padding-top:20px;padding-left:20px;">
              <!--<div style="clear:both;height:20px;"></div>-->
              <!--<div style="margin:0 auto;width:690px;margin-top:15px;">
              <div style="float:left;"><input type="submit" name="delete_all" class="submit2" value="Delete all marked" /></div>
              <div style="float:right;"><input type="submit" name="apply" class="submit2" value="Apply" style="padding:2px 15px 2px 15px;"/></div>
              <div style="float:right;margin-right:15px;"><select name="sort" />
              <option value="date">sort by Date</option>
<option value="sender">sort by Sender</option>
<option value="unread">sort by Unread</option>
              </select></div>
              </div>-->
              
              <!--patient name-->
              <input type="hidden" value="<?php echo $dentist_id;?>" name="den_id" />
              <input type="hidden" value="<?php echo $patient_id;?>" name="pt_id" />
              <!--patient name-->
              
              <input type="submit" name="compose" value="Send" class="submit2"/> &nbsp;&nbsp; <input type="submit" name="cancel" value="Cancel" class="submit2" onclick="javascript:history.go(-1)"/>
              
             <!--bottom button--></td></tr>
              
               <!--</td>
            </tr>-->
            </table>
            </form>
            <!--</div>--></td></tr>
      <tr>
        <td colspan="2"><img src="../img/4.jpg" width="739" height="6" alt="" /></td>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>
