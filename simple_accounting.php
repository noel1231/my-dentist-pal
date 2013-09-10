<?php
include('config.php');

if(isset($_POST['edit'])) {
$id=mysql_real_escape_string($_POST['id']);
$item_number=mysql_real_escape_string($_POST['item_number']);
$description=mysql_real_escape_string($_POST['description']);
$price=mysql_real_escape_string($_POST['price']);
$sql="UPDATE simple_accounting SET item_number='".$item_number."',description='".$description."',price='".$price."' WHERE id='".$id."'";
$res=mysql_query($sql);

echo '<script language="JavaScript">
  window.opener.location.href = window.opener.location.href;
  if (window.opener.progressWindow)		
 {
    window.opener.progressWindow.close()
  }
  window.close();
</script>';
}


if(isset($_POST['add'])) {
$dentist_id=mysql_real_escape_string($_POST['dentist_id']);
$item_number=mysql_real_escape_string($_POST['item_number']);
$description=mysql_real_escape_string($_POST['description']);
$price=mysql_real_escape_string($_POST['price']);
$sql="INSERT INTO simple_accounting (item_number,description,price,dentist_id) VALUES('$item_number','$description','$price','$dentist_id')";
$res=mysql_query($sql);

echo '<script language="JavaScript">
  window.opener.location.href = window.opener.location.href;
  if (window.opener.progressWindow)		
 {
    window.opener.progressWindow.close()
  }
  window.close();
</script>';

}
?>

<link rel="stylesheet" type="text/css" media="screen" href="style/style.css" />

<?php
if(isset($_GET['id']))
{
$id=$_GET['id'];	
	
$sql="SELECT * FROM simple_accounting WHERE id='".$id."'";	
$res=mysql_query($sql);	
while($row=mysql_fetch_array($res))	
	{ ?>
 <form method="post" action="" enctype="multipart/form-data">

<table style="font-family: Arial, Helvetica, sans-serif;color:#333;" cellpadding="0" cellspacing="0" border="0">
<tr>
<td width="130" style="text-align: left;padding-left:20px;font-size:13px;">
Item Number
</td>
<td style="padding-left:15px;"><input type="text" name="item_number" value="<?php echo $row['item_number'];?>"></td>
</tr>
<tr>
<td width="130" style="text-align: left;padding-left:20px;font-size:13px;">Description</td>
<td style="padding-left:15px;"><input type="text" name="description" value="<?php echo $row['description'];?>"></td>
</tr>
<tr>
<td width="130" style="text-align: left;padding-left:20px;font-size:13px;">Price</td>
<td style="font-size:13px;">P &nbsp;<input type="text" name="price" value="<?php echo $row['price'];?>" style="width:60px;">&nbsp;.00</td>
</tr>

</table>
<div style="clear:both;height:20px;"></div>
<table cellpadding="0" cellspacing="0" border="0">
<tr><td>

<input type="submit" name="edit" value="Save" class="submit2">
<input type="hidden" name="id" value="<?php echo $id;?>" />
</form>
</td></tr>
</table>
   
    
    <?php }
	} else if(isset($_GET['key']))
{
$key=$_GET['key'];	
?>

<form method="post" action="" enctype="multipart/form-data">

<table style="font-family: Arial, Helvetica, sans-serif;color:#333;" cellpadding="0" cellspacing="0" border="0">
<tr>
<td width="130" style="text-align: left;padding-left:20px;font-size:13px;">
Item Number
</td>
<td style="padding-left:17px;"><input type="text" name="item_number" ></td>
</tr>
<tr>
<td width="130" style="text-align: left;padding-left:20px;font-size:13px;">Description</td>
<td style="padding-left:17px;"><input type="text" name="description"></td>
</tr>
<tr>
<td width="130" style="text-align: left;padding-left:20px;font-size:13px;">Price</td>
<td>P &nbsp;<input type="text" name="price" style="width:60px;">&nbsp;.00</td>
</tr>

</table>
<div style="clear:both;height:20px;"></div>
<table cellpadding="0" cellspacing="0" border="0">
<tr><td>

<input type="submit" name="add" value="ADD" class="submit2">
<input type="hidden" name="dentist_id" value="<?php echo $key;?>" /> 
</form>
</td></tr>
</table>
<?php } ?>
