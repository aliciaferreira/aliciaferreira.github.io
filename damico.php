<?php
require("damico.html");

$usuario=(isset($_GET['usuario'])?$_GET['usuario']:"No cargaste un nombre de usuario");
$color=(isset($_GET['color'])?$_GET['color']:"No cargaste un color preferido");
$edad=(isset($_GET['edad'])?$_GET['edad']:"No cargaste tu edad");
?><br><br><?php
echo "Hola $usuario";?><br><?php
echo "Tu color preferido es: $color";?><br><br><?php
echo "Tu edad es: $edad";?><br><br><?php
?>