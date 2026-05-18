<?php
$suma = 0;

while ($suma <= 100) {
    echo "Ingrese un número: ";
    $numero = readline();

    $suma += $numero;

    echo "Suma actual: " . $suma . "<br>";
}

echo "La suma ha superado 100.";
?>