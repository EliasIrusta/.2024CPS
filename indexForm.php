<?php
echo "funciona";
echo '<br>';
//var_dump($_POST['asignatura']);

foreach($_POST['asignatura'] as $asignatura){
    echo $asignatura."<br>";
}
//pasar por metodo post multiples select

$fruta=$_POST['frutas'];
foreach($fruta as $fruta){
    echo $fruta."<br>";
}
//pasar por metodo post multiples checkbox
