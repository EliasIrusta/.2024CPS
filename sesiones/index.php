<?php
session_name("LOGIN");
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sesiones en php</title>
</head>

<body>
    <?php
    echo session_id();
    echo "<br>";
 //   echo "has recargado esta pagina " . $_SESSION['contador'] . " veces";
    ?>

    <form action="login.php" method="POST">

        <label>Usuario</label>
        <input type="text" name="usuario" pattern="[a-zA-Z0-9$@.-]{3,10}"maxlength="30"> //[limita el tipo de caracteres] {limita la cantidad de caracteres}
        <br>
        <label>clave</label>
        <input type="password" name="clave" pattern="[a-zA-Z]{3,10}"maxlength="10">
        <br><br>
        <button type="submit">Login</button>

    </form>

</body>

</html>