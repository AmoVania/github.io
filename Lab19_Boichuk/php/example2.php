<?php
require("config.php");
//include_once("../db.php");
header("Content-Type: text/html; charset=".$config{'charset'});
?>
<html>
<head>
</head>
<body  style="background-color: #D0F0C0;">
<div  align="center" style="color:#40826D;font-weight:bold;font-size:150%">Вивід даних об'єктів класу Student, створивши метод getInfo()</div>
<?php 
class Student 
{
	public $name;
	public $surname;
	public $group;
	public function getInfo(){
		echo "<div align=\"center\"  style=\"color:#4682B4; font-size:120%;\">";
		echo "Ім'я: ".$this->name."<br>";
		echo "Прізвище: ".$this->surname."<br>";
		echo "Група: ".$this->group."</div><br>";
	}
}
$student1=new Student();
$student2=new Student();
$student3=new Student();
$student1->name="Сергій";
$student1->surname="Іваненко";
$student1->group="ІПЗ-11";
$student2->name="Ігор";
$student2->surname="Радченко";
$student2->group="КН-21";
$student3->name="Станіслав";
$student3->surname="Кириченко";
$student3->group="ІСТ-31";
$student1->getInfo();
$student2->getInfo();
$student3->getInfo();
?>
<h3 align="center"><a href="../lab17.php" style="color:#01796F;opacity: 0.7;">Назад</a><br></h3>
</body>
</html>
