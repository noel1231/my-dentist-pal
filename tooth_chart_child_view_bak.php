<?php 

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



}











?>



<?php /*



<table cellpadding="0" cellspacing="0" border="0">

<tr><td>

<table cellpadding="0" cellspacing="0" border="0">

<tr>



<td>

<table cellpadding="0" cellspacing="0" border="0" width="30"><tr><td style="text-align:center;">55</td></tr>

<tr><td>

<?php 

//var_dump($tooth_18);die();

if($tooth_1=="none") { ?> 

<img src="img/Toothchart/01.png" /> <?php } else if($tooth_1<=9) { ?>

<img src="img/Toothchart/0<?php echo $tooth_1;?>.png"/><?php } else { ?>

<img src="img/Toothchart/<?php echo $tooth_1;?>.png"/><?php } ?>

</td>

</tr></table>

</td>



<td style="padding-left:1px;">

<table cellpadding="0" cellspacing="0" border="0" width="30"><tr><td style="text-align:center;">54</td></tr>

<tr><td>

<?php 

if($tooth_2=="none") { ?> 

<img src="img/Toothchart/01.png" /> <?php } else if($tooth_2<=9) { ?>

<img src="img/Toothchart/0<?php echo $tooth_2;?>.png"/><?php } else { ?>

<img src="img/Toothchart/<?php echo $tooth_2;?>.png"/><?php } ?>

</td>

</tr></table>

</td>



<td style="padding-left:1px;">

<table cellpadding="0" cellspacing="0" border="0" width="30"><tr><td style="text-align:center;">53</td></tr>

<tr><td>

<?php

if($tooth_3=="none") { ?> 

<img src="img/Toothchart/01.png" /> <?php } else if($tooth_3<=9) { ?>

<img src="img/Toothchart/0<?php echo $tooth_3;?>.png"/><?php } else { ?>

<img src="img/Toothchart/<?php echo $tooth_3;?>.png"/><?php } ?>

</td>

</tr></table>

</td>



<td style="padding-left:1px;">

<table cellpadding="0" cellspacing="0" border="0" width="30"><tr><td style="text-align:center;">52</td></tr>

<tr><td>

<?php

if($tooth_4=="none") { ?> 

<img src="img/Toothchart/01.png" /> <?php } else if($tooth_4<=9) { ?>

<img src="img/Toothchart/0<?php echo $tooth_4;?>.png"/><?php } else { ?>

<img src="img/Toothchart/<?php echo $tooth_4;?>.png"/><?php } ?>

</td>

</tr></table>

</td>



<td style="padding-left:1px;">

<table cellpadding="0" cellspacing="0" border="0" width="30"><tr><td style="text-align:center;">51</td></tr>

<tr><td>

<?php

if($tooth_5=="none") { ?> 

<img src="img/Toothchart/01.png" /> <?php } else if($tooth_5<=9) { ?>

<img src="img/Toothchart/0<?php echo $tooth_5;?>.png"/><?php } else { ?>

<img src="img/Toothchart/<?php echo $tooth_5;?>.png"/><?php } ?>

</td>

</tr></table>

</td>





<!--second set of teetch right--><td style="padding-left:20px;">



<table cellpadding="0" cellspacing="0" border="0"><tr>

<td> 

<td>

<table cellpadding="0" cellspacing="0" border="0" width="30"><tr><td style="text-align:center;">61</td></tr>

<tr><td>

<?php if($tooth_6=="none") { ?> 

<img src="img/Toothchart/01.png" /> <?php } else if($tooth_6<=9) { ?>

<img src="img/Toothchart/0<?php echo $tooth_6;?>.png"/><?php } else { ?>

<img src="img/Toothchart/<?php echo $tooth_6;?>.png"/><?php } ?>

</td></tr></table>

</td>

<td style="padding-left:1px;">

<table cellpadding="0" cellspacing="0" border="0" width="30"><tr><td style="text-align:center;">62</td></tr>

<tr><td>

<?php if($tooth_7=="none") { ?> 

<img src="img/Toothchart/01.png" /> <?php } else if($tooth_7<=9) { ?>

<img src="img/Toothchart/0<?php echo $tooth_7;?>.png"/><?php } else { ?>

<img src="img/Toothchart/<?php echo $tooth_7;?>.png"/><?php } ?>

</td></tr></table>

</td>

<td style="padding-left:1px;">

<table cellpadding="0" cellspacing="0" border="0" width="30"><tr><td style="text-align:center;">63</td></tr>

<tr><td>

<?php if($tooth_8=="none") { ?> 

<img src="img/Toothchart/01.png" /> <?php } else if($tooth_8<=9) { ?>

<img src="img/Toothchart/0<?php echo $tooth_8;?>.png"/><?php } else { ?>

<img src="img/Toothchart/<?php echo $tooth_8;?>.png"/><?php } ?>

</td></tr></table>

</td>

<td style="padding-left:1px;">

<table cellpadding="0" cellspacing="0" border="0" width="30"><tr><td style="text-align:center;">64</td></tr>

<tr><td>

<?php if($tooth_9=="none") { ?> 

<img src="img/Toothchart/01.png" /> <?php } else if($tooth_9<=9) { ?>

<img src="img/Toothchart/0<?php echo $tooth_9;?>.png"/><?php } else { ?>

<img src="img/Toothchart/<?php echo $tooth_9;?>.png"/><?php } ?>

</td></tr></table>

</td>

<td style="padding-left:1px;">

<table cellpadding="0" cellspacing="0" border="0" width="30"><tr><td style="text-align:center;">65</td></tr>

<tr><td>

<?php if($tooth_10=="none") { ?> 

<img src="img/Toothchart/01.png" /> <?php } else if($tooth_10<=9) { ?>

<img src="img/Toothchart/0<?php echo $tooth_10;?>.png"/><?php } else { ?>

<img src="img/Toothchart/<?php echo $tooth_10;?>.png"/><?php } ?>

</td></tr></table>

</td> </tr></table>



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

<tr><td>

<?php if($tooth_11=="none") { ?> 

<img src="img/Toothchart/01.png" /> <?php } else if($tooth_11<=9) { ?>

<img src="img/Toothchart/0<?php echo $tooth_11;?>.png"/><?php } else { ?>

<img src="img/Toothchart/<?php echo $tooth_11;?>.png"/><?php } ?>

</td></tr>

<tr><td style="text-align:center;">85</td></tr>

</table></td>



<td style="padding-left:1px;">

<table cellpadding="0" cellspacing="0" border="0" width="30">

<tr><td>

<?php if($tooth_12=="none") { ?> 

<img src="img/Toothchart/01.png" /> <?php } else if($tooth_12<=9) { ?>

<img src="img/Toothchart/0<?php echo $tooth_12;?>.png"/><?php } else { ?>

<img src="img/Toothchart/<?php echo $tooth_12;?>.png"/><?php } ?>

</td></tr>

<tr><td style="text-align:center;">84</td></tr>

</table></td>



<td style="padding-left:1px;">

<table cellpadding="0" cellspacing="0" border="0" width="30">

<tr><td>

<?php if($tooth_13=="none") { ?> 

<img src="img/Toothchart/01.png" /> <?php } else if($tooth_13<=9) { ?>

<img src="img/Toothchart/0<?php echo $tooth_13;?>.png"/><?php } else { ?>

<img src="img/Toothchart/<?php echo $tooth_13;?>.png"/><?php } ?>

</td></tr>

<tr><td style="text-align:center;">83</td></tr>

</table></td>



<td style="padding-left:1px;">

<table cellpadding="0" cellspacing="0" border="0" width="30">

<tr><td>

<?php if($tooth_14=="none") { ?> 

<img src="img/Toothchart/01.png" /> <?php } else if($tooth_14<=9) { ?>

<img src="img/Toothchart/0<?php echo $tooth_14;?>.png"/><?php } else { ?>

<img src="img/Toothchart/<?php echo $tooth_14;?>.png"/><?php } ?>

</td></tr>

<tr><td style="text-align:center;">82</td></tr>

</table></td>



<td style="padding-left:1px;">

<table cellpadding="0" cellspacing="0" border="0" width="30">

<tr><td>

<?php if($tooth_15=="none") { ?> 

<img src="img/Toothchart/01.png" /> <?php } else if($tooth_15<=9) { ?>

<img src="img/Toothchart/0<?php echo $tooth_15;?>.png"/><?php } else { ?>

<img src="img/Toothchart/<?php echo $tooth_15;?>.png"/><?php } ?>

</td></tr>

<tr><td style="text-align:center;">81</td></tr>

</table></td>



</tr></table>

</td>



<!--second set of teetch right--><td style="padding-left:20px;padding-top:20px;">



<table cellpadding="0" cellspacing="0" border="0"><tr>

<td>

<table cellpadding="0" cellspacing="0" border="0" width="30">

<tr><td> 

<?php if($tooth_16=="none") { ?> 

<img src="img/Toothchart/01.png" /> <?php } else if($tooth_16<=9) { ?>

<img src="img/Toothchart/0<?php echo $tooth_16;?>.png"/><?php } else { ?>

<img src="img/Toothchart/<?php echo $tooth_16;?>.png"/><?php } ?>

</td></tr>

<tr><td style="text-align:center;">71</td></tr>

</table></td>



<td style="padding-left:1px;">

<table cellpadding="0" cellspacing="0" border="0" width="30">

<tr><td> 

<?php if($tooth_17=="none") { ?> 

<img src="img/Toothchart/01.png" /> <?php } else if($tooth_17<=9) { ?>

<img src="img/Toothchart/0<?php echo $tooth_17;?>.png"/><?php } else { ?>

<img src="img/Toothchart/<?php echo $tooth_17;?>.png"/><?php } ?>

</td></tr>

<tr><td style="text-align:center;">72</td></tr>

</table></td>



<td style="padding-left:1px;">

<table cellpadding="0" cellspacing="0" border="0" width="30">

<tr><td>

<?php if($tooth_18=="none") { ?> 

<img src="img/Toothchart/01.png" /> <?php } else if($tooth_18<=9) { ?>

<img src="img/Toothchart/0<?php echo $tooth_18;?>.png"/><?php } else { ?>

<img src="img/Toothchart/<?php echo $tooth_18;?>.png"/><?php } ?>

</td></tr>

<tr><td style="text-align:center;">73</td></tr>

</table></td>



<td style="padding-left:1px;">

<table cellpadding="0" cellspacing="0" border="0" width="30">

<tr><td>

<?php if($tooth_19=="none") { ?> 

<img src="img/Toothchart/01.png" /> <?php } else if($tooth_19<=9) { ?>

<img src="img/Toothchart/0<?php echo $tooth_19;?>.png"/><?php } else { ?>

<img src="img/Toothchart/<?php echo $tooth_19;?>.png"/><?php } ?>

</td></tr>

<tr><td style="text-align:center;">74</td></tr>

</table></td>



<td style="padding-left:1px;">

<table cellpadding="0" cellspacing="0" border="0" width="30">

<tr><td>

<?php if($tooth_20=="none") { ?> 

<img src="img/Toothchart/01.png" /> <?php } else if($tooth_20<=9) { ?>

<img src="img/Toothchart/0<?php echo $tooth_20;?>.png"/><?php } else { ?>

<img src="img/Toothchart/<?php echo $tooth_20;?>.png"/><?php } ?>

</td></tr>

<tr><td style="text-align:center;">75</td></tr>

</table></td>



</tr></table>



<!--second set of teetch right--></td>



</tr>



</table>*/?>





<table cellpadding="0" cellspacing="0" border="0" class="toothtable"><tr><td>

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

</td></tr></table>

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

</td></tr></table>

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

</td></tr></table>

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

</td></tr></table>

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

</td></tr></table>

</td>

</tr></table></td>



<!--second set of teetch right--><td style="padding-left:20px;">



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

</td></tr></table>

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

</td></tr></table>

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

</td></tr></table>

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

</td></tr></table>

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

</td></tr></table>

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





</tr></table></td>



<!--second set of teetch right--><td style="padding-left:20px;padding-top:20px;">



<table cellpadding="0" cellspacing="0" border="0"><tr>

<td>

<table cellpadding="0" cellspacing="0" border="0" width="30">

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



<!--second set of teetch right--></td>

</tr>



<tr><td>



</td></tr>



</table>

















