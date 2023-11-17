<?php
// Obtenemos el valore de la variable dinero
$dinero = $_GET["dinero"];
// Igualamos $x a dinero para no perder el valor de $dinero
$x = $dinero;
// Iniciamos los valores de los contadores de dinero
$c500 = 0;
$c200 = 0;
$c100 = 0;
$c50 = 0;
$c20 = 0;
$c10 = 0;
$c5 = 0;
$c2 = 0;
$c1 = 0;

// Se entrara a el bucle for si el valor de $x es major o igual al billete o moneda
for ($i=1; $x >= 500 ; $i++) { 
    // Restamos el valor del billete a $x
    $x -= 500;
    // Igualamos el valor de $i (contador del for) con $c""" (contador de los billetes)
    $c500 = $i;
}
echo "<p>" . $c500 . " billetes de 500</p> ";

// Se entrara a el bucle for si el valor de $x es major o igual al billete o moneda
for ($i=1; $x >= 200 ; $i++) { 
    // Restamos el valor del billete a $x
    $x -= 200;
    // Igualamos el valor de $i (contador del for) con $c""" (contador de los billetes)
    $c200 = $i;
}
echo "<p>" . $c200 . " billetes de 200</p> ";

// Se entrara a el bucle for si el valor de $x es major o igual al billete o moneda
for ($i=1; $x >= 100 ; $i++) { 
    // Restamos el valor del billete a $x
    $x -= 100;
    // Igualamos el valor de $i (contador del for) con $c""" (contador de los billetes)
    $c100 = $i;
}
echo "<p>" . $c100 . " billetes de 100</p> ";

// Se entrara a el bucle for si el valor de $x es major o igual al billete o moneda
for ($i=1; $x >= 50 ; $i++) { 
    // Restamos el valor del billete a $x
    $x -= 50;
    // Igualamos el valor de $i (contador del for) con $c""" (contador de los billetes)
    $c50 = $i;
}
echo "<p>" . $c50 . " billetes de 50</p> ";

// Se entrara a el bucle for si el valor de $x es major o igual al billete o moneda
for ($i=1; $x >= 20 ; $i++) { 
    // Restamos el valor del billete a $x
    $x -= 20;
    // Igualamos el valor de $i (contador del for) con $c""" (contador de los billetes)
    $c20 = $i;
}
echo "<p>" . $c20 . " billetes de 20</p> ";

// Se entrara a el bucle for si el valor de $x es major o igual al billete o moneda
for ($i=1; $x >= 10 ; $i++) { 
    // Restamos el valor del billete a $x
    $x -= 10;
    $c10 = $i;
}
echo "<p>" . $c10 . " billetes de 10</p> ";

// Se entrara a el bucle for si el valor de $x es major o igual al billete o moneda
for ($i=1; $x >= 5 ; $i++) { 
    $x -= 5;
    // Igualamos el valor de $i (contador del for) con $c""" (contador de los billetes)
    $c500 = $i;
}
echo "<p>" . $c5 . " billetes de 5</p> ";

// Se entrara a el bucle for si el valor de $x es major o igual al billete o moneda
for ($i=1; $x >= 2 ; $i++) { 
    $x -= 2;
    // Igualamos el valor de $i (contador del for) con $c""" (contador de los billetes)
    $c2 = $i;
}
echo "<p>" . $c2 . " monedas de 2</p> ";

// Se entrara a el bucle for si el valor de $x es major o igual al billete o moneda
for ($i=1; $x >= 1 ; $i++) { 
    // Restamos el valor del billete a $x
    $x -= 1;
    // Igualamos el valor de $i (contador del for) con $c""" (contador de los billetes)
    $c1 = $i;
}
echo "<p>" . $c1 . " monedas de 1</p> ";
?>