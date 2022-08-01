<?php
session_start();
$id = $_POST['id'];
$name = $_POST['name'];
$old_name = $_POST['old_name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$gender = $_POST['gender'];

$db_conect = mysqli_connect("localhost","root","","php_formvalidation");
$update_q="UPDATE php_user SET name='$name',email='$email',phone='$phone',gender='$gender' WHERE  id=$id";
$Update = mysqli_query($db_conect,$update_q);
if ($Update) {
  $_SESSION['update'] = "$old_name Update Successfull $name";
  header('location: userfrom.php');
}else {
  echo "Somthing Are Missing";
}
?>
