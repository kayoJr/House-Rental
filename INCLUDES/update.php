<?php
/* Updating the user profile. */
    include "db.php";
    session_start();
    if(isset($_POST['update'])){
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $pass = md5($_POST['pass']);
        $email = $_POST['email'];
        $whatsapp = $_POST['whatsapp'];
        $telegram = $_POST['telegram'];
        $user = $_SESSION['user'];

        $sql2 = "SELECT * FROM `users` where `phone` = $user";
        $rs = $conn->query($sql2);
        if($rs){
            while($row = mysqli_fetch_assoc($rs)){
                $id = $row['id'];
            
        $sql = "UPDATE `users` SET `fname`='$fname',
        `lname`='$lname',`pass`='$pass',
        `email`='$email',`whatsapp`='$whatsapp',
        `telegram`='$telegram' WHERE `id` = $id ";
        $res = $conn->query($sql);
        
        if($res){
            header("Location: ../user_profile.php?msg=Updated successfully");
        }else{
            header("Location: ../user_profile.php?err=updating failed");
        }
    }
}
    }
?>