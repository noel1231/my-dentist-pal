

<div id="blanket" style="display:none;"></div>



<?php include('includes/tooth/table_first_tooth.php');?>



<table cellpadding="0" cellspacing="0" border="0" class="toothtable"><tr><td>

<table cellpadding="0" cellspacing="0" border="0"><tr>

<td>

<table cellpadding="0" cellspacing="0" border="0" width="30"><tr><td style="text-align:center;">18</td></tr>

<tr><td>  
<?php
//<img src="img/Toothchart/01.png" onclick="popup('popUpDiv','change','pic1')" name="change" id="change" value="none"/>
?>
<?php if($tooth_18=="none") { ?> 

<img src="img/Toothchart/01.png" onclick="popup('popUpDiv','change','pic1','leg_1','adult11')" name="change" id="change" value="none" /> 

<?php } else if($tooth_18<=9) { ?>

<img src="img/Toothchart/0<?php echo $tooth_18;?>.png" onclick="popup('popUpDiv','change','pic1','leg_1','adult11')" name="change" id="change" value="none" />

<?php } else { ?>

<img src="img/Toothchart/<?php echo $tooth_18;?>.png" onclick="popup('popUpDiv','change','pic1','leg_1','adult11')" name="change" id="change" value="none" />

<?php } ?>

</td></tr>
<tr><td style="font-size:10px;width:30px;text-align:center;">
<?php 
if($leg_11!="none") {
$adult11 = $leg_11; }
else {
$adult11 = "&nbsp;";	
}
?>
<input type="text" id="adult11" style="background-color:#FFF;border:none;width:30px;text-align:center;font-size:10px;color:#999;" value="<?php echo $adult11;?>" disabled="disabled"/>
</td></tr>
</table>

</td>

<td style="padding-left:1px;">

<table cellpadding="0" cellspacing="0" border="0" width="30"><tr><td style="text-align:center;">17</td></tr>

<tr><td>
<?php if($tooth_17=="none") { ?> 

<img src="img/Toothchart/01.png" onclick="popup('popUpDiv','changes','pic2','leg_2','adult12')" name="change" id="changes" value="none" /> 

<?php } else if($tooth_17<=9) { ?>

<img src="img/Toothchart/0<?php echo $tooth_17;?>.png" onclick="popup('popUpDiv','changes','pic2','leg_2','adult12')" name="changes" id="changes" value="none" />

<?php } else { ?>

<img src="img/Toothchart/<?php echo $tooth_17;?>.png" onclick="popup('popUpDiv','changes','pic2','leg_2','adult12')" name="changes" id="changes" value="none" />

<?php } ?>

<!--<img src="img/Toothchart/01.png" onclick="popup('popUpDiv','changes','pic2')" name="changes" id="changes" value="none"/>-->

</td></tr>
<tr><td style="font-size:10px;width:30px;text-align:center;">
<?php 
if($leg_12!="none") {
$adult12 = $leg_12; }
else {
$adult12 = "&nbsp;";	
}
?>
<input type="text" id="adult12" style="background-color:#FFF;border:none;width:30px;text-align:center;font-size:10px;color:#999;" value="<?php echo $adult12;?>" disabled="disabled"/>
</td></tr>
</table>

</td>

<td style="padding-left:1px;">

<table cellpadding="0" cellspacing="0" border="0" width="30"><tr><td style="text-align:center;">16</td></tr>

<tr><td>
<?php if($tooth_16=="none") { ?> 

<img src="img/Toothchart/01.png" onclick="popup('popUpDiv','changed','pic3','leg_3','adult13')" name="changed" id="changed" value="none" /> 

<?php } else if($tooth_16<=9) { ?>

<img src="img/Toothchart/0<?php echo $tooth_16;?>.png" onclick="popup('popUpDiv','changed','pic3','leg_3','adult13')" name="changed" id="changed" value="none" />

<?php } else { ?>

<img src="img/Toothchart/<?php echo $tooth_16;?>.png" onclick="popup('popUpDiv','changed','pic3','leg_3','adult13')" name="changed" id="changed" value="none" />

<?php } ?>
<!--<img src="img/Toothchart/01.png" onclick="popup('popUpDiv','changed','pic3')" name="changed" id="changed" value="none"/>-->

</td></tr>
<tr><td style="font-size:10px;width:30px;text-align:center;">
<?php 
if($leg_13!="none") {
$adult13 = $leg_13; }
else {
$adult13 = "&nbsp;";	
}
?>
<input type="text" id="adult13" style="background-color:#FFF;border:none;width:30px;text-align:center;font-size:10px;color:#999;" value="<?php echo $adult13;?>" disabled="disabled"/>
</td></tr>
</table>

</td>

<td style="padding-left:1px;">

<table cellpadding="0" cellspacing="0" border="0" width="30"><tr><td style="text-align:center;">15</td></tr>

<tr><td>
<?php if($tooth_15=="none") { ?> 

<img src="img/Toothchart/01.png" onclick="popup('popUpDiv','changem','pic4','leg_4','adult14')" name="changem" id="changem" value="none" /> 

<?php } else if($tooth_15<=9) { ?>

<img src="img/Toothchart/0<?php echo $tooth_15;?>.png" onclick="popup('popUpDiv','changem','pic4','leg_4','adult14')" name="changem" id="changem" value="none" />

<?php } else { ?>

<img src="img/Toothchart/<?php echo $tooth_15;?>.png" onclick="popup('popUpDiv','changem','pic4','leg_4','adult14')" name="changem" id="changem" value="none" />

<?php } ?>
<!--<img src="img/Toothchart/01.png" onclick="popup('popUpDiv','changem','pic4')" name="changem" id="changem" value="none"/>-->

</td></tr>
<tr><td style="font-size:10px;width:30px;text-align:center;">
<?php 
if($leg_14!="none") {
$adult14 = $leg_14; }
else {
$adult14 = "&nbsp;";	
}
?>
<input type="text" id="adult14" style="background-color:#FFF;border:none;width:30px;text-align:center;font-size:10px;color:#999;" value="<?php echo $adult14;?>" disabled="disabled"/>
</td></tr>
</table>

</td>

<td style="padding-left:1px;">

<table cellpadding="0" cellspacing="0" border="0" width="30"><tr><td style="text-align:center;">14</td></tr>

<tr><td>
<?php if($tooth_14=="none") { ?> 

<img src="img/Toothchart/01.png" onclick="popup('popUpDiv','changea','pic5','leg_5','adult15')" name="changea" id="changea" value="none" /> 

<?php } else if($tooth_14<=9) { ?>

<img src="img/Toothchart/0<?php echo $tooth_14;?>.png" onclick="popup('popUpDiv','changea','pic5','leg_5','adult15')" name="changea" id="changea" value="none" />

<?php } else { ?>

<img src="img/Toothchart/<?php echo $tooth_14;?>.png" onclick="popup('popUpDiv','changea','pic5','leg_5','adult15')" name="changea" id="changea" value="none" />

<?php } ?>
<!--<img src="img/Toothchart/01.png" onclick="popup('popUpDiv','changea','pic5')" name="changea" id="changea" value="none"/>-->

</td></tr>
<tr><td style="font-size:10px;width:30px;text-align:center;">
<?php 
if($leg_15!="none") {
$adult15 = $leg_15; }
else {
$adult15 = "&nbsp;";	
}
?>
<input type="text" id="adult15" style="background-color:#FFF;border:none;width:30px;text-align:center;font-size:10px;color:#999;" value="<?php echo $adult15;?>" disabled="disabled"/>
</td></tr>
</table>

</td>

<td style="padding-left:1px;">

<table cellpadding="0" cellspacing="0" border="0" width="30"><tr><td style="text-align:center;">13</td></tr>

<tr><td>
<?php if($tooth_13=="none") { ?> 

<img src="img/Toothchart/01.png" onclick="popup('popUpDiv','changev','pic6','leg_6','adult16')" name="changev" id="changev" value="none" /> 

<?php } else if($tooth_13<=9) { ?>

<img src="img/Toothchart/0<?php echo $tooth_13;?>.png" onclick="popup('popUpDiv','changev','pic6','leg_6','adult16')" name="changev" id="changev" value="none" />

<?php } else { ?>

<img src="img/Toothchart/<?php echo $tooth_13;?>.png" onclick="popup('popUpDiv','changev','pic6','leg_6','adult16')" name="changev" id="changev" value="none" />

<?php } ?>
<!--<img src="img/Toothchart/01.png" onclick="popup('popUpDiv','changev','pic6')" name="changev" id="changev" value="none"/>-->

</td></tr>
<tr><td style="font-size:10px;width:30px;text-align:center;">
<?php 
if($leg_16!="none") {
$adult16 = $leg_16; }
else {
$adult16 = "&nbsp;";	
}
?>
<input type="text" id="adult16" style="background-color:#FFF;border:none;width:30px;text-align:center;font-size:10px;color:#999;" value="<?php echo $adult16;?>" disabled="disabled"/>
</td></tr>
</table>

</td>

<td style="padding-left:1px;">

<table cellpadding="0" cellspacing="0" border="0" width="30"><tr><td style="text-align:center;">12</td></tr>

<tr><td>
<?php if($tooth_12=="none") { ?> 

<img src="img/Toothchart/01.png" onclick="popup('popUpDiv','changee','pic7','leg_7','adult17')" name="changee" id="changee" value="none" /> 

<?php } else if($tooth_12<=9) { ?>

<img src="img/Toothchart/0<?php echo $tooth_12;?>.png" onclick="popup('popUpDiv','changee','pic7','leg_7','adult17')" name="changee" id="changee" value="none" />

<?php } else { ?>

<img src="img/Toothchart/<?php echo $tooth_12;?>.png" onclick="popup('popUpDiv','changee','pic7','leg_7','adult17')" name="changee" id="changee" value="none" />

<?php } ?>
<!--<img src="img/Toothchart/01.png" onclick="popup('popUpDiv','changee','pic7')" name="changee" id="changee" value="none"/>-->

</td></tr>
<tr><td style="font-size:10px;width:30px;text-align:center;">
<?php 
if($leg_17!="none") {
$adult17 = $leg_17; }
else {
$adult17 = "&nbsp;";	
}
?>
<input type="text" id="adult17" style="background-color:#FFF;border:none;width:30px;text-align:center;font-size:10px;color:#999;" value="<?php echo $adult17;?>" disabled="disabled"/>
</td></tr>
</table>

</td>

<td style="padding-left:1px;">

<table cellpadding="0" cellspacing="0" border="0" width="30"><tr><td style="text-align:center;">11</td></tr>

<tr><td>
<?php if($tooth_11=="none") { ?> 

<img src="img/Toothchart/01.png" onclick="popup('popUpDiv','changer','pic8','leg_8','adult18')" name="changer" id="changer" value="none" /> 

<?php } else if($tooth_11<=9) { ?>

<img src="img/Toothchart/0<?php echo $tooth_11;?>.png" onclick="popup('popUpDiv','changer','pic8','leg_8','adult18')" name="changer" id="changer" value="none" />

<?php } else { ?>

<img src="img/Toothchart/<?php echo $tooth_11;?>.png" onclick="popup('popUpDiv','changer','pic8','leg_8','adult18')" name="changer" id="changer" value="none" />

<?php } ?>
<!--<img src="img/Toothchart/01.png" onclick="popup('popUpDiv','changer','pic8')" name="changer" id="changer" value="none"/>-->

</td></tr>
<tr><td style="font-size:10px;width:30px;text-align:center;">
<?php 
if($leg_18!="none") {
$adult18 = $leg_18; }
else {
$adult18 = "&nbsp;";	
}
?>
<input type="text" id="adult18" style="background-color:#FFF;border:none;width:30px;text-align:center;font-size:10px;color:#999;" value="<?php echo $adult18;?>" disabled="disabled"/>
</td></tr>
</table>

</td></tr></table></td>



<!--second set of teetch right--><td style="padding-left:20px;">



<table cellpadding="0" cellspacing="0" border="0"><tr>

<td> 

<td style="padding-left:1px;">

<table cellpadding="0" cellspacing="0" border="0" width="30"><tr><td style="text-align:center;">21</td></tr>

<tr><td>
<?php if($tooth_21=="none") { ?> 

<img src="img/Toothchart/01.png" onclick="popup('popUpDiv','changei','pic9','leg_9','adult19')" name="changei" id="changei" value="none" /> 

<?php } else if($tooth_21<=9) { ?>

<img src="img/Toothchart/0<?php echo $tooth_21;?>.png" onclick="popup('popUpDiv','changei','pic9','leg_9','adult19')" name="changei" id="changei" value="none" />

<?php } else { ?>

<img src="img/Toothchart/<?php echo $tooth_21;?>.png" onclick="popup('popUpDiv','changei','pic9','leg_9','adult19')" name="changei" id="changei" value="none" />

<?php } ?>
<!--<img src="img/Toothchart/01.png" onclick="popup('popUpDiv','changei','pic9')" name="changei" id="changei" value="none"/>-->

</td></tr>
<tr><td style="font-size:10px;width:30px;text-align:center;">
<?php 
if($leg_21!="none") {
$adult19 = $leg_21; }
else {
$adult19 = "&nbsp;";	
}
?>
<input type="text" id="adult19" style="background-color:#FFF;border:none;width:30px;text-align:center;font-size:10px;color:#999;" value="<?php echo $adult19;?>" disabled="disabled"/>
</td></tr>
</table>

</td>

<td  style="padding-left:1px;">

<table cellpadding="0" cellspacing="0" border="0" width="30"><tr><td style="text-align:center;">22</td></tr>

<tr><td>
<?php if($tooth_22=="none") { ?> 

<img src="img/Toothchart/01.png" onclick="popup('popUpDiv','changec','pic10','leg_10','adult20')" name="changec" id="changec" value="none" /> 

<?php } else if($tooth_22<=9) { ?>

<img src="img/Toothchart/0<?php echo $tooth_22;?>.png" onclick="popup('popUpDiv','changec','pic10','leg_10','adult20')" name="changec" id="changec" value="none" />

<?php } else { ?>

<img src="img/Toothchart/<?php echo $tooth_22;?>.png" onclick="popup('popUpDiv','changec','pic10','leg_10','adult20')" name="changec" id="changec" value="none" />

<?php } ?>
<!--<img src="img/Toothchart/01.png" onclick="popup('popUpDiv','changec','pic10')" name="changec" id="changec" value="none"/>-->

</td></tr>
<tr><td style="font-size:10px;width:30px;text-align:center;">
<?php 
if($leg_22!="none") {
$adult20 = $leg_22; }
else {
$adult20 = "&nbsp;";	
}
?>
<input type="text" id="adult20" style="background-color:#FFF;border:none;width:30px;text-align:center;font-size:10px;color:#999;" value="<?php echo $adult20;?>" disabled="disabled"/>
</td></tr>
</table>

</td>

<td style="padding-left:1px;">

<table cellpadding="0" cellspacing="0" border="0" width="30"><tr><td style="text-align:center;">23</td></tr>

<tr><td>
<?php if($tooth_23=="none") { ?> 

<img src="img/Toothchart/01.png" onclick="popup('popUpDiv','changek','pic11','leg_11','adult21')" name="changek" id="changek" value="none" /> 

<?php } else if($tooth_23<=9) { ?>

<img src="img/Toothchart/0<?php echo $tooth_23;?>.png" onclick="popup('popUpDiv','changek','pic11','leg_11','adult21')" name="changek" id="changek" value="none" />

<?php } else { ?>

<img src="img/Toothchart/<?php echo $tooth_23;?>.png" onclick="popup('popUpDiv','changek','pic11','leg_11','adult21')" name="changek" id="changek" value="none" />

<?php } ?>
<!--<img src="img/Toothchart/01.png" onclick="popup('popUpDiv','changek','pic11')" name="changek" id="changek" value="none"/>-->

</td></tr>
<tr><td style="font-size:10px;width:30px;text-align:center;">
<?php 
if($leg_23!="none") {
$adult21 = $leg_23; }
else {
$adult21 = "&nbsp;";	
}
?>
<input type="text" id="adult21" style="background-color:#FFF;border:none;width:30px;text-align:center;font-size:10px;color:#999;" value="<?php echo $adult21;?>" disabled="disabled"/>
</td></tr>
</table>

</td>

<td style="padding-left:1px;">

<table cellpadding="0" cellspacing="0" border="0" width="30"><tr><td style="text-align:center;">24</td></tr>

<tr><td>
<?php if($tooth_24=="none") { ?> 

<img src="img/Toothchart/01.png" onclick="popup('popUpDiv','change1','pic12','leg_12','adult22')" name="change1" id="change1" value="none" /> 

<?php } else if($tooth_24<=9) { ?>

<img src="img/Toothchart/0<?php echo $tooth_24;?>.png" onclick="popup('popUpDiv','change1','pic12','leg_12','adult22')" name="change1" id="change1" value="none" />

<?php } else { ?>

<img src="img/Toothchart/<?php echo $tooth_24;?>.png" onclick="popup('popUpDiv','change1','pic12','leg_12','adult22')" name="change1" id="change1" value="none" />

<?php } ?>
<!--<img src="img/Toothchart/01.png" onclick="popup('popUpDiv','change1','pic12')" name="change1" id="change1" value="none"/>-->

</td></tr>
<tr><td style="font-size:10px;width:30px;text-align:center;">
<?php 
if($leg_24!="none") {
$adult22 = $leg_24; }
else {
$adult22 = "&nbsp;";	
}
?>
<input type="text" id="adult22" style="background-color:#FFF;border:none;width:30px;text-align:center;font-size:10px;color:#999;" value="<?php echo $adult22;?>" disabled="disabled"/>
</td></tr>
</table>

</td>

<td style="padding-left:1px;">

<table cellpadding="0" cellspacing="0" border="0" width="30"><tr><td style="text-align:center;">25</td></tr>

<tr><td>
<?php if($tooth_25=="none") { ?> 

<img src="img/Toothchart/01.png" onclick="popup('popUpDiv','change2','pic13','leg_13','adult23')" name="change2" id="change2" value="none" /> 

<?php } else if($tooth_25<=9) { ?>

<img src="img/Toothchart/0<?php echo $tooth_25;?>.png" onclick="popup('popUpDiv','change2','pic13','leg_13','adult23')" name="change2" id="change2" value="none" />

<?php } else { ?>

<img src="img/Toothchart/<?php echo $tooth_25;?>.png" onclick="popup('popUpDiv','change2','pic13','leg_13','adult23')" name="change2" id="change2" value="none" />

<?php } ?>
<!--<img src="img/Toothchart/01.png" onclick="popup('popUpDiv','change2','pic13')" name="change2" id="change2" value="none"/>-->

</td></tr>
<tr><td style="font-size:10px;width:30px;text-align:center;">
<?php 
if($leg_25!="none") {
$adult23 = $leg_25; }
else {
$adult23 = "&nbsp;";	
}
?>
<input type="text" id="adult23" style="background-color:#FFF;border:none;width:30px;text-align:center;font-size:10px;color:#999;" value="<?php echo $adult23;?>" disabled="disabled"/>
</td></tr>
</table>

</td>

<td style="padding-left:1px;">

<table cellpadding="0" cellspacing="0" border="0" width="30"><tr><td style="text-align:center;">26</td></tr>

<tr><td>
<?php if($tooth_26=="none") { ?> 

<img src="img/Toothchart/01.png" onclick="popup('popUpDiv','change3','pic14','leg_14','adult24')" name="change3" id="change3" value="none" /> 

<?php } else if($tooth_26<=9) { ?>

<img src="img/Toothchart/0<?php echo $tooth_26;?>.png" onclick="popup('popUpDiv','change3','pic14','leg_14','adult24')" name="change3" id="change3" value="none" />

<?php } else { ?>

<img src="img/Toothchart/<?php echo $tooth_26;?>.png" onclick="popup('popUpDiv','change3','pic14','leg_14','adult24')" name="change3" id="change3" value="none" />

<?php } ?>
<!--<img src="img/Toothchart/01.png" onclick="popup('popUpDiv','change3','pic14')" name="change3" id="change3" value="none"/>-->

</td></tr>
<tr><td style="font-size:10px;width:30px;text-align:center;">
<?php 
if($leg_26!="none") {
$adult24 = $leg_26; }
else {
$adult24 = "&nbsp;";	
}
?>
<input type="text" id="adult24" style="background-color:#FFF;border:none;width:30px;text-align:center;font-size:10px;color:#999;" value="<?php echo $adult24;?>" disabled="disabled"/>
</td></tr>
</table>

</td>

<td style="padding-left:1px;">

<table cellpadding="0" cellspacing="0" border="0" width="30"><tr><td style="text-align:center;">27</td></tr>

<tr><td>
<?php if($tooth_27=="none") { ?> 

<img src="img/Toothchart/01.png" onclick="popup('popUpDiv','change4','pic15','leg_15','adult25')" name="change4" id="change4" value="none" /> 

<?php } else if($tooth_27<=9) { ?>

<img src="img/Toothchart/0<?php echo $tooth_27;?>.png" onclick="popup('popUpDiv','change4','pic15','leg_15','adult25')" name="change4" id="change4" value="none" />

<?php } else { ?>

<img src="img/Toothchart/<?php echo $tooth_27;?>.png" onclick="popup('popUpDiv','change4','pic15','leg_15','adult25')" name="change4" id="change4" value="none" />

<?php } ?>
<!--<img src="img/Toothchart/01.png" onclick="popup('popUpDiv','change4','pic15')" name="change4" id="change4" value="none"/>-->

</td></tr>
<tr><td style="font-size:10px;width:30px;text-align:center;">
<?php 
if($leg_27!="none") {
$adult25 = $leg_27; }
else {
$adult25 = "&nbsp;";	
}
?>
<input type="text" id="adult25" style="background-color:#FFF;border:none;width:30px;text-align:center;font-size:10px;color:#999;" value="<?php echo $adult25;?>" disabled="disabled"/>
</td></tr>
</table>

</td>

<td style="padding-left:1px;">

<table cellpadding="0" cellspacing="0" border="0" width="30"><tr><td style="text-align:center;">28</td></tr>

<tr><td>
<?php if($tooth_28=="none") { ?> 

<img src="img/Toothchart/01.png" onclick="popup('popUpDiv','change5','pic16','leg_16','adult26')" name="change5" id="change5" value="none" /> 

<?php } else if($tooth_28<=9) { ?>

<img src="img/Toothchart/0<?php echo $tooth_28;?>.png" onclick="popup('popUpDiv','change5','pic16','leg_16','adult26')" name="change5" id="change5" value="none" />

<?php } else { ?>

<img src="img/Toothchart/<?php echo $tooth_28;?>.png" onclick="popup('popUpDiv','change5','pic16','leg_16','adult26')" name="change5" id="change5" value="none" />

<?php } ?>
<!--<img src="img/Toothchart/01.png" onclick="popup('popUpDiv','change5','pic16')" name="change5" id="change5" value="none"/>-->

</td></tr>
<tr><td style="font-size:10px;width:30px;text-align:center;">
<?php 
if($leg_28!="none") {
$adult26 = $leg_28; }
else {
$adult26 = "&nbsp;";	
}
?>
<input type="text" id="adult26" style="background-color:#FFF;border:none;width:30px;text-align:center;font-size:10px;color:#999;" value="<?php echo $adult26;?>" disabled="disabled"/>
</td></tr>
</table>

</td></tr></table>



<!--second set of teetch right--></td>

</tr>





<tr>

<td colspan="2">

<table cellpadding="0" cellspacing="0" border="0" style="width:100%;font-family:Arial, Helvetica, sans-serif;color:#999;font-size:14px;margin-top:5px;">

<tr>



<td align="left" style="padding-top:10px;width:40%;">

<table cellpadding="0" cellspacing="0" border="0">

<tr><td>

UPPER RIGHT

</td></tr>

<tr><td style="padding-top:10px;">

UPPER RIGHT

</td></tr>

</table>

</td>



<td align="center" width="20%">

LINGUAL

</td>





<td align="right" style="padding-top:10px;width:40%;">

<table cellpadding="0" cellspacing="0" border="0">

<tr><td>

UPPER LEFT

</td></tr>

<tr><td style="padding-top:10px;">

UPPER LEFT

</td></tr>

</table>

</td>



</tr>

</table> 

</td>

</tr>





<!--next row-->

<tr><td style="padding-top:20px;">

<table cellpadding="0" cellspacing="0" border="0"><tr>

<td> 

<table cellpadding="0" cellspacing="0" border="0" width="30">
<tr><td style="font-size:10px;width:30px;text-align:center;">
<?php 
if($leg_31!="none") {
$adult27 = $leg_31; }
else {
$adult27 = "&nbsp;";	
}
?>
<input type="text" id="adult27" style="background-color:#FFF;border:none;width:30px;text-align:center;font-size:10px;color:#999;" value="<?php echo $adult27;?>" disabled="disabled"/>
</td></tr>
<tr><td>
<?php if($tooth_48=="none") { ?> 

<img src="img/Toothchart/01.png" onclick="popup('popUpDiv','change6','pic17','leg_17','adult27')" name="change6" id="change6" value="none" /> 

<?php } else if($tooth_48<=9) { ?>

<img src="img/Toothchart/0<?php echo $tooth_48;?>.png" onclick="popup('popUpDiv','change6','pic17','leg_17','adult27')" name="change6" id="change6" value="none" />

<?php } else { ?>

<img src="img/Toothchart/<?php echo $tooth_48;?>.png" onclick="popup('popUpDiv','change6','pic17','leg_17','adult27')" name="change6" id="change6" value="none" />

<?php } ?>
<!--<img src="img/Toothchart/01.png" onclick="popup('popUpDiv','change6','pic17')" name="change6" id="change6" value="none"/>-->

</td></tr>

<tr><td style="text-align:center;">48</td></tr>

</table></td>



<td style="padding-left:1px;">

<table cellpadding="0" cellspacing="0" border="0" width="30">
<tr><td style="font-size:10px;width:30px;text-align:center;">
<?php 
if($leg_32!="none") {
$adult28 = $leg_32; }
else {
$adult28 = "&nbsp;";	
}
?>
<input type="text" id="adult28" style="background-color:#FFF;border:none;width:30px;text-align:center;font-size:10px;color:#999;" value="<?php echo $adult28;?>" disabled="disabled"/>
</td></tr>
<tr><td>
<?php if($tooth_47=="none") { ?> 

<img src="img/Toothchart/01.png" onclick="popup('popUpDiv','change7','pic18','leg_18','adult28')" name="change7" id="change7" value="none" /> 

<?php } else if($tooth_47<=9) { ?>

<img src="img/Toothchart/0<?php echo $tooth_47;?>.png" onclick="popup('popUpDiv','change7','pic18','leg_18','adult28')" name="change7" id="change7" value="none" />

<?php } else { ?>

<img src="img/Toothchart/<?php echo $tooth_47;?>.png" onclick="popup('popUpDiv','change7','pic18','leg_18','adult28')" name="change7" id="change7" value="none" />

<?php } ?>
<!--<img src="img/Toothchart/01.png" onclick="popup('popUpDiv','change7','pic18')" name="change7" id="change7" value="none"/>-->

</td></tr>

<tr><td style="text-align:center;">47</td></tr>

</table></td>



<td style="padding-left:1px;">

<table cellpadding="0" cellspacing="0" border="0" width="30">
<tr><td style="font-size:10px;width:30px;text-align:center;">
<?php 
if($leg_33!="none") {
$adult29 = $leg_33; }
else {
$adult29 = "&nbsp;";	
}
?>
<input type="text" id="adult29" style="background-color:#FFF;border:none;width:30px;text-align:center;font-size:10px;color:#999;" value="<?php echo $adult29;?>" disabled="disabled"/>
</td></tr>
<tr><td>
<?php if($tooth_46=="none") { ?> 

<img src="img/Toothchart/01.png" onclick="popup('popUpDiv','change8','pic19','leg_19','adult29')" name="change8" id="change8" value="none" /> 

<?php } else if($tooth_46<=9) { ?>

<img src="img/Toothchart/0<?php echo $tooth_46;?>.png" onclick="popup('popUpDiv','change8','pic19','leg_19','adult29')" name="change8" id="change8" value="none" />

<?php } else { ?>

<img src="img/Toothchart/<?php echo $tooth_46;?>.png" onclick="popup('popUpDiv','change8','pic19','leg_19','adult29')" name="change8" id="change8" value="none" />

<?php } ?>
<!--<img src="img/Toothchart/01.png" onclick="popup('popUpDiv','change8','pic19')" name="change8" id="change8" value="none"/>-->

</td></tr>

<tr><td style="text-align:center;">46</td></tr>

</table></td>



<td style="padding-left:1px;">

<table cellpadding="0" cellspacing="0" border="0" width="30">
<tr><td style="font-size:10px;width:30px;text-align:center;">
<?php 
if($leg_34!="none") {
$adult30 = $leg_34; }
else {
$adult30 = "&nbsp;";	
}
?>
<input type="text" id="adult30" style="background-color:#FFF;border:none;width:30px;text-align:center;font-size:10px;color:#999;" value="<?php echo $adult30;?>" disabled="disabled"/>
</td></tr>
<tr><td>
<?php if($tooth_45=="none") { ?> 

<img src="img/Toothchart/01.png" onclick="popup('popUpDiv','change9','pic20','leg_20','adult30')" name="change9" id="change9" value="none" /> 

<?php } else if($tooth_45<=9) { ?>

<img src="img/Toothchart/0<?php echo $tooth_45;?>.png" onclick="popup('popUpDiv','change9','pic20','leg_20','adult30')" name="change9" id="change9" value="none" />

<?php } else { ?>

<img src="img/Toothchart/<?php echo $tooth_45;?>.png" onclick="popup('popUpDiv','change9','pic20','leg_20','adult30')" name="change9" id="change9" value="none" />

<?php } ?>
<!--<img src="img/Toothchart/01.png" onclick="popup('popUpDiv','change9','pic20')" name="change9" id="change9" value="none"/>-->

</td></tr>

<tr><td style="text-align:center;">45</td></tr>

</table></td>



<td style="padding-left:1px;">

<table cellpadding="0" cellspacing="0" border="0" width="30">
<tr><td style="font-size:10px;width:30px;text-align:center;">
<?php 
if($leg_35!="none") {
$adult31 = $leg_35; }
else {
$adult31 = "&nbsp;";	
}
?>
<input type="text" id="adult31" style="background-color:#FFF;border:none;width:30px;text-align:center;font-size:10px;color:#999;" value="<?php echo $adult31;?>" disabled="disabled"/>
</td></tr>
<tr><td>
<?php if($tooth_44=="none") { ?> 

<img src="img/Toothchart/01.png" onclick="popup('popUpDiv','change10','pic21','leg_21','adult31')" name="change10" id="change10" value="none" /> 

<?php } else if($tooth_44<=9) { ?>

<img src="img/Toothchart/0<?php echo $tooth_44;?>.png" onclick="popup('popUpDiv','change10','pic21','leg_21','adult31')" name="change10" id="change10" value="none" />

<?php } else { ?>

<img src="img/Toothchart/<?php echo $tooth_44;?>.png" onclick="popup('popUpDiv','change10','pic21','leg_21','adult31')" name="change10" id="change10" value="none" />

<?php } ?>
<!--<img src="img/Toothchart/01.png" onclick="popup('popUpDiv','change10','pic21')" name="change10" id="change10" value="none"/>-->

</td></tr>

<tr><td style="text-align:center;">44</td></tr>

</table></td>



<td style="padding-left:1px;">

<table cellpadding="0" cellspacing="0" border="0" width="30">
<tr><td style="font-size:10px;width:30px;text-align:center;">
<?php 
if($leg_36!="none") {
$adult32 = $leg_36; }
else {
$adult32 = "&nbsp;";	
}
?>
<input type="text" id="adult32" style="background-color:#FFF;border:none;width:30px;text-align:center;font-size:10px;color:#999;" value="<?php echo $adult32;?>" disabled="disabled"/>
</td></tr>
<tr><td>
<?php if($tooth_43=="none") { ?> 

<img src="img/Toothchart/01.png" onclick="popup('popUpDiv','change11','pic22','leg_22','adult32')" name="change11" id="change11" value="none" /> 

<?php } else if($tooth_43<=9) { ?>

<img src="img/Toothchart/0<?php echo $tooth_43;?>.png" onclick="popup('popUpDiv','change11','pic22','leg_22','adult32')" name="change11" id="change11" value="none" />

<?php } else { ?>

<img src="img/Toothchart/<?php echo $tooth_43;?>.png" onclick="popup('popUpDiv','change11','pic22','leg_22','adult32')" name="change11" id="change11" value="none" />

<?php } ?>
<!--<img src="img/Toothchart/01.png" onclick="popup('popUpDiv','change11','pic22')" name="change11" id="change11" value="none"/>-->

</td></tr>

<tr><td style="text-align:center;">43</td></tr>

</table></td>



<td style="padding-left:1px;">

<table cellpadding="0" cellspacing="0" border="0" width="30">
<tr><td style="font-size:10px;width:30px;text-align:center;">
<?php 
if($leg_37!="none") {
$adult33 = $leg_37; }
else {
$adult33 = "&nbsp;";	
}
?>
<input type="text" id="adult33" style="background-color:#FFF;border:none;width:30px;text-align:center;font-size:10px;color:#999;" value="<?php echo $adult33;?>" disabled="disabled"/>
</td></tr>
<tr><td>
<?php if($tooth_42=="none") { ?> 

<img src="img/Toothchart/01.png" onclick="popup('popUpDiv','change12','pic23','leg_23','adult33')" name="change12" id="change12" value="none" /> 

<?php } else if($tooth_42<=9) { ?>

<img src="img/Toothchart/0<?php echo $tooth_42;?>.png" onclick="popup('popUpDiv','change12','pic23','leg_23','adult33')" name="change12" id="change12" value="none" />

<?php } else { ?>

<img src="img/Toothchart/<?php echo $tooth_42;?>.png" onclick="popup('popUpDiv','change12','pic23','leg_23','adult33')" name="change12" id="change12" value="none" />

<?php } ?>
<!--<img src="img/Toothchart/01.png" onclick="popup('popUpDiv','change12','pic23')" name="change12" id="change12" value="none"/>-->

</td></tr>

<tr><td style="text-align:center;">42</td></tr>

</table></td>



<td style="padding-left:1px;">

<table cellpadding="0" cellspacing="0" border="0" width="30">
<tr><td style="font-size:10px;width:30px;text-align:center;">
<?php 
if($leg_38!="none") {
$adult34 = $leg_38; }
else {
$adult34 = "&nbsp;";	
}
?>
<input type="text" id="adult34" style="background-color:#FFF;border:none;width:30px;text-align:center;font-size:10px;color:#999;" value="<?php echo $adult34;?>" disabled="disabled"/>
</td></tr>
<tr><td>
<?php if($tooth_41=="none") { ?> 

<img src="img/Toothchart/01.png" onclick="popup('popUpDiv','change13','pic24','leg_24','adult34')" name="change13" id="change13" value="none" /> 

<?php } else if($tooth_41<=9) { ?>

<img src="img/Toothchart/0<?php echo $tooth_41;?>.png" onclick="popup('popUpDiv','change13','pic24','leg_24','adult34')" name="change13" id="change13" value="none" />

<?php } else { ?>

<img src="img/Toothchart/<?php echo $tooth_41;?>.png" onclick="popup('popUpDiv','change13','pic24','leg_24','adult34')" name="change13" id="change13" value="none" />

<?php } ?>
<!--<img src="img/Toothchart/01.png" onclick="popup('popUpDiv','change13','pic24')" name="change13" id="change13" value="none"/>-->

</td></tr>

<tr><td style="text-align:center;">41</td></tr>

</table></td>



</tr></table></td>



<!--second set of teetch right--><td style="padding-left:20px;padding-top:20px;">



<table cellpadding="0" cellspacing="0" border="0"><tr>

<td>

<table cellpadding="0" cellspacing="0" border="0" width="30">
<tr><td style="font-size:10px;width:30px;text-align:center;">
<?php 
if($leg_41!="none") {
$adult35 = $leg_41; }
else {
$adult35 = "&nbsp;";	
}
?>
<input type="text" id="adult35" style="background-color:#FFF;border:none;width:30px;text-align:center;font-size:10px;color:#999;" value="<?php echo $adult35;?>" disabled="disabled"/>
</td></tr>
<tr><td> 
<?php if($tooth_31=="none") { ?> 

<img src="img/Toothchart/01.png" onclick="popup('popUpDiv','change14','pic25','leg_25','adult35')" name="change14" id="change14" value="none" /> 

<?php } else if($tooth_31<=9) { ?>

<img src="img/Toothchart/0<?php echo $tooth_31;?>.png" onclick="popup('popUpDiv','change14','pic25','leg_25','adult35')" name="change14" id="change14" value="none" />

<?php } else { ?>

<img src="img/Toothchart/<?php echo $tooth_31;?>.png" onclick="popup('popUpDiv','change14','pic25','leg_25','adult35')" name="change14" id="change14" value="none" />

<?php } ?>
<!--<img src="img/Toothchart/01.png" onclick="popup('popUpDiv','change14','pic25')" name="change14" id="change14" value="none"/>-->

</td></tr>

<tr><td style="text-align:center;">31</td></tr>

</table></td>



<td style="padding-left:1px;">

<table cellpadding="0" cellspacing="0" border="0" width="30">
<tr><td style="font-size:10px;width:30px;text-align:center;">
<?php 
if($leg_42!="none") {
$adult36 = $leg_42; }
else {
$adult36 = "&nbsp;";	
}
?>
<input type="text" id="adult36" style="background-color:#FFF;border:none;width:30px;text-align:center;font-size:10px;color:#999;" value="<?php echo $adult36;?>" disabled="disabled"/>
</td></tr>
<tr><td> 
<?php if($tooth_32=="none") { ?> 

<img src="img/Toothchart/01.png" onclick="popup('popUpDiv','change15','pic26','leg_26','adult36')" name="change15" id="change15" value="none" /> 

<?php } else if($tooth_32<=9) { ?>

<img src="img/Toothchart/0<?php echo $tooth_32;?>.png" onclick="popup('popUpDiv','change15','pic26','leg_26','adult36')" name="change15" id="change15" value="none" />

<?php } else { ?>

<img src="img/Toothchart/<?php echo $tooth_32;?>.png" onclick="popup('popUpDiv','change15','pic26','leg_26','adult36')" name="change15" id="change15" value="none" />

<?php } ?>
<!--<img src="img/Toothchart/01.png" onclick="popup('popUpDiv','change15','pic26')" name="change15" id="change15" value="none"/>-->

</td></tr>

<tr><td style="text-align:center;">32</td></tr>

</table></td>



<td style="padding-left:1px;">

<table cellpadding="0" cellspacing="0" border="0" width="30">
<tr><td style="font-size:10px;width:30px;text-align:center;">
<?php 
if($leg_43!="none") {
$adult37 = $leg_43; }
else {
$adult37 = "&nbsp;";	
}
?>
<input type="text" id="adult37" style="background-color:#FFF;border:none;width:30px;text-align:center;font-size:10px;color:#999;" value="<?php echo $adult37;?>" disabled="disabled"/>
</td></tr>
<tr><td>
<?php if($tooth_33=="none") { ?> 

<img src="img/Toothchart/01.png" onclick="popup('popUpDiv','change16','pic27','leg_27','adult37')" name="change16" id="change16" value="none" /> 

<?php } else if($tooth_33<=9) { ?>

<img src="img/Toothchart/0<?php echo $tooth_33;?>.png" onclick="popup('popUpDiv','change16','pic27','leg_27','adult37')" name="change16" id="change16" value="none" />

<?php } else { ?>

<img src="img/Toothchart/<?php echo $tooth_33;?>.png" onclick="popup('popUpDiv','change16','pic27','leg_27','adult37')" name="change16" id="change16" value="none" />

<?php } ?>
<!--<img src="img/Toothchart/01.png" onclick="popup('popUpDiv','change16','pic27')" name="change16" id="change16" value="none"/>-->

</td></tr>

<tr><td style="text-align:center;">33</td></tr>

</table></td>



<td style="padding-left:1px;">

<table cellpadding="0" cellspacing="0" border="0" width="30">
<tr><td style="font-size:10px;width:30px;text-align:center;">
<?php 
if($leg_44!="none") {
$adult38 = $leg_44; }
else {
$adult38 = "&nbsp;";	
}
?>
<input type="text" id="adult38" style="background-color:#FFF;border:none;width:30px;text-align:center;font-size:10px;color:#999;" value="<?php echo $adult38;?>" disabled="disabled"/>
</td></tr>
<tr><td>
<?php if($tooth_34=="none") { ?> 

<img src="img/Toothchart/01.png" onclick="popup('popUpDiv','change17','pic28','leg_28','adult38')" name="change17" id="change17" value="none" /> 

<?php } else if($tooth_34<=9) { ?>

<img src="img/Toothchart/0<?php echo $tooth_34;?>.png" onclick="popup('popUpDiv','change17','pic28','leg_28','adult38')" name="change17" id="change17" value="none" />

<?php } else { ?>

<img src="img/Toothchart/<?php echo $tooth_34;?>.png" onclick="popup('popUpDiv','change17','pic28','leg_28','adult38')" name="change17" id="change17" value="none" />

<?php } ?>
<!--<img src="img/Toothchart/01.png" onclick="popup('popUpDiv','change17','pic28')" name="change17" id="change17" value="none"/>-->

</td></tr>

<tr><td style="text-align:center;">34</td></tr>

</table></td>



<td style="padding-left:1px;">

<table cellpadding="0" cellspacing="0" border="0" width="30">
<tr><td style="font-size:10px;width:30px;text-align:center;">
<?php 
if($leg_45!="none") {
$adult39 = $leg_45; }
else {
$adult39 = "&nbsp;";	
}
?>
<input type="text" id="adult39" style="background-color:#FFF;border:none;width:30px;text-align:center;font-size:10px;color:#999;" value="<?php echo $adult39;?>" disabled="disabled"/>
</td></tr>
<tr><td>
<?php if($tooth_35=="none") { ?> 

<img src="img/Toothchart/01.png" onclick="popup('popUpDiv','change18','pic29','leg_29','adult39')" name="change18" id="change18" value="none" /> 

<?php } else if($tooth_35<=9) { ?>

<img src="img/Toothchart/0<?php echo $tooth_35;?>.png" onclick="popup('popUpDiv','change18','pic29','leg_29','adult39')" name="change18" id="change18" value="none" />

<?php } else { ?>

<img src="img/Toothchart/<?php echo $tooth_35;?>.png" onclick="popup('popUpDiv','change18','pic29','leg_29','adult39')" name="change18" id="change18" value="none" />

<?php } ?>
<!--<img src="img/Toothchart/01.png" onclick="popup('popUpDiv','change18','pic29')" name="change18" id="change18" value="none"/>
-->
</td></tr>

<tr><td style="text-align:center;">35</td></tr>

</table></td>



<td style="padding-left:1px;">

<table cellpadding="0" cellspacing="0" border="0" width="30">
<tr><td style="font-size:10px;width:30px;text-align:center;">
<?php 
if($leg_46!="none") {
$adult40 = $leg_46; }
else {
$adult40 = "&nbsp;";	
}
?>
<input type="text" id="adult40" style="background-color:#FFF;border:none;width:30px;text-align:center;font-size:10px;color:#999;" value="<?php echo $adult40;?>" disabled="disabled"/>
</td></tr>
<tr><td>
<?php if($tooth_36=="none") { ?> 

<img src="img/Toothchart/01.png" onclick="popup('popUpDiv','change19','pic30','leg_30','adult40')" name="change19" id="change19" value="none" /> 

<?php } else if($tooth_36<=9) { ?>

<img src="img/Toothchart/0<?php echo $tooth_36;?>.png" onclick="popup('popUpDiv','change19','pic30','leg_30','adult40')" name="change19" id="change19" value="none" />

<?php } else { ?>

<img src="img/Toothchart/<?php echo $tooth_36;?>.png" onclick="popup('popUpDiv','change19','pic30','leg_30','adult40')" name="change19" id="change19" value="none" />

<?php } ?>
<!--<img src="img/Toothchart/01.png" onclick="popup('popUpDiv','change19','pic30')" name="change19" id="change19" value="none"/>-->

</td></tr>

<tr><td style="text-align:center;">36</td></tr>

</table></td>



<td style="padding-left:1px;">

<table cellpadding="0" cellspacing="0" border="0" width="30">
<tr><td style="font-size:10px;width:30px;text-align:center;">
<?php 
if($leg_47!="none") {
$adult41 = $leg_47; }
else {
$adult41 = "&nbsp;";	
}
?>
<input type="text" id="adult41" style="background-color:#FFF;border:none;width:30px;text-align:center;font-size:10px;color:#999;" value="<?php echo $adult41;?>" disabled="disabled"/>
</td></tr>
<tr><td>
<?php if($tooth_37=="none") { ?> 

<img src="img/Toothchart/01.png" onclick="popup('popUpDiv','change20','pic31','leg_31','adult41')" name="change20" id="change20" value="none" /> 

<?php } else if($tooth_37<=9) { ?>

<img src="img/Toothchart/0<?php echo $tooth_37;?>.png" onclick="popup('popUpDiv','change20','pic31','leg_31','adult41')" name="change20" id="change20" value="none" />

<?php } else { ?>

<img src="img/Toothchart/<?php echo $tooth_37;?>.png" onclick="popup('popUpDiv','change20','pic31','leg_31','adult41')" name="change20" id="change20" value="none" />

<?php } ?>
<!--<img src="img/Toothchart/01.png" onclick="popup('popUpDiv','change20','pic31')" name="change20" id="change20" value="none"/>-->

</td></tr>

<tr><td style="text-align:center;">37</td></tr>

</table></td>



<td style="padding-left:1px;">

<table cellpadding="0" cellspacing="0" border="0" width="30">
<tr><td style="font-size:10px;width:30px;text-align:center;">
<?php 
if($leg_48!="none") {
$adult42 = $leg_48; }
else {
$adult42 = "&nbsp;";	
}
?>
<input type="text" id="adult42" style="background-color:#FFF;border:none;width:30px;text-align:center;font-size:10px;color:#999;" value="<?php echo $adult42;?>" disabled="disabled"/>
</td></tr>
<tr><td>
<?php if($tooth_38=="none") { ?> 

<img src="img/Toothchart/01.png" onclick="popup('popUpDiv','change21','pic32','leg_32','adult42')" name="change21" id="change21" value="none" /> 

<?php } else if($tooth_38<=9) { ?>

<img src="img/Toothchart/0<?php echo $tooth_38;?>.png" onclick="popup('popUpDiv','change21','pic32','leg_32','adult42')" name="change21" id="change21" value="none" />

<?php } else { ?>

<img src="img/Toothchart/<?php echo $tooth_38;?>.png" onclick="popup('popUpDiv','change21','pic32','leg_32','adult42')" name="change21" id="change21" value="none" />

<?php } ?>
<!--<img src="img/Toothchart/01.png" onclick="popup('popUpDiv','change21','pic32')" name="change21" id="change21" value="none"/>-->

</td></tr>

<tr><td style="text-align:center;">38</td></tr>

</table></td>



</tr></table>



<!--second set of teetch right--></td>

</tr>



<tr><td>



</td></tr>



</table>





<input type="hidden" id="pic1" value="<?php echo (($tooth_18)?$tooth_18:""); ?>" name="newvalue" />

<input type="hidden" id="pic2" value="<?php echo (($tooth_17)?$tooth_17:""); ?>" name="newvalue1" />

<input type="hidden" id="pic3" value="<?php echo (($tooth_16)?$tooth_16:""); ?>" name="newvalue2" />

<input type="hidden" id="pic4" value="<?php echo (($tooth_15)?$tooth_15:""); ?>" name="newvalue3" />

<input type="hidden" id="pic5" value="<?php echo (($tooth_14)?$tooth_14:""); ?>" name="newvalue4" />

<input type="hidden" id="pic6" value="<?php echo (($tooth_13)?$tooth_13:""); ?>" name="newvalue5" />

<input type="hidden" id="pic7" value="<?php echo (($tooth_12)?$tooth_12:""); ?>" name="newvalue6" />

<input type="hidden" id="pic8" value="<?php echo (($tooth_11)?$tooth_11:""); ?>" name="newvalue7" />



<input type="hidden" id="pic9" value="<?php echo (($tooth_21)?$tooth_21:""); ?>" name="newvalue8" />

<input type="hidden" id="pic10" value="<?php echo (($tooth_22)?$tooth_22:""); ?>" name="newvalue9" />

<input type="hidden" id="pic11" value="<?php echo (($tooth_23)?$tooth_23:""); ?>" name="newvalue10" />

<input type="hidden" id="pic12" value="<?php echo (($tooth_24)?$tooth_24:""); ?>" name="newvalue11" />

<input type="hidden" id="pic13" value="<?php echo (($tooth_25)?$tooth_25:""); ?>" name="newvalue12" />

<input type="hidden" id="pic14" value="<?php echo (($tooth_26)?$tooth_26:""); ?>" name="newvalue13" />

<input type="hidden" id="pic15" value="<?php echo (($tooth_27)?$tooth_27:""); ?>" name="newvalue14" />                    

<input type="hidden" id="pic16" value="<?php echo (($tooth_28)?$tooth_28:""); ?>" name="newvalue15" />



<input type="hidden" id="pic17" value="<?php echo (($tooth_48)?$tooth_48:""); ?>" name="newvalue16" />

<input type="hidden" id="pic18" value="<?php echo (($tooth_47)?$tooth_47:""); ?>" name="newvalue17" />

<input type="hidden" id="pic19" value="<?php echo (($tooth_46)?$tooth_46:""); ?>" name="newvalue18" />

<input type="hidden" id="pic20" value="<?php echo (($tooth_45)?$tooth_45:""); ?>" name="newvalue19" />

<input type="hidden" id="pic21" value="<?php echo (($tooth_44)?$tooth_44:""); ?>" name="newvalue20" />

<input type="hidden" id="pic22" value="<?php echo (($tooth_43)?$tooth_43:""); ?>" name="newvalue21" />

<input type="hidden" id="pic23" value="<?php echo (($tooth_42)?$tooth_42:""); ?>" name="newvalue22" />

<input type="hidden" id="pic24" value="<?php echo (($tooth_41)?$tooth_41:""); ?>" name="newvalue23" />



<input type="hidden" id="pic25" value="<?php echo (($tooth_31)?$tooth_31:""); ?>" name="newvalue24" />

<input type="hidden" id="pic26" value="<?php echo (($tooth_32)?$tooth_32:""); ?>" name="newvalue25" />

<input type="hidden" id="pic27" value="<?php echo (($tooth_33)?$tooth_33:""); ?>" name="newvalue26" />

<input type="hidden" id="pic28" value="<?php echo (($tooth_34)?$tooth_34:""); ?>" name="newvalue27" />

<input type="hidden" id="pic29" value="<?php echo (($tooth_35)?$tooth_35:""); ?>" name="newvalue28" />

<input type="hidden" id="pic30" value="<?php echo (($tooth_36)?$tooth_36:""); ?>" name="newvalue29" />

<input type="hidden" id="pic31" value="<?php echo (($tooth_37)?$tooth_37:""); ?>" name="newvalue30" />

<input type="hidden" id="pic32" value="<?php echo (($tooth_38)?$tooth_38:""); ?>" name="newvalue31" />



<input type="hidden" id="leg_1" name="leg_1" value="<?php echo (($leg_11)?$leg_11:""); ?>"/>
<input type="hidden" id="leg_2" name="leg_2" value="<?php echo (($leg_12)?$leg_12:""); ?>" />
<input type="hidden" id="leg_3" name="leg_3" value="<?php echo (($leg_13)?$leg_13:""); ?>" />
<input type="hidden" id="leg_4" name="leg_4" value="<?php echo (($leg_14)?$leg_14:""); ?>" />
<input type="hidden" id="leg_5" name="leg_5" value="<?php echo (($leg_15)?$leg_15:""); ?>" />
<input type="hidden" id="leg_6" name="leg_6" value="<?php echo (($leg_16)?$leg_16:""); ?>" />
<input type="hidden" id="leg_7" name="leg_7" value="<?php echo (($leg_17)?$leg_17:""); ?>" />
<input type="hidden" id="leg_8" name="leg_8" value="<?php echo (($leg_18)?$leg_18:""); ?>" />
<input type="hidden" id="leg_9" name="leg_9" value="<?php echo (($leg_21)?$leg_21:""); ?>" />
<input type="hidden" id="leg_10" name="leg_10" value="<?php echo (($leg_22)?$leg_22:""); ?>" />
<input type="hidden" id="leg_11" name="leg_11" value="<?php echo (($leg_23)?$leg_23:""); ?>" />
<input type="hidden" id="leg_12" name="leg_12" value="<?php echo (($leg_24)?$leg_24:""); ?>" />
<input type="hidden" id="leg_13" name="leg_13" value="<?php echo (($leg_25)?$leg_25:""); ?>"/>
<input type="hidden" id="leg_14" name="leg_14" value="<?php echo (($leg_26)?$leg_26:""); ?>"/>
<input type="hidden" id="leg_15" name="leg_15" value="<?php echo (($leg_27)?$leg_27:""); ?>"/>
<input type="hidden" id="leg_16" name="leg_16" value="<?php echo (($leg_28)?$leg_28:""); ?>"/>
<input type="hidden" id="leg_17" name="leg_17" value="<?php echo (($leg_31)?$leg_31:""); ?>"/>
<input type="hidden" id="leg_18" name="leg_18" value="<?php echo (($leg_32)?$leg_32:""); ?>"/>
<input type="hidden" id="leg_19" name="leg_19" value="<?php echo (($leg_33)?$leg_33:""); ?>"/>
<input type="hidden" id="leg_20" name="leg_20" value="<?php echo (($leg_34)?$leg_34:""); ?>"/>
<input type="hidden" id="leg_21" name="leg_21" value="<?php echo (($leg_35)?$leg_35:""); ?>"/>
<input type="hidden" id="leg_22" name="leg_22" value="<?php echo (($leg_36)?$leg_36:""); ?>"/>
<input type="hidden" id="leg_23" name="leg_23" value="<?php echo (($leg_37)?$leg_37:""); ?>"/>
<input type="hidden" id="leg_24" name="leg_24" value="<?php echo (($leg_38)?$leg_38:""); ?>"/>
<input type="hidden" id="leg_25" name="leg_25" value="<?php echo (($leg_41)?$leg_41:""); ?>"/>
<input type="hidden" id="leg_26" name="leg_26" value="<?php echo (($leg_42)?$leg_42:""); ?>"/>
<input type="hidden" id="leg_27" name="leg_27" value="<?php echo (($leg_43)?$leg_43:""); ?>"/>
<input type="hidden" id="leg_28" name="leg_28" value="<?php echo (($leg_44)?$leg_44:""); ?>"/>
<input type="hidden" id="leg_29" name="leg_29" value="<?php echo (($leg_45)?$leg_45:""); ?>"/>
<input type="hidden" id="leg_30" name="leg_30" value="<?php echo (($leg_46)?$leg_46:""); ?>"/>
<input type="hidden" id="leg_31" name="leg_31" value="<?php echo (($leg_47)?$leg_47:""); ?>"/>
<input type="hidden" id="leg_32" name="leg_32" value="<?php echo (($leg_48)?$leg_48:""); ?>"/>