<?php
require("config.php");
header("Content-Type: text/html; charset=".$config{'charset'});
?>
<html>
<head>
  <style>
    .title{
      margin: auto;
      width: 500px;
    }
    .span1{
      color:#003399;
      font-size:120%;
      font-weight:bold;
    }
    .span2{
      color:#4682B4;
      font-size:120%;
      font-weight:bold;
    }
  </style>
</head>
<body>
<?php 
if ( isset($_POST['radioButton'])&&
  isset($_POST['specialty'])&&
   (isset($_POST['checkbox1'])||
   isset($_POST['checkbox2'])||
   isset($_POST['checkbox3'])||
   isset($_POST['checkbox4'])||
   isset($_POST['checkbox5']))&&
   isset($_POST['hobbies'])){
echo "<div align=\"center\" style=\"color:#4682B4;font-weight:bold;font-size:150%\">Анкета:</div>";
if($_POST['radioButton'] === "1") $course=1;
if($_POST['radioButton'] === "2") $course=2;
if($_POST['radioButton'] === "3") $course=3;
if($_POST['radioButton'] === "4") $course=4;
$specialty=$_POST['specialty'];
$i=0;
if(isset($_POST['checkbox1'])){ $programmingLanguage[$i]=$_POST['checkbox1'];$i++;}
if(isset($_POST['checkbox2'])){ $programmingLanguage[$i]=$_POST['checkbox2'];$i++;}
if(isset($_POST['checkbox3'])){ $programmingLanguage[$i]=$_POST['checkbox3'];$i++;}
if(isset($_POST['checkbox4'])){ $programmingLanguage[$i]=$_POST['checkbox4'];$i++;}
if(isset($_POST['checkbox5'])){ $programmingLanguage[$i]=$_POST['checkbox5'];$i++;}
$k=0;
foreach($_POST['hobbies'] as $values){
  $hobbies[$k]=$values;
  $k++;
}
echo "<div align=\"center\">";
echo "<div align=\"left\" class=\"title\"><span class=\"span1\">Курс: </span><span class=\"span2\">$course</span><br></div>";
echo "<div align=\"left\" class=\"title\"><span class=\"span1\">Cпеціальність: </span><span class=\"span2\">$specialty</span><br></div>";
echo "<div align=\"left\" class=\"title\"><span class=\"span1\">Мови програмування: </span><span class=\"span2\">";
for ($i=0;$i<count($programmingLanguage);$i++) {
  if($i<count($programmingLanguage)-1)
  echo $programmingLanguage[$i].", ";
  else echo $programmingLanguage[$i];
}
echo "</span><br></div>";
echo "</div>";
echo "<div align=\"left\" class=\"title\"><span class=\"span1\">Захоплення: </span><span class=\"span2\">";
for ($i=0;$i<count($hobbies);$i++) {
  if($i<count($hobbies)-1)
  echo $hobbies[$i].", ";
  else echo $hobbies[$i];
}
echo "</span><br></div>";
echo "</div>";
}
else echo "<div align=\"center\" style=\"color:red; font-size:120%;\">Ви не відповіли на всі запитання</div>
    <br> <div align=\"center\"><a align=\"center\"href=\"example4.php\">Повторити спробу</a></div>";
?>
<h3 align="center"><a href="example4.php">Назад</a><br></h3>
</body>
</html>
