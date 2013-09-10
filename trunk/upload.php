<?php

include('config.php');
if ($_SERVER['REQUEST_METHOD']=='POST') {
$pt_id=mysql_real_escape_string($_POST['patient_id']);
$dentist_id=mysql_real_escape_string($_POST['dentist_id']);

$uploaddir = 'patient_other_files/';


$sql="INSERT INTO patient_upload (patient_id,dentist_id,date_uploaded) VALUES('$pt_id','$dentist_id',NOW())";
$res=mysql_query($sql);
$new_id=mysql_insert_id();

for ($i=0;$i<2;$i++)

  {
$ctr=$i+1; 

   if($_FILES['upload_file']['name'])

   {

	$ctr=$i+1; 

    $uploadfile = $uploaddir . basename($_FILES['upload_file']['name']);
	
	$file_name = basename($_FILES['upload_file']['name']);

    $ext = strtolower(substr($uploadfile,strlen($uploadfile)-3,3));

    if (preg_match("/(jpg|png|mp4)/",$ext))

    {

	//giving the file name

	$now = time(); 
	$download_name=$now.'-'.$_FILES['upload_file']['name'];

    while(file_exists($uploadfile = $uploaddir.$now.'-'.$_FILES['upload_file']['name'])) 

	{ 



		$now++; 

	} 
     if (move_uploaded_file($_FILES['upload_file']['tmp_name'], $uploadfile)) 

     {

      $sql = "UPDATE patient_upload SET patient_file='".$uploadfile."',file_name='".$file_name."',download_name='".$download_name."' WHERE id=".$new_id."";//

		$res=mysql_query($sql);
		//var_dump($res);die();

	  $success++;
header("Location: patient_others.php?id=".$pt_id." ");
     } 

     else 

     {

    

     $fail++;

     }

    }

    else

    {
 echo "Error Uploading the file. Retry after sometime.\n";
     $fail++;
echo "<br><a href=\"patient_others.php?id=".$pt_id."\">Click here to try again</a>";
    }

   //}

  }

  $message = "<br> Number of files Uploaded:".$success."<br>*Restart the page to see the changes. ";

}






}
//var_dump($pt_id);var_dump($dentist_id);die();
?>