<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado de Repetición</title>
</head>
<body>
    <h1>Resultado del Bucle While</h1>


    <?php
    /* Mostraremos el uso de la sentencia While y comenzamos a usar entrada del teclado mediante un formulario simple */
        // Verificar si el formulario ha sido enviado y si la variable 'numero' está presente
        if (isset($_POST['numero'])) {
            // Obtener el número ingresado por el usuario desde el formulario
            $numero = $_POST['numero'];

            // Comprobar si el número es válido (mayor que 0)
            if ($numero > 0) {
                $contador = 1; // Inicializar el contador

                // Usar un ciclo while para imprimir un mensaje tantas veces como el número indicado
                while ($contador <= $numero) {
                    echo "¡Esta es la repetición número $contador! <br>\n";
                    $contador++; // Incrementar el contador
                }
                echo "¡Se acabaron las repeticiones!<br>\n"; // Mensaje final después del ciclo
            } else {
                // Si el número es menor o igual a 0, mostrar un mensaje de error
                echo "Por favor, ingresa un número mayor que 0.<br>\n";
            }
        } else {
            // Si no se ha enviado el formulario, mostrar un mensaje pidiendo la entrada
            echo "Por favor, ingresa un número en el formulario.<br>\n";
        }
    ?>

</body>
</html>