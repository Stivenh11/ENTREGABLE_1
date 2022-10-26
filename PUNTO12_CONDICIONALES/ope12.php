<?php 
$capital = $_GET['capital'];

$interes2 = $capital*0.02;
$interes45 = $capital*0.045;
$interes7= $capital*0.07;

$totalcapital7 = $capital+$interes7;
$totalcapital2 = $capital+$interes2;;
$totalcapital45 = $capital+$interes45;;
 
if ($capital < 500) {
    echo "TU CAPITAL ES MENOR A 500, Y TU RENTABILIDAD DE INTERES ES DE 2% LO QUE EQUIVALE A ;".$interes2 ;
    echo "TU CAPITAL TOTAL".$totalcapital2;


} elseif ($capital >= 500 && $capital< 4500 ) {
    echo "TU CAPITAL ES MAYOR O IGUAL A 500 Y MENOR A 4500, Y TU RENTABILIDAD DE INTERES ES DE 4.5% LO QUE EQUIVALE A ;".$interes45 ;
    echo "TU CAPITAL TOTAL".$totalcapital45;

    
} elseif ($capital >= 4500){
    echo "TU CAPITAL ES MAYOR O IGUAL A 4500, Y TU RENTABILIDAD DE INTERES ES DE 7% LO QUE EQUIVALE A ;".$interes7 ;
    echo "TU CAPITAL TOTAL".$totalcapital7 ;
}



