<?php
session_start();
require_once 'includs/nav.php';

unset($_SESSION['login_status']);
unset($_SESSION['login_email']);
header('location: login.php');
?>
