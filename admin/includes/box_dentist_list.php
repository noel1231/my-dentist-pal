<?php 

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
$var="no";
$sql="UPDATE dentist_list SET allow_dentist='".$var."' WHERE id=".$idy."";
$res=mysql_query($sql);
}

if(isset($_POST['delete_all']))
{
		if(count($_POST["check"])==0) {
						echo "<script>alert('Please select one.');</script>";
					} else {
		for($i=0;$i<count($_POST["check"]);$i++){
		if($_POST["check"][$i] != "") {
			$qwerty="DELETE FROM message_received WHERE id='".$_POST['check'][$i]."'";
			$res=mysql_query($qwerty);
	}}
	echo "<script>alert('Deleted Successfully.');</script>";
	}//end else
	}
	
	
	
	if(isset($_POST['emailthis']))
{
$group="start";	
$countthis=count($_POST["check"]);

if(count($_POST["check"])==0) {
						echo "<script>alert('Please select atleast one.');</script>";
					}
else {
for($i=0;$i<count($_POST["check"]);$i++){
		if($_POST["check"][$i] != "") {
			$qwerty="SELECT * FROM dentist_list WHERE id='".$_POST['check'][$i]."'";
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
var mave=0;	
for(i=1;i<=document.frmMain.hdnCount.value;i++) {
if(eval("document.frmMain.check"+i+".checked==true")) {
mave++;	
} }
	if(mave>0) {
	if(confirm('Do you want to delete?')==true)  
	{  
	return true;  
	}  
	else  
	{  
	return false;  
	}  }
	else if(mave==0){
	alert('You must select at least one email to perform this action');
	return false;
	} 
}  

function onCheck()  
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
      <tr>
        <td height="39" colspan="2" valign="top"><div>
          <div style="width:140px; margin-left:20px; margin-bottom:-2px; float:left;">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="6"><img src="../img/u1.jpg" width="6" height="41" alt="" /></td>
                <td width="661" align="center" style="background: url(../img/u3.jpg);"><!--<a href="message_contact.php">--><img src="../img/tab_dentistlist.png" width="73" height="18" alt="" /><!--</a>--></td>
                <td width="6"><img src="../img/u2.jpg" width="6" height="41" alt="" /></td>
              </tr>
            </table>
          </div>
                
         <div style="width:340px; margin: 0 25px -2px 0; float:right;">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="6"><img src="../img/u1.jpg" width="6" height="41" alt="" /></td>
                <td width="761" align="center" style="background: url(../img/u3.jpg);"><a href="patient_list_to_each_doctor.php" style="text-decoration: none; color:#333;font-family:Arial, Helvetica, sans-serif;">View More Information</a></td>
                <td width="6"><img src="../img/u2.jpg" width="6" height="41" alt="" /></td>
              </tr>
            </table>
          </div>
          <!--<div style="width:120px; margin-left:10px; margin-bottom:-2px; float:left;">
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
          </div>-->
        </div></td>
      </tr>
      <tr>
        <td colspan="2"><img src="../img/1.jpg" width="852" height="12" alt="" /></td>
      </tr>
      <form name="frmMain" action="" method="post">
      <tr>
      
        <td height="47" style="background:url(../img/2.jpg);">
        <table width="100%"><tr><td>
        <img src="../img/blue_dentistlist.png" height="24" width="181" style="margin-top:-6px;margin-left:23px;"/>
        <!--<div style="margin-left:30px;margin-top:-8px;">
        <span style="font-family:Arial, Helvetica, sans-serif;color:#FFF;font-size:16px;font-weight:bold;">
       Dentist Account List
        </span>
        </div>-->
        </td>
        <td align="right"><input type="text" name="search_field" class="search" value="Search contact list" onfocus="if (this.value == 'Search contact list') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Search contact list';}" style="color:#999;margin-right:10px;margin-top:-4px;"/>
     <input type="submit" name="search" value="SEARCH" class="submit" style="margin-right:17px;margin-top:-4px;" /></td></tr></table>
      </tr>
      <tr>
        <td colspan="2" valign="top" style="background:url(../img/3.jpg); padding-bottom:10px;"><div style="margin-top:-8px; position: relative;">
          <table width="857" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td bgcolor="#FFFFFF" style="border-left:1px solid #a0a8ac; border-bottom:1px solid #a0a8ac; border-right:1px solid #a0a8ac;">
              
              <!--conentholder--><table cellpadding="0" cellspacing="0" border="0">
               <tr><td>
               <!--button place--><table cellpadding="0" cellspacing="0" border="0">
              <tr><td style="background-image:url('../img/top_button_bak_left.png');width:9px;height:48px;">
              </td>
              <td style="background-image:url('../img/top_button_bak_center.png');width:857px;height:48px;padding-left:10px;">
              
            <table cellpadding="0" cellspacing="0" border="0">
              <tr> <td>
            <input type="submit" name="delete_all" class="submit2" value="Delete" onclick="return onDelete();"/>
              </td>
              <td style="padding-left:10px;">
              <input type="submit" name="emailthis" class="submit2" value="Email"  />
              </td>
               <!--<td style="padding-left:10px;">
              <input type="submit" name="editthis" class="submit2" value="Edit Contact"  />
              </td>-->
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
              
              <div style="float:left;background-image:url(../img/option_center_check.png);width:53px;height:36px;">
              <input name="CheckAll" type="checkbox" id="CheckAll" value="Y"  onClick="ClickCheckAll(this);" style="margin-top:12px;margin-left:22px;"/>
              </div>
              <div style="float:left;background-image:url(../img/option_right_check.png);width:5px;height:36px;"></div>
              <!--check all holder--></div>
              
              
              <!--name holder-->
              <div style="float:left;">
              <div style="float:left;background-image:url(../img/option_name_repeat.png);width:150px;height:26px;font-family:Arial, Helvetica, sans-serif;font-size:13px;font-weight:bold;color:#373838;padding-top:10px;padding-left:17px;"><a href="dentist_list.php?arr=sur_name" style="text-decoration:underline;color:#333;" title="Sort by Name">Name</a></div>
              <div style="float:left;background-image:url(../img/option_right_check.png);width:5px;height:36px;"></div>
              </div>
              <!--name holder-->
              
              <!--subject holder-->
              <div style="float:left;">
              <div style="float:left;background-image:url(../img/option_name_repeat.png);width:105px;height:26px;font-family:Arial, Helvetica, sans-serif;font-size:13px;font-weight:bold;color:#373838;padding-top:10px;padding-left:17px;"><a href="dentist_list.php?arr=register_date" style="text-decoration:underline;color:#333;" title="Sort by Date">Date Register</a></div>
              <div style="float:left;background-image:url(../img/option_right_check.png);width:5px;height:36px;"></div>
              </div>
              <!--subject holder-->
              
              <!--last visit-->
              <div style="float:left;">
              <div style="float:left;background-image:url(../img/option_name_repeat.png);width:115px;height:26px;font-family:Arial, Helvetica, sans-serif;font-size:13px;font-weight:bold;color:#373838;padding-top:10px;padding-left:17px;"><a href="dentist_list.php?arr=last_login" style="text-decoration:underline;color:#333;" title="Sort by Last login">Last login</a></div>
              <div style="float:left;background-image:url(../img/option_right_check.png);width:5px;height:36px;"></div>
              </div>
              
              <div style="float:left;">
              <div style="float:left;background-image:url(../img/option_name_repeat.png);width:108px;height:26px;font-family:Arial, Helvetica, sans-serif;font-size:13px;font-weight:bold;color:#373838;padding-top:10px;padding-left:17px;">How long</div>
              <div style="float:left;background-image:url(../img/option_right_check.png);width:5px;height:36px;"></div>
              </div>
              
              <!--last visit-->
              <div style="float:left;">
              <div style="float:left;background-image:url(../img/option_name_repeat.png);width:100px;height:26px;font-family:Arial, Helvetica, sans-serif;font-size:13px;font-weight:bold;color:#373838;padding-top:10px;padding-left:17px;">Status</div>
              <div style="float:left;background-image:url(../img/option_right_check.png);width:5px;height:36px;"></div>
              </div>
              <!--last visit-->
              
               <!--action holder-->
              <div style="float:left;">
              <div style="float:left;background-image:url(../img/option_name_repeat.png);width:87px;height:26px;font-family:Arial, Helvetica, sans-serif;font-size:13px;font-weight:bold;color:#373838;padding-top:10px;padding-left:17px;">Action</div>
              <div style="float:left;background-image:url(../img/option_right_check.png);width:5px;height:36px;"></div>
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
                $var="yes"; 
                $page = (int) (!isset($_GET["page"]) ? 1 : $_GET["page"]);
                $limit = 20;
                $startpoint = ($page * $limit) - $limit;
		 
                if(isset($_GET['arr']))
                { 	   
                    $sort_by=$_GET["arr"];
                    
                    if($sort_by=="sur_name")
                    {
                        $sort="dentist.sur_name"; 
                        $arrange="ASC";
                        $sort_pag="sur_name";
                        $url = "?arr=sur_name&";
                        
                    }
                    else if($sort_by=="register_date")
                    {
                        $sort="dentist.register_date";
                        $arrange="DESC";
                        $sort_pag="register_date";
                        $url = "?arr=register_date&";
                    } 
                    else if($sort_by == "last_login")
                    {
                        $sort="login.last_login";
                        $arrange="DESC";
                        $sort_pag="register_date";
                        $url = "?arr=last_login&";
                        
                    }
                           
                    $query= "SELECT  dentist.id,
                                     dentist.sur_name,
                                     dentist.first_name,
                                     dentist.middle_name,
                                     dentist.register_date,
                                     login.last_login
                            FROM dentist_list
                                 AS dentist
                                    LEFT JOIN
                                    dentist_login_info AS login
                                    ON dentist.id = login.dentist and
                                    dentist.allow_dentist = '$var' ORDER BY $sort $arrange LIMIT {$startpoint} , {$limit}";

                    $res=mysql_query($query); 
                    $statement = "dentist_list WHERE allow_dentist='".$var."' ORDER by $sort_pag $arrange";
                    
                    $pages = pagination($statement,$limit,$page,$url);
			   
                }
                else if(isset($_POST['search']))
                { 
                    if(preg_match("/^[  a-zA-Z]+/", $_POST['search_field']))
                    {
                        $name=$_POST['search_field'];
                    }
                    
                    $query= "SELECT  dentist.id,
                                     dentist.sur_name,
                                     dentist.first_name,
                                     dentist.middle_name,
                                     dentist.register_date,
                                     login.last_login
                            FROM dentist_list
                                 AS dentist
                                    LEFT JOIN
                                    dentist_login_info AS login
                                    ON dentist.id = login.dentist and
                                    dentist.allow_dentist = '$var' and sur_name LIKE '%".$name."%'";
                                    
                    $res=mysql_query($query);
                }
                else // default search
                {
                    $url ="?";
			  
                    $sql = "SELECT    dentist.id,
                                      dentist.sur_name,
                                      dentist.first_name,
                                      dentist.middle_name,
                                      dentist.register_date,
                                      login.last_login
                             FROM dentist_list
                                  AS dentist
                                     LEFT JOIN
                                     dentist_login_info AS login
                                     ON dentist.id = login.dentist and
                                     dentist.allow_dentist = '$var'LIMIT {$startpoint} , {$limit}";


                    $res=mysql_query($sql);
                    $statement = "dentist_list WHERE allow_dentist='".$var."'";
                    $pages = pagination($statement,$limit,$page,$url);
			  
                }
			  
                $i=0;
                if($res)
                {
                    while($row=mysql_fetch_array($res))
                    { 
                        $i++;
                        $f=$i%2;
                        if($f==0)
                        {
                            $back="#FFF";
                        } 
                        else
                        {
                            $back="#e0eefa";
                        }
                        $fname=$row['first_name'];
                        $lname=$row['sur_name'];
                        $mname=$row['middle_name'];
                        $name= $lname . ", " . $fname . " " . $mname;
                        
                        $last_days = "";
                        
                        // today
                        $original_date_today = date("m/d/Y");
                        $date_today = new DateTime($original_date_today);
                        
                        // past login
                        $last_login = $row['last_login'];
                        $original_date_past = substr($last_login, 0, 11);
                        $newDate_past = date('m/d/Y', strtotime(implode(' ', explode('/', $original_date_past))));
                        $date_past = new DateTime($newDate_past);
                        
                        $diff = $date_past->diff($date_today);
                        
                        $years = $diff->y;
                        $months = $diff->m;
                        $days = $diff->d;
                        if($last_login == "")
                        {
                            $last_days = "";
                        }
                        else
                        {
                            $last_days .= $years . " year " . $months . " month " . $days . " days";
                        }
                        
?>
              <tr style="background-color:<?php echo $back;?>;font-size:14px;">
              <!--check--><td width="58" style="padding-top:10px;padding-bottom:10px;text-align:center;">
              <input type="checkbox" name="check[]" id="check<?php echo $i;?>" value="<?php echo $row["id"];?>"/>
              <!--check--></td>
              <!--name--><td style="width:160px;padding-top:10px;padding-left:10px;padding-bottom:10px;text-align:left;">
              <a href="dentist_profile.php?id=<?php echo $row["id"];?>" style="text-decoration:none;color:#373838;"><div><?php echo $name;?></div></a>
              <!--name--></td>
              
                <!--subject--><td style="width:135px;padding-top:10px;padding-bottom:10px;text-align:center;">
              <div><?php echo $row["register_date"];?></div>
              <!--subject--></td>
                
              <!--last_login--><td style="width:140px;padding-top:10px;padding-bottom:10px;text-align:center;">
              <div><?php echo $row['last_login'];?></div>
              <!--last_login--></td>
              
              <!--last_login--><td style="width:140px;padding-top:10px;padding-bottom:10px;text-align:center;">
              <div><?php echo $last_days ;?></div>
              <!--last_login--></td>
                
              <!--last visit-->
                  <td style="width:120px;padding-top:10px;padding-bottom:10px;text-align:center;">
              <div><?php echo "Active";?></div>
              <!--last visit--></td>
              <!--action--><td width="100" style="padding-top:10px;padding-bottom:10px;">
             <table cellpadding="0" cellspacing="0" border="0">
             <tr>
             <td width="25" style="padding-left:20px;"><a href="dentist_profile.php?id=<?php echo $row['id'];?>"><img src="../img/user.png" width="16" height="16" /></a></td>
             <!--print--><td width="25"><a href="message_compose.php?id=<?php echo $row['id'];?>"><img src="../img/mail.png" width="16" height="16"/></a></td>
             <!--delete--><td><a href="dentist_list.php?id=<?php echo $row['id'];?>" onclick="return onDelete();"><img src="../img/delete_dl.png" width="16" height="16"/></a></td>
             </tr>
             </table>
              <!--action--></td>
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
                            echo $pages;
                        ?>
		   </td></tr>
              
              
              </table>
              
              <!--content with scroll--></td></tr>
             
              
              <!--contentholder--></table>
                </td>
            </tr>
            
             <!--bottom button--><tr><td style="padding-left:15px;padding-top:15px;">
              <!--<div style="clear:both;height:20px;"></div>-->
             <!-- <div style="margin:0 auto;width:690px;margin-top:15px;">
              <div style="float:left;"><input type="submit" name="delete_all" class="submit2" value="Delete all marked" onclick="return onDelete();"/></div>
              <div style="float:right;"><input type="submit" name="apply" class="submit2" value="Apply" style="padding:2px 15px 2px 15px;"/></div>
              <div style="float:right;margin-right:15px;"><select name="sort" />
              <option value="date">sort by Date</option>
<option value="name">sort by Name</option>

              </select></div>
              </div>-->
                <table cellpadding="0" cellspacing="0" border="0">
              <tr> <td>
            <input type="submit" name="delete_all" class="submit2" value="Delete" onclick="return onDelete();"/>
              </td>
              <td style="padding-left:10px;">
              <input type="submit" name="emailthis" class="submit2" value="Email"  />
              </td>
               <!--<td style="padding-left:10px;">
              <input type="submit" name="editthis" class="submit2" value="Edit Contact"  />
              </td>-->
              </tr>
              </table>
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
