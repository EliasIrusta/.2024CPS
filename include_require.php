<?php

    //include("for.php");
    //include("for.php");//muestra warning pero sigue la ejecucion
    
    //require("forX.php")//muestra warning y PARA la ejecucion
    require_once("for.php");// lo solicita una vez y si es llamado otra vez
    require_once("for.php");// no lo requiere.
    

