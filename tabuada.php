<?php
// print_r($_GET);
$numero = $_GET["numero"];
for ($contador=1; $contador<=10; $contador++){
    $resultado = $numero * $contador;
    echo "$numero * $contador = $resultado<br>";
    
}












// $contador=1;
// while ($contador <=10){
//     $resultado = $numero * $contador;
//     echo "$numero * $contador = $resultado"."<br>";
//     $contador++;
// }