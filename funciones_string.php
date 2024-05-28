<?php

$cadena_texto="Hola Mundo php";

/* echo strtolower($cadena_texto);
echo '<br>';
$cadena_texto=strtolower($cadena_texto);
echo '<br>';
echo $cadena_texto;
echo '<br>';
//$cadena_texto=strtoupper($cadena_texto); //todo a mayus
echo '<br>';
echo $cadena_texto;
echo '<br>';
//$cadena_texto=ucfirst($cadena_texto); //primera letra mayus
echo '<br>';
echo $cadena_texto;
echo '<br>';
$cadena_texto=ucwords($cadena_texto); //primera de cada palabra MAYUS
echo '<br>';
echo $cadena_texto;
echo '<br>';
 */

 //contar cdena
$longitud=strlen($cadena_texto);
echo $longitud;
echo '<br>';
echo $cadena_texto." tiene ".$longitud. " caracteres";
echo '<br>';
$palabras=str_word_count($cadena_texto);
echo $cadena_texto." tiene ".$palabras. " palabras";
echo '<br>';

