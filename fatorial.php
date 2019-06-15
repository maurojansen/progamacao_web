<?php  
  //$num = 5;
  $num = $_POST["num"];
  // calcula o fatorial:
  $fatorial=1;
  echo $fatorial;
  for($c=2; $c<=$num; $c++) {
    echo " * $c ";
    $fatorial = $fatorial * $c;
  }
  echo " = " . $fatorial;
?>  
