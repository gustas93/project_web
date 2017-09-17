<?php 
ini_set('display_errors', 'off');
ini_set ('error_log','C:\\wamp64\\www\\error.txt');
error_reporting(E_ALL);

$servername = "localhost";
$dbusername = "matalt_gustas";
$dbpassword = "SuzirzejimaiSuzirzejimai";
$dbname = "matalt_gustas";


$first_name = $_POST ['first_name'];
$last_name = $_POST ['last_name'];
$email = $_POST ['email'];
$home_address = $_POST ['home_address'];
$zip = $_POST ['zip'];
$phone_number = $_POST ['phone_number'];
$amount = $_POST ['amount'];


//Create connection
$conn = new mysqli ($servername, $dbusername, $dbpassword, $dbname);

// Check connection
if ($conn->connect_error){
  die("connection failed: " . $conn->connect_error);}

$sql = "INSERT INTO orders (first_name, last_name, email, home_address, zip, phone_number, amount)
VALUES ('$first_name', '$last_name', '$email', '$home_address', '$zip', '$phone_number', '$amount')";

if ($conn -> query($sql) === true ) {

	
	echo "Ačiū, informaciją gavome, su Jumis susisieksime per 3 darbo dienas!" . "<br>" . 
	"Galite grįžti į pagrindinį puslapį." . "<br>" . "Gražios dienos :)";
} else {
	echo "Klaida: " . $sql . "<br>" . $conn->error; 
}

$conn->close();

?>
