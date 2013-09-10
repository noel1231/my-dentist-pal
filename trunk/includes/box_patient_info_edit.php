<?php include('config.php');


if(isset($_POST['update']))
{
$id=mysql_real_escape_string($_POST['pt_id']);
//$date=$_POST["date_entry"];
$bday=mysql_real_escape_string($_POST["patient_bday"]);
$name=mysql_real_escape_string($_POST["patient_name"]);
$age=mysql_real_escape_string($_POST["patient_age"]);
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

$sql="UPDATE patient_list SET 

patient_bday='".$bday."',
patient_name='".$name."',
patient_age='".$age."',
patient_gender='".$gender."',
patient_address='".$patient_address."',
patient_phone='".$patient_contact."',
patient_marital_status='".$patient_status."',
referred_by='".$referred."',
patient_occupation='".$patient_work."',
occupation_address='".$work_add."',
occupation_phone='".$work_phone."',
spouse_name='".$spouse."',
spouse_phone='".$spouse_phone."',
spouse_occupation='".$spouse_work."',
patient_guardian='".$guardian."',
guardian_phone='".$guardian_phone."',
guardian_address='".$guardian_add."'
WHERE id=".$id."";
$query=mysql_query($sql);


$new=$id;

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

      $sql = "UPDATE patient_list SET patient_picture='".$uploadfile."' WHERE id=".$new."";//

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

header('Location: patient_info.php?id='.$id.'');

}

if(isset($_GET['id'])){
$id = $_GET['id'];}

$sql="SELECT * FROM patient_list WHERE id=".$id."";
$res=mysql_query($sql);
while($row=mysql_fetch_array($res))
{
$pt_id=$row["id"];
$name=$row["patient_name"];
$date=$row["date_of_entry"];
$bday=$row["patient_bday"];
$age=$row["patient_age"];
$gender=$row["patient_gender"];
$address=$row["patient_address"];
$phone=$row["patient_phone"];
$status=$row["patient_marital_status"];
$reffered=$row["referred_by"];
$work=$row["patient_occupation"];
$work_add=$row["occupation_address"];
$work_phone=$row["occupation_phone"];
$spouse=$row["spouse_name"];
$spouse_phone=$row["spouse_phone"];
$spouse_work=$row["spouse_occupation"];
$guardian=$row["patient_guardian"];
$guardian_phone=$row["guardian_phone"];
$guardian_address=$row["guardian_address"];
$pic=$row["patient_picture"];
}

if($gender=="male")
{
$checked1="checked";
$checked2="";
}
else if($gender=="female")
{
$checked2="checked";
$checked1="";
}
else
{
$checked1="";
$checked2="";
}

if($status=="single")
{
$select1="selected";
$select2="";
$select3="";
$select4="";
}
else if($status=="married")
{
$select2="selected";
$select1="";
$select3="";
$select4="";
}
else if($status=="widow")
{
$select3="selected";
$select1="";
$select2="";
$select4="";
}
else if($status=="separate")
{
$select4="selected";	
$select1="";
$select2="";
$select3="";
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
        
        <script language="JavaScript"> 
		function onSave()  
{  
if(confirm('Do you want to save changes ?')==true)  
{  
return true;  
}  
else  
{  
return false;  
}  
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
  <tr>
    <td><table width="739" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td height="39" colspan="2" valign="top"><div>
          <div style="width:140px; margin-left:20px; margin-bottom:-2px; float:left;">
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
                <td width="661" align="center" style="background: url(img/t3.jpg);"><img src="img/t_add.png" width="82" height="18" alt="" /></td>
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
          <div style="width:130px; margin-left:10px; margin-bottom:-2px; float:left; z-index:999999999">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="6"><img src="img/u1.jpg" width="6" height="41" alt="" /></td>
                <td width="661" align="center" style="background: url(img/u3.jpg); font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#3e4447;"><!--Joselito Galvez-->
                <?php
				
				$length=14;
$name1=$name;
//$name=strlen($name);
//echo $name;
$display = substr($name1, 0, $length) ;
echo "<span style=\"margin-left:4px;color:#333;font-family:Arial, Helvetica, sans-serif;font-size:13px;\">$display</span>";
echo "..." ;
				
				//echo $name;?>
                </td>
                <td width="6"><img src="img/u2.jpg" width="6" height="41" alt="" /></td>
              </tr>
            </table>
          </div>
        </div></td>
      </tr>
      <tr>
        <td colspan="2"><img src="img/1.jpg" width="739" height="12" alt="" /></td>
      </tr>
      <form method="post" action="" enctype="multipart/form-data">
      <tr>
        <td height="47" style="background:url(img/2.jpg);">
        <table width="100%"><tr><td>
        <img src="img/bar_edit_info.png" height="19" width="147" style="margin-top:-8px;margin-left:23px;"/></td>
        <td align="right">
        <div style="margin-top:-7px;">
        <input type="submit" name="update" value="UPDATE" class="submit" style="margin-right:10px;"  onclick="return onSave();"/>
     <input type="button" name="cancel" value="CANCEL" class="submit" style="margin-right:17px;" onclick="window.location='patient_info.php?id=<?php echo $id;?>'"/>
     </div>
     </td></tr></table>
      </tr>
      <tr>
        <td colspan="2" valign="top" style="background:url(img/3.jpg); padding-bottom:10px;"><div style="margin-top:-8px; position: relative;">
          <table width="690" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td bgcolor="#FFFFFF" style="border-left:1px solid #a0a8ac; border-bottom:1px solid #a0a8ac; border-right:1px solid #a0a8ac;"><!--<p>&nbsp;</p>-->
                <!--<img src="img/menu_info_edit.png" width="691" height="34" border="0" usemap="#Map2" />
                <map name="Map2" id="Map2">
                  <area shape="rect" coords="3,3,97,33" href="#" />
                  <area shape="rect" coords="103,3,217,32" href="patient_medical_edit.php?id=<?php //echo $id;?>" />
                  <area shape="rect" coords="222,3,331,32" href="patient_dental_edit.php?id=<?php //echo $id;?>" />
                </map>-->
                <!--locations-->
                <table cellpadding="0" cellspacing="0" border="0">
                <tr>
                
                <td style="background-color:#FFF;width:115px;height:36px;padding-left:15px;"> 
                <a href="patient_info.php?id=<?php echo $id;?>" class="link_map">
                Patient Info
                </a>
                </td>
                
                
              
               
                <td style="background-image:url(img/option_center_check.png);width:140px;height:36px;padding-left:15px;"> 
                 <a href="patient_medical.php?id=<?php echo $id;?>" class="link_map">
                Medical History
                </a>
                </td>
                
                <td style="background-image:url(img/option_right_check.png);width:5px;height:36px;">&nbsp;</td>
               
                 <td style="background-image:url(img/option_center_check.png);width:130px;height:36px;padding-left:15px;"> 
                <a href="patient_dental.php?id=<?php echo $id;?>" class="link_map">
                Dental History
                 </a>
                </td>
               
                <td style="background-image:url(img/option_right_check.png);width:5px;height:36px;">&nbsp;</td>
               
                <td style="background-image:url(img/option_center_check.png);width:110px;height:36px;padding-left:10px;"> 
                 <a href="patient_tooth_chart.php?id=<?php echo $id;?>" class="link_map">
                Tooth Chart
                </a>
                </td>
                
                 <td style="background-image:url(img/option_right_check.png);width:5px;height:36px;">&nbsp;</td>
              
                <td style="background-image:url(img/option_center_check.png);width:80px;height:36px;padding-left:10px;"> 
                <a href="patient_visit_log.php?id=<?php echo $id;?>" class="link_map">
                Visit Log
                </a>
                </td>
                
                <td style="background-image:url(img/option_right_check.png);width:5px;height:36px;">&nbsp;</td>
               
                <td style="background-image:url(img/option_center_check.png);width:50px;height:36px;padding-left:10px;"> 
                 <a href="patient_others.php?id=<?php echo $id;?>" class="link_map">
                Others
                </a>
                </td>
                
                 <td style="background-image:url(img/option_right_check.png);width:5px;height:36px;">&nbsp;</td>
               
                <td style="background-image:url(img/option_center_check.png);width:50px;height:36px;padding-left:15px;"> 
               <a href="patient_notes.php?id=<?php echo $id;?>" class="link_map">
               Notes
              </a>
                </td>
              
             
                <td style="background-color:#F00;width:50px;height:36px;padding-left:15px;"> 
              <a href="patient_info_edit.php?id=<?php echo $id;?>" style="color:#FFF;font-family:Arial, Helvetica, sans-serif;font-weight:bold;font-size:13px;text-decoration:none;">
               Edit
                </a>
                </td>
                
                </tr>
                </table>
                <!--locations-->
                
                </td>
            </tr>
           
           <!--content-->
           <tr><td style="padding-top:30px;background-color:#FFF;">
           <table cellpadding="0" cellspacing="0" border="0" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;">
<tr><td>
<table cellpadding="0" cellspacing="0" border="0" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;">
<!--content-->
<tr><td style="text-align:right;width:200px;">
Patient ID No:
</td>
<td width="20">&nbsp;</td>
<td style="color:#666;width:200px;"><!--20100512--><input type="text" name="patient_id" style="width:147px;height:20px;font-size:16px;" disabled="disabled" value="<?php echo $pt_id;?>"></td>
 
</tr>
<tr><td height="7">&nbsp;</td></tr>
<tr><td style="text-align:right;width:200px;">
Date of Entry:
</td>
<td width="20">&nbsp;</td>
<td style="color:#666;width:200px;"><!--June 30 207--><input type="text" name="date_entry" style="width:147px;height:20px;font-size:16px;" value="<?php echo $date;?>" disabled/></td>
</tr>
<tr><td height="7">&nbsp;</td></tr>
<tr><td style="text-align:right;width:200px;">
Date of Birth:
</td>
<td width="20">&nbsp;</td>
<td style="color:#666;width:200px;"><!--June 30, 1990--><input type="text" name="patient_bday" id="datepicker" style="font-size:16px;width:147px;height:20px;" value="<?php echo $bday;?>"/></td>
</tr>
<tr><td height="7">&nbsp;</td></tr>
<tr><td style="text-align:right;width:200px;">
Patient's Name:
</td>
<td width="20">&nbsp;</td>
<td style="color:#666;width:200px;"><!--Maverick M. Bersabe--><input type="text" name="patient_name" style="font-size:16px;width:250px;height:20px;" value="<?php echo $name;?>"/></td>
</tr>
<tr>

<td style="font-style:italic;font-size:13px;color:#666;padding-left:25px;">(Last name, First name, M.I.)</td><td>&nbsp;</td></tr>
<tr><td height="7">&nbsp;</td></tr>
<tr><td style="text-align:right;width:200px;">
Age:
</td>
<td width="20">&nbsp;</td>
<td style="color:#666;"><!--21--><input type="text" name="patient_age" style="width:50px;height:20px;font-size:16px;" value="<?php echo $age;?>"/></td>
</tr>
<tr><td height="7">&nbsp;</td></tr>
<tr><td style="text-align:right;width:200px;">
Gender:
</td>
<td width="20">&nbsp;</td>
<td style="color:#666;width:200px;"><!--Male--><input type="radio" name="gender" value="male" <?php echo $checked1;?>/>Male &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="gender" value="female" <?php echo $checked2;?>/>Female</td>
</tr>
<tr><td height="7">&nbsp;</td></tr>
<tr><td style="text-align:right;width:200px;">
Residential Address:
</td>
<td width="20">&nbsp;</td>
<td style="color:#666;width:200px;"><!--62 F. Reyes St., Caridad Cavite City--><input type="text" name="patient_address" style="font-size:16px;width:400px;height:20px;" value="<?php echo $address;?>"/></td>
</tr>
<tr><td height="7">&nbsp;</td></tr>
<tr><td style="text-align:right;width:200px;">
Phone:
</td>
<td width="20">&nbsp;</td>
<td style="color:#666;width:200px;"><!--431 - 7662--><input type="text" name="patient_contact" style="font-size:16px;width:147px;height:20px;" value="<?php echo $phone;?>"/></td>
</tr>
<tr><td height="7">&nbsp;</td></tr>
<tr><td style="text-align:right;width:200px;">
Marital Status:
</td>
<td width="20">&nbsp;</td>
<td style="color:#666;width:200px;"><!--Married--><select name="status" style="font-size:16px;width:151px;height:20px;">
<option value="single" <?php echo $select1;?>>Single</option>
<option value="married" <?php echo $select2;?>>Married</option>
<option value="widow" <?php echo $select3;?>>Widow</option>
<option value="separate" <?php echo $select4;?>>Separate</option>
</select></td>
</tr>
<tr><td height="7">&nbsp;</td></tr>
<tr><td style="text-align:right;width:200px;">
Referred by:
</td>
<td width="20">&nbsp;</td>
<td style="color:#666;"><input type="text" name="patient_reffered" style="width:250px;height:20px;font-size:16px;" value="<?php echo $reffered;?>"/></td>
</tr>
<tr><td height="20">&nbsp;</td></tr>
<tr><td height="7">&nbsp;</td></tr>
<tr><td style="text-align:right;width:200px;">
Occupation:
</td>
<td width="20">&nbsp;</td>
<td style="color:#666;width:200px;"><!--Technical Support--><input type="text" name="patient_occupation" style="font-size:16px;width:250px;height:20px;" value="<?php echo $work;?>"/></td>
</tr>
<tr><td height="7">&nbsp;</td></tr>
<tr><td style="text-align:right;width:200px;">
Business Address:
</td>
<td width="20">&nbsp;</td>
<td style="color:#666;width:200px;"><!--Salinas, Cavite--><input type="text" name="patient_bus_add" style="font-size:16px;width:400px;height:20px;" value="<?php echo $work_add;?>"/></td>
</tr>
<tr><td height="7">&nbsp;</td></tr>
<tr><td style="text-align:right;width:200px;">
Business Telephone:
</td>
<td width="20">&nbsp;</td>
<td style="color:#666;width:200px;"><!--046.497.2478--><input type="text" name="patient_bus_phone" style="font-size:16px;width:147px;height:20px;" value="<?php echo $work_phone;?>"/></td>
</tr>
<tr><td height="7">&nbsp;</td></tr>
<tr><td height="20">&nbsp;</td></tr>
<tr><td style="text-align:right;width:200px;">
Name of spouse:
</td>
<td width="20">&nbsp;</td>
<td style="color:#666;width:200px;"><!--Diane Marie De Guzman--><input type="text" name="patient_spouse_name" style="font-size:16px;width:250px;height:20px;" value="<?php echo $spouse;?>"/></td>
</tr>
<tr><td height="7">&nbsp;</td></tr>
<tr><td style="text-align:right;width:200px;">
Telephone:
</td>
<td width="20">&nbsp;</td>
<td style="color:#666;width:200px;"><!--None--><input type="text" name="spouse_phone" style="font-size:16px;width:147px;height:20px;" value="<?php echo $spouse_phone;?>"/></td>
</tr>
<tr><td height="7">&nbsp;</td></tr>
<tr><td style="text-align:right;width:200px;">
Occupation:
</td>
<td width="20">&nbsp;</td>
<td style="color:#666;width:200px;"><!--Secretary--><input type="text" name="spouse_occupation" style="font-size:16px;width:147px;height:20px;" value="<?php echo $spouse_work;?>"/></td>
</tr>
<tr><td height="7">&nbsp;</td></tr>
<tr><td height="20">&nbsp;</td></tr>
<tr><td style="text-align:right;width:200px;">
Guardian / Parents:
</td>
<td width="20">&nbsp;</td>
<td style="color:#666;width:200px;"><!--Rowena De Guzman--><input type="text" name="patient_guardian" style="font-size:16px;width:250px;height:20px;" value="<?php echo $guardian;?>"/></td>
</tr>
<tr><td height="7">&nbsp;</td></tr>
<tr><td style="text-align:right;width:200px;">
Telephone:
</td>
<td width="20">&nbsp;</td>
<td style="color:#666;width:200px;"><!--431 2439--><input type="text" name="guardian_phone" style="font-size:16px;width:147px;height:20px;" value="<?php echo $guardian_phone;?>"/></td>
</tr>
<tr><td height="7">&nbsp;</td></tr>
<tr><td style="text-align:right;">
Address:
</td>
<td width="20">&nbsp;</td>
<td style="color:#666;width:200px;"><!--601 E. Gutierez St., Caridad Cavite City--><input type="text" name="guardian_address" style="font-size:16px;width:400px;height:20px;" value="<?php echo $guardian_address;?>"/></td>
</tr>
<tr><td height="7">&nbsp;</td>
</tr>
<tr><td style="text-align:right;">
Upload Picture
</td>
<td width="20">&nbsp;</td>
<td style="color:#666;width:200px;"><input type="file" name="userfile1" style="width:250px;height:20px;"/></td>
</tr>
<input type="hidden" value="<?php echo $id;?>" name="pt_id" />
</form>
<tr>
<td height="20">&nbsp;</td>
</tr>
<!--end of content--></table></td>
<!--<td valign="top">
<img src="img/pic.png" height="120" width="122"/>
</td>-->

</tr>

</table>
     </td>
</tr>
           <!--content-->
          </table>
        </div></td>
    
     
        
      </tr>
      <tr>
        <td colspan="2"><img src="img/4.jpg" width="739" height="6" alt="" /></td>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>