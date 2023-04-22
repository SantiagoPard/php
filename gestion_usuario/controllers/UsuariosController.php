<?php
namespace usuariosController;

use BaseController;
use ConexionDbController;
use Usuario;

class usuariosController extends BaseController
{
   function create($usuario)
   {
      $sql = 'insert into usuarios (id,name,username,password) values ';
      $sql .= '(';
      $sql .= $usuario->getId().',';
      $sql .= '"'.$usuario->getName().'",';
      $sql .= '"'.$usuario->getUsername().'",';
      $sql .= '"'.$usuario->getPassword().'"';
      $sql .= ')';
      $conexiondb = new ConexionDbController();
      $resultadoSQL = $conexiondb->execSQL($sql);
      $conexiondb->close();
      return $resultadoSQL;
   }
   function read()
   {
      $sql = 'select * from usuarios';
      $conexiondb = new ConexionDbController();
      $resultadoSQL = $conexiondb->execSQL($sql);
      $usuarios = [];
      while ($registro = $resultadoSQL->fetch_assoc()) {
         $usuario = new Usuario();
         $usuario->setId($registro['id']);
         $usuario->setName($registro['name']);
         $usuario->setUsername($registro['username']);
         $usuario->setPassword('');
         array_push($usuarios, $usuario);
      }
      $conexiondb->close();
      return $usuarios;
   }
   function update()
   {

   }
   function delete($id)
   {
      $sql = 'delete from usuarios where id='.$id;
      $conexiondb = new ConexionDbController();
      $resultadoSQL = $conexiondb->execSQL($sql);
      $conexiondb->close();
      return $resultadoSQL;
   }
}
?>