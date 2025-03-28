<!-- archivo: 24_analisis.php -->
<html>
<head>
    <title>EJERCICIO 3_1: ANALISIS DE FORMULARIO</title>
</head>
<body>
    <h1>EJERCICIO 3_1: ANALISIS DE FORMULARIO</h1>
    <br>
    <br>
    <h1>Campo rellenado </h1>

    <?php
    // Verificar si 'firstname' está definido en el arreglo $_POST
    if (isset($_POST['firstname'])) {
        // Si el campo está definido, mostrar el saludo
        echo "Hola <b>{$_POST['firstname']}</b>, encantado de saludarte.";
    } else {
        // Si el campo no está definido, mostrar un mensaje 
        echo "Por favor, ingresa tu nombre.";
    }
    ?>
</body>
</html>