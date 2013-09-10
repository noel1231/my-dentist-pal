<link rel="stylesheet" type="text/css" media="screen" href="../style/style.css" />
<?php

include('config.php');

//$sess_name=$_SESSION[''];

if(isset($_GET['id'])){
$idy = $_GET['id'];  }

$sql="SELECT * FROM promos_and_offer WHERE id='".$idy."'";
$res=mysql_query($sql);

while($row=mysql_fetch_array($res))
{
?>
<div style="margin:0 auto;width:480px;">
<table cellpadding="0" cellspacing="0" border="0" width="480" style="font-family:Arial, Helvetica, sans-serif;">

<tr style="color:#FFF;font-size:20px;font-weight:bold;">
<td style="padding-top:20px;">
<div style="font-size:20px;margin:0 auto;width:460px;background-color:#0281aa;padding-left:20px;padding-top:10px;padding-bottom:10px;">
<?php echo $row['promo_subject'];?>
</div>
</td>
</tr>

<tr><td style="padding-top:12px;">
<div style="margin:0 auto;width:460px;">
<table cellpadding="0" cellspacing="0" border="0">
<tr><td width="60%" style="color:#333;font-size:13px;" valign="top">
<?php echo $row['promo_message'];?>
</td>
<td style="width:40%;padding-left:10px;" valign="top">
<img src="http://leentechsystems.net/mydentistpal/admin/<?php echo $row['promo_picture'];?>" />
</td>
</tr>
<tr><td>
<input type="submit" name="take" class="submit2" value="Take this offer">
<div style="clear:both;height:10px;"></div>
<input type="button" onclick="self.close()" name="close" class="submit2" value="Close" />
</td>
<td style="padding-left:20px;color:#333;font-size:13px;">
No. of Takers
<?php 
if(empty($row['promo_takers']))
{
echo "0";	
}
else {
echo $row['promo_takers']; }
?>
</td>
</tr>
</table>
</div>
</td></tr>
</table>
</div>


<?php } ?>