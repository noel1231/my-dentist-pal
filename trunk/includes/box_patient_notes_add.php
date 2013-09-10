<?php 

$dentist_id=$_SESSION['id'];

include('config.php');



/**
 * @link: http://www.Awcore.com/dev
 */
 
   function pagination($query, $per_page = 10,$page = 1, $url = '?'){        
    	$query = "SELECT COUNT(*) as `num` FROM {$query}";
    	$row = mysql_fetch_array(mysql_query($query));
    	$total = $row['num'];
        $adjacents = "2"; 

    	$page = ($page == 0 ? 1 : $page);  
    	$start = ($page - 1) * $per_page;								
		
    	$prev = $page - 1;							
    	$next = $page + 1;
        $lastpage = ceil($total/$per_page);
    	$lpm1 = $lastpage - 1;
    	
    	$pagination = "";
    	if($lastpage > 1)
    	{	
    		$pagination .= "<ul class='pagination'>";
                    $pagination .= "<li class='details'>Page $page of $lastpage</li>";
    		if ($lastpage < 7 + ($adjacents * 2))
    		{	
    			for ($counter = 1; $counter <= $lastpage; $counter++)
    			{
    				if ($counter == $page)
    					$pagination.= "<li><a class='current'>$counter</a></li>";
    				else
    					$pagination.= "<li><a href='{$url}page=$counter'>$counter</a></li>";					
    			}
    		}
    		elseif($lastpage > 5 + ($adjacents * 2))
    		{
    			if($page < 1 + ($adjacents * 2))		
    			{
    				for ($counter = 1; $counter < 4 + ($adjacents * 2); $counter++)
    				{
    					if ($counter == $page)
    						$pagination.= "<li><a class='current'>$counter</a></li>";
    					else
    						$pagination.= "<li><a href='{$url}page=$counter'>$counter</a></li>";					
    				}
    				$pagination.= "<li class='dot'>...</li>";
    				$pagination.= "<li><a href='{$url}page=$lpm1'>$lpm1</a></li>";
    				$pagination.= "<li><a href='{$url}page=$lastpage'>$lastpage</a></li>";		
    			}
    			elseif($lastpage - ($adjacents * 2) > $page && $page > ($adjacents * 2))
    			{
    				$pagination.= "<li><a href='{$url}page=1'>1</a></li>";
    				$pagination.= "<li><a href='{$url}page=2'>2</a></li>";
    				$pagination.= "<li class='dot'>...</li>";
    				for ($counter = $page - $adjacents; $counter <= $page + $adjacents; $counter++)
    				{
    					if ($counter == $page)
    						$pagination.= "<li><a class='current'>$counter</a></li>";
    					else
    						$pagination.= "<li><a href='{$url}page=$counter'>$counter</a></li>";					
    				}
    				$pagination.= "<li class='dot'>..</li>";
    				$pagination.= "<li><a href='{$url}page=$lpm1'>$lpm1</a></li>";
    				$pagination.= "<li><a href='{$url}page=$lastpage'>$lastpage</a></li>";		
    			}
    			else
    			{
    				$pagination.= "<li><a href='{$url}page=1'>1</a></li>";
    				$pagination.= "<li><a href='{$url}page=2'>2</a></li>";
    				$pagination.= "<li class='dot'>..</li>";
    				for ($counter = $lastpage - (2 + ($adjacents * 2)); $counter <= $lastpage; $counter++)
    				{
    					if ($counter == $page)
    						$pagination.= "<li><a class='current'>$counter</a></li>";
    					else
    						$pagination.= "<li><a href='{$url}page=$counter'>$counter</a></li>";					
    				}
    			}
    		}
    		
    		if ($page < $counter - 1){ 
    			$pagination.= "<li><a href='{$url}page=$next'>Next</a></li>";
                $pagination.= "<li><a href='{$url}page=$lastpage'>Last</a></li>";
    		}else{
    			$pagination.= "<li><a class='current'>Next</a></li>";
                $pagination.= "<li><a class='current'>Last</a></li>";
            }
    		$pagination.= "</ul>\n";		
    	}
    
    
        return $pagination;
    } 



if(isset($_GET['id'])){
$id = $_GET['id'];

			//var_dump($x);var_dump($y);die();
			
			/*$qwerty=mysql_query("SELECT COUNT(*) AS num FROM patient_credits WHERE id='".$id."'");
			$ress=mysql_fetch_assoc($qwerty);
			$rows=$ress['num'];
			$i=0;
			$total_credit=0;
			for($i=0;$i<$rows;$i++) {
			$total_credit=$total_credit+	
			}*/
} 
if(isset($_GET['key'])){
$x = $_GET['key'];
$id=$_GET['id'];

$sql="DELETE FROM patient_credits WHERE id='".$x."'";
$res=mysql_query($sql);

}

/*
if(isset($_GET['key'])){
$idkey = $_GET['key']; 

$sql="DELETE FROM patient_credits WHERE id=".$idkey."";
$res=mysql_query($sql);

}*/

$sql="SELECT * FROM patient_list WHERE id=".$id."";
$res=mysql_query($sql);
while($row=mysql_fetch_array($res))
{
$id=$row["id"];
$name=$row["patient_name"];
}


			
			

if(isset($_POST['save_notes']))
{
$id=mysql_real_escape_string($_POST['patient_id']);
$x=$dentist_id;
//var_dump($x);die();
$dates=date('Y/m/d');
$date_due=mysql_real_escape_string($_POST['date_due']);

$date=explode("/",$date_due);
$m=$date[0];
$d=$date[1];
$y=$date[2];
$date_due=$y."-".$m."-".$d;

$description=mysql_real_escape_string($_POST['description']);
$ammount=mysql_real_escape_string($_POST['ammount']);
$down=mysql_real_escape_string($_POST['downpayment']);
$sql="INSERT INTO patient_credits 
(dentist_id,
 patient_id,
 notes_date_due,
 notes_description,
 notes_ammount,
 notes_downpayment,
 notes_date_noted)
VALUES(
'$x',
'$id',
'$date_due',
'$description',
'$ammount',
'$down',
'$dates')";
$res=mysql_query($sql);

$sqls=mysql_query("SELECT * FROM patient_list WHERE id='".$id."'");
while($rr=mysql_fetch_array($sqls)) {
$pt_name=$rr['patient_name'];	
}

$sql=mysql_query("SELECT MAX(draft_id) AS largest FROM accounting_summary");
	$query=mysql_fetch_assoc($sql);
	$draft_id=$query['largest'];
	
	
if(empty($draft_id))
{ $idd="1"; }
else
{ $idd=$draft_id+1;} 

if($ammount==$down) {
$x="yes";	
}
else {
$x="no";	
}

$s="INSERT INTO accounting_summary (draft_id,dentist_id,patient_name,draft_date,date_due,total,ammount_paid,patient_id,paid_date,paid_checker) VALUES('$idd','$dentist_id','$pt_name','$dates','$date_due','$ammount','$down','$id','$dates','$x')";
$r=mysql_query($s);
//var_dump($s);die();


$sql="SELECT * FROM patient_credits WHERE patient_id='".$id."'";
			$res=mysql_query($sql);
			$xxx=0;$yyy=0;
			while($row=mysql_fetch_array($res)){ 
			$cred=$row['notes_ammount'];
			//echo "<input type=\"hidden\" name=\"pt_credits[]\" value=\"$cred\">";
			$xxx=$xxx+$cred;
			$downp=$row['notes_downpayment'];
			//echo "<input type=\"hidden\" name=\"pt_down[]\" value=\"$downp\">";
			$yyy=$yyy+$downp;
			
			}

header('Location: patient_notes.php?id='.$id.'');
}

$sql="SELECT * FROM patient_credits WHERE patient_id='".$id."'";
			$res=mysql_query($sql);
			$xxx=0;$yyy=0;
			while($row=mysql_fetch_array($res)){ 
			$cred=$row['notes_ammount'];
			//echo "<input type=\"hidden\" name=\"pt_credits[]\" value=\"$cred\">";
			$xxx=$xxx+$cred;
			$downp=$row['notes_downpayment'];
			//echo "<input type=\"hidden\" name=\"pt_down[]\" value=\"$downp\">";
			$yyy=$yyy+$downp;
			
			}


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="pagination/css/pagination.css" rel="stylesheet" type="text/css" />
	<link href="pagination/css/B_blue.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
function Onsave()  
{  
if(confirm('Do you want to save changes ?')==true)  
{  
a = document.getElementById('amount').value;
b = document.getElementById('down').value;

a = a.replace(/\,/g,'');
b = b.replace(/\,/g,'');

document.getElementById('amount').value=a;
document.getElementById('down').value=b;

return true;  
}  
else  
{  
return false;  
}  
} 

function ChangeAmount(a) {
var mave = a;
mave += '';
	x = mave.split('.');
	x1 = x[0];
	x2 = x.length > 1 ? '.' + x[1] : '';
	var rgx = /(\d+)(\d{3})/;
	while (rgx.test(x1)) {
		x1 = x1.replace(rgx, '$1' + ',' + '$2');
	}
	//return x1 + x2;
	var mave =x1 + x2;
document.getElementById('amount').value=mave;
}

function ChangePay(a) {
var mave = a;
mave += '';
	x = mave.split('.');
	x1 = x[0];
	x2 = x.length > 1 ? '.' + x[1] : '';
	var rgx = /(\d+)(\d{3})/;
	while (rgx.test(x1)) {
		x1 = x1.replace(rgx, '$1' + ',' + '$2');
	}
	//return x1 + x2;
	var mave =x1 + x2;
document.getElementById('down').value=mave;
}

</script>
<style type="text/css">
#blanket {
background-color:#FFF;
opacity: 0.9;
filter:alpha(opacity=90);
position:fixed;
z-index: 9001;
top:0px;
left:0px;
width:100%;
}

#popUpDiv {
position:fixed;
background-color:#FFF;
width:450px;
height:300px;
margin-top:-250px;

z-index: 9002;

 border-style: solid;
 border-width: 2px;
 -moz-border-radius: 5px;
 -webkit-border-radius: 5px;
 border-radius: 5px;


/*date*/



}


body {
font-size:63%;	
}

</style>

<link type="text/css" href="jquery-ui-1.8.17.custom/css/start/jquery-ui-1.8.17.custom.css" rel="stylesheet" />	
		<script type="text/javascript" src="jquery-ui-1.8.17.custom/js/jquery-1.7.1.min.js"></script>
		<script type="text/javascript" src="jquery-ui-1.8.17.custom/js/jquery-ui-1.8.17.custom.min.js"></script>
		<script type="text/javascript">
			$(function(){

				

				// Datepicker
				$('#datepicker').datepicker({
					inline: true
				});
				
				
			});
		</script>


		
	
</head>

<body>

  <!--<map name="Map" id="Map">
<area shape="rect" coords="8,1,131,42" href="messaging.php" />
  <area shape="rect" coords="138,2,263,41" href="received_message.php" />
  <area shape="rect" coords="638,2,689,33" href="patient_dental_edit.php" />
</map>--> <!--popupdiv-->
      
             <!--popupdiv-->
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><table width="739" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td height="39" colspan="2" valign="top"><div>
          <div style="width:140px; margin-left:20px; margin-bottom:-2px; float:left;">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="6"><img src="img/t1.jpg" width="6" height="41" alt="" /></td>
                <td width="661" align="center" style="background: url(img/t3.jpg);"><a href="patient_list.php"><img src="img/t_patient_list.png"  width="98" height="18" alt="" /></a></td>
                <td width="6"><img src="img/t2.jpg" width="6" height="41" alt="" /></td>
              </tr>
            </table>
          </div>
          <div style="width:120px; margin-left:10px; margin-bottom:-2px; float:left;">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="6"><img src="img/t1.jpg" width="6" height="41" alt="" /></td>
                <td width="661" align="center" style="background: url(img/t3.jpg);"><a href="add_patient.php"><img src="img/t_add.png" width="82" height="18" alt="" /></a></td>
                <td width="6"><img src="img/t2.jpg" width="6" height="41" alt="" /></td>
              </tr>
            </table>
          </div>
          <!--<div style="width:110px; margin-left:10px; margin-bottom:-2px; float:left">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="6"><img src="img/t1.jpg" width="6" height="41" alt="" /></td>
                <td width="661" align="center" style="background: url(img/t3.jpg);"><img src="img/t-sent.png" width="72" height="17" alt="" /></td>
                <td width="6"><img src="img/t2.jpg" width="6" height="41" alt="" /></td>
              </tr>
            </table>
          </div>-->
         <div style="width:130px; margin-left:10px; margin-bottom:-2px; float:left; z-index:999999999">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="6"><img src="img/u1.jpg" width="6" height="41" alt="" /></td>
                <td width="661" align="center" style="background: url(img/u3.jpg); font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#3e4447;"><!--Joselito Galvez--><?php
				
				$length=14;
$name1=$name;
//$name=strlen($name);
//echo $name;
$display = substr($name1, 0, $length) ;
echo "<span style=\"margin-left:4px;color:#333;font-family:Arial, Helvetica, sans-serif;font-size:13px;\">$display</span>";
echo "..." ;
				
				//echo $name;?></td>
                <td width="6"><img src="img/u2.jpg" width="6" height="41" alt="" /></td>
              </tr>
            </table>
          </div>
        </div></td>
      </tr>
      <tr>
        <td colspan="2"><img src="img/1.jpg" width="739" height="12" alt="" /></td>
      </tr>
      <tr>
        <td height="47" style="background:url(img/2.jpg);">
        <table width="100%"><tr><td>
        <img src="img/bar_patient.png" height="20" width="114" style="margin-top:-8px;margin-left:23px;"/></td>
        <td align="right"><!--<input type="submit" name="update" value="UPDATE" class="submit" style="margin-right:10px;margin-top:6px;"/>-->
     <input type="button" onclick="divPrint();" name="print" value="PRINT" class="submit" style="margin-right:17px;margin-top:-4px;" /></td></tr></table></td>
      </tr>
      <tr>
        <td colspan="2" valign="top" style="background:url(img/3.jpg); padding-bottom:10px;"><div style="margin-top:-8px; position: relative;">
          <table id="print_it" width="690" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td bgcolor="#FFFFFF" style="border-left:1px solid #a0a8ac; border-bottom:1px solid #a0a8ac; border-right:1px solid #a0a8ac;"><!--<p>&nbsp;</p>-->
                <!--<img src="img/patient_notes_map.jpg" width="691" height="35" border="0" usemap="#Map2" />
                <map name="Map2" id="Map2">
                  <area shape="rect" coords="3,3,97,33" href="#" />
                  <area shape="rect" coords="103,3,217,32" href="patient_medical.php?id=<?php //echo $id;?>" />
                  <area shape="rect" coords="222,3,331,32" href="patient_dental.php?id=<?php //echo $id;?>" />
                  <area shape="rect" coords="337,3,428,32" href="patient_tooth_chart.php?id=<?php //echo $id;?>" />
                  <area shape="rect" coords="433,3,505,32" href="patient_visit_log.php?id=<?php //echo $id;?>" />
                  <area shape="rect" coords="511,3,573,32" href="patient_others.php?id=<?php //echo $id;?>" />
                  <area shape="rect" coords="578,3,634,32" href="#" />
                  <area shape="rect" coords="640,4,687,32" href="#" />
                </map>-->
                
                
                <!--locations-->
                <table cellpadding="0" cellspacing="0" border="0">
                <tr>
                
                <td style="background-image:url(img/option_center_check.png);width:110px;height:36px;padding-left:15px;"> 
                <a href="patient_info.php?id=<?php echo $id;?>" class="link_map">
                Patient Info
                </a>
                </td>
                
                
                <td style="background-image:url(img/option_right_check.png);width:5px;height:36px;">&nbsp;</td>
               
                <td style="background-image:url(img/option_center_check.png);width:140px;height:36px;padding-left:15px;"> 
                 <a href="patient_medical.php?id=<?php echo $id;?>" class="link_map">
                Medical History
                </a>
                </td>
                
                <td style="background-image:url(img/option_right_check.png);width:5px;height:36px;">&nbsp;</td>
               
                 <td style="background-image:url(img/option_center_check.png);width:130px;height:36px;padding-left:15px;"> 
                <a href="patient_dental.php?id=<?php echo $id;?>" class="link_map">
                Dental History
                 </a>
                </td>
               
                <td style="background-image:url(img/option_right_check.png);width:5px;height:36px;">&nbsp;</td>
               
                <td style="background-image:url(img/option_center_check.png);width:110px;height:36px;padding-left:10px;"> 
                 <a href="patient_tooth_chart.php?id=<?php echo $id;?>" class="link_map">
                Tooth Chart
                </a>
                </td>
                
                 <td style="background-image:url(img/option_right_check.png);width:5px;height:36px;">&nbsp;</td>
              
                <td style="background-image:url(img/option_center_check.png);width:80px;height:36px;padding-left:10px;"> 
                <a href="patient_visit_log.php?id=<?php echo $id;?>" class="link_map">
                Visit Log
                </a>
                </td>
                
                 <td style="background-image:url(img/option_right_check.png);width:5px;height:36px;">&nbsp;</td>
               
                <td style="background-image:url(img/option_center_check.png);width:50px;height:36px;padding-left:10px;"> 
                 <a href="patient_others.php?id=<?php echo $id;?>" class="link_map">
                Others
                </a>
                </td>
                
                 <td style="background-image:url(img/option_right_check.png);width:5px;height:36px;">&nbsp;</td>
               
                <td style="background-color:#FFF;width:100px;height:36px;padding-left:15px;"> 
               <a href="#" class="link_map">
               Notes
              </a>
                </td>
              
             
               <!-- <td style="background-color:#F00;width:50px;height:36px;padding-left:15px;"> 
              <a href="#" style="color:#FFF;font-family:Arial, Helvetica, sans-serif;font-weight:bold;font-size:13px;text-decoration:none;">
               Edit
                </a>
                </td>-->
                
                </tr>
                </table>
                <!--locations-->
                
                
                </td>
            </tr>
          
        
           <tr><td bgcolor="#FFFFFF">
           
    <form method="post" action="" enctype="multipart/form-data">
            <table cellpadding="0" cellspacing="0" border="0" style="font-family:Arial, Helvetica, sans-serif;" width="100%">
            <tr><td height="45" width="100%">
            <span style="margin-left:20px;color:#333;font-size:16px;font-weight:bold;">Record Notes</span>
            </td></tr>
            <tr><td>
            <div style="margin:0 auto;width:390px;">
            <table cellpadding="0" cellspacing="0" border="0">
            <tr><td><div style="clear:both;height:15px;"></div></td></tr>
            <tr><td style="width:130px;text-align:right;color:#333;font-size:14px;font-weight:bold;">
            Date Due
            </td>
            <td style="padding-left:33px;"><input type="text" name="date_due" id="datepicker" style="font-size:15px;width:150px;"/></td>
            </tr>
            <tr><td><div style="clear:both;height:15px;"></div></td></tr>
            <tr><td style="width:130px;text-align:right;color:#333;font-size:14px;font-weight:bold;">
            Description
            </td>
            <td style="padding-left:33px;"><input type="text" name="description" style="font-size:15px;width:200px;" /></td>
            </tr>
            <tr><td><div style="clear:both;height:15px;"></div></td></tr>
            <tr><td style="width:130px;text-align:right;color:#333;font-size:14px;font-weight:bold;">
            Ammount
            </td>
            <td style="padding-left:20px;color:#333;font-size:14px;">P&nbsp;<input type="text" id="amount" onchange="ChangeAmount(this.value)" name="ammount" style="width:150px;font-size:15px;text-align:right;"/>.00</td>
            </tr>
            <tr><td><div style="clear:both;height:15px;"></div></td></tr>
            <tr><td style="width:130px;text-align:right;color:#333;font-size:14px;font-weight:bold;">
            Downpayment
            </td>
            <td style="padding-left:20px;color:#333;font-size:14px;">P&nbsp;<input type="text" id="down" onchange="ChangePay(this.value)" name="downpayment" style="font-size:15px;width:150px;text-align:right;"/>.00</td>
            </tr>
            
            <tr><td colspan="2">
            <div style="margin-left:120px;margin-top:20px;">
            <input type="submit" name="save_notes" class="submit2" value="Save" onclick="return Onsave()"/>&nbsp;&nbsp;&nbsp;&nbsp;
             <input type="button" name="cancel" class="submit2" value="Cancel" onclick="window.location='patient_notes.php?id=<?php echo $id;?>'"/>
            </div>
            </td></tr>
            <tr><td>
            <div style="clear:both;height:15px;"></div>
            </td></tr>
            <input type="hidden" name="patient_id" value="<?php echo $id;?>" />
            </table> 
            </form>
            </div> 
            </td></tr>
            
         
            </table>             
            
            
            </td></tr>
            
       
            
            </table>
        </div></td>
    
     
        
      </tr>
      <tr>
        <td colspan="2"><img src="img/4.jpg" width="739" height="6" alt="" /></td>
      </tr>
    </table></td>
  </tr>
</table>
</body></html>
 
