<?php
$cantidad_1=12732.77;
$cantidad_2=1931.81;

//number_format(cantidad,decimales, sep_decimal, sep millar);
//parametros por defecto
//con un parametro, quita decimales, coloca coma, y redondea para arriba
echo number_format($cantidad_1);
echo '<br>';
//con dos parametros, usa punto para separar los decimales, redondea +
echo number_format($cantidad_1,1);
echo '<br>';
//parametro custom
//(cantidad,decimales, sep_decimal, sep millar);
echo number_format($cantidad_2,2,",",".");
echo '<br>';
