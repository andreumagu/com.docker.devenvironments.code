<?php
class Carrito{

    // Atributos
    public $productos = array();

    // Contructor
    function __construct(){
    }

    // Metodos

    // Muestra datos del producto
    function anadirProductos(){
        return "<br>Codigo: " . $this->titulo . "<br>Nombre: " . $this->autor . "<br>Precio: " . $this->anoPubli . "<br>";
    }
}
?>