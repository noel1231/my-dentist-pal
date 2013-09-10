<?php
session_start();
//var_dump($_SESSION);die();
if(!$_SESSION["id"])
{
    //Do not show protected data, redirect to login...
    header('Location: dentist_login.php');
}
include('config.php');

$id=0;


	
$id=$_GET['pass'];
//var_dump($id);


$sql="SELECT * FROM patient_list WHERE id=".$id."";
$res=mysql_query($sql);
while($row=mysql_fetch_array($res))
{
$name=$row["patient_name"];	
}



if(isset($_POST['adult']))
{
$id=mysql_real_escape_string($_POST['pt_id']);
$val=1;
$sql="UPDATE patient_list SET what_chart='".$val."' WHERE id=".$id."";
$res=mysql_query($sql);

$sql2="SELECT patient_name FROM patient_list WHERE id=".$id."";
$res2=mysql_query($sql2);
while($row=mysql_fetch_array($res2))
{$name=$row["patient_name"];}
}

if(isset($_POST['child']))
{
$id=mysql_real_escape_string($_POST['pt_id']);
//var_dump($id);
$val=2;
$sql="UPDATE patient_list SET what_chart='".$val."' WHERE id=".$id."";
$res=mysql_query($sql);

$sql2="SELECT patient_name FROM patient_list WHERE id=".$id."";
$res2=mysql_query($sql2);
while($row=mysql_fetch_array($res2))
{$name=$row["patient_name"];}
}

if(isset($_POST['save']))
{
$id=mysql_real_escape_string($_POST['pt_id']);
$tooth1=mysql_real_escape_string($_POST['newvalue']);
$tooth2=mysql_real_escape_string($_POST['newvalue1']);
$tooth3=mysql_real_escape_string($_POST['newvalue2']);
$tooth4=mysql_real_escape_string($_POST['newvalue3']);
$tooth5=mysql_real_escape_string($_POST['newvalue4']);
$tooth6=mysql_real_escape_string($_POST['newvalue5']);
$tooth7=mysql_real_escape_string($_POST['newvalue6']);
$tooth8=mysql_real_escape_string($_POST['newvalue7']);

$tooth9=mysql_real_escape_string($_POST['newvalue8']);
$tooth10=mysql_real_escape_string($_POST['newvalue9']);
$tooth11=mysql_real_escape_string($_POST['newvalue10']);
$tooth12=mysql_real_escape_string($_POST['newvalue11']);
$tooth13=mysql_real_escape_string($_POST['newvalue12']);
$tooth14=mysql_real_escape_string($_POST['newvalue13']);
$tooth15=mysql_real_escape_string($_POST['newvalue14']);
$tooth16=mysql_real_escape_string($_POST['newvalue15']);

$tooth17=mysql_real_escape_string($_POST['newvalue16']);
$tooth18=mysql_real_escape_string($_POST['newvalue17']);
$tooth19=mysql_real_escape_string($_POST['newvalue18']);
$tooth20=mysql_real_escape_string($_POST['newvalue19']);
$tooth21=mysql_real_escape_string($_POST['newvalue20']);
$tooth22=mysql_real_escape_string($_POST['newvalue21']);
$tooth23=mysql_real_escape_string($_POST['newvalue22']);
$tooth24=mysql_real_escape_string($_POST['newvalue23']);

$tooth25=mysql_real_escape_string($_POST['newvalue24']);
$tooth26=mysql_real_escape_string($_POST['newvalue25']);
$tooth27=mysql_real_escape_string($_POST['newvalue26']);
$tooth28=mysql_real_escape_string($_POST['newvalue27']);
$tooth29=mysql_real_escape_string($_POST['newvalue28']);
$tooth30=mysql_real_escape_string($_POST['newvalue29']);
$tooth31=mysql_real_escape_string($_POST['newvalue30']);
$tooth32=mysql_real_escape_string($_POST['newvalue31']);


$child1=mysql_real_escape_string($_POST['childvalue']);
$child2=mysql_real_escape_string($_POST['childvalue1']);
$child3=mysql_real_escape_string($_POST['childvalue2']);
$child4=mysql_real_escape_string($_POST['childvalue3']);
$child5=mysql_real_escape_string($_POST['childvalue4']);

$child6=mysql_real_escape_string($_POST['childvalue8']);
$child7=mysql_real_escape_string($_POST['childvalue9']);
$child8=mysql_real_escape_string($_POST['childvalue10']);
$child9=mysql_real_escape_string($_POST['childvalue11']);
$child10=mysql_real_escape_string($_POST['childvalue12']);

$child11=mysql_real_escape_string($_POST['childvalue16']);
$child12=mysql_real_escape_string($_POST['childvalue17']);
$child13=mysql_real_escape_string($_POST['childvalue18']);
$child14=mysql_real_escape_string($_POST['childvalue19']);
$child15=mysql_real_escape_string($_POST['childvalue20']);

$child16=mysql_real_escape_string($_POST['childvalue24']);
$child17=mysql_real_escape_string($_POST['childvalue25']);
$child18=mysql_real_escape_string($_POST['childvalue26']);
$child19=mysql_real_escape_string($_POST['childvalue27']);
$child20=mysql_real_escape_string($_POST['childvalue28']);

$remark=mysql_real_escape_string($_POST['remarks']);

$chart_name=mysql_real_escape_string($_POST['chart_name']);
$date=date('d/m/Y');
//var_dump($date);die();
$sql="SELECT * FROM patient_list WHERE id=".$id."";
$res=mysql_query($sql);

while($row=mysql_fetch_array($res))
{$name=$row['patient_name'];
$what_chart=$row['what_chart'];
$tooth_checker=$row['tooth_checker'];
}
//if($res)
//{
/*$sql="UPDATE patient_adult_tooth SET 
patient_id='".$id."',
tooth18='".$tooth1."',
tooth17='".$tooth2."',
tooth16='".$tooth3."',
tooth15='".$tooth4."',
tooth14='".$tooth5."',
tooth13='".$tooth6."',
tooth12='".$tooth7."',
tooth11='".$tooth8."'
WHERE id=".$id."";	
$res=mysql_query($sql);
}
else {*/
//var_dump($tooth_checker);die();
if($tooth_checker=="no") {
	if($what_chart==1) {
$sql="INSERT INTO patient_adult_tooth 
(patient_id,
 tooth_18,
tooth_17,
tooth_16,
tooth_15,
tooth_14,
tooth_13,
tooth_12,
tooth_11,
tooth_21,
tooth_22,
tooth_23,
tooth_24,
tooth_25,
tooth_26,
tooth_27,
tooth_28,
tooth_41,
tooth_42,
tooth_43,
tooth_44,
tooth_45,
tooth_46,
tooth_47,
tooth_48,
tooth_31,
tooth_32,
tooth_33,
tooth_34,
tooth_35,
tooth_36,
tooth_37,
tooth_38,
tooth_chart_name,
tooth_chart_date,
tooth_remarks)
VALUES
('$id',
 '$tooth1',
 '$tooth2',
 '$tooth3',
 '$tooth4',
 '$tooth5',
 '$tooth6',
 '$tooth7',
 '$tooth8',
 '$tooth9',
 '$tooth10',
 '$tooth11',
 '$tooth12',
 '$tooth13',
 '$tooth14',
 '$tooth15',
 '$tooth16',
 '$tooth24',
 '$tooth23',
 '$tooth22',
 '$tooth21',
 '$tooth20',
 '$tooth19',
 '$tooth18',
 '$tooth17',
 '$tooth25',
 '$tooth26',
 '$tooth27',
 '$tooth28',
 '$tooth29',
 '$tooth30',
 '$tooth31',
 '$tooth32',
 '$chart_name',
 '$date',
 '$remark')";
$res=mysql_query($sql); 


$sqls="INSERT INTO patient_tooth_chart_extra_adult 
(patient_id,
 tooth_18,
tooth_17,
tooth_16,
tooth_15,
tooth_14,
tooth_13,
tooth_12,
tooth_11,
tooth_21,
tooth_22,
tooth_23,
tooth_24,
tooth_25,
tooth_26,
tooth_27,
tooth_28,
tooth_41,
tooth_42,
tooth_43,
tooth_44,
tooth_45,
tooth_46,
tooth_47,
tooth_48,
tooth_31,
tooth_32,
tooth_33,
tooth_34,
tooth_35,
tooth_36,
tooth_37,
tooth_38,
chart_name,
date_chart,
chart_remarks)
VALUES
('$id',
 '$tooth1',
 '$tooth2',
 '$tooth3',
 '$tooth4',
 '$tooth5',
 '$tooth6',
 '$tooth7',
 '$tooth8',
 '$tooth9',
 '$tooth10',
 '$tooth11',
 '$tooth12',
 '$tooth13',
 '$tooth14',
 '$tooth15',
 '$tooth16',
 '$tooth24',
 '$tooth23',
 '$tooth22',
 '$tooth21',
 '$tooth20',
 '$tooth19',
 '$tooth18',
 '$tooth17',
 '$tooth25',
 '$tooth26',
 '$tooth27',
 '$tooth28',
 '$tooth29',
 '$tooth30',
 '$tooth31',
 '$tooth32',
 '$chart_name',
 NOW(),
 '$remark')";
$ress=mysql_query($sqls); 

$var="yes";
$dsql="UPDATE patient_list SET tooth_checker='".$var."' WHERE id='".$id."'";
$res=mysql_query($dsql);
} else if($what_chart==2){
	
	$sql="INSERT INTO patient_child_tooth 
	(patient_id,
	 tooth_55,
	 tooth_54,
	 tooth_53,
	 tooth_52,
	 tooth_51,
	 tooth_61,
	 tooth_62,
	 tooth_63,
	 tooth_64,
	 tooth_65,
	 tooth_85,
	 tooth_84,
	 tooth_83,
	 tooth_82,
	 tooth_81,
	 tooth_71,
	 tooth_72,
	 tooth_73,
	 tooth_74,
	 tooth_75,
	 tooth_chart_name,
	 tooth_chart_date,
	 tooth_remarks)
	VALUES(
	 '$id',
	 '$child1',
	 '$child2',
	 '$child3',
	 '$child4',
	 '$child5',
	 '$child6',
	 '$child7',
	 '$child8',
	 '$child9',
	 '$child10',
	 '$child11',
	 '$child12',
	 '$child13',
	 '$child14',
	 '$child15',
	 '$child16',
	 '$child17',
	 '$child18',
	 '$child19',
	 '$child20',
	 '$chart_name',
     '$date',
	 '$remark')
	";
	$res=mysql_query($sql);
	
	$sqls="INSERT INTO patient_tooth_chart_extra_child 
	(patient_id,
	 tooth_55,
	 tooth_54,
	 tooth_53,
	 tooth_52,
	 tooth_51,
	 tooth_61,
	 tooth_62,
	 tooth_63,
	 tooth_64,
	 tooth_65,
	 tooth_85,
	 tooth_84,
	 tooth_83,
	 tooth_82,
	 tooth_81,
	 tooth_71,
	 tooth_72,
	 tooth_73,
	 tooth_74,
	 tooth_75,
	 chart_name,
	 date_chart,
	 chart_remarks)
	VALUES(
	 '$id',
	 '$child1',
	 '$child2',
	 '$child3',
	 '$child4',
	 '$child5',
	 '$child6',
	 '$child7',
	 '$child8',
	 '$child9',
	 '$child10',
	 '$child11',
	 '$child12',
	 '$child13',
	 '$child14',
	 '$child15',
	 '$child16',
	 '$child17',
	 '$child18',
	 '$child19',
	 '$child20',
	 '$chart_name',
     NOW(),
	 '$remark')
	";
	$res=mysql_query($sqls);
	
	//var_dump($sql);die();
	$var="yes";
$dsql="UPDATE patient_list SET tooth_checker='".$var."' WHERE id='".$id."'";
$res=mysql_query($dsql);
}

}

else if($tooth_checker=="yes") {
	
	if($what_chart==1) {
	
$sql="UPDATE patient_adult_tooth SET 
tooth_18='".$tooth1."',
tooth_17='".$tooth2."',
tooth_16='".$tooth3."',
tooth_15='".$tooth4."',
tooth_14='".$tooth5."',
tooth_13='".$tooth6."',
tooth_12='".$tooth7."',
tooth_11='".$tooth8."',
tooth_21='".$tooth9."',
tooth_22='".$tooth10."',
tooth_23='".$tooth11."',
tooth_24='".$tooth12."',
tooth_25='".$tooth13."',
tooth_26='".$tooth14."',
tooth_27='".$tooth15."',
tooth_28='".$tooth16."',
tooth_41='".$tooth24."',
tooth_42='".$tooth23."',
tooth_43='".$tooth22."',
tooth_44='".$tooth21."',
tooth_45='".$tooth20."',
tooth_46='".$tooth19."',
tooth_47='".$tooth18."',
tooth_48='".$tooth17."',
tooth_31='".$tooth25."',
tooth_32='".$tooth26."',
tooth_33='".$tooth27."',
tooth_34='".$tooth28."',
tooth_35='".$tooth29."',
tooth_36='".$tooth30."',
tooth_37='".$tooth31."',
tooth_38='".$tooth32."',
tooth_chart_name='".$chart_name."',
tooth_chart_date='".$date."'

WHERE patient_id='".$id."'";
$res=mysql_query($sql); 


$sqls="INSERT INTO patient_tooth_chart_extra_adult 
(patient_id,
 tooth_18,
tooth_17,
tooth_16,
tooth_15,
tooth_14,
tooth_13,
tooth_12,
tooth_11,
tooth_21,
tooth_22,
tooth_23,
tooth_24,
tooth_25,
tooth_26,
tooth_27,
tooth_28,
tooth_41,
tooth_42,
tooth_43,
tooth_44,
tooth_45,
tooth_46,
tooth_47,
tooth_48,
tooth_31,
tooth_32,
tooth_33,
tooth_34,
tooth_35,
tooth_36,
tooth_37,
tooth_38,
chart_name,
date_chart,
chart_remarks)
VALUES
('$id',
 '$tooth1',
 '$tooth2',
 '$tooth3',
 '$tooth4',
 '$tooth5',
 '$tooth6',
 '$tooth7',
 '$tooth8',
 '$tooth9',
 '$tooth10',
 '$tooth11',
 '$tooth12',
 '$tooth13',
 '$tooth14',
 '$tooth15',
 '$tooth16',
 '$tooth24',
 '$tooth23',
 '$tooth22',
 '$tooth21',
 '$tooth20',
 '$tooth19',
 '$tooth18',
 '$tooth17',
 '$tooth25',
 '$tooth26',
 '$tooth27',
 '$tooth28',
 '$tooth29',
 '$tooth30',
 '$tooth31',
 '$tooth32',
 '$chart_name',
 NOW(),
 '$remark')";
$ress=mysql_query($sqls); 


}

else if($what_chart==2) {
	
	$sql="UPDATE patient_child_tooth SET
	 tooth_55='".$child1."',
	 tooth_54='".$child2."',
	 tooth_53='".$child3."',
	 tooth_52='".$child4."',
	 tooth_51='".$child5."',
	 tooth_61='".$child6."',
	 tooth_62='".$child7."',
	 tooth_63='".$child8."',
	 tooth_64='".$child9."',
	 tooth_65='".$child10."',
	 tooth_85='".$child11."',
	 tooth_84='".$child12."',
	 tooth_83='".$child13."',
	 tooth_82='".$child14."',
	 tooth_81='".$child15."',
	 tooth_71='".$child16."',
	 tooth_72='".$child17."',
	 tooth_73='".$child18."',
	 tooth_74='".$child19."',
	 tooth_75='".$child20."',
	 tooth_chart_name='".$chart_name."',
	 tooth_chart_date='".$date."',
	 tooth_remarks='".$remark."'
	WHERE patient_id='".$id."'
	";
	$res=mysql_query($sql);
	
	
	$sqls="INSERT INTO patient_tooth_chart_extra_child 
	(patient_id,
	 tooth_55,
	 tooth_54,
	 tooth_53,
	 tooth_52,
	 tooth_51,
	 tooth_61,
	 tooth_62,
	 tooth_63,
	 tooth_64,
	 tooth_65,
	 tooth_85,
	 tooth_84,
	 tooth_83,
	 tooth_82,
	 tooth_81,
	 tooth_71,
	 tooth_72,
	 tooth_73,
	 tooth_74,
	 tooth_75,
	 chart_name,
	 date_chart,
	 chart_remarks)
	VALUES(
	 '$id',
	 '$child1',
	 '$child2',
	 '$child3',
	 '$child4',
	 '$child5',
	 '$child6',
	 '$child7',
	 '$child8',
	 '$child9',
	 '$child10',
	 '$child11',
	 '$child12',
	 '$child13',
	 '$child14',
	 '$child15',
	 '$child16',
	 '$child17',
	 '$child18',
	 '$child19',
	 '$child20',
	 '$chart_name',
     NOW(),
	 '$remark')
	";
	$res=mysql_query($sqls);
	
	//$new_id=mysql_insert_id();
	
	//$sql="";
	
	
	}

}



}


//var_dump($id);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>My Dentist Pal</title>
<link rel="stylesheet" type="text/css" media="screen" href="style/style.css" />
<?php include("ganalytics.php"); ?>
</head>

<body style="margin:0;padding:0;background-color:#f6f5f5;">
<!--wrapper--><table cellpadding="0" cellspacing="0" border="0" width="100%">
<!--top--><tr><td>
<?php include('includes/top_patient.php');?>
<!--top--></td></tr>

<!--tooth--><tr><td>
<?php include('includes/top.php');?>
<!--dentisit dashboard--></td></tr>

<!--menubar--><tr><td width="100%" height="54" style="background-image:url('images/menubar.png');">
<!--menuinblack--><div style="margin:0 auto;width:520px;">
<table cellpadding="0" cellspacing="0" border="0">
<tr>
<td><img src="images/patient_list_black.png"/></td>
<td width="13">&nbsp;</td>
<td><img src="images/line.png"/></td>
<td width="13">&nbsp;</td>
<td><img src="img/bar_add_tooth.png"  /></td>
</tr>
</table>

<!--menuinblack--></div>
<!--menubar--></td></tr>

<!--include sidebar--><tr><td>
<div style="margin:0 auto;width:960px;">
<!--sidebar and content container--><table cellpadding="0" cellspacing="0" border="0">
<!--sidebar--><tr><td valign="top">
<div style="margin-top:-38px;">
<?php include('includes/sidebar.php');?>
</div>
<!--sidebar--></td>
<!--content--><td valign="top" style="padding-top:26px;">
<?php include('includes/box_patient_tooth.php');?>
<!--content--></td>
</tr>



<!--sidebar and content container--></table>
<!--<div style="clear:both;height:20px;"></div>-->
</div>
<!--include sidebar--></td></tr>
<tr>
  <td style="background-color:#FFF;">&nbsp;</td>
</tr>
<tr>
  <td style="background-color:#FFF;"><?php include('includes/footer.php');?></td>
</tr>
<!--wrapper--></table>

</body>
</html>

