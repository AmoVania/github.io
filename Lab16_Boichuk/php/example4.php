<?php
require("config.php");
//include_once("../db.php");
header("Content-Type: text/html; charset=".$config{'charset'});
?>
<html>
<head>
<style>
.question{
	color:#008080;
	font-weight:bold;
}
</style>	
}
</head>
<body>
<?php 
echo "<div align=\"center\" style=\"font-size:150%\">
<form action=\"forExample4.php\" method=\"post\">
<div style=\"color:#4682B4;font-weight:bold;\">Анкета:</div><br>


<div class=\"question\">Виберіть курс, на якому ви навчаєтесь:</div>
<div style=\"margin: auto;width: 60px;font-size:120%\">
<input type=\"radio\" name=\"radioButton\" value=\"1\">1<br>
<input type=\"radio\" name=\"radioButton\" value=\"2\">2<br>
<input type=\"radio\" name=\"radioButton\" value=\"3\">3<br>
<input type=\"radio\" name=\"radioButton\" value=\"4\">4<br>
</div>


<div class=\"question\">Виберіть вашу спеціальність:</div><br>
<div style=\"margin: auto;width: 520px;\">
<select style=\"font-size:120%\" name=specialty size=1>
<option value=\"Комп'ютерні науки\"> Комп'ютерні науки </option>
<option value=\"Прикладна математика\"> Прикладна математика </option>
<option value=\"Інженерія програмного забезпечення\"> Інженерія програмного забезпечення </option>
<option value=\"Інформаційні системи та технології\"> Інформаційні системи та технології </option>
</select><br>
</div>

<div class=\"question\">Виберіть мови програмування, якими володієте:</div><br>
<div align=\"left\" style=\"margin: auto;width: 170px;font-size:120%\">
<input type=\"checkbox\" name=\"checkbox1\" value=\"JavaScript\">JavaScript<br>
<input type=\"checkbox\" name=\"checkbox2\" value=\"PHP\">PHP<br>
<input type=\"checkbox\" name=\"checkbox3\" value=\"JAVA\">JAVA<br>
<input type=\"checkbox\" name=\"checkbox4\" value=\"C++\">C++<br>
<input type=\"checkbox\" name=\"checkbox5\" value=\"Phyton\">Phyton<br>
<br>
</div>

<div class=\"question\">Виберіть ваші захоплення:</div><br>
<div style=\"margin: auto;width: 240px;\">
<select style=\"font-size:120%\" name=hobbies[] size=4 multiple>
<option value=\"Спорт\"> Спорт </option>
<option value=\"Подорожування\"> Подорожування </option>
<option value=\"Комп'ютерні ігри\"> Комп'ютерні ігри </option>
<option value=\"Програмування\"> Програмування </option>
</select>
</div>

<div  align=\"center\">
<input type=\"submit\" value=\"Готово\"  style=\"font-size:120%; background-color:#808080; color:white; border-radius: 5px;\"></div>
</form></div>"
?>
<h3 align="center"><a href="../menu.html">Назад</a><br></h3>
</body>
</html>
