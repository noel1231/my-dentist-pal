<?php include('config.php');

if(isset($_POST['sub']))
{
	
$name=mysql_escape_string($_POST['name']);
$group=mysql_escape_string($_POST['group']);
$visit=mysql_escape_string($_POST['last']);
$email=mysql_escape_string($_POST['email']);
$sql="INSERT INTO mydentist_pal (patient_name,patient_group,patient_last_visit,patient_email) VALUES('$name','$group','$visit','$email')";	
$res=mysql_query($sql);
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form method="post" enctype="multipart/form-data" action="" />
<input type="text" name="name" />Name<br />
<input type="text" name="group" />Group<br />
<input type="text" name="last"  />Last visit<br />
<input type="text" name="email" />Email<br />
<input type="submit" name="sub" />
</form>
</body>
</html>