<?php
include '../Clases/ClaseInicio.php';
if (isset ($_POST['iniciar'])){
session_start();
$emailusuario= (isset($_POST['email']))?$_POST['email']:'';
$contraseniausu= (isset($_POST['contra']))?$_POST['contra']:'';
$_SESSION['email']=$_POST['email'];
$_SESSION['contra']=$_POST['contra'];
$email=$_SESSION['email'];
$comprobar= Inicio::buscarporemail($_SESSION['email']);
$comprobarcontra= Inicio::buscarporcontra($_SESSION['email']);
if ($comprobar==false or $_SESSION['contra']!==$comprobarcontra){
    ?>
    <html>
    <head>
        <meta charset="UTF-8" />
        <link href="Estilo.css" rel="stylesheet" type="text/css">
    </head>
    <body>
    <div class="group">
    <p>Error en el inicio de sesion, su contraseña o email son erroneos</p>
    <a href="./Inicio.php">Ir a inicio de sesion</a>
    </div>
    </body>
    </html>
<?php
}else{
?>
    <html>
    <head>
        <meta charset="UTF-8" />
        <link href="Estilo.css" rel="stylesheet" type="text/css">
    </head>
    <body>
    <div class="group">
    <p>Se ha registrado correctamente</p>
    <a href="./Index2.php">Ir al inicio de la página</a>
    </div>
    </body>
    </html>
<?php
}?>
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
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    </head>
    <body>
        <div class="group">
            <center> <h1><em>VideoClub</em></h1> </center>
            <center> <h3>Inicio de sesion</h3> </center>
                <form action="?" method="POST">
                    Email: <input type="text" name="email" REQUIRED /><br /><br />
                    Contraseña: <input type="password" name="contra" /><br /><br />
                    Captcha: <div class="g-recaptcha" data-sitekey="6LdZSfcUAAAAABoHsWy7j0jsszYN8jw7utPRUmH3"></div>
                    <input type="submit" name="iniciar" value="Inicio de Sesion" />
                </form>
        </div>
    </body>
</html>
<?php
}
?>