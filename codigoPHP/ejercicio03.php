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
        <link rel="stylesheet" type="text/css" href="../webroot/css/estilos.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>Santiago González Vicente</title>
    </head>
    <body>
        <?php
        date_default_timezone_set("Europe/Madrid"); //aplico nuestra zona horaria
        $fechaActual = new DateTime();//obtengo la fecha y el tiempo
        echo "<table>";
        echo "<tr>";
        echo "<td colspan=2><h3>Datos de la fecha de españa</h3></td>";
        echo "<tr>";
        echo "<tr>";
        echo "<th><p>Fecha y hora formateada de España</th><th>" . $fechaActual->format('d-m-Y , H:i:s A'). "</p></th>"; //Imprimo por pantalla la fecha formateada dia-mes-año horas:minutos:segundos
        echo "<tr>";
        echo '<th><p> Hoy es</th><th>' .$fechaActual->format("d"). ' de '. $fechaActual->format("M") . ' de ' .$fechaActual->format("Y"). ' y son las '.$fechaActual->format("H:i") . '</p> </th>';
        //numero del dia / nombre del dia abreviado /  nombre del dia completo
        echo "<tr>";
        echo '<th><p> Dia</th><th>'.$fechaActual->format("d"). ' / '. $fechaActual->format("D"). ' / '. $fechaActual->format("l") .'</p></th>';
        //numero del mes / nombre del mes abreviado /  nombre del mes completo
        echo "</tr>";
        echo "<tr>";
        echo '<th><p> Mes</th><th>'.$fechaActual->format("m"). ' / '. $fechaActual->format("M"). ' / '. $fechaActual->format("F").'</p></th>';
        //numero del anio abreviado / numero del anio completo
        echo "</tr>";
        echo "<tr>";
        echo '<th><p> Año</th><th>'.$fechaActual->format("y"). ' / '. $fechaActual->format("Y"). '</p></th>';
        //hora formato 12 horas / hora formato 24 horas
        echo "</tr>";
        echo "<tr>";
        echo '<th><p> Hora</th><th>'.$fechaActual->format("h"). ' / '. $fechaActual->format("H"). '</p></th>';
        echo "</tr>";
        echo "<tr>";
        echo '<th><p> Fecha</th><th>'.$fechaActual->format("d/m/y"). ' / '. $fechaActual->format("d-m-Y"). '</p></th>';
        echo "</tr>";
        echo "<tr>";
        echo '<th><p> Marca de tiempo (timestamp)</th><th>' .$fechaActual->getTimestamp() .'</p></th>';
        echo "</tr>";
        echo "</table>";

        $oFechaCumpleanios= new DateTime("2007-10-22"); //Declaro un objeto de la clase DateTime con parametros del dia, mes y hora
        ?>
        <footer>
            <p><time datetime="2026-09-14">2026-2027</time> IES LOS SAUCES. ©Todos los derechos reservados</p>
            <p>Santiago González Vicente. 14/09/2026</p>
            <a href="https://github.com/CuentaEducaSantiago/SGVDWESProyectoTema3" target="_blank" rel="noopener"><i class="fa fa-github" style="font-size:40px; margin-right: 15px;"></i></a>
            <a href="../indexProyectoTema3.php"><i class="fa fa-home" style="font-size:40px; margin-right: 15px;"></i></a>
        </footer>
    </body>
</html>