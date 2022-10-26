<?php 
$producto = $_GET['costo_inicial'];

$operaciondescuento =  $producto*0.15;

$preciofinal = $producto + $operaciondescuento;

echo "precio de venta sugerido final con ganacia de 15%;   ".$preciofinal ;
echo "<br>";
echo "ganancia 15% ;  ".$operaciondescuento;

?>