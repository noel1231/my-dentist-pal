<?php include('config.php');


session_start();
$cap = 'notEq';
$text="";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//    if ($_POST['captcha'] == $_SESSION['cap_code']) { 
        // Captcha verification is Correct. Do something here!
		//echo "ok";
        $cap = 'Eq';
		
		$fname=mysql_real_escape_string($_POST['fname']);
		$lname=mysql_real_escape_string($_POST['lname']);
		$middle=mysql_real_escape_string($_POST['middle']);
		$email=mysql_real_escape_string($_POST['email1']);
		$pass=mysql_real_escape_string($_POST['pass1']);
		$pass=md5($pass);
		$bmonth=mysql_real_escape_string($_POST['bmonth']);
		$bday=mysql_real_escape_string($_POST['bday']);
		$byear=mysql_real_escape_string($_POST['byear']);
		$gender=mysql_real_escape_string($_POST['gender']);
	/*	$lot=mysql_real_escape_string($_POST['lot']);
		$city=mysql_real_escape_string($_POST['city']);
		$province=mysql_real_escape_string($_POST['province']);
		$license=mysql_real_escape_string($_POST['license_number']);
		$date_issued_month=mysql_real_escape_string($_POST['date_issued_month']);
		$date_issued_bday=mysql_real_escape_string($_POST['date_issued_bday']);
		$date_issued_year=mysql_real_escape_string($_POST['date_issued_year']);
		$date_expires_month=mysql_real_escape_string($_POST['date_expires_month']);
		$date_expires_day=mysql_real_escape_string($_POST['date_expires_day']);
		$date_expires_year=mysql_real_escape_string($_POST['date_expires_year']);
		$services=mysql_real_escape_string($_POST['services']);
		$phone=mysql_real_escape_string($_POST['phone']);
		$cell=mysql_real_escape_string($_POST['cell']);
		$specialty=mysql_real_escape_string($_POST['specialty']);
		$from1=mysql_real_escape_string($_POST['from1']);
		$from11=mysql_real_escape_string($_POST['from11']);
		$to1=mysql_real_escape_string($_POST['to1']);
		$to11=mysql_real_escape_string($_POST['to11']);
		$from2=mysql_real_escape_string($_POST['from2']);
		$from22=mysql_real_escape_string($_POST['from22']);
		$to2=mysql_real_escape_string($_POST['to2']);
		$to22=mysql_real_escape_string($_POST['to22']);
		$from3=mysql_real_escape_string($_POST['from3']);
		$from33=mysql_real_escape_string($_POST['from33']);
		$to3=mysql_real_escape_string($_POST['to3']);
		$to33=mysql_real_escape_string($_POST['to33']);
		$from4=mysql_real_escape_string($_POST['from4']);
		$from44=mysql_real_escape_string($_POST['from44']);
		$to4=mysql_real_escape_string($_POST['to4']);
		$to44=mysql_real_escape_string($_POST['to44']);
		$from5=mysql_real_escape_string($_POST['from5']);
		$from55=mysql_real_escape_string($_POST['from55']);
		$to5=mysql_real_escape_string($_POST['to5']);
		$to55=mysql_real_escape_string($_POST['to55']);
		$payment_method=mysql_real_escape_string($_POST['payment']);
		$school=mysql_real_escape_string($_POST['school']); 
		//$age=mysql_real_escape_string($_POST['age']);
		*/
		
		
		$test="";
		$ctr=0;
		$sql="SELECT * FROM dentist_list";
		$res=mysql_query($sql);
		while($row=mysql_fetch_array($res)) {
		$email_den=$row['email'];
		if($email==$email_den)
		{
			$test="username / email already exists";
			$ctr++;
		}
		}
		
		
		$monday_in=$from1." ".$from11;
		$monday_out=$to1." ".$to11;
		$tuesday_in=$from2." ".$from22;
		$tuesday_out=$to2." ".$to22;
		$wednesday_in=$from3." ".$from33;
		$wednesday_out=$to3." ".$to33;
		$thursday_in=$from4." ".$from44;
		$thursday_out=$to4." ".$to44;
		$friday_in=$from5." ".$from55;
		$friday_out=$to5." ".$to55;
		
		if($ctr==0) {
		
		$sql="INSERT INTO dentist_list (
										first_name,
										sur_name,
										middle_name,
										email,
										dentist_pass,
										dentist_gender,
										birth_month,
										birth_day,
										birth_year,
										dentist_age,
										register_date
										) VALUES (
										'$fname',
										'$lname',
										'$middle',
										'$email',
										'$pass',
										'$gender',
										'$bmonth',
										'$bday',
										'$byear',
										'$age',
										NOW()
										)";																														/*		$sql="INSERT INTO dentist_list (
										first_name,
										sur_name,
										middle_name,
										email,
										dentist_pass,
										dentist_gender,
										address_lot,
										address_city,
										address_province,
										license_number,
										birth_month,
										birth_day,
										birth_year,
										dentist_age,
										date_issued_month,
										date_issued_day,
										date_issued_year,
										date_expires_month,
										date_expires_day,
										date_expires_year,
										services_offered,
										tel_number,
										cel_number,
										register_date,
										specialty,
										monday_in,
										monday_out,
										tuesday_in,
										tuesday_out,
										wednesday_in,
										wednesday_out,
										thursday_in,
										thursday_out,
										friday_in,
										friday_out,
										payment_method,
										school_grad 
										) VALUES (
										'$fname',
										'$lname',
										'$middle',
										'$email',
										'$pass',
										'$gender',
										'$lot',
										'$city',
										'$province',
										'$license',
										'$bmonth',
										'$bday',
										'$byear',
										'$age',
										'$date_issued_month',
										'$date_issued_bday',
										'$date_issued_year',
										'$date_expires_month',
										'$date_expires_day',
										'$date_expires_year',
										'$services',
										'$phone',
										'$cell',
										NOW(),
										'$specialty',
										'$monday_in',
										'$monday_out',
										'$tuesday_in',
										'$tuesday_out',
										'$wednesday_in',
										'$wednesday_out',
										'$thursday_in',
										'$thursday_out',
										'$friday_in',
										'$friday_out',
										'$payment_method',
										'$school'
										)";
		*/
		$res=mysql_query($sql);
		
		$new=mysql_insert_id();
			echo "<script>alert('Account successfully created! Thank you for your registration.');</script>";
		$uploaddir = 'dentist_img/';

  for ($i=0;$i<2;$i++)

  {
$ctr=$i+1; 

   if($_FILES['dentist_picture']['name'])

   {

	$ctr=$i+1; 

    $uploadfile = $uploaddir . basename($_FILES['dentist_picture']['name']);

    $ext = strtolower(substr($uploadfile,strlen($uploadfile)-3,3));

    if (preg_match("/(jpg|gif|png|bmp)/",$ext))

    {

	//giving the file name

	$now = time(); 

    while(file_exists($uploadfile = $uploaddir.$now.'-'.$_FILES['dentist_picture']['name'])) 

	{ 

		$now++; 

	} 

     if (move_uploaded_file($_FILES['dentist_picture']['tmp_name'], $uploadfile)) 

     {

      $sql = "UPDATE dentist_list SET profile_pic='".$uploadfile."' WHERE id=".$new."";//

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

} }
		
		
		//var_dump($sql);
   /* } else {
		$text="";
		$text="Try entering again the captcha code";
        // Captcha verification is wrong. Take other action
        $cap = '';
    } */
	

	
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>My Dentist Pal</title>
<link rel="stylesheet" type="text/css" media="screen" href="style/style.css" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                $('#submit').click(function(){
                   /* var name = $('#name').val();
                    var msg = $('#msg').val();*/
                    var captcha = $('#captcha').val();
                    
                   /* if( name.length == 0){
                        $('#name').addClass('error');
                    }
                    else{
                        $('#name').removeClass('error');
                    }

                    if( msg.length == 0){
                        $('#msg').addClass('error');
                    }
                    else{
                        $('#msg').removeClass('error');
                    }*/

                    if( captcha.length == 0){
                        $('#captcha').addClass('error');
                    }
                    else{
                        $('#captcha').removeClass('error');
                    }
                    
                    /*if(name.length != 0 && msg.length != 0 && captcha.length != 0){*/
					if(captcha.length != 0)
					return true;
                    }
                    return false;
                });

                var capch = '<?php echo $cap; ?>';
                if(capch != 'notEq'){
                    if(capch == 'Eq'){
                        $('.cap_status').html("Your form is successfully Submitted ").fadeIn('slow').delay(3000).fadeOut('slow');
                    }else{
                        $('.cap_status').html("Human verification Wrong!").addClass('cap_status_error').fadeIn('slow');
                    }
                }
                
                

            });
        </script>
  
        
        <style type="text/css">
            body{
                
                
            }
            #form{
                margin:100px;
                width: 350px;
                outline: 5px solid #d0ebfe;
                border: 1px solid #bae0fb;
                padding: 10px;
				margin:0 auto;
            }
            #form label{
                font:bold 11px arial;
                color: #565656;
                padding-left: 1px;
            }
            #form label.mandat{color: #f00;}
            
            
            #form img{
                /*margin-bottom: 8px;*/
            }
        
            .error{
                border: 1px solid red;
            }
            .cap_status{
                width: 350px;
                padding: 10px;
                font: 14px arial;
                color: #fff;
                background-color: #10853f;
                display: none;
            }
            .cap_status_error{
                background-color: #bd0808;                
            }
			
				#validEmail
		{
			margin-top: 4px;
			margin-left: 9px;
			position: absolute;
			width: 16px;
			height: 16px;
		}
        </style>
      
        <script type="text/javascript" src="img/jquery-1.3.2.min.js"></script>
        <script type="text/javascript">
	
	/*function onTap() {
	alert(document.getElementById('validate').value);	
	}*/
	function ValidateContactForm()
{
	
	
	 var email1 = document.ContactForm.email1;
 var val1=document.ContactForm.email1.value;
 var email2 = document.ContactForm.email2;
 var val2=document.ContactForm.email2.value;
  var opt1=document.ContactForm.pass1.value;
   var opt2=document.ContactForm.pass2.value;

if(val1 != val2) {
window.alert("Not the same email.");
        email2.focus();
        return false;	
}
if(opt1 != opt2) {
window.alert("Not the same password.");
        pass2.focus();
        return false;	
}

	
    var email = document.ContactForm.validate;
	if (email.value.indexOf("@", 0) < 0)
    {
        window.alert("Please enter a valid e-mail address.");
        email.focus();
        return false;
    }
	
	
	/*function chk_val(obj) {*/
	var num = document.ContactForm.contact;
    var chk = /^\d+$/.test(num.value);
 
    if (!chk) {
        window.alert("Please enter a valid number.");
        num.focus();
		return false;
    }
/*}*/
	
}
	
	
	$(document).ready(function() {

		$("#validate").keyup(function(){
		
			var email = $("#validate").val();
		
			if(email != 0)
			{
				if(isValidEmailAddress(email))
				{
					$("#validEmail").css({
						"background-image": "url('images/validYes.png')"
					});
				} else {
					$("#validEmail").css({
						"background-image": "url('images/validNo.png')"
					});
				}
			} else {
				$("#validEmail").css({
					"background-image": "none"
				});			
			}
		
		});
	
	});
	
	function isValidEmailAddress(emailAddress) {
 		var pattern = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);
 		return pattern.test(emailAddress);
	}
	
	</script>
	<?php include("ganalytics.php"); ?>
</head>

<body style="margin:0;padding:0;background-color:#f6f5f5;font-family:Arial, Helvetica, sans-serif;">
<!--wrapper--><table cellpadding="0" cellspacing="0" border="0" width="100%">
<!--top--><tr><td>
<?php include('includes/top_register.php')?>
<!--top--></td></tr>

<!--tooth--><tr><td>
<!--navigation bar--><div style="background-image:url('images/topnav.jpg');width:100%;height:80px;">
<div style="margin:0 auto;width:960px;">
<div style="float:left;"><!--left-->
<div style="float:left;"><img src="images/toothlogo.png" style="margin-top:15px;"/></div>
<div style="float:left;margin-left:10px;font-family:Arial, Helvetica, sans-serif;font-size:32px;color:#FFF;margin-top:20px;width:210px;">My Dentist Pal</div>
<div style="float:left;margin-left:5px;margin-top:23px;font-size:12px;color:#70d8f8;font-family:'Trebuchet MS', Arial, Helvetica, sans-serif;">Ver. 1.0</div>
</div><!--end of left-->
<!--right-->
<!--<div style="float:right;margin-top:45px;">
<div style="float:right;background-image:url('images/option2.png');width:101px;height:35px;"></div>
<a href="dentist_profile.php"><div style="float:right;background-image:url('images/profile.png');width:101px;height:35px;"></div></a>
<a href="message_contact.php"><div style="float:right;background-image:url('images/messaging.png');width:116px;height:35px;margin-right:2px;"></div></a>
</div>-->
</div><!--end of center-->
</div><!--end with navigation bar-->
<!--tooth--></td></tr>

<!--dentisit dashboard--><tr><td>
<div style="background-color:#e0e2e4;width:100%;height:90px;">
<div style="margin:0 auto;width:940px;"><!--center-->
<div style="float:left;margin-top:28px;"><!--Dentist's Dashboard--><!--<img src="images/dentist_dashboard.png" />-->
<span style="font-weight:500;font-size:30px;color:#333;font-family: 'Trebuchet MS', Arial, Helvetica, sans-serif;">
Dentist's Registration</span>
</div>
<div style="float:right;">
<!--<div style="float:right;margin-top:28px;"><input type="text" name="search" /></div>-->
<div style="clear:both;"></div>
<!--<div style="float:right;color:#969da4;font-size:10px;font-family:'Trebuchet MS', Arial, Helvetica, sans-serif;">CLICK HERE FOR ADVANCE SEARCH</div>--></div>
</div><!--end of center-->
</div>
<!--dentisit dashboard--></td></tr>


<tr><td width="955" align="center" style="font-size:14px;font-weight:bold;color:#333;padding-top:20px;">
<form method="post" action="" enctype="multipart/form-data" name="ContactForm" onSubmit="return ValidateContactForm();">

<table cellpadding="0" cellspacing="0" border="0">
<tr><td style="color:#F00;">
<?php echo $test;?>
</td></tr>
<tr>
<td style="width:200px;text-align:right;">
Name:
</td>
<td style="padding-left:10px;">
<table cellpadding="0" cellspacing="0" border="0">
<tr><td>
<input type="text" name="fname" value="First" onfocus="if (this.value == 'First') {this.value = '';}" onblur="if (this.value == '') {this.value = 'First';}" style="color:#999;"/>
</td>
<td style="padding-left:15px;">
<input type="text" name="lname" value="Last" onfocus="if (this.value == 'Last') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Last';}" style="color:#999;"/>
</td>
<td style="padding-left:15px;">
<input type="text" name="middle" value="Middle" onfocus="if (this.value == 'Middle') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Middle';}" style="color:#999;"/>
</td>
</tr>
</table></td></tr>
<tr><td><div style="clear:both;height:8px;"></div></td></tr>
<tr><td style="width:200px;text-align:right;">
Email:
</td>
<td style="padding-left:10px;">
<input type="text" name="email1" id="validate"/><span id="validEmail"></span>
</td></tr>
<tr><td><div style="clear:both;height:8px;"></div></td></tr>
<tr>
<td style="width:200px;text-align:right;">
Confirm Email:
</td>
<td style="padding-left:10px;">
<input type="text" name="email2" id="email2"/>

</td>

</tr>
<tr><td><div style="clear:both;height:8px;"></div></td></tr>
<tr><td style="width:200px;text-align:right;">
Create password:
</td><td style="padding-left:10px;">
<input type="password" name="pass1" id="pass1"/>
</td></tr>
<tr><td><div style="clear:both;height:8px;"></div></td></tr>
<tr>
<td style="width:200px;text-align:right;">
Confirm password:
</td>
<td style="padding-left:10px;">
<input type="password" name="pass2" id="pass2"/>
</td></tr>
<tr><td><div style="clear:both;height:8px;"></div></td></tr>
<tr><td style="width:200px;text-align:right;">
Birhday:
</td>
<td style="padding-left:10px;">


<table cellpadding="0" cellspacing="0" border="0">
<tr><td>
<select name="bmonth">
<option value="none">-- Select a month --</option>
<option value="January">January</option>
<option value="February">February</option>
<option value="March">March</option>
<option value="April">April</option>
<option value="May">May</option>
<option value="June">June</option>
<option value="July">July</option>
<option value="August">August</option>
<option value="September">September</option>
<option value="October">October</option>
<option value="November">November</option>
<option value="December">December</option>
</select>
</td>
<td style="padding-left:15px;">
<select name="bday">
<option value="none">-- Select a day --</option>
<?php for($i=1;$i<=31;$i++) {
echo "<option value=\"$i\">$i</option>";	
}?>
</select>
</td>
<td style="padding-left:15px;">
<input type="text" name="byear" value="Year" onfocus="if (this.value == 'Year') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Year';}" style="color:#999;width:40px;"/>
</td>
</tr>
</table></td></tr>

<tr><td><div style="clear:both;height:8px;"></div></td></tr>
<tr><td style="width:200px;text-align:right;"> 
Gender:
</td><td style="padding-left:10px;">
<select name="gender">
<option value="none">-- Select one --</option>
<option value="male">Male</option>
<option value="female">Female</option>
</select>
</td></tr>
<tr><td><div style="clear:both;height:8px;"></div></td></tr><!--
<tr><td style="width:200px;text-align:right;">
Address:
</td>
<td style="padding-left:10px;">
<table cellpadding="0" cellspacing="0" border="0">
<tr><td>
<input type="text" name="lot" value="Lot#" onfocus="if (this.value == 'Lot#') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Lot#';}" style="color:#999;"/>
</td>
<td style="padding-left:10px;">
<input type="text" name="city" value="City" onfocus="if (this.value == 'City') {this.value = '';}" onblur="if (this.value == '') {this.value = 'City';}" style="color:#999;"/>
</td>
<td style="padding-left:10px;">
<input type="text" name="province" value="Province" onfocus="if (this.value == 'Province') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Province';}" style="color:#999;"/>
</td>
</tr>
</table></td></tr>
<tr><td><div style="clear:both;height:8px;"></div></td></tr>
<tr><td style="width:200px;text-align:right;">
Dentist License number:
</td><td style="padding-left:10px;">
<input name="license_number" type="text" />
</td></tr>

<tr><td><div style="clear:both;height:8px;"></div></td></tr>

<tr><td style="width:200px;text-align:right;">
Date issued:
</td>
<td style="padding-left:10px;">

<table cellpadding="0" cellspacing="0" border="0">
<tr><td>
<select name="date_issued_month">
<option value="none">-- Select a month --</option>
<option value="January">January</option>
<option value="February">February</option>
<option value="March">March</option>
<option value="April">April</option>
<option value="May">May</option>
<option value="June">June</option>
<option value="July">July</option>
<option value="August">August</option>
<option value="September">September</option>
<option value="October">October</option>
<option value="November">November</option>
<option value="December">December</option>
</select>
</td>
<td style="padding-left:15px;">
<select name="date_issued_bday">
<option value="none">-- Select a day --</option>
<?php  /*for($i=1;$i<=31;$i++) {
echo "<option value=\"$i\">$i</option>";	
} */?>
</select>
</td>
<td style="padding-left:15px;">
<input type="text" name="date_issued_year" value="Year" onfocus="if (this.value == 'Year') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Year';}" style="color:#999;"/>
</td>
</tr>
</table></td></tr>
<tr><td><div style="clear:both;height:8px;"></div></td></tr>
<tr><td style="width:200px;text-align:right;">
Date Expires:
</td>
<td style="padding-left:10px;">


<table cellpadding="0" cellspacing="0" border="0">
<tr><td>
<select name="date_expires_month">
<option value="none">-- Select a month --</option>
<option value="January">January</option>
<option value="February">February</option>
<option value="March">March</option>
<option value="April">April</option>
<option value="May">May</option>
<option value="June">June</option>
<option value="July">July</option>
<option value="August">August</option>
<option value="September">September</option>
<option value="October">October</option>
<option value="November">November</option>
<option value="December">December</option>
</select>
</td>
<td style="padding-left:15px;">
<select name="date_expires_day">
<option value="none">-- Select a day --</option>
<?php /*for($i=1;$i<=31;$i++) {
echo "<option value=\"$i\">$i</option>";	
} */?>
</select>
</td>
<td style="padding-left:15px;">
<input type="text" name="date_expires_year" value="Year" onfocus="if (this.value == 'Year') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Year';}" style="color:#999;"/>
</td>
</tr>
</table></td></tr>

<tr><td><div style="clear:both;height:8px;"></div></td></tr>


<tr><td style="width:200px;text-align:right;">
Specialty:
</td><td style="padding-left:10px;">
<input type="text" name="specialty" />
</td></tr>

<tr><td><div style="clear:both;height:8px;"></div></td></tr>

<tr><td style="width:200px;text-align:right;">
Graduated at:
</td><td style="padding-left:10px;">
<input type="text" name="school" />
</td></tr>

<tr><td><div style="clear:both;height:8px;"></div></td></tr>


<tr><td style="width:200px;text-align:right;">
Office hours:
</td></tr>
<tr><td><div style="clear:both;height:8px;"></div></td></tr>
<tr><td style="width:200px;text-align:right;">
Monday: </td>
<td style="padding-left:10px;"><select name="from1">
<?php /*
for($i=1;$i<=12;$i++) {
echo "<option value=\"$i:00\">$i:00</option>";	
}*/
?>
</select>
&nbsp;
<select name="from11">
<option value="a.m.">a.m.</option>
<option value="p.m.">p.m.</option>
</select>
&nbsp;&nbsp;
to
&nbsp;&nbsp;
<select name="to1">
<?php /*
for($i=1;$i<=12;$i++) {
echo "<option value=\"$i:00\">$i:00</option>";	
}*/
?>
</select>
&nbsp;
<select name="to11">
<option value="a.m.">a.m.</option>
<option value="p.m.">p.m.</option>
</select>
</td></tr>
<tr><td style="width:200px;text-align:right;">
Tuesday: </td>
<td style="padding-left:10px;"><select name="from2">
<?php /*
for($i=1;$i<=12;$i++) {
echo "<option value=\"$i:00\">$i:00</option>";	
}*/
?>
</select>
&nbsp;
<select name="from22">
<option value="a.m.">a.m.</option>
<option value="p.m.">p.m.</option>
</select>
&nbsp;&nbsp;
to
&nbsp;&nbsp;
<select name="to2">
<?php /*
for($i=1;$i<=12;$i++) {
echo "<option value=\"$i:00\">$i:00</option>";	
}*/
?>
</select>
&nbsp;
<select name="to22">
<option value="a.m.">a.m.</option>
<option value="p.m.">p.m.</option>
</select>
</td></tr>
<tr><td style="width:200px;text-align:right;">
Wednesday:</td>
<td style="padding-left:10px;"><select name="from3">
<?php /*
for($i=1;$i<=12;$i++) {
echo "<option value=\"$i:00\">$i:00</option>";	
}*/
?>
</select>
&nbsp;
<select name="from33">
<option value="a.m.">a.m.</option>
<option value="p.m.">p.m.</option>
</select>
&nbsp;&nbsp;
to
&nbsp;&nbsp;
<select name="to3">
<?php /*
for($i=1;$i<=12;$i++) {
echo "<option value=\"$i:00\">$i:00</option>";	
}*/
?>
</select>
&nbsp;
<select name="to33">
<option value="a.m.">a.m.</option>
<option value="p.m.">p.m.</option>
</select>
</td></tr>
<tr><td style="width:200px;text-align:right;">
Thursday: </td>
<td style="padding-left:10px;"><select name="from4">
<?php /*
for($i=1;$i<=12;$i++) {
echo "<option value=\"$i:00\">$i:00</option>";	
}*/
?>
</select>
&nbsp;
<select name="from44">
<option value="a.m.">a.m.</option>
<option value="p.m.">p.m.</option>
</select>
&nbsp;&nbsp;
to
&nbsp;&nbsp;
<select name="to4">
<?php /*
for($i=1;$i<=12;$i++) {
echo "<option value=\"$i:00\">$i:00</option>";	
}*/
?>
</select>
&nbsp;
<select name="to44">
<option value="a.m.">a.m.</option>
<option value="p.m.">p.m.</option>
</select>
</td></tr>
<tr><td style="width:200px;text-align:right;">
Friday: </td>
<td style="padding-left:10px;"><select name="from5">
<?php /*
for($i=1;$i<=12;$i++) {
echo "<option value=\"$i:00\">$i:00</option>";	
}*/
?>
</select>
&nbsp;
<select name="from55">
<option value="a.m.">a.m.</option>
<option value="p.m.">p.m.</option>
</select>
&nbsp;&nbsp;
to
&nbsp;&nbsp;
<select name="to5">
<?php /*
for($i=1;$i<=12;$i++) {
echo "<option value=\"$i:00\">$i:00</option>";	
}*/
?>
</select>
&nbsp;
<select name="to55">
<option value="a.m.">a.m.</option>
<option value="p.m.">p.m.</option>
</select>
</td></tr>
<tr><td><div style="clear:both;height:8px;"></div></td></tr>

<tr><td style="width:200px;text-align:right;">
Services Offered
</td><td style="padding-left:10px;">
<textarea name="services" rows="5" cols="54"></textarea>
</td></tr>
<tr><td><div style="clear:both;height:8px;"></div></td></tr>
<tr><td style="width:200px;text-align:right;">
Payment Method
</td><td style="padding-left:10px;">
<select name="payment">
<option value="credit">Credit Card</option>
<option value="cash">Cash</option>
</select>
</td></tr>

<tr><td><div style="clear:both;height:8px;"></div></td></tr>

<tr><td style="width:200px;text-align:right;">
Phone number
</td><td style="padding-left:10px;">
<input type="text" name="phone" />
</td></tr>
<tr><td><div style="clear:both;height:8px;"></div></td></tr>
<tr><td style="width:200px;text-align:right;"> 
Cellphone number
</td><td style="padding-left:10px;">
<input type="text" name="cell" />
</td></tr>
<tr><td><div style="clear:both;height:8px;"></div></td></tr>
<tr><td style="width:200px;text-align:right;">
Upload Picture
</td><td style="padding-left:10px;">
<input type="file" name="dentist_picture" />
</td></tr>

<tr><td><div style="clear:both;height:8px;"></div></td></tr>

<tr><td style="width:200px;text-align:right;">
<label>Enter the contents of image</label><label class="mandat"> </label></td>
                   <td style="padding-left:10px;">
                   <table cellpadding="0" cellspacing="0" border="0">
                   <tr><td>
                            <input type="text" name="captcha" id="captcha" maxlength="6" size="6"/></td>
                            <td>
                             <img src="captcha.php"/>
                            </td></tr></table></td>
                       
                    </tr>
                -->
                    <tr><td><div style="clear:both;height:8px;"></div></td></tr>
                     <tr><td style="width:200px;"><span style="color:#F00;"><?php echo $text;?></span>
                     </td>
                     <td style="padding-left:10px;">
                    <input type="submit" name="submit" value="Submit" class="submit2" id="submit"/>
                    &nbsp;&nbsp;<input type="button" name="cancel" value="Back" class="submit2" onclick="javascript:history.go(-1)"/>
                    </td></tr>

</table>


</td></tr>
                   



</table>

</td></tr>

</form>
<!--wrapper-->


</table>
<div style="clear:both;height:20px;"></div>
<?php //include('includes/footer.php');?>
</body>
</html>

