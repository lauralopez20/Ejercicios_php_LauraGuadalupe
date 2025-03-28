<?php
// Inicializar variables
$nombre = "";
$direccion = "";
$cantidadJamonQueso = 0;
$cantidadNapolitana = 0;
$cantidadMozzarella = 0;
$pedido = [];

// Verificar si el formulario ha sido enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos enviados por el formulario
    $nombre = $_POST['nombre'];
    $direccion = $_POST['direccion'];
    $cantidadJamonQueso = $_POST['cantidadJamonQueso'];
    $cantidadNapolitana = $_POST['cantidadNapolitana'];
    $cantidadMozzarella = $_POST['cantidadMozzarella'];

    // Verificar qué pizzas fueron seleccionadas y agregar las cantidades
    if (isset($_POST['jamonYQueso']) && $cantidadJamonQueso > 0) {
        $pedido[] = "Jamon y Queso: " . $cantidadJamonQueso;
    }
    if (isset($_POST['napolitana']) && $cantidadNapolitana > 0) {
        $pedido[] = "Napolitana: " . $cantidadNapolitana;
    }
    if (isset($_POST['mozzarella']) && $cantidadMozzarella > 0) {
        $pedido[] = "Mozzarella: " . $cantidadMozzarella;
    }

    // Crear el texto del pedido para grabar en el archivo (sin etiquetas HTML)
    $pedidoTexto = "Nombre: " . $nombre . "\n";
    $pedidoTexto .= "Dirección: " . $direccion . "\n";
    $pedidoTexto .= "Pizzas seleccionadas:\n";
    
    foreach ($pedido as $item) {
        $pedidoTexto .= $item . "\n";
    }
    
    // Grabar el pedido en el archivo de texto (datos.txt)
    $archivo = "datos.txt";

    // Verificar si el archivo existe, si no, crearlo
    if (!file_exists($archivo)) {
        file_put_contents($archivo, "");  // Crear el archivo vacío si no existe
    }

    // Leer el contenido actual del archivo
    $contenido = file_get_contents($archivo); 

    // Agregar el pedido al contenido, con una línea de separación
    $contenido .= "\n" . str_repeat("-", 50) . "\n\n";  // Separador de líneas de puntos
    $contenido .= $pedidoTexto;  // Agregar el pedido al archivo

    // Escribir los datos al archivo
    file_put_contents($archivo, $contenido);
}

?>

<html>
<head>
    <title>Pedido de Pizzas</title>
</head>
<body>

<h2>Formulario de Pedido de Pizzas</h2>

<form action="" method="POST">
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" value="<?php echo htmlspecialchars($nombre); ?>" required><br><br>

    <label for="direccion">Dirección:</label>
    <input type="text" name="direccion" value="<?php echo htmlspecialchars($direccion); ?>" required><br><br>

    <h3>Selecciona los tipos de pizza y la cantidad:</h3>

    <input type="checkbox" name="jamonYQueso" value="1" <?php echo isset($_POST['jamonYQueso']) ? 'checked' : ''; ?>> Jamon y Queso
    <input type="number" name="cantidadJamonQueso" value="<?php echo $cantidadJamonQueso; ?>" min="0" required><br><br>

    <input type="checkbox" name="napolitana" value="1" <?php echo isset($_POST['napolitana']) ? 'checked' : ''; ?>> Napolitana
    <input type="number" name="cantidadNapolitana" value="<?php echo $cantidadNapolitana; ?>" min="0" required><br><br>

    <input type="checkbox" name="mozzarella" value="1" <?php echo isset($_POST['mozzarella']) ? 'checked' : ''; ?>> Mozzarella
    <input type="number" name="cantidadMozzarella" value="<?php echo $cantidadMozzarella; ?>" min="0" required><br><br>

    <input type="submit" value="Confirmar">
</form>

<?php
// Mostrar el pedido si el formulario ha sido enviado
if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($pedido)) {
    echo "<h3>Pedido Confirmado</h3>";
    echo "<p><strong>Nombre:</strong> " . htmlspecialchars($nombre) . "</p>";
    echo "<p><strong>Dirección:</strong> " . htmlspecialchars($direccion) . "</p>";
    echo "<p><strong>Pizzas seleccionadas:</strong></p>";
    echo "<ul>";
    foreach ($pedido as $item) {
        echo "<li>" . $item . "</li>";
    }
    echo "</ul>";
}
?>

</body>
</html>
