<!DOCTYPE html>
<html lang="es">
    <!--
    Autor: Santiago González Vicente
    Fecha Modificacion: 2026-09-28
    Descripcion: Indice DAW2
    -->
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="webroot/css/estilos.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>Santiago González Vicente</title>
        <style>
            form{
                display: block;
            }
        </style>
    </head>
    <body>
        <h2><a href='../indexProyectoTema3.php'>volver</a></h2>
        <?php
            if (isset($_REQUEST['submit'])){//cuando se ha dado a submit
                $nombre= $_REQUEST['Nombre'];//recoge el texto introducido en el campo nombre
                $curso= $_REQUEST['Curso'];//recoge el texto introducido en el campo curso
                echo '<div>';
                echo "<h4>Nombre:".$nombre."</h4><br>";//muestra el nombre introducido
                echo "<h4>Curso:".$curso."</h4><br>";//muestra el curso introducido
                echo '</div>';
                echo "<br><a href='" . $_SERVER['PHP_SELF'] . "'>⬅ Rellenar otro formulario</a>";//para hacer de nuevo el formulario y que desaparezca el texto del anterior
            }
        ?>
        <form name="ejer21" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
            <label for="nombre" >Nombre: </label><input type="text" id="nom" name="Nombre"/><br>
            <label for="Curso" >Curso: </label><input type="text" id="cur" name="Curso"/><br>
            <input type="submit" name="submit" id="enviar"/>
        </form>
        <footer>
            <p><time datetime="2026-09-14">2026-2027</time> IES LOS SAUCES. ©Todos los derechos reservados</p>
            <p>Santiago González Vicente. 14/09/2026</p>
            <a href="https://github.com/CuentaEducaSantiago/SGVDWESProyectoTema3" target="_blank" rel="noopener"><i class="fa fa-github" style="font-size:40px; margin-right: 15px;"></i></a>
            <a href="../indexProyectoTema3.php"><i class="fa fa-home" style="font-size:40px; margin-right: 15px;"></i></a>
        </footer>
    </body>
</html>