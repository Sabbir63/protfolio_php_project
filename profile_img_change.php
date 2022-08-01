<?php
session_start();
$db_conect = mysqli_connect("localhost","root","","php_formvalidation");
// if (!$_FILES['up_image']['name']) {
//   $_SESSION['img_blank_session'] = "Please Input Fild!";
// }
$image_name = $_FILES['up_image']['name'];
$after_explode = explode(".",$image_name);
$extention = end($after_explode);
$extention_accepted = ['jpg','JPG','png','PNG','jpeg','JPEG'];
if (!in_array($extention,$extention_accepted)) {
  $_SESSION['other_file_sesion'] = "This File Formate Is Not Supported!";
  header('location: change_password.php');
}

if ($_FILES['up_image']['size'] > 500000) {
  $_SESSION['up_image_sesion'] = "This File Is To largesst 5MB!";
  header('location: change_password.php');
  die();
}

$email =  $_SESSION['login_email'];
$id_query = "SELECT id, user_photo FROM php_user WHERE email = '$email'";
$user_id = mysqli_fetch_assoc(mysqli_query($db_conect,$id_query))['id'];
$user_photo = mysqli_fetch_assoc(mysqli_query($db_conect,$id_query))['user_photo'];
if($user_photo != "avatar.png"){
  unlink("picture/profile_img/".$user_photo);
}

$image_new_name = $user_id.".".$extention;
$old_location = $_FILES['up_image']['tmp_name'];
$new_location = "picture/profile_img/".$image_new_name;
move_uploaded_file($old_location,$new_location);

$email =  $_SESSION['login_email'];
$update_q = "UPDATE php_user SET user_photo = '$image_new_name' WHERE email = '$email'";
$profile_image = mysqli_query($db_conect,$update_q);
header('location: change_password.php')
?>
