<?php
include '../Clases/Usuario.php';
if (isset ($_POST['enviar'])){
    $guardar=new Usuario($_POST['nombreusu'],$_POST['apellidos'],$_POST['contra'],$_POST['email'],$_POST['fecha']);
    $guardar->guardar();?>
    <html>
    <head>
        <meta charset="UTF-8" />
        <link href="Estilo.css" rel="stylesheet" type="text/css">
    </head>
    <body>
    <div class="group">
    <p>Se ha insertado correctamente, ¿que desea hacer ahora?<p>
    <br ><a href="./Registrar.php">Volver al registro</a><br ><a href="./Inicio.php">Ir a Inicio de Sesion</a>
    </div>
    </body>
    </html>
<?php
}
elseif (isset ($_POST['eliminar'])){
    $eliminar=new Usuario($_POST['email']);
    $eliminar->borrar();?>
    <br ><a href="./Registrar.php">Volver al registro</a><br ><a href="./Inicio.php">Ir a Inicio/Eliminar Sesion</a>
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
            <center> <h3>Registro de usuarios</h3> </center>
                <form action="" method="POST">
                    Nombre: <input type="text" name="nombreusu" /><br /><br />
                    Apellidos: <input type="text" name="apellidos" /><br /><br />
                    Contraseña: <input type="password" name="contra" /><br /><br />
                    Email: <input type="text" name="email" /><br /><br />
                    Fecha de nacimiento: <input type="date" name="fecha" /><br /><br />
                    <input type="submit" name="enviar" value="Enviar" />
                    <input type="submit" name="reset" value="Limpiar" />
                    <input type="submit" name="eliminar" value="Eliminar Usuario" />
                    <a href="./Inicio.php"><input type="button" name="inicio" value="Inicio sesion" /></a>
                </form>
        </div>
    </body>
</html>
<?php
}?>