<?php
include('config.php');
$q=$_GET["q"];
//var_dump($q);die();
?>
<table cellpadding="0" cellspacing="0" border="0" style="font-family: Arial, Helvetica, sans-serif;">
<?php 
$sql="SELECT * FROM simple_accounting WHERE id='".$q."'";
$res=mysql_query($sql);

while($row=mysql_fetch_array($res)) {
?>
<tr style="font-size:13px;font-weight:bold;">
<td width="130" style="padding-left:20px;border:">
<?php echo $row['item_number'];?>
</td>
<td style="width:120px;padding-left:20px;">
<?php echo $row['description'];?>
</td>
<td style="width:80px;padding-left:20px;">
<?php echo $row['price'];?>
</td>

<?php 
$y=$row['price'];
$x=$x+$y; ?>
</tr><?php } ?>


