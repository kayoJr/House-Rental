<?php
require "./INCLUDES/db.php";
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
    <title>House Rental Management System</title>
</head>

<body>
    <div class="mob-nav" id="menu">
        <div class="top">
            <img src="./IMAGE/logo mobile.png" alt="">
            <img class="close" src="./IMAGE/ant-design_close-outlined.png" alt="">
        </div>
        <div class="links">
            <ul>
                <li><a href="index.php">HOME</a></li>
                <li><a href="services.php">OUR SERVICES</a></li>
                <li><a href="contact.php">CONTACT US</a></li>
            </ul>
        </div>
    </div>
    <div class="mob-nav second-nav" id="second-nav">
        <div class="top">
            <img src="./IMAGE/logo mobile.png" alt="">
            <img class="close" src="./IMAGE/ant-design_close-outlined.png" alt="">
        </div>
        <div class="links">
            <ul>
                <li><a href="index.php">HOME</a></li>
                <li><a href="login.php">LOGIN</a></li>
                <li><a href="signup.php">CREATE ACCOUNT</a></li>
                <li><a href="post.php">POST</a></li>
            </ul>
        </div>
    </div>
    <header class="mobile">
        <?php
            include "mob_nav.php";
        ?>
    </header>
    <header class="desktop">
        <?php
            include "desk_nav.php";
            include "search_bar.php";
        ?>
    </header>

    <section class="recent">
        <div class="container">
            <div class="title txt-bg">
                <h1>SEARCH RESULTS</h1>
            </div>
            <div class="houses recent-house">
            <?php
    if(isset($_GET['submit'])){
        @$type = $_GET['type'];
        @$location = $_GET['location'];
        @$min = $_GET['min'];
        @$max = $_GET['max'];

        $sql = "SELECT * FROM `house` 
        WHERE `type` = '$type' OR `location` = '$location' 
        OR `price` BETWEEN $min AND $max";

        $res = $conn->query($sql);
        if(@$res->num_rows > 0){
            while($row = $res->fetch_assoc()){
                $id = $row['id'];
                $photo = $row['photo'];
                echo "
                <a href='./detail.php?id=$id'>
                <div class='house'>
                    <img src='./FILES/$photo' alt='house'>
                    <div class='price'>
                        <p>{$row['price']}$/MO</p>
                    </div>
                    <div class='detail'>
                        <p>{$row['title']}</p>
                        <p>{$row['location']}</p>
                    </div>
                </div>
            </a>
                ";
            }
        }else{
            echo "
                <h1>No Results Found</h1>
            ";
        }
    }

?>

        
            </div>
        </div>
    </section>
    


<!-- ADD PAGINATION HERE -->

<footer>
    <div class="container">
        <p>COPYRIGHT &copy; 2022 ALL RIGHTS RESERVED</p>
    </div>
</footer>

    <script src="./JS/app.js"></script>
</body>

</html>