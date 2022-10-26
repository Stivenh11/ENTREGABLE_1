<?php 
$horas_lab = $_GET['horas_lab'];
$valor_hora = $_GET['valor_hora'];

$sueldo = $horas_lab*$valor_hora;

echo "Horas Laboradas; ".$horas_lab." Valor Hora; ".$valor_hora;
echo "<br>";
echo "Sueldo es;".$sueldo;


?>