<?php

session_start();

/**
 * Generamos el formulario que nos permite iniciar sesión.
 */
function formLogin() {

    // Comprobamos si el usuario tiene ya una sesión iniciada.
    if (isset($_SESSION['username'])) 
    {
        header("Location: ?controller=juego&action=dashBoard");
    }

    // Se incluye el modelo.
    require './models/usuariosModel.php';

    $error = "";

    // Comprobamos el usuario y la contraseña son correctos.
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        if (login($_POST['username'], $_POST['password'])) {
            $_SESSION['username'] = getUser($_POST['username'])['username'];
            $_SESSION['userId'] = getUser($_POST['username'])['id'];          
            header("Location: ?controller=juego&action=dashBoard");
        } else {
            // Mensaje de error si la contraseña o usuario son erroneas.
            $error = "El usuario o la contraseña no coinciden";
        }
    }
    
    // Se incluye la vista para cargar el formulario
    include './views/loginForm.php';
}

/**
 * Generamos el formulario que nos permite registrarnos.
 */
function formRegister() {

    // Comprobamos si el usuario tiene ya una sesión iniciada.
    if (isset($_SESSION['username'])) 
    {
        header("Location: ?controller=juego&action=dashBoard");
    }

    // Se incluye el modelo.
    require './models/usuariosModel.php';

    $error = "";

    // Registramos al usuario en caso de que no exista.
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        if (register($_POST['username'], $_POST['password'])) {
            $_SESSION['username'] = getUser($_POST['username'])['username'];
            $_SESSION['userId'] = getUser($_POST['username'])['id'];          
            header("Location: ?controller=juego&action=dashBoard");
        } else {
            // Mensaje de error si la contraseña o usuario son erroneas.
            $error = "El usuario ya existe";
        }
    }
    
    // Se incluye la vista para cargar el formulario
    include './views/registerForm.php';
}

/**
 * Cerramos la sesión del usuario, en caso de que esté activa.
 */
function cerrarSesion() {

    if (isset($_SESSION['username'])) 
    {
        session_unset();
        session_destroy();
    }
    header("Location: ?controller=usuarios&action=formLogin");
}

?>