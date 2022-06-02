<?php
require "db.php";
$id = $_GET['id'];

$sql = "UPDATE `house` SET `status` = 1 WHERE `id` = $id";
$res = $conn->query($sql);
if($res){
    header("Location: ../admin-properties.php?msg=Approved");
}else{
    header("Location: ../admin-properties.php>err=failed to approve");
}

?>