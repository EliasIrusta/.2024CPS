<?php

    $edad=40;
    $genero="M";

    if($genero=="M"){
        if($edad>=60){
            echo"puede jubilarse";

        }else{
            echo"no puede jubilarse";
        }

    }elseif($genero=="F"){
        if($edad>=54){
            echo"puede jubilarse";

        }else{
            echo"no puede jubilarse";
        }

    }else{
        echo"coloque una opcion valida";
    }