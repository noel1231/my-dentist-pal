<?php include('config.php');

$dentist_id=$_SESSION['id'];

/*if(isset($_GET['id'])){
$idy = $_GET['id']; 

$sql="DELETE FROM addressbook WHERE id=".$idy."";
$res=mysql_query($sql);
}
*/

if(isset($_POST['delete_all']))
{
		for($i=0;$i<count($_POST["check"]);$i++){
		if($_POST["check"][$i] != "") {
			$qwerty="DELETE FROM address_book_group WHERE id='".$_POST['check'][$i]."'";
			$res=mysql_query($qwerty);
	}}
	}
	
	
	if(isset($_POST['edit']))
{
if(count($_POST["check"]) >= 2) {
					echo "<script>alert('Too many groups to edit. Please select only one.');</script>";
					}
					else if(count($_POST["check"])==0) {
						echo "<script>alert('Please select one.');</script>";
					}
					else {
		for($i=0;$i<count($_POST["check"]);$i++){
		if($_POST["check"][$i] != "") {
			$qwerty="SELECT * FROM address_book_group WHERE id='".$_POST['check'][$i]."'";
			$res=mysql_query($qwerty);
			while($row=mysql_fetch_array($res)) {
			          //$sendmail=$row['email']; 
					  $id=$row['id'];
												}
					//var_dump($sendmail);die();
	}} 
	header('Location: edit_group.php?id='.$id.'');
	}
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
width:262px;
height:220px;
margin-top:-250px;

z-index: 9002;

 border-style: solid;
 border-width: 2px;
 -moz-border-radius: 5px;
 -webkit-border-radius: 5px;
 border-radius: 5px;


/*date*/



}
</style>

</head>

<body>

<div id="popUpDiv" style="display:none;">
 <div style="margin:0 auto;width:258px;">
 <table cellpadding="0" cellspacing="0" border="0">
 <tr><td>
 
 <table cellpadding="0" cellspacing="0" border="0" style="">
 <tr><td style="background-color:#0281aa;width:250px;height:40px;">
 <img src="img/popup.png" width="190" height="19" />
 </td></tr>
 </table>
 </td></tr>
 </table>
 </div>
 </div>

<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>&nbsp;</td>
  </tr>
  
 
  <tr style="font-family:Arial, Helvetica, sans-serif;">
    <td><table width="739" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td height="39" valign="top"><div>
          <div style="width:140px; margin-left:20px; margin-bottom:-2px; float:left;">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="6"><img src="img/t1.jpg" width="6" height="41" alt="" /></td>
                <td width="661" align="center" style="background: url(img/t3.jpg);"><!--<img src="img/t-contact.png" alt="" />--><a href="dentist_addressbook.php" class="tablink">Address Book List</a></td>
                <td width="6"><img src="img/t2.jpg" width="6" height="41" alt="" /></td>
              </tr>
            </table>
          </div>
          <div style="width:120px; margin-left:10px; margin-bottom:-2px; float:left;">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="6"><img src="img/u1.jpg" width="6" height="41" alt="" /></td>
                <td width="661" align="center" style="background: url(img/u3.jpg);"><!--<img src="img/t_add.png"  alt="" />--><a href="dentist_group_addressbook.php" class="tablink">Groups</a></td>
                <td width="6"><img src="img/u2.jpg" width="6" height="41" alt="" /></td>
              </tr>
            </table>
          </div>
          <div style="width:110px; margin-left:10px; margin-bottom:-2px; float:left">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="6"><img src="img/t1.jpg" width="6" height="41" alt="" /></td>
                <td width="661" align="center" style="background: url(img/t3.jpg);"><!--<img src="img/t-sent.png" width="72" height="17" alt="" />--><a href="addressbook_print.php" class="tablink">Print All</a></td>
                <td width="6"><img src="img/t2.jpg" width="6" height="41" alt="" /></td>
              </tr>
            </table>
          </div>
         <!-- <div style="width:130px; margin-left:10px; margin-bottom:-2px; float:left; z-index:999999999">
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
        <td><div style="z-index:1;"><img src="img/1.jpg" width="739" height="12" alt="" /></div></td>
      </tr>
      
      <tr>
      
        <td height="47" style="background:url(img/2.jpg);">        
        <table width="100%"><tr><td>
        <!--<img src="img/contact_list.png" height="21" width="116" style="margin-top:-8px;margin-left:23px;"/>
        <div style="float:left;margin-left:25px;margin-top:-8px;"><span style="color:#FFF;font-size:18px;font-family:Arial, Helvetica, sans-serif;">Addressbook</span></div>-->
        <img src="img/addressbook_cl.png" height="18" width="122" style="margin-top:-8px;margin-left:23px;"/>
       <!-- <form action="add_in_addressbook.php">
        <div style="margin-top:-7px;">
        <input type="button" name="addnew" value="ADD NEW" onclick="window.location.href='add_in_addressbook.php?id=add'" class="submit" style="margin-left:15px;"/>
         <input class="submit" type="button" name="newgroup" onclick="window.location.href='add_in_addressbook.php?id=new'" value="NEW GROUP" style="margin-right:5px;" />
         </div>
        </form>-->
      
        
        
      
        </td>
        <td align="right">
          <form method="post" action="" enctype="multipart/form-data" name="frmMain"/>
          <div style="margin-top:-7px;">
        <input type="text" name="search_field" class="search" value="Search contact list" onfocus="if (this.value == 'Search contact list') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Search contact list';}" style="color:#999;"/>
     <input type="submit" name="search" value="SEARCH" class="submit" style="margin-right:17px;" /></div></td></tr></table>
        </td>
      </tr>
      <tr>
        <td valign="top" style="background:url(img/3.jpg); padding-bottom:10px;"><div style="margin-top:-8px; position: relative;">
          <table width="690" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td bgcolor="#FFFFFF" style="border-left:1px solid #a0a8ac; border-right:1px solid #a0a8ac; border-bottom:1px solid #a0a8ac;">
              
              <table cellpadding="0" cellspacing="0" border="0">
              <tr><td style="background-image:url('img/top_button_bak_left.png');width:9px;height:48px;">
              </td>
              <td style="background-image:url('img/top_button_bak_center.png');width:670px;height:48px;padding-left:10px;">
              <input type="submit" name="delete_all" class="submit2" value="Delete" onclick="return onDelete();"/>
              &nbsp;&nbsp;
              <input type="button" name="addnew" value="Add" class="submit2" onclick="window.location.href='add_in_addressbook.php?id=new'"/>&nbsp;&nbsp;
         <input class="submit2" type="submit" name="edit" value="Edit"/>
              </td>
              </tr>
              </table>
              <div style="clear:both;"></div>
             <!--second content-->
        
            <table cellpadding="0" cellspacing="0" border="0" style="font-family:Arial, Helvetica, sans-serif;">
            <tr><td style="width:60px;height:30px;background-image:url(img/option_center_check.png);text-align:center;border-right:1px solid #d4d3db;">
           <input name="CheckAll" type="checkbox" id="CheckAll" value="Y"  onClick="ClickCheckAll(this);" />
            </td>
           
            <td style="width:360px;height:30px;background-image:url(img/option_name_repeat.png);text-align:center;border-right:1px solid #d4d3db;">
            <span style="color:#333;font-size:13px;font-weight:bold;"><a href="dentist_group_addressbook.php?arr=group_name" style="text-decoration:underline;color:#333;" title="Sort by Group">Group Name</a></span>
            </td>
           
            
             <td style="width:270px;height:30px;background-image:url(img/option_name_repeat.png);border-right:1px solid #d4d3db;text-align:center;">
            <span style="color:#333;font-size:13px;font-weight:bold;"><a href="dentist_group_addressbook.php?arr=date" style="text-decoration:underline;color:#333;" title="Sort by Date">Date Created</a></span>
            </td>
            
             <!--<td style="width:310px;height:30px;background-image:url(img/option_name_repeat.png);border-right:1px solid #d4d3db;text-align:center;">
            <span style="color:#333;font-size:13px;font-weight:bold;">Email</span>
            </td>
             
             <td style="width:240px;height:30px;background-image:url(img/option_name_repeat.png);border-right:1px solid #d4d3db;text-align:center;">
            <span style="color:#333;font-size:13px;font-weight:bold;">Contact No.</span>
            </td>
             <td style="width:170px;height:30px;background-image:url(img/option_name_repeat.png);border-right:1px solid #d4d3db;text-align:center;">
            <span style="color:#333;font-size:13px;font-weight:bold;">Action</span>
            </td>-->
            
            
            
            </tr>
            <?php 
			
			
        /*  if(isset($_POST['apply']))
               { 
			   
			   $sort_by=$_POST["sort"];
			  
			   if($sort_by=="firstname")
			   { $sort="first_name"; 
			   //$arrange="ASC";
			   }
			   else if($sort_by=="lastname")
			   { $sort="last_name"; 
			   //$arrange="ASC";
			   }
			   else if($sort_by=="group")
			   { $sort="group_name";}
			    else if($sort_by=="email")
			   { $sort="email";}
			   else
			   { $sort="";}
		
			   $query="SELECT * FROM addressbook WHERE dentist_id='".$dentist_id."' ORDER by $sort ASC";
			   $res=mysql_query($query); }
			   //sort

				else if(isset($_POST['search']))
			   { 
			   if(preg_match("/^[  a-zA-Z]+/", $_POST['search_field']))
			   { $name=$_POST['search_field']; }
			   $query="SELECT * FROM addressbook WHERE last_name LIKE '%".$name."%' AND dentist_id='".$dentist_id."'";
			   $res=mysql_query($query);
			   }*/
			   if(isset($_GET['arr']))
               { 
			   
			   $sort_by=$_GET["arr"];
			   
			   if($sort_by=="group_name") {
				$sort=$sort_by;
				$arrange="ASC";
			   }
			   else if($sort_by=="date") {
				$sort=$sort_by;
				$arrange="DESC";
			   }
			   
			   $query="SELECT * FROM address_book_group WHERE dentist_id='".$dentist_id."' ORDER by $sort $arrange";
			   $res=mysql_query($query);
			   
			   }

            else { 
			$sql="SELECT * FROM address_book_group WHERE dentist_id='".$dentist_id."'";
			$res=mysql_query($sql); }
			
			while($row=mysql_fetch_array($res))
			{
			$gname=$row["group_name"];
			$date=$row["date"];
			/*$email=$row["email"];
			$phone=$row["contact_number"];
			$group=$row["group_name"];
			$id=$row["id"];
			$address=$row["address"];
			*/
			$i++;
			
			$f=$i%2;
	if($f==0)
	{ $back="#FFF";} 
	else
	{ $back="#e0eefa";}
			
			?>
            <tr style="background-color:<?php echo $back;?>;font-family:Arial, Helvetica, sans-serif;font-size:15px;">
            <td style="padding-top:10px;padding-bottom:10px;text-align:center;">
          <input type="checkbox" name="check[]" id="check<?php echo $i;?>" value="<?php echo $row["id"];?>"/>
            </td>
            
            <td style="padding-top:10px;padding-bottom:10px;text-align:left;padding-left:10px;">
            <?php echo $gname;?>
            </td>
            
        
            <td style="padding-top:10px;padding-bottom:10px;text-align:center;">
            <?php echo $date;?>
            </td>
           
            
            <?php /*
            <td style="padding-top:10px;padding-bottom:10px;text-align:left;padding-left:10px;">
            <?php //echo $email;?>
            </td>
                <td style="padding-top:10px;padding-bottom:10px;text-align:left;padding-left:10px;">
            <?php //echo $phone;?>
            </td>
            
            <td style="padding-top:10px;padding-bottom:10px;">
            <table cellpadding="0" cellspacing="0" border="0">
            <tr>
            <td style="padding-left:25px;"><a href="mailto:<?php echo $email;?>" title="Send Message"><img src="img/read.png" width="13" height="13"/></a></td>
            <?php preg_replace(' ','+',$address);?>
            <td style="padding-left:7px;"><a href="http://maps.google.com/maps?q=<?php echo $address;?>%2C+&amp;t=h" title="Google Map" target="_blank"><img src="img/map.png" width="12" height="15"/></td>
            <td style="padding-left:7px;"><a href="add_in_addressbook.php?id=<?php echo $row['id'];?>" title="Edit"><img src="img/setup.png" width="15" height="15"/></a></td>
            <td style="padding-left:7px;"><a href="dentist_addressbook.php?id=<?php echo $row["id"];?>" title="Delete" onclick="return onDelete();"><img src="img/delete.png" width="13" height="13"/></td>
            </tr>
            </table>
            </td>*/?>
            
            </tr>
            <?php } ?>
            </table>
         
            
              <input type="hidden" name="hdnCount" value="<?php echo $i;?>">
               </td>
            </tr>
              
            <!--<tr><td bgcolor="#FFFFFF" style="border-left:1px solid #a0a8ac; border-right:1px solid #a0a8ac;padding-top:20px;">
            <div style="margin:0 auto;width:500px;font-family:Arial, Helvetica, sans-serif;font-size:12px;color:#999;">
            <table cellpadding="0" cellspacing="0" border="0">
            <td width="23"><a href="dentist_addressbook.php?sort="A"" style="text-decoration:none;color:#999;">A </a>|</td>
            <td width="23" style="padding-left:2px;"><a href="dentist_addressbook.php?sort=B" style="text-decoration:none;color:#999;">B </a>|</td>
            <td width="23" style="padding-left:2px;"><a href="dentist_addressbook.php?sort=C" style="text-decoration:none;color:#999;">C </a>|</td>
            <td width="23" style="padding-left:2px;"><a href="dentist_addressbook.php?sort=D" style="text-decoration:none;color:#999;">D </a>|</td>
            <td width="23" style="padding-left:2px;"><a href="dentist_addressbook.php?sort=E" style="text-decoration:none;color:#999;">E </a>|</td>
            <td width="23" style="padding-left:2px;"><a href="dentist_addressbook.php?sort=F" style="text-decoration:none;color:#999;">F </a>|</td>
            <td width="23" style="padding-left:2px;"><a href="dentist_addressbook.php?sort=G" style="text-decoration:none;color:#999;">G </a>|</td>
            <td width="23" style="padding-left:2px;"><a href="dentist_addressbook.php?sort=H" style="text-decoration:none;color:#999;">H </a>|</td>
            <td width="23" style="padding-left:2px;"><a href="dentist_addressbook.php?sort=I" style="text-decoration:none;color:#999;">I </a>|</td>
            <td width="23" style="padding-left:2px;"><a href="dentist_addressbook.php?sort=J" style="text-decoration:none;color:#999;">J </a>|</td>
            <td width="23" style="padding-left:2px;"><a href="dentist_addressbook.php?sort=K" style="text-decoration:none;color:#999;">K </a>|</td>
            <td width="23" style="padding-left:2px;"><a href="dentist_addressbook.php?sort=L" style="text-decoration:none;color:#999;">L </a>|</td>
            <td width="23" style="padding-left:2px;"><a href="dentist_addressbook.php?sort=M" style="text-decoration:none;color:#999;">M </a>|</td>
            <td width="23" style="padding-left:2px;"><a href="dentist_addressbook.php?sort=N" style="text-decoration:none;color:#999;">N </a>|</td>
            <td width="23" style="padding-left:2px;"><a href="dentist_addressbook.php?sort=O" style="text-decoration:none;color:#999;">O </a> |</td>
            <td width="23" style="padding-left:2px;"><a href="dentist_addressbook.php?sort=P" style="text-decoration:none;color:#999;">P </a>|</td>
            <td width="23" style="padding-left:2px;"><a href="dentist_addressbook.php?sort=Q" style="text-decoration:none;color:#999;">Q </a>|</td>
            <td width="23" style="padding-left:2px;"><a href="dentist_addressbook.php?sort=R" style="text-decoration:none;color:#999;">R </a>|</td>
            <td width="23" style="padding-left:2px;"><a href="dentist_addressbook.php?sort=S" style="text-decoration:none;color:#999;">S </a>|</td>
            <td width="23" style="padding-left:2px;"><a href="dentist_addressbook.php?sort=T" style="text-decoration:none;color:#999;">T </a>|</td>
            <td width="23" style="padding-left:2px;"><a href="dentist_addressbook.php?sort=U" style="text-decoration:none;color:#999;">U </a>|</td>
            <td width="23" style="padding-left:2px;"><a href="dentist_addressbook.php?sort=V" style="text-decoration:none;color:#999;">V </a>|</td>
            <td width="23" style="padding-left:2px;"><a href="dentist_addressbook.php?sort=W" style="text-decoration:none;color:#999;">W </a>|</td>
            <td width="23" style="padding-left:2px;"><a href="dentist_addressbook.php?sort=X" style="text-decoration:none;color:#999;">X </a>|</td>
            <td width="23" style="padding-left:2px;"><a href="dentist_addressbook.php?sort=Y" style="text-decoration:none;color:#999;">Y </a>|</td>
            <td width="23" style="padding-left:2px;"><a href="dentist_addressbook.php?sort=Z" style="text-decoration:none;color:#999;">Z </a>|</td>
            
            </table>
            </div>
            </td></tr>-->
            
             <!--bottom button--><tr><td style="padding-left:15px;padding-top:15px;">
              <!--<div style="clear:both;height:20px;"></div>-->
              
              <!--<div style="margin:0 auto;width:690px;margin-top:15px;">
              <div style="float:left;"><input type="submit" name="delete_all" class="submit2" value="Delete all marked" onclick="return onDelete();"/></div>
              <div style="float:right;"><input type="submit" name="apply" class="submit2" value="Apply"/></div>
              <div style="float:right;margin-right:15px;"><select name="sort" />
              <option value="firstname">sort by First Name</option>
              <option value="lastname">sort by Last Name</option>
<option value="group">sort by Group</option>
<option value="email">sort by Email</option>

              </select>
               </form>
              </div>
              </div>-->
              
          
              <input type="submit" name="delete_all" class="submit2" value="Delete" onclick="return onDelete();"/>
              &nbsp;&nbsp;
              <input type="button" name="addnew" value="Add" class="submit2" onclick="window.location.href='add_in_addressbook.php?id=new'"/>&nbsp;&nbsp;
         <input class="submit2" type="submit" name="edit" value="Edit"/>
        
              
             <!--bottom button--></td></tr>
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