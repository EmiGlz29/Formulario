<?php

$correo = $_POST["correo"];
$nombre = $_POST["nombre"];
$fecha = $_POST["fecha_nacimiento"];

echo "<h1>Datos Recibidos</h1>";
echo "Nombre: " . $nombre . "<br>";
echo "Correo: " . $correo . "<br>";
echo "Fecha de Nacimiento: " . $fecha;
?>