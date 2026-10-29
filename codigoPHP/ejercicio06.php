<!DOCTYPE html>
<html lang="es">
    <!--
    Autor: Santiago González Vicente
    Fecha Modificacion: 2026-10-04
    Descripcion: Indice DAW2
    -->
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="webroot/css/estilos.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>Santiago González Vicente</title>
        <style>
            footer{
                left: 0px;
            }
        </style>
    </head>
    <body>
        <div>
        <?php
            date_default_timezone_set("Europe/Madrid");
            $fechaActual = new DateTime();
            echo "<table>";
            echo "<tr>";
            echo "<td colspan=2><h3>Operaciones con fechas</h3></td>";
            echo "<tr>";
            echo "<tr>";
            echo "<th><p>Fecha actual: " . $fechaActual->format('d/m/Y') . "</p></th>"; //Fecha actual
            echo "<tr>";
            echo '<th><p>'. "Día de la semana: ".$fechaActual->format('l')."</p></th>"; //Dia de la semana
            $fechaFutura = $fechaActual->modify('+60 days');
            echo "<tr>";
            echo '<th><p> '."Fecha dentro de 60 días: ".$fechaFutura->format('d/m/Y')."</p></th>"; //Dia de la semana
            echo "<tr>";
            echo '<th><p> '."Día de la semana: ".$fechaFutura->format('l')."<br>";
        ?>
        </div>
        <footer>
            <p><time datetime="2026-09-14">2026-2027</time> IES LOS SAUCES. ©Todos los derechos reservados</p>
            <p>Santiago González Vicente. 14/09/2026</p>
            <a href="https://github.com/CuentaEducaSantiago/SGVDWESProyectoTema3" target="_blank" rel="noopener"><i class="fa fa-github" style="font-size:40px; margin-right: 15px;"></i></a>
            <a href="../indexProyectoTema3.php"><i class="fa fa-home" style="font-size:40px; margin-right: 15px;"></i></a>
        </footer>
    </body>
</html>
