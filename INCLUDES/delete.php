<?php
/* This is the PHP code that is executed when the delete button is clicked. It is deleting the row from
the database that has the same id as the one that was clicked. */
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