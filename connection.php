<?php
$servername = "localhost";
$username = "root";
$password = "database_password";

// create connection

$conn= new mysqli($servername,$username,$password);
if ($conn->connect_error){
die ("connection failed"); // this statement is used to print the error message and end the script
}

echo "connected successfully";
?>
