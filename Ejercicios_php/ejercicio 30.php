<html>
<head>
    <title>Un libro de visitas muy sencillo</title>
    <meta http-equiv="content-type" content="text/html;charset=iso-8859-1">
</head>

<body>
    <h1>Libro de visitas</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        Tu comentario: <br>
        <textarea cols="55" rows="4" name="comment"></textarea><br>
        Tu nombre:<br>
        <input type="text" name="name"><br>
        Tu email:<br>
        <input type="text" name="email"><br>
        <input type="submit" value="publica: ">
    </form>

    <h3>Mostrar todos los comentarios</h3>

    <?php
    // Guardar el nombre del archivo en la variable
    $file = "comentarios.txt";
    
    // Verificar si el comentario, nombre y email no están vacíos
    if (isset($_POST['comment']) && $_POST['name'] != "" && $_POST['email'] != "") {
        $comment = $_POST['comment'];
        $name = $_POST['name'];
        $email = $_POST['email'];

        // Verificar si el archivo existe, si no, crearlo
        if (!file_exists($file)) {
            file_put_contents($file, "");
        }

        // Abrir el archivo para escritura-lectura
        $fp = fopen($file, "r+");

        // Verificar si el archivo tiene contenido antes de leerlo
        $old = '';
        if (filesize($file) > 0) {
            // Leer los datos antiguos y almacenarlos en $old
            $old = fread($fp, filesize($file));
        }

        // Crear el enlace de email
        $email = "<a href='mailto:$email'>$email</a>";

        // Obtener la fecha y darle formato
        $dateOfEntry = date("y-n-j");

        // Convertir caracteres especiales en HTML y convertir saltos de línea
        $comment = htmlspecialchars($comment);
        $comment = nl2br($comment);  // Convertir saltos de línea a <br>

        // Crear la entrada (entry) para el libro de visitas
        $entry = "<p><b>$name</b> ($email) wrote on <i>$dateOfEntry</i>:<br><b>$comment</b></p>\n";

        // Mover el puntero al principio del archivo
        rewind($fp);

        // Escribir la nueva entrada antes de las anteriores en el archivo
        fputs($fp, "$entry$old");

        // Cerrar el archivo
        fclose($fp);
    }

    // Mostrar el contenido completo del archivo
    if (file_exists($file)) {
        readfile($file);
    }
    ?>
</body>
</html>