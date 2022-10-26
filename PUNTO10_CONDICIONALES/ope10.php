
<?php 
$producto1 = $_GET['producto1'];
$totalcondescuento = $producto1*0.80;


if ($totalcondescuento >= 20000) {
  echo "SIN DESCUENTO".$producto1 ;
  echo "<br>";
  echo  "CON DESCUENTO".$totalcondescuento;
  echo  "Descuento 20% aplicado";

} else {
    echo  " debes comprar mas para aplicar el Descuento ";
    echo "<br>";
    echo "total;  ".$producto1;
}


?>