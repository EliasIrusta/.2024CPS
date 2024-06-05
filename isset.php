<?php
$numero="4";

//unset($numero);//elimina la variable




if(is_null($numero)){
    echo "es nula";
}else{
    echo "no es nula";
}

echo "<br>";
if(empty($numero)) {
    echo "esta vacia";
}else{
    echo "no esta vacia";
}

echo "<br>";
if(isset($numero)) {
    echo "esta definida";
}else{
    echo "no esta definida";
}