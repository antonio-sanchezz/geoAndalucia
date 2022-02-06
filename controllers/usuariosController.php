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

    // Obtenemos el mensaje de error en caso de que exista y lo mostramos.
    if (isset($_GET['error'])) {
        $error = $_GET['error'];
    } else {
        $error = "";
    }

    // Se incluye el modelo.
    require './models/usuariosModel.php';
    
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

    // Obtenemos el mensaje de error en caso de que exista y lo mostramos.
    if (isset($_GET['error'])) {
        $error = $_GET['error'];
    } else {
        $error = "";
    }

    // Se incluye el modelo.
    require './models/usuariosModel.php';
    
    // Se incluye la vista para cargar el formulario
    include './views/registerForm.php';
}


/**
 * Comprobamos que el usuario y la contraseña introducidas coinciden con algún usuario.
 */
function loginCheck() {

    // Comprobamos si el usuario tiene ya una sesión iniciada.
    if (isset($_SESSION['username'])) 
    {
        header("Location: ?controller=juego&action=dashBoard");
    } else {
        header("Location: ?controller=usuarios&action=formLogin");
    }

    // Se incluye el modelo.
    require './models/usuariosModel.php';

    if (login($_POST['username'], $_POST['password'])) {
        $_SESSION['username'] = getUser($_POST['username'])['username'];
        $_SESSION['userId'] = getUser($_POST['username'])['id'];          
        header("Location: ?controller=juego&action=dashBoard");
    } else {
        // Mensaje de error si la contraseña o usuario son erroneas.
        $error = "El usuario o la contraseña no coinciden";
        header("Location: ?controller=usuarios&action=formLogin&error=$error");
    }
    
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