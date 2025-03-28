<?php
// Inicializar variables
$nombre = "";
$deportes = [];
$cantidadDeportes = 0;

// Verificar si el formulario ha sido enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : '';
    
    // Obtener los deportes seleccionados (puede ser un array)
    if (isset($_POST['deportes'])) {
        $deportes = $_POST['deportes'];
        $cantidadDeportes = count($deportes); // Contar la cantidad de deportes seleccionados
    }
}
?>

<html>
<head>
    <title>Formulario de Deportes</title>
    <meta http-equiv="content-type" content="text/html;charset=iso-8859-1">
</head>
<body>

<h1>Formulario de Deportes</h1>

<?php
// Si el formulario ha sido enviado, mostrar el mensaje con la cantidad de deportes
if ($_SERVER["REQUEST_METHOD"] == "POST" && $cantidadDeportes > 0):
?>

<h2>Resultado:</h2>
<p>Hola <?php echo htmlspecialchars($nombre); ?>, practicas <?php echo $cantidadDeportes; ?> deporte(s):</p>
<ul>
    <?php
    // Mostrar los deportes seleccionados
    foreach ($deportes as $deporte) {
        echo "<li>" . htmlspecialchars($deporte) . "</li>";
    }
    ?>
</ul>

<?php
// Si el formulario no ha sido enviado, mostrar el formulario
else:
?>

<!-- Formulario que envía los datos a la misma página -->
<form action="" method="POST">
    Nombre: <input type="text" name="nombre" value="<?php echo htmlspecialchars($nombre); ?>" required><br><br>
    
    <p>Selecciona los deportes que practicas:</p>
    <input type="checkbox" name="deportes[]" value="Futbol" <?php echo in_array("Futbol", $deportes) ? "checked" : ""; ?>> Futbol<br>
    <input type="checkbox" name="deportes[]" value="Basket" <?php echo in_array("Basket", $deportes) ? "checked" : ""; ?>> Basket<br>
    <input type="checkbox" name="deportes[]" value="Tennis" <?php echo in_array("Tennis", $deportes) ? "checked" : ""; ?>> Tennis<br>
    <input type="checkbox" name="deportes[]" value="Voley" <?php echo in_array("Voley", $deportes) ? "checked" : ""; ?>> Voleibol <br><br>
    
    <input type="submit" value="Enviar">
</form>

<?php endif; ?>

</body>
</html>
