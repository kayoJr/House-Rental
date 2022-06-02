<?php
require "db.php";
$id = $_GET['id'];

$sql = "DELETE FROM `house` WHERE `id` = $id";
$res = $conn->query($sql);
if($res){
    header("Location: ../admin-properties.php?msg=Deleted");
}else{
    header("Location: ../admin-properties.php?err=Failed to Delete");
}

?>