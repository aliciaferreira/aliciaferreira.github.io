<?php
require("galvan.html");

$usuario=(isset($_GET['usuario'])?$_GET['usuario']:"No cargaste un nombre de usuario");
$equipo_futbol=(isset($_GET['equipo-futbol'])?$_GET['equipo-futbol']:"No cargaste un equipo preferido");
?><br><br><?php
echo "Hola $usuario";?><br><?php
echo "Tu equipo preferido es: $equipo_futbol";?><br><br><?php
?>