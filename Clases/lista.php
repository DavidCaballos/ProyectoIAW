<?php
require_once 'ClaseConexion.php';
Class Lista
{
    private $emailusu;
    public function getemailusu() {
        return $this->emailusu;
     }
     public function setemailusu($emailusu) {
      $this->emailusu = $emailusu;
     }
     public static function mostrar($emailusu){
        $conexion = new Conexion();
        $consulta = $conexion->prepare('SELECT CUENTA_EMAIL,ID_VIDEO,FECHA_ALQUILER,FECHA_DEVOLUCION FROM prestamo WHERE CUENTA_EMAIL = :email');
        $consulta->bindParam(':email',$emailusu);
        $consulta->execute();
        $registro = $consulta->fetchAll();
        if($registro){
            return $registro;
        }else{
            return false;
        }
     }
}

?>