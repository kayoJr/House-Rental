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
        <aside id="mobile">
            <div class="logo">
                <img src="./IMAGE/logo2 1.png" alt="logo">
            </div>
            <ul>
                <li><a href="./index.php">Home</a></li>
                <li class="active"><a href="./user_profile.php">My Profile</a></li>
                <li><a href="./properties.php">Properties</a></li>
                <li><a href="./post-from-panel.php">Post</a></li>
                <li><a href="./INCLUDES/logout.php">Logout</a></li>
            </ul>
        </aside>
        <main>
            <div class="top">
                <!-- <img src="./IMAGE/ant-design_menu-outlined.png" alt="" id="hamPanel"> -->
                <h1>My Profile</h1>
            </div>
            <form action="./INCLUDES/update.php" method="POST" class="form">
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
                <div class="form-elements">
                    <?php
                        $phone = $_SESSION['user'];
                        $sql = "SELECT * FROM `users` WHERE `phone` = $phone";
                        $res = $conn->query($sql);
                        if($res){
                            while($row = mysqli_fetch_assoc($res)){
                                $fname = $row['fname'];
                                $lname = $row['lname'];
                                $pass = $row['pass'];
                                $email = $row['email'];
                                $whatsapp = $row['whatsapp'];
                                $telegram = $row['telegram'];
                            }
                        }
                    ?>
                    <div>
                        <label for="fname">First Name</label>
                        <input type="text" name="fname" id="fname" required placeholder="<?php echo $fname ?>">
                    </div>
                    <div>
                        <label for="lname">Last Name</label>
                        <input type="text" name="lname" id="lname" required placeholder="<?php echo $lname ?>">
                    </div>
                    <div>
                        <label for="pass">New Password</label>
                        <input type="password" name="pass"
                    pattern="^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$" id="pass">
                    </div>
                    <div>
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" required placeholder="<?php echo $email ?>">
                    </div>
                    <div>
                        <label for="whatsapp">Whatsapp</label>
                        <input type="tel" name="whatsapp" id="whatsapp" placeholder="<?php echo $whatsapp ?>">
                    </div>
                    <div>
                        <label for="telegram">Telegram</label>
                        <input type="tel" name="telegram" id="telegram" placeholder="<?php echo $telegram ?>">
                    </div>
                </div>
                <input type="submit" value="Update" name="update" class="btn">
            </form>
        </main>
    </div>
    <!-- <script src="./JS/panel.js"></script> -->
</body>

</html>