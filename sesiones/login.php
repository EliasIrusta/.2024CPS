<?php

    if($_POST['usuario']=="carlos" && $_POST['clave']=="1234"){
        session_name("LOGIN");
    
        session_start();
        $_SESSION["nombre"]="carlos";
        $_SESSION["apellido"]="alfaro";
        $_SESSION["pais"]="Argentina";

        echo "sesion iniciada";

    }else{
        echo "datos incorrectos";
    }