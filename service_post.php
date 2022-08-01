<?php
session_start();
$service_icon = $_POST['service_icon'];
$service_title = $_POST['service_title'];
$service_descript = $_POST['service_descript'];

$db_conect = mysqli_connect("localhost","root","","php_formvalidation");
$description_query = "INSERT INTO php_service(service_icon,service_title,service_descript) VALUES('$service_icon','$service_title','$service_descript')";
// echo $description_query;
// die();
$db_insert_data = mysqli_query($db_conect,$description_query);
header('location: service.php');
?>
