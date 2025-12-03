<?php 


// $date  = date("Y-M-d    h:i:s A");
$date  = time();
echo $date;


if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $file_name = $_FILES['fileupload']['name'];
    $file_tmp = $_FILES['fileupload']['tmp_name'];
    $folder = "uploads/";
    if(!is_dir($folder)){
        mkdir($folder);
    }
    move_uploaded_file($file_tmp,$folder."/".$file_name);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method ="post" enctype="multipart/form-data">
        Name: <input type="text" name="name"><br><br>
        Email: <input type="email" name="email"><br><br>
        Password: <input type="password" name="password"><br><br>
        Image:  <input type="file" name="fileupload"><br><br>
        <button type="submit" name="submit">Submit</button>
    </form>
    <script></script>
</body>
</html>