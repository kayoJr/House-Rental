<?php
    require "./INCLUDES/db.php";
    $id = $_GET['id'];
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


    <section class="details">
        <div class="container">
            <?php
                $sql = "SELECT * FROM `house` WHERE `id` = '$id'";
                $res = $conn->query($sql);
                if($res->num_rows > 0){
                    while($row = $res -> fetch_assoc()){
                        if($row['negotiable'] = 1){
                            $nego = 'negotiable';
                        }else{
                            $nego = 'fixed';
                        }
                        $user = $row['owner'];
                        $sql = "SELECT * FROM `users` WHERE `phone` = $user";
                        $rs = $conn->query($sql);
                        if($rs->num_rows>0){
                            while($rows = $rs->fetch_assoc()){
                                $name = $rows['fname']. " " . $rows['lname'];
                                $whatsapp = $rows['whatsapp'];
                                $telegram = $rows['telegram'];
                                $phone = $rows['phone'];
                            }
                        }
                        echo "
                        <div class='title-price'>
                        <h1>{$row['title']}</h1>
                        <p class='price'>{$row['price']}</p>
                    </div>
                    <p class='type'>{$row['type']}</p>
                    <div class='loc'>
                        <img src='./IMAGE/carbon_location-filled.png' alt='location'>
                        <p class='location'>{$row['location']}</p>
                    </div>
                    <div class='image-personal'>
                        <div class='image'>
                            <img src='./FILES/{$row['photo']}' alt='house'>
                        </div>
                            <div class='personal'>
                                <div class='top'>
                                    <img src='./IMAGE/ooui_user-avatar.png' alt='avatar'>
                                    <div>
                                        <p>$name</p>
                                    </div>
                                </div>
                                <div class='txt-bg'>
                                    <h3>Contact Seller</h3>
                                </div>
                                <div class='social'>
                                    <a href='https://wa.me/$whatsapp' class='whatsapp'><img src='./IMAGE/akar-icons_whatsapp-fill.png' alt='whatsapp'> whatsapp</a>
                                    <a href='https://telegram.me/$telegram' class='telegram'><img src='./IMAGE/cib_telegram-plane.png' alt='telegram'> Telegram</a>
                                    <a href='tel:$phone' class='phone'><img src='./IMAGE/carbon_phone-filled.png' alt='phone'> $phone</a>
                        
                                </div>
                                <div class='txt-bg'>
                                    <h3>Useful Links</h3>
                                </div>
                                <div class='links'>
                                    <a href='./safty-tip.php'>Read Safty Tips</a>
                                    <a href='./report.php'>Report This Ad</a>
                                </div>
                            </div>
                        
                    </div>
                    <div class='desc-detail'>
                        <div class='desc'>
                            <h3>Description</h3>
                            <p>{$row['description']}
                                </p>
                            <p>The price is {$row['price']} birr and it is $nego.</p>
                        </div>
                        <div class='detail'>
                            <h3>Details</h3>
                            <ul>
                                <li>Price <span>{$row['price']} ETB</span></li>
                                <li>Size <span>{$row['area']} M <sup>2</sup></span></li>
                                <li>Room <span>{$row['room']} Rooms</span></li>
                                <li>Type <span>{$row['type']}</span></li>
                                <li>Status <span>For Rent</span></li>
                                <li>Negotiable <span>$nego</span></li>
                                <li>Location <span>{$row['location']}</span></li>
                            </ul>
                        </div>
                    </div>
                        ";
                    }
                }
            ?>
        </div>
    </section>


<!-- ADD PAGINATION HERE -->

<footer >
    <div class="container">
        <p>COPYRIGHT &copy; 2022 ALL RIGHTS RESERVED</p>
    </div>
</footer>

    <script src="./JS/app.js"></script>
</body>

</html>