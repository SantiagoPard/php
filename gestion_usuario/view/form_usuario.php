<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>
    <h1>Registrar usuario</h1>
    <form action="accion_registro_usuario.php" method="post">

        <label>
            <span>Id:</span>
            <input type="number" name="id" min="1" required>
            <br>
            <label>
                <span>Nombre:</span>
                <input type="text" name="name" required>
            </label>
            <br>
            <label>
                <span>Usuario:</span>
                <input type="text" name="username" required>
            </label>
            <br>
            <label>
                <span>Password</span>
                <input type="password" name="password" required>
            </label>
            <br>
            <button type="submit">Guardar</button>
        </label>

    </form>
</body>

</html>