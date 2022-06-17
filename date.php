<?php
require_once 'INCLUDES/db.php';
$sql = "SELECT * FROM `house` WHERE `plan` = 2";
$result = $conn->query($sql);
if($result){
    while($row = $result ->fetch_assoc()){
        $date = $row['date'];
        $date1 = new DateTime($date);
        $date2 = new DateTime(date("Y-m-d"));
        $interval = $date1->diff($date2);
        // echo "difference " . $interval->days . " days ";
        if(($interval->days) >= 31){
            $sql = "UPDATE `house` SET `plan` = 1 WHERE `date` = '$date'";
            $rs = $conn->query($sql);
        }
    }
}
?>