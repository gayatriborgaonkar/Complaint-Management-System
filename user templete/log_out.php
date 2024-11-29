<?php 
session_start();
session_destroy();
echo "<script>";
echo 'window.location.href="user login.php";';
echo "</script>";
?>