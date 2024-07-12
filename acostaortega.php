<?php
require("acostaortega.html");

$usuario=(isset($_GET['usuario'])?$_GET['usuario']:"No cargaste un nombre de usuario");
$color=(isset($_GET['color'])?$_GET['color']:"No cargaste un color preferido");
$numfav=(isset($_GET['numfav'])?$_GET['numfav']:"No cargaste un número preferido");
?><br><br><?php
echo "Hola $usuario";?><br><?php
echo "Tu color preferido es: $color";?><br><?php
echo "Tu número preferido es: $numfav";?><br><br><?php
?>