<?php

    function getConnection() {
        $user = 'developer';
        $pwd = 'developer';
        return new PDO('mysql:host=localhost;dbname=geoandalucia', $user, $pwd);
    }

    /**
     * Obtenemos todas las puntuaciones del jugador.
     */
    function obtenerPuntuacionesJugador($username) {
        try {

            $db = getConnection();
            $sqlQuery = "SELECT * FROM puntuaciones WHERE username = ? ORDER BY puntuacion DESC LIMIT 5";
            $stmt = $db->prepare($sqlQuery);
            $stmt->bindParam(1, $username);

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
            $sqlQuery = "SELECT username, MAX(puntuacion) FROM puntuaciones GROUP BY username LIMIT 5";
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
        $db = getConnection();
        $sqlQuery = "SELECT COUNT(*) FROM ubicaciones";
        $stmt = $db->query($sqlQuery);
        $ubicaciones = $stmt->fetchColumn();
        
        $stmt = null;
        return $ubicaciones;
    }

    /**
     * Metodo que devuelve los datos de una ubiación en función del id que se le ha pasado por parametros.
     */
    function obtenerLocalizacion($idUbicacion){
        try {

            $db = getConnection();
            $sqlQuery = "SELECT * FROM ubicaciones WHERE id = ?";
            $stmt = $db->prepare($sqlQuery);
            $stmt->bindParam(1, $idUbicacion);

            $stmt->execute();

            $ubicacion = $stmt->fetchAll();

        } catch (PDOException $e) {
            $e->getMessage();
        }

        $stmt = null;

        return $ubicacion;
    }

    /**
     * Almacena los puntos obtenidos en la tabla de puntuaciones.
     */
    function guardarPuntos($nombre, $puntuacion) {

        $db = getConnection();
        $sqlQuery = "INSERT INTO puntuaciones (username, puntuacion) VALUE (?,?)";
        $stmt = $db->prepare($sqlQuery);
        $stmt->bindParam(1, $nombre);
        $stmt->bindParam(2, $puntuacion);

        $stmt->execute();

    }

?>