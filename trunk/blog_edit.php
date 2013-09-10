<?php
include('config.php');
?>

<table cellpadding="0" cellspacing="0" border="0" style="padding-bottom:20px;padding-top:20px;font-family:Arial, Helvetica, sans-serif;font-size:14px;color:#F00;">
<tr><td>
<a href="#">Write Blog</a>
</td>
<td style="padding-left:20px;">
<a href="#">List Blog</a>
</td>
</tr>
</table>

<div style="clear:both;height:20px;"></div>

<table cellpadding="0" cellspacing="0"  border="0" style="padding-bottom:20px;padding-top:20px;font-family:Arial, Helvetica, sans-serif;font-size:14px;color:#333;">
<tr><td width="150">
Blog Title:
</td>
<td style="padding-left:20px;">
<input type="text" name="blog_title">
</td>
</tr>
<tr><td width="150">
Publish Date:
</td>
<td style="padding-left:20px;">
<input type="text" name="date">
</td>
</tr>
<tr><td width="150">
Display:
</td>
<td style="padding-left:20px;">
<input type="radio" name="display">Yes
&nbsp;&nbsp;&nbsp;
<input type="radio" name="display">No
</td>
</tr>

</table>

<table cellpadding="0" cellspacing="0" border="0" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;color:#333;">
<tr><td width="150">Your Blog</td></tr>
<tr>
<td>&nbsp;</td>
<td style="padding-left:20px;">
<textarea name="content" cols="20" rows="4"></textarea>
</td></tr>

</table>