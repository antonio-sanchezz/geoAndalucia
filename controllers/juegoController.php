<?php

session_start();

function dashBoard()
{

  // Se incluye el modelo.
  require './models/juegoModel.php';

  $puntuacionIndividual = obtenerPuntuacionesJugador($_SESSION['username']);
  $puntuacionGlobal = obtenerPuntuacionesGlobal();

  // Se incluye la vista para cargar el panel.
  include './views/juegoDashboard.php';
}

function jugar()
{

  // Se incluye el modelo.
  require './models/juegoModel.php';

  if (isset($_SESSION['localizaciones'])) {
    if ($_SESSION['localizaciones'] == []) {
      header("Location: ?controller=juego&action=terminar");
    }
  } else {
    if (!isset($_SESSION['puntuacion'])) {
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
  $datosLugar = obtenerLocalizacion($_SESSION['localizaciones'][0]);
  // Se incluye la vista para cargar el juego.
  include './views/juegoPlay.php';
}


/**
 * Función que elimina la primera localización de la variable de sesion localizaciones.
 * 
 */
function nextJuego()
{
  $localizaciones = $_SESSION['localizaciones'];
  array_shift($localizaciones);
  $_SESSION['localizaciones'] = $localizaciones;
  header("Location: ?controller=juego&action=jugar");
}




/**
 * Calculamos la distancia y la puntuacion que recibe el jugador una vez que ha seleccionado un punto en la ciudad.
 * Lo devolvemos mediante ajax para que aparezca en la pantalla a que ditancia estaba y la puntuación que va a recibir.
 */
function calcularDistancia()
{

  // Se incluye el modelo.
  require './models/juegoModel.php';

  $coordendasMarcadas = $_POST['coordenadas'];
  $ciudad = $_POST['ciudad'];
  $id = $_SESSION['localizaciones'][0];
  // En el caso de que la ciudad no sea la correcta serán 0 puntos.
  $totalPuntos = 0;

  // Calculo de distancia entre los puntos.
  $monumentoActual = obtenerLocalizacion($id);

  // Coordenadas de ambos puntos.
  $puntoMonumentoActual = $monumentoActual[0]['pxCoords'];
  $puntoMonumentoActual = explode(",", $puntoMonumentoActual);
  $coordendasMarcadas = explode(",", $coordendasMarcadas);

  // Distancia total del monumento al punto marcado.
  $totalDistancia = sqrt(($puntoMonumentoActual[0] - $coordendasMarcadas[0]) + ($puntoMonumentoActual[1] - $coordendasMarcadas[1]));

  if (strtoupper($ciudad) == strtoupper($monumentoActual[0]['ciudad'])) {
    // Asignación de puntos dependiendo de la distancia a la que esté.
    $totalPuntos = 5000 - ($totalDistancia * 10);
  }

  // Sumamos al total de la partida los puntos obtenidos.
  $_SESSION['puntuacion'] += round((int)$totalPuntos, 0);

  echo round($totalPuntos, 0);

}

/**
 * Pantalla final del juego.
 */
function terminar() {

  $puntuacion = $_SESSION['puntuacion'];
  unset($_SESSION['puntuacion']);
  unset($_SESSION['localizaciones']);

  // Se incluye la vista para finalizar el juego.
  include './views/juegoFinal.php';
}
