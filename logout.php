<?php
session_start();
unset($_SESSION['logged_in']);
session_destroy();
header('location:index.php');
?>

