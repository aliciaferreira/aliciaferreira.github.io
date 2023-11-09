<?php
require("herdeli.html");



$color = (isset($_GET['color']) ? $_GET['color'] : "No cargaste un color preferido");


echo "Tu color preferido es: $color";


?>
