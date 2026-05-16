<?php
$suma = 0;

while ($suma <= 100) {
    echo "Ingrese un número: ";
    $numero = readline();

    $suma += $numero;

    echo "Suma actual: " . $suma . PHP_EOL;
}

echo "La suma ha superado 100.";
?>