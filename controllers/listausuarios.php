<?php
// controllers/listausuarios.php

require '../fw/fw.php';
require '../models/Usuarios.php';
require '../views/ListadoUsuarios.php';
require '../views/UsuarioDenegado.php';


session_start();
if (!isset($_SESSION['logueado'])) {
    header("Location: ../controllers/inicioSesion.php");
    exit;
}

if (!(new Usuarios)->validarAccesoUsuario($_SESSION['usuario'])) {
    $v = new UsuarioDenegado();
    $v->render();
    exit;
}


$u = new Usuarios();
$usuarios = $u->getTodos();

$v = new ListadoUsuarios();
$v->usuarios = $usuarios;
$v->render();
