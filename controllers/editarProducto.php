<?php

//controllers/editarProducto.php
session_start();
if (!isset($_SESSION['logueado'])) {
    header("Location: ../controllers/inicioSesion.php");
    exit;
}

require '../fw/fw.php';
require '../models/Productos.php';  
require '../models/Categorias.php'; 
require '../views/FormEditarProducto.php'; 
require '../views/EditarProductoOk.php'; 

$m = new Categorias();
$mp = new Productos();

if (isset($_POST['categoria'])) {

    $mp = new Productos();

    if (!isset($_POST['nombre-producto'])) throw new EditarProductoException("No se ingreso nombre del producto");
    if (!isset($_POST['cantidad'])) throw new EditarProductoException("No se ingreso cantidad del producto");
    if (!isset($_POST['precio'])) throw new EditarProductoException("No se ingreso precio del producto");

    $mp->editarProducto($_POST['productoid'],$_POST['nombre-producto'],$_POST['categoria'], $_POST['cantidad'], $_POST['precio']);

    $v = new EditarProductoOk();
} else {
    
    $v = new FormEditarProducto();
    $v->categorias = $m->getTodos();
    $v->productos = $mp->getTodos();
}


$v->render();

class EditarProductoException extends Exception{}