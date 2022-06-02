<?php
require_once 'connect.php';

@session_start();
if(isset($_POST['submit'])){
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $price = $_POST['plan'];
    $query="select * from users where phone='".$phone."' and password='".$password."'";
    $rs = mysqli_query($conn, $query);
    if(mysqli_fetch_assoc($rs)){
        $_SESSION['user'] = $phone;
        header("Location: home.php?price=$price");
    }else{
        header("Location: index.php?msg=Username or password is incorrect");
    }
}
?>