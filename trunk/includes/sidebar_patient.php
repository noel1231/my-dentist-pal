<?php

//var_dump($page_now);

if($page_now==1) {
$back_now1="#d8e0e8";
$color_now1="#1484b0";
}
else if($page_now==2) {
$back_now2="#d8e0e8";
$color_now2="#1484b0";
}
else if($page_now==3) {
$back_now3="#d8e0e8";
$color_now3="#1484b0";
}


?>
<!--leftbox--><div style="float:left;width:205px;height:230px;">
<div class="top" style="float:left;width:90%;background-color:<?php if($back_now1) { echo $back_now1; } else { echo "#fff";}?>;height:38px;border:1px solid #ccd3da;">

<a href="patient/patient_landing.php" style="text-decoration:none;color:<?php if($color_now1) { echo $color_now1; } else { echo "#333"; }?>;">
<span style="float:left;margin-left:20px;font-size:18px;font-family:Arial, Helvetica, sans-serif;margin-top:8px;">Dashboard</span></a>

</div>
<!--<div style="float:left;border:1px solid #ccd3da;height:38px;width:90%;background-color:#d8e0e8;">
<table cellpadding="0" cellspacing="0" border="0" width="91%">
<tr><td>
<a href="#" style="text-decoration:none;"> 
<span style="float:left;margin-top:8px;margin-left:20px;font-size:18px;color:#1484b0;font-family:Arial, Helvetica, sans-serif;">Patient List</span></a>
</td><td>
<img src="images/play.png" style="margin-top:8px;"/>
</td></tr></table>
</div>--><div class="navside2" style="float:left;border:1px solid #ccd3da;height:38px;width:90%;background-color:<?php if($back_now2) { echo $back_now2; } else { echo "#fff";}?>;"><a href="dentist_profile.php" style="text-decoration:none;color:<?php if($color_now2) { echo $color_now2; } else { echo "#333"; }?>;">
<span style="float:left;margin-top:8px;margin-left:20px;font-size:18px;font-family:Arial, Helvetica, sans-serif;">My Dentist's Page</span></a></div>

<!--<div class="navside2" style="float:left;border:1px solid #ccd3da;height:38px;width:90%;background-color:#FFF;"><a href="dentist_profile.php" style="text-decoration:none;">
<span style="float:left;margin-top:8px;margin-left:20px;font-size:18px;color:#000;font-family:Arial, Helvetica, sans-serif;">Bills & Payments</span></a></div>-->

<div class="navside3" style="float:left;border:1px solid #ccd3da;height:38px;width:90%;background-color:<?php if($back_now3) { echo $back_now3; } else { echo "#fff";}?>;;-moz-border-radius-bottomleft:10px;
 -moz-border-radius-bottomright:10px;

 -webkit-border-bottom-left-radius:10px;
 -webkit-border-bottom-right-radius:10px;"><a href="promos_and_offer.php" style="text-decoration:none;color:<?php if($color_now3) { echo $color_now3; } else { echo "#333"; }?>;"> 
<span style="float:left;margin-top:8px;margin-left:20px;font-size:18px;font-family:Arial, Helvetica, sans-serif;

 ">Promos & Offers</span></a>
</div>
</div><!--end of leftbox-->