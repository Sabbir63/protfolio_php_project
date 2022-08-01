<?php
session_start();
$db_conect = mysqli_connect("localhost","root","","php_formvalidation");

$protfolio_title = $_POST['protfolio_title'];
$protfolio_heding = $_POST['protfolio_heding'];
$protfolio_decription = $_POST['protfolio_decription'];
$img_thumble = $_FILES['img_thumble'];
$user_mail = $_SESSION['login_email'];
$img_feature = $_FILES['img_feature'];
$feture_description = $_POST['feture_description'];
// img_thumble Image Upload
$thum_img_name = $_FILES['img_thumble']['name'];
$explode = explode(".",$thum_img_name);
$extention = end($explode);
$image_new_name = time()."-".rand(10000,999999). "." .$extention;
// echo $img_thumble;
$image_location = $_FILES['img_thumble']['tmp_name'];
$image_new_location = "picture/protfolio_img/". $image_new_name;
move_uploaded_file($image_location,$image_new_location);
// img_feature Image upload
$feture_img_name = $_FILES['img_feature']['name'];
$feture_explode = explode(".",$feture_img_name);
$feture_extention = end($feture_explode);
$feture_img_new_name = time(). "-" .rand(10000,999999). "." .$feture_extention;
$feture_img_location = $_FILES['img_feature']['tmp_name'];
$feture_new_img_location = "picture/feture_img/". $feture_img_new_name;
move_uploaded_file($feture_img_location,$feture_new_img_location);
$profile_insert = "INSERT INTO php_protfoliio (user_mail,protfolio_title,protfolio_heding,protfolio_decription,img_thumble,img_feature,feture_description) VALUES('$user_mail','$protfolio_title','$protfolio_heding','$protfolio_decription','$image_new_name','$feture_img_new_name','$feture_description')";
 mysqli_query($db_conect,$profile_insert);
 header('location: protfolio.php');
// // print_r($f);
 ?>
