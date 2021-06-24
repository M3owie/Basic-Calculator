<?php
     echo "<center><h1>ZEZAR IAN FERNANDO</center></h1><br>";
     
     echo"<br>";
     $num1 = "<center>Basic Calculator</center>";

     echo $num1;
     echo"<br>";
     echo"<br>";
     echo"<center>First Number:1</center>";
     echo"<br>";
     echo"<center>Second Number:2</center>";
     echo"<br>";
     echo"<br>";

     $first=1;  
     $second=2;  
     $add=$first+$second;  
     $sub=$first-$second;
     $mul=$first*$second;
     $div=$first/$second;
     echo "Addition: ",$add;  
     echo"<br>";
     echo "Subtraction: ",$sub;  
     echo"<br>";
     echo "Multiplacation: ",$mul;  
     echo"<br>";
     echo "Division: ",$div;  
     echo"<br>";
     echo"<br>";
     echo"<br>";



     define("GREETING", "Welcome!");
     echo"<br>";
 {
  echo GREETING;
 }
 echo"<br>";
 echo"<br>";


 var_dump('Alpha');
 echo"<br>";
 echo"<br>";




 function writeMsg($message) 
 {
 return "Your Message: $message";
}  
echo writeMsg("ASIA PACIFIC");
echo"<br>";
echo"<br>";


$cars = array("Volvo","BMW","Toyota");
echo $cars[2];
echo"<br>";
echo"<br>";
echo"<br>";
echo"<br>";

$favcolor = "red";
switch ($favcolor) {
    case "red":
      echo "Your favorite color is red!";
      break;
    case "blue":
      echo "Your favorite color is blue!";
      break;
    default:
      echo "Your favorite color is neither red and blue";
  }
?> 
