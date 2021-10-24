<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- BOOTSTRAP CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <title>Home | ESD VANUE</title>
  </head>

<body>
  <!-- NAVBAR -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark" aria-label="Tenth navbar example">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample08" aria-controls="navbarsExample08" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample08">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="Home.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Booking.php">Booking</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <h4 class="text-center py-3">WELCOME TO ESD VENUE RESERVATION</h4>
  <div class="container mb-5">
    <div class="bg-dark">
      <p class="text-center py-2 text-white">Find your best deal for your event, here!</p>
    </div>


<!-- CARD | Info Gedung -->
    <div class="d-flex justify-content-center">
      <!-- Nusantara Hall Info -->
      <div class="card " style="width: 27rem;" >
        <img src="img/Nusantara Hall.png" class="card-img-top h-70" alt="..." height="275px">
        <div class="card-body">
          <h5 class="card-title" name="type">Nusantara Hall</h5>
          <p class="card-text text-secondary mb-0">$2000/ Hour</p>
          <p class="card-text text-secondary">5000 Capacity</p>
        </div>
        <ul class="list-group list-group-flush text-center">
          <li class="list-group-item fw-bold text-success">Free Parking</li>
          <li class="list-group-item fw-bold text-success">Full AC</li>
          <li class="list-group-item fw-bold text-success">Cleaning Service</li>
          <li class="list-group-item fw-bold text-success">Covid-19 Health Protocol</li>
        </ul>
        <div class="card-footer text-center">
          <a href="Booking.php?type=Nusantara Hall" class="btn btn-primary" type="button">Book Now</a>
        </div>
      </div>

    <!-- Garuda Hall Info -->
      <div class="card mx-3" style="width: 27rem;">
        <img src="img/Garuda Hall.png" class="card-img-top h-75" alt="..." height="275px">
        <div class="card-body">
          <h5 class="card-title" name="type">Garuda Hall</h5>
          <p class="card-text text-secondary mb-0">$1000/ Hour</p>
          <p class="card-text text-secondary">2000 Capacity</p>
        </div>
        <ul class="list-group list-group-flush text-center">
          <li class="list-group-item fw-bold text-success">Free Parking</li>
          <li class="list-group-item fw-bold text-success">Full AC</li>
          <li class="list-group-item fw-bold text-danger">No Cleaning Service</li>
          <li class="list-group-item fw-bold text-success">Covid-19 Health Protocol</li>
        </ul>
        <div class="card-footer text-center">
          <a href="Booking.php?type=Garuda Hall" class="btn btn-primary" type="button">Book Now</a>
        </div>
      </div>

      <!-- Gedung Serba Guna Info -->
      <div class="card " style="width: 27rem;">
        <img src="img/Gedung Serba Guna.png" class="card-img-top h-75" alt="..." height="275px">
        <div class="card-body">
          <h5 class="card-title" name="type">Gedung Serba Guna</h5>
          <p class="card-text text-secondary mb-0">$500/ Hour</p>
          <p class="card-text text-secondary">500 Capacity</p>
        </div>
        <ul class="list-group list-group-flush text-center">
          <li class="list-group-item fw-bold text-danger">No Free Parking</li>
          <li class="list-group-item fw-bold text-danger">No Full AC</li>
          <li class="list-group-item fw-bold text-danger">No Cleaning Service</li>
          <li class="list-group-item fw-bold text-success">Covid-19 Health Protocol</li>
        </ul>
        <div class="card-footer text-center">
          <a href="Booking.php?type=Gedung Serba Guna" class="btn btn-primary" type="button">Book Now</a>
        </div>
      </div>
    </div>
  </div>

  
  <!-- FOOTER -->
  <footer class="fixed-bottom text-center bg-dark" >
        <a style="color: white;">Created by: Nurul_1202194015</a>
    </footer>

  <!-- BOOTSTRAP JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>
    
</body>
</html>