<?php 

if(isset($_POST['send_all'])) {
	
	
$receivers=mysql_real_escape_string($_POST['receivers']);	
$date=mysql_real_escape_string($_POST['txtDate']);
$subject=mysql_real_escape_string($_POST['subject']);
$content=mysql_real_escape_string($_POST['content']);
$content2=$_POST['content'];
$content2=stripslashes($content2);

//var_dump($content2);die();

$dates=explode("-",$date);
$m=$dates[0];
$d=$dates[1];
$y=$dates[2];

$date=$y."-".$m."-".$d;

$msg  ="<html><head><title>Admin Newsletter</title></head>";
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
$headers .= 'From: Your Friendly Admin ' . "\r\n";


if($receivers=="dentist") {
$var="yes";	
$s="SELECT * FROM dentist_list WHERE allow_dentist='".$var."'";
$r=mysql_query($s);
while($w=mysql_fetch_array($r))
{
$email=$w['email'];
mail($email,$subject,$msg,$headers);
}
$sqls=mysql_query("INSERT INTO newsletter (newsletter_date,newsletter_subject,newsletter_content,newsletter_receiver) VALUES ('$date','$subject','$content','$receivers')");	
//end of if
}

else if($receivers=="patient") {
$sqls="SELECT * FROM patient_list";
$ress=mysql_query($sqls);
while($rows=mysql_fetch_array($ress)) {
$email=$rows['email'];
mail($email,$subject,$msg,$headers);
}
$sqls=mysql_query("INSERT INTO newsletter (newsletter_date,newsletter_subject,newsletter_content,newsletter_receiver) VALUES ('$date','$subject','$content','$receivers')");	
}

else if($receivers=="all")
{
$sqlss="SELECT * FROM patient_list";
$resss=mysql_query($sqlss);
while($ro=mysql_fetch_array($resss)) {
$email=$ro['email'];
mail($email,$subject,$msg,$headers);
}
$sl="SELECT * FROM dentist_list WHERE allow_dentist='".$var."'";
$es=mysql_query($sl);
while($rowe=mysql_fetch_array($es))
{
$email=$rowe['email'];
mail($email,$subject,$msg,$headers);
}

$sqls=mysql_query("INSERT INTO newsletter (newsletter_date,newsletter_subject,newsletter_content,newsletter_receiver) VALUES ('$date','$subject','$content','$receivers')");	

}

echo "<script>alert('You have successfully sent a newsletter email to your receivers. And you have already created a new newsletter.');</script>";

}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
	<script language = "Javascript">
/**
 * DHTML date validation script. Courtesy of SmartWebby.com (http://www.smartwebby.com/dhtml/datevalidation.asp)
 */
// Declaring valid date character, minimum year and maximum year
var dtCh= "-";
var minYear=1900;
var maxYear=2100;

function isInteger(s){
	var i;
    for (i = 0; i < s.length; i++){   
        // Check that current character is number.
        var c = s.charAt(i);
        if (((c < "0") || (c > "9"))) return false;
    }
    // All characters are numbers.
    return true;
}

function stripCharsInBag(s, bag){
	var i;
    var returnString = "";
    // Search through string's characters one by one.
    // If character is not in bag, append to returnString.
    for (i = 0; i < s.length; i++){   
        var c = s.charAt(i);
        if (bag.indexOf(c) == -1) returnString += c;
    }
    return returnString;
}

function daysInFebruary (year){
	// February has 29 days in any year evenly divisible by four,
    // EXCEPT for centurial years which are not also divisible by 400.
    return (((year % 4 == 0) && ( (!(year % 100 == 0)) || (year % 400 == 0))) ? 29 : 28 );
}
function DaysArray(n) {
	for (var i = 1; i <= n; i++) {
		this[i] = 31
		if (i==4 || i==6 || i==9 || i==11) {this[i] = 30}
		if (i==2) {this[i] = 29}
   } 
   return this
}

function isDate(dtStr){
	var daysInMonth = DaysArray(12)
	var pos1=dtStr.indexOf(dtCh)
	var pos2=dtStr.indexOf(dtCh,pos1+1)
	var strMonth=dtStr.substring(0,pos1)
	var strDay=dtStr.substring(pos1+1,pos2)
	var strYear=dtStr.substring(pos2+1)
	strYr=strYear
	if (strDay.charAt(0)=="0" && strDay.length>1) strDay=strDay.substring(1)
	if (strMonth.charAt(0)=="0" && strMonth.length>1) strMonth=strMonth.substring(1)
	for (var i = 1; i <= 3; i++) {
		if (strYr.charAt(0)=="0" && strYr.length>1) strYr=strYr.substring(1)
	}
	month=parseInt(strMonth)
	day=parseInt(strDay)
	year=parseInt(strYr)
	if (pos1==-1 || pos2==-1){
		alert("The date format should be : mm-dd-yyyy")
		return false
	}
	if (strMonth.length<1 || month<1 || month>12){
		alert("Please enter a valid month")
		return false
	}
	if (strDay.length<1 || day<1 || day>31 || (month==2 && day>daysInFebruary(year)) || day > daysInMonth[month]){
		alert("Please enter a valid day")
		return false
	}
	if (strYear.length != 4 || year==0 || year<minYear || year>maxYear){
		alert("Please enter a valid 4 digit year between "+minYear+" and "+maxYear)
		return false
	}
	if (dtStr.indexOf(dtCh,pos2+1)!=-1 || isInteger(stripCharsInBag(dtStr, dtCh))==false){
		alert("Please enter a valid date")
		return false
	}
return true
}

function ValidateForm(){
	var dt=document.frmSample.txtDate;
	if (isDate(dt.value)==false){
		dt.focus();
		return false;
	}
    return true;
	
		
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
      <form name="frmSample" action="" method="post" onSubmit="return ValidateForm()">
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
               <?php /*<tr><td>
            <!-- button place--><table cellpadding="0" cellspacing="0" border="0">
              <tr><td style="background-image:url('../img/top_button_bak_left.png');width:9px;height:48px;">
              </td>
              <td style="background-image:url('../img/top_button_bak_center.png');width:670px;height:48px;padding-left:10px;">
             <input type="submit" name="compose" value="Compose Newsletter" class="submit2"/>
              </td>
              </tr>
              <!--button place--></table>
              </td></tr>
			  */?>
              <tr><td>
              <!--firstcontent--><table cellpadding="0" cellspacing="0" border="0">
              <tr><td>
         <div style="clear:both;height:20px;"></div>
         <span style="margin-left:20px;font-family: Arial, Helvetica, sans-serif;color:#333;font-size:18px;font-weight:bold;">
         Add Newsletter
         </span>
         
              <div style="clear:both;height:20px;"></div>
             <table cellpadding="0" cellspacing="0" border="0" style="font-family:Arial, Helvetica, sans-serif;color:#333;font-size:14px;">
             <tr><td style="width:120px;text-align:left;padding-left:20px;">
             Receivers:
             </td>
             <td style="padding-left:10px;">
             <select name="receivers" style="width:205px;">
             <option value="none">--- Select one ---</option>
             <option value="dentist">Dentist</option>
             <option value="patient">Patient</option>
             <option value="all">All</option>
             </select>
             </td>
             </tr>
             
             <tr><td style="width:120px;text-align:left;padding-top:10px;padding-left:20px;">
             Publish Date:
             </td>
             <td style="padding-left:10px;padding-top:10px;"><input type="text" name="txtDate" onfocus="if (this.value == 'MM-DD-YYYY') {this.value = '';}" onblur="if (this.value == '') {this.value = 'MM-DD-YYYY';}" value="MM-DD-YYYY" style="width:200px;"/></td>
             </tr>
             
             <tr><td style="width:120px;text-align:left;padding-top:10px;padding-left:20px;">
             Newsletter Subject:
             </td>
             <td style="padding-left:10px;padding-top:10px;"><input type="text" name="subject" style="width:200px;"/></td>
             </tr>
             
              <tr><td style="width:120px;text-align:left;padding-top:10px;padding-left:20px;">
             Message:
             </td>
             <td>&nbsp;</td>
             </tr>
             <tr>
             <td colspan="2" style="padding-left:17px;padding-top:10px;"><!--<input type="text" name="subject" style="width:200px;"/>-->
             
             <script type="text/javascript" src="../ckeditor/jquery/jquery.1.4.min.js"></script>
	<script type="text/javascript" src="../ckeditor/ckeditor/ckeditor.js"></script>
     <textarea name="content" class="ckeditor"></textarea>  
    <script type="text/javascript">


				CKEDITOR.replace( 'content',{toolbar : 'Full' ,height: 350,width:650 } );

			</script>  
             
             </td>
             </tr>
             
             
             </table>
             
              <div style="clear:both;height:20px;"></div>
              
              </td></tr>
              <!--firstcontent--></table>
              </td></tr>
              
                            
              <!--contentholder--></table>
                </td>
            </tr>
            
             <!--bottom button--><tr><td>
              <!--<div style="clear:both;height:20px;"></div>-->
              <div style="margin:0 auto;width:690px;margin-top:15px;">
              <div style="float:left;"><input type="submit" name="send_all" class="submit2" value="Send Newsletter"/>&nbsp;&nbsp;&nbsp;&nbsp;<input type="button" name="cancel" class="submit2" value="Cancel" onclick="window.location='newsletter_view.php'"/> </div>
              <!--<div style="float:right;"><input type="submit" name="apply" class="submit2" value="Apply" style="padding:2px 15px 2px 15px;"/></div>
              <div style="float:right;margin-right:15px;"><select name="sort" />
              <option value="date">sort by Date</option>
<option value="name">sort by Name</option>
<option value="email">sort by Email</option>
<option value="dentist">sort by Dentist</option>
              </select></div>-->
              </div>
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
