<?php
require("duartefederico.html");

$usuario=(isset($_GET['usuario'])?$_GET['usuario']:"No cargaste un nombre de usuario");
$futbol=(isset($_GET['futbol'])?$_GET['futbol']:"No cargaste un equipo de futbol preferido");
?><br><br><?php
echo "Hola $usuario";?><br><?php
echo "Tu equipo de futbol preferido es: $futbol";?><br><br><?php
?>