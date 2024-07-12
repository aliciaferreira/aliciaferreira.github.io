<?php
require("duarteromina.html");

$usuario=(isset($_GET['usuario'])?$_GET['usuario']:"No cargaste un nombre de usuario");
$animal=(isset($_GET['animal'])?$_GET['animal']:"No cargaste un animal preferido");
?><br><br><?php
echo "Hola $usuario";?><br><?php
echo "Tu animal preferido es: $animal";?><br><br><?php
?>