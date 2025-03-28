<?php
// Inicializar variables
$contrato = "";
$modificadoContrato = "";

// Verificar si el formulario ha sido enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener el texto modificado del contrato
    $contrato = isset($_POST['contrato']) ? $_POST['contrato'] : '';

    // Procesar y mostrar el contrato modificado (reemplazar los puntos suspensivos con lo que el operador escribió)
    $modificadoContrato = nl2br(htmlspecialchars($contrato)); // Convertir saltos de línea a <br> y proteger contra inyecciones HTML
}
?>

<html>
<head>
    <title>Formulario de Contrato</title>
    <meta http-equiv="content-type" content="text/html;charset=iso-8859-1">
</head>
<body>

<h1>Contrato de Trabajo</h1>

<?php
// Si el formulario ha sido enviado, mostrar el contrato modificado
if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($modificadoContrato)):
?>

<h2>Contrato Modificado:</h2>
<p><?php echo $modificadoContrato; ?></p>

<a href="practica15.php">Volver al formulario</a>

<?php
// Si el formulario no ha sido enviado, mostrar el formulario con el contrato
else:
?>

<!-- Formulario que envía los datos a la misma página -->
<form action="" method="POST">
    <h2>Modifica el contrato</h2>
    
    <textarea name="contrato" rows="10" cols="80">
    En la ciudad de [……..], se acuerda entre la Empresa [……..] representada por el Sr. [	] en su carácter
    de Apoderado, con domicilio en la calle [……..] y el Sr. [……..], futuro empleado con domicilio en [	],
    celebrar el presente contrato a Plazo Fijo, de acuerdo a la normativa vigente de los articulos 90, 92, 93, 94, 95 y concordantes de la Ley de Contrato de Trabajo No. 20744.
    </textarea><br><br>
    
    <input type="submit" value="Enviar">
</form>

<?php endif; ?>

</body>
</html>
