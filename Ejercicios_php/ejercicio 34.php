<html>
<head>
    <title>Mi álbum de fotografías</title>
</head>
<body>
    <h1>Mi álbum de fotos en línea</h1>
    <h3>Cargar archivo</h3>

    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" enctype="multipart/form-data">
        <input type="file" name="archivo">
        <input type="submit" name="submit" value="Cargar archivo">
    </form>

    <?php
    $ruta = "C:\wamp64\www\Ejercicios php\img"; // Especificar la ruta donde se guardarán las imágenes

    // Verificar si el formulario ha sido enviado y si se ha cargado un archivo
    if (isset($_FILES['archivo']) && $_FILES['archivo']['size'] > 0) { // Aquí se cerró el paréntesis correctamente

        // Verificar si el directorio de destino existe, si no, crearlo
        if (!is_dir($ruta)) {
            mkdir($ruta, 0777, true); // Crear el directorio si no existe
        }

        $tamanyomax = 200000; // Tamaño máximo de archivo (200 KB)
        $nombretemp = $_FILES['archivo']['tmp_name']; // Ruta temporal del archivo subido
        $nombrearchivo = $_FILES['archivo']['name']; // Nombre original del archivo
        $tamanyoarchivo = $_FILES['archivo']['size']; // Tamaño del archivo

        // Verificar si el archivo subido es una imagen válida (JPG o GIF)
        $tipoarchivo = getimagesize($nombretemp);
        
        if ($tipoarchivo !== false) {
            // Si el archivo es JPG o GIF
            if ($tipoarchivo[2] == IMAGETYPE_GIF || $tipoarchivo[2] == IMAGETYPE_JPEG) {
                // Verificar el tamaño del archivo
                if ($tamanyoarchivo <= $tamanyomax) {
                    // Mover el archivo desde la ubicación temporal al directorio de destino
                    if (move_uploaded_file($nombretemp, $ruta . $nombrearchivo)) {
                        echo "<p>El archivo se ha cargado con éxito.</p>";
                    } else {
                        echo "<p>No se ha podido cargar el archivo.</p>";
                    }
                } else {
                    echo "<p>El archivo tiene más de <b>$tamanyomax bytes</b> y es demasiado grande.</p>";
                }
            } else {
                echo "<p>No es un archivo GIF o JPG válido.</p>";
            }
        } else {
            echo "<p>El archivo no es una imagen válida.</p>";
        }
    }

    // Mostrar todas las imágenes en el directorio
    if ($handle = opendir($ruta)) {
        while (($file = readdir($handle)) !== false) {
            if ($file != "." && $file != "..") {
                echo "<p><img src='$ruta$file' alt='$file' width='200'><br></p>";
            }
        }
        closedir($handle); // Cerrar el directorio
    }
    ?>

</body>
</html>
