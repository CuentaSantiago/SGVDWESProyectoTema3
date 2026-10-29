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
    </head>
    <body>
        <h2><a href='../indexProyectoTema3.php'>volver</a></h2>
        <?php
          $teatro = array_fill(0, 20, array_fill(0, 15, null));
          $teatro[0][0] = "Juan";
          $teatro[0][1] = "Ana";
          $teatro[2][5] = "Pedro";
          $teatro[5][10] = "Laura";
          $teatro[10][7] = "Carlos";
          echo "<h2>Recorrido con FOREACH</h2>";
          foreach ($teatro as $fila => $asientos) {
              foreach ($asientos as $asiento => $persona) {
                  if ($persona != null) {
                      echo "<h3>Fila " . ($fila + 1).", asiento ".($asiento + 1).": ".$persona."</h3><br>";
                  }
              }
          }
          echo "<h2>Recorrido con WHILE</h2>";
          $fila = 0;
          while ($fila < 20) {
              $asiento = 0;
              while ($asiento < 15) {
                  if ($teatro[$fila][$asiento] != null) {
                      echo "<h3>Fila ".($fila + 1).", asiento " . ($asiento + 1).": ".$teatro[$fila][$asiento]."</h3><br>";
                  }
                  $asiento++;
              }
              $fila++;
          }
          echo "<h2>Recorrido con FOR</h2>";
          for ($fila = 0; $fila < 20; $fila++) {
              for ($asiento = 0; $asiento < 15; $asiento++) {
                  if ($teatro[$fila][$asiento] != null) {
                      echo "<h3>Fila ".($fila + 1).", asiento ".($asiento + 1).": ".$teatro[$fila][$asiento]."</h3><br>";
                  }
              }
          }
        ?>
        <footer>
            <p><time datetime="2026-09-14">2026-2027</time> IES LOS SAUCES. ©Todos los derechos reservados</p>
            <p>Santiago González Vicente. 14/09/2026</p>
            <a href="https://github.com/CuentaEducaSantiago/SGVDWESProyectoTema3" target="_blank" rel="noopener"><i class="fa fa-github" style="font-size:40px; margin-right: 15px;"></i></a>
            <a href="../indexProyectoTema3.php"><i class="fa fa-home" style="font-size:40px; margin-right: 15px;"></i></a>
        </footer>
    </body>
</html>
