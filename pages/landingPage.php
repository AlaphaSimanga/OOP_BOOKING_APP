<?php

$pageTitle = "Hotel Booking. Let's hook you up.";

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Links page template -->
    <?php require_once "../pages/landingPage.php"; ?>

    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <!-- Main CSS -->
    <link rel="stylesheet" href="../css/home.css">

</head>

<body>

        <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div id="booking" class="section">
                    <div class="section-center">
                        <div class="booking-form">
                            <div class="formTitle">
                                <h3>Hotel Reservation Room</h3>
                            </div>
                            <br>
                            <!-- Form -->
                            <form action="../pages/compare.php" class="formStyle" method="POST">

                                <!-- Name Input -->
                                <div class="row">
                                <div class="form-group">
                                    <input type="text" id="name" required class="form-control" name="firstname" placeholder="Firstname">
                                    <span class="form-label">Firstname</span>
                                </div>
                                </div>

                                 <!-- Surname Input -->
                                 <div class="row">
                                <div class="form-group">
                                    <input type="text" id="surname" required class="form-control" name="surname" placeholder="Surname">
                                    <span class="form-label">Surname</span>
                                </div>
                                </div>
                        
                                <!-- Email Input -->
                                <div class="row">
                                <div class="form-group">
                                    <input type="email" id="email" required class="form-control" name="email" placeholder="Email address">
                                    <span class="form-label">Email address</span>
                                </div>
                                </div>

                                <div class="inputDate">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <!-- Check In Date Input -->
                                            <div class="inputGroup">
                                                <input type="date" name="checkin" class="form-control"  required id="">
                                              
                                            </div>
                                        </div>

                                        <!-- Check Out Date Input -->
                                        <div class="col-md-6">
                                            <div class="inputGroup">
                                                <input type="date" name="checkout" class="form-control" required id="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>

                                <!-- Submit Button -->
                                <div class="form-btn">
                                    <input class="submit-btn" type="submit" name="detailsSubmission" value="Submit">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-8">
                <div class="wrapper">
                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="../images/365426894.jpg" alt="hotel1" class="pictures" width="100%"
                                    height="100%">
                            </div>
                            <div class="carousel-item">
                                <img src="../images/365481552.jpg" alt="hotel2" class="pictures" width="100%"
                                    height="100%">
                            </div>
                            <div class="carousel-item">
                                <img src="../images/365485014.jpg" alt="hotel3" class="pictures" width="100%"
                                    height="100%">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>

        <h3>Most booked hotels in East London</h3><br>
        <div class="row" id="cards">
        <div class="card" style="width: 18rem;">
            <img src="../images/365426894.jpg" class="card-img-top" alt="Quarry Lake Inn">
            <div class="card-body">
                <h5 class="card-title">Quarry Lake Inn</h5>
                <h6>Hotel in East London</h6>
                <p class="card-text">Popular with guests booking hotels in East London.</p>
                <h6>8.8 Fabulous . 77 reviews </h6>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="../images/Hampton.jpg" class="card-img-top" alt="The Hampton Exclusive Guest House">
            <div class="card-body">
                <h5 class="card-title">The Hampton Exclusive Guest House</h5>
                <h6>Guest House in East London</h6>
                <p class="card-text">Popular with guests booking hotels in East London.</p>
                <h6>8.0 Very good . 39 reviews</h6>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="../images/Haga haga.jpg" class="card-img-top" alt="Haga Haga Hotel">
            <div class="card-body">
                <h5 class="card-title">Haga Haga Hotel</h5>
                <h6>Hotel in East London</h6>
                <p class="card-text">Popular with guests booking hotels in East London.
                </p>
                <h6>8.6 Excellent . 38 reviews</h6>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="../images/Holy hill.jpg" class="card-img-top" alt="The Holy Hill B&B">
            <div class="card-body">
                <h5 class="card-title">The Holy Hill B&B</h5>
                <h6>B&B in East London</h6>
                <p class="card-text">Popular with guests booking hotels in East London.</p>
                <h6>7.8 Very good . 48 reviews</h6>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="../images/Arum.jpg" class="card-img-top" alt="Arum Guest House">
            <div class="card-body">
                <h5 class="card-title">Arum Guest House</h5>
                <h6>Guest House in East London</h6>
                <p class="card-text">Popular with guests booking hotels in East London.</p>
                <h6>8.8 Excellent . 48 reviews</h6>
            </div>
        </div>
        </div>

        <footer>
            <div class="ftr">
                <p class="ftr-text">Want to receive exclusive hotel offers? Subscribe to our newsletter!</p>
                <input type="email" class="email" placeholder="Email Address"><button
                class="submit">Subscribe</button><br><br>
            </div>
        </footer>
       


     <!-- Bootstrap Popper and JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>