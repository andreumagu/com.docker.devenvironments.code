<?php
$nombre = $_GET["nombre"];
$apellido1 = $_GET["apellido1"];
$apellido2 = $_GET["apellido2"];
$email = $_GET["email"];
$anonaz = $_GET["anonaz"];
$telf = $_GET["telf"];

echo "<table>";
echo    "<tr>";
echo        "<th>Nombre</th>";
echo        "<th>Apellido 1</th>";
echo        "<th>Apellido 2</th>";
echo        "<th>Email</th>";
echo        "<th>Año de nacimiento</th>";
echo        "<th>Telefono</th>";
echo    "</tr>";
echo    "<tr>";
echo       "<td>" . $nombre . "</td>";
echo       "<td>" . $apellido1 . "</td>";
echo       "<td>" . $apellido2 . "</td>";
echo       "<td>" . $email . "</td>";
echo       "<td>" . $anonaz . "</td>";
echo       "<td>" . $telf . "</td>";
echo    "</tr>";
echo "</table>";
?>