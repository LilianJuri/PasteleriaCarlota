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

    if (!isset($_POST['nombre-usuario'])) die("error validacion 2");
    if (!isset($_POST['contrasenia'])) die("error validacion 3");

    if (!($_POST['tipo-usuario'] == "admin" || $_POST['tipo-usuario'] == "comun")) die("nombre de tipo equivocado");

    $mu = new Usuarios();

    $usuarioaux = $_POST['nombre-usuario'];

    if ($mu->existeUsuario($usuarioaux)) die('error exite el usuario');

    $mu->crearUsuario($_POST['tipo-usuario'], $_POST['nombre-usuario'], $_POST['contrasenia']);

    $v = new AltaUsuarioOK();
} else {
    $v = new FormAltaUsuario();
}


$v->render();
