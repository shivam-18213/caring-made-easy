<?php
$servername= "localhost";
$username= "root";
$password= "Shivam@18213";
$dbname= "regestration";

$conn= new mysqli($servername,$username,$pass,$dbname); 

if($conn->connect_error){
die("connection failed");
}

$sql = "SELECT id,firstname,lastname,password date FROM users ";
$result = $conn->query($sql);

if($result->num_rows > 0){ 

while ($row = $result->fetch_assoc()){ 

  echo "ID " . $row["id"] ." " ."Name:" . $row["firstname"]. " " . $row["lastname"]. " " ."OCCUPATION:"$row["occupation"],"<br>";
}
}
else {
echo "no results"; 
}

$conn->close();
?>

