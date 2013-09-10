<?php
session_start();
//var_dump($_SESSION);die();
/*if(!$_SESSION["id"])
{
    //Do not show protected data, redirect to login...
    header('Location: dentist_login.php');
}*/
include('config.php');

$error="";
$cap = 'notEq';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($_POST['captcha'] == $_SESSION['cap_code']) {
        // Captcha verification is Correct. Do something here!
		//echo "ok";
        $cap = 'Eq';
if(isset($_POST['submit'])) {
$id=mysql_real_escape_string($_POST['blog_id']);
$name=mysql_real_escape_string($_POST['name']);
$email=mysql_real_escape_string($_POST['email']);
$comment=mysql_real_escape_string($_POST['comment']);

$sql="INSERT INTO comments SET comment_name='".$name."',comment_email='".$email."',comment_content='".$comment."',comment_date=NOW(),blog_id='".$id."'";
$res=mysql_query($sql);
}  
$error="";
} else {
		$error="Try again";
        // Captcha verification is wrong. Take other action
        $cap = '';
    }
}


?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>My Dentist Pal</title>
<link rel="stylesheet" type="text/css" media="screen" href="style/style.css" />

<style>
		#validEmail
		{
			margin-top: 4px;
			margin-left: 9px;
			position: absolute;
			width: 16px;
			height: 16px;
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
		</style>
        
      
        
        <script type="text/javascript" src="img/jquery-1.3.2.min.js"></script>
        <script type="text/javascript">
	
	/*function onTap() {
	alert(document.getElementById('validate').value);	
	}*/
	function ValidateContactForm()
{
    var email = document.ContactForm.validate;
	if (email.value.indexOf("@", 0) < 0)
    {
        window.alert("Please enter a valid e-mail address.");
        email.focus();
        return false;
    }
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
</head>

<body style="margin:0;padding:0;background-color:#f6f5f5;">
<!--wrapper--><table cellpadding="0" cellspacing="0" border="0" width="100%">
<!--top--><tr><td>
<?php //include('includes/top_patient.php');?>
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
<div style="float:right;margin-top:45px;">
<!--<div style="float:right;background-image:url('images/option2.png');width:101px;height:35px;"></div>
<a href="dentist_profile.php"><div style="float:right;background-image:url('images/profile.png');width:101px;height:35px;"></div></a>
<a href="message_contact.php"><div style="float:right;background-image:url('images/messaging.png');width:115px;height:35px;margin-right:2px;"></div></a>-->
</div>
</div><!--end of center-->
</div><!--end with navigation bar-->
<!--tooth--></td></tr>

<!--dentisit dashboard--><tr><td>
<div style="background-color:#e0e2e4;width:100%;height:90px;">
<div style="margin:0 auto;width:940px;"><!--center-->
<div style="float:left;margin-top:28px;"><!--Dentist's Dashboard--><!--<img src="images/dentist_dashboard.png" />-->
<span style="font-weight:bold;font-size:30px;color:#333;font-family:Arial, Helvetica, sans-serif;">
My Dentist Pal Blog</span>
</div>
<div style="float:right;">
<div style="float:right;margin-top:28px;"><!--<input type="text" name="search" />--></div>
<div style="clear:both;"></div>
<!--<div style="float:right;color:#969da4;font-size:10px;font-family:'Trebuchet MS', Arial, Helvetica, sans-serif;">CLICK HERE FOR ADVANCE SEARCH</div>--></div>
</div><!--end of center-->
</div>
<!--dentisit dashboard--></td></tr>

<!--menubar--><tr><td width="100%" height="54" style="background-image:url('images/menubar.png');">
<!--menuinblack--><div style="margin:0 auto;width:520px;">
<table cellpadding="0" cellspacing="0" border="0">
<tr>
<!--<td><img src="images/patient_list_black.png"/></td>
<td width="13">&nbsp;</td>
<td><img src="images/line.png"/></td>
<td width="13">&nbsp;</td>
<td><img src="img/bar_info.png"  /></td>-->
</tr>
</table>

<!--menuinblack--></div>
<!--menubar--></td></tr>

<!--include sidebar--><tr><td>
<div style="margin:0 auto;width:994px;">
<!--sidebar and content container--><table cellpadding="0" cellspacing="0" border="0">
<!--sidebar--><tr><td valign="top">
<div style="margin-top:-38px;">
<?php //include('includes/sidebar_message.php');?>
</div>
<!--sidebar--></td>
<!--content--><td valign="top" style="padding-top:26px;">
<?php 
if(isset($_GET['id'])){
$id = $_GET['id'];

include('includes/blog_comment.php');

}
else {
?>
<?php include('includes/box_blog_view.php'); }?>
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

