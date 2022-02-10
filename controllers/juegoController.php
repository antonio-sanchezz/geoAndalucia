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

function jugar() {

    // Se incluye el modelo.
    require './models/juegoModel.php';

    // SE SOLICITAN LOS IDS AL MODELO 
    $cantidadDeUbicaciones = obtenerLocalizaciones();
    // Y POSTERIORMENTE SE SELECCIONAN 5 ALEATORIAS PARA GUARDARLAS EN UNA VARIABLE DE SESION;
    $localizaciones = [];
    for ($i=0; $i < 5; $i++) { 
      $localizaciones[$i] = mt_rand(1, $cantidadDeUbicaciones);
    }
    $_SESSION['localizaciones'] = $localizaciones;
    // UNA VEZ LLEGADOS AQUÍ TENEMOS UNA VARIABLE DE SESION CON 5 IDS DISTINTOS PARA NUESTRO JUEGO.
    
    // Se incluye la vista para cargar el juego.
    include './views/juegoPlay.php';
}



?>


