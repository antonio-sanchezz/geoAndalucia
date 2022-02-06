<?php

session_start();

function dashBoard() {

    // Se incluye el modelo.
    require './models/juegoModel.php';

    $puntuacionIndividual = obtenerPuntuacionesJugador($_SESSION['userId']);
    $puntuacionGlobal = obtenerPuntuacionesGlobal();

    // Se incluye la vista para cargar el panel.
    include './views/juegoDashboard.php';
}

?>


