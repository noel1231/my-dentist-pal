<?php


$dentist_id=$_SESSION['id'];

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
}</script>

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
        <table width="100%"><tr><td>
        <!--<img src="img/bar_patient.png" height="20" width="114" style="margin-top:-8px;margin-left:23px;"/>--></td>
        <td align="right"><!--<input type="submit" name="update" value="UPDATE" class="submit" style="margin-right:10px;margin-top:6px;"/>-->
     <!--<input type="button" onclick="divPrint();" name="print" value="PRINT" class="submit" style="margin-right:17px;margin-top:-5px;" />--></td></tr></table></td>
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
                
               <div style="margin:0 auto;width:550px;">
                <table cellpadding="0" cellspacing="0" border="0" style="padding-bottom:20px;padding-top:20px;font-family:Arial, Helvetica, sans-serif;font-size:14px;color:#F00;">
<tr><td>
<a href="simple_accounting.php?key=<?php echo $dentist_id;?>" onclick="popup1(this.href,'name','500','200','no'); return false">Add Item</a>
</td>

</tr>

<tr><td style="padding-top:10px;">
<?php 
if(isset($_GET['draft'])) {
$idy=$_GET['draft'];	 

$sql="SELECT * FROM accounting_summary WHERE draft_id='".$idy."'";
$res=mysql_query($sql);
while($row=mysql_fetch_array($res)) {
$id=$row['patient_id'];	
$draft_date=$row['draft_date'];

 $dates=explode("-",$draft_date);
					$y=$dates[0];
					$m=$dates[1];
					$d=$dates[2];
 
 
 
$due_date=$row['date_due']; 
$dates=explode("-",$due_date);
					$year=$dates[0];
					$month=$dates[1];
					$day=$dates[2];
 
  }

?>
<form method="post" action="" enctype="multipart/form-data">
<div>
<div><select name="pt_name">
<option value="none">-- Select Patient --</option>
<?php 

$sql="SELECT * FROM patient_list WHERE dentist_id='".$dentist_id."'";
$res=mysql_query($sql);
while($row=mysql_fetch_array($res)) {
$pt_name=$row['patient_name'];	
$pt_id=$row['id'];

if($pt_id==$id) {
$text="selected";	
}
else
{
$text="";	
}
echo "<option value=\"$pt_id\" $text>$pt_name</option>";
}
//var_dump($id);var_dump($pt_id);die();
?>
</select>
<?php //var_dump($id);die();?>
</div>
<div style="clear:both;height:10px;"></div>
<table cellpadding="0" cellspacing="0" border="0" style="color:#333;font-weight:bold;;font-size:13px;font-family:Arial, Helvetica, sans-serif;">
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
	$texts="selecteds";	
	}
	else {
	$texts="";	
	}
echo "<option value=\"$i\" $texts>$i</option>";	
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
<option value="01" <?php echo (($month==1)?"selected":"")?>>January</option>
<option value="02" <?php echo (($month==2)?"selected":"")?>>February</option>
<option value="03" <?php echo (($month==3)?"selected":"")?>>March</option>
<option value="04" <?php echo (($month==4)?"selected":"")?>>April</option>
<option value="05" <?php echo (($month==5)?"selected":"")?>>May</option>
<option value="06" <?php echo (($month==6)?"selected":"")?>>June</option>
<option value="07" <?php echo (($month==7)?"selected":"")?>>July</option>
<option value="08" <?php echo (($month==8)?"selected":"")?>>August</option>
<option value="09" <?php echo (($month==9)?"selected":"")?>>September</option>
<option value="10" <?php echo (($month==10)?"selected":"")?>>October</option>
<option value="11" <?php echo (($month==11)?"selected":"")?>>November</option>
<option value="12" <?php echo (($month==12)?"selected":"")?>>December</option>
</select> 
</td><td style="padding-left:10px;">
<select name="due_day">
<?php 
for($i=1;$i<=31;$i++) {
	if($i==$day) {
	$texta="selected";	
	}
	else {
	$texta="";	
	}
echo "<option value=\"$i\" $texta>$i</option>";	
}
?>
</select>
</td><td style="padding-left:10px;">
<input type="text" name="due_year" style="width:45px;" value="<?php echo $year;?>"/>
</td></tr></table>
</td></tr>

</table>


<div style="clear:both;height:10px;"></div>

<table style="font-family: Arial, Helvetica, sans-serif;color:#333;" cellpadding="0" cellspacing="0" border="0">
<tr style="font-size:13px;font-weight:bold;background-color:#0281aa;color:#FFF;">
<td style="width:50px;text-align:center;border:1px solid #CCC;padding-top:10px;padding-bottom:10px;">Check</td>
<td style="width:50px;text-align:center;border:1px solid #CCC;padding-top:10px;padding-bottom:10px;">Qty</td>
<td width="130" style="padding-left:20px;border:1px solid #CCC;padding-top:10px;padding-bottom:10px;">
Item Number
</td>
<td width="120" style="padding-left:20px;border:1px solid #CCC;padding-top:10px;padding-bottom:10px;">Description</td>
<td width="80" style="padding-left:20px;border:1px solid #CCC;padding-top:10px;padding-bottom:10px;">Price</td>
<td width="25" style="padding-left:20px;border:1px solid #CCC;padding-top:10px;padding-bottom:10px;">&nbsp;</td>
</tr>
<?php 
$i=0;

	$sql="SELECT * FROM simple_accounting WHERE dentist_id='".$dentist_id."'";
$res=mysql_query($sql);
while($row=mysql_fetch_array($res)) {
	$it_num=$row['item_number'];
	
$i++;




$sqls=mysql_query("SELECT * FROM simple_accounting_scrath WHERE draft_id='".$idy."' AND item_number='".$it_num."'");
if($sqls) {

while($rows=mysql_fetch_array($sqls)) {
	$item_number=$rows['item_number'];
	$qty=$rows['quantity'];
	
	if($item_number==$it_num) {
	$select="checked";
	$qty=$qty;
	}
	else
	{
		$select="";
		$qty=1;
	}

?>
<tr style="font-size:13px;font-weight:bold;">
<td style="border:1px solid #CCC;padding-top:10px;padding-bottom:10px;text-align:center;">
<input type="checkbox" name="check[]" value="<?php echo $row['id'];?>" id="check<?php echo $i;?>" <?php echo $select;?>>
</td>

<td style="border:1px solid #CCC;padding-top:10px;padding-bottom:10px;text-align:center;"><input type="text" name="qty[]" style="width:25px;" value="<?php echo $qty;?>"/></td>

<td width="130" style="text-align:center;border:1px solid #CCC;padding-top:10px;padding-bottom:10px;">
<?php echo $it_num;?>
</td>
<td style="text-align:center;border:1px solid #CCC;padding-top:10px;padding-bottom:10px;">
<?php echo $row['description'];?>
</td>
<td style="text-align:right;border:1px solid #CCC;padding-top:10px;padding-bottom:10px;padding-right:5px;">
P&nbsp;<?php echo $row['price'];?>&nbsp;.00
</td>
<td style="border:1px solid #CCC;padding-top:10px;padding-bottom:10px;">
<table cellpadding="0" cellspacing="0" border="0">
<tr><td style="padding-left:10px;"><a href="dentist_simple_accounting.php?id=<?php echo $row["id"];?>" title="Delete" onclick="return onDelete();"><img src="img/icon_address_delete.png" width="15" height="15"/></a></td></tr>
</table>
</td>

</tr><?php } } else { 
$select="";
$qty="";
?>

<tr style="font-size:13px;font-weight:bold;">
<td style="border:1px solid #CCC;padding-top:10px;padding-bottom:10px;text-align:center;">
<input type="checkbox" name="check[]" value="<?php echo $row['id'];?>" id="check<?php echo $i;?>" <?php echo $select;?>>
</td>

<td style="border:1px solid #CCC;padding-top:10px;padding-bottom:10px;text-align:center;"><input type="text" name="qty[]" style="width:25px;" value="<?php echo $qty;?>"/></td>

<td width="130" style="text-align:center;border:1px solid #CCC;padding-top:10px;padding-bottom:10px;">
<?php echo $it_num;?>
</td>
<td style="text-align:center;border:1px solid #CCC;padding-top:10px;padding-bottom:10px;">
<?php echo $row['description'];?>
</td>
<td style="text-align:right;border:1px solid #CCC;padding-top:10px;padding-bottom:10px;padding-right:5px;">
P&nbsp;<?php echo $row['price'];?>&nbsp;.00
</td>
<td style="border:1px solid #CCC;padding-top:10px;padding-bottom:10px;">
<table cellpadding="0" cellspacing="0" border="0">
<tr><td style="padding-left:10px;"><a href="dentist_simple_accounting.php?id=<?php echo $row["id"];?>" title="Delete" onclick="return onDelete();"><img src="img/icon_address_delete.png" width="15" height="15"/></a></td></tr>
</table>
</td>

</tr>

<?php } }?>

</table>

</div>

</td></tr>
<tr><td>
<div style="clear:both;height:20px;"></div>
<input type="submit" name="calculate" value="Save" class="submit2">
<input type="hidden" name="hdnCount" value="<?php echo $i;?>">
</form>

</td></tr><?php } ?>

</table>




                </td>
            </tr>
              
          
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

