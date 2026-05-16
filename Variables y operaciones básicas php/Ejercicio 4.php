<?php
echo "Ingrese la temperatura en grados Celsius: ";
$celsius = readline();

$fahrenheit = ($celsius * 9/5) + 32;

echo "La temperatura en Fahrenheit es: " . $fahrenheit;
?>