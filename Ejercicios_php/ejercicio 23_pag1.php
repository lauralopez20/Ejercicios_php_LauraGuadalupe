<html>
<head>
	<title>Ejemplo Pagina 1 Libreria</title>
</head>

<body>
	<?php include("ejercicio 23.phtml"); ?> <!-- ponemos la direccion de nuestro archivo phtml donde tenemos configurados las funciones que llamamos  -->
	<?php CabeceraPagina(); ?> <!-- Llamada a la función CabeceraPagina() -->

	Página 1
	<BR><BR><BR><BR><BR>

	Contenido de la página: aquí se ponen más información. 
	Hola mundo....

	Fin <BR><BR>

	<?php PiePagina(); ?> <!-- Llamada a la función PiePagina() -->

</body>
</html>