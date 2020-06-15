<?php
 require_once 'ClaseConexion.php';
 class Usuario {
   private $nombre;
   private $apellido;
   private $contrasenia;
   private $email;
   private $fch_nacimiento;
   const TABLA = 'usuario';
   public function getNombre() {
      return $this->nombre;
   }
   public function setNombre($nombre) {
    $this->nombre = $nombre;
   }
   public function getapellido() {
        return $this->apellido;
   }
   public function setapellido($apellido) {
    $this->apellido = $apellido;
   }
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
   public function getfch_nacimiento() {
        return $this->fch_nacimiento;
   }
   public function setfch_nacimiento($fch_nacimiento) {
    $this->fch_nacimiento = $fch_nacimiento;
}
public function __construct($nombre=null,$apellido=null,$contrasenia=null,$email,$fch_nacimiento=null) {
   $this->nombre = $nombre;
   $this->apellido = $apellido;
   $this->contrasenia = $contrasenia;
   $this->email = $email;
   $this->fch_nacimiento = $fch_nacimiento;
}
public function guardar(){
   $conexion = new Conexion();
   
      $consulta = $conexion->prepare('INSERT INTO usuario (nombreUsuario,apellidoUsuario,contrasenaUsuario,emailUsuario,fechaNacimiento) 
      VALUES(:nombreusu,:apellidos,:contra,:email,:fecha)');
      $consulta->bindParam(':nombreusu',$this->nombre);
      $consulta->bindParam(':apellidos', $this->apellido);
      $consulta->bindParam(':contra', $this->contrasenia);
      $consulta->bindParam(':email', $this->email);
      $consulta->bindParam(':fecha', $this->fch_nacimiento);
      $consulta->execute();
   
   $conexion = null;
}
public static function borrar($email){
   $conexion = new Conexion();
   $consulta = $conexion->prepare('DELETE FROM usuario WHERE emailUsuario = :email');
   $consulta->bindParam(':email',$email);
   $consulta->execute();
   $conexion = null;
}
 }
?>