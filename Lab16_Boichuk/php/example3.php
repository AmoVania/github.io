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
$country["Ukraine"]=array("name"=>"Україна","capital"=>"Київ","population"=>"42");
$country["Japan"]=array("name"=>"Японія","capital"=>"Токіо","population"=>"126");
$country["USA"]=array("name"=>"США","capital"=>"Вашингтон","population"=>"328");
 echo "<table align=\"center\" style=\"font-size:120%; border-color:#cacaf6; font-weight:bold;\" border=\"5px\" cellspacing=\"10\" cellpadding=\"10\">";
     echo "<tr style=\"color:#003399;\">";
   	 echo "<td>"."Назва"."</td>"."<td>"."Столиця"."</td>"."<td>"."Населення, млн.ч </td>";
     echo "</tr>";
     foreach ($country as $temp) {
     echo "<tr style=\"color:#4682B4;\">";
     foreach ($temp as $key => $value) {
     		echo "<td>".$value."</td>";
     	}
     echo "</tr>";
     }
     echo "</table>";
     //////////////////////////////////////////////////////////////////////////////////////
     echo "<br><div align=\"center\" style=\"color:#003153;font-size:120%;font-weight:bold;width: 450px;margin: auto;border: 3px solid #708090;\">";
     foreach ($country as $temp) {
     foreach ($temp as $key => $value) {
     	    if($key=="name"){
     		echo $value.":";
     	     }
     		 elseif ($key=="capital") {
     		 	echo "столиця - ".$value;
     		 }
     		 else{
     		 	echo ", населення - ".$value." млн.ч";
     		 }
     	}
     	echo "<br>";
     }
     echo "</div><br>";
 //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
     asort($country);
     echo "<div align=\"center\" style=\"color:#008080;font-size:120%;font-weight:bold;width: 260px;margin: auto;border: 3px solid 	#30D5C8;\">";
     foreach ($country as $key => $temp) {
     	echo $key.":<br>";
     foreach ($temp as $key1 => $value) {   	   
     		echo $key1."=>".$value."<br>";
     	}
     	echo "<br>";
     }
     echo "</div><br>";
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    echo "<div style=\"color:#8B00FF;font-weight:bold;font-size:120%;margin: auto;width: 320px;border: 3px solid #ABCDEF; padding: 10px;\">";
    echo "<pre>"; 
    print_r($country); 
    echo "</pre>";
    echo "</div>";
?>
<h3 align="center"><a href="../menu.html">Назад</a><br></h3>
</body>
</html>
