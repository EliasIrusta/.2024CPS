<?php



    if(!preg_match("/^[a-zA-Z]{3,10}$/",$_POST['usuario'])){
        echo "El usuario no coincide con el formato solicitado";
        exit();

    }

    if(!preg_match("/^[a-zA-Z0-9$@.-]{3,10}$/",$_POST['clave'])){
        echo "la clave no coincide con el formato solicitado";
        exit();

    }

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