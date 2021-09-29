<?php

//controllers/altaDetalleVenta.php

session_start();
if (!isset($_SESSION['logueado'])) {
    header("Location: ../controllers/inicioSesion.php");
    exit;
}

require '../fw/fw.php';
require '../models/Productos.php';
require '../views/FormAltaVentaDV.php';
require '../models/Ventas.php';
require '../views/AltaVentaOk.php';

$mdv = new Productos();
$todos = $mdv->getTodos();


if (isset($_POST['producto'])) {

    if (!isset($_POST['cantidad'])) throw new AltaDetalleVentaException("cantidad no ingresada");
    if (!isset($_POST['producto'])) throw new AltaDetalleVentaException("producto no ingresada");

    $md = new Ventas();
    $mp = new Productos();

    $productoid = $_POST['producto'];

    $ventaid = $md->ultimoIDVenta();

    $preciop = $mp->precioProducto($_POST['producto']);

    $stockdisponible = $mp->stockProducto($_POST['producto']);

    if (($_POST['cantidad']) > $stockdisponible) throw new AltaDetalleVentaException("stock insuficiente");

    $md->crearDetalleVenta($productoid, $ventaid, $preciop, $_POST['cantidad']);

    $v = new AltaVentaOk();
} else {
    $v = new FormAltaVentaDV();
    $v->productos = $todos;
}

$v->render();

class AltaDetalleVentaException extends Exception{}

?>