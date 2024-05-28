<?php

$fruta = "manzana";

switch ($fruta) {
    case "es banana":
        echo "banana";
        break;
    case "manzana":
        echo ("es manzana");
        break;
    default:
        echo "no es fruta";
}
echo '<br>';


$dia = 0;

switch ($dia) {
    case 1:
        echo "lunes";
        break;
    case 2:
        echo "martes";
        break;
    case 3:
        echo "miercoles";
        break;
    case 4:
        echo "jueves";
        break;
    case 5:
        echo "viernes";
        break;
    case 6:
        echo "sabado";
        break;
    case 7:
        echo "domingo";
        break;
    default:
        echo "no es valido";
}
