<?php
class Libro{

    // Atributos
    public $titulo;
    public $autor;
    public $anoPubli;

    // Contructor
    function __construct($titulo, $autor, $anoPubli){
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->anoPubli = $anoPubli;
    }

    // Metodos

    // Muestra datos del coche
    function obtenerInfo(){
        return "Titulo: " . $this->titulo . " / Autor: " . $this->autor . " / Año Publicación: " . $this->anoPubli . "<br>";
    }
}

class Biblioteca{

    // Atributos
    public $libros = array();

    // Contructor
    function __construct(){
    }

    // Metodos

    // Muestra todos los libros de la biblioteca
    function mostrarLibros(){
        $librosInfo = array();
        foreach ($this->libros as $libro) {
            $librosInfo[] = $libro->obtenerInfo();
            return implode("<br>", $librosInfo);
        }
    }

    // Añadir nuevo libro a la coleccion de libros de la biblioteca
    function agregarLibro($libro){
        array_push($this->libros, $libro);
    }

}

// Instaciamos objeto Biblioteca
$biblioteca = new Biblioteca();

// Instaciamos objetos Libro
$libro1 = new Libro("Luna de Pluton", "Dros", "2011");
$libro2 = new Libro("Don Quijote de la Mancha", "Cervantes", "1605");


// Agregamos el libro a la biblioteca
$biblioteca->agregarLibro($libro1);
$biblioteca->agregarLibro($libro2);

echo $biblioteca->mostrarLibros();



?>