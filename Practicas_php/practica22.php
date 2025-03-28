<html>
<head>
    <title>Practica 22 Listado de la tabla</title>

<style>
    table {
        width: 60%;
        margin: 20px auto;
        border-collapse: collapse;
    }
    th, td {
        padding: 10px;
        text-align: center;
        border: 1px solid #ddd;
    }
    th {
        background-color: #f2f2f2;
    }
</style>

    
</head>

<body>
<?php
// Configuración de conexión a la base de datos
$host = 'localhost';      // Si estás usando un servidor local como WAMP
$usuario = 'root';        // Usuario predeterminado de MySQL (si usas WAMP o XAMPP es 'root')
$contraseña = '';         // Contraseña vacía por defecto en WAMP y XAMPP
$baseDeDatos = 'PHPFACIL'; // Nombre de la base de datos

// Establecer la conexión con la base de datos
$conexion = new mysqli($host, $usuario, $contraseña, $baseDeDatos);

// Verificar si la conexión fue exitosa
if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}

// Consulta SQL para seleccionar todos los registros de la tabla 'cursos'
$sql = "SELECT * FROM cursos";

// Ejecutar la consulta
$resultado = $conexion->query($sql);

// Verificar si la consulta devuelve resultados
if ($resultado->num_rows > 0) {
    // Mostrar los resultados en una tabla HTML
    echo "<table border='1' style='width:50%; margin:auto; border-collapse:collapse;'>";
    echo "<tr><th>Código</th><th>Nombre del Curso</th></tr>";

    // Recorrer todos los registros y mostrarlos
    while ($fila = $resultado->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $fila['codigo'] . "</td>";
        echo "<td>" . $fila['nombrecur'] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "No se encontraron registros en la tabla 'cursos'.";
}

// Cerrar la conexión con la base de datos
$conexion->close();

?>

</body>
</html>
