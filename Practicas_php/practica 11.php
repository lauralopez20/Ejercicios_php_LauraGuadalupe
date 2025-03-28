<html>
<head>
    <title>Formulario de Edad</title>
    <meta http-equiv="content-type" content="text/html;charset=iso-8859-1">
</head>
<body>

<h1>Formulario: ¿Eres mayor de edad?</h1>

<!-- Formulario que envía los datos a la página "resultado_practica11.php" -->
<form action="resultado_practica11.php" method="POST">
    Nombre: <input type="text" name="nombre" required><br><br>
    Edad: <input type="number" name="edad" required><br><br>
    <input type="submit" value="Verificar">
</form>

</body>
</html>