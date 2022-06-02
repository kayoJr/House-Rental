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

    <section class="safty">
        <div class="container">
            <div class="txt-bg">
                <h1>SAFTY TIPS</h1>
            </div>
            <div class="boxes">
                <div class="box">
                    <h2>Safty As Renter</h2>
                    <ul>
                        <li>Ensure you upload an accurate image 
                            of the house
                            </li>
                        <li>Ensure you give an active phone 
                            number and email address</li>
                        <li>Ensure you give an active phone 
                            number and email address</li>
                        <li>Make sure you understand the plans 
                            before making the payment </li>
                    </ul>
                </div>
                <div class="black box">
                    <h2>Safty As Tenant</h2>
                    <ul>
                        <li>Insist on inspecting the house before 
                            buying/renting it
                            </li>
                        <li>Meet the seller in a public place</li>
                        <li>It is safest to contact the seller through 
                            the provided Contact Seller section on the 
                            ad. This way we have your contact 
                            information and can contact you should 
                            we track fraudulent behavior. </li>
                    </ul>
                </div>
                <div class="box">
                    <h2>Identifying Fraud</h2>
                    <ul>
                        <li>Check out the product and price, 
                            is it reasonable or too good to be true?</li>
                        <li>Is the seller trying to prove the 
                            authenticity without being asked?</li>
                        <li>Is the seller unwilling to answer relevant 
                            questions, or not answering his/her phone?</li>
                        <li>Is the seller unwilling to use traceable 
                            transport methods?</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    


<!-- ADD PAGINATION HERE -->

<footer class="report-footer">
    <div class="container">
        <p>COPYRIGHT &copy; 2022 ALL RIGHTS RESERVED</p>
    </div>
</footer>

    <script src="./JS/app.js"></script>
</body>

</html>