<?php
 require_once 'ClaseConexion.php';
 class Busqueda {
   private $id;
   private $nombrevideo;
   private $genero;
   private $duracion;
   private $opcionvideo;

   const TABLA = 'contenido';
   public function getid() {
    return $this->id;
}
    public function setid($id) {
    $this->id = $id;
}
   public function getpersona() {
        return $this->nombrevideo;
   }
   public function setpersona($nombrevideo) {
    $this->nombrevideo = $nombrevideo;
   }
   public function getgen() {
    return $this->genero;
}
    public function setgen($genero) {
    $this->genero = $genero;
}
    public function getdur() {
        return $this->duracion;
}
    public function setdur($duracion) {
    $this->duracion = $duracion;
}
    public function getopc() {
        return $this->opcionvideo;
}
    public function setopc($opcionvideo) {
    $this->opcionvideo = $opcionvideo;
}
public function getemail() {
    return $this->email;
}
    public function setemail($email) {
    $this->email = $email;
}

public function __construct($id, $nombrevideo, $opcionvideo, $duracion, $genero) {
   $this->id = $id;
   $this->nombrevideo = $nombrevideo;
   $this->opcionvideo = $opcionvideo;
   $this->duracion = $duracion;
   $this->genero = $genero;
}

public static function busca($nombrevideo){
     $conexion = new Conexion();
     $consulta = $conexion->prepare('SELECT ID_VIDEO,NOMBRE,GENERO,DURACION,OPCION_VIDEO FROM contenido WHERE NOMBRE = :nombreN');
     $consulta->bindParam(':nombreN',$nombrevideo);
     $consulta->execute();
     $registro = $consulta->fetch();
     if($registro){
         return new self($registro['ID_VIDEO'],$registro['NOMBRE'],$registro['GENERO'],$registro['DURACION'],$registro['OPCION_VIDEO']);
     }else{
         return false;
     }
  }
public static function buscat($opcionvideo){
    $conexion = new Conexion();
    $consulta = $conexion->prepare('SELECT NOMBRE,GENERO,DURACION,OPCION_VIDEO FROM contenido WHERE OPCION_VIDEO = :video');
    $consulta->bindParam(':video',$opcionvideo);
    $consulta->execute();
    $registro = $consulta->fetchAll();
    if($registro){
        return $registro;
    }else{
        return false;
    }
 }
 public static function buscad($duracion){
    $conexion = new Conexion();
    $consulta = $conexion->prepare('SELECT NOMBRE,GENERO,DURACION,OPCION_VIDEO FROM contenido WHERE DURACION = :duracion');
    $consulta->bindParam(':duracion',$duracion);
    $consulta->execute();
    $registro = $consulta->fetchAll();
    if($registro){
        return $registro;
    }else{
        return false;
    }
 }
 public static function buscag($genero){
    $conexion = new Conexion();
    $consulta = $conexion->prepare('SELECT NOMBRE,GENERO,DURACION,OPCION_VIDEO FROM contenido WHERE GENERO = :genero');
    $consulta->bindParam(':genero',$genero);
    $consulta->execute();
    $registro = $consulta->fetchAll();
    if($registro){
        return $registro;
    }else{
        return false;
    }
 }
 public static function buscaI($id){
    $conexion = new Conexion();
    $consulta = $conexion->prepare('SELECT ID_VIDEO,NOMBRE,GENERO,DURACION,OPCION_VIDEO FROM contenido WHERE ID_VIDEO = :id');
    $consulta->bindParam(':id',$id);
    $consulta->execute();
    $registro = $consulta->fetch();
    if($registro){
        return new self($registro['ID_VIDEO'],$registro['NOMBRE'],$registro['GENERO'],$registro['DURACION'],$registro['OPCION_VIDEO']);
    }else{
        return false;
    }
 }
 }
?>