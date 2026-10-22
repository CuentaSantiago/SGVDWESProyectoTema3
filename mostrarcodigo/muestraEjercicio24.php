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
        <title>Santiago González Vicente</title>
        <style>
            p{
                margin-left: 300px;
            }
        </style>
    </head>
    <body>
        <header><h1>Codigo ejercicio 24</h1></header>
        <h1><a href='../indexProyectoTema3.php'>volver</a></h1>
        <pre>
            <code style="color: #000000">&lt;!DOCTYPE html&gt;
            &lt;!--
            Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
            Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
            --&gt;
            &lt;html&gt;
                &lt;head&gt;
                    &lt;meta charset="UTF-8"&gt;
                    &lt;title&gt;&lt;/title&gt;
                &lt;/head&gt;
                &lt;body&gt;
                &lt;nav&gt;
                        &lt;h2&gt;DWES - Tema 3&lt;/h2&gt;
                        &lt;h2&gt;Ejercicio 23&lt;/h2&gt;
                    &lt;/nav&gt;
                    &lt;main&gt;
                        &lt;div class="ejercicio"&gt;
                            <span style="color: #DD0000">&lt;?php</span>
                                <span style="color: darkgoldenrod">ini_set('display_errors', 1);</span>
                                <span style="color: darkgoldenrod">ini_set('display_startup_errors', 1);</span>
                                <span style="color: darkgoldenrod">error_reporting(E_ALL);</span>
                            <span style="color: #DD0000">?&gt;</span>
                            <span style="color: #DD0000">&lt;?php</span>
                                <span style> // importación de la librería</span>
                                <span style="color: blue"> require_once</span><span>'../core/231018libreriaValidacion.php';</span>

                                <span>// Inicialización de variables</span>
                                <span style="color: blue">$entradaOk = true;// Variable que nos indica que todo va bien</span>
                                <span style="color: blue">$aErrores = [</span>
                                <span style="color: blue">    'nombre' =&gt; '',</span>
                                <span style="color: blue">    'fecha' =&gt; '',</span>
                                <span style="color: blue">    'sueldo' =&gt; ''</span>
                                <span style="color: blue">];</span><span>// Array donde recogemos los mensajes de error</span>
                                <span style="color: blue">$aRespuestas = [</span>
                                <span style="color: blue">    'nombre' =&gt; '',</span>
                                <span style="color: blue">    'fecha' =&gt; '',</span>
                                <span style="color: blue">    'sueldo' =&gt; ''</span>
                                <span style="color: blue">];</span><span>// Array donde recogeremos las respuestas correctas (si $entradaOK)</span>

                                <span>// Cargar valores por defecto en los campos del formulario</span>
                                <span>// (Los valores por defecto ya están vacíos en $aRespuestas)</span>

                                <span>// Para cada campo del formulario: Validar entrada y actuar en consecuencia</span>
                                <span style="color: blue">if(isset($_POST["submit"])){</span>
                                <span>// Validamos los datos para cada campo del formulario.</span>
                                <span style="color: blue">    $aRespuestas['nombre'] = $_POST['Inombre'] ?? '';</span>
                                <span style="color: blue">    $aRespuestas['fecha'] = $_POST['fechaN'] ?? '';</span>
                                <span style="color: blue">    $aRespuestas['sueldo'] = $_POST['sueldoS'] ?? '';</span>
                                <span style="color: blue">    $aErrores['nombre'] = validacionFormularios::comprobarAlfabetico($aRespuestas['nombre'],100,0,1);</span>
                                <span style="color: blue">    $aErrores['fecha'] = validacionFormularios::validarFecha($aRespuestas['fecha'],"01/01/2027","01/01/1900", 1);</span>
                                <span style="color: blue">    $aErrores['sueldo'] = validacionFormularios::comprobarFloat($aRespuestas['sueldo'], 10000, 0, 1);</span>

                                <span>// Recorremos el array de errores para comprobar si ha habido alguno.</span>
                                <span>// true: la variable booleana $entradaOk recibe el valor false.</span>
                                <span style="color: blue">    foreach ($aErrores as $campo =&gt; $valor) {</span>
                                <span style="color: blue">        if($valor !== null){</span>
                                <span style="color: blue">            $entradaOk = false;</span>
                                <span style="color: blue">        }</span>
                                <span style="color: blue">    }</span>
                                <span style="color: blue">} else{</span>
                                <span style="color: blue">    $entradaOk = false;</span><span>     // Si el formulario no se ha rellenado nunca.</span>
                                <span style="color: blue">}</span>

                                <span>// Tratamiento del formulario</span>
                                <span style="color: blue">if($entradaOk){</span>
                                <span>    //En caso de que el formulario haya sido rellenado de manera correcta.</span>

                                <span style="color: blue">    $aRespuestas['nombre'] = $_POST['Inombre'];       // Añadir al campo nombre el valor enviado desde el formulario.</span>
                                <span style="color: blue">    $aRespuestas['fecha'] = new DateTime($_POST['fechaN']);         // Añadir al campo fecha el valor introducido en el formulario como DatTime.</span>
                                <span style="color: blue">    $aRespuestas['sueldo'] = number_format(floatval(str_replace(',', '.', $_POST['sueldoS'])), 2, ',', '.').'$';       // Añadir al campo sueldo el valor introducido en el formulario formateado para que sea valido.</span>

                                <span>    // Recorremos el array de respuestas con un foreach para mostrar las respuestas.</span>

                                <span style="color: blue">    foreach ($aRespuestas as $campo =&gt; $valor) {</span>
                                <span style="color: blue">        print("&lt;p&gt;Su $campo es: ".$valor."&lt;/p&gt;&lt;br&gt;");</span>
                                <span style="color: blue">    }</span>
                                <span style="color: blue">} else{</span>
                            <span style="color: #DD0000">?&gt;</span>

                            <span>&lt;!-- Mostrar formulario --&gt;</span>
                            <span>&lt;form name="input" action="&lt;?php echo $_SERVER['PHP_SELF']; ?&gt;" method="post"&gt;</span>

                                <span>&lt;!-- Mostrar los datos tecleados correctamente en intentos anteriores (en los value) --&gt;</span>
                                <span>Nombre: &lt;input type="text" name="Inombre" value="&lt;?php echo htmlspecialchars($aRespuestas['nombre']); ?&gt;"/&gt;</span>
                                <span style="color: #DD0000">&lt;?php</span>
                                <span>// Mostrar mensajes de error (si los hay y el formulario no se muestra por primera vez)</span>
                                <span style="color: blue">if(!empty($aErrores['nombre'])) {echo "&lt;span style='color:red; display:block; font-size:13px;'&gt;{$aErrores['nombre']}&lt;/span&gt;";}</span>
                                <span>?&gt;</span>
                                <span>&lt;br&gt;</span>

                                <span>Fecha de nacimiento: &lt;input type="date" name="fechaN" value="&lt;?php echo htmlspecialchars($aRespuestas['fecha']); ?&gt;"/&gt;</span>
                                <span style="color: #DD0000">&lt;?php</span>
                                <span style="color: blue">if(!empty($aErrores['fecha'])) {echo "&lt;span style='color:red; display:block; font-size:13px;'&gt;{$aErrores['fecha']}&lt;/span&gt;";}</span>
                                <span style="color: #DD0000">?&gt;</span>
                                <span>&lt;br&gt;</span>

                                <span>Sueldo mensual: &lt;input type="number" name="sueldoS" min="0" value="&lt;?php echo htmlspecialchars($aRespuestas['sueldo']); ?&gt;" step="any"/&gt;</span>
                                <span style="color: #DD0000">&lt;?php</span>
                                <span style="color: blue">if(!empty($aErrores['sueldo'])) {echo "&lt;span style='color:red; display:block; font-size:13px;'&gt;{$aErrores['sueldo']}&lt;/span&gt;";}</span>
                                <span style="color: #DD0000">?&gt;</span>
                                <span>&lt;br&gt;</span>

                                <span>&lt;input type="submit" name="submit" value="Enviar"/&gt;</span>
                            <span>&lt;/form&gt;</span>

                            <span>&lt;?php</span>
                                <span>} // Fin si ($entradaOK)</span>
                            <span>?&gt;</span>
                        &lt;/div&gt;
                    &lt;/main&gt;
                    &lt;footer&gt;
                        &lt;div&gt;
                            &lt;a href="../indexProyectoTema3.php" color="white"&gt;Santiago González Vicente&lt;/a&gt;
                            &lt;time datetime="2026-10-13"&gt;13-10-2026&lt;/time&gt;
                        &lt;/div&gt;
                    &lt;/footer&gt;
                &lt;/body&gt;
            &lt;/html&gt;
            </code>
        </pre>
    </body>
</html>