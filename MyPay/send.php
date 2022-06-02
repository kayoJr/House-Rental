<?php
require 'connect.php';
session_start();

if(isset($_POST['submit'])){
    $rec_phone = $_POST['phone'];
    $amount = $_POST['amount'];
    $phone = $_SESSION['user'];

    $find = "SELECT * FROM `users` where `phone` = '$rec_phone'";
    $rs = mysqli_query($conn, $find);
    if(mysqli_num_rows($rs) > 0){
        while($row = mysqli_fetch_assoc($rs)){
            $reciever = $row['phone'];
            $rec_prev_amt = $row['deposit'];
            if($reciever == $phone){
                header("Location:home.php?msg=You can't send money to yourself");
            }else{
                $sql = "SELECT * FROM `users` where `phone` = '$phone'";
                $res = mysqli_query($conn, $sql);
                if(mysqli_num_rows($res) > 0){
                    while($row2=mysqli_fetch_assoc($res)){
                        $sender_amount = $row2['deposit'];
                        if($sender_amount < $amount){
                            header("Location:home.php?msg=You don't have enough balance");
                        }else{
                            $new_rec_amt = $rec_prev_amt + $amount;
                            $new_send_amt = $sender_amount - $amount;
                            
                            $upd_rec = "UPDATE `users` set `deposit` = '$new_rec_amt' where `phone` = '$reciever'";
                            $result = mysqli_query($conn, $upd_rec);
                            if($result){
                                $upd_send = "UPDATE `users` set `deposit` = '$new_send_amt' where `phone` = '$phone'";
                                $result2 = mysqli_query($conn, $upd_send);
                                if($result2){
                                    header("Location:../post.php?msg=Transaction successfully done. the admin will approve your request");
                                }
                            }else{
                                echo 'error';
                            }
                        }
                    }
                }
            }
        }
    }else{
        header("Location:home.php?msg=Unknown user! Please check the phone number");
    }


}


?>