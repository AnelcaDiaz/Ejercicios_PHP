<?php
$numero = 1;

while ($numero != 0) {
    echo "Ingrese un número (0 para salir): ";
    $numero = readline();

    echo "Número ingresado: " . $numero . PHP_EOL;
}

echo "Programa finalizado.";
?>