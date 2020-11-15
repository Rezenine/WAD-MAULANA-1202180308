<?php
	include("connection.php");
	if (isset($_POST['save'])) {
		$id = $_POST['id'];
		$name = $_POST['name'];
		$deskripsi = $_POST['deskripsi'];
		$kategori = $_POST['kategori'];
		$tanggal = $_POST['tanggal'];
		$mulai = $_POST['mulai'];
		$berakhir = $_POST['berakhir'];
		$tempat = $_POST['tempat'];
		$harga = $_POST['harga'];
		$benefit = $_POST['benefit'];
		$filename = $_FILES['gambar']['name'];

		if($filename != ""){
		$rand = rand();
		$ekstensi =  array('png','jpg','jpeg','gif');
		$filename = $_FILES['gambar']['name'];
		$ukuran = $_FILES['gambar']['size'];
		$tmp_file = $_FILES['gambar']['tmp_name'];
		$ext = pathinfo($filename, PATHINFO_EXTENSION);
 		if(in_array($ext,$ekstensi) == true ) {
 			$xx = $rand.'_'.$filename;
 			move_uploaded_file($tmp_file, 'file/'.$rand.'_'.$filename);
 			$benefit = implode(",", $_POST['benefit']);
			$sql = "update event set name='$name', deskripsi='$deskripsi', gambar='$xx', kategori='$kategori', tanggal='$tanggal', mulai='$mulai', berakhir='$berakhir', tempat='$tempat', harga='$harga', benefit='$benefit' where id=$id";
			$query = mysqli_query($db, $sql);
			header('location: Home.php?status=success');
 		}else{
 			header('location: Home.php?status=failed');
 		}

}else{
			$benefit = implode(",", $_POST['benefit']);
			$sql = "update event set name='$name', deskripsi='$deskripsi', kategori='$kategori', tanggal='$tanggal', mulai='$mulai', berakhir='$berakhir', tempat='$tempat', harga='$harga', benefit='$benefit' where id=$id";
			$query = mysqli_query($db, $sql);
			header('location: Home.php?status=success');
}	
}		
?>
