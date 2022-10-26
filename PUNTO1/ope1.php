<?php 
$velocidad = $_GET['velocidad'];
$tiempo = $_GET['tiempo'];
$operaciondis = $velocidad*$tiempo;

echo "la distancia recorrida es de: ".$operaciondis." m ";

?>