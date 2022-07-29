<?php

$name = "localhost";
$namebd = "root";
$pass = "";

$db_name = "actas";


$conn = mysqli_connect($name, $namebd, $pass, $db_name);

if(!$conn){
    echo "Error";
}