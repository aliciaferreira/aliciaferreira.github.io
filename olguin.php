<?php

$materia = (isset($_POST['materia']) ? $_POST['materia'] : "No cargaste un nombre de materia");

echo "<h1>Ahora anoto que te gusta la materia $materia . Quedate tranqui!</h1>";

echo "<a href='olguin.html' style='
  background-color: #007bff;
  color: #fff;
  border-radius: 2px;
  padding: 0.5rem 1rem;
  font-size: 1rem;
  cursor: pointer;
  transition: background-color 0.2s ease-in-out;
  text-decoration: none;
'>Volver</a> ";
?>


<iframe src="https://giphy.com/embed/tXL4FHPSnVJ0A" width="480" height="317" frameBorder="0" class="giphy-embed" allowFullScreen>