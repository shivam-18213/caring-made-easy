<?php
// SCRIPT newslet.php IS CONNECTED AND THIS SCRIPT IS USING ITS VARABLES IN THE BEGINING
$fname = val($_POST["fname"]);  // STORING DATA IN CORRESPONDING VARIABLES 
$lname = val($_POST["lname"]);  // val is the function name
$occu= val($_POST["occu"]);
$need=val($_POST["need"]);
function val($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

$servername = "localhost";
$username = "root";
$password = "Shivam@18213";
$dbname = "regestration";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO users (firstname, lastname,occupation,need)
VALUES ('$fname', '$lname','$occu','$need')";
$sql.  "INSERT INTO users (firstname, lastname,occupation,need)
VALUES ('$fname', '$lname','$occu','$need')";
$sql.  "INSERT INTO users (firstname, lastname,occupation,need)
VALUES ('$fname', '$lname','$occu','$need')";
if ($conn->multi_query($sql) === TRUE) {
   $last_id=$conn->insert_id;
    echo "New record created successfully Recorded id is: ".$last_id;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close(); // important to reduce traffic on webpage
?>
