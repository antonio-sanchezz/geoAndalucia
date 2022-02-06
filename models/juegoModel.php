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
            $sqlQuery = "SELECT DISTINCT(idUsuario), puntuacion FROM puntuaciones ORDER BY puntuacion DESC";
            $stmt = $db->query($sqlQuery);
            $puntuaciones = $stmt->fetchAll();

        } catch (PDOException $e) {
            $e->getMessage();
        }

        $stmt = null;

        return $puntuaciones;

    }

?>