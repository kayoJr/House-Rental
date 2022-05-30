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
        <nav>
            <img id="ham" src="./IMAGE/ant-design_menu-outlined.png" alt="">
            <img src="./IMAGE/logo mobile.png" alt="">
            <img id="avatar" src="./image/ooui_user-avatar mobile.png" alt="">
        </nav>
        </header>
    <header class="desktop">
        <nav>
            <div class="container nav-items">
                <div class="left-section">
                    <div class="logo">
                        <img src="./IMAGE/logo2 1.png" alt="Logo">
                    </div>
                    <ul>
                        <li><a href="index.php">HOME</a></li>
                        <li><a href="services.php">OUR SERVICES</a></li>
                        <li><a href="contact.php">CONTACT</a></li>
                    </ul>
                </div>
                <div class="right-section">
                    <a href="login.php"><img src="./IMAGE/ooui_user-avatar.png" alt="Avatar"></a> 
                    <a class="btn" href="post.php">POST</a>
                </div>
            </div>
        </nav>
        <div class="search" id="search">
            <div class="container">
                <form action="#">
                    <select name="" id="">
                        <option value="" disabled selected>Type</option>
                        <option value="">Apartment</option>
                        <option value="">Villa</option>
                        <option value="">Flat</option>
                    </select>
                    <select name="" id="">
                        <option value="" disabled selected>Location</option>
                        <option value="">University</option>
                        <option value="">Kella</option>
                        <option value="">06</option>
                    </select>
                    <input type="number" name="" id="" placeholder="Min Price">
                    <input type="number" name="" id="" placeholder="Max Price">
                    <input type="submit" value="SEARCH" class="btn btn-secondary">
                </form>
            </div>
        </div>
    </header>

    <section class="login">
        <div class="container">
        <form action="./INCLUDES/login.php" class="cont-repo" method="POST">
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
                    <h1>LOGIN TO CREATE LISTING</h1>
                </div>
                <div>
                    <label for="phone">Phone</label>
                    <input type="tel" name="phone" id="phone" required>
                </div>
                <div class="password">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" required>
                    <a href="#">Forget Password?</a>
                </div>
                <input type="submit" value="Login" class="btn" name="login">
                <a href="signup.php" class="btn-secondary">Create Account</a>
            </div>
        </form>
    </section>
    


<!-- ADD PAGINATION HERE -->

<footer class="report-footer login-footer">
    <div class="container">
        <p>COPYRIGHT &copy; 2022 ALL RIGHTS RESERVED</p>
    </div>
</footer>

    <script src="./JS/app.js"></script>
</body>

</html>