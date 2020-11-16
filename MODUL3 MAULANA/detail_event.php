<?php
 include("connection.php");
 if( !isset($_GET['id'])){
     header('Loctation: Home.php');
 }
 $id=$_GET['Id'];
 $sql = "select * from event where id=$id";
 $query = mysqli_query($db, $sql);
 $list = mysqli_fetch_array($query);
 $databenefit = explode(",", $list['benefit']);
 if(mysqli_num_rows($query)<1){
     die("data tidak ditemukan");
 }
 ?>

<!DOCTYPE html>
<html lang="en">

<head>
<title>EAD EVENTS</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EAD Events</title>
</head>

<body>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
    crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
    integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
    crossorigin="anonymous"></script>
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="#">EAD EVENTS</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse mx-auto" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
				<li class="nav-item"><a class="nav-link text-white" href="Home.php">Home</a></li>
				<li class="nav-item active"><a class="nav-link btn btn-outline-light" href="BuatEvent.php">Buat Event</a></li>
			</ul>
        </div>
    </nav>
    <div class="container">
        <h4 class="text-primary text-center mt-4">Detail Event</h4>
        <div class="row justify-content-center">
        <div class="col-6">
        <div class="card shadow mb-5 bg-white" style="width: 34rem; height: 40rem;">
        <input type="hidden" name="id" value="<?php echo $list['id']?>"/>
        <img class="card-img-top" alt="Gambar Events" src="file/<?php echo $list['gambar']?>"  style="width: inherit; height: 13rem;">
					<div class="card-body info">
						<h5 class="card-title">
							<?php echo $list['name']; ?>
						</h5>
						<h6 class="card-text">Deskripsi</h6>
						<p><?php echo $list['deskripsi']; ?>
					</p>
                <div class="row">
                <div class=col-6>
				<h6 class="card-text">Informasi Event</h6>
                <p class="fas fa-calendar-alt" style="color: orange;"></p> <?php echo $list['tanggal']; ?><br/>
							<p class="fas fa-map-marker-alt" style="color: orange;"></p> <?php echo $list['tempat']; ?><br />
							<p class="far fa-clock" style="color: orange;"></p> <?php echo $list['mulai']; ?> - <?php echo $list['berakhir']; ?>
						</div>
                <div class="col-6"><h6 class="card-text">Benefit</h6>
                <li><?php echo $list['benefit'];?></li>
                </div>
                </div>
                <p class="class-text">
                <b>Kategori <?php echo $list['kategori']; ?></b>
					</p>
                    <p class="card-text">
						<b>HTM Rp.<?php echo $list['harga']; ?></b>
					</p>
                    <hr>
                    <div class="card-text text-center">
						<button class="btn btn-primary" type="button" data-toggle="modal" data-target="#myModal">Edit</button>
						<a class="btn btn-danger" href="delete.php?id=<?php echo $list['id'];?>">Delete</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="modal" id="myModal">
	<div class="modal-dialog mw-100 w-75">
		<div class="modal-content">
			<form action="edit.php" method="POST" enctype="multipart/form-data">
				<div class="modal-header">
					<h4 class="modal-title">Edit Content Event</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col col-md-6">
							<div class="card pd-4">
								<div class="card-header bg-danger"></div>
								<div class="card-text">
									<div class="form-group">
										<input type="hidden" name="id" value="<?php echo $list['id'] ?>" />
										<label for="Name" class="col mt-2">Name</label>
										<div class="col-12 ">
											<input type="text" name="name" class="form-control" placeholder="Name Event" value="<?php echo $list['name'] ?>">
										</div>
										<label for="Deskripsi" class="col mt-2">Deskripsi</label>
										<div class="col-12">
											<textarea name="deskripsi" class="form-control" rows="5" placeholder="Deskripsi Event"><?php echo $list['deskripsi'] ?></textarea>
										</div>
										<label for="Upload Gambar" class="col mt-2">Upload Gambar</label>
										<div class="custom-file">
											<input type="file" class="custom-file-input" name="gambar" id="customFile">
											<label class="custom-file-label ml-3 mr-3" for="customFile"><?php echo $list['gambar'] ?></label>
										</div>
										<label for="Kategori" class="col mt-2">Kategori</label>
										<div class="form-check form-check-inline ml-3 mb-3">
											<input class="form-check-input" type="radio" name="kategori" value="Online" <?php if($list['kategori']=='Online'){ echo 'checked';} ?> id="online">
											<label class="form-check-label" for="online">
												Online
											</label>
										</div>
										<div class="form-check form-check-inline">
											<input class="form-check-input" type="radio" name="kategori" value="Offline" <?php if($list['kategori']=='Offline'){ echo 'checked';} ?> id="offline">
											<label class="form-check-label" for="offline">
												Offline
											</label>
										</div>
										
									</div>
								</div>
							</div>
						</div>
						<div class="col col-md-6">
							<div class="card">
								<div class="card-header bg-primary"></div>
								<div class="card-text">
									<div class="form-group">
										<label for="Tanggal" class="col mt-2">Tanggal</label>
										<div class="col-12">
											<input class="form-control" type="date" value="<?php echo $list['tanggal'] ?>" name="tanggal" placeholder="">
										</div>
										<div class="form-inline">
											<label for="Jam Mulai" class="ml-3 mt-2">Jam Mulai</label>
											<label for="Jam Berakhir" class="col mt-2">Jam Berakhir</label>
										</div>
										<div class="form-inline">
											<input type="time" name="mulai" class="form-control col ml-3 mt-2" placeholder="" value="<?php echo $list['mulai'] ?>">
											<input type="time" name="berakhir" class="form-control col ml-3 mt-2 mr-3" value="<?php echo $list['berakhir'] ?>" placeholder="">
										</div>
										<label for="tempat" class="col mt-2">Tempat</label>
										<div class="col-12">
											<input type="text" name="tempat" value="<?php echo $list['tempat'] ?>" class="form-control" placeholder="Tempat Event">
										</div>
										<label for="Harga" class="col mt-2">Harga</label>
										<div class="col-12">
											<input type="number" name="harga" value="<?php echo $list['harga'] ?>" class="form-control" placeholder="Harga">
										</div>
										<label for="Benefit" class="col mt-4">Benefit</label>
										<div class="form-check form-check-inline ml-3">
											<input type="checkbox" name="benefit[]" class="form-check-input" id="Snacks" value="Snacks" <?php if(in_array("Snacks",$databenefit)) echo "checked";?> >
											<label class="form-check-label mb-2 mt-2" for="Snacks">Snacks</label>
										</div>
										<div class="form-check form-check-inline">
											<input type="checkbox" name="benefit[]" class="form-check-input" id="Sertifikat" value="Sertifikat" <?php if(in_array("Sertifikat",$databenefit)) echo "checked";?>>
											<label class="form-check-label mb-2 mt-2" for="Sertifikat">Sertifikat</label>
										</div>
										<div class="form-check form-check-inline">
											<input type="checkbox" name="benefit[]" class="form-check-input" id="Souvenir" value="Souvenir" <?php if(in_array("Souvenir",$databenefit)) echo "checked";?>>
											<label class="form-check-label mb-2 mt-2" for="Souvenir">Souvenir</label>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
					<input type="submit" class="btn btn-primary" name="save" value="Save Changes">
				</div>
			</form>
			<script>
				$(".custom-file-input").on("change", function() {
					var fileName = $(this).val().split("\\").pop();
					$(this).siblings(".custom-file-label").addClass("selected").html(fileName);
				});
			</script>
    </body>
    </html>