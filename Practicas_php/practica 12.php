<?php
// Inicializar variables
$nombre = "";
$estudios = "";
$mensaje = "";

// Verificar si el formulario ha sido enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : '';
    $estudios = isset($_POST['estudios']) ? $_POST['estudios'] : '';

    // Verificar que se ha seleccionado un nivel de estudios
    if ($estudios) {
        $mensaje = "$nombre, tienes estudios de nivel: $estudios.";
    } else {
        $mensaje = "$nombre, no seleccionaste un nivel de estudios.";
    }
}
?>

<html>
<head>
    <title>Formulario de Estudios</title>
    <meta http-equiv="content-type" content="text/html;charset=iso-8859-1">
</head>
<body>

<h1>Formulario de Estudios</h1>

<?php
// Si el formulario ha sido enviado, mostrar la variable mensaje
if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($mensaje)):
?>

<h2>Resultado:</h2>
<p><?php echo $mensaje; ?></p>

<a href="practica 12.php">Volver al formulario</a>

<?php
// Si no ha sido enviado, mostrar el formulario
else:
?>

<!-- Formulario que envía los datos a la misma página -->
<form action="practica 12.php" method="POST">
    Nombre: <input type="text" name="nombre" value="<?php echo htmlspecialchars($nombre); ?>" required><br><br>
    
    <p>Selecciona el nivel de estudios:</p>
    <input type="radio" name="estudios" value="No tiene estudios" <?php echo ($estudios == "No tiene estudios") ? "checked" : ""; ?> required> No tiene estudios<br>
    <input type="radio" name="estudios" value="Estudios primarios" <?php echo ($estudios == "Estudios primarios") ? "checked" : ""; ?>> Estudios primarios<br>
    <input type="radio" name="estudios" value="Estudios secundarios" <?php echo ($estudios == "Estudios secundarios") ? "checked" : ""; ?>> Estudios secundarios<br><br>
    
    <input type="submit" value="Enviar">
</form>

<?php endif; ?>

</body>
</html>