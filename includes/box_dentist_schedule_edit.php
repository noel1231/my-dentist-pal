<?php include('config.php');

$pass_date=$_POST['date_pass'];
if($pass_date) {
$dates=explode("/",$pass_date);
$date_month=$dates[0];
$date_day=$dates[1];
$date_year=$dates[2];

$date_now=$date_year."-".$date_month."-".$date_day; }
else
{
$pass_date=date('m/d/Y',strtotime("+24 hours"));
$dates=explode("/",$pass_date);
$date_month=$dates[0];
$date_day=$dates[1];
$date_year=$dates[2];

$date_now=$date_year."-".$date_month."-".$date_day;
}




//$date_now=$date_y."-".$date_m."-".$date_d;
//var_dump($pass_date);die();
/*if(isset($_POST['add']))
{
$x=1;
$id=$_POST['where_table'];
if(empty($id))
{$id="0";}
else
{$id=$_POST['where_table'];}
$sql="INSERT INTO dentist_schedule (date_sched,dentist_id,table_number) VALUES(NOW(),'$x','$id')";	
$res=mysql_query($sql);	
}*/

if(isset($_POST['clear_all']))
{
$x=1;	
$dates=date('Y-m-d');
$date_delete=mysql_real_escape_string($_POST['date_now']);
//var_dump($date_delete);die();
$sql="DELETE FROM dentist_schedule WHERE dentist_id='".$x."' AND date_sched='".$date_delete."'";
$res=mysql_query($sql);
$date_now=$date_delete;

$dates=explode("-",$date_now);
//var_dump($date_now);die();
$date_year=$dates[0];
$date_month=$dates[1];
$date_day=$dates[2];


}




if(isset($_POST['save_changes']))
{
$x=1;
$y=0;



$from=$_POST['from'];
$to=$_POST['to'];
$app=$_POST['appointment'];
$id=$_POST['id'];
	$delete=$_POST['delete'];
	$date=mysql_real_escape_string($_POST['what_date']);
if($date) {
$dates=explode("/",$date);
$date_m=$dates[0];
$date_d=$dates[1];
$date_y=$dates[2];

$date_now=$date_y."-".$date_m."-".$date_d; }

else {
$date=mysql_real_escape_string($_POST['date_now']);	
$date_now=$date;




}
	//var_dump($from_now);die();
	//var_dump($_POST); die();
	$var= count($from);
	//var_dump($var);die();
	//var_dump($var);die();
	$x=1;
	
	for($i=0;$i<$var;$i++)
	{
	$from_now=mysql_real_escape_string($from[$i]);
	$to_now=mysql_real_escape_string($to[$i]);
	$app_now=mysql_real_escape_string($app[$i]);
	$id_now=$id[$i];
	$delete_now=$delete[$i];
//var_dump($app_now);die();
	$err = 0;
	
	if($id_now==0){
	$sql="INSERT INTO dentist_schedule (from_time,to_time,appointment,date_sched,dentist_id) VALUES('$from_now','$to_now','$app_now','$date_now','$x')";	
	$resw=mysql_query($sql);
	//echo $id_now;
	}
	else {
		if($delete_now=="y")
		{ $sql="DELETE FROM dentist_schedule WHERE id='".$id_now."'";
		$res=mysql_query($sql);}
		else {
		$dates=date('Y-m-d');
	$sql="UPDATE dentist_schedule SET from_time='".$from_now."',to_time='".$to_now."',appointment='".$app_now."' WHERE id='".$id_now."'";	
	$res=mysql_query($sql); }
	} 
	
	if (!$resw) { $err = $err + 1; }
	
	}

	//echo $err;
$dates=explode("-",$date_now);
//var_dump($date_now);die();
$date_year=$dates[0];
$date_month=$dates[1];
$date_day=$dates[2];
//var_dump($date_month);die();
}


$var_x="<div style='float:left;margin-top:20px;width:345px;height:90px;background-color:#d9dfe3; -moz-border-radius: 5px;-webkit-border-radius: 5px;border-radius: 5px;'><div style='float:left;width:335px;height:80px;background-color:#FFF;-moz-border-radius: 5px;-webkit-border-radius: 5px;border-radius: 5px;margin-top:5px;margin-left:5px;'><table cellpadding='0' cellspacing='0' border='0' style='padding-top:10px;padding-left:10px;'><tr><td width='90' style='padding-left:8px;font-family:Arial, Helvetica, sans-serif;color:#333;font-size:14px;font-weight:bold;text-align:right;'>Time:</td><td style='padding-left:8px;'><select name='from[]' style='width:70px;'><option value='0'>-time-</option><option value='1'>01:00</option><option value='2'>02:00</option><option value='3'>03:00</option><option value='4'>04:00</option><option value='5'>05:00</option><option value='6'>06:00</option><option value='7'>07:00</option><option value='8'>08:00</option><option value='9'>09:00</option><option value='10'>10:00</option><option value='11'>11:00</option><option value='12'>12:00</option></select></td><td style='padding-left:8px;font-family:Arial, Helvetica, sans-serif;color:#333;font-size:14px;font-weight:bold;'>to &nbsp;<select name='to[]' style='width:70px;'><option value='0'>-time-</option><option value='1'>01:00</option><option value='2'>02:00</option><option value='3'>03:00</option><option value='4'>04:00</option><option value='5'>05:00</option><option value='6'>06:00</option><option value='7'>07:00</option><option value='8'>08:00</option><option value='9'>09:00</option><option value='10'>10:00</option><option value='11'>11:00</option><option value='12'>12:00</option></select></td></tr><tr><td height='8'><div style='clear:both;'></</td></tr><tr><td width='90' style='padding-left:8px;font-family:Arial, Helvetica, sans-serif;color:#333;font-size:14px;font-weight:bold;text-align:right;'>Appointment:</td><td style='padding-left:8px;' colspan='2'><input type='text' name='appointment[]' style='width:170px;' value=''/><input type='hidden' name='id' value='0'></td><td style='padding-left:4px;'><img src='img/icon_address_delete.png' /></td></tr></table></div></div>";


$x=1;


if($date_month==01)
{ $month="January";}
else if($date_month==02)
{ $month="February";}
else if($date_month==03)
{ $month="March";}
else if($date_month==04)
{ $month="April";}
else if($date_month==05)
{ $month="May";}
else if($date_month==06)
{ $month="June";}
else if($date_month==07)
{ $month="July";}
else if($date_month==08)
{ $month="August";}
else if($date_month==09)
{ $month="September";}
else if($date_month==10)
{ $month="October";}
else if($date_month==11)
{ $month="November";}
else if($date_month==12)
{ $month="December";}
else
{ $month="";}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
 <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
  
  <script>
  $(document).ready(function() {
    $("#datepicker").datepicker();
  });
  </script>
  



</head>

<body>
 <form method="post" action="" enctype="multipart/form-data">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><table width="739" border="0" align="center" cellpadding="0" cellspacing="0">
      <!--<tr>
        <td height="39" valign="top"> <div>
          <div style="width:140px; margin-left:20px; margin-bottom:-2px; float:left;">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="6"><img src="img/t1.jpg" width="6" height="41" alt="" /></td>
                <td width="661" align="center" style="background: url(img/t3.jpg);"><img src="img/t_patient_list.png" alt="" /></td>
                <td width="6"><img src="img/t2.jpg" width="6" height="41" alt="" /></td>
              </tr>
            </table>
          </div>
          <div style="width:120px; margin-left:10px; margin-bottom:-2px; float:left;">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="6"><img src="img/u1.jpg" width="6" height="41" alt="" /></td>
                <td width="661" align="center" style="background: url(img/u3.jpg);"><img src="img/t_add.png"  alt="" /></td>
                <td width="6"><img src="img/u2.jpg" width="6" height="41" alt="" /></td>
              </tr>
            </table>
          </div>
        <div style="width:110px; margin-left:10px; margin-bottom:-2px; float:left">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="6"><img src="img/t1.jpg" width="6" height="41" alt="" /></td>
                <td width="661" align="center" style="background: url(img/t3.jpg);"><img src="img/t-sent.png" width="72" height="17" alt="" /></td>
                <td width="6"><img src="img/t2.jpg" width="6" height="41" alt="" /></td>
              </tr>
            </table>
          </div>
          <div style="width:130px; margin-left:10px; margin-bottom:-2px; float:left; z-index:999999999">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="6"><img src="img/u1.jpg" width="6" height="41" alt="" /></td>
                <td width="661" align="center" style="background: url(img/u3.jpg); font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#3e4447;">Joselito Galvez</td>
                <td width="6"><img src="img/u2.jpg" width="6" height="41" alt="" /></td>
              </tr>
            </table>
          </div>
        </div></td>
      </tr>-->
      <tr>
        <td><div style=" z-index:1;"><img src="img/1.jpg" width="739" height="12" alt="" /></div></td>
      </tr>
      <tr>
        <td height="47" style="background:url(img/2.jpg);">
      
        <div style="float:left;margin-left:30px;margin-top:-8px;">
        <span style="font-family:Arial, Helvetica, sans-serif;color:#FFF;font-size:16px;font-weight:bold;">
        Modify your Schedule
        </span>
        </div>
      
        </td>
      </tr>
     
      <tr>
        <td valign="top" style="background:url(img/3.jpg); padding-bottom:10px;"><div style="margin-top:-8px; position: relative;">
          <table width="690" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td bgcolor="#FFF" style="border-left:1px solid #a0a8ac; border-bottom:1px solid #a0a8ac; border-right:1px solid #a0a8ac;"><!--<p>&nbsp;</p>
-->
<table cellpadding="0" cellspacing="0" border="0" style="padding-top:20px;padding-left:60px;padding-bottom:20px;">


<tr>

<td valign="top">
  
<!--<div style="font-size:80%;" id="datepicker"></div>-->
<div style="font-size:80%;">
<input type="text" name="what_date" id="datepicker" />
<div style="clear:both;height:5px;"></div>
<!--<input type="submit" value="Edit" name="edit_schedule" class="submit2" />-->
<input type="hidden" value="<?php echo $x;?>" name="dentist_id" />
<input type="hidden" value="<?php echo $date_now;?>" name="date_now" />
</div>

<div style="clear:both;height:20px;"></div>

<div>
<input type="submit" class="submit2" name="clear_all" value="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Clear This Day&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"  />
</div>

<div style="clear:both;height:120px;"></div>

<div>
<input type="submit" name="save_changes" value="Save Changes" class="submit2"/>
</div>
<div style="margin-top:15px;">
<input type="button" onclick="window.location='dentist_scheduler.php'" name="cancel" value="Cancel" class="submit2"/>
</div>

</td>


<td valign="top" style="padding-left:50px;">



<div style="width:330px;float:left;">


<div>
<span style="font-family:Arial, Helvetica, sans-serif;color:#3a3f42;font-size:16px;font-weight:bold;"> Schedule for <?php
//var_dump($date_now);die();
echo $month." ".$date_day.",".$date_year; ?>
<!--Your Schedule
-->
</span>
</div>

<div id="dynamicInput" style="margin-top:13px;"><!--talbe-->
<?php 

/*if(isset($_POST['edit_schedule'])) {
$dentist_id=$_POST['dentist_id'];
//$dentist_id=1;
$date=mysql_real_escape_string($_POST['what_date']);

$dates=explode("/",$date);
$date_m=$dates[0];
$date_d=$dates[1];
$date_y=$dates[2];

$date_now=$date_y."-".$date_m."-".$date_d;
//var_dump($date_now);die();
$sql="SELECT * FROM dentist_schedule WHERE date_sched='".$date_now."' AND dentist_id='".$dentist_id."' ORDER BY id ASC";
$res=mysql_query($sql);
//var_dump($res);die();
}

else {*/
$dates=date('Y-m-d',strtotime("+24 hours"));
$x=1;
$sql="SELECT * FROM dentist_schedule WHERE date_sched='".$date_now."' AND dentist_id='".$x."' ORDER BY id ASC";
$res=mysql_query($sql); //}
while($row=mysql_fetch_array($res))
{
$option=$row['from_time'];
$check=$row['to_time'];
$app=$row['appointment'];
?>

<div  style="float:left;margin-top:20px;width:345px;height:90px;background-color:#d9dfe3; -moz-border-radius: 5px;-webkit-border-radius: 5px;border-radius: 5px;">
<div id="<?php echo $row['id'];?>" style="float:left;width:335px;height:80px;background-color:#FFF;-moz-border-radius: 5px;-webkit-border-radius: 5px;border-radius: 5px;margin-top:5px;margin-left:5px;"><!--ttable1-->
<table cellpadding="0" cellspacing="0" border="0" style="padding-top:10px;padding-left:10px;">
<tr><td width="90" style="padding-left:8px;font-family:Arial, Helvetica, sans-serif;color:#333;font-size:14px;font-weight:bold;text-align:right;">
Time:
</td>
<td style="padding-left:8px;">
<select name="from[]" style="width:70px;">
<option value="0">-time-</option>
<option value="1" <?php echo (($option==1)?"selected":"")?>>01:00</option>
<option value="2" <?php echo (($option==2)?"selected":"")?>>02:00</option>
<option value="3" <?php echo (($option==3)?"selected":"")?>>03:00</option>
<option value="4" <?php echo (($option==4)?"selected":"")?>>04:00</option>
<option value="5" <?php echo (($option==5)?"selected":"")?>>05:00</option>
<option value="6" <?php echo (($option==6)?"selected":"")?>>06:00</option>
<option value="7" <?php echo (($option==7)?"selected":"")?>>07:00</option>
<option value="8" <?php echo (($option==8)?"selected":"")?>>08:00</option>
<option value="9" <?php echo (($option==9)?"selected":"")?>>09:00</option>
<option value="10" <?php echo (($option==10)?"selected":"")?>>10:00</option>
<option value="11" <?php echo (($option==11)?"selected":"")?>>11:00</option>
<option value="12" <?php echo (($option==12)?"selected":"")?>>12:00</option>
</select>
</td>
<td style="padding-left:8px;font-family:Arial, Helvetica, sans-serif;color:#333;font-size:14px;font-weight:bold;">
to &nbsp;
<select name="to[]" style="width:70px;">
<option value="0">-time-</option>
<option value="1" <?php echo (($check==1)?"selected":"")?>>01:00</option>
<option value="2" <?php echo (($check==2)?"selected":"")?>>02:00</option>
<option value="3" <?php echo (($check==3)?"selected":"")?>>03:00</option>
<option value="4" <?php echo (($check==4)?"selected":"")?>>04:00</option>
<option value="5" <?php echo (($check==5)?"selected":"")?> >05:00</option>
<option value="6" <?php echo (($check==6)?"selected":"")?>>06:00</option>
<option value="7" <?php echo (($check==7)?"selected":"")?>>07:00</option>
<option value="8" <?php echo (($check==8)?"selected":"")?>>08:00</option>
<option value="9" <?php echo (($check==9)?"selected":"")?>>09:00</option>
<option value="10" <?php echo (($check==10)?"selected":"")?>>10:00</option>
<option value="11" <?php echo (($check==11)?"selected":"")?>>11:00</option>
<option value="12" <?php echo (($check==12)?"selected":"")?>>12:00</option>
</select>
</td>
</tr>
<tr><td height="8"><div style="clear:both;"></</td></tr>
<tr><td width="90" style="padding-left:8px;font-family:Arial, Helvetica, sans-serif;color:#333;font-size:14px;font-weight:bold;text-align:right;">
Appointment:
</td>
<td style="padding-left:8px;" colspan="2">
<input type="text" name="appointment[]" style="width:170px;" value="<?php echo $app;?>"/>
<input type="hidden" name="id[]" value="<?php echo $row['id'];?>" /> 
<input type="hidden" name="delete[]" value="n" id="del<?php echo $row['id'];?>"/>
</td>
<td style="padding-left:4px;"><img src="img/icon_address_delete.png" onclick="change_color('<?php echo $row['id'];?>','del<?php echo $row['id'];?>');"/>
</td>
</tr>
</table>
</div>
</div><!--end of table1-->
<?php } ?>



</div><!--talbe-->
</div>
<div style="clear:both;height:15px;"></div>
<div>
<input type="button" name="add" value="Add New Appointment" class="submit2" onClick="addInput('dynamicInput');"/>
<input type="hidden" name="where_table" value="" />
</div>

</div>


</td>





</tr>


</table>               
           
              
               </td>
            </tr>
          </table>
        </div></td>
      </tr>
      <tr>
        <td><img src="img/4.jpg" width="739" height="6" alt="" /></td>
      </tr>
    </table></td>
  </tr>
</table>

  </form> 

</body>
</html>

<script type="text/javascript">
var counter = 1;
var limit = 20;
function addInput(divName){
     if (counter==limit)  {
          alert("You have reached the limit of adding " + counter + " inputs");
     }
     else {
          var newdiv = document.createElement('div');
          newdiv.innerHTML = "<?php echo $var_x;?>";
          document.getElementById(divName).appendChild(newdiv);
          counter++;
     }
}
</script>


<script>
function change_color(e,f) {

document.getElementById(e).style.backgroundColor='#999';
document.getElementById(f).value='y';
/*alert(document.getElementById(f).value);*/
}
</script>

