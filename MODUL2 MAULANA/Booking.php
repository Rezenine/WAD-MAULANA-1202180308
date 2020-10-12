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
    .fac{
        background-color: whitesmoke;
    }
    h5,p,a{
        text-align: center;
    }
    .container{
        align-content: center;
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
                    <li class="nav-item ">
                        <a class="nav-link" href="Home.php">Home<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="Booking.php">Booking</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="container cont-booking">
    <div class="row">
      <div class="col-lg-6">
        <form action="mybooking.php" method="POST">
          <div class="form-group row">
            <label for="inputNama" class="col-sm-3 col-form-label">Name</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="inputNama" name="nama" required>
            </div>
          </div>
          <div class="form-group row">
            <label for="inputDate" class="col-sm-3 col-form-label">Check-in</label>
            <div class="col-sm-10">
              <input type="date" class="form-control" id="inputDate" name="date" required>
              
            </div>
          </div>
          <div class="form-group row">
            <label for="inputDuration" class="col-sm-3 col-form-label">Duration</label>
            <div class="col-sm-10">
              <input type="number" class="form-control" id="inputDuration" name="durasi" required>
              <label for="days" class="drt" style="font-size: 13px;">Day(s)</label>
            </div>
          </div>
          <div class="form-group row">
            <label for="inputRoom" class="col-sm-3 col-form-label">Room Type</label>
            <div class="col-sm-10">
              <?php 
              if (isset($_POST['menu'])) {
                $menu = $_POST['menu'];
              }
              if (!empty($menu)) {
                echo '<input type="text" class="form-control" id="StandardRoom" name="rooms" readonly value='.$menu.'>';
              }else {
                echo '<select id="disabledSelect" class="form-control" name="room">';
                echo '<option value="Standard" selected>Standard</option>';
                echo '<option value="Superior">Superior</option>'; 
                echo '<option value="Luxury">Luxury</option>';
                echo '</select>';
              }
              ?>
            </div>
          </div>
          <div class="form-group row">
            <div class="col-sm-3">Add Service(s)</div>
            <div class="col-sm-10">
              <label for="service-hotel" class="service-ho" style="font-size:13px; margin-bottom:1px; margin-top:5px;">$20/Service</label>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck1" name="service" value="Room Service">
                <label class="form-check-label" for="gridCheck1" style="margin-top:-20px;">Room Service</label>
              </div>
              <div class="form-check breakfast" style="margin-top:10px">
                <input class="form-check-input" type="checkbox" id="gridCheck2" name="service" value="Breakfast">
                <label class="form-check-label" for="gridCheck2" style="margin-top:-20px;">Breakfast</label>
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label for="inputDate" class="col-sm-3 col-form-label">Phone Number</label>
            <div class="col-sm-10">
              <input type="number" class="form-control" id="inputDate" name="phone" required>
            </div>
          </div>
          <div class="form-group row">
            <div class="col-sm-10">
            <button type="submit" class="btn btn-primary" style="width: 100%;" name="submit">Book</button>
            </div>
          </div>
        </form>
      </div>
      <div class="col-lg-6">
        <img src="<?php if(isset($_POST['img'])){echo $_POST['img'];}else{echo 'kasur1.jpg';}?>" alt="kasur1" class="gambar-room" style="width: 75%">
      </div>
    </div>

  </div>
  <br><br>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    </body>
</html>