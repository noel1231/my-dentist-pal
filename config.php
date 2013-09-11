<?php
date_default_timezone_set('Asia/Manila');
// error_reporting(E_ERROR);

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



	
/*
<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-39650233-1']);
  _gaq.push(['_trackPageview']);
  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script> 
*/
?>