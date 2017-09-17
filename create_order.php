<?php 
ini_set('display_errors', 0);
ini_set('log_errors', 1);
error_reporting(E_ALL);

$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "praktineuzduotis_db";


$first_name = $_POST ['first_name'];
$last_name = $_POST ['last_name'];
$email = $_POST ['email'];
$home_address = $_POST ['home_address'];
$zip = $_POST ['zip'];
$phone_number = $_POST ['phone_number'];
$amount = (int)$_POST ['amount'];


if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    exit ("El. pašto adresas neteisingas");
}

//Create connection
$conn = new mysqli ($servername, $dbusername, $dbpassword, $dbname);

// Check connection
if ($conn->connect_error){
  die("DB klaida");
}

$sql = "INSERT INTO orders (first_name, last_name, email, home_address, zip, phone_number, amount)
VALUES (?, ?, ?, ?, ?, ?, ?)";

if (!($stmt = $conn->prepare($sql))) {
    exit("DB klaida");
}
$stmt->bind_param('ssssssd', $first_name, $last_name, $email, $home_address, $zip, $phone_number, $amount);
	


if ($stmt->execute() === true ) {


	echo "Ačiū, informaciją gavome, su Jumis susisieksime per 3 darbo dienas!" . "<br>" . 
	"Galite grįžti į pagrindinį puslapį." . "<br>" . "Gražios dienos :)";
} else {
	exit("DB klaida."); 
}

$conn->close();
