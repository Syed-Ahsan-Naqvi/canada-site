<?php
// Retrieve form data
$startAirport = $_POST['startAirport'];
$endAddress = $_POST['endAddress'];
$flightNr = $_POST['flightNr'];
$arrivalDate = $_POST['arrivalDate'];
$arrivalTime = $_POST['arrivalTime'];
$pickUpTime = $_POST['pickUpTime'];
$startAddress = $_POST['startAddress'];
$Zielort_departureDate = $_POST['Zielort_departureDate'];
$Startdatum_departureDate = $_POST['Startdatum_departureDate'];
$Startzeit_departureTime = $_POST['Startzeit_departureTime'];
$company = $_POST['company'];
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$addInfo = $_POST['addInfo'];
$carSelection = $_POST['carSelection'];
$babySeat = $_POST['babySeat'];
$childSeat = $_POST['childSeat'];
$boosterSeat = $_POST['boosterSeat'];
$personCount = $_POST['personCount'];
$baggageCount = $_POST['baggageCount'];
$handCarryCount = $_POST['handCarryCount'];
// $cashPay = $_POST['cashPay'];
// $dataPrivacy = $_POST['dataPrivacy'];



echo "$startAirport";


// Connect to MySQL database
$host = 'localhost';
$db = 'u577021018_register';
$user = 'u577021018_root';
$password = 'Hashstack12345';

$conn = new mysqli($host, $user, $password, $db);
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}

// Insert form data into the database

// $sql = "INSERT INTO airport (startAirport,endAddress,flightNr,arrivalDate,arrivalTime,pickUpTime,startAddress,Zielort_departureDate,Startdatum_departureDate,Startzeit_departureTime,company,name,phone,email,addInfo,carSelection,babySeat,childSeat,boosterSeat,personCount,baggageCount,handCarryCount,cashPay,dataPrivacy) VALUES ('$startAirport','$endAddress','$flightNr','$arrivalDate','$arrivalTime','$pickUpTime','$startAddress','$Zielort_departureDate','$Startdatum_departureDate','$Startzeit_departureTime','$company','$name','$phone','$email','$addInfo','$carSelection','$babySeat','$childSeat','$boosterSeat','$personCount','$baggageCount','$handCarryCount','$cashPay','$dataPrivacy')";


$sql = "INSERT INTO airport (startAirport,endAddress,flightNr,arrivalDate,arrivalTime,pickUpTime,startAddress,Zielort_departureDate,Startdatum_departureDate,Startzeit_departureTime,company,name,phone,email,addInfo,carSelection,babySeat,childSeat,boosterSeat,personCount,baggageCount,handCarryCount) VALUES ('$startAirport','$endAddress','$flightNr','$arrivalDate','$arrivalTime','$pickUpTime','$startAddress','$Zielort_departureDate','$Startdatum_departureDate','$Startzeit_departureTime','$company','$name','$phone','$email','$addInfo','$carSelection','$babySeat','$childSeat','$boosterSeat','$personCount','$baggageCount','$handCarryCount')";

if ($conn->query($sql) === TRUE) {
    echo "Form submitted successfully!";
    echo "$startAirport";
    header('Location: '."https://formspree.io/f/myyvpqjk");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>