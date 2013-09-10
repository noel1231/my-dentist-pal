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
$id = $_GET['id'];}

if(isset($_GET['key'])){
$id_key = $_GET['key'];

$sql="DELETE FROM patient_upload WHERE id='".$id_key."'";
$res=mysql_query($sql);
}

$sql="SELECT * FROM patient_list WHERE id=".$id."";
$res=mysql_query($sql);
while($row=mysql_fetch_array($res))
{
$name=$row["patient_name"];	
}

if(isset($_POST['delete_all']))
{
		for($i=0;$i<count($_POST["check"]);$i++){
		if($_POST["check"][$i] != "") {
			$qwerty="DELETE FROM patient_upload WHERE id='".$_POST['check'][$i]."'";
			$res=mysql_query($qwerty);
	}}
	}

//var_dump($res);die();
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

function Link_to_mail()
{
window.location='message_compose.php';	
}

</script> 
</head>

<body style="font-family:Arial, Helvetica, sans-serif;">
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
                <td width="661" align="center" style="background: url(img/t3.jpg);"><a href="patient_list.php"><img src="img/t_patient_list.png" width="98" height="18" alt="" /></a></td>
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
        <!--</div>--></td>
      </tr>
      <tr>
        <td><img src="img/1.jpg" width="739" height="12" alt="" /></td>
      </tr>
      <tr>
        <td height="47" style="background:url(img/2.jpg);">
        <table width="100%"><tr><td>
        <img src="img/bar_patient.png" height="20" width="114" style="margin-top:-8px;margin-left:23px;"/></td>
        <td align="right"><!--<input type="text" name="search_field" class="search" value="Search patient here" style="margin-right:10px;margin-top:-4px;"/>-->
        <input type="button" onclick="divPrint();" name="print" value="PRINT" class="submit" style="margin-right:17px;margin-top:-4px;"/>
     <!--<input type="submit" name="search" value="SEARCH" class="submit" style="margin-right:17px;margin-top:-4px;" />--></td></tr></table>
        </td>
        
      </tr>
      <tr>
        <td valign="top" style="background:url(img/3.jpg); padding-bottom:10px;"><div style="margin-top:-8px; position: relative;">
          <table width="690" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td bgcolor="#FFFFFF" style="border-left:1px solid #a0a8ac; border-bottom:1px solid #a0a8ac; border-right:1px solid #a0a8ac;"><!--<p>&nbsp;</p>-->
              <!--conentholder--><table cellpadding="0" cellspacing="0" border="0">
              <tr><td>
              <!--menucontent-->
               <table cellspacing="0" cellpadding="0" border="0">
               <tr><td>
               <!--<img src="img/menu_others.png" width="689" height="35" border="0" usemap="#Map2"/>
               <map name="Map2" id="Map2">
                  <area shape="rect" coords="3,3,97,33" href="patient_info.php" />
                  <area shape="rect" coords="103,3,217,32" href="patient_medical.php" />
                  <area shape="rect" coords="222,3,331,32" href="patient_dental.php" />
                  <area shape="rect" coords="337,3,428,32" href="patient_tooth_chart.php" />
                  <area shape="rect" coords="433,3,505,32" href="patient_visit_log.php" />
                  <area shape="rect" coords="511,3,573,32" href="#" />
                  <area shape="rect" coords="578,3,634,32" href="patient_notes.php" />
                  <!--<area shape="rect" coords="640,4,687,32" href="patient_info.php" />
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
               
                <td style="background-color:#FFF;width:55px;height:36px;padding-left:10px;"> 
                 <a href="#" class="link_map">
                Others
                </a>
                </td>
                
                 
               
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
                
                
                
               </td></tr>
               </table>
               <!--menucontent--></td></tr>
               <form name="frmMain" action="" method="post">
               <tr><td style="padding-top:20px;padding-left:20px;">
               
              <!--firstcontent--><table id="print_it" cellpadding="0" cellspacing="0" border="0">
              <tr><td>
              <!--check all holder--><div style="float:left;">
              
              <div style="float:left;background-image:url(img/option_center_check.png);width:53px;height:36px;">
              
              <input name="CheckAll" type="checkbox" id="CheckAll" value="Y"  onClick="ClickCheckAll(this);" style="margin-top:12px;margin-left:22px;"/>
              </div>
              <div style="float:left;background-image:url(img/option_right_check.png);width:5px;height:36px;"></div>
              <!--check all holder--></div>
              
              
              <!--name holder-->
              <div style="float:left;">
              <div style="float:left;background-image:url(img/option_name_repeat.png);width:234px;height:26px;font-family:Arial, Helvetica, sans-serif;font-size:13px;font-weight:bold;color:#373838;padding-top:10px;text-align:center;"><a href="patient_others.php?id=<?php echo $id;?>&amp;arr=file_name" style="text-decoration:underline;color:#333;" title="Sort by File Name">File Name</a></div>
              <div style="float:left;background-image:url(img/option_right_check.png);width:5px;height:36px;"></div>
              </div>
              <!--name holder-->
              
              <!--last visit-->
              <div style="float:left;">
              <div style="float:left;background-image:url(img/option_name_repeat.png);width:237px;height:26px;font-family:Arial, Helvetica, sans-serif;font-size:13px;font-weight:bold;color:#373838;padding-top:10px;text-align:center;"><a href="patient_others.php?id=<?php echo $id;?>&amp;arr=date_uploaded" style="text-decoration:underline;color:#333;" title="Sort by Date Uploaded">Date Uploaded</a></div>
              <div style="float:left;background-image:url(img/option_right_check.png);width:5px;height:36px;"></div>
              </div>
              <!--last visit-->
              
               <!--action holder-->
              <div style="float:left;">
              <div style="float:left;background-image:url(img/option_name_repeat.png);width:104px;height:26px;font-family:Arial, Helvetica, sans-serif;font-size:13px;font-weight:bold;color:#373838;padding-top:10px;text-align:center;">Action</div>
              <div style="float:left;background-image:url(img/option_right_check.png);width:5px;height:36px;"></div>
              </div>
              <!--action holder-->
              
              </td></tr>
              <!--firstcontent--></table>
              </td></tr>
              
              <!--content with scroll--><tr><td style="padding-left:20px;">
              
              <table cellpadding="0" cellspacing="0" border="0" style="border:1px solid #a0a8ac;" width="648" id="print_this">
              <tr><td>
              <div>
              <table cellpadding="0" cellspacing="0" border="0" style="font-family:Arial, Helvetica, sans-serif;font-size:12px;">
              <?php 
			 $x=$dentist_id;
			 
			  
		     $page = (int) (!isset($_GET["page"]) ? 1 : $_GET["page"]);
			  //var_dump($page);die();
    	$limit = 20;
    	$startpoint = ($page * $limit) - $limit;
		
		 if(isset($_GET['arr']))
               { 
			   
			   $sort_by=$_GET["arr"];
			  
			   if($sort_by=="file_name")
			   { $sort="file_name"; 
			   $arrange="ASC";
			   }
			   else if($sort_by=="date_uploaded")
			   { $sort="date_uploaded";
			   $arrange="DESC";
			   }
			  
			   else
			   { $sort="";}
			   
			     $sql="SELECT * FROM patient_upload WHERE patient_id='".$id."' AND dentist_id='".$x."' ORDER BY $sort $arrange LIMIT {$startpoint} , {$limit}";
			  $res=mysql_query($sql); 
			  
			   $statement = "patient_upload WHERE patient_id='".$id."' AND dentist_id='".$x."' ORDER BY $sort $arrange";
			   
			   }
			   
			   else {
			 
			  $sql="SELECT * FROM patient_upload WHERE patient_id='".$id."' AND dentist_id='".$x."' LIMIT {$startpoint} , {$limit}";
			  $res=mysql_query($sql); 
			  
			   $statement = "patient_upload WHERE patient_id='".$id."' AND dentist_id='".$x."'"; }
			  
			  while($row=mysql_fetch_array($res))
			  {
				  $i++;
				  $f=$i%2;
	if($f==0)
	{ $back="#FFF";} 
	else
	{ $back="#e0eefa";}
				  ?>
              <tr style="background-color:<?php echo $back;?>;font-size:14px;">
              <!--check--><td width="58" style="padding-top:10px;padding-bottom:10px;">
              <input type="checkbox" name="check[]" style="margin-left:22px;" id="check<?php echo $i;?>" value="<?php echo $row["id"];?>"/>
              <!--check--></td>
              <!--name--><td style="width:240px;padding-top:10px;padding-bottom:10px;">
              <div style="margin-left:18px;"><?php echo $row['file_name'];?></div>
              <!--name--></td>
              <!--last visit--><td style="width:240px;padding-top:10px;padding-bottom:10px;">
              <div style="margin-left:18px;"><?php echo $row['date_uploaded'];?></div>
              <!--last visit--></td>
              <!--action--><td width="110" style="padding-top:10px;padding-bottom:10px;">
             <table cellpadding="0" cellspacing="0" border="0">
             <tr>
             <!--read--><td width="25" style="padding-left:15px;"><!--<a href="play_video.php?file=<?php //echo $row['patient_file'];?>" onclick="popup(this.href,'name','500','400','no'); return false"><img src="img/icon_address_send.png" width="18" height="16"/></td>-->
             <!--print--><td width="25"><a href="download.php?f=<?php echo $row['download_name'];?>" title="Download"><img src="img/icon_address_option.png" width="18" height="18"/></td>
             <!--delete--><td><a href="patient_others.php?key=<?php echo $row['id'];?>&amp;id=<?php echo $row['patient_id'];?>" title="Delete" onclick="return onDelete();"><img src="img/icon_address_delete.png" width="15" height="15"/></a></td>
             </tr>
             </table>
              <!--action--></td>
              </tr>
              
              <?php } ?>
			  
			   <tr><td>
			   <table cellpadding="0" cellspacing="0" border="0">
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
		   </td></tr></table></td></tr>
			  
              </table>
              </div>
                <input type="hidden" name="hdnCount" value="<?php echo $i;?>">
              </td></tr>
              </table>
              
              <!--content with scroll--></td></tr>
             
              <tr><td><div style="clear:both;height:20px;"></div></td></tr>
              <!--contentholder--></table>
                </td>
            </tr>
          
             <!--bottom button--><tr><td>
              <!--<div style="clear:both;height:20px;"></div>-->
              <div style="margin:0 auto;width:690px;margin-top:15px;">
              <div style="float:left;"><input type="submit" name="delete_all" class="submit2" value="Delete all marked" onclick="return onDelete();"/></div>
                </form>
            <form method="post" action="upload.php" enctype="multipart/form-data">
              <div style="float:right;"><!--<input type="submit" name="apply" class="submit2" value="Apply" style="padding:2px 15px 2px 15px;"/>--><input type="file" name="upload_file" /></div>
              <div style="float:right;margin-right:15px;"><!--<select name="sort" />
              <option value="date">sort by Date</option>
<option value="sender">sort by Sender</option>
<option value="unread">sort by Unread</option>
              </select>--><input type="submit" class="submit2" name="upload" value="Upload" /></div>
              </div>
             <!--bottom button--></td></tr>
             <input type="hidden" name="dentist_id" value="<?php echo $dentist_id;?>" />
             <input type="hidden" name="patient_id" value="<?php echo $id;?>" />
            </form>
          </table>
        <!--</div>--></td>
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

function popup(pUrl, pName, pWidth, pHeight, pScroll)
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

var content_innerhtml = document.getElementById("print_this").innerHTML;
var document_print=window.open("","",display_setting);
document_print.document.open();
document_print.document.write('<html><head><title>Print Patient Others Information </title></head>');
document_print.document.write('<body style="font-family:verdana; font-size:12px;" onLoad="self.print();self.close();" >');
document_print.document.write(content_innerhtml);
document_print.document.write('</body></html>');
document_print.print();
document_print.document.close();
return false;
}

</script>  
