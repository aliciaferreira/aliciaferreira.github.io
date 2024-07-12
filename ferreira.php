<?php
require("ferreira.html");

$usuario=(isset($_GET['usuario'])?$_GET['usuario']:"No cargaste un nombre de usuario");
$juego_de_mesa=(isset($_GET['juego_de_mesa'])?$_GET['juego_de_mesa']:"No cargaste un juego de mesa preferido");
?><br><br><?php
echo "Hola $usuario";?><br><?php
echo "Tu juego de mesa preferido es: $juego_de_mesa";?><br><br><?php
?>