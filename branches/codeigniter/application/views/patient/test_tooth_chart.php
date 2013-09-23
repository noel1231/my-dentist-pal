

<div id="blanket" style="display:none;"></div>



<?php
	/* popup div */
	$this->load->view('patient/tooth/table_first_tooth');

?>



<table cellpadding="0" cellspacing="0" border="0" class="toothtable"><tr><td>

<table cellpadding="0" cellspacing="0" border="0"><tr>
<?php
	$perma_upper_right = array(
		'18' => array ('1','11'),
		'17' => array ('2','12'),
		'16' => array ('3','13'),
		'15' => array ('4','14'),
		'14' => array ('5','15'),
		'13' => array ('6','16'),
		'12' => array ('7','17'),
		'11' => array ('8','18'),
	);
	foreach($perma_upper_right as $key=>$value) {
?>
	<td>
		<table cellpadding="0" cellspacing="0" border="0" width="30"><tr><td style="text-align:center;"><?php echo $key; ?></td></tr>
			<tr><td>
<?php if(isset(${'tooth_'.$key})) { ?>
				<?php if(${'tooth_'.$key}=="none") { ?>
				<img src="<?php echo base_url(); ?>img/Toothchart/01.png" onclick="popup('popUpDiv','change','pic<?php echo $value[0]; ?>','leg_<?php echo $value[0]; ?>','adult<?php echo $value[1]; ?>')" name="change" id="change" value="none" /> 
				<?php } else if(${'tooth_'.$key}<=9) { ?>
				<img src="<?php echo base_url(); ?>img/Toothchart/0<?php echo ${'tooth_'.$key};?>.png" onclick="popup('popUpDiv','change','pic<?php echo $value[0]; ?>','leg_<?php echo $value[0]; ?>','adult<?php echo $value[1]; ?>')" name="change" id="change" value="none" />
				<?php } else { ?>
				<img src="<?php echo base_url(); ?>img/Toothchart/<?php echo ${'tooth_'.$key};?>.png" onclick="popup('popUpDiv','change','pic<?php echo $value[0]; ?>','leg_<?php echo $value[0]; ?>','adult<?php echo $value[1]; ?>')" name="change" id="change" value="none" />
				<?php } ?>
<?php } ?>
			</td></tr>
<?php if(isset(${'leg_'.$value[1]})) { ?>
			<tr><td style="font-size:10px;width:30px;text-align:center;">
				<?php

					if(${'leg_'.$value[1]}!="none") {
						${'adult'.$value[1]} = ${'leg_'.$value[1]}; }
					else {
						${'adult'.$value[1]} = "&nbsp;";	
					}
				?>
				<input type="text" id="adult<?php echo $value[1]; ?>" style="background-color:#FFF;border:none;width:30px;text-align:center;font-size:10px;color:#999;" value="<?php echo ${'adult'.$value[1]};?>" disabled="disabled"/>
			</td></tr>
<?php } ?>
		</table>
	</td>

<?php		
	}
?>

</tr></table></td>

<!--second set of teetch right--><td style="padding-left:20px;">

<table cellpadding="0" cellspacing="0" border="0"><tr>

<td> 

<td style="padding-left:1px;">

<table cellpadding="0" cellspacing="0" border="0" width="30"><tr><td style="text-align:center;">21</td></tr>

<tr><td>
<?php if($tooth_21=="none") { ?> 

<img src="<?php echo base_url(); ?>img/Toothchart/01.png" onclick="popup('popUpDiv','changei','pic9','leg_9','adult19')" name="changei" id="changei" value="none" /> 

<?php } else if($tooth_21<=9) { ?>

<img src="<?php echo base_url(); ?>img/Toothchart/0<?php echo $tooth_21;?>.png" onclick="popup('popUpDiv','changei','pic9','leg_9','adult19')" name="changei" id="changei" value="none" />

<?php } else { ?>

<img src="<?php echo base_url(); ?>img/Toothchart/<?php echo $tooth_21;?>.png" onclick="popup('popUpDiv','changei','pic9','leg_9','adult19')" name="changei" id="changei" value="none" />

<?php } ?>
<!--<img src="<?php echo base_url(); ?>img/Toothchart/01.png" onclick="popup('popUpDiv','changei','pic9')" name="changei" id="changei" value="none"/>-->

</td></tr>
<tr><td style="font-size:10px;width:30px;text-align:center;">
<?php 
if($legend_21!="none") {
$adult19 = $legend_21; }
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

<img src="<?php echo base_url(); ?>img/Toothchart/01.png" onclick="popup('popUpDiv','changec','pic10','leg_10','adult20')" name="changec" id="changec" value="none" /> 

<?php } else if($tooth_22<=9) { ?>

<img src="<?php echo base_url(); ?>img/Toothchart/0<?php echo $tooth_22;?>.png" onclick="popup('popUpDiv','changec','pic10','leg_10','adult20')" name="changec" id="changec" value="none" />

<?php } else { ?>

<img src="<?php echo base_url(); ?>img/Toothchart/<?php echo $tooth_22;?>.png" onclick="popup('popUpDiv','changec','pic10','leg_10','adult20')" name="changec" id="changec" value="none" />

<?php } ?>
<!--<img src="<?php echo base_url(); ?>img/Toothchart/01.png" onclick="popup('popUpDiv','changec','pic10')" name="changec" id="changec" value="none"/>-->

</td></tr>
<tr><td style="font-size:10px;width:30px;text-align:center;">
<?php 
if($legend_22!="none") {
$adult20 = $legend_22; }
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

<img src="<?php echo base_url(); ?>img/Toothchart/01.png" onclick="popup('popUpDiv','changek','pic11','leg_11','adult21')" name="changek" id="changek" value="none" /> 

<?php } else if($tooth_23<=9) { ?>

<img src="<?php echo base_url(); ?>img/Toothchart/0<?php echo $tooth_23;?>.png" onclick="popup('popUpDiv','changek','pic11','leg_11','adult21')" name="changek" id="changek" value="none" />

<?php } else { ?>

<img src="<?php echo base_url(); ?>img/Toothchart/<?php echo $tooth_23;?>.png" onclick="popup('popUpDiv','changek','pic11','leg_11','adult21')" name="changek" id="changek" value="none" />

<?php } ?>
<!--<img src="<?php echo base_url(); ?>img/Toothchart/01.png" onclick="popup('popUpDiv','changek','pic11')" name="changek" id="changek" value="none"/>-->

</td></tr>
<tr><td style="font-size:10px;width:30px;text-align:center;">
<?php 
if($legend_23!="none") {
$adult21 = $legend_23; }
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

<img src="<?php echo base_url(); ?>img/Toothchart/01.png" onclick="popup('popUpDiv','change1','pic12','leg_12','adult22')" name="change1" id="change1" value="none" /> 

<?php } else if($tooth_24<=9) { ?>

<img src="<?php echo base_url(); ?>img/Toothchart/0<?php echo $tooth_24;?>.png" onclick="popup('popUpDiv','change1','pic12','leg_12','adult22')" name="change1" id="change1" value="none" />

<?php } else { ?>

<img src="<?php echo base_url(); ?>img/Toothchart/<?php echo $tooth_24;?>.png" onclick="popup('popUpDiv','change1','pic12','leg_12','adult22')" name="change1" id="change1" value="none" />

<?php } ?>
<!--<img src="<?php echo base_url(); ?>img/Toothchart/01.png" onclick="popup('popUpDiv','change1','pic12')" name="change1" id="change1" value="none"/>-->

</td></tr>
<tr><td style="font-size:10px;width:30px;text-align:center;">
<?php 
if($legend_24!="none") {
$adult22 = $legend_24; }
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

<img src="<?php echo base_url(); ?>img/Toothchart/01.png" onclick="popup('popUpDiv','change2','pic13','leg_13','adult23')" name="change2" id="change2" value="none" /> 

<?php } else if($tooth_25<=9) { ?>

<img src="<?php echo base_url(); ?>img/Toothchart/0<?php echo $tooth_25;?>.png" onclick="popup('popUpDiv','change2','pic13','leg_13','adult23')" name="change2" id="change2" value="none" />

<?php } else { ?>

<img src="<?php echo base_url(); ?>img/Toothchart/<?php echo $tooth_25;?>.png" onclick="popup('popUpDiv','change2','pic13','leg_13','adult23')" name="change2" id="change2" value="none" />

<?php } ?>
<!--<img src="<?php echo base_url(); ?>img/Toothchart/01.png" onclick="popup('popUpDiv','change2','pic13')" name="change2" id="change2" value="none"/>-->

</td></tr>
<tr><td style="font-size:10px;width:30px;text-align:center;">
<?php 
if($legend_25!="none") {
$adult23 = $legend_25; }
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

<img src="<?php echo base_url(); ?>img/Toothchart/01.png" onclick="popup('popUpDiv','change3','pic14','leg_14','adult24')" name="change3" id="change3" value="none" /> 

<?php } else if($tooth_26<=9) { ?>

<img src="<?php echo base_url(); ?>img/Toothchart/0<?php echo $tooth_26;?>.png" onclick="popup('popUpDiv','change3','pic14','leg_14','adult24')" name="change3" id="change3" value="none" />

<?php } else { ?>

<img src="<?php echo base_url(); ?>img/Toothchart/<?php echo $tooth_26;?>.png" onclick="popup('popUpDiv','change3','pic14','leg_14','adult24')" name="change3" id="change3" value="none" />

<?php } ?>
<!--<img src="<?php echo base_url(); ?>img/Toothchart/01.png" onclick="popup('popUpDiv','change3','pic14')" name="change3" id="change3" value="none"/>-->

</td></tr>
<tr><td style="font-size:10px;width:30px;text-align:center;">
<?php 
if($legend_26!="none") {
$adult24 = $legend_26; }
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

<img src="<?php echo base_url(); ?>img/Toothchart/01.png" onclick="popup('popUpDiv','change4','pic15','leg_15','adult25')" name="change4" id="change4" value="none" /> 

<?php } else if($tooth_27<=9) { ?>

<img src="<?php echo base_url(); ?>img/Toothchart/0<?php echo $tooth_27;?>.png" onclick="popup('popUpDiv','change4','pic15','leg_15','adult25')" name="change4" id="change4" value="none" />

<?php } else { ?>

<img src="<?php echo base_url(); ?>img/Toothchart/<?php echo $tooth_27;?>.png" onclick="popup('popUpDiv','change4','pic15','leg_15','adult25')" name="change4" id="change4" value="none" />

<?php } ?>
<!--<img src="<?php echo base_url(); ?>img/Toothchart/01.png" onclick="popup('popUpDiv','change4','pic15')" name="change4" id="change4" value="none"/>-->

</td></tr>
<tr><td style="font-size:10px;width:30px;text-align:center;">
<?php 
if($legend_27!="none") {
$adult25 = $legend_27; }
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

<img src="<?php echo base_url(); ?>img/Toothchart/01.png" onclick="popup('popUpDiv','change5','pic16','leg_16','adult26')" name="change5" id="change5" value="none" /> 

<?php } else if($tooth_28<=9) { ?>

<img src="<?php echo base_url(); ?>img/Toothchart/0<?php echo $tooth_28;?>.png" onclick="popup('popUpDiv','change5','pic16','leg_16','adult26')" name="change5" id="change5" value="none" />

<?php } else { ?>

<img src="<?php echo base_url(); ?>img/Toothchart/<?php echo $tooth_28;?>.png" onclick="popup('popUpDiv','change5','pic16','leg_16','adult26')" name="change5" id="change5" value="none" />

<?php } ?>
<!--<img src="<?php echo base_url(); ?>img/Toothchart/01.png" onclick="popup('popUpDiv','change5','pic16')" name="change5" id="change5" value="none"/>-->

</td></tr>
<tr><td style="font-size:10px;width:30px;text-align:center;">
<?php 
if($legend_28!="none") {
$adult26 = $legend_28; }
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
if($legend_31!="none") {
$adult27 = $legend_31; }
else {
$adult27 = "&nbsp;";	
}
?>
<input type="text" id="adult27" style="background-color:#FFF;border:none;width:30px;text-align:center;font-size:10px;color:#999;" value="<?php echo $adult27;?>" disabled="disabled"/>
</td></tr>
<tr><td>
<?php if($tooth_48=="none") { ?> 

<img src="<?php echo base_url(); ?>img/Toothchart/01.png" onclick="popup('popUpDiv','change6','pic17','leg_17','adult27')" name="change6" id="change6" value="none" /> 

<?php } else if($tooth_48<=9) { ?>

<img src="<?php echo base_url(); ?>img/Toothchart/0<?php echo $tooth_48;?>.png" onclick="popup('popUpDiv','change6','pic17','leg_17','adult27')" name="change6" id="change6" value="none" />

<?php } else { ?>

<img src="<?php echo base_url(); ?>img/Toothchart/<?php echo $tooth_48;?>.png" onclick="popup('popUpDiv','change6','pic17','leg_17','adult27')" name="change6" id="change6" value="none" />

<?php } ?>
<!--<img src="<?php echo base_url(); ?>img/Toothchart/01.png" onclick="popup('popUpDiv','change6','pic17')" name="change6" id="change6" value="none"/>-->

</td></tr>

<tr><td style="text-align:center;">48</td></tr>

</table></td>



<td style="padding-left:1px;">

<table cellpadding="0" cellspacing="0" border="0" width="30">
<tr><td style="font-size:10px;width:30px;text-align:center;">
<?php 
if($legend_32!="none") {
$adult28 = $legend_32; }
else {
$adult28 = "&nbsp;";	
}
?>
<input type="text" id="adult28" style="background-color:#FFF;border:none;width:30px;text-align:center;font-size:10px;color:#999;" value="<?php echo $adult28;?>" disabled="disabled"/>
</td></tr>
<tr><td>
<?php if($tooth_47=="none") { ?> 

<img src="<?php echo base_url(); ?>img/Toothchart/01.png" onclick="popup('popUpDiv','change7','pic18','leg_18','adult28')" name="change7" id="change7" value="none" /> 

<?php } else if($tooth_47<=9) { ?>

<img src="<?php echo base_url(); ?>img/Toothchart/0<?php echo $tooth_47;?>.png" onclick="popup('popUpDiv','change7','pic18','leg_18','adult28')" name="change7" id="change7" value="none" />

<?php } else { ?>

<img src="<?php echo base_url(); ?>img/Toothchart/<?php echo $tooth_47;?>.png" onclick="popup('popUpDiv','change7','pic18','leg_18','adult28')" name="change7" id="change7" value="none" />

<?php } ?>
<!--<img src="<?php echo base_url(); ?>img/Toothchart/01.png" onclick="popup('popUpDiv','change7','pic18')" name="change7" id="change7" value="none"/>-->

</td></tr>

<tr><td style="text-align:center;">47</td></tr>

</table></td>



<td style="padding-left:1px;">

<table cellpadding="0" cellspacing="0" border="0" width="30">
<tr><td style="font-size:10px;width:30px;text-align:center;">
<?php 
if($legend_33!="none") {
$adult29 = $legend_33; }
else {
$adult29 = "&nbsp;";	
}
?>
<input type="text" id="adult29" style="background-color:#FFF;border:none;width:30px;text-align:center;font-size:10px;color:#999;" value="<?php echo $adult29;?>" disabled="disabled"/>
</td></tr>
<tr><td>
<?php if($tooth_46=="none") { ?> 

<img src="<?php echo base_url(); ?>img/Toothchart/01.png" onclick="popup('popUpDiv','change8','pic19','leg_19','adult29')" name="change8" id="change8" value="none" /> 

<?php } else if($tooth_46<=9) { ?>

<img src="<?php echo base_url(); ?>img/Toothchart/0<?php echo $tooth_46;?>.png" onclick="popup('popUpDiv','change8','pic19','leg_19','adult29')" name="change8" id="change8" value="none" />

<?php } else { ?>

<img src="<?php echo base_url(); ?>img/Toothchart/<?php echo $tooth_46;?>.png" onclick="popup('popUpDiv','change8','pic19','leg_19','adult29')" name="change8" id="change8" value="none" />

<?php } ?>
<!--<img src="<?php echo base_url(); ?>img/Toothchart/01.png" onclick="popup('popUpDiv','change8','pic19')" name="change8" id="change8" value="none"/>-->

</td></tr>

<tr><td style="text-align:center;">46</td></tr>

</table></td>



<td style="padding-left:1px;">

<table cellpadding="0" cellspacing="0" border="0" width="30">
<tr><td style="font-size:10px;width:30px;text-align:center;">
<?php 
if($legend_34!="none") {
$adult30 = $legend_34; }
else {
$adult30 = "&nbsp;";	
}
?>
<input type="text" id="adult30" style="background-color:#FFF;border:none;width:30px;text-align:center;font-size:10px;color:#999;" value="<?php echo $adult30;?>" disabled="disabled"/>
</td></tr>
<tr><td>
<?php if($tooth_45=="none") { ?> 

<img src="<?php echo base_url(); ?>img/Toothchart/01.png" onclick="popup('popUpDiv','change9','pic20','leg_20','adult30')" name="change9" id="change9" value="none" /> 

<?php } else if($tooth_45<=9) { ?>

<img src="<?php echo base_url(); ?>img/Toothchart/0<?php echo $tooth_45;?>.png" onclick="popup('popUpDiv','change9','pic20','leg_20','adult30')" name="change9" id="change9" value="none" />

<?php } else { ?>

<img src="<?php echo base_url(); ?>img/Toothchart/<?php echo $tooth_45;?>.png" onclick="popup('popUpDiv','change9','pic20','leg_20','adult30')" name="change9" id="change9" value="none" />

<?php } ?>
<!--<img src="<?php echo base_url(); ?>img/Toothchart/01.png" onclick="popup('popUpDiv','change9','pic20')" name="change9" id="change9" value="none"/>-->

</td></tr>

<tr><td style="text-align:center;">45</td></tr>

</table></td>



<td style="padding-left:1px;">

<table cellpadding="0" cellspacing="0" border="0" width="30">
<tr><td style="font-size:10px;width:30px;text-align:center;">
<?php 
if($legend_35!="none") {
$adult31 = $legend_35; }
else {
$adult31 = "&nbsp;";	
}
?>
<input type="text" id="adult31" style="background-color:#FFF;border:none;width:30px;text-align:center;font-size:10px;color:#999;" value="<?php echo $adult31;?>" disabled="disabled"/>
</td></tr>
<tr><td>
<?php if($tooth_44=="none") { ?> 

<img src="<?php echo base_url(); ?>img/Toothchart/01.png" onclick="popup('popUpDiv','change10','pic21','leg_21','adult31')" name="change10" id="change10" value="none" /> 

<?php } else if($tooth_44<=9) { ?>

<img src="<?php echo base_url(); ?>img/Toothchart/0<?php echo $tooth_44;?>.png" onclick="popup('popUpDiv','change10','pic21','leg_21','adult31')" name="change10" id="change10" value="none" />

<?php } else { ?>

<img src="<?php echo base_url(); ?>img/Toothchart/<?php echo $tooth_44;?>.png" onclick="popup('popUpDiv','change10','pic21','leg_21','adult31')" name="change10" id="change10" value="none" />

<?php } ?>
<!--<img src="<?php echo base_url(); ?>img/Toothchart/01.png" onclick="popup('popUpDiv','change10','pic21')" name="change10" id="change10" value="none"/>-->

</td></tr>

<tr><td style="text-align:center;">44</td></tr>

</table></td>



<td style="padding-left:1px;">

<table cellpadding="0" cellspacing="0" border="0" width="30">
<tr><td style="font-size:10px;width:30px;text-align:center;">
<?php 
if($legend_36!="none") {
$adult32 = $legend_36; }
else {
$adult32 = "&nbsp;";	
}
?>
<input type="text" id="adult32" style="background-color:#FFF;border:none;width:30px;text-align:center;font-size:10px;color:#999;" value="<?php echo $adult32;?>" disabled="disabled"/>
</td></tr>
<tr><td>
<?php if($tooth_43=="none") { ?> 

<img src="<?php echo base_url(); ?>img/Toothchart/01.png" onclick="popup('popUpDiv','change11','pic22','leg_22','adult32')" name="change11" id="change11" value="none" /> 

<?php } else if($tooth_43<=9) { ?>

<img src="<?php echo base_url(); ?>img/Toothchart/0<?php echo $tooth_43;?>.png" onclick="popup('popUpDiv','change11','pic22','leg_22','adult32')" name="change11" id="change11" value="none" />

<?php } else { ?>

<img src="<?php echo base_url(); ?>img/Toothchart/<?php echo $tooth_43;?>.png" onclick="popup('popUpDiv','change11','pic22','leg_22','adult32')" name="change11" id="change11" value="none" />

<?php } ?>
<!--<img src="<?php echo base_url(); ?>img/Toothchart/01.png" onclick="popup('popUpDiv','change11','pic22')" name="change11" id="change11" value="none"/>-->

</td></tr>

<tr><td style="text-align:center;">43</td></tr>

</table></td>



<td style="padding-left:1px;">

<table cellpadding="0" cellspacing="0" border="0" width="30">
<tr><td style="font-size:10px;width:30px;text-align:center;">
<?php 
if($legend_37!="none") {
$adult33 = $legend_37; }
else {
$adult33 = "&nbsp;";	
}
?>
<input type="text" id="adult33" style="background-color:#FFF;border:none;width:30px;text-align:center;font-size:10px;color:#999;" value="<?php echo $adult33;?>" disabled="disabled"/>
</td></tr>
<tr><td>
<?php if($tooth_42=="none") { ?> 

<img src="<?php echo base_url(); ?>img/Toothchart/01.png" onclick="popup('popUpDiv','change12','pic23','leg_23','adult33')" name="change12" id="change12" value="none" /> 

<?php } else if($tooth_42<=9) { ?>

<img src="<?php echo base_url(); ?>img/Toothchart/0<?php echo $tooth_42;?>.png" onclick="popup('popUpDiv','change12','pic23','leg_23','adult33')" name="change12" id="change12" value="none" />

<?php } else { ?>

<img src="<?php echo base_url(); ?>img/Toothchart/<?php echo $tooth_42;?>.png" onclick="popup('popUpDiv','change12','pic23','leg_23','adult33')" name="change12" id="change12" value="none" />

<?php } ?>
<!--<img src="<?php echo base_url(); ?>img/Toothchart/01.png" onclick="popup('popUpDiv','change12','pic23')" name="change12" id="change12" value="none"/>-->

</td></tr>

<tr><td style="text-align:center;">42</td></tr>

</table></td>



<td style="padding-left:1px;">

<table cellpadding="0" cellspacing="0" border="0" width="30">
<tr><td style="font-size:10px;width:30px;text-align:center;">
<?php 
if($legend_38!="none") {
$adult34 = $legend_38; }
else {
$adult34 = "&nbsp;";	
}
?>
<input type="text" id="adult34" style="background-color:#FFF;border:none;width:30px;text-align:center;font-size:10px;color:#999;" value="<?php echo $adult34;?>" disabled="disabled"/>
</td></tr>
<tr><td>
<?php if($tooth_41=="none") { ?> 

<img src="<?php echo base_url(); ?>img/Toothchart/01.png" onclick="popup('popUpDiv','change13','pic24','leg_24','adult34')" name="change13" id="change13" value="none" /> 

<?php } else if($tooth_41<=9) { ?>

<img src="<?php echo base_url(); ?>img/Toothchart/0<?php echo $tooth_41;?>.png" onclick="popup('popUpDiv','change13','pic24','leg_24','adult34')" name="change13" id="change13" value="none" />

<?php } else { ?>

<img src="<?php echo base_url(); ?>img/Toothchart/<?php echo $tooth_41;?>.png" onclick="popup('popUpDiv','change13','pic24','leg_24','adult34')" name="change13" id="change13" value="none" />

<?php } ?>
<!--<img src="<?php echo base_url(); ?>img/Toothchart/01.png" onclick="popup('popUpDiv','change13','pic24')" name="change13" id="change13" value="none"/>-->

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
if($legend_41!="none") {
$adult35 = $legend_41; }
else {
$adult35 = "&nbsp;";	
}
?>
<input type="text" id="adult35" style="background-color:#FFF;border:none;width:30px;text-align:center;font-size:10px;color:#999;" value="<?php echo $adult35;?>" disabled="disabled"/>
</td></tr>
<tr><td> 
<?php if($tooth_31=="none") { ?> 

<img src="<?php echo base_url(); ?>img/Toothchart/01.png" onclick="popup('popUpDiv','change14','pic25','leg_25','adult35')" name="change14" id="change14" value="none" /> 

<?php } else if($tooth_31<=9) { ?>

<img src="<?php echo base_url(); ?>img/Toothchart/0<?php echo $tooth_31;?>.png" onclick="popup('popUpDiv','change14','pic25','leg_25','adult35')" name="change14" id="change14" value="none" />

<?php } else { ?>

<img src="<?php echo base_url(); ?>img/Toothchart/<?php echo $tooth_31;?>.png" onclick="popup('popUpDiv','change14','pic25','leg_25','adult35')" name="change14" id="change14" value="none" />

<?php } ?>
<!--<img src="<?php echo base_url(); ?>img/Toothchart/01.png" onclick="popup('popUpDiv','change14','pic25')" name="change14" id="change14" value="none"/>-->

</td></tr>

<tr><td style="text-align:center;">31</td></tr>

</table></td>



<td style="padding-left:1px;">

<table cellpadding="0" cellspacing="0" border="0" width="30">
<tr><td style="font-size:10px;width:30px;text-align:center;">
<?php 
if($legend_42!="none") {
$adult36 = $legend_42; }
else {
$adult36 = "&nbsp;";	
}
?>
<input type="text" id="adult36" style="background-color:#FFF;border:none;width:30px;text-align:center;font-size:10px;color:#999;" value="<?php echo $adult36;?>" disabled="disabled"/>
</td></tr>
<tr><td> 
<?php if($tooth_32=="none") { ?> 

<img src="<?php echo base_url(); ?>img/Toothchart/01.png" onclick="popup('popUpDiv','change15','pic26','leg_26','adult36')" name="change15" id="change15" value="none" /> 

<?php } else if($tooth_32<=9) { ?>

<img src="<?php echo base_url(); ?>img/Toothchart/0<?php echo $tooth_32;?>.png" onclick="popup('popUpDiv','change15','pic26','leg_26','adult36')" name="change15" id="change15" value="none" />

<?php } else { ?>

<img src="<?php echo base_url(); ?>img/Toothchart/<?php echo $tooth_32;?>.png" onclick="popup('popUpDiv','change15','pic26','leg_26','adult36')" name="change15" id="change15" value="none" />

<?php } ?>
<!--<img src="<?php echo base_url(); ?>img/Toothchart/01.png" onclick="popup('popUpDiv','change15','pic26')" name="change15" id="change15" value="none"/>-->

</td></tr>

<tr><td style="text-align:center;">32</td></tr>

</table></td>



<td style="padding-left:1px;">

<table cellpadding="0" cellspacing="0" border="0" width="30">
<tr><td style="font-size:10px;width:30px;text-align:center;">
<?php 
if($legend_43!="none") {
$adult37 = $legend_43; }
else {
$adult37 = "&nbsp;";	
}
?>
<input type="text" id="adult37" style="background-color:#FFF;border:none;width:30px;text-align:center;font-size:10px;color:#999;" value="<?php echo $adult37;?>" disabled="disabled"/>
</td></tr>
<tr><td>
<?php if($tooth_33=="none") { ?> 

<img src="<?php echo base_url(); ?>img/Toothchart/01.png" onclick="popup('popUpDiv','change16','pic27','leg_27','adult37')" name="change16" id="change16" value="none" /> 

<?php } else if($tooth_33<=9) { ?>

<img src="<?php echo base_url(); ?>img/Toothchart/0<?php echo $tooth_33;?>.png" onclick="popup('popUpDiv','change16','pic27','leg_27','adult37')" name="change16" id="change16" value="none" />

<?php } else { ?>

<img src="<?php echo base_url(); ?>img/Toothchart/<?php echo $tooth_33;?>.png" onclick="popup('popUpDiv','change16','pic27','leg_27','adult37')" name="change16" id="change16" value="none" />

<?php } ?>
<!--<img src="<?php echo base_url(); ?>img/Toothchart/01.png" onclick="popup('popUpDiv','change16','pic27')" name="change16" id="change16" value="none"/>-->

</td></tr>

<tr><td style="text-align:center;">33</td></tr>

</table></td>



<td style="padding-left:1px;">

<table cellpadding="0" cellspacing="0" border="0" width="30">
<tr><td style="font-size:10px;width:30px;text-align:center;">
<?php 
if($legend_44!="none") {
$adult38 = $legend_44; }
else {
$adult38 = "&nbsp;";	
}
?>
<input type="text" id="adult38" style="background-color:#FFF;border:none;width:30px;text-align:center;font-size:10px;color:#999;" value="<?php echo $adult38;?>" disabled="disabled"/>
</td></tr>
<tr><td>
<?php if($tooth_34=="none") { ?> 

<img src="<?php echo base_url(); ?>img/Toothchart/01.png" onclick="popup('popUpDiv','change17','pic28','leg_28','adult38')" name="change17" id="change17" value="none" /> 

<?php } else if($tooth_34<=9) { ?>

<img src="<?php echo base_url(); ?>img/Toothchart/0<?php echo $tooth_34;?>.png" onclick="popup('popUpDiv','change17','pic28','leg_28','adult38')" name="change17" id="change17" value="none" />

<?php } else { ?>

<img src="<?php echo base_url(); ?>img/Toothchart/<?php echo $tooth_34;?>.png" onclick="popup('popUpDiv','change17','pic28','leg_28','adult38')" name="change17" id="change17" value="none" />

<?php } ?>
<!--<img src="<?php echo base_url(); ?>img/Toothchart/01.png" onclick="popup('popUpDiv','change17','pic28')" name="change17" id="change17" value="none"/>-->

</td></tr>

<tr><td style="text-align:center;">34</td></tr>

</table></td>



<td style="padding-left:1px;">

<table cellpadding="0" cellspacing="0" border="0" width="30">
<tr><td style="font-size:10px;width:30px;text-align:center;">
<?php 
if($legend_45!="none") {
$adult39 = $legend_45; }
else {
$adult39 = "&nbsp;";	
}
?>
<input type="text" id="adult39" style="background-color:#FFF;border:none;width:30px;text-align:center;font-size:10px;color:#999;" value="<?php echo $adult39;?>" disabled="disabled"/>
</td></tr>
<tr><td>
<?php if($tooth_35=="none") { ?> 

<img src="<?php echo base_url(); ?>img/Toothchart/01.png" onclick="popup('popUpDiv','change18','pic29','leg_29','adult39')" name="change18" id="change18" value="none" /> 

<?php } else if($tooth_35<=9) { ?>

<img src="<?php echo base_url(); ?>img/Toothchart/0<?php echo $tooth_35;?>.png" onclick="popup('popUpDiv','change18','pic29','leg_29','adult39')" name="change18" id="change18" value="none" />

<?php } else { ?>

<img src="<?php echo base_url(); ?>img/Toothchart/<?php echo $tooth_35;?>.png" onclick="popup('popUpDiv','change18','pic29','leg_29','adult39')" name="change18" id="change18" value="none" />

<?php } ?>
<!--<img src="<?php echo base_url(); ?>img/Toothchart/01.png" onclick="popup('popUpDiv','change18','pic29')" name="change18" id="change18" value="none"/>
-->
</td></tr>

<tr><td style="text-align:center;">35</td></tr>

</table></td>



<td style="padding-left:1px;">

<table cellpadding="0" cellspacing="0" border="0" width="30">
<tr><td style="font-size:10px;width:30px;text-align:center;">
<?php 
if($legend_46!="none") {
$adult40 = $legend_46; }
else {
$adult40 = "&nbsp;";	
}
?>
<input type="text" id="adult40" style="background-color:#FFF;border:none;width:30px;text-align:center;font-size:10px;color:#999;" value="<?php echo $adult40;?>" disabled="disabled"/>
</td></tr>
<tr><td>
<?php if($tooth_36=="none") { ?> 

<img src="<?php echo base_url(); ?>img/Toothchart/01.png" onclick="popup('popUpDiv','change19','pic30','leg_30','adult40')" name="change19" id="change19" value="none" /> 

<?php } else if($tooth_36<=9) { ?>

<img src="<?php echo base_url(); ?>img/Toothchart/0<?php echo $tooth_36;?>.png" onclick="popup('popUpDiv','change19','pic30','leg_30','adult40')" name="change19" id="change19" value="none" />

<?php } else { ?>

<img src="<?php echo base_url(); ?>img/Toothchart/<?php echo $tooth_36;?>.png" onclick="popup('popUpDiv','change19','pic30','leg_30','adult40')" name="change19" id="change19" value="none" />

<?php } ?>
<!--<img src="<?php echo base_url(); ?>img/Toothchart/01.png" onclick="popup('popUpDiv','change19','pic30')" name="change19" id="change19" value="none"/>-->

</td></tr>

<tr><td style="text-align:center;">36</td></tr>

</table></td>



<td style="padding-left:1px;">

<table cellpadding="0" cellspacing="0" border="0" width="30">
<tr><td style="font-size:10px;width:30px;text-align:center;">
<?php 
if($legend_47!="none") {
$adult41 = $legend_47; }
else {
$adult41 = "&nbsp;";	
}
?>
<input type="text" id="adult41" style="background-color:#FFF;border:none;width:30px;text-align:center;font-size:10px;color:#999;" value="<?php echo $adult41;?>" disabled="disabled"/>
</td></tr>
<tr><td>
<?php if($tooth_37=="none") { ?> 

<img src="<?php echo base_url(); ?>img/Toothchart/01.png" onclick="popup('popUpDiv','change20','pic31','leg_31','adult41')" name="change20" id="change20" value="none" /> 

<?php } else if($tooth_37<=9) { ?>

<img src="<?php echo base_url(); ?>img/Toothchart/0<?php echo $tooth_37;?>.png" onclick="popup('popUpDiv','change20','pic31','leg_31','adult41')" name="change20" id="change20" value="none" />

<?php } else { ?>

<img src="<?php echo base_url(); ?>img/Toothchart/<?php echo $tooth_37;?>.png" onclick="popup('popUpDiv','change20','pic31','leg_31','adult41')" name="change20" id="change20" value="none" />

<?php } ?>
<!--<img src="<?php echo base_url(); ?>img/Toothchart/01.png" onclick="popup('popUpDiv','change20','pic31')" name="change20" id="change20" value="none"/>-->

</td></tr>

<tr><td style="text-align:center;">37</td></tr>

</table></td>



<td style="padding-left:1px;">

<table cellpadding="0" cellspacing="0" border="0" width="30">
<tr><td style="font-size:10px;width:30px;text-align:center;">
<?php 
if($legend_48!="none") {
$adult42 = $legend_48; }
else {
$adult42 = "&nbsp;";	
}
?>
<input type="text" id="adult42" style="background-color:#FFF;border:none;width:30px;text-align:center;font-size:10px;color:#999;" value="<?php echo $adult42;?>" disabled="disabled"/>
</td></tr>
<tr><td>
<?php if($tooth_38=="none") { ?> 

<img src="<?php echo base_url(); ?>img/Toothchart/01.png" onclick="popup('popUpDiv','change21','pic32','leg_32','adult42')" name="change21" id="change21" value="none" /> 

<?php } else if($tooth_38<=9) { ?>

<img src="<?php echo base_url(); ?>img/Toothchart/0<?php echo $tooth_38;?>.png" onclick="popup('popUpDiv','change21','pic32','leg_32','adult42')" name="change21" id="change21" value="none" />

<?php } else { ?>

<img src="<?php echo base_url(); ?>img/Toothchart/<?php echo $tooth_38;?>.png" onclick="popup('popUpDiv','change21','pic32','leg_32','adult42')" name="change21" id="change21" value="none" />

<?php } ?>
<!--<img src="<?php echo base_url(); ?>img/Toothchart/01.png" onclick="popup('popUpDiv','change21','pic32')" name="change21" id="change21" value="none"/>-->

</td></tr>

<tr><td style="text-align:center;">38</td></tr>

</table></td>



</tr></table>



<!--second set of teetch right--></td>

</tr>



<tr><td>



</td></tr>



</table>





<input type="hidden" id="pic1" value="<?php echo (($tooth_18)?$tooth_18:""); ?>" name="newvalue1" />
<input type="hidden" id="pic2" value="<?php echo (($tooth_17)?$tooth_17:""); ?>" name="newvalue2" />
<input type="hidden" id="pic3" value="<?php echo (isset($tooth_16)?$tooth_16:""); ?>" name="newvalue3" />
<input type="hidden" id="pic4" value="<?php echo (isset($tooth_15)?$tooth_15:""); ?>" name="newvalue4" />
<input type="hidden" id="pic5" value="<?php echo (isset($tooth_14)?$tooth_14:""); ?>" name="newvalue5" />
<input type="hidden" id="pic6" value="<?php echo (isset($tooth_13)?$tooth_13:""); ?>" name="newvalue6" />
<input type="hidden" id="pic7" value="<?php echo (isset($tooth_12)?$tooth_12:""); ?>" name="newvalue7" />
<input type="hidden" id="pic8" value="<?php echo (isset($tooth_11)?$tooth_11:""); ?>" name="newvalue8" />
<input type="hidden" id="pic9" value="<?php echo (isset($tooth_21)?$tooth_21:""); ?>" name="newvalue9" />
<input type="hidden" id="pic10" value="<?php echo (isset($tooth_22)?$tooth_22:""); ?>" name="newvalue10" />
<input type="hidden" id="pic11" value="<?php echo (isset($tooth_23)?$tooth_23:""); ?>" name="newvalue11" />
<input type="hidden" id="pic12" value="<?php echo (isset($tooth_24)?$tooth_24:""); ?>" name="newvalue12" />
<input type="hidden" id="pic13" value="<?php echo (isset($tooth_25)?$tooth_25:""); ?>" name="newvalue13" />
<input type="hidden" id="pic14" value="<?php echo (isset($tooth_26)?$tooth_26:""); ?>" name="newvalue14" />
<input type="hidden" id="pic15" value="<?php echo (isset($tooth_27)?$tooth_27:""); ?>" name="newvalue15" />                    
<input type="hidden" id="pic16" value="<?php echo (isset($tooth_28)?$tooth_28:""); ?>" name="newvalue16" />
<input type="hidden" id="pic17" value="<?php echo (isset($tooth_48)?$tooth_48:""); ?>" name="newvalue17" />
<input type="hidden" id="pic18" value="<?php echo (isset($tooth_47)?$tooth_47:""); ?>" name="newvalue18" />
<input type="hidden" id="pic19" value="<?php echo (isset($tooth_46)?$tooth_46:""); ?>" name="newvalue19" />
<input type="hidden" id="pic20" value="<?php echo (isset($tooth_45)?$tooth_45:""); ?>" name="newvalue20" />
<input type="hidden" id="pic21" value="<?php echo (isset($tooth_44)?$tooth_44:""); ?>" name="newvalue21" />
<input type="hidden" id="pic22" value="<?php echo (isset($tooth_43)?$tooth_43:""); ?>" name="newvalue22" />
<input type="hidden" id="pic23" value="<?php echo (isset($tooth_42)?$tooth_42:""); ?>" name="newvalue23" />
<input type="hidden" id="pic24" value="<?php echo (isset($tooth_41)?$tooth_41:""); ?>" name="newvalue24" />
<input type="hidden" id="pic25" value="<?php echo (isset($tooth_31)?$tooth_31:""); ?>" name="newvalue25" />
<input type="hidden" id="pic26" value="<?php echo (isset($tooth_32)?$tooth_32:""); ?>" name="newvalue26" />
<input type="hidden" id="pic27" value="<?php echo (isset($tooth_33)?$tooth_33:""); ?>" name="newvalue27" />
<input type="hidden" id="pic28" value="<?php echo (isset($tooth_34)?$tooth_34:""); ?>" name="newvalue28" />
<input type="hidden" id="pic29" value="<?php echo (isset($tooth_35)?$tooth_35:""); ?>" name="newvalue29" />
<input type="hidden" id="pic30" value="<?php echo (isset($tooth_36)?$tooth_36:""); ?>" name="newvalue30" />
<input type="hidden" id="pic31" value="<?php echo (isset($tooth_37)?$tooth_37:""); ?>" name="newvalue31" />
<input type="hidden" id="pic32" value="<?php echo (isset($tooth_38)?$tooth_38:""); ?>" name="newvalue32" />

<?php
	$x=1;$y=1;$leg=1;
	while($leg <= 32) {
		while($x <= 4) {
			while($y <= 8) {
?>
<input type="hidden" id="leg_<?php echo $leg; ?>" name="leg_<?php echo $leg; ?>" value="<?php echo isset(${'leg_'.$x.$y}) ? ${'leg_'.$x.$y}: ''; ?>" />
<?php
				$y++; $leg++;
			}
			$x++; $y=1;
		}
	}
?>