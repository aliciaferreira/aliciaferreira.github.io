<?php
require("manco.html");

$usuario=(isset($_GET['usuario'])?$_GET['usuario']:"No cargaste un nombre de usuario");
$color=(isset($_GET['color'])?$_GET['color']:"No cargaste un color preferido");
$deporte=(isset($_GET['deporte'])?$_GET['deporte']: "No cargaste un deporte preferido");
?><br><br><?php
echo "Hola $usuario";?><br><?php
echo "Tu color preferido es: $color";?><br><br><?php
echo "Tu deporte preferido es: $deporte";?><br><br><?php
?>