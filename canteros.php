<?php
require("canteros.html");

$usuario=(isset($_GET['usuario'])?$_GET['usuario']:"No cargaste un nombre de usuario");
$instrumento_musical=(isset($_GET['instrumento-musical'])?$_GET['instrumento-musical']:"No cargaste un instrumento musical preferido");
?><br><br><?php
echo "Hola $usuario";?><br><?php
echo "Tu instrumento musical preferido es: $instrumento_musical";?><br><br><?php
?>