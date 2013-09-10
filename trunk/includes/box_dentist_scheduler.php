<?php include('config.php');

if(isset($_POST['save_remark']))
{
$date=$_POST['date_for_remark'];

if($date) {
$date_now=explode("/",$date);
$date_month=$date_now[0];
$date_day=$date_now[1];
$date_year=$date_now[2];

$date_for_now=$date_year."-".$date_month."-".$date_day; }
else {
$dates=date('Y-m-d,',strtotime("+24 hours"));
$date_for_now=$dates;
}

//var_dump($date_for_now);die();

$x=1;
$remarks=mysql_real_escape_string($_POST['remarks']);
$sqls="SELECT * FROM schedule_counter WHERE dentist_id='".$x."' AND date_schedule='".$date_for_now."'";
$ress=mysql_query($sqls);
while($row=mysql_fetch_array($ress)){
$date_schedule=$row['date_schedule'];	
$dentist_id=$row['dentist_id'];
}
if($date_for_now==$date_schedule && $x==$dentist_id) {
$sql="UPDATE schedule_counter SET remarks_for_schedule='".$remarks."' WHERE date_schedule='".$date_for_now."' AND dentist_id='".$x."'";
$res=mysql_query($sql);
//var_dump($sql);die();
}
else {
$sql="INSERT INTO schedule_counter (date_schedule,remarks_for_schedule,dentist_id) VALUES('$date_for_now','$remarks','$x')";
$res=mysql_query($sql);
//var_dump($sql);die();
}

//var_dump($ress);die();

}


$x=1;
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
  
  <script>
  function PassDate() {
	var date=document.getElementById('datepicker').value;
	document.getElementById('new_date').value=date;
	/*document.getElementById('new_date_second').value=date;*/
  }
  </script>
</head>

<body>
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
        
        <div style="margin-left:30px;margin-top:-8px;">
        <span style="font-family:Arial, Helvetica, sans-serif;color:#FFF;font-size:16px;font-weight:bold;">
        Today is <?php echo date("F d, Y",strtotime("+24 hours"));?>
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




<table cellpadding="0" cellspacing="0" border="0" style="padding-top:20px;padding-left:25px;">
<tr><td>
<span style="font-family:Arial, Helvetica, sans-serif;color:#3a3f42;font-size:16px;font-weight:bold;">Schedule for <?php 
if(isset($_POST['view']))
{ $date=mysql_real_escape_string($_POST['view_date']);

$dates=explode("/",$date);
$date_month=$dates[0];
$date_day=$dates[1];
$date_year=$dates[2]; 

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

echo $month." ".$date_day.",".$date_year;
}
else  { echo date("F d, Y",strtotime("+24 hours")); }?></span>
</td></tr>

<tr><td valign="top">

<div style="width:330px;float:left;margin-top:13px;">

<div style="float:left;">
<div style="float:left;background-image:url(img/option_center_check.png);width:50px;height:36px;">
              <input name="CheckAll" type="checkbox" id="CheckAll" value="Y"  onClick="ClickCheckAll(this);" style="margin-top:12px;margin-left:22px;"/>
              </div>
              
              <div style="float:left;background-image:url(img/option_right_check.png);width:5px;height:36px;"></div>
              <!--check all holder--></div>
              
              
              <!--name holder-->
              <div style="float:left;">
              <div style="float:left;background-image:url(img/option_name_repeat.png);width:80px;height:26px;font-family:Arial, Helvetica, sans-serif;font-size:13px;font-weight:bold;color:#373838;padding-top:10px;padding-left:17px;">Time</div>
              <div style="float:left;background-image:url(img/option_right_check.png);width:5px;height:36px;"></div>
              </div>
              <!--name holder-->
              
              <!--last visit-->
              <div style="float:left;">
              <div style="float:left;background-image:url(img/option_name_repeat.png);width:150px;height:26px;font-family:Arial, Helvetica, sans-serif;font-size:13px;font-weight:bold;color:#373838;padding-top:10px;padding-left:17px;">Appointment</div>
              <div style="float:left;background-image:url(img/option_right_check.png);width:5px;height:36px;"></div>
              </div>
              <!--last visit-->




<div style="clear:both;"></div>

<div style="background-color:#FFF;width:332px;overflow:auto;">

<div>
<table cellpadding="0" width="329" cellspacing="0" border="0" style="border:1px solid #a0a8ac;font-family: Arial, Helvetica, sans-serif;font-size:13px;">
<?php 

if(isset($_POST['view']))
{
$dentist_id=$_POST['dentist_id'];
$date=mysql_real_escape_string($_POST['view_date']);

$dates=explode("/",$date);
$date_m=$dates[0];
$date_d=$dates[1];
$date_y=$dates[2];

$date_now=$date_y."-".$date_m."-".$date_d;
//var_dump($date_now);die();
//var_dump($date);die();
$sql="SELECT * FROM dentist_schedule WHERE date_sched='".$date_now."' AND dentist_id='".$dentist_id."' ORDER BY id ASC";
$res=mysql_query($sql);
}
else {
$dates=date('Y-m-d,',strtotime("+24 hours"));
$x=1;
//var_dump($dates);die();
$sql="SELECT * FROM dentist_schedule WHERE date_sched='".$dates."' AND dentist_id='".$x."' ORDER BY id ASC";
$res=mysql_query($sql);
//var_dump($res);
} 
$i=0;
while($row=mysql_fetch_array($res)) {
	$option=$row['from_time'];
$check=$row['to_time'];
$app=$row['appointment'];

if($option==1)
{$option="1:00";}
else if($option==2)
{$option="2:00";}
else if($option==3)
{$option="3:00";}
else if($option==4)
{$option="4:00";}
else if($option==5)
{$option="5:00";}
else if($option==6)
{$option="6:00";}
else if($option==7)
{$option="7:00";}
else if($option==8)
{$option="8:00";}
else if($option==9)
{$option="9:00";}
else if($option==10)
{$option="10:00";}
else if($option==11)
{$option="11:00";}
else if($option==12)
{$option="12:00";}
else
{$option="";}

if($check==1)
{$check="1:00";}
else if($check==2)
{$check="2:00";}
else if($check==3)
{$check="3:00";}
else if($check==4)
{$check="4:00";}
else if($check==5)
{$check="5:00";}
else if($check==6)
{$check="6:00";}
else if($check==7)
{$check="7:00";}
else if($check==8)
{$check="8:00";}
else if($check==9)
{$check="9:00";}
else if($check==10)
{$check="10:00";}
else if($check==11)
{$check="11:00";}
else if($check==12)
{$check="12:00";}
else
{$check="";}

$i++;
	  $f=$i%2;
	if($f==0)
	{ $back="#FFF";} 
	else
	{ $back="#e0eefa";}
?>
<tr style="background-color:<?php echo $back;?>;"><td style="padding-top:8px;width:55px;text-align:center;padding-bottom:8px;">
<input type="checkbox" name="check[]" />
</td><td style="width:102px;text-align:center;padding-top:8px;padding-bottom:8px;">
<?php echo $option;?>
&nbsp;&nbsp;
<?php echo "-";?>
&nbsp;&nbsp;
<?php echo $check;?>
</td>
<td style="width:172px;text-align:center;padding-top:8px;padding-bottom:8px;">
<?php echo $app;?>
</td>
</tr>
<?php } ?>
</table>
</div>
</div>
</div>


</td>


<td valign="top" style="padding-left:25px;padding-top:12px;">
  
<!--<div style="font-size:92%;" id="datepicker"></div>-->
<div>
<form method="post" action="" enctype="multipart/form-data" style="font-size:64%;">
<input type="text" name="view_date" id="datepicker" onchange="PassDate()" />



<div style="clear:both;height:20px;"></div>
<div style="float:left;">
<div style="float:left;">
<input type="submit" name="view" value="View" class="submit2" />
<input type="hidden" name="dentist_id" value="<?php echo $x;?>">
<input type="hidden" name="date_pass" id="new_date_second" />
</form>
</div>

<div style="float:left;margin-left:25px;">
<form method="post" action="dentist_schedule_edit.php" enctype="multipart/form-data">
<!--<input type="button" class="submit2" name="modify" value="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Modify&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"  onclick="window.location='dentist_schedule_edit.php'"/>-->
<input type="submit" class="submit2" name="modify" value="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Modify&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"/>
<input type="hidden" name="date_pass" id="new_date" />
</form>

</div>
</div>

</div>

</td>


</tr>
<?php 
$x=1;
$date_now=$date;
if($date_now) {
$dates=$date_now;
$date_now=explode("/",$dates);
$date_month=$date_now[0];
$date_day=$date_now[1];
$date_year=$date_now[2];
$dates=$date_year."-".$date_month."-".$date_day;
}
else {
$dates=date('Y-m-d',strtotime("+24 hours")); }
//var_dump($dates);
$sql="SELECT * FROM schedule_counter WHERE dentist_id='".$x."' AND date_schedule='".$dates."'";
$res=mysql_query($sql);
while($row=mysql_fetch_array($res))
{$remarkss=$row['remarks_for_schedule'];}
?>
<form method="post" action="" enctype="multipart/form-data">
<tr>
<td colspan="2">
<div style="clear:both;height:20px;"></div>

<div style="font-family:Arial, Helvetica, sans-serif;color:#3a3f42;font-size:16px;font-weight:bold'">
Remarks
</div>

<div style="clear:both;height:10px;"></div>
<div>
<textarea name="remarks" cols="77" rows="5" style="font-family:Arial, Helvetica, sans-serif;"><?php echo $remarkss;?></textarea>
</div>

<div style="clear:both;height:5px;"></div>
<div>
<input type="submit" name="save_remark" value="Save Remark" class="submit2" />
</div>

<div style="clear:both;height:10px;"></div>
<input type="hidden" name="date_for_remark" value="<?php echo $date;?>" />
</td>
</tr>
</form>
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
</body>
</html>
