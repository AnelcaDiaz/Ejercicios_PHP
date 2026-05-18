<?php
$contrasenaCorrecta = "12345";
$contrasena = "";

while ($contrasena != $contrasenaCorrecta) {
    echo "Ingrese la contraseña: ";
    $contrasena = readline();

    if ($contrasena != $contrasenaCorrecta) {
        echo "Contraseña incorrecta." . "\n";
    }
}

echo "Contraseña correcta. Acceso permitido.";
?>