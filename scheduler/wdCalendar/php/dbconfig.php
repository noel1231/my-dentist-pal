<?php
class DBConnection{
	function getConnection(){
	  //change to your database server/user name/password
		mysql_connect("localhost","mydentis_mydent","wpRIhmv&!9mh") or
         die("Could not connect: " . mysql_error());
    //change to your database name
		mysql_select_db("mydentis_mydentist") or 
		     die("Could not select database: " . mysql_error());
	}
}
?>