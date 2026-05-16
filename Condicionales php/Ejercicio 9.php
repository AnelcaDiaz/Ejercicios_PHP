<?php
echo "Ingrese la primera nota: ";
$nota1 = readline();

echo "Ingrese la segunda nota: ";
$nota2 = readline();

echo "Ingrese la tercera nota: ";
$nota3 = readline();

$promedio = ($nota1 + $nota2 + $nota3) / 3;

echo "El promedio es: " . $promedio . PHP_EOL;

if ($promedio >= 3.0) {
    echo "Aprueba la materia.";
} else {
    echo "No aprueba la materia.";
}
?>