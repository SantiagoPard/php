<?php
$personas = [
    ["nombre" => "juan", "ciudad" => "tunja", "edad" => 20],
    ["nombre" => "Ana", "ciudad" => "Bogotá", "edad" => 25],
    ["nombre" => "Pedro", "ciudad" => "Sogamoso", "edad" => 17],
]; //arrray indexado

?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>
    <h1>hola mundo!!!</h1><br>
    <?php
    foreach ($personas as $persona) {
        echo ($persona['edad'] > 18) ? '<font color="blue">' : '<font color="red">'; //operador
        echo 'hola ' . $persona['nombre'] . ', bienvenido a ' . $persona['ciudad'] . ' su edad es ' . $persona['edad'];
        echo '</font>';
        echo '<br>';
    }
    ?>
    <form action="saludar.php" method="post">
        <div>
            <label>Nombre</label>
            <input type="text" name="nombreIn" require>
        </div>
        <div>
        <label>Ciudad:</label>
            <select name="ciudadIn">
                <option>bogota</option>
                <option>Sogamoso</option>
                <option selected>Tunja</option>
            </select>
        </div>
        <div>
            <label>Edad:</label>
            <input type="number" name="edadIn" min="1" max="130" require>
        </div>
        <div>
            <button type="submit">saludar</button>
        </div>
    </form>
</body>

</html>