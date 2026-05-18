<?php
$numero = 1;

while ($numero != 0) {
    echo "Ingrese un número (0 para salir): ";
    $numero = readline();

    echo "Número ingresado: " . $numero . "\n";
}

echo "Programa finalizado.";
?>