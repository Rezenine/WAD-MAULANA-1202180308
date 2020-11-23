<?php 
include("connection.php");
$id = $_GET['id'];

$delete = "DELETE FROM `cart` WHERE `id`='$id'";
// echo $insert;
$query = mysqli_query($db, $delete);

if ($query > 0) {
    header('location: ../Cart.php?status=success');
} else {
    header('location: ../Cart.php?status=failed');
}

?>