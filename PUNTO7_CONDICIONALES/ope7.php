<?php 
$nombre = $_GET['Nombre'];
$asignatura = $_GET['asignatura'];
$calificacion = $_GET['calificacion'];

if ($calificacion <= 7) {
    echo  "ESTUDIANTE;  ".$nombre;
    echo "<br>";
    echo  "ASIGNATURA;  ".$asignatura;
    echo "<br>";
    echo "REPROBADO";
} else  {
    echo  "ESTUDIANTE;  ".$nombre;
    echo "<br>";
    echo  "ASIGNATURA;  ".$asignatura;
    echo "<br>";
    echo "APROBADO";
}


?>

