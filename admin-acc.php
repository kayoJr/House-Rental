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
    <title>Admin Panel</title>
    <title>Document</title>
</head>

<body>
    <div class="panel">
        <aside>
            <div class="logo">
                <img src="./IMAGE/logo2 1.png" alt="logo">
            </div>
            <ul>
                <li class="active"><a href="./admin-acc.php">My Profile</a></li>
                <li><a href="./admin-properties.php">Properties</a></li>
                <li><a href="./users.php">Users</a></li>
                <li><a href="./logout.php">Logout</a></li>
            </ul>
        </aside>
        <main>
            <div class="top">
                <h1>My Profile</h1>
            </div>
            <form action="#" class="form">
                <div class="form-elements">
                    <div>
                        <label for="fname">First Name</label>
                        <input type="text" name="fname" id="fname" required>
                    </div>
                    <div>
                        <label for="lname">Last Name</label>
                        <input type="text" name="lname" id="lname" required>
                    </div>
                    <div>
                        <label for="phone">Phone</label>
                        <input type="tel" name="phone" id="phone" required>
                    </div>
                    <div>
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" required>
                    </div>
                    <div>
                        <label for="whatsapp">Whatsapp</label>
                        <input type="tel" name="whatsapp" id="whatsapp">
                    </div>
                    <div>
                        <label for="telegram">Telegram</label>
                        <input type="tel" name="telegram" id="telegram">
                    </div>
                </div>
                <input type="submit" value="Update" class="btn">
            </form>
        </main>
    </div>
</body>

</html>