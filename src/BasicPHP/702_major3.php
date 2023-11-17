<?php
$num1 = $_GET["num1"];
$num2 = $_GET["num2"];
$num3 = $_GET["num3"];

// Comprobamos que $num1 es el mayor de todos los números sin operadores lógicos. Con un if anidado
if ($num1 > $num2) {
    if ($num1 > $num3) {
        echo "El numero mayor es " . $num1;
    }
}

// Comprobamos que $num2 es el mayor de todos los números sin operadores lógicos. Con un if anidado
if ($num2 > $num1) {
    if ($num2 > $num3) {
        echo "El numero mayor es " . $num2;
    }
}

// Comprobamos que $num3 es el mayor de todos los números sin operadores lógicos. Con un if anidado
if ($num3 > $num1) {
    if ($num3 > $num2) {
        echo "El numero mayor es " . $num3;
    }
}

?>