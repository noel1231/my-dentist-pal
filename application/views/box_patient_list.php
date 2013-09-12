<?php 
/**
 * @link: http://www.Awcore.com/dev
 */
 
   function pagination($query, $per_page = 10,$page = 1, $url = ''){
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
$idy = $_GET['id']; 

$sql="DELETE FROM patient_list WHERE id=".$idy."";
$res=mysql_query($sql);
}

if(isset($_POST['delete_all']))
{
		for($i=0;$i<count($_POST["check"]);$i++){
		if($_POST["check"][$i] != "") {
			$qwerty="DELETE FROM patient_list WHERE id='".$_POST['check'][$i]."'";
			$res=mysql_query($qwerty);
	}}
	}



?>

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
 <style type="text/css">
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
        	font-size:15px;
        	text-align:center;
        }
        p.createdBy a {color: #666666;text-decoration: none;}        
    </style>    

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
                <td width="6"><img src="img/u1.jpg" width="6" height="41" alt="" /></td>
                <td width="661" align="center" style="background: url(img/u3.jpg);"><a href="patient_list.php"><img src="img/t_patient_list.png" width="98" height="18" alt="" /></a></td>
                <td width="6"><img src="img/u2.jpg" width="6" height="41" alt="" /></td>
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
          <!--<div style="width:130px; margin-left:10px; margin-bottom:-2px; float:left; z-index:999999999">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="6"><img src="img/u1.jpg" width="6" height="41" alt="" /></td>
                <td width="661" align="center" style="background: url(img/u3.jpg); font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#3e4447;">Joselito Galvez</td>
                <td width="6"><img src="img/u2.jpg" width="6" height="41" alt="" /></td>
              </tr>
            </table>
          </div>
        </div>--></td>
      </tr>
      <tr>
        <td><img src="img/1.jpg" width="739" height="12" alt="" /></td>
      </tr>
      <form name="frmMain" action="" method="post">
      <tr>
        <td height="47" style="background:url(img/2.jpg);">
        <table width="100%"><tr><td>
        <img src="img/bar_patient.png" height="20" width="114" style="margin-top:-8px;margin-left:23px;"/></td>
        <td align="right">
        <div style="margin-top:-7px;">
        <table cellpadding="0" cellspacing="0" border="0">
        <tr><td>
        <input type="text" name="search_field" class="search" value="Search patient here" onfocus="if (this.value == 'Search patient here') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Search patient here';}" style="color:#999;"/>
        </td><td style="padding-left:10px;padding-right:17px;">
     <input type="submit" name="search" value="SEARCH" class="submit"/>
     </td></tr></table>
     </div>
     </td>
     </tr></table>
        </td>
        
      </tr>
      <tr>
        <td valign="top" style="background:url(img/3.jpg); padding-bottom:10px;"><div style="margin-top:-8px; position: relative;">
          <table width="690" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td bgcolor="#FFFFFF" style="border-left:1px solid #a0a8ac; border-bottom:1px solid #a0a8ac; border-right:1px solid #a0a8ac;"><!--<p>&nbsp;</p>-->
              <!--conentholder--><table cellpadding="0" cellspacing="0" border="0">
              <tr><td>
              <!--firstcontent--><table cellpadding="0" cellspacing="0" border="0">
              <tr><td>
              <!--check all holder--><div style="float:left;">
              
              <div style="float:left;background-image:url(img/option_center_check.png);width:53px;height:36px;">
              <input name="CheckAll" type="checkbox" id="CheckAll" value="Y"  onClick="ClickCheckAll(this);" style="margin-top:12px;margin-left:22px;"/>
              </div>
              <div style="float:left;background-image:url(img/option_right_check.png);width:5px;height:36px;"></div>
              <!--check all holder--></div>
              
              
              <!--name holder-->
              <div style="float:left;">
              <div style="float:left;background-image:url(img/option_name_repeat.png);width:202px;height:26px;font-family:Arial, Helvetica, sans-serif;font-size:13px;font-weight:bold;color:#373838;padding-top:10px;text-align:center;"><a href="patient_list.php?arr=patient_name" style="text-decoration:underline;color:#333;" title="Sort by Name">Name</a></div>
              <div style="float:left;background-image:url(img/option_right_check.png);width:5px;height:36px;"></div>
              </div>
              <!--name holder-->
              
              <!--last visit-->
              <div style="float:left;">
              <div style="float:left;background-image:url(img/option_name_repeat.png);width:157px;height:26px;font-family:Arial, Helvetica, sans-serif;font-size:13px;font-weight:bold;color:#373838;padding-top:10px;text-align:center;"><a href="patient_list.php?arr=log_date" style="text-decoration:underline;color:#333;" title="Sort by Date of Last Visit">Last Visit</a></div>
              <div style="float:left;background-image:url(img/option_right_check.png);width:5px;height:36px;"></div>
              </div>
              <!--last visit-->
			  
			  <!--last visit-->
              <div style="float:left;">
              <div style="float:left;background-image:url(img/option_name_repeat.png);width:147px;height:26px;font-family:Arial, Helvetica, sans-serif;font-size:13px;font-weight:bold;color:#373838;padding-top:10px;text-align:center;"><a href="patient_list.php?arr=date_of_entry" style="text-decoration:underline;color:#333;" title="Sort by Date of Registration">Date Registered</a></div>
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
              
              <!--content with scroll--><tr><td>
              
              <table cellpadding="0" cellspacing="0" border="0">
              <tr><td>
              <!--<div style="overflow:auto;height:400px;width:688px;">-->
              <div>
              <table cellpadding="0" cellspacing="0" border="0" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">
              <?php 
			  
			  $page = (int) (!isset($_GET["page"]) ? 1 : $_GET["page"]);
			  //var_dump($page);die();
    	$limit = 20;
    	$startpoint = ($page * $limit) - $limit;
		 //$statement = "`records` where `active` = 1";
			  
			  if(isset($_GET['arr']))
               { 
			   
			   $sort_by=$_GET["arr"];
			  
			   if($sort_by=="patient_name")
			   { $sort="patient_name"; 
			   $arrange="ASC";
                           $url="?arr=patient_name&";
			   }
			   else if($sort_by=="log_date")
			   { $sort="log_date";
			   $arrange="DESC";
                           $url="?arr=log_date&";
			  
			   }
			    else if($sort_by=="date_of_entry")
			   { $sort="date_of_entry";
			   $arrange="DESC";
                           $url="?arr=date_of_entry&";
			  
			   }
			   else
			   { $sort="";
			   $arrange="";
                           $url="?";
			   }
		
			   $query="SELECT * FROM patient_list WHERE dentist_id='".$dentist_id."' ORDER BY $sort $arrange LIMIT {$startpoint} , {$limit}";
			   $res=mysql_query($query); 
			    $statement = "patient_list WHERE dentist_id='".$dentist_id."' ORDER BY $sort $arrange";
                            
                            $pages = pagination($statement,$limit,$page, $url);
			   }
			   //sort
			   
			   
			   //search
			   else if(isset($_POST['search']))
			   { 
			   if(preg_match("/^[  a-zA-Z]+/", $_POST['search_field']))
			   { $name=$_POST['search_field']; }
			   $query="SELECT * FROM patient_list WHERE patient_name LIKE '%".$name."%' AND dentist_id='".$dentist_id."'";
			   $res=mysql_query($query);
			   
			   
			   }
			   //search
			   
			   //default
			else	  
			 { $query="SELECT * FROM patient_list WHERE dentist_id='".$id."' ORDER BY date_of_entry DESC LIMIT {$startpoint} , {$limit}";
			  $res=mysql_query($query); 
			  
			  $statement = "patient_list WHERE dentist_id='".$id."' ORDER BY date_of_entry DESC";
			  
			  }
			  //default
			  
			  $i=0;
			  
			  while($row=mysql_fetch_array($res))
			  {
				  $i++;
			  $idx=$row['id'];
			  $f=$i%2;
	if($f==0)
	{ $back="#FFF";} 
	else
	{ $back="#e0eefa";}
			   
			   $reg=$row['date_of_entry'];
			   $reg=explode(" ",$reg);
			   $reg=$reg[0];
			   $reg2=$reg[1];
                           $url = "?";
                           $pages = pagination($statement,$limit,$page, $url);
			  ?>
              <tr style="background-color:<?php echo $back;?>;">
              <!--check--><td width="58" style="padding-bottom:10px;padding-top:10px;">
              <input type="checkbox" name="check[]" style="margin-left:22px;" id="check<?php echo $i;?>" value="<?php echo $row["id"];?>"/>
              <!--check--></td>
              <!--name--><td style="width:210px;padding-bottom:10px;padding-top:10px;">
              <a href="patient_info.php?id=<?php echo $row["id"];?>" style="text-decoration:none;color:#373838;"><div style="margin-left:18px;"><?php echo $row["patient_name"];?></div></a>
              <!--name--></td>
              
              <!--last visit--><td style="width:160px;text-align:center;padding-top:10px;padding-bottom:10px;">
              <div><?php echo $row['log_date'];?></div>
              <!--last visit--></td>
			  <!--last visit--><td style="width:154px;text-align:center;padding-top:10px;padding-bottom:10px;">
              <div><?php echo $reg;?></div>
              <!--last visit--></td>
              <!--action--><td width="108" style="padding-top:10px;padding-bottom:10px;">
             <table cellpadding="0" cellspacing="0" border="0">
             <tr>
             <!--read--><td width="25" style="padding-left:20px;"><a href="message_compose.php?key=<?php echo $row['id'];?>" title="Email"><img src="img/icon_address_read.png" height="15" width="15"/></a></td>
             <!--print--><!--<td width="25"><img src="img/icon_address_print.png" height="16" width="16"/></td>-->
             <!--delete--><td><a href="patient_list.php?id=<?php echo $row["id"];?>" onclick="return onDelete();" title="Delete"><img src="img/icon_address_delete.png" height="15" width="15" /></a></td>
             </tr>
             </table>
              <!--action--></td>
              </tr>
              <!--<tr><td><hr style="border:1px solid #e5e3e3;width:100%;" /></td>
              <td><hr style="border:1px solid #e5e3e3;width:100%;" /></td>
              <td><hr style="border:1px solid #e5e3e3;width:100%;" /></td>
              <td><hr style="border:1px solid #e5e3e3;width:100%;" /></td></tr>-->
              <?php } ?>
              </table>
              </div>
              </td></tr>
              <tr>
               <?php if($i==$limit) { ?>
		   <td style="padding-top:10px;padding-bottom:10px;">
		   <?php } else { ?>
		   <td><?php } ?>
             
              <?php
			  //
	echo $pages;
	//var_dump($statement);die();
?>
              </td></tr>
              </table>
              
              <!--content with scroll--></td></tr>
              <input type="hidden" name="hdnCount" value="<?php echo $i;?>">
              
              <!--contentholder--></table>
                </td>
            </tr>
            
             <!--bottom button--><tr><td>
              <!--<div style="clear:both;height:20px;"></div>-->
              <div style="margin:0 auto;width:690px;margin-top:15px;">
              <div style="float:left;"><input type="submit" name="delete_all" class="submit2" value="Delete all marked" onclick="return onDelete();"/></div>
              <!--<div style="float:right;"><input type="submit" name="apply" class="submit2" value="Apply" style="padding:2px 15px 2px 15px;"/></div>
              <div style="float:right;margin-right:15px;"><select name="sort" />
              <option value="name">sort by Name</option>
<option value="date">sort by Visit</option>

              </select>
              </form>
              
              </div>--> 
              </div>
             <!--bottom button--></td></tr>
            
          </table>
        <!--</div>--></td>
      </tr>
      <tr>
        <td><img src="img/4.jpg" width="739" height="6" alt="" /></td>
      </tr>
    </table></td>
  </tr>
  </table>
</div>
