<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Inicio de sesion</title>
</head>

<body>
    <h1>iniciar sesion</h1>
    <form action="validar_sesion.php" method="post">
        <div>
            <label>usuario</label>
            <input type="text" name="usr" require>
        </div>
        <div>
            <label>contraseña</label>
            <input type="password" name="pwd" required>
        </div>
        <div>
            <button type="submit">Iniciar sesion</button>
        </div>
    </form>
</body>

</html>