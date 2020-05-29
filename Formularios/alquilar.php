<?php 
include '../Clases/Prestamo.php';
session_start();
$emailusu=$_SESSION['email'];
$id=$_SESSION['id'];
if (isset ($_POST['alquilar'])){
    $guardar=new Alquilar($_SESSION['email'],$_SESSION['id'],$_POST['fechaA'],$_POST['fechaD']);
    $guardar->insertar();?>
    <html>
    <head>
        <meta charset="UTF-8" />
        <link href="Estilo.css" rel="stylesheet" type="text/css">
    </head>
    <body>
    <div class="group">
    <p>Se ha alquilado dicho video, ¿que desea hacer ahora?<p>
    <br ><a href="./Index2.php">Volver a la pagina principal</a><br >
    <br ><a href="./Lista.php">Ver mis alquileres</a><br >
    </div>
    </body>
    </html>
<?php
}
elseif (isset ($_POST['modificar'])){
    $guardar=new Alquilar($_SESSION['email'],$_SESSION['id'],$_POST['fechaA'],$_POST['fechaD']);
    $guardar->modificar();?>
    <html>
    <head>
        <meta charset="UTF-8" />
        <link href="Estilo.css" rel="stylesheet" type="text/css">
    </head>
    <body>
    <div class="group">
    <p>Se ha modificado la fecha del alquiler, ¿que desea hacer ahora?<p>
    <br ><a href="./Index2.php">Volver a la pagina principal</a><br >
    <br ><a href="./Lista.php">Ver mis alquileres</a><br >
    </div>
    </body>
    </html>
<?php
}
else{
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Aplicacion IAW</title>
        <meta charset="UTF-8" />
        <link href="Estilo.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="group">
            <center> <h1><em>VideoClub</em></h1> </center>
            <center> <h3>Alquiler</h3> </center>
                <form action="?" method="POST">
                    Usuario registrado: <input type="text" name="emailusu" value="
                    <?php
                    echo $emailusu;
                    ?>" disabled><br />
                    Id de la pelicula para alquilar: <input type="text" name="id" value="
                    <?php
                    echo $id;
                    ?>" disabled><br />
                    Fecha de alquiler: <input type="date" name="fechaA" /><br />
                    Fecha de devolucion: <input type="date" name="fechaD" /><br />
                    <input type="submit" name="alquilar" value="Alquilar" />
                    <input type="submit" name="modificar" value="Modificar un alquiler" />
                    <a href="./Busqueda.php"><input type="button" name="busqueda" value="Volver a la busqueda" /></a>
                </form>
        </div>
    </body>
</html>
<?php
}
?>