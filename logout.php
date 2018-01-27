<?php
session_start();
session_unset();
session_destroy(); 
// var_dump($_SESSION['is_user_logged_in']);
header("Location:login.php");
?>