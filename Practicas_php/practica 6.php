<html>

<head>
	<title> Practica 6 por Laura Guadalupe</title>
</head>

<body>
	
<h1> Practica 6</h1>

<?php
/*Sabiendo que la función RAND nos retorna un valor aleatorio entre un rango de dos enteros:

$num = rand(1,100);

En la variable $num se almacena un valor entero que la computadora genera en forma aleatoria entre 1 y 100. Hacer un programa que lo muestre por pantalla al valor generado. Mostrar además si es menor o igual a 50 o si es mayor. Para imprimir el contenido de una variable también utilizamos el comando ECHO */

$num= rand(1,100); //genera numeros aletorios dentro de un rnago establecido

/*Solo ,$nombrevariable; para concatenar*/
echo "Numero generado aletoriamente: " ,$num, "<br>";
echo "<br>";


//Estructura condicional If-Else
if ($num<=50) {
	echo "El numero ", $num, " es menor o igual a 50";
}else{
	echo "El numero ", $num, " es mayor a 50";
}


?>

</body>
</html>
