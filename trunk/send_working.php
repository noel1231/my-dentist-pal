<?php 
include('config.php');
session_start();
$dentist_id=$_SESSION['id'];

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
	$id=mysql_real_escape_string($_POST['pt_id']);
    $sendto=mysql_real_escape_string($_POST['sendto']);
	$contact=mysql_real_escape_string($_POST['contact']);
	$ctr=mysql_real_escape_string($_POST['countthis']);
}
//var_dump($ctr);die();
//var_dump($ctr);die();
//$id=explode(" ",$id);


//





/*$fileatt = $uploadfile; // Path to the file 
$fileatt_type = "application/octet-stream"; // File Type 
$fileatt_name = "Attach File"; // Filename that will be used for the file as the attachment */

//$email_from = ""; // Who the email is from 
//$email_subject = ""; // The Subject of the email 
//$email_txt = ""; // Message that the email has in it 

//$email_to = ""; // Who the email is too 

//$headers = "From: ".$email_from; 
// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";


// More headers
$headers .= 'From: Your Friendly Dentist ' . "\r\n";
//$headers .= 'Cc: myboss@example.com' . "\r\n";


/*$file = fopen($fileatt,'rb'); 
$data = fread($file,filesize($fileatt)); 
fclose($file); 

$semi_rand = md5(time()); 
$mime_boundary = "==Multipart_Boundary_x{$semi_rand}x"; 

$headers .= "\nMIME-Version: 1.0\n" . 
"Content-Type: multipart/mixed;\n" . 
" boundary=\"{$mime_boundary}\""; */

/*$email_message .= "This is a multi-part message in MIME format.\n\n" . 
"--{$mime_boundary}\n" . 
"Content-Type:text/html; charset=\"iso-8859-1\"\n" . 
"Content-Transfer-Encoding: 7bit\n\n" . 
$email_message . "\n\n"; */


//$ok = @mail($email_to, $email_subject, $email_message, $headers); 

	
	$msg  ="<html><head><title>Dentist Message</title></head>";
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
/*$data = chunk_split(base64_encode($data)); 

$msg .= "--{$mime_boundary}\n" . 
"Content-Type: {$fileatt_type};\n" . 
" name=\"{$fileatt_name}\"\n" . 
//"Content-Disposition: attachment;\n" . 
//" filename=\"{$fileatt_name}\"\n" . 
"Content-Transfer-Encoding: base64\n\n" . 
$data . "\n\n" . 
"--{$mime_boundary}--\n"; 
*/


	if($sendto=="yes") {
		
	if($to)
	{ if(mail($to,$subject,$msg,$headers))
	{
		
			
	$sql="INSERT INTO message_sent (patient_id,subject_message,date_message,to_message,body_message,patient_name,dentist_id) VALUES('$id','$subject',NOW(),'$to','$body','$patient_name','$dentist_id')";
	$res=mysql_query($sql);
	
	
	$sql="INSERT INTO patient_message_received (patient_id,dentist_id,subject_message,date_message,to_message,body_message,patient_name) VALUES('$id','$dentist_id','$subject',NOW(),'$to','$body','$patient_name')";
	$res=mysql_query($sql);
	}}  
	
	$sqls="SELECT * FROM patient_list WHERE dentist_id='".$den_id."'";
	$ress=mysql_query($sqls); 
	//var_dump($sql);die();
	$x=0;
	while($rows=mysql_fetch_array($ress)) {
		$x++;
	$email=$rows['email'];
	$patient_name=$rows['patient_name'];
	$id=$rows['id'];
	if($email!="") {
		
	mail($email,$subject,$msg,$headers);

	
	$sql="INSERT INTO message_sent (patient_id,subject_message,date_message,to_message,body_message,patient_name,dentist_id) VALUES('$id','$subject',NOW(),'$email','$body','$patient_name','$dentist_id')";
	$res=mysql_query($sql);

	$sql="INSERT INTO patient_message_received (patient_id,dentist_id,subject_message,date_message,to_message,body_message,patient_name) VALUES('$id','$dentist_id','$subject',NOW(),'$email','$body','$patient_name')";
	$res=mysql_query($sql);
	//var_dump($sql);die();
	
		
	
	}
	
	}
	
	}
	
	else if($sendto=="no") {
		
	if($to)
	{ if(mail($to,$subject,$msg,$headers))
	{
		
	
		
	$sql="INSERT INTO message_sent (patient_id,subject_message,date_message,to_message,body_message,patient_name,dentist_id) VALUES('$id','$subject',NOW(),'$to','$body','$patient_name','$dentist_id')";
	$res=mysql_query($sql);
	
	
	
	$sql="INSERT INTO patient_message_received (patient_id,dentist_id,subject_message,date_message,to_message,body_message,patient_name) VALUES('$id','$dentist_id','$subject',NOW(),'$to','$body','$patient_name')";
	$res=mysql_query($sql);
	
	}} 
	
	$sql="SELECT * FROM address_book_group WHERE id='".$contact."'";
	$res=mysql_query($sql);
	while($row=mysql_fetch_array($res)) {
	$contact=$row['group_name'];	
	}
	
	$sqla="SELECT * FROM addressbook WHERE dentist_id='".$den_id."' AND group_name='".$contact."'";
	$resa=mysql_query($sqla);
	//var_dump($resa);die();
	while($row=mysql_fetch_array($resa)) {
		   $contact=$row['email'];
		   $fname=$row['first_name'];
		   $lname=$row['last_name'];
		   $id=$row['id'];
		   $patient_name=$lname.", ".$fname;
		   if(mail($contact,$subject,$msg,$headers)) {
		
		   
		   $re="INSERT INTO message_sent (patient_id,subject_message,date_message,to_message,body_message,patient_name,dentist_id) VALUES('$id','$subject',NOW(),'$to','$body','$patient_name','$dentist_id')";
		   $sq=mysql_query($re);
		   
		   
		   $sql="INSERT INTO patient_message_received (patient_id,dentist_id,subject_message,date_message,to_message,body_message,patient_name) VALUES('$id','$dentist_id','$subject',NOW(),'$to','$body','$patient_name')";
	$res=mysql_query($sql);

		   
		   }
	                                     }
	}
	
	
	else {
	if(mail($to,$subject,$msg,$headers))
	{
		
//var_dump($id);die();
		
	$sql="INSERT INTO message_sent (patient_id,subject_message,date_message,to_message,body_message,patient_name,dentist_id) VALUES('$id','$subject',NOW(),'$to','$body','$patient_name','$dentist_id')";
	$res=mysql_query($sql);
	
	$sql="INSERT INTO patient_message_received (patient_id,dentist_id,subject_message,date_message,to_message,body_message,patient_name) VALUES('$id','$dentist_id','$subject',NOW(),'$to','$body','$patient_name')";
	$res=mysql_query($sql);
	}
	} 
	
	


//mail


	



//var_dump($x);die();
header('Location: message_compose.php');