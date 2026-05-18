<?php
$frutas = ["Naranja", "Pera", "Limón", "Papaya"];

$search = "Uva";

if (in_array($search, $frutas)) {
    echo "La fruta sí está en el arreglo.";
} else {
    echo "La fruta no está en el arreglo.";
}
?>