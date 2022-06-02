<?php
$server = "localhost";
$user = "root";
$password = "";
$db = "myPay";

$conn = mysqli_connect($server, $user, $password, $db);

if(!$conn){
    echo "db error";
}

?>