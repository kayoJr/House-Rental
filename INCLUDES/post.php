<?php
require_once 'db.php';
@session_start();
// if((!isset($_SESSION["uname"]))){
//     header("Location: ../login.php?msg=Login First");
//     exit(); 
// }else{
    if(isset($_POST['submit'])){
        $id = uniqid();
        $title = $_POST['title'];
        $type = $_POST['type'];
        $location = $_POST['location'];
        $price = $_POST['price'];
        $negotiable = $_POST['negotiable'];
        $desc = $_POST['desc'];
        $plan = $_POST['plan'];
        $room = $_POST['room'];
        $area = $_POST['area'];
        $photo = $_FILES['photo']['name'];
        $temp = $_FILES['photo']['tmp_name'];
        $target = "../files/".basename($photo);
        $owner = $_SESSION['user'];
        $status = 0;
        if($plan == 1){
            $plan_price = 80;
        }else if($plan == 2){
            $plan_price = 150;
        }
        $sql = "INSERT INTO `house` (`id`, `title`, `type`, `location`, `price`, `negotiable`, `room`, `area`, `photo`, `description`, `plan`, `status`, `owner`) 
        VALUES ('$id', '$title', '$type', '$location', $price, $negotiable, $room, $area, '$photo', '$desc', $plan, $status, $owner)";

        $rs = mysqli_query($conn, $sql);
        if($rs){
            if(move_uploaded_file($temp, $target)){
                // header("Location: upload_resource.php?msg=Uploaded Successfully");
                header("Location: ../MyPay/index.php?id=$id");
            }else{
                header("Location: ../post.php?msg=Uploaded Unsuccessfull");
                echo "failed";
            }
        }else{
            echo mysqli_error($conn);
        }
    }else{
        echo "not clicked";
    }
// }
?>