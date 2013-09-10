<?php 
if(isset($_POST['save']))
{
$ban_type=mysql_real_escape_string($_POST['banner_type']);
$date_activate=mysql_real_escape_string($_POST['date_activate']);
$date_end=mysql_real_escape_string($_POST['date_end']);
$banner_name=mysql_real_escape_string($_POST['banner_name']);
$banner_link=mysql_real_escape_string($_POST['banner_link']);
$ban_pos=mysql_real_escape_string($_POST['banner_position']);


$date=explode("/",$date_activate);
$date_month=$date[0];
$date_day=$date[1];
$date_year=$date[2];

$date_activate=$date_year."-".$date_month."-".$date_day;

$dates=explode("/",$date_end);
$date_m=$dates[0];
$date_d=$dates[1];
$date_y=$dates[2];

$date_end=$date_y."-".$date_m."-".$date_d;


$sql="INSERT INTO banner(banner_type,date_to_activate,date_to_end,banner_name,banner_link,banner_position) VALUES('$ban_type','$date_activate','$date_end','$banner_name','$banner_link','$ban_pos')";
$res=mysql_query($sql);

$new_id=mysql_insert_id();



if ($_SERVER['REQUEST_METHOD']=='POST') {

  $success = 0;

  $fail = 0;

//
  $uploaddir = 'banner/';

  for ($i=0;$i<2;$i++)

  {
$ctr=$i+1; 

//
//var_dump($_POST);die();
   if($_FILES['userfile1']['name'])

   {


	$ctr=$i+1; 

    $uploadfile = $uploaddir . basename($_FILES['userfile1']['name']);




    $ext = strtolower(substr($uploadfile,strlen($uploadfile)-3,3));

    if (preg_match("/(jpg|gif|png|bmp)/",$ext))

    {

	//giving the file name

	$now = time(); 

    while(file_exists($uploadfile = $uploaddir.$now.'-'.$_FILES['userfile1']['name'])) 

	{ 

		$now++; 

	} 

     if (move_uploaded_file($_FILES['userfile1']['tmp_name'], $uploadfile)) 

     {

      $sql = "UPDATE banner SET banner_file='".$uploadfile."' WHERE id='".$new_id."'";//

		$res=mysql_query($sql);

	  $success++;

     } 

     else 

     {

     $message = "Error Uploading the file. Retry after sometime.\n";

     $fail++;

     }

    }

    else

    {

     $fail++;

    }

   //}

  }

  $message = "<br> Number of files Uploaded:".$success."<br>*Restart the page to see the changes. ";

}}



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
  
   <script>
  $(document).ready(function() {
    $("#datepicker2").datepicker();
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
                <td width="6"><img src="../img/t1.jpg" width="6" height="41" alt="" /></td>
                <td width="661" align="center" style="background: url(../img/t3.jpg);"><a href="banner_pending.php" style="font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#3e4447;text-decoration:none;">Pending</a></td>
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
          </div>-->
          <div style="width:130px; margin-left:10px; margin-bottom:-2px; float:left; z-index:999999999">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="6"><img src="../img/u1.jpg" width="6" height="41" alt="" /></td>
                <td width="661" align="center" style="background: url(../img/u3.jpg);"><a href="banner_add.php" style="font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#3e4447;text-decoration:none;">Add New</a></td>
                <td width="6"><img src="../img/u2.jpg" width="6" height="41" alt="" /></td>
              </tr>
            </table>
          </div>
        </div></td>
      </tr>
      <tr>
        <td colspan="2"><img src="../img/1.jpg" width="739" height="12" alt="" /></td>
      </tr>
    
      <tr>
      
        <td height="47" style="background:url(../img/2.jpg);">
        <table width="100%"><tr><td>
        <!--<img src="../img/read_message_blue.png" height="21" width="177" style="margin-top:-8px;margin-left:23px;"/>-->
        <div style="margin-left:30px;margin-top:-8px;">
        <span style="font-family:Arial, Helvetica, sans-serif;color:#FFF;font-size:16px;font-weight:bold;">
       Add New Banner
        </span>
        </div>
        </td>
        <!--td align="right"><input type="text" name="search_field" class="search" value="Search contact list" onfocus="if (this.value == 'Search contact list') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Search contact list';}" style="color:#999;margin-right:10px;margin-top:-4px;"/>
     <input type="submit" name="search" value="SEARCH" class="submit" style="margin-right:17px;margin-top:-4px;" /></td>--></tr></table></td>
      </tr>
      <tr>
        <td colspan="2" valign="top" style="background:url(../img/3.jpg); padding-bottom:10px;"><div style="margin-top:-8px; position: relative;">
          <table width="690" border="0" align="center" cellpadding="0" cellspacing="0" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;color:#333;">
            <tr>
              <td bgcolor="#FFFFFF" style="border-left:1px solid #a0a8ac; border-bottom:1px solid #a0a8ac; border-right:1px solid #a0a8ac;">
            <div style="clear:both;height:20px;"></div>
            <div style="margin: 0 auto;width:400px;">
            <form method="post" action="" enctype="multipart/form-data">
            <table cellpadding="0" cellspacing="0" border="0">
            <tr><td style="width:130px;text-align:right;">
            Banner Type:
            </td>
            <td style="padding-left:20px;">
            <select name="banner_type" style="width:200px;font-size:14px;">
            <option value="side">square (side)</option>
            <option value="bottom">rectangle (bottom)</option>
            </select>
            </td>
            </tr>
            <tr><td>&nbsp;
            
            </td>
            <td style="padding-left:20px;padding-top:8px;">
             <table cellpadding="0" cellspacing="0" border="0">
             <tr><td><select name="banner_position" style="width:200px;font-size:14px;">
            <option value="1">top left</option>
            <option value="2">top right</option>
            <option value="3">bottom left</option>
            <option value="4">bottom right</option>
            </select></td></tr>
            <tr><td style="width:130px;text-align:left;font-style:italic;font-size:13px;color:#F00;">If banner type is square indicate here what's the position</td></tr></table>
            </td>
            </tr>
            <tr><td style="width:130px;text-align:right;padding-top:8px;">
            Date to activate
            </td>
            <td style="padding-left:20px;padding-top:8px;">
            <input type="text" name="date_activate" id="datepicker" style="width:200px;"/>
            </td>
            </tr>
            <tr><td style="width:130px;text-align:right;padding-top:8px;">
            Date to end
            </td>
            <td style="padding-left:20px;padding-top:8px;">
            <input type="text" name="date_end" id="datepicker2" style="width:200px;font-size:14px;"/>
            </td>
            </tr>
            <tr><td style="width:130px;text-align:right;padding-top:8px;">
            Banner name
            </td>
            <td style="padding-left:20px;padding-top:8px;">
            <input type="text" name="banner_name" style="width:200px;font-size:14px;"/>
            </td>
            </tr>
             <tr><td style="width:130px;text-align:right;padding-top:8px;">
            Banner link
            </td>
            <td style="padding-left:20px;padding-top:8px;">
            <input type="text" name="banner_link" style="width:200px;font-size:14px;" value="http://"/>
            </td>
            </tr>
            <tr><td style="width:130px;text-align:right;padding-top:8px;">
            Upload banner
            </td>
            <td style="padding-left:20px;padding-top:8px;">
            <input type="file" name="userfile1" style="width:200px;"/>
            </td>
            </tr>
            <tr><td style="width:130px;text-align:right;padding-top:8px;">&nbsp;
            
            </td>
            <td style="padding-left:20px;padding-top:8px;">
            <input type="submit" name="save" value="Save" class="submit2"/>&nbsp;&nbsp;&nbsp;
            <input type="button" name="cancel" value="Cancel" class="submit2" onclick="window.location='banner_adds.php'"/>
            </td>
            </tr>
            </table>
            </form>
            </div>
              
              <div style="clear:both;height:20px;"></div>
                </td>
            </tr>
            
             
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
