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


    <section class="details">
        <div class="container">
            <div class="title-price">
                <h1>"Property Title"</h1>
                <p class="price">Price</p>
            </div>
            <p class="type">Type</p>
            <div class="loc">
                <img src="./IMAGE/carbon_location-filled.png" alt="location">
                <p class="location">Location</p>
            </div>
            <div class="image-personal">
                <div class="image">
                    <img src="./IMAGE/unsplash_2gDwlIim3Uw.png" alt="house">
                </div>
                    <div class="personal">
                        <div class="top">
                            <img src="./IMAGE/ooui_user-avatar.png" alt="avatar">
                            <div>
                                <p>John Doe</p>
                                <p>Member since 2021</p>
                            </div>
                        </div>
                        <div class="txt-bg">
                            <h3>Contact Seller</h3>
                        </div>
                        <div class="social">
                            <a href="#" class="whatsapp"><img src="./IMAGE/akar-icons_whatsapp-fill.png" alt="whatsapp"> whatsapp</a>
                            <a href="#" class="telegram"><img src="./IMAGE/cib_telegram-plane.png" alt="telegram"> Telegram</a>
                            <a href="#" class="phone"><img src="./IMAGE/carbon_phone-filled.png" alt="phone"> +251911121314</a>
                
                        </div>
                        <div class="txt-bg">
                            <h3>Useful Links</h3>
                        </div>
                        <div class="links">
                            <a href="./safty-tip.php">Read Safty Tips</a>
                            <a href="./report.php">Report This Ad</a>
                        </div>
                    </div>
                
            </div>
            <div class="desc-detail">
                <div class="desc">
                    <h3>Description</h3>
                    <p>The building is located in a residential area and 
                        the flat has living and dinning room with 
                        balcony, kitchen, master bedroom with balcony 
                        and it’s own bathroom, another two bedrooms 
                        with common shower room, maid room with 
                        shower, and garage for one car.
                        </p>
                    <p>The rate is 1,000,000 birr and negotiable.</p>
                </div>
                <div class="detail">
                    <h3>Details</h3>
                    <ul>
                        <li>Price <span>1000000 ETB</span></li>
                        <li>Size <span>500 M <sup>2</sup></span></li>
                        <li>Room <span>6 Rooms</span></li>
                        <li>Type <span>Villa</span></li>
                        <li>Status <span>For Rent</span></li>
                        <li>Negotiable <span>Yes</span></li>
                        <li>Location <span>Around JJU</span></li>
                    </ul>
                </div>
            </div>
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