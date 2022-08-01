<?php
  session_start();
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$password = $_POST['password'];
$conpassword = $_POST['conpassword'];
$gender = $_POST['gender'];
if($password == $conpassword){
  $email_cheking = "SELECT COUNT(*) AS Total FROM php_user WHERE email = '$email'";
  $db_conect = mysqli_connect("localhost","root","","php_formvalidation");
  $bd_con = mysqli_query($db_conect,$email_cheking);
  $data_for_email = mysqli_fetch_assoc($bd_con);
  if ($data_for_email['Total'] == 0) {
    $incpass = md5($password);
    $insert_query = "INSERT INTO php_user (name,email,phone,password,gender) VALUE('$name','$email','$phone','$incpass','$gender')";
    mysqli_query($db_conect, $insert_query);
    header('location: userfrom.php');
  }else {
    header('location: registration.php');
  $_SESSION['duplicate_email_error'] = "This Email Address Already been Used!";
  }
}else{
  echo "Dosen't match Password!";
}
?>
