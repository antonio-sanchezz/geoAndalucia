<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
</head>
<body>
    <h1>Panel de Usuario</h1>
    <a href="?controller=usuarios&action=cerrarSesion">Cerrar Sesión</a>
    <?php
        // Puntuacion individual del jugador.
        foreach($puntuacionIndividual as $puntuacion) {
            echo "<p>" . $puntuacion['puntuacion'] . "</p>";
        }
    ?>
    <?php
        // Puntuacion global de todos los usuarios (Ranking).
        foreach($puntuacionGlobal as $puntuacion) {
            echo "<p>Usuario: " . $puntuacion['username'] . " - Puntuación: " . $puntuacion['MAX(puntuacion)'] . "</p>";
        }
    ?>
    <a href="?controller=juego&action=jugar">Jugar</a>
</body>
</html>