<?php

//..controllers/inicio.php

session_start();
if (!isset($_SESSION['logueado'])) {
    header("Location: ../controllers/inicioSesion.php");
    exit;
}

require '../fw/fw.php';
require '../views/InicioSistema.php';

$v = new InicioSistema();
$v->render();
