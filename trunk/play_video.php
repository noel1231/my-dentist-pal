<?php
include('config.php');

if(isset($_GET['file'])){
$file = $_GET['file'];}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title><?php include("ganalytics.php"); ?>
</head>

<body>
<OBJECT CLASSID="clsid:02BF25D5-8C17-4B23-BC80-D3488ABDDC6B"

CODEBASE="http://www.apple.com/qtactivex/qtplugin.cab" WIDTH="160" HEIGHT="136" >

<PARAM NAME="src" VALUE="videofilename.mp4" >

<PARAM NAME="autoplay" VALUE="true" >

<EMBED SRC="http://leentechsystems.net/mydentistpal/<?php echo $file;?>" TYPE="image/x-macpaint"

PLUGINSPAGE="http://www.apple.com/quicktime/download" WIDTH="160" HEIGHT="136" AUTOPLAY="true"></EMBED>

</OBJECT>




  
</video>
</body>
</html>