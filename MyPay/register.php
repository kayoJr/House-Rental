<?php
require_once 'connect.php';

if(isset($_POST['submit'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $deposit = $_POST['deposit'];

    $sql = "INSERT INTO `users`(`fname`, `lname`, `phone`, `password`, `deposit`) VALUES ('$fname', '$lname', '$phone', '$password', '$deposit')";
    $query = mysqli_query($con, $sql);
    if($query){
        echo "
            <script>
                alert('Registerd Successfully');
                window.close();
            </script>
        ";
    }else{
        echo "not added".$sql;
    }
}

?>