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
$array=array("firstValue"=>1,"secondValue"=>3,"thirdValue"=>6,"fourthValue"=>9,"fifthValue"=>12);
echo "<div align=\"center\" style=\"font-size:150%;font-weight:bold;color:#800000;\">";
foreach ($array as $temp) {
  echo $temp."^2=".$temp*$temp."<br>";
}
echo "</div>";
?>
<h3 align="center"><a href="../menu.html">Назад</a><br></h3>
</body>
</html>
