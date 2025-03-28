<?php
// Datos de conexión a la base de datos
$host = 'localhost';  //  servidor local 
$usuario = 'root';    // El usuario predeterminado de MySQL en WAMP es 'root'
$contraseña = '';     //  la contraseña por defecto suele ser vacía
$baseDeDatos = 'PHPFACIL';  // El nombre de la base de datos

// Establecer la conexión con la base de datos
$conexion = new mysqli($host, $usuario, $contraseña, $baseDeDatos);

// Verificar la conexión
if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}

// Definir el nombre del curso que deseas insertar
$nombreCurso = 'Filosofia';  //  cambiar el valor de la variable $nombreCurso 

// Consulta SQL para insertar un nuevo curso
$sql = "INSERT INTO cursos (nombrecur) VALUES ('$nombreCurso')";

// Ejecutar la consulta
if ($conexion->query($sql) === TRUE) {
    echo "Nuevo curso insertado correctamente.";
} else {
    echo "Error: " . $sql . "<br>" . $conexion->error;
}

// Cerrar la conexión a la base de datos
$conexion->close();
?>

