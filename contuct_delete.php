<?php
session_start();
$db_conect = mysqli_connect("localhost","root","","php_formvalidation");
$id = $_GET['id'];
$delete_query = "DELETE FROM php_contact WHERE id = $id";
$delete = mysqli_query($db_conect,$delete_query);
if ($delete) {
  $_SESSION['delete'] = "Delete Successfully!";
header('location: contuct_mesege.php');
}else{
  echo "Somthing Are Missing!";
}
?>
