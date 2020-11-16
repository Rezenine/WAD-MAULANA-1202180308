<?php
	include("connection.php");
	if(isset($_POST['submit'])){
		$name = $_POST['name'];
		$deskripsi = $_POST['deskripsi'];
		$gambar = $_POST['gambar'];
		$kategori = $_POST['kategori'];
		$tanggal = $_POST['tanggal'];
		$mulai = $_POST['mulai'];
		$berakhir = $_POST['berakhir'];
		$tempat = $_POST['tempat'];
		$harga = $_POST['harga'];
		$benefit = $_POST['benefit'];

		$rand = rand();
		$ekstensi =  array('png','jpg','jpeg','gif');
		$filename = $_FILES['gambar']['name'];
		$ukuran = $_FILES['gambar']['size'];
		$tmp_file = $_FILES['gambar']['tmp_name'];
		$ext = pathinfo($filename, PATHINFO_EXTENSION);
 		if(!in_array($ext,$ekstensi) ) {
			header("location:Home.php?alert=gagal_ekstensi");
		}else{
			if($ukuran < 1044070){
 				$xx = $rand.'_'.$filename;
				move_uploaded_file($tmp_file, 'file/'.$rand.'_'.$filename); 
				$data_benefit = implode(",", $_POST['benefit']);
                mysql_query($db, "insert into event (name, deskripsi, gambar, kategori, tanggal, mulai, berakhir, tempat, harga, benefit) value 
                ('$name', '$deskripsi', '$xx', '$kategori', '$tanggal', '$mulai', '$berakhir', '$tempat', '$harga', '$data_benefit')");
				header('location: Home.php?status=success');
			}else{
			header('location: Home.php?status=failed');
			}
	}
} elseif (isset($_POST['cancel'])) {
	header('location: Home.php');
}
?>