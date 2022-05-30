<?php
require_once "db.php";
session_start();
global $conn;

if(isset($_POST['signup'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $conf_pass = $_POST['conf-pass'];

    if($pass !== $conf_pass){
        header("Location: ../signup.php?msg=Passwords Doesn't Match");
    }else{
        $sql = "SELECT `phone` FROM `users`";
        $res = $conn-> query($sql);
        if($res){
            while($row = mysqli_fetch_assoc($res)){
                $existing_phone = $row['phone'];
                if($phone == $existing_phone){
                    header("Location: ../signup.php?msg=Phone Number exists. please login instead");
                }else{
                    $sql = "INSERT INTO `users`(`fname`, `lname`, `phone`, `email`, `pass`) 
                    VALUES ('$fname','$lname','$phone','$email','$pass')";
                    $res = $conn->query($sql);
                    if($res){
                        header("Location: ../login.php?msg=You Can Now Login in");
                    }else{
                        header("Location: ../signup.php?msg=Error creating account. Please Try Again later");
                    }
                }
            }
        }
    }
}

?>