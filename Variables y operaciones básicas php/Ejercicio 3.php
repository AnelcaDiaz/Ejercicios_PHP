<?php
echo "Ingrese un número: ";
$num = readline();

$cuadrado = pow($num, 2);
$cubo = pow($num, 3);

echo "El cuadrado es: " . $cuadrado . PHP_EOL;
echo "El cubo es: " . $cubo;
?>