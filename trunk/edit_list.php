<?php
include('config.php');


if(isset($_POST['save']))
{
$id=mysql_real_escape_string($_POST['list_id']);
$did=mysql_real_escape_string($_POST['dentist_id']);
$item_number=mysql_real_escape_string($_POST['item_number']);
$description=mysql_real_escape_string($_POST['description']);
$price=mysql_real_escape_string($_POST['price']);

$sql="UPDATE simple_accounting SET item_number='".$item_number."',description='".$description."',price='".$price."' WHERE id='".$id."' AND dentist_id='".$did."'";
$res=mysql_query($sql);
}



if(isset($_GET['id'])){
$id = $_GET['id'];}

$sql="SELECT * FROM simple_accounting WHERE id='".$id."'";
$res=mysql_query($sql);
while($row=mysql_fetch_array($res)){
$item_number=$row['item_number'];
$description=$row['description'];
$price=$row['price'];
$id=$row['id'];
}



?>

<link rel="stylesheet" type="text/css" media="screen" href="style/style.css" />

<form method="post" action="" enctype="multipart/form-data">

<table style="font-family: Arial, Helvetica, sans-serif;color:#333;border:1px solid #CCC;" cellpadding="0" cellspacing="0" border="0">
<tr style="font-size:13px;font-weight:bold;"><td width="130" style="padding-left:20px;">
Item Number
</td>
<td width="120">Description</td>
<td width="80">Price</td>
</tr>
<tr style="font-size:13px;font-weight:bold;"><td width="130" style="padding-left:20px;">
<input type="text" name="item_number" value="<?php echo $item_number;?>">
</td>
<td>
<input type="text" name="description" value="<?php echo $description;?>">
</td>
<td>
<input type="text" name="price" value="<?php echo $price;?>">
</td>
</tr>
</table>
<div style="clear:both;height:20px;"></div>
<table cellpadding="0" cellspacing="0" border="0">
<tr><td>

<input type="submit" name="save" value="SAVE" class="submit2">
<input type="hidden" value="<?php echo $id;?>" name="list_id">
<input type="hidden" value="1" name="dentist_id">
</form>
</td></tr>
</table>