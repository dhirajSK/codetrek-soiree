<?php
include('header.php');
include('connect.php');
session_start();

$u_name= $_POST['username'];
$u_pass= $_POST['pass'];

function printErrorMsg(){
   echo "<h1>Incorrect credentials</h1>";
   echo "<h1><a href='login.php'>login</a></h1>";
   die();
}

if(!isset( $_POST['username'])||!isset( $_POST['pass'])){
	printErrorMsg();
}


// var_dump($_SESSION);
$_SESSION["is_user_logged_in"] = false;


$sql = "SELECT * FROM users WHERE user_name='$u_name'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
     
    if($row['user_name']==$u_name && $row['user_pass'] == $u_pass){
	$_SESSION["is_user_logged_in"] = true;
	$_SESSION['usern'] = $u_name;
        }
  }
} 

if(!$_SESSION["is_user_logged_in"]){
   printErrorMsg();
}
header("Location:/admin.php");