<html>
<head>
    <title> El gran agujero de seguridad </title>
</head>
<body>
    <h2>Agujero de seguridad en register_globals= On</h2>

    <form action="ejercicio 33.php" method="post">
        Contraseña: <input type="password" name="pass">
        <input type="submit" value="Enviar">
    </form>

    <?php
    // Verificar si se ha enviado la contraseña desde el formulario
    if (isset($_POST['pass'])) {
        if ($_POST['pass'] == "abc_xyz_123") {
            $login = "true";
        } else {
            $login = "false";  // Contraseña incorrecta
        }
    }

    // Si el login es correcto, se muestra el mensaje
    if (isset($login) && $login == "true") {
        echo "<p> Aqui empieza el arma secreta. </p>";
    }

    // Si la contraseña es incorrecta, mostrar un mensaje de error
    if (isset($login) && $login == "false") {
        echo "<p style='color:red;'>La contraseña es incorrecta. Por favor, intente de nuevo.</p>";
    }
    ?>
</body>
</html>


