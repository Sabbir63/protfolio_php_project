<?php
session_start();
  if(!$_POST['one']){
    $_SESSION['error']['one_error'] = "Number One Is Missing";
    header('location: from.php');
    die();
  }
  if(!$_POST['two']){
    $_SESSION['error']['two_error'] = "Number Two Is Missing";
    header('location: from.php');
    die();
  }


  if (isset($_POST["Jog"])) {
    $_SESSION['result'] = $_POST['one'] + $_POST['two'];
  }else if (isset($_POST["Biog"])) {
     $_SESSION['result'] = $_POST['one'] - $_POST['two'];
  }else if (isset($_POST["gun"])) {
    $_SESSION['result'] = $_POST['one'] * $_POST['two'];
  }else if (isset($_POST["vag"])) {
       $_SESSION['result'] = $_POST['one'] / $_POST['two'];
  }else if (isset($_POST["vagses"])) {
     $_SESSION['result'] = $_POST['one'] % $_POST['two'];
  }
header('location: from.php');
?>
