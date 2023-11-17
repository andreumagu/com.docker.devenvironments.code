<?php

// Obtenemos los valores de los números
$num1 = $_GET["num1"];
$num2 = $_GET["num2"];
$num3 = $_GET["num3"];

// Comprobamos si $num1 es el mayor de todos los números con operadores lógicos
if ($num1 > $num2 && $num1 > $num3) {
    echo "El número más alto es el " . $num1; 
}

// Comprobamos si $num2 es el mayor de todos los números con operadores lógicos
if ($num2 > $num1 && $num2 > $num3) {
    echo "El número más alto es el " . $num2; 
}

// Comprobamos si $num3 es el mayor de todos los números con operadores lógicos
if ($num3 > $num2 && $num3 > $num1) {
    echo "El número más alto es el " . $num3; 
}

?>

<!-- http://localhost/BasicPHP/802major3c.php?num1=3&num2=1&num3=0 -->