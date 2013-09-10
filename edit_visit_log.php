<link rel="stylesheet" type="text/css" media="screen" href="style/style.css" />
<?php
include('config.php');
if(isset($_GET['id'])){
$id = $_GET['id'];
}

if(isset($_POST['save_logs']))
{
$tooth_num=mysql_real_escape_string($_POST['tooth_num']);
$surface=mysql_real_escape_string($_POST['surface']);
$notes=mysql_real_escape_string($_POST['treatment_notes']);
$initial=mysql_real_escape_string($_POST['initial']);
$fee=mysql_real_escape_string($_POST['fee']);
$pt_id=mysql_real_escape_string($_POST['patient_id']);

$sql="UPDATE patient_logs SET tooth_num='".$tooth_num."',surface='".$surface."',treatment_notes='".$notes."',intial='".$initial."',fee='".$fee."',log_date=NOW() WHERE id='".$pt_id."'";
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

$sql="SELECT * FROM patient_logs WHERE id='".$id."'";
$res=mysql_query($sql);
while($row=mysql_fetch_array($res)) {
	
	$opt=$row['surface'];
?>

<form method="post" action="" enctype="multipart/form-data">
            <table cellpadding="0" cellspacing="0" border="0" style="font-family:Arial, Helvetica, sans-serif;" width="100%">
            <tr><td height="45" width="100%" style="background-color:#0281aa;">
            <span style="margin-left:20px;color:#FFF;font-size:20px;font-weight:bold;">Record Log</span>
            </td></tr>
            <tr><td>
            <div style="margin:0 auto;width:600px;">
            <table cellpadding="0" cellspacing="0" border="0">
            <tr><td colspan="2"><div style="clear:both;height:15px;"></div></td></tr>
            <tr><td style="width:160px;text-align:right;color:#333;font-size:16px;font-weight:bold;">
            Tooth Number:
            </td>
            <td style="padding-left:28px;"><input type="text" name="tooth_num" style="width:70px;" value="<?php echo $row['tooth_num'];?>"/></td>
            </tr>
            <tr><td><div style="clear:both;height:15px;"></div></td></tr>
            <tr><td style="width:160px;text-align:right;color:#333;font-size:16px;font-weight:bold;">
            Surface:
            </td>
            <td style="padding-left:26px;">
            <table cellpadding="0" cellspacing="0" border="0">
             <tr><td style="width:90px;">
            <input type="radio" name="surface" value="facial" <?php echo (($opt=="facial")?"checked":"");?>/>Facial 
             </td><td style="width:90px;">
            <input type="radio" name="surface" value="mesial" <?php echo (($opt=="mesial")?"checked":"");?>/>Mesial 
             </td><td style="width:90px;">
            <input type="radio" name="surface" value="ligual" <?php echo (($opt=="ligual")?"checked":"");?>/>Ligual 
             </td><td style="width:90px;">
            <input type="radio" name="surface" value="occlusal" <?php echo (($opt=="occlusal")?"checked":"");?>/>Occlusal 
             </td><td style="width:90px;">
            <input type="radio" name="surface" value="distal" <?php echo (($opt=="distal")?"checked":"");?>/>Distal 
             </td></tr>
            </table>
            </td>
            </tr>
            <tr><td><div style="clear:both;height:15px;"></div></td></tr>
            <tr><td style="width:160px;text-align:right;color:#333;font-size:16px;font-weight:bold;">
            Treatment notes:
            </td>
            <td style="padding-left:28px;color:#333;font-size:12px;font-family:Arial, Helvetica, sans-serif;"><textarea name="treatment_notes" cols="25" rows="3"/><?php echo nl2br($row['treatment_notes']);?></textarea></td>
            </tr>
            <tr><td><div style="clear:both;height:15px;"></div></td></tr>
            <tr><td style="width:160px;text-align:right;color:#333;font-size:16px;font-weight:bold;">
            Initial:
            </td>
            <td style="padding-left:20px;color:#333;font-size:12px;;">P&nbsp;<input type="text" name="initial" style="width:50px;" value="<?php echo $row['intial'];?>"/>&nbsp;.00</td>
            </tr>
            <tr><td><div style="clear:both;height:15px;"></div></td></tr>
            <tr><td style="width:160px;text-align:right;color:#333;font-size:16px;font-weight:bold;">
            Fee:
            </td>
            <td style="padding-left:20px;color:#333;font-size:12px;;">P&nbsp;<input type="text" name="fee" style="width:50px;" value="<?php echo $row['fee'];?>"/>&nbsp;.00</td>
            </tr>
            
            <tr><td colspan="2">
            <div style="margin-left:120px;margin-top:20px;">
            <input type="submit" name="save_logs" class="submit2" />&nbsp;&nbsp;&nbsp;&nbsp;
             <input type="button" name="cancel" class="submit2" value="Cancel" onclick="self.close();"/>
            </div>
            </td></tr>
            <input type="hidden" name="patient_id" value="<?php echo $row['id'];?>" />
            </table> 
            </form>
            </div> 
            </td></tr>
            
         
            </table>  
            <?php } ?>     