<?php
class Persona{
    public $nombre;
    public $edad;

    function __construct($nombre, $edad){
        $this->nombre = $nombre;
        $this->edad = $edad;
    }

    // Metodos
    function mostrarInfo(){
        return "Nombre: " . $this->nombre . " / Edad:" . $this->edad . "<br>";
    }
}

$persona1 = new Persona("Pepe", 33);
$persona2 = new Persona("Juan", 54);

echo $persona1->mostrarInfo();
echo $persona2->mostrarInfo();
?>