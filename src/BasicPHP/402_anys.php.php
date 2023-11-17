<?php
$edad = $_GET["edad"];

echo "<p>Dentro de 10 años tendra " . $edad+10 . " y sera " . date("Y")+10 . "</p>";
echo "<p>Hace 10 años tenia " . $edad-10 . " y era " . date("Y")-10 . "</p>";
echo "<p>Cuando se jubile sera " . (67-$edad)+date("Y") . "</p>";
?>