<?php
// Definir la función para verificar si las claves coinciden
function verificarClaves($clave1, $clave2) {
    if ($clave1 !== $clave2) {
        return "Las claves no coinciden. Por favor, inténtalo nuevamente.";
    }
    return "";
}

// Inicializar las variables
$nombreUsuario = "";
$clave1 = "";
$clave2 = "";
$mensajeError = "";

// Verificar si el formulario ha sido enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos enviados por el formulario
    $nombreUsuario = $_POST['nombreUsuario'];
    $clave1 = $_POST['clave1'];
    $clave2 = $_POST['clave2'];

    // Llamar a la función verificarClaves para comparar las dos claves
    $mensajeError = verificarClaves($clave1, $clave2);
}
?>

<html>
<head>
    <title>Formulario de Usuario</title>
</head>
<body>

<h2>Formulario de Registro de Usuario</h2>

<!-- Mostrar mensaje de error si las claves no coinciden -->
<?php
if (!empty($mensajeError)) {
    echo "<p style='color: red;'>" . $mensajeError . "</p>";
}
?>

<!-- Formulario que envía los datos a la misma página -->
<form action="" method="POST">
    <label for="nombreUsuario">Nombre de Usuario:</label>
    <input type="text" name="nombreUsuario" value="<?php echo htmlspecialchars($nombreUsuario); ?>" required><br><br>

    <label for="clave1">Clave:</label>
    <input type="password" name="clave1" required><br><br>

    <label for="clave2">Confirmar Clave:</label>
    <input type="password" name="clave2" required><br><br>

    <input type="submit" value="Registrar">
</form>

<?php
// Si las claves coinciden, mostrar un mensaje de éxito
if ($_SERVER["REQUEST_METHOD"] == "POST" && empty($mensajeError)) {
    echo "<h3>Usuario registrado exitosamente!</h3>";
    echo "<p><strong>Nombre de Usuario:</strong> " . htmlspecialchars($nombreUsuario) . "</p>";
}
?>

</body>
</html>
