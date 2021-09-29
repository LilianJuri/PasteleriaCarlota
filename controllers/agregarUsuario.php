<?php

//controllers/agregarUsuario.php
session_start();
if (!isset($_SESSION['logueado'])) {
    header("Location: ../controllers/inicioSesion.php");
    exit;
}

require '../fw/fw.php';
require '../models/Usuarios.php';
require '../views/FormAltaUsuario.php';
require '../views/AltaUsuarioOK.php';


if (isset($_POST['tipo-usuario'])) {

    if (!isset($_POST['nombre-usuario'])) throw new AgregarUsuarioException("No se ingreso nombre de usuario");
    if (!isset($_POST['contrasenia'])) throw new AgregarUsuarioException("No se ingreso contrasenia");

    if (!($_POST['tipo-usuario'] == "admin" || $_POST['tipo-usuario'] == "comun")) throw new AgregarUsuarioException("nombre de tipo equivocado");

    $mu = new Usuarios();

    $usuarioaux = $_POST['nombre-usuario'];

    if ($mu->existeUsuario($usuarioaux)) throw new AgregarUsuarioException("El usuario ingresado ya existe");

    $mu->crearUsuario($_POST['tipo-usuario'], $_POST['nombre-usuario'], $_POST['contrasenia']);

    $v = new AltaUsuarioOK();
} else {
    $v = new FormAltaUsuario();
}


$v->render();

class AgregarUsuarioException extends Exception{}
