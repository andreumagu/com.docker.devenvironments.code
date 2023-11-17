<?php
class Estudiante{

    // Atributos
    public $nombre;
    public $apellido;
    public $edad;
    public $nota;

    // Contructor
    function __construct($nombre, $apellido, $edad , $nota){
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->edad = $edad;
        $this->nota = $nota;
    }
}

function mostrarEstudiantes($arrayEstudientes){
    echo "<table>";
    echo "<tr>";
    echo "<th>Nombre</th>";
    echo "<th>Apellido</th>";
    echo "<th>Edad</th>";
    echo "<th>Nota</th>";
    echo "</tr>";
    for ($i=0; $i < count($arrayEstudientes); $i++) { 
        echo "<tr>";
        echo "<td>" . $arrayEstudientes[$i]->nombre . "</td>";
        echo "<td>" . $arrayEstudientes[$i]->apellido . "</td>";
        echo "<td>" . $arrayEstudientes[$i]->edad . "</td>";
        echo "<td>" . $arrayEstudientes[$i]->nota . "</td>";
        echo "</tr>";
    }
    echo "</table>";
    echo "<br>";
}

function mejoresNotas($arrayEstudientes){
    $notasSuma = 0;
    $notaMedia = 0;

    for ($i=0; $i < count($arrayEstudientes); $i++) { 
        $notasSuma += $arrayEstudientes[$i]->nota;
    }

    $notaMedia = ($notasSuma/count($arrayEstudientes));

    for ($i=0; $i < count($arrayEstudientes); $i++) { 
        if ($arrayEstudientes[$i]->nota > $notaMedia) {
            echo "<br>" . $arrayEstudientes[$i]->nombre;
        }
    }
}

$estudiante1 = new Estudiante("Pepe", "Gomez", 15, 5);
$estudiante2 = new Estudiante("Ana", "López", 18, 7);
$estudiante3 = new Estudiante("Carlos", "Martínez", 16, 6);
$estudiante4 = new Estudiante("Laura", "Rodríguez", 17, 8);
$estudiante5 = new Estudiante("Sofía", "Fernández", 16, 9);
$estudiante6 = new Estudiante("Mateo", "Díaz", 14, 4);
$estudiante7 = new Estudiante("Isabella", "García", 15, 8);
$estudiante8 = new Estudiante("Juan", "Pérez", 17, 6);

$arrayEstudientes = array();

array_push($arrayEstudientes, $estudiante1);
array_push($arrayEstudientes, $estudiante2);
array_push($arrayEstudientes, $estudiante3);
array_push($arrayEstudientes, $estudiante4);
array_push($arrayEstudientes, $estudiante5);
array_push($arrayEstudientes, $estudiante6);
array_push($arrayEstudientes, $estudiante7);
array_push($arrayEstudientes, $estudiante8);


mostrarEstudiantes($arrayEstudientes);

mejoresNotas($arrayEstudientes);



?>