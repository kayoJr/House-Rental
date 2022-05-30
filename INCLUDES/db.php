<?php
$server = "localhost";
$username = "root";
$password = "";
$db_name = "house_rental";

$conn = mysqli_connect($server, $username, $password, $db_name);

if(!$conn){
    echo("error");
}

?>