<div id="popUpDiv3" style="display:none;">

<table cellpadding="0" cellspacing="0" border="0" style="padding-left:30px;padding-top:20px;">
<tr><td>

<table cellpadding="0" cellspacing="0" border="0">
<?php
$x=0;
for($i=97;$i<=102;$i++) { 
$x++;
if($i===97)
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
for($i=103;$i<=108;$i++) { 
$x++;
if($i===103)
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
for($i=109;$i<=114;$i++) { 
$x++;
if($i===109)
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
for($i=115;$i<=120;$i++) { 
$x++;
if($i===115)
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
for($i=121;$i<=126;$i++) { 
$x++;
if($i===121)
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
<a href="#" onclick="changeMySrc(127)" onMouseover="change_img()" onMouseout="change_back()"><img id="Img127" src="toothchart/31.png" /></a>
</td></tr>
<tr><td style="padding-top:5px;">
<a href="#" onclick="changeMySrc(128)" onMouseover="change_img()" onMouseout="change_back()"><img id="Img128" src="toothchart/32.png" /></a>
</td></tr></table></td>


</tr></table>
</div>