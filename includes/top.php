<!--navigation bar--><div style="background-image:url('images/topnav.jpg');width:100%;height:80px;">
<div style="margin:0 auto;width:960px;">
<div onclick="window.location='dentist_landing.php'" style="float:left;"><!--left-->
<div style="float:left;" onclick="window.location='dentist_landing.php'"><img src="images/toothlogo.png" style="margin-top:15px;"/></div>
<div style="float:left;margin-left:10px;margin-top:20px;width:210px;"><a href="dentist_landing.php" title="Go to Dashboard" style="text-decoration:none;font-family:Arial, Helvetica, sans-serif;font-size:32px;color:#FFF;">My Dentist Pal</a></div>
<div style="float:left;margin-left:5px;margin-top:23px;font-size:12px;color:#70d8f8;font-family:'Trebuchet MS', Arial, Helvetica, sans-serif;">Ver. 1.0</div>
</div><!--end of left-->
<!--right-->
<div style="float:right;margin-top:45px;">
<!--<div style="float:right;background-image:url('images/option2.png');width:101px;height:35px;"></div>-->
<div style="float:right;">
<ul class="cssMenu">
	<li>
		<a href="#"><div style="float:right;background-image:url('images/option2.png');width:101px;height:35px;"></div></a>           
		<ul>
			<li><a href="dentist_account.php"><div style="width:116px;height:29px;color:#13749a;">
            <table cellpadding="0" cellspacing="0" border="0" style="padding-top:5px;width:56px;">
            <tr><td style="padding-left:15px;"><img src="img/settings.png" /></td><td style="font-size:14px;padding-left:10px;width:35px;">Settings</td></tr>
            </table></div></a></li>
			<li><a href="logout.php"><div style="width:116px;height:29px;color:#13749a;"><table cellpadding="0" cellspacing="0" border="0" style="padding-top:5px;width:56px;">
            <tr><td style="padding-left:18px;"><img src="img/logout.png" /></td><td style="font-size:14px;padding-left:10px;">Logout</td></tr>
            </table></div></a></li>
		
		</ul>
	</li></ul>
</div>
<a href="dentist_profile.php"><div style="float:right;background-image:url('images/profile.png');width:101px;height:35px;"></div></a>
<a href="message_received.php"><div style="float:right;background-image:url('images/messaging.png');width:115px;height:35px;margin-right:2px;"></div></a>
</div>
</div><!--end of center-->
</div><!--end with navigation bar-->
<!--tooth--></td></tr>

<!--dentisit dashboard--><tr><td>
<?php include('revisions/top.php'); ?>