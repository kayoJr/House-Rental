<?php
    require 'db.php';

    if(isset($_POST['passbtn'])){
        $phone = $_POST['phone'];
        $pass = md5($_POST['pass']);
        $conf_pass = md5($_POST['conf-pass']);
        if($pass !== $conf_pass){
            header("Location: ../changepass.php?msg=Passwords Doesn't Match");
        }else{
            $sql = "SELECT * FROM `users` WHERE `phone` = '$phone'";
            $res = $conn-> query($sql);
            if($res){
                $sql = "UPDATE `users` SET `pass` = '$pass' WHERE `phone` = '$phone'";
                $rs = $conn->query($sql);
                if($rs){
                    header("Location: ../login.php?msg=Password Updated");
                }else{
                    header("Location: ../changepass.php?msg=Unable To Update Password");
                }
            }
        }
    }

?>