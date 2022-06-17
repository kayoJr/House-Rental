<?php
$server = "localhost";
$user = "root";
$password = "";
$db = "myPay";

$con = mysqli_connect($server, $user, $password, $db);

if(!$con){
    echo "db error";
}

?>