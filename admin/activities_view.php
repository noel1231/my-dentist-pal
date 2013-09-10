<link rel="stylesheet" type="text/css" media="screen" href="../style/style.css" />
<?php 
include('config.php');


if(isset($_GET['id'])){
$idy = $_GET['id'];  }

$sql="SELECT * FROM activities WHERE id='".$idy."'";
$res=mysql_query($sql);

while($row=mysql_fetch_array($res))
{
?>

<table cellpadding="0" cellspacing="0" border="0">
<tr><td style="background-color:#0281aa;width:460px;padding-top:20px;padding-left:20px;padding-bottom:20px;">
<span style="font-weight:bold;font-family:Arial, Helvetica, sans-serif;font-size:18px;color:#FFF;">
<?php echo $row['act_subject'];?>
</span>
</td></tr>
<tr><td><div style="clear:both;height:10px;"></div></td></tr>
<tr><td>
<div style="margin-left:20px;">
<span style="font-family:Arial, Helvetica, sans-serif;color:#333;font-size:12px;font-weight:bold;font-style:">
<u><?php echo $row['act_publish'];?></u>
</span>
</div>
</td></tr>
<tr><td><div style="clear:both;height:10px;"></div></td></tr>
<tr><td>
<div style="margin:0 auto;width:480px;">
<span style="margin-left:20px;width:460px;color:#333;font-family:Arial, Helvetica, sans-serif;font-size:12px;font-weight:bold;">
<?php echo $row['act_content'];?>
</span>
</div>
</td></tr>


<?php } ?>
<tr><td><div style="clear:both;height:10px;"></div></td></tr>
<tr><td>
<div style="margin:0 auto;width:480px;">
<div style="float:right;">
<input type="button" name="cancel" value="Close" class="submit2" onclick="self.close()">
</div>
</div>
</td></tr>
</table> 

