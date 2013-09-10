<?php

include('config.php');
//add patient

if(isset($_POST['update']))
{
$date=$_POST["date_entry"];
$bday=mysql_real_escape_string($_POST["patient_bday"]);
$name=mysql_real_escape_string($_POST["patient_name"]);
$age=mysql_real_escape_string($_POST["patient_age"]);
$gender=mysql_real_escape_string($_POST["gender"]);
$patient_address=mysql_real_escape_string($_POST["patient_address"]);
$patient_contact=mysql_real_escape_string($_POST["patient_contact"]);
$patient_status=mysql_real_escape_string($_POST["status"]);
$referred=mysql_real_escape_string($_POST["patient_reffered"]);
$patient_work=mysql_real_escape_string($_POST["patient_occupation"]);
$work_add=mysql_real_escape_string($_POST["patient_bus_add"]);
$work_phone=mysql_real_escape_string($_POST["patient_bus_phone"]);
$spouse=mysql_real_escape_string($_POST["patient_spouse_name"]);
$spouse_phone=mysql_real_escape_string($_POST["spouse_phone"]);
$spouse_work=mysql_real_escape_string($_POST["spouse_occupation"]);
$guardian=mysql_real_escape_string($_POST["patient_guardian"]);
$guardian_phone=mysql_real_escape_string($_POST["guardian_phone"]);
$guardian_add=mysql_real_escape_string($_POST["guardian_address"]);
$none="";
//$patient_pic=mysql_real_escape_string($_POST["patient_pic"]);


$sql="INSERT INTO patient_list (
date_of_entry,
date_of_birth,
patient_name,
patient_age,
patient_gender,
patient_address,
patient_phone,
patient_marital_status,
referred_by,
patient_occupation,
occupation_address,
occupation_phone,
spouse_name,
spouse_phone,
spouse_occupation,
patient_guardian,
guardian_phone,
guardian_address
								
) VALUES(NOW(),
'$bday',
'$name',
'$age',
'$gender',
'$patient_address',
'$patient_contact',
'$patient_status',
'$referred',
'$patient_work',
'$work_add',
'$work_phone',
'$spouse',
'$spouse_phone',
'$spouse_work',
'$guardian',
'$guardian_phone',
'$guardian_add')";


//$sql="INSERT INTO patient_list (date_of_birth) VALUES('$bday')";
$res=mysql_query($sql);


$new=mysql_insert_id();

//var_dump($new);


if ($_SERVER['REQUEST_METHOD']=='POST') {

	

  $success = 0;

  $fail = 0;


  $uploaddir = 'patient_picture/';



  for ($i=0;$i<2;$i++)

  {



	   $ctr=$i+1; 



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

      $sql = "UPDATE patient_list SET patient_picture='".$uploadfile."' WHERE id=".$new."";//

		$res=mysql_query($sql);



		//var_dump($sql);die();//if(!mysql_query($sql))

			//{

				//$messagedb = "Error in updating the database";

			//}

			//else{

           		//$messagedb = "Updating the new ads and links are success.";

			//}

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

	

	



}
}




header('Location: add_patient.php');

}


?>