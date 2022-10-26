<?php 
$partidos_ganados = $_GET['partidos_ganados'];
$partidos_perdidos = $_GET['partidos_perdidos'];
$partidos_empatados = $_GET['partidos_empatados'];

$pganados = $partidos_ganados*3;
$pperdidos = $partidos_perdidos*0;
$pempatados = $partidos_empatados*1;

$puntos_finales = $pganados + $pperdidos + $pempatados;

echo "puntos ganados; ".$pganados;
echo "<br>";
echo  "puntos perdidos; ".$pperdidos;
echo "<br>";
echo "puntos empatados; ".$pempatados;
echo "<br>";
echo "puntuacion final; ".$puntos_finales;

?>