<div id="popUpDiv4" style="display:none;">

<table cellpadding="0" cellspacing="0" border="0" style="padding-left:30px;padding-top:20px;">
<tr><td>

<table cellpadding="0" cellspacing="0" border="0">
<?php
$x=0;
for($i=129;$i<=134;$i++) { 
$x++;
if($i===129)
{ ?><tr><td><?php } else { ?>
<tr><td style="padding-top:5px;"> <?php } ?>
<a href="#" onclick="changeMySrc(<?php echo $i;?>)" onMouseover="change_img()" onMouseout="change_back()"><img id="Img<?php echo $i;?>" src="toothchart/0<?php echo $x;?>.png" /></a>
</td></tr>
<?php } ?>

</table>
</td>

<td valign="top" style="padding-left:8px;">
<table cellpadding="0" cellspacing="0" border="0">
<?php
$x=6;
for($i=135;$i<=140;$i++) { 
$x++;
if($i===135)
{ ?><tr><td><?php } else { ?>
<tr><td style="padding-top:5px;"> <?php } ?>
<a href="#" onclick="changeMySrc(<?php echo $i;?>)" onMouseover="change_img()" onMouseout="change_back()">
<?php if($x<=9) { ?>
<img id="Img<?php echo $i;?>" src="toothchart/0<?php echo $x;?>.png" /></a><?php } else { ?>

<img id="Img<?php echo $i;?>" src="toothchart/<?php echo $x;?>.png" /></a><?php } ?>

</td></tr>
<?php } ?>

</table>
</td>

<td valign="top" style="padding-left:8px;">
<table cellpadding="0" cellspacing="0" border="0">
<?php
$x=12;
for($i=141;$i<=146;$i++) { 
$x++;
if($i===141)
{ ?><tr><td><?php } else { ?>
<tr><td style="padding-top:5px;"> <?php } ?>
<a href="#" onclick="changeMySrc(<?php echo $i;?>)" onMouseover="change_img()" onMouseout="change_back()">


<img id="Img<?php echo $i;?>" src="toothchart/<?php echo $x;?>.png" /></a>

</td></tr>
<?php } ?>

</table>
</td>

<td valign="top" style="padding-left:8px;">
<table cellpadding="0" cellspacing="0" border="0">
<?php
$x=18;
for($i=147;$i<=152;$i++) { 
$x++;
if($i===147)
{ ?><tr><td><?php } else { ?>
<tr><td style="padding-top:5px;"> <?php } ?>
<a href="#" onclick="changeMySrc(<?php echo $i;?>)" onMouseover="change_img()" onMouseout="change_back()">


<img id="Img<?php echo $i;?>" src="toothchart/<?php echo $x;?>.png" /></a>

</td></tr>
<?php } ?>

</table>
</td>

<td valign="top" style="padding-left:8px;">
<table cellpadding="0" cellspacing="0" border="0">
<?php
$x=24;
for($i=153;$i<=158;$i++) { 
$x++;
if($i===153)
{ ?><tr><td><?php } else { ?>
<tr><td style="padding-top:5px;"> <?php } ?>
<a href="#" onclick="changeMySrc(<?php echo $i;?>)" onMouseover="change_img()" onMouseout="change_back()">


<img id="Img<?php echo $i;?>" src="toothchart/<?php echo $x;?>.png" /></a>

</td></tr>
<?php } ?>

</table>
</td>

<td valign="top" style="padding-left:8px;">
<table cellpadding="0" cellspacing="0" border="0">
<tr><td>
<a href="#" onclick="changeMySrc(159)" onMouseover="change_img()" onMouseout="change_back()"><img id="Img159" src="toothchart/31.png" /></a>
</td></tr>
<tr><td style="padding-top:5px;">
<a href="#" onclick="changeMySrc(160)" onMouseover="change_img()" onMouseout="change_back()"><img id="Img160" src="toothchart/32.png" /></a>
</td></tr></table></td>


</tr></table>
</div>