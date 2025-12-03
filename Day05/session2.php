<?php
echo "session 2";
echo $a;
session_start();

$name = $_SESSION['name'];
echo $name;