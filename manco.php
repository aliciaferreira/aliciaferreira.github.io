
<?php
require("manco.html");

$usuario=(isset($_GET['usuario'])?$_GET['usuario']:"No cargaste un nombre de usuario");
$deporte=(isset($_GET['deporte'])?$_GET['deporte']:"No cargaste un color preferido");
?><br><br><?php
echo "Hola $usuario";?><br><?php
echo "Tu deporte preferido es: $deporte";?><br><br><?php
?>