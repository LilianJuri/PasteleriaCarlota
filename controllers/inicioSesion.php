<?php

//..controllers/inicioSesion.php

require '../fw/fw.php';
require '../views/FormInicioSesion.php';
require '../models/Usuarios.php';

session_start();

$v = new FormInicioSesion();

if (isset($_POST['usuario'])) {

    if (!isset($_POST['usuario'])) throw new InicioSesionException("error ingrese su usuario");
    if (!isset($_POST['passwd'])) throw new InicioSesionException("error ingrese su contraseña");

    if ((new Usuarios)->validarInicioSesion($_POST['usuario'], $_POST['passwd'])) {

        $_SESSION['logueado'] = true;

        // usuario para los roles en la sesion
        $_SESSION['usuario'] = $_POST['usuario'];

        header("Location: ../controllers/inicio.php");

        exit;
    }
    //aca pongo una vista error usuario contraseña?
    die("error usuario y contrasenia");
}


$v->render();

class InicioSesionException extends Exception{}

