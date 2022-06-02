<?php
$msg = " ";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyPay | Login</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h1>Login to MyPay</h1>
        <div class="incorrect">
            <?php
                @$msg = $_REQUEST['msg'];
                echo $msg;
                $price = $_REQUEST['price'];
                echo $price;
            ?>
        </div>
        <?php
        echo "
        <form action='login.php' id='book-form' method='POST'>
        <label for='phone'>Phone</label>
        <input type='tel' name='phone' id='phone'>
        <label for='password'>Password</label>
        <input type='password' name='password' id='password'>
        <input type='hidden' name='plan' id='plan' value=$price style='display: '>
        <p class='forget'>Forget Password?</p>
        <input type='submit' value='Login' name='submit'>
           <div class='newAcc'>
                <a href='signup.php'>Create an account</a>
           </div>
        </form>
        "
        ?>
    
    </div>
    <div class="small">

    </div>
    <div class="small small2">

    </div>
    <div class="medium">

    </div>
    <div class="circle">

    </div>
<script src="app.js"></script>
</body>
</html>