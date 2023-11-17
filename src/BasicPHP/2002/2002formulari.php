<?php
$filas = $_GET["filas"];
$columnas = $_GET["columnas"];

$x = 0;
$y = 0;

echo "<table>";
for ($y=0; $y <= $filas; $y++) {
    echo "<tr>";
    for ($x=0; $x <= $columnas; $x++) { 
        echo "<td>" . $x . "," . $y . "</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>