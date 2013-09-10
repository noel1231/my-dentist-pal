<?php 



include('config.php');

$id =$_SESSION['patient_id'];

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
<link href="pagination/css/pagination.css" rel="stylesheet" type="text/css" />
	<link href="pagination/css/B_blue.css" rel="stylesheet" type="text/css" />
<title>Untitled Document</title>
<script type="text/javascript">
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
	
	
</head>

<body>

  <!--<map name="Map" id="Map">
<area shape="rect" coords="8,1,131,42" href="messaging.php" />
  <area shape="rect" coords="138,2,263,41" href="received_message.php" />
  <area shape="rect" coords="638,2,689,33" href="patient_dental_edit.php" />
</map>--> <!--popupdiv-->
           
            <div id="popUpDiv" style="display:none;">
            <form method="post" action="" enctype="multipart/form-data">
            <table cellpadding="0" cellspacing="0" border="0" style="font-family:Arial, Helvetica, sans-serif;" width="100%">
            <tr><td height="45" width="100%" style="background-color:#0281aa;">
            <span style="margin-left:20px;color:#FFF;font-size:20px;font-weight:bold;">Record Notes</span>
            </td></tr>
            <tr><td>
            <div style="margin:0 auto;width:390px;">
            <table cellpadding="0" cellspacing="0" border="0">
            <tr><td><div style="clear:both;height:15px;"></div></td></tr>
            <tr><td style="width:130px;text-align:right;color:#333;font-size:16px;font-weight:bold;">
            Date Due
            </td>
            <td style="padding-left:38px;"><input type="text" name="date_due" id="datepicker" style="width:150px;"/></td>
            </tr>
            <tr><td><div style="clear:both;height:15px;"></div></td></tr>
            <tr><td style="width:130px;text-align:right;color:#333;font-size:16px;font-weight:bold;">
            Description
            </td>
            <td style="padding-left:38px;"><input type="text" name="description" style="width:200px;" /></td>
            </tr>
            <tr><td><div style="clear:both;height:15px;"></div></td></tr>
            <tr><td style="width:130px;text-align:right;color:#333;font-size:16px;font-weight:bold;">
            Ammount
            </td>
            <td style="padding-left:20px;color:#333;font-size:12px;">Php<input type="text" name="ammount" style="width:150px;"/>.00</td>
            </tr>
            <tr><td><div style="clear:both;height:15px;"></div></td></tr>
            <tr><td style="width:130px;text-align:right;color:#333;font-size:16px;font-weight:bold;">
            Downpayment
            </td>
            <td style="padding-left:20px;color:#333;font-size:12px;;">Php<input type="text" name="downpayment" style="width:150px;"/>.00</td>
            </tr>
            
            <tr><td colspan="2">
            <div style="margin-left:120px;margin-top:20px;">
            <input type="submit" name="save_notes" class="submit2" />&nbsp;&nbsp;&nbsp;&nbsp;
             <input type="button" name="cancel" class="submit2" value="Cancel" onclick="popup('popUpDiv')"/>
            </div>
            </td></tr>
            <input type="hidden" name="patient_id" value="<?php echo $id;?>" />
            </table> 
            </form>
            </div> 
            </td></tr>
            
         
            </table>             
            
            </div>
            
             <!--popupdiv-->
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>&nbsp;</td>
  </tr>
  <!--<tr>
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
         <?php /*<div style="width:130px; margin-left:10px; margin-bottom:-2px; float:left; z-index:999999999">
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
      </tr>*/?>
      <tr>
        <td colspan="2"><img src="../img/1.jpg" width="739" height="12" alt="" /></td>
      </tr>
      <tr>
        <td height="47" style="background:url(../img/2.jpg);">
        <table width="100%"><tr><td>
        <img src="../img/bar_patient.png" height="20" width="114" style="margin-top:-8px;margin-left:23px;"/></td>
        <td align="right"><!--<input type="submit" name="update" value="UPDATE" class="submit" style="margin-right:10px;margin-top:6px;"/>-->
     <input type="button" onclick="divPrint();" name="print" value="PRINT" class="submit" style="margin-right:17px;margin-top:-4px;" /></td></tr></table></td>
      </tr>
      <tr>
        <td colspan="2" valign="top" style="background:url(../img/3.jpg); padding-bottom:10px;"><div style="margin-top:-8px; position: relative;">
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
                
                <td style="background-image:url(../img/option_center_check.png);width:145px;height:36px;text-align:center;"> 
                <a href="patient_info.php" class="link_map">
                Patient Info
                </a>
                </td>
                
                
                <td style="background-image:url(../img/option_right_check.png);width:5px;height:36px;">&nbsp;</td>
               
                <td style="background-image:url(../img/option_center_check.png);width:175px;text-align:center;height:36px;"> 
                 <a href="patient_medical.php" class="link_map">
                Medical History
                </a>
                </td>
                
                <td style="background-image:url(../img/option_right_check.png);width:5px;height:36px;">&nbsp;</td>
               
                 <td style="background-image:url(../img/option_center_check.png);width:165px;height:36px;text-align:center;"> 
                <a href="patient_dental.php" class="link_map">
                Dental History
                 </a>
                </td>
               
                <td style="background-image:url(../img/option_right_check.png);width:5px;height:36px;">&nbsp;</td>
               
                <td style="background-image:url(../img/option_center_check.png);width:140px;height:36px;text-align:center;"> 
                 <a href="patient_tooth_chart.php" class="link_map">
                Tooth Chart
                </a>
                </td>
                
                 <td style="background-image:url(../img/option_right_check.png);width:5px;height:36px;">&nbsp;</td>
              
                <td style="background-image:url(../img/option_center_check.png);width:100px;height:36px;text-align:center;"> 
                <a href="patient_visit_log.php" class="link_map">
                Visit Log
                </a>
                </td>
                
                
               
                <!--<td style="background-image:url(../img/option_center_check.png);width:50px;height:36px;padding-left:10px;"> 
                 <a href="patient_others.php" class="link_map">
                Others
                </a>
                </td>-->
                
               
               
                <td style="background-color:#FFF;width:75px;height:36px;text-align:center;"> 
               <a href="#" class="link_map">
               Notes
              </a>
                </td>
              
             
                <!--<td style="background-color:#F00;width:50px;height:36px;padding-left:15px;"> 
              <a href="#" style="color:#FFF;font-family:Arial, Helvetica, sans-serif;font-weight:bold;font-size:13px;text-decoration:none;">
               Edit
                </a>
                </td>-->
                
                </tr>
                </table>
                <!--locations-->
                
                
                </td>
            </tr>
          
            <div id="blanket" style="display:none;"></div>
           <tr><td bgcolor="#FFFFFF" style="border-left:1px solid #a0a8ac; border-bottom:1px solid #a0a8ac; border-right:1px solid #a0a8ac;">
           
          
            
            <div style="margin:0 auto;width:680px;margin-top:20px;">
            <table cellpadding="0" cellspacing="0" border="0" width="100%">
            <tr><td style="float:left;padding-left:20px;">
           <!-- <input type="button" name="add" value="Add" class="submit2" onclick="popup('popUpDiv')"/>-->
            
            </td>
        
            </tr>
            </table>
            
            <div style="clear:both;height:10px;"></div>
            
             <!--firstcontent--><table cellpadding="0" cellspacing="0" border="0" style="padding-left:30px;">
              <tr><td style="border:1px solid #a0a8ac;">
              <!--check all holder--><div style="float:left;">
          
          
              <div style="float:left;background-image:url(../img/option_center_check.png);width:53px;height:36px;">
              
           
              
              <img src="../img/flag.png" style="margin-top:10px;margin-left:18px;"/>
              </div>
              <div style="float:left;background-image:url(../img/option_right_check.png);width:5px;height:36px;"></div>
              <!--check all holder--></div>
              
              
              <!--name holder-->
              <div style="float:left;">
              <div style="float:left;background-image:url(../img/option_name_repeat.png);width:95px;height:26px;font-family:Arial, Helvetica, sans-serif;font-size:13px;font-weight:bold;color:#373838;padding-top:10px;padding-left:17px;"><a href="patient_notes.php?id=<?php echo $id;?>&amp;arr=notes_date_noted" style="text-decoration:underline;color:#333;" title="Sort by Date Noted">Date Noted</a></div>
              <div style="float:left;background-image:url(../img/option_right_check.png);width:5px;height:36px;"></div>
              </div>
              <!--name holder-->
              
              <!--subject holder-->
              <div style="float:left;">
              <div style="float:left;background-image:url(../img/option_name_repeat.png);width:95px;height:26px;font-family:Arial, Helvetica, sans-serif;font-size:13px;font-weight:bold;color:#373838;padding-top:10px;padding-left:17px;"><a href="patient_notes.php?id=<?php echo $id;?>&amp;arr=notes_date_due" style="text-decoration:underline;color:#333;" title="Sort by Date Due">Date Due</a></div>
              <div style="float:left;background-image:url(../img/option_right_check.png);width:5px;height:36px;"></div>
              </div>
              <!--subject holder-->
              
              <!--last visit-->
              <div style="float:left;">
              <div style="float:left;background-image:url(../img/option_name_repeat.png);width:170px;height:26px;font-family:Arial, Helvetica, sans-serif;font-size:13px;font-weight:bold;color:#373838;padding-top:10px;padding-left:37px;"><a href="patient_notes.php?id=<?php echo $id;?>&amp;arr=notes_description" style="text-decoration:underline;color:#333;" title="Sort by Description">Description</a></div>
              <div style="float:left;background-image:url(../img/option_right_check.png);width:5px;height:36px;"></div>
              </div>
              <!--last visit-->
              
            
              
               <!--action holder-->
              <div style="float:left;">
              <div style="float:left;background-image:url(../img/option_name_repeat.png);width:88px;height:26px;font-family:Arial, Helvetica, sans-serif;font-size:13px;font-weight:bold;color:#373838;padding-top:10px;padding-left:17px;">Credit</div>
              <div style="float:left;background-image:url(../img/option_right_check.png);width:5px;height:36px;"></div>
              </div>
              <!--action holder-->
              
                <!--last visit-->
              
              <!--last visit-->
              
              
              </td></tr>
              <!--list-->
              
              <tr><td>
              <table cellpadding="0" cellspacing="0" border="0" style="font-color:#333;font-family:Arial, Helvetica, sans-serif;font-size:13px;border:1px solid #a0a8ac;">
              <?php
			  
			     $page = (int) (!isset($_GET["page"]) ? 1 : $_GET["page"]);
			  //var_dump($page);die();
    	$limit = 20;
    	$startpoint = ($page * $limit) - $limit;
		 //$statement = "`records` where `active` = 1";
			  
			   if(isset($_GET['arr']))
               { 
			   
			   $sort_by=$_GET["arr"];
			  
			   if($sort_by=="notes_date_due")
			   { $sort="notes_date_due"; 
			   $arrange="DESC";
			   }
			   else if($sort_by=="notes_description")
			   { $sort="notes_description";
			   $arrange="ASC";
			   }
			    else if($sort_by=="notes_date_noted")
			   { $sort="notes_date_noted";
			   $arrange="DESC";
			   }
			   
			   else
			   { $sort="";} 
			   
			     $sql="SELECT * FROM patient_credits WHERE patient_id='".$id."' ORDER BY $sort $arrange LIMIT {$startpoint} , {$limit}";
			  $res=mysql_query($sql);
			  
			  
			  $statement = "patient_credits WHERE patient_id='".$id."' ORDER BY $sort $arrange"; }
			  
			  else { 
			  $sql="SELECT * FROM patient_credits WHERE patient_id='".$id."' LIMIT {$startpoint} , {$limit}";
			  $res=mysql_query($sql);
			  
			  
			  $statement = "patient_credits WHERE patient_id='".$id."'"; }
			  
			  $i=0;
			  $f=0;
			  while($row=mysql_fetch_array($res)){
			  $i++;
			  $f=$i%2;
	if($f==0)
	{ $back="#FFF";} 
	else
	{ $back="#e0eefa";}
			  ?>
              <tr style="background-color:<?php echo $back;?>;">
              <td style="padding-top:10px;width:55px;text-align:center;padding-bottom:10px;">
              <img src="../img/flag.png" />
              </td>
              <td style="padding-top:10px;width:120px;text-align:center;padding-bottom:10px;">
              <?php echo $row['notes_date_noted'];?>
              </td>
              <td style="padding-top:10px;width:117px;text-align:center;padding-bottom:10px;">
              <?php echo $row['notes_date_due'];?>
              </td>
              <td style="padding-top:10px;width:202px;padding-left:10px;text-align:left;padding-bottom:10px;">
              <?php echo $row['notes_description'];?>
              </td>
              <td style="padding-top:10px;width:104px;text-align:right;padding-right:6px;padding-bottom:10px;">
              <?php $ammount=$row['notes_ammount'];
			  		$credit=$row['notes_downpayment'];
					$new_credit=$ammount-$credit;
					echo "P &nbsp;&nbsp;".number_format($new_credit).".00";
			  ?>
              </td>
             
              </tr>
              <?php } ?>
              <tr>
              <?php if($i==$limit) { ?>
		   <td style="padding-top:10px;padding-bottom:10px;">
		   <?php } else { ?>
		   <td><?php } ?>
		         <?php
			  //
	echo pagination($statement,$limit,$page);
	//var_dump($statement);die();
?>
		   </td></tr>
              </table>
              </td></tr>
              
            
              <!--list-->
               <tr>  <td style="float:right;padding-right:5px;padding-top:20px;padding-bottom:20px;">
               <!--<input type="button" name="add" value="Add" class="submit2" onclick="popup('popUpDiv')"/>-->
                 
            <table cellpadding="0" cellspacing="0" border="0">
            <tr><td style="font-color:#333;font-family:Arial, Helvetica, sans-serif;font-size:14px;text-align:right;">
          
            Payed Balance: <span style="color:#333;font-size:12px;font-weight:bold;">P&nbsp;&nbsp;<?php echo number_format($yyy);?>.00</span>
           
            </td></tr>
             <tr><td style="font-color:#333;font-family:Arial, Helvetica, sans-serif;font-size:14px;text-align:right;">
          <?php 
		  $w=$xxx-$yyy;?>
            Credits Left: <span style="color:#333;font-size:12px;font-weight:bold;">P&nbsp;&nbsp;<?php echo number_format($w);?>.00</span>
           
            </td></tr>
            </table>
            </td>
              
             </tr>
              <!--firstcontent--></table>
            
            </div>
            
            </td></tr>
            
            <tr><td>
            <table cellpadding="0" cellspacing="0" border="0">
            <tr><td>
            
            </td></tr>
            </table>
            </td></tr>
            
            </table>
        </div></td>
    
     
        
      </tr>
      <tr>
        <td colspan="2"><img src="../img/4.jpg" width="739" height="6" alt="" /></td>
      </tr>
    </table></td>
  </tr>
</table>
</body></html>
 <script type="text/javascript">
function toggle(div_id) {
	var el = document.getElementById(div_id);
	if ( el.style.display == 'none' ) {	el.style.display = 'block';}
	else {el.style.display = 'none';}
}
function blanket_size(popUpDivVar) {
	if (typeof window.innerWidth != 'undefined') {
		viewportheight = window.innerHeight;
	} else {
		viewportheight = document.documentElement.clientHeight;
	}
	if ((viewportheight > document.body.parentNode.scrollHeight) && (viewportheight > document.body.parentNode.clientHeight)) {
		blanket_height = viewportheight;
	} else {
		if (document.body.parentNode.clientHeight > document.body.parentNode.scrollHeight) {
			blanket_height = document.body.parentNode.clientHeight;
		} else {
			blanket_height = document.body.parentNode.scrollHeight;
		}
	}
	var blanket = document.getElementById('blanket');
	blanket.style.height = blanket_height + 'px';
	var popUpDiv = document.getElementById(popUpDivVar);
	popUpDiv_height=blanket_height/2-150;//150 is half popup's height
	popUpDiv.style.top = popUpDiv_height + 'px';
}

function window_pos(popUpDivVar) {
	if (typeof window.innerWidth != 'undefined') {
		viewportwidth = window.innerHeight;
	} else {
		viewportwidth = document.documentElement.clientHeight;
	}
	if ((viewportwidth > document.body.parentNode.scrollWidth) && (viewportwidth > document.body.parentNode.clientWidth)) {
		window_width = viewportwidth;
	} else {
		if (document.body.parentNode.clientWidth > document.body.parentNode.scrollWidth) {
			window_width = document.body.parentNode.clientWidth;
		} else {
			window_width = document.body.parentNode.scrollWidth;
		}
	}
	var popUpDiv = document.getElementById(popUpDivVar);
	window_width=window_width/2-150;//150 is half popup's width
	popUpDiv.style.left = window_width + 'px';
}
function popup(windowname) {
	
	/*document.getElementById('what_picture').value = x;
	document.getElementById('what_number').value = y;*/
	
	blanket_size(windowname);
	window_pos(windowname);
	toggle('blanket');
	toggle(windowname);		
}
</script>

<script type="text/javascript">

function popup1(pUrl, pName, pWidth, pHeight, pScroll)
{
	LeftPosition = (screen.width) ? (screen.width-pWidth)   / 2 : 0;
	TopPosition  = (screen.height)? (screen.height-pHeight) / 2 : 0;
	settings = 'height='+pHeight+', width='+pWidth+', top='+TopPosition+', left='+LeftPosition+', scrollbars='+pScroll+', resizable';
	win = window.open(pUrl, pName, settings)
}
</script>


<script language="javascript" type="text/javascript">
function divPrint()
{

var display_setting="toolbar=yes,location=no,directories=yes,menubar=yes,";
display_setting+="scrollbars=yes,width=750, height=600, left=100, top=25";

var content_innerhtml = document.getElementById("print_it").innerHTML;
var document_print=window.open("","",display_setting);
document_print.document.open();
document_print.document.write('<html><head><title>Print Patient Notes</title></head>');
document_print.document.write('<body style="font-family:verdana; font-size:12px;" onLoad="self.print();self.close();" >');
document_print.document.write(content_innerhtml);
document_print.document.write('</body></html>');
document_print.print();
document_print.document.close();
return false;
}

</script>  
