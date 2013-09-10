<?php 



function pagination($query, $per_page = 10,$page = 1, $url = '?'){        

    	$query = "SELECT COUNT(*) as `num` FROM {$query}";
		
		$res = mysql_query($query);
		
		if ($res) {
		
    	$row = mysql_fetch_array($res);

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
}





if(isset($_GET['id'])){

$idy = $_GET['id']; 





$sqls="SELECT * FROM dentist_list WHERE id='".$idy."'";

$ress=mysql_query($sqls);

while($rows=mysql_fetch_array($ress))

{

$mail=$rows['email'];	

}





$msg  ="<html><head><title>Notification</title></head>";

$msg .="<body>";

$msg .="<table cellspacing=\"0\" cellpadding=\"0\" border=\"0\">";

$msg .="<tr><td>";

$msg .="<h2 style=\"font-size:18px;font-family:Arial;color:#333;\">You're account has been declined by the admin.</h2>";

$msg .="</td></tr>";

$msg .="<tr><td style=\"padding-top:20px;padding-left:10px;\">";

//$msg .="<a href=\"add_patient_password.php?key=".$confirm."\">Click here to activate your account</a>";

$msg .="</td></tr>";

$msg .="</table>";

$msg .="</body>";

$msg .="</html>";







// Always set content-type when sending HTML email

$headers = "MIME-Version: 1.0" . "\r\n";

$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";



// More headers

$headers .= 'From: Your Friendly Dentist ' . "\r\n";

//$headers .= 'Cc: myboss@example.com' . "\r\n";



$subject="Notification";



if(mail($mail,$subject,$msg,$headers))

{

//echo "ok";	

}

else {

//echo "not ok";	

}





$sql="DELETE FROM dentist_list WHERE id=".$idy."";

$res=mysql_query($sql);





echo "<script>alert('Deleted Successfully.');</script>";

//var_dump($sqls);die();







}



if(isset($_POST['apply2']))

{

	

	$valus=$_POST['sort2'];

	$put="yes";

	if($valus=="confirm")

		for($i=0;$i<count($_POST["check"]);$i++){

		if($_POST["check"][$i] != "") {

			$qwerty="UPDATE dentist_list SET allow_dentist='".$put."' WHERE id='".$_POST['check'][$i]."'";

			$res=mysql_query($qwerty);

			//var_dump($res);

	}}

	}

	

	

	if(isset($_POST['delete_all']))

{

	if(count($_POST["check"])==0) {

						echo "<script>alert('Please select one.');</script>";

					} else {

		for($i=0;$i<count($_POST["check"]);$i++){

		if($_POST["check"][$i] != "") {

			$qwerty="DELETE FROM dentist_list WHERE id='".$_POST['check'][$i]."'";

			$res=mysql_query($qwerty);

	}} 

	echo "<script>alert('Deleted Successfully.');</script>";

	}//end else

	}

	

	

if(isset($_GET['key']))	{

$idy=$_GET['key'];

$put="yes";

$qwerty="UPDATE dentist_list SET allow_dentist='".$put."' WHERE id='".$idy."'";

			$res=mysql_query($qwerty);

			

			

	$sqls="SELECT * FROM dentist_list WHERE id='".$idy."'";

$ress=mysql_query($sqls);

while($rows=mysql_fetch_array($ress))

{

$mail=$rows['email'];	

}





$msg  ="<html><head><title>Notification</title></head>";

$msg .="<body>";

$msg .="<table cellspacing=\"0\" cellpadding=\"0\" border=\"0\">";

$msg .="<tr><td>";

$msg .="<h2 style=\"font-size:18px;font-family:Arial;color:#333;\">You're account has been activated by the admin.</h2>";

$msg .="</td></tr>";

$msg .="</table>";

$msg .="</body>";

$msg .="</html>";







// Always set content-type when sending HTML email

$headers = "MIME-Version: 1.0" . "\r\n";

$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";



// More headers

$headers .= 'From: Mydentistpal.com ' . "\r\n";

//$headers .= 'Cc: myboss@example.com' . "\r\n";



$subject="Notification";



if(mail($mail,$subject,$msg,$headers))

{

//echo "ok";	

}

else {

//echo "not ok";	

}

		

			



}





if(isset($_POST['confirm']))

{

$group="start";	

$countthis=count($_POST["check"]);



if(count($_POST["check"])==0) {

						echo "<script>alert('Please select atleast one.');</script>";

					}

else {

/*for($i=0;$i<count($_POST["check"]);$i++){

		if($_POST["check"][$i] != "") {

			$qwerty="SELECT * FROM dentist_list WHERE id='".$_POST['check'][$i]."'";

			$res=mysql_query($qwerty);

			while($row=mysql_fetch_array($res)) {

			          $sendmail=$row['email']; 

					  $id=$row['id'];

												}

					$group=$group." ".$id;							

					//var_dump($sendmail);die();

	}} */

	$put="yes";

	for($i=0;$i<count($_POST["check"]);$i++){

		if($_POST["check"][$i] != "") {

			$qwerty="UPDATE dentist_list SET allow_dentist='".$put."' WHERE id='".$_POST['check'][$i]."'";

			$res=mysql_query($qwerty);

			//var_dump($res);

			

		

			

				$sqls="SELECT * FROM dentist_list WHERE id='".$_POST['check'][$i]."'";

$ress=mysql_query($sqls);

while($rows=mysql_fetch_array($ress))

{

$mail=$rows['email'];	

}





$msg  ="<html><head><title>Notification</title></head>";

$msg .="<body>";

$msg .="<table cellspacing=\"0\" cellpadding=\"0\" border=\"0\">";

$msg .="<tr><td>";

$msg .="<h2 style=\"font-size:18px;font-family:Arial;color:#333;\">You're account has been activated by the admin.</h2>";

$msg .="</td></tr>";

$msg .="</table>";

$msg .="</body>";

$msg .="</html>";







// Always set content-type when sending HTML email

$headers = "MIME-Version: 1.0" . "\r\n";

$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";



// More headers

$headers .= 'From: Mydentistpal.com ' . "\r\n";

//$headers .= 'Cc: myboss@example.com' . "\r\n";



$subject="Notification";



if(mail($mail,$subject,$msg,$headers))

{

//echo "ok";	

}

else {

//echo "not ok";	

}

			

			

	}}

	//end else

	//var_dump($group);die();

	//header('Location: message_compose.php?group='.$group.'&pass='.$countthis.'');

	}

	

		echo "<script>alert('You have successfully added a new dentist.');</script>";

}





?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Untitled Document</title>

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

if(confirm('Do you want to add this dentist ?')==true)  

{  

return true;  

}  

else  

{  

return false;  

}  

} 

</script> 

<script type="text/javascript">



function popup(pUrl, pName, pWidth, pHeight, pScroll)

{

	LeftPosition = (screen.width) ? (screen.width-pWidth)   / 2 : 0;

	TopPosition  = (screen.height)? (screen.height-pHeight) / 2 : 0;

	settings = 'height='+pHeight+', width='+pWidth+', top='+TopPosition+', left='+LeftPosition+', scrollbars='+pScroll+', resizable';

	win = window.open(pUrl, pName, settings)

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

          <!--<div style="width:140px; margin-left:20px; margin-bottom:-2px; float:left;">

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

          </div>-->

          <div style="width:130px; margin-left:20px; margin-bottom:-2px; float:left; z-index:999999999">

            <table width="100%" border="0" cellspacing="0" cellpadding="0">

              <tr>

                <td width="6"><img src="../img/u1.jpg" width="6" height="41" alt="" /></td>

                <td width="661" align="center" style="background: url(../img/u3.jpg);"><a href="accounts.php" style="font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#3e4447;text-decoration:none;">Pending</a></td>

                <td width="6"><img src="../img/u2.jpg" width="6" height="41" alt="" /></td>

              </tr>

            </table>

          </div>

          <div style="width:130px; margin-left:10px; margin-bottom:-2px; float:left; z-index:999999999">

            <table width="100%" border="0" cellspacing="0" cellpadding="0">

              <tr>

                <td width="6"><img src="../img/t1.jpg" width="6" height="41" alt="" /></td>

                <td width="661" align="center" style="background: url(../img/t3.jpg);"><a href="active_accounts.php" style="font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#3e4447;text-decoration:none;">Active</a></td>

                <td width="6"><img src="../img/t2.jpg" width="6" height="41" alt="" /></td>

              </tr>

            </table>

          </div>

        </div></td>

      </tr>

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

       Pending Account List

        </span>

        </div>

        </td>

        <td align="right"><input type="text" name="search_field" class="search" value="Search contact list" onfocus="if (this.value == 'Search contact list') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Search contact list';}" style="color:#999;margin-right:10px;margin-top:-4px;"/>

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

              

            <table cellpadding="0" cellspacing="0" border="0">

              <tr> <td>

            <input type="submit" name="delete_all" class="submit2" value="Delete" onclick="return onDelete();"/>

              </td>

              <td style="padding-left:10px;">

              <input type="submit" name="confirm" class="submit2" value="Confirm"  />

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

              <div style="float:left;background-image:url(../img/option_name_repeat.png);width:150px;height:26px;font-family:Arial, Helvetica, sans-serif;font-size:13px;font-weight:bold;color:#373838;padding-top:10px;padding-left:17px;"><a href="accounts.php?arr=sur_name" style="text-decoration:underline;color:#333;" title="Sort by Name">Name</a></div>

              <div style="float:left;background-image:url(../img/option_right_check.png);width:5px;height:36px;"></div>

              </div>

              <!--name holder-->

              

              <!--subject holder-->

              <div style="float:left;">

              <div style="float:left;background-image:url(../img/option_name_repeat.png);width:145px;height:26px;font-family:Arial, Helvetica, sans-serif;font-size:13px;font-weight:bold;color:#373838;padding-top:10px;padding-left:17px;">Account Type</div>

              <div style="float:left;background-image:url(../img/option_right_check.png);width:5px;height:36px;"></div>

              </div>

              <!--subject holder-->

              

              <!--last visit-->

              <div style="float:left;">

              <div style="float:left;background-image:url(../img/option_name_repeat.png);width:160px;height:26px;font-family:Arial, Helvetica, sans-serif;font-size:13px;font-weight:bold;color:#373838;padding-top:10px;padding-left:17px;"><a href="accounts.php?arr=register_date" style="text-decoration:underline;color:#333;" title="Sort by Date">Date</a></div>

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

			 $var="no";

			 

			 

			  $page = (int) (!isset($_GET["page"]) ? 1 : $_GET["page"]);

			  //var_dump($page);die();

    	$limit = 20;

    	$startpoint = ($page * $limit) - $limit;

			  

			  if(isset($_GET['arr']))

               { 

			   

			   $sort_by=$_GET["arr"];

			  

			   if($sort_by=="sur_name")

			   { $sort="sur_name"; 

			   $arrange="ASC";

			   }

			   else if($sort_by=="register_date")

			   { $sort="register_date";

			   $arrange="DESC";

			   }

			   

			 

			   

			   else

			   { $sort="";

			   $arrange="";

			   }

		

			   $query="SELECT * FROM dentist_list WHERE allow_dentist='".$var."' ORDER by $sort $arrange LIMIT {$startpoint} , {$limit}";

			   $res=mysql_query($query); 

			   

			   $statement = "SELECT * FROM dentist_list WHERE allow_dentist='".$var."' ORDER by $sort $arrange";

			   

			   

			   }

			   //sort

			   

			   

			   //search

			   else if(isset($_POST['search']))

			   { 

			   if(preg_match("/^[  a-zA-Z]+/", $_POST['search_field']))

			   { $name=$_POST['search_field']; }

			   $query="SELECT * FROM dentist_list WHERE first_name LIKE '%".$name."%' AND allow_dentist='".$var."'";

			   $res=mysql_query($query);

			   }

			   //search

			   

			   //default

			else {

			  

			  

			  $sql="SELECT * FROM dentist_list WHERE allow_dentist='".$var."' LIMIT {$startpoint} , {$limit}";

			  $res=mysql_query($sql);

			    $statement = "SELECT * FROM dentist_list WHERE allow_dentist='".$var."'";

			  

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

			  

			  

			  $fname=$row['first_name'];

			  $lname=$row['sur_name'];

			  $mname=$row['middle_name'];

			  $name=$lname.", ".$fname." ".$mname;

			  ?>

              <tr style="background-color:<?php echo $back;?>;font-size:14px;">

              <!--check--><td width="58" style="text-align:center;padding-top:10px;padding-bottom:10px;">

              <input type="checkbox" name="check[]" id="check<?php echo $i;?>" value="<?php echo $row["id"];?>"/>

              <!--check--></td>

              <!--name--><td style="width:173px;text-align:center;padding-top:10px;padding-bottom:10px;">

             <div><a href="dentist_profile.php?id=<?php echo $row['id'];?>" style="text-decoration:none;color:#333;"><?php echo $name;?></a></div>

              <!--name--></td>

                <!--subject--><td style="width:165px;text-align:center;padding-top:10px;padding-bottom:10px;">

              <div><?php echo "Dentist";?></div>

              <!--subject--></td>

              <!--last visit--><td style="width:200px;text-align:center;padding-top:10px;padding-bottom:10px;">

              <div><?php echo $row["register_date"];?></div>

              <!--last visit--></td>

              <!--action--><td width="100" style="padding-top:10px;padding-bottom:10px;">

             <table cellpadding="0" cellspacing="0" border="0">

             <tr>

             <td width="25" style="padding-left:20px;"><a href="dentist_profile.php?id=<?php echo $row['id'];?>" title="View"><img src="../img/folder_64.png" width="15" height="15" /></a></td>

             <!--print--><td width="25"><a href="accounts.php?key=<?php echo $row['id'];?>" onclick="return onCheck();" title="Add"><img src="../img/Plus (1).png" height="15" width="15"/></a></td>

             <!--delete--><td><a href="accounts.php?id=<?php echo $row['id'];?>" onclick="return onDelete();" title="Delete"><img src="../img/icon_address_delete.png" width="15" height="15"/></a></td>

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

            

             <!--bottom button--><tr><td style="padding-top:15px;padding-left:15px;">

              <!--<div style="clear:both;height:20px;"></div>-->

              <!--<div style="margin:0 auto;width:690px;margin-top:15px;">

                <div style="float:left;"><select name="sort2" />

              <option value="confirm">Confirm Selected</option>

<option value="reject">Reject Selected</option>



              </select></div>

              <div style="float:left;margin-left:15px;"><input type="submit" name="apply2" class="submit2" value="Apply" ></div>

            

              <div style="float:right;"><input type="submit" name="apply" class="submit2" value="Apply" /></div>

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

              <input type="submit" name="confirm" class="submit2" value="Confirm"  />

              </td>

               <!--<td style="padding-left:10px;">

              <input type="submit" name="editthis" class="submit2" value="Edit Contact"  />

              </td>-->

              </tr>

              </table>

             <!--bottom button--></td></tr>

              <input type="hidden" name="hdnCount" value="<?php echo $i;?>">

              </form>

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

