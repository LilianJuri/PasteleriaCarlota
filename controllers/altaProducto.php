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

    if (!isset($_POST['nombre-producto'])) die("error validacion 2");
    if (!isset($_POST['cantidad'])) die("error validacion 3");
    if (!isset($_POST['precio'])) die("error validacion 4");

    $mp = new Productos();

    $productoaux = $_POST['nombre-producto'];

    if ($mp->existeProducto($productoaux)) die('error exite el producto');

    $mp->crearProducto($_POST['categoria'], $_POST['nombre-producto'], $_POST['cantidad'], $_POST['precio']);

    $v = new AltaProductoOk();
} else {
    $v = new FormAltaProducto();
    $v->categorias = $m->getTodos();
}


$v->render();
