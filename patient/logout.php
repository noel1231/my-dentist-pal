<?php
session_start();
include('../config.php');
//var_dump($_SESSION);die();
$uname=$_SESSION['patient_id'];
//var_dump($uname);die();
$sql="UPDATE patient_list SET last_login=NOW() WHERE id='".$uname."'";
$res=mysql_query($sql);
//var_dump($res);die();

//var_dump($uname);die();
 /*header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
 header("Last-Modified: ". gmdate("D, d M Y H:i:s")." GMT");
 header("Cache-Control: no-store, no-cache, must-revalidate",false);
 header("Cache-Control: post-check=0, pre-check=0", false);
 header("Pragma: no-cache",false);
*/

header('Cache-Control: no-cache, must-revalidate');
header('Expires: Sat, 26 Jul 1997 05:00:00 GMT');

session_destroy();

header('Location: patient/patient_login.php');


?>