<?php
session_start();
$db_conect = mysqli_connect("localhost","root","","php_formvalidation");
$id = $_GET['id'];
$what_to_do = $_GET['what_to_do'];
$update_query = " UPDATE php_service SET status = '$what_to_do' WHERE id = $id";
mysqli_query($db_conect,$update_query);
header('location: service.php');
?>
