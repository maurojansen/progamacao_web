<?php
// programa para testar se num é positivo, negativo ou zero
$num = $_POST["num"];   // recebe o parâmetro num
//testa:
if ($num == 0) {
    echo "Igual a zero!";
} elseif ($num < 0) {
    echo "Negativo!";
} else {
    echo "Positivo!";
}
?>
