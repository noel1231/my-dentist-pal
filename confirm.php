<?php
session_start();
include('config.php');

$uname=mysql_real_escape_string($_POST['username']);
$pass=mysql_real_escape_string($_POST['password']);
$var="yes";

if($uname&&$pass)
{
    $uname=strtolower($uname);	
    $sql=mysql_query("SELECT * FROM dentist_list WHERE lower(email)='".$uname."'");
    $numrows=mysql_num_rows($sql);

    //var_dump($numrows);die();
    if($numrows!=0)
    {
        while($row=mysql_fetch_assoc($sql))
        {
            $dbusername=$row['email'];	
            $dbpassword=$row['dentist_pass'];
            $id=$row['id'];
            $lnum=$row['license_number'];
            $allow=$row['allow_dentist'];
        }

        
        
        
        
        //var_dump($allow);var_dump($var);die();
        //var_dump($dbusername);var_dump($dbpassword);die();

        if($uname==$dbusername&&md5($pass)==$dbpassword&&$allow==$var)
        { 
            $_SESSION['email']=$dbusername;
            $_SESSION['id']=$id;
            $_SESSION['license_number']=$lnum;
            
            $date_login = date("M/d/Y") . " " . date('h:i:s A');

            $sqlD="DELETE FROM dentist_login_info where dentist='$id'";
            mysql_query($sqlD);
            
            $sql="INSERT INTO dentist_login_info(dentist, last_login) VALUES('$id','$date_login')";
            mysql_query($sql);
            
            header('Location: dentist_landing.php'); 
        }
        else 
        {
            header('Location: dentist_login.php?error');
        }
    }
    else
    {
        header('Location: dentist_login.php?error'); 	
    }
}
else 
{
    header('Location: dentist_login.php?error'); 
}
?>