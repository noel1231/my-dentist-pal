<?php 
include('config.php');


//mail
if(isset($_POST['compose'])) {
	$subject=mysql_escape_string($_POST['subject']);
	$den_id=mysql_real_escape_string($_POST['den_id']);
	$to=mysql_escape_string($_POST['to']);
	$body=mysql_escape_string($_POST['content']);
	$patient_name=mysql_real_escape_string($_POST['pt_name']);
	$body2=$_POST['content'];
	$body2=stripslashes($body2);
	//$date=NOW();
	$id="admin";
	$all=mysql_real_escape_string($_POST['all_den']);
}
	
	
	$msg  ="<html><head><title>Admin Message</title></head>";
$msg .="<body>";
$msg .="<table cellspacing=\"0\" cellpadding=\"0\" border=\"0\">";
$msg .="<tr><td>";
$msg .="<h2 style=\"font-size:18px;font-family:Arial;color:#333;\"></h2>";
$msg .="</td></tr>";
$msg .="<tr><td style=\"padding-top:20px;padding-left:10px;\">";
$msg .= $body2;
$msg .="</td></tr>";
$msg .="</table>";
$msg .="</body>";
$msg .="</html>";




// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";

// More headers
$headers .= 'From: Admin ' . "\r\n";
//$headers .= 'Cc: myboss@example.com' . "\r\n";
	
	if($to) {
	if(mail($to,$subject,$msg,$headers))
	{
	$sql="INSERT INTO message_received (patient_id,message_subject,message_date,message_content,dentist_id) VALUES('$id','$subject',NOW(),'$body2','$den_id')";
	$res=mysql_query($sql);
	
	$sql="INSERT INTO admin_sent_message (dentist_id,message_subject,message_date,message_content) VALUES('$den_id','$subject',NOW(),'$body2')";
	$res=mysql_query($sql);
	}
	
	if($all=="yes") {
	$yes="yes";
	$query=mysql_query("SELECT * FROM dentist_list WHERE allow_dentist='".$yes."'");
	while($wor=mysql_fetch_array($query)) {
		
		$email=$wor['email'];
		$den_id=$wor['id'];
		if(mail($email,$subject,$msg,$headers)) {
		$sql="INSERT INTO message_received (patient_id,message_subject,message_date,message_content,dentist_id) VALUES('$id','$subject',NOW(),'$body2','$den_id')";
	$res=mysql_query($sql);
	
	$sql="INSERT INTO admin_sent_message (dentist_id,message_subject,message_date,message_content) VALUES('$den_id','$subject',NOW(),'$body2')";
	$res=mysql_query($sql);
		}
	                                       }
	}
	
	
	}
	
	else {
	
	if($all=="yes") {
	$yes="yes";
	$query=mysql_query("SELECT * FROM dentist_list WHERE allow_dentist='".$yes."'");
	while($wor=mysql_fetch_array($query)) {
		$den_id=$wor['id'];
		$email=$wor['email'];
		if(mail($email,$subject,$msg,$headers)) {
		$sql="INSERT INTO message_received (patient_id,message_subject,message_date,message_content,dentist_id) VALUES('$id','$subject',NOW(),'$body2','$den_id')";
	$res=mysql_query($sql);
	
	$sql="INSERT INTO admin_sent_message (dentist_id,message_subject,message_date,message_content) VALUES('$den_id','$subject',NOW(),'$body2')";
	$res=mysql_query($sql);
		}
	                                       }
	}
		
	}


//mail


	




header('Location: message_compose.php');