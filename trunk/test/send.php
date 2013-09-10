<?php // Read POST request params into global vars 
if(isset($_POST['send'])) {
	
var_dump($_POST);	
	
$to = $_POST['to']; 
$from = $_POST['from'];
$subject = $_POST['subject'];
$message = $_POST['message'];

// Obtain file upload vars
$fileatt = $_FILES['fakeupload']['tmp_name'];
$fileatt_type = $_FILES['fakeupload']['type']; 
$fileatt_name = $_FILES['fakeupload']['name'];

$headers = "From: $from";

if (is_uploaded_file($fileatt)) { // Read the file to be attached ('rb' = read binary)
$file = fopen($fileatt,'rb'); 
$data = fread($file,filesize($fileatt)); 
fclose($file);

// Generate a boundary string 
$semi_rand = md5(time());
$mime_boundary = "==Multipart_Boundary_x{$semi_rand}x"; // Add the headers for a file attachment 
$headers .= "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . " boundary=\"{$mime_boundary}\"";

// Add a multipart boundary above the plain message
$message = "This is a multi-part message in MIME format.\n\n" . "--{$mime_boundary}\n" . "Content-Type: text/html; charset=\"iso-8859-1\"\n" . "Content-Transfer-Encoding: 7bit\n\n" . $message . "\n\n";

// Base64 encode the file data 
$data = chunk_split(base64_encode($data));

// Add file attachment to the message 
$message .= "--{$mime_boundary}\n" . "Content-Type: {$fileatt_type};\n" . " name=\"{$fileatt_name}\"\n" . "Content-Disposition: attachment;\n" . " filename=\"{$fileatt_name}\"\n" . "Content-Transfer-Encoding: base64\n\n" . $data . "\n\n" . "--{$mime_boundary}--\n"; }

// Send the message 
$ok = mail($to, $subject, $message, $headers); if ($ok) { echo "<p>Mail sent! Yay PHP!</p>"; } else { echo "<p>Mail could not be sent. Sorry!</p>"; }  } ?>

<style type="text/css">
.upload {
	position:relative;
	width:664px;
}
.realupload {
	position:absolute;
	top:0;
	right:0;

	/* start of transparency styles */
	opacity:0;
	-moz-opacity:0;
	filter:alpha(opacity:0);
	/* end of transparency styles */

	z-index:2; /* bring the real upload interactivity up front */
	width:270px;
}
form .fakeupload {
	background:url(browse.gif) no-repeat 100% 50%;
	
}
form .fakeupload input {
	width:401px;
}
</style>

<form method="post" action="" enctype="multipart/form-data">

<table cellpadding="0" cellspacing="0" border="0">
<tr><td>
To: <input type="text" name="to">
</td></tr>
<tr><td>
From: <input type="text" name="from">
</td></tr>
<tr><td>
Subject: <input type="text" name="subject">
</td></tr>
<tr><td>
Message: <textarea name="message"></textarea>
</td></tr>
<tr><td>
Attachment: <!--<input type="file" name="fileatt">-->


<table cellpadding="0" cellspacing="0" border="0">
<tr><td>
	<div class="fakeupload">
		<input type="text" name="fakeupload" /> <!-- browse button is here as background -->
	</div>
    </td>
    <td style="padding-left:10px;">
    <div class="upload">
    	<label for="realupload"><img src="arrow_up.png" /></label>
    </div>
	<input type="file" name="upload" id="realupload" class="realupload" onchange="this.form.fakeupload.value = this.value;" />
</td></tr></table>

</td></tr>
<tr><td><input type="submit" name="send" value="SEND">
</td></tr>
</table>

</form>