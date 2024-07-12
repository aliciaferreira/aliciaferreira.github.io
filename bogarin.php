<?php

require("bogarin.html");

$usuario=(isset($_GET['usuario'])?$_GET['usuario']:"No cargaste un nombre de usuario");
$localidad=(isset($_GET['llcalidad'])?$_GET['localidad']:"No pusiste localidad");
?><br><br><?php
echo "Hola $usuario";?><br><?php
echo "Tu color preferido es: $localidad";?><br><br><?php
?>