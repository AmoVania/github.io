<?php
require("config.php");
header("Content-Type: text/html; charset=".$config{'charset'});
?>
<html>
<head>
</head>
<body>
<?php 
// if(isset($_POST['lastName'])) $arrayOfRegistration['Last name']=$_POST['lastName'];
// if(isset($_POST['firstName'])) $arrayOfRegistration['First name']=$_POST['firstName'];
// if(isset($_POST['age'])) $arrayOfRegistration['Age']=$_POST['age'];
// if(isset($_POST['email'])) $arrayOfRegistration['E-mail']=$_POST['email'];
// if(isset($_POST['password'])) $arrayOfRegistration['Password']=$_POST['password'];
// if(isset($_POST['repeatPassword'])) $arrayOfRegistration['Repeat password']=$_POST['repeatPassword'];
   if($_POST['lastName']!=""&&
   	  $_POST['firstName']!=""&&
   	  $_POST['age']!=""&&
   	  $_POST['email']!=""&&
   	  $_POST['password']!=""&&
   	  $_POST['repeatPassword']!=""&&
   	  $_POST['password']==$_POST['repeatPassword']){
     $arrayOfRegistration['Last name']=$_POST['lastName'];
     $arrayOfRegistration['First name']=$_POST['firstName'];
     $arrayOfRegistration['Age']=$_POST['age'];
     $arrayOfRegistration['E-mail']=$_POST['email'];
     $arrayOfRegistration['Password']=$_POST['password'];
     $arrayOfRegistration['Repeat password']=$_POST['repeatPassword'];
     echo "<table align=\"center\" style=\"font-size:120%; border-color:#cacaf6; font-weight:bold;\" border=\"5px\" cellspacing=\"10\" cellpadding=\"10\">";
     foreach ($arrayOfRegistration as $key => $value) {
     echo "<tr>";
   	 echo "<td style=\"color:#003399;\">".$key."</td>"."<td style=\"color:#4682B4;\">".$value."</td>";
     echo "</tr>";
     }
     echo "</table>";
   }
   else{
   	echo "<div align=\"center\" style=\"color:red; font-size:120%;\">Всі поля не заповнені або паролі не співпадають</div>
   	<br> <div align=\"center\"><a align=\"center\"href=\"example2.php\">Повторити спробу</a></div>";
   }
?>
<h3 align="center"><a href="example2.php">Назад</a><br></h3>
</body>
</html>
