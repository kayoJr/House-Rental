<?php
    require "db.php";
    $id = $_GET['id'];

    $sql = "DELETE FROM `users` WHERE `id` = $id";
    $res = $conn->query($sql);
    if($res){
        header("Location: ../users.php?msg=user deleted");
    }else{
        header("Location: ../users.php?msg=unable to delete user");
    }

?>