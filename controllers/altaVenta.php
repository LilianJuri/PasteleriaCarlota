<?php

//controllers/altaVenta.php

session_start();
if (!isset($_SESSION['logueado'])) {
    header("Location: ../controllers/inicioSesion.php");
    exit;
}

require '../fw/fw.php';
require '../models/Productos.php';
require '../views/FormAltaVentaV.php';
require '../views/AltaVentaOk.php';
require '../models/Ventas.php';

$mdv = new Ventas();
$todos = $mdv->getTodosDetalle();

if (isset($_POST['dia'])) {

    if (!isset($_POST['dia'])) throw new AltaVentaException("dia no ingresado");
    if (!isset($_POST['mes'])) throw new AltaVentaException("mes no ingresado");
    if (!isset($_POST['anio'])) throw new AltaVentaException("anio no ingresado");

    $mv = new Ventas();

    $usuarionombre = $_SESSION['usuario']; //usuario que inicio sesion

    $mv->crearVenta($usuarionombre, $_POST['dia'], $_POST['mes'], $_POST['anio']);

    header("Location: ../controllers/altaDetalleVenta.php");
} else {
    $v = new FormAltaVentaV();
    $v->detalle_venta = $todos;
}

$v->render();

class AltaVentaException extends Exception{}
