<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<!-- lo unico raro con los form es el get y post -->

<form action="indexForm.php" method="POST">

<label for="asignatura">Asignatura</label>
<select  id="asignatura" name="asignatura[]" multiple>
    <option value="ingles">ingles</option>
    <option value="matematicas">Matematicas</option>
    <option value="ciencia">ciencia</option>
    <option value="fisica">fisica</option>
</select>
<br>


<label for="op1">
    <input type="checkbox" value="manzana" id="op1" name="frutas[]">
    manzana
</label>

<label for="op2">
    <input type="checkbox" value="banana" id="op2" name="frutas[]">
    banana
</label>
<label for="op3">
    <input type="checkbox" value="naranja" id="op3" name="frutas[]">
    naranja
</label>
<br>
<button type=submit>enviar</button>
<br>
</form>



<br>
</body>
</html>