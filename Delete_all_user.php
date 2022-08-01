<?php
session_start();
$db_conect = mysqli_connect("localhost","root","","php_formvalidation");
$id = $_GET['id'];
$delete_all_query = "DELETE FROM php_user";
$delete_all = mysqli_query($db_conect,$delete_all_query);
if ($delete_all) {
  $_SESSION['delete_all_user'] = "Delete All User Successfully!";
header('location: userfrom.php');
}else{
  echo "Somthing Are Missing!";
}
?>
