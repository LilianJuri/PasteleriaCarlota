<?php

// controllers/listaproductos.php

session_start();
if (!isset($_SESSION['logueado'])) {
    header("Location: ../controllers/inicioSesion.php");
    exit;
}

require '../fw/fw.php';
require '../models/Productos.php';
require '../views/ListadoProductos.php';

$p = new Productos();
$todos = $p->getTodos();


$v = new ListadoProductos();
$v->productos = $todos;
$v->render();
