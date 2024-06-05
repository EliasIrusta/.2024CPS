<?php


date_default_timezone_set("America/Argentina/Buenos_Aires");

// d dia en digitos 02
//D dia en 3letras en ingles "MON"
//j numero de dia sin 0 inicial 5


$fecha_us = date("Y/m/d");
//echo $fecha_us;

echo '<br>';

$gpofechaHora = date("dGiMY");
echo "grupo fecha-hora militar: " . $gpofechaHora;

//ES MUY BUENO!

//para poner en español

function fechaEspLarga()
{



    $fecha_dia = date("d");
    $fecha_mes = date("m");
    $fecha_year = date("Y");

    $dia_semana = [
        "Monday" => "Lunes",
        "Tuesday" => "Martes",
        "Wednesday" => "Miercoles",
        "Thursday" => "Jueves",
        "Friday" => "Viernes",
        "Saturday" => "Sabado",
        "Sunday" => "Domingo",
    ];

    $meses_year = [
        "01" => "Enero",
        "02" => "Febrero",
        "03" => "Marzo",
        "04" => "Abril",
        "05" => "Mayo",
        "06" => "Junio",
        "07" => "Julio",
        "08" => "Agosto",
        "09" => "Septiembre",
        "10" => "Octubre",
        "11" => "Noviembre",
        "12" => "Diciembre",
    ];

    $fecha_final = $dia_semana[date("l")] . " " . $fecha_dia . " de " . $meses_year[$fecha_mes] . " de " . $fecha_year;

    return $fecha_final;
}
echo '<br>';
echo fechaEspLarga();



function fechaEspCorta($fecha = "")
{
    if ($fecha == "") {
        $fecha = date("d-m-Y");
    } else {
        $fecha = date("d-m-Y", strtotime($fecha));
    }

    $fecha = explode("-", $fecha);

    $fecha_dia = $fecha[0];
    $fecha_mes = $fecha[1];
    $fecha_year = $fecha[2];

    /* $fecha_dia=date("d");
    $fecha_mes=date("m");
    $fecha_year=date("Y");
 */
    /*     $dia_semana=[
        "Monday"=>"Lunes",
        "Tuesday"=>"Martes",
        "Wednesday"=>"Miercoles",
        "Thursday"=>"Jueves",
        "Friday"=>"Viernes",
        "Saturday"=>"Sabado",
        "Sunday"=>"Domingo",
    ]; */

    $meses_year = [
        "01" => "Enero",
        "02" => "Febrero",
        "03" => "Marzo",
        "04" => "Abril",
        "05" => "Mayo",
        "06" => "Junio",
        "07" => "Julio",
        "08" => "Agosto",
        "09" => "Septiembre",
        "10" => "Octubre",
        "11" => "Noviembre",
        "12" => "Diciembre",
    ];

    // $fecha_final=$dia_semana[date("l")]. " ".$fecha_dia." de ".$meses_year[$fecha_mes]. " de ".$fecha_year;
    $fecha_finalC = $fecha_dia . " de " . $meses_year[$fecha_mes] . " de " . $fecha_year;

    return $fecha_finalC;
}
echo '<br>';
echo fechaEspCorta();
echo '<br>';
echo fechaEspCorta("1991/07/26");
echo '<br>';
echo fechaEspCorta("1991/07/26");
echo '<br>';
$fecha_prueba="02-01-2021";
echo fechaEspCorta($fecha_prueba);
