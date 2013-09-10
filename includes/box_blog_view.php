<?php
?>

<div style="margin:0 auto;width:990px;font-family:Arial, Helvetica, sans-serif;color:#333;border:1px solid #999;">

<table cellpadding="0" cellspacing="0" border="0" width="100%">

<tr><td style="width:70%;">
<div style="float:left;margin-top:20px;margin-left:30px;">
<div style="float:left;font-size:25px;font-weight:bold;">
List of Blogs
</div>
<div style="clear:both;height:10px;"></div>
<div style="float:left;">
<hr style="border:2px solid #333;width:688px;">
</div>

</div>
<div style="clear:both;height:10px;"></div>
<div style="float:left;padding-bottom:20px;">
<?php 
if(isset($_POST['search']))
			   { 
			   if(preg_match("/^[  a-zA-Z]+/", $_POST['searchfield']))
			   { $name=$_POST['searchfield']; }
			   $query="SELECT * FROM blogging WHERE blog_title LIKE '%".$name."%'";
			   $res=mysql_query($query);
			   }
	else {		   
$sql="SELECT * FROM blogging ORDER BY id DESC";
$res=mysql_query($sql); }
while($row=mysql_fetch_array($res)) {
?>

<table cellpadding="0" cellspacing="0" border="0" style="padding-left:30px;padding-top:20px;">

<tr><td style="font-weight:bold;font-size:16px;"><a href="blog_view.php?id=<?php echo $row['id'];?>">
<?php echo $row['blog_title'];?></a>
</td></tr>

<tr><td style="font-size:15px;">
<?php

$length=100;
$name1=stripslashes($row['blog_content']);
//$name=strlen($name);
//echo $name;
$display = substr($name1, 0, $length) ;
$x=$display;
$x=strlen($x);
echo $display;
if($x>=$length) {
echo "..." ;
}
?>
</td></tr>

<tr><td><hr style="width:650px;border:1px solid #666;"></td></tr>



</table>


<?php } ?>
</div>
</td>

<td style="width:30%;" valign="top">
<div style="margin-left:20px;margin-top:20px;">
<form method="post" action="" enctype="multipart/form-data">
<table cellpadding="0" cellspacing="0" border="0" style="padding-top:20px;padding-left:20px;padding-right:20px;border:1px solid #CCC;padding-bottom:20px;">
<tr><td>
Search Blog
</td></tr>
<tr><td>
<input type="text" name="searchfield" style="width:180px;"/>
</td></tr>
<tr><td><div style="clear:both;height:10px;"></div></td></tr>
<tr><td>
<input type="submit" name="search" class="submit2" value="Search">
</td></tr>
</table>
</form>
</div>
</td>

</tr>

</table> 

</div>

