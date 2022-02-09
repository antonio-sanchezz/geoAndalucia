<?php

    function getConnection() {
        $user = 'developer';
        $pwd = 'developer';
        return new PDO('mysql:host=localhost;dbname=geoandalucia', $user, $pwd);
    }

    /*
    * Obtenemos todos los datos del usuario solicitado.
    */
    function getUser($username) {
        try {

            $db = getConnection();
            $sqlQuery = "SELECT * FROM usuarios WHERE username = ?";
            $stmt = $db->prepare($sqlQuery);
            $stmt->bindParam(1, $username);

            $stmt->execute();

            $user = $stmt->fetch();

        } catch (PDOException $e) {
            $e->getMessage();
        }

        $stmt = null;

        return $user;
    }

    /*
    * Comprobamos que el usuario y la contraseña coinciden.
    */
    function login($username, $password) {

        $result = false;
        $user = getUser($username);

        if ($user) {
            // Realizamos la verificacion de la contraseña con el usuario.
            $result = password_verify($password, $user['password']);
        }      

        return $result;
    }

    function register($username, $password) {

        $result = false;
        $user = getUser($username);

        if ($user) {

        }

        return $result;

    }
?>
