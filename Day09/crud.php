<?php
require_once 'connect.php';
$table = "students";


  if(isset($_POST['submit'])){
      $name = $_POST['name'];
      $email = $_POST['email'];
      $password = $_POST['password'];
      $phone = $_POST['phone'];

      echo "Name: " . $name . "<br>";
      echo "Email: " . $email . "<br>";
      echo "Password: " . $password . "<br>";
      echo "Phone: " . $phone . "<br>";

      
      if($name && $email && $password && $phone){
        $enc=  password_hash($password,PASSWORD_DEFAULT);

        $insertSql= "INSERT INTO $table (student_name,student_email,student_password,student_phone) 
        VALUES 
        ('$name', '$email' , '$enc' , $phone)";

        if($conn->query($insertSql)){
            echo "Data has been inserted";
        } else {
            echo "Something went wrong: " . $conn->error;
        }

      }
      
  }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.8/css/bootstrap.min.css"
        integrity="sha512-2bBQCjcnw658Lho4nlXJcc6WkV/UxpE/sAokbXPxQNGqmNdQrWqtw26Ns9kFF/yG792pKR1Sx8/Y1Lf1XN4GKA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="container mt-5 bg-light p-4">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <form method="POST" action="">
                    <div class="mb-3">
                        <label for="exampleInputName1" class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" id="exampleInputName1" aria-describedby="nameHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPhone1" class="form-label">Phone</label>
                        <input type="number" name="phone" class="form-control" id="exampleInputPhone1">
                    </div>

                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>


        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.8/js/bootstrap.min.js"
        integrity="sha512-nKXmKvJyiGQy343jatQlzDprflyB5c+tKCzGP3Uq67v+lmzfnZUi/ZT+fc6ITZfSC5HhaBKUIvr/nTLCV+7F+Q=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>

</html>