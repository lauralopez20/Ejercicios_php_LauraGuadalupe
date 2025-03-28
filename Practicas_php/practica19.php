<html>
<head>
    <title>Vector Asociativo - Usuarios y Claves</title>
</head>


<body>

<h2>Usuarios y sus claves de acceso</h2>

<!-- Los resultados serán impresos por el código PHP con el ciclo for each---->
<?php
// Crear un vector asociativo con usuarios y sus respectivas claves de acceso
$usuarios = [
    "Morales" => "clave123",
    "Alejandro" => "password456",
    "Pedro" => "secreto789",
    "Paola" => "abc123",
    "Hernandez" => "contraseña101"
];

// Imprimir cada usuario y su clave de acceso
foreach ($usuarios as $usuario => $clave) {
    echo "<p><strong>Usuario:</strong> " . $usuario . " <strong>Clave de acceso:</strong> " . $clave . "</p>";
}
?>

</body>
</html>
