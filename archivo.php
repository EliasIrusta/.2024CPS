<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
        <h3>subir un archivo php</h3>
        <form action="carga.php" method="POST" enctype="multipart/form-data" 
        class="formularioAjax">
            <input type="file" name="fichero" accept=".pdf">
            <br>
            <h5>archivo pdf, no mas grande que 3mb</h5>
            <button type="submit">enviar</button>
        </form>

        <form action="carga.php" method="POST" enctype="multipart/form-data" 
        class="formularioAjax">
            <input type="file" name="fichero" accept=".pdf">
            <br>
            <h5>archivo pdf, no mas grande que 3mb</h5>
            <button type="submit">enviar</button>
        </form>

        <script src="ajax.js"></script>
</body>

</html>