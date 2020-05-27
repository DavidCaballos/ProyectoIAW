<?php
 require_once 'ClaseConexion.php';
 class Inicio {
   private $contrasenia;
   private $email;
   const TABLA = 'usuario';

   public function getcontrasenia() {
        return $this->contrasenia;
   }
   public function setcontrasenia($contrasenia) {
    $this->contrasenia = $contrasenia;
   }
   public function getemail() {
        return $this->email;
   }
   public function setemail($email) {
    $this->email = $email;
   }

public function __construct($nombre,$apellido,$contrasenia,$email,$fch_nacimiento) {
   $this->contrasenia = $contrasenia;
   $this->email = $email;
}
public static function buscarporemail($email){
     $conexion = new Conexion();
     $consulta = $conexion->prepare('SELECT email FROM ' . self::TABLA . 'WHERE emailUsuario = :email');
     $consulta->bindParam(':email',$email);
     $consulta->execute();
     $conexion = null;
     return $email;
  }
  public static function buscarporcontra($email){
     $conexion = new Conexion();
     $consulta = $conexion->prepare('SELECT contra FROM ' . self::TABLA . 'WHERE emailUsuario = :email');
     $consulta->bindParam(':email',$email);
     $consulta->execute();
     $conexion = null;
     return $email;
  }
 }
?>