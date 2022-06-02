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

    <section class="contact">
        <div class="container">
            <div class="txt-bg">
                <h1>CONTACT US</h1>
            </div>
            <form action="mailto:kalebmelaku97@gmail.com" method="POST" class="cont-repo">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" required>
                <label for="email">Email</label>
                <input type="email" name="email" id="email" required>
                <label for="subject">Subject</label>
                <input type="text" name="subject" id="subject" required>
                <label for="message">Your Message</label>
                <textarea name="message" id="message" cols="30" rows="10" required></textarea>
                <input type="submit" value="Submit" class="btn">
            </form>
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