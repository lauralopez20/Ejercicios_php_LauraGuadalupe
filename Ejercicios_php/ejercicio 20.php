<html>
<head>
	<title>Tabla condicional 3</title>
</head>

<body>
	<h1>Tabla condicional 3</h1>
<?php
/*Creamos una tabla de valores de seno y coseno de 0 a 2
en incrementos de 0.01. Los valores negativos que resulten los queremos mostrar en rojo, y los valores positivos en azul*/

/*Variación. Un color diferente cada fila que se imprima para que funcione bien, necesitamos que la
variable renglon se tome "desde fuera" y no de manera local dentro de la funcion*/

function muestra($valor){
	global $nrenglon;  ///se declara la variable global
	
    //altterna el color de fondo entre las filas
    if($nrenglon%2)
		$fondo="ffff00";
	else
		$fondo="ffffff";
    
    //cambia el color del texto según su valor
	if ($valor < 0.5)
		$color="red";
	else
		$color="blue";
	 	echo "<td bgcolor= '$fondo'><font color='$color'>$valor</font></td>\n";
        $nrenglon++; //incremneta la fila despues de mostrar la celda
        
}
?>

<table border="1">
<?php

	$nrenglon=0;
	for($x=0; $x<=2; $x+=0.05){
		echo "<tr>";
		muestra ($x);
		muestra(sin($x));
		muestra(cos($x));
		echo "</tr>";
	}
?>
</body>
</html>