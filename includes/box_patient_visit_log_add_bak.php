<?php 

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




if(isset($_GET['id'])){
$id = $_GET['id'];}


if(isset($_GET['key'])){
$key = $_GET['key'];
$id=$_GET['id'];


$sql="DELETE FROM patient_logs WHERE id='".$key."'";
$res=mysql_query($sql);
}

$sql="SELECT * FROM patient_list WHERE id=".$id."";
$res=mysql_query($sql);
while($row=mysql_fetch_array($res))
{
$name=$row["patient_name"];	
}

if(isset($_POST['save_logs'])){
$id=mysql_real_escape_string($_POST['patient_id']);
$x=$dentist_id;
$tooth_num=mysql_real_escape_string($_POST['tooth_num']);
/*$facial=mysql_real_escape_string($_POST['facial']);
$mesial=mysql_real_escape_string($_POST['mesial']);
$ligual=mysql_real_escape_string($_POST['ligual']);
$occlusal=mysql_real_escape_string($_POST['occlusal']);
$distal=mysql_real_escape_string($_POST['distal']);*/
$surface=mysql_real_escape_string($_POST['surface']);
$notes=mysql_real_escape_string($_POST['treatment_notes']);
$initial=mysql_real_escape_string($_POST['initial']);
$fee=mysql_real_escape_string($_POST['fee']);

$sql="INSERT INTO patient_logs (patient_id,dentist_id,log_date,tooth_num,surface,treatment_notes,intial,fee) 
VALUES('$id','$x',NOW(),'$tooth_num','$surface','$notes','$initial','$fee')";
$res=mysql_query($sql);

$sql="UPDATE patient_list SET log_date=NOW() WHERE id='".$id."'";
$res=mysql_query($sql);

header('Location: patient_visit_log.php?id='.$id.'');

}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="pagination/css/pagination.css" rel="stylesheet" type="text/css" />
	<link href="pagination/css/B_blue.css" rel="stylesheet" type="text/css" />
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
width:650px;
height:350px;
margin-top:-250px;
margin-left:-150px;
z-index: 9002;

 border-style: solid;
 border-width: 2px;
 -moz-border-radius: 5px;
 -webkit-border-radius: 5px;
 border-radius: 5px;

}
/*date*/

  .records {
            width: 510px;
            margin: 5px;
            padding:2px 5px;
            border:1px solid #B6B6B6;
        }
        
        .record {
            color: #474747;
            margin: 5px 0;
            padding: 3px 5px;
        	background:#E6E6E6;  
            border: 1px solid #B6B6B6;
            cursor: pointer;
            letter-spacing: 2px;
        }
        .record:hover {
            background:#D3D2D2;
        }
        
        
        .round {
        	-moz-border-radius:8px;
        	-khtml-border-radius: 8px;
        	-webkit-border-radius: 8px;
        	border-radius:8px;    
        }    
        
        p.createdBy{
            padding:5px;
            width: 510px;
        	font-size:14px;
        	text-align:center;
        }
        p.createdBy a {color: #666666;text-decoration: none;}  
</style>

<script type="text/javascript">
function Onsave()  
{  
if(confirm('Do you want to save changes ?')==true)  
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
                <td width="661" align="center" style="background: url(img/t3.jpg);"><img src="img/t_add.png" width="82" height="18" alt="" /></td>
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
        <td align="right"><!--<input type="submit" name="update" value="UPDATE" class="submit" style="margin-right:10px;margin-top:6px;"/>
     <input type="submit" name="cancel" value="CANCEL" class="submit" style="margin-right:17px;margin-top:6px;" />-->
     <input type="button" onclick="divPrint();" name="print" value="PRINT" class="submit" style="margin-right:17px;margin-top:-4px;" /></td></tr></table>
      </tr>
      <tr>
        <td colspan="2" valign="top" style="background:url(img/3.jpg); padding-bottom:10px;"><div style="margin-top:-8px; position: relative;">
          <table width="690" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td bgcolor="#FFFFFF" style="border-left:1px solid #a0a8ac; border-bottom:1px solid #a0a8ac; border-right:1px solid #a0a8ac;"><!--<p>&nbsp;</p>-->
                <!--<img src="img/menu_visit.png" width="691" height="35" border="0" usemap="#Map2" />
                <map name="Map2" id="Map2">
                  <!--<area shape="rect" coords="3,3,97,33" href="#" />
                  <area shape="rect" coords="103,3,217,32" href="patient_medical_edit.php" />
                  <area shape="rect" coords="222,3,331,32" href="patient_dental_edit.php" />
                  <area shape="rect" coords="640,2,689,31" href="patient_visit_log_edit.php?id=<?php //echo $id;?>" />
  <area shape="rect" coords="2,2,97,33" href="patient_info.php?id=<?php //echo $id;?>" />
  <area shape="rect" coords="106,2,217,32" href="patient_medical.php?id=<?php //echo $id;?>" />
  <area shape="rect" coords="223,2,329,32" href="patient_dental.php?id=<?php //echo $id;?>" />
  <area shape="rect" coords="337,2,427,31" href="patient_tooth_chart.php?id=<?php //echo $id;?>" />
  <area shape="rect" coords="434,3,504,31" href="# />
  <area shape="rect" coords="511,3,572,31" href="patient_others.php?id=<?php //echo $id;?>" />
  <area shape="rect" coords="579,3,633,31" href="patient_notes.php?id=<?php //echo $id;?>" />
                </map>-->
                
                
                <?php /* <div id="blanket" style="display:none;"></div>
            <!--popupdiv-->
           
            <div id="popUpDiv" style="display:none;">
            <form method="post" action="" enctype="multipart/form-data">
            <table cellpadding="0" cellspacing="0" border="0" style="font-family:Arial, Helvetica, sans-serif;" width="100%">
            <tr><td height="45" width="100%" style="background-color:#0281aa;">
            <span style="margin-left:20px;color:#FFF;font-size:20px;font-weight:bold;">Record Log</span>
            </td></tr>
            <tr><td>
            <div style="margin:0 auto;width:600px;">
            <table cellpadding="0" cellspacing="0" border="0">
            <tr><td colspan="2"><div style="clear:both;height:15px;"></div></td></tr>
            <tr><td style="width:160px;text-align:right;color:#333;font-size:16px;font-weight:bold;">
            Tooth Number:
            </td>
            <td style="padding-left:28px;"><input type="text" name="tooth_num" style="width:70px;"/></td>
            </tr>
            <tr><td><div style="clear:both;height:15px;"></div></td></tr>
            <tr><td style="width:160px;text-align:right;color:#333;font-size:16px;font-weight:bold;">
            Surface:
            </td>
            <td style="padding-left:26px;">
            <table cellpadding="0" cellspacing="0" border="0">
             <tr><td style="width:90px;">
            <input type="radio" name="surface" value="facial"/>Facial 
             </td><td style="width:90px;">
            <input type="radio" name="surface" value="mesial"/>Mesial 
             </td><td style="width:90px;">
            <input type="radio" name="surface" value="ligual"/>Ligual 
             </td><td style="width:90px;">
            <input type="radio" name="surface" value="occlusal"/>Occlusal 
             </td><td style="width:90px;">
            <input type="radio" name="surface" value="distal"/>Distal 
             </td></tr>
            </table>
            </td>
            </tr>
            <tr><td><div style="clear:both;height:15px;"></div></td></tr>
            <tr><td style="width:160px;text-align:right;color:#333;font-size:16px;font-weight:bold;">
            Treatment notes:
            </td>
            <td style="padding-left:28px;color:#333;font-size:14px;"><textarea name="treatment_notes" cols="45" rows="3" style="font-family:Arial, Helvetica, sans-serif;"/></textarea></td>
            </tr>
            <tr><td><div style="clear:both;height:15px;"></div></td></tr>
            <tr><td style="width:160px;text-align:right;color:#333;font-size:16px;font-weight:bold;">
            Initial:
            </td>
            <td style="padding-left:20px;color:#333;font-size:14px;;">P&nbsp;<input type="text" name="initial" style="width:100px;"/>&nbsp;.00</td>
            </tr>
            <tr><td><div style="clear:both;height:15px;"></div></td></tr>
            <tr><td style="width:160px;text-align:right;color:#333;font-size:16px;font-weight:bold;">
            Fee:
            </td>
            <td style="padding-left:20px;color:#333;font-size:14px;;">P&nbsp;<input type="text" name="fee" style="width:100px;"/>&nbsp;.00</td>
            </tr>
            
            <tr><td colspan="2">
            <div style="margin-left:120px;margin-top:20px;">
            <input type="submit" name="save_logs" class="submit2" />&nbsp;&nbsp;&nbsp;&nbsp;
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
            
             <!--popupdiv-->*/?>
                
                
                
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
              
                <td style="background-color:#FFF;width:85px;height:36px;padding-left:10px;"> 
                <a href="#" class="link_map">
                Visit Log
                </a>
                </td>
                
                
               
                <td style="background-image:url(img/option_center_check.png);width:50px;height:36px;padding-left:10px;"> 
                 <a href="patient_others.php?id=<?php echo $id;?>" class="link_map">
                Others
                </a>
                </td>
                
                 <td style="background-image:url(img/option_right_check.png);width:5px;height:36px;">&nbsp;</td>
               
                <td style="background-image:url(img/option_center_check.png);width:100px;height:36px;padding-left:15px;"> 
               <a href="patient_notes.php?id=<?php echo $id;?>" class="link_map">
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
           
           <!--content-->
         
           
           <tr><td style="background-color:#FFF;table-layout:fixed;">
       
       
        <form method="post" action="" enctype="multipart/form-data">
            <table cellpadding="0" cellspacing="0" border="0" style="font-family:Arial, Helvetica, sans-serif;" width="100%">
            <tr><td height="45" width="100%">
            <span style="margin-left:20px;color:#333;font-size:16px;font-weight:bold;">Add Record Log</span>
            </td></tr>
            <tr><td>
            <div style="margin:0 auto;width:600px;">
            <table cellpadding="0" cellspacing="0" border="0">
            <tr><td colspan="2"><div style="clear:both;height:15px;"></div></td></tr>
            <tr><td style="width:160px;text-align:right;color:#333;font-size:14px;font-weight:bold;">
            Tooth Number:
            </td>
            <td style="padding-left:28px;"><input type="text" name="tooth_num" style="width:70px;font-size:14px;"/></td>
            </tr>
            <tr><td><div style="clear:both;height:15px;"></div></td></tr>
            <tr><td style="width:160px;text-align:right;color:#333;font-size:14px;font-weight:bold;">
            Surface:
            </td>
            <td style="padding-left:26px;">
            <table cellpadding="0" cellspacing="0" border="0">
             <tr><td style="width:90px;">
            <input type="radio" name="surface" value="facial"/>Facial 
             </td><td style="width:90px;">
            <input type="radio" name="surface" value="mesial"/>Mesial 
             </td><td style="width:90px;">
            <input type="radio" name="surface" value="ligual"/>Ligual 
             </td><td style="width:90px;">
            <input type="radio" name="surface" value="occlusal"/>Occlusal 
             </td><td style="width:90px;">
            <input type="radio" name="surface" value="distal"/>Distal 
             </td></tr>
            </table>
            </td>
            </tr>
            <tr><td><div style="clear:both;height:15px;"></div></td></tr>
            <tr><td style="width:160px;text-align:right;color:#333;font-size:14px;font-weight:bold;">
            Treatment notes:
            </td>
            <td style="padding-left:28px;color:#333;font-size:14px;"><textarea name="treatment_notes" cols="45" rows="3" style="font-size:14px;font-family:Arial, Helvetica, sans-serif;"/></textarea></td>
            </tr>
            <tr><td><div style="clear:both;height:15px;"></div></td></tr>
            <tr><td style="width:160px;text-align:right;color:#333;font-size:14px;font-weight:bold;">
            Initial:
            </td>
            <td style="padding-left:20px;color:#333;font-size:14px;;">P&nbsp;<input type="text" name="initial" style="font-size:14px;width:100px;"/>&nbsp;.00</td>
            </tr>
            <tr><td><div style="clear:both;height:15px;"></div></td></tr>
            <tr><td style="width:160px;text-align:right;color:#333;font-size:14px;font-weight:bold;">
            Fee:
            </td>
            <td style="padding-left:20px;color:#333;font-size:14px;;">P&nbsp;<input type="text" name="fee" style="font-size:14px;width:100px;"/>&nbsp;.00</td>
            </tr>
            
            <tr><td colspan="2">
            <div style="margin-left:120px;margin-top:20px;">
            <input type="submit" name="save_logs" class="submit2" value="Save" onclick="return Onsave()" />&nbsp;&nbsp;&nbsp;&nbsp;
             <input type="button" name="cancel" class="submit2" value="Cancel" onclick="window.location='patient_visit_log.php?id=<?php echo $id;?>'"/>
            </div>
            </td></tr>
            <input type="hidden" name="patient_id" value="<?php echo $id;?>" />
            <tr><td>
            <div style="clear:both;height:15px;"></div>
            </td></tr>
            </table> 
            </form>
            </div> 
            </td></tr>
            
         
            </table>             
            
       
       
           </td></tr>
          </table>
        <!--</div>--></td>
    
     
        
      </tr>
      <tr>
        <td colspan="2"><img src="img/4.jpg" width="739" height="6" alt="" /></td>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>

