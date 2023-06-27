<?php
//$conn = mysqli_connect("localhost", "root", "", "gndecdbadmin");
//$conn = mysqli_connect("localhost", "gndecdbadminuser", "gndecdbAdmin123#", "gndecdbadmin");
$conn = mysqli_connect("localhost", "deccanc_deccanc", "deccandb@123", "deccanc_gndecb");

session_start();$user_check = $_SESSION['login_user'];
?>