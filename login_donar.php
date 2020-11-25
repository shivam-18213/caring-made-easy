<!DOCTYPE html>
<html>
<head>
    <title>LOGIN</title>
</head>
<style>
.card_image{
  height:600px;
  width:800px;
  float:left;
  margin-left:40px;
}
.container_main{
  align-items:center;
}
.container_right{
  text-align: center;
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
  <img src="img/iip3.jpg" class="card_image" />
<form action="process_checking.php" method="get">
<div align="middle">
<h1> LOGIN </h1>
<table width="600" border="5" cellspacing="2" cellpadding="6" padding="50">
  <tr>
    <td>USERNAME:</td>
    <td><input type="text" name="user_name"></td>
  </tr>
    <td>Password:</td>
    <td><input type="password" name="passwo"></td>
  <tr>
    <td><a href=/localhost/phpmyadmin/phplessons/2ndsqlinj/updatepass.php></td>
    <td><input button type="submit"></td>
  </tr>
</table>
</div>
</form>
</body>
</html>
