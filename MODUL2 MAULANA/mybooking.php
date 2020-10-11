<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03"
                aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                    <ul class="navbar-nav mx-auto mt-2 mt-lg-0">
                    <li class="nav-item ">
                        <a class="nav-link" href="Home.php">Home<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="Booking.php">Booking</a>
                    </li>
                </ul>
            </div>
        </nav>
    <?php 
    $id=rand();
    $nama=$_POST['nama'];
    $date=date_create($_POST['date']);
    $checkIn = date_format($date,"d/m/Y");
    date_add($date,date_interval_create_from_date_string($_POST['durasi']." days"));
    $checkOut = date_format($date,"d/m/Y" );
    $roomType = $_POST['room'];
    $service="";
    $phone=$_POST['phone'];
    $total = 0;
    if($roomType == "Standard"){
        $total = 90 * $_POST['durasi']; 
    }else if($roomType == "Superior"){
        $total = 150 * $_POST['durasi'];
    }else if($roomType == "Luxury"){
        $total = 200 * $_POST['durasi'];
    }
    if(isset($_POST['service'])){
        $services=$_POST['service'];
        foreach($services as $cost){
            $service = $service.'<li>'. $cost. '</li>';
            $total += 20;
        }
    }else {
        $service = 'no service';
    }
    ?>
    <br>
    <div class="container-sm">
    <fieldset>
    <table border="1" class="table">
    <thead class="thead-dark">
    <tr>
    <th scope="col">Booking Number</th>
    <th scope="col">name</th>
    <th scope="col">Checkin</th>
    <th scope="col">Checkout</th>
    <th scope="col">Room Type</th>
    <th scope="col">Phone Number</th>
    <th scope="col">Service</th>
    <th scope="col">Total Price</th>
    </tr>
</thead>
    <tr>
    <td><?= $id ?></td>
    <td><?= $nama ?></td>
    <td><?= $checkIn ?></td>
    <td><?= $checkOut ?></td>
    <td><?= $roomType ?></td>
    <td><?= $phone ?></td>
    <td><?= $service ?></td>
    <td>$ <?= $total ?></td>
    </tr>
    </fieldset>
    </div>

</body>
</html>