<?php
session_start();
$db_conect = mysqli_connect("localhost","root","","php_formvalidation");
foreach($_POST as $seting_name => $seting_value){
$update_query = "UPDATE php_text_setting SET seting_value='$seting_value' WHERE seting_name ='$seting_name'";
mysqli_query($db_conect,$update_query);
}
header('location: setings.php');
?>
