<?php

//session_start();
//include('//config.php');
$dentist_id=$_SESSION['id'];

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

function Receive()  
{  
alert('Transaction is closed or payment is full.');
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
                <td width="6"><img src="img/u1.jpg" width="6" height="41" alt="" /></td>
                <td width="661" align="center" style="background: url(img/u3.jpg);"><!--<img src="img/t_add.png"  alt="" />-->
                
                  <a href="simple_accounting_list.php" style="font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#3e4447;text-decoration:none;">List of Transactions</a>
                
                </td>
                <td width="6"><img src="img/u2.jpg" width="6" height="41" alt="" /></td>
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
                <td width="6"><img src="img/t1.jpg" width="6" height="41" alt="" /></td>
                <td width="661" align="center" style="background: url(img/t3.jpg);"><!--<img src="img/t_patient_list.png" alt="" />-->
                <a href="transaction.php?id=open" style="font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#3e4447;text-decoration:none;">Open Transactions</a>
                </td>
                <td width="6"><img src="img/t2.jpg" width="6" height="41" alt="" /></td>
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
	  <?php /*
       <tr>
        <td height="47" style="background:url(img/2.jpg);">
		<table width="100%" cellpadding="0" cellspacing="0" border="0">
		<tr><td>
       <img src="img/transaction_list.png" height="20" width="146" style="margin-top:-5px;margin-left:22px;"/>
        </td>
		<td align="top">
		<input type="button" name="delete" value="Delete" class="submit" onclick="return onDelete(); window.location='simple_accounting_list.php?del=<?php echo $id;?>&amp;key=<?php echo $idy;?>';"/>
		</td>
		</tr>
		</table></td>
      </tr>*/
	  
	 
	  
	  if(isset($_GET['key'])) {
		$idy=$_GET['key'];  
		$del=$_GET['del'];
		
		//window.location='simple_accounting_list.php?del=<?php echo $id;&amp;key=<?php echo $idy;';
		
		 //if(isset($_POST['pass'])) {
		//$idy=mysql_real_escape_string($_POST['key']);  
		//$del=mysql_real_escape_string($_POST['del']);
		//var_dump($del);die();
		
		
if($del) {
//$del=$_GET['del'];	
$key=$idy;
$sql="DELETE FROM accounting_summary WHERE id='".$del."'";
$res=mysql_query($sql);

$sql="SELECT * FROM simple_accounting_scrath WHERE draft_id='".$key."'";
$res=mysql_query($sql);
while($row=mysql_fetch_array($res)) {
$sqls="DELETE FROM simple_accounting_scrath WHERE draft_id='".$key."'";
$ress=mysql_query($sqls);
}
//var_dump($res);die();
  header('Location: simple_accounting_list.php');
}
		 //}
	  //}
	
			 
			  $sql="SELECT * FROM accounting_summary WHERE draft_id='".$idy."' AND dentist_id='".$dentist_id."'";
			  $res=mysql_query($sql);
			  while($row=mysql_fetch_array($res))
			  {
				$date_make=$row['draft_date'];
				$date_due=$row['date_due'];
				$pt_name=$row['patient_name'];
				$id=$row['id'];
				$pt=$row['patient_id'];
			  }
			  
			  $dates=explode("-",$date_make);
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
					
					$date_now=$month." ".$d.", ".$y;
					
					 $dates=explode("-",$date_due);
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
					
					$dates_now=$month." ".$d.", ".$y;
			  
			  //var_dump($id);die();
			  
	  ?>
	     <tr>
        <td height="47" style="background:url(img/2.jpg);">
		<table width="100%" cellpadding="0" cellspacing="0" border="0">
		<tr><td>
       <img src="img/transaction_list.png" height="20" width="146" style="margin-top:-5px;margin-left:22px;"/>
        </td></tr>
		<?php /*<td align="right">
		<!--<input type="button" name="delete" value="Delete" class="submit" onclick="return onDelete(); "/>-->
        		<div class="button_like" onclick="window.location='simple_accounting_list.php?del=<?php echo $id;?>&amp;key=<?php echo $idy;?>'">
        Delete
        </div>
        <table cellpadding="0" cellspacing="0" border="0">
        <tr><td>
        <form method="post" action="" enctype="multipart/form-data">
        

        <input type="submit" name="pass" value="Delete" class="submit" onclick="return onDelete();"/>
        <input type="hidden" name="del" value="<?php echo $id;?>" />
        <input type="hidden" name="key" value="<?php echo $idy;?>" />
        </form>
		</td>
        <td>
        <form method="post" action="pay.php" enctype="multipart/form-data">
        <input type="submit" name="receive" value="Receive Payment" class="submit" onclick="popup1(pay.php,'name','400','200','no'); return false" />
        <input type="hidden" name="pay" value="<?php echo $id;?>" />
        <input type="hidden" name="pt" value="<?php echo $pt;?>" />
        <input type="hidden" name="key" value="<?php echo $idy;?>" />
        </form>
        </td>
		</tr></table>
        </td></tr>
        */?>
		</table></td>
      </tr>
      <tr>
        <td valign="top" style="background:url(img/3.jpg); padding-bottom:10px;"><div style="margin-top:-8px; position: relative;">
          <table width="690" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td bgcolor="#FFFFFF" style="border-left:1px solid #a0a8ac; border-bottom:1px solid #a0a8ac; border-right:1px solid #a0a8ac;">
              
              
              <!--content-->
              <div style="clear:both;"></div>
              
              
              
            
			  
			  <div>
              <table width="100%" cellpadding="0" cellspacing="0" border="0">
              <tr><td width="100%">
              <?php $sqls="SELECT * FROM accounting_summary WHERE draft_id='".$idy."' AND dentist_id='".$dentist_id."'";
			  $ress=mysql_query($sqls); 
			  while($rows=mysql_fetch_array($ress)) {
				  $total=$rows['total'];
				  $ammount_paid=$rows['ammount_paid'];
			  }
			 // var_dump($total);var_dump($ammount_paid);die();
			  ?>
              <table cellpadding="0" cellspacing="0" border="0" style="padding-top:20px;padding-left:25px;font-family:Arial, Helvetica, sans-serif;">
              <tr><!--<td>
              <a href="edit_simple_accounting.php?draft=<?php //echo $idy;?>" title="Edit">Edit</a>
              </td>-->
              <td>
              <a class="nav" href="simple_accounting_list.php?del=<?php echo $id;?>&amp;key=<?php echo $idy;?>" onclick="return onDelete();">Delete</a>
              </td>
              <td style="padding-left:15px;">
              <?php if($total==$ammount_paid) { ?>
              <a class="nav" href="#" onclick="Receive();">Receive Payment</a>
              <?php } else { ?>
              <a class="nav" href="pay.php?pay=<?php echo $id;?>&amp;pt=<?php echo $pt;?>&amp;key=<?php echo $idy;?>" onclick="popup1(this.href,'name','400','200','no'); return false">Receive Payment</a>
              <?php } ?>
              </td>
              </tr>
              </table>
              
              </td></tr>
              <tr><td width="100%" style="padding-top:20px;padding-left:25px;">
              
              <table cellpadding="0" width="100%"cellspacing="0" border="0" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;">
              <tr><td width="100%" align="left">
              <?php echo $pt_name;?> 
              </td></tr>
              <tr><td width="100%" align="left">
              Date created: <?php echo $date_now;?>
              </td></tr>
               <tr><td width="100%" align="left">
              Date due: <?php echo $dates_now;?>
              </td></tr>
              </table>
              
              </td></tr>
              
              <tr><td style="padding-top:15px;">
              
              <table cellpadding="0" cellspacing="0" border="0" style="font-family:Arial, Helvetica, sans-serif;"> 
              <tr style="font-size:13px;font-weight:bold;color:#333;">
              <td style="width:80px;padding-top:10px;background-image:url(img/option_center_check.png);padding-bottom:10px;text-align:center;border:1px solid #CCC;">
              Qty
              </td>
              <td style="width:120px;padding-top:10px;background-image:url(img/option_center_check.png);padding-bottom:10px;text-align:center;border:1px solid #CCC;">
              Item number
              </td>
              <td style="width:180px;padding-top:10px;background-image:url(img/option_center_check.png);padding-bottom:10px;text-align:center;border:1px solid #CCC;">
              Description
              </td>
              <td style="width:100px;padding-top:10px;background-image:url(img/option_center_check.png);padding-bottom:10px;text-align:center;border:1px solid #CCC;">
             Due Date
              </td>
              <td style="width:100px;padding-top:10px;background-image:url(img/option_center_check.png);padding-bottom:10px;text-align:center;border:1px solid #CCC;">
             Price
              </td>
              <td style="width:100px;padding-top:10px;background-image:url(img/option_center_check.png);padding-bottom:10px;text-align:center;border:1px solid #CCC;">
             Total
              </td>
             
              </tr>
              <?php 
			  $i=0;
			  
			  $sum=0;
			  $sums=0;
			
			  $sql="SELECT * FROM simple_accounting_scrath WHERE draft_id='".$idy."' AND dentist_id='".$dentist_id."'";
			  $res=mysql_query($sql);
			  
			  while($row=mysql_fetch_array($res))
			  {
				  $i++;
				  	 $f=$i%2;
	if($f==0)
	{ $back="#FFF";} 
	else
	{ $back="#e0eefa";}
	
	$sum=(str_replace("," , "" , $row['price'] ))* $row['quantity'];
	
	$date=$row['date_due'];
	  $dates=explode("-",$date);
					$y=$dates[0];
					$m=$dates[1];
					$d=$dates[2];
					$date=$m."/".$d."/".$y;
					//var_dump($date);die();
			  ?>
              <tr style="background-color:<?php echo $back;?>;font-size:13px;">
              <td style="padding-top:10px;padding-bottom:10px;text-align:center;border-right:1px solid #cdcbd4;">
              <?php echo $row['quantity'];?>
              </td>
              <td style="padding-top:10px;padding-bottom:10px;text-align:center;border-right:1px solid #cdcbd4;">
              <?php echo $i;?>
              </td>
               <td style="padding-top:10px;padding-bottom:10px;text-align:left;padding-left:10px;border-right:1px solid #cdcbd4;">
              <?php echo $row['description'];?>
              </td>
                 <td style="padding-top:10px;padding-bottom:10px;text-align:center;border-right:1px solid #cdcbd4;">
              <?php echo $date;?>
              </td>
               <td style="padding-top:10px;padding-bottom:10px;text-align:right;padding-right:10px;border-right:1px solid #cdcbd4;">
              <?php echo "P".$row['price'].".00";?>
              </td>
               <td style="padding-top:10px;padding-bottom:10px;text-align:right;padding-right:10px;border-right:1px solid #cdcbd4;">
              <?php echo "P".number_format($sum).".00";
			  $tot = $sum;
			  $nprice=$nprice + $tot;
		
			  ?>
              </td>
            
              </tr>
              <?php } 
			  $sql="SELECT ammount_paid FROM accounting_summary WHERE id='".$id."'";
			  $res=mysql_query($sql);
			  //var_dump($sql);die();
			  while($row=mysql_fetch_array($res)) {
				  $paid=$row['ammount_paid'];
			  ?>
              <tr><td colspan="6" style="padding-right:10px;padding-top:10px;padding-bottom:10px;font-size:13px;font-weight:bold;" align="right">Paid: &nbsp;&nbsp;P<?php echo number_format($paid);?>.00</td></tr>
              <?php } ?>
              <tr><td colspan="6" style="padding-right:10px;padding-top:10px;padding-bottom:10px;font-size:13px;font-weight:bold;" align="right">
              <?php echo "Total: &nbsp;&nbsp;P".number_format($nprice).".00";?>
              </td></tr>
              <?php if($paid) { ?>
              <tr><td colspan="6" style="padding-right:10px;padding-top:10px;padding-bottom:10px;font-size:13px;font-weight:bold;" align="right">
              <?php 
			  //var_dump($nprice);die();
			  $val=0;
			  $nprice=(string)$nprice;
			  //$paid=(int)$paid;			  
			  $val=$nprice-$paid;
			  //var_dump($nprice);var_dump($paid);
			  //var_dump($val);die();
			  echo "New Total: &nbsp;&nbsp;P".number_format($val).".00";?>
              </td></tr>
              <?php } ?>
              </table>
              
              </td>
              </tr>
              </table>
              <div style="clear:both;height:10px;"></div>
             <!-- <a href="simple_accounting_list.php">Back</a>-->
              <input type="button" class="submit2" name="back" value="Back" onclick="window.location='simple_accounting_list.php'" style="margin-left:20px;"/>
              </div>
			  
			  
			  
			  <?php } 
			  else { ?>
              
                    <tr>
        <td height="47" style="background:url(img/2.jpg);">
       <img src="img/transaction_list.png" height="20" width="146" style="margin-top:-5px;margin-left:22px;"/>
        </td>
      </tr>
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
              <tr><td style="font-weight:bold;background-color:#FFF;width:160px;font-size:14px;padding-top:8px;padding-bottom:8px;text-align:center;border-right:1px solid #cdcbd4;">
              <a href="simple_accounting_list.php" style="color:#333;text-decoration:none;">List of Transactions
              </td>
              <td style="padding-top:8px;padding-bottom:8px;text-align:center;border-right:1px solid #cdcbd4;font-weight:bold;background-image:url(img/option_center_check.png);font-size:14px;width:160px;">
             <a href="dentist_simple_accounting.php" style="color:#333;text-decoration:none;"> Add Transactions
              </td>
              <td style="text-align:center;padding-top:8px;padding-bottom:8px;border-right:1px solid #cdcbd4;background-image:url(img/option_center_check.png);font-weight:bold;width:150px;font-size:14px;">
              <a href="transaction.php?id=close" style="color:#333;text-decoration:none;">Closed transaction</a>
              </td>
                <td style="text-align:center;padding-top:8px;padding-bottom:8px;border-right:1px solid #cdcbd4;background-image:url(img/option_center_check.png);font-weight:bold;width:150px;font-size:14px;">
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
              <a href="simple_accounting_list.php?arr=paid_checker" style="text-decoration:underline;color:#333;" title="Sort by Status">Status</a>
              </td>
              <td style="width:130px;padding-top:10px;padding-bottom:10px;text-align:center;border-right:1px solid #cdcbd4;">
              <a href="simple_accounting_list.php?arr=draft_date" style="text-decoration:underline;color:#333;" title="Sort by Date">Date</a>
              </td>
              <td style="width:50px;padding-top:10px;padding-bottom:10px;text-align:center;border-right:1px solid #cdcbd4;"><a href="simple_accounting_list.php?arr=draft_id" style="text-decoration:underline;color:#333;" title="Sort by ID">ID</a></td>
              <td style="width:190px;padding-top:10px;padding-bottom:10px;text-align:center;border-right:1px solid #cdcbd4;"><a href="simple_accounting_list.php?arr=patient_name" style="text-decoration:underline;color:#333;" title="Sory by Name">Patient Name</a></td>
              <td style="width:130px;padding-top:10px;padding-bottom:10px;text-align:center;border-right:1px solid #cdcbd4;">Amount Paid</td>
              <td style="width:102px;padding-top:10px;padding-bottom:10px;text-align:center;border-right:1px solid #cdcbd4;">Total</td>
              </tr>
              <?php 
			  $i=0;
			  
			     $page = (int) (!isset($_GET["page"]) ? 1 : $_GET["page"]);
			  //var_dump($page);die();
    	$limit = 20;
    	$startpoint = ($page * $limit) - $limit;
		 //$statement = "`records` where `active` = 1";
			  
			  if(isset($_GET['arr'])) {
				$arr=$_GET['arr'];  
			  
			  if($arr=="draft_id") {
				$sql="SELECT * FROM accounting_summary WHERE dentist_id='".$dentist_id."' ORDER BY $arr ASC LIMIT {$startpoint} , {$limit}"; 
				$res=mysql_query($sql);
				//var_dump($sql);die();
				
				  $statement = "accounting_summary WHERE dentist_id='".$dentist_id."' ORDER BY $arr ASC";
			  }
			  
			  else if($arr=="paid_checker") {
			$sql="SELECT * FROM accounting_summary WHERE dentist_id='".$dentist_id."' ORDER BY $arr DESC LIMIT {$startpoint} , {$limit}"; 
				$res=mysql_query($sql); 
				
				$statement = "accounting_summary WHERE dentist_id='".$dentist_id."' ORDER BY $arr DESC";
				
			  }
			  else if($arr=="draft_date") {
			$sql="SELECT * FROM accounting_summary WHERE dentist_id='".$dentist_id."' ORDER BY $arr DESC LIMIT {$startpoint} , {$limit}"; 
				$res=mysql_query($sql); 
				
				$statement = "accounting_summary WHERE dentist_id='".$dentist_id."' ORDER BY $arr ASC";
				
			  }
			   else if($arr=="patient_name") {
			$sql="SELECT * FROM accounting_summary  WHERE dentist_id='".$dentist_id."' ORDER BY $arr ASC LIMIT {$startpoint} , {$limit}"; 
				$res=mysql_query($sql); 
				
				$statement = "accounting_summary  WHERE dentist_id='".$dentist_id."' ORDER BY $arr ASC";
			  } }
			  
			  else {
				  
				  //var_dump($page);var_dump($startpoint);var_dump($limit);die();
			  $sql="SELECT * FROM accounting_summary WHERE dentist_id='".$dentist_id."' ORDER BY draft_date DESC LIMIT {$startpoint} , {$limit}";
			  $res=mysql_query($sql); 
			  
			 // var_dump($sql);die();
			  
			  $statement = "accounting_summary WHERE dentist_id='".$dentist_id."'";
			  
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
              
              <tr style="font-size:15px;color:#333;cursor:pointer;" onclick="window.location='simple_accounting_list.php?key=<?php echo $row['draft_id'];?>'">
              <td style="padding-top:5px;padding-bottom:5px;border-bottom:1px solid #e5e3e3;text-align:center;">
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
              <td style="padding-top:5px;padding-bottom:5px;border-bottom:1px solid #e5e3e3;text-align:center;">
              <?php echo $month." ".$d.", ".$y;?>
              </td>
                 <td style="padding-top:5px;padding-bottom:5px;border-bottom:1px solid #e5e3e3;text-align:center;">
              <?php echo $row['draft_id'];?>
              </td>
                  <td style="padding-top:5px;padding-bottom:5px;border-bottom:1px solid #e5e3e3;text-align:left;padding-left:10px;">
              <?php echo $row['patient_name'];?>
              </td>
                <td style="padding-top:5px;padding-bottom:5px;border-bottom:1px solid #e5e3e3;text-align:right;padding-right:10px;">
              <?php $ammount=$row['ammount_paid'];
			  if(empty($ammount))
			  { echo "P0.00"; } 
			  else {
				echo "P".number_format($ammount).".00";  
			  }
			  ?>
              </td>
              <td style="padding-top:5px;padding-bottom:5px;border-bottom:1px solid #e5e3e3;text-align:right;padding-right:10px;">
              <?php 
			 /* if($check=="yes") {
				 
			  }else {
				  
			  }*/
			 
			  echo "P".number_format($total).".00";
			  //$main_total=$main_total+$total;
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
              <tr><td colspan="6" align="right" style="padding-right:10px;font-family:Arial, Helvetica, sans-serif;font-size:15px;font-weight:bold;">
              
              <?php 
			  $no="no";
			  $ctr=0;
			  $s="SELECT * FROM accounting_summary WHERE dentist_id='".$dentist_id."' AND paid_checker='".$no."'";
			  $r=mysql_query($s);
			  while($w=mysql_fetch_array($r)) {
				$total=$w['total'];  
			    $ctr=$ctr+$total;
			  }
			  
			  echo "Total for open transaction:  <span style=\"color:#F00;font-weight:normal;\">P".number_format($ctr);echo ".00</span>";
			  ?>
              
              </td></tr>
              
             <!-- <tr><td colspan="6"><hr /></td></tr>-->
              <tr><td colspan="6" align="right" style="padding-right:10px;font-family:Arial, Helvetica, sans-serif;font-size:15px;font-weight:bold;">
              <?php
			  $amt=0;
              $sq="SELECT * FROM accounting_summary WHERE dentist_id='".$dentist_id."'";
			  $re=mysql_query($sq);
			  //var_dump($re);die();
			  while($ro=mysql_fetch_array($re)) {
				$amp=$ro['ammount_paid'];
				$tus=$ro['total'];
				if($amp==$tus) {
				       $amt=$amt+$amp;       
							   }
					//var_dump($amp);		   
			  }
			  echo "Total for closed transaction:  <span style=\"font-weight:normal;\">P".number_format($amt);echo ".00</span>";
			  
			  
			  $main_total=$amt+$ctr;
			 
              ?>
              </td></tr>
             <!-- <tr><td colspan="6"><hr /></td></tr>-->
              <tr><td colspan="6" align="right" style="padding-right:10px;font-family:Arial, Helvetica, sans-serif;font-size:15px;font-weight:bold;">Total: <span style="font-weight:normal;">P<?php echo number_format($main_total);?>.00</span></td></tr>
              </table>
                            
              </td></tr>
              </table> 
              </div>
              <?php } ?>
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

<script type="text/javascript">

function popup1(pUrl, pName, pWidth, pHeight, pScroll)
{
	LeftPosition = (screen.width) ? (screen.width-pWidth)   / 2 : 0;
	TopPosition  = (screen.height)? (screen.height-pHeight) / 2 : 0;
	settings = 'height='+pHeight+', width='+pWidth+', top='+TopPosition+', left='+LeftPosition+', scrollbars='+pScroll+', resizable';
	win = window.open(pUrl, pName, settings)
}
</script>


