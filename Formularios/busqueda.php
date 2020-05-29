<?php
include '../Clases/Contenido.php';
session_start();
if (isset($_POST['BuscarN'])){
    $buscar=Busqueda::busca($_POST['nombreN']);
    if($buscar){ ?>
    <html>
    <head>
        <meta charset="UTF-8" />
        <link href="Estilo.css" rel="stylesheet" type="text/css">
    </head>
    <body>
    <div class="group">
    <form action="" method="POST">
    <ul><?php 
    echo "Id:  ";
    echo $buscar->getid();
    echo '<br />';
    echo "Nombre:  ";
    echo $buscar->getpersona(); '<br />';
    echo '<br />';
    echo "Genero:  ";
    echo $buscar->getgen(); 
    echo '<br />';
    echo "Duracion:  ";
    echo $buscar->getdur();
    echo '<br />';
    echo "OpcionVideo:  ";
    echo $buscar->getopc(); ?></ul>
    <br />
    
    <a href="./Busqueda.php">Volver al formulario</a><br />
    <br />
    </form>
    </div>
    </body>
    </html>
        <?php
         }else{ echo 'No existe el nombre de dicho video'; 
        ?> <a href="./Busqueda.php">Volver al formulario</a> <?php }
        } 
elseif (isset ($_POST['BuscarT'])){       
    $buscart=Busqueda::buscat($_POST['video']);
    if($buscart){ ?>
    <html>
    <head>
        <meta charset="UTF-8" />
        <link href="Estilo.css" rel="stylesheet" type="text/css">
    </head>
    <body>
    <div class="group">
    <?php 
    foreach($buscart as $video):
        echo "Nombre: ";
        echo $video['NOMBRE'];
        echo '<br />';
        echo "Genero: ";
        echo $video['GENERO'];
        echo '<br />';
        echo "Duracion: ";
        echo $video['DURACION'];
        echo '<br />';
        echo "Opcion de video: ";
        echo $video['OPCION_VIDEO'];
        echo '<br />';
        echo "----------------------------------------------";
        echo '<br />';
    endforeach;
    ?>
    <br />
    
    <a href="./Busqueda.php">Volver al formulario de busqueda</a><br />
    <br />
    </div>
    </body>
    </html>
        <?php
         }else{ echo 'No hay existencias de dicho tipo'; 
        ?> <a href="./Busqueda.php">Volver al formulario de busqueda</a> <?php }    
   

}
elseif (isset ($_POST['BuscarD'])){       
    $buscard=Busqueda::buscad($_POST['duracion']);
    if($buscard){ ?>
    <html>
    <head>
        <meta charset="UTF-8" />
        <link href="Estilo.css" rel="stylesheet" type="text/css">
    </head>
    <body>
    <div class="group">
    <?php 
    foreach($buscard as $duracion):
        echo "Nombre: ";
        echo $duracion['NOMBRE'];
        echo '<br />';
        echo "Genero: ";
        echo $duracion['GENERO'];
        echo '<br />';
        echo "Duracion: ";
        echo $duracion['DURACION'];
        echo '<br />';
        echo "Opcion de video: ";
        echo $duracion['OPCION_VIDEO'];
        echo '<br />';
        echo "----------------------------------------------";
        echo '<br />';
    endforeach;
    ?>
    <br />
    
    <a href="./Busqueda.php">Volver al formulario de busqueda</a><br />
    <br />
    </div>
    </body>
    </html>
        <?php
         }else{ echo 'No hay videos con esa duracion'; 
        ?> <a href="./Busqueda.php">Volver al formulario de busqueda</a> <?php } 
}
elseif (isset ($_POST['BuscarG'])){       
    $buscarg=Busqueda::buscag($_POST['genero']);
    if($buscarg){ ?>
    <html>
    <head>
        <meta charset="UTF-8" />
        <link href="Estilo.css" rel="stylesheet" type="text/css">
    </head>
    <body>
    <div class="group">
    <?php 
    foreach($buscarg as $duracion):
        echo "Nombre: ";
        echo $duracion['NOMBRE'];
        echo '<br />';
        echo "Genero: ";
        echo $duracion['GENERO'];
        echo '<br />';
        echo "Duracion: ";
        echo $duracion['DURACION'];
        echo '<br />';
        echo "Opcion de video: ";
        echo $duracion['OPCION_VIDEO'];
        echo '<br />';
        echo "----------------------------------------------";
        echo '<br />';
    endforeach;
    ?>
    <br />
    
    <a href="./Busqueda.php">Volver al formulario de busqueda</a><br />
    <br />
    </div>
    </body>
    </html>
        <?php
         }else{ echo 'No hay videos con esa duracion'; 
        ?> <a href="./Busqueda.php">Volver al formulario de busqueda</a> <?php }
}
elseif (isset($_POST['BuscarI'])){
    $buscarI=Busqueda::buscaI($_POST['id']);
    $_SESSION['id']=$_POST['id'];
    $id=$_SESSION['id'];
    if($buscarI){ ?>
    <html>
    <head>
        <meta charset="UTF-8" />
        <link href="Estilo.css" rel="stylesheet" type="text/css">
    </head>
    <body>
    <div class="group">
    <form action="" method="POST">
    <ul><?php 
    echo "Id:  ";
    echo $buscarI->getid();
    echo '<br />';
    echo "Nombre:  ";
    echo $buscarI->getpersona(); '<br />';
    echo '<br />';
    echo "Genero:  ";
    echo $buscarI->getgen(); 
    echo '<br />';
    echo "Duracion:  ";
    echo $buscarI->getdur();
    echo '<br />';
    echo "OpcionVideo:  ";
    echo $buscarI->getopc(); ?></ul>
    <br />
    
    <a href="./Busqueda.php">Volver al formulario</a><br />
    <br />
    <a href="./Alquilar.php">Ir a alquilar/modificar el alquiler del video</a><br />
    </form>
    </div>
    </body>
    </html>
        <?php
         }else{ echo 'No existe el nombre de dicho video'; 
        ?> <a href="./Busqueda.php">Volver al formulario</a> <?php }
        }
else { ?>
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
            <center> <h3>Busca lo que quieras</h3> </center>
                <form action="" method="POST">
                <center><input type="text" name="emailusu" value="<?php
                    $emailusu=$_SESSION['email'];
                    echo $emailusu;
                    ?>" disabled></center>
                    Tipos: <br>
                    <input type="radio" id="serie" name="video" value="Serie">Serie
                    <input type="radio" id="pelicula" name="video" value="Pelicula">Pelicula
                    <input type="radio" id="animacion" name="video" value="Anime">Animacion
                    <input type="radio" id="cortometraje" name="video" value="Cortometraje">Cortometraje
                    Duracion: <select id="duracion" name="duracion">
                        <option> </option>
                        <option value="30">30 Minutos</option>
                        <option value="60">60 Minutos</option>
                        <option value="90">90 Minutos</option>
                        <option value="120">120 Minutos</option>
                        <option value="150">150 Minutos</option>
                    </select><br>
                    Genero: <br>
                    <input type="radio" id="genero1" name="genero" value="Aventura">Aventura<br>
                    <input type="radio" id="genero2" name="genero" value="Accion">Accion<br>
                    <input type="radio" id="genero3" name="genero" value="Terror">Terror<br>
                    <input type="radio" id="genero4" name="genero" value="Comedia">Comedia<br>
                    <input type="radio" id="genero5" name="genero" value="Dramatica">Dramatica<br>
                    <input type="radio" id="genero6" name="genero" value="Musicales">Musicales<br>
                    <input type="radio" id="genero7" name="genero" value="Cienciaficcion">Cienciaficcion<br>
                    <input type="radio" id="genero8" name="genero" value="Infantiles">Infantiles<br>
                    Nombre del video que quieras buscar: <input type="text" name="nombreN" /><br />
                    Buscar por id y alquiler de video: <input type="text" name="id" /><br />
                    <center> <input type="submit" name="BuscarT" value="Buscar por tipo" />
                    <input type="submit" name="BuscarD" value="Buscar por duracion" />
                    <input type="submit" name="BuscarG" value="Buscar por genero" /></center>
                    <center><input type="submit" name="BuscarN" value="Buscar por nombre" />
                    <input type="submit" name="BuscarI" value="Buscar por id" />
                    <a href="./index2.php"><input type="button" name="index" value="Ir a la pagina principal" /></a></center>
                </form>
        </div>
    </body>
</html>
<?php
}?>