<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//require "../classes/customerClass.php";
require "../classes/customerClass.php";
require "../Calculations/createHotels.php";
require "../classes/hotelClass.php";
require "../classes/bookingClass.php";
require "../Calculations/calculateDays.php";

$pageTitle = "Hotel Booking. Let's get you Checked In";
session_start();

$hotelChoice;

if (isset($_POST['book'])) {

    // Create Hotels in hotel superglobal
    try {
        createHotels("../Calculations/hotelData.json");
    } catch (Exception $err) {
        echo "
                <script>
                    console.log('Server error in loading hotels.. ' + $err)
                </script>
            ";
    }

    // assign hotelChoice value of hotel chosen in form
    foreach ($_SESSION['hotels'] as $hotel) {
        if ($hotel->getName() == $_POST['choice']) {

            $hotelChoice = $hotel;
        }
    }

    // create booking entity
    try {
        $newBooking = new Booking(
            rand(1000, 9000),
            $_SESSION['checkin'],
            $_SESSION['checkout'],
            $_SESSION['numDays'],
            $_POST['cost'],
            $hotelChoice->getName()
        );
    } catch (Exception $err) {
        echo "
                <script>
                    console.log('Server error creating booking. ' + $err)
                </script>
            ";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <!-- Main CSS -->
    <link rel="stylesheet" href="../css/style.css">

</head>

<body class="container-fluid">

    <header class="thirdHeader">

        <!-- Background image in css -->

    </header>

    <main>

        <div class="thankYou">

            <!-- Gets form name input and displays users name -->
            <h1>Thank you for using our services <?php echo $_SESSION['user']->getFirstname() ?>..</h1>

            <h3>Please ensure that all of the following details about your booking are correct.</h3>

        </div>

        <div class="confirmDetails">

            <div class="infoBox">
                <!-- Displays the customers information that they submitted when filling out the form -->
                <h1 class="bookingInfo">Customer Information</h1>

                <div class="details">
                    <?php
                    // Gets random user ID, Customers name, surname and email addrress
                    echo '
                                <li> Customer No: #' . $_SESSION['user']->getId() . '</li>
                                <li> Name: ' . $_SESSION['user']->getFirstname() . ' ' . $_SESSION['user']->getLastname() . '</li>
                                <li> Email Address: ' . $_SESSION['user']->getEmail() . '</li>
                            ';
                    ?>
                </div>

            </div>

            <div class="infoBox">
                <!-- Displays the customers information that they submitted when filling out the form -->
                <h1 class="bookingInfo">Hotel Information</h1>

                <div class="details">
                    <?php
                    // Gets random hotel ID, hotel name and the hotel daily rate
                    echo '
                                <li> Hotel Id: #' . $hotelChoice->getId() . '</li>
                                <li> Hotel: ' . $hotelChoice->getName() . '</li>
                                <li> Daily Rate: R ' . $hotelChoice->getRate() . ' </li>
                            ';
                    ?>
                </div>

            </div>

            <div class="infoBox">
                <!-- Displays the customers information that they submitted when filling out the form -->
                <h1 class="bookingInfo">Booking Information</h1>

                <div class="details">
                    <?php
                    // Gets random booking ID, the duration of stay, the dates of when they'll be staying as well as the total cost for their stay
                    echo '
                                <li> Booking No: #' . $newBooking->getId() . '</li>
                                <li> Duration of stay: ' . $newBooking->getDuration() . '</li>
                                <p>- Start Date: ' . $newBooking->getStartDate() . '</p>
                                <p>- End Date: ' . $newBooking->getEndDate() . '</p>
                                <li> Total: R ' . $newBooking->getCost() . ' </li>
                            ';
                    ?>
                </div>

            </div>

        </div>

        <div class="letsBook">
            <!-- Confirmation -->
            <h1>Your booking details will be sent to use via email!</h1>

            <a href="../index.php"><button class="confirmBtn">Confirm Booking</button></a>
        </div>

    </main>


    <!-- Bootstrap Popper and JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>


</body>

</html>
<?php

