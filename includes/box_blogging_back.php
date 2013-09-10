<?php
include('config.php');

$dentist_id=$_SESSION['id'];


if(isset($_POST['update'])) {
	$idy=mysql_real_escape_string($_POST['bid']);
	
	$blog_title=mysql_real_escape_string($_POST['blog_title']);
$blog_date=mysql_real_escape_string($_POST['date']);
$display=mysql_real_escape_string($_POST['display']);
$body=mysql_real_escape_string($_POST['content']);
//$body=stripslashes($body);

$dates=explode("-",$blog_date);
$date_month=$dates[0];
$date_day=$dates[1];
$date_year=$dates[2];
$date=$date_year."-".$date_month."-".$date_day;
	
	$sql="UPDATE blogging SET dentist_id='".$dentist_id."',blog_title='".$blog_title."',blog_content='".$body."',blog_date='".$date."',blog_display='".$display."' WHERE id='".$idy."'";
$res=mysql_query($sql);
	
	
	echo "<script>alert('Updated Successfully.');</script>";
	
	$action="edit";
}


if(isset($_GET['id'])){
$action = $_GET['id'];

$sql="DELETE FROM blogging WHERE id='".$action."'";
$res=mysql_query($sql);


echo "<script>alert('Deleted Successfully.');</script>";

$action="list";

} 

if(isset($_POST['delete_all']))
{
		for($i=0;$i<count($_POST["check"]);$i++){
		if($_POST["check"][$i] != "") {
			$qwerty="DELETE FROM blogging WHERE id='".$_POST['check'][$i]."'";
			$res=mysql_query($qwerty);
			
	}}
	
	
	echo "<script>alert('Deleted Successfully.');</script>";
	
	$action="list";
	}


if(isset($_POST['post'])) {

$blog_title=mysql_real_escape_string($_POST['blog_title']);
$blog_date=mysql_real_escape_string($_POST['txtDate']);
$display=mysql_real_escape_string($_POST['display']);
$body=mysql_real_escape_string($_POST['content']);
//$body=stripslashes($body);

$dates=explode("-",$blog_date);
$date_month=$dates[0];
$date_day=$dates[1];
$date_year=$dates[2];
$date=$date_year."-".$date_month."-".$date_day;

$sql="INSERT INTO blogging SET dentist_id='".$dentist_id."',blog_title='".$blog_title."',blog_content='".$body."',blog_date='".$date."',blog_display='".$display."'";
$res=mysql_query($sql);

echo "<script>alert('Added Successfully.');</script>";


}

if(isset($_POST['editthis']))
{
if(count($_POST["check"]) >= 2) {
					echo "<script>alert('Too many blogs to edit. Please select only one.');</script>";
					}
					else if(count($_POST["check"])==0) {
						echo "<script>alert('Please select one.');</script>";
					}
					else {
		for($i=0;$i<count($_POST["check"]);$i++){
		if($_POST["check"][$i] != "") {
			$qwerty="SELECT * FROM blogging WHERE id='".$_POST['check'][$i]."'";
			$res=mysql_query($qwerty);
			while($row=mysql_fetch_array($res)) {
			          //$sendmail=$row['email']; 
					  $id=$row['id'];
												}
					//var_dump($sendmail);die();
	}} 
	header('Location: blog.php?do=edit&delid='.$id.'');
	}
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link type="text/css" href="jquery-ui-1.8.17.custom/css/start/jquery-ui-1.8.17.custom.css" rel="stylesheet" />	
		<script type="text/javascript" src="jquery-ui-1.8.17.custom/js/jquery-1.7.1.min.js"></script>
		<script type="text/javascript" src="jquery-ui-1.8.17.custom/js/jquery-ui-1.8.17.custom.min.js"></script>
		<script type="text/javascript">
			$(function(){

				

				// Datepicker
				$('#datepicker').datepicker({
					inline: true
				});
				
				
			});
		</script>
        
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
        
        <style type="text/css">
			/*demo page css*/
			body{ font: 62.5% "Trebuchet MS", sans-serif; margin: 50px;}
			.demoHeaders { margin-top: 2em; }
			#dialog_link {padding: .4em 1em .4em 20px;text-decoration: none;position: relative;}
			#dialog_link span.ui-icon {margin: 0 5px 0 0;position: absolute;left: .2em;top: 50%;margin-top: -8px;}
			ul#icons {margin: 0; padding: 0;}
			ul#icons li {margin: 2px; position: relative; padding: 4px 0; cursor: pointer; float: left;  list-style: none;}
			ul#icons span.ui-icon {float: left; margin: 0 4px;}
		</style>	
        
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
}  </script>
<script type="text/javascript" src="ckeditor/jquery/jquery.1.4.min.js"></script>
	<script type="text/javascript" src="ckeditor/ckeditor/ckeditor.js"></script>
</head>

<body>

<map name="Map" id="Map">
  <!--<area shape="rect" coords="8,1,131,42" href="messaging.php" />
  <area shape="rect" coords="138,2,263,41" href="received_message.php" />-->
  <area shape="rect" coords="638,2,689,33" href="patient_dental_edit.php" />
</map>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>&nbsp;</td>
  </tr>
              <?php if(isset($_GET['do'])){
$action = $_GET['do'];} 

//var_dump($action);die();
?>
 <tr>
    <td><table width="739" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr style="font-family:Arial, Helvetica, sans-serif;">
        <td height="39" colspan="2" valign="top"><div>
         <!-- <div style="width:140px; margin-left:20px; margin-bottom:-2px; float:left;">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="6"><img src="img/t1.jpg" width="6" height="41" alt="" /></td>
                <td width="661" align="center" style="background: url(img/t3.jpg);"><a href="patient_list.php"><img src="img/t_patient_list.png"  width="98" height="18" alt="" /></a></td>
                <td width="6"><img src="img/t2.jpg" width="6" height="41" alt="" /></td>
              </tr>
            </table>
          </div>
          <div style="width:120px; margin-left:10px; margin-bottom:-2px; float:left;">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="6"><img src="img/t1.jpg" width="6" height="41" alt="" /></td>
                <td width="661" align="center" style="background: url(img/t3.jpg);"><a href="add_patient.php"><img src="img/t_add.png" width="82" height="18" alt="" /></a></td>
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
          </div>-->
        <?php /* <div style="width:130px; margin-left:10px; margin-bottom:-2px; float:left; z-index:999999999">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="6"><img src="img/u1.jpg" width="6" height="41" alt="" /></td>
                <td width="661" align="center" style="background: url(img/u3.jpg); font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#3e4447;"><!--Joselito Galvez--><?php
				
				$length=14;
$name1=$name;
//$name=strlen($name);
//echo $name;
$display = substr($name1, 0, $length) ;
echo "<span style=\"margin-left:4px;color:#333;font-family:Arial, Helvetica, sans-serif;font-size:13px;\">$display</span>";
echo "..." ;
				
				//echo $name;?></td>
                <td width="6"><img src="img/u2.jpg" width="6" height="41" alt="" /></td>
              </tr>
            </table>
          </div>*/?>
           <div style="width:120px; margin-left:20px; margin-bottom:-2px; float:left;">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
              <?php 
			  if($action=="write") {
				  $text1="t";
				  $text2="u";
			  } else if($action=="list") {
				   $text1="u";
				  $text2="t";
			  }
			  else {
				$text1="u";  
				 $text2="t";
			  }
				  ?>
                <td width="6"><img src="img/<?php echo $text1;?>1.jpg" width="6" height="41" alt="" /></td>
                <td width="661" align="center" style="background: url(img/<?php echo $text1;?>3.jpg);"><!--<img src="img/t-contact.png" alt="" />--><a href="blog.php?do=list" class="tablink">My BLogs</a></td>
                <td width="6"><img src="img/<?php echo $text1;?>2.jpg" width="6" height="41" alt="" /></td>
              </tr>
            </table>
          </div>
          <div style="width:120px; margin-left:10px; margin-bottom:-2px; float:left;">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="6"><img src="img/<?php echo $text2;?>1.jpg" width="6" height="41" alt="" /></td>
                <td width="661" align="center" style="background: url(img/<?php echo $text2;?>3.jpg);"><!--<img src="img/t_add.png"  alt="" />--><a href="blog.php?do=write" class="tablink">Write a Blog</a></td>
                <td width="6"><img src="img/<?php echo $text2;?>2.jpg" width="6" height="41" alt="" /></td>
              </tr>
            </table>
          </div>
          <div style="width:110px; margin-left:10px; margin-bottom:-2px; float:left">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="6"><img src="img/t1.jpg" width="6" height="41" alt="" /></td>
                <td width="661" align="center" style="background: url(img/t3.jpg);"><!--<img src="img/t-sent.png" width="72" height="17" alt="" />--><a href="blog_view.php" target="_blank" class="tablink">View Blogs</a></td>
                <td width="6"><img src="img/t2.jpg" width="6" height="41" alt="" /></td>
              </tr>
            </table>
          </div>
        </div></td>
      </tr>
      <tr>
        <td colspan="2"><img src="img/1.jpg" width="739" height="12" alt="" /></td>
      </tr>
      <tr>
        <td height="47" style="background:url(img/2.jpg);">
        <table width="100%"><tr><td>
        <img src="img/white_blog.png" height="21" width="165" style="margin-top:-8px;margin-left:19px;"/></td>
        <td align="right"><!--<input type="submit" name="update" value="UPDATE" class="submit" style="margin-right:10px;margin-top:6px;"/>-->
     <!--<input type="button" onclick="divPrint();" name="print" value="PRINT" class="submit" style="margin-right:17px;margin-top:-5px;" />--></td></tr></table></td>
      </tr>
      <tr>
        <td colspan="2" valign="top" style="background:url(img/3.jpg); padding-bottom:10px;"><div style="margin-top:-8px; position: relative;">
          <table width="690" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td bgcolor="#FFFFFF" style="border-left:1px solid #a0a8ac; border-bottom:1px solid #a0a8ac; border-right:1px solid #a0a8ac;"><!--<p>&nbsp;</p>-->
                <!--<img src="img/menu_patient_info.png" width="691" height="35" border="0" usemap="#Map2" />
                <map name="Map2" id="Map2">
                  <area shape="rect" coords="3,3,97,33" href="#" />
                  <area shape="rect" coords="103,3,217,32" href="patient_medical.php?id=<?php //echo $id;?>" />
                  <area shape="rect" coords="222,3,331,32" href="patient_dental.php?id=<?php //echo $id;?>" />
                  <area shape="rect" coords="337,3,428,32" href="patient_tooth_chart.php?id=<?php //echo $id;?>" />
                  <area shape="rect" coords="433,3,505,32" href="patient_visit_log.php?id=<?php //echo $id;?>" />
                  <area shape="rect" coords="511,3,573,32" href="patient_others.php?id=<?php //echo $id;?>" />
                  <area shape="rect" coords="578,3,634,32" href="patient_notes.php?id=<?php //echo $id;?>" />
                  <area shape="rect" coords="640,4,687,32" href="patient_info_edit.php?id=<?php //echo $id;?>" />
                </map>-->
                
                <div>
                <?php //if(isset($_GET['do'])){
//$action = $_GET['do'];} 

//var_dump($action);die();
?>

                <!--locations-->


                <!--locations-->
                <?php /*} else if($action="view") { 
				
				?>
<!--locations-->
                <table cellpadding="0" cellspacing="0" border="0">
                <tr>
                
                <td style="background-image:url(img/option_center_check.png);width:90px;height:36px;text-align:center;"> 
                <a href="blog.php?do=list" class="link_map">
                My Blogs
                </a>
                </td>
                
                  <td style="background-image:url(img/option_right_check.png);width:5px;height:36px;">&nbsp;</td>
              
               
                <td style="background-image:url(img/option_center_check.png);width:106px;height:36px;text-align: center;"> 
                 <a href="blog.php?do=write" class="link_map">
                Write a Blog
                </a>
                </td>
                
                <!--<td style="background-image:url(img/option_right_check.png);width:5px;height:36px;">&nbsp;</td>-->
               
                 <td style="background-color:#FFF;width:100px;height:36px;text-align: center;"> 
                <a href="blog.php?do=view" class="link_map">
                List Blogs
                 </a>
                </td>
               
                <!--<td style="background-image:url(img/option_right_check.png);width:5px;height:36px;">&nbsp;</td>-->
               
                <td style="background-image:url(img/option_center_check.png);width:130px;height:36px;text-align: center;"> 
                 <a href="blog_view.php" target="_blank" class="link_map">
               View Blogs
                </a>
                </td>
                
                 <td style="background-image:url(img/option_right_check.png);width:5px;height:36px;">&nbsp;</td>
              <td style="background-image:url(img/option_center_check.png);width:250px;height:36px;">&nbsp; 
                </td>
                
                </tr>
                </table>
                <!--locations-->
<?php } */ ?> 

                <?php //} ?>
               
                
            
               <!-- <table cellpadding="0" cellspacing="0" border="0" style="padding-bottom:20px;padding-top:20px;font-family:Arial, Helvetica, sans-serif;font-size:14px;color:#F00;">
<tr><td>
<a href="blog.php?do=write">Write Blog</a>
</td>
<td style="padding-left:20px;">
<a href="blog.php?do=list">List Blog</a>
</td>
<td style="padding-left:20px;">
<a href="blog_view.php" target="_blank">View Blogs</a>
</td>
</tr>
</table>-->




<?php 
/*if(isset($_GET['do'])){
$action = $_GET['do'];} 
*/


if($action=="write") {
?>
 <!--locations-->
                <?php /* <table cellpadding="0" cellspacing="0" border="0">
                <tr>
                
                <td style="background-image:url(img/option_center_check.png);width:90px;height:36px;text-align:center;"> 
                <a href="blog.php?do=list" class="link_map">
                My Blogs
                </a>
                </td>
                
                
              
               
                <td style="background-color:#FFF;width:106px;height:36px;text-align: center;"> 
                 <a href="blog.php?do=write" class="link_map">
                Write a Blog
                </a>
                </td>
                
                <!--<td style="background-image:url(img/option_right_check.png);width:5px;height:36px;">&nbsp;</td>-->
               
                 <!--<td style="background-image:url(img/option_center_check.png);width:100px;height:36px;text-align: center;"> 
                <a href="blog.php?do=view" class="link_map">
                List Blogs
                 </a>
                </td>
               
                <td style="background-image:url(img/option_right_check.png);width:5px;height:36px;">&nbsp;</td>-->
               
                <td style="background-image:url(img/option_center_check.png);width:130px;height:36px;text-align: center;"> 
                 <a href="blog_view.php" target="_blank" class="link_map">
               View Blogs
                </a>
                </td>
                
                 <td style="background-image:url(img/option_right_check.png);width:5px;height:36px;">&nbsp;</td>
              <td style="background-image:url(img/option_center_check.png);width:353px;height:36px;">&nbsp; 
                </td>
                
                </tr>
                </table>*/?>
                </div>
                <div style="clear:both;height:20px;"></div>
                
<form method="post" action="" enctype="multipart/form-data" name="frmSample" onSubmit="return ValidateForm()">
<table cellpadding="0" cellspacing="0"  border="0" style="padding-bottom:20px;padding-top:20px;font-family:Arial, Helvetica, sans-serif;font-size:14px;color:#333;padding-left:33px;">
<tr><td width="150">
Blog Title:
</td>
<td>
<input type="text" name="blog_title" style="width:350px;font-size:14px;">
</td>
</tr>
<tr><td width="150">
Publish Date:
</td>
<td>
<input type="text" name="txtDate" value="MM-DD-YYYY" onfocus="if (this.value == 'MM-DD-YYYY') {this.value = '';}" onblur="if (this.value == '') {this.value = 'MM-DD-YYYY';}" style="width:100px;font-size:14px;">
</td>
</tr>
<tr><td width="150">
Display:
</td>
<td>
<input type="radio" name="display" value="yes" checked="checked">Yes
&nbsp;&nbsp;&nbsp;
<input type="radio" name="display" value="no">No
</td>
</tr>

</table>

<table cellpadding="0" cellspacing="0" border="0" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;color:#333;padding-left:33px;">
<tr><td width="150" colspan="2">Your Blog</td></tr>
<tr>
<td>&nbsp;</td></tr>
<tr>

<td>
  <textarea name="content" class="ckeditor"></textarea>  
    <script type="text/javascript">


				CKEDITOR.replace( 'content',{toolbar : [ ['Bold','Italic','Underline','Strike','Subscript','Superscript','-','RemoveFormat'],['Link','Unlink'], ['Smiley','SpecialChar'], ['Undo','Redo'], ['NumberedList','BulletedList','-','Outdent','Indent','-','Blockquote','JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock','-','BidiLtr','BidiRtl'],['Cut','Copy','Paste'],['FontStyle'],['Font'], ['FontSize'], ['TextColor'],] ,height: 200,width:620 } );

			</script>  
</td></tr>
<tr><td><div style="clear:both;height:15px;"></div></td></tr>


</table>

 </td>
            </tr>
            <tr>
<td style="padding-top:15px;"><input type="submit" value="POST" class="submit2" name="post" /></td>
</tr>
   </form>         
<?php } else if($action=="edit") { 

          $id = $_GET['delid']; 
if($id)
{ $idx=$id; }
else
{ $idx=$idy;}
$sql="SELECT * FROM blogging WHERE id='".$idx."'";
$res=mysql_query($sql);
//var_dump($sql);die();
while($row=mysql_fetch_array($res)) {
	$opt=$row['blog_display'];
	if($opt=="yes")
	{$check1="checked";
	$check2="";
	}
	else
	{$check2="checked";
	$check1="";}
?>
<!--locations-->
                <?php /*<table cellpadding="0" cellspacing="0" border="0">
                <tr>
                
                <td style="background-color:#FFF;width:90px;height:36px;text-align:center;"> 
                <a href="blog.php?do=list" class="link_map">
                My Blogs
                </a>
                </td>
                
                
              
               
                <td style="background-image:url(img/option_center_check.png);width:106px;height:36px;text-align: center;"> 
                 <a href="blog.php?do=write" class="link_map">
                Write a Blog
                </a>
                </td>
                
                <td style="background-image:url(img/option_right_check.png);width:5px;height:36px;">&nbsp;</td>
               
                 <!--<td style="background-image:url(img/option_center_check.png);width:100px;height:36px;text-align: center;"> 
                <a href="blog.php?do=view" class="link_map">
                List Blogs
                 </a>
                </td>-->
               
                <td style="background-image:url(img/option_right_check.png);width:5px;height:36px;">&nbsp;</td>
               
                <td style="background-image:url(img/option_center_check.png);width:130px;height:36px;text-align: center;"> 
                 <a href="blog_view.php" target="_blank" class="link_map">
               View Blogs
                </a>
                </td>
                
                 <td style="background-image:url(img/option_right_check.png);width:5px;height:36px;">&nbsp;</td>
              <td style="background-image:url(img/option_center_check.png);width:250px;height:36px;">&nbsp; 
                </td>
                
                </tr>
                </table>*/?>
                 <!--</div>-->
                <div style="clear:both;height:20px;"></div>
                
          <form method="post" action="" enctype="multipart/form-data">
<table cellpadding="0" cellspacing="0"  border="0" style="padding-bottom:20px;padding-top:20px;font-family:Arial, Helvetica, sans-serif;font-size:14px;color:#333;padding-left:34px;">
<tr><td width="150">
Blog Title:
</td>
<td>
<input type="text" name="blog_title" style="width:350px;font-size:14px;" value="<?php echo $row['blog_title'];?>">
</td>
</tr>
<tr><td width="150">
Publish Date:
</td>
<td>
<input type="text" name="date" value="<?php echo $row['blog_date'];?>" style="font-size:14px;">
</td>
</tr>
<tr><td width="150">
Display:
</td>
<td>
<input type="radio" name="display" value="yes" checked="checked" <?php echo $check1;?>>Yes
&nbsp;&nbsp;&nbsp;
<input type="radio" name="display" value="no" <?php echo $check2;?>>No
</td>
</tr>

</table>

<table cellpadding="0" cellspacing="0" border="0" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;color:#333;padding-left:34px;">
<tr><td width="150">Your Blog</td></tr>
<tr>
<td>&nbsp;</td></tr>
<tr>
<td>

     <textarea name="content" class="ckeditor"><?php echo $row['blog_content'];?></textarea>  
    <script type="text/javascript">


				CKEDITOR.replace( 'content',{toolbar : [ ['Bold','Italic','Underline','Strike','Subscript','Superscript','-','RemoveFormat'],['Link','Unlink'], ['Smiley','SpecialChar'], ['Undo','Redo'], ['NumberedList','BulletedList','-','Outdent','Indent','-','Blockquote','JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock','-','BidiLtr','BidiRtl'],['Cut','Copy','Paste'],['FontStyle'],['Font'], ['FontSize'], ['TextColor'],] ,height: 200,width:620 } );

			</script>  

<!--<textarea name="content" cols="41" rows="22"><?php //echo $row['blog_content'];?></textarea>-->
</td></tr>
<tr><td><div style="clear:both;height:15px;"></div></td></tr>
<tr>
<td><input type="submit" value="Save" class="submit2" name="update" /></td>
<input type="hidden" name="bid" value="<?php echo $row['id'];?>" />
</tr><?php } ?>

<tr><td><div style="clear:both;height:20px;"></div></td></tr>
</table>
</form>
         </td>
            </tr>
          <?php } else { ?>
			 


 <!--locations-->
                <?php /*<table cellpadding="0" cellspacing="0" border="0">
                <tr>
                
                <td style="background-color:#FFF;width:90px;height:36px;text-align:center;"> 
                <a href="blog.php?do=list" class="link_map">
                My Blogs
                </a>
                </td>
                
                
              
               
                <td style="background-image:url(img/option_center_check.png);width:106px;height:36px;text-align: center;"> 
                 <a href="blog.php?do=write" class="link_map">
                Write a Blog
                </a>
                </td>
                
                <td style="background-image:url(img/option_right_check.png);width:5px;height:36px;">&nbsp;</td>
               
                 <!--<td style="background-image:url(img/option_center_check.png);width:100px;height:36px;text-align: center;"> 
                <a href="blog.php?do=view" class="link_map">
                List Blogs
                 </a>
                </td>
               
                <td style="background-image:url(img/option_right_check.png);width:5px;height:36px;">&nbsp;</td>-->
               
                <td style="background-image:url(img/option_center_check.png);width:130px;height:36px;text-align: center;"> 
                 <a href="blog_view.php" target="_blank" class="link_map">
               View Blogs
                </a>
                </td>
                
                 <td style="background-image:url(img/option_right_check.png);width:5px;height:36px;">&nbsp;</td>
              <td style="background-image:url(img/option_center_check.png);width:353px;height:36px;">&nbsp; 
                </td>
                
                </tr>
                </table>*/?>
                <!--locations-->
                 <!--</div>-->
                <div style="clear:both;"></div>
                <form method="post" action="" enctype="multipart/form-data" name="frmMain"/>
          <table cellpadding="0" cellspacing="0" border="0" style="font-family:Arial, Helvetica, sans-serif;">
          <tr><td>
          <table cellpadding="0" cellspacing="0" border="0">
              <tr><td style="background-image:url('img/top_button_bak_left.png');width:9px;height:48px;">
              </td>
              <td style="background-image:url('img/top_button_bak_center.png');width:670px;height:48px;padding-left:10px;">
              <input type="submit" name="delete_all" class="submit2" value="Delete" onclick="return onDelete();"/>
              &nbsp;&nbsp;
              <input type="button" name="addnew" value="Add" class="submit2" onclick="window.location.href='blog.php?do=write'"/>&nbsp;&nbsp;
         <input class="submit2" type="submit" name="editthis" value="Edit"/>
              </td>
              </tr>
              </table>
              </td></tr>
          <tr><td>
          
          <table cellpadding="0" cellspacing="0" border="0" style="color:#FFF;font-size:13px;">
          <tr><td>
           <!--check all holder--><div style="float:left;">
          
          
              <div style="float:left;background-image:url(img/option_center_check.png);width:53px;height:36px;">
              
           
              
              <!--<input name="CheckAll" type="checkbox" id="CheckAll" value="Y"  onClick="ClickCheckAll(this);" style="margin-top:12px;margin-left:22px;"/>-->
              <input name="CheckAll" type="checkbox" id="CheckAll" value="Y"  onClick="ClickCheckAll(this);" style="margin-top:12px;margin-left:22px;"/>
              </div>
              <div style="float:left;background-image:url(img/option_right_check.png);width:5px;height:36px;"></div>
              <!--check all holder--></div>
              
              
              <!--name holder-->
              <div style="float:left;">
              <div style="float:left;background-image:url(img/option_name_repeat.png);width:330px;height:26px;font-family:Arial, Helvetica, sans-serif;font-size:13px;font-weight:bold;color:#373838;padding-top:10px;padding-left:17px;"><a href="blog.php?do=list&amp;arr=	blog_title" style="text-decoration:underline;color:#333;" title="Sort by Title">Blog Title</a></div>
              <div style="float:left;background-image:url(img/option_right_check.png);width:5px;height:36px;"></div>
              </div>
              <!--name holder-->
              
              <!--subject holder-->
              <div style="float:left;">
              <div style="float:left;background-image:url(img/option_name_repeat.png);width:139px;height:26px;font-family:Arial, Helvetica, sans-serif;font-size:13px;font-weight:bold;color:#373838;padding-top:10px;padding-left:17px;"><a href="blog.php?do=list&amp;arr=blog_date" style="text-decoration:underline;color:#333;" title="Sort by Date">Published Date</a></div>
              <div style="float:left;background-image:url(img/option_right_check.png);width:5px;height:36px;"></div>
              </div>
              <!--subject holder-->
              
              <!--last visit-->
              <!--<div style="float:left;">
              <div style="float:left;background-image:url(img/option_name_repeat.png);width:160px;height:26px;font-family:Arial, Helvetica, sans-serif;font-size:13px;font-weight:bold;color:#373838;padding-top:10px;padding-left:17px;">Date</div>
              <div style="float:left;background-image:url(img/option_right_check.png);width:5px;height:36px;"></div>
              </div>-->
              <!--last visit-->
              
               <!--action holder-->
              <div style="float:left;">
              <div style="float:left;background-image:url(img/option_name_repeat.png);width:95px;height:26px;font-family:Arial, Helvetica, sans-serif;font-size:13px;font-weight:bold;color:#373838;padding-top:10px;padding-left:17px;">Display Blog</div>
              <div style="float:left;background-image:url(img/option_right_check.png);width:5px;height:36px;"></div>
              </div>
              
             <!-- <div style="float:left;">
              <div style="float:left;background-image:url(img/option_name_repeat.png);width:97px;height:26px;font-family:Arial, Helvetica, sans-serif;font-size:13px;font-weight:bold;color:#373838;padding-top:10px;padding-left:17px;">Action</div>
              <div style="float:left;background-image:url(img/option_right_check.png);width:5px;height:36px;"></div>
              </div>-->
              <!--action holder-->
              
          </td></tr>
         <!-- <tr style="background-color:#0281aa;"><td style="width:45px;text-align:center;padding-top:10px;padding-bottom:10px;border:1px solid #0281aa;border-right-color:#FFF;">
          <input name="CheckAll" type="checkbox" id="CheckAll" value="Y"  onClick="ClickCheckAll(this);" />
          </td>
          <td style="width:260px;text-align:center;padding-top:10px;padding-bottom:10px;border:1px solid #0281aa;border-right-color:#FFF;">
          Blog Title
          </td>
          <td style="width:120px;text-align:center;padding-top:10px;padding-bottom:10px;border:1px solid #0281aa;border-right-color:#FFF;">
          Published Date
          </td>
          <td style="width:100px;text-align:center;padding-top:10px;padding-bottom:10px;border:1px solid #0281aa;border-right-color:#FFF;">Display Blog</td>-->
          
          <!--<td style="width:60px;padding-top:10px;padding-bottom:10px;">-->
          <!--<a href="#" style="color:#FFF;">Edit</a>&nbsp;&nbsp;&nbsp;<a href="#" style="color:#FFF;">Delete</a>--><!--&nbsp;
          </td>-->
          
          </tr>
          <tr><td>
          <table cellpadding="0" cellspacing="0" border="0">
          <tr><td>
          <?php 
		  $i=0;
		  
		  if(isset($_GET['arr']))
		  { 
			   
			   $sort_by=$_GET['arr'];
			   //var_dump($sort_by);die();
			   if($sort_by=="blog_title") {
				$sort=$sort_by;
				$arrange="ASC";
			   }
			   else if($sort_by=="blog_date") {
				$sort=$sort_by;
				$arrange="DESC";
			   }
			   
			   $query="SELECT * FROM blogging WHERE dentist_id='".$dentist_id."' ORDER by $sort $arrange";
			   $res=mysql_query($query);
			   
			   }
			   else {
		  
		  $sql="SELECT * FROM blogging WHERE dentist_id='".$dentist_id."'";
		  $res=mysql_query($sql); }
		  //var_dump($res);die();
		 while($row=mysql_fetch_array($res))
		  {
			  //var_dump($row);die();
			  $i++;
			   
			   $f=$i%2;
	if($f==0)
	{ $back="#FFF";} 
	else
	{ $back="#e0eefa";}
		  ?>
          <tr style="background-color:<?php echo $back;?>;color:#333;font-size:15px;"><td style="width:58px;text-align:center;padding-top:10px;padding-bottom:10px;">
          <input type="checkbox" name="check[]"  id="check<?php echo $i;?>" value="<?php echo $row["id"];?>"/>
          </td>
          <td style="width:342px;text-align:left;padding-left:10px;padding-top:10px;padding-bottom:10px;">
          <a href="blog_view.php?id=<?php echo $row['id'];?>" style="text-decoration:none;color:#333;" title="View Blog" target="_blank"><?php echo $row['blog_title'];?></a>
          </td>
          <td style="width:160px;text-align:center;padding-top:10px;padding-bottom:10px;">
          <?php echo $row['blog_date'];?>
          </td>
          <td style="width:118px;text-align:center;padding-top:10px;padding-bottom:10px;">
          <?php echo $row['blog_display'];?>
          </td>
          <!--<td style="width:120px;padding-top:10px;padding-bottom:10px;text-align:center;">
          
          <table cellpadding="0" cellspacing="0" border="0">
          <tr>
          <td style="padding-left:20px;"><a href="blog.php?do=edit&amp;delid=<?php //echo $row['id'];?>" title="Edit"><img src="img/icon_address_option.png" width="18" height="18"/></a></td>
            <td style="padding-left:3px;"><a href="blog.php?id=<?php //echo $row["id"];?>" title="Delete" onclick="return onDelete();"><img src="img/icon_address_delete.png" width="15" height="15"/></a></td>
            </tr>
          </table>
         
          </td>-->
          </tr>
          <?php } ?>
          </td></tr></table></td></tr>
          </table>
         
          </td></tr>
       
          </table>
          
           <input type="hidden" name="hdnCount" value="<?php echo $i;?>">  
           
        
          
                </td>
            </tr>
              
             <tr><td style="padding-top:15px;"><!--<input type="submit" name="delete_all" value="Delete Selected" class="submit2" onclick="return onDelete();"/>--></td></tr>
             </form>
               <?php } ?>
          </table> 
       </td>
    
     
        
      </tr>
      <tr>
        <td colspan="2"><img src="img/4.jpg" width="739" height="6" alt="" /></td>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>

