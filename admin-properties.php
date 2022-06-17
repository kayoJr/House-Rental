<?php
    require "./INCLUDES/db.php";
    require "./INCLUDES/auth.php";
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
    <title>Admin Panel</title>
    <title>Document</title>
</head>

<body>
    <div class="panel">
        <aside>
            <div class="logo">
                <img src="./IMAGE/logo2 1.png" alt="logo">
            </div>
            <ul>
                <li><a href="./index.php">Home</a></li>
                <li><a href="./admin-acc.php">My Profile</a></li>
                <li class="active"><a href="./admin-properties.php">Properties</a></li>
                <li><a href="./users.php">Users</a></li>
                <li><a href="./INCLUDES/logout.php">Logout</a></li>
            </ul>
        </aside>
        <main>
            <div class="top">
                <h1>Properties</h1>
            </div>
            <header class="desktop">

                <?php
                include './search_bar_admin.php';
                ?>
                </header>
            <div class="feedback">
            <p class="success" style="margin-top: 2rem;">   
                <?php 
                $msg = @$_REQUEST['msg'];
                echo $msg;
                ?>
                </p> 
            <p class="error" style="margin-top: 2rem;">   
                <?php 
                $err = @$_REQUEST['err'];
                echo $err;
                ?>
                </p> 
            </div>
            <?php
            $sql = "SELECT * FROM `house` ORDER BY `id` DESC";
            $rs = $conn->query($sql);
            echo "
            <table class='table'>
                <thead>
                    <th>Name</th>
                    <th>Type</th>
                    <th>Price</th>
                    <th>Location</th>
                    <th>Status</th>
                    <th>Action</th>
                    <th>Payment</th>
                </thead>";
            if(isset($_GET['submit'])){
                $type = $_GET['type'];
                if($type == 'pending'){
                    $sql = "SELECT * FROM `house` where status = 0 ORDER BY `id` DESC";
                    $res = $conn->query($sql);
                    if($res->num_rows > 0){
                        while($row = $res->fetch_assoc()){
                            $payment = 0;
                            if($row['payment']== 1){
                            $payment = "Done";
                            }else{
                            $payment = "Pending";
                        }
                            $status = 'Pending';
                            $id = $row['id'];
                            echo "
                            <tbody>
                            <tr>
                                <td data-label='name'>
                                <a href='detail.php?id=$id'>{$row['title']}</a>
                                </td>
                                <td data-label='type'>{$row['type']}</td>
                                <td data-label='price'>{$row['price']}</td>
                                <td data-label='location'>{$row['location']}</td>
                                <td data-label='Status'>$status</td>
                                <td data-label='Action'><a href='./INCLUDES/delete.php?id=$id'><img src='./IMAGE/fluent_delete-20-filled.png' alt=''></a>
                                <a href='./INCLUDES/approve.php?id=$id'><img src='./IMAGE/akar-icons_circle-check-fill.png' alt=''></a>
                                </td>
                                <td data-label='payment'>$payment</td>
                            </tr>
                        </tbody>
                            ";
                        }
                    }else{
                        echo "
                            <h1>No Pending Requests</h1>
                        ";
                    }
                }else if($type == 'approved'){
                    $sql = "SELECT * FROM `house` where status = 1 ORDER BY `id` DESC";
                    $res = $conn->query($sql);
                    if($res->num_rows > 0){
                        while($row = $res->fetch_assoc()){
                            $payment = 0;
                            if($row['payment']== 1){
                            $payment = "Done";
                            }else{
                            $payment = "Pending";
                            }
                            $status = 'Approved';
                            $id = $row['id'];
                            echo "
                            <tbody>
                            <tr>
                            <td data-label='name'>
                            <a href='detail.php?id=$id'>{$row['title']}</a>
                            </td>
                                <td data-label='type'>{$row['type']}</td>
                                <td data-label='price'>{$row['price']}</td>
                                <td data-label='location'>{$row['location']}</td>
                                <td data-label='Status'>$status</td>
                                <td data-label='Action'><a href='./INCLUDES/delete.php?id=$id'><img src='./IMAGE/fluent_delete-20-filled.png' alt=''></a>
                                </td>
                                <td data-label='payment'>$payment</td>
                            </tr>
                        </tbody>
                            ";
                        }
                    }else{
                        echo "
                            <h1>No Approved Requests</h1>
                        ";
                    }
                }else if($type == 'all'){
                    if($rs-> num_rows > 0){
                        while($row = $rs-> fetch_assoc()){
                            $payment = 0;
                            if($row['payment']== 1){
                            $payment = "Done";
                            }else{
                            $payment = "Pending";
                            }
                            $id = $row['id'];
                            if($row['status'] == 0){
                                $status = 'Pending';
                                echo "
                                <tbody>
                                    <tr>
                                    <td data-label='name'>
                                    <a href='detail.php?id=$id'>{$row['title']}</a>
                                    </td>
                                        <td data-label='type'>{$row['type']}</td>
                                        <td data-label='price'>{$row['price']}</td>
                                        <td data-label='location'>{$row['location']}</td>
                                        <td data-label='Status'>$status</td>
                                        <td data-label='Action'><a href='./INCLUDES/delete.php?id=$id'><img src='./IMAGE/fluent_delete-20-filled.png' alt=''></a>
                                            <a href='./INCLUDES/approve.php?id=$id'><img src='./IMAGE/akar-icons_circle-check-fill.png' alt=''></a>
                                        </td>
                                        <td data-label='payment'>$payment</td>
                                    </tr>
                                </tbody> ";
                            }else{
                                $status = 'Approved';
                                echo "
                                <tbody>
                                    <tr>
                                    <td data-label='name'>
                                    <a href='detail.php?id=$id'>{$row['title']}</a>
                                    </td>
                                        <td data-label='type'>{$row['type']}</td>
                                        <td data-label='price'>{$row['price']}</td>
                                        <td data-label='location'>{$row['location']}</td>
                                        <td data-label='Status'>$status</td>
                                        <td data-label='Action'><a href='./INCLUDES/delete.php?id=$id'><img src='./IMAGE/fluent_delete-20-filled.png' alt=''></a>
                                        </td>
                                        <td data-label='payment'>$payment</td>
                                    </tr>
                                </tbody> ";
                            }
                        }
                    }
                }
            }else{

                if($rs-> num_rows > 0){
                    while($row = $rs-> fetch_assoc()){
                        $payment = 0;
                        if($row['payment']== 1){
                            $payment = "Done";
                        }else{
                            $payment = "Pending";
                        }
                        $id = $row['id'];
                        if($row['status'] == 0){
                            $status = 'Pending';
                            echo "
                            <tbody>
                                <tr>
                                <td data-label='name'>
                                <a href='detail.php?id=$id'>{$row['title']}</a>
                                </td>
                                    <td data-label='type'>{$row['type']}</td>
                                    <td data-label='price'>{$row['price']}</td>
                                    <td data-label='location'>{$row['location']}</td>
                                    <td data-label='Status'>$status</td>
                                    <td data-label='Action'><a href='./INCLUDES/delete.php?id=$id'><img src='./IMAGE/fluent_delete-20-filled.png' alt=''></a>
                                        <a href='./INCLUDES/approve.php?id=$id'><img src='./IMAGE/akar-icons_circle-check-fill.png' alt=''></a>
                                    </td>
                                    <td data-label='payment'>$payment</td>
                                </tr>
                            </tbody> ";
                        }else{
                            $status = 'Approved';
                            echo "
                            <tbody>
                                <tr>
                                <td data-label='name'>
                                <a href='detail.php?id=$id'>{$row['title']}</a>
                                </td>
                                    <td data-label='type'>{$row['type']}</td>
                                    <td data-label='price'>{$row['price']}</td>
                                    <td data-label='location'>{$row['location']}</td>
                                    <td data-label='Status'>$status</td>
                                    <td data-label='Action'><a href='./INCLUDES/delete.php?id=$id'><img src='./IMAGE/fluent_delete-20-filled.png' alt=''></a>
                                    </td>
                                    <td data-label='payment'>$payment</td>
                                </tr>
                            </tbody> ";
                        }
                    }
                }
            }
            echo "</table>"
            ?>
        </main>
    </div>
</body>

</html>