<?php

session_start();

/**
 * Generamos el formulario que nos permite entrar con nuestro nombre.
 */
function formLogin() {

    // Comprobamos si el usuario tiene ya una sesión iniciada.
    if (isset($_SESSION['username'])) 
    {
        header("Location: ?controller=juego&action=dashBoard");
    } else {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_SESSION['username'] = $_POST['username'];
            header("Location: ?controller=juego&action=dashBoard");
        }
    }
   
    // Se incluye la vista para cargar el formulario
    include './views/loginForm.php';
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