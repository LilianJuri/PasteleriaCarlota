<?php

//controllers/eliminarUsuario.php

session_start();
if (!isset($_SESSION['logueado'])) {
    header("Location: ../controllers/inicioSesion.php");
    exit;
}

require '../fw/fw.php';
require '../views/eliminarUsuarioOK.php';
require '../models/Usuarios.php';
require '../views/FormEliminarUsuario.php';


$p = new Usuarios();

if (isset($_POST['eusuario'])) {


    $mu = new Usuarios();

    $usuarioeliminar = $_POST['eusuario'];

    $mu->eliminarUsuarioActual($usuarioeliminar);

    $v = new eliminarUsuarioOK();
} else {
    $v = new FormEliminarUsuario();
    $v->usuarios = $p->getTodos();
}

$v->render();
