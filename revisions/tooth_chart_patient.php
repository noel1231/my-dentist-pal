<?php 
//$id="00000000047";
$tooth_11=1;
$tooth_12=1;
$tooth_13=1;
$tooth_14=1;
$tooth_15=1;
$tooth_16=1;
$tooth_17=1;
$tooth_18=1;

$tooth_21=1;
$tooth_22=1;
$tooth_23=1;
$tooth_24=1;
$tooth_25=1;
$tooth_26=1;
$tooth_27=1;
$tooth_28=1;

$tooth_31=1;
$tooth_32=1;
$tooth_33=1;
$tooth_34=1;
$tooth_35=1;
$tooth_36=1;
$tooth_37=1;
$tooth_38=1;

$tooth_41=1;
$tooth_42=1;
$tooth_43=1;
$tooth_44=1;
$tooth_45=1;
$tooth_46=1;
$tooth_47=1;
$tooth_48=1;

$leg_11='&nbsp;';
//var_dump($tooth_11);die();
$leg_12='&nbsp;';
$leg_13='&nbsp;';
$leg_14='&nbsp;';
$leg_15='&nbsp;';
$leg_16='&nbsp;';
$leg_17='&nbsp;';
$leg_18='&nbsp;';

$leg_21='&nbsp;';
$leg_22='&nbsp;';
$leg_23='&nbsp;';
$leg_24='&nbsp;';
$leg_25='&nbsp;';
$leg_26='&nbsp;';
$leg_27='&nbsp;';
$leg_28='&nbsp;';

$leg_31='&nbsp;';
$leg_32='&nbsp;';
$leg_33='&nbsp;';
$leg_34='&nbsp;';
$leg_35='&nbsp;';
$leg_36='&nbsp;';
$leg_37='&nbsp;';
$leg_38='&nbsp;';

$leg_41='&nbsp;';
$leg_42='&nbsp;';
$leg_43='&nbsp;';
$leg_44='&nbsp;';
$leg_45='&nbsp;';
$leg_46='&nbsp;';
$leg_47='&nbsp;';
$leg_48='&nbsp;';

//var_dump($id);

if(isset($_GET['key'])) {
$key=$_GET['key'];
//var_dump($key);die();
$sqls="SELECT * FROM patient_tooth_chart_extra_adult WHERE id='".$key."'";
$ress=mysql_query($sqls);
//var_dump($ress);die();
//echo mysql_error();
$x="chart_remarks";
}
else {
$sqls="SELECT * FROM patient_adult_tooth WHERE patient_id=".$id."";
$ress=mysql_query($sqls); 
$x="tooth_remarks";
}

while($row=mysql_fetch_array($ress))
{
$chart_remarks=$row[''.$x.''];
	
$tooth_11=$row['tooth_11'];
//var_dump($tooth_11);die();
$tooth_12=$row['tooth_12'];
$tooth_13=$row['tooth_13'];
$tooth_14=$row['tooth_14'];
$tooth_15=$row['tooth_15'];
$tooth_16=$row['tooth_16'];
$tooth_17=$row['tooth_17'];
$tooth_18=$row['tooth_18'];

$tooth_21=$row['tooth_21'];
$tooth_22=$row['tooth_22'];
$tooth_23=$row['tooth_23'];
$tooth_24=$row['tooth_24'];
$tooth_25=$row['tooth_25'];
$tooth_26=$row['tooth_26'];
$tooth_27=$row['tooth_27'];
$tooth_28=$row['tooth_28'];

$tooth_31=$row['tooth_31'];
$tooth_32=$row['tooth_32'];
$tooth_33=$row['tooth_33'];
$tooth_34=$row['tooth_34'];
$tooth_35=$row['tooth_35'];
$tooth_36=$row['tooth_36'];
$tooth_37=$row['tooth_37'];
$tooth_38=$row['tooth_38'];

$tooth_41=$row['tooth_41'];
$tooth_42=$row['tooth_42'];
$tooth_43=$row['tooth_43'];
$tooth_44=$row['tooth_44'];
$tooth_45=$row['tooth_45'];
$tooth_46=$row['tooth_46'];
$tooth_47=$row['tooth_47'];
$tooth_48=$row['tooth_48'];

$leg_11=$row['legend_11'];
$leg_12=$row['legend_12'];
$leg_13=$row['legend_13'];
$leg_14=$row['legend_14'];
$leg_15=$row['legend_15'];
$leg_16=$row['legend_16'];
$leg_17=$row['legend_17'];
$leg_18=$row['legend_18'];

$leg_21=$row['legend_21'];
$leg_22=$row['legend_22'];
$leg_23=$row['legend_23'];
$leg_24=$row['legend_24'];
$leg_25=$row['legend_25'];
$leg_26=$row['legend_26'];
$leg_27=$row['legend_27'];
$leg_28=$row['legend_28'];

$leg_31=$row['legend_31'];
$leg_32=$row['legend_32'];
$leg_33=$row['legend_33'];
$leg_34=$row['legend_34'];
$leg_35=$row['legend_35'];
$leg_36=$row['legend_36'];
$leg_37=$row['legend_37'];
$leg_38=$row['legend_38'];

$leg_41=$row['legend_41'];
$leg_42=$row['legend_42'];
$leg_43=$row['legend_43'];
$leg_44=$row['legend_44'];
$leg_45=$row['legend_45'];
$leg_46=$row['legend_46'];
$leg_47=$row['legend_47'];
$leg_48=$row['legend_48'];

}

//var_dump($sqls);

/* -- for child -- */
$tooth_1=1;

$tooth_2=1;

$tooth_3=1;

$tooth_4=1;

$tooth_5=1;

$tooth_6=1;

$tooth_7=1;

$tooth_8=1;

$tooth_9=1;

$tooth_10=1;

$tooth_11=1;

$tooth_12=1;

$tooth_13=1;

$tooth_14=1;

$tooth_15=1;

$tooth_16=1;

$tooth_17=1;

$tooth_18=1;

$tooth_19=1;

$tooth_20=1;

$legend_51 = '&nbsp;';
$legend_52 = '&nbsp;';
$legend_53 = '&nbsp;';
$legend_54 = '&nbsp;';
$legend_55 = '&nbsp;';
$legend_61 = '&nbsp;';
$legend_62 = '&nbsp;';
$legend_63 = '&nbsp;';
$legend_64 = '&nbsp;';
$legend_65 = '&nbsp;';
$legend_71 = '&nbsp;';
$legend_72 = '&nbsp;';
$legend_73 = '&nbsp;';
$legend_74 = '&nbsp;';
$legend_75 = '&nbsp;';
$legend_81 = '&nbsp;';
$legend_82 = '&nbsp;';
$legend_83 = '&nbsp;';
$legend_84 = '&nbsp;';
$legend_85 = '&nbsp;';


if(isset($_GET['key'])) {
$key=$_GET['key'];	

$sqls="SELECT * FROM patient_tooth_chart_extra_child WHERE id='".$key."'";
$ress=mysql_query($sqls);
$x="chart_remarks";
}
else {
$sqls="SELECT * FROM patient_child_tooth WHERE patient_id=".$id."";
$ress=mysql_query($sqls);
$x="tooth_remarks";
}


while($row=mysql_fetch_array($ress))

{
$chart_remarks=$row[''.$x.''];
//echo($x);die();
$tooth_1=$row['tooth_55'];

$tooth_2=$row['tooth_54'];

$tooth_3=$row['tooth_53'];

$tooth_4=$row['tooth_52'];

$tooth_5=$row['tooth_51'];

$tooth_6=$row['tooth_61'];

$tooth_7=$row['tooth_62'];

$tooth_8=$row['tooth_63'];

$tooth_9=$row['tooth_64'];

$tooth_10=$row['tooth_65'];

$tooth_11=$row['tooth_85'];

$tooth_12=$row['tooth_84'];

$tooth_13=$row['tooth_83'];

$tooth_14=$row['tooth_82'];

$tooth_15=$row['tooth_81'];

$tooth_16=$row['tooth_71'];

$tooth_17=$row['tooth_72'];

$tooth_18=$row['tooth_73'];

$tooth_19=$row['tooth_74'];

$tooth_20=$row['tooth_75'];


$legend_55=$row['legend_55'];
$legend_54=$row['legend_54'];
$legend_53=$row['legend_53'];
$legend_52=$row['legend_52'];
$legend_51=$row['legend_51'];
$legend_65=$row['legend_65'];
$legend_64=$row['legend_64'];
$legend_63=$row['legend_63'];
$legend_62=$row['legend_62'];
$legend_61=$row['legend_61'];
$legend_75=$row['legend_75'];
$legend_74=$row['legend_74'];
$legend_73=$row['legend_73'];
$legend_72=$row['legend_72'];
$legend_71=$row['legend_71'];
$legend_85=$row['legend_85'];
$legend_84=$row['legend_84'];
$legend_83=$row['legend_83'];
$legend_82=$row['legend_82'];
$legend_81=$row['legend_81'];
}

?>
<table cellpadding="0" cellspacing="0" border="0">
<tr><td>
<table cellpadding="0" cellspacing="0" border="0"><tr>

<td>

<table cellpadding="0" cellspacing="0" border="0" width="30"><tr><td style="text-align:center;">55</td></tr>

<tr><td>  

<!--<img src="img/Toothchart/01.png" onclick="popup('popUpDiv','child1','childs1')" name="child1" id="child1" value="none"/>-->

<?php 

//var_dump($tooth_18);die();

if($tooth_1==0) { ?> 

<img src="img/Toothchart/01.png" /> <?php } else if($tooth_1<=9) { ?>

<img src="img/Toothchart/0<?php echo $tooth_1;?>.png"/><?php } else { ?>

<img src="img/Toothchart/<?php echo $tooth_1;?>.png"/><?php } ?>

</td></tr>

<tr><td style="font-size:10px;width:30px;text-align:center;">
<?php 
if($legend_55!="none") {
echo $legend_55; }
else {
echo "&nbsp;";	
}
?>
</td></tr>

</table>

</td>

<td style="padding-left:1px;">

<table cellpadding="0" cellspacing="0" border="0" width="30"><tr><td style="text-align:center;">54</td></tr>

<tr><td>

<!--<img src="img/Toothchart/01.png" onclick="popup('popUpDiv','child2','childs2')" name="child2" id="child2" value="none"/>-->

<?php 

//var_dump($tooth_18);die();

if($tooth_2==0) { ?> 

<img src="img/Toothchart/01.png" /> <?php } else if($tooth_2<=9) { ?>

<img src="img/Toothchart/0<?php echo $tooth_2;?>.png"/><?php } else { ?>

<img src="img/Toothchart/<?php echo $tooth_2;?>.png"/><?php } ?>

</td></tr>
<tr><td style="font-size:10px;width:30px;text-align:center;">
<?php 
if($legend_54!="none") {
echo $legend_54; }
else {
echo "&nbsp;";	
}
?>
</td></tr>
</table>

</td>

<td style="padding-left:1px;">

<table cellpadding="0" cellspacing="0" border="0" width="30"><tr><td style="text-align:center;">53</td></tr>

<tr><td>

<!--<img src="img/Toothchart/01.png" onclick="popup('popUpDiv','child3','childs3')" name="child3" id="child3" value="none"/>-->

<?php 

//var_dump($tooth_18);die();

if($tooth_3==0) { ?> 

<img src="img/Toothchart/01.png" /> <?php } else if($tooth_3<=9) { ?>

<img src="img/Toothchart/0<?php echo $tooth_3;?>.png"/><?php } else { ?>

<img src="img/Toothchart/<?php echo $tooth_3;?>.png"/><?php } ?>

</td></tr>
<tr><td style="font-size:10px;width:30px;text-align:center;">
<?php 
if($legend_53!="none") {
echo $legend_53; }
else {
echo "&nbsp;";	
}
?>
</td></tr>
</table>

</td>

<td style="padding-left:1px;">

<table cellpadding="0" cellspacing="0" border="0" width="30"><tr><td style="text-align:center;">52</td></tr>

<tr><td>

<!--<img src="img/Toothchart/01.png" onclick="popup('popUpDiv','child4','childs4')" name="child4" id="child4" value="none"/>-->

<?php 

//var_dump($tooth_18);die();

if($tooth_4==0) { ?> 

<img src="img/Toothchart/01.png" /> <?php } else if($tooth_4<=9) { ?>

<img src="img/Toothchart/0<?php echo $tooth_4;?>.png"/><?php } else { ?>

<img src="img/Toothchart/<?php echo $tooth_4;?>.png"/><?php } ?>

</td></tr>
<tr><td style="font-size:10px;width:30px;text-align:center;">
<?php 
if($legend_52!="none") {
echo $legend_52; }
else {
echo "&nbsp;";	
}
?>
</td></tr>
</table>

</td>

<td style="padding-left:1px;">

<table cellpadding="0" cellspacing="0" border="0" width="30"><tr><td style="text-align:center;">51</td></tr>

<tr><td>

<!--<img src="img/Toothchart/01.png" onclick="popup('popUpDiv','child5','childs5')" name="child5" id="child5" value="none"/>-->

<?php 

//var_dump($tooth_18);die();

if($tooth_5==0) { ?> 

<img src="img/Toothchart/01.png" /> <?php } else if($tooth_5<=9) { ?>

<img src="img/Toothchart/0<?php echo $tooth_5;?>.png"/><?php } else { ?>

<img src="img/Toothchart/<?php echo $tooth_5;?>.png"/><?php } ?>

</td></tr>
<tr><td style="font-size:10px;width:30px;text-align:center;">
<?php 
if($legend_51!="none") {
echo $legend_51; }
else {
echo "&nbsp;";	
}
?>
</td></tr>
</table>

</td>

</tr></table>
</td>
<td>
<table cellpadding="0" cellspacing="0" border="0"><tr>

<td> 

<td style="padding-left:1px;">

<table cellpadding="0" cellspacing="0" border="0" width="30"><tr><td style="text-align:center;">61</td></tr>

<tr><td>

<!--<img src="img/Toothchart/01.png" onclick="popup('popUpDiv','child6','childs9')" name="child6" id="child6" value="none"/>-->

<?php 

//var_dump($tooth_18);die();

if($tooth_6==0) { ?> 

<img src="img/Toothchart/01.png" /> <?php } else if($tooth_6<=9) { ?>

<img src="img/Toothchart/0<?php echo $tooth_6;?>.png"/><?php } else { ?>

<img src="img/Toothchart/<?php echo $tooth_6;?>.png"/><?php } ?>

</td></tr>
<tr><td style="font-size:10px;width:30px;text-align:center;">
<?php 
if($legend_61!="none") {
echo $legend_61; }
else {
echo "&nbsp;";	
}
?>
</td></tr>
</table>

</td>

<td  style="padding-left:1px;">

<table cellpadding="0" cellspacing="0" border="0" width="30"><tr><td style="text-align:center;">62</td></tr>

<tr><td>

<!--<img src="img/Toothchart/01.png" onclick="popup('popUpDiv','child7','childs10')" name="child7" id="child7" value="none"/>-->

<?php 

//var_dump($tooth_18);die();

if($tooth_7==0) { ?> 

<img src="img/Toothchart/01.png" /> <?php } else if($tooth_7<=9) { ?>

<img src="img/Toothchart/0<?php echo $tooth_7;?>.png"/><?php } else { ?>

<img src="img/Toothchart/<?php echo $tooth_7;?>.png"/><?php } ?>

</td></tr>
<tr><td style="font-size:10px;width:30px;text-align:center;">
<?php 
if($legend_62!="none") {
echo $legend_62; }
else {
echo "&nbsp;";	
}
?>
</td></tr>
</table>

</td>

<td style="padding-left:1px;">

<table cellpadding="0" cellspacing="0" border="0" width="30"><tr><td style="text-align:center;">63</td></tr>

<tr><td>

<!--<img src="img/Toothchart/01.png" onclick="popup('popUpDiv','child8','childs11')" name="child8" id="child8" value="none"/>-->

<?php 

//var_dump($tooth_18);die();

if($tooth_8==0) { ?> 

<img src="img/Toothchart/01.png" /> <?php } else if($tooth_8<=9) { ?>

<img src="img/Toothchart/0<?php echo $tooth_8;?>.png"/><?php } else { ?>

<img src="img/Toothchart/<?php echo $tooth_8;?>.png"/><?php } ?>

</td></tr>
<tr><td style="font-size:10px;width:30px;text-align:center;">
<?php 
if($legend_63!="none") {
echo $legend_63; }
else {
echo "&nbsp;";	
}
?>
</td></tr>
</table>

</td>

<td style="padding-left:1px;">

<table cellpadding="0" cellspacing="0" border="0" width="30"><tr><td style="text-align:center;">64</td></tr>

<tr><td>

<!--<img src="img/Toothchart/01.png" onclick="popup('popUpDiv','child9','childs12')" name="child9" id="child9" value="none"/>-->

<?php 

//var_dump($tooth_18);die();

if($tooth_9==0) { ?> 

<img src="img/Toothchart/01.png" /> <?php } else if($tooth_9<=9) { ?>

<img src="img/Toothchart/0<?php echo $tooth_9;?>.png"/><?php } else { ?>

<img src="img/Toothchart/<?php echo $tooth_9;?>.png"/><?php } ?>

</td></tr>
<tr><td style="font-size:10px;width:30px;text-align:center;">
<?php 
if($legend_64!="none") {
echo $legend_64; }
else {
echo "&nbsp;";	
}
?>
</td></tr>
</table>

</td>

<td style="padding-left:1px;">

<table cellpadding="0" cellspacing="0" border="0" width="30"><tr><td style="text-align:center;">65</td></tr>

<tr><td>

<!--<img src="img/Toothchart/01.png" onclick="popup('popUpDiv','child10','childs13')" name="child10" id="child10" value="none"/>-->

<?php 

//var_dump($tooth_18);die();

if($tooth_10==0) { ?> 

<img src="img/Toothchart/01.png" /> <?php } else if($tooth_10<=9) { ?>

<img src="img/Toothchart/0<?php echo $tooth_10;?>.png"/><?php } else { ?>

<img src="img/Toothchart/<?php echo $tooth_10;?>.png"/><?php } ?>

</td></tr>
<tr><td style="font-size:10px;width:30px;text-align:center;">
<?php 
if($legend_65!="none") {
echo $legend_65; }
else {
echo "&nbsp;";	
}
?>
</td></tr>
</table>

</td>

</tr></table>
</td>
</tr>
<tr><td>
<table cellpadding="0" cellspacing="0" border="0">
<tr>

<td valign="top">
<table cellpadding="0" cellspacing="0" border="0" width="30"><tr><td style="text-align:center;">18</td></tr>
<tr><td>
<?php 
//var_dump($tooth_18);die();
if($tooth_18=="none") { ?> 
<img src="img/Toothchart/01.png" /> <?php } 
 else if($tooth_18<=9) { ?>
<img src="img/Toothchart/0<?php echo $tooth_18;?>.png"/><?php } else { ?>
<img src="img/Toothchart/<?php echo $tooth_18;?>.png"/><?php } ?>
</td>
</tr>
<tr><td style="font-size:10px;width:30px;text-align:center;">
<?php 
if($leg_11!="none") {
echo $leg_11; }
else {
echo "&nbsp;";	
}
?>
</td></tr>
</table>
</td>

<td style="padding-left:1px;" valign="top">
<table cellpadding="0" cellspacing="0" border="0" width="30"><tr><td style="text-align:center;">17</td></tr>
<tr><td>
<?php 
if($tooth_17=="none") { ?> 
<img src="img/Toothchart/01.png" /> <?php }  else if($tooth_17<=9) { ?>
<img src="img/Toothchart/0<?php echo $tooth_17;?>.png"/><?php } else { ?>
<img src="img/Toothchart/<?php echo $tooth_17;?>.png"/><?php } ?>
</td>
</tr>
<tr><td style="font-size:10px;width:30px;text-align:center;">
<?php 
if($leg_12!="none") {
echo $leg_12; }
else {
echo "&nbsp;";	
}
?>
</td></tr>
</table>
</td>

<td style="padding-left:1px;" valign="top">
<table cellpadding="0" cellspacing="0" border="0" width="30"><tr><td style="text-align:center;">16</td></tr>
<tr><td>
<?php
if($tooth_16=="none") { ?> 
<img src="img/Toothchart/01.png" /> <?php }  else if($tooth_16<=9) { ?>
<img src="img/Toothchart/0<?php echo $tooth_16;?>.png"/><?php } else { ?>
<img src="img/Toothchart/<?php echo $tooth_16;?>.png"/><?php } ?>
</td>
</tr>
<tr><td style="font-size:10px;width:30px;text-align:center;">
<?php 
if($leg_13!="none") {
echo $leg_13; }
else {
echo "&nbsp;";	
}
?>
</td></tr>
</table>
</td>

<td style="padding-left:1px;" valign="top">
<table cellpadding="0" cellspacing="0" border="0" width="30"><tr><td style="text-align:center;">15</td></tr>
<tr><td>
<?php
if($tooth_15=="none") { ?> 
<img src="img/Toothchart/01.png" /> <?php } else if($tooth_15<=9) { ?>
<img src="img/Toothchart/0<?php echo $tooth_15;?>.png"/><?php } else { ?>
<img src="img/Toothchart/<?php echo $tooth_15;?>.png"/><?php } ?>
</td>
</tr>
<tr><td style="font-size:10px;width:30px;text-align:center;">
<?php 
if($leg_14!="none") {
echo $leg_14; }
else {
echo "&nbsp;";	
}
?>
</td></tr>
</table>
</td>

<td style="padding-left:1px;" valign="top">
<table cellpadding="0" cellspacing="0" border="0" width="30"><tr><td style="text-align:center;">14</td></tr>
<tr><td>
<?php
if($tooth_14=="none") { ?> 
<img src="img/Toothchart/01.png" /> <?php } else if($tooth_14<=9) { ?>
<img src="img/Toothchart/0<?php echo $tooth_14;?>.png"/><?php } else { ?>
<img src="img/Toothchart/<?php echo $tooth_14;?>.png"/><?php } ?>
</td>
</tr>
<tr><td style="font-size:10px;width:30px;text-align:center;">
<?php 
if($leg_15!="none") {
echo $leg_15; }
else {
echo "&nbsp;";	
}
?>
</td></tr>
</table>
</td>

<td style="padding-left:1px;" valign="top">
<table cellpadding="0" cellspacing="0" border="0" width="30"><tr><td style="text-align:center;">13</td></tr>
<tr><td>
<?php if($tooth_13=="none") { ?> 
<img src="img/Toothchart/01.png" /> <?php } else if($tooth_13<=9) { ?>
<img src="img/Toothchart/0<?php echo $tooth_13;?>.png"/><?php } else { ?>
<img src="img/Toothchart/<?php echo $tooth_13;?>.png"/><?php } ?>
</td>
</tr>
<tr><td style="font-size:10px;width:30px;text-align:center;">
<?php 
if($leg_16!="none") {
echo $leg_16; }
else {
echo "&nbsp;";	
}
?>
</td></tr>
</table>
</td>

<td style="padding-left:1px;" valign="top">
<table cellpadding="0" cellspacing="0" border="0" width="30"><tr><td style="text-align:center;">12</td></tr>
<tr><td>
<?php if($tooth_12=="none") { ?> 
<img src="img/Toothchart/01.png" /> <?php } else if($tooth_12<=9) { ?>
<img src="img/Toothchart/0<?php echo $tooth_12;?>.png"/><?php } else { ?>
<img src="img/Toothchart/<?php echo $tooth_12;?>.png"/><?php } ?>
</td>
</tr>
<tr><td style="font-size:10px;width:30px;text-align:center;">
<?php 
if($leg_17!="none") {
echo $leg_17; }
else {
echo "&nbsp;";	
}
?>
</td></tr>
</table>
</td>

<td style="padding-left:1px;" valign="top">
<table cellpadding="0" cellspacing="0" border="0" width="30"><tr><td style="text-align:center;">11</td></tr>
<tr><td>
<?php if($tooth_11=="none") { ?> 
<img src="img/Toothchart/01.png" /> <?php } else if($tooth_11<=9) { ?>
<img src="img/Toothchart/0<?php echo $tooth_11;?>.png"/><?php } else { ?>
<img src="img/Toothchart/<?php echo $tooth_11;?>.png"/><?php } ?>
</td>
</tr>
<tr><td style="font-size:10px;width:30px;text-align:center;">
<?php 
if($leg_18!="none") {
echo $leg_18; }
else {
echo "&nbsp;";	
}
?>
</td></tr>
</table>
</td>

</tr></table>
</td>



<!--second set of teetch right--><td style="padding-left:20px;" valign="top">

<table cellpadding="0" cellspacing="0" border="0"><tr>
<td> 
<td valign="top">
<table cellpadding="0" cellspacing="0" border="0" width="30"><tr><td style="text-align:center;">21</td></tr>
<tr><td>
<?php if($tooth_21=="none") { ?> 
<img src="img/Toothchart/01.png" /> <?php } else if($tooth_21<=9) { ?>
<img src="img/Toothchart/0<?php echo $tooth_21;?>.png"/><?php } else { ?>
<img src="img/Toothchart/<?php echo $tooth_21;?>.png"/><?php } ?>
</td></tr>
<tr><td style="font-size:10px;width:30px;text-align:center;">
<?php 
if($leg_21!="none") {
echo $leg_21; }
else {
echo "&nbsp;";	
}
?>
</td></tr>
</table>
</td>
<td style="padding-left:1px;" valign="top">
<table cellpadding="0" cellspacing="0" border="0" width="30"><tr><td style="text-align:center;">22</td></tr>
<tr><td>
<?php if($tooth_22=="none") { ?> 
<img src="img/Toothchart/01.png" /> <?php } else if($tooth_22<=9) { ?>
<img src="img/Toothchart/0<?php echo $tooth_22;?>.png"/><?php } else { ?>
<img src="img/Toothchart/<?php echo $tooth_22;?>.png"/><?php } ?>
</td></tr>
<tr><td style="font-size:10px;width:30px;text-align:center;">
<?php 
if($leg_22!="none") {
echo $leg_22; }
else {
echo "&nbsp;";	
}
?>
</td></tr>
</table>
</td>
<td style="padding-left:1px;" valign="top">
<table cellpadding="0" cellspacing="0" border="0" width="30"><tr><td style="text-align:center;">23</td></tr>
<tr><td>
<?php if($tooth_23=="none") { ?> 
<img src="img/Toothchart/01.png" /> <?php } else if($tooth_23<=9) { ?>
<img src="img/Toothchart/0<?php echo $tooth_23;?>.png"/><?php } else { ?>
<img src="img/Toothchart/<?php echo $tooth_23;?>.png"/><?php } ?>
</td></tr>
<tr><td style="font-size:10px;width:30px;text-align:center;">
<?php 
if($leg_23!="none") {
echo $leg_23; }
else {
echo "&nbsp;";	
}
?>
</td></tr>
</table>
</td>
<td style="padding-left:1px;" valign="top">
<table cellpadding="0" cellspacing="0" border="0" width="30"><tr><td style="text-align:center;">24</td></tr>
<tr><td>
<?php if($tooth_24=="none") { ?> 
<img src="img/Toothchart/01.png" /> <?php } else if($tooth_24<=9) { ?>
<img src="img/Toothchart/0<?php echo $tooth_24;?>.png"/><?php } else { ?>
<img src="img/Toothchart/<?php echo $tooth_24;?>.png"/><?php } ?>
</td></tr>
<tr><td style="font-size:10px;width:30px;text-align:center;">
<?php 
if($leg_24!="none") {
echo $leg_24; }
else {
echo "&nbsp;";	
}
?>
</td></tr>
</table>
</td>
<td style="padding-left:1px;" valign="top">
<table cellpadding="0" cellspacing="0" border="0" width="30"><tr><td style="text-align:center;">25</td></tr>
<tr><td>
<?php if($tooth_25=="none") { ?> 
<img src="img/Toothchart/01.png" /> <?php } else if($tooth_25<=9) { ?>
<img src="img/Toothchart/0<?php echo $tooth_25;?>.png"/><?php } else { ?>
<img src="img/Toothchart/<?php echo $tooth_25;?>.png"/><?php } ?>
</td></tr>
<tr><td style="font-size:10px;width:30px;text-align:center;">
<?php 
if($leg_25!="none") {
echo $leg_25; }
else {
echo "&nbsp;";	
}
?>
</td></tr>
</table>
</td>
<td style="padding-left:1px;" valign="top">
<table cellpadding="0" cellspacing="0" border="0" width="30"><tr><td style="text-align:center;">26</td></tr>
<tr><td>
<?php if($tooth_26=="none") { ?> 
<img src="img/Toothchart/01.png" /> <?php } else if($tooth_26<=9) { ?>
<img src="img/Toothchart/0<?php echo $tooth_26;?>.png"/><?php } else { ?>
<img src="img/Toothchart/<?php echo $tooth_26;?>.png"/><?php } ?>
</td></tr>
<tr><td style="font-size:10px;width:30px;text-align:center;">
<?php 
if($leg_26!="none") {
echo $leg_26; }
else {
echo "&nbsp;";	
}
?>
</td></tr>
</table>
</td>
<td style="padding-left:1px;" valign="top">
<table cellpadding="0" cellspacing="0" border="0" width="30"><tr><td style="text-align:center;">27</td></tr>
<tr><td>
<?php if($tooth_27=="none") { ?> 
<img src="img/Toothchart/01.png" /> <?php } else if($tooth_27<=9) { ?>
<img src="img/Toothchart/0<?php echo $tooth_27;?>.png"/><?php } else { ?>
<img src="img/Toothchart/<?php echo $tooth_27;?>.png"/><?php } ?>
</td></tr>
<tr><td style="font-size:10px;width:30px;text-align:center;">
<?php 
if($leg_27!="none") {
echo $leg_27; }
else {
echo "&nbsp;";	
}
?>
</td></tr>
</table>
</td>
<td style="padding-left:1px;" valign="top">
<table cellpadding="0" cellspacing="0" border="0" width="30"><tr><td style="text-align:center;">28</td></tr>
<tr><td>
<?php if($tooth_28=="none") { ?> 
<img src="img/Toothchart/01.png" /> <?php } else if($tooth_28<=9) { ?>
<img src="img/Toothchart/0<?php echo $tooth_28;?>.png"/><?php } else { ?>
<img src="img/Toothchart/<?php echo $tooth_28;?>.png"/><?php } ?>
</td></tr>
<tr><td style="font-size:10px;width:30px;text-align:center;">
<?php 
if($leg_28!="none") {
echo $leg_28; }
else {
echo "&nbsp;";	
}
?>
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
if(($leg_31!="none")&&($leg_31!="")) {
echo $leg_31; }
else if($leg_31=="") {
echo "&nbsp;";	
}
else {
echo "&nbsp;";	
}
?>
</td></tr>
<tr><td>
<?php if($tooth_48=="none") { ?> 
<img src="img/Toothchart/01.png" /> <?php } else if($tooth_48<=9) { ?>
<img src="img/Toothchart/0<?php echo $tooth_48;?>.png"/><?php } else { ?>
<img src="img/Toothchart/<?php echo $tooth_48;?>.png"/><?php } ?>
</td></tr>
<tr><td style="text-align:center;">48</td></tr>
</table></td>

<td style="padding-left:1px;">
<table cellpadding="0" cellspacing="0" border="0" width="30">
<tr><td style="font-size:10px;width:30px;text-align:center;">
<?php 
if(($leg_32!="none")&&($leg_32!="")) {
echo $leg_32; }
else if($leg_32=="") {
echo "&nbsp;";	
}
else {
echo "&nbsp;";	
}
?>
</td></tr>
<tr><td>
<?php if($tooth_47=="none") { ?> 
<img src="img/Toothchart/01.png" /> <?php } else if($tooth_47<=9) { ?>
<img src="img/Toothchart/0<?php echo $tooth_47;?>.png"/><?php } else { ?>
<img src="img/Toothchart/<?php echo $tooth_47;?>.png"/><?php } ?>
</td></tr>
<tr><td style="text-align:center;">47</td></tr>
</table></td>

<td style="padding-left:1px;">
<table cellpadding="0" cellspacing="0" border="0" width="30">
<tr><td style="font-size:10px;width:30px;text-align:center;">
<?php 
if(($leg_33!="none")&&($leg_33!="")) {
echo $leg_33; }
else if($leg_33=="") {
echo "&nbsp;";	
}
else {
echo "&nbsp;";	
}
?>
</td></tr>
<tr><td>
<?php if($tooth_46=="none") { ?> 
<img src="img/Toothchart/01.png" /> <?php } else if($tooth_46<=9) { ?>
<img src="img/Toothchart/0<?php echo $tooth_46;?>.png"/><?php } else { ?>
<img src="img/Toothchart/<?php echo $tooth_46;?>.png"/><?php } ?>
</td></tr>
<tr><td style="text-align:center;">46</td></tr>
</table></td>

<td style="padding-left:1px;">
<table cellpadding="0" cellspacing="0" border="0" width="30">
<tr><td style="font-size:10px;width:30px;text-align:center;">
<?php 
if(($leg_34!="none")&&($leg_34!="")) {
echo $leg_34; }
else if($leg_34=="") {
echo "&nbsp;";	
}
else {
echo "&nbsp;";	
}
?>
</td></tr>
<tr><td>
<?php if($tooth_45=="none") { ?> 
<img src="img/Toothchart/01.png" /> <?php } else if($tooth_45<=9) { ?>
<img src="img/Toothchart/0<?php echo $tooth_45;?>.png"/><?php } else { ?>
<img src="img/Toothchart/<?php echo $tooth_45;?>.png"/><?php } ?>
</td></tr>
<tr><td style="text-align:center;">45</td></tr>
</table></td>

<td style="padding-left:1px;" >
<table cellpadding="0" cellspacing="0" border="0" width="30">
<tr><td style="font-size:10px;width:30px;text-align:center;">
<?php 
if(($leg_35!="none")&&($leg_35!="")) {
echo $leg_35; }
else if($leg_35=="") {
echo "&nbsp;";	
}
else {
echo "&nbsp;";	
}
?>
</td></tr>
<tr><td>
<?php if($tooth_44=="none") { ?> 
<img src="img/Toothchart/01.png" /> <?php } else if($tooth_44<=9) { ?>
<img src="img/Toothchart/0<?php echo $tooth_44;?>.png"/><?php } else { ?>
<img src="img/Toothchart/<?php echo $tooth_44;?>.png"/><?php } ?>
</td></tr>
<tr><td style="text-align:center;">44</td></tr>
</table></td>

<td style="padding-left:1px;" >
<table cellpadding="0" cellspacing="0" border="0" width="30">
<tr><td style="font-size:10px;width:30px;text-align:center;">
<?php 
if(($leg_36!="none")&&($leg_36!="")) {
echo $leg_36; }
else if($leg_36=="") {
echo "&nbsp;";	
}
else {
echo "&nbsp;";	
}
?>
</td></tr>
<tr><td>
<?php if($tooth_43=="none") { ?> 
<img src="img/Toothchart/01.png" /> <?php } else if($tooth_43<=9) { ?>
<img src="img/Toothchart/0<?php echo $tooth_43;?>.png"/><?php } else { ?>
<img src="img/Toothchart/<?php echo $tooth_43;?>.png"/><?php } ?>
</td></tr>
<tr><td style="text-align:center;">43</td></tr>
</table></td>

<td style="padding-left:1px;" >
<table cellpadding="0" cellspacing="0" border="0" width="30">
<tr><td style="font-size:10px;width:30px;text-align:center;">
<?php 
if(($leg_37!="none")&&($leg_37!="")) {
echo $leg_37; }
else if($leg_37=="") {
echo "&nbsp;";	
}
else {
echo "&nbsp;";	
}
?>
</td></tr>
<tr><td>
<?php if($tooth_42=="none") { ?> 
<img src="img/Toothchart/01.png" /> <?php } else if($tooth_42<=9) { ?>
<img src="img/Toothchart/0<?php echo $tooth_42;?>.png"/><?php } else { ?>
<img src="img/Toothchart/<?php echo $tooth_42;?>.png"/><?php } ?>
</td></tr>
<tr><td style="text-align:center;">42</td></tr>
</table></td>

<td style="padding-left:1px;">
<table cellpadding="0" cellspacing="0" border="0" width="30">
<tr><td style="font-size:10px;width:30px;text-align:center;">
<?php 
if(($leg_38!="none")&&($leg_38!="")) {
echo $leg_38; }
else if($leg_38=="") {
echo "&nbsp;";	
}
else {
echo "&nbsp;";	
}
?>
</td></tr>
<tr><td>
<?php if($tooth_41=="none") { ?> 
<img src="img/Toothchart/01.png" /> <?php } else if($tooth_41<=9) { ?>
<img src="img/Toothchart/0<?php echo $tooth_41;?>.png"/><?php } else { ?>
<img src="img/Toothchart/<?php echo $tooth_41;?>.png"/><?php } ?>
</td></tr>
<tr><td style="text-align:center;">41</td></tr>
</table></td>

</tr></table>
</td>

<!--second set of teetch right--><td style="padding-left:20px;padding-top:20px;">

<table cellpadding="0" cellspacing="0" border="0"><tr>
<td >
<table cellpadding="0" cellspacing="0" border="0" width="30">
<tr><td style="font-size:10px;width:30px;text-align:center;">
<?php 
if(($leg_41!="none")&&($leg_41!="")) {
echo $leg_41; }
else if($leg_41=="") {
echo "&nbsp;";	
}
else {
echo "&nbsp;";	
}
?>
</td></tr>
<tr><td> 
<?php if($tooth_31=="none") { ?> 
<img src="img/Toothchart/01.png" /> <?php } else if($tooth_31<=9) { ?>
<img src="img/Toothchart/0<?php echo $tooth_31;?>.png"/><?php } else { ?>
<img src="img/Toothchart/<?php echo $tooth_31;?>.png"/><?php } ?>
</td></tr>
<tr><td style="text-align:center;">31</td></tr>
</table></td>

<td style="padding-left:1px;" >
<table cellpadding="0" cellspacing="0" border="0" width="30">
<tr><td style="font-size:10px;width:30px;text-align:center;">
<?php 
if(($leg_42!="none")&&($leg_42!="")) {
echo $leg_42; }
else if($leg_42=="") {
echo "&nbsp;";	
}
else {
echo "&nbsp;";	
}
?>
</td></tr>
<tr><td> 
<?php if($tooth_32=="none") { ?> 
<img src="img/Toothchart/01.png" /> <?php } else if($tooth_32<=9) { ?>
<img src="img/Toothchart/0<?php echo $tooth_32;?>.png"/><?php } else { ?>
<img src="img/Toothchart/<?php echo $tooth_32;?>.png"/><?php } ?>
</td></tr>
<tr><td style="text-align:center;">32</td></tr>
</table></td>

<td style="padding-left:1px;">
<table cellpadding="0" cellspacing="0" border="0" width="30">
<tr><td style="font-size:10px;width:30px;text-align:center;">
<?php 
if(($leg_43!="none")&&($leg_43!="")) {
echo $leg_43; }
else if($leg_43=="") {
echo "&nbsp;";	
}
else {
echo "&nbsp;";	
}
?>
</td></tr>
<tr><td>
<?php if($tooth_33=="none") { ?> 
<img src="img/Toothchart/01.png" /> <?php } else if($tooth_33<=9) { ?>
<img src="img/Toothchart/0<?php echo $tooth_33;?>.png"/><?php } else { ?>
<img src="img/Toothchart/<?php echo $tooth_33;?>.png"/><?php } ?>
</td></tr>
<tr><td style="text-align:center;">33</td></tr>
</table></td>

<td style="padding-left:1px;">
<table cellpadding="0" cellspacing="0" border="0" width="30">
<tr><td style="font-size:10px;width:30px;text-align:center;">
<?php 
if(($leg_44!="none")&&($leg_44!="")) {
echo $leg_44; }
else if($leg_44==""){
echo "&nbsp;";	
}
else {
echo "&nbsp;";	
}
?>
</td></tr>
<tr><td>
<?php if($tooth_34=="none") { ?> 
<img src="img/Toothchart/01.png" /> <?php } else if($tooth_34<=9) { ?>
<img src="img/Toothchart/0<?php echo $tooth_34;?>.png"/><?php } else { ?>
<img src="img/Toothchart/<?php echo $tooth_34;?>.png"/><?php } ?>
</td></tr>
<tr><td style="text-align:center;">34</td></tr>
</table></td>

<td style="padding-left:1px;">
<table cellpadding="0" cellspacing="0" border="0" width="30">
<tr><td style="font-size:10px;width:30px;text-align:center;">
<?php 
if(($leg_45!="none")&&($leg_45!="")) {
echo $leg_45; }
else if($leg_45=="") {
echo "&nbsp;";	
}
else {
echo "&nbsp;";	
}
?>
</td></tr>
<tr><td>
<?php if($tooth_35=="none") { ?> 
<img src="img/Toothchart/01.png" /> <?php } else if($tooth_35<=9) { ?>
<img src="img/Toothchart/0<?php echo $tooth_35;?>.png"/><?php } else { ?>
<img src="img/Toothchart/<?php echo $tooth_35;?>.png"/><?php } ?>
</td></tr>
<tr><td style="text-align:center;">35</td></tr>
</table></td>

<td style="padding-left:1px;">
<table cellpadding="0" cellspacing="0" border="0" width="30">
<tr><td style="font-size:10px;width:30px;text-align:center;">
<?php 
if(($leg_46!="none")&&($leg_46!="")) {
echo $leg_46; }
else if($leg_46=="") {
echo "&nbsp;";	
}
else {
echo "&nbsp;";	
}
?>
</td></tr>
<tr><td>
<?php if($tooth_36=="none") { ?> 
<img src="img/Toothchart/01.png" /> <?php } else if($tooth_36<=9) { ?>
<img src="img/Toothchart/0<?php echo $tooth_36;?>.png"/><?php } else { ?>
<img src="img/Toothchart/<?php echo $tooth_36;?>.png"/><?php } ?>
</td></tr>
<tr><td style="text-align:center;">36</td></tr>
</table></td>

<td style="padding-left:1px;">
<table cellpadding="0" cellspacing="0" border="0" width="30">
<tr><td style="font-size:10px;width:30px;text-align:center;">
<?php 
if(($leg_47!="none")&&($leg_47!="")) {
echo $leg_47; }
else if($leg_47=="") {
echo "&nbsp;";	
}
else {
echo "&nbsp;";	
}
?>
</td></tr>
<tr><td>
<?php if($tooth_37=="none") { ?> 
<img src="img/Toothchart/01.png" /> <?php } else if($tooth_37<=9) { ?>
<img src="img/Toothchart/0<?php echo $tooth_37;?>.png"/><?php } else { ?>
<img src="img/Toothchart/<?php echo $tooth_37;?>.png"/><?php } ?>
</td></tr>
<tr><td style="text-align:center;">37</td></tr>
</table></td>

<td style="padding-left:1px;">
<table cellpadding="0" cellspacing="0" border="0" width="30">
<tr><td style="font-size:10px;width:30px;text-align:center;">
<?php 
if(($leg_48!="none")&&($leg_48!="")) {
echo $leg_48; }
else if($leg_48=="") {
echo "&nbsp;";	
}
else {
echo "&nbsp;";	
}
?>
</td></tr>
<tr><td>
<?php if($tooth_38=="none") { ?> 
<img src="img/Toothchart/01.png" /> <?php } else if($tooth_38<=9) { ?>
<img src="img/Toothchart/0<?php echo $tooth_38;?>.png"/><?php } else { ?>
<img src="img/Toothchart/<?php echo $tooth_38;?>.png"/><?php } ?>
</td></tr>
<tr><td style="text-align:center;">38</td></tr>
</table></td>

</tr></table>

<!--second set of teetch right--></td>

</tr>
<tr>
<td>
<table cellpadding="0" cellspacing="0" border="0"><tr>

<td> 

<table cellpadding="0" cellspacing="0" border="0" width="30">
<tr><td style="font-size:10px;width:30px;text-align:center;">
<?php 
if($legend_85!="none") {
echo $legend_85; }
else {
echo "&nbsp;";	
}
?>
</td></tr>
<tr><td>

<!--<img src="img/Toothchart/01.png" onclick="popup('popUpDiv','child11','childs17')" name="child11" id="child11" value="none"/>-->

<?php 

//var_dump($tooth_18);die();

if($tooth_11==0) { ?> 

<img src="img/Toothchart/01.png" /> <?php } else if($tooth_11<=9) { ?>

<img src="img/Toothchart/0<?php echo $tooth_11;?>.png"/><?php } else { ?>

<img src="img/Toothchart/<?php echo $tooth_11;?>.png"/><?php } ?>

</td></tr>

<tr><td style="text-align:center;">85</td></tr>

</table></td>



<td style="padding-left:1px;">

<table cellpadding="0" cellspacing="0" border="0" width="30">
<tr><td style="font-size:10px;width:30px;text-align:center;">
<?php 
if($legend_84!="none") {
echo $legend_84; }
else {
echo "&nbsp;";	
}
?>
</td></tr>
<tr><td>

<!--<img src="img/Toothchart/01.png" onclick="popup('popUpDiv','child12','childs18')" name="child12" id="child12" value="none"/>-->

<?php 

//var_dump($tooth_18);die();

if($tooth_12==0) { ?> 

<img src="img/Toothchart/01.png" /> <?php } else if($tooth_12<=9) { ?>

<img src="img/Toothchart/0<?php echo $tooth_12;?>.png"/><?php } else { ?>

<img src="img/Toothchart/<?php echo $tooth_12;?>.png"/><?php } ?>

</td></tr>

<tr><td style="text-align:center;">84</td></tr>

</table></td>



<td style="padding-left:1px;">

<table cellpadding="0" cellspacing="0" border="0" width="30">
<tr><td style="font-size:10px;width:30px;text-align:center;">
<?php 
if($legend_83!="none") {
echo $legend_83; }
else {
echo "&nbsp;";	
}
?>
</td></tr>
<tr><td>

<!--<img src="img/Toothchart/01.png" onclick="popup('popUpDiv','child13','childs19')" name="child13" id="child13" value="none"/>-->

<?php 

//var_dump($tooth_18);die();

if($tooth_13==0) { ?> 

<img src="img/Toothchart/01.png" /> <?php } else if($tooth_13<=9) { ?>

<img src="img/Toothchart/0<?php echo $tooth_13;?>.png"/><?php } else { ?>

<img src="img/Toothchart/<?php echo $tooth_13;?>.png"/><?php } ?>

</td></tr>

<tr><td style="text-align:center;">83</td></tr>

</table></td>



<td style="padding-left:1px;">

<table cellpadding="0" cellspacing="0" border="0" width="30">
<tr><td style="font-size:10px;width:30px;text-align:center;">
<?php 
if($legend_82!="none") {
echo $legend_82; }
else {
echo "&nbsp;";	
}
?>
</td></tr>
<tr><td>

<!--<img src="img/Toothchart/01.png" onclick="popup('popUpDiv','child14','childs20')" name="child14" id="child14" value="none"/>-->

<?php 

//var_dump($tooth_18);die();

if($tooth_14==0) { ?> 

<img src="img/Toothchart/01.png" /> <?php } else if($tooth_14<=9) { ?>

<img src="img/Toothchart/0<?php echo $tooth_14;?>.png"/><?php } else { ?>

<img src="img/Toothchart/<?php echo $tooth_14;?>.png"/><?php } ?>

</td></tr>

<tr><td style="text-align:center;">82</td></tr>

</table></td>



<td style="padding-left:1px;">

<table cellpadding="0" cellspacing="0" border="0" width="30">
<tr><td style="font-size:10px;width:30px;text-align:center;">
<?php 
if($legend_81!="none") {
echo $legend_81; }
else {
echo "&nbsp;";	
}
?>
</td></tr>
<tr><td>

<!--<img src="img/Toothchart/01.png" onclick="popup('popUpDiv','child15','childs21')" name="child15" id="child15" value="none"/>-->

<?php 

//var_dump($tooth_18);die();

if($tooth_15==0) { ?> 

<img src="img/Toothchart/01.png" /> <?php } else if($tooth_15<=9) { ?>

<img src="img/Toothchart/0<?php echo $tooth_15;?>.png"/><?php } else { ?>

<img src="img/Toothchart/<?php echo $tooth_15;?>.png"/><?php } ?>

</td></tr>

<tr><td style="text-align:center;">81</td></tr>

</table></td>





</tr></table>
</td>
<td>
<table cellpadding="0" cellspacing="0" border="0"><tr>

<td>

<table cellpadding="0" cellspacing="0" border="0" width="30">
<tr><td style="font-size:10px;width:30px;text-align:center;">
<?php 
if($legend_71!="none") {
echo $legend_71; }
else {
echo "&nbsp;";	
}
?>
</td></tr>
<tr><td> 

<!--<img src="img/Toothchart/01.png" onclick="popup('popUpDiv','child16','childs25')" name="child16" id="child16" value="none"/>-->

<?php 

//var_dump($tooth_18);die();

if($tooth_16==0) { ?> 

<img src="img/Toothchart/01.png" /> <?php } else if($tooth_16<=9) { ?>

<img src="img/Toothchart/0<?php echo $tooth_16;?>.png"/><?php } else { ?>

<img src="img/Toothchart/<?php echo $tooth_16;?>.png"/><?php } ?>

</td></tr>

<tr><td style="text-align:center;">71</td></tr>

</table></td>



<td style="padding-left:1px;">

<table cellpadding="0" cellspacing="0" border="0" width="30">
<tr><td style="font-size:10px;width:30px;text-align:center;">
<?php 
if($legend_72!="none") {
echo $legend_72; }
else {
echo "&nbsp;";	
}
?>
</td></tr>
<tr><td> 

<!--<img src="img/Toothchart/01.png" onclick="popup('popUpDiv','child17','childs26')" name="child17" id="child17" value="none"/>-->

<?php 

//var_dump($tooth_18);die();

if($tooth_17==0) { ?> 

<img src="img/Toothchart/01.png" /> <?php } else if($tooth_17<=9) { ?>

<img src="img/Toothchart/0<?php echo $tooth_17;?>.png"/><?php } else { ?>

<img src="img/Toothchart/<?php echo $tooth_17;?>.png"/><?php } ?>

</td></tr>

<tr><td style="text-align:center;">72</td></tr>

</table></td>



<td style="padding-left:1px;">

<table cellpadding="0" cellspacing="0" border="0" width="30">
<tr><td style="font-size:10px;width:30px;text-align:center;">
<?php 
if($legend_73!="none") {
echo $legend_73; }
else {
echo "&nbsp;";	
}
?>
</td></tr>
<tr><td>

<!--<img src="img/Toothchart/01.png" onclick="popup('popUpDiv','child18','childs27')" name="child18" id="child18" value="none"/>-->

<?php 

//var_dump($tooth_18);die();

if($tooth_18==0) { ?> 

<img src="img/Toothchart/01.png" /> <?php } else if($tooth_18<=9) { ?>

<img src="img/Toothchart/0<?php echo $tooth_18;?>.png"/><?php } else { ?>

<img src="img/Toothchart/<?php echo $tooth_18;?>.png"/><?php } ?>

</td></tr>

<tr><td style="text-align:center;">73</td></tr>

</table></td>



<td style="padding-left:1px;">

<table cellpadding="0" cellspacing="0" border="0" width="30">
<tr><td style="font-size:10px;width:30px;text-align:center;">
<?php 
if($legend_74!="none") {
echo $legend_74; }
else {
echo "&nbsp;";	
}
?>
</td></tr>
<tr><td>

<!--<img src="img/Toothchart/01.png" onclick="popup('popUpDiv','child19','childs28')" name="child19" id="child19" value="none"/>-->

<?php 

//var_dump($tooth_18);die();

if($tooth_19==0) { ?> 

<img src="img/Toothchart/01.png" /> <?php } else if($tooth_19<=9) { ?>

<img src="img/Toothchart/0<?php echo $tooth_19;?>.png"/><?php } else { ?>

<img src="img/Toothchart/<?php echo $tooth_19;?>.png"/><?php } ?>

</td></tr>

<tr><td style="text-align:center;">74</td></tr>

</table></td>



<td style="padding-left:1px;">

<table cellpadding="0" cellspacing="0" border="0" width="30">
<tr><td style="font-size:10px;width:30px;text-align:center;">
<?php 
if($legend_75!="none") {
echo $legend_75; }
else {
echo "&nbsp;";	
}
?>
</td></tr>
<tr><td>

<!--<img src="img/Toothchart/01.png" onclick="popup('popUpDiv','child20','childs29')" name="child20" id="child20" value="none"/>-->

<?php 

//var_dump($tooth_18);die();

if($tooth_20==0) { ?> 

<img src="img/Toothchart/01.png" /> <?php } else if($tooth_20<=9) { ?>

<img src="img/Toothchart/0<?php echo $tooth_20;?>.png"/><?php } else { ?>

<img src="img/Toothchart/<?php echo $tooth_20;?>.png"/><?php } ?>

</td></tr>

<tr><td style="text-align:center;">75</td></tr>

</table></td>



</tr></table>
</td>
</tr>

</table>