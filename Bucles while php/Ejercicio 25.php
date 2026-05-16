<?php
$contador = 0;
$i = 1;

while ($i <= 5) {
    echo "Ingrese un número: ";
    $numero = readline();

    if ($numero > 10) {
        $contador++;
    }

    $i++;
}

echo "Cantidad de números mayores a 10: " . $contador;
?>