<?php 
session_start();
//var_dump($_SESSION);die();
if(!$_SESSION["id"])
{
    //Do not show protected data, redirect to login...
    header('Location: dentist_login.php');
}

$x=$_SESSION['id'];
//var_dump($x);die();
$page_now="2";

include('config.php');

if(isset($_POST['next']))
{
$date=$_POST["date_entry"];
$bday=mysql_real_escape_string($_POST["date"]);
$name=mysql_real_escape_string($_POST["patient_name"]);
//$age=mysql_real_escape_string($_POST["patient_age"]);
$what=mysql_real_escape_string($_POST["tooth"]);
$gender=mysql_real_escape_string($_POST["gender"]);
$patient_address=mysql_real_escape_string($_POST["patient_address"]);
$patient_contact=mysql_real_escape_string($_POST["patient_contact"]);
$patient_status=mysql_real_escape_string($_POST["status"]);
$referred=mysql_real_escape_string($_POST["patient_reffered"]);
$patient_work=mysql_real_escape_string($_POST["patient_occupation"]);
$work_add=mysql_real_escape_string($_POST["patient_bus_add"]);
$work_phone=mysql_real_escape_string($_POST["patient_bus_phone"]);
$spouse=mysql_real_escape_string($_POST["patient_spouse_name"]);
$spouse_phone=mysql_real_escape_string($_POST["spouse_phone"]);
$spouse_work=mysql_real_escape_string($_POST["spouse_occupation"]);
$guardian=mysql_real_escape_string($_POST["patient_guardian"]);
$guardian_phone=mysql_real_escape_string($_POST["guardian_phone"]);
$guardian_add=mysql_real_escape_string($_POST["guardian_address"]);
$none="";
//$patient_pic=mysql_real_escape_string($_POST["patient_pic"]);

//$new_bday="$bday_year"."/$bday_month/"."$bday_day";
$dates=explode("/",$bday);
					$m=$dates[0];
					$d=$dates[1];
					$y=$dates[2];

$ageTime = mktime(0, 0, 0, $m, $d, $y); // Get the person's birthday timestamp
//var_dump($ageTime);die();
$t = time(); // Store current time for consistency
$age = ($ageTime < 0) ? ( $t + ($ageTime * -1) ) : $t - $ageTime;
$year = 60 * 60 * 24 * 365;
$ageYears = $age / $year;
$age_now=floor($ageYears);

/*if($age_now<=10) {
$what="2";	
}
else
{
$what="1";	
}*/


$sql="INSERT INTO patient_list (
date_of_entry,
patient_bday,
patient_name,
patient_age,
patient_gender,
patient_address,
patient_phone,
patient_marital_status,
referred_by,
patient_occupation,
occupation_address,
occupation_phone,
spouse_name,
spouse_phone,
spouse_occupation,
patient_guardian,
guardian_phone,
guardian_address,
dentist_id,
what_chart
								
) VALUES(NOW(),
'$bday',
'$name',
'$age_now',
'$gender',
'$patient_address',
'$patient_contact',
'$patient_status',
'$referred',
'$patient_work',
'$work_add',
'$work_phone',
'$spouse',
'$spouse_phone',
'$spouse_work',
'$guardian',
'$guardian_phone',
'$guardian_add',
'$x',
'$what')";


//$sql="INSERT INTO patient_list (date_of_birth) VALUES('$bday')";
$res=mysql_query($sql);


$new=mysql_insert_id();

//var_dump($new);


if ($_SERVER['REQUEST_METHOD']=='POST') {

  $success = 0;

  $fail = 0;


  $uploaddir = 'patient_picture/';

  for ($i=0;$i<2;$i++)

  {
$ctr=$i+1; 

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

      $sql = "UPDATE patient_list SET patient_picture='".$uploadfile."' WHERE id=".$new." AND dentist_id='".$x."'";//

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
}

}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>My Dentist Pal</title>
<link rel="stylesheet" type="text/css" media="screen" href="style/style.css" />
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
</head>

<body style="margin:0;padding:0;background-color:#f6f5f5;">
<!--wrapper--><table cellpadding="0" cellspacing="0" border="0" width="100%">
<!--top--><tr><td>
<?php include('includes/top_patient.php')?>
<!--top--></td></tr>

<!--tooth--><tr><td>
<?php include('includes/top.php');?>
<!--dentisit dashboard--></td></tr>

<!--menubar--><tr><td width="100%" height="54" style="background-image:url('images/menubar.png');">
<!--menuinblack--><div style="margin:0 auto;width:520px;">
<table cellpadding="0" cellspacing="0" border="0">
<tr>
<td><img src="images/patient_list_black.png"/></td>
<td width="13">&nbsp;</td>
<td><img src="images/line.png"/></td>
<td width="13">&nbsp;</td>
<td><img src="img/bar_medical.png" style="margin-top:2px;"/></td>
</tr>
</table>

<!--menuinblack--></div>
<!--menubar--></td></tr>

<!--include sidebar--><tr><td>
<div style="margin:0 auto;width:960px;">
<!--sidebar and content container--><table cellpadding="0" cellspacing="0" border="0">
<!--sidebar--><tr><td valign="top">
<div style="margin-top:-38px;">
<?php include('includes/sidebar.php');?>
</div>
<!--sidebar--></td>
<!--content--><td valign="top" style="padding-top:26px;">
<?php include('includes/box_add_patient_medical.php');?>
<!--content--></td>
</tr>



<!--sidebar and content container--></table>
<!--<div style="clear:both;height:20px;"></div>-->
</div>
<!--include sidebar--></td></tr>
<tr>
  <td style="background-color:#FFF;">&nbsp;</td>
</tr>
<tr>
  <td style="background-color:#FFF;"><?php include('includes/footer.php');?></td>
</tr>
<!--wrapper--></table>

</body>
</html>

