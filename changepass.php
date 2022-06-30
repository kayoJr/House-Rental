<?php
require_once './INCLUDES/db.php';
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

    <section class="login">
        <div class="container">
        <form action="./INCLUDES/changepass.php" class="cont-repo" method="POST">
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
                <div class="txt-bg">
                    <h1>Creat New Password</h1>
                </div>
                <div>
                    <label for="phone">Phone</label>
                    <input type="number" name="phone" id="phone" required>
                </div>
                <div>
                    <label for="pass">Password</label>
                    <div class="witness">
                        <input type="password" name="pass" id="pass" pattern="^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$" required>
                        <img src="./IMAGE/witness.png" id="show" alt="">
                    </div>
                </div>
                <div>
                    <label for="conf-pass">Confirm Password</label>
                    <input type="password" name="conf-pass" pattern="^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$" id="conf-pass">
                </div>
                <input type="submit" value="Update" class="btn" name="passbtn">
                <a href="signup.php" class="btn-secondary">Create Account</a>
            </div>
        </form>
    </section>
    


<!-- ADD PAGINATION HERE -->

<footer class="footer">
    <div class="container">
        <p>COPYRIGHT &copy; 2022 ALL RIGHTS RESERVED</p>
    </div>
</footer>

    <script src="./JS/app.js"></script>
</body>

</html>