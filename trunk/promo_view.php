<link rel="stylesheet" type="text/css" media="screen" href="../style/style.css" />
<?php
session_start();
include('../config.php');
$patient_id=$_SESSION['patient_id'];
//$sess_name=$_SESSION[''];
//var_dump($patient_id);die();
if(isset($_POST['take'])) {
$idy=mysql_real_escape_string($_POST['promo_id']);	
$sql="INSERT INTO promo_takers SET promo_id='".$idy."',patient_id='".$patient_id."'";
$res=mysql_query($sql);

$sqls=mysql_query("SELECT * FROM promos_and_offer WHERE id='".$idy."'");
while($rows=mysql_fetch_array($res)){
$promo=stripslashes($rows['promo_subject']);
$id=$row['patient_id'];
}
$sq="SELECT * FROM patient_list WHERE id='".$id."'";
$re=mysql_query($sq);
while($row=mysql_fetch_array($re)) {
$to=$row["email"];	
}
$subject="Promo notification";
	$msg  ="<html><head><title>Admin Message</title></head>";
$msg .="<body>";
$msg .="<table cellspacing=\"0\" cellpadding=\"0\" border=\"0\">";
$msg .="<tr><td>";
$msg .="<h2 style=\"font-size:18px;font-family:Arial;color:#333;\"></h2>";
$msg .="</td></tr>";
$msg .="<tr><td style=\"padding-top:20px;padding-left:10px;\">";
$msg .= "You take the promo".$promo;
$msg .="</td></tr>";
$msg .="</table>";
$msg .="</body>";
$msg .="</html>";

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";

// More headers
$headers .= 'From: Your Friendly Dentist ' . "\r\n";

if(mail($to,$subject,$msg,$headers)) {
echo "ok";	
}
else {
echo "not ok";	
}

$sql="SELECT * FROM promos_and_offer WHERE id='".$idy."'";
$res=mysql_query($sql);
while($row=mysql_fetch_array($res)) 
{
$takers=$row['promo_takers'];	
}
$x=0;
//var_dump($res);die();
if(!$takers) {
$x=1;
$sql="UPDATE promos_and_offer SET promo_takers='".$x."' WHERE id='".$idy."'";
$res=mysql_query($sql);
}
else {
$x=$takers+1;	
$sql="UPDATE promos_and_offer SET promo_takers='".$x."' WHERE id='".$idy."'";
$res=mysql_query($sql);	
}
//var_dump($sql);

echo '<script language="JavaScript">
  window.opener.location.href = window.opener.location.href;
  if (window.opener.progressWindow)		
 {
    window.opener.progressWindow.close()
  }
  window.close();
</script>';
}


if(isset($_GET['id'])){
$idy = $_GET['id'];  }

$error="";
$errors="";
$test="";

$sql="SELECT * FROM promos_and_offer WHERE id='".$idy."'";
$res=mysql_query($sql);
while($row=mysql_fetch_array($res)){
$limit=$row['promo_limit'];
$num=$row['promo_takers'];
}
//var_dump($limit);var_dump($num);die();
if($limit==$num){
$errors="Promo is now already unavailable<br><br>";	
}

$sql="SELECT * FROM promo_takers WHERE promo_id='".$idy."'";
$res=mysql_query($sql);

while($row=mysql_fetch_array($res))
{
	$ctr=$row['patient_id'];
	
	
	
	//var_dump($ctr);var_dump($patient_id);die();
if($ctr==$patient_id) {
$error="You already take this promo";
$test="disabled";

} 

}


$sql="SELECT * FROM promos_and_offer WHERE id='".$idy."'";
$res=mysql_query($sql);

while($row=mysql_fetch_array($res))
{
	

?>
<div style="margin:0 auto;width:480px;">
<table cellpadding="0" cellspacing="0" border="0" width="480" style="font-family:Arial, Helvetica, sans-serif;">

<tr style="color:#FFF;font-size:20px;font-weight:bold;">
<td style="padding-top:20px;">
<div style="margin:0 auto;width:460px;background-color:#0281aa;padding-left:20px;padding-top:10px;padding-bottom:10px;">
<?php echo $row['promo_subject'];?>
</div>
</td>
</tr>

<tr><td style="padding-top:12px;">
<div style="margin:0 auto;width:460px;">
<table cellpadding="0" cellspacing="0" border="0" style="width:460px;">
<tr><td width="60%" style="color:#333;font-size:13px;" valign="top">
<?php echo $row['promo_message'];?>
</td>
<td style="width:40%;padding-left:10px;" valign="top">
<img src="http://leentechsystems.net/mydentistpal/admin/<?php echo $row['promo_picture'];?>" />
</td>
</tr>
<tr><td>
<span style="font-size:12px;color:#F00;"><i><?php echo $errors;?></i></span>
</td></tr>
<form method="post" action="" enctype="multipart/form-data">
<tr><td>
<table cellpadding="0" cellspacing="0" border="0">
<tr><td>
<input type="submit" name="take" class="submit2" value="Take this offer" <?php echo $test;?>>
</td><td style="padding-left:2px;"><span style="font-size:12px;color:#F00;"><i><?php echo $error;?></i></span></td>
</tr><tr><td style="padding-top:5px;">
<input type="button" onclick="self.close()" name="close" class="submit2" value="Close">
<input type="hidden" name="promo_id" value="<?php echo $idy;?>">
</td></tr>
</table>
</td>
<td style="padding-left:20px;color:#333;font-size:13px;">
No. of Takers
<?php 
$sql=mysql_query("SELECT COUNT(*) AS num FROM promo_takers WHERE promo_id='".$idy."'");
$res=mysql_fetch_assoc($sql);
$rows=$res['num'];

if(empty($rows))
{
echo "0";	
}
else {
echo $rows; }
//var_dump($rows);die();
?>
</td>
</tr>
</form>
</table>
</div>
</td></tr>
</table>
</div>


<?php } ?>