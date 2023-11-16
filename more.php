<?php
require("more.html");

$pelicula = (isset($_GET['pelicula']) ? $_GET['pelicula'] : "No cargaste tus películas de preferencia");


echo "Tu película de preferencia es: " . $pelicula;
