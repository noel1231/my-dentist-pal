<?php
include('config.php');
session_start();
$dentist_id=$_SESSION['id'];
$q=$_GET["q"];
//var_dump($q);die();

//var_dump($q);die($q);
//if(preg_match("/^[  a-zA-Z]+/", $_POST['search_field']))
			   //{ $name=$_POST['search_field']; } ?>
			      <table cellpadding="0" cellspacing="0" border="0">  
                  <?php
			   if($q) {
			   $query="SELECT * FROM addressbook WHERE first_name LIKE '%".$q."%' AND dentist_id='".$dentist_id."'";
			   $res=mysql_query($query); 
			   //var_dump($query);die();
			   while($rows=mysql_fetch_array($res)) {
				$email=$rows['email'];   
			   ?>
          
               <tr>
<td>
<table cellpadding="0" cellspacing="0" border="0" id="table1">


<tr><td> 

<input type="checkbox" name="checks[]" id="checks<?php echo $i;?>" value="<?php echo $rows["id"];?>" /></td>
<td style="padding-left:10px;">
<?php echo $email;?>
</td></tr>
</table></td></tr>
<?php } ?>
</table>

		
			   
			 <?php   }
			   else {
				$sql="SELECT * FROM addressbook WHERE dentist_id='".$dentist_id."'";
$res=mysql_query($sql);   
//var_dump($sql);die();
			   }

?>