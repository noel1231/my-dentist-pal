<?php 

session_start();
//var_dump($_SESSION);die();
if(!$_SESSION["id"])
{
    //Do not show protected data, redirect to login...
    header('Location: dentist_login.php');
}

$dentist_id=$_SESSION['id'];

include('config.php');

$page_now="1";

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>My Dentist Pal</title>
<link rel="stylesheet" type="text/css" media="screen" href="style/style.css" />

</head>

<body style="margin:0;padding:0;background-color:#f6f5f5;">
<!--wrapper-->
<table cellpadding="0" cellspacing="0" border="0" width="100%">
  <!--top-->
  <tr>
    <td><?php include('includes/top_patient.php');?>
      <!--top--></td>
  </tr>
  <!--tooth-->
  <tr>
    <td><?php include('includes/top.php');?>
      <!--dentisit dashboard--></td>
  </tr>
  <?php /*
<!--menubar--><tr><td width="100%" height="54" style="background-image:url('images/menubar.png');">
<!--menuinblack--><div style="margin:0 auto;width:520px;">
<table cellpadding="0" cellspacing="0" border="0">
<tr>
<td><img src="img/bar_message_main.png"/></td>
<td width="13">&nbsp;</td>
<td><img src="images/line.png"/></td>
<td width="13">&nbsp;</td>
<td><img src="img/bar_compose_black.png" style="margin-top:6px;" /></td>
</tr>
</table>

<!--menuinblack--></div>
<!--menubar--></td></tr>*/?>
  <!--include sidebar-->
  <tr>
    <td><div style="margin:0 auto;width:940px;margin-top:20px;">
      <!--sidebar and content container-->
      <table width="100%" border="0" cellpadding="0" cellspacing="0">
        <!--sidebar-->
        <tr>
          <td valign="top" width="205">
            <?php include('includes/sidebar_message.php');?>
         
            <!--sidebar--></td>
          <!--content-->
          <td valign="top" width="340"><?php //include('includes/box_message_compose.php');?>
            <!--first box-->
            <table cellpadding="0" cellspacing="0" border="0" style="font-family:Arial, Helvetica, sans-serif;" width="324">
              <tr>
                <td width="100%"><table cellpadding="0" cellspacing="0" border="0" width="100%">
                  <tr>     <?php $rad="10px";?>
                   <?php /* <td style="background-image:url('img/landing_left_blue.png');height:46px;width:7px;"></td>*/?>
                    <td style="background-image:url('img/landing_center_blue.png');height:46px;width:310px;color:#fbfdfe;font-size:22px;padding-left:20px;-webkit-border-top-left-radius: <?php echo $rad;?>;
-webkit-border-top-right-radius: <?php echo $rad;?>; 

-khtml-border-top-left-radius: <?php echo $rad;?>;
-khtml-border-top-right-radius: <?php echo $rad;?>; 

-moz-border-radius-topright: <?php echo $rad;?>;
-moz-border-radius-topleft: <?php echo $rad;?>;

border-top-left-radius: <?php echo $rad;?>;
border-top-right-radius: <?php echo $rad;?>; 
overflow:hidden;"><!--<img src="img/landing_general.png" width="167" height="23" style="margin-top:3px;"/>-->
                      <span style="font-family:'Trebuchet MS', Arial, Helvetica, sans-serif;color:#FFF;font-size:20px;">Notification Alert</span></td>
                    <?php /*<td style="background-image:url('img/landing_right_blue.png');height:46px;width:7px;"></td>*/?>
                  </tr>
                </table></td>
              </tr>
              <tr>
                <td width="100%"><table cellpadding="0" cellspacing="0" border="0" width="100%">
                  <tr>
                    <td width="100%" style="background-color:#fdfdfd;" height="185" class="landing_box" valign="top"><table cellpadding="0" cellspacing="0" border="0" style="padding-left:30px;font-family: Arial, Helvetica, sans-serif;">
                      <tr>
                        <td style="padding-top:12px;"><?php

$pass_date=date('Y-m-d');

$ctr=0;
$sql="SELECT * FROM jqcalendar WHERE dentist_id='".$dentist_id."'";
$res=mysql_query($sql);
while($row=mysql_fetch_array($res)){
$date=date('Y-m-d',strtotime($row['StartTime']));
if($date==$pass_date)
{ $ctr++;}
}
//var_dump($rows);die();
?>
                          <table cellpadding="0" cellspacing="0" border="0">
                            <tr>
                              <td style="text-align:left;" width="240"><span style="font-size:15px;color:#333;font-family:Arial, Helvetica, sans-serif;"><?php echo "Today's Appointment";?></span></td>
                              <td style="width:20px;text-align:right;"><a href="scheduler/wdCalendar/index.php" style="text-decoration:none;" target="_blank"><span style="font-size:14px;color:#F00;"><?php echo $ctr;?></span></a></td>
                            </tr>
                            <tr>
                              <td colspan="2" style="border-bottom:1px #333 dotted;width:100%;padding-top:10px;"></td>
                            </tr>
                          </table></td>
                      </tr>
                      <tr>
                        <td style="padding-top:10px;"><?php
$no="no";
$sql="SELECT COUNT(*) AS num FROM message_received WHERE message_read='".$no."' AND dentist_id='".$dentist_id."'";
$res=mysql_query($sql);
$query=mysql_fetch_assoc($res);
$rows=$query['num'];?>
                          <table cellpadding="0" cellspacing="0" border="0">
                            <tr>
                              <td style="text-align:left;" width="240"><span style="font-size:15px;color:#333;font-family:Arial, Helvetica, sans-serif;"><?php echo "No. of unread message";?></span></td>
                              <td style="width:20px;text-align:right;"><a href="message_received.php" style="text-decoration:none;" target="_blank"><span style="font-size:14px;color:#F00;"><?php echo $rows;?></span></a></td>
                            </tr>
                            <tr>
                              <td colspan="2" style="border-bottom:1px #333 dotted;width:100%;padding-top:10px;"></td>
                            </tr>
                          </table></td>
                      </tr>
                      <tr>
                        <td style="padding-top:10px;"><table cellpadding="0" cellspacing="0" border="0">
                          <tr>
                            <td style="text-align:left;" width="240"><span style="font-size:15px;color:#333;font-family: Arial, Helvetica, sans-serif;"><?php echo "No. of referrer";?></span></td>
                            <?php
$count = 0;

$sql="SELECT COUNT(*) AS counter FROM patient_list WHERE dentist_id='".$dentist_id."'";
//var_dump($sql);
$res=mysql_query($sql);
$query=mysql_fetch_assoc($res);
$row=$query['counter'];
/*while($myrow = mysql_fetch_array($res)){
$x=$myrow['referred_by'];

if ($x!=""){
	
		$count = $count+1;
	}
	
}*/


?>
                            <td style="width:20px;text-align:right;"><span style="font-size:14px;color:#F00;"><?php echo $row;?></span></td>
                          </tr>
                          <tr>
                            <td colspan="2" style="border-bottom:1px #333 dotted;width:100%;padding-top:10px;"></td>
                          </tr>
                        </table></td>
                      </tr>
                    </table></td>
                  </tr>
                </table></td>
              </tr>
              <!--first box-->
            </table>
            <!--content--></td>
          <!--second-box-->
          <td style="padding-left:5px;" valign="top"><table cellpadding="0" cellspacing="0" border="0" style="font-family:Arial, Helvetica, sans-serif;" width="364">
            <tr>
              <td width="100%"><table cellpadding="0" cellspacing="0" border="0" width="100%">
                <tr>
           
                  <!--<td style="background-image:url('img/landing_left_blue.png');height:46px;width:7px;"></td>-->
                  <!--<td style="width:7px;"><img src="img/landing_left_blue.png" width="7" height="46" /></td>-->
                  <td style="background-image:url('img/landing_center_blue.png');height:46px;width:330px;
-webkit-border-top-left-radius: <?php echo $rad;?>;
-webkit-border-top-right-radius: <?php echo $rad;?>; 

-khtml-border-top-left-radius: <?php echo $rad;?>;
-khtml-border-top-right-radius: <?php echo $rad;?>; 

-moz-border-radius-topright: <?php echo $rad;?>;
-moz-border-radius-topleft: <?php echo $rad;?>;

border-top-left-radius: <?php echo $rad;?>;
border-top-right-radius: <?php echo $rad;?>; 
overflow:hidden;
color:#fbfdfe;font-size:22px;padding-left:20px;"><!--<img src="img/landing_announcement.png" width="191" height="33" style="margin-top:3px;"/>-->
                    <span style="font-family: 'Trebuchet MS', Arial, Helvetica, sans-serif;color:#FFF;font-size:20px;"><!--Announcement-->
                    Info Bites</span></td>
                  <!--<td style="background-image:url('img/landing_right_blue.png');height:46px;width:7px;"></td>-->
                   <!--<td style="width:7px;"><img src="img/landing_right_blue.png" width="7" height="46" /></td>-->
                     <?php /*<td>
                     <div style="float:left;">
                 <div style="float:left;width:7px;"><img src="img/landing_left_blue.png" width="7" height="46" /></div>
                   <div style="float:left;width:330px;background-image:url('img/landing_center_blue.png');height:46px;color:#fbfdfe;font-size:22px;padding-left:20px;"><span style="font-family: 'Trebuchet MS', Arial, Helvetica, sans-serif;color:#FFF;font-size:20px;">Announcement</span></div>
                   <div style="float:right;width:7px;"><img src="img/landing_right_blue.png" width="7" height="46" /></div>
                   </div>
                   </td>*/?>
                </tr>
              </table></td>
            </tr>
            <tr>
              <td width="100%"><table cellpadding="0" cellspacing="0" border="0" width="100%">
                <tr>
                  <td width="100%" style="background-color:#fdfdfd;" height="185" class="landing_box" valign="top"><table cellpadding="0" cellspacing="0" border="0" style="padding-left:30px;padding-right:10px;">
                    <?php 
$sql="SELECT * FROM announcement";
$res=mysql_query($sql);
while($row=mysql_fetch_array($res)){
?>
                    <tr>
                      <td style="padding-top:12px;"><span style="font-weight:bold;color:#0c7ba8;font-size:18px;"> <?php echo $row['announce_subject'];?> </span></td>
                    </tr>
                    <tr>
                      <td style="padding-top:4px;"><span style="color:#757373;font-size:14px;">
                        <?php $date=$row['announce_date'];

$date_now=explode("-",$date);
$date_y=$date_now[0];
$date_m=$date_now[1];
$date_d=$date_now[2];

if($date_m==1)
{$month="Jan.";}
else if($date_m==2)
{$month="Feb.";}
else if($date_m==3)
{$month="March";}
else if($date_m==4)
{$month="April";}
else if($date_m==5)
{$month="May";}
else if($date_m==6)
{$month="June";}
else if($date_m==7)
{$month="July";}
else if($date_m==8)
{$month="Aug.";}
else if($date_m==9)
{$month="Sep.";}
else if($date_m==10)
{$month="Oct.";}
else if($date_m==11)
{$month="Nov.";}
else if($date_m==12)
{$month="Dec.";}

$date_now=$month." ".$date_d.", ".$date_y;

echo $date_now; 

?>
                      </span></td>
                    </tr>
                    <tr>
                      <td style="padding-top:4px;"><span style="color:#313030;font-size:14px;">
                        <?php 
$length=340;
$name1= stripslashes($row['announce_content']);
//$name=strlen($name);
//echo $name;
$display = substr($name1, 0, $length) ;
$x=$display;
$x=strlen($x);
echo $display;
if($x>=$length) {
echo "..." ; }

?>
                      </span></td>
                    </tr>
                    <?php } ?>
                  </table></td>
                </tr>
              </table></td>
            </tr>
            <!--<tr><td width="100%">
<table cellpadding="0" cellspacing="0" border="0" width="100%">
<tr><td align="right" width="100%" style="background-color:#d8e0e8;" height="50" class="landing_box">
<img src="img/landing_more.png" width="170" height="34" style="margin-right:15px;"/>
</td></tr>
</table> 
</td></tr>-->
          </table></td>
          <!--second-box-->
        </tr>
        <!--second- part content-->
        <tr>
          <!--firstbox-->
          <td style="padding-top:10px;" colspan="2"><table cellpadding="0" cellspacing="0" border="0">
            <tr>
              <td><table cellpadding="0" cellspacing="0" border="0" width="100%">
                <tr>   
                  <?php /*<td style="background-image:url('img/landing_left_blue.png');height:46px;width:7px;"></td>*/?>
                  <td style="background-image:url('img/landing_center_blue.png');height:46px;width:535px;padding-left:20px;-webkit-border-top-left-radius: <?php echo $rad;?>;
-webkit-border-top-right-radius: <?php echo $rad;?>; 

-khtml-border-top-left-radius: <?php echo $rad;?>;
-khtml-border-top-right-radius: <?php echo $rad;?>; 

-moz-border-radius-topright: <?php echo $rad;?>;
-moz-border-radius-topleft: <?php echo $rad;?>;

border-top-left-radius: <?php echo $rad;?>;
border-top-right-radius: <?php echo $rad;?>; 
overflow:hidden;"><!--<img src="img/landing_news.png" width="165" height="22" style="margin-top:3px;"/>-->
                    <span style="font-family:'Trebuchet MS', Arial, Helvetica, sans-serif;color:#FFF;font-size:20px;"><!--Activities-->
                    News And Announcements</span></td>
                  <?php /*<td style="background-image:url('img/landing_right_blue.png');height:46px;width:6px;"></td>*/?>
                </tr>
              </table></td>
            </tr>
            <tr>
              <td colspan="2" style="background-color:#fdfdfd;padding-bottom:20px;padding-right:20px;" width="100%" height="270" class="landing_box" valign="top"><table cellpadding="0" cellspacing="0" border="0" style="font-family:Arial, Helvetica, sans-serif;">
                <?php 

$sql="SELECT * FROM activities ORDER BY act_publish DESC LIMIT 3";
$res=mysql_query($sql);
while($row=mysql_fetch_array($res)){
?>
                <tr>
                  <td style="padding-top:12px;padding-left:30px;"><span style="font-weight:bold;color:#0c7ba8;font-size:18px;"> <?php echo stripslashes($row['act_subject']);?> </span></td>
                </tr>
                <tr>
                  <td style="padding-top:4px;padding-left:30px;"><span style="color:#757373;font-size:14px;">
                    <?php $date=$row['act_publish'];

$date_now=explode("-",$date);
$date_y=$date_now[0];
$date_m=$date_now[1];
$date_d=$date_now[2];

if($date_m==1)
{$month="Jan.";}
else if($date_m==2)
{$month="Feb.";}
else if($date_m==3)
{$month="March";}
else if($date_m==4)
{$month="April";}
else if($date_m==5)
{$month="May";}
else if($date_m==6)
{$month="June";}
else if($date_m==7)
{$month="July";}
else if($date_m==8)
{$month="Aug.";}
else if($date_m==9)
{$month="Sep.";}
else if($date_m==10)
{$month="Oct.";}
else if($date_m==11)
{$month="Nov.";}
else if($date_m==12)
{$month="Dec.";}

$date_now=$month." ".$date_d.", ".$date_y;

echo $date_now; 


?>
                  </span></td>
                </tr>
                <tr>
                  <td style="padding-top:4px;padding-left:30px;"><span style="color:#313030;font-size:14px;">
                    <?php 
$length=185;
$name1= stripslashes($row['act_content']);
//$name=strlen($name);
//echo $name;
$x=substr($name1, 0, $length);
$display = $x;
$display2=strlen($x);
//var_dump($display2);die();
echo $display;
if($display2>=$length) {
echo "..." ; }

?>
                  </span></td>
                </tr>
                <tr>
                  <td style="padding-left:30px;">
                  <?php
				  for($i=0;$i<=100;$i++){
					  echo "."; }
				  ?>
                  </td>
                </tr>
                <?php } ?>
              </table></td>
            </tr>
          </table>
            <!--firstbox--></td>
          <td style="padding-top:10px;" valign="top"><?php 
$var="yes";
$type="side";
$ctr1=1;
$ctr2=2;
$ctr3=3;
$ctr4=4;
$sql="SELECT * FROM banner WHERE activate='".$var."' AND banner_position='".$ctr1."' AND banner_type='".$type."'";
$res=mysql_query($sql);
while($row=mysql_fetch_array($res)) {
$banner_top_left=$row['banner_file'];	
$ban_link1=$row['banner_link'];
}
$sql="SELECT * FROM banner WHERE activate='".$var."' AND banner_position='".$ctr2."' AND banner_type='".$type."'";
$res=mysql_query($sql);
while($row=mysql_fetch_array($res)) {
$banner_top_right=$row['banner_file'];	
$ban_link2=$row['banner_link'];
}
$sql="SELECT * FROM banner WHERE activate='".$var."' AND banner_position='".$ctr3."' AND banner_type='".$type."'";
$res=mysql_query($sql);
while($row=mysql_fetch_array($res)) {
$banner_bottom_left=$row['banner_file'];	
$ban_link3=$row['banner_link'];
}
$sql="SELECT * FROM banner WHERE activate='".$var."' AND banner_position='".$ctr4."' AND banner_type='".$type."'";
$res=mysql_query($sql);
while($row=mysql_fetch_array($res)) {
$banner_bottom_right=$row['banner_file'];	
$ban_link4=$row['banner_link'];
}
?>
            <!--<img src="img/sponsored_banner.png" width="376" height="317"/>-->
            <table border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td><a href="<?php echo $ban_link1;?>"><img src="admin/<?php echo $banner_top_left;?>" width="174" height="134"/></a></td>
                <td style="padding-left:10px;"><a href="<?php echo $ban_link2;?>"><img src="admin/<?php echo $banner_top_right;?>" width="174" height="134"/></a></td>
              </tr>
              <tr>
                <td style="padding-top:10px;"><a href="<?php echo $ban_link3;?>"><img src="admin/<?php echo $banner_bottom_left;?>" width="174" height="134"/></a></td>
                <td style="padding-top:10px;padding-left:10px;"><a href="<?php echo $ban_link4;?>"><img src="admin/<?php echo $banner_bottom_right;?>" width="174" height="134"/></a></td>
              </tr>
            </table></td>
          <!--sponsored section-->
          <!--sponsored section-->
        </tr>
        <!--second- part content-->
        <!--sidebar and content container-->
      </table>
      <!--<div style="clear:both;height:20px;"></div>-->
      <div style="clear:both;height:20px;"></div>
    </div>
      <!--include sidebar--></td>
  </tr>
  <!--wrapper-->
  <!--bottom-content-->
  <tr>
    <td style="background-color:#FFF;"><div style="margin:0 auto;width:940px;margin-top:20px;">
      <!--<img src="img/landing_bottom.jpg" width="969" height="282"/>-->
      <div style=" -moz-border-radius: 5px;
 -webkit-border-radius: 5px;
 border-radius: 5px;
 
 border:1px solid #cdcdcd;
 width:925px;
 height:32px;
 background-image:url('img/todo_back.png');
 background-repeat:repeat-x;">
        <table cellpadding="0" cellspacing="0" border="0">
          <tr>
            <td style="padding-left:15px;"><img src="img/todo.png" width="26" height="26"/></td>
            <td style="padding-left:10px;"><img src="img/arrow.png" width="12" height="32"/></td>
            <td style="padding-left:15px;font-family:Arial, Helvetica, sans-serif;color:#333;font-size:16px;font-weight:bold;"> What would you like to do? </td>
          </tr>
        </table>
      </div>
      <div style="clear:both;height:20px;background-color:#FFF;"></div>
      <div style="margin:0 auto;width:900px;">
        <table cellpadding="0" cellspacing="0" border="0" width="900">
          <!--profile-->
          <tr>
            <td width="50%"><table cellpadding="0" cellspacing="0" border="0">
              <tr>
                <td style="padding-left:10px;"><a href="dentist_profile.php"><img src="img/profile.png" width="41" height="48" /></a></td>
                <td style="padding-left:20px;"><table cellpadding="0" cellspacing="0" border="0">
                  <tr>
                    <td><a href="dentist_profile.php" style="text-decoration:none;color:#2a91b4;font-size:18px;font-weight:bolder;font-family: 'Trebuchet MS', Arial, Helvetica, sans-serif;">PROFILE</a></td>
                  </tr>
                  <tr>
                    <td style="color:#3b4244;font-size:13px;font-weight:bold;font-family:Arial, Helvetica, sans-serif;padding-top:6px;"> You can now create your profile or update your basic
                      <div style="clear:both;"></div>
                      information such as your office address,office hours etc. </td>
                  </tr>
                </table></td>
              </tr>
            </table>
              <!--profile--></td>
            <!--scehduler-->
            <td width="50%" align="right"><table cellpadding="0" cellspacing="0" border="0">
              <tr>
                <td><a href="scheduler/wdCalendar/index.php" target="_blank"><img src="img/schedule.png" width="42" height="47" /></a></td>
                <td style="padding-right:40px;padding-left:20px;"><table cellpadding="0" cellspacing="0" border="0">
                  <tr>
                    <td style="color:#2a91b4;font-size:18px;font-weight:bolder;font-family: 'Trebuchet MS', Arial, Helvetica, sans-serif;"><a href="scheduler/wdCalendar/index.php" style="text-decoration:none;color:#2a91b4;" target="_blank">SCHEDULER</a></td>
                  </tr>
                  <tr>
                    <td style="color:#3b4244;font-size:13px;font-weight:bold;font-family:Arial, Helvetica, sans-serif;padding-top:6px;"> You can check your everyday schedule by having your
                      <div style="clear:both;"></div>
                      own personal scheduler. </td>
                  </tr>
                </table></td>
              </tr>
            </table></td>
            <!--scehduler-->
          </tr>
          <tr>
            <td><div style="clear:both;height:25px;background-color:#FFF;"></div></td>
          </tr>
          <tr>
            <td width="50%"><table cellpadding="0" cellspacing="0" border="0">
              <tr>
                <td style="padding-left:10px;" valign="top"><img src="img/database.png" width="39" height="45" /></td>
                <td style="padding-left:20px;"><table cellpadding="0" cellspacing="0" border="0">
                  <tr>
                    <td style="color:#2a91b4;font-size:18px;font-weight:bolder;font-family: 'Trebuchet MS', Arial, Helvetica, sans-serif;"> PATIENT DATABASE </td>
                  </tr>
                  <tr>
                    <td style="color:#3b4244;font-size:13px;font-weight:bold;font-family:Arial, Helvetica, sans-serif;padding-top:6px;"> Update your patient's status by adding, editing, deleting,
                      <div style="clear:both;"></div>
                      searching or even printing the patient's information.
                      <div style="clear:both;"></div>
                      You can now provide remarks or notation for serching
                      <div style="clear:both;"></div>
                      purposes. Birthday notification of your patient is also
                      <div style="clear:both;"></div>
                      available. Note: Only specific dentists who posted the data
                      <div style="clear:both;"></div>
                      will see the record. </td>
                  </tr>
                </table></td>
              </tr>
            </table>
              <!--profile--></td>
            <!--scehduler-->
            <td width="50%" align="right" valign="top" style="padding-left:5px;"><table cellpadding="0" cellspacing="0" border="0">
              <tr>
                <td valign="top"><a href="message_contact.php"><img src="img/message.png" width="43" height="43" /></a></td>
                <td style="padding-right:30px;padding-left:20px;"><table cellpadding="0" cellspacing="0" border="0">
                  <tr>
                    <td><a href="message_contact.php" style="text-decoration:none;color:#2a91b4;font-size:18px;font-weight:bolder;font-family: 'Trebuchet MS', Arial, Helvetica, sans-serif;">MESSAGING</a></td>
                  </tr>
                  <tr>
                    <td style="color:#3b4244;font-size:13px;font-weight:bold;font-family:Arial, Helvetica, sans-serif;padding-top:6px;"> You can remind your patient for dental schedule. You 
                      
                      may also answer your patient's inquiry or letting them know 
                      
                      your available time. In this messaging function, both you and
                      
                      your patient will be notified via email. </td>
                  </tr>
                </table></td>
              </tr>
            </table></td>
            <!--scehduler-->
          </tr>
        </table>
      </div>
      <div style="clear:both;height:20px;background-color:#FFF;"></div>
    </div></td>
    <!--bottom-content-->
  </tr>
  <tr>
    <td style="background-color:#FFF;">&nbsp;</td>
  </tr>
  <tr>
    <td style="background-color:#FFF;"><?php include('includes/footer.php');?></td>
  </tr>
</table>
</body>
</html>

