<?php
require("camara.html");

$usuario = (isset($_GET['usuario']))? $_GET['usuario']:"No cargaste un nombre de usuario";
$serie = (isset($_GET['serie']))? $_GET['serie']:"No cargaste una serie preferia";
?><br><br><?php
echo "Hola $usuario";?><br><?php
echo "Tu serie preferida es: $serie";?><br><br><?php
?>