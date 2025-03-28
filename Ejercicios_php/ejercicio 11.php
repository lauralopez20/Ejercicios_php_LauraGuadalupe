<html>

<head>
	<title>Ejemplo de Operadores de Comparacion </title>
</head>

<body>
	<h1>Ejemplo de Operaciones Comparación en PHP</h1>
<?php

$a =8;
$b=3;
$c=3;
/*
echo $a == $b,"<br>";
echo $a != $b,"<br>";
echo $a < $b, "<br>";
echo $a > $b, "<br>";
echo $a >= $b, "<br>";
echo $a <= $b, "<br>";
*/

//Forma optimizada
/*Imprimir valores en pantalla junto con las operadores de comparacion*/
echo "$a == $b: " . ($a == $b) . "<br>";  // Comparación de igualdad
echo "$a != $b: " . ($a != $b) . "<br>";  // Comparación de desigualdad
echo "$a < $b: " . ($a < $b) . "<br>";    // Comparación menor que
echo "$a > $b: " . ($a > $b) . "<br>";    // Comparación mayor que
echo "$a >= $b: " . ($a >= $b) . "<br>";  // Comparación mayor o igual que
echo "$a <= $b: " . ($a <= $b) . "<br>";  // Comparación menor o igual que


echo "Los resultados con el numero 0=Falso y 1= verdadero";
?>
</body>

</html>


