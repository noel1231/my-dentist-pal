<?php include('config.php');?>
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
        
        <script>
function ValidateRegistrationForm()
{
    var date = document.RegistrationForm.date_entry;

	var name = document.RegistrationForm.patient_name;
	var age = document.RegistrationForm.patient_age;
    var address = document.RegistrationForm.patient_address;
	var contact = document.RegistrationForm.patient_contact;
	var guardian = document.RegistrationForm.patient_guardian;
	var gphone = document.RegistrationForm.guardian_phone;
	var gaddress = document.RegistrationForm.guardian_address;
	var flag = document.RegistrationForm.tooth.length;
 
    if(flag=="") {
	window.alert("Please select a type ot tooth.");
	return false;
	}

    if (date.value == "")
    {
        window.alert("Please enter the date of entry field.");
        date.focus();
        return false;
    }

	if (name.value == "")
    {
        window.alert("Please enter the name of the patient.");
        name.focus();
        return false;
    }
	
	/*if (age.value == "")
    {
        window.alert("Please enter the age pf patient.");
        age.focus();
        return false;
    }*/
	
	if (address.value == "")
    {
        window.alert("Please enter the address of the patient.");
        address.focus();
        return false;
    }
    
	if (contact.value == "")
    {
        window.alert("Please enter the contact number of the patient.");
        contact.focus();
        return false;
    }
    
	if (guardian.value == "")
    {
        window.alert("Please enter the guardian of the patient.");
        guardian.focus();
        return false;
    }
    
	if (gphone.value == "")
    {
        window.alert("Please enter the contact number of the guardian of the patient.");
        gphone.focus();
        return false;
    }
	
	if (gaddress.value == "")
    {
        window.alert("Please enter the address of the guardian of the patient.");
        gaddress.focus();
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
                <td width="6"><img src="img/u1.jpg" width="6" height="41" alt="" /></td>
                <td width="661" align="center" style="background: url(img/u3.jpg);"><img src="img/t_add.png" width="82" height="18" alt="" /></td>
                <td width="6"><img src="img/u2.jpg" width="6" height="41" alt="" /></td>
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
          <!--<div style="width:130px; margin-left:10px; margin-bottom:-2px; float:left; z-index:999999999">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="6"><img src="img/u1.jpg" width="6" height="41" alt="" /></td>
                <td width="661" align="center" style="background: url(img/u3.jpg); font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#3e4447;">Joselito Galvez</td>
                <td width="6"><img src="img/u2.jpg" width="6" height="41" alt="" /></td>
              </tr>
            </table>
          </div>-->
        </div></td>
      </tr>
      <tr>
        <td colspan="2"><img src="img/1.jpg" width="739" height="12" alt="" /></td>
      </tr>
      <form method="post" action="add_patient_medical.php" enctype="multipart/form-data" name="RegistrationForm" onSubmit="return ValidateRegistrationForm();">
      <tr>
        <td height="47" style="background:url(img/2.jpg);">
        <table width="100%"><tr><td>
        <img src="img/bar_edit_info.png" height="19" width="147" style="margin-top:-8px;margin-left:23px;"/></td>
        <td align="right"><input type="submit" name="next" value="NEXT" class="submit" style="margin-right:10px;margin-top:-4px;"/>
     <input type="button" name="cancel" value="CANCEL" class="submit" style="margin-right:17px;margin-top:-4px;" onclick="javascript:history.go(-1)"/></td></tr></table>
      </tr>
      <tr>
        <td colspan="2" valign="top" style="background:url(img/3.jpg); padding-bottom:10px;"><div style="margin-top:-8px; position: relative;">
          <table width="690" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td bgcolor="#FFFFFF" style="border-left:1px solid #a0a8ac; border-bottom:1px solid #a0a8ac; border-right:1px solid #a0a8ac;"><!--<p>&nbsp;</p>-->
                <!--<img src="img/menu_info_edit.png" width="691" height="34" border="0" usemap="#Map2" />
                <map name="Map2" id="Map2">
                  <area shape="rect" coords="3,3,97,33" href="#" />
                  <area shape="rect" coords="103,3,217,32" href="add_patient_medical.php" />
                  <area shape="rect" coords="222,3,331,32" href="add_patient_dental.php" />
                </map>-->
                
                 <!--locations-->
                <table cellpadding="0" cellspacing="0" border="0">
                <tr>
                
                <td style="background-color:#FFF;width:90px;height:36px;padding-left:15px;"> 
                <a href="#" class="link_map">
                Patient Info
                </a>
                </td>
                
                
              
               
                <td style="background-image:url(img/option_center_check.png);width:106px;height:36px;padding-left:15px;"> 
                 <a href="#" class="link_map">
                Medical History
                </a>
                </td>
                
                <td style="background-image:url(img/option_right_check.png);width:5px;height:36px;">&nbsp;</td>
               
                 <td style="background-image:url(img/option_center_check.png);width:100px;height:36px;padding-left:15px;"> 
                <a href="#" class="link_map">
                Dental History
                 </a>
                </td>
               
                <td style="background-image:url(img/option_right_check.png);width:5px;height:36px;">&nbsp;</td>
               
                <td style="background-image:url(img/option_center_check.png);width:130px;height:36px;padding-left:15px;"> 
                 <a href="#" class="link_map">
                Account Invitation
                </a>
                </td>
                
                 <td style="background-image:url(img/option_right_check.png);width:5px;height:36px;">&nbsp;</td>
              <td style="background-image:url(img/option_center_check.png);width:187px;height:36px;">&nbsp; 
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
<?php $sql = "SELECT id FROM patient_list ORDER BY id DESC LIMIT 0,1"; 
$res=mysql_query($sql);
while($row=mysql_fetch_array($res))
{$new_id=$row['id'];
$add=00000000001;
$new_id=$new_id+$add;
if($new_id<=9)
{$add_this="0000000000";}
else
{$add_this="000000000";}
}
?>
<td style="color:#666;width:200px;"><!--20100512--><input type="text" name="patient_id" id="patient_id" style="width:147px;height:20px;font-size:14px;" disabled="disabled"/ value="<?php echo "$add_this"."$new_id";?>"></td>
 
</tr>
<tr><td height="7">&nbsp;</td></tr>
<tr><td style="text-align:right;width:200px;">
Date of Entry:
</td>
<td width="20">&nbsp;</td>

<td style="color:#666;width:200px;"><!--June 30 207--><input type="text" name="date_entry" id="date_entry" style="width:147px;height:20px;font-size:14px;" value="<?php echo date("Y/m/d",strtotime("+24 hours"));?>"/></td>
</tr>
<tr><td height="7">&nbsp;</td></tr>
<tr><td style="text-align:right;width:200px;">
Date of Birth:
</td>
<td width="20">&nbsp;</td>
<td style="color:#666;width:200px;"><!--June 30, 1990-->
<!--calendar-->
<?php /*<table cellpadding="0" cellspacing="0" border="0">
<tr><td>
<select name="day">
<?php $i=0;
for($i=1;$i<=31;$i++)
{ ?>
 <option value="<?php echo $i;?>"><?php echo $i;?></option>	
<?php }?>
</select>
</td>
<td style="padding-left:5px;">
<select name="month">
<option value="1">January</option>
<option value="2">February</option>
<option value="3">March</option>
<option value="4">April</option>
<option value="5">May</option>
<option value="6">June</option>
<option value="7">July</option>
<option value="8">August</option>
<option value="9">September</option>
<option value="10">Ocotober</option>
<option value="11">November</option>
<option value="12">December</option>
</select></td>
<td style="padding-left:5px;">
<select name="year">
<?php $x=1919; 
for($y=1;$y<=100;$y++)
{
$year=$x+$y;	
?>
<option value="<?php echo $year;?>"><?php echo $year;?></option>
<?php } ?>
</select>
</td>

</tr></table>
<!--calendar-->
*/?>

<input type="text" id="datepicker" name="date" style="width:147px;height:20px;font-size:14px;" tabindex="1">

</td>
</tr>
<tr><td height="7">&nbsp;</td></tr>
<tr><td style="text-align:right;width:200px;">Patient's Tooth</td>
<td width="20">&nbsp;</td>
<td style="color:#666;width:200px;"><!--Maverick M. Bersabe-->
<table cellpadding="0" cellspacing="0" border="0">
<tr><td> 
<input type="radio" name="tooth" value="1" />&nbsp;Adult 
</td>
<td style="padding-left:15px;">
<input type="radio" name="tooth" value="2" />&nbsp;Child
</td>
</tr></table>
</td></tr>

<tr><td height="7">&nbsp;</td></tr>
<tr><td style="text-align:right;width:200px;">
*Patient's Name:
</td>
<td width="20">&nbsp;</td>
<td style="color:#666;width:200px;"><!--Maverick M. Bersabe--><input type="text" name="patient_name" id="patient_name" style="font-size:14px;width:250px;height:20px;"/></td>
</tr>
<tr>

<td>&nbsp;</td><td>&nbsp;</td><td style="font-style:italic;font-size:13px;color:#666;">(Last name, First name, M.I.)</td></tr>
<tr><td height="7">&nbsp;</td></tr>
<!--<tr><td style="text-align:right;width:200px;">
Age:
</td>
<td width="20">&nbsp;</td>
<td style="color:#666;"><!--21--><!--<input type="text" name="patient_age" id="patient_age" style="width:50px;height:20px;"/></td>-->
<!--</tr>
<tr><td height="7">&nbsp;</td></tr>-->
<tr><td style="text-align:right;width:200px;">
Gender:
</td>
<td width="20">&nbsp;</td>
<td style="color:#666;width:200px;"><!--Male--><input type="radio" name="gender" id="gender" value="male"/>Male &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="gender" value="female" />Female</td>
</tr>
<tr><td height="7">&nbsp;</td></tr>
<tr><td style="text-align:right;width:200px;">
*Residential Address:
</td>
<td width="20">&nbsp;</td>
<td style="color:#666;width:200px;"><!--62 F. Reyes St., Caridad Cavite City--><input type="text" name="patient_address" id="patient_address" style="width:400px;height:20px;font-size:14px;"/></td>
</tr>
<tr><td height="7">&nbsp;</td></tr>
<tr><td style="text-align:right;width:200px;">
*Phone:
</td>
<td width="20">&nbsp;</td>
<td style="color:#666;width:200px;"><!--431 - 7662--><input type="text" name="patient_contact" id="patient_contact" style="font-size:14px;width:147px;height:20px;"/></td>
</tr>
<tr><td height="7">&nbsp;</td></tr>
<tr><td style="text-align:right;width:200px;">
Marital Status:
</td>
<td width="20">&nbsp;</td>
<td style="color:#666;width:200px;"><!--Married--><select name="status" id="status" style="font-size:14px;width:151px;height:20px;">
<option value="single">Single</option>
<option value="married">Married</option>
<option value="widow">Widow</option>
<option value="separate">Separate</option>
</select></td>
</tr>
<tr><td height="7">&nbsp;</td></tr>
<tr><td style="text-align:right;width:200px;">
Referred by:
</td>
<td width="20">&nbsp;</td>

<td style="color:#666;"><input type="text" name="patient_reffered" id="patient_reffered" style="font-size:14px;width:250px;height:20px;"/></td>
</tr>
<tr><td height="20">&nbsp;</td></tr>
<tr><td height="7">&nbsp;</td></tr>
<tr><td style="text-align:right;width:200px;">
Occupation:
</td>
<td width="20">&nbsp;</td>
<td style="color:#666;width:200px;"><!--Technical Support--><input type="text" name="patient_occupation" id="patient_occupation" style="font-size:14px;width:250px;height:20px;" /></td>
</tr>
<tr><td height="7">&nbsp;</td></tr>
<tr><td style="text-align:right;width:200px;">
Business Address:
</td>
<td width="20">&nbsp;</td>
<td style="color:#666;width:200px;"><!--Salinas, Cavite--><input type="text" name="patient_bus_add" id="patient_bus_add" style="font-size:14px;width:400px;height:20px;"/></td>
</tr>
<tr><td height="7">&nbsp;</td></tr>
<tr><td style="text-align:right;width:200px;">
Business Telephone:
</td>
<td width="20">&nbsp;</td>
<td style="color:#666;width:200px;"><!--046.497.2478--><input type="text" name="patient_bus_phone" id="patient_bus_phone" style="font-size:14px;width:147px;height:20px;"/></td>
</tr>
<tr><td height="7">&nbsp;</td></tr>
<tr><td height="20">&nbsp;</td></tr>
<tr><td style="text-align:right;width:200px;">
Spouses name:
</td>
<td width="20">&nbsp;</td>
<td style="color:#666;width:200px;"><!--Diane Marie De Guzman--><input type="text" name="patient_spouse_name" id="patient_spouse_name" style="width:250px;height:20px;font-size:14px;"/></td>
</tr>
<tr><td height="7">&nbsp;</td></tr>
<tr><td style="text-align:right;width:200px;">
Telephone:
</td>
<td width="20">&nbsp;</td>
<td style="color:#666;width:200px;"><!--None--><input type="text" name="spouse_phone" id="spouse_phone" style="width:147px;height:20px;font-size:14px;"/></td>
</tr>
<tr><td height="7">&nbsp;</td></tr>
<tr><td style="text-align:right;width:200px;">
Occupation:
</td>
<td width="20">&nbsp;</td>
<td style="color:#666;width:200px;"><!--Secretary--><input type="text" name="spouse_occupation" id="spouse_occupation" style="font-size:14px;width:147px;height:20px;"/></td>
</tr>
<tr><td height="7">&nbsp;</td></tr>
<tr><td height="20">&nbsp;</td></tr>
<tr><td style="text-align:right;width:200px;">
*Guardian / Parents:
</td>
<td width="20">&nbsp;</td>
<td style="color:#666;width:200px;"><!--Rowena De Guzman--><input type="text" name="patient_guardian" id="patient_guardian" style="font-size:14px;width:250px;height:20px;"/></td>
</tr>
<tr><td height="7">&nbsp;</td></tr>
<tr><td style="text-align:right;width:200px;">
*Telephone:
</td>
<td width="20">&nbsp;</td>
<td style="color:#666;width:200px;"><!--431 2439--><input type="text" name="guardian_phone" id="guardian_phone" style="font-size:14px;width:147px;height:20px;"/></td>
</tr>
<tr><td height="7">&nbsp;</td></tr>
<tr><td style="text-align:right;">
*Address:
</td>
<td width="20">&nbsp;</td>
<td style="color:#666;width:200px;"><!--601 E. Gutierez St., Caridad Cavite City--><input type="text" name="guardian_address" id="guardian_address" style="width:400px;height:20px;font-size:14px;"/></td>
</tr>
<tr><td height="7">&nbsp;</td>
</tr>
<tr><td style="text-align:right;">
Upload Picture
</td>
<td width="20">&nbsp;</td>
<td style="color:#666;width:200px;"><input type="file" name="userfile1" style="width:250px;height:20px;"/></td>
</tr>

<tr>
<td>&nbsp;</td>
<td width="20">&nbsp;</td>
<td style="padding-top:30px;">

<input type="submit" name="next" value="Next" class="submit2"/>

</td></tr>

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