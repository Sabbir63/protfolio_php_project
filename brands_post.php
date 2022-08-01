<?php
session_start();

$db_conect = mysqli_connect("localhost","root","","php_formvalidation");
$brand_img = $_FILES['brand_img']['name'];
$img_explode = explode(".",$brand_img);
$extention = end($img_explode);

$new_img_name = time()."-".rand(100,999).".".$extention;

$old_location = $_FILES['brand_img']['tmp_name'];
$new_location = "picture/brands_img/".$new_img_name;
move_uploaded_file($old_location,$new_location);
$counter_up_query = "INSERT INTO brands (brands_img) VALUES ('$new_img_name')";
mysqli_query($db_conect,$counter_up_query);
header('location: brands.php');

?>
