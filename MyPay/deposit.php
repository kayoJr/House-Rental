<?php
require_once 'connect.php';
session_start();

if(isset($_POST['submit'])){
    $amount = $_POST['amount'];
    $phone = $_SESSION['user'];
    $sql = "SELECT * FROM `users` where `phone` = '$phone'";
    $rs = mysqli_query($conn, $sql);
    if(mysqli_num_rows($rs) > 0){
        while($row = mysqli_fetch_assoc($rs)){
            $prev_amount = $row['deposit'];
            $new_amt = $prev_amount + $amount;
            //echo $new_amt;
            $sql2 = "UPDATE `users` set `deposit` = '$new_amt' where `phone` = '$phone'";
            $res = mysqli_query($conn, $sql2);
            if($res){
                header("Location:home.php?msg=Deposited Successfully");
            }else{
                header("Location:home.php?err=Depositing Failed");
            }
        }
    }
}

?>