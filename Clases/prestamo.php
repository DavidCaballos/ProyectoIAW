<?php
 require_once 'ClaseConexion.php';
 class Alquilar {
   private $idvideo;
   private $email;
   private $fechA;
   private $fechD;
   const TABLA = 'prestamo';

   public function getidvideo() {
        return $this->idvideo;
   }
   public function setcontrasenia($idvideo) {
    $this->idvideo = $idvideo;
   }
   public function getemail() {
        return $this->email;
   }
   public function setemail($email) {
    $this->email = $email;
   }
   public function getfechA() {
    return $this->fechA;
    }
    public function setfechA($fechA) {
     $this->fechA = $fechA;
    }
    public function getfechD() {
        return $this->fechD;
        }
    public function setfechD($fechD) {
    $this->fechD = $fechD;
    }

public function __construct($email,$idvideo,$fechA,$fechD) {
   $this->email = $email;
   $this->idvideo = $idvideo;
   $this->fechA = $fechA;
   $this->fechD = $fechD;
}
  public function insertar(){
    $conexion = new Conexion();
    
       $consulta = $conexion->prepare('INSERT INTO prestamo (CUENTA_EMAIL,ID_VIDEO,FECHA_ALQUILER,FECHA_DEVOLUCION) 
       VALUES(:email,:id,:fechaA,:fechaD)');
       $consulta->bindParam(':email',$this->email);
       $consulta->bindParam(':id', $this->idvideo);
       $consulta->bindParam(':fechaA', $this->fechA);
       $consulta->bindParam(':fechaD', $this->fechD);
       $consulta->execute();
    
    $conexion = null;
 }
 public function modificar(){
   $conexion = new Conexion();
   $consulta = $conexion->prepare('UPDATE prestamo SET FECHA_ALQUILER = :fechaA, FECHA_DEVOLUCION = :fechaD 
   WHERE CUENTA_EMAIL = :email and ID_VIDEO = :id');
       $consulta->bindParam(':email',$this->email);
       $consulta->bindParam(':id', $this->idvideo);
       $consulta->bindParam(':fechaA', $this->fechA);
       $consulta->bindParam(':fechaD', $this->fechD);
   $consulta->execute();
   $conexion = null;
}
 }
?>