<?php
require("rucci.html");

$usuario=(isset($_GET['usuario'])?$_GET['usuario']:"No cargaste un nombre de usuario");
$color=(isset($_GET['color'])?$_GET['color']:"No cargaste un color preferido");
$arte=(isset($_GET['arte'])?$_GET['arte']:"No cargaste un arte preferido");
?><br><br><?php
echo "Hola $usuario";?><br><?php
echo "Tu color preferido es: $color";
echo "Tu arte preferido es: $arte";?><br><br><?php
?>