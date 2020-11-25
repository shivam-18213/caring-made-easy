<?php
include "establishing_connection.php"

$_sql="select email,user_name,passwo from blog2.users_blog2";

$result=$conn->query($_sql);
if($result>0){
while($row=$result->fetch_assoc()){
echo "username:".$row["user_name"]."email:".$row["email"]."password:".$row["passwo"]<br>;
}
}
echo"0 results";
$conn->close();
}
