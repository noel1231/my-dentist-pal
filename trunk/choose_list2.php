<?php
include('config.php');
$varx="<tr><td style='padding-left:20px;'><select name='users' onchange='showUser(this.value)'><?php $sql='SELECT * FROM simple_accounting';$res=mysql_query($sql);while($row=mysql_fetch_array($res)) {?><option value='<?php echo $row['id'];?>'><?php echo $row['item_number'];?></option><?php } ?></select></td><td style='padding-left:72px;padding-top:3px;padding-bottom:5px;' valign='top'><div id='txtHint'><b>Person info will be listed here.</b></div></td></tr>";
?>
<html>
<title>1</title><head>
<script type="text/javascript">
function showUser(str)
{
if (str=="")
  {
  document.getElementById("txtHint").innerHTML="";
  return;
  } 
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","include.php?q="+str,true);
xmlhttp.send();
}
</script></head>
<body>

<div style="clear:both;height:30px;"></div>
<table cellpadding="0" cellspacing="0" border="0">
<tr><td>
<table style="font-family: Arial, Helvetica, sans-serif;color:#333;border:1px solid #CCC;" cellpadding="0" cellspacing="0" border="0">
<tr style="font-size:13px;font-weight:bold;background-color:#0281aa;color:#FFF;">
<td width="150" style="padding-left:20px;border:1px solid #CCC;">Choose one</td>
<td width="130" style="padding-left:20px;border:1px solid #CCC;">
Item Number
</td>
<td width="120" style="padding-left:20px;border:1px solid #CCC;">Description</td>
<td width="80" style="padding-left:20px;border:1px solid #CCC;">Price</td>

</tr></table></td></tr>
<form method="post" action="" enctype="multipart/form-data">
<tr><td>
<table cellpadding="0" cellspacing="0" border="0">
<div id="dynamicInput"></div>
<input type="hidden" name="old_price" value="<?php echo $x;?>">
<input type="button" name="add" value="Add New Appointment" class="submit2" onClick="addInput('dynamicInput');"/>
</form>

</table>
</table>
</body></html>

<script type="text/javascript">
var counter = 1;
var limit = 20;
function addInput(divName){
     if (counter==limit)  {
          alert("You have reached the limit of adding " + counter + " inputs");
     }
     else {
          var newdiv = document.createElement('div');
          newdiv.innerHTML = "<?php echo $varx;?>";
          document.getElementById(divName).appendChild(newdiv);
          counter++;
     }
}
</script>

