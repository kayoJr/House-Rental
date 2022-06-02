<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyPay | Sign Up</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Sign up to MyPay</h1>
        <form action="register.php" id="book-form" method="POST">
           <label for="fname">First Name</label>
           <input type="text" name="fname" id="fname">
           <label for="lname">Last Name</label>
           <input type="text" name="lname" id="lname">
           <label for="phone">Phone</label>
           <input type="tel" name="phone" id="phone">
           <label for="password">Password</label>
           <input type="password" name="password" id="password">
           <label for="deposit">Deposit</label>
           <input type="number" name="deposit" id="deposit">
           <p class="agree">By clicking signup I agree to 
               <span><a href="#">Terms</a> </span> and 
               <span><a href="#">Privacy policy</a></span></p>
           <input type="submit" value="Sign up" name="submit">
           <div class="newAcc">
               <a href="index.php">Login to your account</a>
           </div>
        </form>
 
    
    </div>
    <div class="small">

    </div>
    <div class="medium">

    </div>
    <div class="circle">

    </div>
<script src="app.js"></script>
</body>
</html>