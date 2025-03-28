<html>
<head>
    <title>Tabla de Multiplicar del 2 - For</title>
</head>
<body>
    <!----Tabla de multiplicar del 2 usando Ciclo FOR--->
    <h1>Tabla de Multiplicar del 2 (Usando FOR)</h1>
    <table border="1">
        <tr>
            <th>Operación</th>
            <th>Resultado</th>
        </tr>
        <?php
        // Usamos un ciclo FOR para la tabla de multiplicar del 2
        for ($f = 1; $f <= 10; $f++) {
            $resultado = 2 * $f;
            echo "<tr><td>2 x $f</td><td>$resultado</td></tr>";
        }
        ?>
    </table>
</body>
</html>



<html>
<head>
    <title>Tabla de Multiplicar del 2 - While</title>
</head>
<body>
    <!----Tabla de multiplicar del 2 usando Ciclo WHILE--->
    <h1>Tabla de Multiplicar del 2 (Usando WHILE)</h1>
    <table border="1">
        <tr>
            <th>Operación</th>
            <th>Resultado</th>
        </tr>
        <?php
        // Usamos un ciclo WHILE para la tabla de multiplicar del 2
        $f = 1;
        while ($f <= 10) {
            $resultado = 2 * $f;
            echo "<tr><td>2 x $f</td><td>$resultado</td></tr>";
            $f++;  // Incrementamos la variable
        }
        ?>
    </table>
</body>
</html>



<html>
<head>
    <title>Tabla de Multiplicar del 2 - Do/While</title>
</head>
<body>
    
    <!----Tabla de multiplicar del 2 usando DO/WHILE--->

    <h1>Tabla de Multiplicar del 2 (Usando DO/WHILE)</h1>
    <table border="1">
        <tr>
            <th>Operación</th>
            <th>Resultado</th>
        </tr>
        <?php
        // Usamos un ciclo DO/WHILE para la tabla de multiplicar del 2
        $f = 1;
        do {
            $resultado = 2 * $f;
            echo "<tr><td>2 x $f</td><td>$resultado</td></tr>";
            $f++;  // Incrementamos la variable
        } while ($f <= 10);
        ?>
    </table>
</body>
</html>