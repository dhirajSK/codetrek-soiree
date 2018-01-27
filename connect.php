<?php
$servername = "localhost";
$name = "root";
$password = "";
$db_name = "Soiree_db";

// Create connection
$conn = new mysqli($servername, $name, $password,$db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

