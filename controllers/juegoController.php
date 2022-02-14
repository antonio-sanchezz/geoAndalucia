<?php

session_start();

function dashBoard()
{

  // Se incluye el modelo.
  require './models/juegoModel.php';

  $puntuacionIndividual = obtenerPuntuacionesJugador($_SESSION['userId']);
  $puntuacionGlobal = obtenerPuntuacionesGlobal();

  // Se incluye la vista para cargar el panel.
  include './views/juegoDashboard.php';
}

function jugar()
{

  // Se incluye el modelo.
  require './models/juegoModel.php';

  if (isset($_SESSION['localizaciones'])) {
  } else {
    if (!$_SESSION['puntuacion']) {
      $_SESSION['puntuacion'] = 0;
    }

    // SE SOLICITAN LOS IDS AL MODELO 
    $cantidadDeUbicaciones = obtenerLocalizaciones();
    // Y POSTERIORMENTE SE SELECCIONAN 5 ALEATORIAS PARA GUARDARLAS EN UNA VARIABLE DE SESION;
    $localizaciones = [];
    for ($i = 0; $i < 5; $i++) {
      $numeroRandom = mt_rand(1, $cantidadDeUbicaciones);
      // Comprobamos que el número aleatorio no esté ya contenido en el array, para que no nos devuelva dos localizaciones iguales:
      if (in_array($numeroRandom, $localizaciones, false)) {
        $i--;
      } else {
        $localizaciones[$i]  = $numeroRandom;
      }
    }
    $_SESSION['localizaciones'] = $localizaciones;
    // UNA VEZ LLEGADOS AQUÍ TENEMOS UNA VARIABLE DE SESION CON 5 IDS DISTINTOS PARA NUESTRO JUEGO.
  }
  // Se incluye la vista para cargar el juego.
  include './views/juegoPlay.php';
}


/**
 * Función que elimina la primera localización de la variable de sesion localizaciones:
 * 
 */
function nextJuego()
{
  $localizaciones = $_SESSION['localizaciones'];
  array_shift($localizaciones);
  $_SESSION['localizaciones'] = $localizaciones;
  header("?controller=juego&action=jugar");
}




/**
 * Calculamos la distancia y la puntuacion que recibe el jugador una vez que ha seleccionado un punto en la ciudad.
 * Lo devolvemos mediante ajax para que aparezca en la pantalla a que ditancia estaba y la puntuación que va a recibir.
 */
function calcularDistancia()
{

  $coordendasMarcadas = $_POST['coordendas'];
  $id = $_POST['idUbicacion'];

  // Calculo de distancia entre los puntos.

  $puntoMonumentoActual = obtenerLocalizacion($id)['pxCoords'];
  $puntoMonumentoActual = explode(",", $puntoMonumentoActual);
  $coordendasMarcadas = explode(",", $coordendasMarcadas);

  $totalDistancia = sqrt(($puntoMonumentoActual[0] - $coordendasMarcadas[0]) + ($puntoMonumentoActual[1] - $coordendasMarcadas[1]));

  // Asignación de puntos dependiendo de la distancia a la que esté.
  $totalPuntos = $totalDistancia * 1;

  $_SESSION['puntuacion'] += $totalPuntos;
}
