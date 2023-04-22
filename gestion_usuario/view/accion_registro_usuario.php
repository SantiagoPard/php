<?php
use usuariosController\usuariosController;
require '../models/usuario.php';
require '../controllers/conexionDbController.php';
require '../controllers/baseController.php'; 
require '../controllers/usuariosController.php';

$usuario = new Usuario();
$usuario->setId($_POST['id']);
$usuario->setName($_POST['name']);
$usuario->setUsername($_POST['username']);
$usuario->setPassword($_POST['password']);

$usuarioController = new usuariosController();
$resultado = $usuarioController->create($usuario);
if($resultado){
    echo '<h1>usuario registrado</h1>';
}else{
    echo '<h1>no se pudo registrar el usuario</h1>';
}
?>