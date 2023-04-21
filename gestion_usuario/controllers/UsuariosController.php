<?php namespace usuariosController;
use BaseController;
use ConexionDbController; 
class UsuariosController extends BaseController{
   function create(){

   }
   function read(){
    $sql='select * from usuarios';
    $conexiondb = new ConexionDbController();
    $usuarios = $conexiondb->execSQL($sql);
    $conexiondb->close();
   } 
   function update(){

   }
   function delete(){

   }
}
?>