<?php
require("avalos.html");

$usuario = (isset($_GET['usuario']) ? $_GET['usuario'] : "No cargaste un nombre de usuario");
$preferencia = $_GET['Preferencia'];
echo "Hola $usuario  tu preferencia es $preferencia";


?>
