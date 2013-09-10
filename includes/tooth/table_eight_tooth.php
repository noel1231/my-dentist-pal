<div id="popUpDiv7" style="display:none;">

<table cellpadding="0" cellspacing="0" border="0" style="padding-left:30px;padding-top:20px;">
<tr><td>

<table cellpadding="0" cellspacing="0" border="0">
<?php
$x=0;
for($i=225;$i<=230;$i++) { 
$x++;
if($i===225)
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
for($i=231;$i<=236;$i++) { 
$x++;
if($i===231)
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
for($i=237;$i<=242;$i++) { 
$x++;
if($i===237)
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
for($i=243;$i<=248;$i++) { 
$x++;
if($i===243)
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
for($i=249;$i<=254;$i++) { 
$x++;
if($i===249)
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
<a href="#" onclick="changeMySrc(255)" onMouseover="change_img()" onMouseout="change_back()"><img id="Img255" src="toothchart/31.png" /></a>
</td></tr>
<tr><td style="padding-top:5px;">
<a href="#" onclick="changeMySrc(256)" onMouseover="change_img()" onMouseout="change_back()"><img id="Img256" src="toothchart/32.png" /></a>
</td></tr></table></td>


</tr></table>
</div>