
<?php 
$nota1 = $_GET['nota1'];
$nota2 = $_GET['nota2'];
$nota3 = $_GET['nota1'];
$nombre_estudiante = $_GET['nombre_estudiante'];
$asignatura = $_GET['asignatura'];

$opepromedio = ($nota1+$nota2+$nota3)/3 ;

echo  "estudiante: ".$nombre_estudiante; 
echo "<br>";
 echo " asignatura ".$asignatura;
 echo "<br>";
  echo " El promedio del estudiante es ; ".$opepromedio ;

?>