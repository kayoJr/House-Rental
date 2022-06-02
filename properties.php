<?php
    require './INCLUDES/db.php';
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="theme-color" content="#45B4E8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;700&display=swap"
        rel="stylesheet">
    <link rel="shortcut icon" href="./IMAGE/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="./CSS/main.css">
    <link rel="stylesheet" href="./CSS/panel.css">
    <title>User Panel</title>
</head>

<body>
    <div class="panel">
        <aside>
            <div class="logo">
                <img src="./IMAGE/logo2 1.png" alt="logo">
            </div>
            <ul>
                <li><a href="./index.php">Home</a></li>
                <li><a href="./user_profile.php">My Profile</a></li>
                <li class="active"><a href="./properties.php">Properties</a></li>
                <li><a href="./post-from-panel.php">Post</a></li>
                <li><a href="./INCLUDES/logout.php">Logout</a></li>
            </ul>
        </aside>
        <main>
            <div class="top">
                <h1>Properties</h1>
            </div>
            <div class="feedback">
            <p class="success">   
                <?php 
                $msg = @$_REQUEST['msg'];
                echo $msg;
                ?>
                </p> 
            <p class="error">   
                <?php 
                $err = @$_REQUEST['err'];
                echo $err;
                ?>
                </p> 
            </div>
            <?php
                $owner = $_SESSION['user'];
                $sql = "SELECT * FROM `house` WHERE `owner` = $owner";
                $rs = $conn->query($sql);
                echo " <table class='table'>
                <thead>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Location</th>
                    <th>Status</th>
                    <th>Plan</th>
                    <th>Action</th>
                </thead>";
                if($rs->num_rows > 0){
                    while($row = $rs->fetch_assoc()){
                        $id = $row['id'];
                        $plan = $row['plan'];
                        if($plan == 1){
                            $plan_type = 'Basic';
                        }else{
                            $plan_type = 'Premium';
                        }
                        if($row['status'] == 1){
                            $status = 'Uploaded';
                        }else{
                            $status = 'Pending';
                        }
                        echo "
                        <tbody>
                            <tr>
                                <td data-label='name'>{$row['title']}</td>
                                <td data-label='Price'>{$row['price']}</td>
                                <td data-label='Location'>{$row['location']}</td>
                                <td data-label='Status'>$status</td>
                                <td data-label='Plan'>$plan_type</td>
                                <td data-label='Action'><a href='./INCLUDES/delete.php?id=$id'><img src='./IMAGE/fluent_delete-20-filled.png' alt=''></a></td>
                            </tr>
                        </tbody>
                        ";
                    }
                }
                echo "</table>";
            ?>

        </main>
    </div>
</body>

</html>