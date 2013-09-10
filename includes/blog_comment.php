<?php 

$sql="SELECT * FROM blogging WHERE id='".$id."'";
$res=mysql_query($sql);
while($row=mysql_fetch_array($res)) {
$title=$row['blog_title'];
$content=$row['blog_content'];
$date=$row['blog_date'];
$id=$row['id'];
} ?>
<div style="margin:0 auto;width:990px;font-family:Arial, Helvetica, sans-serif;color:#333;border:1px solid #999;">

<table cellpadding="0" cellspacing="0" border="0" width="100%">

<tr><td style="width:70%;">
<div style="float:left;margin-top:20px;margin-left:30px;">
<div style="float:left;font-size:25px;font-weight:bold;">
Comments for this Blog
</div>
<div style="clear:both;height:10px;"></div>
<div style="float:left;">
<hr style="border:2px solid #333;width:688px;">
<div style="clear:both;height:10px;"></div>
<a href="blog_view.php" style="color:#333;font-size:15px;"> Back </a>
<div style="clear:both;height:10px;"></div>
<hr style="border:2px solid #333;width:688px;">
</div>

</div>
<div style="clear:both;height:10px;"></div>
<div style="float:left;padding-bottom:20px;">
<table cellpadding="0" cellspacing="0" border="0" style="padding-left:30px;padding-top:20px;">

<tr><td style="font-weight:bold;font-size:24px;">
<?php echo $title;?>
</td></tr>
<tr><td style="font-size:15px;color:#999;">
Published on <?php echo $date;?>
</td></tr>
<tr><td style="font-size:15px;padding-top:20px;">
<?php echo $content;?>
</td></tr>


<tr><td>
<table cellpadding="0" cellspacing="0" border="0" style="display:none;">
<tr><td>
<h2>Comments</h2>
</td></tr>
<?php 

$sql="SELECT * FROM comments WHERE blog_id='".$id."' ORDER BY comment_date DESC LIMIT 5";
$ress=mysql_query($sql);
//var_dump($sql);die();
while($rows=mysql_fetch_array($ress)){

?>
<tr><td style="font-size:13px;">
<i><?php echo $rows['comment_content'];?></i>
</td></tr>
<tr><td style="padding-top:4px;">
<span style="font-size:10px;color:#999;">-by <a href="mailto: <?php echo $rows['comment_email'];?>"><?php echo $rows['comment_name'];?></a> &nbsp; <?php echo $rows['comment_date'];?></span>
</td></tr>
<tr><td><div style="clear:both;height:20px;"></div></td></tr>
<tr><td><hr style="border:1px solid #666;width:640px;"></td></tr>
<tr><td><div style="clear:both;height:20px;"></div></td></tr>
<?php } //var_dump($rows);die();?>
</table></td></tr>
<tr><td>
<!-- START: Livefyre Embed -->
<script type='text/javascript' src='http://zor.livefyre.com/wjs/v1.0/javascripts/livefyre_init.js'></script>
<script type='text/javascript'>
    var fyre = LF({
        site_id: 299982
    });
</script>
<!-- END: Livefyre Embed -->
       </td></tr>             
<tr><td>
<form method="post" action="" enctype="multipart/form-data" name="ContactForm" onSubmit="return ValidateContactForm();" style="display:none;">
<table cellpadding="0" cellspacing="0" border="0">
<tr><td style="font-weight:bold;font-size:13px;">
<u>Post a comment</u>
</td></tr>
<tr><td>
<table cellpadding="0" cellspacing="0" border="0">
<tr><td style="width:150px;text-align:left;font-size:13px;">
Name
</td>
<td>
<input type="text" name="name" style="width:200px;">
</td>
</tr>
<tr><td style="width:150px;text-align:left;font-size:13px;">
Email
</td>
<td>
<input type="text" name="email" style="width:200px;" id="validate"/><span id="validEmail"></span>
</td>
</tr>
</table></td></tr>

<tr><td style="font-size:13px;">Comment</td></tr>
<tr><td>
<textarea name="comment" rows="8" cols="50"></textarea>
</td></tr>
<tr><td style="padding-top:8px;">
<table cellpadding="0" cellspacing="0" border="0">
                        <tr>
                        <td colspan="2"><label style="font-size:13px;">Enter the contents of image</label><label class="mandat"> *</label></td>
                    </tr>
                    <tr>
                        <td width="60px">                           
                            <table cellpadding="0" cellspacing="0" border="0"><tr><td>
                            <input type="text" name="captcha" id="captcha" maxlength="6" size="6"/></td>
                            <td>
                             <img src="captcha.php"/>
                            </td></tr></table></td>
                       
                    </tr>
                    <tr><td style="color:#F00;font-size:12px;"><?php echo $error;?></td></tr>
                    </table></td></tr>
                    <tr><td>
                    <input type="submit" name="submit" value="Submit" class="submit2" id="submit"/>
          
<input type="hidden" name="blog_id" value="<?php echo $id;?>">
</td></tr>
</table>
</form>
</td></tr>



</table>
</div></td>

<td style="width:30%;" valign="top">
<?php /*<div style="margin-left:20px;margin-top:20px;">

<table cellpadding="0" cellspacing="0" border="0" style="padding-top:20px;padding-left:20px;padding-right:20px;border:1px solid #CCC;padding-bottom:20px;">
<tr><td>
<!--<div id="datepicker" style="font-size:63%;"></div>-->

</td></tr>
</table>
*/?>
</div>
</td>


</tr></table></div>
