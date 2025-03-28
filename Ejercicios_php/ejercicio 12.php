
<html>

<head>
	<title>Ejemplo de operadores Lógicos Laura</title>
</head>

<body>
	<h1>Ejemplo de operaciones lógicas en PHP</h1>
	<?php
	$a=8;
	$b=3;
	$c=3;

	/* verdadero=1
	   falso=0*/

	echo ($a==$b)&& ($c>$b),"<br>"; // 8 es igual a 3 es falso, y 3 es mayor que 3 es falso el resultado es :falso=0
	echo ($a==$b)|| ($c ==$b),"<br>";  // Operador logico O (OR) , 8 y 3 son iguales es falso O c y b son iguales es verdadero=1, una condicion se cumple el resultado es verdadero=0 
	echo !($b<= $c),"<br>"; // b y c son iguales es true, pero con la negacion logica !() se invierta el valor a false=0
	?>

</body>
</html>



