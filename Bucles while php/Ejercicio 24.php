<?php
$contrasenaCorrecta = "12345";
$contrasena = "";

while ($contrasena != $contrasenaCorrecta) {
    echo "Ingrese la contraseña: ";
    $contrasena = readline();

    if ($contrasena != $contrasenaCorrecta) {
        echo "Contraseña incorrecta." . PHP_EOL;
    }
}

echo "Contraseña correcta. Acceso permitido.";
?>