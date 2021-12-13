<?php
require("config.php");
//include_once("../db.php");
header("Content-Type: text/html; charset=".$config{'charset'});
?>
<html>
<head>
</head>
<body  style="background-color: #D0F0C0;">
<div  align="center" style="color:#40826D;font-weight:bold;font-size:150%">Оголошення конструктора класу Student, створення  об'ктів з його використанням та вивід інформації про усі об'єкти класу Student</div>
<?php 
class Student 
{
	public $name;
	public $surname;
	public $group;
    function __construct($name,$surname, $group){
       $this->name=$name;
       $this->surname=$surname;
       $this->group=$group;
	}
	public function getInfo(){
		echo "<div align=\"center\"  style=\"color:#4682B4; font-size:120%;\">";
		echo "Ім'я: ".$this->name."<br>";
		echo "Прізвище: ".$this->surname."<br>";
		echo "Група: ".$this->group."</div><br>";
	}
}
$student1=new Student("Сергій","Іваненко","ІПЗ-11");
$student2=new Student("Ігор","Радченко","КН-21");
$student3=new Student("Станіслав","Кириченко","ІСТ-31");
$student1->getInfo();
$student2->getInfo();
$student3->getInfo();
$student4=new Student("Олександра", "Руденко","КН-31");
$student5=new Student("Юлія","Даниленко","ІПЗ-41");
$student6=new Student("Анастасія","Марченко","ІСТ-11");
$student4->getInfo();
$student5->getInfo();
$student6->getInfo();
?>
<h3 align="center"><a href="../lab17.php" style="color:#01796F;opacity: 0.7;">Назад</a><br></h3>
</body>
</html>
