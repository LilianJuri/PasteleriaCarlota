<?php

//controllers/altaProducto.php
session_start();
if (!isset($_SESSION['logueado'])) {
    header("Location: ../controllers/inicioSesion.php");
    exit;
}

require '../fw/fw.php';
require '../models/Productos.php';
require '../models/Categorias.php';
require '../views/FormAltaProducto.php';
require '../views/AltaProductoOk.php';

$m = new Categorias();

if (isset($_POST['categoria'])) {

    if (!isset($_POST['nombre-producto'])) throw new AltaProductoException("No se ingreso nombre del producto");
    if (!isset($_POST['cantidad'])) throw new AltaProductoException("No se ingreso cantidad del producto");
    if (!isset($_POST['precio'])) throw new AltaProductoException("No se ingreso precio del producto");

    $mp = new Productos();

    $productoaux = $_POST['nombre-producto'];

    if ($mp->existeProducto($productoaux)) throw new AltaProductoException("error exite el producto");
    

    $mp->crearProducto($_POST['categoria'], $_POST['nombre-producto'], $_POST['cantidad'], $_POST['precio']);

    $v = new AltaProductoOk();
} else {
    $v = new FormAltaProducto();
    $v->categorias = $m->getTodos();
}

$v->render();

class AltaProductoException extends Exception{}

?>
