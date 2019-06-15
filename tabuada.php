<?php  
  //$num = 5;
  $num = $_POST["num"];

for ($x = 0; $x <= 10; $x++) {
  echo "$num x $x = " . ($num*$x) . "<br>";
}
?>  
