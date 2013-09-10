<?php
include('config.php');


if(isset($_GET['id'])){
$id = $_GET['id'];

$sql="DELETE FROM simple_accounting WHERE id='".$id."'";
$res=mysql_query($sql);

}

?>
<table style="font-family: Arial, Helvetica, sans-serif;color:#333;border:1px solid #CCC;" cellpadding="0" cellspacing="0" border="0">
<tr style="font-size:13px;font-weight:bold;background-color:#0281aa;color:#FFF;"><td width="130" style="padding-left:20px;border:1px solid #CCC;">
Item Number
</td>
<td width="120" style="padding-left:20px;border:1px solid #CCC;">Description</td>
<td width="80" style="padding-left:20px;border:1px solid #CCC;">Price</td>
<td width="100" style="padding-left:20px;border:1px solid #CCC;"></td>
</tr>
<?php 
$sql="SELECT * FROM simple_accounting";
$res=mysql_query($sql);
while($row=mysql_fetch_array($res)) {
?>
<tr style="font-size:13px;font-weight:bold;">
<td width="130" style="padding-left:20px;border:1px solid #CCC;">
<?php echo $row['item_number'];?>
</td>
<td style="padding-left:20px;border:1px solid #CCC;">
<?php echo $row['description'];?>
</td>
<td style="padding-left:20px;border:1px solid #CCC;">
<?php echo $row['price'];?>
</td>
<td style="padding-left:20px;border:1px solid #CCC;">
<a href="edit_list.php?id=<?php echo $row['id'];?>" onclick="popup(this.href,'name','550','400','no'); return false">Edit</a>
&nbsp;&nbsp;&nbsp;&nbsp;
<a href="simple_accounting_view.php?id=<?php echo $row['id'];?>" onclick="return onDelete();">Delete</a>
</td>

</tr><?php } ?>
</table>

<script type="text/javascript">

function popup(pUrl, pName, pWidth, pHeight, pScroll)
{
	LeftPosition = (screen.width) ? (screen.width-pWidth)   / 2 : 0;
	TopPosition  = (screen.height)? (screen.height-pHeight) / 2 : 0;
	settings = 'height='+pHeight+', width='+pWidth+', top='+TopPosition+', left='+LeftPosition+', scrollbars='+pScroll+', resizable';
	win = window.open(pUrl, pName, settings)
}

function onDelete()  
{  
if(confirm('Do you want to delete ?')==true)  
{  
return true;  
}  
else  
{  
return false;  
}  
}  

</script>