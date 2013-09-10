<link rel="stylesheet" type="text/css" media="screen" href="style/style.css" />
<?php
include('config.php');

if(isset($_GET['pay']))
{

$pay=$_GET['pay'];
$patient_id=$_GET['pt'];
$draft_id=$_GET['key'];
}

if(isset($_POST['save']))
{
$pay=mysql_real_escape_string($_POST['acct_sum_id']);
$month=mysql_real_escape_string($_POST['month']);
$day=mysql_real_escape_string($_POST['day']);
$year=mysql_real_escape_string($_POST['year']);
$ammount=mysql_real_escape_string($_POST['ammount']);
$date=$year."-".$month."-".$day;
//var_dump($date);die();

$sql="SELECT ammount_paid FROM accounting_summary WHERE id='".$pay."'";
$res=mysql_query($sql);
if(!$res) {
$sql="UPDATE accounting_summary SET ammount_paid='".$ammount."',paid_date='".$date."' WHERE id='".$pay."'";
$res=mysql_query($sql); }
else {
while($row=mysql_fetch_array($res)) {
$add=$row['ammount_paid'];	
}
$new=$add+$ammount;
$sql="UPDATE accounting_summary SET ammount_paid='".$new."',paid_date='".$date."' WHERE id='".$pay."'";
$res=mysql_query($sql);
}

$sql="SELECT * FROM accounting_summary WHERE id='".$pay."'";
$res=mysql_query($sql);
while($row=mysql_fetch_array($res)){
$paid=$row['ammount_paid'];
$total=$row['total'];
}
if($total==$paid) {
$text="yes";	
$sql="UPDATE accounting_summary SET paid_checker='".$text."' WHERE id='".$pay."'";
$res=mysql_query($sql);
}


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
<div style="margin:0 auto;width:380px;">
<form method="post" action="" enctype="multipart/form-data">
<table cellpadding="0" cellspacing="0" border="0">
<tr><td>Date of payment</td></tr>
<tr><td><div style="clear:both;height:5px;"></div></td></tr>
<tr><td>
<table cellpadding="0" cellspacing="0" border="0">
<tr><td>
<select name="month">
<option value="none">-- Select a month --</option>
<option value="1">January</option>
<option value="2">February</option>
<option value="3">March</option>
<option value="4">April</option>
<option value="5">May</option>
<option value="6">June</option>
<option value="7">July</option>
<option value="8">August</option>
<option value="9">September</option>
<option value="10">October</option>
<option value="11">November</option>
<option value="12">December</option>
</select>
</td>
<td style="padding-left:10px;">
<select name="day">
<?php
for($i=1;$i<=31;$i++){
echo "<option value=\"$i\">$i</option>";
}
?>
</select>
</td>
<td style="padding-left:10px;">
<input type="text" name="year" value="2012" style="width:40px;">
</td>
</tr></table>
</td></tr>
<tr><td><div style="clear:both;height:10px;"></div></td></tr>
<tr><td>
<table cellpadding="0" cellspacing="0" border="0">
<tr><td>
Amount
</td>
<td style="padding-left:10px;">P&nbsp;<input type="text" name="ammount" style="width:40px;">&nbsp;.00</td>
</tr></table>
</td></tr>
<tr><td><div style="clear:both;height:10px;"></div></td></tr>
<tr><td>
<table cellpadding="0" cellspacing="0" border="0">
<tr><td>
<input type="submit" name="save" value="Save" class="submit2">
</td>
<td style="padding-left:10px;">
<input type="button" name="cancel" value="Cancel" onClick="self.close();" class="submit2">
</td>
</tr></table>
</td></tr>
<input type="hidden" name="acct_sum_id" value="<?php echo $pay;?>">
</table>
</form>
</div>

