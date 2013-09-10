<?php

//index file

//header('Location: index.html');

//


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>My Dentist Pal</title>
<style type="text/css">
img { border:none;}

body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	background-image: url(img/bg-dot.gif);
}
body,td,th {
	font-size: 12px;
}

.footer_nav { font-family:Arial, Helvetica, sans-serif; text-transform:uppercase; font-size:12px; color:#d16201;}
.copyright { font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#707070;}
a:link {
	color: #333;
}
a:visited {
	color: #333;
}
a:hover {
	color: #333;
}
a:active {
	color: #333;
}

.b:link {
	color: #d16201;
	text-decoration:none;
}
.b:visited {
	color: #d16201;
	text-decoration:none;
}
.b:hover {
	color: #d16201;
	text-decoration: underline;
}
.b:active {
	color: #d16201;
	text-decoration:none;
}
</style>
<script type="text/javascript">
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
</script>
<link rel="stylesheet" href="lightbox2.05/css/lightbox.css" type="text/css" media="screen" />
	
	<script src="lightbox2.05/js/prototype.js" type="text/javascript"></script>
	<script src="lightbox2.05/js/scriptaculous.js?load=effects,builder" type="text/javascript"></script>
	<script src="lightbox2.05/js/lightbox.js" type="text/javascript"></script><?php include("ganalytics.php"); ?>
</head>

<body onload="MM_preloadImages('myclinicpal/img/nav1a.gif','myclinicpal/img/nav2agif.gif','myclinicpal/img/nav3a.gif','myclinicpal/img/nav4a.gif','myclinicpal/img/nav5a.gif')">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td height="156" style="background:url(myclinicpal/img/top-bg-head.gif);"><table width="993" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td width="10"><img src="myclinicpal/img/head-left.gif" width="11" height="156" alt="" /></td>
        <td width="971" valign="bottom" style="background:url(myclinicpal/img/head-bottom.gif); background-position:bottom; background-repeat:repeat-x;"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td height="87" style="padding-left:25px;"><img src="myclinicpal/img/top.png" width="590" height="43" alt="" /></td>
          </tr>
          <tr>
            <td><div><div  style="position: relative; z-index:2"><a href="#" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image4','','myclinicpal/img/nav1a.gif',1)"><img src="myclinicpal/img/nav1a.gif" name="Image4" width="169" height="59" border="0" id="Image4" /></a><a href="dermapal/index.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image5','','myclinicpal/img/nav2agif.gif',1)"><img src="myclinicpal/img/nav2.gif" name="Image5" width="142" height="59" border="0" id="Image5" /></a><a href="doctorpal/index.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image6','','myclinicpal/img/nav3a.gif',1)"><img src="myclinicpal/img/nav3.gif" name="Image6" width="150" height="59" border="0" id="Image6" /></a><a href="pediapal/index.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image7','','myclinicpal/img/nav4a.gif',1)"><img src="myclinicpal/img/nav4.gif" name="Image7" width="128" height="59" border="0" id="Image7" /></a><a href="petclinicpal/index.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image8','','myclinicpal/img/nav5a.gif',1)"><img src="myclinicpal/img/nav5.gif" name="Image8" width="157" height="59" border="0" id="Image8" /></a></div></div></td>
          </tr>
          <tr>
            <td><img src="myclinicpal/img/spacer.gif" width="1" height="10" alt="" /></td>
          </tr>
        </table></td>
        <td width="10"><img src="myclinicpal/img/head-right.gif" width="11" height="156" alt="" /></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td><table width="973" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td height="290" style="background:url(myclinicpal/img/bg-banner.jpg); background-position:bottom;"><div style="width:953px; margin:0 auto; z-index:1"><div style=" position:absolute; width:953px; margin-top:-210px;"><a href="#test"><img src="myclinicpal/img/banner.png" alt="" width="953" height="332" border="0" usemap="#Map" /></a></div></div></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td><table width="946" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td height="383" style="background:url(myclinicpal/img/main-bg.gif);" valign="top">
          <div style="margin:0 auto;width:910px;">
        <table style="font-family:Arial, Helvetica, sans-serif;" cellpadding="0" cellspacing="0" border="0">
        <tr><td valign="top">
      
        <table cellpadding="0" cellspacing="0" border="0" style="padding-top:20px;">
        <tr><td style="font-size:18px;color:#274783;padding-left:10px;">
        Services
        </td></tr>
      
        <tr><td style="padding-top:20px;font-size:14px;color:#333;width:580;padding-left:10px;">
        
         <span style="font-weight:bold;"> Full Immediate Dentures</span>
           <div style="clear:both;height:5px;"></div>
           An immediate denture involves placing denture plates in the patient's mouth after some number of extractions are performed while the replacement denture above is for those patients who does not have teeth and whatsoever (edentulous).

        <div style="clear:both;height:12px;"></div>
        
        <span style="font-weight:bold;">  Cleaning (Prophylaxis)</span>
           <div style="clear:both;height:5px;"></div>
           An immediate denture involves placing denture plates in the patient's mouth after some number of extractions are performed while the replacement denture above is for those patients who does not have teeth and whatsoever (edentulous).

        <div style="clear:both;height:12px;"></div>
     
       
       <span style="font-weight:bold;">     
       Light-accelerated bleaching</span>
           <div style="clear:both;height:5px;"></div>
         Power or light-accelerated bleaching, sometimes colloquially referred to as laser bleaching (a common misconception since lasers are an older technology that was used before current technologies were developed), uses light energy to accelerate the process of bleaching in a dental office. 

        <div style="clear:both;height:12px;"></div>
        
    <span style="font-weight:bold;">Tooth Extraction</span>
    <div style="clear:both;height:5px;"></div>
    For further reading <a href="http://www.simplestepsdental.com/SS/ihtSS/r.==/st.32226/t.32769/pr.3.html" target="_blank">click here</a> 
  <div style="clear:both;height:12px;"></div>
    
       </td></tr>
        </table>
      
        </td>
        
        <td style="padding-top:30px;padding-left:15px;"><img src="myclinicpal/img/sep.png" width="5" height="277"/></td>
        
             
       
        
        <td style="padding-left:15px;" valign="top">
        
        <table cellpadding="0" cellpadding="0" cellspacing="0" border="0" style="padding-top:20px;">
        
        <tr><td>
        
        <a href="dentist_login.php"><img src="myclinicpal/img/dentist_acc.png" width="285" height="97" /></a>
        
        </td></tr>
        
           <tr><td style="padding-top:10px;">
        
         <a href="patient/patient_login.php"><img src="myclinicpal/img/patient_acc.png" width="285" height="97" /></a>
        
        </td></tr>
         <tr><td style="padding-top:10px;">
        
         <a href="#"><img src="myclinicpal/img/how.png" width="285" height="97" /></a>
        
        </td></tr>
        </table>
         
        </td>
        
        </tr>
        </table>
          </div>
    </td>
        <td rowspan="2"><span style="background:url(myclinicpal/img/main-bg.gif);"><img src="myclinicpal/img/spacer.gif" width="4" height="1" alt="" /></span></td>
  </tr>
      <tr>
        <td><img src="myclinicpal/img/main_foot.gif" width="945" height="34" alt="" /></td>
  </tr>
</table>
    </td>
  </tr>
  <tr>
    <td height="189" style="background:url(myclinicpal/img/bg-footer.gif)"><table width="946" border="0" align="center" cellpadding="0" cellspacing="0">
    <?php 
	include('config.php');
$vars="yes";
$vars2="bottom";

$sql="SELECT * FROM banner WHERE activate='".$vars."' AND banner_type='".$vars2."'";
$res=mysql_query($sql);
while($row=mysql_fetch_array($res)) {
$bot_ban=$row['banner_file'];	
$ban_link_bot=$row['banner_link'];
}
//var_dump($sql);die();
?>
      <tr>
        <td colspan="2" align="center"><!--<img src="myclinicpal/img/footer-banner.jpg" width="746" height="123" alt="" />-->
        
         <a href="<?php echo $ban_link_bot;?>"><img src="admin/<?php echo $bot_ban;?>" style="border:1px solid #999;"/></a>
        
        </td>
      </tr>
      <tr>
        <td colspan="2"><img src="myclinicpal/img/spacer.gif" width="1" height="10" alt="" />
        
       
        
        </td>
      </tr>
      <tr>
        <td width="535" class="footer_nav"><a href="home.php" class="b">HOME</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="about_us.php" class="b">ABOUT</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="services.php" class="b">SERVICES</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="subscribe.php" class="b">SUBSCRIBE</a>&nbsp;		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="contact_us.php" class="b">CONTACT US</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="advertise.php" class="b">ADVERTISE</a></td>
        <td width="455" align="right" class="copyright">Copyright MyClinicPal.com. All Rights Reserved.</td>
      </tr>
    </table></td>
</tr>
</table>

<map name="Map" id="Map">
  <area shape="rect" coords="44,257,271,307" href="dentist_signup.php" />
</map>

<map name="Map2" id="Map2">
  <area shape="rect" coords="7,3,134,110" href="lightbox2.05/images/Optimized-fs1.png" rel="lightbox"/>
  <area shape="rect" coords="149,2,274,109" href="lightbox2.05/images/Optimized-fs2.png" rel="lightbox" />
</map>

<map name="Map3" id="Map3">
  <area shape="rect" coords="8,4,133,110" href="lightbox2.05/images/Optimized-fs3.png" rel="lightbox" />
  <area shape="rect" coords="148,3,273,110" href="lightbox2.05/images/Optimized-fs4.png" rel="lightbox" />
</map>
</body>
</html>
