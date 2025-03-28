<?php
// Inicializar variables
$nombre = "";
$ingresos = "";
$mensaje = "";

// Verificar si el formulario ha sido enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : '';
    $ingresos = isset($_POST['ingresos']) ? $_POST['ingresos'] : '';

    // Verificar si los ingresos son mayores a 3000 y determinar si debe pagar impuestos
    if ($ingresos == ">3000") {
        $mensaje = "$nombre, debes pagar impuestos a las ganancias, ya que tus ingresos son mayores a $3000.";
    } else {
        $mensaje = "$nombre, no debes pagar impuestos a las ganancias, ya que tus ingresos son menores o iguales a $3000.";
    }
}
?>

<html>
<head>
    <title>Formulario de Impuestos</title>
    <meta http-equiv="content-type" content="text/html;charset=iso-8859-1">
</head>
<body>

<h1>Formulario de Impuestos</h1>

<?php
// Si el formulario ha sido enviado, mostrar el mensaje
if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($mensaje)):
?>

<h2>Resultado:</h2>
<p><?php echo $mensaje; ?></p>

<a href="practica14.php">Volver al formulario</a>

<?php
// Si el formulario no ha sido enviado, mostrar el formulario
else:
?>

<!-- Formulario que envía los datos a la misma página -->
<form action="" method="POST">
    Nombre: <input type="text" name="nombre" value="<?php echo htmlspecialchars($nombre); ?>" required><br><br>
    
    <p>Selecciona tus ingresos anuales:</p>
    <select name="ingresos" required>
        <option value="1-1000" <?php echo ($ingresos == "1-1000") ? "selected" : ""; ?>>$1 - $1000</option>
        <option value="1001-3000" <?php echo ($ingresos == "1001-3000") ? "selected" : ""; ?>>$1001 - $3000</option>
        <option value=">3000" <?php echo ($ingresos == ">3000") ? "selected" : ""; ?>>Mayor a $3000</option>
    </select><br><br>
    
    <input type="submit" value="Enviar">
</form>

<?php endif; ?>

</body>
</html>
