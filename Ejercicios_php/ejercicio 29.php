<html>
<head>
	<title>Contador sencillo</title>
</head>
<body>
	<h1>Contador sencillo</h1>
	<p>Cantidad de visitas: 
	<b>
	<?php
	// Verifica si el archivo 'counter.txt' existe
	if (file_exists("counter.txt")) {
		// Abre el archivo para leer y escribir
		$fp = fopen("counter.txt", "r+");
		// Lee el valor actual del contador
		$counter = fgets($fp, 7);
		// Incrementa el contador
		$counter++;
		// Mueve el puntero al inicio del archivo para sobrescribir el valor
		rewind($fp);
		// Escribe el nuevo valor del contador
		fputs($fp, $counter);
		// Cierra el archivo
		fclose($fp);
	} else {
		// Si el archivo no existe, lo crea con un valor inicial de 1
		$fp = fopen("counter.txt", "w");
		$counter = 1; // Inicia el contador en 1
		fputs($fp, $counter);
		fclose($fp);
	}
	// Muestra el contador de visitas
	echo $counter;
	?>
	</b></p>
</body>
</html>