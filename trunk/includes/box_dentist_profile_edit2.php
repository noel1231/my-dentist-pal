<?php
include('../config.php');
session_start();
$dentist_id=$_SESSION['id'];


if(isset($_POST['update'])) {

$fname=mysql_real_escape_string($_POST['fname']);
$mname=mysql_real_escape_string($_POST['mname']);
$sname=mysql_real_escape_string($_POST['sname']);
$gender=mysql_real_escape_string($_POST['gender']);
$bday=mysql_real_escape_string($_POST['bday']);
$license_number=mysql_real_escape_string($_POST['license_number']);
$services=mysql_real_escape_string($_POST['services']);
$lot=mysql_real_escape_string($_POST['lot']);
$city=mysql_real_escape_string($_POST['city']);
$province=mysql_real_escape_string($_POST['province']);
$phone=mysql_real_escape_string($_POST['phone']);
$cp=mysql_real_escape_string($_POST['cp']);

$school=mysql_real_escape_string($_POST['school']);
	$payment_method=mysql_real_escape_string($_POST['payment']);
	/*$monday_in=$row["monday_in"];
	$monday_out=$row["monday_out"];
	$tuesday_in=$row["tuesday_in"];
	$tuesday_out=$row["tuesday_out"];
	$wednesday_in=$row["wednesday_in"];
	$wednesday_out=$row["wednesday_out"];
	$thursday_in=$row["thursday_in"];
	$thursday_out=$row["thursday_out"];
	$friday_in=$row["friday_in"];
	$friday_out=$row["friday_out"];*/
	$specialty=mysql_real_escape_string($_POST['special']);

$dates=explode(" ",$bday);
$date_month=$dates[0];
$date_day=$dates[1];
$date_year=$dates[2];

$date_day=str_replace(",","",$date_day);
//var_dump($date_day);die();


$sql="UPDATE dentist_list SET 
first_name='".$fname."',
sur_name='".$sname."',
middle_name='".$mname."',
dentist_gender='".$gender."',
address_lot='".$lot."',
address_city='".$city."',
address_province='".$province."',
license_number='".$license_number."',
birth_month='".$date_month."',
birth_day='".$date_day."',
birth_year='".$date_year."',
services_offered='".$services."',
tel_number='".$phone."',
cel_number='".$cp."',
school_grad='".$school."',
payment_method='".$payment_method."',
specialty ='".$specialty."'
WHERE id='".$dentist_id."'
";
$res=mysql_query($sql);
//var_dump($res);die();

$uploaddir = 'dentist_img/';

  for ($i=0;$i<2;$i++)

  {
$ctr=$i+1; 

   if($_FILES['profile_pic']['name'])

   {

	$ctr=$i+1; 

    $uploadfile = $uploaddir . basename($_FILES['profile_pic']['name']);

    $ext = strtolower(substr($uploadfile,strlen($uploadfile)-3,3));

    if (preg_match("/(jpg|gif|png|bmp)/",$ext))

    {

	//giving the file name

	$now = time(); 

    while(file_exists($uploadfile = $uploaddir.$now.'-'.$_FILES['profile_pic']['name'])) 

	{ 

		$now++; 

	} 

     if (move_uploaded_file($_FILES['profile_pic']['tmp_name'], $uploadfile)) 

     {

      $sql = "UPDATE dentist_list SET profile_pic='".$uploadfile."' WHERE id=".$dentist_id."";//

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

}


echo "<script>

alert('Updated Successfully!');

window.location='dentist_profile.php';


</script>";



}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}

</style>

<script>

function onSave()  
{  
if(confirm('Do you want to save changes?')==true)  
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
  <!--<tr>
    <td>
    <table width="739" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td height="39" valign="top"><div>
          <div style="width:140px; margin-left:20px; margin-bottom:-2px; float:left;">
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
          </div>
        </div></td>
      </tr>-->
      <tr><td>
        <table cellpadding="0" cellspacing="0" border="0">
        <tr><td><img src="img/1.jpg" width="739" height="12" alt="" />
       
        </td></tr>
        </table></td>
      </tr>
      <tr>
        <td height="47" style="background:url(img/2.jpg);">
        <table cellpadding="0" cellspacing="0" border="0"><tr><td>
        <img src="img/menu_blue1.png" width="106" height="19" style="margin-top:-5px;margin-left:40px;"/></td>
        <td><!--<input type="button" name="edit" value="Edit" class="submit" onclick="window.location='dentist_profile.php?do=edit'"/>-->&nbsp;</td>
        </tr></table></td>
      </tr>
      <tr>
        <td valign="top" style="background:url(img/3.jpg);"><div style="margin-top:-8px; position: relative;">
          <table width="690" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td bgcolor="#FFFFFF" style="border-left:1px solid #a0a8ac; border-bottom:1px solid #a0a8ac; border-right:1px solid #a0a8ac;">
              <?php 
			  
$dentist_id=$_SESSION['id'];
$sql="SELECT * FROM dentist_list WHERE id='".$dentist_id."'";
$res=mysql_query($sql);
while($row=mysql_fetch_array($res)) {
	$fname=$row['first_name'];
	$mname=$row['middle_name'];
	$sname=$row['sur_name'];
	$name=$fname." ".$mname." ".$sname;
	
	$school=$row["school_grad"];
	$payment_method=$row["payment_method"];
	
	$monday_in=$row["monday_in"];
	$monday_out=$row["monday_out"];
	$tuesday_in=$row["tuesday_in"];
	$tuesday_out=$row["tuesday_out"];
	$wednesday_in=$row["wednesday_in"];
	$wednesday_out=$row["wednesday_out"];
	$thursday_in=$row["thursday_in"];
	$thursday_out=$row["thursday_out"];
	$friday_in=$row["friday_in"];
	$friday_out=$row["friday_out"];
	
	$monday=explode(" ",$monday_in);
	$monday_hr=$monday[0];
	$monday_stat=$monday[1];
	
	$monday2=explode(" ",$monday_out);
	$monday_hr2=$monday2[0];
	$monday_stat2=$monday2[1];
	
	$tuesday=explode(" ",$tuesday_in);
	$tuesday_hr=$tuesday[0];
	$tuesday_stat=$tuesday[1];
	
	$tuesday2=explode(" ",$tuesday_out);
	$tuesday_hr2=$tuesday2[0];
	$tuesday_stat2=$tuesday2[1];
	
	$wednesday=explode(" ",$wednesday_in);
	$wednesday_hr=$wednesday[0];
	$wednesday_stat=$wednesday[1];
	
	$wednesday2=explode(" ",$wednesday_out);
	$wednesday_hr2=$wednesday2[0];
	$wednesday_stat2=$wednesday2[1];
	
	$thursday=explode(" ",$thursday_in);
	$thursday_hr=$thursday[0];
	$thursday_stat=$thursday[1];
	
	$thursday2=explode(" ",$thursday_out);
	$thursday_hr2=$thursday2[0];
	$thursday_stat2=$thursday2[1];
	
	$friday=explode(" ",$friday_in);
	$friday_hr=$friday[0];
	$friday_stat=$friday[1];
	
	$friday2=explode(" ",$friday_out);
	$friday_hr2=$friday2[0];
	$friday_stat2=$friday2[1];
	
	var_dump($monday_hr);var_dump($monday_stat);
	echo "<br>";
	var_dump($monday_hr2);var_dump($monday_stat2);
	echo "<br>";
	var_dump($tuesday_hr);var_dump($tuesday_stat);
	echo "<br>";
	var_dump($tuesday_hr2);var_dump($tuesday_stat2);
	echo "<br>";
	var_dump($wednesday_hr);var_dump($wednesday_stat);
	echo "<br>";
	var_dump($wednesday_hr2);var_dump($wednesday_stat2);
	echo "<br>";
	var_dump($thursday_hr);var_dump($thursday_stat);
	echo "<br>";
	var_dump($thursday_hr2);var_dump($thursday_stat2);
	echo "<br>";
	var_dump($friday_hr);var_dump($friday_stat);
	echo "<br>";
	var_dump($friday_hr2);var_dump($friday_stat2);
	echo "<br>";
	
	
	
	$specialty=$row["specialty"];
$m=$row['birth_month'];
$d=$row['birth_day'];
$y=$row['birth_year'];

if($m=="January") {
	$m=1;
}
else if($m=="February") {
	$m=2;
}
else if($m=="March") {
	$m=3;
}
else if($m=="April") {
	$m=4;
}
else if($m=="May") {
	$m=5;
}
else if($m=="June") {
	$m=6;
}
else if($m=="July") {
	$m=7;
}
else if($m=="August") {
	$m=8;
}
else if($m=="September") {
	$m=9;
}
else if($m=="October") {
	$m=10;
}
else if($m=="November") {
	$m=11;
}
else if($m=="December") {
	$m=12;
}
else {
$m="";	
}

$gender=$row['dentist_gender'];
if($gender=="male") {
$sel="checked";
$sels="";
}
else
{
$sel="";
$sels="checked";
}



$ageTime = mktime(0, 0, 0, $m, $d, $y); // Get the person's birthday timestamp
//var_dump($ageTime);die();
$t = time(); // Store current time for consistency
$age = ($ageTime < 0) ? ( $t + ($ageTime * -1) ) : $t - $ageTime;
$year = 60 * 60 * 24 * 365;
$ageYears = $age / $year;

//echo 'You are ' . floor($ageYears) . ' years old.';

?>
              <!--content-->
              <form method="post" action="" enctype="multipart/form-data">
              <div style="margin:0 auto;width:650px;margin-top:20px;">
              <!--<div style="clear:both;height:30px;"></div>-->
              <table cellpadding="0" cellspacing="0" border="0" style="font-family:Arial, Helvetica, sans-serif;font-size:13px;">
              <tr><td style="padding-left:136px;width:85%;">
              <!--profile--><table cellpadding="0" cellspacing="0" border="0"> 
              <tr><td style="text-align:right;color:#373838;font-weight:bold;">
              Name: 
              </td> <td style="color:#8c8c8c;padding-left:20px;font-weight:bold;"><input type="text" name="fname" value="<?php echo $fname;?>" />
             <br />
             <input type="text" name="mname" value="<?php echo $mname;?>" />
             <br />
             <input type="text" name="sname" value="<?php echo $sname;?>" />
              </td></tr>
              <?php /*<tr><td style="text-align:right;color:#373838;font-weight:bold;padding-top:8px;">
              Age: 
              </td> <td style="color:#8c8c8c;padding-left:20px;font-weight:bold;padding-top:8px;"><input type="text" value="<?php echo floor($ageYears);?>" name="age" /></td></tr>*/?>
              <tr><td style="text-align:right;color:#373838;font-weight:bold;padding-top:8px;">
              Gender: 
              </td> <td style="color:#8c8c8c;padding-left:20px;font-weight:bold;padding-top:8px;"><input type="radio" name="gender" value="male" <?php echo $sel;?>/>Male &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="gender" value="female" <?php echo $sels;?>/>Female</td></tr>
              <tr><td style="text-align:right;color:#373838;font-weight:bold;padding-top:8px;">
             Birthday: 
              </td> <td style="color:#8c8c8c;padding-left:20px;font-weight:bold;padding-top:8px;"><?php 
			  $month=$row['birth_month'];$day=$row['birth_day'];$year=$row['birth_year'];?>
             <input type="text" name="bday" value="<?php echo $month." ".$day.", ".$year;?>" />
              </td></tr>
              <!--profile--></table>
              </td>
              <!--picture-->
              <td>
              <table cellpadding="0" cellspacing="0" border="0">
              <tr><td>
              <img src="<?php echo $row['profile_pic'];?>"/>
              </td></tr>
              <tr>
              <td>
              <input type="file" name="profile_pic" />
              </td>
              </tr></table>
              </td>
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
      </tr><!--first content-->
      
        <!--second content--> 
       <tr>
        <td height="47" style="background:url(img/2.jpg);"><img src="img/menu_blue2.png" width="130" height="22" style="margin-top:-5px;margin-left:40px;"/></td>
      </tr>
        <tr>
        <td valign="top" style="background:url(img/3.jpg);"><div style="margin-top:-8px; position: relative;">
          <table width="690" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td bgcolor="#FFFFFF" style="border-left:1px solid #a0a8ac; border-bottom:1px solid #a0a8ac; border-right:1px solid #a0a8ac;">
              
                <!--content-->
              <div style="margin:0 auto;width:650px;margin-top:20px;">
              <!--<div style="clear:both;height:30px;"></div>-->
              <table cellpadding="0" cellspacing="0" border="0" style="font-family:Arial, Helvetica, sans-serif;font-size:13px;">
              <tr><td style="padding-left:40px;width:85%;">
              <!--profile--><table cellpadding="0" cellspacing="0" border="0"> 
              <tr><td style="text-align:right;color:#373838;font-weight:bold;">
              Dentist License Number: 
              </td> 
              <td style="color:#8c8c8c;padding-left:20px;font-weight:bold;">
			  
			  <input type="text" name="license_number" value="<?php echo $row['license_number'];?>" /></td></tr>
              <tr><td style="text-align:right;color:#373838;font-weight:bold;padding-top:10px;">
              Services: 
              </td> <td style="color:#8c8c8c;padding-left:20px;font-weight:bold;padding-top:10px;">
			  
			  <textarea name="services" style="width:350px;height:130px;"><?php echo strip_tags(nl2br($row['services_offered']));?></textarea></td></tr>
           <tr><td style="text-align:right;color:#373838;font-weight:bold;padding-top:10px;">
           Graduated at:
           </td>
         

           <td style="color:#8c8c8c;padding-left:20px;font-weight:bold;padding-top:10px;">
		   <input type="text" name="school" value="<?php echo $school;?>"/></td>
           </tr>
           
            <tr><td style="text-align:right;color:#373838;font-weight:bold;padding-top:10px;">
           Payment method:
           </td>
         

           <td style="color:#8c8c8c;padding-left:20px;font-weight:bold;padding-top:10px;">
		   <input type="text" name="payment" value="<?php echo $payment_method;?>" /></td>
           </tr>
           
              
            <tr><td style="text-align:right;color:#373838;font-weight:bold;padding-top:10px;">
           Specialty:
           </td>
         

           <td style="color:#8c8c8c;padding-left:20px;font-weight:bold;padding-top:10px;">
		   <input type="text" name="special" value="<?php echo $specialty;?>" /></td>
           </tr>
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
      
      
        <!--third content--> 
       <tr>
        <td height="47" style="background:url(img/2.jpg);"><img src="img/menu_blue3.png" width="119" height="17" style="margin-top:-5px;margin-left:40px;"/></td>
      </tr>
        <tr>
        <td valign="top" style="background:url(img/3.jpg);padding-bottom:10px;"><div style="margin-top:-8px; position: relative;">
          <table width="690" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td bgcolor="#FFFFFF" style="border-left:1px solid #a0a8ac; border-bottom:1px solid #a0a8ac; border-right:1px solid #a0a8ac;">
              
                <!--content-->
              <div style="margin:0 auto;width:650px;margin-top:20px;">
              <!--<div style="clear:both;height:30px;"></div>-->
              <table cellpadding="0" cellspacing="0" border="0" style="font-family:Arial, Helvetica, sans-serif;font-size:13px;">
              <tr><td style="padding-left:96px;width:85%;" valign="top">
              <!--profile--><table cellpadding="0" cellspacing="0" border="0"> 
              <tr><td valign="top" style="text-align:right;color:#373838;font-weight:bold;">
             Address: 
              </td> 
              <td><table cellpadding="0" cellspacing="0" border="0">
              <tr>
              <td style="padding-left:20px;">
			  Lot# &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="lot" value="<?php echo $row['address_lot'];?>">
              </td></tr>
              <tr><td style="padding-left:20px;">
              City&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="city" style="margin-left:4px;" value="<?php echo $row['address_city'];?>" /></td></tr>
              <tr><td style="padding-left:20px;">
              Province&nbsp;&nbsp;<input type="text" name="province" value="<?php echo $row['address_province'];?>" />
              </td></tr>
              </table></td></tr>
              <tr><td style="text-align:right;color:#373838;font-weight:bold;padding-top:8px;">
             Landline:
              </td> <td style="color:#8c8c8c;padding-left:20px;font-weight:bold;padding-top:8px;">
			  <input type="text" name="phone" value="<?php echo $row['tel_number'];?>" /></td></tr>
              <tr><td style="text-align:right;color:#373838;font-weight:bold;padding-top:8px;">
              Mobile Number:
              </td> <td style="color:#8c8c8c;padding-left:20px;font-weight:bold;padding-top:8px;">
			  <input type="text" name="cp" value="<?php echo $row['cel_number'];?>" /></td></tr>
              
              <tr><td style="padding-top:12px;">
              Office Hours
              </td></tr>
              
              <tr><td style="padding-top:10px;">
              
             
         
Monday: </td>
<td style="padding-left:10px;">
 <table cellpadding="0" cellspacing="0" border="0">
      <tr><td>
<select name="from1">
<?php 
for($i=1;$i<=12;$i++) { ?>
<option value="<?php echo $i;?>:00" <?php echo (($monday_hr==$i)?"selected":"")?>><?php echo $i;?>:00</option>	
<?php }
?>
</select>
&nbsp;
<select name="from11">
<option value="a.m." <?php echo (($monday_stat=='a.m.')?"selected":"")?>>a.m.</option>
<option value="p.m." <?php echo (($monday_stat=='p.m.')?"selected":"")?>>p.m.</option>
</select>
&nbsp;&nbsp;
to
&nbsp;&nbsp;
<select name="to1">
<?php 
for($i=1;$i<=12;$i++) { ?>
<option value="<?php echo $i;?>:00" <?php echo (($monday_hr2==$i)?"selected":"")?>><?php echo $i;?>:00</option>	
<?php }
?>
</select>
&nbsp;
<select name="to11">
<option value="a.m." <?php echo (($monday_stat2=='a.m.')?"selected":"")?>>a.m.</option>
<option value="p.m." <?php echo (($monday_stat2=='p.m.')?"selected":"")?>>p.m.</option>
</select>
</td></tr></table>
</td></tr>
<tr><td>
Tuesday: </td>
<td style="padding-left:10px;">
 <table cellpadding="0" cellspacing="0" border="0">
     <tr><td>
<select name="from2">
<?php 
for($i=1;$i<=12;$i++) { ?>
<option value="<?php echo $i;?>:00" <?php echo (($tuesday_hr==$i)?"selected":"")?>><?php echo $i;?>:00</option>	
<?php }
?>
</select>
&nbsp;
<select name="from22">
<option value="a.m." <?php echo (($tuesday_stat=='a.m.')?"selected":"")?>>a.m.</option>
<option value="p.m." <?php echo (($tuesday_stat=='p.m.')?"selected":"")?>>p.m.</option>
</select>
&nbsp;&nbsp;
to
&nbsp;&nbsp;
<select name="to2">
<?php 
for($i=1;$i<=12;$i++) { ?>
<option value="<?php $i;?>:00" <?php echo (($tuesday_hr2==$i)?"selected":"")?>><?php echo $i;?>:00</option>	
<?php }
?>
</select>
&nbsp;
<select name="to22">
<option value="a.m." <?php echo (($tuesday_stat2=='a.m.')?"selected":"")?>>a.m.</option>
<option value="p.m." <?php echo (($tuesday_stat2=='p.m.')?"selected":"")?>>p.m.</option>
</select>
</td></tr></table>
</td></tr>
<tr><td>
Wednesday:</td>
<td style="padding-left:10px;">
 <table cellpadding="0" cellspacing="0" border="0">
     <tr><td>
<select name="from3">
<?php 
for($i=1;$i<=12;$i++) { ?>
<option value="<?php echo $i;?>:00" <?php echo (($wednesday_hr==$i)?"selected":"")?>><?php echo $i;?>:00</option>	
<?php }
?>
</select>
&nbsp;
<select name="from33">
<option value="a.m." <?php echo (($wednesday_stat=='a.m.')?"selected":"")?>>a.m.</option>
<option value="p.m." <?php echo (($wednesday_stat=='p.m.')?"selected":"")?>>p.m.</option>
</select>
&nbsp;&nbsp;
to
&nbsp;&nbsp;
<select name="to3">
<?php 
for($i=1;$i<=12;$i++) { ?>

<option value="<?php echo $i;?>:00" <?php echo (($wednesday_hr2==$i)?"selected":"")?>><?php echo $i;?>:00</option>	
<?php }
?>
</select>
&nbsp;
<select name="to33">
<option value="a.m." <?php echo (($wednesday_stat2=='a.m.')?"selected":"")?>>a.m.</option>
<option value="p.m." <?php echo (($wednesday_stat2=='p.m.')?"selected":"")?>>p.m.</option>
</select>
</td></tr></table>
</td></tr>
<tr><td>
Thursday: </td>
<td style="padding-left:10px;">
 <table cellpadding="0" cellspacing="0" border="0">
     <tr><td>
<select name="from4">
<?php 
for($i=1;$i<=12;$i++) { ?>

<option value="<?php echo $i;?>:00" <?php echo (($thursday_hr==$i)?"selected":"")?>><?php echo $i;?>:00</option>	
<?php }
?>
</select>
&nbsp;
<select name="from44">
<option value="a.m." <?php echo (($thursday_stat=='a.m.')?"selected":"")?>>a.m.</option>
<option value="p.m." <?php echo (($thursday_stat=='p.m.')?"selected":"")?>>p.m.</option>
</select>
&nbsp;&nbsp;
to
&nbsp;&nbsp;
<select name="to4">
<?php 
for($i=1;$i<=12;$i++) { ?>
<option value=<?php echo $i;?>:00 <?php echo (($thursday_hr2==$i)?"selected":"")?>><?php echo $i;?>:00</option>
<?php
}
?>
</select>
&nbsp;
<select name="to44">
<option value="a.m." <?php echo (($thursday_stat2=='a.m.')?"selected":"")?>>a.m.</option>
<option value="p.m." <?php echo (($thursday_stat2=='p.m.')?"selected":"")?>>p.m.</option>
</select>
</td></tr></table>
</td></tr>
<tr><td>
Friday: </td>
<td style="padding-left:10px;">
 <table cellpadding="0" cellspacing="0" border="0">
     <tr><td>
<select name="from5">
<?php 
for($i=1;$i<=12;$i++) { ?>
<option value="<?php echo $i;?>:00" <?php echo (($friday_hr==$i)?"selected":"")?>><?php echo $i;?>:00</option>	
<?php
}
?>
</select>
&nbsp;
<select name="from55">
<option value="a.m." <?php echo (($friday_stat=='a.m.')?"selected":"")?>>a.m.</option>
<option value="p.m." <?php echo (($friday_stat=='p.m.')?"selected":"")?>>p.m.</option>
</select>
&nbsp;&nbsp;
to
&nbsp;&nbsp;
<select name="to5">
<?php 
for($i=1;$i<=12;$i++) {
	?>
<option value="<?php echo $i;?>:00" <?php echo (($friday_hr2==$i)?"selected":"")?>><?php echo $i;?>:00</option>	
<?php
}
?>
</select>
&nbsp;
<select name="to55">
<option value="a.m." <?php echo (($friday_stat2=='a.m.')?"selected":"")?>>a.m.</option>
<option value="p.m." <?php echo (($friday_stat2=='p.m.')?"selected":"")?>>p.m.</option>
</select>
</select>

              
              </td></tr></table>
              </td></tr>
              
              
              
              <tr><td style="padding-top:20px;">
              <table cellpadding="0" cellspacing="0" border="0">
              <tr><td>
              <input type="submit" name="update" value="Save" class="submit2" onclick="return onSave();"/>
              </td>
              <td style="padding-left:10px;">
             
              <input type="button" name="cancel" value="Cancel" class="submit2" onclick="window.location='dentist_profile.php'"/>
              </td>
              </tr></table>
              </td></tr>
              
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
              <?php } ?>
              </td>
            </tr>
          </table>
        </div></form></td>
      </tr><!--third-content-->
      
      
      <tr>
        <td><img src="img/4.jpg" width="739" height="6" alt="" /></td>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>
