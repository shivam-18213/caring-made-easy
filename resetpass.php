<?php
$uname=$_GET["user_name"];
$updated_password=$_GET["passwo"];

function val($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}


$servername = "localhost";
$username = "root";
$password = "Shivam@18213";
$dbname = "blog2";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$result = $conn->query("update users_blog2 set passwo='$updated_password' where user_name='$uname'");
$result2 = $conn->query("select * from users_blog2 where user_name='$uname'and passwo='$updated_password'");
$row =  $result2->fetch_assoc();
if($row['user_name']==$uname && $row['passwo']==$updated_password){
echo "password changed for"." ".$uname;
}
$conn->close(); 
?>
