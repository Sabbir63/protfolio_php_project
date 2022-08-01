<?php
$db_conect = mysqli_connect("localhost","root","","php_formvalidation");
$immage_name = $_GET['PhOtO'];
unlink("picture/profile_img/".$immage_name);
$update_query_for_image = "UPDATE php_user SET user_photo = 'avatar.png' WHERE user_photo = '$immage_name'";
mysqli_query($db_conect,$update_query_for_image);
header('location: change_password.php');
?>
