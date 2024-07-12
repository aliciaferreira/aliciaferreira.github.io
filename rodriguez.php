<?php
require("rodriguez.html");

$usuario=(isset($_GET['usuario'])?$_GET['usuario']:"No cargaste un nombre de usuario");
$juegos=(isset($_GET['juegos'])?$_GET['juegos']:"No cargaste tu juego favorito");
?><br><br><?php
echo "Hola $usuario";?><br><?php
echo "Tu juego favorito es: $juegos";?><br><br><?php
?>