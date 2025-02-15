<?php
require("aderete.html");

$usuario=(isset($_GET['usuario'])?$_GET['usuario']:"No cargaste un nombre de usuario");
$color=(isset($_GET['comida'])?$_GET['comida']:"No cargaste una comida preferida");
?><br><br><?php
echo "Hola $usuario";?><br><?php
echo "Tu comida preferido es: $comida";?><br><br><?php
?>
