<?php

    function getConnection() {
        $user = 'developer';
        $pwd = 'developer';
        return new PDO('mysql:host=localhost;dbname=geoandalucia', $user, $pwd);
    }

    /**
     * Obtenemos todas las puntuaciones del jugador.
     */
    function obtenerPuntuacionesJugador($idUsuario) {
        try {

            $db = getConnection();
            $sqlQuery = "SELECT * FROM puntuaciones WHERE idUsuario = ?";
            $stmt = $db->prepare($sqlQuery);
            $stmt->bindParam(1, $idUsuario);

            $stmt->execute();

            $puntuaciones = $stmt->fetchAll();

        } catch (PDOException $e) {
            $e->getMessage();
        }

        $stmt = null;

        return $puntuaciones;
    }

    /**
     * Obtenemos todas las puntuaciones de los usuarios de manera única y ordenado de mayor a menor.
     */
    function obtenerPuntuacionesGlobal() {
        try {

            $db = getConnection();
            $sqlQuery = "SELECT username, idUsuario, MAX(puntuacion) FROM puntuaciones AS punt INNER JOIN usuarios AS user WHERE user.id = punt.idUsuario GROUP BY idUsuario";
            $stmt = $db->query($sqlQuery);
            $puntuaciones = $stmt->fetchAll();

        } catch (PDOException $e) {
            $e->getMessage();
        }

        $stmt = null;

        return $puntuaciones;

    }

    /**
     * Obtenemos 5 localizaciones aleatoriamente para iniciar el juego.
     */
    function obtenerLocalizaciones() {

    }

?>