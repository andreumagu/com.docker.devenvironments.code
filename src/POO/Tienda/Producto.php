<?php
class Producto{

    // Atributos
    public $codigo;
    public $nombre;
    public $precio;

    // Contructor
    function __construct($codigo, $nombre, $precio){
        $this->codigo = $codigo;
        $this->nombre = $nombre;
        $this->precio = $precio;
    }

    function getCodigo($producto){
        return $producto->codigo;
    }

    // Metodos

    // Muestra datos del producto
    function obtenerInfo(){
        return "<br>Codigo: " . $this->codigo . "<br>Nombre: " . $this->nombre . "<br>Precio: " . $this->precio . "<br>";
    }
}

class Carrito{

    // Atributos
    public $productos = array();

    // Contructor
    function __construct(){
    }

    // Metodos

    function verCarrito(){
        for ($i=0; $i < count($this->productos); $i++) { 
            echo "<br>" . var_dump($this->productos[$i]) . "<br>";
            
        }
    }

    // Añadir producto al carrito
    function anadirProductos($producto, $cantidad){
        $flag = true;
        $productoCarrito = ["producto"=>$producto,"cantidad"=>$cantidad];
        array_push($this->productos, $productoCarrito);
        // if ($flag == true) {
        //     array_push($this->productos, array($producto,$cantidad));
        //     return "Producto añadido";
        // }else{
        //     return "Producto incrementado";
        // }
    }

    // Eliminar producto del carrito
    function eliminarProductos($codigo, $cantidad){
        $i = 0;
        while ($i < count($this->productos)) { 
            $producto = $this->productos[$i]["producto"];
            if ($producto && $producto->codigo == $codigo) {
                if ($this->productos[$i]["cantidad"] == $cantidad) {
                    unset($this->productos[$i]);
                    return "Producto eliminado";
                } elseif ($this->productos[$i]["cantidad"] > $cantidad) {
                    $this->productos[$i]["cantidad"] -= $cantidad;
                    return "Producto " . $producto->nombre . " ha reducido a " . $this->productos[$i]["cantidad"];
                } elseif ($this->productos[$i]["cantidad"] < $cantidad) {
                    return "Producto " . $producto->nombre . " tiene " . $this->productos[$i]["cantidad"] . " no puedes quitar " . $cantidad;
                }
            }
            $i++;
        }
        return "No existe ese producto";
    }
}

$carrito = new Carrito();
$producto1 = new Producto("1234", "Patata", 1);
$producto2 = new Producto("5678", "Manzana", 2);

$carrito->anadirProductos($producto1, 2);
$carrito->anadirProductos($producto2, 3);

$carrito->verCarrito();

$carrito->eliminarProductos("1234", 2);
$carrito->eliminarProductos("5678", 1);

var_dump($carrito->productos);

$carrito->verCarrito();

?>