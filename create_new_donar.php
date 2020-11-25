<!DOCTYPE html>
<html>
<head>
    <title> CREATING NEW DONAR </title>
</head>
<style>
.card_image{
  height:600px;
  width:800px;
  float:left;
  margin-left:40px;
}

body{
  background-color:rgb(222, 226, 227);
}
tr.odd{
  background-color: #efefef;
}
tr:hover{
  background-color: #c3e6e5;
}
</style>
<body>
  <img src="img/iip1.jpg" class="card_image" />
<form action="register.php" method="get">
<div align="middle">
<h1> DONAR REGISTRATION FORM </h1>
<table width="600" border="5" cellspacing="2" cellpadding="6" padding="50">
  <tr class="odd">
    <td>EMAIL:</td>
    <td> <input type="email" name="email"></td>
  </tr>
  <tr>
    <td>USERNAME:</td>
    <td><input type="text" name="user_name"></td>
  </tr>
    <td>Password:</td>
    <td><input type="password" name="passwo"></td>
  <tr class="odd">
    <td>&nbsp;</td>
    <td><input button type="submit"></td>
  </tr>
</table>
</div>
</form>
</body>
</html>
