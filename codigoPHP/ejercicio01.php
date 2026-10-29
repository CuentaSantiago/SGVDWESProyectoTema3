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
<!--       <link rel="shortcut icon" type="image/jpg" href="webroot/favicon/favicon.ico">-->
        <title>Santiago González Vicente</title>
        <style>
            *{
                font-size: 20px;
            }
        </style>
    </head>
    <body>
        <?php
        $VariableString="Variable String";
        $VariableBoolean=true;
        $VariableInteger=10;
        $VariableFloat=10.5;
        echo "<details>";
        echo "<summary>echo</summary>";
        echo "<p>La variable String ".'$VariableString'." contiene $VariableString<br>";
        echo "La variable Int ".'$VariableInteger'." contiene $VariableInteger<br>";
        echo "La variable Float ".'$VariableFloat'." contiene $VariableFloat<br>";
        echo "La variable Boolean ".'$VariableBoolean'." contiene $VariableBoolean</p>";
        echo "</details>";
        print("<details>");
        print("<summary>print</summary>");
        print("<p>La variable String ".'$VariableString'." contiene $VariableString<br>");
        print("La variable Int ".'$VariableInteger'." contiene $VariableInteger<br>");
        print("La variable Float ".'$VariableFloat'." contiene $VariableFloat<br>");
        print("La variable Boolean ".'$VariableBoolean'." contiene $VariableBoolean</p>");
        print("</details>");
        print("<details>");
        printf("<summary>printf</summary>") ;
        printf("<p>La variable String ".'$VariableString'." contiene $VariableString<br>");
        printf("La variable Int ".'$VariableInteger'." contiene $VariableInteger<br>");
        printf("La variable Float ".'$VariableFloat'." contiene $VariableFloat<br>");
        printf("La variable Boolean ".'$VariableBoolean'." contiene $VariableBoolean</p>");
        printf("</details>");
        sprintf("<details>");
        sprintf("<summary>sprintf</summary>");
        sprintf("<p>La variable String ".'$VariableString'." contiene $VariableString<br>");
        sprintf("La variable Int ".'$VariableInteger'." contiene $VariableInteger<br>");
        sprintf("La variable Float ".'$VariableFloat'." contiene $VariableFloat<br>");
        sprintf("La variable Boolean ".'$VariableBoolean'." contiene $VariableBoolean</p>");
        sprintf("</details>");
        print_r("<details>");
        print_r("<summary>print_r</summary>");
        print_r("<p>La variable String ".'$VariableString'." contiene $VariableString<br>");
        print_r("La variable Int ".'$VariableInteger'." contiene $VariableInteger<br>");
        print_r("La variable Float ".'$VariableFloat'." contiene $VariableFloat<br>");
        print_r("La variable Boolean ".'$VariableBoolean'." contiene $VariableBoolean</p>");
        print_r("</details>");
        ?>
        <footer>
            <p><time datetime="2026-09-14">2026-2027</time> IES LOS SAUCES. ©Todos los derechos reservados</p>
            <p>Santiago González Vicente. 14/09/2026</p>
            <a href="https://github.com/CuentaEducaSantiago/SGVDWESProyectoTema3" target="_blank" rel="noopener"><i class="fa fa-github" style="font-size:40px; margin-right: 15px;"></i></a>
            <a href="indexProyectoTema3.php"><i class="fa fa-home" style="font-size:40px; margin-right: 15px;"></i></a>
        </footer>
    </body>
</html>
