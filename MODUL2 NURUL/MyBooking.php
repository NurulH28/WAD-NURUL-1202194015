<?php
$name = $_POST['name'];
$date = $_POST['date'];
$time = strtotime($_POST['time']);
$duration = $_POST['duration'];
$checkout = $time + 60 * 60 * $duration;

$type = $_POST['type'];

        if (isset($_POST["opsi1"])) { 
            $p1 = 700;
            $ser1 = "Catering";
        } else {
            $p1 = 0;
            $ser1 = "";
        }

        if (isset($_POST["opsi2"])) {
            $p2 = 450;
            $ser2 = "Decoration";
        } else {
            $p2 = 0;
            $ser2 = "";
        }

        if (isset($_POST["opsi3"])) {
            $p3 = 250;
            $ser3 = "Sound System";
        } else {
            $p3 = 0;
            $ser3 = "";
        }

        if ($type == "Nusantara Hall") {
            $p = 2000;
        } else if ($type == "Garuda Hall") {
            $p = 1000;
        } else if ($type == "Gedung Serba Guna") {
            $p = 500;
        }

$p_tot = $p * $duration + ($p1 + $p2 + $p3);

$phone = $_POST['phone'];

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

 <!-- BOOTSTRAP CSS -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<title>My Booking| ESD VANUE</title>
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

    <div class="py-3"><br>
        <h4 class="text-center">Thank yous Nurul_1202194015 for Reserving</h4>
        <h4 class="text-center">Please double check your resevation detail</h4>
    </div>

    <!-- Table | Booking -->
    <div class="container mt-5">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Booking Number</th>
                    <th scope="col">Name</th>
                    <th scope="col">Check-in</th>
                    <th scope="col">Check-out</th>
                    <th scope="col">Building Type</th>
                    <th scope="col">Phone Number</th>
                    <th scope="col">Service</th>
                    <th scope="col">Total Price</th>
                </tr>
            </thead>
            
             <!-- Table | Hasil Booking -->
            <tbody class="table-secondary">
                <tr>
                    <th scope="row">

                        <?php
                        echo (rand(100, 1000)); 
                        ?>
                    </th>
                    <td><?php echo "$name" ?></td>
                    <td><?php echo "$date" . " " . date(' H:i:s', $time) ?></td>
                    <td><?php echo "$date" . " " . date('H:i:s', $checkout) ?></td>
                    <td><?php echo "$type" ?></td>
                    <td><?php echo "$phone" ?></td>
                    <td>
                    <ul>
                        <?php
                        if (isset($ser1)) {
                            echo "<li>" .  $ser1 . "</li>";
                        }
                        if (isset($ser2)) {
                            echo "<li>" .  $ser2 . "</li>";
                        }
                        if (isset($ser3)) {
                            echo "<li>" .  $ser3 . "</li>";
                        }
                        ?>
                    </ul>
                    </td>
                    <td>$<?php echo "$p_tot" ?></td>
                </tr>
            </tbody>
        </table>
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