<?php
session_start();
include('../config.php');

$uname=mysql_real_escape_string($_POST['username']);
$pass=mysql_real_escape_string($_POST['password']);
if($uname&&$pass) {
$uname=strtolower($uname);	
$sql=mysql_query("SELECT * FROM admin_account WHERE lower(admin_username)='".$uname."'");
$numrows=mysql_num_rows($sql);
//var_dump($numrows);die();
if($numrows!=0) {
while($row=mysql_fetch_assoc($sql))
{
$dbusername=$row['admin_username'];	
$dbpassword=$row['admin_password'];
}
//var_dump($dbusername);var_dump($dbpassword);die();
if($uname==$dbusername&&md5($pass)==$dbpassword)
{ 
$_SESSION['admin_username']=$dbusername;
$_SESSION['admin_name']=$uname;
$_SESSION['admin_bday']=$bday;
$_SESSION['last_login']=$last_login;
header('Location: admin/admin_landing.php'); 
}
else 
{ header('Location: admin/admin_login.php?error'); }
}
else 
{ header('Location: admin/admin_login.php?error'); }
}
else 
{ header('Location: admin/admin_login.php?error'); }
?>