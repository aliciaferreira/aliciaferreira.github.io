<?php
require ("enrique.html");

$club=(isset($_GET['club'])?$_GET['club']:"No cargaste un nombre de usuario");

echo "Hola, tu equipo favorito es : $club";





?>