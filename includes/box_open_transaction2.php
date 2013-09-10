<?php

//session_start();
//include('//config.php');
$dentist_id=$_SESSION['id'];

  function pagination($query, $per_page = 10,$page = 1, $url = '?', $what = 'open'){        
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
    					$pagination.= "<li><a href='{$url}page=$counter&amp;id=$what'>$counter</a></li>";					
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
    						$pagination.= "<li><a href='{$url}page=$counter&amp;id=$what'>$counter</a></li>";					
    				}
    				$pagination.= "<li class='dot'>...</li>";
    				$pagination.= "<li><a href='{$url}page=$lpm1&amp;id=$what'>$lpm1</a></li>";
    				$pagination.= "<li><a href='{$url}page=$lastpage&amp;id=$what'>$lastpage</a></li>";		
    			}
    			elseif($lastpage - ($adjacents * 2) > $page && $page > ($adjacents * 2))
    			{
    				$pagination.= "<li><a href='{$url}page=1&amp;id=$what'>1</a></li>";
    				$pagination.= "<li><a href='{$url}page=2&amp;id=$what'>2</a></li>";
    				$pagination.= "<li class='dot'>...</li>";
    				for ($counter = $page - $adjacents; $counter <= $page + $adjacents; $counter++)
    				{
    					if ($counter == $page)
    						$pagination.= "<li><a class='current'>$counter</a></li>";
    					else
    						$pagination.= "<li><a href='{$url}page=$counter&amp;id=$what'>$counter</a></li>";					
    				}
    				$pagination.= "<li class='dot'>..</li>";
    				$pagination.= "<li><a href='{$url}page=$lpm1&amp;id=$what'>$lpm1</a></li>";
    				$pagination.= "<li><a href='{$url}page=$lastpage&amp;id=$what'>$lastpage</a></li>";		
    			}
    			else
    			{
    				$pagination.= "<li><a href='{$url}page=1&amp;id=$what'>1</a></li>";
    				$pagination.= "<li><a href='{$url}page=2&amp;id=$what'>2</a></li>";
    				$pagination.= "<li class='dot'>..</li>";
    				for ($counter = $lastpage - (2 + ($adjacents * 2)); $counter <= $lastpage; $counter++)
    				{
    					if ($counter == $page)
    						$pagination.= "<li><a class='current'>$counter</a></li>";
    					else
    						$pagination.= "<li><a href='{$url}page=$counter&amp;id=$what'>$counter</a></li>";					
    				}
    			}
    		}
    		
    		if ($page < $counter - 1){ 
    			$pagination.= "<li><a href='{$url}page=$next&amp;id=$what'>Next</a></li>";
                $pagination.= "<li><a href='{$url}page=$lastpage&amp;id=$what'>Last</a></li>";
    		}else{
    			$pagination.= "<li><a class='current'>Next</a></li>";
                $pagination.= "<li><a class='current'>Last</a></li>";
            }
    		$pagination.= "</ul>\n";		
    	}
    
    
        return $pagination;
    } 

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="pagination/css/pagination.css" rel="stylesheet" type="text/css" />
	<link href="pagination/css/B_blue.css" rel="stylesheet" type="text/css" />
<script language="JavaScript"> 
function ClickCheckAll(vol)  
{  
  
var i=1;  
for(i=1;i<=document.frmMain.hdnCount.value;i++)  
{  
if(vol.checked == true)  
{  
eval("document.frmMain.check"+i+".checked=true");  
}  
else  
{  
eval("document.frmMain.check"+i+".checked=false");  
}  
}  
}  

function onDelete()  
{  
if(confirm('Do you want to delete ?')==true)  
{  
return true; 

}  
else  
{  
return false;  
}  
}

</script>
<style type="text/css">
a.nav {
text-decoration:none;
color:#333;
}

a.nav:hover {
text-decoration:underline;	
color:#333;
}
</style>

</head>

<body>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><table width="739" border="0" align="center" cellpadding="0" cellspacing="0">
     <tr>
        <td height="39" valign="top"><div>
           <div style="width:140px; margin-left:20px; margin-bottom:-2px; float:left;">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="6"><img src="img/t1.jpg" width="6" height="41" alt="" /></td>
                <td width="661" align="center" style="background: url(img/t3.jpg);"><!--<img src="img/t_patient_list.png" alt="" />-->
            
                       <a href="dentist_simple_accounting.php" style="font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#3e4447;text-decoration:none;">Add Transactions</a>
                
                </td>
                <td width="6"><img src="img/t2.jpg" width="6" height="41" alt="" /></td>
              </tr>
            </table>
          </div>
          <div style="width:140px; margin-left:10px; margin-bottom:-2px; float:left;">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="6"><img src="img/t1.jpg" width="6" height="41" alt="" /></td>
                <td width="661" align="center" style="background: url(img/t3.jpg);"><!--<img src="img/t_add.png"  alt="" />-->
                    <a href="simple_accounting_list.php" style="font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#3e4447;text-decoration:none;">List of Transactions</a>
         
                </td>
                <td width="6"><img src="img/t2.jpg" width="6" height="41" alt="" /></td>
              </tr>
            </table>
          </div>
          <div style="width:140px; margin-left:10px; margin-bottom:-2px; float:left;">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="6"><img src="img/t1.jpg" width="6" height="41" alt="" /></td>
                <td width="661" align="center" style="background: url(img/t3.jpg);"><!--<img src="img/t_patient_list.png" alt="" />-->
                <a href="transaction.php?id=close" style="font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#3e4447;text-decoration:none;">Closed Transactions</a>
                </td>
                <td width="6"><img src="img/t2.jpg" width="6" height="41" alt="" /></td>
              </tr>
            </table>
          </div>
           <div style="width:140px; margin-left:10px; margin-bottom:-2px; float:left;">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="6"><img src="img/u1.jpg" width="6" height="41" alt="" /></td>
                <td width="661" align="center" style="background: url(img/u3.jpg);"><!--<img src="img/t_patient_list.png" alt="" />-->
                <a href="transaction.php?id=open" style="font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#3e4447;text-decoration:none;">Open Transactions</a>
                </td>
                <td width="6"><img src="img/u2.jpg" width="6" height="41" alt="" /></td>
              </tr>
            </table>
          </div>
          <!--<div style="width:140px; margin-left:20px; margin-bottom:-2px; float:left;">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="6"><img src="img/t1.jpg" width="6" height="41" alt="" /></td>
                <td width="661" align="center" style="background: url(img/t3.jpg);"><img src="img/t_patient_list.png" alt="" /></td>
                <td width="6"><img src="img/t2.jpg" width="6" height="41" alt="" /></td>
              </tr>
            </table>
          </div>
          <div style="width:120px; margin-left:10px; margin-bottom:-2px; float:left;">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="6"><img src="img/t1.jpg" width="6" height="41" alt="" /></td>
                <td width="661" align="center" style="background: url(img/t3.jpg);"><img src="img/t_add.png"  alt="" /></td>
                <td width="6"><img src="img/t2.jpg" width="6" height="41" alt="" /></td>
              </tr>
            </table>
          </div>-->
          <!--<div style="width:110px; margin-left:10px; margin-bottom:-2px; float:left">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="6"><img src="img/t1.jpg" width="6" height="41" alt="" /></td>
                <td width="661" align="center" style="background: url(img/t3.jpg);"><img src="img/t-sent.png" width="72" height="17" alt="" /></td>
                <td width="6"><img src="img/t2.jpg" width="6" height="41" alt="" /></td>
              </tr>
            </table>
          </div>-->
          <!--<div style="width:130px; margin-left:10px; margin-bottom:-2px; float:left; z-index:999999999">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="6"><img src="img/u1.jpg" width="6" height="41" alt="" /></td>
                <td width="661" align="center" style="background: url(img/u3.jpg); font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#3e4447;">Joselito Galvez</td>
                <td width="6"><img src="img/u2.jpg" width="6" height="41" alt="" /></td>
              </tr>
            </table>
          </div>-->
        </div></td>
      </tr>
      <tr>
        <td><div style=" z-index:1;"><img src="img/1.jpg" width="739" height="12" alt="" /></div></td>
      </tr>
      <tr>
        <td height="47" style="background:url(img/2.jpg);">
	
       <img src="img/transaction_list.png" height="20" width="146" style="margin-top:-5px;margin-left:22px;"/></td></tr>
        
          <tr>
        <td valign="top" style="background:url(img/3.jpg); padding-bottom:10px;"><div style="margin-top:-8px; position: relative;">
          <table width="690" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td bgcolor="#FFFFFF" style="border-left:1px solid #a0a8ac; border-bottom:1px solid #a0a8ac; border-right:1px solid #a0a8ac;">
              
              
              <!--content-->
              <div style="clear:both;"></div>
			  
                 <div>
                 
                 
                 <div style="clear:both;"></div>
                 
              <table cellpadding="0" cellspacing="0" border="0" style="font-family:Arial, Helvetica, sans-serif;">
              <!--<tr><td><a href="dentist_simple_accounting.php" style="font-size:13px;">Add transaction</a></td></tr>-->
              <!--<tr><td>
              
              <table cellpadding="0" cellspacing="0" border="0" style="font-family:Arial, Helvetica, sans-serif;">
              <tr><td style="font-weight:bold;background-image:url(img/option_center_check.png);width:160px;font-size:14px;padding-top:8px;padding-bottom:8px;text-align:center;border-right:1px solid #cdcbd4;">
              <a href="simple_accounting_list.php" style="color:#333;text-decoration:none;">List of Transactions
              </td>
              <td style="padding-top:8px;padding-bottom:8px;text-align:center;border-right:1px solid #cdcbd4;font-weight:bold;background-image:url(img/option_center_check.png);font-size:14px;width:160px;">
             <a href="dentist_simple_accounting.php" style="color:#333;text-decoration:none;"> Add Transactions
              </td>
              <td style="text-align:center;padding-top:8px;padding-bottom:8px;border-right:1px solid #cdcbd4;background-image:url(img/option_center_check.png);font-weight:bold;width:150px;font-size:14px;">
              <a href="transaction.php?id=close" style="color:#333;text-decoration:none;">Closed transaction</a>
              </td>
                <td style="text-align:center;padding-top:8px;padding-bottom:8px;border-right:1px solid #cdcbd4;background-color:#FFF;font-weight:bold;width:150px;font-size:14px;">
               <a href="transaction.php?id=open" style="color:#333;text-decoration:none;">Open transaction</a>
              </td>
              <td style="text-align:center;padding-top:8px;padding-bottom:8px;background-image:url(img/option_center_check.png);font-weight:bold;width:66px;">&nbsp;
           
              </td>
              </tr>
              <tr><td><div style="clear:both;height:20px;"></div></td></tr>
              </table>
              
              </td></tr>-->
              <tr><td>
              
              <table cellpadding="0" cellspacing="0" border="0" style="font-family:Arial, Helvetica, sans-serif;">
            
              <tr style="font-size:14px;font-weight:bold;background-image:url(img/option_center_check.png);color:#333;">
              <td style="width:80px;padding-top:10px;padding-bottom:10px;text-align:center;border-right:1px solid #cdcbd4;">
              Status
              </td>
              <!--<td style="width:130px;padding-top:10px;padding-bottom:10px;text-align:center;border-right:1px solid #cdcbd4;">
              Date
              </td>
              <td style="width:50px;padding-top:10px;padding-bottom:10px;text-align:center;border-right:1px solid #cdcbd4;">ID</td>
              <td style="width:190px;padding-top:10px;padding-bottom:10px;text-align:center;border-right:1px solid #cdcbd4;">Patient Name</td>-->          <td style="width:130px;padding-top:10px;padding-bottom:10px;text-align:center;border-right:1px solid #cdcbd4;">
              <a href="transaction.php?id=open&amp;arr=draft_date" style="color:#333;text-decoration:underline;">Date</a>
              </td>
              <td style="width:50px;padding-top:10px;padding-bottom:10px;text-align:center;border-right:1px solid #cdcbd4;">
              <a href="transaction.php?id=open&amp;arr=draft_id" style="color:#333;text-decoration:underline;">ID</a></td>
              <td style="width:190px;padding-top:10px;padding-bottom:10px;text-align:center;border-right:1px solid #cdcbd4;">
              <a href="transaction.php?id=open&amp;arr=patient_name" style="color:#333;text-decoration:underline;">
              Patient Name</td>
              <td style="width:130px;padding-top:10px;padding-bottom:10px;text-align:center;border-right:1px solid #cdcbd4;">Ammount Paid</td>
              <td style="width:102px;padding-top:10px;padding-bottom:10px;text-align:center;border-right:1px solid #cdcbd4;">Total</td>
              </tr>
              <?php 
			  
			   $page = (int) (!isset($_GET["page"]) ? 1 : $_GET["page"]);
			  //var_dump($page);die();
    	$limit = 20;
    	$startpoint = ($page * $limit) - $limit;
		 //$statement = "`records` where `active` = 1";
			  
			  $i=0;
			  $var="no";
			  
			  
			  if(isset($_GET['arr'])) {
			  $arr=$_GET['arr'];
			  if($arr=="draft_date") {
				$sql="SELECT * FROM accounting_summary WHERE dentist_id='".$dentist_id."' AND paid_checker='".$var."' ORDER BY $arr DESC LIMIT {$startpoint} , {$limit}";  
				$res=mysql_query($sql);
				
				$statement = "accounting_summary WHERE dentist_id='".$dentist_id."' AND paid_checker='".$var."' ORDER BY $arr DESC";
			  }
			  else if($arr=="draft_id") {
			  $sql="SELECT * FROM accounting_summary WHERE dentist_id='".$dentist_id."' AND paid_checker='".$var."' ORDER BY $arr ASC LIMIT {$startpoint} , {$limit}";  
				$res=mysql_query($sql);
				
				$statement = "accounting_summary WHERE dentist_id='".$dentist_id."' AND paid_checker='".$var."' ORDER BY $arr ASC";
			  }
			  
			   else if($arr=="patient_name") {
			  $sql="SELECT * FROM accounting_summary WHERE dentist_id='".$dentist_id."' AND paid_checker='".$var."' ORDER BY $arr ASC LIMIT {$startpoint} , {$limit}";  
				$res=mysql_query($sql);
				
				$statement = "accounting_summary WHERE dentist_id='".$dentist_id."' AND paid_checker='".$var."' ORDER BY $arr ASC";
				
			  }
			  }
			  
			  else {
			  $sql="SELECT * FROM accounting_summary WHERE dentist_id='".$dentist_id."' AND paid_checker='".$var."' LIMIT {$startpoint} , {$limit}";
			  $res=mysql_query($sql);
			  
			  $statement = "accounting_summary WHERE dentist_id='".$dentist_id."' AND paid_checker='".$var."'";
			  
			  }
			  while($row=mysql_fetch_array($res)) {
				  $date=$row['draft_date'];
				  $check=$row['paid_checker'];
				  $dates=explode("-",$date);
					$y=$dates[0];
					$m=$dates[1];
					$d=$dates[2];
					
					if($m==1)
					{$month="Jan.";}
					else if($m==2)
					{$month="Feb.";}
					else if($m==3)
					{$month="Mar.";}
					else if($m==4)
					{$month="Apr.";}
					else if($m==5)
                    {$month="May";}
					else if($m==6)
					{$month="June";}
					else if($m==7)
					{$month="July";}
					else if($m==8)
					{$month="Aug.";}
					else if($m==9)
					{$month="Sep.";}
					else if($m==10)
					{$month="Oct.";}
					else if($m==11)
					{$month="Nov.";}
					else if($m==12)
					{$month="Dec.";}
					
					$i++;
					 $f=$i%2;
	if($f==0)
	{ $back="#FFF";} 
	else
	{ $back="#e0eefa";}
			  ?>
              
              <tr style="font-size:13px;color:#333;background-color:<?php echo $back;?>;cursor:pointer;" onclick="window.location='simple_accounting_list.php?key=<?php echo $row['draft_id'];?>'">
              <td style="padding-top:10px;padding-bottom:10px;text-align:center;">
              <?php 
			 // var_dump($check);die();
			  if($check=="yes")
			  { echo "closed"; 
			  $total=0; 
			  }
			  else {
			  echo "open";
			   $total=$row['total'];
			  } ?>
              </td>
              <td style="padding-top:10px;padding-bottom:10px;text-align:center;">
              <?php echo $month." ".$d.", ".$y;?>
              </td>
                 <td style="padding-top:10px;padding-bottom:10px;text-align:center;">
              <?php echo $row['draft_id'];?>
              </td>
                  <td style="padding-top:10px;padding-bottom:10px;text-align:left;padding-left:10px;">
              <?php echo $row['patient_name'];?>
              </td>
                <td style="padding-top:10px;padding-bottom:10px;text-align:right;padding-right:10px;">
              <?php $ammount=$row['ammount_paid'];
			  if(empty($ammount))
			  { echo "P0.00"; } 
			  else {
				echo "P".number_format($ammount).".00";  
			  }
			  ?>
              </td>
              <td style="padding-top:10px;padding-bottom:10px;text-align:right;padding-right:10px;">
              <?php 
			 /* if($check=="yes") {
				 
			  }else {
				  
			  }*/
			 
			  echo "P".number_format($total).".00";
			  $main_total=$main_total+$total;
			  ?>
              </td>
              </tr>
         
              <?php } ?>
              
               <?php if(pagination($statement,$limit,$page)) { ?>
              <tr><td colspan="6"><hr /></td></tr>
			   
		   <td style="padding-top:10px;padding-bottom:10px;" colspan="6">
		   <?php } else { ?>
            <tr>
		   <td colspan="6"><?php } ?>
		         <?php
			  //
	echo pagination($statement,$limit,$page);
//var_dump(pagination($statement,$limit,$page));die();
?>
		   </td></tr>
              
              
			  <tr><td colspan="6"><hr /></td></tr>
              <tr><td colspan="6" align="right" style="padding-top:10px;padding-right:10px;font-family:Arial, Helvetica, sans-serif;font-size:13px;font-weight:bold;">
              <?php echo "Total: P".number_format($main_total).".00";?>
              </td></tr>
               </table>
                            
              </td></tr>
              </table> 
              </div>
              
              <div style="clear:both;height:20px;"></div>
              <!--content-->
              
              
               </td>
            </tr>
          </table>
        </div></td>
      </tr>
      <tr>
        <td><img src="img/4.jpg" width="739" height="6" alt="" /></td>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>