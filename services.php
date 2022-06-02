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

    <section class="service">
        <div class="container">
            <div class="txt-bg">
                <h1>OUR SERVICES</h1>
                </div>
                <p>House rental and property management services in Jigjiga city</p>
                <p>For Sellers or Renters:
                    Our company is dedicated to helping house owners and property developers to rent and sell 
                    out their properties. If you want to save time and money, while expanding, you might want to 
                be interested in our professional services.</p>
                <p>Our company could be your ideal partner for renting or selling your property. We are 
                committed to our customers and promoters and our main objective is to be transparent while 
                achieving results.
            </p>
            <p>For Tenants or buyers:
                Whether you are looking for houses, flats, offices or buildings for sale or for rent, we offer you 
                free-of-charge accompanied viewing of properties you choose through our state-of-the-art 
                website.</p>
                <p> Our agent services include:</p>
                <ul>
                    <li>Preparing recommendations based on the clients’ desired specifications and budget</li>
                    <li>Sharing photos and details of the properties through the website.</li>
                    <li>Getting in touch with property owners to set up viewing times.</li>
                    <li>Accompanying the client to view the selected potential houses/flats</li>
                </ul>
            <p class="warning">* We only charge our clients only when they post their properties. </p>
            <p><a href="contact.php">Contact us</a> for service charge policy and procedures.</p>
        
            <div class="txt-bg">
                <h1>SERVICE CHARGE POLICY</h1>
            </div>
            <div class="boxes">
                <div class="box image first">
                    <h2>BASIC PLAN</h2>
                    <h3>20ETB/POST</h3>
                </div>
                <div class="box detail second">
                    <h3>SOME DESCRIPTION ABOUT BASIC PLAN</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit ut 
                        aliquam, purus sit amet luctus venenatis, lectus magna 
                        fringilla urna, porttitor rhoncus dolor purus non enim 
                        praesent elementum facilisis leo, vel fringilla est 
                        ullamcorper eget nulla facilisi etiam dignissim diam quis 
                        enim lobortis scelerisque fermentum dui faucibus in 
                        ornare quam viverra ulla facilisi etiam dignissim diam quis 
                        enim lobortis scelerisque fermentum dui faucibus in 
                        ornare quam viverra</p>
                </div>
                <div class="box detail third">
                    <h3>SOME DESCRIPTION ABOUT PREMIUM PLAN</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit ut 
                        aliquam, purus sit amet luctus venenatis, lectus magna 
                        fringilla urna, porttitor rhoncus dolor purus non enim 
                        praesent elementum facilisis leo, vel fringilla est 
                        ullamcorper eget nulla facilisi etiam dignissim diam quis 
                        enim lobortis scelerisque fermentum dui faucibus in 
                        ornare quam viverra ulla facilisi etiam dignissim diam quis 
                        enim lobortis scelerisque fermentum dui faucibus in 
                        ornare quam viverra</p>
                </div>
                <div class="box image fourth">
                    <h2>PREMIUM PLAN</h2>
                    <h3>50ETB/POST</h3>
                </div>
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