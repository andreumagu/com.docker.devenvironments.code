<?php
class Persona{
    public $nombre;
    public $apellidos;
    public $sueldo;

    function __construct($nombre, $apellidos, $sueldo){
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->sueldo = $sueldo;
    }

    // Setters
    function setNombre($nombre){
        $this->nombre = $nombre;
    }

    function setApellidos($apellidos){
        $this->apellidos = $apellidos;
    }

    function setSueldo($sueldo){
        $this->sueldo = $sueldo;
    }


    // Getters
    function getNombre(){
        return $this->nombre;
    }

    function getApellidos(){
        return $this->apellidos;
    }

    function getSueldo(){
        return $this->sueldo;
    }

    // Metodos
    function getNombreCompleto(){
        return $this->nombre . " " . $this->apellidos;
    }

    function salePagar(){
        if ($this->sueldo >= 3333) {
            return true;
        }else{
            return false;
        }
    }
}

$persona1 = new Persona("Pepe", "Lopez Garcia", 1500);
$persona2 = new Persona("Jaun", "Camara Suerez", 5000);
echo $persona1->getNombreCompleto();
echo $persona2->salePagar();
?>