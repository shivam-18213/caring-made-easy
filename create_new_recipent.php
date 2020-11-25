<!DOCTYPE html>
<html>
<head>
    <title> PHP - MySQL Lesson </title>
</head>
<style>
  body {
  background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
  background-size: 400% 400%;
  animation: gradient 15s ease infinite;
   
}

@keyframes gradient {
  0% {
    background-position: 0% 50%;
  }
  50% {
    background-position: 100% 50%;
  }
  100% {
    background-position: 0% 50%;
  }
}
.img{
  position: absolute;
  left: 250px;
  top: 300px;
  border-radius: 8px;
  padding: 5px;
  border:1px solid #ddd;
}

}
</style>
<body>
  <img src="/opt/lampp/phpmyadmin/phplessons/iip/img/donate.jpg" class="img">
<form action="register_recipent.php" method="post">
<div align="middle">
<img src="/opt/lampp/phpmyadmin/phplessons/iip/img/donate.jpg" class="img">
<h1> RECIPANT REGISTRATION FORM </h1>
<table width="600" border="5" cellspacing="2" cellpadding="6" padding="50">
  <tr>
    <td>First Name:</td>
    <td> <input type="text" name="fname"></td>
  </tr>
  <tr>
    <td>Last Name:</td>
    <td><input type="text" name="lname"></td>
  </tr>
    <td>Occupation</td>
    <td><input type="txt" name="occu"></td>
  <tr>
    <td>TYPE LO FOR LOAN AND SD FOR SIMPLE DONATION?</td>
    <td><input type="txt" name="need"></td>
  <tr>
    <td>&nbsp;</td>
    <td><input button type="submit"></td>
  </tr>
</table>
</div>
</form>
</body>
</html>
