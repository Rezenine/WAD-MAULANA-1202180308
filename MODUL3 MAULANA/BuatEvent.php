
<?php
include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EAD Events</title>

    <style>
        td{
            text-align: center;
        }
        .fac{
            background-color: whitesmoke;
        }
        h5,p,a{
            text-align: center;
        }
        .container{
            align-content: center;
        }
        .vertical-center{
        margin: 0;
        position: absolute;
        -ms-transform: translateY(-50%);
        trsnaform: translateY(-50%);
        }
        .RbtnMargin { margin-left: 5px; }
    </style>
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
                <li class="nav-item active mr-3">
                    <a class="nav-link" href="home.php">Home</a>
                </li>
                <li class="nav-item active">
                    <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Buat Event</button>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container" style="padding-top: 0cm;">
    
                <h5 class="text-left" style="color:cornflowerblue">Buat Event</h5>
                <div class="container mt-5">
	<form action="prosesbuat.php" method="POST" enctype="multipart/form-data">
		<div class="row">
			<div class="col col-md-6">
				<div class="card pd-4">
					<div class="card-header bg-danger"></div>
					<div class="card-text">
						<div class="form-group">
							<input name="id" value="<?php echo $list['id']; ?>"  hidden />
							<label for="Name" class="col mt-2">Name</label>
							<div class="col-12 ">
								<input type="text" name="name" class="form-control" placeholder="Name Event">
							</div>
							<label for="Deskripsi" class="col mt-2">Deskripsi</label>
							<div class="col-12">
								<textarea name="deskripsi" class="form-control" rows="5" placeholder="Deskripsi Event"></textarea>
							</div>
							<label for="Upload Gambar" class="col mt-2">Upload Gambar</label>
							<div class="custom-file">
    							<input type="file" class="custom-file-input" name="gambar" id="customFile">
    							<label class="custom-file-label ml-3 mr-3" for="customFile">Pilih Gambar</label>
  							</div>
							<label for="Kategori" class="col mt-2">Kategori</label>
							<div class="form-check form-check-inline ml-3 mb-3">
  								<input class="form-check-input" type="radio" name="kategori" value="Online" id="online">
  								<label class="form-check-label" for="online">
    							Online
  								</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="kategori" value="Offline" id="offline">
  								<label class="form-check-label" for="offline">
    							Offline
  								</label>
  							</div>
							
						</div>
					</div>
				</div>
			</div>
                        <div class="col-sm-6">
                    <div class="card">
                        <div class="card-header bg-primary"></div>
                        <div class="card-body">
                            <form action="action.php">
                                <div class="form-group">
                                    <label for="Tanggal">Tanggal</label>
                                    <input type="date" class="form-control" name="tanggal">
                                </div>
                                <div class="form-inline">
								<label for="Jam Mulai" class="ml-3 mt-2">Jam Mulai</label>
								<label for="Jam Berakhir" class="col mt-2">Jam Berakhir</label>
							</div>
                            <div class="form-inline">
								<input type="time" name="mulai" class="form-control col ml-3 mt-2" placeholder="">
								<input type="time" name="berakhir" class="form-control col ml-3 mt-2 mr-3" placeholder="">
							</div>
                            <br>
                            <label for="Tempat" class="col mt-2">Tempat</label>
							<div class="col-12">
								<input type="text" name="tempat" class="form-control" placeholder="Tempat Event">
							</div>
                            <label for="Harga" class="col mt-2">Harga</label>
							<div class="col-12">
								<input type="number" name="harga" class="form-control" placeholder="Harga">
							</div>
                            <label for="Benefit" class="col mt-1">Benefit</label>
							<div class="form-check form-check-inline ml-3">
								<input type="checkbox" name="benefit[]" class="form-check-input" id="Snacks" value="Snacks">
								<label class="form-check-label" for="Snacks">Snacks</label>
							</div>
							<div class="form-check form-check-inline">
								<input type="checkbox" name="benefit[]" class="form-check-input" id="Sertifikat" value="Sertifikat">
								<label class="form-check-label" for="Sertifikat">Sertifikat</label>
							</div>
							<div class="form-check form-check-inline">
								<input type="checkbox" name="benefit[]" class="form-check-input" id="Souvenir" value="Souvenir">
								<label class="form-check-label" for="Souvenir">Souvenir</label>
							</div>
							<div class="col-auto float-right mt-4 mb-3">
								<input type="submit" name="submit" value="Submit" class="btn btn-primary">
								<input type="submit" name="cancel" value="Cancel" class="btn btn-danger" onClick="Home()">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</form>
	</div>
<script>
$(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});

function home() {
window.location = "Home.php";
}
</script>

</body>
</html>