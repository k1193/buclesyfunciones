<?php

function calcularedad($nacimiento){
    $edad=(2021-$nacimiento);
    echo("La edad de la persona es:".$edad);
}


function calcularedad2($nacimiento,$actual){
    $edad=$actual-$nacimiento;
    echo("La edad de la persona es:".$edad);

}

 function calcularedad3($nacimiento,$actual){
     $edad=$actual-$nacimiento;
     return($edad);
 }

?>