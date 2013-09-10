<?php
include('config.php');



$subject=mysql_real_escape_string($_POST['subject']);
$date=mysql_real_escape_string($_POST['date']);
$number=mysql_real_escape_string($_POST['number']);
$message=mysql_real_escape_string($_POST['message']);
$link=mysql_real_escape_string($_POST['link']);

$dates=explode("/",$date);
$date_month=$dates[0];
$date_day=$dates[1];
$date_year=$dates[2];

$date_now=$date_year."-".$date_month."-".$date_day;

$sql="INSERT INTO promos_and_offer (promo_subject,promo_expiration_date,promo_limit,promo_message,promo_link,promo_publish) VALUES('$subject','$date_now','$number','$message','$link',NOW())";
$res=mysql_query($sql);

$new_id=mysql_insert_id();



if ($_SERVER['REQUEST_METHOD']=='POST') {
	


  $success = 0;

  $fail = 0;

//
  $uploaddir = 'banner/';

  for ($i=0;$i<2;$i++)

  {
$ctr=$i+1; 




//


   if($_FILES['userfile1']['name'])

   {


	$ctr=$i+1; 

    $uploadfile = $uploaddir . basename($_FILES['userfile1']['name']);




    $ext = strtolower(substr($uploadfile,strlen($uploadfile)-3,3));

    if (preg_match("/(jpg|gif|png|bmp)/",$ext))

    {

	//giving the file name

	$now = time(); 

    while(file_exists($uploadfile = $uploaddir.$now.'-'.$_FILES['userfile1']['name'])) 

	{ 

		$now++; 

	} 

     if (move_uploaded_file($_FILES['userfile1']['tmp_name'], $uploadfile)) 

     {

      $sql = "UPDATE promos_and_offer SET promo_picture='".$uploadfile."' WHERE id='".$new_id."'";//

		$res=mysql_query($sql);
		
//var_dump($res);die();
	  $success++;

     } 

     else 

     {

     $message = "Error Uploading the file. Retry after sometime.\n";

     $fail++;

     }

    }

    else

    {

     $fail++;

    }

   //}

  }

  $message = "<br> Number of files Uploaded:".$success."<br>*Restart the page to see the changes. ";

}}

header('Location: admin/promos_and_offer.php');

?>