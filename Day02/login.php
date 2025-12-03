<?php

if(isset($_REQUEST['login'])){
   
$username =  $_REQUEST['username'];
$password = $_REQUEST['password'];

echo $username,"<br>",$password;
}



?>