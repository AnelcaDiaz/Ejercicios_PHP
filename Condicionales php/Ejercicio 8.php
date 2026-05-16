<?php
echo "Ingrese el primer número: ";
$num1 = readline();

echo "Ingrese el segundo número: ";
$num2 = readline();

if ($num1 > $num2) {
    echo "El número mayor es: " . $num1;
} elseif ($num2 > $num1) {
    echo "El número mayor es: " . $num2;
} else {
    echo "Ambos números son iguales.";
}
?>