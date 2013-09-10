<?php 
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


if(isset($_POST['edit']))
{
	
	if(count($_POST["check"]) >= 2) {
					echo "<script>alert('Too many questions to edit. Please select only one.');</script>";
					}
					else {
		for($i=0;$i<count($_POST["check"]);$i++){
		if($_POST["check"][$i] != "") {
			$qwerty="SELECT * FROM faq WHERE id='".$_POST['check'][$i]."'";
			$res=mysql_query($qwerty);
			while($row=mysql_fetch_array($res)) {
			          //$sendmail=$row['email']; 
					  $id=$row['id'];
												}
					//var_dump($sendmail);die();
	}} 
	//end else
	header('Location: add_faq.php?id='.$id.'');
	}
	//end else
	}

if(isset($_POST['delete']))
{
		for($i=0;$i<count($_POST["check"]);$i++){
		if($_POST["check"][$i] != "") {
			$qwerty="DELETE FROM faq WHERE id='".$_POST['check'][$i]."'";
			$res=mysql_query($qwerty);
	}}
	
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
</head>

<body>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><table width="739" border="0" align="center" cellpadding="0" cellspacing="0">
      <!--<tr>
        <td height="39" colspan="2" valign="top"><div>
          <div style="width:140px; margin-left:20px; margin-bottom:-2px; float:left;">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="6"><img src="../img/t1.jpg" width="6" height="41" alt="" /></td>
                <td width="661" align="center" style="background: url(../img/t3.jpg);"><a href="message_contact.php"><img src="../img/t-contact.png" width="95" height="12" alt="" /></a></td>
                <td width="6"><img src="../img/t2.jpg" width="6" height="41" alt="" /></td>
              </tr>
            </table>
          </div>
          <div style="width:120px; margin-left:10px; margin-bottom:-2px; float:left;">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="6"><img src="../img/u1.jpg" width="6" height="41" alt="" /></td>
                <td width="661" align="center" style="background: url(../img/u3.jpg);"><a href="message_received.php"><img src="../img/t-received.png" width="83" height="13" alt="" /></a></td>
                <td width="6"><img src="../img/u2.jpg" width="6" height="41" alt="" /></td>
              </tr>
            </table>
          </div>
          <div style="width:110px; margin-left:10px; margin-bottom:-2px; float:left">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="6"><img src="../img/t1.jpg" width="6" height="41" alt="" /></td>
                <td width="661" align="center" style="background: url(../img/t3.jpg);"><a href="message_sent.php"><img src="../img/t-sent.png" width="72" height="17" alt="" /></a></td>
                <td width="6"><img src="../img/t2.jpg" width="6" height="41" alt="" /></td>
              </tr>
            </table>
          </div>
          <!--<div style="width:130px; margin-left:10px; margin-bottom:-2px; float:left; z-index:999999999">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="6"><img src="img/u1.jpg" width="6" height="41" alt="" /></td>
                <td width="661" align="center" style="background: url(img/u3.jpg); font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#3e4447;">Joselito Galvez</td>
                <td width="6"><img src="img/u2.jpg" width="6" height="41" alt="" /></td>
              </tr>
            </table>
          </div>
        </div></td>
      </tr>-->
      <tr>
        <td colspan="2"><img src="../img/1.jpg" width="739" height="12" alt="" /></td>
      </tr>
      <form name="frmMain" action="" method="post">
      <tr>
      
        <td height="47" style="background:url(../img/2.jpg);">
        <table width="100%"><tr><td>
        <!--<img src="../img/read_message_blue.png" height="21" width="177" style="margin-top:-8px;margin-left:23px;"/>-->
        <div style="margin-left:30px;margin-top:-8px;">
        <span style="font-family:Arial, Helvetica, sans-serif;color:#FFF;font-size:16px;font-weight:bold;">
       FAQ
        </span>
        </div>
        </td>
        <td align="right"><input type="text" name="search_field" class="search" value="Search faq list" onfocus="if (this.value == 'Search faq list') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Search faq list';}" style="color:#999;margin-right:10px;margin-top:-4px;"/>
     <input type="submit" name="search" value="SEARCH" class="submit" style="margin-right:17px;margin-top:-4px;" /></td></tr></table>
      </tr>
      <tr>
        <td colspan="2" valign="top" style="background:url(../img/3.jpg); padding-bottom:10px;"><div style="margin-top:-8px; position: relative;">
          <table width="690" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td bgcolor="#FFFFFF" style="border-left:1px solid #a0a8ac; border-bottom:1px solid #a0a8ac; border-right:1px solid #a0a8ac;">
              
              <!--conentholder--><table cellpadding="0" cellspacing="0" border="0">
               <tr><td>
             <!--button place--><table cellpadding="0" cellspacing="0" border="0">
              <tr><td style="background-image:url('../img/top_button_bak_left.png');width:9px;height:48px;">
              </td>
              <td style="background-image:url('../img/top_button_bak_center.png');width:670px;height:48px;padding-left:10px;">
             <input type="submit" name="delete" value="Delete" class="submit2" onclick="return onDelete();"/>
              &nbsp;&nbsp;
              <input type="submit" name="edit" value="Edit" class="submit2"/>
              &nbsp;&nbsp;
              <input type="button" name="add" value="Add" class="submit2" onclick="window.location='add_faq.php'"/>
              
              </td>
              </tr>
              <!--button place--></table>
              </td></tr>
              
              <tr><td>
              <!--firstcontent--><table cellpadding="0" cellspacing="0" border="0">
              <tr><td>
              <!--check all holder--><div style="float:left;">
              
              <div style="float:left;background-image:url(../img/option_center_check.png);width:53px;height:36px;">
              <input name="CheckAll" type="checkbox" id="CheckAll" value="Y"  onClick="ClickCheckAll(this);" style="margin-top:12px;margin-left:22px;"/>
              </div>
              <div style="float:left;background-image:url(../img/option_right_check.png);width:5px;height:36px;"></div>
              <!--check all holder--></div>
              
              
              <!--name holder-->
              <div style="float:left;">
              <div style="float:left;background-image:url(../img/option_name_repeat.png);width:401px;height:26px;font-family:Arial, Helvetica, sans-serif;font-size:13px;font-weight:bold;color:#373838;padding-top:10px;padding-left:17px;">Question</div>
              <div style="float:left;background-image:url(../img/option_right_check.png);width:5px;height:36px;"></div>
              </div>
              <!--name holder-->
              
              <!--subject holder-->
              <div style="float:left;">
              <div style="float:left;background-image:url(../img/option_name_repeat.png);width:185px;height:26px;font-family:Arial, Helvetica, sans-serif;font-size:13px;font-weight:bold;color:#373838;padding-top:10px;padding-left:17px;">Date Created</div>
              <div style="float:left;background-image:url(../img/option_right_check.png);width:5px;height:36px;"></div>
              </div>
              <!--subject holder-->
              
              <!--last visit-->
              <!--<div style="float:left;">
              <div style="float:left;background-image:url(../img/option_name_repeat.png);width:160px;height:26px;font-family:Arial, Helvetica, sans-serif;font-size:13px;font-weight:bold;color:#373838;padding-top:10px;padding-left:17px;">Date Registered</div>
              <div style="float:left;background-image:url(../img/option_right_check.png);width:5px;height:36px;"></div>
              </div>-->
              <!--last visit-->
              
               <!--action holder-->
              <!--<div style="float:left;">
              <div style="float:left;background-image:url(../img/option_name_repeat.png);width:120px;height:26px;font-family:Arial, Helvetica, sans-serif;font-size:13px;font-weight:bold;color:#373838;padding-top:10px;padding-left:17px;">Dentist Name</div>
              </div>-->
              <!--action holder-->
              
              </td></tr>
              <!--firstcontent--></table>
              </td></tr>
              
              <!--content with scroll--><tr><td>
              
              <table cellpadding="0" cellspacing="0" border="0">
              <tr><td>
              <div>
              <table cellpadding="0" cellspacing="0" border="0" style="font-family:Arial, Helvetica, sans-serif;font-size:12px;">
              <?php //$x=30; for($i=1;$i<=$x;$i++) { 
			  $page = (int) (!isset($_GET["page"]) ? 1 : $_GET["page"]);
			  //var_dump($page);die();
    	$limit = 20;
    	$startpoint = ($page * $limit) - $limit;
		 //$statement = "`records` where `active` = 1";
			  
			  
			   if(isset($_POST['search']))
			   { 
			   if(preg_match("/^[  a-zA-Z]+/", $_POST['search_field']))
			   { $name=$_POST['search_field']; }
			   $query="SELECT * FROM faq WHERE question LIKE '%".$name."%'";
			   $res=mysql_query($query);
			   }
			   
			   else {
			  $sql="SELECT * FROM faq LIMIT {$startpoint} , {$limit}";
			  $res=mysql_query($sql);
			  
			    $statement = "faq";
			   }
			  
			  
			   $i=0;
			  if($res) {
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
              <!--check--><td width="58" style="text-align:center;">
              <input type="checkbox" name="check[]" id="check<?php echo $i;?>" value="<?php echo $row["id"];?>"/>
              <!--check--><!--</td>-->
              <!--name--><td style="width:412px;text-align:left;padding-left:10px;padding-top:10px;padding-bottom:10px;">
              <div><?php echo $row["question"];?></div>
              <!--name--></td>
                <!--subject--><td style="width:198px;text-align:left;padding-left:10px;padding-top:10px;padding-bottom:10px;">
              <div><?php echo $row["date"];?></div>
              <!--subject--></td>
              <!--last visit--><!--<td style="width:181px;text-align:center;padding-top:10px;padding-bottom:10px;">
              <div><?php //echo $row["date_of_entry"];?></div>
              <!--last visit--><!--</td>-->
              <!--action--><!--<td style="width:138px;text-align:left;padding-left:10px;padding-top:10px;padding-bottom:10px;">Dr.--> <?php //echo $names;?>
             <?php /*<table cellpadding="0" cellspacing="0" border="0">
             <tr>
             <!--read--><td width="25"><img src="../img/icon_read.png" height="15" width="15"/></td>
             <!--print--><!--<td width="25"><img src="img/icon_print.png" height="16" width="16"/></td>-->
             <!--delete--><td><a href="message_received.php?id=<?php echo $row["id"];?>" onclick="return onDelete();"><img src="../img/icon_delete.png" height="15" width="16"/></a></td>
             </tr>
             </table>*/?>
              <!--action--><!--</td>-->
              </tr>
              
            
              </tr>
              <?php } } ?>
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
	echo pagination($statement,$limit,$page);
	//var_dump($statement);die();
?>
		   </td></tr>
              
              </table>
              
              <!--content with scroll--></td></tr>
             
              
              <!--contentholder--></table>
                </td>
            </tr>
            
             <!--bottom button--><tr><td style="padding-left:15px;padding-top:15px;">
              <!--<div style="clear:both;height:20px;"></div>-->
              <!--<div style="margin:0 auto;width:690px;margin-top:15px;">
              <div style="float:left;"><!--<input type="submit" name="delete_all" class="submit2" value="Delete all marked" onclick="return onDelete();"/>--><!--</div>
              <div style="float:right;"><input type="submit" name="apply" class="submit2" value="Apply" style="padding:2px 15px 2px 15px;"/></div>
              <div style="float:right;margin-right:15px;"><select name="sort" />
              <option value="date">sort by Date</option>
<option value="name">sort by Name</option>
<option value="email">sort by Email</option>
<option value="dentist">sort by Dentist</option>
              </select></div>
              </div>-->
              
               <input type="submit" name="delete" value="Delete" class="submit2" onclick="return onDelete();"/>
              &nbsp;&nbsp;
              <input type="submit" name="edit" value="Edit" class="submit2"/>
              &nbsp;&nbsp;
              <input type="button" name="add" value="Add" class="submit2" onclick="window.location='add_faq.php'"/>
             <!--bottom button--></td></tr>
              <input type="hidden" name="hdnCount" value="<?php echo $i;?>"></form>
               <!--</td>
            </tr>-->
            </table><!--</div>--></td></tr>
      <tr>
        <td colspan="2"><img src="../img/4.jpg" width="739" height="6" alt="" /></td>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>

<map name="Map" id="Map">
  <!--<area shape="rect" coords="8,1,131,42" href="messaging.php" />
  <area shape="rect" coords="138,2,263,41" href="received_message.php" />-->
  <area shape="rect" coords="640,2,689,31" href="patient_dental_edit.php" />
  <area shape="rect" coords="2,2,97,33" href="patient_info.php" />
  <area shape="rect" coords="106,2,217,32" href="patient_medical.php" />
  <area shape="rect" coords="223,2,329,32" href="#" />
  <area shape="rect" coords="337,2,427,31" href="patient_tooth.php" />
  <area shape="rect" coords="434,3,504,31" href="patient_visit_log.php" />
  <area shape="rect" coords="511,3,572,31" href="patient_others.php" />
  <area shape="rect" coords="579,3,633,31" href="patient_notes.php" />
</map>
