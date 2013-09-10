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

//var_dump($id);


$sqls="SELECT * FROM patient_adult_tooth WHERE patient_id=".$id." AND dentist_id='".$dentist_id."'";
$ress=mysql_query($sqls);
while($row=mysql_fetch_array($ress))
{
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

}

//var_dump($sqls);

?>
<table cellpadding="0" cellspacing="0" border="0">
<tr><td>
<table cellpadding="0" cellspacing="0" border="0">
<tr>

<td>
<table cellpadding="0" cellspacing="0" border="0" width="30"><tr><td style="text-align:center;">18</td></tr>
<tr><td>
<?php 
//var_dump($tooth_18);die();
if($tooth_18=="none") { ?> 
<img src="../img/Toothchart/01.png" /> <?php } else if($tooth_18<=9) { ?>
<img src="../img/Toothchart/0<?php echo $tooth_18;?>.png"/><?php } else { ?>
<img src="../img/Toothchart/<?php echo $tooth_18;?>.png"/><?php } ?>
</td>
</tr></table>
</td>

<td style="padding-left:1px;">
<table cellpadding="0" cellspacing="0" border="0" width="30"><tr><td style="text-align:center;">17</td></tr>
<tr><td>
<?php 
if($tooth_17=="none") { ?> 
<img src="../img/Toothchart/01.png" /> <?php } else if($tooth_17<=9) { ?>
<img src="../img/Toothchart/0<?php echo $tooth_17;?>.png"/><?php } else { ?>
<img src="../img/Toothchart/<?php echo $tooth_17;?>.png"/><?php } ?>
</td>
</tr></table>
</td>

<td style="padding-left:1px;">
<table cellpadding="0" cellspacing="0" border="0" width="30"><tr><td style="text-align:center;">16</td></tr>
<tr><td>
<?php
if($tooth_16=="none") { ?> 
<img src="../img/Toothchart/01.png" /> <?php } else if($tooth_16<=9) { ?>
<img src="../img/Toothchart/0<?php echo $tooth_16;?>.png"/><?php } else { ?>
<img src="../img/Toothchart/<?php echo $tooth_16;?>.png"/><?php } ?>
</td>
</tr></table>
</td>

<td style="padding-left:1px;">
<table cellpadding="0" cellspacing="0" border="0" width="30"><tr><td style="text-align:center;">15</td></tr>
<tr><td>
<?php
if($tooth_15=="none") { ?> 
<img src="../img/Toothchart/01.png" /> <?php } else if($tooth_15<=9) { ?>
<img src="../img/Toothchart/0<?php echo $tooth_15;?>.png"/><?php } else { ?>
<img src="../img/Toothchart/<?php echo $tooth_15;?>.png"/><?php } ?>
</td>
</tr></table>
</td>

<td style="padding-left:1px;">
<table cellpadding="0" cellspacing="0" border="0" width="30"><tr><td style="text-align:center;">14</td></tr>
<tr><td>
<?php
if($tooth_14=="none") { ?> 
<img src="../img/Toothchart/01.png" /> <?php } else if($tooth_14<=9) { ?>
<img src="../img/Toothchart/0<?php echo $tooth_14;?>.png"/><?php } else { ?>
<img src="../img/Toothchart/<?php echo $tooth_14;?>.png"/><?php } ?>
</td>
</tr></table>
</td>

<td style="padding-left:1px;">
<table cellpadding="0" cellspacing="0" border="0" width="30"><tr><td style="text-align:center;">13</td></tr>
<tr><td>
<?php if($tooth_13=="none") { ?> 
<img src="../img/Toothchart/01.png" /> <?php } else if($tooth_13<=9) { ?>
<img src="../img/Toothchart/0<?php echo $tooth_13;?>.png"/><?php } else { ?>
<img src="../img/Toothchart/<?php echo $tooth_13;?>.png"/><?php } ?>
</td>
</tr></table>
</td>

<td style="padding-left:1px;">
<table cellpadding="0" cellspacing="0" border="0" width="30"><tr><td style="text-align:center;">12</td></tr>
<tr><td>
<?php if($tooth_12=="none") { ?> 
<img src="../img/Toothchart/01.png" /> <?php } else if($tooth_12<=9) { ?>
<img src="../img/Toothchart/0<?php echo $tooth_12;?>.png"/><?php } else { ?>
<img src="../img/Toothchart/<?php echo $tooth_12;?>.png"/><?php } ?>
</td>
</tr></table>
</td>

<td style="padding-left:1px;">
<table cellpadding="0" cellspacing="0" border="0" width="30"><tr><td style="text-align:center;">11</td></tr>
<tr><td>
<?php if($tooth_11=="none") { ?> 
<img src="../img/Toothchart/01.png" /> <?php } else if($tooth_11<=9) { ?>
<img src="../img/Toothchart/0<?php echo $tooth_11;?>.png"/><?php } else { ?>
<img src="../img/Toothchart/<?php echo $tooth_11;?>.png"/><?php } ?>
</td>
</tr></table>
</td>

</tr></table>
</td>



<!--second set of teetch right--><td style="padding-left:20px;">

<table cellpadding="0" cellspacing="0" border="0"><tr>
<td> 
<td>
<table cellpadding="0" cellspacing="0" border="0" width="30"><tr><td style="text-align:center;">21</td></tr>
<tr><td>
<?php if($tooth_21=="none") { ?> 
<img src="../img/Toothchart/01.png" /> <?php } else if($tooth_21<=9) { ?>
<img src="../img/Toothchart/0<?php echo $tooth_21;?>.png"/><?php } else { ?>
<img src="../img/Toothchart/<?php echo $tooth_21;?>.png"/><?php } ?>
</td></tr></table>
</td>
<td style="padding-left:1px;">
<table cellpadding="0" cellspacing="0" border="0" width="30"><tr><td style="text-align:center;">22</td></tr>
<tr><td>
<?php if($tooth_22=="none") { ?> 
<img src="../img/Toothchart/01.png" /> <?php } else if($tooth_22<=9) { ?>
<img src="../img/Toothchart/0<?php echo $tooth_22;?>.png"/><?php } else { ?>
<img src="../img/Toothchart/<?php echo $tooth_22;?>.png"/><?php } ?>
</td></tr></table>
</td>
<td style="padding-left:1px;">
<table cellpadding="0" cellspacing="0" border="0" width="30"><tr><td style="text-align:center;">23</td></tr>
<tr><td>
<?php if($tooth_23=="none") { ?> 
<img src="../img/Toothchart/01.png" /> <?php } else if($tooth_23<=9) { ?>
<img src="../img/Toothchart/0<?php echo $tooth_23;?>.png"/><?php } else { ?>
<img src="../img/Toothchart/<?php echo $tooth_23;?>.png"/><?php } ?>
</td></tr></table>
</td>
<td style="padding-left:1px;">
<table cellpadding="0" cellspacing="0" border="0" width="30"><tr><td style="text-align:center;">24</td></tr>
<tr><td>
<?php if($tooth_24=="none") { ?> 
<img src="../img/Toothchart/01.png" /> <?php } else if($tooth_24<=9) { ?>
<img src="../img/Toothchart/0<?php echo $tooth_24;?>.png"/><?php } else { ?>
<img src="../img/Toothchart/<?php echo $tooth_24;?>.png"/><?php } ?>
</td></tr></table>
</td>
<td style="padding-left:1px;">
<table cellpadding="0" cellspacing="0" border="0" width="30"><tr><td style="text-align:center;">25</td></tr>
<tr><td>
<?php if($tooth_25=="none") { ?> 
<img src="../img/Toothchart/01.png" /> <?php } else if($tooth_25<=9) { ?>
<img src="../img/Toothchart/0<?php echo $tooth_25;?>.png"/><?php } else { ?>
<img src="../img/Toothchart/<?php echo $tooth_25;?>.png"/><?php } ?>
</td></tr></table>
</td>
<td style="padding-left:1px;">
<table cellpadding="0" cellspacing="0" border="0" width="30"><tr><td style="text-align:center;">26</td></tr>
<tr><td>
<?php if($tooth_26=="none") { ?> 
<img src="../img/Toothchart/01.png" /> <?php } else if($tooth_26<=9) { ?>
<img src="../img/Toothchart/0<?php echo $tooth_26;?>.png"/><?php } else { ?>
<img src="../img/Toothchart/<?php echo $tooth_26;?>.png"/><?php } ?>
</td></tr></table>
</td>
<td style="padding-left:1px;">
<table cellpadding="0" cellspacing="0" border="0" width="30"><tr><td style="text-align:center;">27</td></tr>
<tr><td>
<?php if($tooth_27=="none") { ?> 
<img src="../img/Toothchart/01.png" /> <?php } else if($tooth_27<=9) { ?>
<img src="../img/Toothchart/0<?php echo $tooth_27;?>.png"/><?php } else { ?>
<img src="../img/Toothchart/<?php echo $tooth_27;?>.png"/><?php } ?>
</td></tr></table>
</td>
<td style="padding-left:1px;">
<table cellpadding="0" cellspacing="0" border="0" width="30"><tr><td style="text-align:center;">28</td></tr>
<tr><td>
<?php if($tooth_28=="none") { ?> 
<img src="../img/Toothchart/01.png" /> <?php } else if($tooth_28<=9) { ?>
<img src="../img/Toothchart/0<?php echo $tooth_28;?>.png"/><?php } else { ?>
<img src="../img/Toothchart/<?php echo $tooth_28;?>.png"/><?php } ?>
</td></tr></table>
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
<tr><td>
<?php if($tooth_48=="none") { ?> 
<img src="../img/Toothchart/01.png" /> <?php } else if($tooth_48<=9) { ?>
<img src="../img/Toothchart/0<?php echo $tooth_48;?>.png"/><?php } else { ?>
<img src="../img/Toothchart/<?php echo $tooth_48;?>.png"/><?php } ?>
</td></tr>
<tr><td style="text-align:center;">48</td></tr>
</table></td>

<td style="padding-left:1px;">
<table cellpadding="0" cellspacing="0" border="0" width="30">
<tr><td>
<?php if($tooth_47=="none") { ?> 
<img src="../img/Toothchart/01.png" /> <?php } else if($tooth_47<=9) { ?>
<img src="../img/Toothchart/0<?php echo $tooth_47;?>.png"/><?php } else { ?>
<img src="../img/Toothchart/<?php echo $tooth_47;?>.png"/><?php } ?>
</td></tr>
<tr><td style="text-align:center;">47</td></tr>
</table></td>

<td style="padding-left:1px;">
<table cellpadding="0" cellspacing="0" border="0" width="30">
<tr><td>
<?php if($tooth_46=="none") { ?> 
<img src="../img/Toothchart/01.png" /> <?php } else if($tooth_46<=9) { ?>
<img src="../img/Toothchart/0<?php echo $tooth_46;?>.png"/><?php } else { ?>
<img src="../img/Toothchart/<?php echo $tooth_46;?>.png"/><?php } ?>
</td></tr>
<tr><td style="text-align:center;">46</td></tr>
</table></td>

<td style="padding-left:1px;">
<table cellpadding="0" cellspacing="0" border="0" width="30">
<tr><td>
<?php if($tooth_45=="none") { ?> 
<img src="../img/Toothchart/01.png" /> <?php } else if($tooth_45<=9) { ?>
<img src="../img/Toothchart/0<?php echo $tooth_45;?>.png"/><?php } else { ?>
<img src="../img/Toothchart/<?php echo $tooth_45;?>.png"/><?php } ?>
</td></tr>
<tr><td style="text-align:center;">45</td></tr>
</table></td>

<td style="padding-left:1px;">
<table cellpadding="0" cellspacing="0" border="0" width="30">
<tr><td>
<?php if($tooth_44=="none") { ?> 
<img src="../img/Toothchart/01.png" /> <?php } else if($tooth_44<=9) { ?>
<img src="../img/Toothchart/0<?php echo $tooth_44;?>.png"/><?php } else { ?>
<img src="../img/Toothchart/<?php echo $tooth_44;?>.png"/><?php } ?>
</td></tr>
<tr><td style="text-align:center;">44</td></tr>
</table></td>

<td style="padding-left:1px;">
<table cellpadding="0" cellspacing="0" border="0" width="30">
<tr><td>
<?php if($tooth_43=="none") { ?> 
<img src="../img/Toothchart/01.png" /> <?php } else if($tooth_43<=9) { ?>
<img src="../img/Toothchart/0<?php echo $tooth_43;?>.png"/><?php } else { ?>
<img src="../img/Toothchart/<?php echo $tooth_43;?>.png"/><?php } ?>
</td></tr>
<tr><td style="text-align:center;">43</td></tr>
</table></td>

<td style="padding-left:1px;">
<table cellpadding="0" cellspacing="0" border="0" width="30">
<tr><td>
<?php if($tooth_42=="none") { ?> 
<img src="../img/Toothchart/01.png" /> <?php } else if($tooth_42<=9) { ?>
<img src="../img/Toothchart/0<?php echo $tooth_42;?>.png"/><?php } else { ?>
<img src="../img/Toothchart/<?php echo $tooth_42;?>.png"/><?php } ?>
</td></tr>
<tr><td style="text-align:center;">42</td></tr>
</table></td>

<td style="padding-left:1px;">
<table cellpadding="0" cellspacing="0" border="0" width="30">
<tr><td>
<?php if($tooth_41=="none") { ?> 
<img src="../img/Toothchart/01.png" /> <?php } else if($tooth_41<=9) { ?>
<img src="../img/Toothchart/0<?php echo $tooth_41;?>.png"/><?php } else { ?>
<img src="../img/Toothchart/<?php echo $tooth_41;?>.png"/><?php } ?>
</td></tr>
<tr><td style="text-align:center;">41</td></tr>
</table></td>

</tr></table>
</td>

<!--second set of teetch right--><td style="padding-left:20px;padding-top:20px;">

<table cellpadding="0" cellspacing="0" border="0"><tr>
<td>
<table cellpadding="0" cellspacing="0" border="0" width="30">
<tr><td> 
<?php if($tooth_31=="none") { ?> 
<img src="../img/Toothchart/01.png" /> <?php } else if($tooth_31<=9) { ?>
<img src="../img/Toothchart/0<?php echo $tooth_31;?>.png"/><?php } else { ?>
<img src="../img/Toothchart/<?php echo $tooth_31;?>.png"/><?php } ?>
</td></tr>
<tr><td style="text-align:center;">31</td></tr>
</table></td>

<td style="padding-left:1px;">
<table cellpadding="0" cellspacing="0" border="0" width="30">
<tr><td> 
<?php if($tooth_32=="none") { ?> 
<img src="../img/Toothchart/01.png" /> <?php } else if($tooth_32<=9) { ?>
<img src="../img/Toothchart/0<?php echo $tooth_32;?>.png"/><?php } else { ?>
<img src="../img/Toothchart/<?php echo $tooth_32;?>.png"/><?php } ?>
</td></tr>
<tr><td style="text-align:center;">32</td></tr>
</table></td>

<td style="padding-left:1px;">
<table cellpadding="0" cellspacing="0" border="0" width="30">
<tr><td>
<?php if($tooth_33=="none") { ?> 
<img src="../img/Toothchart/01.png" /> <?php } else if($tooth_33<=9) { ?>
<img src="../img/Toothchart/0<?php echo $tooth_33;?>.png"/><?php } else { ?>
<img src="../img/Toothchart/<?php echo $tooth_33;?>.png"/><?php } ?>
</td></tr>
<tr><td style="text-align:center;">33</td></tr>
</table></td>

<td style="padding-left:1px;">
<table cellpadding="0" cellspacing="0" border="0" width="30">
<tr><td>
<?php if($tooth_34=="none") { ?> 
<img src="../img/Toothchart/01.png" /> <?php } else if($tooth_34<=9) { ?>
<img src="../img/Toothchart/0<?php echo $tooth_34;?>.png"/><?php } else { ?>
<img src="../img/Toothchart/<?php echo $tooth_34;?>.png"/><?php } ?>
</td></tr>
<tr><td style="text-align:center;">34</td></tr>
</table></td>

<td style="padding-left:1px;">
<table cellpadding="0" cellspacing="0" border="0" width="30">
<tr><td>
<?php if($tooth_35=="none") { ?> 
<img src="../img/Toothchart/01.png" /> <?php } else if($tooth_35<=9) { ?>
<img src="../img/Toothchart/0<?php echo $tooth_35;?>.png"/><?php } else { ?>
<img src="../img/Toothchart/<?php echo $tooth_35;?>.png"/><?php } ?>
</td></tr>
<tr><td style="text-align:center;">35</td></tr>
</table></td>

<td style="padding-left:1px;">
<table cellpadding="0" cellspacing="0" border="0" width="30">
<tr><td>
<?php if($tooth_36=="none") { ?> 
<img src="../img/Toothchart/01.png" /> <?php } else if($tooth_36<=9) { ?>
<img src="../img/Toothchart/0<?php echo $tooth_36;?>.png"/><?php } else { ?>
<img src="../img/Toothchart/<?php echo $tooth_36;?>.png"/><?php } ?>
</td></tr>
<tr><td style="text-align:center;">36</td></tr>
</table></td>

<td style="padding-left:1px;">
<table cellpadding="0" cellspacing="0" border="0" width="30">
<tr><td>
<?php if($tooth_37=="none") { ?> 
<img src="../img/Toothchart/01.png" /> <?php } else if($tooth_37<=9) { ?>
<img src="../img/Toothchart/0<?php echo $tooth_37;?>.png"/><?php } else { ?>
<img src="../img/Toothchart/<?php echo $tooth_37;?>.png"/><?php } ?>
</td></tr>
<tr><td style="text-align:center;">37</td></tr>
</table></td>

<td style="padding-left:1px;">
<table cellpadding="0" cellspacing="0" border="0" width="30">
<tr><td>
<?php if($tooth_38=="none") { ?> 
<img src="../img/Toothchart/01.png" /> <?php } else if($tooth_38<=9) { ?>
<img src="../img/Toothchart/0<?php echo $tooth_38;?>.png"/><?php } else { ?>
<img src="../img/Toothchart/<?php echo $tooth_38;?>.png"/><?php } ?>
</td></tr>
<tr><td style="text-align:center;">38</td></tr>
</table></td>

</tr></table>

<!--second set of teetch right--></td>

</tr>

</table>