<?php
require 'auth.php';
require 'login.php';
require '../INCLUDES/db.php';
$phone = $_SESSION['user'];
$sql = "SELECT * FROM `users` where `phone` = '$phone'";
$rs = mysqli_query($con, $sql);
if(mysqli_num_rows($rs)>0){
    while($row = mysqli_fetch_assoc($rs)){
        $name = $row['fname'];
        $deposit = $row['deposit'];
    }
}else{
    echo "error";
}  
// }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyPay | Home</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="logo">
                <img src="./logo.png" alt="Logo">
            </div>
            <div class="personal-info">
                <h2><?php
                    echo $name;
                ?> <span> </span> <?php echo $deposit; ?>ETB</h2>
                <div class="avatar">
                    <a href="logout.php">
                        <svg class="svg" width="40" height="40" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M13 3V5H15V15H13V17H17V3H13ZM13 11V9H5.39998L9.69998 4.7L8.29998 3.3L1.59998 10L8.29998 16.7L9.69998 15.3L5.39998 11H13Z" fill="black"/>
                        </svg>
                    </a>

                    <!-- <img src="./avatar.png" alt="Profile pic"> -->
                </div>
            </div>
        </div>
        <div class="main">
            <div class="boxes">
                <div class="box" id="btnDepo">
                    <button >Deposit</button>
                </div>
                <div class="box" id="btnWithdraw">
                    <button >Withdraw</button>
                </div>
                <div class="box" id="btnSend">
                    <button >Send</button>
                </div>
            </div>
        </div>
        <div class="forms">
            <form action="deposit.php" id="deposit" method="POST">
                <div class="heading">
                    <div></div>
                    <div class="close">
                        <svg width="40" height="40" viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M23 2.875C11.8863 2.875 2.875 11.8863 2.875 23C2.875 34.1137 11.8863 43.125 23 43.125C34.1137 43.125 43.125 34.1137 43.125 23C43.125 11.8863 34.1137 2.875 23 2.875ZM30.4301 30.6457L27.4652 30.6322L23 25.309L18.5393 30.6277L15.5699 30.6412C15.3723 30.6412 15.2105 30.484 15.2105 30.2818C15.2105 30.1965 15.242 30.1156 15.2959 30.0482L21.1402 23.0854L15.2959 16.127C15.2416 16.0611 15.2115 15.9787 15.2105 15.8934C15.2105 15.6957 15.3723 15.534 15.5699 15.534L18.5393 15.5475L23 20.8707L27.4607 15.552L30.4256 15.5385C30.6232 15.5385 30.785 15.6957 30.785 15.8979C30.785 15.9832 30.7535 16.0641 30.6996 16.1314L24.8643 23.0898L30.7041 30.0527C30.758 30.1201 30.7895 30.201 30.7895 30.2863C30.7895 30.484 30.6277 30.6457 30.4301 30.6457Z" fill="#0037FF"/>
                            </svg>                            
                    </div>
                </div>
                <label for="amount">Amount</label>
                <input type="number" name="amount" id="amount">
                <input type="submit" value="Deposit" name="submit">
            </form>
            <form action="withdraw.php" id="withdraw" method="POST">
                <label for="agent">Agent ID</label>
                <input type="number" name="agent" id="agent">
                <label for="amount">Amount</label>
                <input type="number" name="amount" id="amount">
                <input type="submit" value="Withdraw" name="submit">
            </form>
            <form action="send.php" id="send" method="POST">
                <div class="heading">
                    <div></div>
                    <div class="close">
                        <svg width="40" height="40" viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M23 2.875C11.8863 2.875 2.875 11.8863 2.875 23C2.875 34.1137 11.8863 43.125 23 43.125C34.1137 43.125 43.125 34.1137 43.125 23C43.125 11.8863 34.1137 2.875 23 2.875ZM30.4301 30.6457L27.4652 30.6322L23 25.309L18.5393 30.6277L15.5699 30.6412C15.3723 30.6412 15.2105 30.484 15.2105 30.2818C15.2105 30.1965 15.242 30.1156 15.2959 30.0482L21.1402 23.0854L15.2959 16.127C15.2416 16.0611 15.2115 15.9787 15.2105 15.8934C15.2105 15.6957 15.3723 15.534 15.5699 15.534L18.5393 15.5475L23 20.8707L27.4607 15.552L30.4256 15.5385C30.6232 15.5385 30.785 15.6957 30.785 15.8979C30.785 15.9832 30.7535 16.0641 30.6996 16.1314L24.8643 23.0898L30.7041 30.0527C30.758 30.1201 30.7895 30.201 30.7895 30.2863C30.7895 30.484 30.6277 30.6457 30.4301 30.6457Z" fill="#0037FF"/>
                        </svg>                            
                    </div>
                </div>
                <div class="feedbacks">
                    <h3>
                        <?php
                            $own = "";
                            @$own = $_REQUEST['msg'];
                            echo $own;
                            
                        ?>
                    </h3>
                    <h3 class="done">
                        <?php
                            $own = "";
                            @$own = $_REQUEST['done'];
                            echo $own;
                            
                        ?>
                    </h3>
                </div>
                <?php
                    @$id = $_REQUEST['id'];
                    $sql = "SELECT * FROM `house` WHERE `id` = '$id'";
                    $res = $conn->query($sql);
                    if($res){
                        while($row = $res->fetch_assoc()){
                            $price = 0;
                            if($row['plan'] == 1){
                                $price = 20;
                            }else{
                                $price = 50;
                            }
                        }
                    
                ?>
                <label for="phone">Reciever Phone</label>
                <input type="number" name="phone" id="phone"value="0953565269" readonly>
                <label for="amount">Amount</label>
                <input type="number" name="amount" id="amount" value="<?php echo $price ?>" readonly>
                <input type="text" name="id" id="id" value="<?php echo $id ?>" style="display: none;">
                <input type="submit" value="Send" name="submit">
            </form>
            <?php
}else{
    echo mysqli_error($conn);
}
            ?>
        </div>
    </div>
    <script src="./app.js"></script>
</body>
</html>