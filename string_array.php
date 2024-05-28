<?php

$fecha_1="2024/05/28";
$fecha_2="1991-07-26";
$numeros="uno dos tres cuatro cinco seis siete";

//explode(delimitador,string,limitador);
$array_fecha=explode("/",$fecha_1);
echo $array_fecha[0];
echo '<br>';

$array_fecha2=explode("-",$fecha_2);

echo $array_fecha2[1];
echo '<br>';
#funcion del limitador:
$array_numeros=explode(" ",$numeros,3); 
//divido  el array 3 veces, la ultima posicion contendrá el resto del array
echo $array_numeros[2];
echo '<br>';
//si coloco valor negativo toma todos menos los ultimos
$array_numeros2=explode(" ",$numeros,-1); 

echo $array_numeros2[5];
echo '<br>';