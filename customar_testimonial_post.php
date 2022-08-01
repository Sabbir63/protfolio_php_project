<?php
  session_start();
  // print_r($_SESSION['login_photo'])
  $test_description = $_POST['test_description'];
  $test_name = $_POST['test_name'];
  $test_title = $_POST['test_title'];
  $db_conect = mysqli_connect("localhost","root","","php_formvalidation");
  $testimonial_insert = "INSERT INTO customar_testimonial (test_description,test_title) VALUES('$test_description','$test_title')";
  mysqli_query($db_conect,$testimonial_insert);
  header('location: customar_testimonial.php');
 ?>
