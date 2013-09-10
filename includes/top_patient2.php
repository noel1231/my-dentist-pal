<?php 
session_start();

include('../config.php');
$sess_id=$_SESSION['id'];
//var_dump($_SESSION);die();
$sql="SELECT * FROM dentist_list WHERE id='".$sess_id."'";
$res=mysql_query($sql);
while($row=mysql_fetch_array($res))
{
$bday=$row['last_login'];
$fname=$row['first_name'];
$lname=$row['sur_name'];
}?>
<div style="height:30px;width:100%;background-color:#0a3949;">
<div style="margin:0 auto;width:960px;">
<div style="float:right;margin-top:7px;margin-left:3px;"><a href="logout.php" style="font-family:Arial, Helvetica, sans-serif;font-size:12px;color:#d1e64b;text-decoration:none;">Logout</a></div>
<span style="float:right;"><img src="http://leentechsystems.net/mydentistpal/images/topsep.png" style="margin-right:12px;"/></span>
<span style="float:right;"><img src="http://leentechsystems.net/mydentistpal/images/today.png" style="margin-top:8px;"/><span style="font-family:Arial, Helvetica, sans-serif;font-size:12px;margin-left:3px;color:#d1e64b;"><div style="float:right;margin-top:7px;margin-right:15px;"><?php $x=date("Y-m-d");echo $x;?></div></span></span>
<span style="float:right;"><img src="http://leentechsystems.net/mydentistpal/images/topsep.png" style="margin-right:12px;"/></span>
<span style="float:right;"><img src="http://leentechsystems.net/mydentistpal/images/lastlogin.png" style="margin-top:7px;"/><span style="font-family:Arial, Helvetica, sans-serif;font-size:12px;margin-left:3px;color:#d1e64b;"><div style="float:right;margin-top:6px;margin-right:15px;"><?php echo $bday;?></div></span></span>
<span style="float:right;"><img src="http://leentechsystems.net/mydentistpal/images/topsep.png" style="margin-right:12px;"/></span>
<span style="float:right;"><img src="http://leentechsystems.net/mydentistpal/images/topname.png" style="margin-top:5px;"/><span style="font-family:Arial, Helvetica, sans-serif;font-size:12px;margin-left:3px;color:#d1e64b;"><div style="float:right;margin-top:6px;margin-right:15px;"><?php echo $fname." ".$lname;?></div></span></span>
</div>
</div>