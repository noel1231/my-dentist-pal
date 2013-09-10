<div id="popUpDiv6" style="display:none;">

<table cellpadding="0" cellspacing="0" border="0" style="padding-left:30px;padding-top:20px;">
<tr><td>

<table cellpadding="0" cellspacing="0" border="0">
<?php
$x=0;
for($i=193;$i<=198;$i++) { 
$x++;
if($i===193)
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
for($i=199;$i<=204;$i++) { 
$x++;
if($i===199)
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
for($i=205;$i<=210;$i++) { 
$x++;
if($i===205)
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
for($i=211;$i<=216;$i++) { 
$x++;
if($i===211)
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
for($i=217;$i<=222;$i++) { 
$x++;
if($i===217)
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
<a href="#" onclick="changeMySrc(223)" onMouseover="change_img()" onMouseout="change_back()"><img id="Img223" src="toothchart/31.png" /></a>
</td></tr>
<tr><td style="padding-top:5px;">
<a href="#" onclick="changeMySrc(224)" onMouseover="change_img()" onMouseout="change_back()"><img id="Img224" src="toothchart/32.png" /></a>
</td></tr></table></td>


</tr></table>
</div>