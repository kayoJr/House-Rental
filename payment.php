<?php
    require './INCLUDES/db.php';
   // require './MyPay/connect.php';

    $id = $_GET['id'];
    
    $sql = "SELECT * FROM `house` WHERE `id` = '$id'";
    $rs = $conn->query($sql);
    if($rs){
        while($row = $rs -> fetch_assoc()){
            $owner = $row['owner'];
            $plan = $row['plan'];
            $price = 0;
            if($plan == 1){
                $price = 20;
            }else{
                $price = 50;
            }
            include_once ("./MyPay/send.php");
        }
    }else{
        echo mysqli_error($conn);
    }
?>