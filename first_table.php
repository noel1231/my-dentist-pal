<?php include('config.php');?>
<table cellpadding="0" cellspacing="0" border="0" style="font-family:Arial, Helvetica, sans-serif;" width="290">
              <tr>
                <td width="100%">
                <table cellpadding="0" cellspacing="0" border="0" width="100%">
                  <tr>
                    <td style="background-image:url('img/landing_left_blue.png');height:46px;width:7px;"></td>
                    <td style="background-image:url('img/landing_center_blue.png');height:46px;width:310px;color:#fbfdfe;font-size:22px;padding-left:20px;"><!--<img src="img/landing_general.png" width="167" height="23" style="margin-top:3px;"/>-->
                      <span style="font-family:'Trebuchet MS', Arial, Helvetica, sans-serif;color:#FFF;font-size:20px;">Notification Alert</span></td>
                    <td style="background-image:url('img/landing_right_blue.png');height:46px;width:7px;"></td>
                  </tr>
                </table>
                </td></tr>
                
                <tr><td width="100%" style="background-color:#fdfdfd;" height="185" class="landing_box" valign="top">
       
                <table width="70%" border="0" cellspacing="0" cellpadding="0" align="center">
  <tr>
    <td>
    <?php

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
    
    </td>
  </tr>
</table>

                
                </td></tr>
                
                </table>