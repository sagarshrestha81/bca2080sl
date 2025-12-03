<?php

// $host = "127.0.0.1";
$host = "localhost";
$user = "root";
$password = "";
// $conn = mysqli_connect($host, $user, $password);
$conn = new mysqli($host, $user, $password);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}else{
    echo "Connected successfully";
}
