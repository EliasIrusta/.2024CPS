<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=, initial-scale=1.0">
        <title>Document</title>
</head>

<body>


        <h1>prueba</h1>
        <?php
        //abro codigo de php
        //comentario de php
        /*
multiple
*/
        //tipos de datos
        /* 
echo TRUE;
echo '<br>';
//booleanos
var_dump(false);
echo '<br>';

//enteros
var_dump(7);
echo '<br>';
//flotantes(double)
var_dump(7.5);
echo '<br>';
//cadenas
var_dump("cadena 1","cadena 2");
echo '<br>';

//---------------

//variables
$_Nombre="EliasIrusta";
echo $_Nombre;
echo '<br>';
//constante:
define("Nombre","Carlos");
echo Nombre;
echo '<br>';
//version nueva
const CONSTANTE="constante";
echo CONSTANTE;
echo '<br>';
//array constante

define("alumnos",array("carlos","alba"," jose"));
echo alumnos[2];
echo '<br>';
//arrays

$estudiantesarray=["pepe","juan","pedro",7];
$estudiantesarray[2]="JAVIER";
echo $estudiantesarray[2];
echo $estudiantesarray[3];
echo '<br>';
#array asociativo, clave=>valor
$tutor=["nombre"=>"elias",
        "apellido"=>"Irusta",
        "edad"=>30 ,     
];
echo '<br>';
#modificar un valor de una clave del array:
$tutor["edad"]=32;
echo $tutor["edad"];
echo '<br>';
#array multiple dimension

$tutor2=["nombre"=>"elias",
        "apellido"=>"Irusta",
        "edad"=>30 ,     
        "cursos"=>["PHP","python","CSS"]
];
$tutor2["cursos"][1]="JS";


echo '<br>';
echo $tutor2["cursos"][1];
echo '<br>';


#contar elementos del array
echo count ($tutor);
echo '<br>';
echo count ($tutor2,COUNT_RECURSIVE);
echo '<br>';

#concatenar
$nombre="jony";
$pais="argentina";

echo $nombre.$pais;
echo '<br>';
#concatenar guardando en variable
$resultado=$nombre.$pais;
echo $resultado;
echo '<br>';
echo "mi pais de residencia es:".$pais;
echo '<br>';
#interpolacion solo con comillas dobles, se puede poner entre llaves
echo "mi nombre es: $nombre, mucho gusto, vivo en {$pais}";
echo '<br>';


// operadores

$numero_1=3;
$numero_2=4;
$suma=$numero_1+$numero_2;
echo "suma $numero_1 + $numero_2 = resultado = $suma";
echo '<br>';

#lo mismo para - , * , / , %
#jerarquia operadores: (), **,* o / , + o - , % (resto)

$resultado= 7-4+($numero_1*$numero_2);
echo $resultado;
echo '<br>';
#operadores de asignacion

//asignar =
//sumar y asignar +=
//restar y asignar -=
//mult y asig *=
//dividir /=
// concatenar y asignar .=     ej: $a.="es el valor de A"
 

$numero4=5;
$numero4+=5;

$texto="un texto concatenado a ";
$texto.="otroTEXTO";

echo $texto;
echo '<br>';

#video 12
//asignacion por referencia:
$texto1="Argentina";
$var1=$texto1;
$var2= &$texto1;

echo $var1;//vale texto1
echo $var2;//vale lo que tiene texto1
$texto1 = "Cambio de valor";
//echo $var2;//cambia por referencia a texto1

echo '<br>';

#video13
//operadores de comparacion

var_dump(1==="1") ;//con tipo de dato
$valor_1="2";
echo '<br>';
var_dump($valor_1==2);//sin tipo de dato
var_dump($valor_1!="7");//no tiene en cuenta el tipo de dato
// != no compara tipo de dato
// !== compara tipo de dato

*/
        #operadores logicos
        $valor_1 = 7;
        $valor_2 = 2;
        var_dump($valor_1 == 7 && 2 > 3); //>=
        echo '<br>';
        #operadores de incremento.. decremento..
        echo $valor_1;
        echo '<br>';
        $valor_1++;
        echo $valor_1;
        echo '<br>';

        #condicionales video 16
        #video 17 ternario
        (2>7) ? $total=10*7 : $total=10*8;
        echo $total;
        echo '<br>';
        $total=(9>7) ? $total=10*7 : $total=10*8;

        echo $total;

        //ejercicio de ternario
        





        //cierro codigo php
        ?>

        <div>
                <h4>condicionales en medio del html</h4>
                <?php if (9 >= 8) : ?>
                        <h4>expresion verdadera</h4>
                <?php endif; ?>
        </div>
</body>

</html>