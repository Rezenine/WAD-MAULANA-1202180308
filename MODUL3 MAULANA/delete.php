<?php
include("connection.php");
if( isset($_GET['id']) ){
	$id = $_GET['id'];
	$res=mysqli_query($db, "SELECT *FROM event WHERE id=$id");
	$list=mysqli_fetch_array($res);
	if ( is_file("file/".$list['gambar'])){
		unlink("file/".$list['gambar']);
		$sql = "DELETE FROM event WHERE id=$id";
		$query = mysqli_query($db, $sql);
		header('location: Home.php');
	}else{
		die("gagal menghapus");
	}
}else {
	die("access denied!");
}
?>