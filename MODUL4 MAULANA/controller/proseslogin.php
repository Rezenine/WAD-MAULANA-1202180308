<?php
include("connection.php");
if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $check = "SELECT * FROM `user` WHERE `email` = '$email' AND `password` = '$password'";

    $query = mysqli_query($db, $check);

    if (mysqli_num_rows($query) == 1) {
        $row = mysqli_fetch_assoc($query);
        $_SESSION['Id'] = $row["Id"];
        $_SESSION['name'] = $row["nama"];
        $_SESSION['color'] = "light";

        header('location: ../Login.php?status=success');
    } else{
        header('location: ../Login.php?status=failed');  
    }
}