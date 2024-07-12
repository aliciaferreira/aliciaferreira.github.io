<?php
require("rojas.html");

$usuario=(isset($_GET['usuario'])?$_GET['usuario']:"No cargaste un nombre de usuario");

$equipo=(isset($_GET['equipo'])?$_GET['equipo']:"No cargaste un equipo preferido");
?><br><br><?php
echo "Hola $usuario";?><br><?php

echo "Tu equipo preferido es: $equipo";?><br><br>
