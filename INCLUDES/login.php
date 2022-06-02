<?php
require_once "db.php";
session_start();
global $conn;
if(isset($_POST['login'])){
    $phone = $_POST['phone'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM `users` WHERE phone='$phone' AND pass='$password'";
    $result = $conn->query($sql);

    if($result -> num_rows > 0 ){
        $_SESSION['user'] = $phone;
        $sql = "SELECT `status` FROM `users` WHERE phone='$phone'";
        $res = $conn->query($sql);
        if($res){
            while($stat = mysqli_fetch_assoc($res)){
                $state = $stat['status'];
                if($state == 1){
                    header("Location: ../user_profile.php");
                }else if($state == 2){
                    header("Location: ../admin-acc.php");
                }else{
                    header("Location: ../login.php?err=Your account is blocked");
                }
            }
        }else{
            echo "error";
        }
    }else{
        header("Location: ../login.php?err=username or password is incorrect");
    }
}

?>