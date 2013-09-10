<?php include('config.php');

$none="";

if(isset($_POST['next']))
{
	
if($_POST['id']) {	
$id=$_POST['id']; }

if(empty($_POST['pys_name'])) {
	$psy_name=$none;
}
else
{ $psy_name=mysql_real_escape_string($_POST['pys_name']); }

if(empty($_POST['date'])) {
	$date_of_last_visit=$none; 
 }
else
{ $date_of_last_visit=mysql_real_escape_string($_POST['date']); }

if(empty($_POST['illop'])) { 
$illop=$none; }
else
{ $illop=mysql_real_escape_string($_POST['illop']); }


if(empty($_POST['reason'])) {
 $illopreason=$none; }
else
{ $illopreason=mysql_real_escape_string($_POST['reason']); }

if(empty($_POST['pregnant'])) {
$pregnant=$none; }
else
{ $pregnant=mysql_real_escape_string($_POST['pregnant']); }

if(empty($_POST['nursing'])) {
 $nursing=$none; }
else
{ $nursing=mysql_real_escape_string($_POST['nursing']); }

if(empty($_POST['pills'])){
$pills=$none; }
else
{ $pills=mysql_real_escape_string($_POST['pills']); }

if(empty($_POST['diabetes'])) {
 $diabetes=$none;  }
else
{ $diabetes=mysql_real_escape_string($_POST['diabetes']); }

if(empty($_POST['hyper'])) {
$hyper=$none;  }
else
{ $hyper=mysql_real_escape_string($_POST['hyper']); }

if(empty($_POST['allergy_to_fd'])) {
$allergy_to_fd=$none; }
else
{ $allergy_to_fd=mysql_real_escape_string($_POST['allergy_to_fd']); }

if(empty($_POST['fainting'])) {
$fainting=$none;  }
else
{ $fainting=mysql_real_escape_string($_POST['fainting']);}

if(empty($_POST['tb'])) { 
 $tb=$none;}
else
{ $tb=mysql_real_escape_string($_POST['tb']); }

if(empty($_POST['anemia'])) {
$anemia=$none;  }
else
{ $anemia=mysql_real_escape_string($_POST['anemia']); }

if(empty($_POST['epilepsy'])) {
$epilepsy=$none; }
else
{ $epilepsy=mysql_real_escape_string($_POST['epilepsy']); }

if(empty($_POST['asthma'])) {
$asthma=$none; }
else
{ $asthma=mysql_real_escape_string($_POST['asthma']);  }

if(empty($_POST['kidney'])) {
$kidney=$none;  }
else
{ $kidney=mysql_real_escape_string($_POST['kidney']); }

if(empty($_POST['endocrine'])) {
$endocrine=$none; }
else
{ $endocrine=mysql_real_escape_string($_POST['endocrine']); }

if(empty($_POST['bleeding'])) {
$bleeding=$none; }
else
{ $bleeding=mysql_real_escape_string($_POST['bleeding']); }

if(empty($_POST['liver'])) {
$liver=$none;  }
else
{ $liver=mysql_real_escape_string($_POST['liver']); }

if(empty($_POST['nervous'])) {
$nervous=$none; }
else
{ $nervous=mysql_real_escape_string($_POST['nervous']); }

if(empty($_POST['hiv_aids'])) {
$hiv_aids=$none; }
else
{ $hiv_aids=mysql_real_escape_string($_POST['hiv_aids']); }

$sql="UPDATE patient_list SET 
physician_name='".$psy_name."',
date_of_last_visit='".$date_of_last_visit."',
illness_operation='".$illop."',
describe_ill_op='".$illopreason."',
pregnant='".$pregnant."',
nursing='".$nursing."',
control_pills='".$pills."',
diabetes='".$diabetes."',
hypertension='".$hyper."',
allergy_to_FD='".$allergy_to_fd."',
fainting='".$fainting."',
tuberculosis='".$tb."',
anemia='".$anemia."',
epilepsy='".$epilepsy."',
asthma='".$asthma."',
kidney_involvement='".$kidney."',
endocrine='".$endocrine."',
prolonged_bleeding='".$bleeding."',
liver_involvement='".$liver."',
nervous_involvement='".$nervous."',
hiv_aids='".$hiv_aids."'

WHERE id=".$id."
";

$res=mysql_query($sql);
}



?>