<?php
require("diaz_celeste.html");



$color = (isset($_GET['color']) ? $_GET['color'] : "No cargaste un color preferido");



echo "Tu color preferido de ropa es: $color";


?>