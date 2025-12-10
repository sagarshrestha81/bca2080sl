<?php

require_once 'connect.php';

// Create database
$DB='aadim_db';
$sql ="CREATE DATABASE IF NOT EXISTS $DB";

if($conn->query($sql)){
    echo "Database created successfully";
}

$table_sql = "CREATE TABLE IF NOT EXISTS $DB.students (
student_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
student_name VARCHAR(30) NOT NULL,
student_email VARCHAR(50),
student_password VARCHAR(30),
student_phone VARCHAR(15),
student_reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";
if($conn->query($table_sql)){
    echo "Table created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}
