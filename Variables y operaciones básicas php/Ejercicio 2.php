<?php
echo "Ingrese el primer número: ";
$num1 = readline();

echo "Ingrese el segundo número: ";
$num2 = readline();

$resta = $num1 - $num2;
$multiplicacion = $num1 * $num2;

echo "La resta es: " . $resta . PHP_EOL;
echo "La multiplicación es: " . $multiplicacion . PHP_EOL;

if ($num2 != 0) {
    $division = $num1 / $num2;
    echo "La división es: " . $division;
} else {
    echo "No se puede dividir entre cero.";
}
?>