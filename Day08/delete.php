<?php
require_once 'connect.php';
$table = "students";
if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    $deleteSql = "DELETE FROM $table WHERE student_id = $id";
    if($conn->query($deleteSql)){
        echo "Record deleted successfully.";
        header("Location: table.php");
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}
