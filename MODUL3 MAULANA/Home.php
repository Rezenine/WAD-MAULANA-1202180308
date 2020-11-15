<?php
 include("connection.php");
 $sql = ("select *from event");
 $query = mysqli_query($db, $sql);
 ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
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
    <br>
    <div class="container">
        <h5 class="text-primary text-center mt4"> WELCOME TO EAD EVENTS!</h5>
        <div class="row mt-5 ml-5">
        <?php 
        $result = mysqli_query($db, "select * from event");
        if(mysqli_num_rows($result)==0){
            echo "No event Found";
        }
        while ($list = mysqli_fetch_array($query)){
            ?>
            <div class="col-4 mb-5">
            <div class="card" style="width = 18rem; height: 30rem;">
				<img class="card-img-top" alt="Gambar Events" src="file/<?php echo $list['gambar']?>"  style="width: inherit; height: 13rem;">
                <div class="card-body info">
                <h5 class="card-title">
                <?php echo $list['name'];?>
                </h5>
                <p class="card-text">
                <i class="fas fa-calendar-alt" style=" color : orange;"></i><?php echo $list['tanggal'];?></p>
                <p class="card-text">
                <i class="fas fa-map-marker-alt" style=" color : orange;"></i><?php echo $list['tempat'];?></p>
                <p class="card-text">
                <b>kategori <?php echo $list['kategori'];?></b>
                <hr/>
                <a class="btn btn-primary float-right" href="detail_event.php?id=<?php echo $list['id'];?>">Detail</a>
                </div>
                </div>
                </div>
        <?php } ?>
        
        </div>        
    </body>
    </html>