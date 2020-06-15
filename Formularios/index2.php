<?php
include '../Clases/Lista.php';
session_start();
$emailusus=$_SESSION['email'];
if (isset($_POST['Milista'])){
    $mostrar=Lista::mostrar($_SESSION['email']);
    if($mostrar){ ?>
    <html>
    <head>
        <meta charset="UTF-8" />
        <link href="Estilo.css" rel="stylesheet" type="text/css">
    </head>
    <body>
    <form action="" method="POST">
    <div class="group">
    <?php 
    foreach($mostrar as $video):
        echo "Nombre: ";
        echo $video['CUENTA_EMAIL'];
        echo '<br />';
        echo "Genero: ";
        echo $video['ID_VIDEO'];
        echo '<br />';
        echo "Duracion: ";
        echo $video['FECHA_ALQUILER'];
        echo '<br />';
        echo "Opcion de video: ";
        echo $video['FECHA_DEVOLUCION'];
        echo '<br />';
        echo "----------------------------------------------";
        echo '<br />';
    endforeach;
    ?>
    
    <a href="./index2.php">Volver atras</a><br />
    <br />
    </form>
    </div>
    </body>
    </html><?php
    }else{?>
        <html>
        <head>
            <meta charset="UTF-8" />
            <link href="Estilo.css" rel="stylesheet" type="text/css">
        </head>
        <body>
        <form action="" method="POST">
        <div class="group">
            <p>No hay videos alquilados</p>
            <a href="./index2.php">Volver atras</a><br />
        </form>
        </div>
        </body>
        </html> <?php
    }
}else{
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Aplicacion IAW</title>
        <meta charset="UTF-8" />
        <link href="estilo.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="group">
            <center> <h1><em>VideoClub</em></h1> </center>
            <center> <h3>Donde quiere ir</h3> </center>
                <form action="" method="POST">
                <center><input type="text" name="email" value="
                <?php
                    echo $emailusus;
                    ?>" disabled></center><br />
                <center><input type="submit" name="Milista" value="Mis alquileres" /><br><br></center>
                <center> <a href="./Alquilar.php"><input type="button" name="alquilar" value="Ir a alquiler de videos" /></a><br><br></center>
                <center>   <a href="./Busqueda.php"><input type="button" name="busqueda" value="Ir a busqueda de videos" /></a></center>
                </form>
        </div>
    </body>
</html>
<?php
}?>