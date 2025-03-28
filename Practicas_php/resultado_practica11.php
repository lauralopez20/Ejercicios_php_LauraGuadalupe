<?php
// Recuperar los datos del formulario
$nombre = isset($_POST['nombre']) ? $_POST['nombre'] : '';
$edad = isset($_POST['edad']) ? $_POST['edad'] : 0;

// Verificar si la persona es mayor de edad
if ($edad >= 18) {
    $mensaje = "$nombre, eres mayor de edad.";
} else {
    $mensaje = "$nombre, no eres mayor de edad.";
}
?>

<html>
<head>
    <title>Resultado del formulario: Mayor de Edad</title>
    <meta http-equiv="content-type" content="text/html;charset=iso-8859-1">
</head>
<body>

<h1>Resultado de la verificación</h1>
<p><?php echo $mensaje; ?></p>

<a href="practica 11.php">Volver al formulario</a>

</body>
</html>