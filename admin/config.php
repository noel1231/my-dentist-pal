<?php



$server = "localhost";

$username = "mydentis_dent2";

$password = "$3EAhH.4Ld8b";

$database = "mydentis_mydentist";



$con = mysql_connect($server,$username,$password) or die ("Error connecting to database".mysql_error());



/* $result = mysql_list_tables ( $database, $con );



while ($row = mysql_fetch_row($result)) {

    echo "Table: {$row[0]}\n";

} */



$db = mysql_select_db($database,$con) or die("Error selecting database".mysql_error());



//$id = "54975";



//functions



	

?>