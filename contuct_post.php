<?php
session_start();
$guest_name = $_POST['guest_name'];
$guest_email = $_POST['guest_email'];
$guest_message = $_POST['guest_message'];
$db_conect = mysqli_connect("localhost","root","","php_formvalidation");
$contuct_inser_query = "INSERT INTO php_contact (guest_name,guest_email,guest_message) VALUE ('$guest_name','$guest_email','$guest_message')";
$sql_query = mysqli_query($db_conect,$contuct_inser_query);
$_SESSION['Contuct_from'] = "Your Submission Successfull.";
header('location: index.php#contact')
?>
