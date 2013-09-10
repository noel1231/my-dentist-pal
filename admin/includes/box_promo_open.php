<?php if(isset($_GET['id'])){
$id = $_GET['id'];
}

if(isset($_POST['send'])) {
$id=mysql_real_escape_string($_POST['promo_id']);	
$subject=mysql_real_escape_string($_POST['subject']);
$date=mysql_real_escape_string($_POST['date']);
$number=mysql_real_escape_string($_POST['number']);
$message=mysql_real_escape_string($_POST['message']);
$link=mysql_real_escape_string($_POST['link']);

$dates=explode("/",$date);
$date_month=$dates[0];
$date_day=$dates[1];
$date_year=$dates[2];

$date_now=$date_year."-".$date_month."-".$date_day;


$sql="UPDATE promos_and_offer SET
promo_subject='".$subject."',
promo_expiration_date='".$date_now."',
promo_limit='".$number."',
promo_link='".$link."',
promo_message='".$message."' WHERE id='".$id."'";
$res=mysql_query($sql);
//var_dump($res);die();

if ($_SERVER['REQUEST_METHOD']=='POST') {
	


  $success = 0;

  $fail = 0;

//
  $uploaddir = 'banner/';

  for ($i=0;$i<2;$i++)

  {
$ctr=$i+1; 




//


   if($_FILES['userfile1']['name'])

   {


	$ctr=$i+1; 

    $uploadfile = $uploaddir . basename($_FILES['userfile1']['name']);




    $ext = strtolower(substr($uploadfile,strlen($uploadfile)-3,3));

    if (preg_match("/(jpg|gif|png|bmp)/",$ext))

    {

	//giving the file name

	$now = time(); 

    while(file_exists($uploadfile = $uploaddir.$now.'-'.$_FILES['userfile1']['name'])) 

	{ 

		$now++; 

	} 

     if (move_uploaded_file($_FILES['userfile1']['tmp_name'], $uploadfile)) 

     {

      $sql = "UPDATE promos_and_offer SET promo_picture='".$uploadfile."' WHERE id='".$id."'";//

		$res=mysql_query($sql);
		
//var_dump($res);die();
	  $success++;

     } 

     else 

     {

     $message = "Error Uploading the file. Retry after sometime.\n";

     $fail++;

     }

    }

    else

    {

     $fail++;

    }

   //}

  }

  $message = "<br> Number of files Uploaded:".$success."<br>*Restart the page to see the changes. ";

}}



}


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
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><table width="739" border="0" align="center" cellpadding="0" cellspacing="0">
      <!--<tr>
        <td height="39" colspan="2" valign="top"><div>
          <div style="width:140px; margin-left:20px; margin-bottom:-2px; float:left;">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="6"><img src="../img/t1.jpg" width="6" height="41" alt="" /></td>
                <td width="661" align="center" style="background: url(../img/t3.jpg);"><a href="message_contact.php"><img src="../img/t-contact.png" width="95" height="12" alt="" /></a></td>
                <td width="6"><img src="../img/t2.jpg" width="6" height="41" alt="" /></td>
              </tr>
            </table>
          </div>
          <div style="width:120px; margin-left:10px; margin-bottom:-2px; float:left;">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="6"><img src="../img/u1.jpg" width="6" height="41" alt="" /></td>
                <td width="661" align="center" style="background: url(../img/u3.jpg);"><a href="message_received.php"><img src="../img/t-received.png" width="83" height="13" alt="" /></a></td>
                <td width="6"><img src="../img/u2.jpg" width="6" height="41" alt="" /></td>
              </tr>
            </table>
          </div>
          <div style="width:110px; margin-left:10px; margin-bottom:-2px; float:left">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="6"><img src="../img/t1.jpg" width="6" height="41" alt="" /></td>
                <td width="661" align="center" style="background: url(../img/t3.jpg);"><a href="message_sent.php"><img src="../img/t-sent.png" width="72" height="17" alt="" /></a></td>
                <td width="6"><img src="../img/t2.jpg" width="6" height="41" alt="" /></td>
              </tr>
            </table>
          </div>-->
          <!--<div style="width:130px; margin-left:20px; margin-bottom:-2px; float:left; z-index:999999999">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="6"><img src="../img/t1.jpg" width="6" height="41" alt="" /></td>
                <td width="661" align="center" style="background: url(../img/t3.jpg);"><a href="banner_adds.php" style="font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#3e4447;text-decoration:none;">Banner List</a></td>
                <td width="6"><img src="../img/t2.jpg" width="6" height="41" alt="" /></td>
              </tr>
            </table>
          </div>
          <div style="width:130px; margin-left:10px; margin-bottom:-2px; float:left; z-index:999999999">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="6"><img src="../img/t1.jpg" width="6" height="41" alt="" /></td>
                <td width="661" align="center" style="background: url(../img/t3.jpg);"><a href="banner_pending.php" style="font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#3e4447;text-decoration:none;">Pending</a></td>
                <td width="6"><img src="../img/t2.jpg" width="6" height="41" alt="" /></td>
              </tr>
            </table>
          </div>
          <div style="width:130px; margin-left:10px; margin-bottom:-2px; float:left; z-index:999999999">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="6"><img src="../img/t1.jpg" width="6" height="41" alt="" /></td>
                <td width="661" align="center" style="background: url(../img/t3.jpg);"><a href="banner_inactive.php" style="font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#3e4447;text-decoration:none;">Inactive</a></td>
                <td width="6"><img src="../img/t2.jpg" width="6" height="41" alt="" /></td>
              </tr>
            </table>
          </div>
          <div style="width:130px; margin-left:10px; margin-bottom:-2px; float:left; z-index:999999999">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="6"><img src="../img/u1.jpg" width="6" height="41" alt="" /></td>
                <td width="661" align="center" style="background: url(../img/u3.jpg);"><a href="banner_add.php" style="font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#3e4447;text-decoration:none;">Add New</a></td>
                <td width="6"><img src="../img/u2.jpg" width="6" height="41" alt="" /></td>
              </tr>
            </table>
          </div>
        </div></td>
      </tr>-->
      <tr>
        <td colspan="2"><img src="../img/1.jpg" width="739" height="12" alt="" /></td>
      </tr>
    
      <tr>
      
        <td height="47" style="background:url(../img/2.jpg);">
        <table width="100%"><tr><td>
        <!--<img src="../img/read_message_blue.png" height="21" width="177" style="margin-top:-8px;margin-left:23px;"/>-->
        <div style="margin-left:30px;margin-top:-8px;">
        <span style="font-family:Arial, Helvetica, sans-serif;color:#FFF;font-size:16px;font-weight:bold;">
      Edit Promos & Offers
        </span>
        </div>
        </td>
        <!--td align="right"><input type="text" name="search_field" class="search" value="Search contact list" onfocus="if (this.value == 'Search contact list') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Search contact list';}" style="color:#999;margin-right:10px;margin-top:-4px;"/>
     <input type="submit" name="search" value="SEARCH" class="submit" style="margin-right:17px;margin-top:-4px;" /></td>--></tr></table></td>
      </tr>
      <tr>
        <td colspan="2" valign="top" style="background:url(../img/3.jpg); padding-bottom:10px;"><div style="margin-top:-8px; position: relative;">
          <table width="690" border="0" align="center" cellpadding="0" cellspacing="0" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;color:#333;">
            <tr>
              <td bgcolor="#FFFFFF" style="border-left:1px solid #a0a8ac; border-bottom:1px solid #a0a8ac; border-right:1px solid #a0a8ac;">
            
           
           <table cellpadding="0" cellspacing="0" border="0">
           
            <?php 
			
			$sql="SELECT * FROM promos_and_offer WHERE id='".$id."'";
			$res=mysql_query($sql);
			while($row=mysql_fetch_array($res))
			{
				$dates=$row['promo_expiration_date'];
				
				$dates=explode("-",$dates);
				$date_y=$dates[0];
				$date_m=$dates[1];
				$date_d=$dates[2];
				
				$date_nows=$date_m."/".$date_d."/".$date_y;
				//var_dump($date_nows);die();
			?>
            
            <form action="" method="post" enctype="multipart/form-data">
              <tr><td>
              <!--firstcontent--><table cellpadding="0" cellspacing="0" border="0">
              <tr><td style="padding-left:34px;">
        
              </td></tr>

              
              <tr><td style="padding-left:20px;padding-top:25px;">
              
              <table cellpadding="0" cellspacing="0" border="0" style="font-family:Arial, Helvetica, sans-serif;color:#333;font-size:14px;">
              <tr><td style="text-align:right;font-weight:bold;"> 
              Subject:
          
              </td>
              <td style="padding-left:20px;">
              <input type="text" name="subject" style="width:260px;" value="<?php echo $row['promo_subject'];?>" />
              </td>
              </tr>
              
              <tr><td><div style="clear:both;height:10px;"></div></td></tr>
              
              <tr><td style="text-align:right;font-weight:bold;"> 
              Expiration Date:
          
              </td>
              <td style="padding-left:20px;">
              <input type="text" name="date" id="datepicker" style="width:150px;" value="<?php echo $date_nows;?>"/>
              </td>
              </tr>
              
               <tr><td><div style="clear:both;height:10px;"></div></td></tr>
              
              <tr><td style="text-align:right;font-weight:bold;"> 
              How many patient can take this offer?:
          
              </td>
              <td style="padding-left:20px;">
              <input type="text" name="number" style="width:55px;" value="<?php echo $row['promo_limit'];?>"/>
              </td>
              </tr>
              
               <tr><td><div style="clear:both;height:10px;"></div></td></tr>
              
              <tr><td style="text-align:right;font-weight:bold;"> 
             Message:
          
              </td>
              <td style="padding-left:20px;">
              <textarea name="message" cols="30" rows="6"><?php echo $row['promo_message'];?></textarea>
              </td>
              </tr>
              
               <tr><td><div style="clear:both;height:10px;"></div></td></tr>
              
              <tr><td style="text-align:right;font-weight:bold;"> 
              Link:
          
              </td>
              <td style="padding-left:20px;">
              <input type="text" name="link" style="width:260px;" value="<?php echo $row['promo_link'];?>"/>
              </td>
              </tr>
              
              
               <tr><td><div style="clear:both;height:10px;"></div></td></tr>
              
              <tr><td style="text-align:right;font-weight:bold;"> 
              Promo Picture:
          
              </td>
              <td style="padding-left:20px;">
              <input type="file" name="userfile1" style="width:200px;"/>
              </td>
              </tr>
              
              
               <tr><td><div style="clear:both;height:10px;"></div></td></tr>
              
              <tr><td style="text-align:right;font-weight:bold;">&nbsp; 
             
          
              </td>
              <td style="padding-left:20px;">
              <input type="submit" name="send" class="submit2" value="Save"/>
              &nbsp;&nbsp;&nbsp;&nbsp;
               <input type="button" name="cancel" class="submit2" value="Cancel" onclick="window.location='promos_and_offer.php'"/>
              </td>
              </tr>
              
               <tr><td><div style="clear:both;height:20px;"></div></td></tr>
              </table>
              
              </td></tr>
              
              
              <!--firstcontent--></table>
              </td></tr>
              
                            
              <!--contentholder--></table>
                </td>
            </tr>
            
             <!--bottom button--><tr><td>
             <div style="clear:both;height:20px;"></div>
               
             <!--bottom button--></td></tr>
              <input type="hidden" name="promo_id" value="<?php echo $id;?>">
             </form>
             <?php } ?>
           
           </table>
           
                </td>
            </tr>
            
           
            </table><!--</div>--></td></tr>
      <tr>
        <td colspan="2"><img src="../img/4.jpg" width="739" height="6" alt="" /></td>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>

<map name="Map" id="Map">
  <!--<area shape="rect" coords="8,1,131,42" href="messaging.php" />
  <area shape="rect" coords="138,2,263,41" href="received_message.php" />-->
  <area shape="rect" coords="640,2,689,31" href="patient_dental_edit.php" />
  <area shape="rect" coords="2,2,97,33" href="patient_info.php" />
  <area shape="rect" coords="106,2,217,32" href="patient_medical.php" />
  <area shape="rect" coords="223,2,329,32" href="#" />
  <area shape="rect" coords="337,2,427,31" href="patient_tooth.php" />
  <area shape="rect" coords="434,3,504,31" href="patient_visit_log.php" />
  <area shape="rect" coords="511,3,572,31" href="patient_others.php" />
  <area shape="rect" coords="579,3,633,31" href="patient_notes.php" />
</map>