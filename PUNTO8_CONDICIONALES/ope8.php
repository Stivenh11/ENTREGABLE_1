<?php 
$edad = $_GET['edad'];
$sexo = $_GET['sexo'];
 
if ($sexo == "masculino" && $edad >= 63) {
    echo "PUEDES PENSIONARTE";
} elseif ($sexo == "masculino" && $edad < 63) {
    echo " AUN NO PUEDES PENSIONARTE";
    
} elseif ($sexo == "femenino" && $edad > 54){
    echo "PUEDES PENSIONARTE";
}elseif ($sexo == "femenino" && $edad < 54) {
    echo " AUN NO PUEDES PENSIONARTE";}






?>