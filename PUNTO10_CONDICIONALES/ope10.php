
<?php 
$producto1 = $_GET['producto1'];
$producto2 = $_GET['producto2'];
$producto3 = $_GET['producto3'];
$suma = $producto1 + $producto2 + $producto3;
$totalcondescuento = $suma*0.80;


if ($suma >= 20000) {
  echo "SIN DESCUENTO".$suma;
  echo "<br>";
  echo  "CON DESCUENTO".$totalcondescuento;
  echo  "Descuento 20% aplicado";

} else {
    echo  " debes comprar mas para aplicar el Descuento ";
    echo "<br>";
    echo "total;  ".$suma;
}


?>