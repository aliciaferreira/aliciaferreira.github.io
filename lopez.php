<?php
require("lopez.html");

$juego=(isset($_GET['juego'])?$_GET['juego']:"No cargaste un nombre de juego favorito");

?><br><br><?php
echo "Tu juego preferido es: $juego";?><br><br><?php
?>