<?php
    require "db.php";
    if(isset($_GET['submit'])){
        $type = $_GET['type'];
        $location = $_GET['location'];
        $min = $_GET['min'];
        $max = $_GET['max'];

        $sql = "SELECT * FROM `house` 
        WHERE `type` = '$type' AND `location` = '$location' 
        OR `price` BETWEEN $min AND $max";

        $res = $conn->query($sql);
        if($res){
            echo "correct";
        }else{
            echo mysqli_error($conn);
        }
    }

?>