<?php 
$dentist_id=$_SESSION['id'];

if(isset($_GET['id'])){
$idy = $_GET['id']; 

$sql="DELETE FROM addressbook WHERE id=".$idy."";
$res=mysql_query($sql);
}


if(isset($_POST['editthis']))
{
	
	if(count($_POST["check"]) >= 2) {
					echo "<script>alert('Too many contacts to edit. Please select only one.');</script>";
					}
					else if(count($_POST["check"])==0) {
						echo "<script>alert('Please select one.');</script>";
					}
					else {
		for($i=0;$i<count($_POST["check"]);$i++){
		if($_POST["check"][$i] != "") {
			$qwerty="SELECT * FROM addressbook WHERE id='".$_POST['check'][$i]."'";
			$res=mysql_query($qwerty);
			while($row=mysql_fetch_array($res)) {
			          $sendmail=$row['email']; 
					  $id=$row['id'];
												}
					//var_dump($sendmail);die();
	}} 
	//end else
	header('Location: edit_contact.php?id='.$id.'');
	}
	//end else
	}



if(isset($_POST['emailthis']))
{
$group="start";	
$countthis=count($_POST["check"]);
for($i=0;$i<count($_POST["check"]);$i++){
		if($_POST["check"][$i] != "") {
			$qwerty="SELECT * FROM addressbook WHERE id='".$_POST['check'][$i]."'";
			$res=mysql_query($qwerty);
			while($row=mysql_fetch_array($res)) {
			          $sendmail=$row['email']; 
					  $id=$row['id'];
												}
					$group=$group." ".$id;							
					//var_dump($sendmail);die();
	}} 
	//end else
	//var_dump($group);die();
	header('Location: message_compose.php?group='.$group.'&pass='.$countthis.'');
	}
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

function Link_to_mail()
{
window.location='message_compose.php';	
}

</script> 


</head>

<body>
<?php
$no="no";
$sql="SELECT COUNT(*) AS num FROM message_received WHERE message_read='".$no."' AND dentist_id='".$dentist_id."'";
$res=mysql_query($sql);
$query=mysql_fetch_assoc($res);
$rows=$query['num'];?>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><table width="739" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr style="font-family:Arial, Helvetica, sans-serif;">
        <td height="39" colspan="2" valign="top"><div>
          <div style="width:120px; margin-left:20px; margin-bottom:-2px; float:left;">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="6"><img src="img/t1.jpg" width="6" height="41" alt="" /></td>
                <td width="661" align="center" style="background: url(img/t3.jpg);">
                <table cellpadding="0" cellspacing="0" border="0"><tr><td>
                <a href="message_received.php"><img src="img/inbox.png" width="19" height="15" alt="" /></a>
                </td>
                <td style="padding-left:10px;"><a href="message_received.php" class="tablink">Inbox(<?php echo $rows;?>)</a></td>
                </tr></table>
                </td>
                <td width="6"><img src="img/t2.jpg" width="6" height="41" alt="" /></td>
              </tr>
            </table>
          </div>
          <div style="width:120px; margin-left:10px; margin-bottom:-2px; float:left;">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="6"><img src="img/t1.jpg" width="6" height="41" alt="" /></td>
                <td width="661" align="center" style="background: url(img/t3.jpg);">
                <table cellpadding="0" cellspacing="0" border="0">
                <tr><td>
                <a href="message_sent.php"><img src="img/sent.png" width="37" height="17" alt="" /></a></td>
                <td style="padding-left:10px;"><a href="message_sent.php" class="tablink">Sent</a></td></tr></table>
                </td>
                <td width="6"><img src="img/t2.jpg" width="6" height="41" alt="" /></td>
              </tr>
            </table>
          </div>
          <div style="width:130px; margin-left:10px; margin-bottom:-2px; float:left">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="6"><img src="img/u1.jpg" width="6" height="41" alt="" /></td>
                <td width="661" align="center" style="background: url(img/u3.jpg);">
                <table cellpadding="0" cellspacing="0" border="0">
                <tr><td>
                <a href="message_contact.php"><img src="img/contacts.png" width="17" height="13" alt="" /></a>
                </td>
                <td style="padding-left:10px;"><a href="message_contact.php" class="tablink">Contact List</a></td></tr></table>
                </td>
                <td width="6"><img src="img/u2.jpg" width="6" height="41" alt="" /></td>
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
          </div>-->
          <div style="width:160px; margin-left:10px; margin-bottom:-2px; float:left; z-index:999999999">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="6"><img src="img/t1.jpg" width="6" height="41" alt="" /></td>
                <td width="661" align="center" style="background: url(img/t3.jpg);">
                <table cellpadding="0" cellspacing="0" border="0">
                <tr><td>
                <a href="message_compose.php"><img src="img/compose.png" width="19" height="18" alt="" /></a>
                </td>
                <td style="padding-left:10px;"><a href="message_compose.php" class="tablink">Compose Message</a></td></tr></table>
                </td>
                <td width="6"><img src="img/t2.jpg" width="6" height="41" alt="" /></td>
              </tr>
            </table>
          </div>
          
        </div></td>
      </tr>
      <tr>
        <td colspan="2"><img src="img/1.jpg" width="739" height="12" alt="" /></td>
      </tr>
        <form name="frmMain" action="" method="post">
      <tr>
       
        <td height="47" style="background:url(img/2.jpg);">
        <table width="100%"><tr><td>
        <img src="img/contact_list.png" height="21" width="116" style="margin-top:-8px;margin-left:23px;"/></td>
        <td align="right"><input type="text" name="search_field" class="search" value="Search contact list" onfocus="if (this.value == 'Search contact list') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Search contact list';}" style="color:#999;margin-right:10px;margin-top:-4px;"/>
     <input type="submit" name="search" value="SEARCH" class="submit" style="margin-right:17px;margin-top:-4px;" /></td></tr></table>
     </td>
      </tr>
      <tr>
        <td colspan="2" valign="top" style="background:url(img/3.jpg); padding-bottom:10px;"><div style="margin-top:-8px; position: relative;">
          <table width="690" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td bgcolor="#FFFFFF" style="border-left:1px solid #a0a8ac; border-bottom:1px solid #a0a8ac; border-right:1px solid #a0a8ac;">
              
              <!--conentholder--><table cellpadding="0" cellspacing="0" border="0">
              <tr><td>
              <!--button place--><table cellpadding="0" cellspacing="0" border="0">
              <tr><td style="background-image:url('img/top_button_bak_left.png');width:9px;height:48px;">
              </td>
              <td style="background-image:url('img/top_button_bak_center.png');width:670px;height:48px;padding-left:10px;">
              <!--<input type="button" name="compose" value="Compose Message" class="submit2" onclick="window.location='message_compose.php'"/>-->
              
              <table cellpadding="0" cellspacing="0" border="0">
              <tr><td>
              <input type="submit" name="delete_all" class="submit2" value="Delete" onclick="return onDelete();"/>
              </td>
              <td style="padding-left:10px;">
              <input type="submit" name="emailthis" class="submit2" value="Email"  />
              </td>
               <td style="padding-left:10px;">
              <input type="submit" name="editthis" class="submit2" value="Edit Contact"  />
              </td>
              </tr>
              </table>
              
                           
              </td>
              </tr>
              <!--button place--></table>
              </td></tr>
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
              <div style="float:left;background-image:url(img/option_name_repeat.png);width:218px;height:26px;font-family:Arial, Helvetica, sans-serif;font-size:13px;font-weight:bold;color:#373838;padding-top:10px;text-align:center;"><a href="message_contact.php?arr=last_name" style="text-decoration:underline;color:#333;" title="Sort by Name">Name</a></div>
              <div style="float:left;background-image:url(img/option_right_check.png);width:5px;height:36px;"></div>
              </div>
              <!--name holder-->
              
              <!--subject holder-->
              <div style="float:left;">
              <div style="float:left;background-image:url(img/option_name_repeat.png);width:173px;height:26px;font-family:Arial, Helvetica, sans-serif;font-size:13px;font-weight:bold;color:#373838;padding-top:10px;text-align:center;"><a href="message_contact.php?arr=group_name" style="text-decoration:underline;color:#333;" title="Sort by Group">Group</a></div>
              <div style="float:left;background-image:url(img/option_right_check.png);width:5px;height:36px;"></div>
              </div>
              <!--subject holder-->
              
              <!--last visit-->
              <!--<div style="float:left;">
              <div style="float:left;background-image:url(img/option_name_repeat.png);width:160px;height:26px;font-family:Arial, Helvetica, sans-serif;font-size:13px;font-weight:bold;color:#373838;padding-top:10px;padding-left:17px;">Date</div>
              <div style="float:left;background-image:url(img/option_right_check.png);width:5px;height:36px;"></div>
              </div>-->
              <!--last visit-->
              
               <!--action holder-->
              <div style="float:left;">
              <div style="float:left;background-image:url(img/option_name_repeat.png);width:224px;height:26px;font-family:Arial, Helvetica, sans-serif;font-size:13px;font-weight:bold;color:#373838;padding-top:10px;text-align:center;"><a href="message_contact.php?arr=email" style="text-decoration:underline;color:#333;" title="Sort by Email">Email Address</a></div>
              <div style="float:left;background-image:url(img/option_right_check.png);width:5px;height:36px;"></div>
              </div>
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
		 
			  //sort
			  if(isset($_GET['arr']))
               { 
			   
			   $sort_by=$_GET["arr"];
			  
			   if($sort_by=="last_name")
			   { $sort="last_name"; 
			   $arrange="ASC";
			   }
			   else if($sort_by=="group_name")
			   { $sort="group_name";
			   $arrange="ASC";
			   }
			    else if($sort_by=="email")
			   { $sort="email";
			   $arrange="ASC";
			   }
			   else
			   { $sort="";}
		
			   $query="SELECT * FROM addressbook WHERE dentist_id='".$dentist_id."' ORDER by $sort $arrange LIMIT {$startpoint} , {$limit}";
			   $res=mysql_query($query);
			   
			    $statement = "addressbook WHERE dentist_id='".$dentist_id."' ORDER by $sort $arrange";
			   
			    }
			   //sort
			   
			   
			   //search
			   else if(isset($_POST['search']))
			   { 
			   if(preg_match("/^[  a-zA-Z]+/", $_POST['search_field']))
			   { $name=$_POST['search_field']; }
			   $query="SELECT * FROM addressbook WHERE patient_name LIKE '%".$name."%' AND dentist_id='".$dentist_id."'";
			   $res=mysql_query($query);
			   }
			   //search
			   
			   //default
			else	  
			 { $query="SELECT * FROM addressbook WHERE dentist_id='".$dentist_id."' LIMIT {$startpoint} , {$limit}";
			  $res=mysql_query($query); 
			  
			   $statement = "addressbook WHERE dentist_id='".$dentist_id."'";
			  
			  }
			  //default
			  
			  $i=0;
			  while ($row=mysql_fetch_array($res))
			  { 
			  $i++;
			   $f=$i%2;
	if($f==0)
	{ $back="#FFF";} 
	else
	{ $back="#e0eefa";}
	
	$fname=$row["first_name"];
			$lname=$row["last_name"];
	
			  ?>
              <tr style="background-color:<?php echo $back;?>;font-size:15px;">
              <!--check--><td width="58" style="padding-top:10px;padding-bottom:10px;text-align: center;">
              <input type="checkbox" name="check[]"  id="check<?php echo $i;?>" value="<?php echo $row["id"];?>"/>
              <!--check--></td>
              <!--name--><td style="width:203px;padding-left:20px;padding-top:10px;padding-bottom:10px;text-align:left;" >
             <a href="message_compose.php?id=<?php echo $row["id"];?>" style="text-decoration:none;color:#373838;">
             <div><!--Maverick Bersabe--><?php echo $lname.", ".$fname;?></div>
             </a>
              <!--name--></td>
                <!--subject<td style="width:165px;">
              <div style="margin-top:10px;margin-left:18px;">Good Morning</div>
              subject</td>-->
              <!--last visit--><td style="width:158px;padding-left:20px;padding-top:10px;padding-bottom:10px;text-align: left;">
              <div style="color:#373838;"><?php echo $row["group_name"];?></div>
              <!--last visit--></td>
              <!--action--><td style="width:220px;padding-top:10px;padding-bottom:10px;text-align:left;padding-left:10px;">
             <?php /*<table cellpadding="0" cellspacing="0" border="0">
             <tr>
             <!--read--><td width="25" style="padding-left:20px;"><a href="message_compose.php?id=<?php echo $row["id"];?>" title="Send email">
             <img src="img/icon_address_send.png" width="18" height="16"/></a></td>
             <!--print--><!--<td width="25"><img src="img/icon_setup.png" height="17" width="17"/></td>-->
             <!--delete--><td><a href="message_contact.php?id=<?php echo $row["id"];?>" onclick="return onDelete();" title="Delete"><img src="img/icon_address_delete.png" width="15" height="15"/></a></td>
             </tr>
             </table>*/?>
             <?php echo $row['email'];?>
              <!--action--></td>
              
              
              </tr>
             
           
           
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
	echo pagination($statement,$limit,$page);
	//var_dump($statement);die();
?>
		   </td></tr>
			  
			  
              </table>
              
              <!--content with scroll--></td></tr>
             <input type="hidden" name="hdnCount" value="<?php echo $i;?>">
              
              <!--contentholder--></table>
                </td>
            </tr>
            <tr><td style="padding-left:15px;padding-top:15px;">
            <table cellpadding="0" cellspacing="0" border="0">
              <tr><td>
              <input type="submit" name="delete_all" class="submit2" value="Delete" onclick="return onDelete();"/>
              </td>
              <td style="padding-left:10px;">
              <input type="submit" name="emailthis" class="submit2" value="Email"  />
              </td>
               <td style="padding-left:10px;">
              <input type="submit" name="editthis" class="submit2" value="Edit Contact"  />
              </td>
              </tr>
              </table>
            </td></tr>
             <?php /*<!--bottom button--><tr><td>
              <!--<div style="clear:both;height:20px;"></div>-->
              <!--<div style="margin:0 auto;width:690px;margin-top:15px;">
              <div style="float:left;"><input type="submit" name="delete_all" class="submit2" value="Delete all marked" onclick="return onDelete();"/></div>
              <div style="float:right;"><input type="submit" name="apply" class="submit2" value="Apply" /></div>
              <div style="float:right;margin-right:15px;"><select name="sort" />
              <option value="name" onclick="">sort by Name</option>
<option value="group">sort by Group</option>

              </select>
               </form>
              </div>
              </div>
             <!--bottom button--></td></tr>*/?>
             
               <!--</td>
            </tr>-->
            </table><!--</div>--></td></tr>
      <tr>
        <td colspan="2"><img src="img/4.jpg" width="739" height="6" alt="" /></td>
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
<?php // OnSubmit="return onDelete();"?>