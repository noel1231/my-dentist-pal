<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script src="first_tooth.js"></script>
<script src="popup.js"></script>
</head>

<body>
<form method="post" action="" enctype="multipart/form-data">
<div id="blanket" style="display:none;"></div>
<?php include('table_first_tooth.php');?>

<table cellpadding="0" cellspacing="0" border="0">
<tr><td>

<table cellpadding="0" cellspacing="0" border="0">
<tr>
<td><img src="img/toothchart/01.png" onclick="popup('popUpDiv')" name="change" id="change1" value="none"/></td>
<td><img src="img/toothchart/01.png" onclick="popup('popUpDiv')" name="change" id="change2" value="none"/></td>
<td><img src="img/toothchart/01.png" onclick="popup('popUpDiv')" name="change" id="change3" value="none"/></td>
<td><img src="img/toothchart/01.png" onclick="popup('popUpDiv')" name="change" id="change4" value="none"/></td>
<td><img src="img/toothchart/01.png" onclick="popup('popUpDiv')" name="change" id="change5" value="none"/></td>
<td><img src="img/toothchart/01.png" onclick="popup('popUpDiv')" name="change" id="change6" value="none"/></td>
<td><img src="img/toothchart/01.png" onclick="popup('popUpDiv')" name="change" id="change7" value="none"/></td>
<td><img src="img/toothchart/01.png" onclick="popup('popUpDiv')" name="change" id="change8" value="none"/></td>
</tr>
</table>

</td></tr>
</table>


<input type="hidden" id="pic1" value="none" name="newvalue" />
<input type="submit" name="send"/>
</form>
</body>
</html>