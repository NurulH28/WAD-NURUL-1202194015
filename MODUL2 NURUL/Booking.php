<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- BOOTSTRAP CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    

    <title>Booking | ESD VANUE</title>
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

    <h4 class="text-center py-3"></h4>
    <div class="container mb-5">
        <div class="bg-dark">
            <p class="text-center py-2 text-white">Reserve your venue now!</p>
        </div>

        <div class="card ">
            <div class="row">
                <div class="col-6  d-flex align-items-center justify-content-center">
                <!-- GET | format gambar -->
                    <?php
                    if (isset($_GET["type"])) {
                        $img = $_GET['type'];
                    } else {
                        $img = "Nusantara Hall";
                    }
                    ?>
                    <img src="img/<?php echo "$img" ?>.png" class="w-75" alt="">
                </div>

                <!-- Form | Nama -->
                <div class="col-6 ">
                    <form action="MyBooking.php" method="POST" class="pe-3 my-3 needs-validation">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" name="name" class="form-control " id="name " placeholder="name" value="Nurul_1202194015" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="date" class="form-label">Event Date</label>
                            <input type="date" name="date" class="form-control " id="date" aria-describedby="inputGroupPrepend2" required>
                            <div class="invalid-feedback">
                                Please choose a Event Date.
                            </div>
                        </div>

                <!-- Form | Waktu -->
                <div class="mb-3">
                    <label for="time" class="form-label">Start Time</label>
                    <input type="time" name="time" class="form-control " id="time" required>
                </div>

                <!-- Form | Durasi -->
                <div class="mb-3">
                    <label for="duration" class="form-label">Duration (Hours)</label>
                    <input type="number" name="duration" class="form-control " id="duration" required>
                </div>
                <div class="mb-3">

                <!-- Form | Pilihan Gedung -->
                <label for="type" class="form-label">Building Type</label>
                <select class="form-select" name="type" id="type" required>
                    <option selected disabled>Choose...</option>
                    <?php

                    if (isset($_GET["type"])) {
                        echo "<option selected>" . $_GET["type"];
                        ".</option>";
                    } else {
                        echo '
                        <option value="Nusantara Hall">Nusantara Hall</option>
                    <option value="Garuda Hall">Garuda Hall</option>
                    <option value="Gedung Serba Guna">Gedung Serba Guna</option>
                    ';
                    }
                    ?>
                </select>
            </div>

            <!-- Form | Phone Number -->
                <div class="mb-3">
                    <label for="phone" class="form-label">Phone Number</label>
                    <input type="number" name="phone" class="form-control " id="phone" required>
                </div>
            
            <!-- Form | Pilihan Service -->
                <div class="mb-3">
                    <p for="" class="mb-0">Add Service(s)</p>

                    <!-- Service | Catering -->
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="opsi1" value="1" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Catering / $700
                        </label>
                    </div>

                    <!-- Service | Decoration -->
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="opsi2" value="2" id="flexCheckChecked">
                        <label class="form-check-label" for="flexCheckChecked">
                            Decoration / $450
                        </label>
                    </div>

                    <!-- Service | Sound System -->
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="opsi3" value="3" id="flexCheckChecked">
                        <label class="form-check-label" for="flexCheckChecked">
                            Sound System / $250
                        </label>
                    </div>
                </div>

            <!-- Form | Booking -->
            <div class="d-grid gap-2">
                <button class="btn btn-primary" type="submit">Book</button>
            </div>

            </form>
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