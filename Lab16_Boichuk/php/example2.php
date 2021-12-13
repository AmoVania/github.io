<?php
require("config.php");
//include_once("../db.php");
header("Content-Type: text/html; charset=".$config{'charset'});
?>
<html>
<head>
</head>
<body>
<?php 
echo "<div align=\"center\" style=\"font-size:150%\">
<form action=\"forExample2.php\" method=\"post\">
<div style=\"color:#4682B4;font-weight:bold;\">Введіть дані:</div><br>
<table style=\"font-size:70%\">
<td>Прізвище <input type=\"text\" name=\"lastName\" style=\"font-size:120%\"></td>
<tr><td>Ім'я <input type=\"text\" name=\"firstName\" style=\"font-size:120%\"></td>
<tr><td>Вік <input type=\"text\" name=\"age\" style=\"font-size:120%\"></td>
<tr><td>E-mail <input type=\"text\" name=\"email\" placeholder=\"office@pnu.edu.ua\"style=\"font-size:120%\"></td>
<tr><td>Пароль <input type=\"password\" name=\"password\" style=\"font-size:120%\"></td>
<tr><td>Повторити пароль <input type=\"password\" name=\"repeatPassword\" style=\"font-size:120%\"><br></td>
</table>
<input type=\"submit\" value=\"Готово\"  style=\"font-size:120%; background-color:#808080; color:white; border-radius: 5px;\">
</form></div>"
?>
<h3 align="center"><a href="../menu.html">Назад</a><br></h3>
</body>
</html>
