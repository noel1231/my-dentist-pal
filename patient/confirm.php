<?php
session_start();
include('../config.php');

$uname=mysql_real_escape_string($_POST['username']);
$pass=mysql_real_escape_string($_POST['password']);
if($uname&&$pass) {

$uname=strtolower($uname);	
$sql=mysql_query("SELECT * FROM patient_list WHERE lower(email)='".$uname."'");
$numrows=mysql_num_rows($sql);

//var_dump(md5($pass));die();
if($numrows!=0) {
while($row=mysql_fetch_assoc($sql))
{
$id=$row['id'];
$dbusername=$row['email'];	
$dbpassword=$row['password'];
}
//var_dump($dbusername);var_dump($dbpassword);die();
if($uname==$dbusername&&md5($pass)==$dbpassword)
{ 

$_SESSION['patient_id']=$id;


header('Location: patient/patient_landing.php'); 
}
else 
{ header('Location: patient/patient_login.php?error'); }
}
else 
{ header('Location: patient/patient_login.php?error'); }
}

else 
{ header('Location: patient/patient_login.php?error'); }
?>