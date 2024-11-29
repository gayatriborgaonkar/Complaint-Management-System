<?php 
session_start();
session_destroy();
echo "<script>";
echo 'window.location.href="admin login.php";';
echo "</script>";
?>