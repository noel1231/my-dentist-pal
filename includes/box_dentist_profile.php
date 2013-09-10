<?php
include('config.php');
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
        <table cellpadding="0" cellspacing="0" border="0" width="100%"><tr><td>
        <img src="img/menu_blue1.png" width="106" height="19" style="margin-top:-5px;margin-left:40px;"/></td>
        <td align="right" style="padding-right:20px;"><input type="button" name="edit" value="Edit" class="submit" onclick="window.location='dentist_profile.php?do=edit'" style="margin-top:-6px;"/></td>
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

$ageTime = mktime(0, 0, 0, $m, $d, $y); // Get the person's birthday timestamp
//var_dump($ageTime);die();
$t = time(); // Store current time for consistency
$age = ($ageTime < 0) ? ( $t + ($ageTime * -1) ) : $t - $ageTime;
$year = 60 * 60 * 24 * 365;
$ageYears = $age / $year;

//echo 'You are ' . floor($ageYears) . ' years old.';

?>
              <!--content-->
              <div style="margin:0 auto;width:650px;margin-top:20px;">
              <!--<div style="clear:both;height:30px;"></div>-->
              <table cellpadding="0" cellspacing="0" border="0" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">
              <tr><td style="padding-left:136px;width:85%;">
              <!--profile--><table cellpadding="0" cellspacing="0" border="0"> 
              <tr><td style="text-align:right;color:#373838;font-weight:bold;">
              Name: 
              </td> <td style="color:#8c8c8c;padding-left:20px;font-weight:bold;"><?php echo $name;?></td></tr>
              <tr><td style="text-align:right;color:#373838;font-weight:bold;padding-top:8px;">
              Age: 
              </td> <td style="color:#8c8c8c;padding-left:20px;font-weight:bold;padding-top:8px;"><?php echo floor($ageYears);?></td></tr>
              <tr><td style="text-align:right;color:#373838;font-weight:bold;padding-top:8px;">
              Gender: 
              </td> <td style="color:#8c8c8c;padding-left:20px;font-weight:bold;padding-top:8px;"><?php echo $row['dentist_gender'];?></td></tr>
              <tr><td style="text-align:right;color:#373838;font-weight:bold;padding-top:8px;">
             Birthday: 
              </td> <td style="color:#8c8c8c;padding-left:20px;font-weight:bold;padding-top:8px;"><?php echo $row['birth_month']." ".$row['birth_day'].", ".$row['birth_year'];?></td></tr>
              <!--profile--></table>
              </td>
              <!--picture-->
              <td>
              <img src="<?php echo $row['profile_pic'];?>" width="150px;" height="150px;"/>
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
              <table cellpadding="0" cellspacing="0" border="0" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">
              <tr><td style="padding-left:4px;width:85%;">
              <!--profile--><table cellpadding="0" cellspacing="0" border="0"> 
              <tr><td style="text-align:right;color:#373838;font-weight:bold;width:200px;">
              Dentist License Number: 
              </td> 
              <td style="color:#8c8c8c;padding-left:20px;font-weight:bold;"><?php echo $row['license_number'];?></td></tr>
              <tr><td style="text-align:right;color:#373838;font-weight:bold;padding-top:10px;" valign="top">
              Services: 
              </td> <td style="color:#8c8c8c;padding-left:20px;font-weight:bold;padding-top:10px;"><?php echo nl2br($row['services_offered']);?></td></tr>
           <tr><td style="text-align:right;color:#373838;font-weight:bold;padding-top:10px;">
           Graduated from:
           </td>
         

           <td style="color:#8c8c8c;padding-left:20px;font-weight:bold;padding-top:10px;"><?php echo $school;?></td>
           </tr>
           
            <tr><td style="text-align:right;color:#373838;font-weight:bold;padding-top:10px;">
           Payment method:
           </td>
         

           <td style="color:#8c8c8c;padding-left:20px;font-weight:bold;padding-top:10px;"><?php echo $payment_method;?></td>
           </tr>
           
              
            <tr><td style="text-align:right;color:#373838;font-weight:bold;padding-top:10px;">
           Specialty:
           </td>
         

           <td style="color:#8c8c8c;padding-left:20px;font-weight:bold;padding-top:10px;"><?php echo $specialty;?></td>
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
              <table cellpadding="0" cellspacing="0" border="0" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">
              <tr><td style="padding-left:96px;width:85%;">
              <!--profile--><table cellpadding="0" cellspacing="0" border="0"> 
              <tr><td style="text-align:right;color:#373838;font-weight:bold;">
             Address: 
              </td> <td style="color:#8c8c8c;padding-left:20px;font-weight:bold;"><?php echo $row['address_lot']." ".$row['address_city'];?></td></tr>
              <tr><td style="text-align:right;color:#373838;font-weight:bold;padding-top:8px;">
             Landline:
              </td> <td style="color:#8c8c8c;padding-left:20px;font-weight:bold;padding-top:8px;"><?php echo $row['tel_number'];?></td></tr>
              <tr><td style="text-align:right;color:#373838;font-weight:bold;padding-top:8px;">
              Mobile Number:
              </td> <td style="color:#8c8c8c;padding-left:20px;font-weight:bold;padding-top:8px;"><?php echo $row['cel_number'];?></td></tr>
              
              <tr><td style="text-align:right;color:#373838;font-weight:bold;padding-top:8px;">
              Email Address:
              </td> <td style="color:#8c8c8c;padding-left:20px;font-weight:bold;padding-top:8px;"><?php echo $row['email'];?></td></tr>
              
              
              <tr><td style="text-align:right;color:#373838;font-weight:bold;padding-top:8px;">
              Office hours
              </td></tr>
              <tr><td style="text-align:right;color:#373838;font-weight:bold;padding-top:8px;">
              Monday:
              </td> <td style="color:#8c8c8c;padding-left:20px;font-weight:bold;padding-top:8px;"><?php echo $monday_in;?> &nbsp;to &nbsp; <?php echo $monday_out;?></td></tr>
              <tr><td style="text-align:right;color:#373838;font-weight:bold;padding-top:8px;">
              Tuesday:
              </td> <td style="color:#8c8c8c;padding-left:20px;font-weight:bold;padding-top:8px;"><?php echo $tuesday_in;?> &nbsp;to &nbsp;<?php echo $tuesday_out;?></td></tr>
                 <tr><td style="text-align:right;color:#373838;font-weight:bold;padding-top:8px;">
              Wednesday:
              </td> <td style="color:#8c8c8c;padding-left:20px;font-weight:bold;padding-top:8px;"><?php echo $wednesday_in;?> &nbsp;to &nbsp; <?php echo $wednesday_out;?></td></tr>
              <tr><td style="text-align:right;color:#373838;font-weight:bold;padding-top:8px;">
              Thursday:
              </td> <td style="color:#8c8c8c;padding-left:20px;font-weight:bold;padding-top:8px;"><?php echo $thursday_in;?> &nbsp;to &nbsp; <?php echo $thursday_out;?></td></tr>
               <tr><td style="text-align:right;color:#373838;font-weight:bold;padding-top:8px;">
              Friday:
              </td> <td style="color:#8c8c8c;padding-left:20px;font-weight:bold;padding-top:8px;"><?php echo $friday_in;?> &nbsp;to &nbsp; <?php echo $friday_out;?></td></tr>
            
              
              
          
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
        </div></td>
      </tr><!--third-content-->
      
      
      <tr>
        <td><img src="img/4.jpg" width="739" height="6" alt="" /></td>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>
