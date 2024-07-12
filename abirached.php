<?php
session_start();

// Verificar si el array de bandas ya está en la sesión
if (!isset($_SESSION['bandas'])) {
    $_SESSION['bandas'] = [];
}

// Agregar la nueva banda al array
if (isset($_POST['banda'])) {
    $banda = htmlspecialchars($_POST['banda']); // Sanitizar la entrada
    $_SESSION['bandas'][] = $banda;
}

// Mostrar todas las bandas
echo "<h1>Bandas Favoritas:</h1>";
echo "<ul>";
foreach ($_SESSION['bandas'] as $banda) {
    echo "<li>" . $banda . "</li>";
}
echo "</ul>";
?>
