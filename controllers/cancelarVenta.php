<?php

//controllers/cancelarVenta.php

session_start();
if (!isset($_SESSION['logueado'])) {
    header("Location: ../controllers/inicioSesion.php");
    exit;
}

require '../fw/fw.php';
require '../views/cancelarVentaOK.php';
require '../models/Ventas.php';

$mv = new Ventas();

$mv->eliminarVentaActual();

$v = new cancelarVentaOK();

$v->render();
