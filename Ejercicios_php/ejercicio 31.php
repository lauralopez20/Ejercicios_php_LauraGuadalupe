<?php
// Nombre del archivo para almacenar las respuestas
$file = "encuesta.txt";

// Verificar si el formulario fue enviado
if (isset($_POST['submit'])) {
    // Verificar que se haya seleccionado una respuesta
    if (isset($_POST['respuesta']) && in_array($_POST['respuesta'], [0, 1, 2])) {
        // Leer los resultados previos desde el archivo
        if (file_exists($file)) {
            $resultados = file_get_contents($file);
        } else {
            $resultados = "0,0,0"; // Inicializar en caso de que el archivo esté vacío
        }

        // Convertir los resultados a un array
        $arr_resultados = explode(",", $resultados);

        // Aumentar la respuesta correspondiente
        $respuesta = (int)$_POST['respuesta'];
        $arr_resultados[$respuesta]++;

        // Convertir de nuevo el array a una cadena
        $nuevos_resultados = implode(",", $arr_resultados);

        // Guardar los nuevos resultados en el archivo
        file_put_contents($file, $nuevos_resultados);

        // Mostrar mensaje de agradecimiento
        echo "<p>Gracias por tu respuesta.</p>";
    } else {
        echo "<p>Por favor, selecciona una opción antes de enviar tu respuesta.</p>";
    }
}

// Leer y mostrar los resultados de la encuesta
if (file_exists($file)) {
    $resultados = file_get_contents($file);
    $arr_resultados = explode(",", $resultados);
    $total_votos = array_sum($arr_resultados);
    $porcentaje_excelente = ($total_votos > 0) ? round(($arr_resultados[0] / $total_votos) * 100, 2) : 0;
    $porcentaje_mas_o_menos = ($total_votos > 0) ? round(($arr_resultados[1] / $total_votos) * 100, 2) : 0;
    $porcentaje_bah = ($total_votos > 0) ? round(($arr_resultados[2] / $total_votos) * 100, 2) : 0;

    echo "<h3>Resultados de la encuesta</h3>";
    echo "<p><b>Excelente, he aprendido mucho:</b> {$arr_resultados[0]} votos ({$porcentaje_excelente}%)</p>";
    echo "<p><b>Más o menos, es muy complicado:</b> {$arr_resultados[1]} votos ({$porcentaje_mas_o_menos}%)</p>";
    echo "<p><b>Bah! Para qué quiero aprender PHP:</b> {$arr_resultados[2]} votos ({$porcentaje_bah}%)</p>";
}
?>

<html>
<head>
    <title>Encuesta: ¿Qué opinas de este curso de PHP?</title>
    <meta http-equiv="content-type" content="text/html;charset=iso-8859-1">
</head>
<body>

<h1>Encuesta: ¿Qué opinas de este curso de PHP?</h1>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <input type="radio" name="respuesta" value="0" id="excelente"> Excelente, he aprendido mucho<br>
    <input type="radio" name="respuesta" value="1" id="mas_o_menos"> Más o menos, es muy complicado<br>
    <input type="radio" name="respuesta" value="2" id="bah"> Bah! Para qué quiero aprender PHP<br><br>
    <input type="submit" name="submit" value="Votar">
</form>

<!-- Enlace a los resultados -->
<p><a href="encuesta.txt" target="_blank">Ver resultados de la encuesta</a></p>

</body>
</html>
