<?php
session_start();
$db_conect = mysqli_connect("localhost","root","","php_formvalidation");
$email =  $_SESSION['login_email'];
$en_pass =  md5($_POST['old_password']);
$sel_query = "SELECT COUNT(*) AS tottal FROM php_user WHERE email = '$email' AND password = '$en_pass'";
$after_accoc = mysqli_fetch_assoc(mysqli_query($db_conect ,$sel_query));
if($after_accoc['tottal'] == 1){
if ($_POST['new_password'] == $_POST['con_password']) {
$new_pass = md5($_POST['new_password']);
$update_password = "UPDATE php_user SET password = '$new_pass' WHERE email = '$email'";
mysqli_query($db_conect,$update_password);
header('location: change_password.php');
}else {
  echo "Confirm Password Dosen't Match!";
}
}else {
  echo "Old Password Dosen't Matched!";
}
?>
