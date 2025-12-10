<?php

require_once "connect.php";
$table = "students";

$getData =  "SELECT student_id,student_name,student_email,student_phone,student_reg_date FROM $table";
$result = $conn->query($getData);
print_r($result);
$data = [];
if($result->num_rows > 0) {
   
    while($row = $result->fetch_assoc()){       
        $data []= $row;
    }

} else {
    echo "No records found.";
}




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table</title>
</head>
<body>
    <h3>Student data</h3>

        <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Reg Date</th>
            <th>Action</th>
        </tr>

        <?php foreach($data as $row): ?>
        <tr>
            <td><?php echo $row['student_id']; ?></td>
            <td><?php echo $row['student_name']; ?></td>
            <td><?php echo $row['student_email']; ?></td>
            <td><?php echo $row['student_phone']; ?></td>
            <td><?php echo $row['student_reg_date']; ?></td>
            <td>

            <!-- 
                <form action="" method="get">
                    <button type="submit" name="delete" value="<?php echo $row['student_id']; ?>">Delete</button>
                </form>  
            -->
                <a href="crud.php?edit=<?php echo $row['student_id']; ?>">edit</a>
                <a href="delete.php?delete=<?php echo $row['student_id']; ?>">delete</a>
            </td>
        </tr>
        <?php endforeach; ?>

    
</body>
</html>
