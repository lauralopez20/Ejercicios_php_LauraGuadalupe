<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Practica 9 Laura</title>
</head>

<body>
<?php
/*Generar un valor aleatorio entre 1 y 5. Luego imprimir en castellano el numero (Ej. Si se genera el 3 lugo mostrar en la pagina el string “tres”). Para ver si una variable es igual a cierto valor debemos plantear una condicion similar a:
If ($valor==3)
{
//algorimo
}
*/

$numero=rand(1,5); //genera numeros aleatorio entre 1 al 5

/*mostrar el numero*/
echo $numero. "<br>";

//estructura condicional para mostrar el numero en string//
if ($numero==1) {
	echo "El numero es uno";

}elseif ($numero==2) {
	echo "El numero es dos";
} elseif ($numero==3) {
	echo "El numero es tres";
}elseif($numero== 4){
	echo "El numero es cuatro";
}elseif ($numero == 5){
	echo "El numero es cinco";
}



?>
</body>
</html>

