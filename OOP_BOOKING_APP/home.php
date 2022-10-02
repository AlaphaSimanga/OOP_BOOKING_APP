<?php

session_start();

include ("home.html");

if(isset($_POST['compare'])){
    $hotel[] = file_get_contents("hotelData.json");
    $hotel = json_decode($hotel);

    $userInput = array(

        'firstname' => $_POST['firstname'],
        'surname' => $_POST['surname'],
        'email' => $_POST['email'],
        'duration' => $_POST['duration'],
        'hotel' => $_POST['hotel']
    );


    //append the input

    $hotel = $userInput;
    $hotel = json_encode($userInput, JSON_PRETTY_PRINT); //second parameter to display the content
    file_get_contents("hotelData.json", $hotel);
}


class hotel {
    //properties

    private $hotelName;
    private $roomRate;
    private $specialRate;
 
    //setter method
 
    public function comparePrices(string $hotelName, int $roomRate, int $offerPrice){
        $this -> offerprice = $offerPrice;
        $this -> hotelName = $hotelName;
        $this -> roomRate = $roomRate;
    }

    //getter method

    public function getCheapest(){
        echo $this -> hotelName. $this -> roomRate. $this -> offerprice;
    }
}

$hotel_1 = new hotel();
$hotel_1 -> comparePrices("Premier Hotel East London ICC", 1490, 1415,5);
$hotel_1 -> getCheapest();

$hotel_2 = new hotel();
$hotel_2 -> comparePrices("Blue Lagoon Hotel and Conference Centre", 1450, 1377.5);
$hotel_2 -> getCheapest();

$hotel_3 = new hotel();
$hotel_3 -> comparePrices("Hotel Osner", 1080, 1026);
$hotel_3 -> getCheapest();

$hotel_4 = new hotel();
$hotel_4 -> comparePrices("Premier Hotel Regent", 1314, 1248,3);
$hotel_4 -> getCheapest();

$hotel_5 = new hotel();
$hotel_5 -> comparePrices("Bluewaters Hotel", 1049, 996,55);
$hotel_5 -> getCheapest();







