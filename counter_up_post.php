<?php
session_start();

$counter_up_icon = $_POST['counter_up_icon'];
$counter_up_number = $_POST['counter_up_number'];
$counterup_up_title = $_POST['counter_up_title'];
$db_conect = mysqli_connect("localhost","root","","php_formvalidation");
$counter_up_query = "INSERT INTO php_counter_up_section (counter_up_icon,counter_up_number,counterup_up_title) VALUES ('$counter_up_icon','$counter_up_number','$counterup_up_title')";
$data_from_db = mysqli_query($db_conect,$counter_up_query);
header('location: counter_up.php');
?>
