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
    <title>User Panel</title>
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
                <li><a href="./user_profile.php">My Profile</a></li>
                <li><a href="./properties.php">Properties</a></li>
                <li class="active"><a href="./post-from-panel.php">Post</a></li>
                <li><a href="./INCLUDES/logout.php">Logout</a></li>
            </ul>
        </aside>
        <main>
            <div class="top">
                <h1>post</h1>
            </div>
            <section class="post">
            <form action="./INCLUDES/post.php" method="POST" class="cont-repo" enctype="multipart/form-data">
                        <div class="txt-bg">
                            <h1>DESCRIPTION</h1>
                        </div>
                        <div class="title">
                            <label for="title">Property Title</label>
                            <input type="text" name="title" id="title" required>
                        </div>
                        <div class="others">
                            <div class="type">
                                <label for="type">Type</label>
                                <select name="type" id="type" required>
                                    <option value="apartment">Apartment</option>
                                    <option value="villa">Villa</option>
                                    <option value="flat">Flat</option>
                                    <option value="house">House</option>
                                </select>
                            </div>
                            <div class="location">
                                <label for="location">Location</label>
                                <input type="text" name="location" id="location" required>
                            </div>
                            <div class="price">
                                <label for="price">Price</label>
                                <input type="number" name="price" id="price" placeholder="price per month" required>
                            </div>
                            <div class="negotiable">
                                <label for="negotiable">Negotiable</label>
                                <select name="negotiable" id="negotiable" require>
                                    <option value="1" default>Yes</option>
                                    <option value="0">No</option>
                                </select>
                            </div>
                            <div class="plan">
                                <label for="plan">Posting Plan</label>
                                <select name="plan" id="plan">
                                    <option value="1">Basic 20ETB</option>
                                    <option value="2">Premium 50ETB</option>
                                </select>
                            </div>
                            <p>Read about posting plans <a href="./services.php">Here</a></p>
                        </div>
                        <div class="detail">
                            <div class="txt-bg">
                                <h1>DETAILS</h1>
                        </div>
                        <div class="top">
                            <div>
                                <label for="room">Rooms</label>
                                <input type="number" name="room" id="room">
                            </div>
                            <div>
                                <label for="area">Area in M<sup>2</sup></label>
                                <input type="number" name="area" id="area">
                            </div>
                            <div>
                                <label for="photo">Photos</label>
                                <input type="file" name="photo" id="photo" required accept=".jpg, .jpeg, .png">
                            </div>
                        </div>
                        <label for="desc">Content Description</label>
                        <textarea name="desc" id="desc" cols="30" rows="10"></textarea>
                        <input type="submit" value="PROCEED TO PAYMENT" name="submit" class="btn" >
                    </div>
                    </form>
            </section>
        </main>
    </div>
</body>

</html>