<?php


$dentist_id=$_SESSION['id'];

$link="simple_accounting.php?key=$dentist_id";

if(isset($_GET['id']))
{
$id=$_GET['id']; 
$sql="DELETE FROM simple_accounting WHERE id='".$id."'";
$res=mysql_query($sql);

}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
a.nav {
text-decoration:none;
color:#333;
}

a.nav:hover {
text-decoration:underline;	
color:#333;
}
</style>
        <script language="JavaScript"> 
function ClickCheckAll(vol)  
{  
  
var i=1;  
for(i=1;i<=document.frmMain.hdnCount.value;i++)  
{  
if(vol.checked == true)  
{  
eval("document.frmMain.check"+i+".checked=true");  
}  
else  
{  
eval("document.frmMain.check"+i+".checked=false");  
}  
}  
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

function onSelect()  
{  
var x=document.getElementById('pt_select').value;
if(x=='none') {
alert('Choose a patient in this transaction.');	
return false;
}
}


function Receive()  
{  
alert('Transaction is closed or payment is full.');
}


</script>

<!--<script>
function ChangePrice() {
var x= document.getElementById('quantity').value;
var y=document.getElementById('stable').value;
alert(y);
}
</script>
-->

<!--<script type="text/javascript" src="ckeditor/jquery/jquery.1.4.min.js"></script>
	<script type="text/javascript" src="ckeditor/ckeditor/ckeditor.js"></script>-->
</head>

<body>

<map name="Map" id="Map">
  <!--<area shape="rect" coords="8,1,131,42" href="messaging.php" />
  <area shape="rect" coords="138,2,263,41" href="received_message.php" />-->
  <area shape="rect" coords="638,2,689,33" href="patient_dental_edit.php" />
</map>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>&nbsp;</td>
  </tr>
  <!--<tr>
    <td><table width="739" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td height="39" colspan="2" valign="top"><div>
          <div style="width:140px; margin-left:20px; margin-bottom:-2px; float:left;">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="6"><img src="img/t1.jpg" width="6" height="41" alt="" /></td>
                <td width="661" align="center" style="background: url(img/t3.jpg);"><a href="patient_list.php"><img src="img/t_patient_list.png"  width="98" height="18" alt="" /></a></td>
                <td width="6"><img src="img/t2.jpg" width="6" height="41" alt="" /></td>
              </tr>
            </table>
          </div>
          <div style="width:120px; margin-left:10px; margin-bottom:-2px; float:left;">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="6"><img src="img/t1.jpg" width="6" height="41" alt="" /></td>
                <td width="661" align="center" style="background: url(img/t3.jpg);"><a href="add_patient.php"><img src="img/t_add.png" width="82" height="18" alt="" /></a></td>
                <td width="6"><img src="img/t2.jpg" width="6" height="41" alt="" /></td>
              </tr>
            </table>
          </div>
          <!--<div style="width:110px; margin-left:10px; margin-bottom:-2px; float:left">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="6"><img src="img/t1.jpg" width="6" height="41" alt="" /></td>
                <td width="661" align="center" style="background: url(img/t3.jpg);"><img src="img/t-sent.png" width="72" height="17" alt="" /></td>
                <td width="6"><img src="img/t2.jpg" width="6" height="41" alt="" /></td>
              </tr>
            </table>
          </div>-->
        <?php /* <div style="width:130px; margin-left:10px; margin-bottom:-2px; float:left; z-index:999999999">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="6"><img src="img/u1.jpg" width="6" height="41" alt="" /></td>
                <td width="661" align="center" style="background: url(img/u3.jpg); font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#3e4447;"><!--Joselito Galvez--><?php
				
				$length=14;
$name1=$name;
//$name=strlen($name);
//echo $name;
$display = substr($name1, 0, $length) ;
echo "<span style=\"margin-left:4px;color:#333;font-family:Arial, Helvetica, sans-serif;font-size:13px;\">$display</span>";
echo "..." ;
				
				//echo $name;?></td>
                <td width="6"><img src="img/u2.jpg" width="6" height="41" alt="" /></td>
              </tr>
            </table>
          </div>
        </div></td>
      </tr>*/?>
      <tr>
        <td colspan="2"><img src="img/1.jpg" width="739" height="12" alt="" /></td>
      </tr>
      <tr>
        <td height="47" style="background:url(img/2.jpg);">
      <table cellpadding="0" cellspacing="0" border="0" style="width:100%;">
	  <tr><td> 
        <img src="img/add_transac.png" height="20" width="158" style="margin-top:-8px;margin-left:19px;"/></td>
		<td align="right">
		<div style="margin-top:-6px;margin-right:19px;">
		<input type="button" name="add" value="Add Item" class="submit" onclick="popup1('simple_accounting.php?key=<?php echo $dentist_id;?>','name','500','200','no'); return false"/><!--&nbsp;&nbsp;
			<input type="button" name="view" value="View List" class="submit" onclick="window.location='simple_accounting_list.php'"/>--></div>
		</td>
		</tr></table>
        </td>
      </tr>
      <tr>
        <td colspan="2" valign="top" style="background:url(img/3.jpg); padding-bottom:10px;"><div style="margin-top:-8px; position: relative;">
          <table width="690" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td bgcolor="#FFFFFF" style="border-left:1px solid #a0a8ac; border-bottom:1px solid #a0a8ac; border-right:1px solid #a0a8ac;"><!--<p>&nbsp;</p>-->
                <!--<img src="img/menu_patient_info.png" width="691" height="35" border="0" usemap="#Map2" />
                <map name="Map2" id="Map2">
                  <area shape="rect" coords="3,3,97,33" href="#" />
                  <area shape="rect" coords="103,3,217,32" href="patient_medical.php?id=<?php //echo $id;?>" />
                  <area shape="rect" coords="222,3,331,32" href="patient_dental.php?id=<?php //echo $id;?>" />
                  <area shape="rect" coords="337,3,428,32" href="patient_tooth_chart.php?id=<?php //echo $id;?>" />
                  <area shape="rect" coords="433,3,505,32" href="patient_visit_log.php?id=<?php //echo $id;?>" />
                  <area shape="rect" coords="511,3,573,32" href="patient_others.php?id=<?php //echo $id;?>" />
                  <area shape="rect" coords="578,3,634,32" href="patient_notes.php?id=<?php //echo $id;?>" />
                  <area shape="rect" coords="640,4,687,32" href="patient_info_edit.php?id=<?php //echo $id;?>" />
                </map>-->
                
               <div>
               <table cellpadding="0" cellspacing="0" border="0" style="font-family:Arial, Helvetica, sans-serif;">
              <tr><td style="font-weight:bold;background-image:url(img/option_center_check.png);width:160px;font-size:14px;padding-top:10px;padding-bottom:10px;text-align:center;border-right:1px solid #cdcbd4;">
              <a href="simple_accounting_list.php" style="color:#333;text-decoration:none;">List of Transactions
              </td>
              <td style="padding-top:10px;padding-bottom:10px;text-align:center;border-right:1px solid #cdcbd4;font-weight:bold;background-color:#FFF;font-size:14px;width:160px;">
             <a href="dentist_simple_accounting.php" style="color:#333;text-decoration:none;"> Add Transactions
              </td>
             <td style="text-align:center;padding-top:8px;padding-bottom:8px;border-right:1px solid #cdcbd4;background-image:url(img/option_center_check.png);font-weight:bold;width:150px;font-size:14px;">
              <a href="transaction.php?id=close" style="color:#333;text-decoration:none;">Closed transaction</a>
              </td>
                <td style="text-align:center;padding-top:8px;padding-bottom:8px;border-right:1px solid #cdcbd4;background-image:url(img/option_center_check.png);font-weight:bold;width:150px;font-size:14px;">
               <a href="transaction.php?id=open" style="color:#333;text-decoration:none;">Open transaction</a>
              </td>
              <td style="text-align:center;padding-top:8px;padding-bottom:8px;background-image:url(img/option_center_check.png);font-weight:bold;width:66px;">&nbsp;
           
              </td>
              </tr>
              <tr><td><div style="clear:both;height:20px;"></div></td></tr>
              </table>
               <table cellpadding="0" cellspacing="0" border="0" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;color:#F00;">
               <!--<tr><td>
                <table cellpadding="0" cellspacing="0" border="0" style="padding-bottom:20px;padding-top:20px;font-family:Arial, Helvetica, sans-serif;font-size:14px;color:#F00;">
<tr><td>
<a href="simple_accounting.php?key=<?php //echo $dentist_id;?>" onclick="popup1(this.href,'name','500','200','no'); return false">Add Item</a>
</td>
<td style="padding-left:10px;"><a href="simple_accounting_list.php">View List</a></td>

</tr></table></td></tr>-->
<tr><td style="padding-top:10px;">
<?php 
if(isset($_POST['calculate'])) {
	//$pt_id=mysql_real_escape_string($_POST['pt_id']);
	$month=mysql_real_escape_string($_POST['month']);
	$day=mysql_real_escape_string($_POST['day']);
	$year=mysql_real_escape_string($_POST['year']);
	$date=$month."-".$day."-".$year;
	$date2=$year."-".$month."-".$day;
	$pt_id=mysql_real_escape_string($_POST['pt_name']);
	//var_dump($date);die();	
	$due_month=mysql_real_escape_string($_POST['due_month']);
	$due_day=mysql_real_escape_string($_POST['due_day']);
	$due_year=mysql_real_escape_string($_POST['due_year']);
	$date_due=$due_year."-".$due_month."-".$due_day;

	
	$sql=mysql_query("SELECT * FROM patient_list WHERE id='".$pt_id."'");
	while($row=mysql_fetch_array($sql))
	{
	$pt_name=$row['patient_name'];	
	}
	
	$price=0; ?>
    <table style="font-family: Arial, Helvetica, sans-serif;color:#333;" cellpadding="0" cellspacing="0" border="0">
<tr style="font-size:13px;font-weight:bold;">
<td width="200" style="border-right:1px solid #cdcbd4;padding-left:20px;padding-top:10px;padding-bottom:10px;background-image:url(img/option_center_check.png);">
Item Number
</td>
<td width="160" style="border-right:1px solid #cdcbd4;padding-left:20px;padding-top:10px;padding-bottom:10px;background-image:url(img/option_center_check.png);">Description</td>
<td width="129" style="border-right:1px solid #cdcbd4;padding-left:15px;padding-top:10px;padding-bottom:10px;background-image:url(img/option_center_check.png);">Date of transaction</td>
<td width="120" style="border-right:1px solid #cdcbd4;padding-left:20px;padding-top:10px;padding-bottom:10px;background-image:url(img/option_center_check.png);">Price</td>
</tr>
<?php 
/*$sql="SELECT * FROM accounting_summary WHERE dentist_id='".$dentist_id."'";
$res=mysql_query($sql);
while($row=mysql_fetch_array($res)) {
$draft_id=$row['draft_id'];	
//$date=$row['draft_date'];
}*/
 //$dates=explode("-",$date);
					//$y=$dates[0];
					//$m=$dates[1];
					//$d=$dates[2];
		//$date=$m."-".$d."-".$y;
	
	//SELECT MAX(OrderPrice) AS LargestOrderPrice FROM Orders
	
	$sql="SELECT MAX(draft_id) AS largest FROM accounting_summary";
	$sql2=mysql_query($sql);
	//$query=mysql_fetch_assoc($sql);
	$query=mysql_fetch_array($sql2);
	$draft_id=$query['largest'];
	

	
if(empty($draft_id))
{ $idd="1"; }
else
{ 

$idd=$draft_id+1;} 
$xy=0;
	//var_dump($sql);die();

//var_dump($draft_id);die();
for($i=0;$i<count($_POST["check"]);$i++){

		if($_POST["check"][$i] != "") {
		    $ok=$_POST["check"][$i];
			$ctr=$_POST['qty'][$i];
		    //var_dump($_POST["check"][$i]);
			$qwerty="SELECT * FROM simple_accounting WHERE id='".$_POST['check'][$i]."'";
			$res=mysql_query($qwerty);
			//var_dump($res);die();
			while($row=mysql_fetch_array($res)){
			$price=$row['price'];
			$it_num=$row['item_number'];
			$desc=$row['description'];
			$i=$r;
			$r++;
			$f=$r%2;
	if($f==0)
	{ $back="#FFF";} 
	else
	{ $back="#e0eefa";}
	
	$sum=$row['price'] * $row['quantity'];
			?>
            

<tr style="font-size:13px;font-weight:bold;background-color:<?php echo $back;?>;">
<td style="text-align:center;border:1px solid #CCC;padding-top:10px;padding-bottom:10px;">
<?php echo $it_num;?>
</td>
<td style="text-align:center;border:1px solid #CCC;padding-top:10px;padding-bottom:10px;">
<?php echo $desc;?>
</td>
<td style="text-align:center;border:1px solid #CCC;padding-top:10px;padding-bottom:10px;">
<?php
//var_dump($date);die();
echo $date;?>
</td>
<td style="text-align:right;border:1px solid #CCC;padding-right:10px;padding-top:10px;padding-bottom:10px;">
P&nbsp;<?php $tot=$price * $ctr; echo number_format($tot);?>&nbsp;.00
</td></tr>
<?php 
$t=$tot;
$prices=$prices+$t;
} 


	//var_dump($date);var_dump($date_due);die();

$sql="INSERT INTO simple_accounting_scrath (dentist_id,date_draft,quantity,item_number,description,price,draft_id,date_due,patient_id,patient_name) VALUES('$dentist_id','$date2','$ctr','$it_num','$desc','$price','$idd','$date_due','$pt_id','$pt_name')";
$res=mysql_query($sql);


	}}
	//echo $price; 
	$sql="INSERT INTO accounting_summary (draft_id,dentist_id,draft_date,date_due,total,patient_id,patient_name) VALUES('$idd','$dentist_id','$date2','$date_due','$prices','$pt_id','$pt_name')";
$res=mysql_query($sql);

$new_id=mysql_insert_id();
 /*$dates=explode("-",$date);
					$y=$dates[0];
					$m=$dates[1];
					$d=$dates[2];
$date=$m."/".$d."/".$y;

 $dates=explode("-",$date_due);
					$y=$dates[0];
					$m=$dates[1];
					$d=$dates[2];
$date_due=$m."/".$d."/".$y;*/
$desc=$desc.".".$idd;
//var_dump($date2);die();
$sql="INSERT INTO patient_credits (dentist_id,patient_id,notes_date_due,notes_description,notes_ammount,notes_date_noted) VALUES('$dentist_id','$pt_id','$date_due','$desc','$prices','$date2')";
	$res=mysql_query($sql);
	?>

<tr style="font-size:13px;font-weight:bold;">
<td align="right" style="padding-right:10px;padding-top:10px;" colspan="4">Total&nbsp;&nbsp;&nbsp;P&nbsp;<?php echo number_format($prices);?>&nbsp;.00</td>
</tr>

<tr><td style="padding-left:15px;"> <a class="nav" href="pay.php?pay=<?php echo $new_id;?>&amp;pt=<?php echo $pt_id;?>&amp;key=<?php echo $idd;?>" onclick="popup1(this.href,'name','400','200','no'); return false">Receive Payment</a></td></tr>
<tr><td><div style="clear:both;height:20px;"></div></td></tr>
</table>

                </td>
            </tr> </table>
			<tr><td style="padding-top:15px;">
<!--<a href="dentist_simple_accounting.php" style="font-family:Arial, Helvetica, sans-serif;font-size:13px;">Back</a>-->
<input type="submit" name="back" value="Back" class="submit2" onclick="window.location='dentist_simple_accounting.php'"></td></tr>
	<?php 
} else { 

$date=date('Y-m-d');

$date=explode("-",$date);
$y=$date[0];
$m=$date[1];
$d=$date[2];
?>

<form method="post" action="" enctype="multipart/form-data" onsubmit="return onSelect();">
<div>
<div style="margin-left:30px;"><select name="pt_name" id="pt_select">
<option value="none">-- Select Patient --</option>
<?php 
$sql="SELECT * FROM patient_list WHERE dentist_id='".$dentist_id."'";
$res=mysql_query($sql);
while($row=mysql_fetch_array($res)) {
$pt_name=$row['patient_name'];	
$pt_id=$row['id'];
echo "<option value=\"$pt_id\">$pt_name</option>";
}
?>
</select>

</div>
<div style="clear:both;height:10px;"></div>
<table cellpadding="0" cellspacing="0" border="0" style="color:#333;font-weight:bold;;font-size:13px;font-family:Arial, Helvetica, sans-serif;padding-left:20px;">
<tr><td>Date of transaction</td></tr>
<tr><td>
<table cellpadding="0" cellspacing="0" border="0">
<tr><td style="padding-left:10px;">
<select name="month">
<option value="01" <?php echo (($m==1)?"selected":"")?>>January</option>
<option value="02" <?php echo (($m==2)?"selected":"")?>>February</option>
<option value="03" <?php echo (($m==3)?"selected":"")?>>March</option>
<option value="04" <?php echo (($m==4)?"selected":"")?>>April</option>
<option value="05" <?php echo (($m==5)?"selected":"")?>>May</option>
<option value="06" <?php echo (($m==6)?"selected":"")?>>June</option>
<option value="07" <?php echo (($m==7)?"selected":"")?>>July</option>
<option value="08" <?php echo (($m==8)?"selected":"")?>>August</option>
<option value="09" <?php echo (($m==9)?"selected":"")?>>September</option>
<option value="10" <?php echo (($m==10)?"selected":"")?>>October</option>
<option value="11" <?php echo (($m==11)?"selected":"")?>>November</option>
<option value="12" <?php echo (($m==12)?"selected":"")?>>December</option>
</select> 
</td><td style="padding-left:10px;">
<select name="day">
<?php 
for($i=1;$i<=31;$i++) {
if($i==$d) {
$t="selected";
}
else {
$t="";
}

echo "<option value=\"$i\" $t>$i</option>";	
}
?>
</select>
</td><td style="padding-left:10px;">
<input type="text" name="year" style="width:45px;" value="<?php echo $y;?>"/>
</td></tr></table>
</td></tr>

<tr><td style="padding-top:10px;">Payment Due</td></tr>

<tr><td>
<table cellpadding="0" cellspacing="0" border="0">
<tr><td style="padding-left:10px;">
<select name="due_month">
<option value="01">January</option>
<option value="02">February</option>
<option value="03">March</option>
<option value="04">April</option>
<option value="05">May</option>
<option value="06">June</option>
<option value="07">July</option>
<option value="08">August</option>
<option value="09">September</option>
<option value="10">October</option>
<option value="11">November</option>
<option value="12">December</option>
</select> 
</td><td style="padding-left:10px;">
<select name="due_day">
<?php 
for($i=1;$i<=31;$i++) {
echo "<option value=\"$i\">$i</option>";	
}
?>
</select>
</td><td style="padding-left:10px;">
<input type="text" name="due_year" style="width:45px;" value="2012"/>
</td></tr></table>
</td></tr>

</table>


<div style="clear:both;height:10px;"></div>

<table style="font-family: Arial, Helvetica, sans-serif;" cellpadding="0" cellspacing="0" border="0">
<tr style="font-size:13px;font-weight:bold;color:#333;">
<td style="width:70px;text-align:center;padding-top:10px;padding-bottom:10px;border-right:1px solid #cdcbd4;font-weight:bold;background-image:url(img/option_center_check.png);">Check</td>
<td style="width:70px;text-align:center;padding-top:10px;padding-bottom:10px;border-right:1px solid #cdcbd4;font-weight:bold;background-image:url(img/option_center_check.png);">Qty</td>
<td width="130" style="padding-left:20px;border-right:1px solid #cdcbd4;font-weight:bold;background-image:url(img/option_center_check.png);padding-top:10px;padding-bottom:10px;">
Item Number
</td>
<td width="150" style="padding-left:20px;border-right:1px solid #cdcbd4;font-weight:bold;background-image:url(img/option_center_check.png);padding-top:10px;padding-bottom:10px;">Description</td>
<td width="100" style="padding-left:20px;border-right:1px solid #cdcbd4;font-weight:bold;background-image:url(img/option_center_check.png);padding-top:10px;padding-bottom:10px;">Price</td>
<td width="82" style="padding-left:20px;border-right:1px solid #cdcbd4;font-weight:bold;background-image:url(img/option_center_check.png);padding-top:10px;padding-bottom:10px;">Action</td>
</tr>
<?php 
$i=0;
$sql="SELECT * FROM simple_accounting WHERE dentist_id='".$dentist_id."'";
$res=mysql_query($sql);
while($row=mysql_fetch_array($res)) {
$i++;
				 $f=$i%2;
	if($f==0)
	{ $back="#FFF";} 
	else
	{ $back="#e0eefa";}
?>
<tr style="font-size:13px;font-weight:bold;background-color:<?php echo $back;?>;color:#333333;">
<td style="padding-top:10px;padding-bottom:10px;text-align:center;">
<input type="checkbox" name="check[]" value="<?php echo $row['id'];?>" id="check<?php echo $i;?>">
</td>
<td style="padding-top:10px;padding-bottom:10px;text-align:center;"><input type="text" name="qty[]" style="width:25px;" value="1"/></td>
<td width="130" style="text-align:center;padding-top:10px;padding-bottom:10px;">
<?php echo $row['item_number'];?>
</td>
<td style="text-align:center;padding-top:10px;padding-bottom:10px;">
<?php echo $row['description'];?>
</td>
<td style="text-align:right;padding-top:10px;padding-bottom:10px;padding-right:5px;">
P&nbsp;<?php echo number_format($row['price']);?>&nbsp;.00
</td>
<td style="padding-top:10px;padding-bottom:10px;">
<table cellpadding="0" cellspacing="0" border="0">
<tr><td style="padding-left:20px;"><a href="simple_accounting.php?id=<?php echo $row['id'];?>" title="Edit" onclick="popup1(this.href,'name','500','200','no'); return false"><img src="img/icon_address_option.png" width="18" height="18"/></a></td>
            <td style="padding-left:10px;"><a href="dentist_simple_accounting.php?id=<?php echo $row["id"];?>" title="Delete" onclick="return onDelete();"><img src="img/icon_address_delete.png" width="15" height="15"/></a></td></tr>
</table>
</td>

</tr><?php } ?>

</table>

</div>

</td></tr>
<!--submit holder dati (place)-->
</table>




                </td>
            </tr>
             
<!--submit holder dati--> 
          <tr><td>
<div style="clear:both;height:20px;"></div>
<input type="submit" name="calculate" value="Calculate" class="submit2">
&nbsp;&nbsp;&nbsp;
<input type="button" name="cancel" value="Cancel" class="submit2" onclick="window.location='simple_accounting_list.php'" />
<input type="hidden" name="hdnCount" value="<?php echo $i;?>">
</form>

</td></tr><?php } ?>

<!--submit holder dati-->

          </table> </div>  
       </td>
    
     
        
      </tr>
      <tr>
        <td colspan="2"><img src="img/4.jpg" width="739" height="6" alt="" /></td>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>
<script type="text/javascript">

function popup1(pUrl, pName, pWidth, pHeight, pScroll)
{
	LeftPosition = (screen.width) ? (screen.width-pWidth)   / 2 : 0;
	TopPosition  = (screen.height)? (screen.height-pHeight) / 2 : 0;
	settings = 'height='+pHeight+', width='+pWidth+', top='+TopPosition+', left='+LeftPosition+', scrollbars='+pScroll+', resizable';
	win = window.open(pUrl, pName, settings)
}
</script>

