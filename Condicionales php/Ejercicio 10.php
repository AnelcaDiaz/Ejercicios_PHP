<?php
$contrasenaCorrecta = "12345";

echo "Ingrese la contraseña: ";
$contrasena = readline();

if ($contrasena == $contrasenaCorrecta) {
    echo "Contraseña correcta. Acceso permitido.";
} else {
    echo "Contraseña incorrecta. Acceso denegado.";
}
?>