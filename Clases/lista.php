<?php
require_once 'ClaseConexion.php';
class Lista
{
    private $name;

    public function __construct()
    {
        $this->decir();
    }

    public function decir()
    {
        if (isset($this->name)) {
            echo "Soy {$this->name}.\n";
        } else {
            echo "Aún no tengo nombre.\n";
        }
    }
}

$sth = $dbh->query("SELECT * FROM prestamo");
$sth->setFetchMode(PDO::FETCH_CLASS, 'Lista');
$persona = $sth->fetch();
$persona->decir();
$sth->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, 'Lista');
$persona = $sth->fetch();
$persona->decir();
?>