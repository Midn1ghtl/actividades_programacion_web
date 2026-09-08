<?php

$nombre = $_POST["nombre"];
$email = $_POST["email"];
$tel = $_POST["tel"];
$pais = $_POST["pais"];
$fecha = $_POST["fecha"];
$frecuencia = $_POST["frecuencia"];

echo "<h1>¡Gracias por suscribirte!</h1>";

echo "Nombre: " . $nombre . "<br>";
echo "Correo: " . $email . "<br>";
echo "Teléfono: " . $tel . "<br>";
echo "País: " . $pais . "<br>";
echo "Fecha: " . $fecha . "<br>";
echo "Frecuencia: " . $frecuencia . "<br>";

?>