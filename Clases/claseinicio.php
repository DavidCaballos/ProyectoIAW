<?php
 require_once 'ClaseConexion.php';
 class Inicio {
   private $contrasenia;
   private $email;
   const TABLA = 'usuario';

   public function getemail() {
      return $this->email;
 }
 public function setemail($email) {
  $this->email = $email;
 }
   public function getcontrasenia() {
        return $this->contrasenia;
   }
   public function setcontrasenia($contrasenia) {
    $this->contrasenia = $contrasenia;
   }

public function __construct($email,$contrasenia) {
   $this->email = $email;
   $this->contrasenia = $contrasenia;
}
public static function buscarporemail($email){
     $conexion = new Conexion();
     $consulta = $conexion->prepare('SELECT email FROM usuario WHERE emailUsuario = :email');
     $consulta->bindParam(':email',$email);
     $consulta->execute();
     $conexion = null;
     return $email;
  }
  public static function buscarporcontra($email,$contrasenia){
     $conexion = new Conexion();
     $consulta = $conexion->prepare('SELECT contrasenaUsuario FROM usuario WHERE emailUsuario = :email');
     $consulta->bindParam(':email',$email);
     $consulta->execute();
     return $contrasenia;
  }
 }
?>