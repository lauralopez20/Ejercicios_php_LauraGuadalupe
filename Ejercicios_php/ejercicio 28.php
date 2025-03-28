<?php
// Verifica si el formulario ha sido enviado
if (isset($_POST['submit'])) {
    // Obtener los valores del formulario
    $name = $_POST['name'];           // Nombre del remitente
    $email = $_POST['email'];         // Correo electrónico del remitente
    $message = $_POST['message'];     // Mensaje enviado
    
    // Dirección de correo electrónico del webmaster
    $to = "laulop241@gmail.com";    // Cambia esto por tu correo real

    // Asunto del correo
    $subject = "Nuevo mensaje desde el formulario de contacto";

    // Cabeceras del correo electrónico (para asegurarse de que se envíe como texto HTML)
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";  // Asegura que el mensaje se envíe como HTML

    // Cuerpo del mensaje
    $body = "<h2>Mensaje de: $name</h2>";
    $body .= "<p><strong>Email:</strong> $email</p>";
    $body .= "<p><strong>Mensaje:</strong></p>";
    $body .= "<p>$message</p>";

    // Enviar el correo
    if (mail($to, $subject, $body, $headers)) {
        echo "Gracias, tu mensaje ha sido enviado exitosamente.";
    } else {
        echo "Hubo un error al enviar tu mensaje. Por favor, intenta nuevamente.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Contacto</title>
</head>
<body>
    <h1>Formulario de Contacto</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <label for="name">Nombre:</label>
        <input type="text" name="name" required><br><br>
        
        <label for="email">Correo Electrónico:</label>
        <input type="email" name="email" required><br><br>
        
        <label for="message">Mensaje:</label><br>
        <textarea name="message" rows="4" cols="50" required></textarea><br><br>
        
        <input type="submit" name="submit" value="Enviar">
    </form>
</body>
</html>