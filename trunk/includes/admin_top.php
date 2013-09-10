<?php 
session_start();

include('../config.php');
$sess_name=$_SESSION['admin_username'];
$sql="SELECT * FROM admin_account WHERE admin_username='".$sess_name."'";
$res=mysql_query($sql);
while($row=mysql_fetch_array($res))
{
$bday=$row['last_login'];
$name=$row['admin_name'];
}
//var_dump($sess_name);die();




?>
<div style="height:30px;width:100%;background-color:#0a3949;">
<div style="margin:0 auto;width:960px;">
<div style="float:right;margin-top:7px;margin-left:3px;"><a href="includes/logout.php" style="font-family:Arial, Helvetica, sans-serif;font-size:12px;color:#d1e64b;text-decoration:none;">Logout</a></div>
<span style="float:right;"><img src="../images/topsep.png" style="margin-right:12px;"/></span>
<span style="float:right;"><img src="../images/today.png" style="margin-top:8px;"/><span style="font-family:Arial, Helvetica, sans-serif;font-size:12px;margin-left:3px;color:#d1e64b;"><div style="float:right;margin-top:7px;margin-right:15px;"><?php $x=date("Y-m-d");echo $x;?></div></span></span>
<span style="float:right;"><img src="../images/topsep.png" style="margin-right:12px;"/></span>
<span style="float:right;"><img src="../images/lastlogin.png" style="margin-top:7px;"/><span style="font-family:Arial, Helvetica, sans-serif;font-size:12px;margin-left:3px;color:#d1e64b;"><div style="float:right;margin-top:6px;margin-right:15px;"><?php echo $bday;?></div></span></span>
<span style="float:right;"><img src="../images/topsep.png" style="margin-right:12px;"/></span>
<span style="float:right;"><img src="../images/topname.png" style="margin-top:5px;"/><span style="font-family:Arial, Helvetica, sans-serif;font-size:12px;margin-left:3px;color:#d1e64b;"><div style="float:right;margin-top:6px;margin-right:15px;"><?php echo $name;?></div></span></span>

</div>
</div>
