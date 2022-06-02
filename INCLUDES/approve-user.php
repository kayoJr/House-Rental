<?php
    require "db.php";
    $id = $_GET['id'];

    $sql = "UPDATE `users` SET `status` = 1 WHERE `id` = $id";
    $res = $conn->query($sql);
    if($res){
        header("Location: ../users.php?msg=user unblocked");
    }else{
        header("Location: ../users.php?msg=unable to unblock user");
    }

?>