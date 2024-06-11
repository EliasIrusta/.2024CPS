<?php

    if($_POST['usuario']=="carlos" && $_POST['clave']=="1234"){
        session_name("LOGIN");
    
        session_start();
        $_SESSION["nombre"]="carlos";
        $_SESSION["apellido"]="alfaro";
        $_SESSION["pais"]="Argentina";

            
        if(headers_sent()){
            echo "<script> window.location.href='contador.php' ;</script>";
        }else{
            header("Location: contador.php");
        }
    }else{
        echo "datos incorrectos";
    }