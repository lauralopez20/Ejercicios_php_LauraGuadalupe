<?php
// Configuración de conexión a la base de datos
$host = 'localhost';      // Si usas un servidor local como WAMP o XAMPP
$usuario = 'root';        // Usuario predeterminado de MySQL
$contraseña = '';         // Contraseña vacía por defecto en WAMP y XAMPP
$baseDeDatos = 'PHPFACIL'; // Nombre de la base de datos

// Establecer la conexión con la base de datos
$conexion = new mysqli($host, $usuario, $contraseña, $baseDeDatos);

// Verificar si la conexión fue exitosa
if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}

// Verificar si se ha enviado el formulario
if (isset($_POST['nombre'])) {
    // Obtener el nombre del alumno desde el formulario
    $nombreAlumno = $_POST['nombre'];

    // Consulta SQL para seleccionar todos los registros de los alumnos con el nombre proporcionado
    $sql = "SELECT * FROM alumnos WHERE nombre LIKE ?";
    $stmt = $conexion->prepare($sql);
    $nombreBuscado = "%" . $nombreAlumno . "%";  // Para permitir coincidencias parciales en el nombre
    $stmt->bind_param("s", $nombreBuscado);  // "s" indica que es una cadena (string)
    $stmt->execute();
    $resultado = $stmt->get_result();

    // Verificar si se recuperaron resultados
    if ($resultado->num_rows > 0) {
        echo "<h2>Resultados para: $nombreAlumno</h2>";
        echo "<table border='1' style='width:60%; margin:auto; border-collapse:collapse;'>";
        echo "<tr><th>Código</th><th>Nombre</th><th>Email</th></tr>";

        // Recorrer todos los registros y mostrarlos
        while ($fila = $resultado->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $fila['codigo'] . "</td>";
            echo "<td>" . $fila['nombre'] . "</td>";
            echo "<td>" . $fila['email'] . "</td>";
            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "No se encontraron resultados para el nombre: $nombreAlumno.";
    }
} else {
    echo "No se ha enviado el formulario.";
}

// Cerrar la conexión con la base de datos
$conexion->close();
?>
