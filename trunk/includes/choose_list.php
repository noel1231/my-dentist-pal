
<link rel="stylesheet" type="text/css" media="screen" href="../style/style.css" />

<?php
include('../config.php');

if(isset($_POST['calculate'])) {
	$price=0; ?>
    <table style="font-family: Arial, Helvetica, sans-serif;color:#333;border:1px solid #CCC;" cellpadding="0" cellspacing="0" border="0">
<tr style="font-size:13px;font-weight:bold;background-color:#0281aa;color:#FFF;">
<td width="130" style="padding-left:20px;border:1px solid #CCC;">
Item Number
</td>
<td width="120" style="padding-left:20px;border:1px solid #CCC;">Description</td>
<td width="80" style="padding-left:20px;border:1px solid #CCC;">Price</td>

</tr>
<?php 
for($i=0;$i<count($_POST["check"]);$i++){
		if($_POST["check"][$i] != "") {
			$qwerty="SELECT * FROM simple_accounting WHERE id='".$_POST['check'][$i]."'";
			$res=mysql_query($qwerty);
			//var_dump($res);die();
			while($row=mysql_fetch_array($res)){
			?>
            

<tr style="font-size:13px;font-weight:bold;">
<td style="padding-left:20px;border:1px solid #CCC;">
<?php echo $row['item_number'];?>
</td>
<td style="padding-left:20px;border:1px solid #CCC;">
<?php echo $row['description'];?>
</td>
<td style="padding-left:20px;border:1px solid #CCC;">
P&nbsp;<?php echo $row['price'];?>&nbsp;.00
</td></tr>
<?php 
$t=$row['price'];
$price=$price+$t;
} ?>

<?php
	}}
	//echo $price; ?>

<tr style="font-size:13px;font-weight:bold;border:2px solid #CCC;"><td>&nbsp;</td>
<td>&nbsp;</td>

<td style="padding-left:20px;">Total&nbsp;&nbsp;&nbsp;P&nbsp;<?php echo $price;?>&nbsp;.00</td>

	<?php 
} else { ?>

<form method="post" action="" enctype="multipart/form-data">
<table style="font-family: Arial, Helvetica, sans-serif;color:#333;border:1px solid #CCC;" cellpadding="0" cellspacing="0" border="0">
<tr style="font-size:13px;font-weight:bold;background-color:#0281aa;color:#FFF;">
<td width="70" style="padding-left:20px;border:1px solid #CCC;">Check</td>
<td width="130" style="padding-left:20px;border:1px solid #CCC;">
Item Number
</td>
<td width="120" style="padding-left:20px;border:1px solid #CCC;">Description</td>
<td width="80" style="padding-left:20px;border:1px solid #CCC;">Price</td>

</tr>
<?php 
$i=0;
$sql="SELECT * FROM simple_accounting";
$res=mysql_query($sql);
while($row=mysql_fetch_array($res)) {
$i++;
?>
<tr style="font-size:13px;font-weight:bold;">
<td style="text-align:center;border:1px solid #CCC;">
<input type="checkbox" name="check[]" value="<?php echo $row['id'];?>" id="check<?php echo $i;?>">
</td>
<td width="130" style="padding-left:20px;border:1px solid #CCC;">
<?php echo $row['item_number'];?>
</td>
<td style="padding-left:20px;border:1px solid #CCC;">
<?php echo $row['description'];?>
</td>
<td style="padding-left:20px;border:1px solid #CCC;">
<?php echo $row['price'];?>
</td>


</tr><?php } ?>
<tr><td>
<div style="clear:both;height:20px;"></div>
<input type="submit" name="calculate" value="Submit" class="submit2">
<input type="hidden" name="hdnCount" value="<?php echo $i;?>">
</td></tr>
</table>
</form>
<div style="clear:both;height:20px;"></div>
<iframe src="http://leentechsystems.net/mydentistpal/simple_accounting_view.php" width="550" height="150" scrolling="auto" style=" border:none;"></iframe>

<div style="clear:both;height:20px;"></div>

<iframe src="http://leentechsystems.net/mydentistpal/simple_accounting.php" width="550" height="150" scrolling="no" style=" border:none;margin-top:20px;"></iframe>


<?php } ?>

