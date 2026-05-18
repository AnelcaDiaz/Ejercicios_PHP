<?php
$notas = [4.0, 3.0, 2.0, 4.9, 2.8];

$suma = array_sum($notas);
$cantidad = count($notas);

$promedio = $suma / $cantidad;

echo "El promedio es: " . $promedio;
?>