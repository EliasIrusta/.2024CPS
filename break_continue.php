<?php

$pc = ["so", "ssd", "gpu", "ram", "cpu"];
foreach ($pc as $componente) {
    if ($componente == "gpu") {
        continue; //omite la condicion, sigue con el ciclo
        // break; //corta el ciclo
    }

    echo $componente . "<br>";
}




for ($i = 1; $i <= 10; $i++) {
    if ($i == 5) {
        continue;
    }
    echo $i . "<br>";
} 
//saltea la condicion

$i = 1; 
while($i <= 10){
    if ($i==5){
        $i++;
        continue;
    
    }
    echo $i.'<br>';
    $i++;
}
