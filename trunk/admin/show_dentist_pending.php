<?php
include('config.php');

if(isset($_GET['id'])){
$idy = $_GET['id']; }

$sql="SELECT * FROM dentist_list WHERE id='".$idy."'";
$res=mysql_query($sql);
while($row=mysql_fetch_array($res)) {
	
	  $fname=$row['first_name'];
			  $lname=$row['sur_name'];
			  $mname=$row['middle_name'];
			  $name=$fname." ".$mname." ".$lname;
			  
	  $month=$row['birth_month']; 
	  $day=$row['birth_day'];
	  $year=$row['birth_year'];
	  
	  $bday=$month." ".$day.", ".$year;
	  
	  $lot=$row['address_lot'];
	  $city=$row['address_city'];
	  $address=$lot.", ".$city;
?>

<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>&nbsp;</td>
  </tr>
  <!--<tr>
    <td>
    <table width="739" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td height="39" valign="top"><div>
          <div style="width:140px; margin-left:20px; margin-bottom:-2px; float:left;">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="6"><img src="img/t1.jpg" width="6" height="41" alt="" /></td>
                <td width="661" align="center" style="background: url(img/t3.jpg);"><img src="img/t-contact.png" width="95" height="12" alt="" /></td>
                <td width="6"><img src="img/t2.jpg" width="6" height="41" alt="" /></td>
              </tr>
            </table>
          </div>
          <div style="width:120px; margin-left:10px; margin-bottom:-2px; float:left;">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="6"><img src="img/t1.jpg" width="6" height="41" alt="" /></td>
                <td width="661" align="center" style="background: url(img/t3.jpg);"><img src="img/t-received.png" width="83" height="13" alt="" /></td>
                <td width="6"><img src="img/t2.jpg" width="6" height="41" alt="" /></td>
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
      <tr><td>
        <table cellpadding="0" cellspacing="0" border="0">
        <tr><td><img src="../img/1.jpg" width="739" height="12" alt="" />
       
        </td></tr>
        </table></td>
      </tr>
      <tr>
        <td height="47" style="background:url(../img/2.jpg);"><!--<img src="../img/menu_blue1.png" width="106" height="19" style="margin-top:-5px;margin-left:40px;"/>-->
        <div style="margin-left:30px;margin-top:-8px;">
        <span style="font-family:Arial, Helvetica, sans-serif;color:#FFF;font-size:16px;font-weight:bold;">
       Personal Info
        </span>
        </div>
        </td>
      </tr>
      <tr>
        <td valign="top" style="background:url(../img/3.jpg);"><div style="margin-top:-8px; position: relative;">
          <table width="690" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td bgcolor="#FFFFFF" style="border-left:1px solid #a0a8ac; border-bottom:1px solid #a0a8ac; border-right:1px solid #a0a8ac;">
              
              <!--content-->
              <div style="margin:0 auto;width:650px;margin-top:20px;">
              <!--<div style="clear:both;height:30px;"></div>-->
              <table cellpadding="0" cellspacing="0" border="0" style="font-family:Arial, Helvetica, sans-serif;font-size:13px;">
              <tr><td style="padding-left:80px;width:85%;">
              <!--profile--><table cellpadding="0" cellspacing="0" border="0"> 
              <tr><td style="text-align:right;color:#373838;font-weight:bold;">
              License Number: 
              </td> <td style="color:#8c8c8c;padding-left:20px;font-weight:bold;"><!--Maverick Bersabe--><?php echo $row['license_number'];?></td></tr>
              <tr><td style="text-align:right;color:#373838;font-weight:bold;">
              Name: 
              </td> <td style="color:#8c8c8c;padding-left:20px;font-weight:bold;"><!--Maverick Bersabe--><?php echo $name;?></td></tr>
              <tr><td style="text-align:right;color:#373838;font-weight:bold;padding-top:8px;">
              Age: 
              </td> <td style="color:#8c8c8c;padding-left:20px;font-weight:bold;padding-top:8px;"><!--21--><?php echo $row['dentist_age'];?></td></tr>
              <tr><td style="text-align:right;color:#373838;font-weight:bold;padding-top:8px;">
              Gender: 
              </td> <td style="color:#8c8c8c;padding-left:20px;font-weight:bold;padding-top:8px;"><!--Male--><?php echo $row['dentist_gender'];?></td></tr>
              <tr><td style="text-align:right;color:#373838;font-weight:bold;padding-top:8px;">
             Birthday: 
              </td> <td style="color:#8c8c8c;padding-left:20px;font-weight:bold;padding-top:8px;"><!--June 30, 1990--><?php echo $bday;?></td></tr>
              <!--profile--></table>
              </td>
              <!--picture-->
              <td>
              <img src="<?php echo $row['profile_pic'];?>"/>
              </td>
              <!--picture-->
              
              </tr>
              
              <!--spacer--><tr><td><div style="clear:both;height:20px;"></div></td></tr>
              </table>
              
              </div>
              <!--content-->
                </td>
            </tr>
          
          </table>
        </div></td>
      </tr><!--first content-->
      
       <?php /* <!--second content--> 
       <tr>
        <td height="47" style="background:url(../img/2.jpg);"><img src="i../mg/menu_blue2.png" width="130" height="22" style="margin-top:-5px;margin-left:40px;"/></td>
      </tr>
        <tr>
        <td valign="top" style="background:url(../img/3.jpg);"><div style="margin-top:-8px; position: relative;">
          <table width="690" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td bgcolor="#FFFFFF" style="border-left:1px solid #a0a8ac; border-bottom:1px solid #a0a8ac; border-right:1px solid #a0a8ac;">
              
                <!--content-->
              <div style="margin:0 auto;width:650px;margin-top:20px;">
              <!--<div style="clear:both;height:30px;"></div>-->
              <table cellpadding="0" cellspacing="0" border="0" style="font-family:Arial, Helvetica, sans-serif;font-size:13px;">
              <tr><td style="padding-left:80px;width:85%;">
              <!--profile--><table cellpadding="0" cellspacing="0" border="0"> 
              <tr><td style="text-align:right;color:#373838;font-weight:bold;">
              Services: 
              </td> <td style="color:#8c8c8c;padding-left:20px;font-weight:bold;">Cosmetic dentistry</td></tr>
              <tr><td style="text-align:right;color:#373838;font-weight:bold;padding-top:8px;">
             
              </td> <td style="color:#8c8c8c;padding-left:20px;font-weight:bold;padding-top:8px;">Restorative dentistry</td></tr>
              <tr><td style="text-align:right;color:#373838;font-weight:bold;padding-top:8px;">
              
              </td> <td style="color:#8c8c8c;padding-left:20px;font-weight:bold;padding-top:8px;">General & preventive dentistry</td></tr>
              <tr><td style="text-align:right;color:#373838;font-weight:bold;padding-top:8px;">
              
              </td> <td style="color:#8c8c8c;padding-left:20px;font-weight:bold;padding-top:8px;">Children dentistry</td></tr>
              <!--profile--></table>
              </td>
              <!--picture-->
              <!--<td>
              <img src="img/profile_pic.png" widtj="116" height="115"/>
              </td>-->
              <!--picture-->
              
              </tr>
              
              <!--spacer--><tr><td><div style="clear:both;height:20px;"></div></td></tr>
              </table>
              
              </div>
              <!--content-->
              
              </td>
            </tr>
          </table>
        </div></td>
      </tr><!--second-content-->
      */?>
       <!--third content--> 
       <tr>
        <td height="47" style="background:url(../img/2.jpg);"><!--<img src="../img/menu_blue3.png" width="119" height="17" style="margin-top:-5px;margin-left:40px;"/>-->
        <div style="margin-left:30px;margin-top:-8px;">
        <span style="font-family:Arial, Helvetica, sans-serif;color:#FFF;font-size:16px;font-weight:bold;">
       Professional Info
        </span>
        </div>
        </td>
      </tr>
        <tr>
        <td valign="top" style="background:url(../img/3.jpg);"><div style="margin-top:-8px; position: relative;">
          <table width="690" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td bgcolor="#FFFFFF" style="border-left:1px solid #a0a8ac; border-bottom:1px solid #a0a8ac; border-right:1px solid #a0a8ac;">
              
                <!--content-->
              <div style="margin:0 auto;width:650px;margin-top:20px;">
              <!--<div style="clear:both;height:30px;"></div>-->
              <table cellpadding="0" cellspacing="0" border="0" style="font-family:Arial, Helvetica, sans-serif;font-size:13px;">
              <tr><td style="padding-left:40px;width:85%;">
              <!--profile--><table cellpadding="0" cellspacing="0" border="0"> 
              <tr><td style="text-align:right;color:#373838;font-weight:bold;">
              Services Offered: 
              </td> <td style="color:#8c8c8c;padding-left:20px;font-weight:bold;"><!--158 San Jose, Noveleta, Cavite--><?php echo nl2br($row['services_offered']);?></td></tr>
              
              
              <!--profile--></table>
              </td>
              <!--picture-->
              <!--<td>
              <img src="img/profile_pic.png" widtj="116" height="115"/>
              </td>-->
              <!--picture-->
              
              </tr>
              
             <!--spacer--><tr><td><div style="clear:both;height:20px;"></div></td></tr>
              </table>
              
              </div>
              <!--content-->
              
              </td>
            </tr>
          </table>
        </div></td>
      </tr><!--third-content-->
      
      
        <!--third content--> 
       <tr>
        <td height="47" style="background:url(../img/2.jpg);"><!--<img src="../img/menu_blue3.png" width="119" height="17" style="margin-top:-5px;margin-left:40px;"/>-->
         <div style="margin-left:30px;margin-top:-8px;">
        <span style="font-family:Arial, Helvetica, sans-serif;color:#FFF;font-size:16px;font-weight:bold;">
       Contact Details
        </span>
        </div>
        </td>
      </tr>
        <tr>
        <td valign="top" style="background:url(../img/3.jpg);padding-bottom:10px;"><div style="margin-top:-8px; position: relative;">
          <table width="690" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td bgcolor="#FFFFFF" style="border-left:1px solid #a0a8ac; border-bottom:1px solid #a0a8ac; border-right:1px solid #a0a8ac;">
              
                <!--content-->
              <div style="margin:0 auto;width:650px;margin-top:20px;">
              <!--<div style="clear:both;height:30px;"></div>-->
              <table cellpadding="0" cellspacing="0" border="0" style="font-family:Arial, Helvetica, sans-serif;font-size:13px;">
              <tr><td style="padding-left:40px;width:85%;">
              <!--profile--><table cellpadding="0" cellspacing="0" border="0"> 
              <tr><td style="text-align:right;color:#373838;font-weight:bold;">
              Address: 
              </td> <td style="color:#8c8c8c;padding-left:20px;font-weight:bold;"><!--158 San Jose, Noveleta, Cavite--><?php echo $address;?></td></tr>
              <tr><td style="text-align:right;color:#373838;font-weight:bold;padding-top:8px;">
             Landline:
              </td> <td style="color:#8c8c8c;padding-left:20px;font-weight:bold;padding-top:8px;"><!--046.468.0000--><?php echo $row['tel_number'];?></td></tr>
              <tr><td style="text-align:right;color:#373838;font-weight:bold;padding-top:8px;">
              Mobile Number:
              </td> <td style="color:#8c8c8c;padding-left:20px;font-weight:bold;padding-top:8px;"><!--+639150122333--><?php echo $row['cel_number'];?></td></tr>
              
              <!--profile--></table>
              </td>
              <!--picture-->
              <!--<td>
              <img src="img/profile_pic.png" widtj="116" height="115"/>
              </td>-->
              <!--picture-->
              
              </tr>
              
              <!--spacer--><tr><td><div style="clear:both;height:20px;"></div></td></tr>
              </table>
              
              </div>
              <!--content-->
              
              </td>
            </tr>
          </table>
        </div></td>
      </tr><!--third-content-->
      
      
      <tr>
        <td><img src="../img/4.jpg" width="739" height="6" alt="" /></td>
      </tr>
       <tr><td>
  <div style="clear:both;height:20px;"></div>
  <input type="button" class="submit2" value="Back" onclick="window.location='accounts.php'"/></td></tr>
    </table></td>
  </tr>
 
</table>

<?php } ?>
