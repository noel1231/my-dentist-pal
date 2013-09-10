<!--<script>

function ChangeDesign(s) {

//alert(s);
if(s==1) {
document.getElementById('nav1').style.backgroundColor='#d8e0e8';
document.getElementById('link1').style.color='#1484b0';
}
else if(s==2) {
document.getElementById('nav2').style.backgroundColor='#d8e0e8';
document.getElementById('link2').style.color='#1484b0';
}
else if(s==3) {
document.getElementById('nav3').style.backgroundColor='#d8e0e8';
document.getElementById('link3').style.color='#1484b0';
}
else if(s==4) {
document.getElementById('nav4').style.backgroundColor='#d8e0e8';
document.getElementById('link4').style.color='#1484b0';
}
else if(s==5) {
document.getElementById('nav5').style.backgroundColor='#d8e0e8';
document.getElementById('link5').style.color='#1484b0';
}
else if(s==6) {
document.getElementById('nav6').style.backgroundColor='#d8e0e8';
document.getElementById('link6').style.color='#1484b0';
}
else if(s==7) {
document.getElementById('nav7').style.backgroundColor='#d8e0e8';
document.getElementById('link7').style.color='#1484b0';
}

}
</script>-->


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
else if($page_now==4) {
$back_now4="#d8e0e8";
$color_now4="#1484b0";
}
else if($page_now==5) {
$back_now5="#d8e0e8";
$color_now5="#1484b0";
}
else if($page_now==6) {
$back_now6="#d8e0e8";
$color_now6="#1484b0";
}
else if($page_now==7) {
$back_now7="#d8e0e8";
$color_now7="#1484b0";
}
$rad="10px";
?>


<!--leftbox--><div style="float:left;width:205px;height:250px;">
<div id="nav1" class="top" style="float:left;width:90%;background-color:<?php if($back_now1) { echo $back_now1; } else { echo "#fff";}?>;height:38px;border:1px solid #ccd3da;">

<a href="dentist_landing.php" id="link1" style="color:<?php if($color_now1) { echo $color_now1; } else { echo "#333"; }?>;text-decoration:none;" onclick="ChangeDesign(1)">
<span style="float:left;margin-left:20px;font-size:18px;font-family:Arial, Helvetica, sans-serif;margin-top:8px;">Dashboard</span></a>

</div>
<?php /*<div id="nav2" class="navside2" style="float:left;border:1px solid #ccd3da;height:38px;width:90%;background-color:<?php if($back_now2) { echo $back_now2; } else { echo "#fff";}?>;"><a href="add_patient.php" id="link2" style="color:<?php if($color_now2) { echo $color_now2; } else { echo "#333"; }?>;text-decoration:none;" onclick="ChangeDesign(2)">
<span style="float:left;margin-top:8px;margin-left:20px;font-size:18px;font-family:Arial, Helvetica, sans-serif;">Add Patient</span></a>
</div>*/?>
<!--<div style="float:left;border:1px solid #ccd3da;height:38px;width:90%;background-color:#d8e0e8;">
<table cellpadding="0" cellspacing="0" border="0" width="91%">
<tr><td>
<a href="#" style="text-decoration:none;"> 
<span style="float:left;margin-top:8px;margin-left:20px;font-size:18px;color:#1484b0;font-family:Arial, Helvetica, sans-serif;">Patient List</span></a>
</td><td>
<img src="images/play.png" style="margin-top:8px;"/>
</td></tr></table>
</div>--><div id="nav3" class="navside2" style="float:left;border:1px solid #ccd3da;height:38px;width:90%;background-color:<?php if($back_now3) { echo $back_now3; } else { echo "#fff";}?>;"><a href="patient_list.php" id="link3" style="color:<?php if($color_now3) { echo $color_now3; } else { echo "#333"; }?>;text-decoration:none;" onclick="ChangeDesign(3)">
<span style="float:left;margin-top:8px;margin-left:20px;font-size:18px;font-family:Arial, Helvetica, sans-serif;">Patient List</span></a></div>

<div id="nav4" class="navside2" style="float:left;border:1px solid #ccd3da;height:38px;width:90%;background-color:<?php if($back_now4) { echo $back_now4; } else { echo "#fff";}?>;"><a href="dentist_addressbook.php" id="link4" style="color:<?php if($color_now4) { echo $color_now4; } else { echo "#333"; }?>;text-decoration:none;" onclick="ChangeDesign(4)">
<span style="float:left;margin-top:8px;margin-left:20px;font-size:18px;font-family:Arial, Helvetica, sans-serif;">Address Book</span></a>
</div>

<div id="nav5" class="navside2" style="float:left;border:1px solid #ccd3da;height:38px;width:90%;background-color:<?php if($back_now5) { echo $back_now5; } else { echo "#fff";}?>;"><a href="scheduler/wdCalendar/index.php" id="link5" style="color:<?php if($color_now5) { echo $color_now5; } else { echo "#333"; }?>;text-decoration:none;" target="_blank" onclick="ChangeDesign(5)">
<span style="float:left;margin-top:8px;margin-left:20px;font-size:18px;font-family:Arial, Helvetica, sans-serif;">Scheduler</span></a>
</div>
<!--<div class="navside2" style="float:left;border:1px solid #ccd3da;height:38px;width:90%;background-color:#FFF;"><a href="http://leentechsystems.net/mydentistpal/dentist_patient_notes.php" style="text-decoration:none;">
<span style="float:left;margin-top:8px;margin-left:20px;font-size:18px;color:#000;font-family:Arial, Helvetica, sans-serif;">Patient Notes</span></a>
</div>-->
<div id="nav6" class="navside2" style="float:left;border:1px solid #ccd3da;height:38px;width:90%;background-color:<?php if($back_now6) { echo $back_now6; } else { echo "#fff";}?>;"><a href="dentist_simple_accounting.php" style="color:<?php if($color_now6) { echo $color_now6; } else { echo "#333"; }?>;text-decoration:none;" id="link6" onclick="ChangeDesign(6)">
<span style="float:left;margin-top:8px;margin-left:20px;font-size:18px;font-family:Arial, Helvetica, sans-serif;">Simple Accounting</span></a>
</div>

<div id="nav7" class="navside3" style="float:left;border:1px solid #ccd3da;height:38px;width:90%;background-color:<?php if($back_now7) { echo $back_now7; } else { echo "#fff";}?>;-webkit-border-bottom-left-radius: <?php echo $rad;?>;
-webkit-border-bottom-right-radius: <?php echo $rad;?>; 

-khtml-border-bottom-left-radius: <?php echo $rad;?>;
-khtml-border-bottom-right-radius: <?php echo $rad;?>; 

-moz-border-radius-bottomright: <?php echo $rad;?>;
-moz-border-radius-bottomleft: <?php echo $rad;?>;

border-bottom-left-radius: <?php echo $rad;?>;
border-bottom-right-radius: <?php echo $rad;?>; 
overflow:hidden;"><a href="blog.php" id="link7" style="color:<?php if($color_now7) { echo $color_now7; } else { echo "#333"; }?>;text-decoration:none;" onclick="ChangeDesign(7)"> 
<span style="float:left;margin-top:8px;margin-left:20px;font-size:18px;font-family:Arial, Helvetica, sans-serif;

 ">Blogging</span></a>
</div>
</div><!--end of leftbox-->