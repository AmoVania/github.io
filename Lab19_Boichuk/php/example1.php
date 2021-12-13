<?php
require("config.php");
//include_once("../db.php");
header("Content-Type: text/html; charset=".$config{'charset'});
?>
<html>
<head>
</head>
<body  style="background-color: #D0F0C0;">
<div  align="center" style="color:#40826D;font-weight:bold;font-size:150%">В даному завданні створюється клас Student, 3 його об'єкти та задаються властивості кожному об'єкту</div>
<?php 
class Student 
{
	public $name;
	public $surname;
	public $group;
}
$student1=new Student();
$student2=new Student();
$student3=new Student();
$student1->$name="Сергій";
$student1->$surname="Іваненко";
$student1->$group="ІПЗ-11";
$student2->$name="Ігор";
$student2->$surname="Радченко";
$student2->$group="КН-21";
$student3->$name="Станіслав";
$student3->$surname="Кириченко";
$student3->$group="ІСТ-31";
?>
<h3 align="center"><a href="../lab17.php" style="color:#01796F;opacity: 0.7;">Назад</a><br></h3>
</body>
</html>
