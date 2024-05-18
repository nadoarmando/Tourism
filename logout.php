<?php
session_start();
session_destroy();
session_start();
$_SESSION['email']="dd@gmail.com";
$_SESSION['password']="55";
header("location:home.php");
?>