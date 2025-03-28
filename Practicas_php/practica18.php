<?php
// Definir el nombre del archivo
$archivo = "datos.txt";

// Verificar si el archivo existe antes de intentar leerlo
if (file_exists($archivo)) {
    // Leer el contenido del archivo
    $contenido = file_get_contents($archivo);
} else {
    // Si el archivo no existe, mostrar un mensaje
    $contenido = "No se encontró el archivo de pedidos.";
}

?>

<html>
<head>
    <title>Pedidos de Pizzas</title>
</head>
<body>

<h2>Pedidos de Pizzas Realizados</h2>

<!-- Mostrar el contenido del archivo o el mensaje de error -->
<pre>
<?php echo nl2br($contenido); ?>
</pre>

</body>
</html>
