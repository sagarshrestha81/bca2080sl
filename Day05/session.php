<?php
// echo "session 1";
//  $a= 10;
// echo $a;

// session_start();
// $_SESSION['name']= "John Doe";

// $name = $_SESSION['name'];
// echo $name;
echo "cookie 1";
setcookie("user","Stha",time()+3600*7);
echo $_COOKIE['user'];