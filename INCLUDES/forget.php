<?php
session_start();
require 'db.php';

if(isset($_POST['secretbtn'])){
    $phone = $_POST['phone'];
    $secret = $_POST['secret'];
    $sql = "SELECT * FROM `users` WHERE `phone` = '$phone'";
    $rs = $conn->query($sql);
    if($rs){
        while($row = $rs->fetch_assoc()){
            if($secret == $row['secret']){
                header("Location: ../changepass.php?");
            }else{
                header("Location: ../forget.php?msg=Incorrect Recovery Code");
            }
        }
    }
}


?>