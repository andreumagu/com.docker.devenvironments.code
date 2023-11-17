<?php

// Obtenemos el valor del número
$num = $_GET["num"];

// Comprobamos si el número es igual a 0
if ($num == 0) {
    echo "<p>El número es 0</p>";
}
// Comprobamos si el número es mayor que 0
if ($num > 0) {
    echo "<p>El número es positivo</p>";
}
// Comprobamos si el número es menor que 0
if ($num < 0) {
    echo "<p>El número es negativo</p>";
}

?>