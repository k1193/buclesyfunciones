<?php
 echo(" Clase 4 bucles, arreglos y funciones");
 //array indexado
 $arreglo=array("Carlos","Neymar","Dimaria","Jesús");
 echo("<br>");
 print_r($arreglo);
 echo("<br>..................................");

 //array asociativo

 $arreglo=array('usuario1'=>"Carlos",'usuario2'=>"Neymar",'usuario3'=>"Dimaria",'usuario4'=>"Jesús");
 echo("<br>");
 print_r($arreglo);
 echo("<br>..................................");

 //tamaño de arreglo

 $tamano=count($arreglo);
 echo("<br>");
 echo("El tamaño de nuestro arreglo es:".$tamano);
 echo("<br>..................................");
 echo("<br>");

 //Bucle for


 for($centinela=0; $centinela<=10;$centinela++){
     print("<br>El valor de centinela es:".$centinela."<br>");
 }

 // Bucle for  para recorrer arreglos
 echo("<br>..................................");
 echo("<br>");
 $arreglo=array("Carlos","Neymar","Dimaria","Jesús");
 
 for($centinela=0; $centinela<count($arreglo);$centinela++){
     echo("<br>".$arreglo[$centinela]."<br>");

 }

 //Bucles  foreach  para  recorrer  arreglos
 echo("<br>..................................");
 echo("<br>");
 $arreglo=array('usuario1'=>"Carlos",'usuario2'=>"Neymar",'usuario3'=>"Dimaria",'usuario4'=>"Jesús");
 foreach($arreglo as $clave=>$valor){
     echo("<br>"."La clave es:".$clave)."<br>";
     echo("<br>".$valor)."<br>";
 }
 //bucles foreach  para  arreglo  indexado
 echo("<br>..................................");
 echo("<br>");

 $arreglo=array("Carlos","Neymar","Dimaria","Jesús");
 foreach($arreglo as $clave=>$valor){
     echo("<br> La clave  del cajon es:".$clave);
     echo("<br> El valor del cajon es:".$valor);

 }


 //arreglo multidimensional(arreglo de arreglos)
 $usuarios=array(
     'usuario1'=>array('nombre'=>"Carlos",'edad'=>20,'sexo'=>"Masculino"),
     'usuario2'=>array('nombre'=>"Neymar",'edad'=>22,'sexo'=>"Masculino"),
     'usuario3'=>array('nombre'=>"Dimaria",'edad'=>23,'sexo'=>"Femenino"),
     'usuario4'=>array('nombre'=>"Jesús",'edad'=> 4,'sexo'=>"Masculino")
 );
  


 
 







 





?>