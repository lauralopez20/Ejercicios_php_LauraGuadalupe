<html>

<html lang="es"> 
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> EJERCICIO 3_1: ANALISIS DE FORMULARIO</title>
</head>

<body>
	<h1>Ejercicio 25 (archivo.php)</h1>
	<h1>analisis de formularios </h1>

<?php
if($_POST['gender']==0){
	echo "Hola Sr.";
}
else{
	echo "Hola Sra. ";
}

echo "<b>{$_POST['lastname']}</b>, encantado de saludarte.";
?>

</body>
</html>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

</body>
</html>