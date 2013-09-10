<?php
include('../config.php');
for($i=0;$i<count($_POST["check"]);$i++){
		if($_POST["check"][$i] != "") {
			$qwerty="SELECT FROM simple_accounting WHERE id='".$_POST['check'][$i]."'";
			$res=mysql_query($qwerty);
			while($row=mysql_fetch_array($res)){
			?>
            
<table border="1">
<tr><td>
<?php echo $row['item_number'];?>
</td></tr>
<tr><td>
<?php echo $row['descriprtion'];?>
</td></tr>
<tr><td>
<?php echo $row['price'];?>
</td></tr>

</table>
<?php } ?>

<?php
	}}
	
	?>