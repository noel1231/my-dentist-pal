<?php 
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

<table cellpadding="0" cellspacing="0" border="0" width="100%" style="margin:0;background-color:#FFF;">
<tr><td>&nbsp;</td></tr>
<tr><td>
<center>
</center>
</td></tr>
<tr><td height="30">&nbsp;</td></tr>
<tr>
<td width="100%" height="230" style="background-color:#016c91;" valign="top">
<!--<div style="clear:both;height:10px;"></div>-->
<div style="margin:0 auto;width:940px;">

<table cellpadding="0" cellspacing="0" border="0">
<tr><td height="10">&nbsp;</td></tr>
<tr><td valign="top" style="padding-top:23px;"><?php /*
<table cellpadding="0" cellspacing="0" border="0"><tr><td>
<span style="font-weight:bold;color:#FFF;font-size:18px;font-family:Arial, Helvetica, sans-serif;">MY CLINIC PAL</span></td></tr>
<tr><td><span style="color:#FFF;font-size:12px;font-family:'Comic Sans MS', cursive;">Every doctor's friend on the web.</span></td></tr>
<tr><td>
<div style="clear:both;height:18px;"></div>
<!--<img src="../images/foot1.jpg" />-->
<table cellpadding="0" cellspacing="0" border="0">
<!--dentalpal--><tr><td>

<img src="img/tooth_footh.png" width="16" height="20" style="margin-left:5px;"/>

</td>
<td>
<span style="font-weight: lighter;color:#fdf134;font-size:15px;font-family:Arial, Helvetica, sans-serif;margin-left:8px;">CLINICPAL</span>
</td>

<td>
<img src="img/person.png" width="18" height="25" style="margin-left:3px;"/>
</td>
<td>
<span style="font-weight: lighter;color:#FFF;font-size:15px;font-family:Arial, Helvetica, sans-serif;margin-left:8px;">PEDIAPAL</span>
</td>

</tr><!--dentalpal-->

<tr><td><div style="clear:both;height:5px;"></div></td></tr>

<!--dermapal--><tr><td>

<img src="img/flower.png" width="20" height="17" style="margin-left:5px;"/>

</td>
<td>
<span style="font-weight: lighter;color:#FFF;font-size:15px;font-family:Arial, Helvetica, sans-serif;margin-left:8px;">DERMAPAL</span>
</td>

<td>
<img src="img/dog.png" width="23" height="21" style="margin-left:2px;"/>
</td>
<td>
<span style="font-weight: lighter;color:#FFF;font-size:15px;font-family:Arial, Helvetica, sans-serif;margin-left:8px;">PETCLINICPAL</span>
</td>

</tr><!--dermapal-->


<tr><td><div style="clear:both;height:5px;"></div></td></tr>

<!--doctorpal--><tr><td>

<img src="img/inject.png" width="27" height="26" style="margin-left:5px;"/>

</td>
<td >
<span style="font-weight: lighter;color:#FFF;font-size:15px;font-family:Arial, Helvetica, sans-serif;margin-left:8px;">DOCTORPAL</span>
</td>

</tr><!--doctorpal-->


</table>



</td></tr></table>*/?></td>
<td style="width:33px;">&nbsp;</td>
<td style="width:7px;">
<img src="img/footer_spacer.png" width="7" height="191"/>
</td>

<!--<img src="../images/foot2.jpg" style="margin-left:50px;margin-top:5px;"/>-->
<td>
<table cellpadding="0" cellspacing="0" border="0">
<tr><td style="padding-left:25px;">
<img src="http://leentechsystems.net/mydentistpal/img/define.png" width="203" height="23"/>
</td></tr>
<tr><td width="264" style="padding-left:25px;padding-top:5px;font-family:Arial, Helvetica, sans-serif;color:#caebfd;font-size:12px;">
<?php
$val_text="My Dentist Pal is a suite of online tools for both dentists and dental patients. For dentists, it serves as a virtual clinic assistant that helps administer, manage and even advertise their practice efficiently, using the web. For patients, it serves as a search portal for finding the right dentist in their area by viewing the profiles of dental professionals who are registered on My Dentist Pal. It's convenient, reliable, secure and best of all, FREE!";
echo htmlentities($val_text);
?>
</td></tr>
</table>

</td>

<td style="width:30px;">&nbsp;
</td>
<td style="width:7px;">
<img src="img/footer_spacer.png" width="7" height="191"/>
</td>


<td>
<!--<img src="../images/foot3.jpg" style="margin-left:20px;"/>-->

<table cellpadding="0" cellspacing="0" border="0">
<tr><td style="padding-left:27px;">
<img src="img/sitemap.png" height="21" width="71" />
</td></tr>
<tr><td><div style="clear:both;height:5px;"></div></td></tr>
<tr><td style="padding-left:34px;">

<table cellpadding="0" cellspacing="0" border="0">
<tr><td><img src="img/square.png" width="7" height="7" /></td>
<td style="padding-left:8px;"><a href="dentist_landing.php" class="sitemap">DASHBOARD</a></td>

<td style="padding-left:52px;">
<img src="img/square.png" width="7" height="7" /></td>
<td style="padding-left:8px;"><a href="news_and_events.php" class="sitemap">NEWS & EVENTS</a>
</td>
</tr>

<tr><td><div style="clear:both;height:5px;"></div></td></tr>

<tr><td><img src="img/square.png" width="7" height="7" /></td>
<td style="padding-left:8px;"><a href="patient_list.php" class="sitemap">PATIENT LIST</a></td>

<td style="padding-left:52px;">
<img src="img/square.png" width="7" height="7" /></td>
<td style="padding-left:8px;"><a href="blog.php" class="sitemap">BLOGGING</a>
</td>
</tr>

<tr><td><div style="clear:both;height:5px;"></div></td></tr>

<tr><td><img src="img/square.png" width="7" height="7" /></td>
<td style="padding-left:8px;"><a href="message_contact.php" class="sitemap">MESSAGE</a></td>

<td style="padding-left:52px;">
<img src="img/square.png" width="7" height="7" /></td>
<td style="padding-left:8px;"><a href="faq.php" class="sitemap">FAQ</a>
</td>
</tr>

<tr><td><div style="clear:both;height:5px;"></div></td></tr>

<tr><td><img src="img/square.png" width="7" height="7" /></td>
<td style="padding-left:8px;"><a href="dentist_profile.php" class="sitemap">PROFILE</a></td>

<td style="padding-left:52px;">
<img src="img/square.png" width="7" height="7" /></td>
<td style="padding-left:8px;"><a href="disclaimer.php" class="sitemap">DISCLAIMER</a>
</td>
</tr>

<tr><td><div style="clear:both;height:5px;"></div></td></tr>

<tr><td><img src="img/square.png" width="7" height="7" /></td>
<td style="padding-left:8px;"><a href="how_it_works.php" class="sitemap">HOW IT WORKS</a></td>

<td style="padding-left:52px;">
<img src="img/square.png" width="7" height="7" /></td>
<td style="padding-left:8px;"><a href="terms_and_condition.php" class="sitemap">TERMS & CONDITIONS</a>
</td>
</tr>

<tr><td><div style="clear:both;height:5px;"></div></td></tr>

<tr><td><img src="img/square.png" width="7" height="7" /></td>
<td style="padding-left:8px;"><a href="dentist_addressbook.php" class="sitemap">ADDRESSBOOK</a></td>

<td style="padding-left:52px;">
<img src="img/square.png" width="7" height="7" /></td>
<td style="padding-left:8px;"><a href="privacy_policy.php" class="sitemap">PRIVACY POLICY</a>
</td>
</tr>

<tr><td><div style="clear:both;height:5px;"></div></td></tr>

<tr><td><img src="img/square.png" width="7" height="7" /></td>
<td style="padding-left:8px;"><a href="scheduler/wdCalendar/index.php" target="_blank" class="sitemap">SCHEDULER</a></td></tr>

</table>

</td></tr>
</table>


</td>
</tr>
</table>

</div>
</td>
</tr>
<tr><td width="100%" height="35" style="background-color:#014d67;">
<div style="margin:0 auto;width:960px;">
<span style="float:left;margin-left:10px;color:#FFF;font-size:12px;font-family:Arial, Helvetica, sans-serif;">Copyright 2013. A Product of Cloudwalk Digital.</span>
<span style="float:right;margin-right:20px;color:#FFF;font-size:12px;font-family:Arial, Helvetica, sans-serif;">Website Designed by: <a href="http://leentechsystems.com" target="_blank" id="footer_not_underline">Leentech Network Solutions</a></span>
</div>
</td></tr>
</table>