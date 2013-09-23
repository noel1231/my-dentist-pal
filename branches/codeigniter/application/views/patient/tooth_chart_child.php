<div id="blanket" style="display:none;"></div>

<?php $this->load->view('patient/tooth/table_child_tooth'); ?>



<table cellpadding="0" cellspacing="0" border="0" class="toothtable"><tr><td>

<table cellpadding="0" cellspacing="0" border="0"><tr>

<td>

<table cellpadding="0" cellspacing="0" border="0" width="30"><tr><td style="text-align:center;">55</td></tr>

<tr><td>  

<?php if($tooth_1==0) { ?> 

<img src="<?php echo base_url(); ?>img/Toothchart/01.png" onclick="popup('popUpDiv','child1','childs1','legs_11','le55')" name="child1" id="child1" value="none" /> 

<?php } else if($tooth_1<=9) { ?>

<img src="<?php echo base_url(); ?>img/Toothchart/0<?php echo $tooth_1;?>.png" onclick="popup('popUpDiv','child1','childs1','legs_11','le55')" name="child1" id="child1" value="none" />

<?php } else { ?>

<img src="<?php echo base_url(); ?>img/Toothchart/<?php echo $tooth_1;?>.png" onclick="popup('popUpDiv','child1','childs1','legs_11','le55')" name="child1" id="child1" value="none" />

<?php } ?>

<?php 
if($legend_55!="none") {
$le55 = $legend_55; }
else {
$le55 = "&nbsp;";	
}
?>

</td></tr>
<tr><td style="width:30px;text-align:center;">
<input type="text" id="le55" style="background-color:#FFF;border:none;width:30px;text-align:center;font-size:10px;color:#999;" value="<?php echo $le55;?>" disabled="disabled"/>

</td></tr>
</table>

</td>

<td style="padding-left:1px;">

<table cellpadding="0" cellspacing="0" border="0" width="30"><tr><td style="text-align:center;">54</td></tr>

<tr><td>
<?php if($tooth_2==0) { ?> 

<img src="<?php echo base_url(); ?>img/Toothchart/01.png" onclick="popup('popUpDiv','child2','childs2','legs_12','le54')" name="child2" id="child2" value="none" /> 

<?php } else if($tooth_2<=9) { ?>

<img src="<?php echo base_url(); ?>img/Toothchart/0<?php echo $tooth_2;?>.png" onclick="popup('popUpDiv','child2','childs2','legs_12','le54')" name="child2" id="child2" value="none" />

<?php } else { ?>

<img src="<?php echo base_url(); ?>img/Toothchart/<?php echo $tooth_2;?>.png" onclick="popup('popUpDiv','child2','childs2','legs_12','le54')" name="child2" id="child2" value="none" />

<?php } ?>



</td></tr>
<tr><td style="font-size:10px;width:30px;text-align:center;">
<?php 
if($legend_54!="none") {
$le54 = $legend_54; }
else {
$le54 = "&nbsp;";	
}
?>
<input type="text" id="le54" style="background-color:#FFF;border:none;width:30px;text-align:center;font-size:10px;color:#999;" value="<?php echo $le54;?>" disabled="disabled"/>
</td></tr>
</table>

</td>

<td style="padding-left:1px;">

<table cellpadding="0" cellspacing="0" border="0" width="30"><tr><td style="text-align:center;">53</td></tr>

<tr><td>

<?php if($tooth_3==0) { ?> 

<img src="<?php echo base_url(); ?>img/Toothchart/01.png" onclick="popup('popUpDiv','child3','childs3','legs_13','le53')" name="child3" id="child3" value="none" /> 

<?php } else if($tooth_3<=9) { ?>

<img src="<?php echo base_url(); ?>img/Toothchart/0<?php echo $tooth_3;?>.png" onclick="popup('popUpDiv','child3','childs3','legs_13','le53')" name="child3" id="child3" value="none" />

<?php } else { ?>

<img src="<?php echo base_url(); ?>img/Toothchart/<?php echo $tooth_3;?>.png" onclick="popup('popUpDiv','child3','childs3','legs_13','le53')" name="child3" id="child3" value="none" />

<?php } ?>

<!--<img src="<?php echo base_url(); ?>img/Toothchart/01.png" onclick="popup('popUpDiv','child3','childs3')" name="child3" id="child3" value="none"/>-->

</td></tr>
<tr><td style="font-size:10px;width:30px;text-align:center;">
<?php 
if($legend_53!="none") {
$le53 = $legend_53; }
else {
$le53 = "&nbsp;";
}
?>
<input type="text" id="le53" style="background-color:#FFF;border:none;width:30px;text-align:center;font-size:10px;color:#999;" value="<?php echo $le53;?>" disabled="disabled"/>
</td></tr>
</table>

</td>

<td style="padding-left:1px;">

<table cellpadding="0" cellspacing="0" border="0" width="30"><tr><td style="text-align:center;">52</td></tr>

<tr><td>

<?php if($tooth_4==0) { ?> 

<img src="<?php echo base_url(); ?>img/Toothchart/01.png" onclick="popup('popUpDiv','child4','childs4','legs_14','le52')" name="child4" id="child4" value="none" /> 

<?php } else if($tooth_4<=9) { ?>

<img src="<?php echo base_url(); ?>img/Toothchart/0<?php echo $tooth_4;?>.png" onclick="popup('popUpDiv','child4','childs4','legs_14','le52')" name="child4" id="child4" value="none" />

<?php } else { ?>

<img src="<?php echo base_url(); ?>img/Toothchart/<?php echo $tooth_4;?>.png" onclick="popup('popUpDiv','child4','childs4','legs_14','le52')" name="child4" id="child4" value="none" />

<?php } ?>

<!--<img src="<?php echo base_url(); ?>img/Toothchart/01.png" onclick="popup('popUpDiv','child4','childs4')" name="child4" id="child4" value="none"/>-->

</td></tr>
<tr><td style="font-size:10px;width:30px;text-align:center;">
<?php 
if($legend_52!="none") {
$le52 = $legend_52; }
else {
$le52 = "&nbsp;";	
}
?>
<input type="text" id="le52" style="background-color:#FFF;border:none;width:30px;text-align:center;font-size:10px;color:#999;" value="<?php echo $le52;?>" disabled="disabled"/>
</td></tr>
</table>

</td>

<td style="padding-left:1px;">

<table cellpadding="0" cellspacing="0" border="0" width="30"><tr><td style="text-align:center;">51</td></tr>

<tr><td>

<?php if($tooth_5==0) { ?> 

<img src="<?php echo base_url(); ?>img/Toothchart/01.png" onclick="popup('popUpDiv','child5','childs5','legs_15','le51')" name="child5" id="child5" value="none" /> 

<?php } else if($tooth_5<=9) { ?>

<img src="<?php echo base_url(); ?>img/Toothchart/0<?php echo $tooth_5;?>.png" onclick="popup('popUpDiv','child5','childs5','legs_15','le51')" name="child5" id="child5" value="none" />

<?php } else { ?>

<img src="<?php echo base_url(); ?>img/Toothchart/<?php echo $tooth_5;?>.png" onclick="popup('popUpDiv','child5','childs5','legs_15','le51')" name="child5" id="child5" value="none" />

<?php } ?>

<!--<img src="<?php echo base_url(); ?>img/Toothchart/01.png" onclick="popup('popUpDiv','child5','childs5')" name="child5" id="child5" value="none"/>-->

</td></tr>
<tr><td style="font-size:10px;width:30px;text-align:center;">
<?php 
if($legend_51!="none") {
$le51 = $legend_51; }
else {
$le51 = "&nbsp;";	
}
?>
<input type="text" id="le51" style="background-color:#FFF;border:none;width:30px;text-align:center;font-size:10px;color:#999;" value="<?php echo $le51;?>" disabled="disabled"/>
</td></tr>
</table>

</td>

</tr></table></td>



<!--second set of teetch right--><td style="padding-left:20px;">



<table cellpadding="0" cellspacing="0" border="0"><tr>

<td> 

<td style="padding-left:1px;">

<table cellpadding="0" cellspacing="0" border="0" width="30"><tr><td style="text-align:center;">61</td></tr>

<tr><td>
<?php if($tooth_6==0) { ?> 

<img src="<?php echo base_url(); ?>img/Toothchart/01.png" onclick="popup('popUpDiv','child6','childs9','legs_16','le61')" name="child6" id="child6" value="none" /> 

<?php } else if($tooth_6<=9) { ?>

<img src="<?php echo base_url(); ?>img/Toothchart/0<?php echo $tooth_6;?>.png" onclick="popup('popUpDiv','child6','childs9','legs_16','le61')" name="child6" id="child6" value="none" />

<?php } else { ?>

<img src="<?php echo base_url(); ?>img/Toothchart/<?php echo $tooth_6;?>.png" onclick="popup('popUpDiv','child6','childs9','legs_16','le61')" name="child6" id="child6" value="none" />

<?php } ?>
<!--<img src="<?php echo base_url(); ?>img/Toothchart/01.png" onclick="popup('popUpDiv','child6','childs9')" name="child6" id="child6" value="none"/>-->

</td></tr>
<tr><td style="font-size:10px;width:30px;text-align:center;">
<?php 
if($legend_61!="none") {
$le61 = $legend_61; }
else {
$le61 = "&nbsp;";	
}
?>
<input type="text" id="le61" style="background-color:#FFF;border:none;width:30px;text-align:center;font-size:10px;color:#999;" value="<?php echo $le61;?>" disabled="disabled"/>
</td></tr>
</table>

</td>

<td  style="padding-left:1px;">

<table cellpadding="0" cellspacing="0" border="0" width="30"><tr><td style="text-align:center;">62</td></tr>

<tr><td>
<?php if($tooth_7==0) { ?> 

<img src="<?php echo base_url(); ?>img/Toothchart/01.png" onclick="popup('popUpDiv','child7','childs10','legs_17','le62')" name="child7" id="child7" value="none" /> 

<?php } else if($tooth_7<=9) { ?>

<img src="<?php echo base_url(); ?>img/Toothchart/0<?php echo $tooth_7;?>.png" onclick="popup('popUpDiv','child7','childs10','legs_17','le62')" name="child7" id="child7" value="none" />

<?php } else { ?>

<img src="<?php echo base_url(); ?>img/Toothchart/<?php echo $tooth_7;?>.png" onclick="popup('popUpDiv','child7','childs10','legs_17','le62')" name="child7" id="child7" value="none" />

<?php } ?>
<!--<img src="<?php echo base_url(); ?>img/Toothchart/01.png" onclick="popup('popUpDiv','child7','childs10')" name="child7" id="child7" value="none"/>-->

</td></tr>
<tr><td style="font-size:10px;width:30px;text-align:center;">
<?php 
if($legend_62!="none") {
$le62 = $legend_62; }
else {
$le62 = "&nbsp;";	
}
?>
<input type="text" id="le62" style="background-color:#FFF;border:none;width:30px;text-align:center;font-size:10px;color:#999;" value="<?php echo $le62;?>" disabled="disabled"/>
</td></tr>
</table>

</td>

<td style="padding-left:1px;">

<table cellpadding="0" cellspacing="0" border="0" width="30"><tr><td style="text-align:center;">63</td></tr>

<tr><td>
<?php if($tooth_8==0) { ?> 

<img src="<?php echo base_url(); ?>img/Toothchart/01.png" onclick="popup('popUpDiv','child8','childs11','legs_18','le63')" name="child8" id="child8" value="none" /> 

<?php } else if($tooth_8<=9) { ?>

<img src="<?php echo base_url(); ?>img/Toothchart/0<?php echo $tooth_8;?>.png" onclick="popup('popUpDiv','child8','childs11','legs_18','le63')" name="child8" id="child8" value="none" />

<?php } else { ?>

<img src="<?php echo base_url(); ?>img/Toothchart/<?php echo $tooth_8;?>.png" onclick="popup('popUpDiv','child8','childs11','legs_18','le63')" name="child8" id="child8" value="none" />

<?php } ?>
<!--<img src="<?php echo base_url(); ?>img/Toothchart/01.png" onclick="popup('popUpDiv','child8','childs11')" name="child8" id="child8" value="none"/>-->

</td></tr>
<tr><td style="font-size:10px;width:30px;text-align:center;">
<?php 
if($legend_63!="none") {
$le63 = $legend_63; }
else {
$le63 = "&nbsp;";	
}
?>
<input type="text" id="le63" style="background-color:#FFF;border:none;width:30px;text-align:center;font-size:10px;color:#999;" value="<?php echo $le63;?>" disabled="disabled"/>
</td></tr>
</table>

</td>

<td style="padding-left:1px;">

<table cellpadding="0" cellspacing="0" border="0" width="30"><tr><td style="text-align:center;">64</td></tr>

<tr><td>
<?php if($tooth_9==0) { ?> 

<img src="<?php echo base_url(); ?>img/Toothchart/01.png" onclick="popup('popUpDiv','child9','childs12','legs_19','le64')" name="child9" id="child9" value="none" /> 

<?php } else if($tooth_9<=9) { ?>

<img src="<?php echo base_url(); ?>img/Toothchart/0<?php echo $tooth_9;?>.png" onclick="popup('popUpDiv','child9','childs12','legs_19','le64')" name="child9" id="child9" value="none" />

<?php } else { ?>

<img src="<?php echo base_url(); ?>img/Toothchart/<?php echo $tooth_9;?>.png" onclick="popup('popUpDiv','child9','childs12','legs_19','le64')" name="child9" id="child9" value="none" />

<?php } ?>
<!--<img src="<?php echo base_url(); ?>img/Toothchart/01.png" onclick="popup('popUpDiv','child9','childs12')" name="child9" id="child9" value="none"/>-->

</td></tr>
<tr><td style="font-size:10px;width:30px;text-align:center;">
<?php 
if($legend_64!="none") {
$le64 = $legend_64; }
else {
$le64 = "&nbsp;";	
}
?>
<input type="text" id="le64" style="background-color:#FFF;border:none;width:30px;text-align:center;font-size:10px;color:#999;" value="<?php echo $le64;?>" disabled="disabled"/>
</td></tr>
</table>

</td>

<td style="padding-left:1px;">

<table cellpadding="0" cellspacing="0" border="0" width="30"><tr><td style="text-align:center;">65</td></tr>

<tr><td>
<?php if($tooth_10==0) { ?> 

<img src="<?php echo base_url(); ?>img/Toothchart/01.png" onclick="popup('popUpDiv','child10','childs13','legs_20','le65')" name="child10" id="child10" value="none" /> 

<?php } else if($tooth_10<=9) { ?>

<img src="<?php echo base_url(); ?>img/Toothchart/0<?php echo $tooth_10;?>.png" onclick="popup('popUpDiv','child10','childs13','legs_20','le65')" name="child10" id="child10" value="none" />

<?php } else { ?>

<img src="<?php echo base_url(); ?>img/Toothchart/<?php echo $tooth_10;?>.png" onclick="popup('popUpDiv','child10','childs13','legs_20','le65')" name="child10" id="child10" value="none" />

<?php } ?>
<!--<img src="<?php echo base_url(); ?>img/Toothchart/01.png" onclick="popup('popUpDiv','child10','childs13')" name="child10" id="child10" value="none"/>-->

</td></tr>
<tr><td style="font-size:10px;width:30px;text-align:center;">
<?php 
if($legend_65!="none") {
$le65 = $legend_65; }
else {
$le65 = "&nbsp;";	
}
?>
<input type="text" id="le65" style="background-color:#FFF;border:none;width:30px;text-align:center;font-size:10px;color:#999;" value="<?php echo $le65;?>" disabled="disabled"/>
</td></tr>
</table>

</td>

</tr></table>



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
if($legend_85!="none") {
$le85 = $legend_85; }
else {
$le85 = "&nbsp;";	
}
?>
<input type="text" id="le85" style="background-color:#FFF;border:none;width:30px;text-align:center;font-size:10px;color:#999;" value="<?php echo $le85;?>" disabled="disabled"/>
</td></tr>
<tr><td>
<?php if($tooth_11==0) { ?> 

<img src="<?php echo base_url(); ?>img/Toothchart/01.png" onclick="popup('popUpDiv','child11','childs17','legs_21','le85')" name="child11" id="child11" value="none" /> 

<?php } else if($tooth_11<=9) { ?>

<img src="<?php echo base_url(); ?>img/Toothchart/0<?php echo $tooth_11;?>.png" onclick="popup('popUpDiv','child11','childs17','legs_21','le85')" name="child11" id="child11" value="none" />

<?php } else { ?>

<img src="<?php echo base_url(); ?>img/Toothchart/<?php echo $tooth_11;?>.png" onclick="popup('popUpDiv','child11','childs17','legs_21','le85')" name="child11" id="child11" value="none" />

<?php } ?>
<!--<img src="<?php echo base_url(); ?>img/Toothchart/01.png" onclick="popup('popUpDiv','child11','childs17')" name="child11" id="child11" value="none"/>-->

</td></tr>

<tr><td style="text-align:center;">85</td></tr>

</table></td>



<td style="padding-left:1px;">

<table cellpadding="0" cellspacing="0" border="0" width="30">
<tr><td style="font-size:10px;width:30px;text-align:center;">
<?php 
if($legend_84!="none") {
$le84 = $legend_84; }
else {
$le84 = "&nbsp;";	
}
?>
<input type="text" id="le84" style="background-color:#FFF;border:none;width:30px;text-align:center;font-size:10px;color:#999;" value="<?php echo $le84;?>" disabled="disabled"/>
</td></tr>
<tr><td>
<?php if($tooth_12==0) { ?> 

<img src="<?php echo base_url(); ?>img/Toothchart/01.png" onclick="popup('popUpDiv','child12','childs18','legs_22','le84')" name="child12" id="child12" value="none" /> 

<?php } else if($tooth_12<=9) { ?>

<img src="<?php echo base_url(); ?>img/Toothchart/0<?php echo $tooth_12;?>.png" onclick="popup('popUpDiv','child12','childs18','legs_22','le84')" name="child12" id="child12" value="none" />

<?php } else { ?>

<img src="<?php echo base_url(); ?>img/Toothchart/<?php echo $tooth_12;?>.png" onclick="popup('popUpDiv','child12','childs18','legs_22','le84')" name="child12" id="child12" value="none" />

<?php } ?>

<!--<img src="<?php echo base_url(); ?>img/Toothchart/01.png" onclick="popup('popUpDiv','child12','childs18')" name="child12" id="child12" value="none"/>-->

</td></tr>

<tr><td style="text-align:center;">84</td></tr>

</table></td>



<td style="padding-left:1px;">

<table cellpadding="0" cellspacing="0" border="0" width="30">
<tr><td style="font-size:10px;width:30px;text-align:center;">
<?php 
if($legend_83!="none") {
$le83 = $legend_83; }
else {
$le83 = "&nbsp;";	
}
?>
<input type="text" id="le83" style="background-color:#FFF;border:none;width:30px;text-align:center;font-size:10px;color:#999;" value="<?php echo $le83;?>" disabled="disabled"/>
</td></tr>
<tr><td>
<?php if($tooth_13==0) { ?> 

<img src="<?php echo base_url(); ?>img/Toothchart/01.png" onclick="popup('popUpDiv','child13','childs19','legs_23','le83')" name="child13" id="child13" value="none" /> 

<?php } else if($tooth_13<=9) { ?>

<img src="<?php echo base_url(); ?>img/Toothchart/0<?php echo $tooth_13;?>.png" onclick="popup('popUpDiv','child13','childs19','legs_23','le83')" name="child13" id="child13" value="none" />

<?php } else { ?>

<img src="<?php echo base_url(); ?>img/Toothchart/<?php echo $tooth_13;?>.png" onclick="popup('popUpDiv','child13','childs19','legs_23','le83')" name="child13" id="child13" value="none" />

<?php } ?>
<!--<img src="<?php echo base_url(); ?>img/Toothchart/01.png" onclick="popup('popUpDiv','child13','childs19')" name="child13" id="child13" value="none"/>-->

</td></tr>

<tr><td style="text-align:center;">83</td></tr>

</table></td>



<td style="padding-left:1px;">

<table cellpadding="0" cellspacing="0" border="0" width="30">
<tr><td style="font-size:10px;width:30px;text-align:center;">
<?php 
if($legend_82!="none") {
$le82 = $legend_82; }
else {
$le82 = "&nbsp;";	
}
?>
<input type="text" id="le82" style="background-color:#FFF;border:none;width:30px;text-align:center;font-size:10px;color:#999;" value="<?php echo $le82;?>" disabled="disabled"/>
</td></tr>
<tr><td>
<?php if($tooth_14==0) { ?> 

<img src="<?php echo base_url(); ?>img/Toothchart/01.png" onclick="popup('popUpDiv','child14','childs20','legs_24','le82')" name="child14" id="child14" value="none" /> 

<?php } else if($tooth_14<=9) { ?>

<img src="<?php echo base_url(); ?>img/Toothchart/0<?php echo $tooth_14;?>.png" onclick="popup('popUpDiv','child14','childs20','legs_24','le82')" name="child14" id="child14" value="none" />

<?php } else { ?>

<img src="<?php echo base_url(); ?>img/Toothchart/<?php echo $tooth_14;?>.png" onclick="popup('popUpDiv','child14','childs20','legs_24','le82')" name="child14" id="child14" value="none" />

<?php } ?>
<!--<img src="<?php echo base_url(); ?>img/Toothchart/01.png" onclick="popup('popUpDiv','child14','childs20')" name="child14" id="child14" value="none"/>-->

</td></tr>

<tr><td style="text-align:center;">82</td></tr>

</table></td>



<td style="padding-left:1px;">

<table cellpadding="0" cellspacing="0" border="0" width="30">
<tr><td style="font-size:10px;width:30px;text-align:center;">
<?php 
if($legend_81!="none") {
$le81 = $legend_81; }
else {
$le81 = "&nbsp;";	
}
?>
<input type="text" id="le81" style="background-color:#FFF;border:none;width:30px;text-align:center;font-size:10px;color:#999;" value="<?php echo $le81;?>" disabled="disabled"/>
</td></tr>
<tr><td>
<?php if($tooth_15==0) { ?> 

<img src="<?php echo base_url(); ?>img/Toothchart/01.png" onclick="popup('popUpDiv','child15','childs21','legs_25','le81')" name="child15" id="child15" value="none" /> 

<?php } else if($tooth_15<=9) { ?>

<img src="<?php echo base_url(); ?>img/Toothchart/0<?php echo $tooth_15;?>.png" onclick="popup('popUpDiv','child15','childs21','legs_25','le81')" name="child15" id="child15" value="none" />

<?php } else { ?>

<img src="<?php echo base_url(); ?>img/Toothchart/<?php echo $tooth_15;?>.png" onclick="popup('popUpDiv','child15','childs21','legs_25','le81')" name="child15" id="child15" value="none" />

<?php } ?>
<!--<img src="<?php echo base_url(); ?>img/Toothchart/01.png" onclick="popup('popUpDiv','child15','childs21')" name="child15" id="child15" value="none"/>-->

</td></tr>

<tr><td style="text-align:center;">81</td></tr>

</table></td>





</tr></table></td>



<!--second set of teetch right--><td style="padding-left:20px;padding-top:20px;">



<table cellpadding="0" cellspacing="0" border="0"><tr>

<td>

<table cellpadding="0" cellspacing="0" border="0" width="30">
<tr><td style="font-size:10px;width:30px;text-align:center;">
<?php 
if($legend_71!="none") {
$le71 = $legend_71; }
else {
$le71 = "&nbsp;";	
}
?>
<input type="text" id="le71" style="background-color:#FFF;border:none;width:30px;text-align:center;font-size:10px;color:#999;" value="<?php echo $le71;?>" disabled="disabled"/>
</td></tr>
<tr><td> 
<?php if($tooth_16==0) { ?> 

<img src="<?php echo base_url(); ?>img/Toothchart/01.png" onclick="popup('popUpDiv','child16','childs25','legs_26','le71')" name="child16" id="child16" value="none" /> 

<?php } else if($tooth_16<=9) { ?>

<img src="<?php echo base_url(); ?>img/Toothchart/0<?php echo $tooth_16;?>.png" onclick="popup('popUpDiv','child16','childs25','legs_26','le71')" name="child16" id="child16" value="none" />

<?php } else { ?>

<img src="<?php echo base_url(); ?>img/Toothchart/<?php echo $tooth_16;?>.png" onclick="popup('popUpDiv','child16','childs25','legs_26','le71')" name="child16" id="child16" value="none" />

<?php } ?>
<!--<img src="<?php echo base_url(); ?>img/Toothchart/01.png" onclick="popup('popUpDiv','child16','childs25')" name="child16" id="child16" value="none"/>-->

</td></tr>

<tr><td style="text-align:center;">71</td></tr>

</table></td>



<td style="padding-left:1px;">

<table cellpadding="0" cellspacing="0" border="0" width="30">
<tr><td style="font-size:10px;width:30px;text-align:center;">
<?php 
if($legend_72!="none") {
$le72 = $legend_72; }
else {
$le72 = "&nbsp;";	
}
?>
<input type="text" id="le72" style="background-color:#FFF;border:none;width:30px;text-align:center;font-size:10px;color:#999;" value="<?php echo $le72;?>" disabled="disabled"/>
</td></tr>
<tr><td> 
<?php if($tooth_17==0) { ?> 

<img src="<?php echo base_url(); ?>img/Toothchart/01.png" onclick="popup('popUpDiv','child17','childs26','legs_27','le72')" name="child17" id="child17" value="none" /> 

<?php } else if($tooth_17<=9) { ?>

<img src="<?php echo base_url(); ?>img/Toothchart/0<?php echo $tooth_17;?>.png" onclick="popup('popUpDiv','child17','childs26','legs_27','le72')" name="child17" id="child17" value="none" />

<?php } else { ?>

<img src="<?php echo base_url(); ?>img/Toothchart/<?php echo $tooth_17;?>.png" onclick="popup('popUpDiv','child17','childs26','legs_27','le72')" name="child17" id="child17" value="none" />

<?php } ?>
<!--<img src="<?php echo base_url(); ?>img/Toothchart/01.png" onclick="popup('popUpDiv','child17','childs26')" name="child17" id="child17" value="none"/>-->

</td></tr>

<tr><td style="text-align:center;">72</td></tr>

</table></td>



<td style="padding-left:1px;">

<table cellpadding="0" cellspacing="0" border="0" width="30">
<tr><td style="font-size:10px;width:30px;text-align:center;">
<?php 
if($legend_73!="none") {
$le73 = $legend_73; }
else {
$le73 = "&nbsp;";	
}
?>
<input type="text" id="le73" style="background-color:#FFF;border:none;width:30px;text-align:center;font-size:10px;color:#999;" value="<?php echo $le73;?>" disabled="disabled"/>
</td></tr>
<tr><td>
<?php if($tooth_18==0) { ?> 

<img src="<?php echo base_url(); ?>img/Toothchart/01.png" onclick="popup('popUpDiv','child18','childs27','legs_28','le73')" name="child18" id="child18" value="none" /> 

<?php } else if($tooth_18<=9) { ?>

<img src="<?php echo base_url(); ?>img/Toothchart/0<?php echo $tooth_18;?>.png" onclick="popup('popUpDiv','child18','childs27','legs_28','le73')" name="child18" id="child18" value="none" />

<?php } else { ?>

<img src="<?php echo base_url(); ?>img/Toothchart/<?php echo $tooth_18;?>.png" onclick="popup('popUpDiv','child18','childs27','legs_28','le73')" name="child18" id="child18" value="none" />

<?php } ?>
<!--<img src="<?php echo base_url(); ?>img/Toothchart/01.png" onclick="popup('popUpDiv','child18','childs27')" name="child18" id="child18" value="none"/>-->

</td></tr>

<tr><td style="text-align:center;">73</td></tr>

</table></td>



<td style="padding-left:1px;">

<table cellpadding="0" cellspacing="0" border="0" width="30">
<tr><td style="font-size:10px;width:30px;text-align:center;">
<?php 
if($legend_74!="none") {
$le74 = $legend_74; }
else {
$le74 = "&nbsp;";	
}
?>
<input type="text" id="le74" style="background-color:#FFF;border:none;width:30px;text-align:center;font-size:10px;color:#999;" value="<?php echo $le74;?>" disabled="disabled"/>
</td></tr>
<tr><td>
<?php if($tooth_19==0) { ?> 

<img src="<?php echo base_url(); ?>img/Toothchart/01.png" onclick="popup('popUpDiv','child19','childs28','legs_29','le74')" name="child19" id="child19" value="none" /> 

<?php } else if($tooth_19<=9) { ?>

<img src="<?php echo base_url(); ?>img/Toothchart/0<?php echo $tooth_19;?>.png" onclick="popup('popUpDiv','child19','childs28','legs_29','le74')" name="child19" id="child19" value="none" />

<?php } else { ?>

<img src="<?php echo base_url(); ?>img/Toothchart/<?php echo $tooth_19;?>.png" onclick="popup('popUpDiv','child19','childs28','legs_29','le74')" name="child19" id="child19" value="none" />

<?php } ?>
<!--<img src="<?php echo base_url(); ?>img/Toothchart/01.png" onclick="popup('popUpDiv','child19','childs28')" name="child19" id="child19" value="none"/>-->

</td></tr>

<tr><td style="text-align:center;">74</td></tr>

</table></td>



<td style="padding-left:1px;">

<table cellpadding="0" cellspacing="0" border="0" width="30">
<tr><td style="font-size:10px;width:30px;text-align:center;">
<?php 
if($legend_75!="none") {
$le75 = $legend_75; }
else {
$le75 = "&nbsp;";	
}
?>
<input type="text" id="le75" style="background-color:#FFF;border:none;width:30px;text-align:center;font-size:10px;color:#999;" value="<?php echo $le75;?>" disabled="disabled"/>
</td></tr>
<tr><td>
<?php if($tooth_20==0) { ?> 

<img src="<?php echo base_url(); ?>img/Toothchart/01.png" onclick="popup('popUpDiv','child20','childs29','legs_30','le75')" name="child20" id="child20" value="none" /> 

<?php } else if($tooth_20<=9) { ?>

<img src="<?php echo base_url(); ?>img/Toothchart/0<?php echo $tooth_20;?>.png" onclick="popup('popUpDiv','child20','childs29','legs_30','le75')" name="child20" id="child20" value="none" />

<?php } else { ?>

<img src="<?php echo base_url(); ?>img/Toothchart/<?php echo $tooth_20;?>.png" onclick="popup('popUpDiv','child20','childs29','legs_30','le75')" name="child20" id="child20" value="none" />

<?php } ?>
<!--<img src="<?php echo base_url(); ?>img/Toothchart/01.png" onclick="popup('popUpDiv','child20','childs29')" name="child20" id="child20" value="none"/>-->

</td></tr>

<tr><td style="text-align:center;">75</td></tr>

</table></td>



</tr></table>



<!--second set of teetch right--></td>

</tr>



<tr><td>



</td></tr>



</table>



<?php
	for($childnum=1; $childnum <= 28; $childnum++) {
?>
	<input type="hidden" id="childs<?php echo $childnum; ?>" value="<?php echo ${'tooth_'.$childnum} ? ${'tooth_'.$childnum} : "none"; ?>" name="childvalue<?php echo $childnum; ?>" />
<?php
	}
?>


<input type="hidden" id="legs_11" name="legs_11" value="<?php echo (($legend_55)?$legend_55:"none");?>" />
<input type="hidden" id="legs_12" name="legs_12" value="<?php echo (($legend_54)?$legend_54:"none");?>" />
<input type="hidden" id="legs_13" name="legs_13" value="<?php echo (($legend_53)?$legend_53:"none");?>" />
<input type="hidden" id="legs_14" name="legs_14" value="<?php echo (($legend_52)?$legend_52:"none");?>" />
<input type="hidden" id="legs_15" name="legs_15" value="<?php echo (($legend_51)?$legend_51:"none");?>" />
<input type="hidden" id="legs_16" name="legs_16" value="<?php echo (($legend_61)?$legend_61:"none");?>" />
<input type="hidden" id="legs_17" name="legs_17" value="<?php echo (($legend_62)?$legend_62:"none");?>" />
<input type="hidden" id="legs_18" name="legs_18" value="<?php echo (($legend_63)?$legend_63:"none");?>" />
<input type="hidden" id="legs_19" name="legs_19" value="<?php echo (($legend_64)?$legend_64:"none");?>" />
<input type="hidden" id="legs_20" name="legs_20" value="<?php echo (($legend_65)?$legend_65:"none");?>" />
<input type="hidden" id="legs_21" name="legs_21" value="<?php echo (($legend_85)?$legend_85:"none");?>" />
<input type="hidden" id="legs_22" name="legs_22" value="<?php echo (($legend_84)?$legend_84:"none");?>" />
<input type="hidden" id="legs_23" name="legs_23" value="<?php echo (($legend_83)?$legend_83:"none");?>" />
<input type="hidden" id="legs_24" name="legs_24" value="<?php echo (($legend_82)?$legend_82:"none");?>" />
<input type="hidden" id="legs_25" name="legs_25" value="<?php echo (($legend_81)?$legend_81:"none");?>" />
<input type="hidden" id="legs_26" name="legs_26" value="<?php echo (($legend_71)?$legend_71:"none");?>" />
<input type="hidden" id="legs_27" name="legs_27" value="<?php echo (($legend_72)?$legend_72:"none");?>" />
<input type="hidden" id="legs_28" name="legs_28" value="<?php echo (($legend_73)?$legend_73:"none");?>" />
<input type="hidden" id="legs_29" name="legs_29" value="<?php echo (($legend_74)?$legend_74:"none");?>" />
<input type="hidden" id="legs_30" name="legs_30" value="<?php echo (($legend_75)?$legend_75:"none");?>" />





