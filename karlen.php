<?php
require("karlen.html");


$comida=(isset($_GET['comida'])?$_GET['comida']:"No cargaste una comida favorita");

echo "Tu comida favorita es: $comida";


?>





