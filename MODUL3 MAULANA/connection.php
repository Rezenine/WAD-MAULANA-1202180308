<?php
$server = "localhost";
$user="root";
$password = "";
$nama_database = "wad_modul3_maulanaa";
$db = mysqli_connect($server, $user, $password, $name_database);
if( !$db ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}

?>