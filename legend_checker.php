<?php

include('config.php');

$id=00000000078;

$sql=mysql_query("SELECT * FROM patient_tooth_chart_extra_adult WHERE patient_id='".$id."'");
while($row=mysql_fetch_array($sql)) {
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
?>



<table cellpadding="0" cellspacing="0" border="0">
<tr>
<td>Select a tooth classification</td>
</tr>

<tr><td style="padding-top:4px;">
<table cellpadding="0" cellspacing="0" border="0">
<tr>
<td>Tooth # 11</td>
<td style="padding-left:8px;">
<select name="legend_11">
<option value="none">--Select one--</option>
<option value="AM">Amalgam Filling</option>
<option value="CO">Composite Filling</option>
<option value="ON">Onlay</option>
<option value="IN">Inlay</option>
<option value="PJCF">Plastic Jacket Crown Filling</option>
<option value="PFMC">Porcelain Fuse with Metal Crown</option>
<option value="RF">Root Frgament</option>
<option value="MT">Missing Teeth</option>
<option value="EX">Exo</option>
</select>
</td></tr></table>

</td>

<td style="padding-left:6px;padding-top:4px;">
<table cellpadding="0" cellspacing="0" border="0">
<tr>
<td>Tooth # 21</td>
<td style="padding-left:8px;">
<select name="legend_21">
<option value="none">--Select one--</option>
<option value="AM">Amalgam Filling</option>
<option value="CO">Composite Filling</option>
<option value="ON">Onlay</option>
<option value="IN">Inlay</option>
<option value="PJCF">Plastic Jacket Crown Filling</option>
<option value="PFMC">Porcelain Fuse with Metal Crown</option>
<option value="RF">Root Frgament</option>
<option value="MT">Missing Teeth</option>
<option value="EX">Exo</option>
</select>
</td></tr></table>
</td>

</tr>

<tr><td style="padding-top:4px;">
<table cellpadding="0" cellspacing="0" border="0">
<tr>
<td>Tooth # 12</td>
<td style="padding-left:8px;">
<select name="legend_12">
<option value="none">--Select one--</option>
<option value="AM">Amalgam Filling</option>
<option value="CO">Composite Filling</option>
<option value="ON">Onlay</option>
<option value="IN">Inlay</option>
<option value="PJCF">Plastic Jacket Crown Filling</option>
<option value="PFMC">Porcelain Fuse with Metal Crown</option>
<option value="RF">Root Frgament</option>
<option value="MT">Missing Teeth</option>
<option value="EX">Exo</option>
</select>
</td></tr></table>

</td>

<td style="padding-left:6px;padding-top:4px;">
<table cellpadding="0" cellspacing="0" border="0">
<tr>
<td>Tooth # 22</td>
<td style="padding-left:8px;">
<select name="legend_22">
<option value="none">--Select one--</option>
<option value="AM">Amalgam Filling</option>
<option value="CO">Composite Filling</option>
<option value="ON">Onlay</option>
<option value="IN">Inlay</option>
<option value="PJCF">Plastic Jacket Crown Filling</option>
<option value="PFMC">Porcelain Fuse with Metal Crown</option>
<option value="RF">Root Frgament</option>
<option value="MT">Missing Teeth</option>
<option value="EX">Exo</option>
</select>
</td></tr></table>
</td>

</tr>

<tr><td style="padding-top:4px;">
<table cellpadding="0" cellspacing="0" border="0">
<tr>
<td>Tooth # 13</td>
<td style="padding-left:8px;">
<select name="legend_13">
<option value="none">--Select one--</option>
<option value="AM">Amalgam Filling</option>
<option value="CO">Composite Filling</option>
<option value="ON">Onlay</option>
<option value="IN">Inlay</option>
<option value="PJCF">Plastic Jacket Crown Filling</option>
<option value="PFMC">Porcelain Fuse with Metal Crown</option>
<option value="RF">Root Frgament</option>
<option value="MT">Missing Teeth</option>
<option value="EX">Exo</option>
</select>
</td></tr></table>

</td>

<td style="padding-left:6px;padding-top:4px;">
<table cellpadding="0" cellspacing="0" border="0">
<tr>
<td>Tooth # 23</td>
<td style="padding-left:8px;">
<select name="legend_23">
<option value="none">--Select one--</option>
<option value="AM">Amalgam Filling</option>
<option value="CO">Composite Filling</option>
<option value="ON">Onlay</option>
<option value="IN">Inlay</option>
<option value="PJCF">Plastic Jacket Crown Filling</option>
<option value="PFMC">Porcelain Fuse with Metal Crown</option>
<option value="RF">Root Frgament</option>
<option value="MT">Missing Teeth</option>
<option value="EX">Exo</option>
</select>
</td></tr></table>
</td>

</tr>

<tr><td style="padding-top:4px;">
<table cellpadding="0" cellspacing="0" border="0">
<tr>
<td>Tooth # 14</td>
<td style="padding-left:8px;">
<select name="legend_14">
<option value="none">--Select one--</option>
<option value="AM">Amalgam Filling</option>
<option value="CO">Composite Filling</option>
<option value="ON">Onlay</option>
<option value="IN">Inlay</option>
<option value="PJCF">Plastic Jacket Crown Filling</option>
<option value="PFMC">Porcelain Fuse with Metal Crown</option>
<option value="RF">Root Frgament</option>
<option value="MT">Missing Teeth</option>
<option value="EX">Exo</option>
</select>
</td></tr></table>

</td>

<td style="padding-left:6px;padding-top:4px;">
<table cellpadding="0" cellspacing="0" border="0">
<tr>
<td>Tooth # 24</td>
<td style="padding-left:8px;">
<select name="legend_24">
<option value="none">--Select one--</option>
<option value="AM">Amalgam Filling</option>
<option value="CO">Composite Filling</option>
<option value="ON">Onlay</option>
<option value="IN">Inlay</option>
<option value="PJCF">Plastic Jacket Crown Filling</option>
<option value="PFMC">Porcelain Fuse with Metal Crown</option>
<option value="RF">Root Frgament</option>
<option value="MT">Missing Teeth</option>
<option value="EX">Exo</option>
</select>
</td></tr></table>
</td>

</tr>

<tr><td style="padding-top:4px;">
<table cellpadding="0" cellspacing="0" border="0">
<tr>
<td>Tooth # 15</td>
<td style="padding-left:8px;">
<select name="legend_15">
<option value="none">--Select one--</option>
<option value="AM">Amalgam Filling</option>
<option value="CO">Composite Filling</option>
<option value="ON">Onlay</option>
<option value="IN">Inlay</option>
<option value="PJCF">Plastic Jacket Crown Filling</option>
<option value="PFMC">Porcelain Fuse with Metal Crown</option>
<option value="RF">Root Frgament</option>
<option value="MT">Missing Teeth</option>
<option value="EX">Exo</option>
</select>
</td></tr></table>

</td>

<td style="padding-left:6px;padding-top:4px;">
<table cellpadding="0" cellspacing="0" border="0">
<tr>
<td>Tooth # 25</td>
<td style="padding-left:8px;">
<select name="legend_25">
<option value="none">--Select one--</option>
<option value="AM">Amalgam Filling</option>
<option value="CO">Composite Filling</option>
<option value="ON">Onlay</option>
<option value="IN">Inlay</option>
<option value="PJCF">Plastic Jacket Crown Filling</option>
<option value="PFMC">Porcelain Fuse with Metal Crown</option>
<option value="RF">Root Frgament</option>
<option value="MT">Missing Teeth</option>
<option value="EX">Exo</option>
</select>
</td></tr></table>
</td>

</tr>


<tr><td style="padding-top:4px;">
<table cellpadding="0" cellspacing="0" border="0">
<tr>
<td>Tooth # 16</td>
<td style="padding-left:8px;">
<select name="legend_16">
<option value="none">--Select one--</option>
<option value="AM">Amalgam Filling</option>
<option value="CO">Composite Filling</option>
<option value="ON">Onlay</option>
<option value="IN">Inlay</option>
<option value="PJCF">Plastic Jacket Crown Filling</option>
<option value="PFMC">Porcelain Fuse with Metal Crown</option>
<option value="RF">Root Frgament</option>
<option value="MT">Missing Teeth</option>
<option value="EX">Exo</option>
</select>
</td></tr></table>

</td>

<td style="padding-left:6px;padding-top:4px;">
<table cellpadding="0" cellspacing="0" border="0">
<tr>
<td>Tooth # 26</td>
<td style="padding-left:8px;">
<select name="legend_26">
<option value="none">--Select one--</option>
<option value="AM">Amalgam Filling</option>
<option value="CO">Composite Filling</option>
<option value="ON">Onlay</option>
<option value="IN">Inlay</option>
<option value="PJCF">Plastic Jacket Crown Filling</option>
<option value="PFMC">Porcelain Fuse with Metal Crown</option>
<option value="RF">Root Frgament</option>
<option value="MT">Missing Teeth</option>
<option value="EX">Exo</option>
</select>
</td></tr></table>
</td>

</tr>

<tr><td style="padding-top:4px;">
<table cellpadding="0" cellspacing="0" border="0">
<tr>
<td>Tooth # 17</td>
<td style="padding-left:8px;">
<select name="legend_17">
<option value="none">--Select one--</option>
<option value="AM">Amalgam Filling</option>
<option value="CO">Composite Filling</option>
<option value="ON">Onlay</option>
<option value="IN">Inlay</option>
<option value="PJCF">Plastic Jacket Crown Filling</option>
<option value="PFMC">Porcelain Fuse with Metal Crown</option>
<option value="RF">Root Frgament</option>
<option value="MT">Missing Teeth</option>
<option value="EX">Exo</option>
</select>
</td></tr></table>

</td>

<td style="padding-left:6px;padding-top:4px;">
<table cellpadding="0" cellspacing="0" border="0">
<tr>
<td>Tooth # 27</td>
<td style="padding-left:8px;">
<select name="legend_27">
<option value="none">--Select one--</option>
<option value="AM">Amalgam Filling</option>
<option value="CO">Composite Filling</option>
<option value="ON">Onlay</option>
<option value="IN">Inlay</option>
<option value="PJCF">Plastic Jacket Crown Filling</option>
<option value="PFMC">Porcelain Fuse with Metal Crown</option>
<option value="RF">Root Frgament</option>
<option value="MT">Missing Teeth</option>
<option value="EX">Exo</option>
</select>
</td></tr></table>
</td>

</tr>

<tr><td style="padding-top:4px;">
<table cellpadding="0" cellspacing="0" border="0">
<tr>
<td>Tooth # 18</td>
<td style="padding-left:8px;">
<select name="legend_18">
<option value="none">--Select one--</option>
<option value="AM">Amalgam Filling</option>
<option value="CO">Composite Filling</option>
<option value="ON">Onlay</option>
<option value="IN">Inlay</option>
<option value="PJCF">Plastic Jacket Crown Filling</option>
<option value="PFMC">Porcelain Fuse with Metal Crown</option>
<option value="RF">Root Frgament</option>
<option value="MT">Missing Teeth</option>
<option value="EX">Exo</option>
</select>
</td></tr></table>

</td>

<td style="padding-left:6px;padding-top:4px;">
<table cellpadding="0" cellspacing="0" border="0">
<tr>
<td>Tooth # 28</td>
<td style="padding-left:8px;">
<select name="legend_28">
<option value="none">--Select one--</option>
<option value="AM">Amalgam Filling</option>
<option value="CO">Composite Filling</option>
<option value="ON">Onlay</option>
<option value="IN">Inlay</option>
<option value="PJCF">Plastic Jacket Crown Filling</option>
<option value="PFMC">Porcelain Fuse with Metal Crown</option>
<option value="RF">Root Frgament</option>
<option value="MT">Missing Teeth</option>
<option value="EX">Exo</option>
</select>
</td></tr></table>
</td>

</tr>


</table>


