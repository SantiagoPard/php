<?php

include 'conexion_db.php';

$usr = $_POST['usr'];
$pwd = $_POST['pwd'];

session_start();

$conexionBD = new ConexionDb();

$server_db = '127.0.0.1';
$user_db = 'root';
$pwd_db = '';
$name_db = 'ejemplo_db';

if($conexionBD->validarConexion()){
    die("Error de conexion " . $conn->$conexionBD->validarConexion());
}else{
    $sql = 'select * from usuarios where username="'.$usr.'"and password="'.$pwd.'"';
    $usuarios = $conexionBD->execSQL($sql);
    if ($usuarios->num_rows > 0) {
        while($usuario = $usuarios->fetch_assoc()){
            $_SESSION['nombreUsuario']= $usuario['name'];
            break;
        }
        $conexionBD->close();
        header('location: http://127.0.0.1/php/datos_usuario.php');
    }else{
        echo '<h1>Datos Incorrectos</h1>';
        $conexionBD->close();
        session_destroy();
    }
          
}
// $conn = new mysqli($server_db, $user_db, $pwd_db, $name_db);

// if ($conn->connect_error) {
//     die("Error de conexion " . $conn->connect_error);
// } else {
//     $sql = 'select * from usuarios where username="' . $usr . '"and password="' . $pwd . '"';
//     $usuarios = $conn->query($sql);
//     if ($usuarios->num_rows > 0) {
//         while($usuario = $usuarios->fetch_assoc()){
//             $_SESSION['nombreUsuario']=$usuario['name'];
//             break;
//         }
//         $conn->close();
//         header('Location: http://127.0.0.1/php/datos_usuario.php');
//     }else{
//         echo '<h1>Datos incorrectos</h1>';
//         $conn->close();
//         session_destroy();
//     }
//     // if ($usr == 'admin' && $pwd == '12345') {
//     //     $_SESSION['nombreUsuario'] = 'Administrador';
//     //     // echo '<h1>Sesion Iniciada</h1>';
//     //     header('Location: http://127.0.0.1/PHP/datos_usuario.php');
//     // } else {
//     //     echo '<h1>Datos incorrectos</h1>';
//     //     session_destroy();
//     // }
// }
?>