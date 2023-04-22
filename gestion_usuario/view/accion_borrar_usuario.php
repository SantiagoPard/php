<?php
use usuariosController\usuariosController;
require '../models/usuario.php';
require '../controllers/conexionDbController.php';
require '../controllers/baseController.php'; 
require '../controllers/usuariosController.php';

$usuarioController = new usuariosController();
$resultado = $usuarioController->delete($_GET['id']);
if($resultado){
    echo '<h1>usuario borrado</h1>';
}else{
    echo '<h1>no se pudo borrar el usuario</h1>';
}
?>