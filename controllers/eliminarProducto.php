<?php

//controllers/eliminarProducto.php

session_start();
if (!isset($_SESSION['logueado'])) {
    header("Location: ../controllers/inicioSesion.php");
    exit;
}

require '../fw/fw.php';
require '../views/eliminarProductoOK.php';
require '../models/Productos.php';
require '../views/FormEliminarProducto.php';


$p = new Productos();

if (isset($_POST['eproducto'])) {


    $mp = new Productos();

    $productoeliminar = $_POST['eproducto'];

    $mp->eliminarProductoActual($productoeliminar);

    $v = new eliminarProductoOK();
} else {
    $v = new FormEliminarProducto();
    $v->productos = $p->getTodos();
}

$v->render();
