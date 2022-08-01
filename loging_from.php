<?php
session_start();
$email = $_POST['email'];
$password = md5($_POST['password']);
// echo $password;
// die();
$email_cheking = "SELECT COUNT(*) AS Total FROM php_user WHERE email = '$email' AND password = '$password'";
  $db_conect = mysqli_connect("localhost","root","","php_formvalidation");
  $bd_con = mysqli_query($db_conect,$email_cheking);
  $data_for_email = mysqli_fetch_assoc($bd_con);
  if ($data_for_email['Total'] == 1) {
    $_SESSION['login_status'] = "Yes";
     header('location: dashboard.php');
     $_SESSION['login_email'] = $email;
     $name_login_query = "SELECT name, user_photo, role FROM php_user WHERE email = '$email'";
     $name_db = mysqli_query($db_conect,$name_login_query);
     $name_after_assoc = mysqli_fetch_assoc($name_db);
      $_SESSION['login_name'] = $name_after_assoc['name'];
      $_SESSION['login_photo'] = $name_after_assoc['user_photo'];
      $_SESSION['login_role'] = $name_after_assoc['role'];
  }else {
    $_SESSION['login_error'] = "Your Password Or Email Address Are Wronng!";
    header('location: login.php');
  }

?>
