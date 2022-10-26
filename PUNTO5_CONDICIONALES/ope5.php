<?php 
$edad1 = $_GET['edad1'];
$edad2 = $_GET['edad2'];
$difrenciaedad = $edad1-$edad2;
if($edad1 == $edad2){
    echo "tienen la misma edad";
}elseif ($edad1 > $edad2) {
    $difrenciaedad = $edad1-$edad2;
    echo "la edad del hermano 1 es mayor por" .$difrenciaedad. "años";
} else {
    
    $difrenciaedad2 = $edad2-$edad1;
    echo "la edad del hermano 2 es mayor por" .$difrenciaedad2. "años";

}
?>

