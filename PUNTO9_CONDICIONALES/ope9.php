<?php 
$aprendiz = $_GET['aprendiz'];
$nota1 = $_GET['nota1'];
$nota2 = $_GET['nota2'];
$nota3 = $_GET['nota3'];


$aprobacion_nota1 = $nota1 * 0.30;
$aprobacion_nota2 = $nota2 * 0.30;
$aprobacion_nota3 = $nota3 * 0.40;

$suma_final = $aprobacion_nota1 + $aprobacion_nota2 + $aprobacion_nota3;

if( $suma_final >= 4.0 ){
echo "APROBADO";
}
else {
    echo "DESAPROBADO";
}





?>