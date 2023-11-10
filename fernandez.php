<?php
require("fernandez.html");

$usuario=(isset($_POST['usuario'])?$_POST['usuario']:"No cargaste un nombre de usuario");


echo "Hola $usuario";

?>