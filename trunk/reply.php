<?php
include('config.php');

$pt_id=mysql_real_escape_string($_POST['pt_id']);
$den_id=mysql_real_escape_string($_POST['den_id']);
$sub=mysql_real_escape_string($_POST['subject']);
$reply=mysql_real_escape_string($_POST['reply']);
$reply2=stripslashes($_POST['reply']);
$sub_now="RE: $sub";

$sql="SELECT * FROM patient_list WHERE id='".$pt_id."'";
$res=mysql_query($sql);
while($row=mysql_fetch_array($res))
{
$email=$row['email'];
$pt_name=$row['patient_name'];
}

if(!$res) {
$sql="SELECT * FROM admin_account";
$res=mysql_query($sql);
while($row=mysql_fetch_array($res)) {
$email=$row['admin_email'];	
$pt_name=$row['admin_name'];
}

}

$msg  ="<html><head><title>Dentist Message</title></head>";
$msg .="<body>";
$msg .="<table cellspacing=\"0\" cellpadding=\"0\" border=\"0\">";
$msg .="<tr><td>";
$msg .="<h2 style=\"font-size:18px;font-family:Arial;color:#333;\"></h2>";
$msg .="</td></tr>";
$msg .="<tr><td style=\"padding-top:20px;padding-left:10px;\">";
$msg .= $reply2;
$msg .="</td></tr>";
$msg .="</table>";
$msg .="</body>";
$msg .="</html>";




// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";

// More headers
$headers .= 'From: Your Friendly Dentist ' . "\r\n";
//$headers .= 'Cc: myboss@example.com' . "\r\n";
	
	
//var_dump($pt_id);die();	

if($pt_id=="admin") {
$var="admin";	
$sql="SELECT * FROM admin_account";
$res=mysql_query($sql);
while($row=mysql_fetch_array($res)) {
$email=$row["admin_email"];	
}
//var_dump($res);die();
if(mail($email,$sub_now,$reply2,$headers)){
	$sql="INSERT INTO admin_received_message (dentist_id,message_subject,message_date,message_content) VALUES('$den_id','$sub_now',NOW(),'$reply')";
	$res=mysql_query($sql);
	
	$sql="INSERT INTO message_sent (patient_id,subject_message,date_message,to_message,body_message,patient_name,dentist_id) VALUES('$var','$sub_now',NOW(),'$email','$reply','$var','$den_id')";
$res=mysql_query($sql);
}

}

else {
if(mail($email,$sub_now,$reply2,$headers)) {
$sql="INSERT INTO message_sent (patient_id,subject_message,date_message,to_message,body_message,patient_name,dentist_id) VALUES('$pt_id','$sub_now',NOW(),'$email','$reply','$pt_name','$den_id')";
$res=mysql_query($sql);

	$sql="INSERT INTO patient_message_received (patient_id,dentist_id,subject_message,date_message,to_message,body_message,patient_name) VALUES('$pt_id','$den_id','$sub_now',NOW(),'$email','$reply','$pt_name')";
	$res=mysql_query($sql);

}
}
header('Location: message_received.php');
?>