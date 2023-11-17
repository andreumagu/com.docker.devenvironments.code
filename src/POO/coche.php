<?php
class Coche{

    // Atributos
    public $marca;
    public $modelo;
    public $color;
    public $velocidad;

    // Contructor
    function __construct($marca, $modelo, $color){
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->color = $color;
        $this->velocidad = 0;
    }

    // Metodos

    // Muestra datos del coche
    function datosCoche(){
        return "Marca: " . $this->marca . " / Modelo: " . $this->modelo . " / Color: " . $this->color . " / Velocidad: " . $this->velocidad . "km/h <br>";
    }

    // Acelera el coche
    function modificarVelocidad($vel){
        if ($vel != 0) {
            $this->velocidad += $vel;
        }else{
            echo "La velocidad no puede ser 0";
        }
    }
}   

// Instaciamos objetos Coche
$coche1 = new Coche("Opel", "Corsa", "Rojo");
$coche2 = new Coche("Seat", "Leon", "Blanco");

// Mostramos datos de los coches
echo $coche1->datosCoche();
echo $coche2->datosCoche();

// Aceleramos un coche y frenamos el otro 10km/h
$coche1->modificarVelocidad(40);
$coche2->modificarVelocidad(300);

// Mostramos datos de los coches un vez modificados
echo $coche1->datosCoche();
echo $coche2->datosCoche();
?>