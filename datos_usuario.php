<?php
    session_start();
    if(empty($nombreUsuario = $_SESSION['nombreUsuario'])){
        header("Location: http://127.0.0.1/php/inicio_sesion.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h1>Bienvenido <?php echo $nombreUsuario; ?></h1>
</body>
</html>