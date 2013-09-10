<link rel="stylesheet" type="text/css" media="screen" href="style/style.css" />
<?php
include('config.php');
if(isset($_GET['id'])){
$id = $_GET['id'];
}
if(isset($_POST['save_notes'])) {
$date_due=mysql_real_escape_string($_POST['date_due']);
$description=mysql_real_escape_string($_POST['description']);
$ammount=mysql_real_escape_string($_POST['ammount']);
$down=mysql_real_escape_string($_POST['downpayment']);
$id=mysql_real_escape_string($_POST['patient_id']);

$sql="UPDATE patient_credits SET notes_date_due='".$date_due."',notes_description='".$description."',notes_ammount='".$ammount."',notes_downpayment='".$down."' WHERE id='".$id."'";
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


$sql="SELECT * FROM patient_credits WHERE id='".$id."'";
$res=mysql_query($sql);
while($row=mysql_fetch_array($res)) {
?>

  <form method="post" action="" enctype="multipart/form-data">
            <table cellpadding="0" cellspacing="0" border="0" style="font-family:Arial, Helvetica, sans-serif;" width="100%">
            <tr><td height="45" width="100%" style="background-color:#0281aa;">
            <span style="margin-left:20px;color:#FFF;font-size:20px;font-weight:bold;">Edits Notes</span>
            </td></tr>
            <tr><td>
            <div style="margin:0 auto;width:390px;">
            <table cellpadding="0" cellspacing="0" border="0">
            <tr><td><div style="clear:both;height:15px;"></div></td></tr>
            <tr><td style="width:130px;text-align:right;color:#333;font-size:16px;font-weight:bold;">
            Date Due
            </td>
            <td style="padding-left:38px;"><input type="text" name="date_due" id="datepicker" style="width:150px;" value="<?php echo $row['notes_date_due'];?>"/></td>
            </tr>
            <tr><td><div style="clear:both;height:15px;"></div></td></tr>
            <tr><td style="width:130px;text-align:right;color:#333;font-size:16px;font-weight:bold;">
            Description
            </td>
            <td style="padding-left:38px;"><input type="text" name="description" style="width:200px;" value="<?php echo $row['notes_description'];?>"/></td>
            </tr>
            <tr><td><div style="clear:both;height:15px;"></div></td></tr>
            <tr><td style="width:130px;text-align:right;color:#333;font-size:16px;font-weight:bold;">
            Ammount
            </td>
            <td style="padding-left:20px;color:#333;font-size:12px;">Php<input type="text" name="ammount" style="width:150px;" value="<?php echo $row['notes_ammount'];?>"/>.00</td>
            </tr>
            <tr><td><div style="clear:both;height:15px;"></div></td></tr>
            <tr><td style="width:130px;text-align:right;color:#333;font-size:16px;font-weight:bold;">
            Downpayment
            </td>
            <td style="padding-left:20px;color:#333;font-size:12px;;">Php<input type="text" name="downpayment" style="width:150px;" value="<?php echo $row['notes_downpayment'];?>"/>.00</td>
            </tr>
            
            <tr><td colspan="2">
            <div style="margin-left:120px;margin-top:20px;">
            <input type="submit" name="save_notes" class="submit2" value="Save"/>&nbsp;&nbsp;&nbsp;&nbsp;
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