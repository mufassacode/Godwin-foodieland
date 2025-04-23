<?php

$host = "localhost";
$users = "root";      
$password = "";      
$database = "mufassa_db";


$conn = new mysqli($host, $users, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>