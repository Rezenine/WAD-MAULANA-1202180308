<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style>
    td{
        text-align: center;
    }
    
    h5,p,a,li{
        text-align: center;
    }
    .container{
        align-content: center;
    }
    .vertical-center {
  margin: 0;
  position: absolute;
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
}
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

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03"
                aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                    <ul class="navbar-nav mx-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="Home.php">Home<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Booking.php">Booking</a>
                    </li>
                </ul>
            </div>
        </nav>
        <h1 align="center">EAD HOTEL</h1>
        <h2 align="center">Welcome To 5 Star Hotel</h2>
        <div class="container ">
        <div class="row">
            <div class="col-lg-4">
                <div class="card text-center" style="width: 18rem; box-shadow:0px 5px 10px 4px #cccc">
                    <img src="kasur1.jpg" class="card-img-top" alt="kasur1">
                    <div class="card-body top">
                        <h5 class="card-title">Standard</h5>
                        <p class="card-text price">$ 90/Day</p>
                    </div>
                    <ul class="list-group list-group-flush lig">
                        <li class="list-group-item facilities p-3 mb-2 bg-light text-dark">Facilities</li>
                        <li class="list-group-item">1 Single Bed</li>
                        <li class="list-group-item">1 Bathroom</li>
                    </ul>
                    <div class="card-footer">
                    <div class="card-body grey-color">
                        <form action="Booking.php" method="get">
                            <input type="hidden" name="image" value="kasur1.jpg"/>
                        <small class="text-muted"><button type="submit" value="Standard" name="menus" class="card-link btn btn-primary text-center">Book Now</button></small>
                        </form>
                      </div>
                    </div>
                </div>
            </div> 
            <div class="col-lg-4">
                <div class="card text-center" style="width: 18rem; box-shadow:0px 5px 10px 4px #cccc">
                    <img src="kasur2.jpg" class="card-img-top" alt="kasur2">
                    <div class="card-body top">
                        <h5 class="card-title">Superior</h5>
                        <p class="card-text price">$ 150/Day</p>
                    </div>
                    <ul class="list-group list-group-flush lig">
                        <li class="list-group-item facilities p-3 mb-2 bg-light text-dark">Facilities</li>
                        <li class="list-group-item">1 Double Bed</li>
                        <li class="list-group-item">1 Television and Wi-Fi</li>
                        <li class="list-group-item">1 Bathroom and hot water</li>
                    </ul>
                    <div class="card-footer">
                    <div class="card-body grey-color">
                        <form action="Booking.php" method="get">
                        <input type="hidden" name="img" value="kasur2.jpg"/>
                        <small class="text-muted"><button type="submit" value="Superior" name="menus" class="card-link btn btn-primary">Book Now</button></small>
                        </form>
                      </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card text-center" style="width: 18rem; box-shadow:0px 5px 10px 4px #cccc">
                    <img src="kasur3.jpg" class="card-img-top" alt="kasur3">
                    <div class="card-body top">
                        <h5 class="card-title">luxury</h5>
                        <p class="card-text price">$ 200/Day</p>
                    </div>
                    <ul class="list-group list-group-flush lig">
                        <li class="list-group-item facilities p-3 mb-2 bg-light text-dark">Facilities</li>
                        <li class="list-group-item">2 Double Bed</li>
                        <li class="list-group-item">2 Bathroom and hot water</li>
                        <li class="list-group-item">1 Kitchen</li>
                        <li class="list-group-item">1 Television and Wi-Fi</li>
                        <li class="list-group-item">1 Workroom</li>
                    </ul>
                    <div class="card-footer">
                    <div class="card-body grey-color">
                        <form action="Booking.php" method="get">
                        <input type="hidden" name="img" value="kasur3.jpg"/>
                        <small class="text-muted"><button type="submit" value="Luxury" name="menus" class="card-link btn btn-primary">Book Now</button></small>
                        </form>
                      </div>
                    </div>
                </div>
            </div>
</body>
</html>