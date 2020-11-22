<?php 
include("connection.php");
if(isset($_POST['submit'])){
    $name = $_POST['nama'];
    $email = $_POST['email'];
    $nohp = $_POST['nohp'];
    $password = $_POST['password'];
    $cekpass = $_POST['cekpass'];

    if ($password == $cekpass) {
        $insert = "INSERT INTO `user`(`id`, `nama`, `email`, `no_hp`, `password`) 
                    VALUES ('','$name','$email','$nohp','$password')";
        $query = mysqli_query($db, $insert);
        
        if ($query > 0) {
            header('location: ../Register.php?status=success');
        } else {
            header('location: ../Register.php?status=failed');
        }
        
    } else {
        header('location: ../Register.php?status=failed');
    }
           
}
?>