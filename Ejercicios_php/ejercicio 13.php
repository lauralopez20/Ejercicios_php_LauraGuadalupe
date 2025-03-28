<!DOCTYPE html>
<!---Ejercicio realizado por Laura Guadalupe Lopez Piñon---->
<!--- Materia: Programacion Web ---------->
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio PHP - Comprar Dulces</title>
</head>
<body>
    <h1>Juan y María comprando dulces</h1>

    <?php
        // Definir las variables de dinero de Juan y María
        $dinero_juan = 15;  // Juan tiene 15 pesos
        $dinero_maria = 12;  // María tiene 12 pesos

        // El costo de los dulces
        $costo_dulces = 20;  // Los dulces valen 20 pesos

        // Sumar el dinero de Juan y María
        $dinero_total = $dinero_juan + $dinero_maria;

        // Imprimir si tienen suficiente dinero para comprar los dulces
        echo "Juan tiene $".$dinero_juan." pesos. <br>";
        echo "María tiene $".$dinero_maria." pesos. <br>";
        echo "El costo de los dulces es $".$costo_dulces." pesos. <br>";

        // Comparar si tienen suficiente dinero para comprar los dulces
        if ($dinero_total >= $costo_dulces) {
            echo "¡Sí! Juan y María pueden comprar los dulces, ya que tienen $".$dinero_total." pesos en total.";
        } else {
            echo "No tienen suficiente dinero. Solo tienen $".$dinero_total." pesos.";
        }
    ?>
</body>
</html>