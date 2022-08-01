<?php
  session_start();
  $db_conect = mysqli_connect("localhost","root","","php_formvalidation");
  $banner_img = $_FILES['banner_img']['name'];
  $explode = explode(".",$banner_img);
  $extention = end($explode);
  $image_new_name =$_SESSION['login_name']."-".rand(1000,99999).".".$extention;

  $image_location = $_FILES['banner_img']['tmp_name'];
  $image_new_locarion = "picture/banner_img/".$image_new_name;
  move_uploaded_file($image_location,$image_new_locarion);
  $banner_insert_query = "INSERT INTO banner (banner_img) VALUES('$image_new_name')";
  mysqli_query($db_conect,$banner_insert_query);
  header('location: site_owner_img.php');
 ?>
