<?php
    session_name("LOGIN");
    
    session_start();

  

    if(isset($_SESSION['contador'])){
        $_SESSION['contador']++;

    }else{
        $_SESSION['contador']=1;
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo session_id();
    echo "<br>";
    echo "has recargado esta pagina ".$_SESSION['contador']." veces";
    echo "<br>";
    echo "<br>";
    echo "hola ".$_SESSION['nombre']."";
    echo "<br>";
    echo "hola ".$_SESSION['apellido']."";
    echo "<br>";
    echo "hola ".$_SESSION['pais']."";
    ?>
    <br>
    <br>
  
    <a href="cerrar.php">eliminar sesion</a>
</body>
</html>