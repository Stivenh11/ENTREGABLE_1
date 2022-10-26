<?php 
$cantidadvolantes = $_GET['cantidadvolantes'];
$cantidadposters = $_GET['cantidadposters'];
$cantidadtarjetas = $_GET['cantidadtarjetas'];

$preciovolantes =  $cantidadvolantes*2000;
 $precioposters = $cantidadposters*5000;
 $preciotarjetas = $cantidadtarjetas*500;
 $total = $preciovolantes +  $precioposters + $preciotarjetas;

 echo "cantidad volantes".$cantidadvolantes."precio_volantes".$preciovolantes;
 echo "<br>";
 echo "cantidad posters".$cantidadposters."precio_volantes".$precioposters;
 echo "<br>";
 echo "cantidad tarjetas".$cantidadtarjetas."precio_tarjetas".$preciotarjetas;
 echo "<br>";

 echo "total es".$total
?>