<?php

function formLogin() {
    session_start();
    if (isset($_SESSION['usuario'])) {
        header("Location: ?");
    }

    // Se incluye el modelo.
    require './models/usuariosModel.php';
    
    // Se incluye la vista para cargar el formulario
    include './views/loginForm.php';
}

function loginCheck() {

    session_start();
    if (isset($_SESSION['username'])) {
        header("Location: ?");
    }

    // Se incluye el modelo.
    require './models/usuariosModel.php';

    // En $checkLogin obtenemos si el usuario y contraseña es correcto.
    $checkLogin = login($_POST['username'], $_POST['password']);

    if ($checkLogin) {
        $_SESSION['username'] = getUser($_POST['username'])['username'];          

    } else {
        header("Location: ?controller=usuarios&action=formLogin");
    }
    
}

function cerrarSesion() {
    session_start();

    if (isset($_SESSION['username'])) {
        session_unset();
        session_destroy();
    }
    header("Location: ?controller=usuarios&action=formLogin");
}

?>